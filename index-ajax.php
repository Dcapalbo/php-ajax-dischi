<!-- include the php code -->
<?php include "head.php" ?>
  <body>
   <header>
    <!-- header -->
    <div class="header_top">
     <div class="header_wrapper">
       <!-- logo -->
      <i class="fab fa-spotify"></i>
      <select class="select_author" name="">
       <option value="all">Authors</option>
      </select>
     </div>
    </div>
   </header>
   <!-- end header -->
   <main>
    <!-- main -->
    <!-- wrapper -->
    <!-- append handlebars template -->
    <ul class="albums_list">
    </ul>
   <!-- end album cover wrapper -->
   </main>
   <!-- end main -->
  </body>
  <!-- handlebars template -->
  <!-- album template -->
  <script id="album-template" type="text/x-handlebars-template">
   <li class="album_cards" data-author="{{author}}">
    <img src="{{{poster}}}" alt="#">
    <h3>{{title}}</h3>
    <h4>{{author}}</h4>
    <p>{{year}}</p>
   </li>
  </script>
  <!-- end album template -->
  <!-- author selection template -->
  <script id="author_template" type="text/x-handlebars-template">
   <option value="{{author}}">{{author}}</option>
  </script>
  <!-- end handlebars template -->
  <script src="dist/app.js" charset="utf-8"></script>
</html>
