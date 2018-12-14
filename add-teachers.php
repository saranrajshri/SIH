<?php include("./includes/header.inc.php");?>
<?php
$submit= @$_POST['submit'];
$name=strip_tags(@$_POST['names']);
$email=strip_tags(@$_POST['email']);
$contact=strip_tags(@$_POST['contact']);
$password=@$_POST['password'];
$courses=@$_POST['courses'];
$md5_password=md5($password);
if($submit){
    if($name&&$email&&$contact&&$password){
        mysql_query("INSERT INTO teachers VALUES('','$name','$email','$contact','$courses','$md5_password')");
        header("location:add-teachers.php?profile_id=$user");
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include("./includes/breadcrumb.inc.php");?>
            <div class="row">
                <div class="col-md-12">
                    <h3>Add Teachers</h3>
                    <form action="add-teachers.php?profile.php?profile_id=<?php echo $user;?>" method="POST">
                        <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Faculty Name" name="names">
                              </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Email Address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email">
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Courses</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="courses">
                                          <?php
                                            $get=mysql_query("SELECT * FROM subjects");
                                            while($row=mysql_fetch_assoc($get)){
                                                $option=$row['coursename'];
                                                echo
                                                '
                                                    <option>'.$option.'</option>
                                                ';
                                            }
                                          ?>
                                        </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Contact Number</label>
                                    <input name="contact" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contact Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Set Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Set Password">
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h3>Teachers List</h3>
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
    echo
    '
        <tr>
        <th>'.$f_name.'</th>
        <th>'.$f_regno.'</th>
        <th>'.$f_courses.'</th>
        <th>'.$f_email.'</th>
        <th>'.$f_contact.'</th>
        </tr>
    ';
    }
    ?>
  </tbody>
</table>
        </div>

    </div>
</div>
