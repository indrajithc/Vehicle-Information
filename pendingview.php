<?php 


session_start();
?><html>
<head>
	<title>Pending View</title>
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">



	<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>
	<?php


	include_once 'connection.php';
	$id=2;
	?>

	
	<!-- Header -->

	<header id="header">

		<div class="inner">

			<a href="index.php" class="logo">Aqua Loom</a>


			<nav id="nav">

				<a href="index.php">Home</a>

				<a href="login.php">logout</a>

				<a href="#####">contact us</a>

			</nav>

		</div>

	</header>

	<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

	
	<!-- Main -->


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Pending Complaint
					</span>
				</div>

				<form method="post" action="">


					<table border="1" width="100%">
						<thead>
							<tr>
								<th>Complaint Id</th>
								<th>Date and Time</th>
								<th>Panchayat</th>
								<th>Category</th>
								<th>Name</th>
								<th>Mobile Number</th>
								<th>Reason for Pending</th>
							</tr>
						</thead>

						<tbody>
							<?php $m="    SELECT * FROM `pending` p LEFT JOIN complaint c ON c.C_Id = p.C_id WHERE p.AE_Id =  " . $_SESSION['id'] ;
							$result=mysqli_query($conn,$m);
							?>



							<?php while( $row=mysqli_fetch_array($result) ) : ?>


								<tr>
									<td><?php echo $row['C_Id']; ?> </td>
									<td> <?php echo $row['Date']; ?></td>
									<td> <?php echo $row['panchayath']; ?></td>
									<td> <?php echo $row['type']; ?></td>
									<td> <?php echo $row['name']; ?></td>
									<td><?php echo $row['Mobile_Number']; ?> </td>
									<td><?php echo $row['Reason']; ?> </td>
									<!-- <td> 
										<a href="unreadview.php?id=<?php echo $row['C_Id']; ?>">view</a> 
									</td> -->
								</tr>

							<?php endwhile; ?>
							<?php ?>
							<?php ?>


						</tbody>
					</table>





				</form>

			</body>
			</html>