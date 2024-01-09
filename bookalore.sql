-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 06:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookalore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `Employee_ID` int(11) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`Employee_ID`, `Password`) VALUES
(1002678191, 'blueheart'),
(1002678194, 'snowflakes8');

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `Employee_ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`Employee_ID`, `FirstName`, `LastName`, `Gender`, `Contact`, `Birthday`, `Age`) VALUES
(1002678191, 'Katarina', 'Yu', 'Female', '09782917221', '2000-04-17', 23),
(1002678194, 'Winter', 'Kim', 'Female', '09888809081', '2001-01-01', 22);

-- --------------------------------------------------------

--
-- Table structure for table `house_details`
--

CREATE TABLE `house_details` (
  `House_ID` int(10) NOT NULL,
  `HouseName` varchar(150) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `Owner_Fname` varchar(100) NOT NULL,
  `Owner_Lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_details`
--

INSERT INTO `house_details` (`House_ID`, `HouseName`, `Location`, `Price`, `Owner_Fname`, `Owner_Lname`) VALUES
(1008, 'The Two Storey', 'Mabalacat, Pampanga', 8500, 'Ryujin', 'Domingo'),
(1009, 'Camp Cuayan', 'Angeles, Pampanga', 5250, 'Lito', 'Lapida'),
(1011, 'Tropical Shot', 'Magalang, Pampanga', 5900, 'Lucing', 'Pocus'),
(1012, 'Modern Escape', 'Balibago, Pampanga', 6250, 'Mary Mae', 'Berat'),
(1013, 'House de Singko', 'Amsic, Pampanga', 4950, 'Ken', 'Yaman');

-- --------------------------------------------------------

--
-- Table structure for table `house_feature`
--

CREATE TABLE `house_feature` (
  `House_ID` int(10) NOT NULL,
  `Rooms` int(3) NOT NULL,
  `Beds` int(3) NOT NULL,
  `Bathroom` int(3) NOT NULL,
  `Max_Capacity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_feature`
--

INSERT INTO `house_feature` (`House_ID`, `Rooms`, `Beds`, `Bathroom`, `Max_Capacity`) VALUES
(1008, 4, 8, 3, 15),
(1009, 3, 4, 2, 8),
(1011, 2, 3, 2, 6),
(1012, 3, 5, 3, 9),
(1013, 3, 4, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `house_img`
--

CREATE TABLE `house_img` (
  `House_ID` int(10) NOT NULL,
  `IMG1_Main` varchar(200) NOT NULL,
  `IMG2` varchar(200) NOT NULL,
  `IMG3` varchar(200) NOT NULL,
  `IMG4` varchar(200) NOT NULL,
  `IMG5` varchar(200) NOT NULL,
  `IMG6` varchar(200) NOT NULL,
  `IMG7` varchar(200) NOT NULL,
  `IMG8` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_img`
--

INSERT INTO `house_img` (`House_ID`, `IMG1_Main`, `IMG2`, `IMG3`, `IMG4`, `IMG5`, `IMG6`, `IMG7`, `IMG8`) VALUES
(1008, '../images/2.png', '../images/1.png', '../images/9.png', '../images/4.png', '../images/5.png', '../images/6.png', '../images/7.png', '../images/8.png'),
(1009, '../images/1.png', '../images/4.png', '../images/6.png', '../images/5.png', '../images/7.png', '../images/9.png', '../images/13.png', '../images/18.png'),
(1011, '../images/houz3.png', '../images/bathroom with tub.png', '../images/pool.png', '../images/bathroom.jpg', '../images/dinning area.png', '../images/fam area.png', '../images/kitchen.png', '../images/master_s bedroom.png'),
(1012, '../images/8.png', '../images/4.png', '../images/2.png', '../images/11.png', '../images/12.png', '../images/16.png', '../images/5.png', '../images/7.png'),
(1013, '../images/1.png', '../images/6.png', '../images/3.png', '../images/8.png', '../images/12.png', '../images/10.png', '../images/18.png', '../images/16.png');

-- --------------------------------------------------------

--
-- Table structure for table `manager_acc`
--

CREATE TABLE `manager_acc` (
  `ID` int(11) NOT NULL,
  `Label` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager_acc`
--

INSERT INTO `manager_acc` (`ID`, `Label`, `Password`) VALUES
(987654321, 'Manager 1', 'passw');

-- --------------------------------------------------------

--
-- Table structure for table `rent_status`
--

CREATE TABLE `rent_status` (
  `Transaction_ID` int(10) NOT NULL,
  `House_ID` int(10) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent_status`
--

INSERT INTO `rent_status` (`Transaction_ID`, `House_ID`, `Status`) VALUES
(20514, 1000, 'REFUND'),
(20515, 1001, 'COMPLETED'),
(20516, 1008, 'PENDING'),
(20517, 1011, 'PAID'),
(20518, 1009, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE `transaction_tbl` (
  `Transaction_ID` int(10) NOT NULL,
  `Cust_ID` int(11) NOT NULL,
  `Pay_Mode` varchar(30) NOT NULL,
  `In_Date` date NOT NULL,
  `Out_Date` date NOT NULL,
  `No_Days` int(11) GENERATED ALWAYS AS (to_days(`Out_Date`) - to_days(`In_Date`)) STORED,
  `Total_Pay` varchar(7) NOT NULL,
  `House_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_tbl`
--

INSERT INTO `transaction_tbl` (`Transaction_ID`, `Cust_ID`, `Pay_Mode`, `In_Date`, `Out_Date`, `Total_Pay`, `House_ID`) VALUES
(20514, 1000001, 'Debit Card', '2023-04-22', '2023-04-24', '11000', 1000),
(20515, 1000001, 'Bank Transfer', '2023-05-27', '2023-05-30', '18750', 1001),
(20516, 1000004, 'Debit Card', '2023-05-01', '2023-05-03', '17000', 1008),
(20517, 1000004, 'GCash', '2023-12-23', '2023-12-26', '17700', 1011),
(20518, 1000004, 'Bank Transfer', '2023-12-23', '2023-12-26', '15750', 1009);

--
-- Triggers `transaction_tbl`
--
DELIMITER $$
CREATE TRIGGER `nodays` AFTER UPDATE ON `transaction_tbl` FOR EACH ROW BEGIN
  UPDATE transaction_tbl SET No_Days = DATEDIFF(Out_Date, In_Date) WHERE Transaction_ID = NEW.Transaction_ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `Cust_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`Cust_ID`, `Username`, `Password`) VALUES
(1000006, 'berryjai', 'strawvery'),
(1000007, 'ezrawr', 'dinsaourawr'),
(1000008, 'sexbombel', 'itataktakmo'),
(1000009, 'sheynikol', 'astapassword'),
(1000010, 'daynamic', 'vbislife'),
(1000011, 'patcheng', 'paload100'),
(1000012, 'mastercoder', 'hulaanmo'),
(1000013, 'oni_lang', 'valoboi'),
(1000014, 'ParaPo123', 'evictedjeep'),
(1000015, 'papa_alds', 'mabohaiangaldub');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `Cust_ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(35) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Contact` text DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`Cust_ID`, `First_Name`, `Last_Name`, `Email`, `Contact`, `Address`) VALUES
(1000006, 'Jai', 'Nunag', 'jainuns@yahoo.com', '09129384761', 'Barosa, SF'),
(1000007, 'Ez', 'Castro', 'ezrawrlyn@dinodogshow.com', '09881182732', 'Dinosaur Island'),
(1000008, 'El', 'Manalansan', 'jopayniel@pechay.com', '09435618765', 'Jopay, Mayonnaise'),
(1000009, 'Shane', 'Paras', 'sheyaning@gmail.com', '09811127861', 'California, King Bed'),
(1000010, 'Dayna', 'Salalila', 'taiwangurl@yahoo.com', '09517291721', 'Volley Court'),
(1000011, 'Pat', 'Quiatchon', 'patatat@potato.com', '09561810111', 'Utot, Capitol'),
(1000012, 'Dale', 'Behdaniyah', 'deyldeyl@yehey.com', '099981728641', 'Gilid, Lang'),
(1000013, 'Seb', 'Pamintuan', 'grind@everyday.night', '099281726351', 'Valorant, AC'),
(1000014, 'Luise', 'Yambao', 'firstcontestant@jeep.com', '09162718279', 'Arayat, Pampanga'),
(1000015, 'Kyle', 'Maglalang', 'aldenrecharge@eb.babes', '09162182735', 'Eat Bulaga Studio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `house_details`
--
ALTER TABLE `house_details`
  ADD PRIMARY KEY (`House_ID`);

--
-- Indexes for table `house_img`
--
ALTER TABLE `house_img`
  ADD PRIMARY KEY (`House_ID`);

--
-- Indexes for table `manager_acc`
--
ALTER TABLE `manager_acc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rent_status`
--
ALTER TABLE `rent_status`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`Cust_ID`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`Cust_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002678195;

--
-- AUTO_INCREMENT for table `house_details`
--
ALTER TABLE `house_details`
  MODIFY `House_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `Transaction_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20519;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
