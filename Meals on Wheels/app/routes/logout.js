var express = require('express')
var router = express.Router();
//var methodOverride = require('method-override');

function nocache(req, res, next) {
    res.header('Cache-Control', 'private, no-cache, no-store, must-revalidate');
    res.header('Expires', '-1');
    res.header('Pragma', 'no-cache');
    next();
}

router.get('/', nocache, function(req, res, next) {
    console.log("Logout route receiving correctly");

    req.session.destroy(function(err) {
        console.log("working");
        //res.setHeader('Cache-Control', 'no-cache, private, no-store, must-revalidate, max-stale=0, post-check=0, pre-check=0');
        //next();
        res.redirect("/login");
    })
});

/*router.get('/logout', function(req, res, next) {
    console.log("working");
   req.session.destroy(function(err) {
      res.redirect("/login");
   })
});*/

module.exports = router;