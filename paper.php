<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>newspaper</title>
    <link rel="stylesheet" href="styles3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header class="shadow"> 
    <div class="nav container">
        <a href="index.php" class="logo">Royal<span>Insights</span></a>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</header>
<section class="home" id="home">
    <div class="home-txt-container">
        <h2 class="home-title"></h2>
        <span class="home-subtitle"></span>
    </div>
</section>
<div class="post-filter container">
    <span class="filter-item active-filter" data-filter="all">All</span>
    <span class="filter-item" data-filter="business">Business</span>
    <span class="filter-item" data-filter="tech">Tech</span>
    <span class="filter-item" data-filter="politics">Politics</span>
    <span class="filter-item" data-filter="sports">Sports</span>
    <span class="filter-item" data-filter="entertainment">Entertainment</span>
    <span class="filter-item" data-filter="election">Election</span>
    <span class="filter-item" data-filter="education">Education</span>
    <span class="filter-item" data-filter="auto">Auto</span>
</div>

<section class="post-container">
    <div class="post-box business">
        <img src="images/bnews1.webp" alt="" class="post-img">
        <h2 class="category">Business</h2>
        <p class="post-description">By Naina Lal Kidwai:
            Finance Minister Nirmala Sitharaman’s sixth Budget which is an interim budget promises to be responsible despite this being an election year. The budget talks about inclusive development both, social and geographical, especially for youth, women, farmers, and the poor. Continued focus on improving logistics through infrastructure spend on roads, rail, airports, ports increases productivity for companies and citizens alike.</p>
        <a href="https://timesofindia.indiatimes.com/business/budget/budget-2024-focuses-on-youth-and-women-entrepreneurship/articleshow/107357923.cms" class="post-title">Read more</a>
    </div>
    <div class="post-box tech">
        <img src="images/tnews1.webp" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <p class="post-description">X, the social network owned by Elon Musk, will start summarizing news events inside the app by using xAI's chatbot, Grok. 

            The AI-generated summaries will rely on user tweets — not third-party news articles — and will only be available to premium subscribers, the company announced on Friday. The feature, called “Stories,” doesn't currently cite any news outlets, but Musk told the tech newsletter Big Technology that better citations are on the way. 


        </p>
        <a href="https://www.gadgets360.com/apps/news/x-grok-ai-news-summary-xai-elon-musk-5588540#pfrom=desktop-lhs-recent" class="post-title">Read more</a>

    </div>
    <div class="post-box politics">
        <img src="images/p1news.webp" alt="" class="post-img">
        <h2 class="category">Politics</h2>
        <p class="post-description">Bhimavaram, Andhra Pradesh: Andhra Pradesh Chief Minister Y S Jagan Mohan Reddy on Friday launched a blistering attack on TDP and Janasena at Bhimavaram in West Godavari district and termed the two parties political entities that have no credibility among the masses.
            The chief minister launched his tirade against the two parties on the sidelines of a direct benefit transfer (DBT) scheme programme where he noted that the state government had already spent ₹ 2.45 lakh crore on welfare.    
            He disbursed ₹ 584 crore under the Jagananna Vidya Devena towards total fee reimbursement for the quarter of July-September 2023, which benefits more than 8 lakh eligible students.

        </p>
        <a href="https://www.ndtv.com/india-news/jagan-mohan-reddy-slams-chandrababu-naidu-working-14-years-chief-minister-no-achievements-to-his-credit-4765004" class="post-title">Read more</a>
    </div>
    <div class="post-box sports">
        <img src="images/s1news.webp" alt="" class="post-img">
        <h2 class="category">Sports</h2>
        <p class="post-description">The Chennai Super Kings (CSK) players arrived in Dharamsala on Friday ahead of their match against Punjab Kings (PBKS) at the HPCA Stadium on Sunday. Both teams also met earlier this week with PBKS beating CSK by 7 wickets at the MA Chidamabaram Stadium in Chennai. Ahead of the return leg on Sunday, CSK squad, led by former captain MS Dhoni, touched down in Dharamsala. In a viral video, Dhoni's new look caught the attention of the fans. In the video, he was seen donning a Half-Up hairstyle and a black aviator shades.

        </p>
        <a href="https://sports.ndtv.com/ipl-2024/ms-dhoni-debuts-new-look-at-picturesque-dharamsala-ahead-of-pbks-vs-csk-clash-5587181" class="post-title">Read more</a>
    </div>
    <div class="post-box entertainment">
        <img src="images/e1news.webp" alt="" class="post-img">
        <h2 class="category">Enternaiment</h2>
        <p class="post-description">New Delhi: In a world where heroes are anything but heroic, where power corrupts absolutely, and where the line between good and evil is more blurred than ever, Amazon Prime Video invites viewers to dive back into the chaotic universe of The Boys. The makers recently unveiled the trailer of the highly anticipated fourth season. In the trailer, Karl Urban returns as the grizzled and determined Billy Butcher, haunted by regrets and driven by a desire to make things right, even if it means facing his own demise. But as political tensions reach a boiling point and a deadly virus threatens to topple even the mightiest of supes, the stakes have never been higher.
            With Antony Starr's chilling portrayal of Homelander tightening his grip on power and Erin Moriarty's Starlight caught in the crossfire, the world teeters on the brink of chaos. But amidst the turmoil, a glimmer of hope emerges as Billy Butcher rallies the team to confront corruption head-on and fight for a world worth saving.
        </p>
        <a href="https://www.ndtv.com/entertainment/the-boys-4-trailer-karl-urban-and-team-answer-the-call-to-save-the-world-5586404" class="post-title">Read more</a>
    </div>
    <div class="post-box election">
        <img src="images/el3news.jpg" alt="" class="post-img">
        <h2 class="category">Election</h2>
        <p class="post-description">
            Amravati, Andhra Pradesh: The National Democratic Alliance in Andhra Pradesh on Tuesday released its joint manifesto for the upcoming polls in the state wherein they promised to offer ₹ 1500 monthly pension to eligible women.
The Telugu Desam Party, Jana Sena and BJP combine also promised to offer ₹ 3000 monthly financial assistance to unemployed youth.

Releasing the manifesto, Janasena chief Pawana Kalyan said the manifesto is an amalgamation of TDP's "super six" and his party's "Shanmukha Vyuham".
The TDP had earlier announced "super six" which promised to offer free bus travel to women, three free cooking gas cylinders to every household per year and ₹ 15,000 to every school-going child per annum, among others.
        </p>
        <a href="https://www.ndtv.com/india-news/in-ndas-manifesto-for-andhra-assembly-polls-rs-1-500-monthly-pension-for-women-5557943" class="post-title">Read more</a>
    </div> 
    <div class="post-box education">
        <img src="images/ed1news.avif" alt="" class="post-img">
        <h2 class="category">Education</h2>
        <p class="post-description">The Technology Innovation Hub of the Indian Institute of Technology Delhi (ITT-D) will conduct the Robotics for Good Youth Challenge 2024-2025, a UN-based educational robotics championship, on October 17, 2024. The competition is held under the guidance of the International Telecommunication Union (ITU), a specialised agency for information and communication technologies of the United Nations.

            Interested candidates can register themselves on the official website of IHFC, IIT Delhi till July 31 at ihfc.co.in/important-announcements.
            
            As a global initiative of the ITU, the Robotics for Good Youth Challenge is part of AI for Good, the leading action-oriented, global, and inclusive United Nations (UN) platform on artificial intelligence (AI).
        </p>
        <a href="https://indianexpress.com/article/education/iit-delhi-to-conduct-robotics-for-good-youth-challenge-competition-9307827/" class="post-title">Read more</a>
    </div>
    <div class="post-box auto">
        <img src="images/a2news.webp" alt="" class="post-img">
        <h2 class="category">Auto</h2>
        <p class="post-description">
            Tesla Cars To Soon Sell In India? The Competition And Elon Musk's Advantage
Speculation is rife about Tesla's plans for India (Representational)


New Delhi: Elon Musk is expected to visit India to meet Prime Minister Narendra Modi next week and announce an investment of $2 billion - $3 billion in setting up a Tesla manufacturing unit in the country.
Over the past few years, Tesla has expressed interest in entering the Indian market, hindered mainly by steep import duties. However, with the recent announcement of reduced import tariffs for Electric Vehicles (EVs) priced above $35,000, provided the manufacturer gives a guarantee of investment of ₹ 4,150 crore and sets up the manufacturing plant within three years with 25% localisation and subsequently achieves 50% localisation within five years, it is now presumed that Tesla will finally make its much-awaited India entry. .
        </p>
        <a href="https://www.ndtv.com/india-news/tesla-cars-to-soon-sell-in-india-the-competition-and-elon-musk-advantage-5471404" class="post-title">Read more</a>
    </div>
    <div class="post-box business">
        <img src="images/bnews2.webp"alt="" class="post-img">
        <h2 class="category">Business</h2>
        <p class="post-description">Stock market today: Nifty 50 hit a new all-time high of 22,787 today (May 3). Sensex also rose 400 points flanked by strong gains in Bajaj Finance as the Reserve Bank of India (RBI) overturned ban on its two digital lending products.
            Sensex was up 453 points or 0.61 per cent at 75,064 and the Nifty was up 135 points or 0.6 percent at 22,783.5. About 1,961 shares advanced, 680 shares declined, and 110 shares unchanged.
            The 30-share BSE Sensex jumped 470.92 points to 75,082.03 in early trade. The NSE Nifty climbed 139.5 points to hit a record peak of 22,787.70.
        </p>
        <a href="https://www.hindustantimes.com/business/stock-market-today-nifty-hits-fresh-high-sensex-climbs-400-points-to-reclaim-75000-101714709096068.html">Read more</a>
    </div>
    <div class="post-box tech">
        <img src="images/t2news.avif" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <p class="post-description">Apple's sales dip less than expected last quarter despite China's iPhone demand drop. India sees significant growth, giving hope for easing slowdown.
            Apple's sales dipped less than anticipated last quarter despite a drop in iPhone demand in China. However, there was a notable "double-digit" surge in India. This has given hope that the company's slowdown might be easing up.
            Apple chief Tim Cook expressed satisfaction with “strong double-digit growth” in revenue for the March quarter in India, marking a “new record” for Apple. He said Apple is manufacturing iPhones in India to stay competitive.
        </p>
        <a href="https://www.hindustantimes.com/technology/why-is-apple-producing-iphones-in-india-tim-cook-explains-double-digit-growth-101714791731717.html" class="post-title">Read more</a>
    </div>
    <div class="post-box politics">
        <img src="images/p2news.jpeg" alt="" class="post-img">
        <h2 class="category">Politics</h2>
        <p class="post-description">Jana Sena Party (JSP) president Pawan Kalyan said the formation of TDP-BJP-Jana Sena Party (JSP) alliance government was a certainty but he would not guess its margin of victory and that the time was ripe to end the atrocious rule of the YSR Congress Party (YSRCP). 

            The alliance was necessitated by the need to consolidate the anti-YSRCP votes and it became a reality, when the TDP was going through tough times, notwithstanding doubts and suspicions about its agenda, he observed. 
            
            </p>
        <a href="https://www.thehindu.com/elections/andhra-pradesh-assembly/time-to-end-atrocious-rule-of-ysr-congress-party-says-jana-sena-party-chief-pawan-kalyan/article68139742.ece" class="post-title">Read more</a>

    </div>
    <div class="post-box sports">
        <img src="images/s2news.jpg" alt="" class="post-img">
        <h2 class="category">Sports</h2>
        <p class="post-description">The International Cricket Council (ICC) issued the annual team rankings update on Friday, with Australia taking the top spot in Test cricket and India maintaining supremacy in both white-ball formats. Reigning ICC World Test Championship winners Australia have overtaken India to secure the top spot in whites on the back of their stunning 209-run triumph over India in the World Test Championship decider at The Oval last year, as per ICC.

           </p>
           <a href="https://sports.ndtv.com/cricket/india-lead-in-white-ball-formats-in-icc-annual-rankings-australia-top-in-tests-5579147" class="post-title">Read more</a>
    </div>
    <div class="post-box entertainment">
        <img src="images/e2news.webp" alt="" class="post-img">
        <h2 class="category">Enternaiment</h2>
        <p class="post-description">Shueisha announced on Thursday that Eiichiro Oda's One Piece manga has surpassed 500 million copies published worldwide as of the release of the manga's 103rd compiled book volume on the same day. 416,566,000 of those copies are in Japan, and 100 million copies are in 60 countries and territories outside of Japan. (In the past, Shueisha has used the Japanese term for "published" in reporting its manga statistics, but clarified that these figures include both print and digital copies.)

            The manga set a Guinness World Record in June 2015 for having 320,866,000 copies worldwide as of December 2014. The world record is for "The most copies published for the same comic book series by a single author." With today's announcement, the manga has updated its Guinness World Record.</p>
        <a href="https://www.animenewsnetwork.com/news/2022-08-04/one-piece-manga-sets-guinness-world-record-with-over-500-million-published/.188352" class="post-title">Read more</a>

    </div>
    <div class="post-box election">
        <img src="images/el1news.webp" alt="" class="post-img">
        <h2 class="category">Election</h2>
        <p class="post-description">
            New Delhi: As the Congress today announced Rahul Gandhi's switch from Amethi - where he lost the 2019 election - to the Raebareli seat vacated by his mother Sonia Gandhi, Prime Minister Narendra Modi mocked the Congress leader using his own words.
PM Modi, addressing a rally in Bengal, said Rahul Gandhi had "run away" from Amethi for fear of defeat.
"Today I also want to tell him, Daro Mat (don't be afraid), Bhaago Mat (don't run)," the Prime Minister sneered.
Rahul Gandhi will be contesting the Lok Sabha polls from Raebareli.
New Delhi: As the Congress today announced Rahul Gandhi's switch from Amethi - where he lost the 2019 election - to the Raebareli seat vacated by his mother Sonia Gandhi, Prime Minister Narendra Modi mocked the Congress leader using his own words.
PM Modi, addressing a rally in Bengal, said Rahul Gandhi had "run away" from Amethi for fear of defeat.
"Today I also want to tell him, Daro Mat (don't be afraid), Bhaago Mat (don't run)," the Prime Minister sneered.
        </p>
        <a href="https://www.ndtv.com/india-news/used-to-say-daro-mat-bjp-pm-modi-fear-jab-at-rahul-gandhi-on-raebareli-contest-5578224#pfrom=home-ndtvelex_elections2021_topstories" class="post-title">Read more</a>
    </div>
    <div class="post-box education">
        <img src="images/ed2news.avif" alt="" class="post-img">
        <h2 class="category">Education</h2>
        <p class="post-description">The Indian Institute of Management Kochi (IIM-K) campus has enrolled 200 participants in its executive MBA programme. This year’s course batch includes 200 students, with four international participants: two from Saudi Arabia, one from Kuwait, and one from Germany. Female candidates comprise a quarter of the batch, at 24 per cent.

            Additionally, over three-quarters of the students reside outside the state.
            
            To accommodate participants from outside Kerala, this batch will feature a one-weekend cohort in person and two-weekday cohorts offered online, read a statement from IIM-K. The batch has a diverse range of participants, including those from the government sector, PSUs, logistics and supply chain management, and healthcare and education. Also, the IT and ITES sector has the highest representation at 35 per cent, followed by manufacturing (12 per cent), healthcare and education (8 per cent), and banking and financial services (7 per cent).
            
            </p>
        <a href="https://indianexpress.com/article/education/iimk-kochiexecutive-mba-programme-has-200-participants-largest-executive-9301347/" class="post-title">Read more</a>
    </div>
    <div class="post-box auto">
        <img src="images/anews1.avif" alt="" class="post-img">
        <h2 class="category">Auto</h2>
        <p class="post-description">
            South Korea's Hyundai Motor Group will launch its first India-manufactured electric vehicles by 2025 as the parent of the Hyundai and Kia brands looks to boost its presence in the nascent space dominated by Tata Motors.

Production of Hyundai's locally manufactured EVs will begin by the end of 2024 and will be launched by 2025, along with Kia's India-made EV, the Hyundai Motor Group said in a statement on Thursday, adding that it would unveil five models by 2030.

Both brands will use batteries made by Exide Energy Solutions to power their EVs, they had said earlier this month.
        </p>
        <a href="https://www.gadgets360.com/auto/news/hyundai-kia-launch-first-india-made-ev-2025-5520824" class="post-title">Read more</a>
    </div>
    <div class="post-box business">
        <img src="images/b3news.jpg" alt="" class="post-img">
        <h2 class="category">Business</h2>
        <p class="post-description">India is world’s second biggest consumer of gold, after China. Bulk of the gold requirement is met through imports and domestic bullion recycled locally. So apart from international prices, which is denominated in dollar, import duties and other taxes play a role in determining domestic gold rates. Bullion is seen as a hedge against inflation but bond yields and the dollar rate also have a bearing on the prices of the precious metal. Here are latest gold prices in major Indian cities.</p>
        <a href="https://www.hindustantimes.com/gold-prices" class="post-title">Read more</a>
    </div>
    <div class="post-box tech">
        <img src="images/t3news.avif" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <p class="post-description">Instagram has released a bunch of new interactive sticker options for users to use on their Stories. Instagram Stories is a popular way for sharing content on the platform, next to posting an image, video or Reel. Users can upload text, images, or video stories and may even combine elements from all these options. The new stickers are claimed to help users express themselves more creatively. One of the many features includes users being able to make stickers to use on their Instagram stories from existing photos in their albums.

            Meta confirmed the new series of interactive stickers for Instagram Stories in a blog post. </p>
        <a href="https://www.gadgets360.com/apps/news/instagram-stories-interactive-stickers-release-adam-mosseri-meta-5587216#pfrom=desktop-lhs-recent" class="post-title">Read more</a>

    </div>
    <div class="post-box politics">
        <img src="images/p3news.webp" alt="" class="post-img">
        <h2 class="category">Politics</h2>
        <p class="post-description">Lucknow: Prime Minister Narendra Modi will address a rally in Etawah -- a Samajwadi Party (SP) bastion in Uttar Pradesh on Sunday.
            The BJP campaign has been targeting the main opposition party's bastions, especially those from where members of the SP's first family are contesting.
            
            In almost all their rallies, BJP leaders, including Prime Minister Narendra Modi, Union Home Minister Amit Shah and Chief Minister Yogi Adityanath, have raked up how five members of SP founder Mulayam Singh Yadav's family are contesting the Lok Sabha election.
        </p>
        <a href="https://www.ndtv.com/india-news/pm-modi-to-hold-roadshow-in-ayodhya-today-5591044" class="post-title">Read more</a>

    </div>
    <div class="post-box sports">
        <img src="images/s3news+.webp" alt="" class="post-img">
        <h2 class="category">Sports</h2>
        <p class="post-description">Five Assists And Goal For Lionel Messi, Hat-Trick For Luis Suarez As Inter Miami Hit SixLionel Messi's five assists, which all came in the second half, are a new record for an MLS game and he now has 10 goals and 12 assists in eight league appearances so far this season.Agence France-PresseUpdated: May 05, 2024 10:30 AM ISTRead Time:3 min

            Five Assists And Goal For Lionel Messi, Hat-Trick For Luis Suarez As Inter Miami Hit Six
            Without Lionel Messi, Inter Miami had fallen to a 4-0 defeat to the Red Bulls in in March.© AFP
            Luis Suarez scored a hat-trick and Lionel Messi had an incredible five assists and a goal in the second half as a rampant Inter Miami crushed the New York Red Bulls 6-2 in Major League Soccer on Saturday. 

        </p>
        <a href="https://sports.ndtv.com/football/five-assists-and-goal-for-lionel-messi-hat-trick-for-luis-suarez-as-inter-miami-hit-six-5591963" class="post-title">Read more</a>

    </div>
    <div class="post-box entertainment">
        <img src="images/e3news.webp" alt="" class="post-img">
        <h2 class="category">Enternaiment</h2>
        <p class="post-description">
            Mufasa Teaser Trailer: The Lion King's Destiny And Nemesis (The Future Scar)
A still from Mufasa: The Lion King. (courtesy: WaltDisneyStudios)


New Delhi: Disney recently unveiled the first teaser trailer of Mufasa: The Lion King, a prequel to the 2019 photorealistic rendition of The Lion King. They also announced the addition of Blue Ivy Carter to the voice cast. Helmed by Moonlight director Barry Jenkins, Mufasa delves into the backstory of the iconic lion, charting his formative years alongside his brother Taka, later known as Scar, the primary antagonist in The Lion King. This prequel sets the stage for the 2019 live-action adaptation of The Lion King, where Donald Glover and Beyoncé portrayed adult Simba and Nala.
In Mufasa: The Lion King, Blue Ivy Carter takes on the role of Kiara, the offspring of King Simba and Queen Nala. The narrative, blending live-action elements with computer-generated imagery, follows shaman Rafiki recounting Mufasa's orphaned upbringing through flashbacks, as he encounters his brother Taka, alias Scar. 


        </p>
        <a href="https://www.ndtv.com/entertainment/mufasa-teaser-trailer-the-lion-kings-destiny-and-nemesis-the-future-scar-5556107" class="post-title">Read more</a>
    </div>
    <div class="post-box election">
        <img src="images/el2news.webp" alt="" class="post-img">
        <h2 class="category">Election</h2>
        <p class="post-description">
            New Delhi: The Congress's much-awaited announcement of its candidates for Rae Bareli and Amethi seats in Uttar Pradesh has put the spotlight back on these two bastions of the Gandhi family. The twin strongholds weathered many a political storm, including the wave in support of Narendra Modi in 2014, and remained with the Congress. In 2019, Amethi fell to the BJP, but Rae Bareli held fort. With both the BJP and the Congress showing its cards for these seats, the game is on.
            Raebareli Is Congress's Safe Seat, Except It Handed Defeat To A PM Once
Rahul Gandhi will be filing nomination from Rae Bareli today
New Delhi: The Congress's much-awaited announcement of its candidates for Rae Bareli and Amethi seats in Uttar Pradesh has put the spotlight back on these two bastions of the Gandhi family. The twin strongholds weathered many a political storm, including the wave in support of Narendra Modi in 2014, and remained with the Congress.
        </p>
        <a href="https://www.ndtv.com/india-news/amethi-rae-bareli-elections-2024-rae-bareli-is-congresss-safe-seat-except-it-handed-defeat-to-a-pm-once-5578109#pfrom=home-ndtvelex_elections2021_topstories" class="post-title">Read more</a>
    </div>
    <div class="post-box education">
        <img src="images/ed3news.webp" alt="" class="post-img">
        <h2 class="category">Education</h2>
        <p class="post-description">International students in Canada will now be able to work only 24 hours in a week, Minister of Immigration, Refugees and Citizenship of Canada, Marc Miller announced Tuesday.

            “When we lifted the 20 hrs/week work rule for international students, we did so to support the post-pandemic recovery. Today, I announced that this measure will no longer be extended and, this fall, off-campus student work hours will be limited to 24 hrs/week,” he tweeted on his official X (formerly known as Twitter) account.
            
            The current rule where students were allowed to work more than 20 hours per week off campus came to an end on April 30. Students who have a scheduled academic break can continue working unlimited hours, the official order added</p>
        <a href="https://indianexpress.com/article/education/study-abroad/international-students-in-canada-can-only-work-24-hours-in-a-week-officials-announce-9300337/" class="post-title">Read more</a>
    </div>
    <div class="post-box auto">
        <img src="images/a4news.webp" alt="" class="post-img">
        <h2 class="category">Auto</h2>
        <p class="post-description">
            Two days after Aston Martin announced its Valkyrie programme, McLaren became the latest big name to reveal its own Le Mans and WEC campaign – even if it’s not yet ready to bid for an overall win in the Hypercar class. Instead, McLaren will make its La Sarthe comeback next year in the LMGT3 class that is replacing GTE Pro, running a pair of 720S GT3s for a full WEC campaign. And it was a surprise to no one that United Autosports has been chosen to spearhead the return given the Leeds-based team was co-founded by McLaren Racing chief Zak Brown.

“We have long viewed the WEC as a natural fit for demonstrating the performance of our cars,” said McLaren Automotive CEO Michael Leiters. He added that Le Mans remains “an intrinsic part of our enduring success in motor sport”, in reference to McLaren’s famous victory in the 24 Hours with the F1 GTR in 1995.

The question is, how long before McLaren commits to build a Hypercar?


        </p>
        <a href="https://www.motorsportmagazine.com/archive/article/december-2023/15/mclaren-announces-le-mans-comeback-in-2024/" class="post-title">Read more</a>
    </div>
    <div class="post-box business">
        <img src="images/b4news.avif" alt="" class="post-img">
        <h2 class="category">Business</h2>
        <p class="post-description">Train movements have been affected since April 25 following the derailment of an engine of a goods train between Assam’s Jatinga Lampur and New Harangajao station under the Lumding division caused by a massive landslide, leading to fuel shortage
            Agartala: The Tripura government has restricted the sale of petrol and diesel from Wednesday amid constraints in the supply of fuel stock due to restricted movement of trains, including goods trains between Tripura and the rest of the country, said additional secretary of food, civil supplies and consumer affairs department Nirmal Adhikari. 
            Train movements have been affected since April 25 following the derailment of an engine of a goods train between Assam’s Jatinga Lampur and New Harangajao station under the Lumding division caused by a massive landslide, leading to fuel shortage.
        </p>
        <a href="https://www.hindustantimes.com/india-news/tripura-imposes-restrictions-on-sale-of-fuel-due-to-disruptions-in-train-movement-101714633435929.html" class="post-title">Read more</a>
    </div>
    <div class="post-box tech">
        <img src="images/t4news.avif" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <p class="post-description">The last few weeks have pushed Bitcoin under the price point of $60,000 (roughly Rs. 50 lakh) for the first time in two months. As of Friday, May 3, Bitcoin was trading at the price point of $57,690 (roughly Rs. 48 lakh) as per Indian exchanges. With a loss of around 0.15 percent, the value of Bitcoin on foreign exchanges stands at $59,790 (roughly Rs. 49.85 lakh). For the most part of this week, Bitcoin has found itself trading under losses after showing a major spike in April.

            “This price drop suggests that there exists a buying activity at the lower level. Bitcoin has not yet recovered and gained enough strength to make a sharp move due to macroeconomic factors and geopolitical tensions, making sideways trading more likely. Resistance for Bitcoin is seen at $60,300 (roughly Rs. 50.2 lakh), with support at $58,800 (roughly Rs. 49 lakh),” Edul Patel, CEO of Mudrex told Gadgets360.
            
            Ether, that has been showing a mixed price movement for days, found itself on the loss-side of the crypto chart on Friday. At the time of writing, ETH was priced $2,907 (roughly Rs. 2.42 lakh) after clocking a loss of 1.85 percent.</p>
        <a href="https://www.gadgets360.com/cryptocurrency/news/crypto-price-india-bitcoin-ether-dogecoin-shiba-inu-altcoins-profits-5578170#pfrom=home-popular" class="post-title">Read more</a>
    </div>
    <div class="post-box politics">
        <img src="images/p4news.webp" alt="" class="post-img">
        <h2 class="category">Politics</h2>
        <p class="post-description">A court in Thane in Maharashtra on Saturday posted the hearing in the defamation case filed against Congress leader Rahul Gandhi to June 29.
            When the matter came up for hearing during the day in the magistrate's court in Bhiwandi, an adjournment was sought on the ground that a writ petition filed by the applicant was pending in the High Court and no order had been delivered on it as yet, Gandhi's counsel advocate Narayan Iyer told PTI.
            After hearing both parties, the magistrate posted the matter for hearing on June 29, Iyer said. The defamation case was filed by local RSS member Rajesh Kunte claiming Gandhi in a speech had linked the organisation to the assassination of Mahatma Gandhi.</p>
        <a href="https://www.business-standard.com/politics/defamation-case-against-rahul-over-rss-remark-hearing-posted-for-june-29-124050400499_1.html" class="post-title">Read more</a>
    </div>
    <div class="post-box sports">
        <img src="images/s4news.webp" alt="" class="post-img">
        <h2 class="category">Sports</h2>
        <p class="post-description">Max Verstappen Takes Pole For Miami GP After Sprint Race WinThree-time world champion Max Verstappen has won both the previous Miami Grand Prix races but never from pole and he said he still found qualifying tricky.Agence France-PresseUpdated: May 05, 2024 10:23 AM ISTRead Time:3 min

            Max Verstappen Takes Pole For Miami GP After Sprint Race Win
            Max Verstappen had also cruised to victory in the sprint race, ahead of Charles Leclerc.© AFP
            Red Bull's Max Verstappen continued his domination of Formula One, taking pole position for Sunday's Miami Grand Prix after clinching the sprint race earlier Saturday. The reigning world champion and championship leader, who has won four out of five Grand Prix races this season, secured his seventh straight pole position with another dominant drive. Ferrari's Charles Leclerc, whose fastest lap was 0.141 seconds behind Verstappen, will start second with his teammate Carlos Sainz in third place and Verstappen's Red Bull partner Sergio Perez fourth.
            
            </p>
        <a href="https://sports.ndtv.com/formula-1/max-verstappen-takes-pole-for-miami-gp-after-sprint-race-win-5591949" class="post-title">Read more</a>

    </div>
    <div class="post-box entertainment">
        <img src="images/e4news.jpeg" alt="" class="post-img">
        <h2 class="category">Enternaiment</h2>
        <p class="post-description">Tamil Superstar Vijay Calls Citizenship Law CAA 'Unacceptable'
            'Thalapathy' Vijay had announced a new political party last month. (File)
            
            
            Chennai: CAA Rules: Tamil superstar Vijay on Monday called the Citizenship (Amendment) Act "unacceptable" and called on the Tamil Nadu government to not allow its implementation in the state.
            The CAA aims to grant citizenship to persecuted minorities from three neighbouring countries. The law came into effect yesterday following a gazette notification by the central government.
            
            Vijay, who announced a new political party Tamizha Vetri Kazhagam last month, said in a press release that the CAA is being implemented due to "divisive politics".</p>
        <a href="https://www.ndtv.com/tamil-nadu-news/tamil-superstar-vijay-calls-citizenship-law-caa-unacceptable-5223157" class="post-title">Read more</a>

    </div>
    <div class="post-box election">
        <img src="images/el4news.webp" alt="" class="post-img">
        <h2 class="category">Election</h2>       
         <p class="post-description">Lok Sabha Polls 2024: Pension Hike, Vizag As Executive Capital Among YSR Congress' Poll Promises
            Jagan Reddy vowed that Amaravati will be developed as the legislative capital
            
            
            Amaravati: YSRCP chief Y S Jagan Mohan Reddy on Saturday released his party's manifesto for the upcoming elections and promised to gradually hike welfare pensions from ₹ 3,000 to ₹ 3,500 per month and govern the state from Visakhapatnam.
            The chief minister noted that welfare pensions, which are currently at ₹ 3,000 per month, will be raised to ₹ 3,250 from January 2028 and subsequently to ₹ 3,500 from January 2029.
            
            "Immediately after YSRCP forms the government in 2024, Visakhapatnam will be made the executive capital and the seat of the government. It will be developed as the growth engine of the state," said Mr Reddy, addressing a press conference.
            
            </p>
         <a href="https://www.ndtv.com/india-news/lok-sabha-polls-2024-pension-hike-vizag-as-executive-capital-among-ysr-congress-poll-promises-5537786" class="post-title">Read more</a>

    </div>
    <div class="post-box education">
        <img src="images/ed4news.avif" alt="" class="post-img">
        <h2 class="category">Education</h2>
        <p class="post-description">The Supreme Court on Monday refused to entertain a plea seeking an extension of the internship cut-off for candidates appearing in the NEET PG test scheduled for June 23 this year.

            After hearing the submissions for some time, a bench comprising Chief Justice D Y Chandrachud and justices J B Pardiwala and Manoj Misra said it cannot extend.
            
            “I mean people are bound to fall on the side of a particular line when there is a cut-off,” the CJI said.
            The Supreme Court on Monday refused to entertain a plea seeking an extension of the internship cut-off for candidates appearing in the NEET PG test scheduled for June 23 this year.

            After hearing the submissions for some time, a bench comprising Chief Justice D Y Chandrachud and justices J B Pardiwala and Manoj Misra said it cannot extend.
            
            “I mean people are bound to fall on the side of a particular line when there is a cut-off,” the CJI said.
        </p>
        <a href="https://indianexpress.com/article/education/sc-refuses-to-entertain-plea-seeking-extension-of-internship-cut-off-for-neet-pg-9298617/" class="post-title">Read more</a>
    </div>
    <div class="post-box auto">
        <img src="images/a3news.avif" alt="" class="post-img">
        <h2 class="category">Auto</h2>    
            <p class="post-description">
                Tesla's pricier-than-expected Cybertruck pickup, which offers driving ranges that fell well short of what CEO Elon Musk had promised, has deeply disappointed some but fascinated others with its futuristic, SUV-like feel.

The Cybertruck, two years behind schedule, enters a hot pickup truck market to compete with the likes of Ford's F150 Lightning, Rivian Automotive's R1T and General Motors' Hummer EV.

Reddit co-founder Alexis Ohanian, who was among the first dozen customers to pick up the vehicle on Thursday, said the Cybertruck drives and feels like Tesla's Model X sport utility vehicle.
Starting at $60,990 (roughly Rs. 51 lakh), the Cybertruck is over 50 percent more expensive than what CEO Elon Musk had touted in 2019. That may narrow the appeal of the vehicle. Tesla's stock is down over 2 percent since before the launch.

Among those disappointed is Texas-based financial services executive Christian Cook, who had booked a Cybertruck in 2019 after Musk promised a cheaper pickup that travels farther on a single charge.
            </p>
            <a href="https://www.gadgets360.com/auto/news/tesla-cybertruck-launch-delay-price-increase-lower-range-elon-musk-4626352" class="post-title">Read more</a>
        </div>
</section>
<div class="footer">
    <p>@2024,All Rights Reserved</p>
    <div class="social"></div>
    <a href="#"><i class='bx bxl-instagram'></i></a>
    <a href="#"><i class='bx bxl-twitter'></i></a>
    <a href="#"><i class='bx bxl-whatsapp'></i></a>
    <a href="#"><i class='bx bxl-linkedin'></i></a>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="script2.js"></script>
</body>
</html>
