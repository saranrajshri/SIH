<?php include("./includes/header.inc.php");?>
<div class="container">
  <div class="row">
    <?php include("./includes/breadcrumb.inc.php");?>
    <div class="container">
      <a href="add-teachers.php" class="btn btn-danger">Add More Teachers</a>
      <hr>
    <h3>Teachers List</h3>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Faculty Name</th>
      <th scope="col">Reg No</th>
      <th scope="col">Course</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">No of training days</th>
      <th scope="col">Loadhour</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get=mysql_query("SELECT * FROM teachers ORDER BY id DESC");
    while($row = mysql_fetch_assoc($get)) {
        $f_name=$row['name'];
        $f_regno=$row['id'];
        $f_email=$row['email'];
        $f_courses=$row['courses'];
        $f_contact=$row['contact'];
        $f_noofdays=$row['noofdays'];
        $f_loadhour=$row['loadhour'];
      echo
    '
        <tr>
        <th>'.$f_name.'</th>
        <th>'.$f_regno.'</th>
        <th>'.$f_courses.'</th>
        <th>'.$f_email.'</th>
        <th>'.$f_contact.'</th>
        <th>'.$f_noofdays.'</th>
        <th>'.$f_loadhour.'</th>
        </tr>
    ';
    }
    ?>
  </tbody>
</table>
        </div>

    </div>
</div>

  </div>
</div>
