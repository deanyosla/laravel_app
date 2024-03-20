-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 10:58 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `slug`, `name`, `email`, `logo`, `website`, `summary`, `description`, `created_at`, `updated_at`) VALUES
(1, 'apple', 'Apple', 'info@apple.com', 'images/companies/apple.png', 'https://www.apple.com/uk/', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. They are considered one of the Big Five companies in the U.S. information technology industry, along with Amazon, Google, Microsoft, and Facebook. Its hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, the AirPods wireless earbuds, the AirPods Max headphones, and the HomePod smart speaker line. Apple\'s software includes iOS, iPadOS, macOS, watchOS, and tvOS operating systems, the iTunes media player, the Safari web browser, the Shazam music identifier, and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro X, Logic Pro, and Xcode. Its online services include the iTunes Store, the iOS App Store, Mac App Store, Apple Arcade, Apple Music, Apple TV+, Apple Fitness+, iMessage, and iCloud. Other services include Apple Store, Genius Bar, AppleCare, Apple Pay, Apple Pay Cash, and Apple Card. Their employee satisfaction was 77 percent in 2019. Salaries at Apple Inc. range from an average of £67,735 to £173,662 a year. Apple employees with the job title Software Engineering Manager make the most with an average annual salary of £161,610, while employees with the title Sales Associate make the least with an average annual salary of £26,099. The average employee term at Apple is 2 years. Working at Apple is considered prestigious in the tech industry, and is often considered one of the best places to work in the world.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(2, 'burberry', 'Burberry', 'customerservice@burberry.com', 'images/companies/burberry.svg', 'https://uk.burberry.com/', 'Burberry Group PLC is a British luxury fashion house headquartered in London, England. It currently designs and distributes ready to wear including trench coats, leather goods, footwear, fashion accessories, eyewear, fragrances, and cosmetics.', 'Burberry Group PLC is a British luxury fashion house headquartered in London, England. It currently designs and distributes ready to wear including trench coats, leather goods, footwear, fashion accessories, eyewear, fragrances, and cosmetics. Their iconic designs are often copied and imitated across the globe. Burberry is most famous for its iconic trench coat, which was invented by founder Thomas Burberry. The company has branded stores and franchises around the world, and also sells through concessions in third-party stores. HM Queen Elizabeth II and HRH The Prince of Wales have granted the company Royal Warrants. The Chief Creative Officer was Riccardo Tisci until Christopher Bailey took over in 2022 and brought the brand image back into line with its british heritage. The company is listed on the London Stock Exchange and is a constituent of the FTSE 100 Index. In 2015, Burberry ranked 73rd in Interbrand\'s Best Global Brands report, alongside Louis Vuitton and Prada. Burberry has more than 500 stores in over 50 countries. In 2017, Burberry ranked 29th in the BrandZ top 100 most valuable global brands. Salaries at Burberry range from an average of £40,000 to £120,000 a year. Retail Store Manager make an average annual salary of £60,000, while employees with the title Sales Associate make an average annual salary of £40,000. Employee satisfaction is 80%.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(3, 'waitrose', 'Waitrose', 'customerserviceteam@waitrose.co.uk', 'images/companies/waitrose.png', 'https://www.waitrose.com/', 'Waitrose & Partners is a brand of British supermarkets, founded in 1904 and acquired in 1937 by employee-owed retailer John Lewis Partnership, which still sells groceries under the brand.', 'Waitrose & Partners is a brand of British supermarkets, founded in 1904 and acquired in 1937 by employee-owed retailer John Lewis Partnership, which still sells groceries under the brand. Their duchy range of products are sold in Waitrose stores and are sourced from farms that meet the standards of the UK government\'s Department of Environment, Food and Rural Affairs. The Duchy range includes over 200 products, including meats, fish, fruit and vegetables, dairy products, breads, drinks, preserves, ready meals and biscuits. The company has 338 shops across the United Kingdom, including 65 \'little Waitrose\' convenience shops, and a 5.1% share of the market, making it the eighth-largest retailer of groceries in the UK. Salaries at Waitrose range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at Waitrose for over 5 years and employee satisfaction typically ranges from 80-90%.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(4, 'john-lewis', 'John Lewis', 'info.johnlewis.com/', 'images/companies/johnlewis.svg', 'https://www.johnlewis.com/', 'John Lewis & Partners is a brand of high-end department stores operating throughout Great Britain. Concessions are also located in the Republic of Ireland and Australia.', 'John Lewis & Partners is a brand of high-end department stores operating throughout Great Britain. Concessions are also located in the Republic of Ireland and Australia. Customer satisfaction is the highest of any UK department store, and is traditionally high. The chain is known for its policy of \"Never Knowingly Undersold\" which has been in use since 1925. There are 51 stores throughout England, Scotland and Wales, including 12 \'At Home\' stores, and \'flexible format\' stores in Exeter and York. The store in Cardiff was the first to open in Wales, in 2009. The largest store in England is located in Oxford Street, London. In 2017/18, gross sales were £11.6 billion, of which £6.0 billion were from the department stores division and £2.1 billion from its website. John Lewis & Partners is different from its main rivals in that it operates as a partnership owned by its employees. The John Lewis Partnership is an employee-owned trust, where all 80,000 staff are Partners in the business. The profits made by the department stores division are paid as a bonus to all staff. The John Lewis Partnership also operates Waitrose supermarkets, although the two companies are operated as separate businesses. Salaries at John Lewis range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at John Lewis for over 5 years and employee satisfaction typically ranges from 80-90%.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(5, 'screwfix', 'Screwfix', 'info@screwfix.com/', 'images/companies/screwfix.svg', 'https://www.screwfix.com/', 'Screwfix is the United Kingdom\'s largest multi channel retailer of trade tools, accessories and hardware products.', 'Screwfix is the United Kingdom\'s largest multi channel retailer of trade tools, accessories and hardware products. Founded in 1979 as the Woodscrew Supply Company, the company was acquired in July 1999 by Kingfisher plc, which also owns B&Q, and is listed on the London Stock Exchange. Screwfix was later established as a separate company in 2005, retaining its brand. The company opened its 500th store in 2018. Screwfix is convenient, straightforward and affordably-priced, helping its trade customers get the job done quickly, affordably and right first time. From power tools and work wear to cables and pipe fittings, Screwfix offers over 11,000 products available to pick up from over 600 stores nationwide. Their full range of over 33,000 products can be ordered over the phone, online or from a local store, with orders taken up until 8pm (weekdays) for next day delivery to home or site. Salaries at Screwfix range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at Screwfix for over 3 years and employee satisfaction typically ranges from 70-80%.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(6, 'valve', 'Valve', 'info@valve.com/', 'images/companies/valve.svg', 'https://www.valvesoftware.com/en/', 'Valve Corporation, also known as Valve Software, is an American video game developer, publisher, and digital distribution company headquartered in Bellevue, Washington.', 'Valve Corporation, also known as Valve Software, is an American video game developer, publisher, and digital distribution company headquartered in Bellevue, Washington. It is the developer of the software distribution platform Steam and the game franchises Half-Life, Counter-Strike, Portal, Day of Defeat, Team Fortress, Left 4 Dead, and Dota. Valve was founded in 1996 by the former Microsoft employees Gabe Newell and Mike Harrington. Their debut game, the first-person shooter (FPS) Half-Life (1998), was a critical and commercial success. With its realism, scripted sequences and seamless narrative, it has had a lasting influence on the FPS genre. Harrington left in 2000. In 2003, Valve launched Steam, followed by Half-Life 2 in 2004. With advanced physics systems and an increased focus on story and characters, Half-Life 2 received critical acclaim and sold 12 million copies by 2011. In 2006, Valve released the episodic sequel Half-Life 2: Episode One, followed in 2007 by Episode Two, the multiplayer game Team Fortress 2 and the puzzle game Portal. Portal 2 was released in 2011. In 2013, Valve released the multiplayer online battle arena game Dota 2. Valve released fewer games in the 2010s and experimented with hardware and virtual reality (VR). They entered the hardware market in 2015 with the Steam Machine, a line of gaming computers, which sold poorly, and released the HTC Vive and Valve Index VR headsets. They returned to the Half-Life series in 2020 with Half-Life: Alyx, their flagship VR game. In 2022, Valve released the Steam Deck, a portable gaming system. Valve uses a flat structure, whereby employees decide what to work on themselves. They develop games through playtesting and iteration, describing game design as a kind of experimental psychology. By 2012, Valve employed around 250 people and was reportedly worth over US$3 billion. Most of Valve\'s revenue comes from Steam, which controlled 50 to 70% of the market for downloaded PC games in 2011 and generated an estimated $3.4 billion in 2017.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(7, 'artstation', 'ArtStation', 'info@artstation.com', 'images/companies/artstation.png', 'https://www.artstation.com/', 'ArtStation provides you with a simple, yet powerful way to show your portfolio and be seen by the right people in the industry.', 'ArtStation provides you with a simple, yet powerful way to show your portfolio and be seen by the right people in the industry. It\'s super fast and sleek. Showcase high resolution images, videos, short clips, Marmoset and Sketchfab 3D scenes, 360 panos and more. Add your work and production experience. Blogs enable you to share your work in progress, articles and be seen. Analytics lets you see who\'s checking out your portfolio. You can even sell your digital assets and prints.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(8, 'google', 'Google', 'info@google.com', 'images/companies/google.svg', 'https://www.google.com/', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products.', 'Google is known for its search engine but also offers a variety of other products and services like YouTube, Android, Google Cloud, Google Maps, Google Docs, and Google Chrome. Founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University, California, it\'s now considered one of the Big Five technology companies alongside Apple, Amazon, Microsoft, and Facebook.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(9, 'amazon', 'Amazon', 'info@amazon.com', 'images/companies/amazon.png', 'https://www.amazon.com/', 'Amazon.com, Inc. is an American multinational technology company which focuses on e-commerce, cloud computing, and artificial intelligence.', 'Founded by Jeff Bezos in July 1994, Amazon started as an online bookstore and has expanded its business to include other products like electronics, apparel, furniture, food, and toys. Amazon Web Services (AWS) is its highly profitable cloud service segment. It\'s considered one of the Big Five tech companies.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(10, 'microsoft', 'Microsoft', 'info@microsoft.com', 'images/companies/microsoft.png', 'https://www.microsoft.com/', 'Microsoft Corporation is an American multinational technology company that develops, licenses, and supports a wide range of software products, computing devices, and services.', 'Founded by Bill Gates and Paul Allen in 1975, Microsoft\'s flagship product is the Windows operating system. Other well-known products include the Office suite, Surface, and Xbox. Azure is their cloud computing service. They\'re considered one of the Big Five tech companies.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(11, 'facebook', 'Facebook', 'info@facebook.com', 'images/companies/facebook.png', 'https://www.facebook.com/', 'Facebook, Inc. is an American social media conglomerate.', 'Founded by Mark Zuckerberg in 2004, Facebook\'s core is its namesake social networking platform. The company also owns Instagram, WhatsApp, and Oculus VR. Facebook has faced various controversies, especially in areas of privacy and political manipulation.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(12, 'netflix', 'Netflix', 'info@netflix.com', 'images/companies/netflix.svg', 'https://www.netflix.com/', 'Netflix, Inc. is an American subscription streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more.', 'Founded in 1997 by Reed Hastings and Marc Randolph, Netflix began as a DVD rental-by-mail service. Today, with its streaming platform, it has a massive global presence and produces content in various languages, making it a significant player in the entertainment industry.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(13, 'tesla', 'Tesla', 'info@tesla.com', 'images/companies/tesla.svg', 'https://www.tesla.com/', 'Tesla, Inc. is an American electric vehicle and clean energy company.', 'Founded by Elon Musk and several co-founders in 2003, Tesla is known for its electric cars, battery energy storage systems, and renewable energy products. With the mission to accelerate the world\'s transition to sustainable energy, Tesla is a key player in the automotive and energy sectors.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(14, 'adobe', 'Adobe', 'info@adobe.com', 'images/companies/adobe.svg', 'https://www.adobe.com/', 'Adobe Inc. is an American multinational computer software company.', 'Founded in December 1982 by John Warnock and Charles Geschke, Adobe is known for various software including Photoshop, Acrobat Reader, and Adobe Creative Cloud. It has historically focused upon the creation of multimedia and creativity software products.', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(15, 'spotify', 'Spotify', 'info@spotify.com', 'images/companies/spotify.svg', 'https://www.spotify.com/', 'Spotify Technology S.A. is a Swedish audio streaming and media services provider.', 'Founded in 2006 by Daniel Ek and Martin Lorentzon, Spotify allows users to listen to music and podcasts for free with advertisements or with a paid subscription. It\'s one of the world\'s largest music streaming service providers.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(16, 'ecorp', 'E-Corp', 'info@ecorp.com', 'images/companies/ECorp.webp', 'https://www.e-corp.com', 'E-Corp, also known as Evil Corp in the underground hacker world of \" Mr. Robot\", stands as a formidable conglomerate entrenched in the show\'s intricate narrative.', 'E-Corp, also known as Evil Corp in the underground hacker world of \" Mr. Robot\", stands as a formidable conglomerate entrenched in the show\'s intricate narrative. Founded in the annals of corporate history, E-Corp emerged as a titan in the global financial landscape, wielding immense power and influence. At the helm of this corporate juggernaut is its CEO, Phillip Price, portrayed with icy resolve by actor Michael Cristofer. Price\'s character embodies the archetype of a Machiavellian corporate leader, orchestrating intricate schemes and maneuvers to secure E-Corp\'s dominance. Within the context of \"Mr. Robot\", E-Corp serves as both a symbol and a target. Its sprawling reach permeates every aspect of society, from finance to politics, exerting control with ruthless efficiency. However, beneath its polished exterior lies a dark underbelly, plagued by corruption, greed, and clandestine machinations. As the series unfolds, E-Corp becomes entangled in a high-stakes battle with the show\'s protagonist, Elliot Alderson, and his underground hacker collective, fsociety. Their mission to dismantle E-Corp and destabilize its grip on society propels the plot forward, setting the stage for an epic clash between corporate power and grassroots resistance. In the world of \"Mr. Robot,\" E-Corp stands as a towering symbol of corporate hegemony, its fate intertwined with the fate of its adversaries in a gripping saga of power, betrayal, and redemption.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(17, 'dc', 'DC Comics', 'info@dc.com', 'images/companies/dc.svg', 'https://www.dc.com/', 'DC Comics is the iconic American comic book publisher known for legendary characters like Superman, Batman, Wonder Woman, and more.', 'Discover the world of DC Comics, the iconic American comic book publisher known for legendary characters like Superman, Batman, Wonder Woman, and more. Founded in 1937 as Detective Comics, DC has become one of the oldest and largest comic book companies in the United States. Step into the vast DC Universe, where heroes and villains clash in epic battles, from the Justice League to the Suicide Squad. Explore iconic storylines like Watchmen and V for Vendetta, along with alternative titles under imprints like Vertigo and DC Black Label. Originally headquartered in Manhattan, DC Entertainment moved to Burbank, California in 2015. With Penguin Random House distributing to bookstores and Lunar Distribution and UCS Comic Distributors serving the direct market, DC Comics remains a powerhouse in the industry. Despite competition from Marvel Comics, DC continues to captivate audiences, holding a significant share of the American comic book market. Dive into the world of DC Comics and experience the thrilling adventures that have entertained fans for generations.', '2024-03-19 15:43:21', '2024-03-19 15:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `company_id`, `slug`, `name`, `email`, `image`, `job_title`, `phone`, `address`, `summary`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 'jim-lee', 'Jim Lee', 'jim@leo.com', 'images/employees/jim-lee.jpeg', 'President, Publisher and Chief Creative Officer of DC Comics', '01234567890', 'Burbank, California, United States', 'Jim Lee is a Korean-American comic-book artist, writer, editor, and publisher. He is currently President of DC Comics.', 'Jim Lee (Born August 11, 1964) is a Korean-American comic-book artist, writer, editor, and publisher. He is currently the President, Publisher and Chief Creative Officer of DC Comics. In recognition of his work, Lee has received a Harvey Award, Inkpot Award and three Wizard Fan Awards. He entered the industry in 1987 as an artist for Marvel Comics, illustrating titles such as Alpha Flight and The Punisher War Journal, before gaining popularity on The Uncanny X-Men. On that book, Lee worked with writer Chris Claremont, with whom he co-created the character Gambit. That led to a 1991 spinoff series on which Lee and Claremont were the initial creative team. The debut issue, X-Men #1, that Lee penciled and co-wrote with Claremont, remains the best-selling comic book of all time, according to Guinness World Records. Lee\'s style was later used for the designs of the X-Men: The Animated Series. In 1992, Lee and several other artists formed their own publishing company, Image Comics, to publish their creator-owned titles, with Lee publishing titles such as WildC.A.T.s and Gen¹³ through his studio WildStorm Productions. Finding that the role of publisher reduced the amount of time he was able to devote to illustration, Lee sold WildStorm in 1998 to DC Comics, where he continued to run it as a DC imprint until 2010, as well as illustrating successful titles set in DC\'s main fictional universe, such as the year-long \"Batman: Hush\" and \"Superman: For Tomorrow\" storylines, and books including Superman Unchained and the New 52 run of Justice League. On February 18, 2010, Lee was announced as the new Co-Publisher of DC Comics with Dan DiDio, both replacing Paul Levitz. Upon DiDio\'s departure from the company in February 2020, Lee became the sole Publisher of DC Comics. Since June 2018, he has also been the Chief Creative Officer (CCO) of DC Comics, replacing Geoff Johns.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(2, 1, 7, 'leonard-teo', 'Leonard Teo', 'leo@teo.com', 'images/employees/leonard-teo.jpg', 'Chief Executive Officer', '01234567890', 'Ottawa, Ontario, Canada', 'Leonard Teo is former CEO & Co-Founder of industry-leading artist platform ArtStation, acquired by Epic Games in 2021. Senior Director at Epic Games.', 'Leonard Teo is best known for his work as the former CEO & Co-Founder of ArtStation, a leading showcase platform for artists & designers, acquired by Epic Games in 2021.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(3, 1, 1, 'tim-cook', 'Tim Cook', 'tim.cook@apple.com', 'images/employees/tim-cook.png', 'Chief Executive Officer', '01234567890', '1 Infinite Loop, Cupertino, CA 95014, United States', 'Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company\'s chief operating officer under its cofounder Steve Jobs.', 'Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company\'s chief operating officer under its cofounder Steve Jobs. He improved Apple\'s product offerings by introducing several new devices to Apple\'s lineup. In his spare time he fishes and makes plans for taking over the world. He is also a keen philanthropist and has donated over $100 million to charity. Prior to working at Apple, Tim worked at IBM and Compaq. He is known for his calm and collected demeanor and is often seen as a calming influence on the company. He is also known for his love of the outdoors and often goes camping with his family.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(4, 2, 2, 'riccardo-tisci', 'Riccardo Tisci', 'riccardo.tisci@burberry.com', 'images/employees/riccardo-tisci.jpg', 'Chief Creative Officer', '01234567890', 'Horseferry House, Horseferry Rd, Westminster, London SW1P 2AW', 'Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry.', 'Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry. He added a new and youthful vibe to the brand\'s lineup and repositioned Burberry at the forefront of luxury designer brands among younger customers. In his spare time he liked to party with all the models at Burberry. Originally from Italy, he moved to London in 2018 to take up the role at Burberry. He is known for making bold fashion statements and is often seen wearing a kilt. He famously designed the wedding dress for Meghan Markle when she married Prince Harry.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(5, 2, 3, 'james-bailey', 'James Bailey', 'james.bailey@waitrose.com', 'images/employees/james-bailey.webp', 'Executive Director', '01234567890', 'Doncastle Road, Bracknell, Berkshire, RG12 8YA', 'James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership.', 'James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership. He is known for his love of Waitrose\'s Duchy range of products and is often seen eating them in the office. Prior to working at Waitrose, James worked at Tesco and Sainsbury\'s. He is known for piloting Waitrose\'s online delivery service and is often seen driving the delivery vans himself. His favourite saying is \"Never knowingly undersold\" and he is often seen wearing a suit and tie. Originally, he is from London, but now lives in Berkshire with his wife and two children.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(6, 3, 5, 'john-mewett', 'John Mewett', 'john.mewett@screwfix.com', 'images/employees/john-mewett.jpeg', 'Chief Executive Officer', '01234567890', 'Trade House, Mead Avenue, Yeovil, Somerset, BA22 8RT', 'John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc.', 'John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc. He is known for his love of Screwfix\'s range of power tools and is often seen using them in the office. Prior to working at Screwfix, John worked at B&Q and Homebase. Originally from Somerset, he now lives in London with his wife and two children.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(7, 3, 4, 'sharon-white', 'Sharon White', 'sharon.white@johnlewis.com', 'images/employees/sharon-white.jpg', 'Chairman', '01234567890', '171 Victoria St, Westminster, London SW1E 5NN', 'Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom.', 'Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom. She is known for her love of John Lewis\'s home furnishings and is often seen redecorating the office. Prior to working at John Lewis, Sharon worked at the Treasury and the World Bank. She is known for her love of the John Lewis Christmas advert and is often seen singing along to it. Educated at Cambridge University, she is known for her love of the arts and is often seen at the theatre.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(8, 4, 6, 'gabe-newell', 'Gabe Newell', 'gabe.newell@valve.com', 'images/employees/gabe-newell.jpg', 'Chief Executive Officer', '01234567890', 'Seattle, Washington, USA', 'Gabe Newell is an esteemed American entrepreneur renowned as the president and co-founder of Valve Corporation, a leading video game company.', 'Gabe Logan Newell, fondly referred to as Gaben, is an esteemed American entrepreneur renowned as the president and co-founder of Valve Corporation, a leading video game company. Hailing from Colorado and raised in Davis, California, Newell\'s journey began at Harvard University in the early 1980s. However, his path diverged when he decided to leave Harvard and embark on a career with Microsoft. There, he played a pivotal role in the inception of the Windows operating system. Collaborating with colleague Mike Harrington, Newell departed from Microsoft in 1996 to establish Valve, spearheading the funding and development of their groundbreaking debut game, Half-Life, released in 1998. Although Harrington parted ways in 2000, Newell continued to steer Valve towards unprecedented success. A visionary leader, Newell pioneered Valve\'s digital distribution platform, Steam, which revolutionized the gaming industry upon its launch in 2003. By 2011, Steam had solidified its dominance in the market for downloaded PC games under Newell\'s stewardship. With his ownership stake in Valve reaching at least one quarter, Newell has consistently been recognized as one of the wealthiest individuals in the United States. His influence extends even further as the wealthiest figure within the video games sector, boasting a staggering net worth of $3.9 billion as of 2021. Beyond his achievements in gaming, Newell\'s interests are diverse, evidenced by his ownership of the esteemed marine research organization, Inkfish. Through his multifaceted endeavors, Gabe Newell continues to leave an indelible mark on both the gaming landscape and beyond.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(9, 4, 1, 'steve-wozniak', 'Steve Wozniak', 'woz@apple.com', 'images/employees/woz.jpg', 'Co-founder and Engineer', '01234567890', 'Cupertino, CA', 'Co-founder of Apple Inc. and primary developer of the Apple I and Apple II personal computers.', 'Steve Wozniak, affectionately known as \'Woz\', is an American electronics engineer, computer programmer, and technology entrepreneur. He co-founded Apple Inc. with Steve Jobs and Ronald Wayne. Wozniak single-handedly invented the Apple I computer and also had a major role in the development of the Apple II computer. Both of these inventions are integral parts of the personal computer revolution. Known for his passion for engineering and his down-to-earth personality, Wozniak has been a key figure in the tech industry, advocating for hands-on learning and creativity. Although he left Apple\'s day-to-day operations in 1985, Wozniak remains an employee and represents the company at various events and public occasions.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(10, 1, 8, 'sundar-pichai', 'Sundar Pichai', 'sundar.pichai@google.com', 'images/employees/sundar-pichai.jpg', 'Chief Executive Officer', '01234567891', '1600 Amphitheatre Parkway, Mountain View, CA 94043, United States', 'Sundar Pichai is an Indian-American business executive. He is the chief executive officer (CEO) of Google\'s parent company, Alphabet Inc.', 'Born in India, Sundar Pichai joined Google in 2004 and became CEO in 2015. He\'s known for his work on Google Chrome and Chrome OS. He has also been involved in the development of Google Drive, Gmail, and Google Maps. Pichai is known for his calm demeanor and has a reputation for building partnerships.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(11, 1, 9, 'jeff-bezos', 'Jeff Bezos', 'jeff.bezos@amazon.com', 'images/employees/jeff-bezos.webp', 'Founder', '01234567892', '410 Terry Ave. North, Seattle, WA 98109, United States', 'Jeff Bezos is the founder of Amazon, the world\'s largest online retailer.', 'Bezos founded Amazon in 1994. Under his leadership, Amazon expanded into a variety of other sectors, such as cloud computing with AWS and space travel with Blue Origin. He\'s one of the world\'s wealthiest individuals and is known for his emphasis on customer service.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(12, 1, 10, 'satya-nadella', 'Satya Nadella', 'satya.nadella@microsoft.com', 'images/employees/satya-nadella.jpg', 'Chief Executive Officer', '01234567893', 'One Microsoft Way, Redmond, WA 98052, United States', 'Satya Narayana Nadella is an Indian-American business executive. He is the chief executive officer (CEO) of Microsoft.', 'Since becoming CEO in 2014, Nadella has transformed Microsoft by emphasizing cloud computing and diversifying into other areas. Prior to becoming CEO, he was Executive Vice President of Microsoft\'s cloud and enterprise group.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(13, 1, 11, 'mark-zuckerberg', 'Mark Zuckerberg', 'mark.zuckerberg@facebook.com', 'images/employees/mark-zuckerberg.jpg', 'Chief Executive Officer', '01234567894', '1601 Willow Road, Menlo Park, CA 94025, United States', 'Mark Zuckerberg is co-founder and CEO of Facebook, the world\'s largest social networking site.', 'Zuckerberg co-founded Facebook in 2004 while at Harvard. Under his leadership, Facebook acquired Instagram and WhatsApp. He\'s known for his vision of connecting the world and has faced numerous challenges related to privacy and misinformation on the platform.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(14, 1, 12, 'reed-hastings', 'Reed Hastings', 'reed.hastings@netflix.com', 'images/employees/reed-hastings.jpg', 'Co-founder and Co-CEO', '01234567895', '100 Winchester Circle, Los Gatos, CA 95032, United States', 'Wilmot Reed Hastings Jr. is an American businessman. He is the co-founder and co-CEO of Netflix.', 'Hastings co-founded Netflix in 1997. He\'s been instrumental in transforming the DVD rental service into a global streaming powerhouse. He\'s known for promoting a unique corporate culture and has been a proponent of\n            education reform.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(15, 1, 13, 'elon-musk', 'Elon Musk', 'elon.musk@tesla.com', 'images/employees/elon-musk.jpg', 'Chief Executive Officer', '01234567896', '3500 Deer Creek Road, Palo Alto, CA 94304, United States', 'Elon Musk is an entrepreneur known for founding, co-founding, and leading multiple high-tech companies.', 'Elon Musk is the CEO and lead designer of SpaceX; early investor, CEO, and product architect of Tesla, Inc.; founder of The Boring Company; co-founder of Neuralink; and co-founder and initial co-chairman of OpenAI. Known for his ambitious vision for the future, Musk\'s ventures include everything from electric vehicles to neurotechnology, and he\'s a leading figure in the push for sustainable energy.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(16, 1, 14, 'shantanu-narayen', 'Shantanu Narayen', 'shantanu.narayen@adobe.com', 'images/employees/shantanu-narayen.jpg', 'Chief Executive Officer', '01234567897', '345 Park Avenue, San Jose, CA 95110-2704, United States', 'Shantanu Narayen is an Indian-American business executive, and the chairman and CEO of Adobe Inc.', 'Narayen joined Adobe in 1998, becoming the CEO in 2007. Under his leadership, Adobe shifted its focus from boxed software to a subscription cloud-based model. He has been recognized as one of the world\'s best CEOs and has been praised for his leadership style.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(17, 1, 15, 'daniel-ek', 'Daniel Ek', 'daniel.ek@spotify.com', 'images/employees/daniel-ek.webp', 'Chief Executive Officer', '01234567898', 'Regeringsgatan 19, SE-111 53 Stockholm, Sweden', 'Daniel Ek is a Swedish billionaire entrepreneur and technologist. He\'s the co-founder and CEO of Spotify.', 'Ek co-founded Spotify in 2006. The platform has revolutionized the music industry by offering on-demand streaming of a vast music library. Ek\'s vision for Spotify was to combat music piracy while providing a platform for artists to earn a livelihood.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(18, 1, 16, 'phillip-price', 'Phillip Price', 'phil.price@e-corp.com', 'images/employees/philPrice.png', 'Chief Executive Officer', '01234567898', 'Manhattan, New York, USA', 'Phillip Price is a CEO of E-Corp, billionaire entrepreneur and technologist.', 'Behold Phillip Price, the enigmatic puppeteer orchestrating the grand symphony of power within the hallowed halls of E-Corp in the riveting world of \"Mr. Robot\". With a demeanor as cold as steel and eyes that pierce through the veils of deception, Price commands reverence and fear in equal measure. His countenance, shrouded in an aura of mystery, hints at the depths of his cunning and the extent of his ambitions. Draped in bespoke suits that exude opulence and authority, Price moves through the corridors of corporate power with the grace of a predator stalking its prey. Every word he utters carries weight, every gesture laden with calculated intent. Behind the facade of a charismatic leader lies a mind as sharp as a razor, adept at navigating the treacherous currents of high finance and political intrigue. Price\'s machinations unfold like a meticulously crafted masterpiece, each move carefully calculated to advance his agenda and consolidate his grip on power. Yet, beneath his polished exterior lies a darkness that few dare to confront. Rumors swirl of backroom deals struck in the shadows, of alliances forged and broken at his whim. Whispers speak of a past shrouded in secrets, of sins buried deep beneath the veneer of respectability. In the murky depths of the corporate underworld, Phillip Price reigns supreme, a figure both revered and reviled, a symbol of ambition unbound and the cost of wielding unchecked power. To cross him is to court disaster, for in the game of power, there are no second chances, and Phillip Price plays to win at any cost.', '2024-03-19 15:43:21', '2024-03-19 15:43:21');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_075859_create_companies_table', 1),
(6, '2024_03_14_150913_create_employees_table', 1),
(7, '2024_03_15_141737_create_testimonials_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `user_id`, `employee_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 5, 18, 'It\'s one thing to question your mind; it\'s another to question your eyes and ears. But, then again, isn\'t it all the same? Our senses just mediocre inputs to our brain? Sure, we rely on them, trust they accurately portray the real world around us, but what if the haunting truth is they can\'t? That what we perceive isn\'t the real world at all, but just our mind\'s best guess? That all we really have is a garbled reality, a truly fuzzy picture we will never make out?', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(2, 1, 16, 'Working with Shantanu Narayen has been an extraordinary journey of growth and inspiration. His remarkable blend of technological foresight and business acumen has consistently driven Adobe to new heights. What truly stands out, however, is his unwavering commitment to fostering a culture of innovation and inclusivity. Under Shantanu\'s leadership, I\'ve not only witnessed the evolution of groundbreaking products but have also experienced a workspace where every voice is valued, and every idea has the potential to shape the future. His leadership style is a testament to the fact that genuine empathy and strategic vision can coexist, propelling a company to global leadership.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(3, 2, 17, 'As an intern at Spotify, I was initially intimidated by the thought of working at such a renowned company. However, Daniel Ek made the environment welcoming and nurturing. Despite his position, he took the time to mentor and interact with interns, emphasizing the value of fresh perspectives and continual learning. It\'s rare to find leaders like Daniel who truly believe in nurturing the next generation, and I\'m grateful for the invaluable lessons I\'ve learned from him.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(4, 2, 17, 'Daniel Ek\'s passion for music and technology is palpable every time he speaks. Working alongside him at Spotify has been an enlightening experience. He\'s not just a leader; he\'s a visionary who understands the importance of fostering a culture of creativity and collaboration. Under his leadership, I\'ve seen ideas transform into impactful campaigns that resonate deeply with our user base.', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(5, 6, 8, 'Jingle bells, Valve smells,\n            Their fortress starts to crack,\n            As Epic\'s might and power swells,\n            We\'ll give them quite the whack!', '2024-03-19 15:43:21', '2024-03-19 15:43:21'),
(6, 7, 8, 'U mad bro?', '2024-03-19 15:43:21', '2024-03-19 15:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '2024-03-19 15:43:20', '$2y$10$YT3gE4B.OupgPevDw.Ft7eGIdaHWdOlwX/mllhxv.Fu1n8TQswK1K', 1, '5Rwflr5lqzNqngQB0b8vj3Bruscm70CE5h3LAMcyoGSmdJeRGeStvIqhrz3u', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(2, 'User One', 'one', 'user@one.com', '2024-03-19 15:43:20', '$2y$10$Zz0am04eOZLb4YWJu.8rb.ogUJp1C0s7N/8b9WTSF25N8jBpOd.x2', 0, '0OyZCoJDqB', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(3, 'User Two', 'two', 'user@two.com', '2024-03-19 15:43:20', '$2y$10$i/12Qn1PkH3djZm0N6ixOeF18W8PE4rJYc16tVoHdRYSvLfa0SX6G', 0, '6PNm1fsYuP', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(4, 'User Three', 'three', 'user@three.com', '2024-03-19 15:43:20', '$2y$10$nVpbUDVilJR.2oL0McViZ.EgHkDoac3hwy1YjjkwwbAw/y..a3ySu', 0, 'zCOi7PHTjw', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(5, 'Mr.Robot', 'Mr_Robot', 'mrrobot@mail.com', '2024-03-19 15:43:20', '$2y$10$rstisrQIVNxF7XF2ApiAI.BNYQYHMKynV/rXIiRxEaiehXqZ/CFvy', 0, 'aQPw2x3m0C', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(6, 'Tim Sweeney', 'timsweeneyyy', 'tim@sweeney.com', '2024-03-19 15:43:20', '$2y$10$5I9YVytPa.2xS4knUbQsSuKKQbDGG5WB4bB2xL.xFJEAV.ODL4yx2', 0, 'WFQ6OjpHg4', '2024-03-19 15:43:20', '2024-03-19 15:43:20'),
(7, 'Gabe Newell', 'masterGabe', 'gabe@mail.com', '2024-03-19 15:43:20', '$2y$10$rER/2QDCXtpxs4tICTOd3e5BtOvTV0BEBQNkdhCfac5xQwkabu/y6', 0, 'Ycd994DELG', '2024-03-19 15:43:20', '2024-03-19 15:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_slug_unique` (`slug`),
  ADD UNIQUE KEY `companies_name_unique` (`name`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_slug_unique` (`slug`),
  ADD KEY `employees_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_user_id_foreign` (`user_id`),
  ADD KEY `testimonials_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
