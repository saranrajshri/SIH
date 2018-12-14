<?php include("./includes/teachers-header.inc.php");?>
<?php
$date=date("d-m-y");
$check_date=date("y-m-d");
$present=@$_POST['present'];
$absent=@$_POST['absent'];
if($present){
    $check=mysql_query("SELECT * FROM attendence WHERE regno='$user' AND a_date='$check_date'");
    $count=mysql_num_rows($check);
    if($count==0){
        $query=mysql_query("INSERT INTO attendence VALUES('','$log_user_name','$user','$date','yes')");
        header("location:teachers-dashboard.php");
    }
}
if($absent){
    $check=mysql_query("SELECT * FROM attendence WHERE regno='$user' AND a_date='$check_date'");
    $count=mysql_num_rows($check);
    if($count==0){
        $query=mysql_query("INSERT INTO attendence VALUES('','$log_user_name','$user','$date','no')");
        header("location:teachers-dashboard.php");
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include("./includes/teachers-breadcrumb.inc.php");?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <?php
                            $check=mysql_query("SELECT * FROM attendence WHERE regno='$user' AND a_date='$date'");
                            $count=mysql_num_rows($check);
                            if($count==0){
                                $class_var="";
                                echo '
                                    <h3 class="text-danger">Today\'s Attendence Not Regsitered</h3>
                                ';
                            }
                            else
                            {
                                $class_var="disabled";
                              echo '
                                    <h3 class="text-success">Today\'s Attendence  Regsitered</h3>
                                ';
                            }
                        ?>
                        <h2>Welcome <?php echo $log_user_name;?>, Register your attendence below!</h2>
                        <small>Today Date : <?php echo date("d-m-y");?></small>
                        <hr>
                        <form action="#" method="post">
                            <input type="submit" name="present" value="Present" class="btn <?php echo $class_var;?>btn-success">
                            or
                            <input type="submit" name="absent" value="Absent" class="btn <?php echo $class_var;?> btn-danger">
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
