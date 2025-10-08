-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2025 at 04:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `name`, `phonecode`, `status`) VALUES
(1, 'AF', 'Afghanistan', 93, 'inactive'),
(2, 'AL', 'Albania', 355, 'inactive'),
(3, 'DZ', 'Algeria', 213, 'inactive'),
(4, 'AS', 'American Samoa', 1684, 'inactive'),
(5, 'AD', 'Andorra', 376, 'inactive'),
(6, 'AO', 'Angola', 244, 'inactive'),
(7, 'AI', 'Anguilla', 1264, 'inactive'),
(8, 'AQ', 'Antarctica', 0, 'inactive'),
(9, 'AG', 'Antigua And Barbuda', 1268, 'inactive'),
(10, 'AR', 'Argentina', 54, 'inactive'),
(11, 'AM', 'Armenia', 374, 'inactive'),
(12, 'AW', 'Aruba', 297, 'inactive'),
(13, 'AU', 'Australia', 61, 'inactive'),
(14, 'AT', 'Austria', 43, 'inactive'),
(15, 'AZ', 'Azerbaijan', 994, 'inactive'),
(16, 'BS', 'Bahamas The', 1242, 'inactive'),
(17, 'BH', 'Bahrain', 973, 'inactive'),
(18, 'BD', 'Bangladesh', 880, 'inactive'),
(19, 'BB', 'Barbados', 1246, 'inactive'),
(20, 'BY', 'Belarus', 375, 'inactive'),
(21, 'BE', 'Belgium', 32, 'inactive'),
(22, 'BZ', 'Belize', 501, 'inactive'),
(23, 'BJ', 'Benin', 229, 'inactive'),
(24, 'BM', 'Bermuda', 1441, 'inactive'),
(25, 'BT', 'Bhutan', 975, 'inactive'),
(26, 'BO', 'Bolivia', 591, 'inactive'),
(27, 'BA', 'Bosnia and Herzegovina', 387, 'inactive'),
(28, 'BW', 'Botswana', 267, 'inactive'),
(29, 'BV', 'Bouvet Island', 0, 'inactive'),
(30, 'BR', 'Brazil', 55, 'inactive'),
(31, 'IO', 'British Indian Ocean Territory', 246, 'inactive'),
(32, 'BN', 'Brunei', 673, 'inactive'),
(33, 'BG', 'Bulgaria', 359, 'inactive'),
(34, 'BF', 'Burkina Faso', 226, 'inactive'),
(35, 'BI', 'Burundi', 257, 'inactive'),
(36, 'KH', 'Cambodia', 855, 'inactive'),
(37, 'CM', 'Cameroon', 237, 'inactive'),
(38, 'CA', 'Canada', 1, 'inactive'),
(39, 'CV', 'Cape Verde', 238, 'inactive'),
(40, 'KY', 'Cayman Islands', 1345, 'inactive'),
(41, 'CF', 'Central African Republic', 236, 'inactive'),
(42, 'TD', 'Chad', 235, 'inactive'),
(43, 'CL', 'Chile', 56, 'inactive'),
(44, 'CN', 'China', 86, 'inactive'),
(45, 'CX', 'Christmas Island', 61, 'inactive'),
(46, 'CC', 'Cocos (Keeling) Islands', 672, 'inactive'),
(47, 'CO', 'Colombia', 57, 'inactive'),
(48, 'KM', 'Comoros', 269, 'inactive'),
(49, 'CG', 'Republic Of The Congo', 242, 'inactive'),
(50, 'CD', 'Democratic Republic Of The Congo', 242, 'inactive'),
(51, 'CK', 'Cook Islands', 682, 'inactive'),
(52, 'CR', 'Costa Rica', 506, 'inactive'),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, 'inactive'),
(54, 'HR', 'Croatia (Hrvatska)', 385, 'inactive'),
(55, 'CU', 'Cuba', 53, 'inactive'),
(56, 'CY', 'Cyprus', 357, 'inactive'),
(57, 'CZ', 'Czech Republic', 420, 'inactive'),
(58, 'DK', 'Denmark', 45, 'inactive'),
(59, 'DJ', 'Djibouti', 253, 'inactive'),
(60, 'DM', 'Dominica', 1767, 'inactive'),
(61, 'DO', 'Dominican Republic', 1809, 'inactive'),
(62, 'TP', 'East Timor', 670, 'inactive'),
(63, 'EC', 'Ecuador', 593, 'inactive'),
(64, 'EG', 'Egypt', 20, 'inactive'),
(65, 'SV', 'El Salvador', 503, 'inactive'),
(66, 'GQ', 'Equatorial Guinea', 240, 'inactive'),
(67, 'ER', 'Eritrea', 291, 'inactive'),
(68, 'EE', 'Estonia', 372, 'inactive'),
(69, 'ET', 'Ethiopia', 251, 'inactive'),
(70, 'XA', 'External Territories of Australia', 61, 'inactive'),
(71, 'FK', 'Falkland Islands', 500, 'inactive'),
(72, 'FO', 'Faroe Islands', 298, 'inactive'),
(73, 'FJ', 'Fiji Islands', 679, 'inactive'),
(74, 'FI', 'Finland', 358, 'inactive'),
(75, 'FR', 'France', 33, 'inactive'),
(76, 'GF', 'French Guiana', 594, 'inactive'),
(77, 'PF', 'French Polynesia', 689, 'inactive'),
(78, 'TF', 'French Southern Territories', 0, 'inactive'),
(79, 'GA', 'Gabon', 241, 'inactive'),
(80, 'GM', 'Gambia The', 220, 'inactive'),
(81, 'GE', 'Georgia', 995, 'inactive'),
(82, 'DE', 'Germany', 49, 'inactive'),
(83, 'GH', 'Ghana', 233, 'inactive'),
(84, 'GI', 'Gibraltar', 350, 'inactive'),
(85, 'GR', 'Greece', 30, 'inactive'),
(86, 'GL', 'Greenland', 299, 'inactive'),
(87, 'GD', 'Grenada', 1473, 'inactive'),
(88, 'GP', 'Guadeloupe', 590, 'inactive'),
(89, 'GU', 'Guam', 1671, 'inactive'),
(90, 'GT', 'Guatemala', 502, 'inactive'),
(91, 'XU', 'Guernsey and Alderney', 44, 'inactive'),
(92, 'GN', 'Guinea', 224, 'inactive'),
(93, 'GW', 'Guinea-Bissau', 245, 'inactive'),
(94, 'GY', 'Guyana', 592, 'inactive'),
(95, 'HT', 'Haiti', 509, 'inactive'),
(96, 'HM', 'Heard and McDonald Islands', 0, 'inactive'),
(97, 'HN', 'Honduras', 504, 'inactive'),
(98, 'HK', 'Hong Kong S.A.R.', 852, 'inactive'),
(99, 'HU', 'Hungary', 36, 'inactive'),
(100, 'IS', 'Iceland', 354, 'inactive'),
(101, 'IN', 'India', 91, 'active'),
(102, 'ID', 'Indonesia', 62, 'inactive'),
(103, 'IR', 'Iran', 98, 'inactive'),
(104, 'IQ', 'Iraq', 964, 'inactive'),
(105, 'IE', 'Ireland', 353, 'inactive'),
(106, 'IL', 'Israel', 972, 'inactive'),
(107, 'IT', 'Italy', 39, 'inactive'),
(108, 'JM', 'Jamaica', 1876, 'inactive'),
(109, 'JP', 'Japan', 81, 'inactive'),
(110, 'XJ', 'Jersey', 44, 'inactive'),
(111, 'JO', 'Jordan', 962, 'inactive'),
(112, 'KZ', 'Kazakhstan', 7, 'inactive'),
(113, 'KE', 'Kenya', 254, 'inactive'),
(114, 'KI', 'Kiribati', 686, 'inactive'),
(115, 'KP', 'Korea North', 850, 'inactive'),
(116, 'KR', 'Korea South', 82, 'inactive'),
(117, 'KW', 'Kuwait', 965, 'inactive'),
(118, 'KG', 'Kyrgyzstan', 996, 'inactive'),
(119, 'LA', 'Laos', 856, 'inactive'),
(120, 'LV', 'Latvia', 371, 'inactive'),
(121, 'LB', 'Lebanon', 961, 'inactive'),
(122, 'LS', 'Lesotho', 266, 'inactive'),
(123, 'LR', 'Liberia', 231, 'inactive'),
(124, 'LY', 'Libya', 218, 'inactive'),
(125, 'LI', 'Liechtenstein', 423, 'inactive'),
(126, 'LT', 'Lithuania', 370, 'inactive'),
(127, 'LU', 'Luxembourg', 352, 'inactive'),
(128, 'MO', 'Macau S.A.R.', 853, 'inactive'),
(129, 'MK', 'Macedonia', 389, 'inactive'),
(130, 'MG', 'Madagascar', 261, 'inactive'),
(131, 'MW', 'Malawi', 265, 'inactive'),
(132, 'MY', 'Malaysia', 60, 'inactive'),
(133, 'MV', 'Maldives', 960, 'inactive'),
(134, 'ML', 'Mali', 223, 'inactive'),
(135, 'MT', 'Malta', 356, 'inactive'),
(136, 'XM', 'Man (Isle of)', 44, 'inactive'),
(137, 'MH', 'Marshall Islands', 692, 'inactive'),
(138, 'MQ', 'Martinique', 596, 'inactive'),
(139, 'MR', 'Mauritania', 222, 'inactive'),
(140, 'MU', 'Mauritius', 230, 'inactive'),
(141, 'YT', 'Mayotte', 269, 'inactive'),
(142, 'MX', 'Mexico', 52, 'inactive'),
(143, 'FM', 'Micronesia', 691, 'inactive'),
(144, 'MD', 'Moldova', 373, 'inactive'),
(145, 'MC', 'Monaco', 377, 'inactive'),
(146, 'MN', 'Mongolia', 976, 'inactive'),
(147, 'MS', 'Montserrat', 1664, 'inactive'),
(148, 'MA', 'Morocco', 212, 'inactive'),
(149, 'MZ', 'Mozambique', 258, 'inactive'),
(150, 'MM', 'Myanmar', 95, 'inactive'),
(151, 'NA', 'Namibia', 264, 'inactive'),
(152, 'NR', 'Nauru', 674, 'inactive'),
(153, 'NP', 'Nepal', 977, 'inactive'),
(154, 'AN', 'Netherlands Antilles', 599, 'inactive'),
(155, 'NL', 'Netherlands The', 31, 'inactive'),
(156, 'NC', 'New Caledonia', 687, 'inactive'),
(157, 'NZ', 'New Zealand', 64, 'inactive'),
(158, 'NI', 'Nicaragua', 505, 'inactive'),
(159, 'NE', 'Niger', 227, 'inactive'),
(160, 'NG', 'Nigeria', 234, 'inactive'),
(161, 'NU', 'Niue', 683, 'inactive'),
(162, 'NF', 'Norfolk Island', 672, 'inactive'),
(163, 'MP', 'Northern Mariana Islands', 1670, 'inactive'),
(164, 'NO', 'Norway', 47, 'inactive'),
(165, 'OM', 'Oman', 968, 'inactive'),
(166, 'PK', 'Pakistan', 92, 'inactive'),
(167, 'PW', 'Palau', 680, 'inactive'),
(168, 'PS', 'Palestinian Territory Occupied', 970, 'inactive'),
(169, 'PA', 'Panama', 507, 'inactive'),
(170, 'PG', 'Papua new Guinea', 675, 'inactive'),
(171, 'PY', 'Paraguay', 595, 'inactive'),
(172, 'PE', 'Peru', 51, 'inactive'),
(173, 'PH', 'Philippines', 63, 'inactive'),
(174, 'PN', 'Pitcairn Island', 0, 'inactive'),
(175, 'PL', 'Poland', 48, 'inactive'),
(176, 'PT', 'Portugal', 351, 'inactive'),
(177, 'PR', 'Puerto Rico', 1787, 'inactive'),
(178, 'QA', 'Qatar', 974, 'inactive'),
(179, 'RE', 'Reunion', 262, 'inactive'),
(180, 'RO', 'Romania', 40, 'inactive'),
(181, 'RU', 'Russia', 70, 'inactive'),
(182, 'RW', 'Rwanda', 250, 'inactive'),
(183, 'SH', 'Saint Helena', 290, 'inactive'),
(184, 'KN', 'Saint Kitts And Nevis', 1869, 'inactive'),
(185, 'LC', 'Saint Lucia', 1758, 'inactive'),
(186, 'PM', 'Saint Pierre and Miquelon', 508, 'inactive'),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, 'inactive'),
(188, 'WS', 'Samoa', 684, 'inactive'),
(189, 'SM', 'San Marino', 378, 'inactive'),
(190, 'ST', 'Sao Tome and Principe', 239, 'inactive'),
(191, 'SA', 'Saudi Arabia', 966, 'inactive'),
(192, 'SN', 'Senegal', 221, 'inactive'),
(193, 'RS', 'Serbia', 381, 'inactive'),
(194, 'SC', 'Seychelles', 248, 'inactive'),
(195, 'SL', 'Sierra Leone', 232, 'inactive'),
(196, 'SG', 'Singapore', 65, 'inactive'),
(197, 'SK', 'Slovakia', 421, 'inactive'),
(198, 'SI', 'Slovenia', 386, 'inactive'),
(199, 'XG', 'Smaller Territories of the UK', 44, 'inactive'),
(200, 'SB', 'Solomon Islands', 677, 'inactive'),
(201, 'SO', 'Somalia', 252, 'inactive'),
(202, 'ZA', 'South Africa', 27, 'inactive'),
(203, 'GS', 'South Georgia', 0, 'inactive'),
(204, 'SS', 'South Sudan', 211, 'inactive'),
(205, 'ES', 'Spain', 34, 'inactive'),
(206, 'LK', 'Sri Lanka', 94, 'inactive'),
(207, 'SD', 'Sudan', 249, 'inactive'),
(208, 'SR', 'Suriname', 597, 'inactive'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, 'inactive'),
(210, 'SZ', 'Swaziland', 268, 'inactive'),
(211, 'SE', 'Sweden', 46, 'inactive'),
(212, 'CH', 'Switzerland', 41, 'inactive'),
(213, 'SY', 'Syria', 963, 'inactive'),
(214, 'TW', 'Taiwan', 886, 'inactive'),
(215, 'TJ', 'Tajikistan', 992, 'inactive'),
(216, 'TZ', 'Tanzania', 255, 'inactive'),
(217, 'TH', 'Thailand', 66, 'inactive'),
(218, 'TG', 'Togo', 228, 'inactive'),
(219, 'TK', 'Tokelau', 690, 'inactive'),
(220, 'TO', 'Tonga', 676, 'inactive'),
(221, 'TT', 'Trinidad And Tobago', 1868, 'inactive'),
(222, 'TN', 'Tunisia', 216, 'inactive'),
(223, 'TR', 'Turkey', 90, 'inactive'),
(224, 'TM', 'Turkmenistan', 7370, 'inactive'),
(225, 'TC', 'Turks And Caicos Islands', 1649, 'inactive'),
(226, 'TV', 'Tuvalu', 688, 'inactive'),
(227, 'UG', 'Uganda', 256, 'inactive'),
(228, 'UA', 'Ukraine', 380, 'inactive'),
(229, 'AE', 'United Arab Emirates', 971, 'inactive'),
(230, 'GB', 'United Kingdom', 44, 'inactive'),
(231, 'US', 'United States', 1, 'inactive'),
(232, 'UM', 'United States Minor Outlying Islands', 1, 'inactive'),
(233, 'UY', 'Uruguay', 598, 'inactive'),
(234, 'UZ', 'Uzbekistan', 998, 'inactive'),
(235, 'VU', 'Vanuatu', 678, 'inactive'),
(236, 'VA', 'Vatican City State (Holy See)', 39, 'inactive'),
(237, 'VE', 'Venezuela', 58, 'inactive'),
(238, 'VN', 'Vietnam', 84, 'inactive'),
(239, 'VG', 'Virgin Islands (British)', 1284, 'inactive'),
(240, 'VI', 'Virgin Islands (US)', 1340, 'inactive'),
(241, 'WF', 'Wallis And Futuna Islands', 681, 'inactive'),
(242, 'EH', 'Western Sahara', 212, 'inactive'),
(243, 'YE', 'Yemen', 967, 'inactive'),
(244, 'YU', 'Yugoslavia', 38, 'inactive'),
(245, 'ZM', 'Zambia', 260, 'inactive'),
(246, 'ZW', 'Zimbabwe', 263, 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
