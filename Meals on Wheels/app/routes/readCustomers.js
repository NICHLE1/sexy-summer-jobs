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
    let stream = fs.createReadStream("csv/client-records.csv");

    let csvStream = csv.fromStream(stream, {
            headers: true
        })
        .on("data", function(data) {
            asyncTasks.push(function(callback) {
                let customerNumber = data["customer_number"];
                let title = data["title"];
                let lastName = data["surname"];
                let firstName = data["first_name"];
                let village = data["village"];
                let streetNumber = data["street_number"];
                let streetName = data["street_name"];
                let suburb = data["area"];
                let townCity = data["town_city"];
                let postcode = data["postcode"];
                let phoneNumber = data["phone"];
                let notes = data["notes"];

                let address = streetNumber + " " + streetName + "," + suburb + "," + townCity + " " + postcode;

                req.app.get('db').query("INSERT INTO `customer` (customerNumber,title,lastName,firstName,village,address,phone_number,status,notes) VALUES (?,?,?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE customerNumber = ?", [customerNumber, title, lastName, firstName, village, address, phoneNumber, 1, notes, customerNumber], function(err, rows, fields) {
                    callback();
                });
            });
        }).on("end", function() {
            async.parallel(asyncTasks, function() {
                console.log("Finished entering customer data.");
            });
        });
});

module.exports = router;