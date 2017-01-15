-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 02:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oruma`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin#777');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`username`, `password`) VALUES
('emp', 'emp#777'),
('oruma', 'oruma#777');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `username` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `username` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(10) NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `title`, `content`, `date`) VALUES
(1, 'പാല്‍ കറവയും ചില വസ്തുതകളും', 'ക്ഷീരോല്‍പ്പാദനത്തിന് സ്തനഗ്രന്ഥികളിലേക്കു ധാരാളം രക്തം എത്തേണ്ടിയിരിക്കുന്നു. അകിടിലേക്കു രക്തം വിതരണം ചെയ്യുന്ന മുഖ്യധമനികള്‍ നിരവധി ശാഖകളായി പിരിഞ്ഞ് ഗ്രന്ഥിയില്‍ മിക്കവാറും എല്ലായിടത്തും രക്തം പ്രദാനം ചെയ്യുന്നു. ഇവ ഗ്രന്ഥിയുടെ സ്രവണഭാഗങ്ങളെ ചുറ്റി സ്ഥിതിചെയ്യുന്നതിനാല്‍ അവയ്ക്ക് എളുപ്പം പോഷകങ്ങള്‍ എത്തിച്ചുകൊടുക്കുന്നു. അല്‍വിയോളസുകള്‍ എന്നറിയപ്പെടുന്ന ക്ഷീരസ്രവണഭാഗങ്ങള്‍ക്കു ചുറ്റുമുള്ള കോശങ്ങള്‍ നടത്തുന്ന സംശ്ലേഷണ അരിക്കല്‍ പ്രക്രിയയുടെ ഫണമാണ് ക്ഷീരസ്രാവം. അല്‍ലിയോളസുകളുടെ ബാഹ്യമര്‍ദം 30-40 മില്ലി ലിറ്റര്‍ രസയൂപത്തിനു തുല്യമാകുമ്പോള്‍ അകിടില്‍നിന്ന് നീക്കം ചെയ്യപ്പെടാത്ത പാല്‍ ആഗിരണം ചെയ്യപ്പെടുന്നു. ദീര്‍ഘനേരം പാല്‍ കറക്കാതിരിക്കുകയോ അപൂര്‍ണമായി കറക്കുകയോ ചെയ്യുന്നത് ക്ഷീരസ്രവണം കുറയ്ക്കും. അത്യുല്‍പ്പാദനശേഷിയുള്ള പശുക്കളെ ദിവസം രണ്ടു പ്രാവശ്യം കറക്കുന്നതിനുപകരം മൂന്നു പ്രാവശ്യം കറക്കുന്നതുകൊണ്ട് കൂടുതല്‍ പാല്‍ കിട്ടും.', '2016-10-22'),
(2, 'പശുക്കളുടെ ഗര്‍ഭകാല പരിപാലനം', 'കിടാരികള്‍ക്ക് നല്‍കുന്ന പോഷകാഹാരവും ശരിയായ ആരോഗ്യ പരിപാലനവും അവ നേരത്തേ തന്നെ മദിയില്‍ വരുന്നതിനും രണ്ടരവയസ്സ് ആകുമ്പോഴേക്കും പ്രസവിക്കുന്നതിനും ഇടയാകുന്നു. ഗര്‍ഭകാലത്തിന്‍റെ 6ഉം 7ഉം മാസങ്ങളില്‍ ഭ്രൂണം വളരെ പെട്ടെന്ന് വളരുന്നതിനാല്‍, താഴെ പറയുന്ന കാര്യങ്ങള്‍ ശ്രദ്ധിക്കേണ്ടതുണ്ട്. ഗര്‍ഭാവസ്ഥയുടെ ഈ ഘട്ടത്തില്‍ പശുക്കളെ അകലെയുള്ള പ്രദേശങ്ങളിലേയ്ക്കോ, നിരപ്പില്ലാത്ത പ്രദേശങ്ങളിലേയ്ക്കോ മേയ്ക്കാന്‍ വിടരുത്. ഗര്‍ഭത്തിന്‍റെ 7-ാം മാസത്തോടെ പശുവിന്‍റെ കറവ വറ്റിയ്ക്കേണ്ടതാണ്. തൊഴുത്തില്‍ പശുവിന് സൗകര്യമായി നില്‍ക്കുന്നതിനും, കിടക്കുന്നതിനും ആവശ്യമായ സ്ഥലം ഉണ്ട് എന്ന് ഉറപ്പുവരുത്തണം. പ്രസവത്തോടനുബന്ധിച്ച് ഉണ്ടായേക്കാവുന്ന ക്ഷീരസന്നി, കിറ്റോസിസ് എന്നീ രോഗങ്ങളെ പ്രതിരോധിക്കാന്‍ പോഷകസമ്പുഷ്ടമായ തീറ്റികള്‍ പശുക്കള്‍ക്ക് ആവശ്യമാണ്.', '2016-10-22'),
(3, 'തൊഴുത്തിന്‍റെ രൂപകല്‍പ്പന', 'തൊഴുത്തു നിര്‍മ്മിക്കുമ്പോള്‍ ശ്രദ്ധിക്കേണ്ട കാര്യങ്ങള്‍\r\nപ്രതികൂല കാലാവസ്ഥയില്‍ നിന്നും പശുവിന് രക്ഷ നല്‍കുന്ന പാര്‍പ്പിടങ്ങളാണല്ലോ തൊഴുത്തുകള്‍. വൃത്തിയുള്ളതും സൗകര്യപ്രദവും ആയ തൊഴുത്ത് കറവപ്പശുക്കളുടെ ഉല്‍പ്പാദനക്ഷമതയേയും വളര്‍ച്ചയേയും ബാധിയ്ക്കുന്ന ഒരു പ്രധാനഘടകമാണ്. കടുത്ത വേനല്‍, മഞ്ഞ്, നേരിട്ടുള്ള സൂര്യരശ്മികള്‍, കാറ്റ് എന്നിവയില്‍ നിന്ന് പശുക്കള്‍ക്ക് സംരക്ഷണം ലഭിക്കുന്ന രീതിയിലായിരിയ്ക്കണം തൊഴുത്ത് രൂപകല്‍പ്പന ചെയ്യേണ്ടത്. വേനല്‍കാലത്ത് കൂടിയ അന്തരീക്ഷതാപം മൂലം പശുക്കള്‍ അസ്വസ്ഥത കാട്ടുന്നു. വിയര്‍ക്കുകയും അണയ്ക്കുകയും ചെയ്യുന്നതിലൂടെ ഒരു പരിധി വരെ ശരീരം തകണുപ്പിക്കാന്‍ അവയ്ക്കു കഴിയുമെങ്കിലും, ഇക്കാലത്ത് അവ സ്വയം ആഹാരം കുറയ്ക്കുകയും, ഇതുമൂലം പാലുല്‍പ്പാദനം കുറയുകയും ചെയ്യുന്നു. വീടിന്‍റെ ചായ്പ് തൊഴുത്തായി ഉപയോഗിക്കുന്നുവെങ്കില്‍ പുല്‍ക്കൂട് വീടിന്‍റെ ചുമരിനോട് ചേര്‍ത്താണ് ഉണ്ടാക്കേണ്ടത്. രണ്ടു പശുക്കളും അതിന്‍റെ കിടാക്കളും ഉള്ള ഒരു ചെറിയ കര്‍ഷകന് ഇത്തരം തൊഴുത്താണ് ലാഭകരം. ഭിത്തിയോട് ചേര്‍ന്ന് രണ്ടര അടി വീതീയുള്ള ഇടനാഴി ഉണ്ടായിരിക്കുന്നത് വീടിന്‍റെ ചുമരിന് അഭിമുഖമായി കെട്ടി നിര്‍ത്തുന്ന കന്നുകാലികള്‍ക്ക് തീറ്റ നല്‍കാന്‍ സൌകര്യമായിരിക്കും ചാണകവും മൂത്രവും ശേഖരിക്കാനുള്ള കുഴികള്‍ തൊഴുത്തില്‍ നിന്നും ദൂരെ ഉണ്ടാക്കുന്നതാണ് ഉത്തമം. എങ്കിലും ചാണകം വാരിയിടാനുള്ള എളുപ്പത്തിന് തൊഴുത്തിനോട് ചേര്‍ത്താണ് പല കര്‍ഷകരും കുഴി ഉണ്ടാക്കുന്നത്. അത്തരം സാഹചര്യത്തില്‍ മൂത്രം പ്രത്യേകം ശേഖരിച്ച് മാറ്റുവാനുള്ള മൂത്രച്ചാല്‍ തൊഴുത്തില്‍ ഉണ്ടാക്കണം. തൊഴുത്തിന്‍റെ മേല്‍ക്കൂര നിര്‍മ്മിക്കാന്‍ ഓട്, ഓല, ആസ്ബറ്റോസ് ഷീറ്റ്, ലൈറ്റ് റൂഫ് എന്നിവ ഉപയോഗിക്കാം. പാദേശികമായി ലഭിക്കുന്ന ചെലവു കുറഞ്ഞ വസ്തുക്കള്‍ ഉപയോഗപ്പെടുത്തി തൊഴുത്തു നിര്‍മ്മിക്കുവാന്‍ പ്രതേകം ശദ്ധിക്കേണ്ടതാണ്.', '2016-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `pamount` int(10) NOT NULL,
  `samount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`pamount`, `samount`) VALUES
(30, 40);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `cname` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `date` date NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`username`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
