//var express = require('express')
//var router = express.Router();
var mysql = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'meals_admin',
  password : 'P@ssw0rd',
  database : 'mealsonwheels'
});
module.exports = connection;