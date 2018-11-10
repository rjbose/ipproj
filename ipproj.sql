-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 09:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `srno` int(255) NOT NULL,
  `query` mediumtext NOT NULL,
  `answer` mediumtext NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`srno`, `query`, `answer`, `category`) VALUES
(0, 'how to buy bitcoin', 'Here\'s how to get started:\r\nDownload the app \"Coinbase.\"\r\nCreate a Coinbase account.\r\nNow you\'re logged in. Look at that daily volatility!\r\nAdd a payment account.\r\nYou\'re ready to buy. Tap the Buy button again.\r\nYou can also buy Ethereum.\r\nPrepare for the fraud prevention call. ...\r\nLearn more!', 'technology'),
(4, 'how to install linux', '1.Choose a distro. Linux itself is just a kernel, and is useless by itself. Thus people\r\nwho use linux package it with other software to make a complete Linux-based\r\noperating system. These complete operating systems are referred to as Linux\r\ndistributions, or distros for short. I personally use Solus. Ubuntu is somewhat of a\r\nstandard, though a bit unreliable in my experience. I’ve heard Zorin OS is fairly\r\nuser-friendly, but I’ve never tried it.\r\n2.Download the installer from your distro’s site, and burn it to a disk or USB.\r\nWindows makes burning a disk simple. Burning a bootable USB is somewhat more\r\ncomplex, and you’ll need to download a program to do it.\r\n3.Now is a good time to back up your system. If you have any valuable data on\r\nyour system you pretty much need to back it up.\r\n4.Insert the installer, boot to it, and answer the questions it asks. When it asks\r\nyou whether to keep Windows or wipe it, I personally wipe it, but if you need\r\nWindows on that system, keep it. That said, keep your backup in case something\r\nbreaks.\r\n5.Remove the installer when it tells you to. Boot to your hard drive. You are now\r\nrunning Linux.', 'technology'),
(5, 'How to use new group feature of Google maps', 'Internet search giant Google has rolled out a new feature for its Maps app, which\r\nwill be quite a boon among those who love eating out with friends.\r\nCalled the group planning feature, this tool will allow users to easily share the\r\nlinks of the restaurants they wish to suggest to their friends. Here&#39;s how you can\r\ndo it:\r\n\r\n1. Open Google Maps app\r\n2. Tap on Restaurants in the Explore tab\r\n3. Long Press on any location\r\n4. Drop the link in a small floating bubble, which appears on the lower right side\r\nof the screen\r\n5. After shortlisting all the places, share them on any social messaging platform\r\nsuch as WhatsApp, Facebook Messenger or Google Hangouts\r\nThis shared link will show the locations of all the restaurants you have selected\r\nand once all your friends have the shortlisted restaurants, they can then vote for\r\nthem in the form of likes and dislikes to express their preference. Each member of\r\nthe group also has the option to add and delete places, as per their choice. The\r\nshared link redirects all the group members to the Google Maps app, however, if\r\na group member doesn&#39;t have the app they can also view it on the web.', 'technology'),
(10, 'how to buy bitcoin', 'Here\'s how to get started:\r\nDownload the app \"Coinbase.\"\r\nCreate a Coinbase account.\r\nNow you\'re logged in. Look at that daily volatility!\r\nAdd a payment account.\r\nYou\'re ready to buy. Tap the Buy button again.\r\nYou can also buy Ethereum.\r\nPrepare for the fraud prevention call. ...\r\nLearn more!', 'technology'),
(11, 'comibinig videos on iphone\r\n', 'For those people who have lots of video clips in their iPhone and want to merge those into one, we have come up with some amazing and useful apps to combine videos on iPhone. Letâ€™s get off the ground to learn the methods.   Part1: Combine videos with iMovie  Part2: Combine videos with Videoshop  Part3: Combine videos with Filmora Part1: Combine videos with iMovie iMovie is one of the apps in the list that can assist you to merge videos on iPhone. You can yourself create beautiful movies with the assistance of iMovie. Once you combine videos on iPhone, this app will let you transfer your videos between various iOS devices via AirDrop or iCloud Drive. Here is how you can add videos together on iPhone via iMovie.  Step 1 â€“ Launch iMovie app and get under the â€œProjectâ€ section available on the top of the screen.  Step 2 â€“ Now, tap on â€œCreate Projectâ€ and then select the video type out of the two options available, i.e. â€œMovieâ€ or â€œTrailerâ€, select â€œMovieâ€ in this case. Next, tap on â€œCreateâ€ from the next screen. Or you can import video from File.  Step 3 â€“ Your project interface has now been successfully loaded on your screen. Now, to add the source video file, tap the â€œMediaâ€ icon on the left top of the timeline and your video gallery will load up on your screen. Select the desired source video and tap the â€œAddâ€ icon to add it on the iMovieâ€™s timeline.  Step 4 â€“ Once your preferred video is added on the timeline, you can scroll the timeline to left or right to let the vertical line known as \"playheadâ€™ appear on the screen. Now, place the playhead by scrolling left or right, exactly at the place where you desire to combine the video. Step 5 â€“ This is the time where you need to add another video which you wish to combine with the source video. Follow the same process mentioned above to get your video added on the timeline. ', 'technology'),
(12, 'undefined', 'You Should Know Before You Root Your Android Smartphone When Android and iOS fanboys go head to head, one of the pros often quoted by the former group is that Android is much easier to root and mod.  Now, that seems like itâ€™s probably a complex process but, with a little guidance, it can be a pretty straightforward undertaking. So hereâ€™s everything you need to know before you get started. In case youâ€™re in the dark, rooting a smartphone simply refers to a process that gains you access to system files and folders that are usually locked off. Itâ€™s no different than gaining access to the administrator profile on your work PC. You can do whatever you want, even if that involves completely bricking the device.  Rooting lets you install custom ROMs that change the look and working of your OS, remove bloatware the smartphone shipped with, and install apps from places other than the Google Play Store.', 'technology'),
(13, 'how to root android phone', 'You Should Know Before You Root Your Android Smartphone When Android and iOS fanboys go head to head, one of the pros often quoted by the former group is that Android is much easier to root and mod.  Now, that seems like itâ€™s probably a complex process but, with a little guidance, it can be a pretty straightforward undertaking. So hereâ€™s everything you need to know before you get started. In case youâ€™re in the dark, rooting a smartphone simply refers to a process that gains you access to system files and folders that are usually locked off. Itâ€™s no different than gaining access to the administrator profile on your work PC. You can do whatever you want, even if that involves completely bricking the device.  Rooting lets you install custom ROMs that change the look and working of your OS, remove bloatware the smartphone shipped with, and install apps from places other than the Google Play Store.', 'technology'),
(16, 'Shrimp, Leek, and Spinach Pasta', ' How to Make It Step 1  Cook the pasta according to the package directions; drain and return it to the pot. Step 2  Meanwhile, heat the butter in a large skillet over medium heat. Add the leeks, Â½ teaspoon salt, and Â¼ teaspoon pepper and cook, stirring occasionally, until the leeks have softened, 3 to 5 minutes. Step 3  Add the shrimp and lemon zest and cook, tossing frequently, until the shrimp is opaque throughout, 4 to 5 minutes more. Step 4  Add the cream and Â½ teaspoon salt to the pasta in the pot and cook over medium heat, stirring, until slightly thickened, 1 to 2 minutes. Add the shrimp mixture and the spinach and toss to combine.', 'cooking'),
(18, 'how to invest in mutual funds', 'Many people are afraid of Equity because it can give negative returns, which is 100% true and possible, but people do not understand that it is not a short term wealth building asset class. Itâ€™s something for long term. When you invest in Equity for Long term, you are bound to get excellent returns given that you have faith on Statistics, Historical performance and the concept of Equity in general.  Stocks are one of the best performing asset class. What price would be right? In short term the price of a stock is determined by technical factors like, volume of transactions, rate of change, momentum, moving averages etc. In the long term however fundamentals of the company determine the stock price.  Â· How much return on investment in stocks to expect?  Â· Is buying stocks risky?  Â· Should one invest in Equity for Long term?  Â· How much is long term?  Â· How long term will make the stocks absolutely risk free?  Â· How much better return does SIP give over one time investment?  Â· Is this right time to invest in stocks?  Following article is really informative and helpful.  http://www.jagoinvestor.com/2009...  Four Charts which will change your perception about Equity  In this path breaking article the author has discussed some amazing numbers and graphs â€˜which will change your perception about Equity.â€™ The author has drawn 4 charts and explained them to show the Power of Equity. It shows the return potential of Equity in different time frames and the kind of return we should expect from equity in Long run like 15-20-25 yrs', 'cooking');

-- --------------------------------------------------------

--
-- Table structure for table `unanswered`
--

CREATE TABLE `unanswered` (
  `srno` int(255) NOT NULL,
  `query` mediumtext NOT NULL,
  `category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unanswered`
--

INSERT INTO `unanswered` (`srno`, `query`, `category`) VALUES
(14, 'How to install linux?', 'technology'),
(15, 'How to solve linear equations?', 'education');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(5, 'nendsude', 'abcd@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2018-09-02 14:49:41'),
(8, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2018-09-17 07:55:11'),
(10, 'vegana', 'fecesuvac@rupayamail.com', 'e2fc714c4727ee9395f324cd2e7f331f', '2018-10-18 16:52:13'),
(11, 'admin', 'admin@bazooka.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-10-18 22:20:42'),
(12, 'mahboob', 'nmnmn@fdfdfdfd.com', 'fd03abf5012ede5805f4882e0fec2b14', '2018-10-20 22:54:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `unanswered`
--
ALTER TABLE `unanswered`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `unanswered`
--
ALTER TABLE `unanswered`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
