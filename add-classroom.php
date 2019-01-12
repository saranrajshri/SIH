<?php include("./includes/header.inc.php");?>
<?php include("./includes/script.inc.php");?>
<?php
$submit=@$_POST['submit'];
$subjectname=@$_POST['classroomname'];
$semester=@$_POST['year'];
$coursename=@$_POST['department'];
$date=date("y-m-d");
if($submit){
    if($subjectname){
        mysql_query("INSERT INTO classrooms VALUES('','$subjectname','$semester','$coursename')");
        mysql_query("INSERT INTO class_periods VALUES('','$subjectname','$date','','','','','','','','')");
        header("location:add-classroom.php");
    }
    else{
      echo'
        <script>alert("Fill Details");</script>
      ';
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include("./includes/breadcrumb.inc.php");?>
            <div class="row">
                <div class="col-md-12">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name of the Classroom (ex : Mech A)</label>
                                    <input type="text" class="form-control"  name="classroomname" id="exampleFormControlInput1" placeholder="Classroom Name With Section" name="coursename">
                                </div>
                        </div>
                        <div class="col">
                             <div class="form-group">
                                    <label for="exampleFormControlSelect1">Department</label>
                                       <select class="form-control" id="exampleFormControlSelect1" name="department">
                                        <?php
                                        $get=mysql_query("SELECT * FROM courses ORDER BY id");
                                        while($row=mysql_fetch_assoc($get)){
                                          $course_name=$row['name'];
                                          $course_id=$row['id'];

                                          echo'

                                              <option>'.$course_name.'</option>

                                          ';
                                        }
                                        ?>
                                        </select>
                              </div>
                        </div>
                         <div class="col">
                             <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Year</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="year">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                        </select>
                              </div>
                        </div>
                        </div>
                        <input type="submit" name="submit"  value="Add Classroom" class="btn btn-block btn-danger">
                    </form>
                </div>
            </div>
    <hr>
    <h3>Classrooms</h3>
    <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Class Name</th>
                <th scope="col">Department</th>
                <th scope="col">Year</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $get=mysql_query("SELECT * FROM classrooms  ORDER BY id DESC");
              while($row = mysql_fetch_assoc($get)) {
                  $subjectname=$row['name'];
                  $semester=$row['year'];
                  $department=$row['department'];
                  echo '
                      <tr>
                          <th>'.$subjectname.'</th>
                          <th>'.$department.'</th>
                          <th>'.$semester.'</th>
                      </tr>
                  ';
                  }
              ?>
            </tbody>
          </table>
        </div>
    </div>
