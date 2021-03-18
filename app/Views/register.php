<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>S'inscrire</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-12">
            <br><br>
                <h1 class="text-align: center">S'inscrire</h1>

                <?php if(isset($validation)):?>

                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                <?php endif;?>

                <form action="/register/createUser" method="post">

                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Nom et Prénom</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                    </div>

                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Adresse mail</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>

                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>

                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirmez le mot de passe</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>

                    <div class="mb-3 text-align: center">
                    <br>
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </div>
                    <br>
                </form>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>