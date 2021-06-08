-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 01:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_short_description` varchar(500) NOT NULL,
  `blog_long_description` longtext NOT NULL,
  `blog_category` int(11) DEFAULT NULL,
  `blog_time` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_short_description`, `blog_long_description`, `blog_category`, `blog_time`) VALUES
(1, 'React!', 'React is an open-source front-end JavaScript library for building user interfaces or UI components. It is maintained by Facebook and a community of individual developers and companies.', '<h1><strong>What Is React?</strong></h1>\r\n\r\n<p><span style=\"font-size:14px\"><strong>React</strong>&nbsp;(also known as&nbsp;<strong>React.js</strong>&nbsp;or&nbsp;<strong>ReactJS</strong>) is an&nbsp;<a href=\"https://en.wikipedia.org/wiki/Open-source\" title=\"Open-source\">open-source</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Front_end_and_back_end\" title=\"Front end and back end\">front-end</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/JavaScript_library\" title=\"JavaScript library\">JavaScript library</a><sup><a href=\"https://en.wikipedia.org/wiki/React_(JavaScript_library)#cite_note-react-3\">[3]</a></sup>&nbsp;for building&nbsp;<a href=\"https://en.wikipedia.org/wiki/User_interfaces\" title=\"User interfaces\">user interfaces</a>&nbsp;or UI components. It is maintained by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Facebook\" title=\"Facebook\">Facebook</a>&nbsp;and a community of individual developers and companies.<sup><a href=\"https://en.wikipedia.org/wiki/React_(JavaScript_library)#cite_note-4\">[4]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/React_(JavaScript_library)#cite_note-5\">[5]</a></sup><sup><a href=\"https://en.wikipedia.org/wiki/React_(JavaScript_library)#cite_note-6\">[6]</a></sup>&nbsp;React can be used as a base in the development of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Single-page_application\" title=\"Single-page application\">single-page</a>&nbsp;or mobile applications. However, React is only concerned with state management and rendering that state to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Document_Object_Model\" title=\"Document Object Model\">DOM</a>, so creating React applications usually requires the use of additional libraries for routing, as well as certain client-side functionality.</span></p>\r\n\r\n<p><img alt=\"\" src=\"data:image/png;base64,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\" style=\"height:169px; width:298px\" /></p>\r\n\r\n<div>\r\n<pre>\r\n&lt;div id=&quot;myReactApp&quot;&gt;&lt;/div&gt;\r\n\r\n&lt;script type=&quot;text/babel&quot;&gt;\r\n  function Greeter(props) {\r\n    return &lt;h1&gt;{props.greeting}&lt;/h1&gt;;\r\n  }\r\n  let App = &lt;Greeter greeting=&quot;Hello World!&quot; /&gt;;\r\n  ReactDOM.render(App, document.getElementById(&#39;myReactApp&#39;));\r\n&lt;/script&gt;</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">The&nbsp;<code>Greeter</code>&nbsp;function is a React component that accepts a property&nbsp;<code>greeting</code>. The variable&nbsp;<code>App</code>&nbsp;is an instance of the&nbsp;<code>Greeter</code>&nbsp;component where the&nbsp;<code>greeting</code>&nbsp;property is set to&nbsp;<code>&#39;Hello World!&#39;</code>. The&nbsp;<code>ReactDOM.render</code>&nbsp;method then renders our Greeter component inside the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Document_Object_Model\" title=\"Document Object Model\">DOM</a>&nbsp;element with id&nbsp;<code>myReactApp</code>.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n&lt;div id=&quot;myReactApp&quot;&gt;\r\n  &lt;h1&gt;Hello World!&lt;/h1&gt;\r\n&lt;/div&gt;</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Virtual DOM!</strong></h1>\r\n\r\n<p><span style=\"font-size:14px\">Another notable feature is the use of a virtual Document Object Model, or virtual DOM. React creates an in-memory data structure cache, computes the resulting differences, and then updates the browser&#39;s displayed DOM efficiently.</span><span style=\"font-size:11.6667px\"> </span><span style=\"font-size:14px\">This process is called&nbsp;</span><strong style=\"font-size:14px\">reconciliation</strong><span style=\"font-size:14px\">. </span></p>\r\n\r\n<p><span style=\"font-size:14px\">This allows the programmer to write code as if the entire page is rendered on each change, while the React libraries only render subcomponents that actually change. This selective rendering provides a major performance boost. It saves the effort of recalculating the CSS style, layout for the page, and rendering for the entire page.</span></p>\r\n</div>\r\n', 2, '2021-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`course_id`, `course_name`, `course_description`) VALUES
(1, 'PYTHON', 'Category for python courses'),
(2, 'REACT', 'For react courses'),
(3, 'ANGULAR', 'Angular course for beginners.'),
(4, 'WEB DEVELOPMENT', 'Web development course for begginners.'),
(5, 'DOCKER', 'Category for docker cources'),
(6, 'LOAD BALANCERS', 'Get an understanding of load balancers.'),
(7, 'SQL', 'Learn all SQL-related concepts.'),
(8, 'KUBERNETES', 'A category for Kubernetes content.');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `note_title` varchar(50) NOT NULL,
  `note_link` varchar(100) NOT NULL,
  `note_description` varchar(300) DEFAULT NULL,
  `note_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `note_title`, `note_link`, `note_description`, `note_category`) VALUES
(1, 'MTA SQL', 'https://drive.google.com/file/d/13je8A-MBiH4704TvbxeRw_pX8X4AursT/view?usp=sharing', 'MTA SQL handbook. Single book for clearing MTA SQL exam.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_role` smallint(6) NOT NULL DEFAULT 0,
  `is_block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `is_block`) VALUES
(1, 'Shubham Kumar', 'shubham@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(2, 'Neha Joshi', 'neha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(3, 'Arush Mathew', 'arush@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(4, 'Kanchan Rajput', 'kanchanrajput11097@gmail.com', '45dc094d13e6e0ee7f8d0e794a318eea', 0, 0),
(5, 'KANCHAN RAJPUT', 'kanchanrajput@gmail.com', '3b2f1ce2b91267414acd510e4b6a7bdd', 0, 0),
(6, 'Rahul Rajput', 'rahul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(50) NOT NULL,
  `video_link` varchar(50) NOT NULL,
  `video_description` varchar(300) DEFAULT NULL,
  `video_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_title`, `video_link`, `video_description`, `video_category`) VALUES
(1, 'Complete python course', 'https://www.youtube.com/embed/_uQrJ0TkZlc', 'Complete python course for beginners. A 5hr tutorial.', 1),
(2, 'Basic React Course', 'https://www.youtube.com/embed/Ke90Tje7VS0', 'Basic react course for beginners.', 2),
(3, 'Angular for beginners', 'https://www.youtube.com/embed/k5E2AVpwsko', 'Basic angular for beginners to start with.', 3),
(4, 'HTML', 'https://www.youtube.com/embed/qz0aGYrrlhU', 'Basic html course for beginners.', 4),
(5, 'Advance python course', 'https://www.youtube.com/embed/WGJJIrtnfpk', 'Advance python course for intermediate to basic level', 1),
(6, 'Docker Introduction', 'https://www.youtube.com/embed/vCcdpuP6xEI', 'Get the introduction to docker', 5),
(7, 'What is Nginx', 'https://www.youtube.com/embed/WuH0T9FHDZ4', 'Get an understanding of what is nginx.', 6),
(8, 'Python course', 'https://www.youtube.com/embed/T936yTchDck', 'Python tutorial by intellipath. COlplete 10 hr tutorial', 1),
(9, 'Python tutorial', 'https://www.youtube.com/embed/rfscVS0vtbw', 'Python tutorial by freecodecamp. Complete 4hr tutorial', 1),
(10, 'SQL for Beginners', 'https://www.youtube.com/embed/7S_tz1z_5bA', 'Learn the basics of SQL in just 3hrs. Get started today.', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
