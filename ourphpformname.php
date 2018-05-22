<!DOCTYPE html>
<html>
<head>
<style>
      body
      {
          background-color: white;
      }
      footer
      {
          background-color: #ff8000;
          color: black;
          text-align: center;
          font-family: Verdana;
      }
      h1
      {
          background-color: #ff8000;
          color: black;
          text-align: center;
          font-family: Verdana;
          font-size: 300%;
      }
      h2
      {
          background-color: #ff8000;
          color: black;
          text-align: center;
          font-family: Verdana;
          font-size: 200%;
      }
      p{
          font: Arial;
          text-align: center;
          font-size: 15px;
      }

    ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
          position: fixed;
          top: 0;
          width: 100%;
      }

      li {
          float: left;
      }

          li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
          }

              li a:hover:not(.active) {
                  background-color: #111;
              }

      .active {
          background-color: #ff8000;
      }
    </style>
</head>
<body>
    <h1>
        <br />
        <img src="http://www.max983fm.com/wp-content/uploads/2017/08/Logo.png" alt="Fantasy Logo" ;
             height="150" width="300">
    </h1>

    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a class="active" href="Tens.html">Tens</a></li>
        <li><a href="Picks.html">Picks/Busts</a></li>
        <li><a href="About.html">About</a></li>
    </ul>
<hr>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fantasynow";

	
	$input = $_POST['test'];
	
	if ($input == "qb") {
		
		$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT Rank, FirstName, LastName, Projection FROM quarterbacks";
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "Rank: " . $row["Rank"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Projection: " .$row["Projection"]."<br>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
	}

	if ($input == "rb") {
		
		$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT Rank, FirstName, LastName, Projection FROM rb";
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "Rank: " . $row["Rank"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Projection: " .$row["Projection"]."<br>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
	}

	if ($input == "wr") {
		
		$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT Rank, FirstName, LastName, Projection FROM wr";
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "Rank: " . $row["Rank"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Projection: " .$row["Projection"]."<br>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
	}

?>
<hr>
	<footer>
             Fantasy Now
        </footer>
</body>
</html>