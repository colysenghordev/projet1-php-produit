<!DOCTYPE html>
<html>
    <head>
        <title>Transmission de données</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="form.css">
    </head>
		<body>
				<form action="accueil.php" method="POST">
	 				<fieldset>
    				<legend>connect-vous</legend>
    		 		<center>
    		 			<p>
    		 				<label>Login</label>
    		 				<input type="text" name="login">
    		 			</p>
    		 			<p>
    		 				<label>password</label>
    		 				<input type="password" name="password">
    		 			</p>
    		 			<p>
    		 		 		<input type="submit" name="ok" value="connexion">
    		 			</p>
    		 		</center>
    				</fieldset>
	 			</form>
				<?php
						extract($_POST);
						$personne[0] = array('login'=>'bass' ,'pwd'=> 'bass','nom'=> 'bass');
						$personne[1] = array('login'=>'coly' ,'pwd'=> 'coly','nom'=> 'coly');
						$personne[1] = array('login'=>'admin' ,'pwd'=> 'admin','nom'=> 'admin');
  							if (isset($_POST['ok'])) {
  									foreach($personne as $p) { 
											if ($login==$p['login'] && $password==$p['pwd']){
    							header("location:acceuil.php");
										}
									else {
   										 echo"le login ou le mot de passe ne correspond pas !";
										}
											}
										}
				?>

		</body>
</html>
		