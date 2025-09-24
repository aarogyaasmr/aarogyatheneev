-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2025 at 02:05 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u397572463_aarogya`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutwebsite`
--

CREATE TABLE `aboutwebsite` (
  `id` int(11) NOT NULL,
  `aboutheading` longtext NOT NULL,
  `abouttext` longtext NOT NULL,
  `aboutimg` varchar(255) NOT NULL,
  `page_title` varchar(500) NOT NULL,
  `meta_keyword` varchar(500) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `aboutvision` longtext DEFAULT NULL,
  `aboutmission` longtext DEFAULT NULL,
  `brandbelief` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `aboutwebsite`
--

INSERT INTO `aboutwebsite` (`id`, `aboutheading`, `abouttext`, `aboutimg`, `page_title`, `meta_keyword`, `meta_description`, `aboutvision`, `aboutmission`, `brandbelief`) VALUES
(1, 'Elevate Your Well-Being with Our Holistic Programs\r\n', '<p style=\"text-align:justify\">At Aarogya The Neev, we understand the immense dedication and time individuals devote to their careers, often at the expense of their physical and mental health. This imbalance affects not only personal well-being but also productivity and overall happiness. Recognizing this critical need, we are revolutionizing the corporate environment by integrating flexible, innovative fitness and mental wellness programs into daily office life. Our customized plans, tailored to fit corporate workstyles, ensure that maintaining a healthy work-life balance becomes an achievable goal for all. By prioritizing well-being during office hours, we empower individuals to thrive both personally and professionally, fostering a healthier, more productive workforce.</p>\r\n', 'image/9591bhumikawebsite.png', '', '', '', 'We focus on your overall well-being through personalized workouts and emotional support. We keep it simple and sustainable, helping you overcome health challenges like thyroid issues and depression. Join us to regain your health and improve your life.', 'Our mission is to empower individuals to achieve holistic health and wellness. We provide personalized workout plans and emotional support to address specific health challenges such as thyroid issues and depression. Through simple, sustainable practices, we guide our clients on a journey to reclaim their health and enhance their quality of life.', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adate` varchar(255) DEFAULT NULL,
  `atime` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `phone`, `adate`, `atime`, `message`, `date_added`) VALUES
(1, 'kirti', 'bhumika.sangwan23@gmail.com', '8882107302', '2024-08-16', '12:22', 'hi', '2024-08-09 00:00:00'),
(2, 'Aarogya The Neev', 'bhumika.sangwan23@gmail.com', '08882107302', '2024-08-15', '15:24', 'Hello', '2024-08-09 00:00:00'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-03 00:00:00'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-09 00:00:00'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-21 00:00:00'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-07 00:00:00'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-19 00:00:00'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-27 00:00:00'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-29 00:00:00'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-05 00:00:00'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-17 00:00:00'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-24 00:00:00'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-19 00:00:00'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-19 00:00:00'),
(15, 'Yashika ', 'kadiyanyashika@gmail.com', '9053439256', NULL, NULL, 'Yoga session ', '2025-01-16 00:00:00'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 00:00:00'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 00:00:00'),
(18, 'Purushotam ', 'Gamerspk7@gmail.com', '9509223061', NULL, NULL, 'Fitness service ', '2025-01-31 00:00:00'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-04 00:00:00'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-07 00:00:00'),
(21, 'Ankit Jain', 'cosmicankit3848@gmail.com', '9680091368', NULL, NULL, 'Hi i a 24 M working in corporate who is struggling with sleep schedule. Espescially i am not able to fulfill the reuire hour of deep sleep', '2025-02-09 00:00:00'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 00:00:00'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 00:00:00'),
(24, 'Pankaj', 'pankajprajapati5250@gmail.com', '09877198764', NULL, NULL, 'Looking for fitness and health program for body', '2025-03-05 00:00:00'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-20 00:00:00'),
(26, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-21 00:00:00'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-01 00:00:00'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-19 00:00:00'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-21 00:00:00'),
(30, 'Manish marathe ', 'manish.marathe@dishmangroup.com', '7228957036', NULL, NULL, 'I am facing issue with bloating and neck pain', '2025-04-29 00:00:00'),
(31, 'Yashika', 'info@aarogyatheneev.com', '8882107302', NULL, NULL, 'DMP program', '2025-05-09 00:00:00'),
(32, 'Dhruvi', 'dhruviparekh75@gmail.com', '9221933787', NULL, NULL, 'I am a corporate professional and looking for a demo to understand your solutions for myself and my team', '2025-05-19 00:00:00'),
(33, 'Dhruvi Parekh', 'dhruviparekh75@gmail.com', '9221933787', NULL, NULL, 'need corporate wellness programs for my company\r\n', '2025-05-19 00:00:00'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-20 00:00:00'),
(35, 'Dhruvi Parekh', 'dhruviparekh75@gmail.com', '9221933787', NULL, NULL, 'need to have a call with you as to how ur services can benefit my company\r\n', '2025-05-20 00:00:00'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-22 00:00:00'),
(37, 'Manish marathe ', 'manish.marathe@dishmangroup.com', '7228957036', NULL, NULL, 'I have facing issue with bloating ', '2025-05-25 00:00:00'),
(38, 'Dhananjay Dharmadhikari ', 'ddhananjay2013@gmail.com', '+918879226297', NULL, NULL, 'Request a demo of services offered ', '2025-06-10 00:00:00'),
(39, 'Dhananjay Dharmadhikari ', 'ddhananjay2013@gmail.com', '+918879226297', NULL, NULL, 'Request a demo of services offered ', '2025-06-10 00:00:00'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-22 00:00:00'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-24 00:00:00'),
(42, 'iodfhjfvgy', 'dfkfuprl@testform.xyz', '+1-234-884-5332', NULL, NULL, 'zyknrsendyfikejonkfhwotjsyfpur', '2025-06-27 00:00:00'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-09 00:00:00'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-09 00:00:00'),
(45, '* * * Claim Free iPhone 16: https://palkutumb.com/index.php?8miys5 * * * hs=553ab97e002c3466eedc328eb9bba9c5* ххх*', 'pazapz@mailbox.in.ua', '396790835925', NULL, NULL, '19h2df', '2025-07-22 00:00:00'),
(46, '* * * <a href=\"https://palkutumb.com/index.php?8miys5\">Snag Your Free Gift</a> * * * hs=553ab97e002c3466eedc328eb9bba9c5* ххх*', 'pazapz@mailbox.in.ua', '396790835925', NULL, NULL, '19h2df', '2025-07-22 00:00:00'),
(47, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-28 00:00:00'),
(48, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-28 00:00:00'),
(49, 'Sahil', 'Sahilkumar08444@gmail.com', '6306462579', NULL, NULL, 'Hii', '2025-08-19 00:00:00'),
(50, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-21 00:00:00'),
(51, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `tops` int(11) NOT NULL,
  `bottom` int(11) NOT NULL,
  `home` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `linkname` varchar(255) NOT NULL,
  `page_title` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `banner` varchar(255) NOT NULL,
  `banner1` varchar(255) NOT NULL,
  `banner2` varchar(255) NOT NULL,
  `shortdescription` mediumtext NOT NULL,
  `description` text DEFAULT NULL,
  `homelist` mediumtext NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `pid`, `tops`, `bottom`, `home`, `name`, `subname`, `linkname`, `page_title`, `meta_keyword`, `meta_description`, `banner`, `banner1`, `banner2`, `shortdescription`, `description`, `homelist`, `status`, `date_added`, `date_modify`) VALUES
(7, NULL, 1, 1, '1', 'How Yoga Boosts Corporate Life 🌟', 'How Yoga Boosts Corporate Life 🌟', 'how-yoga-boosts-corporate-life-', 'How Yoga Boosts Corporate Life', '', '', 'cms/95481.jpg', '', '', '<p>Incorporating yoga into a busy corporate lifestyle can help employees stay balanced, energized, and focused. Here&rsquo;s a closer look at how it benefits both individuals and the workplace!</p>\r\n', '<p><strong>1. Stress Relief &amp; Enhanced Focus</strong><br />\r\nHigh-stress environments often lead to burnout and mental fatigue. Yoga, through practices like deep breathing and mindfulness, helps lower stress hormones and gives employees the mental clarity needed to handle demanding tasks calmly.</p>\r\n\r\n<p><strong>2. Better Posture &amp; Pain Reduction</strong><br />\r\nSitting for hours can cause neck, back, and shoulder pain. Yoga stretches specifically target these problem areas, reducing strain and improving flexibility, which lowers the risk of long-term issues like chronic back pain.</p>\r\n\r\n<p>3<strong>. Increased Energy &amp; Productivity</strong><br />\r\nYoga energizes both body and mind, enhancing productivity. By boosting blood circulation and oxygenating the brain, a short yoga session can lift midday fatigue and bring back focus and motivation.</p>\r\n\r\n<p><strong>4. Emotional Balance &amp; Resilience</strong><br />\r\nWorkplace stress isn&rsquo;t just physical&mdash;it affects emotions too. Yoga teaches employees to be present, helping them handle challenges calmly, stay composed, and think before reacting, which improves overall workplace harmony.</p>\r\n\r\n<p><strong>5. Work-Life Balance &amp; Relaxation</strong><br />\r\nWith yoga, employees learn the art of mindfulness, which helps them transition out of &ldquo;work mode&rdquo; when the day ends. This separation reduces burnout and increases job satisfaction, as employees can disconnect and focus on their personal lives.</p>\r\n', '', 1, '2024-10-30 06:08:47', '2025-09-15 09:27:44'),
(9, NULL, 1, 1, '1', 'Laughter Yoga: A Game-Changer for Corporate Wellness', '', 'laughter-yoga-a-gamechanger-for-corporate-wellness', 'Laughter Yoga: A Game-Changer for Corporate Wellness', 'Laughter Yoga: A Game-Changer for Corporate Wellness', 'Laughter Yoga: A Game-Changer for Corporate Wellness', 'cms/31591.jpg', '', '', '<p>In the high-pressure environment of corporate life, stress and burnout are often uninvited guests. Deadlines, long hours, and never-ending meetings take a toll on employees&#39; mental and physical well-being.&nbsp;</p>\r\n', '<p>Enter Laughter Yoga &ndash; the perfect blend of fun and fitness that&rsquo;s transforming workplaces worldwide.</p>\r\n\r\n<p><strong>What is Laughter Yoga?</strong><br />\r\nLaughter Yoga combines unconditional laughter with deep breathing techniques. It&rsquo;s not about jokes or comedy; instead, it uses intentional laughter exercises, which quickly turn into contagious giggles. The result? A stress-busting, energy-boosting session that feels like a workout without the sweat.<br />\r\nWhy Laughter Yoga Fits Perfectly in Corporate Settings</p>\r\n\r\n<p><strong>Stress Relief</strong><br />\r\nLaughter lowers cortisol levels (the stress hormone) and boosts endorphins (the feel-good hormone). Employees leave sessions feeling refreshed and rejuvenated.</p>\r\n\r\n<p><strong>Boosts Team Bonding</strong><br />\r\nLaughter Yoga breaks the ice and creates a sense of camaraderie among team members, fostering better communication and collaboration.</p>\r\n\r\n<p><strong>Enhances Focus and Productivity</strong><br />\r\nA 15-minute session can clear mental clutter, helping employees focus better and work smarter.</p>\r\n\r\n<p><strong>Improves Physical Health</strong>&nbsp;<br />\r\nLaughing is a natural cardio workout! It enhances blood circulation, strengthens the immune system, and even improves lung capacity.</p>\r\n\r\n<p><strong>Accessible and Inclusive</strong><br />\r\nNo yoga mats, fancy attire, or prior experience is required. Everyone can participate, making it a truly inclusive activity.</p>\r\n\r\n<p>After all, a laughing employee is a happy, healthy, and productive employee!</p>\r\n\r\n<p>#SpreadTheGiggles #CorporateWellness #LaughterYoga #StressReliefTips #TeamBuilding #WorkplaceHappiness #MindfulLiving #YogaForAll #LaughOutLoud</p>\r\n', '', 1, '2024-11-07 06:25:57', '2024-12-03 06:36:38'),
(10, NULL, 1, 1, '1', 'Morning Energizer Yoga: The Secret to Corporate Success', '', 'morning-energizer-yoga-the-secret-to-corporate-success', 'Morning Energizer Yoga: The Secret to Corporate Success', 'Morning Energizer Yoga: The Secret to Corporate Success', 'Morning Energizer Yoga: The Secret to Corporate Success', 'cms/5849ego-eradicator-morning-yoga-pose.jpg', '', '', '<p>In the fast-paced corporate world, mornings can feel like a race against time. Deadlines, meetings, and emails demand attention, leaving little space to focus on yourself. That&rsquo;s where Morning Energizer Yoga comes in&mdash;a simple yet powerful practice to jumpstart your day with energy, focus, and positivity.</p>\r\n', '<p>Here&#39;s how it helps transform corporate lives:<br />\r\n<br />\r\n<strong>1. Boosts Productivity </strong>✨<br />\r\nMorning yoga awakens your mind and body, preparing you to tackle challenges with clarity and determination. A 15-minute yoga flow stimulates blood circulation, enhances brain function, and improves concentration&mdash;essential for brainstorming and problem-solving.<br />\r\n<br />\r\n<strong>2. Reduces Stress and Anxiety</strong><br />\r\nCorporate life often brings pressure and stress, which can cloud judgment and lead to burnout. Yoga helps release tension, lowers cortisol levels, and promotes a sense of calm. Starting your day with deep breathing exercises can keep stress at bay throughout the day.<br />\r\n<br />\r\n<strong>3. Improves Physical Health</strong> 🌟💪<br />\r\nSitting for long hours can lead to stiffness, back pain, and poor posture. Morning yoga stretches help loosen tight muscles, improve flexibility, and maintain spinal health&mdash;keeping you active and pain-free at work.<br />\r\n<br />\r\n<strong>4. Enhances Team Spirit and Collaboration</strong> 🤝✨<br />\r\nWhen done as a group activity, yoga fosters connection and camaraderie among colleagues. Team yoga sessions can build trust, encourage communication, and improve overall workplace morale.<br />\r\n<br />\r\n<strong>5. Encourages Work-Life Balance</strong> &nbsp;⚖🌸<br />\r\nMorning yoga sets a positive tone for your day, ensuring you don&rsquo;t carry work stress into your personal life. It teaches mindfulness and helps you stay present, allowing for a better balance between work and home.</p>\r\n\r\n<p>Simple Morning Yoga Routine for Corporates&nbsp;<br />\r\nMountain Pose (Tadasana): Focus on your breath and align your body for the day.<br />\r\nCat-Cow Stretch (Marjaryasana-Bitilasana): Relieve back stiffness from prolonged sitting.<br />\r\nSun Salutation (Surya Namaskar): Energize your entire body with a dynamic flow.<br />\r\nSeated Forward Bend (Paschimottanasana): Calm your mind while stretching your hamstrings.<br />\r\nChild&rsquo;s Pose (Balasana): Ground yourself and prepare for a focused day ahead.</p>\r\n\r\n<p><strong>Yoga in the Corporate World: A Growing Trend </strong>&nbsp;🚀<br />\r\nCompanies worldwide are recognizing the importance of employee wellness. By incorporating morning yoga into their wellness programs, they&rsquo;re reaping the benefits of happier, healthier, and more productive teams. It&rsquo;s not just an exercise; it&rsquo;s an investment in success!<br />\r\n<br />\r\nStart your day with yoga&mdash;your mind, body, and workplace will thank you. 🙌🌟<br />\r\n<br />\r\nhashtag#MorningEnergizerYoga 🧘&zwj;♀ hashtag#CorporateWellness 💼 hashtag#YogaForFocus 🧘&zwj;♂ hashtag#StressFreeWork 🌸 hashtag#EmployeeWellness 🌟 hashtag#HealthyWorkLife ⚖ hashtag#MindfulMornings 🌄 hashtag#ProductiveDay 🚀 hashtag#WorkplaceYoga 🕊 hashtag#YogaEveryday&nbsp;🙌</p>\r\n', '', 1, '2024-11-11 07:28:22', '2024-12-03 07:37:12'),
(11, NULL, 1, 1, '1', 'The Power of a Head and Neck Chair Massage for Corporate Employees', '', 'the-power-of-a-head-and-neck-chair-massage-for-corporate-employees', '', '', '', 'cms/63524.png', '', '', '<p>In today&#39;s fast-paced corporate world, employees often face long hours at desks, endless meetings, and stress that accumulates throughout the day. One simple yet incredibly effective solution to combat this is the head and neck chair massage 💆&zwj;♀💆&zwj;♂. These quick and soothing sessions provide much-needed relief, not just for physical discomfort, but for mental stress as well. 🌟</p>\r\n', '<p><strong>Why is it Important?</strong><br />\r\nSitting for long periods 🪑 can cause stiffness in the neck, shoulders, and upper back. Add to that the constant mental strain from work 💻, and employees often find themselves dealing with headaches 🤕, neck pain, or stress-related fatigue 😫. A head and neck chair massage offers targeted relief to these areas, easing muscle tension and improving overall well-being. 🙌</p>\r\n\r\n<p><strong>The Benefits of a Head and Neck Chair Massage</strong></p>\r\n\r\n<p>Relieves Neck and Shoulder Tension 🧘&zwj;♀🧘&zwj;♂: Prolonged sitting leads to muscle tightness in the neck and shoulders. A chair massage targets these muscles, releasing built-up tension and helping to improve posture. 🦵</p>\r\n\r\n<p>Reduces Stress and Anxiety 😌💆&zwj;♀: The gentle pressure applied during a massage helps activate the body&#39;s relaxation response, reducing stress hormones like cortisol 😩, and promoting the release of endorphins 🥰, the body&#39;s natural &quot;feel-good&quot; hormones. 🌸</p>\r\n\r\n<p>Increases Focus and Productivity 💼📈: With less pain and stress, employees are more likely to feel refreshed and focused, which can lead to increased productivity and job satisfaction. 🚀</p>\r\n\r\n<p>Improves Circulation 💖💪: Massages stimulate blood flow, which helps deliver oxygen and nutrients to muscles, aiding in quicker recovery from physical strain. 🩸</p>\r\n\r\n<p>Boosts Mental Clarity 💡🧠: By alleviating physical discomfort and promoting relaxation, chair massages can clear the mind, making it easier for employees to think clearly and make better decisions. 🏅</p>\r\n\r\n<p>No Disruption to Work ⏱📅: Chair massages are quick and convenient, making them a perfect break for employees without requiring them to leave the office or take too much time away from their tasks. 🏃&zwj;♂💨</p>\r\n\r\n<p>A Perfect Addition to Corporate Wellness Programs<br />\r\nIncorporating head and neck chair massage sessions into corporate wellness programs 🏢 can have a profound impact on employee health and well-being 🌱. It&rsquo;s a great way to show employees that their well-being is valued 💖 and can also improve the overall work environment 🌍.</p>\r\n\r\n<p><br />\r\nhashtag#CorporateWellness hashtag#EmployeeWellbeing hashtag#StressRelief hashtag#ChairMassage hashtag#NeckAndShoulderPain hashtag#OfficeRelaxation hashtag#ProductivityBoost hashtag#WorkplaceHealth hashtag#MentalClarity hashtag#CorporateCare hashtag#MassageTherapy hashtag#HealthyWorkplace hashtag#WorkplaceWellness&nbsp;🌱💆&zwj;♀🌟</p>\r\n', '', 1, '2024-11-18 07:52:39', '0000-00-00 00:00:00'),
(12, NULL, 1, 1, '1', 'Power Yoga: Your Corporate Wellness Ally for a Stress-Free Life 💼🧘‍♂', '', 'power-yoga-your-corporate-wellness-ally-for-a-stressfree-life', 'Power Yoga: Your Corporate Wellness Ally for a Stress-Free Life 💼🧘‍♂', 'Power Yoga: Your Corporate Wellness Ally for a Stress-Free Life 💼🧘‍♂', 'Power Yoga: Your Corporate Wellness Ally for a Stress-Free Life 💼🧘‍♂', 'cms/510wellness-tips-for-the-workplace_main.jpg', '', '', '<p>The corporate grind can often leave us drained, both physically and mentally. Power Yoga, a dynamic blend of strength, flexibility, and mindfulness, is becoming the go-to solution for corporate employees to tackle stress, improve productivity, and enhance overall well-being. Let&rsquo;s explore how this empowering practice can revolutionize your work-life balance!</p>\r\n', '<p><strong>1. Beat Stress and Boost Mental Clarity</strong> 🧠💡<br />\r\nThe high-intensity movements in Power Yoga release endorphins, also known as the &quot;happy hormones.&quot; These not only reduce stress but also improve focus and mental clarity, helping you make better decisions during those tight deadlines.</p>\r\n\r\n<p><strong>2. Improve Posture and Reduce Pain</strong> 💪🪑<br />\r\nLong hours at your desk can wreak havoc on your posture, leading to back and neck pain. Power Yoga strengthens the core, stretches tight muscles, and helps correct alignment. Say goodbye to those mid-week backaches!</p>\r\n\r\n<p><strong>3. Boost Energy and Stamina</strong> ⚡🏃&zwj;♀<br />\r\nFeeling the afternoon slump? Power Yoga&rsquo;s dynamic flow increases blood circulation and oxygenates your body, leaving you energized and ready to take on the rest of your workday.</p>\r\n\r\n<p><strong>4. Foster Team Spirit with Group Sessions</strong> 👥🤝<br />\r\nOrganizing Power Yoga sessions in your workplace can be a fantastic team-building activity. It not only enhances camaraderie but also promotes a culture of wellness within the organization.</p>\r\n\r\n<p><strong>5. Enhance Work-Life Balance</strong> 🌟⏳<br />\r\nPower Yoga teaches mindfulness and resilience. Practicing regularly helps you manage stress, focus on the present, and maintain a balance between your professional and personal life.</p>\r\n\r\n<p>hashtag#CorporateWellness hashtag#PowerYoga hashtag#StressFreeWorkplace hashtag#WorkLifeBalance hashtag#FitnessAtWork hashtag#MindfulLiving hashtag#HealthyEmployees hashtag#TeamYoga hashtag#StayFitStayHappy hashtag#YogaForLife&nbsp;🧘&zwj;♀💼💖</p>\r\n', '', 1, '2024-11-20 07:54:05', '2024-12-03 07:55:29'),
(13, NULL, 1, 1, '1', 'Rise and Shine: How Morning Energizer Yoga Boosts Corporate Life 🌞🧘‍♀', '', 'rise-and-shine-how-morning-energizer-yoga-boosts-corporate-life', 'Rise and Shine: How Morning Energizer Yoga Boosts Corporate Life 🌞🧘‍♀', 'Rise and Shine: How Morning Energizer Yoga Boosts Corporate Life 🌞🧘‍♀', 'Rise and Shine: How Morning Energizer Yoga Boosts Corporate Life 🌞🧘‍♀', 'cms/6139istockphoto-1424302626-612x612.jpg', '', '', '<p>In the hustle and bustle of corporate life, mornings often set the tone for the rest of the day. If you&#39;re tired of dragging yourself to your desk and guzzling coffee just to stay awake, it&rsquo;s time to embrace Morning Energizer Yoga! 🌟</p>\r\n', '<p>🌅 <strong>1. Start with Focus and Clarity</strong><br />\r\nMorning yoga helps clear the mental clutter, leaving you with laser-sharp focus to tackle your day. A few rounds of Surya Namaskar (Sun Salutations) energize your body, while deep breathing prepares your mind for problem-solving and innovation at work. 🚀</p>\r\n\r\n<p>💪 <strong>2. Combat Stress and Burnout</strong><br />\r\nCorporate life often comes with tight deadlines and demanding tasks. Yoga is your secret weapon to fight stress. 🌈✨</p>\r\n\r\n<p>🕺 <strong>3. Boost Energy Levels Naturally</strong><br />\r\nForget the caffeine crash! Yoga stimulates blood flow and oxygen circulation, giving you sustained energy. Poses like Downward Dog and Warrior Pose awaken every muscle in your body, making you feel alive and active.🕰🔥</p>\r\n\r\n<p>🧘&zwj;♂ <strong>4. Improve Posture and Flexibility</strong><br />\r\nCorporate professionals often spend hours hunched over desks. Yoga helps combat poor posture, easing neck, shoulder, and back pain.🪑✔</p>\r\n\r\n<p>😌 <strong>5. Enhance Emotional Well-being</strong><br />\r\nStarting your day with yoga fosters a sense of inner peace and positivity. Yoga promotes mindfulness, which helps you stay in the moment and avoid being overwhelmed by work pressure.</p>\r\n\r\n<p>hashtag#YogaForCorporate 🌟 hashtag#MorningYogaRoutine 🧘&zwj;♀ hashtag#StressFreeWorkLife 😌 hashtag#WellnessAtWork 💼 hashtag#EnergizeYourMorning 🌅 hashtag#FocusAndCalm 🚀 hashtag#HealthyHabitsForSuccess 💪 hashtag#YogaForMindAndBody 🧘 hashtag#CorporateWellnessTips 🔑 hashtag#InnerPeaceOuterSuccess 🌻</p>\r\n', '', 1, '2024-11-23 07:58:22', '0000-00-00 00:00:00'),
(14, NULL, 1, 1, '1', 'Why Zumba is a Game-Changer for Corporate Employees 💃✨', '', 'why-zumba-is-a-gamechanger-for-corporate-employees', '', '', '', 'cms/9136147_4.jpg', '', '', '<p>In today&rsquo;s fast-paced corporate world, stress, long hours, and sedentary lifestyles have become the norm. While we focus on meeting deadlines and achieving targets, our physical and mental well-being often takes a backseat. That&rsquo;s where Zumba steps in &mdash; not just as a dance, but as a lifestyle revolution! 🌟</p>\r\n', '<p>The Magic of Zumba for Corporate Professionals 🕺</p>\r\n\r\n<p>1️⃣ <strong>Stress Buster</strong> 🧘&zwj;♀: Zumba is a fun and effective way to shake off work stress. The upbeat music and energetic moves release endorphins, leaving you feeling refreshed and rejuvenated.</p>\r\n\r\n<p>2️⃣ <strong>Boosts Productivity</strong> 📈: A 30-minute Zumba session can improve concentration, creativity, and overall efficiency. When you feel good physically, you perform better mentally!</p>\r\n\r\n<p>3️⃣ Improves Team Bonding 🤝: Dancing together fosters camaraderie and breaks the ice among colleagues. Imagine grooving to Bollywood beats with your manager &mdash; it&rsquo;s a fun way to build relationships!</p>\r\n\r\n<p>4️⃣ <strong>Quick Fitness Solution</strong> 🏃&zwj;♀: Corporate life leaves little time for long gym sessions. Zumba offers a full-body workout in a short time, perfect for busy professionals.</p>\r\n\r\n<p>5️⃣ <strong>Enhances Mental Health</strong> 🌈: The rhythm of music combined with movement is a therapeutic escape, helping combat anxiety and burnout commonly faced in high-pressure jobs.</p>\r\n\r\n<p><br />\r\nhashtag#ZumbaForLife hashtag#CorporateWellness hashtag#DanceYourStressAway hashtag#HealthyWorkplace hashtag#FitnessGoals hashtag#TeamBuilding hashtag#WorkplaceMotivation hashtag#ZumbaLove 💖🕺</p>\r\n', '', 1, '2024-11-25 08:00:31', '0000-00-00 00:00:00'),
(15, NULL, 1, 1, '1', 'Relieve Stress at Work with Chair Yoga 🪑✨', '', 'relieve-stress-at-work-with-chair-yoga', 'Relieve Stress at Work with Chair Yoga 🪑✨', 'Relieve Stress at Work with Chair Yoga 🪑✨', 'Relieve Stress at Work with Chair Yoga 🪑✨', 'cms/4839chairyoga.png', '', '', '<p>Feeling overwhelmed at your desk? Stress piling up during long hours of work? Don&rsquo;t worry&mdash;you don&rsquo;t need a yoga mat or a quiet room to find relief. Chair yoga and desk yoga are here to help you unwind, right at your workstation! 💼🧘&zwj;♂</p>\r\n', '<p>Why Chair Yoga?</p>\r\n\r\n<p>Corporate jobs often involve long hours of sitting, leading to:</p>\r\n\r\n<p>🚨 Increased stress</p>\r\n\r\n<p>🪑 Stiff muscles</p>\r\n\r\n<p>📉 Reduced productivity</p>\r\n\r\n<p>Chair yoga can help by:</p>\r\n\r\n<p>✅ Easing muscle tension</p>\r\n\r\n<p>✅ Boosting focus</p>\r\n\r\n<p>✅ Promoting mental relaxation</p>\r\n\r\n<p>5 Simple Chair Yoga Moves for Instant Stress Relief</p>\r\n\r\n<p>⿡ Seated Cat-Cow Stretch 🐱🐮</p>\r\n\r\n<p>Sit tall on your chair.</p>\r\n\r\n<p>Inhale, arch your back slightly (Cow Pose).</p>\r\n\r\n<p>Exhale, round your back and tuck your chin (Cat Pose).</p>\r\n\r\n<p>Repeat 5&ndash;8 times for better spine flexibility.</p>\r\n\r\n<p>⿢ Neck Stretch 🙆&zwj;♀</p>\r\n\r\n<p>Tilt your head gently to one side.</p>\r\n\r\n<p>Hold for 10&ndash;15 seconds, then switch.</p>\r\n\r\n<p>Say goodbye to neck tension!</p>\r\n\r\n<p>⿣ Seated Forward Fold 🙇&zwj;♂</p>\r\n\r\n<p>Lean forward from your hips, letting your arms hang down.</p>\r\n\r\n<p>Feel the stretch in your back and hamstrings.</p>\r\n\r\n<p>⿤ Wrist &amp; Arm Rolls ✋➡🔄</p>\r\n\r\n<p>Stretch out your arms and rotate your wrists.</p>\r\n\r\n<p>Great for relieving tension from typing all day.</p>\r\n\r\n<p>⿥ Seated Twist 🔄</p>\r\n\r\n<p>Place one hand on your opposite knee and twist your torso gently.</p>\r\n\r\n<p>Hold for a few breaths and repeat on the other side.</p>\r\n\r\n<p>When to Practice Chair Yoga?</p>\r\n\r\n<p>🕒 During short breaks</p>\r\n\r\n<p>🕗 After long meetings</p>\r\n\r\n<p>🌟 Whenever you feel stressed</p>\r\n\r\n<p>Benefits You&rsquo;ll Feel Instantly</p>\r\n\r\n<p>✨ Improved posture</p>\r\n\r\n<p>✨ Increased energy</p>\r\n\r\n<p>✨ Reduced stress levels</p>\r\n\r\n<p>✨ Better focus for the tasks ahead</p>\r\n\r\n<p>💡 Pro Tip: Add some breathing exercises like deep belly breathing for extra relaxation. 🌬</p>\r\n\r\n<p>Let&rsquo;s make work stress-free, one stretch at a time! 💪</p>\r\n\r\n<p>#CorporateWellness #ChairYoga #DeskYoga #StressRelief #WorkplaceWellness #MentalHealthMatters #HealthyHabits #WellnessJourney&nbsp;#YogaAtWork</p>\r\n', '', 1, '2024-11-28 08:02:26', '0000-00-00 00:00:00'),
(16, NULL, 1, 1, '1', 'Why Mental Health Talks are Game-Changers for Corporate Employees 🧠✨', '', 'why-mental-health-talks-are-gamechangers-for-corporate-employees-', 'Why Mental Health Talks are Game-Changers for Corporate Employees 🧠✨', 'Why Mental Health Talks are Game-Changers for Corporate Employees 🧠✨', 'Why Mental Health Talks are Game-Changers for Corporate Employees 🧠✨', 'cms/6516world-mental-health-day.png', '', '', '<p>In the bustling corporate world, where deadlines, meetings, and performance metrics dominate, the importance of mental health often takes a back seat. However, incorporating mental health discussions in the workplace is no longer optional&mdash;it&#39;s essential. Here&rsquo;s why mental health talks can transform not just individual well-being but also the collective health of an organization. 🌟</p>\r\n', '<p>1. Breaks the Silence on Stress and Anxiety 🛑😟</p>\r\n\r\n<p>Corporate environments often normalize high stress, but rarely address its toll on mental health. A mental health talk creates a safe space for employees to acknowledge their struggles without judgment. When stress and anxiety are addressed openly, employees feel heard and supported.</p>\r\n\r\n<p>2. Boosts Productivity and Engagement 📈💡</p>\r\n\r\n<p>Happy minds are productive minds. When employees are equipped with tools to manage stress, they&rsquo;re more likely to stay focused and engaged. Mental health talks educate staff on mindfulness, stress management, and the importance of work-life balance, directly impacting productivity.</p>\r\n\r\n<p>absenteeism and improved work performance.</p>\r\n\r\n<p>3. Reduces the Stigma Around Mental Health 🤝💬</p>\r\n\r\n<p>Mental health discussions help dispel myths and misunderstandings. When leadership participates, it sends a strong message: It&rsquo;s okay to not be okay. Such openness fosters a culture of empathy and understanding.</p>\r\n\r\n<p>4. Encourages Proactive Solutions 🛠🌈</p>\r\n\r\n<p>Mental health talks often provide actionable strategies, such as breathing exercises, time management tips, or access to counseling services. These solutions empower employees to tackle challenges head-on rather than letting them fester.</p>\r\n\r\n<p>5. Strengthens Team Bonds 👫❤</p>\r\n\r\n<p>Open discussions about mental health bring teams closer. Vulnerability fosters trust, creating a supportive work environment where employees can collaborate more effectively.</p>\r\n\r\n<p>6. Shows Employees They Matter 🌟👏</p>\r\n\r\n<p>By prioritizing mental health, companies demonstrate that they care about their employees beyond their roles. This not only improves morale but also boosts employee loyalty and retention.</p>\r\n\r\n<p>#MentalHealthMatters 🧠 #CorporateWellness 💼#EmployeeWellBeing ❤#BreakTheStigma 🚀#StressFreeWorkplace 😌#MindfulWork 🌿#WorkLifeBalance ⚖#StrongerTogether&nbsp;</p>\r\n', '', 1, '2024-11-30 08:03:41', '0000-00-00 00:00:00'),
(17, NULL, 1, 1, '1', 'How Zumba Boosts Corporate Employees’ Productivity and Happiness 🎶💼💃', '', 'how-zumba-boosts-corporate-employees-productivity-and-happiness', 'How Zumba Boosts Corporate Employees’ Productivity and Happiness 🎶💼💃', 'How Zumba Boosts Corporate Employees’ Productivity and Happiness 🎶💼💃', 'How Zumba Boosts Corporate Employees’ Productivity and Happiness 🎶💼💃', 'cms/6579zumba-group.jpg', '', '', '<p>Corporate life can often feel like an endless cycle of meetings, deadlines, and late-night emails. 🕒💻 But what if we told you there&rsquo;s a fun and energetic way to break the monotony and bring some zest back into your workday? Enter Zumba! 💃🕺</p>\r\n', '<p>This dance-fitness phenomenon has taken the world by storm, and now it&rsquo;s making waves in the corporate world too. Let&rsquo;s explore how Zumba can be a game-changer for corporate employees.</p>\r\n\r\n<p><strong>1. Stress Buster Extraordinaire</strong> 🧘&zwj;♂🕺<br />\r\nLong hours at a desk can lead to mounting stress. Zumba, with its upbeat music and engaging moves, provides the perfect escape. The rhythmic beats of salsa, reggaeton, and Bollywood tunes melt away stress, leaving employees refreshed and recharged.</p>\r\n\r\n<p><strong>2. Boosts Energy Levels</strong> ⚡💼<br />\r\nCorporate life demands sharp focus and high energy. Zumba&rsquo;s dynamic routines elevate your heart rate, improve blood circulation, and flood your body with endorphins. Employees return to their desks brimming with positivity and energy.</p>\r\n\r\n<p><strong>3. Enhances Team Bonding</strong> 🤝🎶<br />\r\nZumba isn&rsquo;t just a workout; it&rsquo;s a party! Dancing together creates camaraderie, breaks hierarchies, and fosters a sense of community among employees. It&rsquo;s the ultimate icebreaker for new teams or remote colleagues.</p>\r\n\r\n<p><strong>4. Improves Physical Health</strong> 💪👩&zwj;💻<br />\r\nSitting for prolonged hours takes a toll on physical health. Zumba&rsquo;s diverse movements engage the entire body, improving flexibility, coordination, and cardiovascular health. It&rsquo;s a full-body workout in disguise!</p>\r\n\r\n<p><strong>5. Sparks Creativity</strong> ✨🧠<br />\r\nStuck in a creative rut? Zumba&#39;s rhythmic patterns and freestyle moments stimulate the brain&rsquo;s creative side. Employees often find themselves coming up with fresh ideas and innovative solutions post-session.<br />\r\n<br />\r\n<strong>6. Accessible for Everyone</strong> 🙌🌍<br />\r\nZumba is inclusive. Whether you&rsquo;re a seasoned dancer or a newbie with two left feet, Zumba welcomes you. The focus is on having fun, not perfection, making it ideal for employees of all fitness levels.</p>\r\n\r\n<p>hashtag#EveryoneCanDance hashtag#InclusiveWellness hashtag#StressFreeWorkplace hashtag#DanceAwayStress hashtag#DanceToInnovate hashtag#CreativeFlow hashtag#FitAtWork hashtag#HealthyBodyHealthyMind hashtag#TeamworkThroughDance hashtag#CorporateFamily hashtag#EnergyBooster hashtag#ZumbaPower hashtag#ZumbaForCorporate hashtag#HappyEmployees hashtag#DanceAndDestress hashtag#WellnessAtWork</p>\r\n', '', 1, '2024-12-03 08:05:17', '0000-00-00 00:00:00'),
(18, NULL, 1, 1, '1', 'Why Financial Webinars Are a Game-Changer for Corporate Employees', '', 'why-financial-webinars-are-a-gamechanger-for-corporate-employees', 'Why Financial Webinars Are a Game-Changer for Corporate Employees', 'Why Financial Webinars Are a Game-Changer for Corporate Employees', 'Why Financial Webinars Are a Game-Changer for Corporate Employees', 'cms/7569Corporate-gamification-1024x585.png', '', '', '<p>In today&rsquo;s fast-paced corporate world, financial wellness often takes a backseat. Between tight deadlines and packed schedules, employees frequently find themselves juggling expenses, saving goals, and future planning without a clear strategy. Enter financial webinars&mdash;a simple yet powerful solution to demystify money management and empower employees. Let&rsquo;s dive into how these webinars can make a significant difference.</p>\r\n', '<p><strong>1. Enhanced Financial Literacy</strong> 💡<br />\r\nFinancial webinars break down complex topics like budgeting, investing, and debt management into easy-to-understand insights. Whether it&rsquo;s learning how to diversify investments or navigating tax benefits, these sessions provide actionable knowledge that employees can immediately apply.</p>\r\n\r\n<p><strong>2. Stress Reduction</strong> 🧘&zwj;♀<br />\r\nFinancial uncertainty is a major source of stress. Webinars designed to address issues such as credit card debt, retirement planning, or managing loans can ease the burden. When employees feel confident about their finances, they are less stressed and more productive at work.</p>\r\n\r\n<p><strong>3. Tailored Advice for Professionals</strong> 🎯<br />\r\nCorporate-focused financial webinars understand the unique challenges employees face, like balancing high salaries with high expenses or planning for long-term goals while maintaining a desired lifestyle. These sessions provide advice tailored to these specific scenarios.</p>\r\n\r\n<p><strong>4. Convenience and Accessibility</strong> 📲<br />\r\nWith webinars, employees can gain financial insights from the comfort of their home or office. Recorded sessions allow flexibility, enabling them to revisit key points whenever they need a refresher.</p>\r\n\r\n<p><strong>5. Encourages Better Money Habits</strong> 💸<br />\r\nA well-structured financial webinar goes beyond theory&mdash;it inspires action. By discussing real-life examples and providing step-by-step guides, these webinars motivate employees to implement better financial habits, whether it&rsquo;s setting up an emergency fund or starting an SIP (Systematic Investment Plan).</p>\r\n\r\n<p><strong>6. Boosts Overall Employee Satisfaction</strong> 😊<br />\r\nWhen companies invest in the financial wellness of their employees, it fosters a sense of care and loyalty. Employees feel valued, leading to higher job satisfaction and retention rates.</p>\r\n\r\n<p>hashtag#FinancialWellness 💰 | hashtag#CorporateCare 💼 | hashtag#WebinarWins 📈 | hashtag#MoneyMatters 🤑 | hashtag#StressFreeFinances 🧘&zwj;♂ | hashtag#EmpoweredEmployees 🙌 | hashtag#InvestSmartly&nbsp;📊</p>\r\n', '', 1, '2024-12-05 05:32:41', '0000-00-00 00:00:00'),
(19, NULL, 1, 1, '1', 'Morning Energies: How Yoga Empowers Corporate Employees 🌞🧘‍♂💼', '', 'morning-energies-how-yoga-empowers-corporate-employees', 'Morning Energies: How Yoga Empowers Corporate Employees 🌞🧘‍♂💼', 'Morning Energies: How Yoga Empowers Corporate Employees 🌞🧘‍♂💼', 'Morning Energies: How Yoga Empowers Corporate Employees 🌞🧘‍♂💼', 'cms/92578227bhumikawebsite.png', '', '', '<p>In the fast-paced corporate world, employees often find themselves juggling tight schedules, high-pressure tasks, and an endless stream of responsibilities. Amidst this hustle, mornings hold immense potential to set the tone for the day. Practicing yoga in the morning not only rejuvenates the body but also sharpens the mind, making it a perfect tool for corporate employees to thrive in their professional lives.</p>\r\n', '<p><strong>Why Morning Yoga? </strong>🕉<br />\r\nMorning yoga is more than a workout&mdash;it&rsquo;s a practice that energizes the body, clears the mind, and cultivates inner balance. Here&rsquo;s why it&rsquo;s especially impactful for corporate employees:<br />\r\n<br />\r\nBoosts Productivity: Starting the day with yoga enhances focus and clarity, helping employees tackle tasks more effectively.<br />\r\n<br />\r\nReduces Stress: Gentle stretches and breathing exercises release built-up tension, equipping individuals to handle workplace challenges with calmness.<br />\r\n<br />\r\nImproves Posture and Reduces Pain: Yoga alleviates stiffness caused by long hours of sitting, reducing common issues like back pain and neck strain.<br />\r\n<br />\r\nEnhances Emotional Well-being: Yoga fosters mindfulness, improving mood and building resilience to workplace pressures.</p>\r\n\r\n<p><strong>Top Morning Yoga Practices for Corporate Employees</strong><br />\r\n✅ Sun Salutations (Surya Namaskar): Energizes the body, improves flexibility, and enhances blood circulation.<br />\r\n✅ Cat-Cow Pose (Marjaryasana-Bitilasana): Releases tension in the spine and preps the body for prolonged sitting.<br />\r\n✅ Seated Forward Bend (Paschimottanasana): Stretches the back and hamstrings, relieving stiffness.<br />\r\n✅ Breathing Exercises (Pranayama): Techniques like Anulom Vilom and Kapalbhati improve mental clarity and focus.</p>\r\n\r\n<p><strong>How Companies Can Integrate Morning Yoga</strong> 🧘&zwj;♀<br />\r\n✨ Morning Yoga Sessions: Organize 20-30 minute yoga sessions before the workday begins.<br />\r\n✨ Digital Yoga Programs: Offer live or recorded yoga sessions for hybrid or remote employees.<br />\r\n✨ Wellness Challenges: Incorporate yoga challenges to foster team spirit and encourage consistency.</p>\r\n\r\n<p><strong>The Ripple Effect of Yoga in Corporate Life</strong> 🌟<br />\r\nEmployees who practice yoga in the morning experience heightened energy levels and a positive mindset, which reflects in their work performance. Companies that encourage such wellness practices witness increased productivity, reduced absenteeism, and a more harmonious workplace culture.</p>\r\n\r\n<p><br />\r\nhashtag#MorningYoga 🌞 hashtag#CorporateWellness 💼 hashtag#WorkplaceBalance 🕉 hashtag#EmployeeWellbeing 🌿 hashtag#YogaForProductivity 🧘&zwj;♀ hashtag#StressRelief hashtag#HealthyWorkCulture hashtag#MindBodyBalance hashtag#WellnessMatters hashtag#TeamYoga 🧘 hashtag#FitnessInspiration hashtag#MorningMotivation 🌟 hashtag#YogaLife</p>\r\n', '', 1, '2024-12-06 05:36:33', '0000-00-00 00:00:00'),
(20, NULL, 1, 1, '1', 'How Fun Fitness Activities Empower Corporate Employees for Success 🎉💼💪', '', 'how-fun-fitness-activities-empower-corporate-employees-for-success', 'How Fun Fitness Activities Empower Corporate Employees for Success ', 'How Fun Fitness Activities Empower Corporate Employees for Success ', 'How Fun Fitness Activities Empower Corporate Employees for Success ', 'cms/4401funactvt.jpg', '', '', '<p>In today&#39;s fast-paced corporate environment, employees often face high stress, long hours, and sedentary lifestyles. These challenges can impact physical and mental well-being, productivity, and overall job satisfaction. Enter fun fitness activities: an innovative and engaging solution to enhance employee well-being while fostering teamwork and creativity.</p>\r\n', '<p><strong>1. Breaking the Monotony of Work</strong> 🖥➡🕺💃</p>\r\n\r\n<p>Sitting for hours at a desk can lead to physical fatigue and mental burnout. Fun fitness activities such as Zumba, yoga, or team-building dance challenges provide a much-needed break from routine tasks. These activities refresh the mind, boost energy levels, and help employees return to work with renewed focus.</p>\r\n\r\n<p><strong>2. Enhancing Team Bonding </strong>🤝🏋&zwj;♂🏋&zwj;♀</p>\r\n\r\n<p>Fitness activities conducted in groups encourage collaboration, communication, and camaraderie among colleagues. Employees who laugh, dance, or compete together build stronger interpersonal relationships, creating a more cohesive and positive workplace culture.</p>\r\n\r\n<p><strong>3. Boosting Physical Health</strong> 🏃&zwj;♂🩺💓</p>\r\n\r\n<p>A sedentary lifestyle can lead to issues such as back pain, obesity, and cardiovascular problems. Fun fitness activities encourage movement and help combat these health risks. Regular participation in these activities can improve posture, strength, and overall health.</p>\r\n\r\n<p><strong>4. Reducing Stress and Enhancing Mental Well-being</strong> 🧠💆&zwj;♂💆&zwj;♀</p>\r\n\r\n<p>Physical activity releases endorphins, the &quot;feel-good&quot; hormones that reduce stress and improve mood. Fun fitness activities, in particular, add an element of joy, helping employees disconnect from work pressures and recharge mentally.</p>\r\n\r\n<p><strong>5. Enhancing Creativity and Productivity</strong> 💡📈</p>\r\n\r\n<p>When employees engage in fitness activities, their minds become sharper, and their creativity flourishes. This leads to better problem-solving skills and increased efficiency. Fun activities that challenge the body and mind, such as dance fitness or team relay challenges, stimulate new ideas and perspectives.</p>\r\n\r\n<p><strong>6. Encouraging Work-Life Balance </strong>⚖🏡💼</p>\r\n\r\n<p>Fitness activities at work demonstrate a company&rsquo;s commitment to employee well-being. This not only boosts morale but also motivates employees to maintain a healthier lifestyle outside of work, fostering a sense of balance between personal and professional lives.</p>\r\n\r\n<p><strong>7. Promoting Inclusivity and Diversity</strong> 🌍🤗🧍&zwj;♂🧍&zwj;♀</p>\r\n\r\n<p>Fun fitness activities are inclusive and can be tailored to suit employees of all fitness levels. This ensures everyone feels comfortable participating, breaking down barriers and promoting equality within the workplace.</p>\r\n\r\n<p>#CorporateWellness 💼 #FunFitness 🎉 #TeamBuilding 🤝 #WorkplaceWellness 🏢 #MentalHealthMatters 🧠 #HealthyLifestyle 💪 #WorkLifeBalance ⚖ #StressRelief 😂 #ProductiveTeams 📈 #FitnessForAll&nbsp;🌍</p>\r\n', '', 1, '2024-12-07 05:41:02', '0000-00-00 00:00:00'),
(21, NULL, 1, 1, '1', 'Why Bollywood Zumba Fusion is a Game-Changer for Corporate Employees', '', 'why-bollywood-zumba-fusion-is-a-gamechanger-for-corporate-employees', 'Why Bollywood Zumba Fusion is a Game-Changer for Corporate Employees', '', 'Why Bollywood Zumba Fusion is a Game-Changer for Corporate Employees', 'cms/1782zumba-1080x675.jpg', '', '', '<p>Corporate employees often find themselves stuck in a routine that involves long hours of sitting, stressful deadlines, and little time for physical activity. This sedentary lifestyle takes a toll on both their mental and physical health. Enter Bollywood Zumba Fusion&mdash;a perfect blend of energetic dance moves and Bollywood beats that not only makes fitness fun but also addresses these challenges.&nbsp;</p>\r\n', '<p><strong>1. Combats Work Stress</strong> 🧠💆&zwj;♀<br />\r\nBollywood Zumba Fusion combines fast-paced movements with the joy of dancing to popular Bollywood tracks. This combination releases endorphins, the feel-good hormones, which help reduce stress and anxiety. After an intense session, employees feel rejuvenated and ready to tackle their tasks with renewed energy.</p>\r\n\r\n<p><strong>2. Boosts Team Bonding</strong> 🤝💃🕺<br />\r\nImagine an office floor turned into a dance floor! Bollywood Zumba Fusion brings colleagues together in a fun and informal setting. Dancing together fosters camaraderie, builds connections, and improves teamwork&mdash;key elements for a thriving workplace.</p>\r\n\r\n<p><strong>3. Improves Physical Fitness</strong> 🏋&zwj;♀💪<br />\r\nCorporate jobs often involve prolonged sitting, leading to health issues like back pain, stiffness, and weight gain. The cardio element in Zumba helps burn calories, improve heart health, and enhance flexibility. Bollywood moves, meanwhile, target different muscle groups, ensuring a full-body workout.</p>\r\n\r\n<p><strong>4. Enhances Creativity and Focus</strong> 💡🎯<br />\r\nBreaking away from the monotony of the workday with a Bollywood Zumba session can significantly enhance creativity and focus. The combination of rhythm, movement, and music stimulates the brain, helping employees return to their tasks with a clearer mind and fresh ideas.</p>\r\n\r\n<p><strong>5. Adds a Dose of Positivity</strong> 🌈✨<br />\r\nDancing to upbeat Bollywood songs like &quot;London Thumakda&quot; or &quot;Kala Chashma&quot; naturally uplifts the mood. Employees leave the session with big smiles, contagious energy, and a positive outlook, which translates into a happier workplace.</p>\r\n\r\n<p><strong>6. Suitable for Everyone</strong> 🌟🤗<br />\r\nThe best part about Bollywood Zumba Fusion? You don&rsquo;t need to be a professional dancer to join in! The sessions are beginner-friendly and adaptable, making them perfect for employees of all fitness levels.</p>\r\n\r\n<p>hashtag#BollywoodZumbaFusion 💃 hashtag#CorporateWellness 🏢 hashtag#DanceYourStressAway 🎶 hashtag#HealthyWorkplace 🧘&zwj;♀ hashtag#FitnessWithFun 🎉 hashtag#BollywoodBeats 💥 hashtag#ZumbaLove 💪 hashtag#StressRelief 🌟 hashtag#TeamBonding 🤝 hashtag#EmployeeWellness&nbsp;😊</p>\r\n', '', 1, '2024-12-08 09:00:28', '0000-00-00 00:00:00'),
(22, NULL, 1, 1, '1', 'Embracing Morning Energies: How Yoga Boosts Corporate Life', '', 'embracing-morning-energies-how-yoga-boosts-corporate-life', 'Embracing Morning Energies: How Yoga Boosts Corporate Life 🌅🧘‍♂', '', 'Embracing Morning Energies: How Yoga Boosts Corporate Life 🌅🧘‍♂', 'cms/1852wellness-tips-for-the-workplace_main.jpg', '', '', '<p>In the fast-paced corporate world, where deadlines, meetings, and endless to-do lists dominate the day, finding a moment to recharge can feel impossible. But what if the solution lies in dedicating just 30 minutes each morning to yoga? 🌞 Let&#39;s explore how Morning Energies Yoga can transform the lives of corporate employees, setting the tone for a productive and balanced day.</p>\r\n', '<p><strong>1. Kickstart Your Day with Positivity</strong> 🌟<br />\r\nYoga in the morning awakens your body and mind, filling you with a sense of calm and focus. Starting your day on a positive note creates a ripple effect that enhances your mood, decision-making, and interactions throughout the day.</p>\r\n\r\n<p><strong>2. Manage Stress Like a Pro</strong> 🕉<br />\r\nCorporate jobs often come with high stress levels. Yoga&#39;s deep breathing techniques and mindfulness practices help lower cortisol levels, the hormone responsible for stress, making you feel more in control.</p>\r\n\r\n<p><strong>3. Improve Focus and Productivity</strong> 📈<br />\r\nYoga enhances mental clarity by improving blood circulation and oxygen flow to the brain. This leads to better concentration, creativity, and problem-solving skills &mdash; a must-have in any corporate setting.</p>\r\n\r\n<p><strong>4. Beat the Midday Slump</strong> 🏋&zwj;♀<br />\r\nFeeling drained by noon? Yoga stretches in the morning energize your muscles and improve your posture, reducing fatigue and keeping you active all day.</p>\r\n\r\n<p><strong>5. Build Resilience and Emotional Strength</strong> 💪🫶<br />\r\nYoga isn&#39;t just about flexibility; it builds emotional resilience. Regular practice equips you to handle challenging situations with calmness and confidence, essential qualities in the corporate world.</p>\r\n\r\n<p>hashtag#MorningYogaVibes hashtag#CorporateWellness hashtag#StartFresh hashtag#WorkLifeBalance&nbsp;🧘&zwj;♂🌞💼</p>\r\n', '', 1, '2024-12-09 09:02:09', '2024-12-24 09:16:13'),
(23, NULL, 1, 1, '1', 'Boosting Corporate Productivity Through Mental Wellness Sessions', '', 'boosting-corporate-productivity-through-mental-wellness-sessions', 'Boosting Corporate Productivity Through Mental Wellness Sessions', 'Boosting Corporate Productivity Through Mental Wellness Sessions', 'Boosting Corporate Productivity Through Mental Wellness Sessions', 'cms/31605616689-edited-scaled.jpg', '', '', '<p>In today&rsquo;s high-pressure work environments, corporate employees face challenges ranging from tight deadlines to increasing workloads. Over time, this constant pressure can lead to burnout, stress, and a decline in overall mental health. This is where mental wellness sessions play a transformative role in fostering healthier, more productive workplaces.</p>\r\n', '<p><strong>Why Mental Wellness Matters in the Workplace</strong><br />\r\nThe importance of mental wellness in the corporate world cannot be overstated. Employees who feel mentally supported are more motivated, focused, and engaged. Conversely, untreated mental health issues can result in absenteeism, low productivity, and even attrition. Research shows that organizations investing in mental health see a fourfold return on investment through increased productivity and reduced healthcare costs. 🧠📈<br />\r\n<br />\r\nKey Benefits of Mental Wellness Sessions for Employees<br />\r\n<br />\r\n💆&zwj;♀ <strong>1. Stress Management</strong><br />\r\nMental wellness sessions equip employees with tools to identify and manage stress effectively. Techniques such as mindfulness, guided meditation, and breathing exercises help reduce anxiety and maintain calm under pressure.<br />\r\n<br />\r\n🎯 <strong>2. Improved Focus and Productivity</strong><br />\r\nEmployees learn strategies to improve concentration and avoid burnout. Sessions include time management tips and prioritization techniques, enabling smarter work habits.<br />\r\n<br />\r\n🤝 <strong>3. Enhanced Emotional Intelligence</strong><br />\r\nThese programs improve emotional regulation and interpersonal skills, leading to better teamwork and communication, fostering harmony in the workplace.<br />\r\n<br />\r\n🌟 <strong>4. Prevention of Burnout</strong><br />\r\nRegular sessions act as a preventive measure against burnout, providing coping mechanisms to balance work and life effectively.</p>\r\n\r\n<p>Benefits for the Organization<br />\r\n<br />\r\n🔄 <strong>1. Increased Retention Rates</strong><br />\r\nEmployees who feel valued and supported are more likely to stay, reducing turnover costs.<br />\r\n<br />\r\n🙌 <strong>2. Boosted Morale</strong><br />\r\nA focus on mental wellness cultivates a positive workplace culture, where employees feel motivated to perform their best.<br />\r\n<br />\r\n💡 <strong>3. Higher Innovation Levels</strong><br />\r\nStress-free minds are more creative. Employees are better equipped to brainstorm and innovate.<br />\r\n<br />\r\n🏋&zwj;♂ <strong>4. Reduced Absenteeism</strong><br />\r\nHealthier employees mean fewer sick days and more consistent productivity.</p>\r\n\r\n<p>hashtag#MentalWellness 🧠 hashtag#CorporateCare 💼 hashtag#WorkplaceWellness 🌟 hashtag#EmployeeHappiness 😊 hashtag#StressManagement 💆&zwj;♂ hashtag#ProductiveWorkforce 📈 hashtag#HealthyMinds 🧘&zwj;♀ hashtag#TeamSupport 🤝 hashtag#BurnoutPrevention 🔥 hashtag#InnovativeTeams 💡 hashtag#WorkLifeBalance ⚖ hashtag#CorporateMentalHealth 🫂 hashtag#HappierWorkplace&nbsp;🙌</p>\r\n', '', 1, '2024-12-10 09:07:36', '0000-00-00 00:00:00'),
(24, NULL, 1, 1, '1', 'Finding Harmony: How Work-Life Balance Sessions Transform Corporate Lives', '', 'finding-harmony-how-worklife-balance-sessions-transform-corporate-lives', 'Finding Harmony: How Work-Life Balance Sessions Transform Corporate Lives 🌟', '', 'Finding Harmony: How Work-Life Balance Sessions Transform Corporate Lives 🌟', 'cms/481work-life-balance.png', '', '', '<p>In today&rsquo;s fast-paced corporate world, balancing professional and personal life often feels like a juggling act. Deadlines, meetings, and responsibilities can overshadow personal moments, leaving employees stressed and burnt out. But here&rsquo;s the good news: work-life balance sessions can be a game-changer! Let&rsquo;s dive into how these sessions can help corporate employees rediscover harmony in their lives. ✨</p>\r\n', '<p><strong>Why Work-Life Balance Matters</strong> 🕊</p>\r\n\r\n<p>When professional and personal life are in sync, employees experience:</p>\r\n\r\n<ul>\r\n	<li>Enhanced Productivity 🚀: A well-balanced individual performs better at work.</li>\r\n	<li>Improved Mental Health 🧠: Reduced stress translates to better emotional well-being.</li>\r\n	<li>Stronger Relationships 💞: Time for loved ones nurtures personal bonds.</li>\r\n	<li>Higher Job Satisfaction 🎯: Feeling valued at work boosts morale.</li>\r\n</ul>\r\n\r\n<p><strong>What Happens in Work-Life Balance Sessions?</strong> 🛠</p>\r\n\r\n<p>These sessions are crafted to empower employees with tools and techniques that foster harmony between their roles. Key highlights include:</p>\r\n\r\n<ul>\r\n	<li>Time Management Strategies 🕒</li>\r\n	<li>Learning how to prioritize tasks effectively.</li>\r\n	<li>Identifying and eliminating time-wasters.</li>\r\n	<li>Stress Management Techniques 🧘&zwj;♀</li>\r\n	<li>Breathing exercises to calm the mind.</li>\r\n	<li>Tips for tackling workplace stress without carrying it home.</li>\r\n	<li>Mindfulness Practices 🌿</li>\r\n	<li>Guided meditation for a focused mindset.</li>\r\n	<li>Staying present in the moment, whether at work or with family.</li>\r\n	<li>Personal Goal Setting 🎯</li>\r\n	<li>Aligning professional aspirations with personal priorities.</li>\r\n	<li>Setting boundaries to ensure neither sphere dominates the other.</li>\r\n	<li>Interactive Activities 🤝</li>\r\n	<li>Role-playing scenarios to handle challenging situations.</li>\r\n	<li>Fun exercises to reflect on individual strengths and values.</li>\r\n</ul>\r\n\r\n<p>#WorkLifeBalance 🌸 #CorporateWellness 🏢 #EmployeeHappiness 😊 #MindfulnessAtWork 🧘&zwj;♂</p>\r\n\r\n<p>#ProfessionalGrowth 🚀 #StressFreeLife 🌿 #HarmonyInLife</p>\r\n', '', 1, '2024-12-11 09:09:47', '0000-00-00 00:00:00');
INSERT INTO `blog` (`id`, `pid`, `tops`, `bottom`, `home`, `name`, `subname`, `linkname`, `page_title`, `meta_keyword`, `meta_description`, `banner`, `banner1`, `banner2`, `shortdescription`, `description`, `homelist`, `status`, `date_added`, `date_modify`) VALUES
(25, NULL, 1, 1, '1', 'Chair Cardio: A Game-Changer for Corporate Wellness', '', 'chair-cardio-a-gamechanger-for-corporate-wellness', 'Chair Cardio: A Game-Changer for Corporate Wellness', '', 'Chair Cardio: A Game-Changer for Corporate Wellness', 'cms/8873chr.png', '', '', '<p>In today&rsquo;s fast-paced corporate environment, long hours at desks, tight deadlines, and sedentary work lifestyles are the norm. While these contribute to professional success, they also pave the way for numerous health issues such as back pain, obesity, poor posture, and mental stress. Enter chair cardio, a fun and effective solution that caters to the unique needs of corporate employees.</p>\r\n', '<p>This blog delves into why chair cardio is a perfect fitness fix for the workplace and how it benefits employees physically and mentally.</p>\r\n\r\n<p><strong>What is Chair Cardio?</strong></p>\r\n\r\n<p>Chair cardio involves a series of low-impact, rhythmic exercises performed while seated or using a chair for support. Designed for people of all fitness levels, these routines can include leg lifts, seated marches, arm exercises, and even dance moves. It&#39;s a blend of cardiovascular fitness and seated exercises that fits perfectly into an office setting. 🪑💪</p>\r\n\r\n<p><strong>Why Chair Cardio is Perfect for Corporate Employees</strong></p>\r\n\r\n<p>Convenience in a Busy Schedule ⏰</p>\r\n\r\n<p>Corporate employees often struggle to find time for regular workouts. Chair cardio is a quick, no-sweat solution that can be done at the desk or during breaks. With routines lasting 10-20 minutes, it offers a time-efficient way to stay active.</p>\r\n\r\n<p>Improves Circulation 🩸</p>\r\n\r\n<p>Prolonged sitting reduces blood flow, leading to stiffness and fatigue. Chair cardio promotes better circulation, helping to prevent issues like swollen feet, varicose veins, and deep vein thrombosis (DVT).</p>\r\n\r\n<p>Boosts Energy Levels ⚡</p>\r\n\r\n<p>Feeling sluggish during long workdays? A few minutes of chair cardio can re-energize the body by increasing oxygen flow to muscles and the brain, enhancing focus and productivity.</p>\r\n\r\n<p>Reduces Stress and Improves Mental Health 🧘&zwj;♀🧘&zwj;♂</p>\r\n\r\n<p>Exercise releases endorphins, the &ldquo;feel-good&rdquo; hormones. Chair cardio not only relieves stress but also combats anxiety and improves overall mood, creating a more positive work atmosphere.</p>\r\n\r\n<p>Promotes Better Posture 🪑✨</p>\r\n\r\n<p>Slouching at desks is a common issue. Chair cardio encourages mindful movement and engages core muscles, helping improve posture and reduce back pain.</p>\r\n\r\n<p>Accessible for All Fitness Levels 🙌</p>\r\n\r\n<p>Whether you&#39;re a fitness newbie or a seasoned pro, chair cardio is customizable to suit different needs. It&rsquo;s inclusive and ensures everyone in the office can participate.</p>\r\n\r\n<p>Enhances Team Bonding 🤝</p>\r\n\r\n<p>Incorporating chair cardio into group wellness programs fosters camaraderie. Team exercises promote a sense of unity and can be a fun break from routine work.</p>\r\n\r\n<p>#ChairCardio 🪑 #CorporateWellness 💼 #OfficeFitness 🏢💪 #StayActive ✨ #HealthyLifestyle 🌱 #DeskWorkouts 💻 #EmployeeWellbeing 🤝 #MentalHealthMatters 🧘&zwj;♀ #FitnessMadeEasy 🎯 #WellnessGoals</p>\r\n', '', 1, '2024-12-12 09:11:45', '0000-00-00 00:00:00'),
(26, NULL, 1, 1, '1', 'How a Dietician\'s Talk Can Transform Corporate Employees\' Well-being', '', 'how-a-dieticians-talk-can-transform-corporate-employees-wellbeing', 'How a Dietician\'s Talk Can Transform Corporate Employees\' Well-being', 'How a Dietician\'s Talk Can Transform Corporate Employees\' Well-being', 'How a Dietician\'s Talk Can Transform Corporate Employees\' Well-being', 'cms/90831572399869125.jpeg', '', '', '<p>In the hustle and bustle of corporate life, where deadlines, long hours, and constant pressure are the norm, maintaining good health often takes a backseat.&nbsp;</p>\r\n', '<p><strong>1. Unlocking the Connection Between Food and Productivity</strong><br />\r\n🍎 Food is fuel for the body and the mind. Poor dietary choices can lead to energy slumps, decreased focus, and a lack of productivity. A dietician&#39;s talk helps employees understand how their food choices directly impact their work performance. Learning about the importance of balanced meals, the role of nutrients, and strategies to combat mid-day fatigue can empower employees to make healthier choices.<br />\r\n<br />\r\n<strong>2. Tailored Advice for Busy Schedules</strong><br />\r\n⏳ Corporate employees often struggle with maintaining a healthy diet due to tight schedules and frequent meetings. A dietician can provide practical solutions like:<br />\r\n🥗 Quick and nutritious meal ideas for on-the-go lifestyles.<br />\r\n🥜 Smart snacking tips to keep energy levels high throughout the day.<br />\r\n💧 Hydration strategies to maintain focus during long working hours.<br />\r\n<br />\r\n<strong>3. Addressing Workplace Health Challenges</strong><br />\r\n💺 Sedentary lifestyles, irregular meal patterns, and stress are common in corporate settings. These can lead to issues like weight gain, digestive problems, and even chronic diseases. A dietician&rsquo;s session can shed light on:<br />\r\n🌿 Managing stress through dietary changes.<br />\r\n🥑 Incorporating superfoods that combat fatigue and boost immunity.<br />\r\n🍵 Simple dietary shifts to reduce inflammation and prevent lifestyle-related illnesses.<br />\r\n<br />\r\n<strong>4. Promoting Mental Well-being Through Nutrition</strong><br />\r\n🧠 The link between diet and mental health is undeniable. Nutritional deficiencies can exacerbate feelings of anxiety, stress, and depression&mdash;common challenges in high-pressure jobs. A dietician can educate employees on:<br />\r\n🍫 Foods that enhance mood and mental clarity.<br />\r\n🐟 The role of omega-3 fatty acids, B vitamins, and antioxidants in brain health.<br />\r\n🥦 Easy-to-implement dietary habits to foster resilience against stress.<br />\r\n<br />\r\n<strong>5. Encouraging a Culture of Wellness</strong><br />\r\n🤝 When employees see their organization investing in their health, it creates a culture of care and motivates them to take their well-being seriously. A dietician&#39;s talk can be the spark that ignites broader wellness conversations, encouraging colleagues to share recipes, start healthy eating challenges, or even organize potlucks with nutritious dishes.<br />\r\n<br />\r\n<strong>6. Long-Term Benefits for the Organization</strong><br />\r\n🏢 Healthier employees mean fewer sick days, better morale, and increased productivity. By equipping employees with the knowledge to improve their diets, organizations can reap long-term benefits, including reduced healthcare costs and a more engaged workforce.</p>\r\n\r\n<p>hashtag#WellnessFirst hashtag#CorporateHealth hashtag#HealthyEmployeesHealthyBusiness hashtag#NutritionMatters hashtag#WorkplaceWellness&nbsp;🌱💼🥗</p>\r\n', '', 1, '2024-12-13 09:14:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `imagesec` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `linkname` varchar(255) DEFAULT NULL,
  `page_title` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `shortdescription` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `icon`, `type`, `home`, `imagesec`, `name`, `linkname`, `page_title`, `meta_keyword`, `meta_description`, `shortdescription`, `description`, `status`, `date_added`, `date_modify`) VALUES
(1, 'serviceicon/5296womenhealth.png', '1', '0', 'serviceicon/976womenhealth.png', 'Wellness Programs', 'wellness-programs', '', '', '', '<p>It is the day and age of the multitalented and multifaceted women, who handle their professional and personal lives with utmost finesse. However, the constantly changing lifestyle and stressful environments have brought about serious health issues that are affecting them.</p>\r\n\r\n<p>Across the world, women suffer from cardiovascular diseases, breast cancer, polycystic ovarian disease (PCOD), osteoporosis, and depression. That&rsquo;s not all. Incidences of stroke, obesity, hypertension, and diabetes are also common.</p>\r\n\r\n<p>Yoga, better known as a body and mind cleanser, has umpteen benefits. Regular practice helps women maintain better physical and mental health, energy levels, and self-esteem. It can also help with several medical conditions typical to women. Six of these conditions are menopause, endometriosis, polycystic ovary syndrome (PCOS), uterine fibroids, premenstrual syndrome (PMS) and pregnancy.</p>\r\n', '<p>- pre &amp; post natal yoga<br />\r\n- conception disorders.<br />\r\n- pre &amp; post menopause problems<br />\r\n<br />\r\n- PRE &amp; POST NATAL YOGA<br />\r\n<br />\r\n<strong>What you need to know about prenatal yoga ?</strong><br />\r\n<br />\r\nIf you&#39;re pregnant and looking for ways to relax or stay fit, you might be considering prenatal yoga. But did you know that prenatal yoga might also help you prepare for labor and promote your baby&#39;s health?<br />\r\n<br />\r\nBefore you start prenatal yoga, understand the range of possible benefits, as well as what a typical class entails and important safety tips.<br />\r\n<br />\r\n<strong>What are the benefits of prenatal yoga?</strong><br />\r\n<br />\r\nResearch suggests that prenatal yoga is safe and can have many benefits for pregnant women and their babies.<br />\r\n<br />\r\nThe benefits of Prenatal yoga are :<br />\r\n<br />\r\n1. Improve sleep<br />\r\n2. Reduce stress and anxiety<br />\r\n3. Increase the strength, flexibility and endurance of muscles needed for childbirth<br />\r\n4. Decrease lower back pain, nausea, headaches and shortness of breath<br />\r\nPrenatal yoga can also help you meet and bond with other pregnant women and prepare for the stress of being a new parent.<br />\r\n<br />\r\n<strong>What happens during prenatal yoga class?</strong><br />\r\n<br />\r\nAs long as your doctor has given you the green light to stay physically active during pregnancy, yoga is an ideal activity for all expectant moms: It&rsquo;s gentle and designed for pregnancy, which means it helps prepare you for the mental aspects of childbirth (and beyond).<br />\r\n<br />\r\n<br />\r\n<strong>- CONCEPTION DISORDERS :</strong><br />\r\n<br />\r\nMost common problems in concieving pregnancy is irregular menstrual cycle and hormonal disbalances.<br />\r\n<br />\r\n<strong>Like PCOD (Polycystic Ovary Syndrome)</strong><br />\r\n<br />\r\nAsanas (yoga postures) designed for Polycystic ovary syndrome help open up the pelvic area and promote relaxation and pranayamas (breathing exercises) are powerful techniques that help calm the mind. Coupled with these are some soothing meditations that work at a very deep level and help de-toxify and de-stress the entire system.<br />\r\n<br />\r\n- PRE &amp; POST MENOPAUSE PROBLEMS :<br />\r\n<br />\r\nSymptoms of both pre and post Menopause are almost same like -<br />\r\n1. Irregular periods.<br />\r\n2. Hot flashes and sleep problems.<br />\r\n3. Mood changes.<br />\r\n4. Vaginal and bladder problems.<br />\r\n5. Decreasing fertility.<br />\r\n6. Changes in sexual function.<br />\r\n7. Changing cholesterol levels.<br />\r\n8.<br />\r\nAnd Yoga have an immense effect on these things , it helps to :<br />\r\n<br />\r\n1. Reduce stress and improve sleep.<br />\r\n2. Relieve menopausal symptoms, such as hot flushes, joint and muscle aches.<br />\r\n3. Rebalance your emotions, such as Menorage, anxiety, low mood.<br />\r\n4. Restore depleted energy caused by insomnia and fatigue.<br />\r\n5. Reinvigorate a sluggish metabolism, tone and strengthen muscles, build bone density, balance and boost heart health.<br />\r\n6. Reinforce positive thoughts that improve self-esteem.<br />\r\n<br />\r\nAs a result, yoga can help you to feel good about yourself. When we feel well, we are more able to make healthy decisions about our lifestyle (nutrition, exercise, work-life balance), as well as our relationships.</p>\r\n', 1, '2023-03-26 10:24:27', '2024-08-10 07:16:48'),
(2, 'serviceicon/6093yogahospital.png', '1', '0', 'serviceicon/2407yogahospital.png', 'Employee Assistance Programs (EAP)', 'employee-assistance-programs-eap', '', '', '', '<p>Our Employee Assistance Programs (EAP) are crafted to enhance the mental and emotional well-being of your employees, providing them with the tools and support they need to thrive at work and in life.</p>\r\n', '<p><strong>1-to-1 Psychological Counseling</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Confidential Support:</strong> Employees receive private, one-on-one sessions with professional counselors.</li>\r\n	<li><strong>Personalized Guidance:</strong> Tailored advice and strategies to address individual concerns like stress, anxiety, or personal issues.</li>\r\n	<li><strong>Safe Environment:</strong> A secure and empathetic space for employees to express themselves freely.</li>\r\n</ul>\r\n\r\n<p><strong>.Mental Health Awareness Workshop</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Early Recognition:</strong> Learn to identify the early signs of mental health challenges.</li>\r\n	<li><strong>Coping Strategies:</strong> Practical tools and techniques for managing stress and supporting mental well-being.</li>\r\n	<li><strong>Team Support:</strong> Encourages a supportive work environment where colleagues look out for one another&nbsp;</li>\r\n</ul>\r\n\r\n<h4><strong>Health and Wellness Seminars</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Expert-Led Discussions:</strong> Seminars conducted by health and wellness experts.</li>\r\n	<li><strong>Wide Range of Topics:</strong> Covering stress management, work-life balance, nutrition, and more.</li>\r\n	<li><strong>Actionable Advice:</strong> Provides employees with practical tips they can implement in their daily lives.</li>\r\n	<li><strong>Holistic Well-Being:</strong> Focus on overall health, ensuring employees feel their best both mentally and physically.</li>\r\n</ul>\r\n', 1, '2023-03-26 10:33:03', '2024-08-10 07:29:47'),
(3, 'serviceicon/8690yogaforhealing.png', '1', '0', 'serviceicon/7094yogaforhealing.png', 'Post-Care Programs', 'postcare-programs', '', '', '', '<p>Yoga Therapies for treating severe disease patients. Focusing area :- Treatment for Healings internal organs.</p>\r\n\r\n<p>Yoga Therapy is the use of yoga postures, meditation, and pranayama to help the body naturally heal and balance itself. Certain yogic practices have been shown to have specific healing qualities in addition to yoga&rsquo;s inherent ability to create wellness and good health.</p>\r\n', '<p>Not only does yoga&rsquo;s ability to activate the parasympathetic nervous system reduce stress and allow the body to heal itself, but the practice of yoga also improves the body&rsquo;s inherent healing abilities. Many of the below processes are often combined in a yoga class to further boost yoga&rsquo;s healing powers.</p>\r\n\r\n<p><span style=\"color:#27ae60\"><strong>Unexpressed emotions</strong></span> that are held in the body can create physical tightness, <span style=\"color:#c0392b\"><strong>stress, tension, and even pain</strong></span>. Yoga can release emotional tension in the body which in turn encourages physical and <span style=\"color:#27ae60\"><strong>emotional healing</strong></span>.<br />\r\nReduces negative thought patterns. Excessive negative thinking can damage the neural structures that regulate our emotions, memory, and feelings. Yoga and meditation are powerful tools to physically rewire our brains to experience more calm, peace, and joy.</p>\r\n\r\n<p>Improves mood. Yoga balances the central nervous system and endocrine system and stimulates the release of endorphins &ndash; natural <span style=\"color:#27ae60\"><strong>mood-elevating</strong></span> neurochemicals. As you practice, your mind relaxes and you&rsquo;re able to stop dwelling on <span style=\"color:#c0392b\"><strong>stressful thoughts</strong></span> and situations.<br />\r\nSupports a healthy lifestyle. Practicing yoga also encourages one to lead a healthier lifestyle, through developing the self-awareness and discipline required for <span style=\"color:#27ae60\"><strong>positive behavior modification</strong></span>.<br />\r\nWhile yoga possesses such a strong support to the body&rsquo;s healing mechanisms, it is important to view yoga as an adjunct or complementary therapy, and not relied upon as the only therapy for<strong><span style=\"color:#27ae60\"> healing disease</span></strong>.</p>\r\n', 1, '2023-03-26 10:35:58', '2024-08-10 07:17:38'),
(4, 'serviceicon/6754yogaformental wellness.png', '2', '0', 'serviceicon/8108yogaformental wellness.png', 'Mental Wellness', 'mental-wellness', '', '', '', '<p>Mental wellness is a positive state of mental health. It is more than the absence of mental illness. Discover what being mentally well means, and how it can help you lead a fulfilling life.<br />\r\nBeing mentally well means that your mind is in order and functioning in your best interest. You are able to think, feel and act in ways that create a positive impact on your physical and social well-being.</p>\r\n\r\n<ul>\r\n	<li>Confidential</li>\r\n	<li>24 hours a day, 7 days a week</li>\r\n	<li>Available to employees and their immediate family members</li>\r\n	<li>Immediate access to support</li>\r\n	<li>Sessions of counselling, Mindfulness</li>\r\n	<li>Telephonic or face-to-face sessions are available</li>\r\n	<li>Work-life services</li>\r\n	<li>Support and information in the requested language</li>\r\n	<li>Helps you plan ahead with practical matters and supports you during more difficult times</li>\r\n</ul>\r\n', '<p>Depression / Anxiety<br />\r\n<br />\r\n<strong>1. YOGA</strong><br />\r\n<br />\r\nyoga therapy &ldquo;can be very powerful in the treatment of depression.&rdquo; the combination of meditation and physical movement provide two important elements for relieving depression. Meditation helps bring a person into the present moment and allows them to clear their minds. Controlled, focused movements also help strengthen the body-mind connection.<br />\r\nBreathing exercises are effective in reducing depressive symptoms. You may find yoga helpful as the exercise focuses on deep, controlled breathing.<br />\r\n<br />\r\n<strong>2. MEDITATION</strong><br />\r\n<br />\r\nMeditation reduces stress, reshapes the brain, increases concentration, thus reducing absenteeism and increasing productivity.<br />\r\nMeditation session will help to maintain a relaxed, focused, and energetic mind in the midst of a hectic office schedule.<br />\r\n<br />\r\n<strong>3. COUNSELING</strong><br />\r\n<br />\r\nwhen you need to transcend your inner challenges and rise to your true potential. Take a look at our services and see how we can work together to achieve your health and wellness goals.<br />\r\n<br />\r\nThrough behavioural coaching and mindfulness, one can overcome the fears from past which create worries for a secured future and make your present unstable, confusing, and sad.<br />\r\n<br />\r\nThe focus lies in rejuvenating your mind and body through extensive talk therapy and making you independent and capable of living a fulfilling life with consistent mentorship.<br />\r\n<br />\r\n&quot;A healthy mind equals a wealthy life&quot;.<br />\r\n<br />\r\nLet&#39;s bridge the gap between your<br />\r\n<br />\r\n&quot;current situation and desired outcome<br />\r\n<br />\r\n<strong>PERSONAL WELLNESS SESSIONS.</strong><br />\r\n<br />\r\n1-on-1 Sessions: Over Call / Video<br />\r\n<br />\r\nNot everyone has the same needs. In fact, it&rsquo;s hard to find two people who benefit from the exact same approach to health!<br />\r\n<br />\r\nLet&rsquo;s get to know each other and together we&rsquo;ll build out your personalized wellness plan.<br />\r\nOvercome, your biggest fears, mend broken connections, excel at career by touching your subconscious. Allow yourself to feel every emotion without the baggage of being judged with a certified coach maintaining<br />\r\n<br />\r\n<strong>100% confidentiality.</strong><br />\r\n<br />\r\nFind purpose, release the heaviness from past and work effectively towards the future with specialized goal setting and fulfilling techniques.<br />\r\n<br />\r\nWe aim at making you independent and capable of living a happy life with tested tools, resources and mentorship.<br />\r\nIf words and feelings such as anxiety, isolation, loneliness, broken, infidelity, relationships, loss of a loved one,<br />\r\nfear of death, financial stress, work pressure, corporate politics, stage fear, denial, guilt, lack of confidence, an unstable mental state seem familiar to you.</p>\r\n', 1, '2023-03-26 10:39:38', '2024-08-10 07:21:09'),
(5, 'serviceicon/9566yoga for corporate-min.png', '2', '0', 'serviceicon/1715yoga for corporate-min.png', 'Personalized Fitness Programs', 'personalized-fitness-programs', '', '', '', '<p>Services are flexible and designed as per requirements of different Industries to fit their need. Below is quick guide which will help understand the requirements of specific industry. Our experts will help you to customize a program best suited for your employees.</p>\r\n', '<p>Main Features of our yoga services :<br />\r\n<br />\r\nSession can be kept short, ranging between 10 &ndash; 20 minutes or Full 1 hour depend on requirements.<br />\r\n<br />\r\nSession can be done in office clothes.<br />\r\n<br />\r\nNo dedicated space is required, session can be done near Desktop.<br />\r\nSessions can be held any time of day/night.<br />\r\nRapid Yoga is best suited for IT and BPO professionals.<br />\r\nSessions can be held on the floor near desktop before start of shift, middle of shift or end of shift. Yoga can be done while standing near the desk space area.<br />\r\n<br />\r\nWe Offer The Following Services.<br />\r\n<br />\r\n<strong>RAPID YOGA</strong><br />\r\n<br />\r\nOne of the main reason for management reluctance for implementing Corporate Yoga Programs in their organization is a common myth that Yoga programs requires a lot of space and time and hence can&rsquo;t be implemented in corporate environment.<br />\r\n<br />\r\nWe introduced Rapid Yoga where it is not necessary to keep the Yoga session long, it can be customized as per requirement. Even a 15 mins. rapid session can yield good results.<br />\r\n<br />\r\n<strong>CHAIR YOGA</strong><br />\r\n<br />\r\nChair Yoga is a general term for practices that modify yoga poses so that they can be done while seated in a chair. These groups of exercises are simplest and gentle movement best suited for people in office or people with limited mobility.<br />\r\nChair Yoga provide a solution for the people who don&#39;t feel comfortable doing exercises standing while others are working.</p>\r\n', 1, '2023-03-26 11:58:52', '2024-08-10 07:21:59'),
(6, 'serviceicon/7048stress management in corporates-min.png', '2', '0', 'serviceicon/3294stress management in corporates-min.png', 'Health and Wellness Consultations', 'health-and-wellness-consultations', '', '', '', '<p>Stress and strain of odd working hours along with sedentary life style takes it toll on health. Coping with the Lifestyle diseases is snuffing out lives and taking away productive years.</p>\r\n', '<p>Stress and strain of odd working hours along with sedentary life style takes it toll on health. Coping with the Lifestyle diseases is snuffing out lives and taking away productive years.<br />\r\n<br />\r\nMeditation reduces stress, reshapes the brain, increases concentration, thus reducing absenteeism and increasing productivity.<br />\r\n<br />\r\nMeditation session will help the participants to maintain a relaxed, focused, and energetic mind in the midst of a hectic office schedule.</p>\r\n', 1, '2023-03-26 12:08:13', '2024-08-10 07:21:32'),
(7, 'serviceicon/103ergonomics for corporate-min.png', '2', '0', 'serviceicon/5023ergonomics for corporate-min.png', 'Specialized Programs', 'specialized-programs', '', '', '', '<p>This group of 48 Suksham Vyams is concerned with loosening up the joints of the body. It eliminates energy blockages in the joints and outer extremities of the physical body and works on the Pranic and the mental level as well. Each part of the body including all organs, joints and muscles are benefited. So the Yogic Sukshma Vyayamaa, as is implied by its name, is meant for the subtle body or Sukshma Sarira.</p>\r\n', '<p>This group of 48 Suksham Vyams is concerned with loosening up the joints of the body. It eliminates energy blockages in the joints and outer extremities of the physical body and works on the Pranic and the mental level as well. Each part of the body including all organs, joints and muscles are benefited. So the Yogic Sukshma Vyayamaa, as is implied by its name, is meant for the subtle body or Sukshma Sarira.<br />\r\n<br />\r\nThese exercises are suitable for the all industries where there is no dedicate space available for doing Yoga since these exercises can be done standing near desktop. IT, BPO companies Factories, Industrial Units can benefit from these exercises. (48 kriyas, micro exercises for every part of the body, benefits subtle body, can be done standing in office clothes).</p>\r\n', 1, '2023-03-26 12:10:02', '2024-08-10 07:19:18'),
(8, 'serviceicon/2308zumba for corporate-min.png', '3', '0', 'serviceicon/4017zumba for corporate-min.png', 'Mental Health', 'mental-health', '', '', '', '<p>We know how much stress, anxiety, and depression can affect your daily life</p>\r\n\r\n<p>Our comprehensive mental health programs are designed to support you in overcoming these challenges, helping you regain balance, clarity, and a sense of peace.</p>\r\n\r\n<p>Your mental well-being is our priority.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Our Offerings:</p>\r\n\r\n<p>1. Mindfulness&nbsp;exercises</p>\r\n\r\n<p>2. Relaxation exercises</p>\r\n\r\n<p>3. progressive muscle relaxation</p>\r\n\r\n<p>4.&nbsp;cognitive-behavioral techniques</p>\r\n\r\n<p>5. Interpersonal therapy (IPT)</p>\r\n', 1, '2023-03-26 12:11:54', '2024-08-21 08:07:11'),
(9, 'serviceicon/845consultancy for corporates-min.png', '3', '0', 'serviceicon/7504consultancy for corporates-min.png', 'Fitnessmmm', 'fitnessmmmmmm', '', '', '', '<p><strong>From Struggle to Strength</strong></p>\r\n\r\n<p><strong>Personalized Fitness and Support to Help You Defeat Obesity (Over Fat).</strong></p>\r\n\r\n<p>we offer customized workout plans and dedicated support tailored to your unique needs. We focus on creating a fitness program that fits your goals and provides the emotional and motivational encouragement necessary to help you overcome obesity and achieve lasting health improvements.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>&nbsp;Our Offerings:</p>\r\n\r\n<p>1.&nbsp;Personalized Workout Plans</p>\r\n\r\n<p>2.&nbsp;Group Fitness Sessions</p>\r\n\r\n<p>3.&nbsp;Nutritional Guidance</p>\r\n\r\n<p>4.&nbsp;Wellness Coaching</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2023-03-26 12:44:37', '2024-08-21 07:56:19'),
(10, 'serviceicon/8724health checkup for corporates-min.png', '3', '0', 'serviceicon/1408health checkup for corporates-min.png', 'Health Issues', 'health-issues', '', '', '', '<p>We specialize in addressing a broad spectrum of health concerns, from common ailments to severe issues. Our holistic approach is designed to provide relief and support for a wide range of conditions.</p>\r\n\r\n<p>Our expert team is committed to providing personalized care and effective solutions for all types of pain and severe health issues, helping you achieve a healthier, more comfortable life</p>\r\n', '<p>Our offerings:</p>\r\n\r\n<p>1. Thyroid Issues</p>\r\n\r\n<p>2. Blood Pressure Management</p>\r\n\r\n<p>3. Knee Pain Relief</p>\r\n\r\n<p>4. Back Pain Solutions</p>\r\n\r\n<p>5. Body Stiffness</p>\r\n\r\n<p>6. Acidity and Digestive Health</p>\r\n\r\n<p>7. Severe Health Issues</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 1, '2023-03-26 13:28:27', '2024-08-21 08:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `home` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `name`, `home`, `image`, `status`, `date_added`, `date_modify`) VALUES
(1, 'Certificate', '1', 'image/8440L1.png', 1, '2022-11-08 13:36:32', '2022-12-27 11:07:55'),
(2, 'Certificate', '1', 'image/7728L2.png', 1, '2022-12-15 10:11:19', '2022-12-27 11:08:04'),
(3, 'Certificate', '1', 'image/5922l3.png', 1, '2022-12-15 10:11:31', '2022-12-27 11:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `home` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vidorimg` varchar(20) NOT NULL,
  `videos` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `home`, `name`, `vidorimg`, `videos`, `image`, `status`, `date_added`, `date_modify`) VALUES
(1, '1', '1', '0', '', 'image/4319adidas.png', 1, '2023-04-18 08:42:53', '0000-00-00 00:00:00'),
(2, '0', '2', '0', '', 'image/8780fortis.png', 1, '2023-04-18 08:48:24', '0000-00-00 00:00:00'),
(3, '0', '3', '0', '', 'image/1393cccccccc.png', 1, '2023-04-18 08:49:31', '2023-04-18 08:50:16'),
(4, '1', '', '0', '', 'image/1330MediBuddy_Logo_NEW.jpg', 1, '2023-07-29 09:04:52', '2023-07-29 09:05:11'),
(5, '1', '', '0', '', 'image/5222mfine.png', 1, '2023-07-29 09:06:54', '0000-00-00 00:00:00'),
(6, '1', '', '0', '', 'image/9877niz care.png', 1, '2023-07-29 09:09:09', '0000-00-00 00:00:00'),
(7, '1', 'a', '0', '', 'image/7431c1.png', 1, '2024-08-29 09:37:17', '0000-00-00 00:00:00'),
(8, '1', 'j', '0', '', 'image/2600c2.png', 1, '2024-08-29 09:37:27', '0000-00-00 00:00:00'),
(9, '1', 'k', '0', '', 'image/8585c12.png', 1, '2024-08-29 09:37:36', '2024-08-29 09:40:18'),
(10, '1', 'k', '0', '', 'image/2813c4.png', 1, '2024-08-29 09:37:43', '0000-00-00 00:00:00'),
(11, '1', 'p', '0', '', 'image/4091c5.png', 1, '2024-08-29 09:38:01', '0000-00-00 00:00:00'),
(12, '1', 'p', '0', '', 'image/2289c6.png', 1, '2024-08-29 09:38:09', '0000-00-00 00:00:00'),
(13, '1', 'p', '0', '', 'image/930c8.png', 1, '2024-08-29 09:38:19', '0000-00-00 00:00:00'),
(14, '1', 'u', '0', '', 'image/5928c9.png', 1, '2024-08-29 09:38:29', '0000-00-00 00:00:00'),
(15, '1', 't', '0', '', 'image/2761c10.png', 1, '2024-08-29 09:38:42', '0000-00-00 00:00:00'),
(16, '1', 'r', '0', '', 'image/2180c7.png', 1, '2024-08-29 09:39:40', '0000-00-00 00:00:00'),
(19, '1', '7seas', '0', '', 'image/90myinteriorcoach_logo.jpeg', 1, '2024-08-30 08:51:27', '0000-00-00 00:00:00'),
(20, '1', 'sss', '0', '', 'image/37899095logo-blue-100x100.png', 1, '2024-12-07 10:24:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crmvideocategory`
--

CREATE TABLE `crmvideocategory` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `crmvideocategory`
--

INSERT INTO `crmvideocategory` (`id`, `category`) VALUES
(1, 'Fat to Fit Transformation'),
(2, 'Prenatal Yoga'),
(3, 'Diseases Mangament Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `crm_videogallery`
--

CREATE TABLE `crm_videogallery` (
  `id` int(11) NOT NULL,
  `cate` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `videourl` varchar(255) NOT NULL,
  `video_desc` longtext DEFAULT NULL,
  `sortorder` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `date_added` varchar(255) DEFAULT NULL,
  `date_modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `crm_videogallery`
--

INSERT INTO `crm_videogallery` (`id`, `cate`, `name`, `videourl`, `video_desc`, `sortorder`, `status`, `date_added`, `date_modify`) VALUES
(1, '1', 'Yoga for Acidity problem', 'bc8f376f-a14e-4a03-8393-bd8fa259fb91', 'Yoga for Acidity problem✅❤️', NULL, '1', '2025-03-13', NULL),
(2, '1', 'Yoga for Acidity problem Aarogya The Neev', 'ee3bcf6d-cf78-4757-b8db-470d4cf2ff6d', 'Yoga for Acidity problem - Aarogya The Neev. Revitalize work life: Fitness and wellness for a healthier, happier, more productive team', NULL, '1', '2025-03-13', NULL),
(3, '1', 'Yoga for Acidity problem Aarogya The Neev', 'e31a3e41-d17c-4553-a350-8f2898598e97', '', NULL, '1', '2025-03-19', NULL),
(4, '1', 'Beginner Bollywood Dance Workout', 'a06bdb1b-51a4-4f04-bb06-5130560345b8', 'Beginner Bollywood Dance Workout', NULL, '1', '2025-03-19', NULL),
(5, '1', 'Linkedin collaborations', '2727ad1a-c8b3-41eb-89c9-3282ec359e56', 'Linkedin collaborations', NULL, '1', '2025-03-19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `coupon` varchar(255) DEFAULT NULL,
  `plan_duration` varchar(255) DEFAULT '1',
  `active_from` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `source` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `orderid`, `name`, `email`, `phone`, `plan`, `coupon`, `plan_duration`, `active_from`, `due_date`, `status`, `source`, `date`) VALUES
(1, '1147561528', 'Ajay', 'ajay@gmail.com', '7889564512', 'Group Yoga Sessions', NULL, '1', '2025-02-02', NULL, 1, 'anmol', '2025-01-04'),
(2, '523486570', 'Anmol Jaiswal', 'Anmol@gamainmentsolutions.com', '8700151456', 'Fitness Transformation', NULL, '1', '2025-02-22', NULL, 1, 'anmol', '2025-02-12'),
(3, '2008128426', 'Rahul', 'rahul@gmail.com', '8945784512', 'Fitness Transformation', NULL, '1', NULL, NULL, 2, '', '2025-02-18'),
(4, '343012782', 'dgsdgf', 'sdfgdsf', 'fgsdfg', 'Fitness Transformation', NULL, '1', NULL, NULL, 2, '', '2025-04-10'),
(5, '1541584187', 'Ajay', 'bhumika.sangwan23@gmail.com', '08882107302', 'Fitness Transformation', NULL, '1', NULL, NULL, 2, '', '2025-04-10'),
(6, '721745211', 'Monica Arora', 'aroramonica.1103@gmail.com', '9717011780', 'Group Yoga Sessions', '', '1', NULL, NULL, 2, '', '2025-04-15'),
(7, '690909980', 'Khushbu Gaur', 'Meethi2209@gmail.com', '9315672855', 'Group Yoga Sessions', 'ATN40', '1', '2025-06-03', NULL, 1, '', '2025-04-23'),
(8, '395836267', 'Charry Kaushal', 'Charish1981@yahoo.com.in', '8744004458', 'Group Yoga Sessions', 'ATN40', '1', NULL, NULL, 2, '', '2025-04-29'),
(9, '798239132', 'Prerna Sharma ', 'prerna.sharma22official@gmail.com', '9873049026', 'Group Yoga Sessions', '', '1', '2025-05-30', NULL, 1, '', '2025-05-01'),
(10, '1800545', 'Shweta Mittal', 'mittalshweta15@gmail.com', '7838930575', 'Group Yoga Sessions', 'ATN40', '1', '2025-05-12', NULL, 1, '', '2025-05-12'),
(11, '77501292', 'Deepti Yadav', 'Deepti.yadav@concentrix.com', '8750332054', 'Group Yoga Sessions', '', '1', NULL, NULL, 2, '', '2025-06-05'),
(12, '1874677641', 'AjayTest', 'ajaytest@gmail.com', '7889568956', 'YogASMR Online', 'ATN90', '1', NULL, NULL, 2, '', '2025-09-10'),
(13, '272786572', 'Sahil Kumar', 'sahilkumar08444@gmail.com', '6306462579', 'YogASMR Online', '', '1', '2025-09-10', NULL, 1, '', '2025-09-10'),
(14, '1340685367', 'Rishu ', '23BAI70545@cuchd.in', '7895648789', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-23'),
(15, '502575882', 'Ritika', 'indianasmrbhumika@gmail.com', '9667534716', 'YogASMR day Workshop', '', '1', '2025-09-23', NULL, 1, '', '2025-09-23'),
(16, '1545222172', 'Ameenbashavk', 'dargiameen786@email.com', '7993984967', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-24'),
(17, '907655336', 'Gyan Prakash ', 'gyanprakash305@gmail.com', '8574866758', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-24'),
(18, '2092846158', 'Harshit Singh', 'shooterharshit3012@gmail.com', '7060458484', 'YogASMR day Workshop', 'ATN90', '1', '2025-09-24', NULL, 1, '', '2025-09-24'),
(19, '481381694', 'Shivalika Chib', 'chibshivalika611@gmail.com', '9797402103', 'YogASMR day Workshop', 'ATN90', '1', NULL, NULL, 2, '', '2025-09-24'),
(20, '208950359', 'Vishal Thakor', 'vishalthakor72mmvf@gmail.com', '6352317354', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-24'),
(21, '2996022', 'SOHAN NAVNEET CHAVAN ', 'sohan17905@gmail.com', '7820829185', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-24'),
(22, '542587604', 'Puja sharma', 'crazyrockstar575@gmail.com', '9821783895', 'YogASMR day Workshop', '', '1', '2025-09-24', NULL, 1, '', '2025-09-24'),
(23, '418231322', 'THANJAVURU SUJEETH ', 'Sujeeth592@gmail.com ', '7618187895', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-24'),
(24, '1802206325', 'ANIKET RAJWAR', 'rrajwar434@gmail.com', '9942830019', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-24'),
(25, '1788305832', 'Rahul Seth', '1st  rseth9271@gmail.com    2nd  rahulseth4404@gmail.com', '7889773165', 'YogASMR day Workshop', '', '1', NULL, NULL, 2, '', '2025-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `customer_plan`
--

CREATE TABLE `customer_plan` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `active_from` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customer_plan`
--

INSERT INTO `customer_plan` (`id`, `orderid`, `customer`, `amount`, `active_from`, `due_date`, `source`, `date`) VALUES
(1, '1147561528', '1', '2500', '2025-01-04', '2025-02-03', 'anmol', '2025-01-04'),
(2, '132737676', '1', '2.00', '2025-02-02', '2025-03-04', 'anmol', '2025-02-02'),
(4, '523486570', '2', '10.00', '2025-02-12', '2025-03-14', 'anmol', '2025-02-12'),
(5, '1307707695', '2', '10.00', '2025-02-12', '2025-03-14', 'anmol', '2025-02-12'),
(6, '523486570', '2', '10.00', '2025-02-13', '2025-03-15', 'anmol', '2025-02-13'),
(7, '381710953', '2', '10.00', '2025-02-15', '2025-03-17', 'anmol', '2025-02-15'),
(8, '391538334', '2', '10.00', '2025-02-22', '2025-03-24', 'anmol', '2025-02-22'),
(9, '690909980', '7', '1500.00', '2025-04-23', '2025-05-23', '', '2025-04-23'),
(10, '365732271', '9', '1500.00', '2025-05-01', '2025-05-31', '', '2025-05-01'),
(11, '1800545', '10', '1500.00', '2025-05-12', '2025-06-11', '', '2025-05-12'),
(12, '1246118093', '9', '1500.00', '2025-05-30', '2025-06-29', '', '2025-05-30'),
(13, '1649814845', '7', '1500.00', '2025-06-03', '2025-07-03', '', '2025-06-03'),
(14, '1296724366', '13', '199.00', '2025-09-10', '2025-10-10', '', '2025-09-10'),
(15, '502575882', '15', '10.00', '2025-09-23', '2025-10-23', '', '2025-09-23'),
(16, '2128827744', '', '199.00', '2025-09-23', '2025-10-23', '', '2025-09-23'),
(17, '2092846158', '18', '199.00', '2025-09-24', '2025-10-24', '', '2025-09-24'),
(18, '542587604', '22', '199.00', '2025-09-24', '2025-10-24', '', '2025-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `free` int(1) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(255) NOT NULL,
  `subhead` varchar(300) NOT NULL,
  `linkname` varchar(255) NOT NULL,
  `page_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `startdate` varchar(255) DEFAULT NULL,
  `enddate` varchar(244) NOT NULL,
  `shortdescription` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `orderno` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `home`, `free`, `name`, `subhead`, `linkname`, `page_title`, `meta_keyword`, `meta_description`, `image`, `startdate`, `enddate`, `shortdescription`, `description`, `status`, `orderno`, `date_added`, `date_modify`) VALUES
(8, 1, 0, 'Psychology as a Career in India', 'Psychology as a Career in India - Counselling and Guidance', 'psychology-as-a-career-in-india', 'Psychology as a Career in India - Counselling and Guidance', 'Psychology as a Career in India - Counselling and Guidance', 'Psychology is one of the growing career paths in India, most of the students get confused with its branches like Clinical Psychology, Counselling Psychology, Industrial or Organisational Psychology, Health Psychology, Sports Psychology and etc.', 'news/1730Career in Psychology_Website.png', '2022-02-21', '2022-02-19', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Psychology is one of the growing career paths in India, most of the students get confused with its branches like Clinical Psychology, Counselling Psychology, Industrial or Organisational Psychology, Health Psychology, Sports Psychology and etc.</span></span></p>\r\n', '<p>Psychology is one of the growing career paths in India, most of the students get confused with its branches like Clinical Psychology, Counselling Psychology, Industrial or Organisational Psychology, Health Psychology, Sports Psychology etc. and suitable branch according to their expectations and desire.</p>\r\n\r\n<p>Students always raise the questions like; How good is Psychology as a career in India, how to become a professional in Psychology, and what qualification is required for the same, which specialization should I choose for the best career option?&nbsp;</p>\r\n\r\n<p>The coming live event on &ldquo;Psychology as a career in India&rdquo; is going to answer most of your queries and doubts related to career options in Psychology and going to help many aspirants to plan their careers in a good direction. Students can also ask their doubts and query related to their career in Psychology and may ask for guidance.</p>\r\n', 1, 1, '2022-01-18 13:14:47', '2022-02-16 16:43:58'),
(9, 1, 1, 'Shortage of Mental Health professional in India: a critical analysis', 'a critical analysis', 'shortage-of-mental-health-professional-in-india-a-critical-analysis', 'Shortage of Mental Health professional in India : a critical analysis', 'Shortage of Mental Health professional in India : a critical analysis', 'Shortage of Mental Health professional in India: a critical analysis', 'news/5964Shortage-of-Mental-Health.jpg', '2021-11-12', '2021-11-10', '<p>Shortage of Mental Health professional in India : a critical analysis</p>\r\n', '<p>Dr. Otta is going to share their view along with other Educationist, mental Health professionals to understand the possible reason behind the shortage of Mental Health professionals in India.</p>\r\n', 1, 4, '2022-01-18 15:40:23', '2022-01-21 19:09:28'),
(10, 1, 1, 'Traumatic Childhood and their link to Psychological issue in Adulthood', 'Traumatic Childhood and their link to Psychological issue in Adulthood', 'traumatic-childhood-and-their-link-to-psychological-issue-in-adulthood', 'Traumatic Childhood and their link to Psychological issue in Adulthood', 'Traumatic Childhood and their link to Psychological issue in Adulthood', 'Traumatic Childhood and their link to Psychological issue in Adulthood', '', '2022-01-11', '', '<p>The Dr Arvind Otta session has always been beneficial for parents and teachers and gives a new dimension to the insights of the visitors. On January 11, once again we have the opportunity to discuss our problem directly with him.&nbsp;</p>\r\n\r\n<p><strong>Invitation: </strong>Free<br />\r\nThe invitation is based on a first-come and first serve basis.</p>\r\n', '<p>The Dr Arvind Otta session has always been beneficial for parents and teachers and gives a new dimension to the insights of the visitors. On January 11, once again we have the opportunity to discuss our problem directly with him.&nbsp;</p>\r\n\r\n<p><strong>Invitation: </strong>Free<br />\r\nThe invitation is based on a first-come and first serve basis.</p>\r\n', 1, 5, '2022-01-18 15:41:59', '2022-01-21 19:17:51'),
(11, 1, 1, 'Mental Health Facilities and Government Policies', 'Mental Health Facilities and Government Policies', 'mental-health-facilities-and-government-policies', 'Mental Health Facilities and Government Policies', 'Mental Health Facilities and Government Policies', 'Mental Health Facilities and Government Policies', '', '2022-01-04', '2022-01-01', '<p>Dr. Arvind Otta coming live with a few other eminent speakers to discuss mental health conditions and related policies in India. Don&#39;t miss this opportunity to join!</p>\r\n', '<p>Dr. Arvind Otta coming live with a few other eminent speakers to discuss mental health conditions and related policies in India. Don&#39;t miss this opportunity to join!</p>\r\n', 1, 6, '2022-01-18 15:42:54', '2022-01-21 19:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headerbanner`
--

CREATE TABLE `headerbanner` (
  `id` int(11) NOT NULL,
  `banner1name` varchar(255) NOT NULL,
  `banner1text` longtext NOT NULL,
  `banner1link` varchar(255) NOT NULL,
  `banner1button` varchar(255) NOT NULL,
  `banner1image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `headerbanner`
--

INSERT INTO `headerbanner` (`id`, `banner1name`, `banner1text`, `banner1link`, `banner1button`, `banner1image`, `status`, `date_added`, `date_modify`) VALUES
(1, '1', '', '', '', 'headerbanner/4433bnr1.png', 1, '2022-11-03 10:18:33', '2023-01-10 08:08:03'),
(2, '2', '', '', '', 'headerbanner/7305bnr2.png', 1, '2023-01-10 08:08:10', '0000-00-00 00:00:00'),
(3, '3', '', '', '', 'headerbanner/57bnr3.png', 1, '2023-01-10 08:08:34', '0000-00-00 00:00:00'),
(4, '4', '', '', '', 'headerbanner/1339bnr4.png', 1, '2023-01-10 08:08:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `home` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `subhead` varchar(300) NOT NULL,
  `linkname` varchar(255) NOT NULL,
  `page_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `bigimage` varchar(255) NOT NULL,
  `startdate` varchar(255) DEFAULT NULL,
  `enddate` varchar(244) NOT NULL,
  `shortdescription` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `home`, `name`, `author`, `subhead`, `linkname`, `page_title`, `meta_keyword`, `meta_description`, `image`, `bigimage`, `startdate`, `enddate`, `shortdescription`, `description`, `status`, `date_added`, `date_modify`) VALUES
(6, 1, '6 tell-tale signs to seek as a psychologist’s advice', '', '6 tell-tale signs to seek as a psychologist’s advice', '6-tell-tale-signs-to-seek-a-psychologists-advice', '6 tell-tale signs to seek as a psychologist’s advice', '6 tell-tale signs to seek as a psychologist’s advice', '6 tell-tale signs to seek as a psychologist’s advice', 'news/999498949_1571050502.jpg', '', '', '', '<p>In today&rsquo;s modern and fast-paced society, every one of us experiences stress and conflict. Balancing unrealistic work demands personal demands can be quite challenging.</p>\r\n', '<p>Article Published originally: https://psychologs.com/article/6-tell-tale-signs-to-seek-a-psychologists-advice</p>\r\n\r\n<p>In today&rsquo;s modern and fast-paced society, every one of us experiences stress and conflict. Balancing unrealistic work demands personal demands can be quite challenging.</p>\r\n\r\n<p>Experiencing high levels of stress on a daily basis can negatively affect our mental and physical help. Anxiety, irritability, depression and anger are some of the common psychological issues that are caused by stress.</p>\r\n\r\n<p>Sometimes, these psychological issues are short-lived. However, several psychological problems may require professional advice from a psychologist.</p>\r\n\r\n<p>Here are six tell-tale signs that you need to seek a psychologist&rsquo;s advice. If you experience any of these signs, make sure to seek professional help immediately.</p>\r\n\r\n<p><strong>1. You are unable to function normally</strong><br />\r\nIf your anxiety or distress impairs your ability to perform everyday activities, then you should seek a psychologist&rsquo;s advice. Consider your daily life and the duties you need to perform as an employee, a team member, a parent, a friend or a family member. If you feel that you are unable to function as you would normally, it is time to seek professional advice.</p>\r\n\r\n<p><strong>2. Your loved ones are concerned</strong><br />\r\nIf you have repeatedly experienced loved ones showing signs of concern about your behaviour or demeanour, you may want to consider meeting a psychologist. When loved ones start seeking assurance that you&rsquo;re doing okay, it can indicate a serious psychological problem.</p>\r\n\r\n<p><strong>3. You don&rsquo;t enjoy things you normally do</strong><br />\r\nAll of us love engaging in certain activities or items. However, if you feel that your enjoyment has been waning and you&rsquo;re not experiencing any enthusiasm, it is a warning sign. This is a definite symptom that you&rsquo;re suffering from low mood and a psychologist can help you out.</p>\r\n\r\n<p><strong>4. Your coping strategies aren&rsquo;t working</strong><br />\r\nYou may try to cope with your stress levels by drinking alcohol, binge eating, exercising or spending frivolously. However, sometimes such coping strategies don&rsquo;t help in bringing stress levels down. If that&rsquo;s the case and your daily functioning is being affected, seek a psychologist&rsquo;s advice.</p>\r\n\r\n<p><strong>5. Your distress won&rsquo;t go away</strong><br />\r\nIt is perfectly normal to feel grief or be depressed for a short period of time. However, if your distress persists longer than 2-3 weeks, it is a tell-tale sign that professional advice will be beneficial.</p>\r\n\r\n<p><strong>6. Major Behavioural Changes</strong><br />\r\nSometimes changes in our behaviour are temporary but when you think this is not temporary behaviour change and changes continue till 15-20 days. Changes in sleeping and eating habits just because of the known and unknown cause is the sign that you need to find a Psychologist around you.</p>\r\n\r\n<p>Psychologists are trained professionals who can help provide insight and awareness to your problems. If you experience any of the signs mentioned above, please seek help immediately. In addition to relieving stress, psychologists can also help devise healthy coping strategies for the long term.</p>\r\n', 1, '2022-01-05 13:28:44', '2022-01-18 14:52:29'),
(7, 1, 'Home atmosphere & KG school child\'s personality?', 'Arvind Otta', 'What effect do home atmosphere and childrearing practices have on the nursery-school child\'s personality?', 'home-atmosphere--kg-school-childs-personality', 'What effect do home atmosphere and childrearing practices have on the nursery-school child\'s personality?', 'child psychology, child development, child psychologist, parenting, What effect do home atmosphere and childrearing practices have on the nursery-school child\'s personality?', 'What effect do home atmosphere and childrearing practices have on the nursery-school child\'s personality?\r\nAs the child grows and makes further advances in ability and understanding, his interactions with his parents become more extensive, more complex, and subtler. By the time the child is in nursery school, parental handling of specific needs such as hunger is less salient in determining the child\'s personality and behaviours. But general global features of the home atmosphere and parental attitudes become more critical.', 'news/7058Child.jpg', '', '', '', '<p>As the child grows and makes further advances in ability and understanding, his interactions with his parents become more extensive, more complex, and subtler.&nbsp;</p>\r\n', '<p>As the child grows and makes further advances in ability and understanding, his interactions with his parents become more extensive, more complex, and subtler. By the time the child is in nursery school, parental handling of specific needs such as hunger is less salient in determining the child&#39;s personality and behaviours. But general global features of the home atmosphere and parental attitudes become more critical. We refer to qualities like warmth, protectiveness, acceptance, criticism, affectionateness, punitiveness, friction, permissiveness (or restrictiveness), democracy (or authoritarian control), firmness of discipline, and parental involvement with the child. These home and family variables significantly influence children&#39;s social behaviour, personality characteristics, and attitudes, as a number of investigations demonstrate.</p>\r\n\r\n<p>In one study, conducted at the Fels Institute in Yellow Springs, Ohio, subjects were carefully observed in nursery school and then rated on a wide variety of personality characteristics, such as aggression, dependency, creativity, cooperation, leadership, and originality. A home visitor visited each subject&#39;s home, saw him in interactions with his parents, and assessed the home atmosphere on thirty carefully defined scales, for example, protectiveness, affectionateness, acceptance, and severity of penalties. These home ratings fell into clusters or groups of related variables - democracy in the home, control, indulgence, restrictiveness, and activity.</p>\r\n\r\n<p>In democratic homes, parents are characteristically permissive, encouraging their children&#39;s curiosity and self-expression. Family decisions and rules are generally formulated on the basis of family discussions. In contrast, homes high in control are restrictive and rules are formulated and communicated by the parents. There is little discussion of problems or disciplinary procedures. As you might anticipate, children from these two types of homes showed profound contrasts in personality. Democratic homes produced outgoing, active, competitive, original, curious, planful, self-assertive, and aggressive children. In nursery school, they tended to be leaders, participating energetically in activities, expressing themselves freely, and occasionally behaving in nonconforming ways. Children from highly controlled homes were conforming, socially unaggressive, well-behaved, quiet, lacking in curiosity and originality, and inhibited in self-expression.</p>\r\n\r\n<p>Clearly the behaviour that the children manifested in school was a generalization of the responses rewarded and learned at home. Curiosity and spontaneity, rewarded by democratic parents, were carried over into nursery school. And so were the conformity and acquiescence to parental demands, as well as suppression of curiosity learned at home. and self-expression, that the children of highly controlling parents</p>\r\n\r\n<p>In another study, conducted by Baumrind, nursery-school children were intensively observed and then rated on self-control, curiosity about new and exciting stimuli, self-reliance, warmth, and general mood.</p>\r\n\r\n<p><a href=\"https://psychologs.com/article/what-effect-do-home-atmosphere-and-childrearing-practices-have-on-the-nursery-school-childs-personality\" target=\"_blank\">Read Full Article &gt;&gt;&gt;</a></p>\r\n', 1, '2022-01-18 14:48:01', '2022-01-19 07:26:45'),
(8, 1, 'Exam Performance Anxiety in Students', 'Arvind Otta', 'Exam Performance Anxiety in Students', 'exam-performance-anxiety-in-students', 'Exam Performance Anxiety in Students', 'Exam Performance Anxiety in Students', 'Exam Performance Anxiety in Students', 'news/2429Exam Anxiety.jpg', '', '', '', '<p>&quot;I don&#39;t know what&#39;s happening. My stomach hurts badly. I can&#39;t breathe, I can&#39;t stand. I am feeling very hot. Neither I want to do anything, nor go anywhere.&quot;</p>\r\n', '<p>&quot;I don&#39;t know what&#39;s happening. My stomach hurts badly. I can&#39;t breathe, I can&#39;t stand. I am feeling very hot. Neither I want to do anything, nor go anywhere.&quot;</p>\r\n\r\n<p><strong>&quot;My hands are shaking, I can&#39;t write anything, I don&#39;t remember anything.&quot;</strong></p>\r\n\r\n<p>These were the words of an &quot;A+&quot; student of an English school whom just a week before the examinations refused to appear for exams to the extent that he refused to come out of his bedroom. Started talking loud alone, pulling his hair, twisting fingers of right hand, stopped talking to anyone and stopped eating, sleeping, changing clothes, unable to communicate etc. Such a condition is a big concern of the present day scenario when the exams are approaching. Every child is under great pressure of fighting his own battle. On the other hand, parents are getting short of skills to handle such a situation.&nbsp;</p>\r\n\r\n<p>Test anxiety is &quot;an uneasiness or tensions that can interfere or even impair a test- takers ability to think and perform on a test&quot;. Test anxiety is a form of Performance anxiety that refers to self-consciousness and anxiousness about the quality of one&#39;s performance- an awareness that hinders performance instead of helping.</p>\r\n\r\n<p><a href=\"https://psychologs.com/preview/performance-anxiety-in-students\" target=\"_blank\">Read Full Article &gt;&gt;&gt;</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2022-01-18 15:07:37', '2022-03-05 10:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `date_added` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date_added`, `status`) VALUES
(0, 'info@digitalupward.com', '2022-04-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `tops` int(11) NOT NULL,
  `bottom` int(11) NOT NULL,
  `home` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `iconasow` varchar(255) NOT NULL,
  `linkname` varchar(255) NOT NULL,
  `page_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `newimage` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `shortdescription` text NOT NULL,
  `description` text NOT NULL,
  `homelist` text NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `pid`, `tops`, `bottom`, `home`, `name`, `subname`, `iconasow`, `linkname`, `page_title`, `meta_keyword`, `meta_description`, `image`, `newimage`, `signature`, `banner`, `pdf`, `shortdescription`, `description`, `homelist`, `status`, `date_added`, `date_modify`) VALUES
(1, 0, 0, 1, '0', 'Terms of Use', 'Terms of Use', 'Terms of Use', 'terms-of-use', 'Terms of Use', 'Terms of Use', 'Terms of Use', '', '', '', '', '', '', '<p>COMMING SOON</p>\r\n', '<h2><strong>Terms and Conditions</strong></h2>\r\n', 1, '2022-01-17 09:06:14', '2022-12-10 08:00:22'),
(2, 0, 0, 1, '0', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', 'privacy-policy', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '', '', '', '', '', '<p>privacy policy</p>\r\n', '<p>COMMING SOON</p>\r\n', '', 1, '2022-01-17 09:08:07', '2022-12-10 08:00:29'),
(3, 0, 0, 1, '0', 'Cookie Policy', 'Cookie Policy', 'Cookie Policy', 'cookie-policy', 'Cookie Policy', 'Cookie Policy', 'Cookie Policy', '', '', '', '', '', '', '<p style=\"margin-left:0in; margin-right:0in\">Coming Soon</p>\r\n', '<p style=\"margin-left:0in; margin-right:0in\">Coming Soon</p>\r\n', 1, '2022-01-17 09:08:20', '2022-12-10 08:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `payment_enquiry`
--

CREATE TABLE `payment_enquiry` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `pupose` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `coupon` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `pay_status` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `payment_enquiry`
--

INSERT INTO `payment_enquiry` (`id`, `orderid`, `name`, `email`, `phone`, `age`, `weight`, `pupose`, `plan`, `coupon`, `price`, `pay_status`, `source`, `payment_type`, `date`) VALUES
(1, '1147561528', 'Ajay', 'ajay@gmail.com', '7889564512', '50', '78', 'Health Issues', 'Group Yoga Sessions', NULL, '2500', 'Successfull', 'anmol', 'Direct Payment', '2025-01-04'),
(2, '1938801020', 'Ajay', 'ajay@gmail.com', '7889564512', '50', '78', 'Health Issues', 'Group Yoga Sessions', NULL, '2500', 'Cancelled', NULL, 'Direct Payment', '2025-02-01'),
(3, '2017008371', 'Ajay', 'ajay@gmail.com', '7889564512', NULL, NULL, NULL, 'Group Yoga Sessions', NULL, '2500', 'Cancelled', NULL, 'Direct Payment', '2025-02-02'),
(4, '132737676', 'Ajay', 'ajay@gmail.com', '7889564512', NULL, NULL, NULL, 'Group Yoga Sessions', NULL, '2', 'Successfull', NULL, 'Direct Payment', '2025-02-02'),
(6, '523486570', 'Anmol Jaiswal', 'anmol@gamainmentsolutions.com', '8700151456', '27', '89', 'Health Issues', 'Fitness Transformation', NULL, '10', 'Successfull', 'anmol', 'Direct Payment', '2025-02-12'),
(7, '1307707695', 'Anmol Jaiswal', 'Anmol@gamainmentsolutions.com', '8700151456', NULL, NULL, NULL, 'Fitness Transformation', NULL, '10', 'Successfull', NULL, 'Direct Payment', '2025-02-12'),
(8, '730057985', 'Anmol Jaiswal', 'Anmol@gamainmentsolutions.com', '8700151456', NULL, NULL, NULL, 'Fitness Transformation', NULL, '10', 'Pending', NULL, 'Direct Payment', '2025-02-12'),
(9, '381710953', 'Anmol Jaiswal', 'Anmol@gamainmentsolutions.com', '8700151456', NULL, NULL, NULL, 'Fitness Transformation', NULL, '10', 'Successfull', NULL, 'Direct Payment', '2025-02-15'),
(10, '2008128426', 'Rahul', 'rahul@gmail.com', '8945784512', '35', '69', 'Health Issues', 'Fitness Transformation', NULL, '10', 'Cancelled', '', 'Direct Payment', '2025-02-18'),
(11, '391538334', 'Anmol Jaiswal', 'Anmol@gamainmentsolutions.com', '8700151456', NULL, NULL, NULL, 'Fitness Transformation', NULL, '10', 'Successfull', NULL, 'Direct Payment', '2025-02-22'),
(12, '1050261191', 'Anmol Jaiswal', 'Anmol@gamainmentsolutions.com', '8700151456', NULL, NULL, NULL, 'Fitness Transformation', NULL, '10', 'Pending', NULL, 'Direct Payment', '2025-02-22'),
(16, '1940963996', 'Aajay', 'ajaja@gml.com', '08882107302', '56', '78', '', 'Fitness Transformation', 'discount50', '1250', 'Cancelled', '', 'Direct Payment', '2025-04-10'),
(17, '721745211', 'Monica Arora', 'aroramonica.1103@gmail.com', '9717011780', '48', '67.7 kg', '', 'Group Yoga Sessions', '', '2500', 'Pending', '', 'Direct Payment', '2025-04-15'),
(18, '1938742610', 'Monica Arora', 'aroramonica.1103@gmail.com', '9717011780', '48', '67.7 kg', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Pending', '', 'Direct Payment', '2025-04-15'),
(19, '690909980', 'Khushbu Gaur', 'Meethi2209@gmail.com', '9315672855', '33', '64', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Successfull', '', 'Direct Payment', '2025-04-23'),
(20, '395836267', 'Charry Kaushal', 'Charish1981@yahoo.com.in', '8744004458', '44', '63.5 kgs', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Pending', '', 'Direct Payment', '2025-04-29'),
(21, '1306759285', 'Charry Kaushal', 'Charish1981@yahoo.com.in', '8744004458', '44', '63.5', '', 'Group Yoga Sessions', '', '2500', 'Pending', '', 'Direct Payment', '2025-04-29'),
(22, '1570087877', 'Charry Kaushal', 'Charish1981@yahoo.co.in', '8744004458', '44', '63.5', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Pending', '', 'Direct Payment', '2025-04-29'),
(23, '1523259013', 'Charry Kaushal', 'Charish1981@yahoo.co.in', '8744004458', '44', '63.5', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Pending', '', 'Direct Payment', '2025-04-29'),
(24, '798239132', 'Prerna Sharma ', 'prerna.sharma22official@gmail.com', '9873049026', '33', '68kg', '', 'Group Yoga Sessions', '', '2500', 'Pending', '', 'Direct Payment', '2025-05-01'),
(25, '723353604', 'Prerna Sharma ', 'prerna.sharma22official@gmail.com', '9873049026', '33', '68kg', '', 'Group Yoga Sessions', '', '2500', 'Pending', '', 'Direct Payment', '2025-05-01'),
(26, '365732271', 'Prerna Sharma ', 'prerna.sharma22official@gmail.com', '9873049026', '33', '68kg', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Successfull', '', 'Direct Payment', '2025-05-01'),
(27, '596442347', 'Yashika', 'info@aarogyatheneev.com', '08882107302', '24', '50', '', 'Fitness Transformation', '', '2500', 'Pending', '', 'Direct Payment', '2025-05-09'),
(28, '1800545', 'Shweta Mittal', 'mittalshweta15@gmail.com', '7838930575', '36', '57', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Successfull', '', 'Direct Payment', '2025-05-12'),
(29, '1448528505', 'Prerna Sharma ', 'prerna.sharma22official@gmail.com', '9873049026', '34', '67', '', 'Group Yoga Sessions', '', '2500', 'Pending', '', 'Direct Payment', '2025-05-30'),
(30, '1246118093', 'Prerna Sharma ', 'prerna.sharma22official@gmail.com', '9873049026', '34', '67', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Successfull', '', 'Direct Payment', '2025-05-30'),
(31, '1205763178', 'Charry Kaushal', 'Charish1981@yahoo.com.in', '8744004458', '45', '63.2', '', 'Yoga for Specific Health Issues', '', '4000', 'Pending', '', 'Direct Payment', '2025-06-02'),
(32, '668628496', 'Charry Kaushal', 'Charish1981@yahoo.co.in', '8744004458', '45', '63.2', '', 'Yoga for Specific Health Issues', 'ATN40', '2400', 'Pending', '', 'Direct Payment', '2025-06-02'),
(33, '1698448700', 'Charry Kaushal', 'Charish1981@yahoo.co.in', '8744004458', '45', '63.2', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Pending', '', 'Direct Payment', '2025-06-02'),
(34, '1649814845', 'Khushbu ', 'meethi2209@gmail.com', '9315672855', '33', '64.7', '', 'Group Yoga Sessions', 'ATN40', '1500', 'Successfull', '', 'Direct Payment', '2025-06-03'),
(35, '77501292', 'Deepti Yadav', 'Deepti.yadav@concentrix.com', '8750332054', '27', '60', '', 'Group Yoga Sessions', '', '2500', 'Pending', '', 'Direct Payment', '2025-06-05'),
(36, '1874677641', 'AjayTest', 'ajaytest@gmail.com', '7889568956', '25', '75', '', 'YogASMR Online', 'ATN90', '199', 'Cancelled', '', 'Direct Payment', '2025-09-10'),
(37, '272786572', 'Sahil Kumar', 'sahilkumar08444@gmail.com', '6306462579', '23', '68', '', 'YogASMR Online', '', '199', 'Pending', '', 'Direct Payment', '2025-09-10'),
(38, '753703287', 'Sahil Kumar', 'sahilkumar08444@gmail.com', '6306462579', '23', '68', '', 'YogASMR Online', '', '199', 'Pending', '', 'Direct Payment', '2025-09-10'),
(39, '1105059846', 'Sahil Kumar', 'sahilkumar08444@gmail.com', '6306462579', '23', '68', '', 'YogASMR Online', '', '199', 'Pending', '', 'Direct Payment', '2025-09-10'),
(40, '2064896576', 'Sahil Kumar', 'sahilkumar08444@gmail.com', '6306462579', '23', '68', '', 'YogASMR Online', '', '199', 'Pending', '', 'Direct Payment', '2025-09-10'),
(41, '1296724366', 'Sahil Kumar', 'sahilkumar08444@gmail.com', '6306462579', '23', '68', '', 'YogASMR Online', '', '199', 'Successfull', '', 'Direct Payment', '2025-09-10'),
(42, '1340685367', 'Rishu ', '23BAI70545@cuchd.in', '7895648789', '20', '60', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-23'),
(43, '1599663760', 'AjayTest', 'ajaytest@gmail.com', '7889568989', '25', '75', '', 'YogASMR day Workshop', 'ATN90', '199', 'Cancelled', '', 'Direct Payment', '2025-09-23'),
(44, '109011907', 'Anmol Jaiswal', 'Anmol@gamainmentsolutions.com', '8700151456', NULL, NULL, NULL, 'Fitness Transformation', NULL, '10', 'Cancelled', NULL, 'Direct Payment', '2025-09-23'),
(45, '502575882', 'Ritika', 'indianasmrbhumika@gmail.com', '9667534716', '24', '40', '', 'YogASMR day Workshop', '', '10', 'Successfull', '', 'Direct Payment', '2025-09-23'),
(46, '822618693', 'AjayTest', 'bhumika.sangwan23@gmail.com', '7889568956', '25', '75', '', 'YogASMR day Workshop', '', '10', 'Cancelled', '', 'Direct Payment', '2025-09-23'),
(47, '582781144', 'Bhumika', 'indianasmrbhumika@gmail.com', '09315363694', '24', '50', '', 'YogASMR day Workshop', '', '10', 'Pending', '', 'Direct Payment', '2025-09-23'),
(48, '2128827744', 'Bhumika', 'indianasmrbhumika@gmail.com', '09315363694', '24', '50', '', 'YogASMR day Workshop', '', '199', 'Successfull', '', 'Direct Payment', '2025-09-23'),
(49, '1545222172', 'Ameenbashavk', 'dargiameen786@email.com', '7993984967', '25', '35', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(50, '907655336', 'Gyan Prakash ', 'gyanprakash305@gmail.com', '8574866758', '30', '91', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(51, '2092846158', 'Harshit Singh', 'shooterharshit3012@gmail.com', '7060458484', '22', '62', '', 'YogASMR day Workshop', 'ATN90', '199', 'Successfull', '', 'Direct Payment', '2025-09-24'),
(52, '1453017926', 'Ameenbashavk', 'dargiameen786@email.com', '7993984967', '25', '33', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(53, '481381694', 'Shivalika Chib', 'chibshivalika611@gmail.com', '9797402103', '25.5', '53.8', '', 'YogASMR day Workshop', 'ATN90', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(54, '208950359', 'Vishal Thakor', 'vishalthakor72mmvf@gmail.com', '6352317354', '17', 'Gujarat ', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(55, '2996022', 'SOHAN NAVNEET CHAVAN ', 'sohan17905@gmail.com', '7820829185', '20', '70', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(56, '542587604', 'Puja sharma', 'crazyrockstar575@gmail.com', '9821783895', '30', '80', '', 'YogASMR day Workshop', '', '199', 'Successfull', '', 'Direct Payment', '2025-09-24'),
(57, '418231322', 'THANJAVURU SUJEETH ', 'Sujeeth592@gmail.com ', '7618187895', '23', '76.80', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(58, '1802206325', 'ANIKET RAJWAR', 'rrajwar434@gmail.com', '9942830019', '18', '40', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24'),
(59, '1788305832', 'Rahul Seth', '1st  rseth9271@gmail.com    2nd  rahulseth4404@gmail.com', '7889773165', '26', '??!! ', '', 'YogASMR day Workshop', '', '199', 'Pending', '', 'Direct Payment', '2025-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `best_for` varchar(255) NOT NULL,
  `minimum` varchar(255) NOT NULL,
  `pricing` varchar(255) NOT NULL,
  `colorclass` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `name`, `best_for`, `minimum`, `pricing`, `colorclass`, `status`, `date_added`, `date_modify`) VALUES
(1, 'Start-Ups', 'E-commerce startups, Restaurants, D2C Brands, Bakeries, Meats', '0-20/Daily Orders', 'Rs.1150 + 18% GST', 'red', 1, '2022-03-10 05:43:23', '2022-11-03 09:39:44'),
(2, 'Small-Medium Businesses', 'E-Commerce, D2C Brands, Pharmaceuticals, Food Delivery', '100-200/Daily Orders', 'Please submit an inquiry with specific business requirements', 'blue', 1, '2022-03-14 07:07:12', '0000-00-00 00:00:00'),
(3, 'Enterprise', 'E-Commerce, D2C Brands, Pharmaceuticals, Food Delivery', '200-1000/Daily Orders', 'Please submit an inquiry with specific business requirements.', 'green', 1, '2022-03-14 07:07:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `linkname` varchar(255) NOT NULL,
  `mrpprice` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `categorydata` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `feature` int(11) NOT NULL,
  `bookformat` varchar(255) NOT NULL,
  `shortdescription` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `deturl` text DEFAULT NULL,
  `ordernum` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `home` varchar(20) NOT NULL,
  `latest` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `page_title`, `meta_keyword`, `meta_description`, `linkname`, `mrpprice`, `price`, `image`, `author`, `sku`, `categorydata`, `category`, `tags`, `year`, `feature`, `bookformat`, `shortdescription`, `description`, `deturl`, `ordernum`, `status`, `date_added`, `date_modify`, `home`, `latest`) VALUES
(1, 'BioPsychology (2nd Edition)', 'BioPsychology', 'BioPsychology, clinical psychology book, biopsychology book, neuropsychology book, biopsychology for entrance exams, arvind otta book, arvind otta biopsychology, mphil clinical psychology book', 'BioPsychology is useful for various Clinical Psychology Entrance Examinations like PsyD and M.Phil in Clinical Psychology.', '', '499', '399', 'product/621BioPsychology.png', 'Arvind Otta', '978-81-938186-0-2', 'Education', NULL, 'Entrance Exams, Clinical Psychology', '2019', 0, 'Print', '<p>This book is useful for all psychology Entrance examinations, especially clinical Psychology entrance exams. The book can help you to understand various conceptual vocabulary related to Neuropsychology.</p>\r\n\r\n<p>Bio-Psychology is one of the important topics for M.Phil Clinical Psychology so I wrote this book to provide key elements of Bio Psychology to a better understanding of the concept and to increase the vocabulary in Bio Psychology. Strong vocabulary can play a very important role to improve marks from BioPsychology section in M. Phil Clinical Psychology Entrance Examinations. Hundreds of M. Phil Clinical Psychology Entrance examinations have been analyzed before presenting this book to you.</p>\r\n', NULL, 'https://www.upseducation.in/mphil-clinical-psychology-entrance-book', '', 1, '2022-01-01 11:01:35', '2022-01-21 17:49:28', '1', '1'),
(2, 'Depression in Childhood', 'Depression in Childhood', 'Depression in Childhood, depression, mental health, depression and children', 'Depression in Childhood, depression, mental health book, books on mental health', '', '899', '750', 'product/6199Depression_in_childhood.png', 'Arvind Otta', '978-93-91724-36-8', 'Mental Health', NULL, 'Awareness, Health, Knowledge', '2014', 0, 'Print', '<p>Depression in Childhood explains the cause and symptoms of depression in childhood. This book can help caretakers and parents to identify behavioural changes and other indicators.&nbsp;</p>\r\n\r\n<p>There can be various symptoms of depression:<br />\r\nSadness throughout the day and especially in the morning.<br />\r\nSudden weight gain or loss.<br />\r\nIncrease in irritability<br />\r\nFeeling tired and weak almost every day.<br />\r\nFeeling unworthy or guilty.<br />\r\nDifficulty in staying focused and making decisions.<br />\r\nSleeping too much or too little almost every day.<br />\r\nDullness in all activities.<br />\r\nRecurrent thoughts of death or suicide.<br />\r\nFeeling restless or lethargic.</p>\r\n\r\n<p>But the symptoms may be different in children, this book throws light on this problem in detail.</p>\r\n', NULL, 'https://www.amazon.in/Psychologs-Magazine-Feb-July-2019-Pack/dp/B084DY5CKB/ref=sr_1_3?crid=3GRE6VXBFKZNY&keywords=psychologs+magazine&qid=1642015527&sprefix=psychologs+magazine%2Caps%2C213&sr=8-3', '', 1, '2022-01-01 11:04:32', '2022-01-21 18:19:49', '1', '1'),
(3, 'Social Media Addiction', 'Social Media Addiction', 'Social Media Addiction', 'Social Media Addiction', '', '500', '400', 'product/6899Social-Media-Addiction.png', 'Arvind Otta', '978-93-91724-54-2', 'Mental Health', NULL, 'Awareness, Health, Knowledge', '2015', 0, 'Print', '<p>Social media addiction is one of the major problems not only in adolescents but young adults also. This book explains the cause and also a few techniques to rid of this demon.</p>\r\n\r\n<p>The cause of social media addiction is complex, but its adverse effects are similar to those of other addictions, with severe negative physical, psychological and social effects.&nbsp;In this problem, there is a strong desire to use social media excessively through electronic devices and when removed, severe symptoms like anger, sometimes in concentration, physical violence, anxiety etc.&nbsp;This book gives an insight into the seriousness of this problem.</p>\r\n', NULL, '', '', 1, '2022-01-01 11:04:55', '2022-01-21 18:49:15', '1', '1'),
(4, 'M.Phil in Clinical Psychology ', 'M.Phil in Clinical Psychology ', 'Psychology Entrance Exam, mphil clinical psychology, arvind otta author', 'This book is useful for the M.Phil Clinical Psychology entrance exam if it is used with consistency and discipline. The book is divided into 20 chapters, each chapter helping you to analyse your preparation and strengthen your understanding of the subject.', '', '525', '529', 'product/2231MPhil_in_clinical_psychology.png', 'Arvind Otta', '978-819-3818-61-9', 'Education', NULL, 'Entrance Exams, Clinical Psychology', '2020', 1, 'Print', '<p>This book is useful for the M.Phil Clinical Psychology entrance exam if it is used with consistency and discipline. The book is divided into 20 chapters, each chapter helping you to analyse your preparation and strengthen your understanding of the subject.</p>\r\n\r\n<p>It is not a practice set of objective questions, and this book can be difficult for students who have not done a systematic and intensive study. This Practice set is of advanced level, which should be used after a certain level when students feel confident and ready for analysis of their preparation.&nbsp;</p>\r\n', NULL, 'https://www.upseducation.in/mphil-clinical-psychology-entrance-book', '', 1, '2022-01-01 11:05:16', '2022-01-21 17:54:25', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_id`, `category_id`) VALUES
(14, 5, 1),
(23, 1, 1),
(24, 4, 1),
(25, 2, 1),
(26, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(300) DEFAULT NULL,
  `home` varchar(20) DEFAULT NULL,
  `shortdescription` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `home`, `shortdescription`, `description`, `image`, `linkedin`, `email`, `status`, `date_added`, `date_modify`) VALUES
(3, 'Mrs. Amita Devnani ', 'Life Coach and Psychologist', '1', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'image/5269amita photu.jpg', '', '', 1, '2023-03-26 12:26:24', '2024-11-29 10:54:17'),
(4, 'Shiv', 'Zumba Trainer ', '1', '<ul>\r\n	<li>Strong knowledge of dierent yoga aspects..&nbsp;</li>\r\n	<li>Good at maintaining large team member..</li>\r\n	<li>Ability to teach and make people understand..</li>\r\n	<li>Good knowledge of various mind relaxation techniques..</li>\r\n</ul>\r\n', '', 'image/5131shiv photu.jpg', '', '', 1, '2023-03-26 12:42:28', '2024-08-30 10:28:58'),
(5, 'Jatin', 'Yoga Professional', '1', '<p>I have treated many patients well like paralysis, sciatica, cervical, backpain, shoulder pain ect. I have started working on strees and depression. The use of meditation and anuprekha along with yoga and pranayam can bring about a lot of improvement in the patient.</p>\r\n', '', 'image/6568jatin photuuu.jpg', '', '', 1, '2023-03-26 12:50:39', '2024-08-30 10:24:10'),
(6, 'Rohit', 'Yoga practitioner', '1', '<p>Bachelor of Arts degree in yoga education from Himalayan university, Itanagar, Arunachal Pradesh. With grade first in theory, practical and teaching aggregate 68% marks.</p>\r\n', '<p>God has destined me to be a Yoga practitioner and teacher because I was born in a village where due to efforts of a divine personality learning was easily accessible for all. Due to keen interest in Yoga I started learning yoga in 2010 at the age of twelve years under the guidance of my Yoga Guru His Excellency Shri Ishwar Singh Arya. In previous years I have learnt various types of Yogasana, Pranayama, Kriyas, Bandhas, Meditation etc. Along with practice of Yoga I participated in various Yoga competitions, workshops, classes and seminars kept on increasing my knowledge about Yoga. Due to my keen interest in Yoga I have decided to make a career in the field of Yoga as a Yoga Teacher. My interest, flexibility, practice, skills, knowledge are compatible with my career objective. I sincerely believe that as a Yoga Teacher I can explore my full potential.</p>\r\n', 'image/9104rohit.png', '', '', 1, '2023-03-26 12:57:21', '2024-11-29 10:55:48'),
(7, 'Santosh Kumar', 'Self Defense Trainer', '1', '<p>Let me introduce myself, I&#39;m a dancer and a choreographer who has 10 years of experience. Other than dance I&#39;m good at different dance styles and Zumba session.</p>\r\n', '<p>Guidance to students on the indian classical dance form : semi classical Guidance to the students on the other dance forms : jazz , bhangra , hip - hop , house , contemporary, zumba, folk Organised the competition for the students Advertised &amp; Motivated people to join the class by organizing various events. Choreographed the dances of the students for the competitions. Preparation of the students for different competition for all dance forms</p>\r\n', 'image/5604defence trainer photu.jpg', '', '', 1, '2023-03-26 13:00:29', '2024-08-30 10:25:21'),
(8, 'Johnty Jenesis', 'Zumba Trainer', '1', '', '', 'image/5047jonty.png', '', '', 1, '2023-03-26 13:01:39', '0000-00-00 00:00:00'),
(9, 'Megha Dagar', ' Dietitian (weight management and Diabetes)', '1', '<pre>\r\n<span style=\"font-family:Georgia,serif\"><strong><span style=\"background-color:#ffffff\">Experience - 5 + years experience in yoga and pilate teaching.</span></strong></span></pre>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><strong><span style=\"background-color:#ffffff\">Specialist - yoga , &', '', 'image/7894megha photu.jpg', '', '', 1, '2023-06-28 10:10:13', '2024-08-30 10:26:18'),
(11, 'Achanti Sai Manoj', ' Zumba Trainer', '1', '', '', 'image/4372manoj.jpg', '', '', 1, '2023-06-28 10:29:23', '2024-08-30 09:03:26'),
(12, 'Shikha', 'Yoga Trainer', '1', '', '', 'image/7090sikha.jpg', '', '', 1, '2024-11-29 10:55:21', '2024-11-29 10:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `ttype` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `home` varchar(20) NOT NULL,
  `shortdescription` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `ttype`, `name`, `designation`, `home`, `shortdescription`, `image`, `status`, `date_added`, `date_modify`) VALUES
(1, 1, 'Anmol Jaiswal', 'Acid Reflux', '1', '<p>Anmol started doing Yoga with Bhumika in order to relieve his acid reflux. Unfortunately, he did not know that Bhumika&rsquo;s special yoga techniques would help with his problem. But then he saw how she was able to help other people who had similar issues and decided to try it himself. Now Anmol', '', 1, '2023-03-19 08:18:10', '0000-00-00 00:00:00'),
(2, 1, 'Yami Suthar ', 'Special Population Training ( yoga )', '1', 'My mother-in-law joined the fitness center one month ago and I am happy that she is working so hard I mean dieting, exercising, taking care of herself at this age, and Bhumika is also being so helpful to keep an eye on her in person and she posted me about her health every week. Elder people now need such fintness and nutrition experts who can help them and give them confidence like my mother-in-law has now as she can do it.', 'image/5521client1.png', 1, '2023-03-26 11:19:41', '2023-03-26 13:15:42'),
(3, 1, 'Apurva Gupta ', 'Fitness classes ', '1', 'Bhumika is a wonderful instructor. She understands the fact that the instructions and exercises must be simple as well as very effective and easy to be understood by her participants on Online platform.', 'image/7736client2.png', 1, '2023-03-26 11:21:10', '2023-03-26 13:15:53'),
(4, 1, 'Meenakshi swami', 'Yoga fitness ', '1', 'Thank you so much, you\'re seriously an amazing trainer. Thank you for making me feel proud even of my smallest achievements. Your positive attitude has really kept me going. I\'ve enjoyed the training so much and am very grateful for your support.Excellent fitness centre????', 'image/5328client3.png', 1, '2023-03-26 11:23:15', '2023-03-26 13:12:55'),
(5, 1, 'Preeti sehrawat ', 'Yoga fitness ', '1', 'I am happy that it promotes female fitness, aarogya works specially female internal health like thyroid,slip disk,cervical pain ,joints pain, weight loss and fat loss and the  environment is comfortable no matter of it\'s online or offline as i am the user of both mode of classes, Trainers have deep knowledge so yes i highly recommend Aarogya with bhumika. ', 'image/2238client4.png', 1, '2023-03-26 12:18:33', '2023-03-26 13:19:10'),
(6, 2, 'niva', '', '1', 'I am writing to express our fantastic experience with Aarogya The Neev. True to its name, Aarogya The Neev introduced us to creative and innovative activities that were not only incredibly fun but also highly beneficial. Their unique approach to fitness through Zumba and dance made each session a perfect blend of enjoyment and wellness. The activities were thoughtfully designed to reduce stress and keep everyone engaged, making fitness something we genuinely looked forward to. Aarogya The Neev has truly set a high standard for balancing fun with health, and we couldn\'t be more satisfied with the results!', 'image/1988nivabupaMobileLogo.png', 1, '2024-10-24 06:11:19', '2024-10-24 06:28:56'),
(7, 2, 'ur', '', '1', 'We would like to extend our heartfelt gratitude to Aarogya the Neev for delivering the outstanding Athlete program, online Zumba Sessions to our clients. The program’s unique blend of physical fitness and mental wellness activities, such as cultural dance—showcasing India\'s diverse cultures, Nukkad Natak, Zumba, Bhangra, women-oriented self-defence training, and yoga—was truly remarkable. Authenticity of each activity was preserved and also provided the purest forms, leaving a lasting impact on everyone involved. Zumba sessions continue to bring innovation, energy, and enjoyment to our team, making fitness a fun and integral part of our workplace culture. Thank you, Aarogya the Neev, for your unwavering dedication to promoting a healthier and happier environment. We look forward to more exciting collaborations ahead!', 'image/9095logo-blue.png', 1, '2024-10-24 06:29:45', '0000-00-00 00:00:00'),
(8, 2, 'nizcare', '', '1', 'We would like to extend our heartfelt gratitude to Aarogya the Neev for delivering the outstanding Athlete program, online Zumba Sessions to our clients. The program’s unique blend of physical fitness and mental wellness activities, such as cultural dance—showcasing India\'s diverse cultures, Nukkad Natak, Zumba, Bhangra, women-oriented self-defence training, and yoga—was truly remarkable. Authenticity of each activity was preserved and also provided the purest forms, leaving a lasting impact on everyone involved. Zumba sessions continue to bring innovation, energy, and enjoyment to our team, making fitness a fun and integral part of our workplace culture. Thank you, Aarogya the Neev, for your unwavering dedication to promoting a healthier and happier environment. We look forward to more exciting collaborations ahead!', 'image/3819logo.png', 1, '2024-10-24 06:30:47', '0000-00-00 00:00:00'),
(9, 2, 'ace insurance', '', '1', 'We would like to express our deep appreciation for the incredible yoga and wellness sessions conducted for our organization. These sessions beautifully combined physical activity with mental relaxation, offering our employees a well-rounded approach to managing stress and enhancing their overall well-being.\r\nThe yoga sessions focused on improving flexibility, mindfulness, and calmness, while the wellness activities promoted mental clarity, emotional strength, and stress relief. The positive impact has been clear, encouraging healthier habits and a stronger sense of balance. We are proud to be partnered with Aarogya The Neev in building a healthier, more mindful workplace.', 'image/4257unnamed.png', 1, '2024-10-24 06:45:33', '0000-00-00 00:00:00'),
(10, 2, 'medibuddy', '', '1', 'It was an incredible experience with the mental wellness sessions, yoga, and the entire series of ergonomics workshops organized by your company for stress reduction. These sessions were not only enjoyable but also highly effective in promoting relaxation, alleviating stress, and enhancing our posture and overall well-being. The activities were carefully designed to boost our mental and physical health, helping us unwind while fostering a supportive and relaxed environment. The combination of mindfulness, physical rejuvenation, and ergonomics has left us feeling refreshed, more focused, and more connected as a team. We sincerely appreciate the positive impact these sessions have had on the atmosphere of  workplace!\r\nSpecial Thanks to Bhavya for such great coordination.\r\nLooking forward to having more such sessions.', 'image/8387images.png', 1, '2024-10-24 06:53:21', '0000-00-00 00:00:00'),
(11, 2, 'Apollo clinic', '', '1', 'We would like to extend our sincere gratitude to Aarogya The Neev for organizing a highly successful health camp and comprehensive health check-ups for our corporate clients.\r\n\r\nThe meticulous planning and execution of the event ensured that our clients received valuable screenings and assessments that significantly contributed to their overall well-being. The expert guidance provided by the Aarogya The Neev team empowered participants to make informed decisions about their health and adopt preventive care measures.\r\n\r\nThe positive feedback from our clients speaks volumes about the impact of the camp on their understanding of health issues and their commitment to maintaining a healthy lifestyle.\r\n\r\nThank you, Aarogya The Neev, for your dedication to promoting a healthier workplace. We look forward to collaborating on future initiatives.', 'image/6615aplloo.png', 1, '2024-10-24 06:54:50', '0000-00-00 00:00:00'),
(12, 2, 'visit health', '', '1', 'The client had an incredible experience with the physiotherapy session and ergonomics workshops organized by Arogya The Neev for stress reduction. These sessions, led by skilled physiotherapists, were not only enjoyable but also highly effective in promoting relaxation, reducing stress, and improving our posture and overall well-being. The targeted activities were carefully designed to enhance our physical health, helping us unwind while creating a supportive and relaxed environment. The combination of physical rejuvenation and expert ergonomic guidance has left them feeling refreshed, more focused, and more connected as a team. We sincerely appreciate the positive impact these sessions have had on the workplace atmosphere!', 'image/6457visithealt.jpg', 1, '2024-10-24 06:55:25', '0000-00-00 00:00:00'),
(13, 2, 'care insurance', '', '1', 'We had an amazing experience with the mental wellness sessions, yoga, and ergonomics workshops organized by your company for stress reduction. The sessions were not only enjoyable but also incredibly effective in promoting relaxation, relieving stress, and improving our posture and overall well-being. The activities were thoughtfully designed to boost our mental and physical health, help us unwind, and create a supportive, relaxed environment. The combination of mindfulness, physical rejuvenation, and ergonomics left us feeling refreshed, more focused, and connected as a team. We highly appreciate the positive impact these sessions have had on our workplace atmosphere.', 'image/6422care insurance.png', 1, '2024-10-24 06:55:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ctime` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `feaheading` varchar(255) DEFAULT NULL,
  `fax` longtext NOT NULL,
  `aboutimage` varchar(255) DEFAULT NULL,
  `googlemap` text NOT NULL,
  `pricingtext` varchar(255) DEFAULT NULL,
  `socialsites` text NOT NULL,
  `social1` varchar(255) NOT NULL,
  `social2` varchar(255) NOT NULL,
  `social3` varchar(255) NOT NULL,
  `social4` varchar(255) NOT NULL,
  `com1` varchar(255) NOT NULL,
  `com2` varchar(255) NOT NULL,
  `com3` varchar(255) NOT NULL,
  `com4` varchar(255) NOT NULL,
  `comvalue1` varchar(255) NOT NULL,
  `comvalue2` varchar(255) NOT NULL,
  `comvalue3` varchar(255) NOT NULL,
  `comvalue4` varchar(255) NOT NULL,
  `numbertitle1` varchar(255) NOT NULL,
  `numbertitle2` varchar(255) NOT NULL,
  `numbertitle3` varchar(255) NOT NULL,
  `numbertitle4` varchar(255) NOT NULL,
  `whatsappmsg` varchar(255) DEFAULT NULL,
  `whatsappmsghome` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_password`, `page_title`, `meta_keyword`, `meta_description`, `icon`, `logo`, `image`, `address`, `phone`, `ctime`, `email`, `feaheading`, `fax`, `aboutimage`, `googlemap`, `pricingtext`, `socialsites`, `social1`, `social2`, `social3`, `social4`, `com1`, `com2`, `com3`, `com4`, `comvalue1`, `comvalue2`, `comvalue3`, `comvalue4`, `numbertitle1`, `numbertitle2`, `numbertitle3`, `numbertitle4`, `whatsappmsg`, `whatsappmsghome`, `copyright`) VALUES
(1, 'aarogyawithbhumika', 'ajay@gmail.com', '27d457cc6650a66519bf23a94871a160', 'Aarogya the neev', 'Aarogya the neev', 'Aarogya the neev', 'admin/3309fav_aarogya.png', 'admin/3955logobhum.png', 'admin/7409newlogo.png', 'Pratibha Tower F356+6JR, Moti Vihar, Sector 41, Gurugram, Haryana 122022', '+91 93156 42177', ' ', 'info@aarogyatheneev.com', 'Revitalize work life: Fitness and wellness for a healthier, happier, more productive team', '<p>Expertly crafted to match your industry&#39;s unique needs</p>\r\n', 'admin/8227bhumikawebsite.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.7110947386486!2d77.05934221500502!3d28.458124182486973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19f4c69f1861%3A0x2239c61286ea303d!2sPratibha%20Tower!5e0!3m2!1sen!2sin!4v1679210503216!5m2!1sen!2sin\r\n', 'We bring wellness to corporates with Yoga, Zumba, and team-building activities, creating healthier, happier workplaces across India. We serve with pride as the pioneers of YoASMR—the one and only fusion of Yoga and ASMR, designed to relax the mind, rejuve', 'https://www.facebook.com/bhumi1988', 'https://www.instagram.com/aarogyatheneev', '', 'www.linkedin.com/in/aarogya-the-neev-5b9074270', 'https://youtube.com/channel/UCGsEyMZSpZpcsHE439wv-CA', 'Client Served', 'Corporate Served', 'Makeover', 'Fitness Transformation', '14000', '200', '8000', '65000', '+', '+', '+', '+', 'Test', 'Aarogya the neev', 'Copyright © 2025 Aarogya The Neev. All Rights Reserved.'),
(2, 'aarogyabhumika', 'ajay@gmail.com', '27d457cc6650a66519bf23a94871a160', 'aarogya the neev', 'aarogya the neev', 'aarogya the neev', 'admin/3309fav_aarogya.png', 'admin/8431newlogo.png', 'admin/7409newlogo.png', 'Pratibha Tower F356+6JR, Moti Vihar, Sector 41, Gurugram, Haryana 122022', '+91 70425 26648', ' ', 'info@aarogyatheneev.com', 'Revitalize work life: Fitness and wellness for a healthier, happier, more productive team', '<p>Expertly crafted to match your industry&#39;s unique needs</p>\r\n', 'admin/8227bhumikawebsite.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.7110947386486!2d77.05934221500502!3d28.458124182486973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19f4c69f1861%3A0x2239c61286ea303d!2sPratibha%20Tower!5e0!3m2!1sen!2sin!4v1679210503216!5m2!1sen!2sin\r\n', 'Yoga is really helpful for women dealing with issues like menopause, endometriosis, PCOS, fibroids, PMS, and pregnancy. It offers specific exercises and relaxation techniques that can make a big difference in managing these conditions and staying healthy.', 'https://www.facebook.com/bhumi1988', 'https://www.instagram.com/aarogyatheneev', '', 'www.linkedin.com/in/aarogya-the-neev-5b9074270', 'https://youtube.com/channel/UCGsEyMZSpZpcsHE439wv-CA', 'Client Served', 'Corporate Served', 'Makeover', 'Fitness Transformation', '14000', '200', '8000', '65000', '+', '+', '+', '+', 'Test', 'aarogya the neev', 'Copyright © 2023 aarogya the neev. All Rights Reserved.'),
(3, 'anmol', 'anmol@gamainmentsolutions.com', '6b974b8d0a6b6053d93553eb5e09ca57', 'aarogya the neev', 'aarogya the neev', 'aarogya the neev', 'admin/3309fav_aarogya.png', 'admin/8431newlogo.png', 'admin/7409newlogo.png', 'Pratibha Tower F356+6JR, Moti Vihar, Sector 41, Gurugram, Haryana 122022', '+91 70425 26648', ' ', 'info@aarogyatheneev.com', 'Revitalize work life: Fitness and wellness for a healthier, happier, more productive team', '<p>Expertly crafted to match your industry&#39;s unique needs</p>\r\n', 'admin/8227bhumikawebsite.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.7110947386486!2d77.05934221500502!3d28.458124182486973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19f4c69f1861%3A0x2239c61286ea303d!2sPratibha%20Tower!5e0!3m2!1sen!2sin!4v1679210503216!5m2!1sen!2sin\r\n', 'Yoga is really helpful for women dealing with issues like menopause, endometriosis, PCOS, fibroids, PMS, and pregnancy. It offers specific exercises and relaxation techniques that can make a big difference in managing these conditions and staying healthy.', 'https://www.facebook.com/bhumi1988', 'https://www.instagram.com/aarogyatheneev', '', 'www.linkedin.com/in/aarogya-the-neev-5b9074270', 'https://youtube.com/channel/UCGsEyMZSpZpcsHE439wv-CA', 'Client Served', 'Corporate Served', 'Makeover', 'Fitness Transformation', '14000', '200', '8000', '65000', '+', '+', '+', '+', 'Test', 'aarogya the neev', 'Copyright © 2023 aarogya the neev. All Rights Reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `videocategory`
--

CREATE TABLE `videocategory` (
  `id` int(11) NOT NULL,
  `video_id` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `videocategory`
--

INSERT INTO `videocategory` (`id`, `video_id`, `category_id`) VALUES
(3, '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE `videogallery` (
  `id` int(11) NOT NULL,
  `home` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `videourl` varchar(255) NOT NULL,
  `sortorder` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `date_modify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `videogallery`
--

INSERT INTO `videogallery` (`id`, `home`, `name`, `videourl`, `sortorder`, `status`, `date_added`, `date_modify`) VALUES
(1, '1', ' Experience of Zumba sessions at Adidas', 'https://www.youtube.com/embed/gzqSR8eAhoo', '', '1', '2023-03-19 07:38:12', '2024-08-30 09:21:37'),
(4, '0', 'Nisha Lamba Neha makeover with music', 'https://www.youtube.com/embed/hA5ub4noGhQ', '', '1', '2023-03-26 13:32:34', ''),
(5, '1', 'Babita ji 7 day 7 kg challenge mp4', 'https://www.youtube.com/embed/9l6G15c4Y4o', '', '1', '2023-03-26 13:33:54', ''),
(6, '1', 'Pooja rana Have polio #SPT case', 'https://www.youtube.com/embed/ISa3gfMdPGM', '', '1', '2023-03-26 13:35:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `webtimeline`
--

CREATE TABLE `webtimeline` (
  `id` int(11) NOT NULL,
  `timelineh1` varchar(255) NOT NULL,
  `timelined1` varchar(255) NOT NULL,
  `timelineh2` varchar(255) NOT NULL,
  `timelined2` varchar(255) NOT NULL,
  `timelineh3` varchar(255) NOT NULL,
  `timelined3` varchar(255) NOT NULL,
  `timelineh4` varchar(255) NOT NULL,
  `timelined4` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `webtimeline`
--

INSERT INTO `webtimeline` (`id`, `timelineh1`, `timelined1`, `timelineh2`, `timelined2`, `timelineh3`, `timelined3`, `timelineh4`, `timelined4`, `status`, `date_added`, `date_modify`) VALUES
(1, 'June 2021', 'Crossed 1000 Orders with an initial team of 5 delivery partners', 'Oct 2021', 'Crossed 10,000 Orders and increased to a delivery partner network to 20 riders.', 'Dec 2021', 'Crossed 150,000 Orders milestone and built a delivery partner network to 50+ riders.', 'May 2022', 'Crossed 350,000+ Orders milestone and currently have a delivery partner network to 100+ riders.', 1, '2022-03-18 13:41:45', '2022-05-08 22:46:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutwebsite`
--
ALTER TABLE `aboutwebsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crmvideocategory`
--
ALTER TABLE `crmvideocategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_videogallery`
--
ALTER TABLE `crm_videogallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_plan`
--
ALTER TABLE `customer_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headerbanner`
--
ALTER TABLE `headerbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_enquiry`
--
ALTER TABLE `payment_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videocategory`
--
ALTER TABLE `videocategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webtimeline`
--
ALTER TABLE `webtimeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `crmvideocategory`
--
ALTER TABLE `crmvideocategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crm_videogallery`
--
ALTER TABLE `crm_videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer_plan`
--
ALTER TABLE `customer_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headerbanner`
--
ALTER TABLE `headerbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_enquiry`
--
ALTER TABLE `payment_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videocategory`
--
ALTER TABLE `videocategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `webtimeline`
--
ALTER TABLE `webtimeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
