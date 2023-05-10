<?php

$server_name = "sql206.epizy.com";
$user_name = 'epiz_34144753';
$user_pass = 'S8rNKHvSjzMD';
$database_name = "epiz_34144753_music_user";

$con = mysqli_connect($server_name, $user_name, $user_pass, $database_name);

if (!$con) {
    die ('Connection Failed' . mysql_error());
} 
// else {
//     echo ('Database Successfully Connected');
// }

?>