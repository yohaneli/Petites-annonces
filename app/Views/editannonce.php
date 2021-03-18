<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Ajouter une annonce</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-12">
            <br><br>
                <h1 class="text-align: center">Modifier une annonce</h1>
                    <br>

                <?php if(isset($validation)):?>

                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                <?php endif;?>

                <?php var_dump($annonce["TitreAnnonce"]); ?>

                <form action="/annonce/editAnnonce/" method="post">

                <div class="mb-3">
                        <select name="categorie">
                            <option value="" >Catégories :</option>

                                <?php if (isset($tabCategories)) {  ?>

                                    <?php  foreach ($tabCategories as $tabCategorie) {
                                        
                                        $categories = $categoriesModel->where('IDCategorie',$annonce['IDCat'])->first();

                                    ?>

                                        <?php if ($annonce['IDCat'] == $categories['IDCategorie']) { ?>

                                        
                            
                            <option selected value="<?php echo $annonce['IDCat'] ; ?>"><?php echo $categories['NomCategorie'] ; ?></option>

                                    <?php } else { ?>

                            <option value="<?php echo $tabCategorie['IDCategorie'] ; ?>"><?php echo $tabCategorie['NomCategorie'] ; ?></option>

                                    <?php } ?>    

                                        <?php } ?> 
                                 
                                <?php } ?>

                        </select>
                            <label>Selectionnez la catégorie de l'annonce</label>
                                <br>
                    </div>

                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Titre de l'annonce</label>
                            <input type="text" name="titre" class="form-control" id="InputForName" value="<?php echo $annonce["TitreAnnonce"] ;?>">
                    </div>

                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Description de l'annonce</label>
                            <input type="text" name="description" class="form-control" id="InputForName" value="<?php echo $annonce["DescriptionAnnonce"] ;?>">
                    </div>


                    <select name="auteur">
                            <option value="" >Auteur :</option>

                                <?php if (isset($tabUsers)) {  ?>

                                    <?php  foreach ($tabUsers as $tabUser) {

                                            $users = $usersModel->where('user_id',$annonce['IDUser'])->first();
                                    ?>

                                        <?php if ($annonce['IDCat'] == $users['user_id']) { ?>

                            <option selected value="<?php echo $annonce['IDCat'] ; ?>"><?php echo $users['user_name'] ; ?></option>

                                    <?php } else { ?>

                            <option value="<?php echo $tabUser['user_id'] ; ?>"><?php echo $tabUser['user_name'] ; ?></option>

                                    <?php } ?>    

                                        <?php } ?> 
                                 
                                <?php } ?>

                        </select>
                            <label>Selectionnez la catégorie de l'annonce</label>
                                <br>

                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Photo de l'annonce</label>
                            <input type="file" name="image" class="form-control" id="InputForName" >
                    </div>

                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Prix de l'annonce</label>
                            <input type="number" name="prix" class="form-control" id="InputForName" value="<?php echo $annonce["PrixAnnonce"] ;?>">
                    </div>

                    <div class="mb-3 text-align: center">
                        <br>
                            <button type="submit" class="btn btn-primary">Publier l'annonce</button>
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