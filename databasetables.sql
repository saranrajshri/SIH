CREATE TABLE IF NOT EXISTS `teachers` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    `email` varchar(200) NOT NULL,
    `contact` varchar(200) NOT NULL,
    `courses` varchar(200) NOT NULL,
    `password` varchar(200) NOT NULL,
    `loadhour` varchar(200) NOT NULL,
    `noofdays` varchar(200) NOT NULL,
    `experience` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
CREATE TABLE IF NOT EXISTS `courses` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
CREATE TABLE IF NOT EXISTS `classrooms`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    `year` int(11) NOT NULL,
    `department` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
CREATE TABLE IF NOT EXISTS `admin` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(200) NOT NULL,
    `password` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
CREATE TABLE IF NOT EXISTS `subjects` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `coursename` varchar(200) NOT NULL,
    `semester` int(200) NOT NULL,
    `for_which_course` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
CREATE TABLE IF NOT EXISTS `attendence` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    `regno` int(200) NOT NULL,
    `a_date` date NOT NULL,
    `attendence` varchar(200) NOT NULL,
    `subject` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
CREATE TABLE IF NOT EXISTS `loadhour_counter` (
    `staff_id` int(11) NOT NULL AUTO_INCREMENT,
    `staff_name` varchar(200) NOT NULL,
    `original_loadhour` varchar(200) NOT NULL,
    `remaining_loadhour` varchar(200) NOT NULL,
    PRIMARY KEY (`staff_id`)
)
CREATE TABLE IF NOT EXISTS `singlebase_subjects` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `subjectname` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
