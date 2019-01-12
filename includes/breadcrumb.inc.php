<!-- BLUE -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="generate-timetable.php" class="text-success">Generate TimeTable</a></li>
    <li class="breadcrumb-item"><a href="admin-dashboard.php">Attendence</a></li>
    <li class="breadcrumb-item"><a href="add-teachers.php?profile_id=<?php echo $user;?>">Add Teacher</a></li>
    <li class="breadcrumb-item"><a href="add-courses.php?profile_id=<?php echo $user;?>">Add Courses</a></li>
    <li class="breadcrumb-item"><a href="add-classroom.php?profile_id=<?php echo $user;?>">Add Classrooms</a></li>
    <!-- <li class="breadcrumb-item"><a href="allocate.php?subjectname=&&year=">Allocate Staffs</a></li> -->
    <!-- RED -->
    <li class="breadcrumb-item"><a href="view-subjects.php?subjectname=&&year=&&semester=" class="text-danger">View Subjects</a></li>
    <li class="breadcrumb-item"><a href="view-classroom.php?subjectname=&&year=" class="text-danger">View Classrooms</a></li>
    <li class="breadcrumb-item"><a href="teachers-list.php?profile_id=<?php echo $user;?>" class="text-danger">View Teachers List</a></li>
  </ol>
</nav>
