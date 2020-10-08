<!-- include the php code -->
<?php include "head.php" ?>
  <body>
   <header>
    <!-- header -->
    <div class="header_top">
     <div class="header_wrapper">
       <!-- logo -->
      <i class="fab fa-spotify"></i>
     </div>
    </div>
   </header>
   <!-- end header -->
   <main>
    <!-- main -->
    <!-- wrapper -->
    <!-- append handlebars template -->
    <ul class="albums_list_wrapper">
     </ul>
   <!-- end album cover wrapper -->
   </main>
   <!-- end main -->
  </body>
  <!-- handlebars template -->
  <script id="album-template" type="text/x-handlebars-template">
   <li class="album_cards">
    <img src="{{{poster}}}" alt="#">
    <h3>{{title}}</h3>
    <h4>{{author}}</h4>
    <p>{{year}}</p>
   </li>
  </script>
  <!-- end handlebars template -->
  <script src="dist/app.js" charset="utf-8"></script>
</html>
