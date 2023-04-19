--
-- Database: `project`
-------------------------------------------------------------------------------
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int NOT NULL,
  `user_id` varchar(26) COLLATE utf8mb4_general_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
);


-- Table structure for table `registration`

CREATE TABLE `registration` (
  `id` int NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipcode` int NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint NOT NULL,
  `gender` varchar(255) NOT NULL
);

--
--- Table structure for table `school_registration`
--

CREATE TABLE `school_registration` (
  `school_id` int NOT NULL,
  `School Name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `School City` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `School Address` varchar(2555) COLLATE utf8mb4_general_ci NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_registration`
--
ALTER TABLE `school_registration`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_id` (`school_id`),
  ADD KEY `school_id_2` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
