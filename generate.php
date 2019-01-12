<?php include("./includes/header.inc.php");?>
<?php
if(isset($_GET['department'])){
    $department=mysql_real_escape_string($_GET['department']);
}
if(isset($_GET['classname'])){
    $classname=mysql_real_escape_string($_GET['classname']);
}
if(isset($_GET['semester'])){
    $semester=mysql_real_escape_string($_GET['semester']);
}
if(isset($_GET['year'])){
    $year=mysql_real_escape_string($_GET['year']);
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include("./includes/breadcrumb.inc.php");?>
            <!-- GET SUBJECTS -->
            <?php
                $get=mysql_query("SELECT * FROM subjects WHERE for_which_course='$department' AND semester='$semester'");
                $array=array();
                while($row=mysql_fetch_assoc($get)){
                    $subject_name=$row['coursename'];
                    $array[]=$subject_name;
                }
                // print_r($array);
                shuffle($array);
                echo'<br>';
                 //print_r($array);
                $array_length=sizeof($array);
                // echo $array_length
                ?>
            <!-- TABLE -->
            <h2><?php echo $classname;?> - Year (<?php echo $year;?>) - Semester (<?php echo $semester;?>)</h2>
            <table class="table">
                <thead>
                    <?php
                        for($i=1;$i<=$array_length;$i++){
                            echo'
                                <th>'.$i.'</th>
                            ';
                        }
                    ?>
                </thead>
                <tbody>
                    <?php
                    for($i=0;$i<$array_length;$i++){
                    $get=mysql_query("SELECT * FROM teachers WHERE courses='$array[$i]'");
                    $new_array=array();
                    while($row=mysql_fetch_assoc($get)){
                        $staff=$row['name'];
                        $staff_id=$row['id'];
                        $staff_sub=$row['courses'];
                        $get1=mysql_query("SELECT * FROM attendence WHERE regno='$staff_id' AND subject='$staff_sub'");
                        $count=mysql_num_rows($get1);
                        if($count==1){
                        $new_array[]=$staff;
                    }
                }
                    if(sizeof($new_array)==0){
                        echo'<script>
                            alert("Not Enough Teachers Are present");
                        </script>';
                    }
                    else{
                    echo '
                        <th>'.$array[$i].' - '.$new_array[array_rand($new_array)].'</th>
                    ';
                }
            }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
