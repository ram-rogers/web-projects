

CREATE TABLE `admin` (
  `aid` int NOT NULL,
  `aname` varchar(50) NOT NULL,
  `apassword` varchar(50) NOT NULL
) 



INSERT INTO `admin` (`aid`, `aname`, `apassword`) VALUES
(1, 'admin', '1234');


CREATE TABLE `book` (
  `bid` int NOT NULL,
  `btitle` varchar(150) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL
) 



CREATE TABLE `comment` (
  `cid` int NOT NULL,
  `bid` int NOT NULL,
  `sid` int NOT NULL,
  `comm` varchar(150) NOT NULL,
  `logs` date NOT NULL
) 



CREATE TABLE `request` (
  `rid` int NOT NULL,
  `id` int NOT NULL,
  `mes` varchar(150) NOT NULL,
  `logs` datetime NOT NULL
) 



CREATE TABLE `student` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `dep` varchar(150) NOT NULL
)


ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);


ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

