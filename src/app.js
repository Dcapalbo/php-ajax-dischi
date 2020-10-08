const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {
  //make an ajax call to GET the key from the API
  $.ajax (
     {
      "url": "http://localhost:8888/php-ajax-dischi/server.php",
      "method": "GET",
      "success": function(albums) {
        //invoke the printData function
        printData(albums);
    },
      "error": function (err) {
       alert("There is an error with the Ajax call. " + err);
     }
  });
  // Functions
  //make a function to print the data of the Api
  function printData(albums) {
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
    $(".albums_list_wrapper").append(html);
  }
 }
});
