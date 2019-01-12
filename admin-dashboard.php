<?php include("./includes/header.inc.php");?>
<div class="container" style="margin-top: 20px;">
  <div class="row">

  <?php include("./includes/breadcrumb.inc.php");?>
  <!-- // <h3>Teacher Attendence - (<?php echo date("d-m-y");?>)</h3> -->
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Faculty Name</th>
      <th scope="col">Reg No</th>
      <th scope="col">Course</th>
      <th scope="col">Attendence</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $query=mysql_query("SELECT * FROM teachers");
        $count=mysql_num_rows($query);
        if($count == 0){
          echo'
                <tr>
                <th>
                <center>
                <h3 class="text-danger" style="margin-bottom:10px;">There are no teachers.Try adding some teacher details.</h3>
                <a href="add-teachers.php" class="btn btn-success">Add Teachers</a>
                <a href="add-courses.php" class="btn btn-info">Add Courses</a>
                  </center>
                  </th>
                  </tr>
          ';

        }
        else
        {

        $get1=mysql_query("SELECT * FROM teachers");
        while($row1=mysql_fetch_assoc($get1)){
          $reg_no=$row1['id'];
          $name=$row1['name'];
          $course_name=$row1['courses'];

          $date=date("y-m-d");
        $get=mysql_query("SELECT * FROM attendence WHERE a_date='$date' AND regno='$reg_no' ORDER BY id DESC");
        $count=mysql_num_rows($get);
        if($count==0){
          $result='<span class="fa fa-times-circle" style="color:red"></span>';
        }
        else{
          $result='<span class="fa fa-check" style="color:green"></span>';
        }

         echo
        '
          <tr>
          <th>'.$name.'</th>
          <th>'.$reg_no.'</th>
          <th>'.$course_name.'</th>
          <th>'.$result.'</th>
          <tr>';
        }
}
      ?>
  </tbody>
</table>

  </div>
</div>
</body>
</html>
