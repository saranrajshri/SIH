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
    <tr>
      <th scope="row">Faculty Name</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><span class="fa fa-check" style="color:green"></span></td>
    </tr>
    <tr>
      <th scope="row">Faculty Name</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><span class="fa fa-times-circle" style="color:red"></span></td>
    </tr>
    <tr>
      <th scope="row">Faculty Name</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td><span class="fa fa-check" style="color:green"></span></td>
    </tr>
  </tbody>
</table>

  </div>
</div>
</body>
</html>
