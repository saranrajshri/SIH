CREATE TABLE IF NOT EXISTS `teachers` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    `email` varchar(200) NOT NULL,
    `contact` varchar(200) NOT NULL,
    `courses` varchar(200) NOT NULL,
    `password` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
)
