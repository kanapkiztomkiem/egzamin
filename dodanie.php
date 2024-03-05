<?php
$con = mysqli_connect("localhost","root");
mysqli_select_db($con,"ee09");
@$nr=$_POST["nr"];
@$r1=$_POST["r1"];
@$r2=$_POST["r2"];
@$r3=$_POST["r3"];
$tresc="INSERT INTO ratownicy(nrKaretki,ratownik1,ratownik2,ratownik3) VALUES('$nr','$r1','$r2','$r3')";
$zap= mysqli_query($con,$tresc);
echo"Do bazy zostało wysłane zapytanie: ".$tresc;
mysqli_close($con);
?>