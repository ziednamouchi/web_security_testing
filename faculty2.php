<?php 
include('lock.php');
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty 2</title>
<meta name="keywords" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style>
    #active{
    background-color: yellowgreen;
    border-radius: 100%;
    }
    </style>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="faculty.php">Faculty</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="faculty1.php">Faculty 1</a></li>
			<li><a href="faculty2.php" id="active">Faculty 2</a></li>
			<li><a href="faculty3.php">Faculty 3</a></li>
		</ul>
	</div>
</div>
<div id="wrapper" class="container">
	<div id="page">
		<div id="content"> <img src="images/try.jpg " width="600" height="250" alt="" style="border-radius: 20px"/><br/><br/>
			<h2>Overview</h2>
			<p>With wide knowledge of subject and extreme teaching experience, he is one of the best tutors in the country. With his humrous attitute, he will surely make you fall in love with the subject. </p>   
			<h2>Write a review</h2><br/>
                    <iframe src="comment_f2.php" width="100%" height="80%"></iframe>
		</div>
		<div id="sidebar">
			<div id="sbox1">
				<h2>History</h2>
				<ul class="list-style1">
				<li class="first">
						<h3>P. Hd. in subject.</h3>
						<p>From big university.</p>
					</li>
					<li>
						<h3>HoD of Department</h3>
						<p>At International University
						</p>
					</li>
					<li>
						<h3>Gold Medalist</h3>
						<p>In some subject</p>
					</li>
			</div>
			<div id="sbox2">
				<h2>Books Published</h2>
					<ul class="list-style2">
						<li class="first"><a href="#">ABCDE</a></li>
						<li><a href="#">FGHIJ</a></li>
						<li><a href="#">KLMNO</a></li>
						<li><a href="#">PQRST</a></li>
					</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>
