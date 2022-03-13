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
        
			<h3 align="center">Connection</h3>
      <form action="loginController/traitementLogin" method="get">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom Login</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Koto" name="nomLogin">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Mot de Passe</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" name="mdp">
    <label for="exampleFormControlInput1">Nom Login:Marc mdp:marc</label><br>
    <label for="exampleFormControlInput1">Nom Login:Anderson mdp:anderson</label>
  </div>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Confirmer l'identite</button>
</form>
        <script src="<?php echo jquery_url() ?>"></script>
        <script src="<?php  echo bootstrap_js_url()?>"></script>
    </body>
</html>