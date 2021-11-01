<?php  
    $host = "127.0.0.1";
$username = "root";
$pass = "";
$con = mysqli_connect($host, $username, $pass, "movieslist");
  
    echo "<ul>";  
    $sql = "select * from movieslist";  
  
    $qury = mysqli_query($con,$sql);  
  
    while($row = mysqli_fetch_array($qury))  
        echo "<li>moviename: $row[0]</li><li>actor: $row[1]</li><li>actress: $row[2]</li><li>date: $row[3]</li><li>director: $row[4]</li> <br/>";  
  
    echo "</ul>";  
?>  