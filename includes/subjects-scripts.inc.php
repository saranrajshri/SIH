<?php

        if (isset($_GET['subjectname'])) {
        $subjectname= mysql_real_escape_string($_GET['subjectname']);
        }
        if (isset($_GET['year'])) {
        $year= mysql_real_escape_string($_GET['year']);
        }
        if (isset($_GET['semester'])) {
        $semester= mysql_real_escape_string($_GET['semester']);
        }

?>

