<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Company::truncate();
        Testimonial::truncate();

        $admin = User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        $userOne = User::factory()->create([
            'name' => 'User One',
            'username' => 'one',
            'email' => 'user@one.com',
            'password' => 'password'
        ]);

        $userTwo = User::factory()->create([
            'name' => 'User Two',
            'username' => 'two',
            'email' => 'user@two.com',
            'password' => 'password'
        ]);

        $userThree = User::factory()->create([
            'name' => 'User Three',
            'username' => 'three',
            'email' => 'user@three.com',
            'password' => 'password'
        ]);

        $mrRobot = User::factory()->create([
            'name' => 'Mr.Robot',
            'username' => 'Mr_Robot',
            'email' => 'mrrobot@mail.com',
            'password' => 'password'
        ]);

        // For fun
        $timSweeney = User::factory()->create([
            'name' => 'Tim Sweeney',
            'username' => 'timsweeneyyy',
            'email' => 'tim@sweeney.com',
            'password' => 'password'
        ]);

        $gabe = User::factory()->create([
            'name' => 'Gabe Newell',
            'username' => 'masterGabe',
            'email' => 'gabe@mail.com',
            'password' => 'password'
        ]);
        // Companies

        $apple = Company::create([
            "id" => 1,
            "slug" => "apple",
            "name" => "Apple",
            "email" => "info@apple.com",
            "logo" => "images/companies/apple.png",
            "website" => "https://www.apple.com/uk/",
            "summary" => "Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.",
            "description" => "Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. They are considered one of the Big Five companies in the U.S. information technology industry, along with Amazon, Google, Microsoft, and Facebook. Its hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, the AirPods wireless earbuds, the AirPods Max headphones, and the HomePod smart speaker line. Apple's software includes iOS, iPadOS, macOS, watchOS, and tvOS operating systems, the iTunes media player, the Safari web browser, the Shazam music identifier, and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro X, Logic Pro, and Xcode. Its online services include the iTunes Store, the iOS App Store, Mac App Store, Apple Arcade, Apple Music, Apple TV+, Apple Fitness+, iMessage, and iCloud. Other services include Apple Store, Genius Bar, AppleCare, Apple Pay, Apple Pay Cash, and Apple Card. Their employee satisfaction was 77 percent in 2019. Salaries at Apple Inc. range from an average of £67,735 to £173,662 a year. Apple employees with the job title Software Engineering Manager make the most with an average annual salary of £161,610, while employees with the title Sales Associate make the least with an average annual salary of £26,099. The average employee term at Apple is 2 years. Working at Apple is considered prestigious in the tech industry, and is often considered one of the best places to work in the world.",
        ]);

        $burberry = Company::create([
            "id" => 2,
            "slug" => "burberry",
            "name" => "Burberry",
            "email" => "customerservice@burberry.com",
            "logo" => "images/companies/burberry.svg",
            "website" => "https://uk.burberry.com/",
            "summary" => "Burberry Group PLC is a British luxury fashion house headquartered in London, England. It currently designs and distributes ready to wear including trench coats, leather goods, footwear, fashion accessories, eyewear, fragrances, and cosmetics.",
            "description" => "Burberry Group PLC is a British luxury fashion house headquartered in London, England. It currently designs and distributes ready to wear including trench coats, leather goods, footwear, fashion accessories, eyewear, fragrances, and cosmetics. Their iconic designs are often copied and imitated across the globe. Burberry is most famous for its iconic trench coat, which was invented by founder Thomas Burberry. The company has branded stores and franchises around the world, and also sells through concessions in third-party stores. HM Queen Elizabeth II and HRH The Prince of Wales have granted the company Royal Warrants. The Chief Creative Officer was Riccardo Tisci until Christopher Bailey took over in 2022 and brought the brand image back into line with its british heritage. The company is listed on the London Stock Exchange and is a constituent of the FTSE 100 Index. In 2015, Burberry ranked 73rd in Interbrand's Best Global Brands report, alongside Louis Vuitton and Prada. Burberry has more than 500 stores in over 50 countries. In 2017, Burberry ranked 29th in the BrandZ top 100 most valuable global brands. Salaries at Burberry range from an average of £40,000 to £120,000 a year. Retail Store Manager make an average annual salary of £60,000, while employees with the title Sales Associate make an average annual salary of £40,000. Employee satisfaction is 80%.",

        ]);

        $waitrose = Company::create([
            "id" => 3,
            "slug" => "waitrose",
            "name" => "Waitrose",
            "email" => "customerserviceteam@waitrose.co.uk",
            "logo" => "images/companies/waitrose.png",
            "website" => "https://www.waitrose.com/",
            "summary" => "Waitrose & Partners is a brand of British supermarkets, founded in 1904 and acquired in 1937 by employee-owed retailer John Lewis Partnership, which still sells groceries under the brand.",
            "description" => "Waitrose & Partners is a brand of British supermarkets, founded in 1904 and acquired in 1937 by employee-owed retailer John Lewis Partnership, which still sells groceries under the brand. Their duchy range of products are sold in Waitrose stores and are sourced from farms that meet the standards of the UK government's Department of Environment, Food and Rural Affairs. The Duchy range includes over 200 products, including meats, fish, fruit and vegetables, dairy products, breads, drinks, preserves, ready meals and biscuits. The company has 338 shops across the United Kingdom, including 65 'little Waitrose' convenience shops, and a 5.1% share of the market, making it the eighth-largest retailer of groceries in the UK. Salaries at Waitrose range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at Waitrose for over 5 years and employee satisfaction typically ranges from 80-90%.",

        ]);

        $johnLewis = Company::create([
            "id" => 4,
            "slug" => "john-lewis",
            "name" => "John Lewis",
            "email" => "info.johnlewis.com/",
            "logo" => "images/companies/johnlewis.svg",
            "website" => "https://www.johnlewis.com/",
            "summary" => "John Lewis & Partners is a brand of high-end department stores operating throughout Great Britain. Concessions are also located in the Republic of Ireland and Australia.",
            "description" => "John Lewis & Partners is a brand of high-end department stores operating throughout Great Britain. Concessions are also located in the Republic of Ireland and Australia. Customer satisfaction is the highest of any UK department store, and is traditionally high. The chain is known for its policy of \"Never Knowingly Undersold\" which has been in use since 1925. There are 51 stores throughout England, Scotland and Wales, including 12 'At Home' stores, and 'flexible format' stores in Exeter and York. The store in Cardiff was the first to open in Wales, in 2009. The largest store in England is located in Oxford Street, London. In 2017/18, gross sales were £11.6 billion, of which £6.0 billion were from the department stores division and £2.1 billion from its website. John Lewis & Partners is different from its main rivals in that it operates as a partnership owned by its employees. The John Lewis Partnership is an employee-owned trust, where all 80,000 staff are Partners in the business. The profits made by the department stores division are paid as a bonus to all staff. The John Lewis Partnership also operates Waitrose supermarkets, although the two companies are operated as separate businesses. Salaries at John Lewis range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at John Lewis for over 5 years and employee satisfaction typically ranges from 80-90%.",

        ]);

        $screwfix = Company::create([
            "id" => 5,
            "slug" => "screwfix",
            "name" => "Screwfix",
            "email" => "info@screwfix.com/",
            "logo" => "images/companies/screwfix.svg",
            "website" => "https://www.screwfix.com/",
            "summary" => "Screwfix is the United Kingdom's largest multi channel retailer of trade tools, accessories and hardware products.",
            "description" => "Screwfix is the United Kingdom's largest multi channel retailer of trade tools, accessories and hardware products. Founded in 1979 as the Woodscrew Supply Company, the company was acquired in July 1999 by Kingfisher plc, which also owns B&Q, and is listed on the London Stock Exchange. Screwfix was later established as a separate company in 2005, retaining its brand. The company opened its 500th store in 2018. Screwfix is convenient, straightforward and affordably-priced, helping its trade customers get the job done quickly, affordably and right first time. From power tools and work wear to cables and pipe fittings, Screwfix offers over 11,000 products available to pick up from over 600 stores nationwide. Their full range of over 33,000 products can be ordered over the phone, online or from a local store, with orders taken up until 8pm (weekdays) for next day delivery to home or site. Salaries at Screwfix range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at Screwfix for over 3 years and employee satisfaction typically ranges from 70-80%.",
        ]);

        $valve = Company::create([
            "id" => 6,
            "slug" => "valve",
            "name" => "Valve",
            "email" => "info@valve.com/",
            "logo" => "images/companies/valve.svg",
            "website" => "https://www.valvesoftware.com/en/",
            "summary" => "Valve Corporation, also known as Valve Software, is an American video game developer, publisher, and digital distribution company headquartered in Bellevue, Washington.",
            "description" => "Valve Corporation, also known as Valve Software, is an American video game developer, publisher, and digital distribution company headquartered in Bellevue, Washington. It is the developer of the software distribution platform Steam and the game franchises Half-Life, Counter-Strike, Portal, Day of Defeat, Team Fortress, Left 4 Dead, and Dota. Valve was founded in 1996 by the former Microsoft employees Gabe Newell and Mike Harrington. Their debut game, the first-person shooter (FPS) Half-Life (1998), was a critical and commercial success. With its realism, scripted sequences and seamless narrative, it has had a lasting influence on the FPS genre. Harrington left in 2000. In 2003, Valve launched Steam, followed by Half-Life 2 in 2004. With advanced physics systems and an increased focus on story and characters, Half-Life 2 received critical acclaim and sold 12 million copies by 2011. In 2006, Valve released the episodic sequel Half-Life 2: Episode One, followed in 2007 by Episode Two, the multiplayer game Team Fortress 2 and the puzzle game Portal. Portal 2 was released in 2011. In 2013, Valve released the multiplayer online battle arena game Dota 2. Valve released fewer games in the 2010s and experimented with hardware and virtual reality (VR). They entered the hardware market in 2015 with the Steam Machine, a line of gaming computers, which sold poorly, and released the HTC Vive and Valve Index VR headsets. They returned to the Half-Life series in 2020 with Half-Life: Alyx, their flagship VR game. In 2022, Valve released the Steam Deck, a portable gaming system. Valve uses a flat structure, whereby employees decide what to work on themselves. They develop games through playtesting and iteration, describing game design as a kind of experimental psychology. By 2012, Valve employed around 250 people and was reportedly worth over US$3 billion. Most of Valve's revenue comes from Steam, which controlled 50 to 70% of the market for downloaded PC games in 2011 and generated an estimated $3.4 billion in 2017.",
        ]);

        $artstation = Company::create([
            "id" => 7,
            "slug" => "artstation",
            "name" => "ArtStation",
            "email" => "info@artstation.com",
            "logo" => "images/companies/artstation.png",
            "website" => "https://www.artstation.com/",
            "summary" => "ArtStation provides you with a simple, yet powerful way to show your portfolio and be seen by the right people in the industry.",
            "description" => "ArtStation provides you with a simple, yet powerful way to show your portfolio and be seen by the right people in the industry. It's super fast and sleek. Showcase high resolution images, videos, short clips, Marmoset and Sketchfab 3D scenes, 360 panos and more. Add your work and production experience. Blogs enable you to share your work in progress, articles and be seen. Analytics lets you see who's checking out your portfolio. You can even sell your digital assets and prints.",
        ]);

        $google = Company::create([
            "id" => 8,
            "slug" => "google",
            "name" => "Google",
            "email" => "info@google.com",
            "logo" => "images/companies/google.svg",
            "website" => "https://www.google.com/",
            "summary" => "Google LLC is an American multinational technology company that specializes in Internet-related services and products.",
            "description" => "Google is known for its search engine but also offers a variety of other products and services like YouTube, Android, Google Cloud, Google Maps, Google Docs, and Google Chrome. Founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University, California, it's now considered one of the Big Five technology companies alongside Apple, Amazon, Microsoft, and Facebook.",
        ]);

        $amazon = Company::create([
            "id" => 9,
            "slug" => "amazon",
            "name" => "Amazon",
            "email" => "info@amazon.com",
            "logo" => "images/companies/amazon.png",
            "website" => "https://www.amazon.com/",
            "summary" => "Amazon.com, Inc. is an American multinational technology company which focuses on e-commerce, cloud computing, and artificial intelligence.",
            "description" => "Founded by Jeff Bezos in July 1994, Amazon started as an online bookstore and has expanded its business to include other products like electronics, apparel, furniture, food, and toys. Amazon Web Services (AWS) is its highly profitable cloud service segment. It's considered one of the Big Five tech companies.",
        ]);

        $microsoft = Company::create([
            "id" => 10,
            "slug" => "microsoft",
            "name" => "Microsoft",
            "email" => "info@microsoft.com",
            "logo" => "images/companies/microsoft.png",
            "website" => "https://www.microsoft.com/",
            "summary" => "Microsoft Corporation is an American multinational technology company that develops, licenses, and supports a wide range of software products, computing devices, and services.",
            "description" => "Founded by Bill Gates and Paul Allen in 1975, Microsoft's flagship product is the Windows operating system. Other well-known products include the Office suite, Surface, and Xbox. Azure is their cloud computing service. They're considered one of the Big Five tech companies.",
        ]);

        $facebook = Company::create([
            "id" => 11,
            "slug" => "facebook",
            "name" => "Facebook",
            "email" => "info@facebook.com",
            "logo" => "images/companies/facebook.png",
            "website" => "https://www.facebook.com/",
            "summary" => "Facebook, Inc. is an American social media conglomerate.",
            "description" => "Founded by Mark Zuckerberg in 2004, Facebook's core is its namesake social networking platform. The company also owns Instagram, WhatsApp, and Oculus VR. Facebook has faced various controversies, especially in areas of privacy and political manipulation.",
        ]);

        $netflix = Company::create([
            "id" => 12,
            "slug" => "netflix",
            "name" => "Netflix",
            "email" => "info@netflix.com",
            "logo" => "images/companies/netflix.svg",
            "website" => "https://www.netflix.com/",
            "summary" => "Netflix, Inc. is an American subscription streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more.",
            "description" => "Founded in 1997 by Reed Hastings and Marc Randolph, Netflix began as a DVD rental-by-mail service. Today, with its streaming platform, it has a massive global presence and produces content in various languages, making it a significant player in the entertainment industry.",
        ]);

        $tesla = Company::create([
            "id" => 13,
            "slug" => "tesla",
            "name" => "Tesla",
            "email" => "info@tesla.com",
            "logo" => "images/companies/tesla.svg",
            "website" => "https://www.tesla.com/",
            "summary" => "Tesla, Inc. is an American electric vehicle and clean energy company.",
            "description" => "Founded by Elon Musk and several co-founders in 2003, Tesla is known for its electric cars, battery energy storage systems, and renewable energy products. With the mission to accelerate the world's transition to sustainable energy, Tesla is a key player in the automotive and energy sectors.",
        ]);

        $adobe = Company::create([
            "id" => 14,
            "slug" => "adobe",
            "name" => "Adobe",
            "email" => "info@adobe.com",
            "logo" => "images/companies/adobe.svg",
            "website" => "https://www.adobe.com/",
            "summary" => "Adobe Inc. is an American multinational computer software company.",
            "description" => "Founded in December 1982 by John Warnock and Charles Geschke, Adobe is known for various software including Photoshop, Acrobat Reader, and Adobe Creative Cloud. It has historically focused upon the creation of multimedia and creativity software products.",
        ]);

        $spotify = Company::create([
            "id" => 15,
            "slug" => "spotify",
            "name" => "Spotify",
            "email" => "info@spotify.com",
            "logo" => "images/companies/spotify.svg",
            "website" => "https://www.spotify.com/",
            "summary" => "Spotify Technology S.A. is a Swedish audio streaming and media services provider.",
            "description" => "Founded in 2006 by Daniel Ek and Martin Lorentzon, Spotify allows users to listen to music and podcasts for free with advertisements or with a paid subscription. It's one of the world's largest music streaming service providers.",
        ]);

        $ecorp = Company::create([
            "id" => 16,
            "slug" => "ecorp",
            "name" => "E-Corp",
            "email" => "info@ecorp.com",
            "logo" => "images/companies/ECorp.webp",
            "website" => "https://www.e-corp.com",
            "summary" => "E-Corp, also known as Evil Corp in the underground hacker world of \" Mr. Robot\", stands as a formidable conglomerate entrenched in the show's intricate narrative.",
            "description" => "E-Corp, also known as Evil Corp in the underground hacker world of \" Mr. Robot\", stands as a formidable conglomerate entrenched in the show's intricate narrative. Founded in the annals of corporate history, E-Corp emerged as a titan in the global financial landscape, wielding immense power and influence. At the helm of this corporate juggernaut is its CEO, Phillip Price, portrayed with icy resolve by actor Michael Cristofer. Price's character embodies the archetype of a Machiavellian corporate leader, orchestrating intricate schemes and maneuvers to secure E-Corp's dominance. Within the context of \"Mr. Robot\", E-Corp serves as both a symbol and a target. Its sprawling reach permeates every aspect of society, from finance to politics, exerting control with ruthless efficiency. However, beneath its polished exterior lies a dark underbelly, plagued by corruption, greed, and clandestine machinations. As the series unfolds, E-Corp becomes entangled in a high-stakes battle with the show's protagonist, Elliot Alderson, and his underground hacker collective, fsociety. Their mission to dismantle E-Corp and destabilize its grip on society propels the plot forward, setting the stage for an epic clash between corporate power and grassroots resistance. In the world of \"Mr. Robot,\" E-Corp stands as a towering symbol of corporate hegemony, its fate intertwined with the fate of its adversaries in a gripping saga of power, betrayal, and redemption."
        ]);

        $dcComics = Company::create([
            "id" => 17,
            "slug" => "dc",
            "name" => "DC Comics",
            "email" => "info@dc.com",
            "logo" => "images/companies/dc.svg",
            "website" => "https://www.dc.com/",
            "summary" => "DC Comics is the iconic American comic book publisher known for legendary characters like Superman, Batman, Wonder Woman, and more.",
            "description" => "Discover the world of DC Comics, the iconic American comic book publisher known for legendary characters like Superman, Batman, Wonder Woman, and more. Founded in 1937 as Detective Comics, DC has become one of the oldest and largest comic book companies in the United States. Step into the vast DC Universe, where heroes and villains clash in epic battles, from the Justice League to the Suicide Squad. Explore iconic storylines like Watchmen and V for Vendetta, along with alternative titles under imprints like Vertigo and DC Black Label. Originally headquartered in Manhattan, DC Entertainment moved to Burbank, California in 2015. With Penguin Random House distributing to bookstores and Lunar Distribution and UCS Comic Distributors serving the direct market, DC Comics remains a powerhouse in the industry. Despite competition from Marvel Comics, DC continues to captivate audiences, holding a significant share of the American comic book market. Dive into the world of DC Comics and experience the thrilling adventures that have entertained fans for generations."
        ]);

        // Employees

        Employee::create([
            "user_id" => $admin->id,
            "company_id" => $dcComics->id,
            "slug" => "jim-lee",
            "name" => "Jim Lee",
            "email" => "jim@leo.com",
            "image" => "images/employees/jim-lee.jpeg",
            "job_title" => "President, Publisher and Chief Creative Officer of DC Comics",
            "phone" => "01234567890",
            "address" => "Burbank, California, United States",
            "summary" => "Jim Lee is a Korean-American comic-book artist, writer, editor, and publisher. He is currently President of DC Comics.",
            "description" => "Jim Lee (Born August 11, 1964) is a Korean-American comic-book artist, writer, editor, and publisher. He is currently the President, Publisher and Chief Creative Officer of DC Comics. In recognition of his work, Lee has received a Harvey Award, Inkpot Award and three Wizard Fan Awards. He entered the industry in 1987 as an artist for Marvel Comics, illustrating titles such as Alpha Flight and The Punisher War Journal, before gaining popularity on The Uncanny X-Men. On that book, Lee worked with writer Chris Claremont, with whom he co-created the character Gambit. That led to a 1991 spinoff series on which Lee and Claremont were the initial creative team. The debut issue, X-Men #1, that Lee penciled and co-wrote with Claremont, remains the best-selling comic book of all time, according to Guinness World Records. Lee's style was later used for the designs of the X-Men: The Animated Series. In 1992, Lee and several other artists formed their own publishing company, Image Comics, to publish their creator-owned titles, with Lee publishing titles such as WildC.A.T.s and Gen¹³ through his studio WildStorm Productions. Finding that the role of publisher reduced the amount of time he was able to devote to illustration, Lee sold WildStorm in 1998 to DC Comics, where he continued to run it as a DC imprint until 2010, as well as illustrating successful titles set in DC's main fictional universe, such as the year-long \"Batman: Hush\" and \"Superman: For Tomorrow\" storylines, and books including Superman Unchained and the New 52 run of Justice League. On February 18, 2010, Lee was announced as the new Co-Publisher of DC Comics with Dan DiDio, both replacing Paul Levitz. Upon DiDio's departure from the company in February 2020, Lee became the sole Publisher of DC Comics. Since June 2018, he has also been the Chief Creative Officer (CCO) of DC Comics, replacing Geoff Johns."
        ]);
        Employee::create([
            "user_id" => $admin->id,
            "company_id" => $artstation->id,
            "slug" => "leonard-teo",
            "name" => "Leonard Teo",
            "email" => "leo@teo.com",
            "image" => "images/employees/leonard-teo.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Ottawa, Ontario, Canada",
            "summary" => "Leonard Teo is former CEO & Co-Founder of industry-leading artist platform ArtStation, acquired by Epic Games in 2021. Senior Director at Epic Games.",
            "description" => "Leonard Teo is best known for his work as the former CEO & Co-Founder of ArtStation, a leading showcase platform for artists & designers, acquired by Epic Games in 2021.",
        ]);

        Employee::create([
            "user_id" => $admin->id,
            "company_id" => $apple->id,
            "slug" => "tim-cook",
            "name" => "Tim Cook",
            "email" => "tim.cook@apple.com",
            "image" => "images/employees/tim-cook.png",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "1 Infinite Loop, Cupertino, CA 95014, United States",
            "summary" => "Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company's chief operating officer under its cofounder Steve Jobs.",
            "description" => "Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company's chief operating officer under its cofounder Steve Jobs. He improved Apple's product offerings by introducing several new devices to Apple's lineup. In his spare time he fishes and makes plans for taking over the world. He is also a keen philanthropist and has donated over $100 million to charity. Prior to working at Apple, Tim worked at IBM and Compaq. He is known for his calm and collected demeanor and is often seen as a calming influence on the company. He is also known for his love of the outdoors and often goes camping with his family.",
        ]);

        Employee::create([

            "user_id" => $userOne->id,
            "company_id" => $burberry->id,
            "slug" => "riccardo-tisci",
            "name" => "Riccardo Tisci",
            "email" => "riccardo.tisci@burberry.com",
            "image" => "images/employees/riccardo-tisci.jpg",
            "job_title" => "Chief Creative Officer",
            "phone" => "01234567890",
            "address" => "Horseferry House, Horseferry Rd, Westminster, London SW1P 2AW",
            "summary" => "Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry.",
            "description" => "Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry. He added a new and youthful vibe to the brand's lineup and repositioned Burberry at the forefront of luxury designer brands among younger customers. In his spare time he liked to party with all the models at Burberry. Originally from Italy, he moved to London in 2018 to take up the role at Burberry. He is known for making bold fashion statements and is often seen wearing a kilt. He famously designed the wedding dress for Meghan Markle when she married Prince Harry.",
        ]);

        Employee::create([
            "user_id" => $userOne->id,
            "company_id" => $waitrose->id,
            "slug" => "james-bailey",
            "name" => "James Bailey",
            "email" => "james.bailey@waitrose.com",
            "image" => "images/employees/james-bailey.webp",
            "job_title" => "Executive Director",
            "phone" => "01234567890",
            "address" => "Doncastle Road, Bracknell, Berkshire, RG12 8YA",
            "summary" => "James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership.",
            "description" => "James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership. He is known for his love of Waitrose's Duchy range of products and is often seen eating them in the office. Prior to working at Waitrose, James worked at Tesco and Sainsbury's. He is known for piloting Waitrose's online delivery service and is often seen driving the delivery vans himself. His favourite saying is \"Never knowingly undersold\" and he is often seen wearing a suit and tie. Originally, he is from London, but now lives in Berkshire with his wife and two children.",
        ]);

        Employee::create([
            "user_id" => $userTwo->id,
            "company_id" => $screwfix->id,
            "slug" => "john-mewett",
            "name" => "John Mewett",
            "email" => "john.mewett@screwfix.com",
            "image" => "images/employees/john-mewett.jpeg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Trade House, Mead Avenue, Yeovil, Somerset, BA22 8RT",
            "summary" => "John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc.",
            "description" => "John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc. He is known for his love of Screwfix's range of power tools and is often seen using them in the office. Prior to working at Screwfix, John worked at B&Q and Homebase. Originally from Somerset, he now lives in London with his wife and two children.",
        ]);

        Employee::create([
            "user_id" => $userTwo->id,
            "company_id" => $johnLewis->id,
            "slug" => "sharon-white",
            "name" => "Sharon White",
            "email" => "sharon.white@johnlewis.com",
            "image" => "images/employees/sharon-white.jpg",
            "job_title" => "Chairman",
            "phone" => "01234567890",
            "address" => "171 Victoria St, Westminster, London SW1E 5NN",
            "summary" => "Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom.",
            "description" => "Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom. She is known for her love of John Lewis's home furnishings and is often seen redecorating the office. Prior to working at John Lewis, Sharon worked at the Treasury and the World Bank. She is known for her love of the John Lewis Christmas advert and is often seen singing along to it. Educated at Cambridge University, she is known for her love of the arts and is often seen at the theatre.",
        ]);

       $gabeN = Employee::create([
            "user_id" => $userThree->id,
            "company_id" => $valve->id,
            "slug" => "gabe-newell",
            "name" => "Gabe Newell",
            "email" => "gabe.newell@valve.com",
            "image" => "images/employees/gabe-newell.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Seattle, Washington, USA",
            "summary" => "Gabe Newell is an esteemed American entrepreneur renowned as the president and co-founder of Valve Corporation, a leading video game company.",
            "description" => "Gabe Logan Newell, fondly referred to as Gaben, is an esteemed American entrepreneur renowned as the president and co-founder of Valve Corporation, a leading video game company. Hailing from Colorado and raised in Davis, California, Newell's journey began at Harvard University in the early 1980s. However, his path diverged when he decided to leave Harvard and embark on a career with Microsoft. There, he played a pivotal role in the inception of the Windows operating system. Collaborating with colleague Mike Harrington, Newell departed from Microsoft in 1996 to establish Valve, spearheading the funding and development of their groundbreaking debut game, Half-Life, released in 1998. Although Harrington parted ways in 2000, Newell continued to steer Valve towards unprecedented success. A visionary leader, Newell pioneered Valve's digital distribution platform, Steam, which revolutionized the gaming industry upon its launch in 2003. By 2011, Steam had solidified its dominance in the market for downloaded PC games under Newell's stewardship. With his ownership stake in Valve reaching at least one quarter, Newell has consistently been recognized as one of the wealthiest individuals in the United States. His influence extends even further as the wealthiest figure within the video games sector, boasting a staggering net worth of $3.9 billion as of 2021. Beyond his achievements in gaming, Newell's interests are diverse, evidenced by his ownership of the esteemed marine research organization, Inkfish. Through his multifaceted endeavors, Gabe Newell continues to leave an indelible mark on both the gaming landscape and beyond.",
        ]);

        Employee::create([
            "user_id" => $userThree->id,
            "company_id" => $apple->id,
            "slug" => "steve-wozniak",
            "name" => "Steve Wozniak",
            "email" => "woz@apple.com",
            "image" => "images/employees/woz.jpg",
            "job_title" => "Co-founder and Engineer",
            "phone" => "01234567890",
            "address" => "Cupertino, CA",
            "summary" => "Co-founder of Apple Inc. and primary developer of the Apple I and Apple II personal computers.",
            "description" => "Steve Wozniak, affectionately known as 'Woz', is an American electronics engineer, computer programmer, and technology entrepreneur. He co-founded Apple Inc. with Steve Jobs and Ronald Wayne. Wozniak single-handedly invented the Apple I computer and also had a major role in the development of the Apple II computer. Both of these inventions are integral parts of the personal computer revolution. Known for his passion for engineering and his down-to-earth personality, Wozniak has been a key figure in the tech industry, advocating for hands-on learning and creativity. Although he left Apple's day-to-day operations in 1985, Wozniak remains an employee and represents the company at various events and public occasions."
        ]);

        $sundarPichai = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $google->id,
            "slug" => "sundar-pichai",
            "name" => "Sundar Pichai",
            "email" => "sundar.pichai@google.com",
            "image" => "images/employees/sundar-pichai.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567891",
            "address" => "1600 Amphitheatre Parkway, Mountain View, CA 94043, United States",
            "summary" => "Sundar Pichai is an Indian-American business executive. He is the chief executive officer (CEO) of Google's parent company, Alphabet Inc.",
            "description" => "Born in India, Sundar Pichai joined Google in 2004 and became CEO in 2015. He's known for his work on Google Chrome and Chrome OS. He has also been involved in the development of Google Drive, Gmail, and Google Maps. Pichai is known for his calm demeanor and has a reputation for building partnerships.",
        ]);

        $jeffBezos = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $amazon->id,
            "slug" => "jeff-bezos",
            "name" => "Jeff Bezos",
            "email" => "jeff.bezos@amazon.com",
            "image" => "images/employees/jeff-bezos.webp",
            "job_title" => "Founder",
            "phone" => "01234567892",
            "address" => "410 Terry Ave. North, Seattle, WA 98109, United States",
            "summary" => "Jeff Bezos is the founder of Amazon, the world's largest online retailer.",
            "description" => "Bezos founded Amazon in 1994. Under his leadership, Amazon expanded into a variety of other sectors, such as cloud computing with AWS and space travel with Blue Origin. He's one of the world's wealthiest individuals and is known for his emphasis on customer service.",
        ]);

        $satyaNadella = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $microsoft->id,
            "slug" => "satya-nadella",
            "name" => "Satya Nadella",
            "email" => "satya.nadella@microsoft.com",
            "image" => "images/employees/satya-nadella.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567893",
            "address" => "One Microsoft Way, Redmond, WA 98052, United States",
            "summary" => "Satya Narayana Nadella is an Indian-American business executive. He is the chief executive officer (CEO) of Microsoft.",
            "description" => "Since becoming CEO in 2014, Nadella has transformed Microsoft by emphasizing cloud computing and diversifying into other areas. Prior to becoming CEO, he was Executive Vice President of Microsoft's cloud and enterprise group.",
        ]);

        $markZuckerberg = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $facebook->id,
            "slug" => "mark-zuckerberg",
            "name" => "Mark Zuckerberg",
            "email" => "mark.zuckerberg@facebook.com",
            "image" => "images/employees/mark-zuckerberg.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567894",
            "address" => "1601 Willow Road, Menlo Park, CA 94025, United States",
            "summary" => "Mark Zuckerberg is co-founder and CEO of Facebook, the world's largest social networking site.",
            "description" => "Zuckerberg co-founded Facebook in 2004 while at Harvard. Under his leadership, Facebook acquired Instagram and WhatsApp. He's known for his vision of connecting the world and has faced numerous challenges related to privacy and misinformation on the platform.",
        ]);

        $reedHastings = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $netflix->id,
            "slug" => "reed-hastings",
            "name" => "Reed Hastings",
            "email" => "reed.hastings@netflix.com",
            "image" => "images/employees/reed-hastings.jpg",
            "job_title" => "Co-founder and Co-CEO",
            "phone" => "01234567895",
            "address" => "100 Winchester Circle, Los Gatos, CA 95032, United States",
            "summary" => "Wilmot Reed Hastings Jr. is an American businessman. He is the co-founder and co-CEO of Netflix.",
            "description" => "Hastings co-founded Netflix in 1997. He's been instrumental in transforming the DVD rental service into a global streaming powerhouse. He's known for promoting a unique corporate culture and has been a proponent of
            education reform.",
        ]);

        $elonMusk = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $tesla->id,
            "slug" => "elon-musk",
            "name" => "Elon Musk",
            "email" => "elon.musk@tesla.com",
            "image" => "images/employees/elon-musk.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567896",
            "address" => "3500 Deer Creek Road, Palo Alto, CA 94304, United States",
            "summary" => "Elon Musk is an entrepreneur known for founding, co-founding, and leading multiple high-tech companies.",
            "description" => "Elon Musk is the CEO and lead designer of SpaceX; early investor, CEO, and product architect of Tesla, Inc.; founder of The Boring Company; co-founder of Neuralink; and co-founder and initial co-chairman of OpenAI. Known for his ambitious vision for the future, Musk's ventures include everything from electric vehicles to neurotechnology, and he's a leading figure in the push for sustainable energy.",
        ]);

        $shantanuNarayen = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $adobe->id,
            "slug" => "shantanu-narayen",
            "name" => "Shantanu Narayen",
            "email" => "shantanu.narayen@adobe.com",
            "image" => "images/employees/shantanu-narayen.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567897",
            "address" => "345 Park Avenue, San Jose, CA 95110-2704, United States",
            "summary" => "Shantanu Narayen is an Indian-American business executive, and the chairman and CEO of Adobe Inc.",
            "description" => "Narayen joined Adobe in 1998, becoming the CEO in 2007. Under his leadership, Adobe shifted its focus from boxed software to a subscription cloud-based model. He has been recognized as one of the world's best CEOs and has been praised for his leadership style.",
        ]);

        $danielEk = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $spotify->id,
            "slug" => "daniel-ek",
            "name" => "Daniel Ek",
            "email" => "daniel.ek@spotify.com",
            "image" => "images/employees/daniel-ek.webp",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567898",
            "address" => "Regeringsgatan 19, SE-111 53 Stockholm, Sweden",
            "summary" => "Daniel Ek is a Swedish billionaire entrepreneur and technologist. He's the co-founder and CEO of Spotify.",
            "description" => "Ek co-founded Spotify in 2006. The platform has revolutionized the music industry by offering on-demand streaming of a vast music library. Ek's vision for Spotify was to combat music piracy while providing a platform for artists to earn a livelihood.",
        ]);

        $philPrice = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $ecorp->id,
            "slug" => "phillip-price",
            "name" => "Phillip Price",
            "email" => "phil.price@e-corp.com",
            "image" => "images/employees/philPrice.png",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567898",
            "address" => "Manhattan, New York, USA",
            "summary" => "Phillip Price is a CEO of E-Corp, billionaire entrepreneur and technologist.",
            "description" => "Behold Phillip Price, the enigmatic puppeteer orchestrating the grand symphony of power within the hallowed halls of E-Corp in the riveting world of \"Mr. Robot\". With a demeanor as cold as steel and eyes that pierce through the veils of deception, Price commands reverence and fear in equal measure. His countenance, shrouded in an aura of mystery, hints at the depths of his cunning and the extent of his ambitions. Draped in bespoke suits that exude opulence and authority, Price moves through the corridors of corporate power with the grace of a predator stalking its prey. Every word he utters carries weight, every gesture laden with calculated intent. Behind the facade of a charismatic leader lies a mind as sharp as a razor, adept at navigating the treacherous currents of high finance and political intrigue. Price's machinations unfold like a meticulously crafted masterpiece, each move carefully calculated to advance his agenda and consolidate his grip on power. Yet, beneath his polished exterior lies a darkness that few dare to confront. Rumors swirl of backroom deals struck in the shadows, of alliances forged and broken at his whim. Whispers speak of a past shrouded in secrets, of sins buried deep beneath the veneer of respectability. In the murky depths of the corporate underworld, Phillip Price reigns supreme, a figure both revered and reviled, a symbol of ambition unbound and the cost of wielding unchecked power. To cross him is to court disaster, for in the game of power, there are no second chances, and Phillip Price plays to win at any cost.",
        ]);

        $oneTest = Testimonial::create([
            "user_id" => $mrRobot->id,
            "employee_id" => $philPrice->id,
            'body' => "It's one thing to question your mind; it's another to question your eyes and ears. But, then again, isn't it all the same? Our senses just mediocre inputs to our brain? Sure, we rely on them, trust they accurately portray the real world around us, but what if the haunting truth is they can't? That what we perceive isn't the real world at all, but just our mind's best guess? That all we really have is a garbled reality, a truly fuzzy picture we will never make out?",
        ]);

        $twoTest = Testimonial::create([
            "user_id" => $admin->id,
            "employee_id" => $shantanuNarayen->id,
            'body' => "Working with Shantanu Narayen has been an extraordinary journey of growth and inspiration. His remarkable blend of technological foresight and business acumen has consistently driven Adobe to new heights. What truly stands out, however, is his unwavering commitment to fostering a culture of innovation and inclusivity. Under Shantanu's leadership, I've not only witnessed the evolution of groundbreaking products but have also experienced a workspace where every voice is valued, and every idea has the potential to shape the future. His leadership style is a testament to the fact that genuine empathy and strategic vision can coexist, propelling a company to global leadership.",
        ]);

        $threeTest = Testimonial::create([
            "user_id" => $userOne->id,
            "employee_id" => $danielEk->id,
            'body' => "As an intern at Spotify, I was initially intimidated by the thought of working at such a renowned company. However, Daniel Ek made the environment welcoming and nurturing. Despite his position, he took the time to mentor and interact with interns, emphasizing the value of fresh perspectives and continual learning. It's rare to find leaders like Daniel who truly believe in nurturing the next generation, and I'm grateful for the invaluable lessons I've learned from him.",
        ]);

        $fourTest = Testimonial::create([
            "user_id" => $userOne->id,
            "employee_id" => $danielEk->id,
            'body' => "Daniel Ek's passion for music and technology is palpable every time he speaks. Working alongside him at Spotify has been an enlightening experience. He's not just a leader; he's a visionary who understands the importance of fostering a culture of creativity and collaboration. Under his leadership, I've seen ideas transform into impactful campaigns that resonate deeply with our user base.",
        ]);

        $oneTest = Testimonial::create([
            "user_id" => $timSweeney->id,
            "employee_id" => $gabeN->id,
            'body' => "Jingle bells, Valve smells,
            Their fortress starts to crack,
            As Epic's might and power swells,
            We'll give them quite the whack!"
        ]);

        $oneTest = Testimonial::create([
            "user_id" => $gabe->id,
            "employee_id" => $gabeN->id,
            'body' => "U mad bro?"
        ]);
    }

}
