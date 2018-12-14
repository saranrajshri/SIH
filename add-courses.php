<?php include("./includes/header.inc.php");?>
<?php
$submit=@$_POST['submit'];
$coursename=@$_POST['coursename'];
if($submit){
    if($coursename){
        mysql_query("INSERT INTO courses VALUES('','$coursename')");
        header("location:add-courses.php?profile_id=$user");
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include("./includes/breadcrumb.inc.php");?>
            <div class="row">
                <div class="col-md-12">
                    <form action="add-courses.php?profile.php?profile_id=<?php echo $user;?>" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name of the course</label>
                            <input type="text" class="form-control"  name="coursename" id="exampleFormControlInput1" placeholder="Course Name" name="coursename">
                        </div>
                        <input type="submit" name="submit"  value="Add Course" class="btn btn-block btn-danger">
                    </form>
                </div>
            </div>
    <hr>
    <h3>Courses List</h3>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Deatils</th>
      <th scope="col">Add Subjects</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get=mysql_query("SELECT * FROM courses ORDER BY id DESC");
    while($row = mysql_fetch_assoc($get)) {
        $c_name=$row['name'];
        $courseid=$row['id'];
    echo
    '
        <tr>
        <th>'.$c_name.'</th>
        <th><a href="#">View Deatils</a></th>
        <th><a href="add-subjects.php?coursename='.$c_name.'&&courseid='.$courseid.'">Add Subjects</a></th>
        </tr>
    ';
    }
    ?>
  </tbody>
</table>
        </div>
    </div>
