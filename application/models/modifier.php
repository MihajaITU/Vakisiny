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
			<h3>Modification de Produit</h3>
            <div class="row" style = "margin-bottom: 70px;">
					   <form action="modifierController/modifierProduit" method="GET">
		  <div class="form-group">
			<label for="exampleInputEmail1">Prix du Produit</label>
			<input  class="form-control" name="prixProduit" aria-describedby="emailHelp">
			<small id="AjoutHelp" class="form-text text-muted">Vous inserer le prix du produit.</small>
		  </div>
		 <div class="form-group">
			<label for="exampleFormControlSelect1">Produit</label>
			<select class="form-control" name="idProduit">
        <?php 
          foreach($listeProduit as $result)
          {
        ?>
			  <option value="<?php echo $result['id_produit']?>"><?php echo $result['nom_produit']?></option>
			  
			 <?php } ?>
			</select>
		  </div>
			<div class="form-group">
			<label for="exampleFormControlSelect1">Categorie</label>
			<select class="form-control" name="categorieProduit">
			  <option value="1">Fruits</option>
			  <option value="2">Legumes</option>
			  <option value="3">Boissons</option>
			 
			</select>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
					</div>
            
      </div>
        <script src="<?php echo jquery_url() ?>"></script>
        <script src="<?php  echo bootstrap_js_url()?>"></script>
    </body>
</html>