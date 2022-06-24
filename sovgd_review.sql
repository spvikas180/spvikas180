-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 03:06 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sovgd_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorId` int(11) NOT NULL,
  `authorName` varchar(45) NOT NULL,
  `authorEmail` varchar(255) NOT NULL,
  `authorStatus` int(11) NOT NULL,
  `authorUpdated` datetime NOT NULL,
  `authorCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorId`, `authorName`, `authorEmail`, `authorStatus`, `authorUpdated`, `authorCreated`) VALUES
(1, 'Soft Review Now', '', 1, '0000-00-00 00:00:00', '2020-08-24 08:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogId` int(11) NOT NULL,
  `blogTitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogInfo` varchar(255) NOT NULL,
  `blogDesp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogMetaTitle` text NOT NULL,
  `blogMetaKey` text NOT NULL,
  `blogMetaDesp` text NOT NULL,
  `blogDate` datetime NOT NULL,
  `blogStatus` int(11) NOT NULL,
  `blogDraft` int(11) NOT NULL COMMENT '0 - In draft, 1 - not in draft',
  `commentStatus` int(11) NOT NULL,
  `blogAuthor` int(11) NOT NULL,
  `blogImage` varchar(255) NOT NULL,
  `blogViews` int(11) NOT NULL,
  `blogFeatures` int(11) NOT NULL,
  `blogUpdated` datetime NOT NULL,
  `blogCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogId`, `blogTitle`, `blogInfo`, `blogDesp`, `blogMetaTitle`, `blogMetaKey`, `blogMetaDesp`, `blogDate`, `blogStatus`, `blogDraft`, `commentStatus`, `blogAuthor`, `blogImage`, `blogViews`, `blogFeatures`, `blogUpdated`, `blogCreated`) VALUES
(1, 'PS5 Restock update: GameStop Stored Consoles in Stores on Friday, More to Come', 'ps5-restock-update-gamestop-stored-consoles-in-stores-on-friday-more-to-come', '<p>For <strong>PS5 </strong>players, a &ldquo;keep an eye out&rdquo; alert should be declared. Almost in every store, the PS5 has been restocked. For instance, Gamestop, Target, and Amazon announced a PS5 <strong>restock </strong>week, including the multiple <strong>PS5 restock </strong>events from PlayStation Direct last week. But this week has been easier to get a console compared to the previous week. However, not every retail store offers <strong>consoles</strong>.</p>\r\n<p>So, to ease your worries, we have been tracking possible restocks happening in Best Buy and Walmart, which have not offered up any <strong>consoles </strong>for a while. One of the reasons could be the upcoming opportunity to supply on Black Friday and is just around the corner.</p>\r\n<p>However, GameStop showed its restocking day from October 29, but you have to separate it from this week online <strong>restock</strong>. If you need to buy a <strong>console </strong>from this week&rsquo;s restock, then be ready to wait in line for a while. According to some reports, people are anticipating overnight to get their hands on a brand new <strong>PS5</strong>.</p>\r\n<p>Here are the cities hosting the GameStop in-store event on Friday. Check out the cities listed below and find yours.</p>\r\n<ul>\r\n<li><span style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">San Francisco.</span></li>\r\n<li><span style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Seattle.</span></li>\r\n<li><span style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Detroit.</span></li>\r\n<li><span style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Raleigh.</span></li>\r\n<li><span style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Philadelphia.</span></li>\r\n<li><span style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Nashville.</span></li>\r\n</ul>\r\n<p>If you are tired of searching online for <strong>PS5 </strong>restock, then there are a few ways to get your early hands-on console. You can try GameStop&rsquo;s PowerUp Rewards Pro service and Best Buy&rsquo;s Totaltech subscription service. These services provide early access to the PS5 <strong>restock </strong>as long as you are a paid member of either service. In the meantime, PlayStation Direct created an easier way to register for the waiting members and deal with resellers and bots.</p>\r\n<p>For people searching for a different way to get their hands on <strong>PS5</strong>, we have gathered all the places to <strong>restock </strong>both the digital edition and the standard edition of PS5. We have been helping thousands of people land their <strong>consoles </strong>by offering shortcuts and tips with this data. So, walk through the suggestions and instructions listed below for your benefit.</p>\r\n<h2><strong>What&rsquo;s the Reason Behind the Shortage of PS5?</strong></h2>\r\n<p>For the record, three reasons are more significant for the shortage of <strong>PS5</strong>. The first one is relatively easy: <strong>consoles </strong>are unbelievably popular. Sony has stated that the PS5 is the best-selling console, and 10 million units are already sold since its launch.</p>\r\n<p>The second reason is the chip shortage, which is impacting most of the world&rsquo;s electronics. Although, Sony informed that the company had secured enough chips to meet the requirement of 14.8 million <strong>consoles </strong>for the fiscal year.</p>\r\n<p>And the last reason is due to the bots. It means resellers are taking up the software to purchase a vast number of PS5 altogether. Due to heavy purchasing, actual buyers are unable to get their hands on <strong>consoles</strong>. Retailers have also added bot protections with the PS5 restocks, but these restrictions rarely hamper resellers.</p>\r\n<h2><strong>Where to Spot PS5 this Month? </strong></h2>\r\n<p>The stock refreshers were short on the ground earlier this month, but the process has been accelerated recently. Take a look at the recent PS5 to <strong>restock </strong>history.</p>\r\n<ul>\r\n<li>Walmart</li>\r\n<li>Antonline</li>\r\n<li>PlayStation Direct</li>\r\n<li>Amazon</li>\r\n<li>Best Buy</li>\r\n<li>Target</li>\r\n<li>GameStop</li>\r\n</ul>\r\n<h2><strong>Where to Get PS5 With Extra Payment? </strong></h2>\r\n<p>If you are thinking of giving up and going for an extra payment to buy a PS5, you can try a few options. However, you will need to bear heft payment on sites like StockX or eBay. For instance, <strong>consoles </strong>are available for over $1000 payment on eBay. But the prices have made their way down to approx. $700.</p>', 'PS5 Restock update: GameStop Stored Consoles in Stores on Friday, More to Come', 'PS5 Restock', '', '0000-00-00 00:00:00', 1, 1, 0, 1, 'upload/blog/ps5-restock-update-gamestop-stored-consoles-in-stores-on-friday-more-to-come.jpg', 0, 0, '0000-00-00 00:00:00', '2021-11-01 10:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cat_mapping`
--

CREATE TABLE `blog_cat_mapping` (
  `mappingId` int(11) NOT NULL,
  `blogId` int(11) NOT NULL,
  `blogcatId` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_cat_mapping`
--

INSERT INTO `blog_cat_mapping` (`mappingId`, `blogId`, `blogcatId`, `createdAt`) VALUES
(1, 1, 1, '2021-11-01 10:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL,
  `catDesc` text NOT NULL,
  `catStatus` int(11) NOT NULL,
  `catTitle` text NOT NULL,
  `catMetaDesc` text NOT NULL,
  `catMetaKey` text NOT NULL,
  `catImage` varchar(255) NOT NULL,
  `catFaIcon` varchar(255) NOT NULL,
  `catDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `catSlug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catId`, `catName`, `catDesc`, `catStatus`, `catTitle`, `catMetaDesc`, `catMetaKey`, `catImage`, `catFaIcon`, `catDate`, `catSlug`) VALUES
(1, 0, 'Electronics and Technology', '', 1, '', '', '', '', '', '2021-07-14 08:47:14', 'electronics-and-technology'),
(3, 26, 'Financial services', '', 1, '', '', '', '', '', '2021-07-14 08:47:18', 'financial-services'),
(4, 30, 'Food retail and service', '', 1, '', '', '', '', '', '2021-07-14 08:47:22', 'food-retail-and-service'),
(5, 7, 'Gifts and flowers', '', 1, '', '', '', '', '', '2021-07-14 08:47:22', 'gifts-and-flowers'),
(6, 0, 'Health & Medical', '', 1, '', '', '', '', '', '2021-07-14 08:47:23', 'health-and-medical'),
(7, 0, 'Home and garden', '', 1, '', '', '', '', '', '2021-07-14 08:47:30', 'home-and-garden'),
(8, 0, 'Pets and animals', '', 1, '', '', '', '', '', '2021-07-14 08:47:34', 'pets-and-animals'),
(9, 0, 'Others', '', 1, '', '', '', '', '', '2021-07-14 08:47:35', 'others'),
(10, 0, 'Sports and outdoors', '', 1, '', '', '', '', '', '2021-07-14 08:47:56', 'sports-and-outdoors'),
(11, 32, 'Cars', '', 1, '', '', '', '', '', '2021-07-14 08:47:56', 'cars'),
(12, 1, 'IT & Communication', '', 1, '', '', '', '', '', '2021-07-14 08:47:56', 'it-communication'),
(13, 1, 'Appliances & Electronics', '', 1, '', '', '', '', '', '2021-07-14 08:48:05', 'appliances-electronics'),
(14, 1, 'Computers & Phones', '', 1, '', '', '', '', '', '2021-07-14 08:48:08', 'computers-phones'),
(15, 1, 'Repair & Services', '', 1, '', '', '', '', '', '2021-07-14 08:48:09', 'repair-services'),
(16, 0, 'Fashion Accessories Store', '', 1, '', '', '', '', '', '2021-07-14 08:48:14', 'fashion-accessories-store'),
(17, 21, 'Clothing & Underwear', '', 1, '', '', '', '', '', '2021-07-14 08:48:26', 'clothing-underwear'),
(18, 16, 'Costume & Wedding', '', 1, '', '', '', '', '', '2021-07-14 08:48:36', 'costume-wedding'),
(19, 21, 'Malls & Marketplaces', '', 1, '', '', '', '', '', '2021-07-14 08:48:46', 'malls-marketplaces'),
(20, 16, 'Jewelry & Watches', '', 1, '', '', '', '', '', '2021-07-14 08:48:57', 'jewelry-watches'),
(21, 0, 'Shopping', '', 1, '', '', '', '', '', '2021-07-14 08:49:07', 'shopping'),
(22, 0, 'Education', '', 1, '', '', '', '', '', '2021-07-14 08:49:10', 'education'),
(23, 56, 'Restaurants', '', 1, '', '', '', '', '', '2021-07-14 08:49:12', 'restaurants'),
(24, 56, 'Hotels', '', 1, '', '', '', '', '', '2021-07-14 08:49:14', 'hotels'),
(25, 26, 'Real Estate', '', 1, '', '', '', '', '', '2021-07-14 08:49:14', 'real-estate'),
(26, 0, 'Money & Insurance', '', 1, '', '', '', '', '', '2021-07-14 08:49:17', 'money-insurance'),
(27, 26, 'Bank', '', 1, '', '', '', '', '', '2021-07-14 08:49:18', 'bank'),
(28, 26, 'Credit Union', '', 1, '', '', '', '', '', '2021-07-14 08:49:20', 'credit-union'),
(29, 26, 'Insurance Agency', '', 1, '', '', '', '', '', '2021-07-14 08:49:20', 'insurance-agency'),
(30, 26, 'Travel Insurance Company', '', 1, '', '', '', '', '', '2021-07-14 08:49:20', 'travel-insurance-company'),
(31, 32, 'Car Rental Agency', '', 1, '', '', '', '', '', '2021-07-14 08:49:22', 'car-rental-agency'),
(32, 0, 'Automobiles', '', 1, '', '', '', '', '', '2021-07-14 08:49:22', 'automobiles'),
(33, 58, 'Salons', '', 1, '', '', '', '', '', '2021-07-14 08:49:24', 'salons'),
(34, 54, 'Construction Services', '', 1, '', '', '', '', '', '2021-07-14 08:49:24', 'construction-services'),
(35, 22, 'Courses & Classes', '', 1, '', '', '', '', '', '2021-07-14 08:49:26', 'courses-classes'),
(36, 7, 'Plumbing & Sanitation', '', 1, '', '', '', '', '', '2021-07-14 08:49:27', 'plumbing-sanitation'),
(37, 7, 'Interior Designer', '', 1, '', '', '', '', '', '2021-07-14 08:49:27', 'interior-designer'),
(38, 7, 'Kitchen Supply Store', '', 1, '', '', '', '', '', '2021-07-14 08:49:27', 'kitchen-supply-store'),
(39, 57, 'Lawyers & Attorneys', '', 1, '', '', '', '', '', '2021-07-14 08:49:28', 'lawyers-attorneys'),
(40, 9, 'Photography', '', 1, '', '', '', '', '', '2021-07-14 08:49:31', 'photography'),
(41, 26, 'Accounting & Tax', '', 1, '', '', '', '', '', '2021-07-14 08:49:31', 'accounting-tax'),
(42, 53, 'Website Designer', '', 1, '', '', '', '', '', '2021-07-14 08:49:31', 'website-designer'),
(43, 53, 'eCommerce agency', '', 1, '', '', '', '', '', '2021-07-14 08:49:32', 'ecommerce-agency'),
(44, 22, 'Coaching Center', '', 1, '', '', '', '', '', '2021-07-14 08:49:33', 'coaching-center'),
(45, 32, 'Auto Repair Shop', '', 1, '', '', '', '', '', '2021-07-14 08:49:33', 'auto-repair-shop'),
(46, 53, 'SEO Service', '', 1, '', '', '', '', '', '2021-07-14 08:49:33', 'seo-service'),
(47, 53, 'Internet Marketing Service', '', 1, '', '', '', '', '', '2021-07-14 08:49:34', 'internet-marketing-service'),
(48, 53, 'Marketing Agency', '', 1, '', '', '', '', '', '2021-07-14 08:49:34', 'marketing-agency'),
(49, 53, 'Advertising Agency', '', 1, '', '', '', '', '', '2021-07-14 08:49:35', 'advertising-agency'),
(50, 53, 'Affiliate Marketing Service', '', 1, '', '', '', '', '', '2021-07-14 08:49:36', 'affiliate-marketing-service'),
(51, 1, 'Software Company', '', 1, '', '', '', '', '', '2021-07-14 08:49:36', 'software-company'),
(52, 55, 'Web Hosting Company', '', 1, '', '', '', '', '', '2021-07-14 08:49:38', 'web-hosting-company'),
(53, 0, 'Sales & Marketing', '', 1, '', '', '', '', '', '2021-07-14 10:30:14', 'sales-marketing'),
(54, 0, 'Construction & Manufacturing', '', 1, '', '', '', '', '', '2021-07-14 10:37:54', 'construction-manufacturing'),
(55, 0, 'Internet & Software', '', 1, '', '', '', '', '', '2021-07-14 10:46:43', 'internet-software'),
(56, 0, 'Travel & Vacation', '', 1, '', '', '', '', '', '2021-07-14 10:47:57', 'travel-vacation'),
(57, 0, 'Legal Services & Government', '', 1, '', '', '', '', '', '2021-07-14 10:50:41', 'legal-services-government'),
(58, 0, 'Beauty & Well-being', '', 1, '', '', '', '', '', '2021-07-14 10:51:43', 'beauty-well-being'),
(59, 10, 'Swimming & Water', '', 1, '', '', '', '', '', '2021-07-14 10:58:00', 'swimming-water'),
(60, 10, 'Hockey & Ice Skating', '', 1, '', '', '', '', '', '2021-07-14 10:58:15', 'hockey-ice-skating'),
(61, 10, 'Fitness & Weight Lifting', '', 1, '', '', '', '', '', '2021-07-14 10:58:27', 'fitness-weight-lifting'),
(62, 0, 'Events & Entertainment', '', 1, '', '', '', '', '', '2021-07-14 11:00:38', 'events-entertainment'),
(63, 62, 'Clubbing & Nightlife', '', 1, '', '', '', '', '', '2021-07-14 11:00:50', 'clubbing-nightlife'),
(64, 62, 'Museums & Exibits', '', 1, '', '', '', '', '', '2021-07-14 11:01:05', 'museums-exibits'),
(65, 62, 'Music & Movies', '', 1, '', '', '', '', '', '2021-07-14 11:01:14', 'music-movies'),
(66, 62, 'Wedding & Party', '', 1, '', '', '', '', '', '2021-07-14 11:01:26', 'wedding-party'),
(67, 6, 'Clinics', '', 1, '', '', '', '', '', '2021-07-14 11:03:45', 'clinics'),
(68, 6, 'Dental Services', '', 1, '', '', '', '', '', '2021-07-14 11:03:58', 'dental-services'),
(69, 6, 'Hospital & Emergency', '', 1, '', '', '', '', '', '2021-07-14 11:04:13', 'hospital-emergency'),
(70, 6, 'Pharmacy & Medicine', '', 1, '', '', '', '', '', '2021-07-14 11:04:24', 'pharmacy-medicine'),
(71, 58, 'Cosmetics & Makeup', '', 1, '', '', '', '', '', '2021-07-14 11:06:22', 'cosmetics-makeup'),
(72, 58, 'Hair Care & Styling', '', 1, '', '', '', '', '', '2021-07-14 11:06:42', 'hair-care-styling'),
(73, 58, 'Tattoos & Piercings', '', 1, '', '', '', '', '', '2021-07-14 11:06:54', 'tattoos-piercings'),
(74, 58, 'Yoga & Meditation', '', 1, '', '', '', '', '', '2021-07-14 11:07:21', 'yoga-meditation'),
(75, 54, 'Architects & Engineers', '', 1, '', '', '', '', '', '2021-07-14 11:07:44', 'architects-engineers'),
(76, 54, 'Chemicals & Plastic', '', 1, '', '', '', '', '', '2021-07-14 11:07:54', 'chemicals-plastic'),
(77, 54, 'Industrial Supplies', '', 1, '', '', '', '', '', '2021-07-14 11:08:13', 'industrial-supplies'),
(78, 8, 'Animal Health', '', 1, '', '', '', '', '', '2021-07-14 11:09:04', 'animal-health'),
(79, 8, 'Cats & Dogs', '', 1, '', '', '', '', '', '2021-07-14 11:09:14', 'cats-dogs'),
(80, 8, 'Pet Stores', '', 1, '', '', '', '', '', '2021-07-14 11:09:29', 'pet-stores'),
(81, 8, 'Horses & Riding', '', 1, '', '', '', '', '', '2021-07-14 11:09:44', 'horses-riding'),
(82, 7, 'Furniture Store', '', 1, 'Best in Furniture Store', '', '', '', '', '2021-09-26 06:08:47', 'furniture-store'),
(83, 6, 'Dental Clinic', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'dental-clinic'),
(84, 6, 'Teeth Whitening Service', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'teeth-whitening-service'),
(85, 6, 'Dental Supply Store', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'dental-supply-store'),
(86, 6, 'Dentist', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'dentist'),
(87, 54, 'Air Conditioning Contractor', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'air-conditioning-contractor'),
(88, 54, 'HVAC Contractor', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'hvac-contractor'),
(89, 54, 'Construction Company', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'construction-company'),
(90, 57, 'Bankruptcy Attorney', '', 1, '', '', '', '', '', '2021-10-30 10:41:27', 'bankruptcy-attorney'),
(92, 0, 'Real Estate Agency', '', 1, '', '', '', '', '', '2021-11-01 04:50:27', 'real-estate-agency');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `listId` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `subCatId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `companySlug` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `buildingNo` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `state_code` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `otherNumber` varchar(20) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `userStatus` int(11) NOT NULL,
  `metaTitle` varchar(500) NOT NULL,
  `metaKeyword` varchar(500) NOT NULL,
  `metaDesc` varchar(500) NOT NULL,
  `btnTitle` varchar(500) NOT NULL,
  `btnColor` varchar(500) NOT NULL,
  `btnUrl` text NOT NULL,
  `btnPromo` varchar(500) NOT NULL,
  `btnBanner` varchar(500) NOT NULL,
  `btnStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`listId`, `catId`, `subCatId`, `userId`, `views`, `companyName`, `companySlug`, `logo`, `ip`, `buildingNo`, `address`, `description`, `country`, `state`, `state_code`, `city`, `zipcode`, `number`, `otherNumber`, `fax`, `email`, `website`, `date`, `status`, `verified`, `userStatus`, `metaTitle`, `metaKeyword`, `metaDesc`, `btnTitle`, `btnColor`, `btnUrl`, `btnPromo`, `btnBanner`, `btnStatus`) VALUES
(1, 68, 0, 1, 5, 'SmileDirectClub', '', '', '', '', 'United States', 'Hi, we?re SmileDirectClub, and we believe everyone deserves a smile they?ll love. That?s why we deliver SmileDirectClub aligners directly to your door for up to 60% less than the cost of traditional braces. Straightening your smile is easier and more affordable than ever. Get the smile you?ve always wanted ? and a lifetime of confidence ? with an average treatment plan of 4-6 months.', '', '', '', '', '', '800-848-7566', '', '', 'Support@SmileDirectClub.com', 'smiledirectclub.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(2, 68, 0, 1, 4, 'Pragamedica', '', '', '', '', 'Plzenska 155/113 Praha 5 Czech Republic', 'Trusted Experts in Medical Treatment Abroad', '', '', '', '', '', '800-011-9822', '', '', 'marketing@pragamedica.com', 'pragamedica.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(3, 83, 0, 1, 4, 'Dentalinsurance.com', '', '', '', '', '3030 South Bundy Drive, Los Angeles', 'We are one of the leading providers of dental insurance and discount plans. DentalInsurance.com was the first to enable individuals to both comparison-shop and apply for dental insurance and discount dental plans directly via the Internet.', '', '', '', '', '', '(310) 390-1000', '', '', 'spatrick@dentalinsurance.com', 'dentalinsurance.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(4, 84, 0, 1, 4, 'soWHITE', '', '', '', '', '106 Industrial Park Dr., Unit 180, Sevierville, United States', 'Our At-Home Teeth Whitening Kits are designed to meet the highest standards of quality, functionality and design with 100% safe to use formula.', '', '', '', '', '', '', '', '', 'support@sowhite.co', 'sowhite.co', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(5, 83, 0, 1, 4, 'Retainers Direct', '', '', '', '', 'Montgomery NE Blvd 11024, Albuquerque, United States', 'Buy retainers from Retainers Direct today! Run by board certified orthodontists, our selection of clear retainers and whitening products come backed by the industry\'s best money-back guarantee! Shop now!', '', '', '', '', '', '1-833-GR8-SMIL', '', '', 'smile@retainersdirect.com', 'retainersdirect.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(6, 85, 0, 1, 7, 'Quantum Labs, Inc', '', '', '', '', '452 Northco Dr. NE #180, Minneapolis, United States', 'The best selection and prices on dental hygiene supplies such as bulk toothbrushes, goodie bags, supply bags, personalized loyalty builders and exam gloves.', '', '', '', '', '', '800-328-8213', '', '', 'contact@quantumlabs.com', 'quantumlabs.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(7, 85, 0, 1, 8, 'Dental Planet', '', '', '', '', '707 N Scott Ave, Wichita Falls, United States', 'Dental Planet has been serving the Dental Industry since the early 1990?s. We were one of the very first internet-based dental suppliers and have grown to offer over 40,000 products to dental and medical professionals around the world! The Dental Planet team has built a reputation of quality and integrity in the Dental and Health Care Industries. We are proud of achieving our A+ rating with the Better Business Bureau, and a consistent 4.5 of 5 or better cumulative score from TrustPilot and all third party review sites. We continue to work hard to ensure our customers receive the best value and service available.', '', '', '', '', '', '866-815-7606', '', '', 'ccare@dentalplanet.com', 'dentalplanet.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(8, 85, 0, 1, 4, 'Net32', '', '', '', '', '250 Towne Village Drive, Cary, United States', 'On average you will save 30% to 40% off dental supplies by shopping online at Net32.com. We have made comparison shopping convenient so you won\'t waste time browsing catalogs in search of the same product.', '', '', '', '', '', '919-468-1177', '', '', 'support@net32.com', 'net32.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(9, 85, 0, 1, 4, 'Frontier Dental Supply', '', '', '', '', '535 Millway Avenue, Concord, Canada', 'Frontier Dental is a fast growing dental supply company headquartered in Toronto, Canada focused on providing dentists throughout North America with a bespoke shopping experience.', '', '', '', '', '', '844-734-3611', '', '', 'info@frontierdental.ca', 'frontierdental.ca', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(10, 86, 0, 1, 4, 'DentalPlans.com', '', '', '', '', 'United States', 'DentalPlans.com offers 30+ Discount Dental Plans, affordable dental insurance alternatives. Save on dental care at more than 100,000 participating dentists nationwide with Dental Savings Plans starting as low as $79.95 per year.', '', '', '', '', '', '888-632-5353', '', '', 'info@dentalplans.com', 'dentalplans.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(11, 84, 0, 1, 4, 'Dintle', '', '', '', '', 'United States', 'Straighter and brighter smiles all from home. Dintle is changing the future of oral hygiene for good.', '', '', '', '', '', '(619) 566-6978?', '', '', '', 'dintle.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(12, 86, 0, 1, 4, 'Affordable Dentures', '', '', '', '', '629 Davis Dr #300, Morrisville, United States', '', '', '', '', '', '', '1-844-990-1405', '', '', '', 'affordabledentures.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(13, 87, 0, 1, 4, 'Crystal Sigma', '', '', '', '', 'United Kingdom', 'Cambridge air conditioning Company, air conditioning in Cambridge. Crystal Sigma is air conditioning and Refrigeration Company in London for both domestic and commercial sectors.', '', '', '', '', '', '020 7183 0130', '', '', 'sales@crystalsigma.com', 'crystalsigma.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(14, 88, 0, 1, 4, 'Heating And Air', '', '', '', '', '2571 Olympic Drive, San Bruno, United States', 'Our Story Meet Heating And Air Conditioning repair and maintenance We pride ourself on being a one stop shop that is able to meet all of our client?s needs. Our goal is to provide the highest quality heating and air conditioning repair and installation services, on schedule, and on budget along with outstanding customer service. Heating And Air understand that time and cost are crucial so we strive to go above and beyond our client?s expectations. For Heating And Air customers peace of mind, we offer valuable money saving service and maintenance contracts. Please call Heating And Air for additional details About : AC Repairs HVAV Repairs Gas Furnace Repairs Heating And Cooling Repairs', '', '', '', '', '', '510-518-8965', '', '', 'Sameh@sanfranciscoheatingandairconditioning.com', 'sanfranciscoheatingandairconditioning.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(15, 88, 0, 1, 4, 'Good Guy HVAC', '', '', '', '', '101 East Jefferson, Phoenix, United States', 'Good Guys HVAC services are popular among Arizona homeowners for the quality and time-saving HVAC repair, maintenance, and inspection.', '', '', '', '', '', '602-763-8503', '', '', 'eugene@goodguyhvac.com', 'goodguyhvac.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(16, 88, 0, 1, 8, 'Multiple Electrical Engineering Services Ltd', '', '', '', '', 'New York, United States', 'MEES Is A Facilities Management Company With Expertise In Mechanical, Electrical Engineering And Air Conditioning. Our Aim Is To Provide A Suite Of Services According To Your Specific Needs, So That One Call To Us Provides Access To A Diverse Range Of Skills And Abilities To Solve Your Problems. Our Customers Enjoy A Nationwide Service And 24-Hour Availability With The Benefit Of Personal Service And A Single Point Of Contact. Who Are Our Customers? Our Clients Are Extremely Varied And Include Companies From The Oil And Recycling Industries, Offices, Schools, Commercial Properties, Various Sports Manufacturers Including The Largest Golfing Company In The World, Large Retail Organisations And The Leisure Sector.', '', '', '', '', '', '', '', '', '', 'mees.uk.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(17, 88, 0, 1, 4, 'M&G Mechanical', '', '', '', '', 'Kyle, United States', 'M&G Mechanical was founded by Epi Arrisola in 2015. With over 20 years of HVAC experience Mr. Arrisola decided the time could not be more right to pursue the creation of a residential and commercial oriented organization that strives for customer satisfaction over all else.', '', '', '', '', '', '512-940-6915', '', '', 'support@m&gmechanical.com', 'mandgmechanical.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(18, 87, 0, 1, 4, 'PRT COOL SERVICE INC', '', '', '', '', '8031 SW 37th Terr, Miami, FL 33155', 'PRT Cool Service, Inc. is an experienced, locally owned and operated company. We provide reliable, prompt and quality services to our customers, on every job, every time. We believe in doing the job right, the first time.', '', '', '', '', '', '866-224-9601', '', '', 'prtinc@bellsouth.net', 'prtcoolservice.net', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(19, 87, 0, 1, 4, 'Comfort Hounds Heating & Cooling', '', '', '', '', '1008 FIELDGRASS PLACE, Raleigh, United States', 'Comfort Hounds is the faithful companion you need when heating and cooling issues strike inside your home. For more than 24 years, our team of experienced and licensed HVAC techs has been rescuing homeowner comfort in the Greater Raleigh area. When you need exceptional heating and cooling care, expert technicians, and friendly upfront pricing, call in the Hounds. We are big believers in supporting our community, especially through animal rescue. See what shelters and charities are at the top of our list.', '', '', '', '', '', '919-578-7798', '', '', 'info@mycomforthounds.com', 'mycomforthounds.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(20, 88, 0, 1, 0, 'Silicon Valley Comfort', '', '', '', '', '5534 Judith St #4, San Jose, United States', 'When advising property owner\'s in regards to the heating or cooling equipment that will meet their specific comfort and efficiency needs... We start with Building Science!', '', '', '', '', '', '408-691-5940', '', '', 'new-school@air.systems', '', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(21, 88, 0, 1, 4, '212 HVAC', '', '', '', '', '300 Morgan Ave #P, Brooklyn, United States', 'The company specializes in installation & repair of central and mini split air conditioning systems. Fully licensed and insured. You are in good, trustworthy hands!', '', '', '', '', '', '917-633-5959', '', '', 'Info@212hvac.com', '212hvac.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(22, 89, 0, 1, 5, 'One Point Partitions', '', '', '', '', '1900 Church St., Ste 300, Nashville, United States', 'One Point Partitions is the leading toilet partition provider. Made in the USA! Contact us at 800.756.6817 or use our bathroom stall pricing tool now.', '', '', '', '', '', '800-756-6817', '', '', 'sales@onepointpartitions.com', 'onepointpartitions.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(23, 89, 0, 1, 4, 'Derek Gough Associates Ltd', '', '', '', '', 'Old Hay Barn, Knutsford, United Kindom', 'DGA is a professional practice specialising in the calculation and management of construction costs and contracts for businesses and individuals.', '', '', '', '', '', '01565 831999', '', '', 'info@dgough.co.uk', 'dgough.co.uk', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(24, 89, 0, 1, 4, 'MAH Inspections Ltd', '', '', '', '', 'Wheelwrights Cottage, Main Street, Gilmorton, United Kingdom', 'MAH Inspections Ltd offers high quality new build snagging inspections and Clerk of Works services using qualified and highly experienced inspectors with over 25 years of in depth knowledge of the complete build process from foundation to handover.', '', '', '', '', '', '7377894068', '', '', 'mahinspections@btinternet.com', 'mahinspections.co.uk', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(25, 89, 0, 1, 5, 'Timberplates', '', '', '', '', '1600 Hwy 84, Santa Anna, United States', 'Since 2010 TimberPlates.com has made it easy for architects, builders, and homeowners to build artful timber framed structures. Our precision-cut custom and stock steel plates add beauty and strength to any timber frame project. We are dedicated to providing fast, friendly customer service at prices our competition cannot touch. We are a small, family-owned business located in the heart of Central Texas. But don\'t let our small size fool you. We use the latest in CNC Plasma technology to achieve accurate, repeatable, clean cuts every time.', '', '', '', '', '', '(325) 400-1274', '', '', 'orders@timberplates.com', 'timberplates.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(26, 89, 0, 1, 4, 'Olshan Foundation Repair', '', '', '', '', 'United States', 'Over the years, we have worked on virtually every kind of foundation, for families with all different types of needs and we?ve learned a lot about both. We know that your home is your most valuable asset. Where you raise your family. Create memories. Cherish loved ones. So, when you have a structural problem and choose us to resolve it, we approach the task of repairing your home not just as a job, but as an important responsibility. Because at Olshan, we believe that every family deserves a strong foundation. Some companies measure their experience in years. We measure ours by generations. Through great people, pride in our work and plain ol? American know?how. Since 1933, our reputation for integrity, honesty, quality craftsmanship and setting the standards in home structural repair services has always been our legacy. It has also won us the endorsement of legendary, Hall of Fame Pitcher, Nolan Ryan.', '', '', '', '', '', '1-877-465-7426', '', '', 'olshan@olshanfoundation.com', 'olshanfoundation.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(27, 37, 0, 1, 4, 'TilesDirect', '', '', '', '', '23806 Companero Dr, Sorrento, United States', 'Browse our vast collections of tiles which contain many different designs from classical to modern in aesthetics such as porcelain, ceramic, glass, natural stone, cement & more! Our company creates relationships with the finest tile manufacturers in the world so that we can distribute these great materials to you.', '', '', '', '', '', '407-730-0025', '', '', 'support@tilesdirect.net', 'tilesdirect.net', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(28, 89, 0, 1, 5, 'Stair Supplies', '', '', '', '', '1722 Eisenhower Driver North, Goshen, United States', 'In 2001, a customer named Jen was building her dream home in southern Michigan and wanted a beautiful stairway. She could see what she wanted in her mind, but the stair parts she wanted were not available through normal outlets. She wanted unique iron balusters with custom box newels. Len thought he could meet her needs, and StairSupplies was born. Today, StairSupplies thrives on customizing stairways with iron balusters, the most extensive line of box newels available, a generous selection of handrails and the most beautiful turned newels that you can imagine. While you browse the Stair Supplies website, give your imagination freedom and allow our craftsmen to complete your dream. Our stair specialists focus on building, creating and designing. Our customers understand that they want their home to be a place of beauty and function, and they need help selecting the right mixture of wood species and design to achieve a beautiful stair creation.', '', '', '', '', '', '866-226-6536', '', '', 'sales@stairsupplies.com', 'stairsupplies.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(29, 89, 0, 1, 4, 'RubberFlooringInc', '', '', '', '', '2429 S 51st Ave #10, Phoenix, AZ 85043', 'At Rubber Flooring Inc, our mission is to provide consumers with quality rubber flooring at a competitive price through an easy to use and well designed website. Our rubber flooring is durable enough to withstand the most demanding environments including commercial gyms and large scale weight rooms, yet is easy enough to install and maintain to make a great option for in home exercise rooms.', '', '', '', '', '', '(800) 613-0996', '', '', '', 'rubberflooringinc.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(30, 89, 0, 1, 4, 'GotItWholesale', '', '', '', '', 'El Dorado Hills, United States', 'Backed by U.S. Support and Distribution. Allow Got It Wholesale to be your one-stop shop for quality, cast aluminum mailboxes, stunning street lights, decorative street signs, and beautifully distinctive yard lamps, as well as all of your energy-saving LED lighting needs. Our knowledgeable and dedicated team is here to help you create a cost-efficient residential or commercial package that perfectly suits your project, no matter the size.', '', '', '', '', '', '(866) 390-5227', '', '', 'customercare@gotitwholesale.com', 'gotitwholesale.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(31, 39, 0, 1, 4, 'US Legal Forms', '', '', '', '', '3720 Flowood Drive, Flowood, United States', 'US Legal Forms is the destination site for consumers, small businesses, attorneys, corporations, and anyone interested in the law, or in need of legal information, products or services.', '', '', '', '', '', '1-877-389-0141', '', '', 'care@uslegal.com', 'uslegalforms.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(32, 39, 0, 1, 4, 'Trademarkia', '', '', '', '', '1580 West El Camino Real, Mountain View, United States', 'Trademarkia? is a website and law firm for intellectual property legal services. We offer a free trademark search engine and access to trademark, copyright, and patent attorneys. Visit www.trademarkia.com for user-friendly online tools and an expert legal team at an affordable price.', '', '', '', '', '', '(877) 794-9511', '', '', 'customer.service@trademarkia.com', 'trademarkia.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(33, 39, 0, 1, 4, 'ContractsCounsel', '', '', '', '', 'United States', 'ContractCounsel offers a simple and affordable way to access experienced contract lawyers throughout the U.S. Our highly-curated network of legal experts are available to review, draft and complete any contract you require, without the expensive and time-consuming process of navigating a firm. We?ve made contracts simple and affordable.', '', '', '', '', '', '(650) 466-0665', '', '', 'hello@contractscounsel.com', 'contractscounsel.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(34, 39, 0, 1, 4, 'Reclaws International', '', '', '', '', '1734 Spring Mountain Rd, Las Vegas, United States', 'We can help you recover your funds lost in Binary option trading, Forex trading, Cruptocurrency or may be in any other online scam. lets discuss with our expert without any obligation. just fill the form online and our executive will get back to you.', '', '', '', '', '', '646-535-3899', '', '', 'support@reclawsint.com', 'reclawsint.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(35, 39, 0, 1, 4, 'Saiontz & Kirk, P.A.', '', '', '', '', '3 South Frederick St #900, Baltimore, United States', 'Personal injury law firm with experienced attorneys handling accidents, malpractice, product liability and other lawsuits for over 45 years. No fees unless you win.', '', '', '', '', '', '800-522-0102', '', '', '', 'youhavealawyer.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(36, 39, 0, 1, 4, 'The Rapacke Law Group', '', '', '', '', '1840 North Pine Island Road, Ft. Lauderdale, United States', 'The Rapacke Law Group is a fixed-fee, full service intellectual property law firm specializing in patents, trademarks, and IP litigation.', '', '', '', '', '', '954-951-0154', '', '', 'legal@arapackelaw.com', 'arapackelaw.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(37, 39, 0, 1, 4, 'Trademark Garden', '', '', '', '', '3104 E Camelback Rd #2373, Phoenix, United States', 'Are you looking to register a trademark? Trademark Garden offers the best trademark services for any size of business. We protect your name, logo, or slogan so all you need to worry about is growing your business. Contact us today to get started.', '', '', '', '', '', '650-395-8426', '', '', 'info@trademarkgarden.com', 'trademarkgarden.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(38, 39, 0, 1, 4, 'Empirelawgroup', '', '', '', '', '1212 S. Casino Center Blvd., Las Vegas, United States', 'If you are injured in an accident, call us now. Don\'t settle for less.', '', '', '', '', '', '702-512-7777', '', '', 'info@empirelawgroup.com', 'empirelawgroup.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(39, 90, 0, 1, 5, 'Van Horn Law Group, P.A', '', '', '', '', '330 N. Andrews Ave. Suite 450, Fort Lauderdale, United States', 'At Van Horn Law Group, we provide effective strategies that reduce your stress and help you get back on your feet as quickly as possible. With three convenient locations, our Student Loan Lawyers, Bankruptcy Attorney West Palm Beach, Bankruptcy Attorney Miami Lakes and Bankruptcy Attorney Fort Lauderdale are ready to help you with your legal issues. No matter how complex the issue, our Student Loan Lawyers and Fort Lauderdale Bankruptcy Attorneys apply their extensive legal knowledge and strategies to obtain the best possible outcome for you or your company. Schedule a free consultation today to talk to our attorney.', '', '', '', '', '', '954-765-3166', '', '', 'chad@cvhlawgroup.com', 'vanhornlawgroup.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(40, 92, 0, 1, 4, 'Clever Real Estate', '', '', '', '', '63130, Saint Louis, United States', 'We\'ve helped customers save more than $70 million by negotiating low fees with top agents nationwide! List with a full-service agent for just $3,000 or 1%. Eligible buyers can get 0.5% cash back.', '', '', '', '', '', '833-225-3837', '', '', 'team@movewithclever.com', 'listwithclever.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(41, 92, 0, 1, 4, 'Residential Advance', '', '', '', '', '100 S EDISON AVE, SUITE D, TAMPA, United States', '', '', '', '', '', '', '800-973-7292', '', '', 'info@residentialadvance.com', 'residentialadvance.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(42, 92, 0, 1, 4, 'SnapNHD', '', '', '', '', '7472 La Jolla Blvd., La Jolla, United States', 'THE FASTEST WAY TO ORDER NHD REPORTS. PERIOD. SnapNHD boasts the best technology in the Natural Hazard Disclosure industry and is passionate about protecting homeowners.', '', '', '', '', '', '(844) 762-7643', '', '', 'hello@snapnhd.com', 'snapnhd.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(43, 92, 0, 1, 4, 'Offerpad', '', '', '', '', 'E Germann Rd 2150, Chandler, United States', 'Offerpad is the new way to buy and sell a home. Built on decades of firsthand experience buying, selling, renting and renovating nearly 100,000 properties across the country, Offerpad reinvented the home sale process to provide homeowners with the convenience, control and certainty lacking in the traditional way to sell a home. Coupling powerful proprietary technology with local real estate market expertise, Offerpad sets itself apart with a personalized customer experience to make searching homes for sale and selling a home easy.', '', '', '', '', '', '844-388-4539', '', '', 'info@offerpad.com', 'offerpad.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(44, 92, 0, 1, 4, 'Ashton Reeves', '', '', '', '', 'Bexley High Street 67, Bexley, United Kingdom', 'Ashton Reeves Estate Agents are Estate and Letting Agents in Bexley, Bexleyheath, Dartford, Greenwich, Gravesend, Welling, Crayford, Erith.', '', '', '', '', '', '01322 559955', '', '', 'info@ashtonreeves.co.uk', 'ashtonreeves.co.uk', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(45, 92, 0, 1, 4, 'Orchard', '', '', '', '', '600 Congress Ave. 14th Floor, Austin, United States', 'Orchard makes home buying and selling simple and stress-free. With Orchard, you\'ll never miss out on a great home because you haven\'t sold your current one.', '', '', '', '', '', '(844) 819-1373', '', '', 'support@orchard.com', 'orchard.com', '2021-11-01 09:28:56', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(46, 19, 0, 1, 5, 'BoostedMMO', '', '', '', '', 'United States', 'BoostedMMO. The #1 Marketplace for all things regarding MMOs. Everything from Runescape (RS3 + OSRS), World of Warcraft, Escape from Tarkov, DOTA, Fortnite, CSGO. You name it. We got it. We have accumulated thousands of positive feedback and have handled millions of dollars. Every customer is family.', '', '', '', '', '', '', '', '', 'admin@boostedmmo.com', 'boostedmmo.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(47, 19, 0, 1, 5, 'eCigs-Direct', '', '', '', '', 'United Kingdom', 'eCigs-direct is the one stop superstore for great Vaping e-liquids and e-cigarettes. Top brands, Low prices & delivery, Vapouriz, Vivid, Pocket Fuel & more', '', '', '', '', '', '', '', '', '', 'ecigs-direct.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(48, 19, 0, 1, 5, 'Crystal Imagery Inc.', '', '', '', '', 'United States', 'Crystal Imagery is the premier producer of deep etched personalized whiskey, wine, scotch, bourbon, rocks , beer mugs, decanters, growlers, wedding and groomsmen gifts. Our deep engraved logo work is second to none in the industry.', '', '', '', '', '', '888-440-6073', '', '', 'sales@crystalimagery.com', 'crystalimagery.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(49, 19, 0, 1, 4, 'Old World Christmas', '', '', '', '', 'United States', 'At Old World Christmas we take pride in our hand-crafted glass blown Christmas tree ornaments. We make each glass ornament with care to ensure you get the very best. Whether you are looking for a gift or something for you, we have the perfect Christmas ornament or decoration for the occasion.', '', '', '', '', '', '800-965-7669', '', '', 'thesource@oldworldchristmas.com', 'oldworldchristmas.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(50, 19, 0, 1, 4, 'Walkboard', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'walkboard.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(51, 19, 0, 1, 4, 'RVT.com Classifieds', '', '', '', '', 'United States', 'RVT.com is North America?s leading RV Classifieds provider visited by millions of RV consumers who search over 130,000 new and used RVs for sale by owners and dealers. Built on a platform of Bringing RV Buyers and Sellers Together, RVT.com has assisted in the sale of tens of thousands of RVs since 2002, and currently showcases inventory for over a thousand RV dealerships.', '', '', '', '', '', '800-677-4484', '', '', 'tradersupport@rvt.com', 'rvt.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(52, 19, 0, 1, 4, 'GiftFly', '', '', '', '', 'United States', 'GiftFly is a custom eGift card platform for local businesses dedicated to connecting today?s digital customer with gift cards to local businesses. Our eGift card platform allows shoppers to buy and send gift cards via email, Facebook or text directly f?', '', '', '', '', '', '(800) 322-6201', '', '', 'info@giftfly.com', 'giftfly.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(53, 19, 0, 1, 11, 'Peli UK', '', '', '', '', 'United States', '', '', '', '', '', '', '1457869999', '', '', 'info@peliproducts.co.uk', 'peliproducts.co.uk', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(54, 19, 0, 1, 4, 'PoleActive', '', '', '', '', 'United States', 'Curating a collection of fierce outfit to celebrate empowered individuals. PoleActive exists for the ones who push themselves to be their best self, the go-getters, the #PoleActivists.', '', '', '', '', '', '', '', '', 'hello@poleactive.com', 'poleactive.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(55, 19, 0, 1, 4, 'Software Advice', '', '', '', '', 'United States', 'Software Advice is a trusted resource for software buyers. We provide detailed reviews and original research on thousands of software applications. Our team of software advisors provides free telephone consultations to help buyers build a shortlist of systems that will meet their needs.', '', '', '', '', '', '(800) 918-2764', '', '', 'info@softwareadvice.com', 'softwareadvice.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(56, 19, 0, 1, 4, 'Delilah Home', '', '', '', '', 'United States', 'We provide a natural, sustainable, and safer home textile option for your everyday use. Our 100% organic cotton and hemp products pay homage to our environment and enhance the lives of customers. We believe, what you put on your body is just as important as what you put in your body. Our Delilah Home textiles do not contain allergenic, or toxic chemicals and may also help reduce allergies and respiratory problems. Plus organic cotton has been known to feel better, last longer and have stronger fibers. Organically grown and processed cotton and hemp will not expose you to herbicides, fungicides or other chemical residues. Live cleaner with Delilah Home.', '', '', '', '', '', '704-287-1805', '', '', 'michael@delilahhome.com', 'delilahhome.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(57, 19, 0, 1, 4, 'Yoda Boost', '', '', '', '', 'United States', '??New customer-10% discount. ?Wow boosting US/EU shadowlands/classic. ??Leveling 1-60 ? Services is offered 24/7 ??High Quality Services', '', '', '', '', '', '79870871854', '', '', 'support@yodaboost.com', 'yodaboost.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(58, 19, 0, 1, 4, 'EverLighten', '', '', '', '', 'United States', 'EverLighten is a custom apparel and accessories manufacturing platform.', '', '', '', '', '', '(312) 212-3914', '', '', 'michael@everlighten.com', 'everlighten.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(59, 19, 0, 1, 5, 'Pristine Auction', '', '', '', '', '1095 E. Salter Drive\n85024\nPhoenix', '', '', '', '', '', '', '602-626-5218', '', '', 'help@pristineauction.com', 'pristineauction.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(60, 19, 0, 1, 4, 'Credible', '', '', '', '', 'United States', 'Credible is an online marketplace that provides borrowers with competitive, personalized loan offers from multiple, vetted lenders in real time. We\'ll help you save time and money by refinancing your student loans, request a private student loan as a student or co-signer, take control of your finances with a personal loan or refinance your mortgage.', '', '', '', '', '', '866-540-6005', '', '', 'support@credible.com', 'credible.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(61, 19, 0, 1, 4, 'Zebit', '', '', '', '', 'United States', 'Zebit is an online shopping destination that provides members with up to $2,500 of credit to shop thousands of name brand products. Enjoy the ability to buy now and pay over time with no hidden fees. Join Zebit today!', '', '', '', '', '', '855-449-3248', '', '', 'help@zebit.com', 'zebit.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(62, 19, 0, 1, 5, 'DAN.COM', '', '', '', '', 'United States', 'Buy and Sell Domains with DAN.COM. Discover millions of domain names available for sale. DAN keeps you safe.', '', '', '', '', '', '17372186046', '', '', 'support@dan.com', 'dan.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(63, 19, 0, 1, 5, 'CouponCabin.com', '', '', '', '', 'United States', 'CouponCabin.com is the home of more cash back and faster payments. With over 10 million members, CouponCabin (www.couponcabin.com) is a leading cash back and promo code website that offers up to 5x more cash back and faster payments by 62 days on average. We pay our members 365 days a year and specialize in up to 20% cash back at more than 3,500 stores. CouponCabin is proud to provide industry-leading cash back rates, coupons that are guaranteed to work and members-only savings, like $200 back on $200, that you can?t find anywhere else.', '', '', '', '', '', '', '', '', 'success@couponcabin.com', 'couponcabin.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(64, 19, 0, 1, 4, 'HireAHelper', '', '', '', '', 'United States', 'Compare local moving services by reviews and availability, then reserve your favorite move helper in a few clicks. Orders always include our service guarantee and Standard Repair Coverage.', '', '', '', '', '', '8009955003', '', '', 'support@hireahelper.com', 'hireahelper.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(65, 19, 0, 1, 12, 'ScriptSave WellRx', '', '', '', '', 'United States', 'ScriptSave? WellRx helps patients save on their out-of-pocket prescription costs. We negotiate discounted cash-prices for most Rx medications, then we publish these special rates on our website so people can make their own decision about whether or not we can help them. For more information, go to www.WellRx.com.', '', '', '', '', '', '800-407-8156', '', '', 'info@wellrx.com', 'wellrx.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(66, 19, 0, 1, 5, 'Roidsseek', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'roidsseek.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(67, 19, 0, 1, 4, 'Greenpoint Seeds', '', '', '', '', 'United States', 'Buy Feminized, Autoflower & Regular Cannabis Seeds - US Seed Bank - Marijuana Seeds - Buy Cannabis Seeds, Strains & Genetics at the Greenpoint Seeds Bank', '', '', '', '', '', '', '', '', 'info@greenpointseeds.com', 'greenpointseeds.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(68, 19, 0, 1, 4, 'Insta Sale', '', '', '', '', 'United States', 'Marketplace for Instagram accounts trading. Free and safety platform for making the deals in a few steps. Secure transfers and complete anonymity.', '', '', '', '', '', '', '', '', '', 'insta-sale.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(69, 19, 0, 1, 16, 'John Shooter', '', '', '', '', 'United States', 'John Shooter Leather Shotgun Slips, Cartridge Bags & Accessories', '', '', '', '', '', '', '', '', '', 'johnshooter.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(70, 19, 0, 1, 5, 'Testerjob', '', '', '', '', 'United States', 'Produkttester werden. Produkttester gesucht ? Produkte testen und gutes Geld verdienen ist ganz einfach. Jetzt online registrieren und morgen schon loslegen.', '', '', '', '', '', '', '', '', 'support@testerjob.net', 'testerjob.net', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(71, 19, 0, 1, 4, 'Windy City Novelties', '', '', '', '', 'United States', 'We are a one stop shop party/novelty company that is Family owned and operate for over 35 years. No party is too small or too big for Windy City Novelties.', '', '', '', '', '', '1-800-442-9722', '', '', 'sales@wcnovelties.com', 'windycitynovelties.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(72, 19, 0, 1, 4, 'ZenMarket.jp', '', '', '', '', 'United States', 'ZenMarket?is your best ally to order from Japanese shops and auction sites. You can shop?Yahoo Auctions, Amazon, Rakuten, and countless more.?Get all your anime, electronics, or designer goods direct from Japan in the fastest, easiest and most affordable way.', '', '', '', '', '', '06-4560-4070', '', '', 'contact@zenmarket.jp', 'zenmarket.jp', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(73, 19, 0, 1, 12, 'Rev.com', '', '', '', '', 'United States', 'Rev combines human and artificial intelligence to deliver the largest and most popular voice-to-text service in the world. Recognized as the most accurate and fastest service of its kind, Rev helps anyone unlock the power of voice to be more productive at a game-changing cost. With the most voice-to-text experts at the ready ? and with AI providing a first draft of a transcript ? Rev turns around transcriptions faster than any other service. Rev\'s voice-to-text offerings include automated and human transcription, captions, subtitles, and translations, all offered at a game-changing price as low as $0.10/minute. Rev has earned the trust of 170,000+ customers and 50,000+ freelancers.', '', '', '', '', '', '888-369-0701', '', '', 'support@rev.com', 'rev.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(74, 19, 0, 1, 5, 'Sneak Foot LTD', '', '', '', '', 'Northern Ireland\nIreland', 'Online shop specializing in authentic street wear, sneakers, handbags, and accessories. Every item sold on Sneak Foot Co is backed up by an authenticity guarantee and offers free 30 day returns on all orders, something most marketplaces in the same niche do not often allow. Sneak Foot LTD is a company located in Ireland, and currently employs 35 staff members. Including 13 authentication experts, 5 social media admins and representatives, 6 logistic coordinators, and 11 customer service agents. (As of 7/18/2020) - This information is pulled from independent sources and may not be 100% accurate. Sneak Foot Co has 4 operational facilities and 1 corporate location.', '', '', '', '', '', '8044998812', '', '', 'support@sneakfoot.com', 'sneakfoot.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(75, 19, 0, 1, 4, 'Fruugo USA - Online Marketplace (US)', '', '', '', '', 'United Kingdom', 'Discover the world?s products with Fruugo USA (fruugo.us) - the only global marketplace. Fruugo sells millions of products from thousands of top brands for hundreds of retailers around the world, in your local language and currency, rapidly dispatched right to your door.', '', '', '', '', '', '', '', '', '', 'fruugo.us', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(76, 19, 0, 1, 5, 'IB Mirror', '', '', '', '', 'France', 'We, being a top-notch mirror supplier, promise you to offer modern lighted bathroom mirror of supreme quality. Buy Defogger mirror at affordable prices.', '', '', '', '', '', '', '', '', '', 'ibmirror.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(77, 19, 0, 1, 5, 'Deal Genius', '', '', '', '', 'United States', 'Deal Genius features smart buys to make your life easier and more fun. From brand-name favorites at internet-low prices to never-before-seen inventions, there\'s always something new in store. Free ground shipping and stellar service makes shopping with Deal Genius truly shopping bliss. Orders ship within 1 business day from Chicago, IL. Always feel free to contact our knowledgeable and friendly customer support team, who prove that not all geniuses are socially awkward.', '', '', '', '', '', '(708) 831-4473', '', '', 'support@dealgenius.com', 'dealgenius.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(78, 19, 0, 1, 10, 'OldCarOnline.com', '', '', '', '', 'United States', 'Old Car Online, your number one resource for classic cars for sale. There are thousands of vintage autos listed in our classifieds, from exotic and foreign to muscle and racing. Use our search engine to narrow down your preferences and see if the exact ride you\'re looking for is available. We?ve got models that appeal to every type of auto enthusiast, and we update our database of classic cars for sale daily! Looking to sell rather than buy? No problem! Post an ad and list your classic car for sale, with a wide variety of options. Choose to run your listing for 2 weeks, 6 weeks, 12 weeks or simply until it?s sold! We also offer sellers extra features such as bold text in search results, adding your car to the featured listings, and posting unlimited photos. With over 15,000 views daily and incredibly reasonable prices, our free classifieds are a must for everyone with a classic car for sale. Old Car Online was built for enthusiasts like you to browse, buy and sell. Take a look around at our current collection of classic cars for sale or sell a car yourself!', '', '', '', '', '', '800-677-4484', '', '', 'ocsupport@oldcaronline.com', 'oldcaronline.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(79, 19, 0, 1, 5, 'YunoJuno', '', '', '', '', 'United States', 'The YunoJuno platform pairs the best creative professionals with the best freelance jobs in London and the North West. What started out as a curated marketplace for the creative industries has grown into the leading platform for London\'s elite freelance creative network. Our platform supports the entire engagement lifecycle, from finding the perfect freelancer for your brief, through transparent and direct communication (no intermediary), to contract and time management, billing, and analytics.', '', '', '', '', '', '', '', '', 'hello@yunojuno.com', 'yunojuno.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(80, 19, 0, 1, 5, 'Snuggables', '', '', '', '', 'United States', 'Snuggables offers microwavable heat therapy products & natural sleep aids including stuffed animals w/inner heat packs & hot/cold pack heating pads in various sizes infused w/aromatherapy. Warm Buddy makes all our quality products that help kids & adu?', '', '', '', '', '', '928-275-1468', '', '', 'support@snuggables.net', 'snuggables.net', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(81, 19, 0, 1, 4, 'Enduraxphoto', '', '', '', '', 'United States', 'Endurax full-feature camera backpacks are intuitively designed for professional photographers to go for outdoor photography, travelling, vlogging, hiking, etc. Find your backpacks here, take your camera safely, securely, and stylishly!\nContact', '', '', '', '', '', '', '', '', 'market@enduraxphoto.com', 'enduraxphoto.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(82, 19, 0, 1, 4, 'Purse', '', '', '', '', 'United States', 'Save up to 15% on the World\'s Largest Marketplace for Bitcoin. Secure your funds, and shop Amazon.com.', '', '', '', '', '', '', '', '', '', 'purse.io', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(83, 19, 0, 1, 4, 'Space Foundry', '', '', '', '', 'United States', 'The Next Generation Grey Market for all of your Star Citizen needs. Buy and Sell your Star Citizen ships safely and securely! Shop new ships, upgrades, game packages, ground vehicles, ccu\'s and more!', '', '', '', '', '', '', '', '', 'support@space-foundry.com', 'space-foundry.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(84, 19, 0, 1, 4, 'Car Performance Chip Reviews', '', '', '', '', 'United States', 'The Most trusted measurement of legitimacy for Performance Chips & Parts. The definitive site for Reviews, Non-biased feedback on tuning products.', '', '', '', '', '', '16198782832', '', '', 'info@carperformancechipreviews.com', 'carperformancechipreviews.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(85, 19, 0, 1, 4, 'Personalizedfree.com Personalized Christmas Ornaments', '', '', '', '', 'United States', 'Shop 2000+ Personalized Christmas Ornaments carefully personalized with perfect handwriting. Wedding, Family, Baby\'s 1st, Sports, and more. Free Shipping $60+', '', '', '', '', '', '', '', '', '', 'personalizedfree.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(86, 19, 0, 1, 4, 'Coupons Plus Deals', '', '', '', '', 'United States', 'Here come the coupons, coupon codes, discounts and discount codes of wide-ranging brands, the smartest way to save off. Find all in this coupon offering site.', '', '', '', '', '', '', '', '', 'contacts@couponsplusdeals.com', 'couponsplusdeals.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(87, 19, 0, 1, 4, 'DealDash', '', '', '', '', 'United States', 'DealDash prides itself on being the longest running and most trusted provider in its category. DealDash is committed to provide the best service experience to our customers. Being in touch with customers and listening to their concerns is extremely valuable to us. If it wasn?t for the feedback we have received from our customers throughout all these years, we wouldn?t be the company we are now. Ideas such as free shipping and no jumper auctions actually came from our customers.', '', '', '', '', '', '855-455-3325', '', '', 'support@dealdash.com', 'dealdash.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(88, 19, 0, 1, 7, 'eHealth Insurance', '', '', '', '', 'United States', 'Founded in 1997, eHealth is the nation?s leading private health insurance marketplace. Millions of individuals, families and small businesses use our top-rated tools to compare and purchase health insurance from leading insurers like Aetna, Humana, Kaiser Permanente and Wellpoint. In addition to health, dental and vision insurance products, eHealth also provides powerful online and pharmacy-based tools to help Medicare beneficiaries navigate Medicare health insurance options, choose the right plan and enroll in select plans online. Headquartered in Santa Clara, eHealth has offices in San Francisco, Gold River, Austin, Salt Lake City and Xiamen, China, as well as remote employees across the globe.', '', '', '', '', '', '', '', '', '', 'ehealthinsurance.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(89, 19, 0, 1, 4, 'Snugzy', '', '', '', '', 'United States', 'Create your very own Cuddle Buddy with Snugzy. Turn yourself, friend or family, into a Mini Me they can adore', '', '', '', '', '', '', '', '', 'hello@snugzy.com', 'snugzy.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(90, 19, 0, 1, 4, 'LiveAuctioneers', '', '', '', '', 'United States', 'With fascinating objects up for bid in more than 50 countries?instantly translated to your language and currency?LiveAuctioneers is a worldwide marketplace with treasures waiting to be discovered, whether you\'re an avid collector or first-time visitor. By hosting thousands of auctions in real time via the Internet, the site allows unprecedented access to remote sales, and savvy bidders can often land desired items at very desirable prices. Leave an absentee bid, or fully engage in the live-auction action?it\'s up to you. All bidding takes place via a secure bidder network, which keeps your maximum bids for upcoming sales private until the item is opened on the day of the sale. LiveAuctioneers revolutionized the industry from the start. In 2002, the NYC-based company formed a marketing partnership with eBay to introduce eBay Live Auctions. This alliance of LiveAuctioneers and eBay enabled auction houses worldwide to go online with their live sales?a development that changed the auction business forever. In 2009, the debut of LiveAuctioneers\' iPhone and Android apps, with live-bidding capabilities, opened up a new mobile pipeline to bid anytime, from anywhere, with complete anonymity. Since then, LiveAuctioneers has been the first to engage bidders with live streaming video, easy online payments, personalized search alerts, and more. Now in its second decade, LiveAuctioneers is the Web\'s leading auction-related site, with millions of qualified bidders. LiveAuctioneers also provides a constant stream of industry intelligence to auctioneers, collectors, museums, appraisers, consignors and more via: +The easy-to-use Auction Results Database, a vast database with more than 21 million results that offers keyword-search access to verified auction outcomes, recent to historical. The updated archive is the #1 free online resource for the trade, appraisers, collectors, designers, art institutions, estate officers, journalists, students and others on the research trail; +Auction Central News, the global destination for the latest auction headlines, mixing timely industry news with feature articles by experts on all things design; +The LiveAuctioneers Consignment Hub, an easy way for interested consignors to share their property for review and evaluation with thousands of auction houses in one spot. There are many ways to get started as a collector. You can browse curated auctions, find auctions near you, set up keyword search alerts, search, bid and win.', '', '', '', '', '', '', '', '', 'info@liveauctioneers.com', 'liveauctioneers.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(91, 19, 0, 1, 11, 'GoPeachy.com', '', '', '', '', 'United States', '', '', '', '', '', '', '8884097773', '', '', 'customerservice@gopeachy.com', 'gopeachy.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0);
INSERT INTO `listing` (`listId`, `catId`, `subCatId`, `userId`, `views`, `companyName`, `companySlug`, `logo`, `ip`, `buildingNo`, `address`, `description`, `country`, `state`, `state_code`, `city`, `zipcode`, `number`, `otherNumber`, `fax`, `email`, `website`, `date`, `status`, `verified`, `userStatus`, `metaTitle`, `metaKeyword`, `metaDesc`, `btnTitle`, `btnColor`, `btnUrl`, `btnPromo`, `btnBanner`, `btnStatus`) VALUES
(92, 19, 0, 1, 4, 'Renewgoo', '', '', '', '', 'United States', 'Up To 70% Off Brand Name Products You Love. Renewgoo Partners With Top Retailers To Offer High-Quality Returned & Overstocked Products. Experience A Smarter Way To Shop!', '', '', '', '', '', '1.877.645.1400', '', '', 'info@renewgoo.com', 'renewgoo.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(93, 19, 0, 1, 5, 'Soundproof Cow', '', '', '', '', 'United States', 'You can shop at SoundproofCow.com with complete confidence and trust that you will receive only the highest quality products with the highest quality customer service that you deserve. We know that without you, our amazing customers, we would not be the only stop for all your soundproofing needs. In order to meet such high standards, at the Cow headquarters we abide by these core values: 1.Education: We know we?re the sole source for our customers? soundproofing questions. We couldn?t provide such customized and specific service without being experts in our field. In order to give you the best experience and most relevant information possible, we stay educated. When our sales reps aren?t on the phone with you, they?re catching up on all the latest soundproofing news. 2.Communication: ?What was that?? That?s right - as much as we like dampening noise; we also agree that you can?t do business without loud and clear communication', '', '', '', '', '', '1-866-949-9269', '', '', 'sales@soundproofcow.com', 'soundproofcow.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(94, 19, 0, 1, 4, 'PriceWaiter', '', '', '', '', 'United States', 'PriceWaiter saves you money by negotiating better deals for you on products you love. Simply make an offer and we do the rest!', '', '', '', '', '', '', '', '', '', 'pricewaiter.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(95, 19, 0, 1, 5, 'West kiss Hair', '', '', '', '', 'xuchang\nChina', 'Welcome to West Kiss Hair, your ultimate wig store! We specialise in premium quality human hair lace wigs with over 400 styles available! 100% Satisfaction Guaranteed! Buy cheap Fashion Wigs in various colors,hairstyles and lenghts online at WestKiss today!', '', '', '', '', '', '8.62E+12', '', '', 'service@westkiss.com', 'westkiss.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(96, 19, 0, 1, 5, 'Citywideshop', '', '', '', '', 'United States', 'Citywide Shop offers deals and saving on popular and generic household brands.', '', '', '', '', '', '', '', '', 'support@citywideshop.com', 'citywideshop.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(97, 19, 0, 1, 4, 'Smart Settles', '', '', '', '', 'United States', 'Apartments and Utilities in one single platform!', '', '', '', '', '', '15127857978', '', '', 'help@smartsettles.com', 'smartsettles.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(98, 19, 0, 1, 5, 'TooTimid', '', '', '', '', 'United States', 'TooTimid.com is an online marketplace known for privately and discreetly shipping a large variety of adult sex toys and lingerie, Their mission is to enhance the sexual well-being of women, men, and couples! Founded in 2000, TooTimid makes a positive impact on women and couples around the World through education, advice, discussion, and various sexual aides. TooTimid has been trusted for more than 18 years and are recognized for their discreet billing, packaging, and secure checkout. They have evolved into an industry-leading company catering to those who wish to improve their intimate relationships. The Romance Company is stocked with vibes, dildos, sex toys, and several other sexual products that will enhance your sex life!', '', '', '', '', '', '888) 660-8970', '', '', 'helpdesk@tootimid.com', 'tootimid.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(99, 19, 0, 1, 4, 'VetFriends', '', '', '', '', 'United States', 'A proud, veteran-owned business helping reconnect over 2,000,000 military members on our site. Search and locate among Army, Navy, Air Force, Marines, Coast Guard & National Guard. See photos, jokes, cadences or find a reunion or parade near you. We also house over 10,000 amazing military products for purchase in our online catalog. Members receive free gifts, catalog discounts and free shipping. VetFriends has been in business since 2000.', '', '', '', '', '', '800-975-1618', '', '', 'keesha@vetfriends.com', 'vetfriends.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(100, 19, 0, 1, 4, 'SingleCare', '', '', '', '', 'United States', 'SingleCare provides free discounts on thousands of prescriptions, with no hidden fees or obligations. To get your free coupon card and start saving on your family?s prescriptions, visit SingleCare.com or download the SingleCare app today.', '', '', '', '', '', '844-234-3057', '', '', 'support@singlecare.com', 'singlecare.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(101, 19, 0, 1, 4, 'Grabr', '', '', '', '', 'United States', 'Connecting the world through travel. Shop hard-to-reach items and a traveler headed your way will deliver it. #MyGrabrStory | Support: https://t.co/O3Fu6wdIFl', '', '', '', '', '', '', '', '', '', 'grabr.io', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(102, 19, 0, 1, 10, 'MorningSave', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'morningsave.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(103, 19, 0, 1, 4, 'KOODING', '', '', '', '', 'United States', 'Our goal at KOODING is to create a community of fashion, beauty, & lifestyle lovers that thrive on discovering new brands & trends from around the globe.', '', '', '', '', '', '', '', '', 'CustomerService@KOODING.com', 'kooding.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(104, 19, 0, 1, 4, 'GoGetFunding', '', '', '', '', 'United States', 'GoGetFunding is a personal crowdfunding site where you can raise money for anything that matters to you. From personal causes and events to projects and more. We?ve helped people from all over the world raise millions online.', '', '', '', '', '', '', '', '', 'info@gogetfunding.com', 'gogetfunding.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(105, 19, 0, 1, 4, 'ExperienceCBD.com', '', '', '', '', 'United States', 'Information written by the company', '', '', '', '', '', '843-213-1319', '', '', 'contact@experiencecd.com', 'experiencecbd.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(106, 19, 0, 1, 5, 'Invaluable', '', '', '', '', 'United States', 'Invaluable is the world?s leading online marketplace for fine art, antiques and collectibles. We partner with over 5,000 of the world?s premier auction houses to make it easy for collectors from around the world to discover and acquire the items they are most passionate about all in one place. With thousands of items added daily, Invaluable makes the auction world accessible to anyone, anytime, anywhere.', '', '', '', '', '', '', '', '', 'customercare@invaluable.com', 'invaluable.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(107, 19, 0, 1, 4, 'StackCommerce', '', '', '', '', 'United States', 'Our mission is to enable people to organically discover products and brands they love on the publications and media they engage with every day. Our native commerce solutions build new, incremental revenue streams for publishers, and empower our brand partners to reach relevant audiences.', '', '', '', '', '', '(415) 335-6768', '', '', 'https://support.stackcommerce.com', 'stackcommerce.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(108, 19, 0, 1, 4, 'myAutoloan.com', '', '', '', '', 'United States', 'Apply online 24/7 in the convenience of your home or office - Lowest interest rates available ? \"*average customer saves $1900 in interest charges\" - Premium Auto Buying Service available can save you thousands more on the price of a new car - Get approved and have a \"check-in-hand\" before going to a dealer - Refinance and lower your current interest rate and payments or even skip a payment - Offering Private Party and Lease Buyout loans Fast & Free - No fees or obligations - Private, secure and confidential *average customer savings are based on a random sample of application, funded loan data and various assumptions.', '', '', '', '', '', '214-540-3350', '', '', 'customer.service@myautoloan.com', 'myautoloan.com', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(109, 19, 0, 1, 4, 'eBid', '', '', '', '', 'United States', 'Buy and Sell domestic and Internationally in over 100 countries through the eBid Marketplace - buyers and sellers from individuals to larger companies. With over 4 millions listings, millions of users and 14,000 categories eBid offers a worldwide platform for buying and selling in any country and 9 languages. Always list your items for free and pay between 0% and 5% when your items sells.', '', '', '', '', '', '', '', '', '', 'ebid.net', '2021-11-01 09:29:35', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(110, 19, 0, 1, 5, 'Desiclik', '', '', '', '', 'United States', 'Anabolic Steroids For sale, Weight Loss, Gaining Muscle and Strength! Bodybuilding supplements and all kind of Fitness cycle Gear online in USA.', '', '', '', '', '', '', '', '', '', 'desiclik.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(111, 19, 0, 1, 5, 'UntilGone.com', '', '', '', '', 'United States', 'Information provided by various external sources', '', '', '', '', '', '425-224-3065', '', '', 'support@untilgone.com', 'untilgone.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(112, 19, 0, 1, 4, '3DPrintersBay', '', '', '', '', 'United States', 'Buy Best 3D Printers from the Original Authentic 3D Printer Manufacturers at the Best Prices. #1 3D Printers Marketplace.', '', '', '', '', '', '', '', '', '', '3dprintersbay.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(113, 19, 0, 1, 4, 'nodpod', '', '', '', '', 'United States', 'Instantly Relaxes Body and Mind While Promoting Deep, Restful Sleep', '', '', '', '', '', '', '', '', '', 'nodpod.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(114, 19, 0, 1, 111, 'Mercari U.S.', '', '', '', '', 'United States', 'Information provided by various external sources', '', '', '', '', '', '', '', '', '', 'mercari.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(115, 19, 0, 1, 4, 'Thumbtack', '', '', '', '', 'United States', 'Pro?s come to Thumbtack to connect with potential customers and grow their business. Customers see search results in real-time with profiles, prices, ratings and more. They can then filter the results to find the pros who are a good match for their specific job.', '', '', '', '', '', '', '', '', '', 'thumbtack.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(116, 19, 0, 1, 4, 'Heartland America', '', '', '', '', 'United States', 'Heartland America is a world-class catalog and internet company providing quality products at value prices. Our mission is to delight our customers through product, price and service.', '', '', '', '', '', '(800) 229-2901', '', '', 'info@heartlandamerica.com', 'heartlandamerica.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(117, 19, 0, 1, 5, 'cokodive', '', '', '', '', 'United States', 'COKODIVE is all About K-Pop Albums & Goods and we deliver them to you with FREE WORLDWIDE SHIPPING :)', '', '', '', '', '', '', '', '', '', 'cokodive.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(118, 19, 0, 1, 16, 'Gundry MD', '', '', '', '', 'United States', 'Gundry MD was founded with one mission: To dramatically improve human health, happiness, and longevity through my unique vision of diet and nutrition. Dr. Gundry believes he has discovered some unconventional truths about human nutrition. The Gundry MD philosophy is a radical departure from the traditional dietary ?wisdom? which has failed so many Americans over the past few decades. His research may offer a breakthrough for those of you who have struggled for years with your energy levels, your body, and your health.', '', '', '', '', '', '(800) 852-0477', '', '', 'support@gundrymd.com', 'gundrymd.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(119, 19, 0, 1, 4, 'Pamono', '', '', '', '', 'United States', 'Welcome to Pamono, a one-of-a-kind marketplace and magazine specializing in distinctive design objects and the stories behind them. Driven by the belief that a life well lived means surrounding yourself with beauty and soul, we source vintage and contemporary furniture, lighting, accessories, and crafts from around the globe and seamlessly deliver them right to your door. Our original stories, collections, and guides ensure you know who?s who and what?s what in design culture past and present. Come back often; new designs and stories are added every day, so there?s always something new to discover.', '', '', '', '', '', '30809520555', '', '', 'Marketing@pamono.com', 'pamono.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(120, 19, 0, 1, 4, 'Daily Steals', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@dailysteals.com', 'dailysteals.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(121, 19, 0, 1, 4, 'Redeeem', '', '', '', '', 'United States', 'Redeeem is a fast, safe and easy way to buy and sell gift cards using Bitcoin and other cryptocurrencies.', '', '', '', '', '', '', '', '', 'support@redeeem.com', 'redeeem.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(122, 19, 0, 1, 5, 'The Gamers Mall', '', '', '', '', 'United States', '', '', '', '', '', '', '13158245369', '', '', 'admin@thegamersmall.com', 'thegamersmall.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(123, 19, 0, 1, 6, 'Firebox', '', '', '', '', 'United States', 'Information provided by various external sources\n\nHomeware and lifestyle shop for people with imagination', '', '', '', '', '', '', '', '', 'info@firebox.com', 'firebox.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(124, 19, 0, 1, 6, 'eGifter', '', '', '', '', 'United States', 'eGifter is the #1 place to buy Gift Cards online. Email, text or print a Gift Card, group gift and earn points on most brands', '', '', '', '', '', '516-882-1200', '', '', '', 'egifter.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(125, 19, 0, 1, 4, 'Auction Nation', '', '', '', '', 'United States', 'Online bidding made simple! Check out our daily online auctions on our website. Register to bid for free and start bidding now! Home Goods | Outdoor | Tools | Business | Industrial | Auto', '', '', '', '', '', '6025167066', '', '', 'customerservice@auctionnation.com', 'auctionnation.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(126, 19, 0, 1, 5, 'Rebatest', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'rebatest.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(127, 19, 0, 1, 5, 'CardBazaar', '', '', '', '', 'United States', 'Buy discounted gift cards at CardBazaar. Greater discounts, super easy to use, most popular brands. Spend gift cards faster, earn greater discounts.', '', '', '', '', '', '', '', '', 'support@cardbazaar.io', 'cardbazaar.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(128, 19, 0, 1, 5, 'Gift Card Granny', '', '', '', '', 'United States', 'As the leader in the discount gift card industry, Gift Card Granny allows you to find and compare the best gift card deals from the most trusted sellers. With Granny you\'ll never have to wonder whether there was a better deal. Originally founded in 2009, Gift Card Granny has grown to over 16 million visitors a year and over 400,000 discount gift cards.', '', '', '', '', '', '866-353-4237', '', '', 'info@giftcardgranny.com', 'giftcardgranny.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(129, 19, 0, 1, 4, 'Bump Boxes', '', '', '', '', 'United States', 'Protect your baby with each box delivered to your door! You can feel confident that your new box each month is helping you celebrate pregnancy and protect your bump!', '', '', '', '', '', '888-913-7879', '', '', 'info@bumpboxes.com', 'bumpboxes.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(130, 19, 0, 1, 4, 'Jairubni.com', '', '', '', '', 'United States', 'Welcome to jairubni.com, your one-stop destination for innovative home products, ie: Clothing, Home Furniture, Lawn & garden equipment, Tools, Bags & luggage. We\'re dedicated to giving you the very best innovative products, with a focus on the three characteristics, ie: useful, cost-effective and durable.', '', '', '', '', '', '6302008984', '', '', 'corporate@jairubni.com', 'jairubni.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(131, 19, 0, 1, 5, 'Wish', '', '', '', '', 'United States', 'Wish is a leading e-commerce app that brings affordable products to shoppers around the globe.', '', '', '', '', '', '', '', '', '', 'wish.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(132, 19, 0, 1, 7, 'GlassesShop', '', '', '', '', 'United States', 'Affordable Prescription Glasses & Sunglasses Online Store. Easy to Buy! 1000+ styles frames start at $6.95, include free lenses & coating. 100% money back guarantee. GlassesShop has sent out hundreds of thousands of glasses to the clients all over the world since 2004.', '', '', '', '', '', '1-855-202-0123', '', '', 'service@GlassesShop.com', 'glassesshop.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(133, 19, 0, 1, 4, 'RealSelf', '', '', '', '', 'United States', 'RealSelf - consumer reviews, stories, and discussions about cosmetic treatments and procedures for face, body, skin and smile. Find a doctor you can trust.', '', '', '', '', '', '', '', '', 'contactus@realself.com', 'realself.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(134, 19, 0, 1, 4, 'Haverdash', '', '', '', '', 'United States', 'Haverdash is a clothing subscription service that gives women unlimited access to rent the latest styles at https://t.co/2CwXvn4vWJ.', '', '', '', '', '', '1-866-445-1623', '', '', 'support@haverdash.com', 'haverdash.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(135, 19, 0, 1, 5, 'OpenSky', '', '', '', '', 'United States', 'When over 70,000 independent merchants come together, you get to shop the most eclectic and eye-popping variety of quality goods in the world. We play matchmaker, connecting the merchants selling that perfect something to shoppers looking for something perfect.', '', '', '', '', '', '', '', '', 'https://www.opensky.com/content/contact-us', 'opensky.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(136, 19, 0, 1, 5, 'Bridelily.com', '', '', '', '', 'United States', 'Welcome to Bridelily: your source for tailored-to-you wedding d?cor and more. Our discriminating team has hand-curated a collection of awesome wedding gifts, favors, decorations, bridal accessories and stationery to help you tie together a theme and st?', '', '', '', '', '', '', '', '', 'service@bridelily.com', 'bridelily.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(137, 19, 0, 1, 5, 'BeeMission.com', '', '', '', '', 'United States', '?? Bee Mission sells jewelry and apparel with designs centered around bees. Bee Mission engages in outreach, education and support for bees, with an aim to educate the general public on the challenges global bee populations face, and help the average person make positive changes to their homes that are more bee friendly. We fund our outreach and educational efforts through our online store. No purchase necessary! Please follow us on Facebook and join our email list for great content on bees and how you can positively affect their lives. ?? You will fall in love with these marvelous little creatures, be taken aback to learn how incredibly intelligent they are, and may even be surprised to learn just how important they are to our survival! We ship our products from the USA. Many of our jewelry items are manufactured with high quality materials, such as genuine silver and genuine 18k gold, many of which are handmade by professional metalsmiths.', '', '', '', '', '', '', '', '', 'https://helpdesk.beemission.com', 'beemission.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(138, 19, 0, 1, 7, 'Blain\'s Farm & Fleet', '', '', '', '', 'United States', 'Blain\'s Farm & Fleet stores are specialty discount retailers with over 40 locations throughout Illinois, Iowa, Michigan, and Wisconsin. Family owned and serving America\'s hardest-working people since 1955. Shop in store or online at farmandfleet.com for real, genuine value.', '', '', '', '', '', '1-800-210-2370', '', '', 'customerservice@farmandfleet.com', 'farmandfleet.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(139, 19, 0, 1, 4, 'Groupon', '', '', '', '', 'United States', 'Groupon (NASDAQ: GRPN) is building the daily habit in local commerce, offering a vast mobile and online marketplace where people discover and save on amazing things to do, see, eat and buy. By enabling real-time commerce across local businesses, travel destinations, consumer products and live events, shoppers can find the best a city has to offer. Groupon is redefining how small businesses attract and retain customers by providing them with customizable and scalable marketing tools and services to profitably grow their businesses.', '', '', '', '', '', '', '', '', '', 'groupon.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(140, 19, 0, 1, 4, 'Casabilanka.com - shop made easy', '', '', '', '', 'United States', 'We aim to offer our customers a variety of the latest products of today. We?ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget friendly products. We offer all of this while providing excellent customer service and friendly support.', '', '', '', '', '', '', '', '', 'info@casabilanka.com', 'casabilanka.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(141, 19, 0, 1, 5, 'Sweet And Rosy', '', '', '', '', 'United States', 'Birthday Gift? Christmas Gift? We\'ve Got You Covered!', '', '', '', '', '', '1 800 768 7079', '', '', 'care@sweetandrosy.com', 'sweetandrosy.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(142, 19, 0, 1, 5, 'Merchbar', '', '', '', '', 'United States', 'Low prices on 100,000+ band t shirts, posters, hoodies and more from over 5,000 Rock, Pop & Metal artists. Shop now!', '', '', '', '', '', '', '', '', '', 'merchbar.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(143, 19, 0, 1, 4, 'Hug & Mugs', '', '', '', '', 'United States', 'Make every occasion, from Christmas to Mother\'s day Father\'s day, special with a unique and thoughtful custom coffee mug, canvas print, fleece blanket, pillow ?', '', '', '', '', '', '', '', '', '', 'hugandmugs.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(144, 19, 0, 1, 5, 'Project Yourself', '', '', '', '', 'United States', 'The Project:Yourself tribe is in tune with the idea that modern mind-body-spirit tools and ancient technologies such as meditation, yoga & sacred geometry.', '', '', '', '', '', '1 877 977 1799', '', '', 'support@projectyourself.com', 'projectyourself.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(145, 19, 0, 1, 5, 'trivago', '', '', '', '', 'Germany', 'Travellers find the ideal hotel for the best price on trivago.com. As the world\'s largest online hotel search site, trivago compares rates from over 700,000 hotels on more than 200 booking sites worldwide. By integrating over 82 million hotel reviews and 14 million photos, finding the ideal hotel has never been easier! More than 45 million users visit trivago per month and use trivago\'s advanced filter system to find a deal that works best for them, saving an average of 35% per booking. trivago was founded in 2005 in D?sseldorf, Germany, and currently operates 47 international country platforms in 28 languages.', '', '', '', '', '', '', '', '', 'info@trivago.com', 'trivago.in', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(146, 19, 0, 1, 5, 'Ohio Depot', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'contact@ohiodepot.com', 'ohiodepot.com', '2021-11-01 09:29:36', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(147, 17, 0, 1, 4, 'DavidSW', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'davidsw.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(148, 17, 0, 1, 4, 'Zdigitizing', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'zdigitizing.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(149, 17, 0, 1, 5, 'B-Wear Sportswear', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'bwear.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(150, 17, 0, 1, 4, 'CHO', '', '', '', '', 'United Kingdom', '', '', '', '', '', '', '', '', '', '', 'cho.co.uk', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(151, 17, 0, 1, 4, 'Queensboro', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'queensboro.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(152, 17, 0, 1, 4, 'Fragrancebuy Canada', '', '', '', '', 'Canada', '', '', '', '', '', '', '', '', '', '', 'fragrancebuy.ca', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(153, 17, 0, 1, 8, 'Royal Marines Shop', '', '', '', '', 'United Kingdom', '', '', '', '', '', '', '', '', '', '', 'royalmarinesshop.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(154, 17, 0, 1, 4, 'Red Tuna Shirt Club', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'redtunashirtclub.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(155, 17, 0, 1, 4, 'MoissaniteCo.com', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'moissaniteco.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(156, 17, 0, 1, 4, 'ShopWorn', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'shopworn.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(157, 17, 0, 1, 4, 'Green Lake Jewelry', '', '', '', '', '550 NE Northgate Way, 98125 Seattle, WA', '', '', '', '', '', '', '', '', '', '', 'greenlakejewelry.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(158, 17, 0, 1, 4, 'Mx Mynamenecklace', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'mynamenecklace.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(159, 17, 0, 1, 4, 'CreateMyTee', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'createmytee.com', '2021-11-01 09:29:59', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(160, 17, 0, 1, 4, 'Forty Clothing', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'fortyclothing.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(161, 17, 0, 1, 4, 'lucy&sam', '', '', '', '', 'United Kingdom', '', '', '', '', '', '', '', '', '', '', 'lucyandsam.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(162, 17, 0, 1, 4, 'Beverly Diamonds', '', '', '', '', '550 South Hill Street\n90013\nLos Angeles', '', '', '', '', '', '', '', '', '', '', 'beverlydiamonds.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(163, 17, 0, 1, 4, 'Baby Beau & Belle', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'babybeauandbelle.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(164, 17, 0, 1, 5, 'Logoshirtsdirect', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'logoshirtsdirect.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(165, 17, 0, 1, 5, 'Krikawa Jewelry Designs', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'krikawa.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(166, 17, 0, 1, 5, 'Just Wetsuits', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'justwetsuits.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(167, 17, 0, 1, 4, 'Elastic by the Yard', '', '', '', '', 'United States', '', '', '', '', '', '', '717-492-5046', '', '', 'sales@elasticbytheyard.com', 'elasticbytheyard.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(168, 17, 0, 1, 4, 'Organic Baby Food Shop', '', '', '', '', 'United States', '', '', '', '', '', '', '737-999-0462', '', '', 'info@organicbabyfood.shop', 'organicbabyfood.shop', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(169, 17, 0, 1, 4, 'Daniel George Custom Suits', '', '', '', '', 'United States', '', '', '', '', '', '', '3127295202', '', '', 'info@danielgeorge.com', 'danielgeorge.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(170, 17, 0, 1, 4, 'Rockford Art Deli', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'rockfordartdeli.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(171, 17, 0, 1, 4, 'ColorfulCritters', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'sales@colorfulcritters.com', 'colorfulcritters.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(172, 17, 0, 1, 4, 'Mothersfamilyrings', '', '', '', '', 'United States', '', '', '', '', '', '', '219-662-1390', '', '', 'sales@mothersfamilyrings.com', 'mothersfamilyrings.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(173, 17, 0, 1, 4, 'Rincon Trading', '', '', '', '', 'United States', '', '', '', '', '', '', '5202193058', '', '', 'rincontrading@gmail.com', 'rincontrading.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(174, 17, 0, 1, 4, 'FramesDirect.com', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-248-9427', '', '', 'FramesDirect@framesdirect.com', 'framesdirect.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(175, 17, 0, 1, 5, 'ShirtSpace', '', '', '', '', 'United States', '', '', '', '', '', '', '(877) 285-7606', '', '', 'sales@shirtspace.com', 'shirtspace.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(176, 17, 0, 1, 5, 'Chrono24', '', '', '', '', 'Haid-und-Neu-Str. 18 76131 Karlsruhe', '', '', '', '', '', '', '4972195793', '', '', '', 'chrono24.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(177, 17, 0, 1, 4, 'The Pearl Source', '', '', '', '', 'United States', '', '', '', '', '', '', '866-877-3275', '', '', 'sales@thepearlsource.com', 'thepearlsource.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(178, 17, 0, 1, 4, 'Holabird Sports', '', '', '', '', 'United States', '', '', '', '', '', '', '(866) 860-1416', '', '', 'info@holabirdsports.com', 'holabirdsports.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(179, 17, 0, 1, 4, 'CM Almy', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-225-2569', '', '', 'almyaccess@almy.com', 'almy.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(180, 17, 0, 1, 4, 'BabyDoppler', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-590-2767', '', '', 'support@babydoppler.com', 'babydoppler.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(181, 17, 0, 1, 4, 'Gearhead, Rock/Creek, & Uncle Dan\'s', '', '', '', '', 'United States', '', '', '', '', '', '', '1-888-707-6708', '', '', 'support@gho.com', 'udans.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(182, 17, 0, 1, 4, 'Hot Chocolate Design', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'international@hotchocolatedesign.com', 'hotchocolatedesign.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(183, 17, 0, 1, 4, 'MightyNest', '', '', '', '', 'United States', '', '', '', '', '', '', '847.905.9567', '', '', 'customerservice@mightynest.com', 'mightynest.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(184, 17, 0, 1, 11, 'Lootie.com', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@lootie.com', 'lootie.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(185, 17, 0, 1, 4, 'Gems On Display', '', '', '', '', 'United States', '', '', '', '', '', '', '888-317-2213', '', '', 'customerservice@gemsondisplay.com', 'gemsondisplay.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(186, 17, 0, 1, 4, 'Creepy Co.', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'creepycompany.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(187, 17, 0, 1, 8, 'HairCareAndBeauty.com', '', '', '', '', 'United States', '', '', '', '', '', '', '855-424-7123', '', '', 'info@haircareandbeauty.com', 'haircareandbeauty.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(188, 17, 0, 1, 5, 'Walkinwardrobeonline', '', '', '', '', 'United Kingdom', '', '', '', '', '', '', '', '', '', '', 'walkinwardrobeonline.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(189, 17, 0, 1, 4, 'Tiny Little Monster', '', '', '', '', 'United States', '', '', '', '', '', '', '3144496900', '', '', 'tiny@tinylittlemonster.com', 'tinylittlemonster.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(190, 17, 0, 1, 5, 'Brian Gavin Diamonds', '', '', '', '', 'United States', '', '', '', '', '', '', '866.611.4465', '', '', 'info@briangavindiamonds.com', 'briangavindiamonds.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(191, 17, 0, 1, 4, 'Kerusso', '', '', '', '', 'United States', '', '', '', '', '', '', '8704236242', '', '', 'crainey@kerusso.com', 'kerusso.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(192, 17, 0, 1, 6, 'Feltman Brothers', '', '', '', '', 'United States', '', '', '', '', '', '', '708-921-5874', '', '', '', 'feltmanbrothers.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(193, 17, 0, 1, 5, 'RG Riley', '', '', '', '', '17700 Duvan Drive\n60477\nTinley Park', '', '', '', '', '', '', '708-921-5874', '', '', 'sales@rgriley.com', 'rgriley.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(194, 17, 0, 1, 4, 'Sportdecals, Inc.', '', '', '', '', '2504 Spring Ridge Dr\n60081\nSpring Grove', '', '', '', '', '', '', '(800) 435-6110', '', '', 'sports@sportdecals.com', 'sportdecals.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(195, 17, 0, 1, 4, 'SECONDA STRADA', '', '', '', '', 'Italy', '', '', '', '', '', '', '', '', '', '', 'secondastrada.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(196, 17, 0, 1, 4, 'Yoogi\'s Closet', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-274-9691', '', '', 'service@yoogiscloset.com', 'yoogiscloset.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(197, 17, 0, 1, 4, 'Couture USA', '', '', '', '', 'United States', '', '', '', '', '', '', '888) 969-7455', '', '', 'service@coutureusa.com', 'coutureusa.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(198, 17, 0, 1, 4, 'Laguna Pearl', '', '', '', '', 'United States', '', '', '', '', '', '', '888-897-3275', '', '', 'sales@lagunapearl.com', 'lagunapearl.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(199, 17, 0, 1, 4, 'Selini New York', '', '', '', '', 'United States', '', '', '', '', '', '', '866-955-8437', '', '', 'help@selininy.com', 'selininy.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(200, 17, 0, 1, 4, 'William Henry', '', '', '', '', 'United States', '', '', '', '', '', '', '888.563.4500', '', '', 'support@williamhenry.com', 'williamhenry.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(201, 17, 0, 1, 4, 'Shields of Strength', '', '', '', '', 'United States', '', '', '', '', '', '', '4098664000', '', '', 'support@shieldsofstrength.com', 'shieldsofstrength.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(202, 17, 0, 1, 4, 'Get That Trend', '', '', '', '', 'Ireland', '', '', '', '', '', '', '', '', '', '', 'getthattrend.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(203, 17, 0, 1, 4, 'luxurytasticrep', '', '', '', '', 'United States', '', '', '', '', '', '', '13177588514', '', '', 'sales@luxurytastic-rep.co', 'luxurytastic-rep.co', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(204, 17, 0, 1, 4, 'Watchshopping.com Inc', '', '', '', '', 'United States', '', '', '', '', '', '', '(650) 419-9900', '', '', 'Trustpilot@watchshopping.com', 'watchshopping.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(205, 17, 0, 1, 4, 'Clothoo - Varsity Jackets', '', '', '', '', 'United States', '', '', '', '', '', '', '9.23E+11', '', '', 'help@clothoo.com', 'clothooo.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(206, 17, 0, 1, 5, 'The Cat\'s Pajamas', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'thecatspjs.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(207, 17, 0, 1, 4, 'Equestrian Stockholm', '', '', '', '', 'Vretv?gen 5,142 34,Skog?s\nSweden', '', '', '', '', '', '', '4686190080', '', '', 'info@equestrianstockholm.com', 'equestrianstockholm.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(208, 17, 0, 1, 4, 'OldSchoolTees', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'oldschooltees.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(209, 17, 0, 1, 4, 'INDIGENOUS', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-664-9410 x1', '', '', 'service@indigenousdesigns.com', 'indigenous.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(210, 17, 0, 1, 4, 'Petparty', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'info@petparty.co', 'petparty.co', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(211, 17, 0, 1, 13, 'Quality Patches INC.', '', '', '', '', 'United States', '', '', '', '', '', '', '3103417743', '', '', 'ross@qualitypunch.net', 'qualitypatches.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(212, 17, 0, 1, 4, 'Balani Custom Clothiers', '', '', '', '', 'United States', '', '', '', '', '', '', '(312) 263-9003', '', '', 'info@balanicustom.com', 'balanicustom.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(213, 17, 0, 1, 4, 'Israelblessing', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'israelblessing.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(214, 17, 0, 1, 4, 'TAG Safari', '', '', '', '', 'United States', '', '', '', '', '', '', '800-824-2703', '', '', 'orders@tagsafari.com', 'tagsafari.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(215, 17, 0, 1, 7, 'Logan\'s of Lexington', '', '', '', '', 'United States', '', '', '', '', '', '', '859-273-5766', '', '', '', 'logansoflexington.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(216, 17, 0, 1, 4, 'Jon Hart Design', '', '', '', '', 'United States', '', '', '', '', '', '', '(210)-226-8544', '', '', 'customerservice@jonhartdesign.com', 'jonhartdesign.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(217, 17, 0, 1, 4, 'PortoVino Wine Bag', '', '', '', '', 'United States', '', '', '', '', '', '', '4804008676', '', '', 'service@porto-vino.com', 'porto-vino.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(218, 17, 0, 1, 4, 'Orttu', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'orttu.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(219, 17, 0, 1, 4, 'Florence Eiseman', '', '', '', '', 'United States', '', '', '', '', '', '', '1-833-801-3168', '', '', 'help@florenceeiseman.com', 'florenceeiseman.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(220, 17, 0, 1, 4, 'jjwinks.com', '', '', '', '', 'United States', '', '', '', '', '', '', '8447578834', '', '', 'Customerservice@jjwinks.com', 'jjwinks.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(221, 17, 0, 1, 4, 'Christeninggowns.com', '', '', '', '', 'United States', '', '', '', '', '', '', '253 851-6947', '', '', 'contact@babybeauandbelle.com', 'christeninggowns.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(222, 17, 0, 1, 4, 'Water+Oak Outdoor Company', '', '', '', '', 'United States', '', '', '', '', '', '', '18444519860', '', '', 'customerservice@wooutdoor.com', 'waterandoakoutdoor.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(223, 17, 0, 1, 4, 'Luca Designs | LucaJackets.com', '', '', '', '', 'United States', '', '', '', '', '', '', '(310) 929-5055', '', '', 'hello@lucajackets.com', 'eggoffer.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(224, 17, 0, 1, 4, 'Shirts By Sarah', '', '', '', '', 'United States', '', '', '', '', '', '', '3155464190', '', '', 'sarah@shirtsbysarah.com', 'shirtsbysarah.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(225, 17, 0, 1, 4, 'Custom Patch Hats, LLC', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'custompatchhats.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(226, 17, 0, 1, 4, 'Phigora', '', '', '', '', '1177 Avenue of the Americas, 5th Floor\n10036\nNew York', '', '', '', '', '', '', '646-760-4538', '', '', 'customerservice@phigora.com', 'phigora.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(227, 17, 0, 1, 4, 'Angeljackets', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'sales@angeljackets.com', 'angeljackets.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(228, 17, 0, 1, 2, 'Vera May', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'veramay.com.au', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(229, 17, 0, 1, 5, 'Lebo\'s', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-283-0127', '', '', 'customerservice@lebos.com', 'lebos.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(230, 17, 0, 1, 4, 'Nursing Queen', '', '', '', '', 'United States', '', '', '', '', '', '', '8136092447', '', '', 'contact@nursingqueen.com', 'nursingqueen.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(231, 17, 0, 1, 4, 'Sockologie', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'sockologie.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(232, 17, 0, 1, 5, 'Fashions by RoPuddles', '', '', '', '', 'United States', '', '', '', '', '', '', '678.948.5784', '', '', 'wecare@ropuddles.com', 'ropuddles.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(233, 17, 0, 1, 5, 'Isabel Garreton', '', '', '', '', 'United States', '', '', '', '', '', '', '310-833-7768', '', '', 'info@isabelgarreton.com', 'isabelgarreton.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(234, 17, 0, 1, 4, 'CheapDigitizing', '', '', '', '', 'United States', '', '', '', '', '', '', '1 800 888 3375', '', '', 'sales@cheapdigitizing.com', 'cheapdigitizing.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(235, 17, 0, 1, 5, 'Clowder Cats', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'clowdercats.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(236, 17, 0, 1, 4, 'Bentivegna Moda', '', '', '', '', 'Corso Vittorio Emanuele 329\n93012,Gela,Italy', '', '', '', '', '', '', '', '', '', '', 'bentivegnamoda.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(237, 17, 0, 1, 5, 'Forever Moissanite', '', '', '', '', 'United States', '', '', '', '', '', '', '800.410.0813', '', '', 'service@forever-moissanite.com', 'forever-moissanite.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(238, 17, 0, 1, 4, 'Mechali', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'inquiry@mechalico.com', 'mechalico.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(239, 17, 0, 1, 7, 'Zenni Optical', '', '', '', '', 'United States', '', '', '', '', '', '', '800-211-2105', '', '', 'socialmedia@zennioptical.com', 'zennioptical.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(240, 17, 0, 1, 4, 'The Catholic Company', '', '', '', '', 'United States', '', '', '', '', '', '', '866-522-8465', '', '', 'customerservice@catholiccompany.com', 'catholiccompany.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(241, 17, 0, 1, 4, 'OOFOS', '', '', '', '', 'United States', '', '', '', '', '', '', '1-775-636-9790', '', '', 'info@oofos.com', 'oofos.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(242, 17, 0, 1, 4, 'Perfume', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'perfume.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(243, 17, 0, 1, 5, 'PRO Compression', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@procompression.com', 'procompression.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(244, 17, 0, 1, 4, 'Bombas', '', '', '', '', 'United States', '', '', '', '', '', '', '800-314-0980', '', '', 'hello@bombas.com', 'bombas.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(245, 17, 0, 1, 4, 'Becharming', '', '', '', '', 'United States', '', '', '', '', '', '', '(800) 878-7868', '', '', 'service@becharming.com', 'becharming.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(246, 17, 0, 1, 4, 'Island Importer', '', '', '', '', 'United States', '', '', '', '', '', '', '541-482-5750', '', '', 'service@islandimporter.com', 'islandimporter.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(247, 17, 0, 1, 4, 'Aran Sweater Market', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'aransweatermarket.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(248, 17, 0, 1, 4, 'Gumbies, Inc.', '', '', '', '', 'United States', '', '', '', '', '', '', '(321) 373 1235', '', '', 'customerservice@gumbies.com', 'gumbies.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(249, 17, 0, 1, 4, 'Apposta', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@apposta.com', 'apposta.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(250, 17, 0, 1, 4, 'Ruby Love', '', '', '', '', 'United States', '', '', '', '', '', '', '516-654-2020', '', '', 'support@rubylove.com', 'rubylove.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(251, 17, 0, 1, 4, 'Thread Logic', '', '', '', '', 'United States', '', '', '', '', '', '', '8003471612', '', '', 'customerservice@threadlogic.com', 'threadlogic.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(252, 17, 0, 1, 4, 'iTailor', '', '', '', '', 'United States', '', '', '', '', '', '', '15109315801', '', '', 'bob@itailor.com', 'itailor.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(253, 17, 0, 1, 4, 'Sunday Afternoons', '', '', '', '', '716 S Pacific Highway,97540,Talent', '', '', '', '', '', '', '888-874-2642', '', '', 'hats@sundayafternoons.com', 'sundayafternoons.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(254, 17, 0, 1, 7, 'Firmoo', '', '', '', '', 'United States', '', '', '', '', '', '', '1-855-487-6006', '', '', 'service@firmoo.com', 'firmoo.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(255, 17, 0, 1, 5, 'Triple Crown Products', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-619-1110', '', '', 'info@TripleCrownProducts.com', 'triplecrownproducts.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(256, 17, 0, 1, 15, 'Luvme Hair', '', '', '', '', 'United States', '', '', '', '', '', '', '1 888 535 4238', '', '', 'stella@luvmehair.com', 'luvmehair.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(257, 17, 0, 1, 4, '686', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', '686.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0);
INSERT INTO `listing` (`listId`, `catId`, `subCatId`, `userId`, `views`, `companyName`, `companySlug`, `logo`, `ip`, `buildingNo`, `address`, `description`, `country`, `state`, `state_code`, `city`, `zipcode`, `number`, `otherNumber`, `fax`, `email`, `website`, `date`, `status`, `verified`, `userStatus`, `metaTitle`, `metaKeyword`, `metaDesc`, `btnTitle`, `btnColor`, `btnUrl`, `btnPromo`, `btnBanner`, `btnStatus`) VALUES
(258, 17, 0, 1, 4, 'ASRV Sportswear', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@asrv.com', 'asrv.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(259, 17, 0, 1, 4, 'UV-Fashions', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'service@uv-fashions.com', 'uv-fashions.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(260, 17, 0, 1, 4, 'Bagmasters.com', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-843-2247', '', '', 'sales@bagmasters.com', 'bagmasters.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(261, 17, 0, 1, 4, 'Beyond Hype', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@beyondhype.com', 'beyondhype.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(262, 17, 0, 1, 7, 'Suits Outlets', '', '', '', '', 'United States', '', '', '', '', '', '', '8889090748', '', '', 'contact@suitsoutlets.com', 'suitsoutlets.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(263, 17, 0, 1, 4, 'Pawz ?', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'pawz.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(264, 17, 0, 1, 4, 'MiaDonna & Co.', '', '', '', '', 'United States', '', '', '', '', '', '', '503.336.1581', '', '', 'help@miadonna.com', 'miadonna.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(265, 17, 0, 1, 5, 'Maxaroma.com', '', '', '', '', 'United States', '', '', '', '', '', '', '877-422-5169', '', '', '', 'maxaroma.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(266, 17, 0, 1, 4, 'Arizona Bead Company', '', '', '', '', 'United States', '', '', '', '', '', '', '(480) 491-4472', '', '', 'info@arizonabeadcompany.com', 'arizonabeadcompany.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(267, 17, 0, 1, 4, 'eMarine PX', '', '', '', '', 'United States', '', '', '', '', '', '', '877-915-6772', '', '', 'sales@emarinepx.com', 'emarinepx.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(268, 17, 0, 1, 4, 'Cotton Mill', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'Sales@CottonMill.com', 'cottonmill.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(269, 17, 0, 1, 4, 'Shop It To Me', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'shopittome.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(270, 17, 0, 1, 4, 'Uniform Warehouse', '', '', '', '', 'United States', '', '', '', '', '', '', '818-341-1500', '', '', 'info@uniforms4all.com', 'uniformswarehouse.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(271, 17, 0, 1, 4, 'Hastamuerte', '', '', '', '', 'United States', '', '', '', '', '', '', '(704) 825-8811', '', '', 'love@rufflebutts.com', 'hastamuerte.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(272, 17, 0, 1, 4, 'ABBE Glasses', '', '', '', '', 'United States', '', '', '', '', '', '', '1-585-800-115', '', '', 'service@abbeglasses.com', 'abbeglasses.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(273, 17, 0, 1, 4, 'pheel', '', '', '', '', 'United States', '', '', '', '', '', '', '201 627 8600', '', '', 'customerservice@pheel.com', 'pheel.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(274, 17, 0, 1, 5, 'Clean Origin', '', '', '', '', 'United States', '', '', '', '', '', '', '(888) 487-2145', '', '', '', 'cleanorigin.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(275, 17, 0, 1, 4, 'The Microbrand Store', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'microbrand.store', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(276, 17, 0, 1, 4, 'CapAndGownDirect.com', '', '', '', '', 'United States', '', '', '', '', '', '', '347-669-4696', '', '', 'info@capandgowndirect.com', 'capandgowndirect.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(277, 17, 0, 1, 4, 'Health', '', '', '', '', 'United States', '', '', '', '', '', '', '18883121605', '', '', 'hello@healthbrands.co', 'healthbrands.co', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(278, 17, 0, 1, 4, 'Baltini', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'info@baltini.com', 'baltini.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(279, 17, 0, 1, 4, 'All USA Clothing', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'allusaclothing.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(280, 17, 0, 1, 4, '786Shop.com', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', '786shop.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(281, 17, 0, 1, 4, 'Embellish FX', '', '', '', '', 'United States', '', '', '', '', '', '', '407-251-7110', '', '', 'tim@embellishfx.com', 'embellishfx.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(282, 17, 0, 1, 5, 'mysportyshop', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'mysportyshop.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(283, 17, 0, 1, 4, 'Best Surat Sarees', '', '', '', '', '1 - 63 Orchid Harmony Applewood Township , SP Ring Road , Nr.Decathlon\n380058,Ahmedabad,India', '', '', '', '', '', '', '9099793967', '', '', 'bestsuratsarees@gmail.cpm', 'bestsuratsarees.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(284, 17, 0, 1, 4, 'Rockamilly', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'rockamilly.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(285, 17, 0, 1, 4, 'Pure Gems Jewels', '', '', '', '', 'United States', '', '', '', '', '', '', '8007051855', '', '', 'customerservice@puregemsjewels.com', 'puregemsjewels.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(286, 17, 0, 1, 4, 'Apparel by Home Run', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'contact@apparelbyhomerun.com', 'apparelbyhomerun.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(287, 17, 0, 1, 4, 'DreamLeggings', '', '', '', '', 'United States', '', '', '', '', '', '', '9033727660', '', '', 'Info@dreamleggings.com', 'dreamleggings.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(288, 17, 0, 1, 4, 'Creative Rizk Collectives', '', '', '', '', 'United States', '', '', '', '', '', '', '4704855051', '', '', 'creativerizkboutique@gmail.com', 'creativerizkboutique.shop', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(289, 17, 0, 1, 4, 'ENGRAFFT', '', '', '', '', 'United States', '', '', '', '', '', '', '8312779212', '', '', 'engrafft@gmail.com', 'engrafft.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(290, 17, 0, 1, 4, 'The Revury', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'therevury.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(291, 17, 0, 1, 5, 'A.K. RIKK\'s', '', '', '', '', 'United States', '', '', '', '', '', '', '616-957-3242', '', '', 'hello@akrikks.com', 'akrikks.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(292, 17, 0, 1, 4, 'Poppysocks', '', '', '', '', 'United States', '', '', '', '', '', '', '631-913-8431', '', '', 'info@poppysocks.com', 'poppysocks.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(293, 17, 0, 1, 4, 'Whosits & Whatsits', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@whositswhatsits.com', 'whositswhatsits.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(294, 17, 0, 1, 4, 'Get Dressed 2', '', '', '', '', 'United States', '', '', '', '', '', '', '4242092026', '', '', 'info@getdressed2.com', 'getdressed2.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(295, 17, 0, 1, 4, 'Rainbow Shops', '', '', '', '', 'United States', '', '', '', '', '', '', '1-844-572-4626', '', '', 'customerservice@rainbowshops.com', 'rainbowshops.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(296, 17, 0, 1, 4, 'Oceansapart', '', '', '', '', 'Germany', '', '', '', '', '', '', '', '', '', '', 'oceansapart.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(297, 17, 0, 1, 4, 'Shapermint', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'hello@shapermint.com', 'shapermint.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(298, 17, 0, 1, 4, 'Ruby Lane', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'rubylane.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(299, 17, 0, 1, 4, 'Rangerup', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'rangerup.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(300, 17, 0, 1, 4, 'Custom Ink', '', '', '', '', 'United States', '', '', '', '', '', '', '800-293-4232', '', '', 'service@customink.com', 'customink.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(301, 17, 0, 1, 4, 'UberPrints.com', '', '', '', '', 'United States', '', '', '', '', '', '', '866 440-8237', '', '', 'service@uberprints.com', 'uberprints.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(302, 17, 0, 1, 4, 'Sunglass Fix', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'info@thesunglassfix.com', 'thesunglassfix.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(303, 17, 0, 1, 4, 'Us Giesswein', '', '', '', '', 'United States', '', '', '', '', '', '', '53376135555', '', '', 'shop@giesswein.com', 'giesswein.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(304, 17, 0, 1, 14, 'Modli', '', '', '', '', 'United States', '', '', '', '', '', '', '18779572883', '', '', 'hello@modli.co', 'modli.co', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(305, 17, 0, 1, 5, 'The/Studio', '', '', '', '', '', '', '', '', '', '', '', '(877) 647 6447', '', '', 'support@thestudio.com', 'thestudio.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(306, 17, 0, 1, 4, 'Clothing Shop Online', '', '', '', '', 'United States', '', '', '', '', '', '', '562-356-4520', '', '', 'info@clothingshoponline.com', 'clothingshoponline.com', '2021-11-01 09:30:00', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(307, 17, 0, 1, 4, 'Kewlioo', '', '', '', '', 'United States', '', '', '', '', '', '', '888.824.5146', '', '', 'care@kewlioo.com', 'kewlioo.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(308, 17, 0, 1, 14, 'Lucchese Bootmaker', '', '', '', '', 'United States', '', '', '', '', '', '', '888-582-1883', '', '', 'support@lucchese.com', 'lucchese.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(309, 17, 0, 1, 5, 'BlueCotton', '', '', '', '', 'United States', '', '', '', '', '', '', '1.800.536.1435', '', '', 'tshirts@bluecotton.com', 'bluecotton.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(310, 17, 0, 1, 5, 'Shoe Station', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'shoestation.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(311, 17, 0, 1, 5, 'Girotti International', '', '', '', '', 'California Avenue 94306,Palo to,Germany', '', '', '', '', '', '', '', '', '', '', 'girottishoes.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(312, 17, 0, 1, 5, 'Birkat Elyon', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'birkatelyon.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(313, 17, 0, 1, 4, 'NYFifth.com', '', '', '', '', 'United States', '', '', '', '', '', '', '877-695-9722', '', '', 'support@nyfifth-inc.com', 'nyfifth.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(314, 17, 0, 1, 4, 'Jerusalem Sandals', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'Support@jerusalemsandals.com', 'jerusalemsandals.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(315, 17, 0, 1, 10, 'Corset Story', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'sales@corset-story.com', 'corset-story.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(316, 17, 0, 1, 4, 'nataliediamonds.com', '', '', '', '', 'United States', '', '', '', '', '', '', '1-800-724-7749', '', '', 'customerservice@nataliediamonds.com.', 'nataliediamonds.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(317, 17, 0, 1, 4, 'Lactation Connection', '', '', '', '', 'United States', '', '', '', '', '', '', '800-216-8151', '', '', 'orders@lactationconnection.com', 'lactationconnection.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(318, 17, 0, 1, 4, 'RUSEEN Reflective Apparel LLC', '', '', '', '', 'United States', '', '', '', '', '', '', '(610) 777-1288', '', '', 'ndavies@ruseen.com', 'ruseen.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(319, 17, 0, 1, 4, 'WristbandBros.com', '', '', '', '', 'United States', '', '', '', '', '', '', '866.428.0095', '', '', 'info@wristbandbros.com', 'wristbandbros.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(320, 17, 0, 1, 4, 'Thousand Miles', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'hello@shopthousandmiles.com', 'shopthousandmiles.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(321, 17, 0, 1, 4, 'FIN-ATICS', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'fin-atics.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(322, 17, 0, 1, 10, 'Ministry of Supply', '', '', '', '', 'United States', '', '', '', '', '', '', '18556671920', '', '', 'q@ministryofsupply.com', 'ministryofsupply.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(323, 17, 0, 1, 4, 'RBD Outlet', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'rbdoutlet.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(324, 17, 0, 1, 4, 'Rebel Romance', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'sales@rebelromanceshop.com', 'rebelromanceshop.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(325, 17, 0, 1, 5, 'FLEX-N-FLEX', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'support@flexnflex.com', 'flexnflex.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(326, 17, 0, 1, 4, 'The Gear Hunter', '', '', '', '', 'United States', '', '', '', '', '', '', '(443) 231-8623', '', '', 'shop@gearhunter.us', 'gearhunter.us', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(327, 17, 0, 1, 4, 'Palkhi Fashion', '', '', '', '', 'United States', '', '', '', '', '', '', '8322436842', '', '', 'info@palkhifashion.com', 'palkhifashion.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(328, 17, 0, 1, 4, 'Marauder Outdoors', '', '', '', '', 'United States', '', '', '', '', '', '', '561-444-9851', '', '', 'CustomerService@marauderoutdoors.com', 'marauderoutdoors.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(329, 17, 0, 1, 4, 'Midnight Drip Supply', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'midnightdripsupply.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(330, 17, 0, 1, 4, 'Strawberrynet.com', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', 'info@strawberrynet.com', 'strawberrynet.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(331, 17, 0, 1, 4, 'GlassesUSA', '', '', '', '', 'United States', '', '', '', '', '', '', '1-844-244-1186', '', '', 'Service@GlassesUSA.com', 'glassesusa.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(332, 17, 0, 1, 5, 'Elevate Styles', '', '', '', '', '1420 Atlantic Avenue\n08401,Atlantic City', '', '', '', '', '', '', '1-888-676-2226', '', '', 'customerservice@elevatestyles.com', 'elevatestyles.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(333, 17, 0, 1, 4, 'Reeds Jewelers', '', '', '', '', 'United States', '', '', '', '', '', '', '844-733-3740', '', '', 'orders@reeds.com', 'reeds.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(334, 17, 0, 1, 5, 'LilySilk', '', '', '', '', 'United States', '', '', '', '', '', '', '1 909 861 1680', '', '', 'support@lilysilk.zendesk.com', 'lilysilk.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(335, 17, 0, 1, 4, 'Peaches Boutique', '', '', '', '', 'United States', '', '', '', '', '', '', '7735820102', '', '', 'support@peachesboutique.com', 'peachesboutique.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(336, 17, 0, 1, 4, 'The RealReal', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'therealreal.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(337, 17, 0, 1, 4, 'b?hme', '', '', '', '', 'United States', '', '', '', '', '', '', '(801) 266-2002', '', '', 'webteam@bohme.com', 'bohme.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(338, 17, 0, 1, 5, 'Honey', '', '', '', '', 'United States', '', '', '', '', '', '', '', '', '', '', 'joinhoney.com', '2021-11-01 09:30:01', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(339, 51, 0, 1, 28, 'IJ.START.CANON', 'ijstartcanon', 'upload/business-logo/ijstartcanon-339.jpg', '', '', 'Division Headquarters 3300 North First Street', 'To get the best printing experience, download the Canon printer drivers from ij.start.canon. Connect your Canon printer to an internet network. Installing Canon printer drivers will allow you to send printer commands directly from your device. Here are some effective and simple guidelines to successfully set up your ij.start.canon printer. Read them carefully and complete the setup process. It will provide you with the best printing experience.', '231', '', '', 'San Jose', '95134', '(408) 468-2000', '', '', 'semi-info@cusa.canon.com', 'ij.start.canon', '2021-11-01 09:46:51', 1, 0, 0, 'IJ.START.CANON || Install Drivers, Manuals & Setup Canon Printer', 'IJ Start Canon setup', 'Download the printer drivers from ij.start.canon without any error. Install and update the IJ Start Canon setup drivers to print directly from the device.', '', '', '', '', '', 0),
(340, 1, 0, 1, 9, 'Primevideo.com/mytv', 'primevideocommytv', 'upload/business-logo/primevideocommytv.jpg', '', '', 'Seattle United States', 'Watch Prime Video on Smart TV. Visit the Prime Video and click on the Sign-in button, even if You’re already a member; Get 6 digit Prime activation code.', '', '', '', '', '', '', '', '', '', 'primevideo.com', '2021-11-01 09:58:56', 1, 0, 0, 'Primevideo.com/mytv - Enter Mytv Code | amazon.com/mytv', 'prime video, amazon my tv', 'Enter the “Amazon mytv activation code” at amazon.com/mytv for what it’s displayed on your TV screen. Click on “Register Device” option. That is the means by which to effectively register and activate Primevideo mytv on TVs.', '', '', '', '', '', 0),
(341, 51, 0, 1, 33, 'McAfee Activate', 'mcafee-activate', 'upload/business-logo/mcafee-activate.jpg', '', '', '6220 America Center Drive , San Jose 95002', 'Get the latest Antivirus Protection via mcafee.com/activate and activate security tools according to your preference. To protect your data and privacy from online threats, you need reliable system protection. For which you can easily download, install and activate McAfee security antivirus via mcafee.com/activate.', '231', '', '', '', '', '1-866-622-3911', '', '', '', 'mcafee.com', '2021-11-01 10:03:58', 1, 0, 0, 'McAfee.com/Activate - Enter 25-digit activation code - Install McAfee', 'Activate McAfee', 'Mcafee.com/activate is the official website of McAfee. Visit the link www.mcafee.com/activate to download, install, and activate McAfee.', '', '', '', '', '', 0),
(342, 51, 0, 1, 12, 'Elegant Themes', 'elegant-themes', '', '', '', '584 Castro Street #123 94114 San Francisco United States', 'The home of Divi, the most popular WordPress theme in the world and the ultimate visual page builder.', '', '', '', '', '', '', '', '', 'support@elegantthemes.com', 'elegantthemes.com', '2021-11-01 10:09:50', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(343, 39, 0, 1, 9, 'Lawyer.com', 'lawyercom', '', '', '', '25 Mountainview Blvd 07920 Basking Ridge United States', 'Lawyer.com is a free service who connects millions of consumers across the US & Canada with lawyers who can provide legal help. Choose from personal injury, criminal defense, and family law attorneys.', '', '', '', '', '', '800-815-6600', '', '', 'support@corp.lawyer.com', 'lawyer.com', '2021-11-01 10:12:12', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(344, 68, 0, 1, 7, 'Beaming White', 'beaming-white', '', '', '', '1205 NE 95TH ST 98665 VANCOUVER United States', 'BeamingWhite is the premier teeth whitening manufacturer in the USA. We produce a number of teeth whitening products both for professional and home use, and we make them all right here in the USA.', '', '', '', '', '', '(866) 944-8315', '', '', 'social@beamingwhite.com', 'beamingwhite.com', '2021-11-01 10:15:45', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(345, 92, 0, 1, 7, 'Aviles Real Estate Brokerage', 'aviles-real-estate-brokerage', '', '', '', '1840 Cherokee Rose Circle 29466 Mount Pleasant United States', 'Welcome to the Aviles Real Estate Brokerage. We provide a wide variety of useful information and resources designed to help you buy or sell a home more effectively in the Mount Pleasant, Daniel Island and greater Charleston area - including Sullivan\'s Island, Isle of Palms, Folly Beach, West Ashley, James Island and John\'s Island. From information on the local community, to advice about finding a mortgage or preparing your home to sell.', '', '', '', '', '', '8436975535', '', '', 'gil@aviles-realestate.com', 'aviles-realestate.com', '2021-11-01 10:17:44', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(346, 39, 0, 1, 8, 'Helbing Law Group', 'helbing-law-group', 'upload/business-logo/helbing-law-group.png', '', '', '1275 Glenlivet Drive, Suite 100 18106 Allentown United States', 'At Helbing Law Group, we provide comprehensive legal services to clients in all types of legal situations. No matter how serious you might think your legal situation is it is best to be well prepared.', '', '', '', '', '', '(800) 413-5011', '', '', 'Support@HelbingLawGroup.com', 'helbinglawgroup.com', '2021-11-01 10:21:17', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(347, 39, 0, 1, 8, 'Nevada Traffic Ticket Pro', 'nevada-traffic-ticket-pro', 'upload/business-logo/nevada-traffic-ticket-pro.jpg', '', '', '1212 S. Casino Center Blvd 89104 Las Vegas United States', 'Do you need an attorney in Las Vegas to help fix your traffic ticket? Look no further, ask the pro\'s!', '', '', '', '', '', '702-888-6414', '', '', 'info@trafficticketpro.com', 'trafficticketpro.com', '2021-11-01 10:22:30', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(348, 39, 0, 1, 7, 'Bridgeway Legal Funding', 'bridgeway-legal-funding', 'upload/business-logo/bridgeway-legal-funding.png', '', '', '1295 Northern Blvd., Suite 22 11030 Manhasset United States', 'Bridgeway is a premier source of pre-settlement lawsuit advances. If you have been injured in an accident and cannot afford to wait years for your due compensation, Bridgeway can advance you a piece of your money today. All funding is non-recourse, meaning you only have to re-pay the money if you win your case.', '', '', '', '', '', '516-787-8000', '', '', 'anthony@bridgewaylf.com', 'bridgewaylf.com', '2021-11-01 10:23:50', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(349, 57, 0, 1, 6, 'Huron Law Group', 'huron-law-group', '', '', '', '26711 Northwestern Hwy., Ste. 350 48033 Southfield United States', 'Huron Law Group is a national debtor defense firm focused on providing cost-effective legal representation to consumers. We work closely with debt settlement companies, legal clubs, and creditors to achieve the best possible outcome for our clients at affordable rates.', '', '', '', '', '', '800-970-4876', '', '', 'info@huronlawgroup.com', 'huronlawgroup.com', '2021-11-01 10:26:26', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(350, 52, 0, 1, 6, 'DreamHost', 'dreamhost', 'upload/business-logo/dreamhost.jpg', '', '', '417 Associated Road P.O Box #257 92821 Brea, CA United States', 'Since 1997 DreamHost has helped entrepreneurs, bloggers, web designers and web developers the world over bring their dreams to life on the Internet. From domain registrations to web hosting and even powerful cloud storage and computing services, more than 400,000 customers trust DreamHost to be their online home. DreamHost is the best place to launch a blog, website, or web application into the stratosphere.', '', '', '', '', '', '', '', '', 'sales@dreamhost.com', 'dreamhost.com', '2021-11-01 10:29:45', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(351, 52, 0, 1, 9, 'InterServer', 'interserver', 'upload/business-logo/interserver.png', '', '', '110 Meadowlands PKWY 07094 Secaucus United States', 'InterServer was established in April 1999 as a web presence provider. Over the years our company has expanded it\'s product line to include dedicated servers, colocation and managed services. In 2006 InterServer built out our own datacenter in Secaucus, New Jersey. With our exceptional service InterServer is the leading choice for many online operations today.', '', '', '', '', '', '201-605-1440', '', '', 'support@interserver.net', 'interserver.net', '2021-11-01 10:31:44', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(352, 52, 0, 1, 6, 'ScalaHosting', 'scalahosting', 'upload/business-logo/scalahosting.jpg', '', '', '1999 Bryan Street 75201 Dallas United States', 'ScalaHosting has been on its journey of providing web hosting services since 2008. It\'s a US-based cloud hosting provider with its primary focus on fully managed cloud VPS solutions. The company has a simple vision in mind: to empower every website owner on earth with fully managed cloud VPS at the price of an ordinary shared hosting plan. They are most known for being the exclusive Joomla.org VPS partner and for their in-house developed cPanel/WHM alternative called SPanel.', '', '', '', '', '', '(214) 306-6818', '', '', 'chris@scalahosting.com', 'scalahosting.com', '2021-11-01 10:32:48', 1, 0, 0, '', '', '', '', '', '', '', '', 0),
(353, 51, 0, 1, 20, 'Mcafee.com/activate', 'mcafeecomactivate', 'upload/business-logo/mcafeecomactivate-353.png', '', '', 'United States', 'To download, install, and activate the McAfee antivirus on your device, you need to visit McAfee.com/activate and enter the 25-digit activation code.', '', '', '', '', '', '', '', '', '', 'mcafeecomactivatec.com', '2021-11-08 12:35:14', 1, 0, 0, 'Mcafee.com/activate - Enter 25-digit activation code - Activate McAfee', 'Activate McAfee', 'To download, install, and activate the McAfee antivirus on your device, you need to visit McAfee.com/activate and enter the 25-digit activation code.', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pageName` varchar(255) NOT NULL,
  `pageSlug` varchar(255) NOT NULL,
  `pageDesc` text NOT NULL,
  `number` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `pageDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `metaTitle` varchar(500) NOT NULL,
  `metaKey` varchar(500) NOT NULL,
  `metaDesc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_cat`
--

CREATE TABLE `post_cat` (
  `catId` int(11) NOT NULL,
  `catIdMain` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL,
  `catInfo` varchar(255) NOT NULL,
  `catMetaTitle` text NOT NULL,
  `catMetaKey` text NOT NULL,
  `catMetaDesp` text NOT NULL,
  `catStatus` int(11) NOT NULL,
  `catUpdated` datetime NOT NULL,
  `catCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_cat`
--

INSERT INTO `post_cat` (`catId`, `catIdMain`, `catName`, `catInfo`, `catMetaTitle`, `catMetaKey`, `catMetaDesp`, `catStatus`, `catUpdated`, `catCreated`) VALUES
(1, 0, 'Gaming', 'gaming', '', '', '', 1, '0000-00-00 00:00:00', '2021-11-01 10:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `rating_review`
--

CREATE TABLE `rating_review` (
  `reviewId` int(11) NOT NULL,
  `previewId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `listId` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `subject` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(1) NOT NULL,
  `site_title` varchar(500) NOT NULL,
  `site_port` varchar(8) NOT NULL,
  `site_link` varchar(999) NOT NULL,
  `meta_keywords` varchar(999) NOT NULL,
  `meta_description` varchar(999) NOT NULL,
  `home_title` varchar(999) NOT NULL,
  `site_email` varchar(500) NOT NULL,
  `site_phone` varchar(50) NOT NULL,
  `site_address` varchar(999) NOT NULL,
  `county` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `head_code` text NOT NULL,
  `ga_code` varchar(999) NOT NULL,
  `gm_code` varchar(999) NOT NULL,
  `tiny_code` text NOT NULL,
  `gr_sitekey` text NOT NULL,
  `gr_secretkey` text NOT NULL,
  `sharethis_key` text NOT NULL,
  `fb_app_id` varchar(999) NOT NULL,
  `fb_secret_key` varchar(500) NOT NULL,
  `fb_page` varchar(999) NOT NULL,
  `twitter_link` varchar(999) NOT NULL,
  `pinterest_link` varchar(999) NOT NULL,
  `google_pluse_link` varchar(999) NOT NULL,
  `email_active_users` int(1) NOT NULL,
  `captcha_signup` int(1) NOT NULL,
  `captcha_signin` int(1) NOT NULL,
  `active_listings` int(1) NOT NULL,
  `active_reviews` int(1) NOT NULL,
  `template` varchar(255) NOT NULL,
  `site_views` int(255) NOT NULL,
  `version` varchar(6) NOT NULL,
  `headerColor` varchar(500) NOT NULL,
  `footerColor` varchar(500) NOT NULL,
  `headerTextColor` varchar(500) NOT NULL,
  `footerTextColor` varchar(500) NOT NULL,
  `bus_limt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `site_port`, `site_link`, `meta_keywords`, `meta_description`, `home_title`, `site_email`, `site_phone`, `site_address`, `county`, `zip`, `head_code`, `ga_code`, `gm_code`, `tiny_code`, `gr_sitekey`, `gr_secretkey`, `sharethis_key`, `fb_app_id`, `fb_secret_key`, `fb_page`, `twitter_link`, `pinterest_link`, `google_pluse_link`, `email_active_users`, `captcha_signup`, `captcha_signin`, `active_listings`, `active_reviews`, `template`, `site_views`, `version`, `headerColor`, `footerColor`, `headerTextColor`, `footerTextColor`, `bus_limt`) VALUES
(1, 'SoftReviewNow - Authentic and Detailed Costumer Reviews', 'https://', 'writemereview.com', 'comapny, rating, reviews', 'SoftReviewNow  - We are all about consumer reviews. Get the real inside story from companies like you. Read, write and Share your experiences with SoftReviewNow today.', 'Share Your Experience & Help Others', 'info@writemereview.com', '', '', 'India', '', '<meta name=\"google-site-verification\" content=\"4gLSj4Vkb2IOazk0bDSgJnhn_OumXkLMCTTm2FFE_4U\" />\r\n<meta name=\"msvalidate.01\" content=\"3287EFD3423A5C888E07BAF589079B23\" />', '', '', 'e3fo8y08dxkwy7l1bw5mldpdibodwpor9ptpskr1jxmxb6rk', '', '', '', '', '', 'https://www.facebook.com/', 'https://twitter.com/', 'https://pinterest.com/', '', 1, 0, 0, 0, 0, 'default', 28235, '3.0.0', '#2c2c2c', '#2c2c2c', '#ffffff', '#ffffff', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_setting`
--

CREATE TABLE `sidebar_setting` (
  `id` int(11) NOT NULL,
  `adsCode` text NOT NULL,
  `mainAdsCode` text NOT NULL,
  `showLatest` int(11) NOT NULL,
  `showPage` int(11) NOT NULL COMMENT 'home-1, business-2, category-3, search-4,blogs-5,blog-details-6',
  `ad_client_key` varchar(500) NOT NULL,
  `ad_slot_key` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar_setting`
--

INSERT INTO `sidebar_setting` (`id`, `adsCode`, `mainAdsCode`, `showLatest`, `showPage`, `ad_client_key`, `ad_slot_key`, `status`, `date`) VALUES
(1, '', '', 1, 5, '', '', 1, '2021-11-01 10:18:38'),
(2, '', '', 1, 6, '', '', 1, '2021-11-01 10:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tagId` int(11) NOT NULL,
  `tagTitle` varchar(255) NOT NULL,
  `tagTitleInfo` text NOT NULL,
  `tagStatus` int(11) NOT NULL,
  `tagUpdated` datetime NOT NULL,
  `tagCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tagId`, `tagTitle`, `tagTitleInfo`, `tagStatus`, `tagUpdated`, `tagCreated`) VALUES
(1, 'PS5', 'ps5', 1, '0000-00-00 00:00:00', '2021-11-01 10:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `tag_mapping`
--

CREATE TABLE `tag_mapping` (
  `mappingId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `blogId` int(11) NOT NULL,
  `mappingCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_mapping`
--

INSERT INTO `tag_mapping` (`mappingId`, `tagId`, `blogId`, `mappingCreated`) VALUES
(1, 1, 1, '2021-11-01 10:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `userWebsite` varchar(500) NOT NULL,
  `userCompany` varchar(500) NOT NULL,
  `number` varchar(20) NOT NULL,
  `country` int(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `userType` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `userWebsite`, `userCompany`, `number`, `country`, `pic`, `pwd`, `ip`, `status`, `userType`, `date`) VALUES
(1, 'Admin', 'admin@softreviewnow.com', '', '', '', '', 0, '', 'e10adc3949ba59abbe56e057f20f883e', '', 1, 2, '2021-09-25 15:24:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorId`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogId`);

--
-- Indexes for table `blog_cat_mapping`
--
ALTER TABLE `blog_cat_mapping`
  ADD PRIMARY KEY (`mappingId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`listId`),
  ADD UNIQUE KEY `website` (`website`),
  ADD KEY `dl_user` (`userId`),
  ADD KEY `dl_cat` (`catId`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pageSlug` (`pageSlug`),
  ADD UNIQUE KEY `pageName` (`pageName`);

--
-- Indexes for table `post_cat`
--
ALTER TABLE `post_cat`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `dl_review` (`userId`),
  ADD KEY `dl_list` (`listId`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_setting`
--
ALTER TABLE `sidebar_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tagId`);

--
-- Indexes for table `tag_mapping`
--
ALTER TABLE `tag_mapping`
  ADD PRIMARY KEY (`mappingId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_cat_mapping`
--
ALTER TABLE `blog_cat_mapping`
  MODIFY `mappingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `listId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_cat`
--
ALTER TABLE `post_cat`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating_review`
--
ALTER TABLE `rating_review`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sidebar_setting`
--
ALTER TABLE `sidebar_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tag_mapping`
--
ALTER TABLE `tag_mapping`
  MODIFY `mappingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
