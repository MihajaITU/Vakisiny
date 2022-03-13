
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo bootstrap_url("bootstrap.min") ?>" rel="stylesheet">

        <title>caisse</title>    
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-bottom: 20px; margin-bottom: 20px;">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo site_url('ajoutController') ?>">Ajouter Produit</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Supprimer Produit <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('modifierController') ?>">Modifier Produit</a>
                        </li>
                      </ul>
                      <span class="navbar-text">
                        <a style="float: left;" class="nav-link" href="#">Changer de caisse</a>
                      </span>
                    </div>
                  </nav>   
                </div>   
            </div>
			  <h3>Suppression de Produit</h3>
          
      <div class="form-group">
        
       
        <?php 
       // var_dump($listeProduit);
          foreach($listeProduit as $result)
          {
        ?>
		      	 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <img src="<?php echo image_url($result['image'].'.png')?>" width="30" height="30">  
                          <?php echo $result['nom_produit'] ?>  
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p></p>
                            <footer class="blockquote-footer"><a href="<?php echo site_url('supprimerController/supprimerProduit') ?>/<?php  echo $result['id_produit'] ?>">supprimer: </a> <cite title="Source Title"></cite><p style="float: right;">Prix : <?php echo $result['prix'] ?>  </p></footer>
                          </blockquote>
                        </div>
                    </div>
                    <br>
                   
			 <?php } ?>
		
		  </div>
			
					</div>
            
      </div>
        <script src="<?php echo jquery_url() ?>"></script>
        <script src="<?php  echo bootstrap_js_url()?>"></script>
    </body>
</html>