/* 
  $_SERVER = SGB that contains headers, paths, and script lacations.
             The entries in this array are created by the web server.
             shows nearly everyhting youneed to know about the current web page env. 
*/

<?php 
  foreach($_SERVER as $key => $value) {
    echo"". $key ."= ". $value ."<br>";
  }
?>