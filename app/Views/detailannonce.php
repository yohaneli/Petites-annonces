<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Infos sur l'annonce <?php echo $annonce['TitreAnnonce'] ; ?></title>
    
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
        <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
        <img src="/images/imagesannonces/<?php echo $annonce['ImageAnnonce'] ; ?>">
          
        </div>
        <div class="card-content">
          <p><?php echo "Titre : ".$annonce['TitreAnnonce'] ; ?></p>
          <p><?php echo "Description : ".$annonce['DescriptionAnnonce'] ; ?></p>
          <p><?php echo "Prix : ".$annonce['PrixAnnonce']." euros" ; ?></p>
          <p><?php echo "Date : ".$annonce['DateCreationAnnonce'] ; ?></p>
        </div>
       
      </div>
    </div>
  </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>