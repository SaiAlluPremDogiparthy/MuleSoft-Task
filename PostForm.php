<?php  
    session_start();
?>  
<html>  
 <head><title>POST Method in Action</title></head>  
 <body>  
<center>
<form action="post.php" method="post">  
MovieName <input type="text" name="moviename"><br />  
Actor<input type="text" name="actor"><br />  
Actress<input type="text" name="actress"><br /> 
Date<input type="date" name="date"><br />  
Director<input type="text" name="director"><br />  
<input type="submit" value=" Submit Info">  
</form>  
 </body>
 </center>  
</html>  