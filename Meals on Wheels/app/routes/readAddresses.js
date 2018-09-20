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
    let stream = fs.createReadStream("csv/dunedin-mosgiel-street-addresses-essential.csv");

    let csvStream = csv.fromStream(stream, {
            headers: true
        })
        .on("data", function(data) {
            if (data["full_address"].includes("Dunedin") == true || data["full_address"].includes("Mosgiel") == true) {
                asyncTasks.push(function(callback) {
                    let address = data["full_address"];
                    let lat = data["shape_Y"];
                    let lng = data["shape_X"];
                    req.app.get('db').query("INSERT INTO `addresses` (address,lat,lng) VALUES (?,?,?) ON DUPLICATE KEY UPDATE address = ?", [address, lat, lng, address], function(err, rows, fields) {
                        callback();
                    });
                });
            }
        }).on("end", function() {
            async.parallel(asyncTasks, function() {
                console.log("Finished entering address data.");
            });
        });
});

module.exports = router;