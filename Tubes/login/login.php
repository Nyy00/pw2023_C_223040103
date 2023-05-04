<!DOCTYPE html>
<html>
<head>
	<title>Login - Aplikasi Kesehatan</title>
	<style type="text/css">
		body {
			background-color: #f1f1f1;
		}
		.container {
			background-color: #fff;
			padding: 20px;
			margin: 50px auto;
		 	max-width: 500px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #bbb;
		}
		h1 {
			text-align: center;
			margin-bottom: 30px;
			color: #333;
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px 0px #bbb;
		}
		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0069d9;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login - Aplikasi Kesehatan</h1>
		<form action="proses_login.php" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username"
