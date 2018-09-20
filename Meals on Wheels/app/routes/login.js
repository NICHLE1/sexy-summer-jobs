var express = require('express')
var router = express.Router();
var validator = require('express-validator');
var connection = require('../database/connection');
//console.log(connection);

//var methodOverride = require('method-override');

/*router.use(function(req, res, next) {
  res.set('Cache-Control', 'no-cache, private, no-store, must-revalidate, max-stale=0, post-check=0, pre-check=0');
  next();
});*/

// Default route to render the view if the user goes to no particular page, e.g. 'localhost:3000'
router.get('/', function(req, res, next) {
    var message = '';
    res.render('login', {
        message: message
    });
});

// This route is not essential to solely log in (one may go to 'localhost:3000' and still be greeted with the login page and succesfully login), 
// but all the other .js routes use this route to know where to find the login page.
// Also, if the user visited the 'localhost:3000/login' link, they would be greeted with a 404 error
// The page would still display the login form again even if the user got their username or password incorrect without this particular route
router.get('/login', function(req, res, next) {
    var message = '';
    res.render('login', {
        message: message
    });
});

// This route is used to retrieve the user submitted input from the login.pug form
router.post('/login', function(req, res, next) {
    var message = '';
    var sess = req.session;
    if (req.method == "POST") {
        var post = req.body;
        var name = post.user_name;
        var pass = post.password;
        req.app.get('db').query("SELECT id, user_name FROM `users` WHERE `user_name`='" + name + "' and password = '" + pass + "'", function(err, rows, fields) {
            if (rows.length) {
                req.session.userId = rows[0].id;
                req.session.user = rows[0];
                res.redirect('/index/');
            } else {
                message = 'Wrong Credentials.';
                res.render('login', {
                    message: message
                });
            }

        });
    } else {
        res.render('login', {
            message: message
        });
    }
});
module.exports = router;