<?php
include 'project2';
if(isset($_POST['search'])){
    if(!empty($_POST['search'])){
        $safe_value = mysql_real_escape_string($_POST['search']);
        $result = mysql_query("SELECT username FROM users WHERE `username` LIKE %$safe_value%");
        while ($row = mysql_fetch_assoc($result)) { 
        }
    }
}
?>