<?php include("./includes/header.inc.php");?>
<?php
$submit= @$_POST['submit'];
$name=strip_tags(@$_POST['names']);
$email=strip_tags(@$_POST['email']);
$contact=strip_tags(@$_POST['contact']);
$password=@$_POST['password'];
$courses=@$_POST['courses'];
$loadhour=@$_POST['loadhour'];
$noofdays=@$_POST['noofdays'];
$experience=@$_POST['experience'];
$md5_password=md5($password);
if($submit){
    if($name&&$email&&$contact&&$password&&$noofdays){
        if($experience==''){
            $experience="NO";
        }
        else
        {
            $experience=@$_POST['experience'];
        }
        mysql_query("INSERT INTO teachers VALUES('','$name','$email','$contact','$courses','$md5_password','$loadhour','$noofdays','$experience')");
        mysql_query("INSERT INTO loadhour_counter VALUES('','$name','$loadhour','$loadhour')");
        header("location:teachers-list.php?profile_id=$user");
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
                                    <label for="exampleFormControlSelect1">Subject</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="courses">
                                          <?php
                                            $get=mysql_query("SELECT * FROM singlebase_subjects");
                                            while($row=mysql_fetch_assoc($get)){
                                                $option=$row['subjectname'];
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
                            <div class="col">
                                <div class="form-group">
                                    <label>Set Load Hour</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="loadhour">
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Set No of Training Days</label>
                                    <input type="number" name="noofdays" class="form-control" id="exampleFormControlInput1" placeholder="No of Training Days" min="0">
                                </div>
                            </div>
                            <div class="col">
                                <label>Experience</label><br>
                                <input type="radio" name="tab" value="igotnone" onclick="show2();" /> Yes
                                <input type="radio" name="tab" value="igottwo" onclick="show1();" /> No
                            </div>
                        </div>
                        <div id="div1" class="row">
                            <label class="text-danger">Enter the year of experience</label>
                                <input type="number" name="experience" class="form-control" id="exampleFormControlInput1" placeholder="Years Of experience" min="0">
                            </div>
                            <br>
                        <div id="ex-box">
                        <div class="row">
                            <div class="col">

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
      <th scope="col">No of training days</th>
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
    echo
    '
        <tr>
        <th>'.$f_name.'</th>
        <th>'.$f_regno.'</th>
        <th>'.$f_courses.'</th>
        <th>'.$f_email.'</th>
        <th>'.$f_contact.'</th>
        <th>'.$f_noofdays.'</th>
        </tr>
    ';
    }
    ?>
  </tbody>
</table>
        </div>

    </div>
</div>
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
$( document ).ready(function() {
  document.getElementById('div1').style.display ='none';
});
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>
