<?php include("./includes/header.inc.php");?>
<?php include("./includes/subjects-scripts.inc.php");?>
<?php
$submit=@$_POST['submit'];
$course=@$_POST['coursename'];
$year=@$_POST['year'];
if($submit){
    header("location:view-classroom.php?subjectname=$course&&year=$year");
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include("./includes/breadcrumb.inc.php");?>

            <!-- table -->
            <div class="row">
                <div class="col-md-12">
                    <!-- QUERY  -->
                    <b>FILTER</b>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <form action="#" method="POST">
                            <label>Select Course :</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="coursename">
                                <?php
                                    $get=mysql_query("SELECT * FROM courses");
                                    while($row=mysql_fetch_assoc($get)){
                                        $name=$row['name'];

                                        echo
                                        '
                                            <option>'.$name.'</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <label>Select Year :</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="year">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col">
                            <br>
                            <input type="submit" name="submit" class="btn btn-danger" value="Filter results"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <hr>
        <table class="table">
             <thead>
                            <th scope="col">Class</th>
                            <th scope="col">Department</th>
                            <th scope="col">Year</th>
                        </thead>
                        <tbody>
                            <?php
                                if (isset($_GET['subjectname'])) {
                                 $subjectname= mysql_real_escape_string($_GET['subjectname']);
                                                        }
                                if (isset($_GET['year'])) {
                                $year= mysql_real_escape_string($_GET['year']);
                                }
                                $get=mysql_query("SELECT * FROM classrooms WHERE department='$subjectname' AND year='$year'");
                                while($row=mysql_fetch_assoc($get)){
                                    $sub_name=$row['name'];
                                    $sub_year=$row['year'];

                                    echo '
                                        <tr>
                                            <th>'.$sub_name.'</th>
                                            <th>'.$subjectname.'</th>
                                            <th>'.$sub_year.'</th>

                                        </tr>
                                    ';
                                }

                            ?>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
