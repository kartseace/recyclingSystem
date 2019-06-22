<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE recycle";
if ($conn->query($sql) === TRUE) {
  
mysqli_select_db($conn,'recycle');
//creating table for schedule
$query=mysqli_query($conn,"CREATE TABLE `tbl_schedule` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `area` varchar(100) NOT NULL,
  `street_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//inserting  the shcedule data
$quer1y=mysqli_query($conn,"INSERT INTO `tbl_schedule` (`id`, `name`, `location`, `date`, `area`, `street_address`) VALUES
(24, 'Uzumaki Naruto', 'hidden konohoa', '2017-01-01', 'hidden leaf', 'naruto bridge'),
(25, 'Sasuke', 'Uchiha village', '2017-01-01', 'Uchiha area', 'uchiha streee'),
(26, 'Luffy', 'One piece', '2014-01-01', 'East Blue', '4061 Street ')
");

//creating table for upload
$query2=mysqli_query($conn,"CREATE TABLE `tbl_upload` (
  `image_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `waste_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//inserting  upload datta
$query3=mysqli_query($conn,"INSERT INTO `tbl_upload` (`image_id`, `file_name`, `price`, `description`, `waste_type`) VALUES
(43, 'http://localhost/recycling/uploads/paper.jpg', '12', 'Newspaper per Kg 12', 'paper'),
(44, 'http://localhost/recycling/uploads/magazine.jpg', '10', 'Magazines per kg Rs 12', 'paper'),
(45, 'http://localhost/recycling/uploads/paper.jpg', '15', 'Newspaper per Kg 12', 'paper'),
(46, 'http://localhost/recycling/uploads/Exercise-Copy.jpg', '12', 'Copy per kg 12', 'paper'),
(47, 'http://localhost/recycling/uploads/books.jpg', '50', 'Books usable only per kg Rs 50', 'paper'),
(48, 'http://localhost/recycling/uploads/crates.jpg', '6', 'Crates per kg Rs6', 'paper'),
(49, 'http://localhost/recycling/uploads/Bottles.jpg', '40', '2 Bottle Rs 5', 'glass_plastic'),
(50, 'http://localhost/recycling/uploads/wine.jpg', '2', 'Per piece Rs 1', 'glass_plastic'),
(51, 'http://localhost/recycling/uploads/cosmetics.jpg', '5', 'Per kg Rs 5', 'glass_plastic'),
(52, 'http://localhost/recycling/uploads/Disinfectants.jpg', '10', 'Perk kg 10', 'glass_plastic'),
(53, 'http://localhost/recycling/uploads/Shampoo.jpg', '30', 'Per kg Rs 30', 'glass_plastic'),
(54, 'http://localhost/recycling/uploads/water-pet.jpg', '10', 'Per kg Rs 10', 'glass_plastic'),
(55, 'http://localhost/recycling/uploads/Aluminium.jpg', '100', 'Per kg Rs 100', 'metal_steel'),
(56, 'http://localhost/recycling/uploads/Drinks.jpg', '1', 'Per kg Rs 1', 'metal_steel'),
(57, 'http://localhost/recycling/uploads/Tin-Cans.jpg', '5', 'food cans 5 per kg', 'metal_steel'),
(58, 'http://localhost/recycling/uploads/Spray.jpg', '30', 'Per kg Rs 30', 'metal_steel'),
(59, 'http://localhost/recycling/uploads/Steel-Furniture.jpg', '', 'Requires inspection', 'metal_steel'),
(60, 'http://localhost/recycling/uploads/pipes.jpg', '10', 'Per kg Rs 10', 'metal_steel'),
(61, 'http://localhost/recycling/uploads/Camera.jpg', '', 'require inspection', 'ewaste'),
(62, 'http://localhost/recycling/uploads/cd.jpg', '5', 'Per kg Rs 5', 'ewaste'),
(63, 'http://localhost/recycling/uploads/Computers.jpg', '250', 'Per piece Rs 250 varies accordingly', 'ewaste'),
(64, 'http://localhost/recycling/uploads/Mobile.jpg', '10', 'Per kg Rs 10', 'ewaste'),
(65, 'http://localhost/recycling/uploads/TV.jpg', '200', 'Per piece 250', 'ewaste'),
(66, 'http://localhost/recycling/uploads/Wires.jpg', '10', 'Per kg Rs 10', 'ewaste'),
(67, 'http://localhost/recycling/uploads/Batteries.jpg', '20', 'per piece', 'other'),
(68, 'http://localhost/recycling/uploads/Machine.jpg', '15', 'Per kg Rs 15', 'other'),
(69, 'http://localhost/recycling/uploads/Invitation-Cards.jpg', '5', 'Per kg Rs 5', 'other'),
(70, 'http://localhost/recycling/uploads/sack.jpg', '1', 'per piece', 'other'),
(71, 'http://localhost/recycling/uploads/Gas-Geyser.jpg', '', 'inspection required', 'other'),
(72, 'http://localhost/recycling/uploads/waste.jpg', '5', 'mixed dry waste per kg Rs 5', 'other'),
(77, 'http://localhost/recycling/uploads/Screen_Shot_2017-10-24_at_10_33_31_PM.png', '12', 'add successfully by karma', 'paper'),
(78, 'http://localhost/recycling/uploads/paper.jpg', '12', 'Newspaper per Kg 12', 'paper'),
(79, 'http://localhost/recycling/uploads/paper.jpg', '12', 'Newspaper per Kg 12', 'paper')
");

//creating a table for user
$query4=mysqli_query($conn,"CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `user_age` int(5) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//input user data
$query5=mysqli_query($conn,"INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `gender`, `user_age`, `user_mobile`, `user_type`) VALUES
(1, 'Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'male', 20, '1234567890', 'admin'),
(2, 'karma', 'kartseace@gmail.com', 'f1e4d45669d0d03ef7ff6586138b789a', 'male', 22, '98437', ''),
(3, 'tsering', 'tsering@gmail.com', '694a0cc71887c35d796d1c93609ea452', 'male', 20, '1234567890', ''),
(4, 'krishn', 'krishna@gmail.com', 'krishna', 'male', 90, '8964357678', 'standard user'),
(5, 'username', 'username@gmail.com', 'username', 'male', 22, '', 'standard user'),
(6, 'bikram', 'bikram@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 22, '', 'standard user'),
(7, 'Ace fire', 'ace@gmail.com', 'f1e4d45669d0d03ef7ff6586138b789a', 'male', 22, '', 'standard user'),
(8, 'Ace fire', 'ace12@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'male', 22, '', 'standard user'),
(9, 'naruto', 'naruto@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'male', 12, '', 'standard user'),
(10, 'Luffy', 'luffy@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'male', 22, '', 'standard user'),
(11, 'karma', 'karma@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'male', 22, '', 'standard user'),
(12, 'karma', 'karma@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'male', 22, '', 'standard user'),
(13, 'karma', 'karma@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'male', 22, '', 'standard user'),
(14, 'karma', 'karma@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'male', 22, '', 'standard user')
");
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>