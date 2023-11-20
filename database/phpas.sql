-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 03:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpas`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, '                            Hello, thank you for visiting my website! We are 3D printing enthusiasts and the brains behind this operation. We have always been fascinated by how 3D printers have revolutionized the industry, making waves in our industries. The way they bring designs to life is simply mind-boggling. If you\'re curious about how 3D printers work or pondering a career in this field, you\'re in the right place! We\'ll be diving into the nitty-gritty of 3D printing, exploring exciting career paths, and shedding light on the technical elements of 3D printing.                                  ');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `featured` mediumtext NOT NULL,
  `link` varchar(500) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `featuredArticles` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category`, `title`, `author`, `image`, `text`, `featured`, `link`, `likes`, `featuredArticles`) VALUES
(24, 'Career', '9 Cool 3D Printing Jobs', 'Eduardo Vasconcellos', 'img/indeed.jpg', 'As the 3D printing industry booms, what does this mean for job seekers? There are many career opportunities that have been created or are getting a boost from the popularity of 3D printing. But there are also pros and cons to consider before pursuing one.\r\n\r\nWhat is 3D printing?\r\nRather than using ink and paper, a 3D printer uses materials like plastic, metal or ceramic to create a 3D model. By using computer-aided design (CAD) files as digital instructions to create an object, a 3D printer repeatedly covers a work surface with layers of material in precisely the right spots to create a structure from scratch. \r\n\r\nWhile 3D printing can be used for large-scale structures, it’s most helpful in creating smaller, customized parts or prototype components for various uses, including automotive engineering and the medical industry. With the versatility of 3D printing, it’s a field filled with opportunities. [Read related article: 3D Printing Applications for Business]\r\n\r\n3D printing jobs\r\nThe possibilities for working with 3D printing are practically limitless. Consider these nine jobs if you’d like to take your career in this direction.', 'Former President Barack Obama once said 3D printing has the “potential to revolutionize the way we make almost everything.” If you aren’t using the technology yet, know that plenty of people are already using it across a number of sectors. 3D printing had a global market size of $16.8 billion in 2022, according to Grand View Research. By 2030, that number is expected to hit more than $72 billion.', 'https://www.businessnewsdaily.com/5125-3d-printing-jobs.htm', 27, 0),
(25, 'Career', 'Careers in 3D Printing', 'Mara Hitner', 'img/WorkingMan.png', 'When speaking with teachers about their efforts to bring 3D design and 3D printing programs into their K-12 classrooms, the one pervasive question is still – why? Teachers try to get funding from administration and are asked – why do you need a 3D printer? Administration springs funding on teachers earmarked for 3D printers, and teachers ask – why do I need to take time out of my classroom to teach how to use a 3D printer? Teachers introduce 3D printing to their classrooms and the parents ask – why are you wasting my child’s time with some “fad”?\r\nAnswer – preparation for future jobs. And current jobs. ALL the jobs. Medicine, video games, architecture, manufacturing, product design, special effects for TV and movies, automotive, entrepreneurial efforts we’ve never even heard of (like desktop 3D printers themselves were in 2011) and more all require some form of 3D modeling skills. And the tool of choice to fabricate those models in reality – prototype or final product – is 3D printing.\r\n\r\nTeaching simple 3D modeling software like Tinkercad in schools not only prepares students to broaden the scope of job opportunities they might not have considered before, but the practice of designing something in CAD software also covers core STEAM (science, technology, engineering, arts, and math) standards that need to be taught anyway.\r\n\r\nEngagement is the unique factor here. Teachers need to work especially hard with the current generation to grab their attention and keep them engaged. Brains are changing. There are more tactile learners and kids that have various issues with paying attention than ever before (even if that issue is being distracted by the cell phone in their pocket.) Incorporating 3D design and 3D printing into the lessons teachers need to teach anyway makes the lesson stick and the classroom time more fun.\r\n\r\nRead the full article, including examples of vocations you may not have thought about before which require 3D modeling and 3D printing skills — medicine, architecture, manufacturing, product design, special effects for TV and movies, anthropology, automotive, entrepreneurial — at MatterHackers.\r\n\r\nDiscuss education, careers, and other 3D printing topics at 3DPrintBoard.com or share your thoughts in the Facebook comments below. ', 'It’s not just a fad. Explore how people are using 3D printers in their careers and why it’s important to teach the next generation about this growing technology.', 'https://3dprint.com/193097/careers-in-3d-printing/', 10, 0),
(26, 'Industry', 'Researchers Develop New Fungi-Based 3d Printing Material', 'Alex Tyrer-Jones', 'img/3dPrint-Fungi.jpeg', 'Researchers from the Shape Lab at the Institute of Architecture and Media at Graz University of Technology have developed MyCera, a new fungi-based 3D printing material.\r\n\r\nComposed of clay, wood sawdust, and mycelium (the vegetative part of fungi), MyCera has been developed with the overall goal of reducing CO2 emissions and solving global waste management problems. \r\n\r\nThis research project uses mycelium as an intelligently oriented fiber reinforcement to improve the structural performance of 3D printed unfired clay elements, and allow for bio-welding of fired elements. Because the mycelium-based material continues to grow after being 3D printed, MyCera is said to offer high-tensile strength and structural performance.      \r\n\r\nThe research team’s findings, entitled “MyCera. Application of mycelial growth within digitally manufactured clay structures,” have been published in the International Journal of Architectural Computing.  \r\n\r\n“The overall research goal focuses on finding a viable, long-term solution to the global problem of waste management and CO2 emissions, which also affects the building industry and construction waste management,” the team explained in the research paper.\r\n\r\n“The composite ‘MyCera’ shows notable structural properties when compared to the same material mixture without mycelium. […] It is assumed that the high increase in tensile strength is caused by the growth process that takes place after printing.” \r\n\r\nThe researchers added that “This kind of intelligent fiber distribution could not have been achieved with a non-growing material.”', 'Researchers from the Shape Lab at the Institute of Architecture and Media at Graz University of Technology have developed MyCera, a new fungi-based 3D printing material.\r\n\r\nComposed of clay, wood sawdust, and mycelium (the vegetative part of fungi), MyCera has been developed with the overall goal of reducing CO2 emissions and solving global waste management problems. ', 'https://3dprintingindustry.com/news/researchers-develop-new-fungi-based-3d-printing-material-225036/', 0, 0),
(27, 'Industry', 'Past And Future Collide: Adidas 3D Printed Mc87 4D Golf                     Shoes Channel ‘80s Vibes', 'Ada Shaikhnag', 'img/3dprint-Shoes.jpg', 'What sets the MC87 4D apart is its incorporation of Carbon’s Digital Light Synthesis (DLS) 3D printing process. It boasts the novel 4D midsole, marking the first time Adidas has featured this technology in a golf shoe. The 4D midsole is crafted through a precise process that uses light and oxygen, resulting in a lattice structure. This structure is not just for aesthetics; it’s designed to provide controlled energy return, says the manufacturer.\r\n\r\n“Over the last 18 months we’ve noticed golfers wanting more vintage designs, and we’re in a unique position where our archives provide some amazing product inspiration as we continue our mission to be the most progressive golf brand in the world,” said Masun Denison, Global Footwear Director, Adidas Golf. “We challenged ourselves to combine the timeless aesthetics from the past with the technology of today, and MC87 4D was the perfect result. It’s a very special silhouette, a first for us in golf using the 4D technology, and it will be one that golfers everywhere will be excited about.”', 'Building on its 3D printed footwear portfolio, sports equipment manufacturing firm Adidas has introduced the MC87 4D, a limited-edition spikeless golf footwear model.', 'https://3dprintingindustry.com/news/past-and-future-collide-adidas-3d-printed-mc87-4d-golf-shoes-channel-80s-vibes-225092/', 6, 1),
(28, 'Technical', 'AI-driven tool makes it easy to personalize 3D-printable models', 'Adam Zewe', 'img/MIT-Style2Fab-01-press_0.jpg', 'As 3D printers have become cheaper and more widely accessible, a rapidly growing community of novice makers are fabricating their own objects. To do this, many of these amateur artisans access free, open-source repositories of user-generated 3D models that they download and fabricate on their 3D printer.\r\n\r\nBut adding custom design elements to these models poses a steep challenge for many makers, since it requires the use of complex and expensive computer-aided design (CAD) software, and is especially difficult if the original representation of the model is not available online. Plus, even if a user is able to add personalized elements to an object, ensuring those customizations don’t hurt the object’s functionality requires an additional level of domain expertise that many novice makers lack.\r\n\r\nTo help makers overcome these challenges, MIT researchers developed a generative-AI-driven tool that enables the user to add custom design elements to 3D models without compromising the functionality of the fabricated objects. A designer could utilize this tool, called Style2Fab, to personalize 3D models of objects using only natural language prompts to describe their desired design. The user could then fabricate the objects with a 3D printer.', 'As 3D printers have become cheaper and more widely accessible, a rapidly growing community of novice makers are fabricating their own objects. To do this, many of these amateur artisans access free, open-source repositories of user-generated 3D models that they download and fabricate on their 3D printer.', 'https://news.mit.edu/2023/ai-driven-tool-personalize-3d-printable-models-0915', 0, 0),
(29, 'Technical', 'Invisible tagging system enhances 3D object tracking', 'Alex Shipps', 'img/MIT-BrightMarker.jpg', 'swd', 'Developed by MIT researchers, BrightMarkers are invisible fluorescent tags embedded in physical objects to enhance motion tracking, virtual reality, and object detection.', 'https://news.mit.edu/2023/enhancing-3d-object-tracking-invisible-tagging-system-0815', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `personId` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `industry` tinyint(1) DEFAULT 0,
  `technical` tinyint(1) DEFAULT 0,
  `career` tinyint(1) DEFAULT 0,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`personId`, `fname`, `lname`, `email`, `industry`, `technical`, `career`, `role`) VALUES
(1, 'Anitha', 'Nathan', 'aarthi.nathan@ryerson.ca', 0, 0, 0, NULL),
(2, 'Anitha', 'Nathan', 'aarthi.nathan@ryerson.ca', 0, 0, 1, 'Writer'),
(3, 'Anitha', 'Nathan', 'aarthi.nathan@ryerson.ca', 0, 0, 1, 'Writer'),
(4, 'Anitha', 'Nathan', 'aarthi.nathan@ryerson.ca', 0, 0, 1, 'Writer'),
(5, 'Anitha', 'Nathan', 'aarthi.nathan@ryerson.ca', 0, 0, 1, 'Writer'),
(6, 'Anitha', 'Nathan', 'nathaani@sheridancollege.ca', 1, 0, 0, 'Contributor');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `personId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`personId`, `username`, `password`, `role`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'anisi', '123', 'member'),
(9, 'test', 'test', 'member'),
(10, 'test2', 'test2', 'member'),
(11, 'member', 'member', 'member'),
(12, 'work', 'work', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`personId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`personId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `personId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `personId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
