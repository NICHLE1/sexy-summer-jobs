var express = require('express');
var fs = require("fs");
var csv = require("fast-csv");
var async = require("async");
var router = express.Router();

/* GET settings listing. */
router.get('/', function(req, res, next) {

    // this small block of code checks to see whether a session is active, which means whether the user is authenticated or not
    // if this is not the case, the user will be redirected to the login form, ensuring they are validated before they are allowed access
    var user = req.session.user,
        userId = req.session.userId;
    //console.log('ddd='+userId);
    if (userId == null) {
        res.redirect("/login");
        return;
    }

    let asyncTasks = [];
    let stream = fs.createReadStream("csv/ingredients.csv");

    let csvStream = csv.fromStream(stream, {
            headers: true
        })
        .on("data", function(data) {
            asyncTasks.push(function(callback) {
                let name = data["name"];
                let type = data["type"];
                req.app.get('db').query("INSERT INTO `ingredient` (name,type) VALUES (?,?) ON DUPLICATE KEY UPDATE name = ?, type = ?", [name, type, name, type], function(err, rows, fields) {
                    callback();
                });
            });
        }).on("end", function() {
            async.parallel(asyncTasks, function() {
                console.log("Finished entering ingredient data.");
            });
        });
});

module.exports = router;