
<?php
include('connexion.php');
$sql = "SELECT * FROM personne"; 
$result = $db->query($sql);


?>








<!DOCTYPE html>
<html>
<head>
	<title>	liste1</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

	<style>
		thead{
			background-color: white;

		}
	
	
	
	.haut2{
		margin-top: 0px;
	}



</style>
<body>

   <div class="">

   </div>

	<div class="container">
	<div class="row">
<div class="col md-16">
<form class="haut2" method="post">
	<h1 class="logo">Liste </h1>
	<div class="table table-responsive">
   
		<table class="table table-border"  border="1" border-color=#747cdf ; align="center"; bgcolor=" #F9F5A5" >
	         <thead>
	          	
				<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>Telephone</th>
				</tr>

			</thead>
	  <?php
	  if ($result->num_rows > 0) {
	  
	  while ($row = $result->fetch_assoc()){
	  
        echo "<tr>";
		        echo "<td>" . $row['nom'] . "</td>";
		        echo "<td>" . $row['prenom'] . "</td>";
		        echo "<td>" . $row['email'] . "</td>";
		        echo "<td>" . $row['telephone'] . "</td>";
        echo "</tr>";

                    }
                          }
        ?>
        	
			
			
		</table>
		
	
		</div>
			
	</form>
</div>
</div>
	</div>

</body>
</html>