<?php session_start();?>
<html>
<center><h1><strong>My Submissions</strong></h1></center>
<center><a href="index.php"><b><h2>Home</h2></a></b></center>

<style>
th, td {
    border: 1px solid black;
    padding:  5px 75px 5px 75px;
}
</style>

<?php
     $name = $_SESSION['userName'];
     include('connectdb.php');

		$query = "select * from submitteddata where userName = '$name' order by ID desc";
		$result = mysql_query($query, $link) or die("Cannot Retrive From Table");

		$num_rows = mysql_num_rows($result);
		echo "<table><tr><th>ID</th><th>When</th><th>Who</th><th>Problem</th><th>Language</th><th>Verdict</th></tr>";

		while ($num_rows >0) {
			$row = mysql_fetch_row($result);
			echo "<tr><td>".$row['0']."</td><td>".$row['1']."</td><td>".$row['2']."</td><td>".$row['3']."</td><td>".$row['4']."</td><td>".$row['5']."</td></tr>";
			$num_rows--;

		}
		echo "</table>";
		mysql_close();

?>
</html>