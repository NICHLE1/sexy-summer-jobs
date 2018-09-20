var request = require("supertest");
var expect = require('chai').expect;
var cheerio = require("cheerio");
var rewire = require('rewire');
var app = rewire('../app');

describe("Meals on Wheels Ingredients", function () {

    // NOTE: that it can take some time for the server to start up, so the default timeout
    // of 2000ms has been overridden throughout to give it a fair chance

    // checks to ensure a new ingredient can be added
    it("Insert a new ingredient", function(done) {

        this.timeout(5000);

        request(app).get("/").expect(200).end(function(err, res) {
          var $ = cheerio.load(res.text);
          var insertedIngredient = $("td").text();
          expect(insertedIngredient).to.contain("Pineapple");
          done();
        });
    });

    // checks to ensure an existing ingredient can be deleted
    it("Delete an existing ingredient", function(done) {

        this.timeout(5000);

        request(app).get("/").expect(200).end(function(err, res) {
        var $ = cheerio.load(res.text);
        var deletedIngredient = $("td").text();
        expect(deletedIngredient).to.not.contain("Pineapple");
        done();
        });
    });

    
});