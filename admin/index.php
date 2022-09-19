<?php 
session_start();
include("../controller/adminController.php");
$ac = new adminController();

// $htt = new ClientModel();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="../css/style-css.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<section>
		<header>
			<section class="header-admin" style="height: auto">
				<article>
					<?php $ac->checkDN() ;?>
				</article>
			</section>
		</header>
	</section>
</body>
</html>