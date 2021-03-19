<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Connexion site petites annonces</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-12">
            <br><br>
                <h1 class="text-align: center">Connexion au site de petites annonces</h1>
                <h5>Si vous êtes déjà inscrit, connectez-vous ici !</h5> 
                <br>
                  <a href="<?php echo base_url('register') ; ?>" class="waves-effect waves-light btn-small">S'incrire</a>


                <?php if(session()->getFlashdata('msg')):?>

                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>

                <?php endif;?>

                <form action="/login/auth" method="post">
                    <br>
                    <div class="mb-3">Adresse mail</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>

                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    
                    <br>

                    <div class="mb-3 text-align: center">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>

                    <br><br>

                </form>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>