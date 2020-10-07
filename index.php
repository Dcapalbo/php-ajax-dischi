<!-- include the php code -->
<?php include "albums.php" ?>
<?php include "head.php" ?>
  <body>
   <header>
    <!-- header -->
    <div class="header_top">
     <div class="header_wrapper">
       <!-- logo -->
      <i class="fab fa-spotify"></i>>
     </div>
    </div>
   </header>
   <!-- end header -->
   <main>
    <!-- main -->
    <!-- wrapper -->
    <ul class="albums_list_wrapper">
     <!-- make a control searching for the input data inside of the API -->
     <?php if(empty($album)): ?>
     <!-- make a for each cicle to break on through the API array -->
     <?php foreach($albums as $album): ?>
     <!-- album cover wrapper -->
      <li class="album_cards">
      <!-- album informations -->
      <!-- print the API informations inside the HTML -->
       <img src="<?php echo $album["poster"] ?>" alt="#">
       <h3><?php echo $album["title"] ?></h3>
       <h4><?php echo $album["author"] ?></h4>
       <p><?php echo $album["year"] ?></p>
       <!-- end printing the informations inside the HTML -->
       <?php endforeach ?>
       <?php endif ?>
       <!-- end album informations -->
      </li>
     </ul>
   <!-- end album cover wrapper -->
   </main>
   <!-- end main -->
  <!-- //handlebars template for milestone 2
  <script id="cd-template" type="text/x-handlebars-template">
   <div class="cover_card">
    <h3>{{Title}}</h3>
    <h4>{{Author}}</h4>
    <p>{{Year}}</p>
   </div>
  </script> -->
  <!-- // javascript for milestone 2
  <script src="js/main.js" charset="utf-8"></script> -->
  </body>
</html>
