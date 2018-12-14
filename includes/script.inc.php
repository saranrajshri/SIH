<?php

        if (isset($_GET['coursename'])) {
        $coursename= mysql_real_escape_string($_GET['coursename']);
        if(ctype_alnum($coursename)) {
        //
        $check=mysql_query("SELECT * FROM courses WHERE name='$coursename' ");
        if (mysql_num_rows($check)===1) {
        $get= mysql_fetch_assoc($check);
        $coursename=$get['name'];
        }
    else
    {
        header("location:search_error.php");
        exit();
        }
        }
}

?>

