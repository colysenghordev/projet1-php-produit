<?php
include'acceuil.php';
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Liste des Produits</div>
        <div class="panel-body">
            <table class="table table-bordered table-striped ">
                <tr>
                   
                    <td>Libelle</td>
                    <td>Prix Unitaire</td>
                    <td>Quantite en Stock</td>
                    <td>Montant total</td>                
                    <td>Action</td>
                </tr>
                <?php
    
$produit= array(
    array('nom'=>'riz' ,'prix'=> '500','quantite'=>'15'),
        array('nom'=>'lait' ,'prix'=> '100','quantite'=> '30'),
        array('nom'=>'sucre' ,'prix'=> '600','quantite'=> '50'),
        array('nom'=>'huil' ,'prix'=> '300','quantite'=> '50'));
for($i=0;$i <count($produit);$i++){
    $nom=$produit[$i]['nom'];
    $prix=$produit[$i]['prix'];
    $qte=$produit[$i]['quantite'];
    $montant=($prix*$qte);
    if($_GET['nom']==$nom){
       $t=$i;//
       $montant=$mnt;
    }
  
 
   
}
//unset($produit[$t]);
//unset($mnt);
array_splice($produit,$t,1);
for($i=0;$i <count($produit);$i++){
    $nom=$produit[$i]['nom'];
    $prix=$produit[$i]['prix'];
    $qte=$produit[$i]['quantite'];
    $montant=($prix*$qte);
    ?>
  
    
    <tr>
   <td> <?php echo $nom;?></td>
   <td> <?php echo $prix;?></td>
   <td> <?php echo $qte;?></td>
    <td><?php echo $montant=($prix*$qte);?></td>
    <?php  echo"<td><a href='supprimerliste.php?nom=$nom&prix=$prix&qte=$qte'>supprimer</a></td>";
        echo"<tr>";
}
?>  
     
                 
         
            </table>
        </div>
    </div>
</div>

</body>
</html>