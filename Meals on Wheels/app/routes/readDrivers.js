var express = require('express');
var fs = require("fs");
var csv = require("fast-csv");
var async = require("async");
var router = express.Router();

/* GET settings listing. */
router.get('/', function(req, res, next) {
    let asyncTasks = [];
    let stream = fs.createReadStream("csv/drivers.csv");

    let csvStream = csv.fromStream(stream, {
            headers: true
        })
        .on("data", function(data) {
            asyncTasks.push(function(callback) {

                let driverNumber = data["driver_number"];
                let lastName = data["last_name"];
                let firstName = data["first_name"];
                let type = data["type"];
                let homePhone = data["home"];
                let mobilePhone = data["mobile"];
                let notes = data["notes"];

                req.app.get('db').query("INSERT INTO `driver` (driverNumber, firstName, lastName, type, home_phone, mobile_phone, status, notes) VALUES (?,?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE driverNumber = ?", [driverNumber, firstName, lastName, type, homePhone, mobilePhone, 1, notes, driverNumber], function(err, rows, fields) {
                    callback();
                });
            });
        }).on("end", function() {
            async.parallel(asyncTasks, function() {
                console.log("Finished entering driver data.");
            });
        });
});

module.exports = router;