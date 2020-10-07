<?php include "albums.php" ?>
<?php include "head.php" ?>
  <body>
   <header>
    <div class="header_top">
     <div class="header_wrapper">
      <i class="fab fa-spotify"></i>>
     </div>
    </div>
   </header>
   <main>
    <ul class="albums_list_wrapper">
     <li class="album_cards">
      <?php if(empty($album)): ?>
      <?php foreach($albums as $album): ?>
      <img src="<?php echo $album["poster"] ?>" alt="#">
      <h3><?php echo $album["title"] ?></h3>
      <h4><?php echo $album["author"] ?></h4>
      <p><?php echo $album["year"] ?></p>
      <?php endforeach ?>
      <?php endif ?>
     </li>
    </ul>
   </main>
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
