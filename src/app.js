const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {

  //make an ajax call to GET the key from the API
  $.ajax (
     {
      "url": "http://localhost:8888/php-ajax-dischi/server.php",
      "method": "GET",
      "success": function(albums) {
        //invoke functions to print the inputs from the API
        printData(albums, "all");
        printAuthors(albums);
    },
      "error": function (err) {
       alert("There is an error with the Ajax call. " + err);
     }
  });
  // Functions
  //make a function to print the data of the Api
  function printData(albums, filter) {
    //Prepare the handlebars template
    var source = $("#album-template").html();
    var template = Handlebars.compile(source);
    //make a "cicle for" to get inside the Json objects
      for (var i = 0; i < albums.length; i++) {
        var context = {
        //find property which are going to be inserted in the HTML placeholders
        "title": albums[i].title,
        "author": albums[i].author,
        "year": albums[i].year,
        "poster": albums[i].poster
      };
    //make an html variable with inside the handlebars context
    var html = template(context);
    //append the HTML inside the DOM
    if (filter == "all") {
      $(".albums_list").append(html);
    } else if (filter == albums[i].author) {
      $(".albums_list").append(html);
    }
  }
 }
  //make a function to print the data of the Api
  function printAuthors(albums) {
    //Prepare the handlebars template
    var source = $("#author_template").html();
    var template = Handlebars.compile(source);
    //make a "cicle for" to get inside the Json objects
     for (var i = 0; i < albums.length; i++) {
       var context = {
       //find property which are going to be inserted in the HTML placeholders
       "author": albums[i].author
       };
       //make an html variable with inside the handlebars context
       var html = template(context);
       //append the HTML inside the DOM
       $(".select_author").append(html);
     }
   }
  $(".select_author").change(function() {
   //make a variable to save the value
   var authorValue = $(this).val();
   resetData();
   $.ajax (
      {
       "url": "http://localhost:8888/php-ajax-dischi/server.php",
       "method": "GET",
       "success": function(albums) {
         //invoke functions to print the inputs from the API
         printData(albums, authorValue);
     },
       "error": function (err) {
        alert("There is an error with the Ajax call. " + err);
      }
   });
  });
    //make a function to reset the DOM
    function resetData() {
      $(".albums_list").html("");
    }
});
