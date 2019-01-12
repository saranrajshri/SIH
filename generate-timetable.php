<?php include("./includes/header.inc.php");?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include("./includes/breadcrumb.inc.php");?>
            <table class="table">
             <thead>
                            <th scope="col">Class</th>
                            <th scope="col">Year</th>
                            <th scope="col">Options (Sem 1)</th>
                            <th scope="col">Options (Sem 2)</th>
                        </thead>
                        <tbody>
                            <?php
                                $get=mysql_query("SELECT * FROM classrooms");
                                while($row=mysql_fetch_assoc($get)){
                                    $sub_name=$row['name'];
                                    $sub_year=$row['year'];
                                    $dep=$row['department'];
                                    echo '
                                        <tr>
                                            <th>'.$sub_name.'</th>
                                            <th>'.$sub_year.'</th>
                                            <th><a href="generate.php?classname='.$sub_name.'&&year='.$sub_year.'&&semester=1&&department='.$dep.'">Generate Timetable(Sem 1)</a></th>
                                            <th><a href="generate.php?classname='.$sub_name.'&&year='.$sub_year.'&&semester=2&&department='.$dep.'">Generate Timetable(Sem 2)</a></th>
                                        </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
