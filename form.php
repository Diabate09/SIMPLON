<?php
include('connexion.php');
if(isset($_POST['envoi'])){
 if(isset($_POST["nom"])&&isset($_POST["prenom"])&&isset($_POST["email"])&&
 	isset($_POST["telephone"])){
 	
 	    $nom= $_POST["nom"];
		$prenom= $_POST["prenom"];
		$email= $_POST["email"];
		$tel= $_POST["telephone"];
		
$sql="INSERT INTO personne(nom,prenom,email,telephone)
		VALUES ('$nom','$prenom','$email','$tel')";
		$result =mysqli_query($db,$sql);
		if($result){
			
			
		}else{
			
		}
				

	}

 else {
 	echo" erreur"; }
 
		


		// if(isset($nom)& isset($prenom)& isset($email)&isset($telephone) ){
		// 	echo "bien";
		// }
		// else {
		// 	echo "erreur";
		// }
		
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>doc3</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<meta 	charset="UTF-8">
	<title>	ins_tion</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style >
	*{
		border:0px;
		font-family: arial;
	}
	body{
		margin: 0px;
		padding: 0px;
		background-color: #F9F5A5;
		left:  50%;
		top: 50%;
		font-weight: bold;
	
	}
	form{
		background-color: white;
		padding: 10px;
		border-radius: 5%;
		width: 30%;
		margin-left: 30%;
		margin-top: 20px;
	

	}
	img{
		width: 15px;
		height: 15px;
	}
	a{
		color: white;
		text-decoration: none;
	}
	form h1{
		font-style: 15px;
	}
	form .separation{
     width: 100%;
     height: 1px;
     background-color:#747cdf; 
	}
    form .corps .groupe{
    	display: flex;
    	margin-top: 10px;
    	flex-direction: column;
		align-items: center;
    }
	form .corps{

		display: flex;
		flex-wrap: wrap;
		margin-bottom: 20px;
		margin-top: 20px;
	}
	form .corps .droite .groupe input{
    margin-top: 5px;
    padding: 5px 5px ;
    outline-color: #747cdf;
    border: 1px solid #F9F5A5;
    border-radius: 5px;
  
	}
	form .corps .gauche input{
		margin-top: 5px;
    padding: 5px 5px ;
	outline-color: #747cdf;
    border: 1px solid #F9F5A5;
    border-radius: 5px;


	}
	form .corps .gauche   {
	margin-left: 35px;
	}
	
	
	 form .envoi button{
		margin-top: 10px;
		background-color: #747cdf;
		border-top:1px solid black;
		border-radius: 5px;
		height: 25px;
		color: white;
		font-size: 15px;
		cursor: pointer;

			}
	 form .envoi button :hover{
		transform: scale(1,05);
		color: black;

			}

	header li:hover .derou{
	display: block;
	padding: 10px;
	background-color: white;
}

a{
		text-decoration: none;
		margin-right: 10px;
		border:2px solid white;
		padding: 10px;
		border-radius: 15px;
		background-color: white;
		color: black;

	}
	a:hover{
		background-color: transparent;
		border-color: #747cdf;

	}
	ul{
		list-style: none;
		display: flex;
		margin: 20px;
		padding: 10px;

	}
	.navig{
		width: 100%;
		height: 90px;
		background-color: #F9F5A5;
	}
	.navig h1{
		
		color: #747cdf;
        text-transform: uppercase;
        font-weight: bold;
        float: left;
        font-family: cursive;
	}
	
	
</style>
<body>

    <form method="POST" action="">
	     <div class="entete" ><h1>Enregistrement </h1></div>
	     <div class="separation"></div>
	     <div class="corps">
	     	
	        <div class="droite">
	     	<div class="groupe">
	     		<label for="nom">Votre Nom:</label>
	     		<a href="#nom"><div class="img"><img src="asset/image4.png" ></div></a>
	     		<input type="text" name="nom" id="nom"  >
	     	    </div>
	     	<div class="groupe">
	     		<label for="prenom">Votre Prenom</label>
	     		<a href="#prenom"><div class="img"><img src="asset/image4.png" ></div></a>
	     		<input type="text" name="prenom" id="prenom" >
	     	</div>
	     	 
	     	 
	     </div>
	     <div class="gauche"stykle="">
		
	  
	     	<div class="groupe">
	     		<label for="email">Votre Adress email:</label>
	     		<a href="#email"><div class="img"><img src="asset/image1.jpg" ></div></a>
	     		<input type="text" name="email" id="email" >
	     	    </div>
	     	<div class="groupe">
	     		<label for="telephone">Votre Telephone:</label>
	     		<a href="#telephone"><div class="img"><img src="asset/image3.jpg"></div></a>
	     		<input type="text" name="telephone"id="telephone" >
	     	   </div>
	    
	     </div>
	   </div>

	 <div class="envoi" style="text-align:center" >
	<a href=""><input type="submit" name="envoi" value="Valider" class=""></a>
	<a href="listForm.php"><input type="button" name="" value="Voir Liste" class=""></a>


	 </div>
	
    </form>
</body>
</html>


