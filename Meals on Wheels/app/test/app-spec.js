var request = require("supertest");
var expect = require('chai').expect;
var cheerio = require("cheerio");
var rewire = require('rewire');
var app = rewire('../app');

describe("Meals on Wheels App", function () {

    // NOTE: that it can take some time for the server to start up, so the default timeout
    // of 2000ms has been overridden throughout to give it a fair chance

    // checks to ensure the Home page loads, and that the title matches Meals on Wheels
    it("Loads the Home page", function(done) {

        this.timeout(5000);

        request(app).get("/").expect(200).end(function(err, res) {
          var $ = cheerio.load(res.text);
          var pageTitle = $("title").text();
          expect(pageTitle).to.equal("Meals on Wheels");
          done();
        });
    });

    // checks to ensure the week listed on the Home page does not have the error 'Week NAN', which stands for "Not a Number"
    it("Loads the Home page", function(done) {

        this.timeout(5000);

        request(app).get("/").expect(200).end(function(err, res) {
        var $ = cheerio.load(res.text);
        var pageDate = $("h3:first-child").text();
        expect(pageDate).to.not.contain("Week NAN");
        done();
        });
    });

    
});