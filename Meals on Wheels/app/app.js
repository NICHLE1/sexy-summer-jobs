var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var session = require('express-session');
var http = require('http');

var login = require('./routes/login');
var logout = require('./routes/logout');
var index = require('./routes/index');
var customers = require('./routes/customers');
var drivers = require('./routes/drivers');
var routes = require('./routes/routes');
var menu = require('./routes/menu');
var settings = require('./routes/settings');
//var connection = require('./routes/connection');

// SPECIAL SYSTEM ROUTE
var readAddresses = require('./routes/readAddresses');
var readCustomers = require('./routes/readCustomers');
var readDrivers = require('./routes/readDrivers');
var readIngredients = require('./routes/readIngredients');

var db = require('./database/db.js');
var connection = require('./database/connection.js');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');

//database connection
app.set('db',db);
app.set('connection',connection);
// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

//moment.js for time and date formatting
app.locals.moment = require('moment');

app.use(session({
  secret: 'keyboard cat',
  resave: false,
  saveUninitialized: true,
  cookie: { maxAge  : 600000 }
}))

app.use('/', login);
app.use('/logout', logout);
app.use('/index', index);
app.use('/customers', customers);
app.use('/drivers', drivers);
app.use('/routes', routes);
app.use('/menu', menu);
app.use('/settings', settings);
app.use('/readAddresses', readAddresses);
app.use('/readCustomers', readCustomers);
app.use('/readDrivers', readDrivers);
app.use('/readIngredients', readIngredients);
//app.use('/connection', connection);
// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});


module.exports = app;

