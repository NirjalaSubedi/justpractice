<?php
$siteName="My Awesome Website";
       function getSiteName(){
           global $siteName;
           echo"$siteName";
       }
getSiteName();
?>