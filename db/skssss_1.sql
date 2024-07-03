-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 07:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skssss_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_menu`
--

CREATE TABLE `activity_menu` (
  `id` int(11) NOT NULL,
  `sub_menu` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_menu`
--

INSERT INTO `activity_menu` (`id`, `sub_menu`, `content`, `status`, `created_at`, `update_at`) VALUES
(3, 'Community Care Centre (CSC-Vihaan Project)', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss_1/media/images/project_img_1.JPG\" alt=\"ensuring_img-1\"></p>\r\n    </section>\r\n\r\n\r\n\r\n\r\n\r\n    <section>\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-7\">\r\n                    <p style=\"text-align:justify;\">SKSSSS have taken on the responsibility of promoting health and well-being among vulnerable populations. Through their various initiatives, we address pressing health concerns such as malnutrition, sanitation, maternal health, child health and infectious diseases, HIV/AIDS. We actively engage in awareness campaigns, health camps and medical services in underserved areas.\r\n\r\n                        <br><br><span style=\"color:#a51015;font-weight:700;\">Targeted Intervention (TI) Project, Vaishali:</span><br> It\'s 9th year of Targeted Intervention (TI) project. We are working among High Risk Group such as Female Sex Worker (FSW); Man Sex Men (MSM), providing training about safe sexual behaviours and protection from HIV-AIDS, Outreach support to HRG, Management of Sexually Transmitted Infection (STI). In recent pass we initiated a campaign to provide voter identity to the transgender.\r\n\r\n                        <br><br><span style=\"color:#a51015;font-weight:700;\">Care &amp; Support Center (CSC) Project-VIHAN </span><br> CSC act as a safe space for person Living with HIV (PLHIV) and a bridge to all continuum of care, support and treatment services being implemented by NCPI PLUS.\r\nAs a sub-recipient partner of Plan India, SKSSSS is implementing this program in Samastipur District of Bihar. More than --% of our project staffs are from the P PLWH community who are playing their role in a different position with their commitment for the community. Objectives of the project includes following:\r\n    </p><ul>\r\n        <li> Early linkage of PLHIV to care, support and treatment services</li>\r\n        <li>Improved treatment adherence and education for PLHIV</li>\r\n        <li>Expanded positive prevention activities</li>\r\n        <li>Improved social protection and well-being of PLHIV</li>\r\n    </ul>\r\n           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>We are providing following services under the project</b><br><br>\r\n    <ul>\r\n        <li>Track and bring back: to treatment people not retained in care.</li>\r\n        <li>Linkages and referral services: other health facilities &amp; various departments for social protection schemes.</li>\r\n        <li>HIV Testing: Promoting positive prevention, HIV test for spouse/partners, children of PLHIV.</li>\r\n        <li>TB screening: ICF of TB presumptive cases and referral for TB testing and treatment.</li>\r\n        <li>Counselling services: treatment adherence, positive prevention &amp; positive living.</li>\r\n        <li>Peer Support: psycho-social support, educate PLHIV &amp; family members on treatment adherence and retention in care.</li>\r\n    </ul>\r\n\r\n                        <br><br>\r\n\r\n\r\n\r\n\r\n                    <p></p>\r\n                </div>\r\n                <div class=\"col-md-5\"><br>\r\n                    <p><img src=\"https://test.camwel.com/skssss/media/images/preject_img-2.PNG\" alt=\"ensuring_img-2\" style=\"height:77rem;\"></p><br><br><br>\r\n                   \r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 1, '2021-12-18', '2024-05-13 06:37:01'),
(4, 'Ensuring Access to Justice for Children at Vaishali & Siwan District', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss_1/media/images/ensuring_img.JPG\" alt=\"ensuring_img-1\"></p>\r\n    </section>\r\n\r\n\r\n\r\n\r\n\r\n    <section>\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-7\">\r\n                    <p style=\"text-align:justify;\">SKSSSS stands as a prominent humanitarian organization with a focus on children. Our mission is to provide assistance to every Child in Need of Care &amp; Protection, irrespective of their religious, racial, ethnic, or gender background,\r\n                        embodying a commitment to the universal love advocated by God. Our dedication lies in enhancing the prospects of India\'s most disadvantaged children. This is achieved through collaborative efforts with grassroots communities, donors\r\n                        both domestically and internationally, as well as governmental bodies at the state and central levels. Our ultimate goal is to cultivate a global environment where every child receives education, enjoys good health, feels secure,\r\n                        and is treated with dignity. The project has following three major components:\r\n                        <br><br><span style=\"color:#a51015;font-weight:700;\">Child Marriage:</span><br> We are proud to be part of a nation wide CHILD MARRIAGE FREE INDIA campaign under the able leadership of Nobel Laureate Shri Kailash Satyarthi Jee\r\n                        and his team. Within one and half years we have been able to mobilize more than 5 million responsible citizens from all walks of life such as community members, govt. officials, people\'s representatives took pledge to end child\r\n                        marriage. Considering importance of early intervention, during the year we could able to prevent 1214 girls from being married through social persuasion by our strong network of \'Community Social Worker (CSW)\' Network.\r\n                        <br><br><span style=\"color:#a51015;font-weight:700;\">Child Sexual Abuse:</span><br> The severity of this serious offense is underestimated due to underreporting. The truth is that the prevalence of child sexual abuse has escalated\r\n                        to epidemic levels in Bihar. In the year 2021 alone, there were 1571 cases (@2.6%) reported under the Protection of Children from Sexual Offenses Act of 2012. SKSSSS CSA team took it as challenge and legally intervened against\r\n                        such heinous crime against children. Socio-psyco counseling and legal support have been provided through Legal and Social support person.\r\n                        <br><br><span style=\"color:#a51015;font-weight:700;\">Child Labour:</span><br> Under close coordination with District Child Protection Unit and Child Welfare Committee we made a successful dent to end child labour from the district.\r\n                        For identifying the victims of child labour a joint Dhawa Dal use to be formed from time to time. Raids were given in different shops and establishments. During the year we could able to rescue 63 such children engaged in different\r\n                        labour work. Most of them were from lowest economic strata of the society and involved in chid labour not by choice but due to over pressure of family hardships. Considering this SKSSSS have initiated a vulnerability assessment\r\n                        exercise and planning to link such families from various social protection schemes in current year.\r\n                    </p>\r\n                </div>\r\n                <div class=\"col-md-5\"><br>\r\n                    <p><a href=\"https://test.camwel.com/skssss/media/images/video.mp4\" target=\"_blank\"><img src=\"https://test.camwel.com/skssss/media/images/ensuring_img-2.JPG\" alt=\"ensuring_img-2\" style=\"height:27rem;\"></a></p><br><br><br>\r\n                    <p><img src=\"https://test.camwel.com/skssss/media/images/ensuring_img-3.JPG\" alt=\"ensuring_img-3\" style=\"height:27rem;\"></p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 1, '2024-02-17', '2024-05-13 06:40:22'),
(6, 'Skilling and Youth', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    \r\n<section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss_1/media/images/skilling_img.JPG\" alt=\"skilling Image\"></p>\r\n    </section>\r\n\r\n\r\n\r\n\r\n\r\n  <section style=\"margin-top:2rem;\">\r\n    <div class=\" container \">\r\n\r\n        <div class=\"row \">\r\n            <h3><span style=\"background-color:#0db7e6;padding:1rem 2rem;margin-left:1.5rem;margin-bottom:4rem;\"><font color=\"#f7f7f7\"><b>Skill Development</b></font></span></h3><br>\r\n            <div class=\"col-md-7 \">\r\n                <p>﻿\r\n\r\nSKSSSS as The Change maker impacting resource limited youth from different parts of the Vaishali District. We are working in innovative technologies and taking up what is considered a typical of youth\'s careers through technological as well as soft skills and financial stability. In order to achieve SDG-1.8 and 9 SKSSSS has been focusing for building skillful society to bring transformative change in lives of young generation and shaping them to fulfill their aspiration and dreams.\r\nWe had partnered with NISBUD, NSDC. Bihar Skill Development Mission, Bihar Dalit Vikas Mission and have provided technical and soft skills to the youth</p>\r\n                <div class=\"row\">\r\n                    <!-- <div class=\"col-md-1\"></div> -->\r\n                    <div class=\"col-md-12\">\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Skill Development Initiatives:</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Methodologies and Approaches:</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Impact and Success Stories:</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Future Directions and Opportunities</p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-md-5\"> \r\n\r\n <video width=\"320\" height=\"240\" controls=\"\"><source src=\"https://skssss.org/media/images/video_1.mp4\" type=\"video/mp4\"></video>\r\n <p><a href=\"https://skssss.org/media/images/video_1.mp4\" target=\"_blank\"></a></p><br><br><br>\r\n            \r\n              \r\n\r\n\r\n            </div>\r\n\r\n        </div>\r\n\r\n\r\n        <div class=\"row \" style=\"margin-bottom:4rem;\">\r\n            <h3><span style=\"background-color:#0db7e6;padding:1rem 2rem;margin-left:1.5rem;margin-bottom:4rem;\"><font color=\"#f7f7f7\"><b> Information Technology</b></font></span></h3>\r\n\r\n           \r\n            <div class=\"col-md-7 \" style=\"margin-top:3rem;\">\r\n                <p style=\"margin-top:-1rem;\">An IT professional work involves designing, supporting, and maintaining computer hardware, software, and telecommunications. They are responsible for anything that is involved with the transferring of information or the systems.</p>\r\n                <p>Swargiya Kanhai Shukla Samajik Sewa Sansthan, committed to empowering marginalized communities, recognizes the transformative potential of information technology (IT) in fostering socio-economic development. This essay explores strategies\r\n                    for integrating IT into the organization\'s initiatives to address contemporary challenges and promote inclusive growth.</p>\r\n                <div class=\"row\">\r\n                    <!-- <div class=\"col-md-1\"></div> -->\r\n                    <div class=\"col-md-12\">\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Improves data storage</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> IT provides security and stability for people to access their financial accounts</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> IT helps in maintaining the data of text messages, emails, investments, etc</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Social media sites\' security and data storage</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> It helps in Improving organisation revenue growth by making necessary changes in the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;products and services</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Helps in processing data faster</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> More data distribution widely with flexibility</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Improves the quality and worth of the product or services</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> It helps to build the smart applications</p>\r\n                        <p> <i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"color:#0db7eb;\"></i> Businesses get access to their financial accounts with much security and stability</p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-md-5\">\r\n                <p><img src=\"https://test.camwel.com/skssss/media/information.jpg\" alt=\"infImg\" style=\"height: 27rem; margin-top:3rem; border-radius: 2rem;\"></p> \r\n            </div>\r\n        </div>\r\n\r\n\r\n    </div>\r\n</section>            \r\n\r\n\r\n\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 1, '2024-03-19', '2024-05-13 06:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `description`, `status`, `created_at`, `update_at`) VALUES
(1, 'New Opening', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <h2 style=\"text-align: left;\"><font color=\"#ce0000\"><font style=\"background-color: rgb(255, 255, 255);\">We do not have any current opening.&nbsp;</font>However, we encourage prospective candidates to submit their resume by filing the form our HR Team will respond.</font></h2>                                                                                                                                                <p class=\"MsoNormal\" style=\"text-align:justify\"></p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ', 1, '2021-12-18', '2024-05-09 06:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `career_enquiry`
--

CREATE TABLE `career_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `doc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career_enquiry`
--

INSERT INTO `career_enquiry` (`id`, `name`, `email`, `mobile_no`, `doc`, `description`, `status`, `created_at`, `update_at`) VALUES
(53, 'Arvind Kumar ', 'kumararvind00786@gmail.com', '9905408822', 'https://skssss.org/uploads/career/Career_Arvind_Kumar_25-04-2023.pdf', 'Thank you', 1, '2023-04-25', '2023-04-25 08:19:47'),
(54, 'RAJU KUMARTIWARI', 'rktcpr01@gmail.com', '9631531730', 'https://skssss.org/uploads/career/Career_RAJU_KUMAR_TIWARI25-04-2023.docx', 'I\'m interested ', 1, '2023-04-25', '2023-04-25 09:00:54'),
(55, 'RIMJHIMRAJ', 'rimjhimpawan.2022@gmail.com', '08434145902', 'https://skssss.org/uploads/career/Career_RIMJHIM_RAJ25-04-2023.pdf', 'I am working as a Team Member in \"Railway child line help Desk-1098\" since 01.01.2022 to till now.', 1, '2023-04-25', '2023-04-25 09:20:00'),
(56, 'RajuKumar ', 'Satishchaudhary126@gmail.com', '9199332720', 'https://skssss.org/uploads/career/Career_Raju_Kumar_25-04-2023.pdf', 'Nice job', 1, '2023-04-25', '2023-04-25 10:27:32'),
(57, 'Ranjeet Kumar ', 'ranjeetk723@gmail.com', '8667212323', 'https://skssss.org/uploads/career/Career_Ranjeet_Kumar_28-04-2023.docx', 'I am very eager to work with the company to stop child marriage and determination to make child marriage free villages and vocal against child marriage. ', 1, '2023-04-28', '2023-04-28 06:51:26'),
(58, 'AvijitGarai', 'avijitgarai731215@gmail.com', '8250968946', 'http://skssss.org/uploads/career/Career_Avijit_Garai29-04-2023.pdf', 'Co-ordinator(01 Post-Vaishali)', 1, '2023-04-29', '2023-04-29 08:04:18'),
(59, 'AvijitGarai', 'avijitgarai731215@gmail.com', '8250968946', 'http://skssss.org/uploads/career/Career_Avijit_Garai29-04-20231.pdf', 'Outreach Worker (20 Posts-for Hajipur(Vaishali)', 1, '2023-04-29', '2023-04-29 08:05:36'),
(60, 'RAJU KUMARTIWARI', 'rktcpr01@gmail.com', '9631531730', 'https://skssss.org/uploads/career/Career_RAJU_KUMAR_TIWARI09-05-2023.docx', 'I\'m interested ', 1, '2023-05-09', '2023-05-09 17:32:46'),
(61, 'ANUPKUMAR', 'kumaranup986@gmail.com', '9934309135', 'https://skssss.org/uploads/career/Career_ANUP_KUMAR10-05-2023.docx', 'Provide my best services to the organization utilizing all my skills and up to the minute knowledge and be a part of the team that work dynamically towards the growth of the organization. ', 1, '2023-05-10', '2023-05-10 05:25:54'),
(62, 'BITTUKUMAR', 'bituk6065@gmail.com', '9507440348', 'https://skssss.org/uploads/career/Career_BITTU_KUMAR10-05-2023.docx', 'BITTU KUMAR', 1, '2023-05-10', '2023-05-10 10:44:42'),
(63, 'RAMCHANDRA PRASAD', 'bituk6065@gmail.com', '9572662069', 'https://skssss.org/uploads/career/Career_RAMCHANDRA_PRASAD12-05-2023.docx', 'RESUME', 1, '2023-05-12', '2023-05-12 09:33:05'),
(64, 'Umashankar KUSHAWAHA', 'umashankarpk2013@gmail.com', '8809527139', 'https://skssss.org/uploads/career/Career_Umashankar_KUSHAWAHA12-05-2023.pdf', 'Support person ', 1, '2023-05-12', '2023-05-12 11:57:00'),
(65, 'Arvind Kumar Prasad ', 'arvindkumarprasad@gmail.com', '9939252403', 'https://skssss.org/uploads/career/Career_Arvind_Kumar_Prasad_12-05-2023.pdf', 'Outreach workar', 1, '2023-05-12', '2023-05-12 12:20:12'),
(66, 'Suraj Kumar KUSHAWAHA', 'surajkumar.1988@rediffmail.com', '7033257636', 'https://skssss.org/uploads/career/Career_Suraj_Kumar_KUSHAWAHA13-05-2023.pdf', 'Conuselor ', 1, '2023-05-13', '2023-05-13 03:18:59'),
(67, 'Bhola KumarShrivastava', 'abhirajsir1995@gmail.com', '7462810112', 'https://skssss.org/uploads/career/Career_Bhola_Kumar_Shrivastava14-05-2023.pdf', 'Dear sir / Madam \r\n                 This is in response to your advertisement for the post of Co- coordinator . So i have the best working in Office documentation field and Rescue of Child Labour & Human . Specially I have experience in  livelihood, new b', 1, '2023-05-14', '2023-05-14 04:12:37'),
(68, 'Munna Yadav ', 'munnakajal673@gmail.com', '9065418645', 'https://skssss.org/uploads/career/Career_Munna_Yadav_19-05-2023.pdf', 'Dear sir/Maim \r\n          ', 1, '2023-05-19', '2023-05-19 08:07:17'),
(69, 'Praveer KumarSinha', 'praveersinha169@gmail.com', '7488233380', 'https://skssss.org/uploads/career/Career_Praveer_Kumar_Sinha19-05-2023.docx', 'I am applying for the post of Coordinator.', 1, '2023-05-19', '2023-05-19 12:47:22'),
(70, 'Mohammad muzaffarAfaque', 'md.muzaffarafaque366@gmail.com', '9708964986', 'https://skssss.org/uploads/career/Career_Mohammad_muzaffar_Afaque21-05-2023.pdf', 'Orw', 1, '2023-05-21', '2023-05-21 15:53:12'),
(71, 'BholuKumar', 'Bholugupta399@gmail.com', '7970314316', 'https://skssss.org/uploads/career/Career_Bholu_Kumar24-05-2023.pdf', 'I am applying for outreach worker and I have experience', 1, '2023-05-24', '2023-05-24 11:12:35'),
(72, 'Sweety Singh', 'swtysngh1502@gmail.com', '9508973080', 'https://skssss.org/uploads/career/Career_Sweety_Singh24-05-2023.pdf', 'I am applying for the post of counsellor and I have experience in different sectors please see my resume.', 1, '2023-05-24', '2023-05-24 11:15:59'),
(73, 'Rahul Kumar', 'rahulihm1992@gmail.com', '9835075708', 'http://skssss.org/uploads/career/Career_Rahul_Kumar20-06-2023.pdf', 'Dear Sir,\r\nGreetings of the Day !\r\n\r\nI am Rahul Kumar belongs to Hajipur city of Vaishali Block and i am English Graduate along with Hotel Management,\r\nI am 31 years old and carrying 9 years of working experience in development sector, especially on Youth', 1, '2023-06-20', '2023-06-20 04:31:22'),
(75, 'DhirajRoy', 'dhirajkumarroy@gmail.com', '07667405267', 'http://skssss.org/uploads/career/Career_Dhiraj_Roy24-06-2023.pdf', 'Respected Sir, \r\nI  have post graduate in Rural development. I have Total11 year work experience in Social and Government Office. Sir I have also work in agriculture and FPO sector. I have work in Sree Bhagat kisan Education Foundation, morabadi, Ranchi a', 1, '2023-06-24', '2023-06-24 15:36:18'),
(76, 'Dhiraj kumarRoy', 'dhirajkumarroy@gmail.com', '7667405267', 'https://skssss.org/uploads/career/Career_Dhiraj_kumar_Roy17-08-2023.pdf', 'Respected sir, \r\nMy name is Dhiraj Kumar Roy. I belong from Gumla Jharkhand. Previous year I have attend interview in you\'re Organization Hazipur office.\r\nSir I have 10year work Experience in social Sector. \r\nYour Sincerly\r\nDhiraj Kumar Roy. ', 1, '2023-08-17', '2023-08-17 15:51:49'),
(77, 'Dhiraj kumarRoy', 'dhirajkumarroy@gmail.com', '07667405267', 'https://skssss.org/uploads/career/Career_Dhiraj_kumar_Roy05-09-2023.pdf', 'Respected sir, \r\nI have given interview previous projects coordinator post on your head office hazipur. I want to be work with you\'re Organization. \r\nYour Sincerly, \r\nDhiraj Kumar Roy, \r\nGumla Jharkhand. \r\n????????????????????', 1, '2023-09-05', '2023-09-05 08:05:19'),
(78, 'Divyanshu Jha', 'Divyanshudev56@gmail.com', '9304405158', 'https://skssss.org/uploads/career/Career_Divyanshu_Jha11-09-2023.pdf', 'I am waiting for your confirmation. ', 1, '2023-09-11', '2023-09-11 05:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `donate_pay`
--

CREATE TABLE `donate_pay` (
  `id` int(11) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `lname` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `acc_info` varchar(111) NOT NULL,
  `pay_det` varchar(111) NOT NULL,
  `cash` int(11) NOT NULL,
  `remark` varchar(111) NOT NULL,
  `data` date NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by_user_type_id` varchar(111) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate_pay`
--

INSERT INTO `donate_pay` (`id`, `fname`, `lname`, `email`, `phone`, `acc_info`, `pay_det`, `cash`, `remark`, `data`, `created_at`, `created_by_user_type_id`, `update_at`) VALUES
(5, 'Sonu kumar', 'Monu kumar', 'sonu@g.com', '87654342123', '1', '', 1000, 'fdgdfgfd', '2024-04-13', 0, '', '2024-04-13 06:54:45'),
(6, 'monu kr', 'rk', 'monu@g.com', '8888888888', '2', 'img1.png', 8888, 'fdsfsdfsd', '2024-04-13', 0, '', '2024-04-13 07:25:40'),
(7, 'ashish kr', 'fkf', 'ashish@g.com', '8888999999', '1', 'img2.png', 99999, 'gdgdgdfgdfgdffd', '2024-04-13', 0, '', '2024-04-13 07:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `mobile`, `email`, `subject`, `description`, `status`, `created_at`, `update_at`) VALUES
(3, 'NehaKumari', '7257013714 /8809845137', 'nema7257013714@gmail.com', 'Suggestion', 'I am interested in the job', '1', '2022-01-27', '2022-01-27 14:20:34'),
(4, 'KarenAllen', '785-693-4533', 'AllenandCo@gmail.com', 'Donation', 'I\'m pretty sure you misspelled the word \"Websit\" on your site.  You might want to check out a site like SpellRadar.com or SiteCheck.com which have helped me with problems like this in the past.', '1', '2022-03-09', '2022-03-09 04:57:43'),
(5, 'Rajesh kumarKumar', '9708709377', 'rajeshkumar511975@gmail.com', 'Enquiry', 'Good', '1', '2022-03-28', '2022-03-28 17:34:18'),
(6, 'DavidC.', '8102440753', 'adi@ndmails.com', 'Enquiry', 'Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, photo edits, logos, flyers, etc. for a fixed monthly fee. \r\n\r\nWe don\'t charge for each task. What kind of work ', '1', '2022-04-19', '2022-04-19 12:03:40'),
(7, 'Dipak kumar Singh', '8709277997', 'dipakkumar874@gmail.com', 'Enquiry', 'We want to adopt child so,give  us Idiea  how to take child adopt.', '1', '2022-11-09', '2022-11-09 16:05:33'),
(8, 'BittuKumar', '9507440348', 'bituk6065@gmail.com', 'Review', 'Bittu', '1', '2023-05-10', '2023-05-10 06:51:19'),
(9, 'SanjuKumari ', '6299669107', 'yadavamarnath927@gmail.com', 'Enquiry', 'Outreach worker ', '1', '2023-05-24', '2023-05-24 11:22:02'),
(10, 'rahulsingh', '9999999', 'rahul@gm.com', 'Donation', 'dddddd', '1', '2023-09-08', '2023-09-08 18:48:48'),
(11, 'rahulsingh', '99999999', 'rahul@gm.com', 'Career', 'test', '1', '2023-09-08', '2023-09-08 18:49:54'),
(12, 'gdfgsdfggdfgdfgds', '54353454', 'dfgfsd@gmail.com', 'Donation', 'fsdfsdfdsaf', '1', '2024-05-04', '2024-05-04 06:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `post` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`id`, `name`, `post`, `image`, `status`, `created_at`, `update_at`) VALUES
(36, 'Rajeev Kumar', 'Chairman', 'https://skssss.org/uploads/executive/Executive_Rajeev_Kumar(26-04-2024).jpeg', 1, '2024-04-26', '2024-05-04 10:55:45'),
(37, 'Sudhir Kumar Shukla', 'Secretary', 'https://skssss.org/uploads/executive/Executive_Sudhir_Kumar_Shukla(26-04-2024).jpeg', 1, '2024-04-26', '2024-05-04 10:55:58'),
(38, 'Arvind Trivedi', 'Treasurer', 'https://skssss.org/uploads/executive/Executive_Arvind_Trivedi(26-04-2024).jpeg', 1, '2024-04-26', '2024-05-04 10:57:24'),
(39, 'Anil Kumar Singh', 'Member', 'https://skssss.org/uploads/executive/Executive_Anil_Kumar_Singh(26-04-2024).jpeg', 1, '2024-04-26', '2024-05-04 10:56:11'),
(40, 'Rita Devi', 'Member', 'https://skssss.org/uploads/executive/Executive_Rita_Devi(26-04-2024).jpeg', 1, '2024-04-26', '2024-05-04 10:54:29'),
(41, 'Nitu Mishra', 'Member', 'https://skssss.org/uploads/executive/Executive_Nitu_Mishra(26-04-2024).png', 1, '2024-04-26', '2024-05-04 10:54:42'),
(42, 'Dhananjay Mishra', 'Member', 'https://skssss.org/uploads/executive/Executive_Dhananjay_Mishra(26-04-2024).jpeg', 1, '2024-04-26', '2024-05-04 10:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `status`, `created_at`, `update_at`) VALUES
(1, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20211.jpeg', 1, '2021-12-18', '2024-04-26 10:40:58'),
(2, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20211.jpeg', 1, '2021-12-18', '2021-12-18 12:14:59'),
(3, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20212.jpeg', 1, '2021-12-18', '2021-12-18 12:15:08'),
(4, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20213.jpeg', 1, '2021-12-18', '2021-12-18 12:15:16'),
(5, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20214.jpeg', 1, '2021-12-18', '2021-12-18 12:15:25'),
(6, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20215.jpeg', 1, '2021-12-18', '2021-12-18 12:15:34'),
(7, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20216.jpeg', 1, '2021-12-18', '2021-12-18 12:15:42'),
(8, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20217.jpeg', 1, '2021-12-18', '2021-12-18 12:15:50'),
(10, 'NGO Work', 'https://skssss.org/uploads/gallery/Gallery_18-12-20219.jpeg', 1, '2021-12-18', '2021-12-18 12:16:15'),
(13, 'CHILDLINE TRAINING', 'https://skssss.org/uploads/gallery/Gallery_22-12-20212.jpg', 1, '2021-12-22', '2021-12-22 11:54:56'),
(14, 'CHD Innauguration by IG, RPF, ECR, Hjipur', 'https://skssss.org/uploads/gallery/Gallery_27-12-2021.jpeg', 1, '2021-12-27', '2021-12-27 10:07:39'),
(15, 'Workshop on World Condom Day', 'https://skssss.org/uploads/gallery/Gallery_27-12-20211.jpeg', 1, '2021-12-27', '2021-12-27 10:08:13'),
(16, 'With Singer Baby', 'https://skssss.org/uploads/gallery/Gallery_27-12-20212.jpeg', 1, '2021-12-27', '2021-12-27 10:08:38'),
(17, 'With Rajeev Roushan IAS Child Labour Campaign', 'https://skssss.org/uploads/gallery/Gallery_27-12-20213.jpeg', 1, '2021-12-27', '2021-12-27 10:09:03'),
(18, 'With Kalpana Patwary Singer', 'https://skssss.org/uploads/gallery/Gallery_27-12-20214.jpeg', 1, '2021-12-27', '2021-12-27 10:09:30'),
(19, 'With Kalpana Patwary Singer', 'https://skssss.org/uploads/gallery/Gallery_27-12-20215.jpeg', 1, '2021-12-27', '2021-12-27 10:09:35'),
(20, 'With Kailash Satyarthi', 'https://skssss.org/uploads/gallery/Gallery_27-12-20216.jpeg', 1, '2021-12-27', '2021-12-27 10:10:01'),
(21, 'Awareness on Disaster Management', 'https://skssss.org/uploads/gallery/Gallery_27-12-20217.jpeg', 1, '2021-12-27', '2021-12-27 10:10:42'),
(22, 'Voter Awareness', 'https://skssss.org/uploads/gallery/Gallery_27-12-20218.jpeg', 1, '2021-12-27', '2021-12-27 10:11:06'),
(23, 'TI Stake holders meet', 'https://skssss.org/uploads/gallery/Gallery_27-12-20219.jpeg', 1, '2021-12-27', '2021-12-27 10:11:39'),
(24, 'stake holders meeting', 'https://skssss.org/uploads/gallery/Gallery_27-12-202110.jpeg', 1, '2021-12-27', '2021-12-27 10:12:07'),
(25, 'Resource Org. Meeting', 'https://skssss.org/uploads/gallery/Gallery_27-12-202111.jpeg', 1, '2021-12-27', '2021-12-27 10:12:30'),
(26, 'Resource Org Meet Prashant Rahul LS', 'https://skssss.org/uploads/gallery/Gallery_27-12-202112.jpeg', 1, '2021-12-27', '2021-12-27 10:12:56'),
(27, 'Rally on World AIDS Day', 'https://skssss.org/uploads/gallery/Gallery_27-12-202113.jpeg', 1, '2021-12-27', '2021-12-27 10:13:22'),
(28, 'Rakesh Kumar IPS award to players', 'https://skssss.org/uploads/gallery/Gallery_27-12-202114.jpeg', 1, '2021-12-27', '2021-12-27 10:13:47'),
(29, 'rachna patil ias with Secretary SKSSSS', 'https://skssss.org/uploads/gallery/Gallery_27-12-202115.jpeg', 1, '2021-12-27', '2021-12-27 10:14:12'),
(30, 'Program at Collectriate with Rajeev Roushan IAS', 'https://skssss.org/uploads/gallery/Gallery_27-12-202116.jpeg', 1, '2021-12-27', '2021-12-27 10:14:41'),
(31, 'manav shrinkhla against child marriage and dawry', 'https://skssss.org/uploads/gallery/Gallery_27-12-202117.jpeg', 1, '2021-12-27', '2021-12-27 10:15:07'),
(32, 'HIV AIDS Camp', 'https://skssss.org/uploads/gallery/Gallery_27-12-202118.jpeg', 1, '2021-12-27', '2021-12-27 10:15:38'),
(33, 'Employment for PLHIV Prog with CS', 'https://skssss.org/uploads/gallery/Gallery_27-12-202119.jpeg', 1, '2021-12-27', '2021-12-27 10:16:05'),
(34, 'Covid Ration Distribution Camp', 'https://skssss.org/uploads/gallery/Gallery_27-12-202120.jpeg', 1, '2021-12-27', '2021-12-27 10:16:38'),
(35, 'Covid Need Help to Children With GRP at Hajipur St', 'https://skssss.org/uploads/gallery/Gallery_27-12-202121.jpeg', 1, '2021-12-27', '2021-12-27 10:17:01'),
(36, 'Covid Help Ration Distribution to Needy Peoples Ca', 'https://skssss.org/uploads/gallery/Gallery_27-12-202122.jpeg', 1, '2021-12-27', '2021-12-27 10:17:24'),
(37, 'Covid Help camp', 'https://skssss.org/uploads/gallery/Gallery_27-12-202123.jpeg', 1, '2021-12-27', '2021-12-27 10:17:44'),
(38, 'Covid Awarenesss Camp at Hajipur Station', 'https://skssss.org/uploads/gallery/Gallery_27-12-202124.jpeg', 1, '2021-12-27', '2021-12-27 10:18:04'),
(39, 'Child Labour Prog', 'https://skssss.org/uploads/gallery/Gallery_27-12-202125.jpeg', 1, '2021-12-27', '2021-12-27 10:18:28'),
(40, 'CHD Innauguration at Hajipur Station', 'https://skssss.org/uploads/gallery/Gallery_27-12-202126.jpeg', 1, '2021-12-27', '2021-12-27 10:19:02'),
(41, 'Certificate By MLA Hajipur Awadhesh Singh to Blood', 'https://skssss.org/uploads/gallery/Gallery_27-12-202127.jpeg', 1, '2021-12-27', '2021-12-27 10:19:23'),
(42, 'CAB Meeting Innauguration', 'https://skssss.org/uploads/gallery/Gallery_27-12-202128.jpeg', 1, '2021-12-27', '2021-12-27 10:19:48'),
(43, 'Blood Donated by MLA Hajipur Awadhesh Singh in SKS', 'https://skssss.org/uploads/gallery/Gallery_27-12-202129.jpeg', 1, '2021-12-27', '2021-12-27 10:20:11'),
(44, 'Bihar Divas with Manavjit Singh Dhillo IPS & Rajee', 'https://skssss.org/uploads/gallery/Gallery_27-12-202130.jpeg', 1, '2021-12-27', '2021-12-27 10:20:38'),
(45, 'childline chg meeting on 08 January 2022', 'https://skssss.org/uploads/gallery/Gallery_08-01-2022.jpeg', 1, '2022-01-08', '2022-01-08 11:22:50'),
(46, 'childline Annual Press Meet 04 Jan 2022', 'https://skssss.org/uploads/gallery/Gallery_08-01-20221.jpeg', 1, '2022-01-08', '2022-01-08 11:23:46'),
(47, 'childline Annual Press Meet 04 Jan 2022', 'https://skssss.org/uploads/gallery/Gallery_08-01-20222.jpeg', 1, '2022-01-08', '2022-01-08 11:56:22'),
(48, 'childline Annual Press Meet 04 Jan 2022', 'https://skssss.org/uploads/gallery/Gallery_08-01-20223.jpeg', 1, '2022-01-08', '2022-01-08 11:25:43'),
(49, 'childline railway Hajipur Meeting', 'https://skssss.org/uploads/gallery/Gallery_08-01-20224.jpeg', 1, '2022-01-08', '2022-01-08 11:26:33'),
(50, 'childline railway Hajipur Meeting', 'https://skssss.org/uploads/gallery/Gallery_08-01-20225.jpeg', 1, '2022-01-08', '2022-01-08 11:26:55'),
(51, 'childline railway Hajipur Meeting', 'https://skssss.org/uploads/gallery/Gallery_08-01-20226.jpeg', 1, '2022-01-08', '2022-01-08 11:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_video`
--

CREATE TABLE `gallery_video` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `status`, `created_at`, `update_at`) VALUES
(1, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-2021.jpeg', 1, '2021-12-18', '2021-12-18 12:11:26'),
(2, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20211.jpeg', 1, '2021-12-18', '2021-12-18 12:11:35'),
(3, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20212.jpeg', 1, '2021-12-18', '2021-12-18 12:11:44'),
(4, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20213.jpeg', 1, '2021-12-18', '2021-12-18 12:11:54'),
(5, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20214.jpeg', 1, '2021-12-18', '2021-12-18 12:12:02'),
(6, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20215.jpeg', 1, '2021-12-18', '2021-12-18 12:12:14'),
(7, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20216.jpeg', 1, '2021-12-18', '2021-12-18 12:12:26'),
(8, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20217.jpeg', 1, '2021-12-18', '2021-12-18 12:12:35'),
(9, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20218.jpeg', 1, '2021-12-18', '2021-12-18 12:12:49'),
(10, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-20219.jpeg', 1, '2021-12-18', '2021-12-18 12:12:58'),
(11, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-202110.jpeg', 1, '2021-12-18', '2021-12-18 12:13:25'),
(12, 'NGO Work', 'https://skssss.org/uploads/media/Media_18-12-202111.jpeg', 1, '2021-12-18', '2021-12-18 12:13:34'),
(13, 'childline annual press meet', 'https://skssss.org/uploads/media/Media_08-01-2022.jpeg', 1, '2022-01-08', '2022-01-08 11:15:15'),
(14, 'Childline annual press meet', 'https://skssss.org/uploads/media/Media_08-01-20221.jpeg', 1, '2022-01-08', '2022-01-08 11:15:56'),
(15, 'Childline annual press meet', 'https://skssss.org/uploads/media/Media_08-01-20222.jpeg', 1, '2022-01-08', '2022-01-08 11:16:00'),
(16, 'childline annual press meet', 'https://skssss.org/uploads/media/Media_08-01-20223.jpeg', 1, '2022-01-08', '2022-01-08 11:16:49'),
(17, 'childline press meet', 'https://skssss.org/uploads/media/Media_08-01-20224.jpeg', 1, '2022-01-08', '2022-01-08 11:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `sub_menu` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `sub_menu`, `content`, `status`, `created_at`, `update_at`) VALUES
(15, 'Overview', '                                                                                    <section>\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <h2 style=\"text-align:center;background-color:#0db7e6;color:white;padding:1rem 2.5rem;\">Welcome to SKSSSS: Pioneers in Transformative Philanthropy</h2>\r\n                <div class=\"col-md-8\" style=\"margin-top:3rem;\">\r\n                    <div class=\"\" style=\"display:inline-block;width:2%;\"><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb;margin-top:-1rem;\"></i></div>\r\n                    <div class=\"\" style=\"display:inline-block;width:95%;\">\r\n                        <h4>&nbsp;&nbsp;Our focus is to channelize the resources from those who need it the most.”</h4>\r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-12\">\r\n                                <p style=\"text-align:justify;\">SKSSSS stands tall as a beacon of hope, dedicating over two decade to catalyzing positive change across Child Protection, Skill Development, Health, Education, and Environment sectors in Bihar &amp; Jharkhand. As a distinguished\r\n                                    non-profit philanthropic organization, we are steadfast in our commitment to creating a sustainable and equitable world for all.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-4 \">\r\n                    <img src=\"https://test.camwel.com/skssss/media/images/over_view_img_1.JPG\" alt=\"overview_img_1\" style=\"margin-top:2rem;height:18rem;border-radius:0.5rem;\">\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"row\" style=\"margin-top:-3rem;\">\r\n                <div class=\"col-md-8\">\r\n                    <div class=\"\">\r\n                        <h4><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i>&nbsp;&nbsp;&nbsp;Expertise in Child Protection Initiatives</h4>\r\n                        <p>Our expertise extends to Child Protection in Bihar &amp; Jharkhand, aligning our initiatives to meet Child Protection compliances. Through strategic partnerships and a deep understanding of Child Protection, we have successfully\r\n                            executed CHILDLINE projects of Government of India &amp; Ensuring Access to Justice for Children of Kailash Satyarthi Children’s Foundation US, which address critical societal needs while ensuring Donor’s compliance with Child\r\n                            Protection.\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-4\">\r\n                    <img src=\"\">\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"row\" style=\"margin-top:3rem;\">\r\n                <div class=\"col-md-8 \">\r\n                    <div class=\" \">\r\n                        <h4><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i>&nbsp;&nbsp;&nbsp;Empowering Through Health Initiatives</h4>\r\n                        <p>Health stands as the cornerstone of progress, and we leave no stone unturned in advancing healthcare solutions. From facilitating access to healthcare resources in underserved communities like PLHIV &amp; vulnerable target group\r\n                            to HIV i.e. High Risk Group (HRG) to promoting wellness and awareness programs, SKSSSS continues to make significant strides in improving healthcare outcomes for our target groups under TI (Targeted Intervention) Project, Vaishali\r\n                            of BSACS &amp; Community Support Centre- Vihaan Project, Samastipur of UPNP+.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-4\">\r\n                    <img src=\"https://test.camwel.com/skssss/media/images/over_view_img_2.JPG\" alt=\"overview_img_3\" style=\"height:18rem;margin-top:-5rem;border-radius:0.5rem;\">\r\n                </div>\r\n\r\n            </div>\r\n\r\n            <div class=\"row \" style=\"margin-top:3rem; \">\r\n                <div class=\"col-md-8 \">\r\n                    <div class=\" \">\r\n                        <h4><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i>&nbsp;&nbsp;&nbsp;Empowering Through Health Initiatives</h4>\r\n                        <p>Health stands as the cornerstone of progress, and we leave no stone unturned in advancing healthcare solutions. From facilitating access to healthcare resources in underserved communities like PLHIV &amp; vulnerable target group\r\n                            to HIV i.e. High Risk Group (HRG) to promoting wellness and awareness programs, SKSSSS continues to make significant strides in improving healthcare outcomes for our target groups under TI (Targeted Intervention) Project, Vaishali\r\n                            of BSACS &amp; Community Support Centre- Vihaan Project, Samastipur of UPNP+.\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-4\">\r\n                    <img src=\"\" alt=\"\">\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"row \" style=\"margin-top:3rem; \">\r\n                <div class=\"col-md-8\">\r\n                    <div class=\" \">\r\n                        <h4><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i>&nbsp;&nbsp;&nbsp;Transformative Skill Development/ Education Initiatives</h4>\r\n                        <p>&nbsp;&nbsp;&nbsp;Education/ Skill Development serve as a catalyst for change, and we believe in empowering individuals through quality education/ Skill Development. Our initiatives of running Kushal Yuva Program (KYP) of BSDM\r\n                            span across diverse educational landscapes, enriching learning experiences, supporting skill development and fostering an environment conducive to learning excellence &amp; Economic sustainability.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-4 \">\r\n                    <img src=\"https://test.camwel.com/skssss/media/images/over_view_img_3.JPG\" alt=\"overview_img_1\" style=\"margin-top:-11rem;height:18rem;border-radius:0.5rem;\">\r\n                </div>\r\n            </div>\r\n\r\n\r\n            <div class=\"row \" style=\"margin-top:5rem; \">\r\n                <div class=\"col-md-6 \">\r\n                    <div class=\" \" style=\"display:inline-block;width:5%; \"><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i></div>\r\n                    <div class=\" \" style=\"display:inline-block;width:90%; \">\r\n                        <h4>Environmental Sustainability at the Core</h4>\r\n                        <div class=\"row \">\r\n                            <div class=\"col-md-12 \">\r\n                                <p>Preserving our planet is non-negotiable, and SKSSSS is deeply committed to environmental sustainability. Our projects and advocacy efforts aim to safeguard ecosystems, promote renewable energy, combat climate change, and\r\n                                    champion conservation practices for a greener, more sustainable future.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n\r\n                <div class=\"col-md-6 \">\r\n                    <div class=\" \" style=\"display:inline-block;width:5%; \"><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i></div>\r\n                    <div class=\" \" style=\"display:inline-block;width:90%; \">\r\n                        <h4>Our Impactful Collaborations and Success Stories</h4>\r\n                        <div class=\"row \">\r\n                            <div class=\"col-md-12 \">\r\n                                <p>The essence of our impact lies in the collaborative endeavours with like-minded peoples, Govt. &amp; Police Officials, stakeholders, and passionate individuals. Together, we have achieved remarkable milestones, transforming\r\n                                    aspirations into tangible results that uplift communities and drive positive change.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n\r\n            <div class=\"row \" style=\"margin-top:5rem; \">\r\n                <div class=\"col-md-6 \">\r\n                    <div class=\" \" style=\"display:inline-block;width:5%; \"><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i></div>\r\n                    <div class=\" \" style=\"display:inline-block;width:90%; \">\r\n                        <h4>Join Hands for a Better Tomorrow</h4>\r\n                        <div class=\"row \">\r\n                            <div class=\"col-md-12 \">\r\n                                <p>At SKSSSS, our work is not just a mission; it’s a shared commitment to building a better Society. Join us in our journey towards creating lasting impact, fostering inclusivity, and shaping a future where every individual\r\n                                    thrives.\r\n                                </p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6 \">\r\n                    <div class=\" \" style=\"display:inline-block;width:5%; \"><i class=\"fa fa-sign-out \" aria-hidden=\"true \" style=\"color:#0db7eb; \"></i></div>\r\n                    <div class=\" \" style=\"display:inline-block;width:90%; \">\r\n                        <h4>Conclusion</h4>\r\n                        <div class=\"row \">\r\n                            <div class=\"col-md-12 \">\r\n                                <p>SKSSSS remains dedicated to driving change that transcends boundaries, creating ripples of hope, and fostering a world where everyone has the opportunity to thrive. Join us in our pursuit of a brighter, more sustainable\r\n                                    future.\r\n                                </p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"row \" style=\"margin-top:4rem;margin-bottom:5rem; \">\r\n                <div class=\"col-md-1 \"></div>\r\n                <div class=\"col-md-10 \">\r\n\r\n                    <h3 style=\"text-align:center; \"><span style=\"background-color:#0db7e6;color:white;padding:1rem 2.5rem; \">Contact us</span></h3>\r\n                    <p style=\"margin-top:3rem;text-align:center; \">SKSSSS remains dedicated to driving change that transcends boundaries, creating ripples of hope, and fostering a world where everyone<br> has the opportunity to thrive. Join us in our pursuit of a brighter, more sustainable future.</p>\r\n                </div>\r\n                <div class=\"col-md-1 \"></div>\r\n            </div>\r\n        </div>\r\n\r\n\r\n\r\n    </section>                                                                ', 1, '2024-04-26', '2024-05-04 08:36:47'),
(16, 'Our Vision & Mission', '                             <section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss/media/img/vision_img.png\" alt=\"skilling Image\"></p>\r\n    </section>                                                                                                                                                                                                                                                                                                                                                                                    \r\n    <section>\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-8\">\r\n                <div class=\"row\">\r\n                <div class=\"col-md-12\">\r\n                    <div class=\"\">\r\n                        <div class=\"\" style=\"padding:2rem 0rem 0rem 1rem;display:inline-block;width:100%;\">\r\n                            <h4 style=\"color:black;font-size:2rem;\"><span><i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"font-size:2rem;margin-right:1rem;color: #0db7e6;\"></i></span>Vision</h4>\r\n                        </div>\r\n                        <div class=\"\" style=\"margin-top:-2rem;padding:0rem 0rem 1rem 1rem;display:inline-block;width:100%;\"><br>\r\n                            <p style=\"color:black;\">Our Vision \"We envision a just and equal society based on human values of unity, equality and fraternity so that no one remains unhealthy, uneducated unemployed and exploited.\"</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-12 mt-33\">\r\n                    <div class=\"\">\r\n                        <div class=\"\" style=\"padding:2rem 0rem 0rem 1rem;display:inline-block;width:100%;\">\r\n                        <h4 style=\"color:black;font-size:2rem\"><span><i class=\"fa fa-sign-out\" aria-hidden=\"true\" style=\"font-size:2rem;margin-right:1rem;color: #0db7e6;\"></i></span> Mission</h4>\r\n                        </div>\r\n                        <div class=\"\" style=\"margin-top:-2rem;padding:0rem 0rem 1rem 1rem;display:inline-block;width:100%;\"><font color=\"#424242\" style=\"background-color: rgb(156, 156, 148);\"><br>\r\n                            </font><p><font style=\"background-color: #FFF2E1;\" color=\"black\">Our Mission By promoting sustainable development as liberating force for achieving social justice, economic growth and self-reliance.\"</font></p>\r\n                        </div><font style=\"background-color: rgb(255, 255, 0);\" color=\"#424242\">\r\n                    </font></div>\r\n                </div>\r\n            </div>\r\n                </div>\r\n                <div class=\"col-md-4 mt-20\">\r\n                    <p class=\"mt-22\"><img src=\"http://localhost/skssss_1/media/images/miss_vis.jpg\" alt=\"img_1\" style=\"height:28rem;\"></p>\r\n                    \r\n                </div>\r\n            </div>\r\n           \r\n\r\n\r\n        </div>\r\n    </section>                                                                                                                                                                                                                                                                                                                                ', 1, '2024-04-26', '2024-05-21 04:53:53'),
(17, 'Approach & Strategies', '                                        \r\n\r\n\r\n                                                                                                                                                                                                                                                \r\n<section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss/media/img/new_img.JPG\" alt=\"skilling Image\"></p>\r\n    </section>    \r\n\r\n    <section style=\"margin-top:-4.5rem;\">\r\n        <div class=\"container\">\r\n        <div class=\"row\">\r\n                <div class=\"col-md-2\"></div>\r\n                <div class=\"col-md-8\">\r\n                    <h3 style=\"text-align:center;color:black;color:#b70000;font-size:2rem;\"><strong><i class=\"fa fa-handshake-o\" aria-hidden=\"true\"></i><span><img src=\"http://localhost/skssss/media/images/semicolon.png\" alt=\"\" style=\"height:3rem;\"></span>&nbsp;&nbsp;Through these diverse approach and PICKET strategies, SKSSSS strives to create a positive impact on society and contribute to the holistic development of the covered population<span><img src=\"http://localhost/skssss/media/images/semicolon_1.png\" alt=\"\" style=\"height:3rem;\"></span></strong></h3>\r\n                </div>\r\n                <div class=\"col-md-2\"></div>\r\n            </div>\r\n        </div>\r\n    </section>\r\n\r\n<section>\r\n    <div class=\"container\">\r\n    <div class=\"row\">\r\n<div class=\"col-sm-4 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n<p class=\"mt-22\"><img src=\"http://localhost/skssss/media/img/policy.png\" alt=\"img_1\" style=\" height:28rem;border-radius:1rem;margin-top: 2rem;\"></p>\r\n</div>\r\n<div class=\"col-sm-8 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n    <div class=\"\" style=\"border:1px solid #d1b694;border-radius:0.5rem;height:28rem;margin-top:2rem;background-color:#f7e6d0;\">\r\n        <p style=\"padding:5rem 0rem 0rem 2rem;color:black;\"><span style=\"font-size:2.4rem;color:#932323;\"><b>Policy</b></span><span style=\"font-size:1.5rem;color:#932323;font-weight:600;\">&nbsp;&nbsp;for prevention, protection, prosecution</span></p> <br>\r\n        <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">It is important to ensure parity in the enforcement of laws, and special laws must prevail over customary or personal laws.</p>\r\n        <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">The effective implementation and enforcement of existing laws and policies that prohibit child marriage along with swift and decisive justice delivery mechanism are most important steps in checking the prevalence of this crime against children. When prevention of crime is incorporated as a policy, it ensures that the state machinery as well as citizens feel responsible and accountable to prevent child marriage.</p>\r\n        </div>\r\n</div>\r\n    </div>\r\n    </div>\r\n</section>\r\n\r\n\r\n\r\n<section>\r\n    <div class=\"container\">\r\n    <div class=\"row\">\r\n    \r\n    <div class=\"col-sm-8 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n        <div class=\"\" style=\"border:1px solid #d1b694;border-radius:0.5rem;height:32rem;margin-top:2rem;background-color:#f7e6d0;\">\r\n            <p style=\"padding:5rem 0rem 0rem 2rem;color:black;\"><span style=\"font-size:2.4rem;color:#932323;\"><b>Investment</b></span><span style=\"font-size:1.5rem;color:#932323;font-weight:600;\">&nbsp;&nbsp;in infrastructure, incentivisation and institutions:</span></p> <br>\r\n            <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">Investing in child protection institutions, education, healthcare, justice delivery, and rehabilitation framework builds layers which work to prevent and protect children from abuse and exploitation apart from providing legal and mental health support for girls in child marriages.</p>\r\n             <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">Infrastructure to support girls at imminent risks of marriages, like institutional alternative care and residential educational facilities are urgently needed to stop their marriages, abuse and exploitation, and provide them with resilient alternatives.</p>\r\n             <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">Incentives in the form of conditional cash transfers have shown impact in communities to keep girls in schools delaying marriage decisions. Universalization of these to at-risk families has the potential to stop child marriages and trafficking and abuse of girls for both labour and sexual exploitation.</p>\r\n           </div>\r\n       \r\n    </div>\r\n    <div class=\"col-sm-4 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n    <p class=\"mt-22\"><img src=\"http://localhost/skssss/media/img/finance.png\" alt=\"img_1\" style=\" height:28rem;border-radius:1rem;margin-top: 4rem;\"></p>\r\n    </div>\r\n        </div>\r\n        </div>\r\n    </section>\r\n\r\n\r\n    <section>\r\n        <div class=\"container\">\r\n        <div class=\"row\">\r\n    <div class=\"col-sm-4 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n    <p class=\"mt-22\"><img src=\"http://localhost/skssss/media/img/convergence.png\" alt=\"img_1\" style=\" height:28rem;border-radius:1rem;margin-top: 2rem;\"></p>\r\n    </div>\r\n    <div class=\"col-sm-8 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n    \r\n        <div class=\"\" style=\"border:1px solid #d1b694;border-radius:0.5rem;height:28rem;margin-top:2rem;background-color:#f7e6d0;\">\r\n            <p style=\"padding:5rem 0rem 0rem 2rem;color:black;\"><span style=\"font-size:2.4rem;color:#932323;\"><b>Convergence</b></span><span style=\"font-size:1.5rem;color:#932323;font-weight:600;\">&nbsp;&nbsp;which equips all the stakeholders to combat child marriage:</span></p> <br>\r\n            <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">Enhancing knowledge empowers children, especially boys, to say no to child marriage. When a young man refuses to marry a minor girl, he breaks the cycle of generations of conditioning. It also gives agency to girls to raise their voice and complain when they are forced for marriage against their will or in violation of law. When children, parents, community members and stakeholders participate in decision making equipped with correct and latest knowledge, it can lead to collective action to prevent child marriage.</p>\r\n            </div>\r\n    </div>\r\n        </div>\r\n        </div>\r\n    </section>\r\n\r\n\r\n<section>\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n\r\n        <div class=\"col-sm-8 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n            <div class=\"\" style=\"border:1px solid #d1b694;border-radius:0.5rem;height:28rem;margin-top:2rem;background-color:#f7e6d0;\">\r\n                <p style=\"padding:5rem 0rem 0rem 2rem;color:black;\"><span style=\"font-size:2.4rem;color:#932323;\"><b>Knowledge</b></span><span style=\"font-size:1.5rem;color:#932323;font-weight:600;\">&nbsp;&nbsp;of departments, governments and stakeholders in the community:</span></p> <br>\r\n                <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">All schemes and interventions geared towards the protection, prevention, education, health and awareness of children and adults affected by child marriage need to operate in sync with each other. Child participation and empowerment is at the core of such convergence aimed at child centric community development.</p>\r\n                </div>\r\n</div>\r\n<div class=\"col-sm-4 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n<p class=\"mt-22\"><img src=\"http://localhost/skssss/media/img/knowedge.png\" alt=\"img_1\" style=\" height:28rem;border-radius:1rem;margin-top: 4rem;\"></p>\r\n</div>\r\n    </div>\r\n    </div>\r\n</section>\r\n\r\n\r\n\r\n\r\n<section>\r\n    <div class=\"container\">\r\n    <div class=\"row\">\r\n        <div class=\"col-sm-4 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n            <p class=\"mt-22\"><img src=\"http://localhost/skssss/media/img/echosysteII.png\" alt=\"img_1\" style=\" height:28rem;border-radius:1rem;margin-top: 4rem;\"></p>\r\n            </div>\r\n    <div class=\"col-sm-8 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n        <div class=\"\" style=\"border:1px solid #d1b694;border-radius:0.5rem;height:28rem;margin-top:2rem;background-color:#f7e6d0;\">\r\n            <p style=\"padding:5rem 0rem 0rem 2rem;color:black;\"><span style=\"font-size:2.4rem;color:#932323;\"><b>Ecosystem</b></span><span style=\"font-size:1.5rem;color:#932323;font-weight:600;\">&nbsp;&nbsp;where child marriage does not thrive:</span></p> <br>\r\n            <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">Central to the PICKET strategy is an ecosystem where child marriage is non-existent. In a society where child marriage is pervasive, multi-pronged intervention at all levels is required. To change the societal perception, behaviour and acceptance towards child marriage, the response at scale requires and ecosystem level retaliation.</p>\r\n            </div>\r\n    </div>\r\n        </div>\r\n        </div>\r\n    </section>\r\n\r\n\r\n    <section>\r\n        <div class=\"container\">\r\n        <div class=\"row\">\r\n    <div class=\"col-sm-8 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n    \r\n        <div class=\"\" style=\"border:1px solid #d1b694;border-radius:0.5rem;height:28rem;margin-top:2rem;background-color:#f7e6d0;\">\r\n            <p style=\"padding:5rem 0rem 0rem 2rem;color:black;\"><span style=\"font-size:2.4rem;color:#932323;\"><b>Technology</b></span><span style=\"font-size:1.5rem;color:#932323;font-weight:600;\">&nbsp;&nbsp;for monitoring and deterrence to combat child marriage:</span></p> <br>\r\n            <p style=\"text-align:justify;padding:0px 2rem 0rem 2rem;color:black;\">Enabling real-time attendance data analysis will help reduce child trafficking, child marriage and drop-out rate in schools. Different states are already using technology for awareness campaigns, supporting and monitoring programme interventions, augmenting education and skills outreach. The use off machine learning and artificial intelligence needs explorations in support of child protection and creating a safe and harm-free ecosystem for children.</p>\r\n            </div>\r\n    </div>\r\n    <div class=\"col-sm-4 mb-3 mb-sm-0\" style=\"padding:1rem;\">\r\n        <p class=\"mt-22\"><img src=\"http://localhost/skssss/media/img/technology.png\" alt=\"img_1\" style=\" height:28rem;border-radius:1rem;margin-top: 2rem;\"></p>\r\n        </div>\r\n        </div>\r\n        </div>\r\n    </section>\r\n\r\n\r\n        \r\n        \r\n        <br><br><br>\r\n\r\n\r\n\r\n\r\n\r\n                                                                                                                                                                                                                                ', 1, '2024-04-26', '2024-05-21 05:13:17'),
(18, 'Leadership', '                                                            <p><br></p>                                                ', 1, '2024-04-26', '2024-04-26 08:12:24'),
(19, 'Governance', '                                                                      <p><img src=\"http://localhost/skssss_1/media/images/gov_img_1.jpeg\" alt=\"gov_img_1\" style=\"margin-top:-7rem;\"></p>\r\n                                                                                                                ', 1, '2024-04-26', '2024-05-13 06:57:55'),
(20, 'Our Mentors', '                                                                                        Enter Page content <strong>here</strong>\r\n                                                                            ', 1, '2024-04-26', '2024-04-26 08:19:06'),
(21, 'Meet our Team', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_1.jpeg\" alt=\"\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-5 temConMan\" style=\"padding-right:2rem;\">\r\n                <h3><span style=\"color:#b71818;font-size:2.5rem;font-weight:700;margin-left:18rem;\">Pradeep Mishra</span></h3>\r\n                 <p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:22rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">-----<span></span></span></p>\r\n                <p style=\"text-align:justify;padding-right:9rem;\">Pradeep coordinate the overall functioning of organization. He has over 30 years of experience in development sector with focus on local self governance, decentralized planning & monitoring, child rights with leading development organizations\r\n                    like Actionaid, PCI and UNICEF in managing large scale projects. He played key role in decentralized local planning with a vivid focus in process design, capacity building of planning team, elected representatives and Govt. functionaries.\r\n                    He holds PG-Dip-in-Rural Management. from LN Mishra institute, Patna</p>\r\n            </div>\r\n            <div class=\"col-md-2\"></div>\r\n        </div>\r\n       </section>\r\n\r\n       <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_2.jpeg\" alt=\"\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-6 temConMan\">\r\n                <h3><span style=\"color:#b71818;font-size:2.5rem;margin-left:18rem;font-weight:700;\">Sanjeev Kumar, Sr.</span></h3>\r\n<p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:18rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">Programme Manager</span></p>\r\n                    <p style=\"text-align:justify;padding-right:9rem;\">\r\n                    Sanjeev has more than two decades of professional experience with focus on child rights, girl child education and livelihood promotion. Sanjeev has worked with many national and international non profit organization and UN agency like DFID, UNICEF, UNODC, DEHAT-CRY and Ray Welfare Trust, Delhi. Saral Services, Secudrabad.\r\n                    He possess Master in Sociology and ADCPA from Apple Computers (UK).\r\n                   </p>\r\n            </div>\r\n            <div class=\"col-md-1\"></div>\r\n        </div>\r\n       </section>\r\n\r\n       <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_3.jpeg\" alt=\"\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-6 temConMan\" style=\"margin-top:-0.1rem;\">\r\n                <h3><span style=\"color:#b71818 ;font-size:2.5rem;text-align:center;font-weight:700;margin-left:21rem;\">Ajay Barnwal</span></h3>\r\n<p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:19rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">Project Manager</span></p>\r\n                    <p style=\"text-align:justify;padding-right:9rem;\">\r\n                        Ajay coordinates the overall functioning of our Siwan Office and manages Ensuring Access to Justice for Children Project. He has over 25 years of experience in programme planning, programme management of development sector with focus on Prevention of HIV- AIDS, strengthening public health system, child rights with leading development organizations like NACO, PCI, FHI and many NGOs of repute in managing large scale projects. He played key role in decentralized local planning with a vivid focus in process design, capacity building of project team, elected representatives and Govt. functionaries. He holds master in sociology and PGPM&IR from Allahabad Bittu Kumar,\r\n                   </p>\r\n            </div>\r\n            <div class=\"col-md-1\"></div>\r\n        </div>\r\n       </section>\r\n\r\n       <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_4.jpeg\" alt=\"\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-6 temConMan\">\r\n                <h3><span style=\"color:#b71818;font-size:2.5rem;margin-left:21rem;font-weight:700;\">Bittu Kumar</span></h3>\r\n<p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:17rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">Project Coordinator-TI</span></p>\r\n                    <p style=\"text-align:justify;padding-right:9rem;\">\r\n                        Bittu has over a decade long experience working in IT sector and specialized in digital marketing. He has well versed in handling large set of data and managing MIS. He has worked in many reputed companies like WIPRO, EUREKA. Presently he looking and managing the Targeted Intervention project sponsored by Bihar State AIDS Control Society (BSACS).\r\n                   </p>\r\n            <p style=\"text-align:justify;\">He is MA in Phycology and Hons. Diploma in Computer Application</p>\r\n\r\n            </div>\r\n            <div class=\"col-md-1\"></div>\r\n        </div>\r\n       </section>\r\n\r\n       <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_5.jpeg\" alt=\"\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-6 temConMan\" style=\"margin-top:0.2rem;\">\r\n                <h3><span style=\"color:#b71818 ;font-size:2.5rem;margin-left:17rem;font-weight:700;\">Sanjay Prasad Yadav </span></h3>\r\n<p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:20rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">Soft Skill Trainer</span></p>\r\n                    <p style=\"text-align:justify;padding-right:9rem;\">\r\n                        Sanjay coordinates the overall project on IT based and backward forward linkage for young student of \r\n                        Kushal Yuva Programme. He has over 20 years of experience in development sector with focus on Child \r\n                        Protection, Youth Development, Soft Skill & Training He has worked for many reputed organization like: \r\n                        National Institute of Entrepreneurship & Small Business Development (NISBUD), Foster Pvt Ltd. and Plan \r\n                        India-VIHAN. He played key role in programme coordination, planning and monitoring with a vivid focus \r\n                        in process design, capacity building of team, elected representatives and Govt. functionaries. He holds \r\n                        Msc & MBA,. from BR Ambedkar University, Muzaffarpur\r\n                   </p>\r\n            </div>\r\n            <div class=\"col-md-1\"></div>\r\n        </div>\r\n       </section>\r\n\r\n       <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_6.jpeg\" alt=\"team_img_6\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-6 temConMan\">\r\n                <h3><span style=\"color:#b71818;font-size:2.5rem;margin-left:16rem;font-weight:700;\">Abhay Kumar Yadav</span></h3>\r\n    <p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:19rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">Finance Manager</span></p>\r\n                    <p style=\"text-align:justify;padding-right:9rem;\">\r\n                        Abhay contributes in financial management of organisation. He has decade long experience in financial \r\n                management and accounting. He worked in many corporates and social sector organization like: Bihar \r\n                State Food Corporation, Maa Sharda Agencies Pvt. Ltd, Garg Iron Meals Pvt. Ltd, Alok Chandra & Co. \r\n                in taxation and financial compliances. Apart from MS Office he has well command over accounting \r\n                software applications Tally ERP 9.0 and Prime.\r\n                He holds bachelor of commerce, Honours in Accounts and Stat from JP University.\r\n                   </p>\r\n            </div>\r\n            <div class=\"col-md-1\"></div>\r\n        </div>\r\n       </section>\r\n\r\n       <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_7.jpeg\" alt=\"\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-6 temConMan\">\r\n                <h3><span style=\"color:#b71818 ;font-size:2.5rem;margin-left:19rem;;font-weight:700;\">Prakash Kumar</span></h3>\r\n <p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:20rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">Accountant</span></p>\r\n                    <p style=\"text-align:justify;padding-right:9rem;\">\r\n                        A Master in Library Science (M.lib) Prakash Kumar contributes in our solid-waste management project. \r\n                        He also contributes in up keep our books resource materials of the organization. He has seven \r\n                        years long experience in social sector. He worked in many isocial sector organization like: Vision \r\n                        India Foundation, Shabd Vesha news chanell as journalist. Apart from this he is well verse trainer \r\n                        in aqua culture and a certified trainer from C.V Raman University and MORD.\r\n                   </p>\r\n            </div>\r\n            <div class=\"col-md-1\"></div>\r\n        </div>\r\n       </section>\r\n\r\n       <section>\r\n        <div class=\"row\" style=\"padding-top:3rem;padding-bottom:2rem;\">\r\n            <div class=\"col-md-1\"></div>\r\n            <div class=\"col-md-4\">\r\n                <img src=\"https://test.camwel.com/skssss/media/menImg/img_8.jpeg\" alt=\"\" class=\"teaImgMan\">\r\n            </div>\r\n            <div class=\"col-md-6 temConMan\">\r\n                <h3><span style=\"color:#b71818;font-size:2.5rem;margin-left:20rem;font-weight:700;\">Shalini Bharti</span></h3>\r\n<p><span style=\"background-color:#efefef;padding: 0.6rem 4.4rem;margin-left:20rem;border: 1px solid #d2d2d2;color:#b71818;font-weight:600;border-radius:2rem;\">Manager HR</span></p>\r\n                    <p style=\"text-align:justify;padding-right:9rem;\">\r\n                        A bachelor in education (B.ed) and MBA in Human Resource Shalini contributes in counseling girl \r\n                        child victim of child marriage and child sexual abuse. Additionally, she also contributes in human \r\n                        resource functions of the organization. She has seven years long experience in social sector. She \r\n                        worked in many educational institutions and social sector organization like: Child Line Foundation, \r\n                        Oasis Educational Society as admin and project manager. She is well verse in psychological counseling \r\n                        MS Office\r\n                   </p>\r\n            </div>\r\n            <div class=\"col-md-1\"></div>\r\n        </div>\r\n       </section>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 1, '2024-04-26', '2024-05-06 06:23:56'),
(22, 'Reach & Presence', '                                                                                                                                                                                                            <section>\r\n        <div class=\"container\">\r\n            <div class=\"row\" style=\"margin-top:3rem;\">\r\n                <div class=\"col-md-6\">\r\n                    <div class=\"\">\r\n                        <h4 style=\"text-align:center;background-color:#0db7e6;color:white;padding:1rem 2.5rem;\">Companionship</h4>\r\n                        <p><img src=\"http://localhost/skssss_1/media/map.jpeg\" style=\"height:44rem;\" alt=\"img\" title=\"img\"></p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6\">\r\n                    <div class=\"\">\r\n                        <h4 style=\"text-align:center;background-color:#0db7e6;color:white;padding:1rem 2.5rem;\">Coming soon...</h4>\r\n                        <p style=\"text-align:center;margin-top:1rem;height:44rem;border:1px solid #d2d2d2;\">Coming soon ...</p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>                                                                                                                                                                ', 1, '2024-04-26', '2024-05-13 07:00:07'),
(23, 'Impact Stories', '                                                                                                                                               <section>\r\n        <p style=\"text-align:center;\"><img src=\"http://localhost/skssss_1/media/images/headeing.jpg\" alt=\"images/headeing\" style=\"margin-top:-8rem; height: 6rem;\"></p>\r\n    </section>\r\n\r\n\r\n                    <section>\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-4\">\r\n                    <p><img src=\"https://test.camwel.com/skssss/media/images/impact_img_1.jpg\" alt=\"impact_img_1\" style=\"height:32rem;\"></p>\r\n                    <p style=\"text-align:center;font-weight:700;font-size:1rem;\">Nutan with her Dream Machine</p><br>\r\n                    <p style=\"color:red;font-weight:700;\">Stitching Dreams into Reality</p>\r\n                    <p style=\"text-align:justify;\">Nutan, a 17-year-old girl from the humble village of Kalyanpur, faced the stark reality of poverty and limited opportunities. Despite her aspirations to continue her education, Nutan was forced to drop out of school to support her\r\n                        family by assisting her mother with household chores. In the midst of her challenges, Nutan\'s life took a dramatic turn when her parents arranged her marriage due to their dire financial situation. With the wedding date set for\r\n                        December 11, 2023,\r\n                    </p>\r\n                </div>\r\n                <div class=\" col-md-5\" style=\"padding:0rem 4rem;\">\r\n                    <p class=\"mb-2\" style=\"text-align:justify;\">Nutan\'s dreams seemed to fade away as she faced an uncertain future. However, fate intervened in the form of the Child Helpline and Access to Justice for Children team, who became aware of Nutan\'s situation and stepped into offer guidance\r\n                        and support. Through counseling, Nutan\'s parents were realised about the detrimental impact of child marriage, leading them to agree to postpone the marriage until Nutan reached the age of 18.\r\n                        <br><br> During the counseling sessions, Nutan shared her passion for sewing and her desire to earn a livelihood to support her education and future family. Recognizing Nutan\'s determination and ambition, the team bestowed upon\r\n                        her a precious gift - a sewing machine.\r\n                        <br><br> With the sewing machine in hand, Nutan embarked on a journey of self-reliance and empowerment. She began stitching clothes for her neighbors, earning an income that not only supported her own expenses but also fueled her\r\n                        dreams of education and independence.\r\n                        <br><br> In Nutan\'s own words, \"This sewing machine has given wings to my dreams. I no longer see myself as just an ordinary village girl. I am filled with a desire to achieve something meaningful. I am deeply grateful to the SKSSSS\r\n                        organization for their unwavering support.\"\r\n                        <br><br> Nutan\'s story is a powerful testament to the transformative impact of empowerment initiatives and the resilience of the human spirit. Through determination and support, Nutan is stitching her dreams into reality, inspiring\r\n                        others to believe in the power of hope and opportunity.\r\n                    </p>\r\n                </div>\r\n                <div class=\"col-md-3 \">\r\n                    <p><img src=\"https://test.camwel.com/skssss/media/images/impact_main_img.PNG\" alt=\"impact_main_img\" style=\"height:50rem;\"></p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>\r\n                                                                                                                                                                ', 1, '2024-04-26', '2024-05-13 07:07:51'),
(24, 'Awards & Recognition', '                                        <p>Coming Soon&nbsp;</p><p><br></p><ol><li>jksfhjksdfhdskjhfkj adkhfhjsdb</li></ol><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>                                ', 1, '2024-04-26', '2024-04-26 08:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `status`, `created_at`, `update_at`) VALUES
(4, 'Survey of out of school children in sample villages of Vaishali', 'SKSSSS is conducting a survey to the out of school children of the Sample Villages of Vaishali. Now we are finding real status of education in rural children.', 1, '2024-02-21', '2024-02-21 09:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `resource_menu`
--

CREATE TABLE `resource_menu` (
  `id` int(11) NOT NULL,
  `sub_menu` varchar(111) NOT NULL,
  `content` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource_menu`
--

INSERT INTO `resource_menu` (`id`, `sub_menu`, `content`, `status`, `created_at`, `update_at`) VALUES
(10, 'Annual Report', 'Enter Page content here', 1, '2024-05-07', '2024-05-07 08:30:51'),
(11, 'Policies', '                                                                                                                                                                                                                                                                    <section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss/media/img/policies.png\" alt=\"skilling Image\"></p>\r\n    </section>   \r\n\r\n\r\n\r\n\r\n<section>\r\n    <div class=\"container\">\r\n\r\n\r\n           <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">1.  \r\n                    Anti Bribery & Anti Corruption\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-3\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/Anti Bribery & Anti Corruption.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\"http://localhost/skssss/media/pdf/Anti Bribery & Anti Corruption.pdf\" download=\"\" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">2.  \r\n                    Anti-Money Laundering\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/Anti-Money Laundering (1).pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/Anti-Money Laundering (1).pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">3.  \r\n                    Child Protection\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/Child Protection.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/Child Protection.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">4.  \r\n                    Code of Conduct & Conflict of Interest\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/Code of Conduct & Conflict of Interest.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/Code of Conduct & Conflict of Interest.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">5.  \r\n                    Financial Manual\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/Financial Manual.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/Financial Manual.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">6.  \r\n                    Human Resource Manual\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/Human Resource Manual.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/Human Resource Manual.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">7.  \r\n                    POSH & Sexual Harrassment\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/Non Discrimination Policy.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/Non Discrimination Policy.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">8.  \r\n                    Procurement\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/POLICY - Procurement.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/POLICY - Procurement.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">9.  \r\n                    Non Discrimination Policy\r\n                    </p>   \r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/pdf/POSH & Sexual Harrassment.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>   \r\n                    <p><a href=\" http://localhost/skssss/media/pdf/POSH & Sexual Harrassment.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-md-3\"></div>\r\n        </div>\r\n    \r\n</section>                                                                                                                                                                                    ', 1, '2024-05-07', '2024-05-20 12:44:32'),
(12, 'Our Partner\'s', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            \r\n<section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss/media/images/partners.png\" alt=\"skilling Image\"></p>\r\n    </section>\r\n\r\n\r\n   <section style=\"margin-bottom:4rem;\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                    <marquee behavior=\"\" direction=\"\" onmouseover=\"this.stop();\" onmouseout=\"this.start();\">\r\n                      <p>\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_1.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_2.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_3.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_4.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_5.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_6.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_7.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_8.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_1.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_2.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_3.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_4.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_5.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_6.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_7.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_8.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_1.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_2.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_3.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_4.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_5.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_6.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_7.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                        <img src=\"http://localhost/skssss/media/logo/logo_8.png\" alt=\"\" style=\"height:20rem;margin:0rem 2rem;\">\r\n                      </p>\r\n                    </marquee>\r\n            </div>\r\n        </div>\r\n    </div>\r\n   </section>        \r\n\r\n\r\n\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 1, '2024-05-07', '2024-05-16 04:15:52'),
(13, 'Our Past Project', '                                                Enter Page content <strong>here</strong>\r\n                                            ', 1, '2024-05-07', '2024-05-07 07:55:25'),
(14, 'Legal Document', '                                                                                     <section style=\"margin-left:-15rem;margin-top:-20rem;\">\r\n        <p><img src=\"http://localhost/skssss/media/img/ligal_doc_img.png\" alt=\"skilling Image\"></p>\r\n    </section>   \r\n\r\n\r\n\r\n\r\n<section>\r\n    <div class=\"container\">\r\n\r\n\r\n           <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">\r\n                    1. &nbsp;Registration Certificate SKSSSS\r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-3\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/registration_certificate_skssss.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\"http://localhost/skssss/media/legal_pdf/registration_certificate_skssss.pdf\" download=\"\" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">2.&nbsp;&nbsp;\r\n                    Memorandum\r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/memorandum.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\" http://localhost/skssss/media/legal_pdf/memorandum.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">3.&nbsp;&nbsp;\r\n                    12A Renewal\r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/12a_renewal.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\" http://localhost/skssss/media/legal_pdf/12a_renewal.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">4.&nbsp;&nbsp;\r\n                    80G Renewal\r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/80g_renewal.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\" http://localhost/skssss/media/legal_pdf/80g_renewal.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">5.&nbsp;&nbsp;\r\n                    FCRA Renewal-Certificate 2023\r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/fcra_renewal_certificate_2023.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\" http://localhost/skssss/media/legal_pdf/fcra_renewal_certificate_2023.pdf\" download=\"\" target=\"_blank\r\n                    \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">6.&nbsp;&nbsp;\r\n                    CSR1 Reg Certificate\r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/csr1_reg_certificate.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\" http://localhost/skssss/media/legal_pdf/csr1_reg_certificate.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">7.&nbsp;&nbsp;\r\n                    Pan card skssss\r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/Pan_card_skssss.pdf\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\" http://localhost/skssss/media/legal_pdf/Pan_card_skssss.pdf\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"row\">\r\n            <div class=\"col-md-1\"></div>\r\n                 <div class=\"col-md-5\">\r\n                    <p style=\"background-color: #EDD8BE;padding: 0.6rem 1.8rem;color: black;border-radius: 0.3rem;\r\n                    border: 1px solid #dfbe96;border-bottom: 5px solid #e3c49e;\">8.&nbsp;&nbsp;\r\n                    SKSSSS Certificate \r\n                    </p>&nbsp;&nbsp;&nbsp;\r\n                </div>\r\n                <div class=\"col-md-4\" style=\"display:flex;margin-top:0.6rem;\">\r\n                <p><a href=\"http://localhost/skssss/media/legal_pdf/certificate.png\" target=\"_blank\" style=\"padding: 0.5rem 1.4rem;background-color: #09A3CB;border: 2px solid #7cdcf5;\r\n                    border-bottom: 5px solid #0c93b7;color: white;font-weight: 600;\">View</a></p>&nbsp;&nbsp;&nbsp;\r\n                    <p><a href=\" http://localhost/skssss/media/legal_pdf/certificate.png\" download=\"\" target=\"_blank\r\n   \" style=\"padding: 0.5rem 1.4rem;background-color: green;border: 2px solid #0eb50e;border-bottom: 5px solid #00a100;color: white;font-weight: 600;\">Download</a></p>\r\n                </div>\r\n            <div class=\"col-md-3\"></div>\r\n            </div>\r\n\r\n       \r\n        </div>\r\n    \r\n    </section>                                                                  ', 1, '2024-05-20', '2024-05-21 04:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `company_url` varchar(200) NOT NULL,
  `default_timezone` int(11) NOT NULL,
  `session_timeout` int(11) NOT NULL,
  `inactive_timeout` int(11) NOT NULL,
  `max_file_size` int(11) NOT NULL,
  `allowed_file_types` varchar(200) NOT NULL,
  `default_time_format` varchar(100) NOT NULL,
  `default_date_format` varchar(100) NOT NULL,
  `default_date_time_format` varchar(100) NOT NULL,
  `updates_enabled` int(11) NOT NULL,
  `error_reporting` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `company_name`, `company_address`, `company_url`, `default_timezone`, `session_timeout`, `inactive_timeout`, `max_file_size`, `allowed_file_types`, `default_time_format`, `default_date_format`, `default_date_time_format`, `updates_enabled`, `error_reporting`) VALUES
(1, 'Skssss Admin', 'Patna', 'http://skssss.org/', 49, 60, 0, 10000000, 'jpg,JPG,JPEG,jpeg,png,PNG,GIF,gif,doc,DOC,docx,DOCX,pdf,PDF,RAR,rar,ZIP,zip', 'h:i:A', 'j M, Y', 'd-m-Y h:i:s A', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `doc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `admin_type` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `show_password` text NOT NULL,
  `card_no` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `father_name` varchar(100) NOT NULL,
  `spous_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `highest_education` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `addhar_no` varchar(50) NOT NULL,
  `created_by_user_type_id` varchar(10) NOT NULL,
  `basic` varchar(15) NOT NULL,
  `hra` varchar(12) NOT NULL,
  `conv` varchar(12) NOT NULL,
  `others` varchar(15) NOT NULL,
  `incentive` varchar(12) NOT NULL,
  `salary` int(11) NOT NULL DEFAULT '0',
  `salary_mode` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `salary_review_date` date NOT NULL,
  `salary_review_id` int(11) NOT NULL,
  `sick_leave` varchar(5) DEFAULT '0',
  `casual_leave` varchar(5) DEFAULT '0',
  `earned_leave` varchar(5) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `photo` varchar(255) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `device_token` varchar(255) NOT NULL,
  `uuid` varchar(200) NOT NULL,
  `esic_no` varchar(55) NOT NULL,
  `uan_no` varchar(55) NOT NULL,
  `salary_rule` int(11) NOT NULL,
  `bank_name` varchar(55) NOT NULL,
  `ac_no` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `admin_type`, `email`, `password`, `show_password`, `card_no`, `name`, `father_name`, `spous_name`, `dob`, `highest_education`, `address`, `mobile`, `gender`, `addhar_no`, `created_by_user_type_id`, `basic`, `hra`, `conv`, `others`, `incentive`, `salary`, `salary_mode`, `remarks`, `salary_review_date`, `salary_review_id`, `sick_leave`, `casual_leave`, `earned_leave`, `status`, `photo`, `device_name`, `device_token`, `uuid`, `esic_no`, `uan_no`, `salary_rule`, `bank_name`, `ac_no`) VALUES
(1, '1001', 1, 'admin@g.com', '1593ea35effffa72e44264f78de0a25a', 'admin@g.com', 0, 'Sanjeev Kumar', '', '', '1999-06-16', '', 'Patna', '9874433513', 'Male', '6557567', '1', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0', '0', '0', 1, 'http://skssss.org/uploads/employee/employee(1001).png', '', '', '', '', '', 0, '', ''),
(2, '1002', 1, 'manishtiwary0007@gmail.com', '0d9eeea86b232ae7df40c6c1c1ac912d', '', 0, 'Manish Tiwari', '', '', '1998-08-12', '', 'Patna', '7569852135', 'Male', '74126582', '', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0', '0', '0', 1, 'http://skssss.org/uploads/employee/employee(1001).png', '', '', '', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_menu`
--
ALTER TABLE `activity_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_enquiry`
--
ALTER TABLE `career_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_pay`
--
ALTER TABLE `donate_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_video`
--
ALTER TABLE `gallery_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_menu`
--
ALTER TABLE `resource_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_menu`
--
ALTER TABLE `activity_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_enquiry`
--
ALTER TABLE `career_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `donate_pay`
--
ALTER TABLE `donate_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `executive`
--
ALTER TABLE `executive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `gallery_video`
--
ALTER TABLE `gallery_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resource_menu`
--
ALTER TABLE `resource_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
