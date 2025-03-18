-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 07:15 AM
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
-- Database: `sakhujagroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `blog_detail` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `category_id`, `blog_image`, `title`, `slug`, `blog_detail`, `status`, `created_at`, `updated_at`) VALUES
(6, 4, 'public/upload/blog/7m28YIUOX6vaS17WwNiQFkBCroUcUK58vJzIayig.jpg', 'It is a long established fact that a reader', 'it-is-a-long-established-fact-that-a-reader', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><b style=\"font-family: DauphinPlain; font-size: 24px; text-align: left;\">Why do we use it?</b><br></p><div><br></div><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></div>', 1, '2024-08-29 23:41:04', '2024-08-29 23:41:04'),
(13, 7, 'public/upload/blog/4mGQxiyQ4mA8ki53FLqZc40HdjEGg4VLHYCkZygE.jpg', '1914 translation by H. Rackham', '1914-translation-by-h.-rackham', '<p>\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"<br></p>', 1, '2024-08-30 00:04:12', '2024-08-30 00:04:12'),
(14, 7, 'public/upload/blog/dx2Exv6uVSdg2n1euaBhGz4OWdQX1L5i7LJDI76c.jpg', 'Top 10 Digital Marketing Strategies For Travel Agencies In India', 'top-10-digital-marketing-strategies-for-travel-agencies-in-india', '<h2 id=\"1.-search-engine-optimization-(seo)\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">1. Search Engine Optimization (SEO)</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\"><a href=\"https://www.cotginanalytics.in/seo-company-in-noida/\" style=\"color: rgb(94, 168, 19); transition: 0.5s;\">SEO</a>&nbsp;is a crucial component of digital media advertising strategies that improve a travel agency\'s online presence. Travellers looking for travel services might naturally find your website by optimizing it for search engines. Pay attention to keywords associated with travel packages, prominent destinations in India, and pertinent search terms. Your site\'s position on search engines like Google will increase if you use off-page SEO (creating backlinks from reputable travel websites) and on-page SEO (using relevant keywords in titles, meta descriptions, and content).</p><h2 id=\"2.-content-marketing\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">2. Content Marketing</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">To engage potential customers and establish a travel brand\'s authority, content marketing is essential. Provide interesting and educational content, such as blog entries, travel manuals, and articles, that highlight various locations, advice for travellers, and itinerary ideas. Share travelogues to motivate and inspire other travellers. Users who find your content interesting can share it on digital media, which will improve exposure and enhance website traffic.</p><h2 id=\"3.-social-media-marketing\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">3. Social Media Marketing</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Travel companies find that digital media sites like Facebook, Instagram, and Twitter are good for connecting with consumers. Share visually pleasing data on these sites, such as behind-the-scenes looks at your company\'s activities, user testimonials, and pictures and videos of popular travel places. Organize focused advertising campaigns to please particular people, like honeymooners or young travellers. To develop a hard-core following, interact with your users through polls, contests, and interactive postings.</p><h2 id=\"4.-influencer-marketing\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">4. Influencer Marketing</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Travel companies can effectively grow their users by using influencer marketing as an important strategy. Collaborate with bloggers and travel influencers who are widely known in the travel industry and have a huge fan base. Work together to create sponsored content, such as blogs, Instagram posts, and tour vlogs. Influencers can provide sincere evaluations of your travel offers, and help in the creating of reputation and trust among prospective customers.</p><h3 id=\"5.-pay-per-click-(ppc)-advertising\" style=\"font-weight: 600; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">5. Pay-Per-Click (PPC) Advertising</h3><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">A less expensive way to quickly attract organic traffic to your website is through&nbsp;<a href=\"https://www.cotginanalytics.in/ppc-company-in-noida/\" style=\"color: rgb(94, 168, 19); transition: 0.5s;\">PPC marketing</a>. Target particular tour-related keywords with Google AdWords, such as \"cheapest tour packages\" or \"top travel company in India.\" With PPC campaigns, you can bid and target your budget for the ad, guaranteeing that users who are actively looking for tourism services will see your adverts. In order to gain ROI, track and refine your efforts.</p><h2 id=\"6.-email-marketing\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">6. Email Marketing</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">One of the most effective ways to grow prospects and convert them into consumers is still by email marketing. Collect email addresses through events, social media, and your website. Give your users tailored and pertinent material, such as vacation packages, newsletters, and tour discounts. Send follow-up emails via automation to prospective customers who have shown interest in your services but have not yet created a reservation. Since a large population accesses emails on smartphones, make sure your emails are hassle-free on mobile devices.</p><h2 id=\"7.-video-marketing\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">7. Video Marketing</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">A compelling method of showcasing travel places and experiences is through video marketing. Make excellent videos that showcase vacation destinations, client endorsements, and advice for travellers. Distribute these videos on Facebook, Instagram, and YouTube. Utilize live video capabilities to give a behind-the-scenes peek at your travel business, answer inquiries about travel, and lead virtual tours of well-liked places. In order to draw in potential customers, advertising efforts might also include videos.</p><h2 id=\"8.-mobile-marketing\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">8. Mobile Marketing</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Mobile marketing is important for tourism agencies since more and more people are utilizing their smartphones to reserve their travel packages. Make sure your website loads rapidly and is optimized for mobile devices. Build a smartphone application that makes users browse and reserve tour packages, as well as get offer notifications. Send customers information, reminders, and targeted travel offers using SMS marketing. Creating a connection with tourists who are always on the journey is made easier with mobile marketing.</p><h2 id=\"9.-local-seo\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">9. Local SEO</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">For travel agencies focusing on particular areas, local search engine optimization is important. Incorporate specific keywords into your website\'s optimization, such as \"tour company in Delhi\" or \"Goa travel packages.\" Create a Google My Business profile for your agency and fill it out with the right details such as your residence address, mobile number, and working hours. Urge customers to give good Google reviews so that your rank can be improved in local searches and bring in additional business from the nearby population.</p><h2 id=\"10.-customer-relationship-management-(crm)-and-analytics\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">10. Customer Relationship Management (CRM) and Analytics</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Travel companies can manage user relationships and improve consumer satisfaction by using&nbsp;<a href=\"https://cotgincrm.com/\" style=\"color: rgb(94, 168, 19); transition: 0.5s;\">CRM software</a>. Track consumer interactions, preferences, and feedback with CRM. finding the travel interests of your clients by analyzing their information and adjusting your marketing tactics accordingly. Check the effectiveness of your social media marketing campaigns utilizing analytics tools to measure social media interaction, website interaction, and conversion rates. Make the most of these insights to improve ROI and optimize your tactics.</p><h2 id=\"conclusion\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Conclusion</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">The online visibility and financial success of travel firms in India may be greatly increased by implementing these digital marketing techniques. Reaching and interacting with potential passengers is largely dependent on each method, which ranges from search engine optimization for your website to using influencer marketing and social media. Travel agencies may grow their clientele, establish a solid brand identity, and prosper in the cutthroat travel market by using these digital marketing strategies.</p>', 1, '2024-08-30 00:52:57', '2024-08-30 00:52:57'),
(15, 4, 'public/upload/blog/MXCSMtKkmUogCgNcNCVtUWVXqkeF9wkuaAJYUCwg.jpg', 'How To Increase Website Authority', 'how-to-increase-website-authority', '<p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Website authority is a very common term used in the world of the digital marketing industry. This term refers to the strength of your website, its influence, its SEO performance, and its reputation in the eyes of various search engines like Google. Website authority gives you an idea of the ranking your website will get in the search results.</p><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Search engines give a higher rank to more trusted, valuable, and reliable websites. The higher your website authority; the higher your rank in search results ultimately driving more traffic to your website leading to success and growth in your business. You can improve your visibility and running by increasing your website authority.</p><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Here is a guide to boosting your website authority-</p><h2 id=\"create-high-quality-content\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Create High-Quality Content</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">It is important to write and create&nbsp;<a href=\"https://www.cotginanalytics.in/blog/how-to-write-high-quality-content/\" style=\"color: rgb(94, 168, 19); transition: 0.5s;\">high-quality content</a>&nbsp;that makes a website stand out. Based on your content quality you attract visitors to your website and make them your potential customers. Utilize SEO to create engaging content to boost your website authority. Check the relevancy of the content, write keywords, and connect directly with the topic in which your audience is interested. Make your that your content is informative and provides valuable knowledge. Ensure that your content on the website is well-written and has no grammatical errors or spelling mistakes. Write content that is easy to read and understand. High-quality content engages more audience and also encourages other websites to yours helping you with backlinks as well and ultimately increasing your website authority.</p><h2 id=\"get-quality-backlinks\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Get quality backlinks</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Backlinks are the links generated on another website that direct to your website. If you have more backlinks that is proof that your website has relevant and valuable content and it also tells search engines like Google that your site is trustworthy and authoritative. You can increase your website authority by having high-quality backlinks. You can build backlinks by guest blogging that refer to other articles for other websites in your industry. Usually, companies allow you to add your content link in between their content in return, getting you backlinks and driving organic traffic to your website. &nbsp;It is important to create link-worthy content that has good infographics, and research reports. Reaching out and collaborating with content creators will also help you generate website authority. If you have created good quality content you should immediately contact the influencer industry and ask the content creator to share your website\'s link.</p><h2 id=\"optimize-your-on-page-content\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Optimize your On-page content</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">If you optimize every page on your website with the help of&nbsp;<a href=\"https://www.cotginanalytics.in/seo-company-in-noida/\" style=\"color: rgb(94, 168, 19); transition: 0.5s;\">SEO</a>&nbsp;to improve your search engine ranking, you can increase your website authority. Make sure that your content is optimized properly on each page so that it becomes easy for search engines like Google to understand what your website is about and rank your pages and the site higher. To optimize your on=page content, use relevant and optimized keywords in your content on the website. Use optimized keywords, titles, and descriptions to create high-quality content and engage a large amount of audience on your website, as these are the first things noticed by any reader. You can also use internal linking to increase your website authority in digital marketing.</p><h2 id=\"work-on-ui/ux\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Work on UI/UX</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">Improving your UI (User Interface) means improving the web development quality or looks of your web pages. This attracts more visitors to your website and improves audience engagement. If your UX (user\'s experience) is good, search engines like Google will consider your website trustworthy and rank it higher. You should always check the loading speed, and site navigation so that your ranking is not affected by the slow load speed. Make your site mobile-friendly, as most people operate mobile phones for making any kind of search. So your site should be easily accessible and work on small devices like mobiles and tablets along with laptops. If your site\'s loading speed is low then it may frustrate your users and they might leave the site and never come back affecting your website authority. &nbsp;</p><h2 id=\"enhance-online-visibility\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Enhance online visibility</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">It is very important to build your social media presence. If your social media handle works well and engages more people you can attach your website link to your pots, reels, and stories to direct the users to your website to make a purchase of your products and services. Always take care of regular posting on your account at the scheduled time. Share posts, blogs, videos, articles, and other content regularly to attract more people by creating engaging content. This will drive organic traffic to your website. Engage with your audience by responding to their comments, questions, and questions to build healthy relationships with your customers. This will establish trust and loyalty in your potential audience towards your brand. Collaborate with influencers on social media and ask them to share your content online, this will spread awareness and generate traffic towards your website. &nbsp;Use SEO to optimize your social media content.</p><h2 id=\"update-your-content-regularly\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Update your content regularly</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">If your website’s content is regularly updated, your website will be ranked higher by search engines like Google, as they favour the websites that post fresh content and update it. Adding new content to your website consistently and updating the existing content makes your content relevant and valuable and allows search engines to rank your site higher on search results. Update your old blogs and articles with new and updated content that is up to date and has correct information according to the current time. &nbsp;</p><h2 id=\"conclusion\" style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Barlow, sans-serif;\">Conclusion</h2><p style=\"margin-bottom: 15px; line-height: 1.6; color: rgb(105, 102, 135); font-family: Nunito, sans-serif;\">It is very easy to have website authority in the&nbsp;<a href=\"https://www.cotginanalytics.in/digital-marketing-company-in-noida/\" style=\"color: rgb(94, 168, 19); transition: 0.5s;\">digital marketing</a>&nbsp;industry, especially with the use of SEO. It takes time and effort, to follow the steps to boost website authority. All you need to do is, create high-quality content, and enhance your online visibility and post on social media, regularly update your content on the website, improve user experience and user interface.</p>', 1, '2024-08-30 00:53:57', '2024-08-30 00:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcategory`
--

INSERT INTO `blogcategory` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(4, 'Tech', '2024-08-29 00:39:33', '2024-08-29 00:39:33'),
(7, 'Web', '2024-08-29 07:48:33', '2024-08-29 07:48:33'),
(9, 'Digital', '2024-08-29 23:29:56', '2024-08-29 23:29:56'),
(10, 'new', '2024-09-17 06:52:09', '2024-09-17 06:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_image` varchar(255) NOT NULL,
  `serial_title` varchar(255) NOT NULL,
  `serial_url` varchar(255) DEFAULT NULL,
  `number_episodes` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`id`, `serial_image`, `serial_title`, `serial_url`, `number_episodes`, `languages`, `time`, `status`, `created_at`, `updated_at`) VALUES
(9, '/upload/1729141206_serial_image.jpg', 'Seethe', 'https://www.youtube.com/playlist?list=PL-NHQcYVofkRpH2RV2kUHoMj-LuI8hj0r', '569', 'Kannada', '30', 1, '2024-10-16 23:30:06', '2024-10-16 23:30:06'),
(10, '/upload/1729141348_serial_image.jpg', 'Karodpati ki Beti', NULL, '13', 'Hindi', '20', 1, '2024-10-16 23:32:28', '2024-10-16 23:32:28'),
(11, '/upload/1729141446_serial_image.jpg', 'Kudiwaale  Mundewaale', NULL, '12', 'Punjabi', '30', 1, '2024-10-16 23:34:06', '2024-10-16 23:34:06'),
(12, '/upload/1729141532_serial_image.jpg', 'Salaam Namaste', 'https://youtube.com/playlist?list=PLOa0X-ychIDzjr5F3GzaNV98ZD2C2Li58&si=OofxUx-a--CarjwH', '41', 'Hindi', '20', 1, '2024-10-16 23:35:32', '2024-10-17 00:12:12'),
(13, '/upload/1729141748_serial_image.jpg', 'Nirwasan', NULL, '1', 'Hindi', '30', 1, '2024-10-16 23:39:08', '2024-10-16 23:39:08'),
(14, '/upload/1729142497_serial_image.jpg', 'Mr. Bechara', NULL, '58', 'Hindi', '20', 1, '2024-10-16 23:51:37', '2024-10-16 23:51:37'),
(15, '/upload/1729142945_serial_image.jpg', 'Mamta ki Dor', NULL, '30', 'Hindi', '30', 1, '2024-10-16 23:59:05', '2024-10-16 23:59:05'),
(16, '/upload/1729143010_serial_image.jpg', 'Kabira Khada Bazaar Mein', NULL, '1', 'Hindi', '20', 1, '2024-10-17 00:00:10', '2024-10-17 00:00:10'),
(17, '/upload/1729143149_serial_image.jpg', 'Jurm aur Saza', NULL, '48', 'Hindi', '20', 1, '2024-10-17 00:02:29', '2024-10-17 00:02:29'),
(18, '/upload/1729143652_serial_image.jpg', 'Khiladi the Killer', 'https://youtube.com/playlist?list=PL_JjZ7cBPf6sIC3tX6I6S2XZu0pWY26NX&si=ETKpdKN7tUtSIxZ9', '128', 'Hindi', '30', 1, '2024-10-17 00:10:52', '2024-10-17 00:10:52'),
(19, '/upload/1729144027_serial_image.jpg', 'Chamatkaar', 'https://www.youtube.com/playlist?list=PLNKJJImmGYITTajIgjqVZZyX-qjFSOjpP', '18', 'Hindi', '30', 1, '2024-10-17 00:17:07', '2024-10-17 00:17:07'),
(20, '/upload/1729144273_serial_image.jpg', 'Dushman', 'https://www.youtube.com/playlist?list=PLNKJJImmGYISzsIWNKLSPA_A1_5bS0eS0', '223', 'Hindi', '30', 1, '2024-10-17 00:21:13', '2024-10-17 00:21:13'),
(21, '/upload/1729144496_serial_image.jpg', 'Sauda', 'https://www.youtube.com/playlist?list=PLNKJJImmGYITjY8IbgmnlGjSghooK5mqS', '14', 'Hindi', '30', 1, '2024-10-17 00:24:56', '2024-10-17 00:24:56'),
(22, '/upload/1729144548_serial_image.jpg', 'Bahadur Shah  Zafar', 'https://www.youtube.com/playlist?list=PLNKJJImmGYIS5WYwFhW7XGQPPYSVlrEWU', '14', 'Hindi', '30', 1, '2024-10-17 00:25:48', '2024-10-17 00:25:48'),
(23, '/upload/1729144589_serial_image.jpg', 'Beta', 'https://youtube.com/playlist?list=PLNKJJImmGYITWB34Rp1XcTv-LvUX1l3tt&si=-1f09DsYWhD_JuIB', '54', 'Hindi', '30', 1, '2024-10-17 00:26:29', '2024-10-17 00:26:29'),
(24, '/upload/1729144795_serial_image.jpg', 'Kanoon', 'https://www.youtube.com/playlist?list=PLNKJJImmGYIRJYJJFSSeWs9Q4FjFbtIHk', '116', 'Hindi', '30', 1, '2024-10-17 00:29:55', '2024-10-17 00:29:55'),
(25, '/upload/1729144944_serial_image.jpg', 'Joshiley', 'https://www.youtube.com/playlist?list=PLNKJJImmGYIRHJ8HiO_EsGG90QfvaJy2n', '33', 'Hindi', '40', 1, '2024-10-17 00:32:24', '2024-10-17 00:32:24'),
(26, '/upload/1729144998_serial_image.jpg', 'Main Dilli Hoon', 'https://www.youtube.com/playlist?list=PL_JjZ7cBPf6vRmWjPutlyDASHtRy-Ud8x', '60', 'Hindi', '30', 1, '2024-10-17 00:33:18', '2024-10-17 00:33:18'),
(27, '/upload/1729145158_serial_image.jpg', 'Aap Beeti', 'https://www.youtube.com/playlist?list=PL_JjZ7cBPf6u7ZEapeB9j5mdFz1uibRlk', '201', 'Bengali, Malayalam, Bhojpuri, Tamil, Telugu, Hindi', '30', 1, '2024-10-17 00:35:58', '2024-10-17 02:07:15'),
(28, '/upload/1729145275_serial_image.jpg', 'Maa Shakti', 'https://youtube.com/playlist?list=PLNKJJImmGYIQASVUsCuqOFGB5btag5DBo&si=Atrj6kTpViE-L-3b', '78', 'Hindi, Bengali', '30', 1, '2024-10-17 00:37:55', '2024-10-17 00:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_query`
--

CREATE TABLE `contact_form_query` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `how_can_we_help` varchar(255) NOT NULL,
  `your_query` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_form_query`
--

INSERT INTO `contact_form_query` (`id`, `your_name`, `email`, `phone`, `how_can_we_help`, `your_query`, `created_at`, `updated_at`) VALUES
(1, 'Shivam', 'shivamsaini798@gmail.com', '8057990080', 'Discuss New Project', NULL, '2024-10-16 01:08:21', '2024-10-16 01:08:21'),
(2, 'shivam', 'admin@gmail.com', '0805799008', 'Enquriy for Rights', NULL, '2024-10-16 01:36:27', '2024-10-16 01:36:27'),
(3, 'Rohit Kumar', 'rohitkumar@gmail.com', '1234567890', 'Join Sakhuja Media Group', 'Hii', '2024-10-16 01:39:36', '2024-10-16 01:39:36'),
(4, 'shivam', 'shivamsaini798@gmail.com', '8057990080', 'Enquiry for Rights', 'Testing', '2024-11-12 06:43:41', '2024-11-12 06:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `digital_assets_facebook`
--

CREATE TABLE `digital_assets_facebook` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `channel_logo` varchar(500) NOT NULL,
  `channel_url` varchar(1000) NOT NULL,
  `channel_title` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `digital_assets_facebook`
--

INSERT INTO `digital_assets_facebook` (`id`, `channel_logo`, `channel_url`, `channel_title`, `status`, `created_at`, `updated_at`) VALUES
(12, 'upload/1729140547_channel_logo.jpg', 'https://www.facebook.com/share/ECe8XfLwZRefA5oM/', 'V2 Entertainment', 1, '2024-10-16 23:19:07', '2024-10-16 23:19:07'),
(13, 'upload/1729140594_channel_logo.jpg', 'https://www.facebook.com/share/hpbzVRG7FhPK2kTd/', 'Sakhuja Hindi Series', 1, '2024-10-16 23:19:54', '2024-10-16 23:19:54'),
(14, 'upload/1729140672_channel_logo.jpg', 'https://www.facebook.com/share/gA36uMSa1NBwEuVd/', 'Nimrit TV', 1, '2024-10-16 23:21:12', '2024-10-16 23:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `digital_assets_youtube`
--

CREATE TABLE `digital_assets_youtube` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `channel_logo` varchar(500) NOT NULL,
  `channel_url` varchar(1000) NOT NULL,
  `channel_title` varchar(200) NOT NULL,
  `channel_username` varchar(200) NOT NULL,
  `channel_subscribers` varchar(100) NOT NULL,
  `channel_total_video` varchar(255) NOT NULL,
  `channel_discreption` varchar(2000) NOT NULL,
  `serial_thumbnail1` varchar(200) NOT NULL,
  `serial_url1` varchar(255) NOT NULL,
  `serial_thumbnail2` varchar(255) NOT NULL,
  `serial_url2` varchar(255) NOT NULL,
  `serial_thumbnail3` varchar(255) NOT NULL,
  `serial_url3` varchar(255) NOT NULL,
  `serial_thumbnail4` varchar(255) NOT NULL,
  `serial_url4` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `digital_assets_youtube`
--

INSERT INTO `digital_assets_youtube` (`id`, `channel_logo`, `channel_url`, `channel_title`, `channel_username`, `channel_subscribers`, `channel_total_video`, `channel_discreption`, `serial_thumbnail1`, `serial_url1`, `serial_thumbnail2`, `serial_url2`, `serial_thumbnail3`, `serial_url3`, `serial_thumbnail4`, `serial_url4`, `status`, `created_at`, `updated_at`) VALUES
(16, 'upload/1729077706_channel_logo.jpg', 'https://youtu.be/dt554634r5Y?si=wWrQLyYgu8G-u2vQ', 'Bengali Crime Web Series', 'Bengalicrimewebseries', '1.13M', '415', 'Bengali Crime Thriller Web Series is the best destination for Bengali Serials', 'upload/1729077706_serial_thumbnail1.jpg', 'https://youtu.be/OFj0Xj0vLgA?si=ZBZ3UczFqVpRnsHQ', 'upload/1729077706_serial_thumbnail2.jpg', 'https://youtu.be/8HD3zx28gv4?si=m5XOlp3HrH_FZhH-', 'upload/1729077706_serial_thumbnail3.jpg', 'https://youtu.be/suV7V5EMIc0?si=7WmFs35m2Flv4z1O', 'upload/1729077706_serial_thumbnail4.jpg', 'https://youtu.be/wnbnwKsM7M8?si=dnE3P0V1C5mdkgLA', 1, '2024-10-16 05:48:22', '2024-10-16 06:00:55'),
(17, 'upload/1729079021_channel_logo.jpg', 'https://youtu.be/EErAGTjrEbk?si=pWW984JpiV-Mp_4t', 'V2 Entertainment', 'V2Entertainments', '1.06M', '1.2K', 'Welcome, To our channel that is only one stop destination for all Spiritual Hindi TV Serials.', 'upload/1729079021_serial_thumbnail1.jpg', 'https://youtu.be/PxYZ5SmBwTA?si=yXhofGCYg6lLJ5q1', 'upload/1729079021_serial_thumbnail2.jpg', 'https://youtu.be/164pYL_uqNk?si=fSWE2Cs_aB3MCf6j', 'upload/1729079021_serial_thumbnail3.jpg', 'https://youtu.be/HqiIhNrdwM4?si=YCW-fUKoxtk0nEWr', 'upload/1729079021_serial_thumbnail4.jpg', 'https://youtu.be/5lnXEJn4CPA?si=qz2Xvkdwq1OzbDeh', 1, '2024-10-16 06:13:41', '2024-10-16 06:13:41'),
(18, 'upload/1729080108_channel_logo.jpg', 'https://youtu.be/wPSVg_GkCQc?si=ccuubeqm240KY75V', 'Kailash Serials HD', 'kailashserialshd', '632K', '1.1K', 'On  Kailash Serials HD we upload multiple mythological serials.', 'upload/1729080108_serial_thumbnail1.jpg', 'https://youtu.be/asyaj7XnrTU?si=Cym8y6PcuTMDvj7v', 'upload/1729080108_serial_thumbnail2.jpg', 'https://youtu.be/faKQ1VuW-7U?si=OTB4dKoTAH2tsWfi', 'upload/1729080108_serial_thumbnail3.jpg', 'https://youtu.be/sgq6nUiZhxs?si=48ptaIeUMievgSRg', 'upload/1729080108_serial_thumbnail4.jpg', 'https://youtu.be/fwAE1_w5pdA?si=X1gJveO7Yq9_YxKe', 1, '2024-10-16 06:31:48', '2024-10-16 06:31:48'),
(19, 'upload/1729081387_channel_logo.jpg', 'https://youtu.be/cWC9UQ1ygSY?si=dyjbEcO4L37XeeaE', 'Pin TV Series', 'PinTVSeries', '1.24M', '1.1K', 'On PIN TV Series we upload Popular Hindi TV serials \" Ichhapyaari Naagin & Baalveer Returns\".', 'upload/1729081387_serial_thumbnail1.jpg', 'https://youtu.be/CyP_xEfDbmE?si=kivDAqkzeOFVHa4F', 'upload/1729081387_serial_thumbnail2.jpg', 'https://youtu.be/Tkrcyl5S0Ko?si=tT6FOlyuGFykk3AU', 'upload/1729081487_serial_thumbnail3.jpg', 'https://youtu.be/fDuCvoUXy0M?si=URHMIf3VFZpr2jLU', 'upload/1729081387_serial_thumbnail4.jpg', 'https://youtu.be/_4YhXVEb9wI?si=c_ct5qUx7xk4WX1F', 1, '2024-10-16 06:53:07', '2024-10-16 06:54:47'),
(20, 'upload/1729082015_channel_logo.jpg', 'https://youtu.be/dBhC6w3IA8E?si=wrerQeQD-BCIYunk', 'Fly TV Series', 'flytvseries', '564K', '1.1K', 'On Fly TV Series channel we offer fantasy shows to our audiences .', 'upload/1729082015_serial_thumbnail1.jpg', 'https://youtu.be/wgHYtMVOLOU?si=pUiadZR8vbrPQrzx', 'upload/1729082015_serial_thumbnail2.jpg', 'https://youtu.be/eeexLZVHf0M?si=RwMN5ZEA8iTf9yet', 'upload/1729082015_serial_thumbnail3.jpg', 'https://youtu.be/0an1tqPOMww?si=14WhRY3kfn0v0A4j', 'upload/1729082015_serial_thumbnail4.jpg', 'https://youtu.be/553lPtqd6IY?si=uHpimtZqFZtIub3Y', 1, '2024-10-16 07:03:35', '2024-10-16 07:03:35'),
(21, 'upload/1729082457_channel_logo.jpg', 'https://youtu.be/senmVA6_yHg?si=-9snxp-fSkvr7jGA', 'Prabhu Leela', 'prabhuleela', '1.74M', '1.2K', 'On Prabhu Leela we upload mythological Hindi Serials.', 'upload/1729082457_serial_thumbnail1.jpg', 'https://youtu.be/senmVA6_yHg?si=6s--L3W0PVs1ISrw', 'upload/1729082457_serial_thumbnail2.jpg', 'https://youtu.be/Pj97iEr99y8?si=mAv-tvszPwfm3I1n', 'upload/1729082457_serial_thumbnail3.jpg', 'https://youtu.be/6eFxcJoXonU?si=3nyq7tGHZhCFCNIE', 'upload/1729082457_serial_thumbnail4.jpg', 'https://youtu.be/vHldishLmLk?si=VMrPFN5iI3ZE-dM-', 1, '2024-10-16 07:10:57', '2024-10-16 07:10:57'),
(22, 'upload/1729082968_channel_logo.jpg', 'https://youtu.be/5nQqQQED3Pw?si=1zcgD11xdVVp_LGC', 'BR Chopra and Other TV Serials', 'brchopra671', '5.84M', '2.6K', 'On this channel We provide B.R.CHOPRA\'s , RAVI CHOPRA\'s superhit hindi serials and other TV Serials to our viewers.', 'upload/1729082968_serial_thumbnail1.jpg', 'https://youtu.be/wQZpS-9ubic?si=Ysdm4WZq5FRBlPQo', 'upload/1729082968_serial_thumbnail2.jpg', 'https://youtu.be/u4JZLNmOSpw?si=IKNaVfTEojlaJoIu', 'upload/1729082968_serial_thumbnail3.jpg', 'https://youtu.be/UuOUleUu9vw?si=erWBkY9BWcAzZ9DY', 'upload/1729082968_serial_thumbnail4.jpg', 'https://youtu.be/Ivc9zwcgPjI?si=W0DCDVPFeVlSTHBc', 1, '2024-10-16 07:19:28', '2024-10-16 07:19:28'),
(23, 'upload/1729083473_channel_logo.jpg', 'https://youtu.be/UOkV0YNAMSA?si=UeO4Mbz4w2vQeNzt', 'Suswadu Bangla Khabar', 'Suswadubanglakhabar', '95', '14', 'Suswadu Bangla Khabar offers delicious Bengali Recipes with  intereseting and tasty fusions.', 'upload/1729083473_serial_thumbnail1.jpg', 'https://youtu.be/jtfc2YExlCE?si=-AowJFW3ZvEJkp7Y', 'upload/1729083473_serial_thumbnail2.jpg', 'https://youtu.be/zTGdG0WjCc8?si=VTS3jjayvapi3YfQ', 'upload/1729083473_serial_thumbnail3.jpg', 'https://youtu.be/xhiOaQIQ63U?si=SrowcT74XbEHCcRP', 'upload/1729083473_serial_thumbnail4.jpg', 'https://youtu.be/LeG5e2N6-58?si=lnGe7flQ73U2uPek', 1, '2024-10-16 07:27:53', '2024-10-16 07:27:53'),
(24, 'upload/1729084118_channel_logo.jpg', 'https://youtu.be/4XXzBTFxZJk?si=_7WBMSbiU3I4IY_h', 'Digital Courage Series', 'digitalcourageseries', '135K', '183', 'Digital Courage Series offers you multi genre shows comprising of History, Comedy Action, Thriller and much more', 'upload/1729084118_serial_thumbnail1.jpg', 'https://youtu.be/4IC51qIJ3D4?si=V4Ry5y6oNHntJXox', 'upload/1729084118_serial_thumbnail2.jpg', 'https://youtu.be/r9RwBVzuv3Y?si=0t6t1WSY7k8LxiB5', 'upload/1729084118_serial_thumbnail3.jpg', 'https://youtu.be/QJ6GEHCMh-c?si=JwIVkptrPcFueUlE', 'upload/1729084118_serial_thumbnail4.jpg', 'https://youtu.be/taGeEvoDGYk?si=nQZmvH8xcjHDRNme', 1, '2024-10-16 07:38:38', '2024-10-16 07:38:38'),
(25, 'upload/1729084499_channel_logo.jpg', 'https://youtu.be/mwtuYDfqtEQ?si=18_38U74UdmuQjL6', 'Nimrit TV', 'NimritTV', '137K', '641', 'Nimrit TV offers you multi genre shows comprising of Comedy Action and Thriller.', 'upload/1729084499_serial_thumbnail1.jpg', 'https://youtu.be/MXwgq13zxcQ?si=4T0AOqLRe3EZ7GkC', 'upload/1729084499_serial_thumbnail2.jpg', 'https://youtu.be/fepaNY2zN3U?si=uXKbmEJZIwLo6JV7', 'upload/1729084499_serial_thumbnail3.jpg', 'https://youtu.be/RTKYb4GXbQw?si=ErdFFvSqkfiE2E7i', 'upload/1729084499_serial_thumbnail4.jpg', 'https://youtu.be/_KW9OCYD_MI?si=mPWH5CaKUggQvhei', 1, '2024-10-16 07:44:59', '2024-10-16 07:44:59'),
(26, 'upload/1729084892_channel_logo.jpg', 'https://youtu.be/mhOxOMIzuxI?si=MXUHygGZTeG5QDQo', 'Devi Maa', 'devimaa3728', '2.37M', '619', 'On Devi Maa (देवी माँ) YouTube Channel you can watch Indian devotional video of Gods.', 'upload/1729084892_serial_thumbnail1.jpg', 'https://youtu.be/e0R3GNchxq4?si=Jr2egAtUH02pwARG', 'upload/1729084892_serial_thumbnail2.jpg', 'https://youtu.be/D4lLoppQoIQ?si=aV8WwvfuCPdmKzhR', 'upload/1729084892_serial_thumbnail3.jpg', 'https://youtu.be/UlmFOrv16WY?si=_kSUc-0On9WJzVVw', 'upload/1729084892_serial_thumbnail4.jpg', 'https://youtu.be/js3bSJK-hXA?si=5qPB2d2vuEZ3zGYb', 1, '2024-10-16 07:51:32', '2024-10-16 07:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `employee_of_the_month`
--

CREATE TABLE `employee_of_the_month` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeimage1` varchar(255) NOT NULL,
  `employeeimage2` varchar(255) NOT NULL,
  `employeeimage3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_of_the_month`
--

INSERT INTO `employee_of_the_month` (`id`, `employeeimage1`, `employeeimage2`, `employeeimage3`, `created_at`, `updated_at`) VALUES
(2, 'upload/1727440186_employeeimage1.jpeg', 'upload/1727440186_employeeimage2.jpeg', 'upload/1727440186_employeeimage3.jpeg', '2024-09-27 06:12:58', '2024-09-27 06:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `globalsetting`
--

CREATE TABLE `globalsetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headerlogo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `footerlogo` varchar(255) DEFAULT NULL,
  `instagramlink` varchar(255) NOT NULL,
  `facebooklink` varchar(255) NOT NULL,
  `linkedinlink` varchar(255) NOT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `address_office` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `globalsetting`
--

INSERT INTO `globalsetting` (`id`, `headerlogo`, `favicon`, `footerlogo`, `instagramlink`, `facebooklink`, `linkedinlink`, `twitter_link`, `phone`, `address_office`, `email`, `created_at`, `updated_at`) VALUES
(2, 'upload/1727524621_header.png', 'upload/1726121874_favicon.png', 'upload/1727438107_footer.png', 'https://www.instagram.com/sakhujamediagroup?igsh=MTV1bjlzZTM5a3J3eg==', 'https://www.facebook.com/sakhujamediagroup?mibextid=LQQJ4d', 'https://www.linkedin.com/company/sakhuja-media-group/', 'https://www.facebook.com/sakhujamediagroup?mibextid=LQQJ4d', '0000000000', '811, 812, 814 Block 1 CSP Unit, DLF Capital Greens, Shivaji Marg, New Delhi, 110015', 'contact@sakhujamediagroup.com', '2024-09-12 00:36:47', '2024-10-15 23:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannervideo` varchar(1000) NOT NULL,
  `whoweimage` varchar(255) NOT NULL,
  `whowedescription` varchar(3000) NOT NULL,
  `achievementsimage` varchar(255) NOT NULL,
  `achievementsdescription` varchar(3000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `bannervideo`, `whoweimage`, `whowedescription`, `achievementsimage`, `achievementsdescription`, `created_at`, `updated_at`) VALUES
(3, 'upload/video/1726320180_bannervideo.mp4', 'upload/1726126562_whoweimage.svg', 'Sakhuja Media Group was started in 2020 to connect and entertain audiences through regional and relatable content. During this period of 4 years we have built an audience of more than 15+ Million, we offer a wide range of content of different mediums, subjective of their taste, age, mood, and proximity.', 'upload/1728555732_achievementsimage.png', 'Our strategies have led us to achieve Youtube milestones over a short span of time. Out of our 25+channels,more than 10 Channels have been awarded the prestigious Silver Play Button Award and 5 have received the prestigious Golden Play Button Award.', '2024-09-12 02:06:02', '2024-11-12 06:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `innovativeproductions`
--

CREATE TABLE `innovativeproductions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `innovative_productions` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `innovativeproductions`
--

INSERT INTO `innovativeproductions` (`id`, `innovative_productions`, `status`, `created_at`, `updated_at`) VALUES
(14, '/upload/1728899475_innovative_productions.jpg', 1, '2024-10-14 04:21:15', '2024-10-14 04:21:15'),
(15, '/upload/1729149610_innovative_productions.jpg', 1, '2024-10-17 01:50:10', '2024-10-17 01:50:10'),
(18, '/upload/1729150284_innovative_productions.jpg', 1, '2024-10-17 02:01:24', '2024-10-17 02:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `no_opening` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_description` longtext NOT NULL,
  `opening` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_name`, `slug`, `no_opening`, `experience`, `job_type`, `job_location`, `job_description`, `opening`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Human Resources Specialist', 'human-resources-specialist', '1', '2 to 3 Years', '1', 'Delhi, India', '<h5 class=\"\"><b>Job Description:</b></h5><p>We are looking for a skilled Human Resources Specialist who will recruit, support and develop talent through developing policies and managing procedures. You will be responsible for administrative tasks and you’ll contribute to making the company a better place to work.</p><h5 class=\"\"><b>Responsibilities</b></h5><ul><li>Support the development and implementation of HR initiatives and systems</li><li>Provide counseling on policies and procedures</li><li>Be actively involved in recruitment by preparing job descriptions, posting ads and managing the hiring process</li><li>Create and implement effective onboarding plans</li><li>Develop training and development programs</li><li>Assist in performance management processes</li><li>Support the management of disciplinary and grievance issues</li><li>Maintain employee records (attendance, EEO data etc.) according to policy and legal requirements</li><li>Review employment and working conditions to ensure legal compliance</li></ul><h5 class=\"\"><b><br></b></h5><h5 class=\"\"><b>Requirements and Skills</b></h5><ul><li>Support the development and implementation of HR initiatives and systems</li><li>Provide counseling on policies and procedures</li><li>Be actively involved in recruitment by preparing job descriptions, posting ads and managing the hiring process</li><li>Create and implement effective onboarding plans</li><li>Develop training and development programs</li><li>Assist in performance management processes</li><li>Support the management of disciplinary and grievance issues</li><li>Maintain employee records (attendance, EEO data etc.) according to policy and legal requirements</li><li>Review employment and working conditions to ensure legal compliance</li></ul>', 1, 1, '2024-10-15 02:01:52', '2024-10-15 04:05:47'),
(4, 'Chef', 'chef', '1', '2 to 3 Years', '1', 'New Delhi , India', '<h5 class=\"\"><b>Job&nbsp; Description :</b></h5><p>We are looking for a skilled Chef with a proven experience of 2 to 3 Years, As a Chef you will be responsible for creating recipes for multiple cuisines, working closely with the production team to make cooking videos for our YouTube Channels, experimenting with recipes and explaining recipes to anchors.&nbsp;<br></p><h5 class=\"\"><b>RESPONSIBILITIES</b></h5><ul><li>Creating recipes of multiple cuisines</li><li>Study each recipe and gather all necessary ingredients</li><li>Monitor food stock and place orders</li><li>Experiment with recipes and suggest new ingredients</li><li>Ensure compliance with all health and safety regulations within the kitchen area</li><li>Explaining recipes to anchors</li><li>Making Cooking videos for YouTube and other social media platforms<br><br></li></ul><h5 class=\"\"><b>REQUIREMENTS AND SKILLS</b></h5><ul><li>Must be proficient in spoken English</li><li>Proven work experience as a Chef or coo</li><li>Hands-on experience with various kitchen equipment (e.g. grillers and pasta makers)</li><li>Advanced knowledge of culinary, baking and pastry techniques</li><li>Leadership skills</li><li>Ability to remain calm and undertake various tasks</li><li>Excellent time management abilities</li><li>Up-to-date knowledge of cooking techniques and recipes</li><li>Familiarity with sanitation regulations</li><li>Culinary school diploma preferred</li></ul><div><br></div>', 1, 1, '2024-10-17 01:43:23', '2024-10-17 01:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_data`
--

CREATE TABLE `job_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_profile` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `current_designation` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_data`
--

INSERT INTO `job_data` (`id`, `job_profile`, `full_name`, `email`, `phone`, `linkedin`, `current_designation`, `resume`, `created_at`, `updated_at`) VALUES
(12, 'Human Resources Specialist', 'Rohan Kumar', 'admin@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/rohan_kumar_resume.pdf', '2024-10-15 06:34:28', '2024-10-15 06:34:28'),
(13, 'Human Resources Specialist', 'shivam', 'shivamsaini798@gmail.com', '0805799008', NULL, 'fullstake developer', '/resume/shivam_resume.pdf', '2024-10-15 07:07:43', '2024-10-15 07:07:43'),
(14, 'Human Resources Specialist', 'shivam', 'admin@gmail.com', '0805799008', NULL, 'fullstake developer', '/resume/shivam_resume.pdf', '2024-10-15 07:09:29', '2024-10-15 07:09:29'),
(15, 'Human Resources Specialist', 'rohit', 'admin@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/rohit_resume.pdf', '2024-10-15 07:15:08', '2024-10-15 07:15:08'),
(16, 'Human Resources Specialist', 'Rohan rao', 'ss8156@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/rohan_rao_resume.pdf', '2024-10-15 07:16:22', '2024-10-15 07:16:22'),
(17, 'Human Resources Specialist', 'Mothi Kumar', 'contact@sakhujamediagroup.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/mothi_kumar_resume.pdf', '2024-10-15 07:17:39', '2024-10-15 07:17:39'),
(18, 'Human Resources Specialist', 'Rohit kumar', 'ram@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/rohit_kumar_resume.pdf', '2024-10-15 07:53:42', '2024-10-15 07:53:42'),
(19, 'Human Resources Specialist', 'shivam', 'admin@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/shivam_resume.pdf', '2024-10-16 00:57:54', '2024-10-16 00:57:54'),
(20, 'Human Resources Specialist', 'shubam', 'admin@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/shubam_resume.pdf', '2024-10-16 01:10:24', '2024-10-16 01:10:24'),
(21, 'Human Resources Specialist', 'rohan sharma', 'rohankumar@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/rohan_sharma_resume.pdf', '2024-10-16 01:15:28', '2024-10-16 01:15:28'),
(22, 'Human Resources Specialist', 'shivam', 'admin@gmail.com', '0805799008', 'https://klsdjfkljs', 'fullstake developer', '/resume/shivam_resume.pdf', '2024-10-16 01:18:22', '2024-10-16 01:18:22'),
(23, 'Chef', 'Ritik Kumar', 'ram@gmail.com', '0805799008', 'https://klsdjfkljs', 'web', '/resume/ritik_kumar_resume.pdf', '2024-10-17 01:45:35', '2024-10-17 01:45:35'),
(24, 'Human Resources Specialist', 'Shivam', 'shivamsaini9@gmail.com', '8057990080', 'https://shivam/linkedin', 'fullstake developer', '/resume/shivam_resume.pdf', '2024-11-12 06:34:48', '2024-11-12 06:34:48'),
(25, 'Human Resources Specialist', 'shivam', 'shivamsaini798@gmail.com', '8057990080', 'https://shivam/linkedin', 'fullstake developer', '/resume/shivam_resume.pdf', '2024-11-12 06:42:31', '2024-11-12 06:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_26_055904_create_global_table', 2),
(5, '2024_08_26_070240_create_globalsetting_table', 3),
(24, '2024_08_28_113423_create_globalsetting_table', 4),
(26, '2024_08_28_131353_create_blogcategory_table', 5),
(27, '2024_08_28_131413_create_blog_table', 5),
(29, '2024_08_31_050528_create_adminuser_table', 6),
(30, '2024_09_03_073533_create_permission_tables', 7),
(31, '2024_09_11_124925_add_twitterlink_column_to_global', 7),
(32, '2024_09_11_130641_create_homepage_table', 7),
(33, '2024_09_17_050639_create_digitalassets_youtube_table', 8),
(34, '2024_09_17_051404_create_digital_assets_youtube_table', 9),
(35, '2024_09_18_065829_create_digital_assets_facebook_tabel', 10),
(36, '2024_09_18_070826_create_digital_assets_facebook_table', 11),
(37, '2024_09_27_104536_create_employee_of_the_month_table', 12),
(38, '2024_09_27_125311_create_performer_of_the_month_table', 13),
(39, '2024_09_28_050102_create_team_table', 14),
(40, '2024_10_14_050318_create_innovativeproductions_table', 15),
(41, '2024_10_14_051750_create_innovativeproductions_table', 16),
(42, '2024_10_14_053108_create_innovativeproductions_table', 17),
(43, '2024_10_14_074210_create__productions_studio_table', 18),
(44, '2024_10_14_074734_create_productions_studio_table', 19),
(45, '2024_10_14_110127_create_catalogue_table', 20),
(46, '2024_10_15_052627_create_job_table', 21),
(47, '2024_10_15_065200_create_job_table', 22),
(48, '2024_10_15_072820_create_job_table', 23),
(49, '2024_10_15_095813_create_job_data_table', 24),
(50, '2024_10_16_060734_create_contact_form_query_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('shivamsaini798@gmail.com', 'l1cFXJyv42OFLNZbxfc3A6FEpVdSJb7f1CubvOjWixbfYEmkQh557UJmgGs8uvqx', '2024-10-15 06:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `performer_of_the_month`
--

CREATE TABLE `performer_of_the_month` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeimage1` varchar(255) NOT NULL,
  `employeeimage2` varchar(255) NOT NULL,
  `employeeimage3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `performer_of_the_month`
--

INSERT INTO `performer_of_the_month` (`id`, `employeeimage1`, `employeeimage2`, `employeeimage3`, `created_at`, `updated_at`) VALUES
(1, 'upload/1727442618_employeeimage1.png', 'upload/1727442664_employeeimage2.png', 'upload/1727442509_employeeimage3.png', '2024-09-27 07:28:30', '2024-09-27 07:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productions_studio`
--

CREATE TABLE `productions_studio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studio_productions` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productions_studio`
--

INSERT INTO `productions_studio` (`id`, `studio_productions`, `status`, `created_at`, `updated_at`) VALUES
(7, '/upload/1728899289_studio_productions.jpg', 1, '2024-10-14 04:13:59', '2024-10-14 04:18:09'),
(11, '/upload/1729149715_studio_productions.jpg', 1, '2024-10-17 01:51:55', '2024-10-17 01:51:55'),
(13, '/upload/1729149837_studio_productions.jpg', 1, '2024-10-17 01:53:57', '2024-10-17 01:53:57'),
(14, '/upload/1729149915_studio_productions.jpg', 1, '2024-10-17 01:55:15', '2024-10-17 01:55:15'),
(15, '/upload/1729149989_studio_productions.jpg', 1, '2024-10-17 01:56:29', '2024-10-17 01:56:29'),
(16, '/upload/1729150023_studio_productions.jpg', 1, '2024-10-17 01:57:03', '2024-10-17 01:57:03'),
(17, '/upload/1729150052_studio_productions.jpg', 1, '2024-10-17 01:57:32', '2024-10-17 01:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `full_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(7, 'shivam', 'ss8147774@gmail.com', '$2y$12$BzBySIoWBbAcFhiXQ7mB4eUNzcygDadnHDZWWal7uHwFTJpzavk0m', '2024-07-25 01:23:28', '2024-07-25 01:23:28'),
(8, 'shivam', 'shivamsaini798@gmail.com', '$2y$12$l4PdUzD3BtKpHZ6FL/S0LeC9XBvqBiFUfX1Oeyc2IJPRRHoIHpT5S', '2024-07-25 01:59:49', '2024-07-25 01:59:49'),
(9, 'shivam', 'agent@gmail.com', '$2y$12$AqXc/Ys1UeYpcIGlwu40eOmv.tN.NhGxbfRS3XJjCIsPhrtxHZ8a2', '2024-07-25 02:13:17', '2024-07-25 02:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2mskPCXhojI1xlhXIT43STpmmphLZOjqKRNGAhei', 14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVUtWbGVrcGt1U0MwRUkyTDMwWlR0cTNVd0I5UDJPUnIyb09zN0ZlUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3Qvc2FraHVqYS9wcm9kdWN0aW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTQ7fQ==', 1731745252),
('7R2WvUAL0p8vktATNeNzElTRCWXVvgD3b8pazdss', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3lObkVJRERzV0lHZ3RNMnAwM0VEVUIwQzd2OXhSd2FxczhDcHRRMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3Qvc2FraHVqYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732017820),
('fmZbBq8Y07L3vfoHFKVmaJsCIVeFz7zGmA8TKDFq', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHYxaTQ3WHcyeUM5Nmp3aHI2NDQwUWNsVk1pYmFETnFJcGxSRWV1NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3Qvc2FraHVqYS9jYXJlZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1731502733),
('OQY8XYrxCoIQ6zJfUT0V5bBwLImTNE2vMwVpCavq', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUG51ZXFhaVB1THhTc0R2bG9rYzVzeHlob3doRld2bmJoWnducTA1dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3Qvc2FraHVqYS9jYXJlZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1731906563),
('vnnMozcBPq39CFxqg0xrnst3atJkDxB4zs3J4iqj', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0VPRDIyREJ1cUdLYXNkNmlqZnpMRnRXaG9GTGVSNjl3WWxrOE42TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3Qvc2FraHVqYS9jYXJlZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1731749562);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeimage1` varchar(255) NOT NULL,
  `employeename` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `employeeimage1`, `employeename`, `designation`, `status`, `created_at`, `updated_at`) VALUES
(18, '/upload/1729147641_employeeimage.jpg', 'Miss. Charu Mathur', 'Graphic Designer', 1, '2024-10-17 01:08:51', '2024-10-17 01:17:21'),
(19, '/upload/1729148389_employeeimage.jpg', 'Mr. Sagar Bishwakarma', 'Graphic Designer', 1, '2024-10-17 01:29:49', '2024-10-17 01:29:49'),
(20, '/upload/1729148439_employeeimage.jpg', 'Mr. Himanshu Kumar', 'Graphic Designer', 1, '2024-10-17 01:30:16', '2024-10-17 01:30:39'),
(22, '/upload/1729148492_employeeimage.jpg', 'Mr. Sanyam', 'Creative Writer', 1, '2024-10-17 01:31:32', '2024-10-17 01:31:32'),
(23, '/upload/1729148540_employeeimage.jpg', 'Mr. Sagar Prajapati', 'Office Management', 1, '2024-10-17 01:32:20', '2024-10-17 01:32:20'),
(24, '/upload/1729148575_employeeimage.jpg', 'Mr. Samarth Rawat', 'Videographer', 1, '2024-10-17 01:32:55', '2024-10-17 01:32:55'),
(25, '/upload/1729148806_employeeimage.jpg', 'Miss. Hansika Singh', 'Graphic Designer', 1, '2024-10-17 01:33:24', '2024-10-17 01:36:46'),
(26, '/upload/1729148829_employeeimage.jpg', 'Mr. Shivam Saini', 'Web Developer', 1, '2024-10-17 01:34:34', '2024-10-17 01:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `type` varchar(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `type`, `created_at`, `updated_at`) VALUES
(13, 'Admin', 'admin@gmail.com', NULL, '$2y$12$JioEfH.sg317nzUXfkCereAT4M/ZEs839FnFR/Sd.4E/OKW.x0vPW', NULL, '1', '2024-08-31 01:32:16', '2024-08-31 01:32:16'),
(14, 'shivam', 'shivamsaini798@gmail.com', NULL, '$2y$12$V6k5S2p/kvBFu8asjiDBh.8a8bO0AttPgvbb2l7O51XXjV0cNcdfG', NULL, '2', '2024-08-31 01:55:09', '2024-08-31 01:55:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `blog_category_id_foreign` (`category_id`);

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_query`
--
ALTER TABLE `contact_form_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digital_assets_facebook`
--
ALTER TABLE `digital_assets_facebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digital_assets_youtube`
--
ALTER TABLE `digital_assets_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_of_the_month`
--
ALTER TABLE `employee_of_the_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `globalsetting`
--
ALTER TABLE `globalsetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `innovativeproductions`
--
ALTER TABLE `innovativeproductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_data`
--
ALTER TABLE `job_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `performer_of_the_month`
--
ALTER TABLE `performer_of_the_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `productions_studio`
--
ALTER TABLE `productions_studio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_email_unique` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact_form_query`
--
ALTER TABLE `contact_form_query`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `digital_assets_facebook`
--
ALTER TABLE `digital_assets_facebook`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `digital_assets_youtube`
--
ALTER TABLE `digital_assets_youtube`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `employee_of_the_month`
--
ALTER TABLE `employee_of_the_month`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `globalsetting`
--
ALTER TABLE `globalsetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `innovativeproductions`
--
ALTER TABLE `innovativeproductions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_data`
--
ALTER TABLE `job_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `performer_of_the_month`
--
ALTER TABLE `performer_of_the_month`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productions_studio`
--
ALTER TABLE `productions_studio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blogcategory` (`category_id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
