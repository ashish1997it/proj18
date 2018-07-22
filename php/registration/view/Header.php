<!DOCTYPE html>
<html>
<head>
<title>Registration</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap-3 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body{
	text-align: center;
}

.wid500{
	margin: 0 auto;
	width: 500px;
}

.fonSiz14{
  font-size: 18px;
}

.table td{
	text-align: left;
}

.styOprnIUSD{
	width: 150px;
}

.btnBack{
  margin-right: 10px !important;
}

div:empty {
  display:none;
}

a, a:hover{
	color: black;
  padding: 10px;
}

</style>
<script>

</script>
</head>
<body>

<?php include_once('../model/config/ProjPath.php'); //echo $projPath.'<br>'; ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CodeMagic</a>
    </div>
	<ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo $projPath.'/view/indexNew.php'; ?>">Home</a></li>
      <li><a href="<?php echo $projPath.'/view/formInsert.php'; ?>">Insert</a></li>
      <li><a href="<?php echo $projPath.'/view/formUpdate.php'; ?>">Update</a></li>
      <li><a href="#">Select</a></li>
      <li><a href="<?php echo $projPath.'/view/formDelete.php'; ?>">Delete</a></li>
	  <li><a href="<?php echo $projPath.'/view/PageSignUp.php'; ?>">SignUp</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/proj18/php/0Demo/HallBook2c/controller/indexNew.php">xyz</a></li>
    </ul>
  </div>
</nav>

<h1>Welcome to CodeMagic</h1>


</body>
</html>