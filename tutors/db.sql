CREATE TABLE `tutorList` (
`id` int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`phone` varchar(20) NOT NULL,
`gender` varchar(20) NOT NULL,
`city` varchar(50) NOT NULL,
`address` varchar(100) NOT NULL,
`institution` varchar(50) NOT NULL,
`department` varchar(50) NOT NULL,
`sscYear` int NOT NULL,
`sscGpa` float NOT NULL,
`hscYear` int NOT NULL,
`hscGpa` float NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);