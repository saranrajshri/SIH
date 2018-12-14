<?php include("./includes/header.inc.php");?>
<?php include("./includes/script.inc.php");?>
<?php
$submit=@$_POST['submit'];
$subjectname=@$_POST['subjectname'];
$semester=@$_POST['semester'];
if($submit){
    if($subjectname){
        mysql_query("INSERT INTO subjects VALUES('','$subjectname','$semester','$coursename')");
        header("location:add-subjects.php?coursename=$coursename");
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
                                    <label for="exampleFormControlInput1">Name of the Subject</label>
                                    <input type="text" class="form-control"  name="subjectname" id="exampleFormControlInput1" placeholder="Subject Name" name="coursename">
                                </div>
                        </div>
                        <div class="col">
                             <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Semester</label>
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
                        </div>
                        </div>
                        <input type="submit" name="submit"  value="Add Course" class="btn btn-block btn-info">
                    </form>
                </div>
            </div>
    <hr>
    <h3>Subjects For <?php echo $coursename;?></h3>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Subject Name</th>
      <th scope="col">Semester</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get=mysql_query("SELECT * FROM subjects WHERE for_which_course='$coursename' ORDER BY id DESC");
    while($row = mysql_fetch_assoc($get)) {
        $subjectname=$row['coursename'];
        $semester=$row['semester'];
        echo '
            <tr>
                <th>'.$subjectname.'</th>
                <th>'.$semester.'</th>
            </tr>
        ';
        }
    ?>
  </tbody>
</table>
        </div>
    </div>
