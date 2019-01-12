<?php include("./includes/header.inc.php");?>
<?php include("./includes/subjects-scripts.inc.php");?>
<?php
$submit=@$_POST['submit'];
$course=@$_POST['coursename'];
$semester=@$_POST['semester'];
if($submit){
    header("location:view-subjects.php?subjectname=$course&&semester=$semester&&year=");
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
                            <label>Select Semester:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="semester">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
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
                            <th scope="col">Course Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Semester</th>
                        </thead>
                        <tbody>
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
                                $get=mysql_query("SELECT * FROM subjects WHERE for_which_course='$subjectname' AND semester='$semester'");
                                while($row=mysql_fetch_assoc($get)){
                                    $sub_name=$row['coursename'];
                                    $sub_semester=$row['semester'];

                                    echo '
                                        <tr>
                                            <th>'.$sub_name.'</th>
                                            <th>'.$subjectname.'</th>
                                            <th>'.$sub_semester.'</th>

                                        </tr>
                                    ';
                                }

                            ?>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
