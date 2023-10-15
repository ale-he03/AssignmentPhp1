<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD in OOP PHP | Read</title>
	<meta name="description" content="This week we will be using OOP PHP to create our CRUD application">
	<meta name="robots" content="noindex, nofollow">
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/style.css">
	<!-- Latest compiled and minified JavaScript -->
</head>
<body>
	<header>
    <nav class="navbar navbar-dark bg-primary">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </ul>
        </div>
    </nav>
  </header>
<div class="container">
	<div class="row">
		<table class="table">
      <?php
        
        $query = 'SELECT * FROM costumers';
        $result = $database->getData($query);
      ?>
      <!-- add our table headings -->
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Interest</th>
      </tr>
      <!-- now run our loop to display our query -->
      <?php
        foreach($result as $key => $res){
          echo "<tr>";
          echo "<td>".$res['name']. . " " . $res['lname']."</td>";
          echo "<td>".$res['email']."</td>";
          echo "<td>".$res['phone_num']."</td>";
          echo "<td>".$res['interest']."</td>";
          echo "</tr>";
        }
      ?>
		</table>
	</div>
</div>
</body>
</html>
