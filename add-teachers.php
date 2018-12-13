<?php include("./includes/header.inc.php");?>
<?php
$submit= @$_POST['submit'];
$name=strip_tags(@$_POST['names']);
$email=strip_tags(@$_POST['email']);
$contact=strip_tags(@$_POST['contact']);
$password=@$_POST['password'];
$md5_password=md5($password);
if($submit){
    if($name&&$email&&$contact&&$password){
        mysql_query("INSERT INTO teachers VALUES('','$name','$email','$contact',' ','$md5_password')");
        echo '<script>alert("Added");<script>';
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
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Faculty Name" name="names">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Courses</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="courses">
                                          <option>example</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
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
</div>
