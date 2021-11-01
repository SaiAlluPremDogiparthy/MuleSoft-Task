<?php  
$host = "127.0.0.1";
$username = "root";
$pass = "";
$con = mysqli_connect($host, $username, $pass, "movieslist");
    #$conn = mysql_connect("localhost","root","");  
    #$db   = mysql_select_db("movieslist",$conn);  
  
    $moviename  = $_POST['moviename'];  
    $actor =    $_POST['actor'];  
    $actress =    $_POST['actress']; 
    $date =    date('Y-m-d',strtotime($_POST['date'])); 
    $director =    $_POST['director']; 
   
  
    $sql     = "INSERT into movieslist values('$moviename','$actor','$actress','$date','$director')";  
    $qury  = mysqli_query($con,$sql);  
  
    if(!$qury)  
        echo mysql_error();  
    else  
    {  
        echo "Successfully Inserted";  
        echo '<br/> <a href="show.php">View Result</a>';  
    }  
?>  