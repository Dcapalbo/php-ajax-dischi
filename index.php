
<!-- Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi (vedi screenshot). In allegato trovate anche il database fake da utilizzare

 -->
<?php include "src/partials/dp.php" ?>

<html lang="en" dir="ltr">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
   <link rel="stylesheet" href="dist/app.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" charset="utf-8"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment-with-locales.min.js"></script>
   <title>php-ajax-dischi</title>
  </head>
  <body>
   <header>
    <div class="header_top">
     <div class="header_wrapper">
      <i class="fab fa-spotify"></i>>
     </div>
    </div>
   </header>
   <main>
    <div class="main_wrapper">
    <?php if(!empty($album)): ?>
    <?php foreach($albums as $album): ?>
     <div class="album_card">
      <img src="<?php echo $album["poster"] ?>" alt="#">
      <h3><?php echo $album["title"] ?></h3>
      <h4><?php echo $album["author"] ?></h4>
      <p><?php echo $album["year"] ?></p>
      <?php endforeach ?>
      <?php endif ?>
     </div>
    </div>
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
