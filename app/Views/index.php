<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Accueil Petites annonces</title>

    <!-- BEGIN: SideNav-->
   
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!--Gradient Card-->
                    <div id="cards-extended">
                        
                        <!-- Card With Analytics -->
                        
                        <!--Gradient Chart Card-->

                        <!--Blog Card-->
                        
                        <!--Social Card-->
                        
                        <!--Flat Card With Redio & chips-->
                        <div id="card-with-radio-chips" class="section">
                            <h4 class="header">Listes des catégories</h4>
                                
                                

                                <?php if (isset($tabCategories)) {  ?>

                                    <?php  foreach ($tabCategories as $tabCategorie) {  ?>
                            <div class="row">
                                <div class="col s12 m4">
                                    <div class="card grey darken-1">
                                        <div class="card-content white-text">
                                        <?php //dd($tabCategorie['IDCategorie']); ?>
                                        <a href="<?php echo base_url('home/index/'.$tabCategorie['IDCategorie']) ; ?>" class="card-title"><?php echo $tabCategorie['NomCategorie'] ; ?></a>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>

                                    <?php } ?>

                                <?php } ?>   

                        </div>

                        <div id="card-with-radio-chips" class="section">
                            <h4 class="header">Listes des annonces les plus récentes</h4>
                            <?= $pager->links() ?>
                                    <?php if (isset($tabAnnonces)) {  ?>

                                        <?php  foreach ($tabAnnonces as $tabAnnonce) {  
                                            
                                            $categories = $categoriesModel->where('IDCategorie',$tabAnnonce['IDCat'])->first();

                                            $users = $usersModel->where('user_id',$tabAnnonce['IDUser'])->first();

                                            ?>                                    

                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                        <span class="card-title">Titre de l'annonce : <?php echo $tabAnnonce['TitreAnnonce'] ; ?></span>
                                        <span class="card-title">Catégorie de l'annonce : <?php echo $categories['NomCategorie'] ; ?></span>
                                        <span class="card-title">Description de l'annonce : <?php echo $tabAnnonce['DescriptionAnnonce'] ; ?></span>
                                        <span class="card-title">Auteur de l'annonce : <?php echo $users['user_name'] ; ?></span>
                                        <span class="card-title">Date de publication l'annonce : <?php echo $tabAnnonce['DateCreationAnnonce'] ; ?></span>

                                            <?php if(!empty(session()->get('user_id'))) { ?>

                                        <a href="<?php echo base_url('annonce/deleteAnnonce/'.$tabAnnonce['IDAnnonce']) ; ?>" class="waves-effect waves-light btn-small"><i class="material-icons right">delete</i>Supprimer</a>

                                            <?php } ?>

                                        <a href="<?php echo base_url('annonce/infosAnnonces/'.$tabAnnonce['IDAnnonce']) ; ?>" class="waves-effect waves-light btn-small">Voir plus</a>

                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                                    <?php } ?>

                                        <?php } ?> 

                        </div>

                    </div>
                    
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>