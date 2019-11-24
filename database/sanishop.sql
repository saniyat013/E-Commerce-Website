-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2018 at 11:51 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogtitle` varchar(120) NOT NULL,
  `blogdescription` text NOT NULL,
  `blogid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogtitle`, `blogdescription`, `blogid`) VALUES
('What is Lorem Ipsum?', ' What is Lorem Ipsum? What is Lorem Ipsum? What is Lorem Ipsum? What is Lorem Ipsum? What is Lorem Ipsum?', '11'),
('  Blog   Blog   Blog ', '  Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog   Blog ', 'b1'),
('Add a new Blo', ' Add a new BloAdd a new BloAdd a new BloAdd a new BloAdd a new BloAdd a new BloAdd a new BloAdd a new Blo', 'b9');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mbody` text NOT NULL,
  `memail` varchar(30) NOT NULL,
  `mname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mbody`, `memail`, `mname`) VALUES
('Message body', '', 'Sharif'),
('Message body.', '', 'Sani'),
('Massage body', 'hasib@gmail.com', 'Hasib'),
('message body', 'susmita@gmail.com', 'Susmita'),
('message body', 'bintu@gmail.com', 'bintu'),
('message body', 'bodna@gmail.com', 'Bodna'),
('Final Test', 'final@gmail.com', 'final test'),
('message body', 'sani@yahoo.com', 'Sani');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `discription` text NOT NULL,
  `photo` varchar(120) NOT NULL,
  `author` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `catagory`, `discription`, `photo`, `author`) VALUES
('b001', ' The Sun Does Shine: How I Found Life and Freedom on Death Row\r\n', 216, 'Biography', 'In 1985, Anthony Ray Hinton was arrested and charged with two counts of capital murder in Alabama. Stunned, confused, and only twenty-nine years old, Hinton knew that it was a case of mistaken identity and believed that the truth would prove his innocence and ultimately set him free.\r\n\r\nBut with no money and a different system of justice for a poor black man in the South, Hinton was sentenced to death by electrocution. He spent his first three years on Death Row at Holman State Prison in agonizing silence—full of despair and anger toward all those who had sent an innocent man to his death. But as Hinton realized and accepted his fate, he resolved not only to survive, but find a way to live on Death Row. For the next twenty-seven years he was a beacon—transforming not only his own spirit, but those of his fellow inmates, fifty-four of whom were executed mere feet from his cell. With the help of civil rights attorney and bestselling author of Just Mercy, Bryan Stevenson, Hinton won his release in 2015.\r\n\r\nWith a foreword by Stevenson, The Sun Does Shine is an extraordinary testament to the power of hope sustained through the darkest times. Destined to be a classic memoir of wrongful imprisonment and freedom won, Hinton’s memoir tells his dramatic thirty-year journey and shows how you can take away a man’s freedom, but you can’t take away his imagination, humor, or joy. ', 'b001.jpg', 'by Anthony Ray Hinton, Bryan Stevenson (Introduction), Lara Love Hardin '),
('b002', ' Just the Funny Parts: ... And a Few Hard Truths About Sneaking Into the Hollywood Boys\' Club\r\nby Nell Scovell ', 122, 'Biography', 'You’ve almost certainly laughed at Scovell’s jokes—you just didn’t know it until now.\r\n\r\nJust the Funny Parts is a juicy and scathingly funny insider look at how pop culture gets made. For more than thirty years, writer, producer and director Nell Scovell worked behind the scenes of iconic TV shows, including The Simpsons, Late Night with David Letterman, Murphy Brown, NCIS, The Muppets, and Sabrina, the Teenage Witch, which she created and executive produced.  \r\n\r\nIn 2009, Scovell gave up her behind-the-scenes status when the David Letterman sex scandal broke. Only the second woman ever to write for his show, Scovell used the moment to publicly call out the lack of gender diversity in late-night TV writers’ rooms. “One of the boys” came out hard for “all of the girls.” Her criticisms fueled a cultural debate. Two years later, Scovell was collaborating with Sheryl Sandberg on speeches and later on Lean In, which resulted in a worldwide movement.\r\n\r\nNow Scovell is opening up with this fun, honest, and often shocking account. Scovell knows what it’s like to put words in the mouths of President Barack Obama, Mark Harmon, Candice Bergen, Bob Newhart, Conan O’Brien, Alyssa Milano, and Kermit the Frog, among many others. Through her eyes, you’ll sit in the Simpson writers’ room… stand on the Oscar red carpet… pin a tail on Miss Piggy…bond with Star Trek’s Leonard Nimoy… and experience a Stephen King-like encounter with Stephen King.\r\n\r\nJust the Funny Parts is a fast-paced account of a nerdy girl from New England who fought her way to the top of the highly-competitive, male-dominated entertainment field. The book delivers invaluable insights into the creative process and tricks for navigating a difficult workplace. It\'s part memoir, part how-to, and part survival story. Or, as Scovell puts it, “It’s like Unbroken, but funnier and with slightly less torture.”', 'b002.jpg', ''),
('b003', ' Photographic: The Life of Graciela Iturbide\r\nby Isabel Quintero', 115, 'Biography', 'Graciela Iturbide was born in México City in 1942, the oldest of 13 children. When tragedy struck Iturbide as a young mother, she turned to photography for solace and understanding. From then on Iturbide embarked on a photographic journey that has taken her throughout her native México, from the Sonora Desert to Juchitán to Frida Kahlo’s bathroom, to the United States, India, and beyond. Photographic is a symbolic, poetic, and deeply personal graphic biography of this iconic photographer. Iturbide\'s journey will excite readers of all ages as well as budding photographers, who will be inspired by her resolve, talent, and curiosity.', 'b003.jpg', ''),
('h001', ' Russian Roulette: The Inside Story of Putin\'s War on America and the Election of Donald Trump\r\nby Michael Isikoff, David Corn ', 1107, 'History', 'The incredible, harrowing account of how American democracy was hacked by Moscow as part of a covert operation to influence the U.S. election and help Donald Trump gain the presidency.\r\n\r\nRUSSIAN ROULETTE is a story of political skullduggery unprecedented in American history. It weaves together tales of international intrigue, cyber espionage, and superpower rivalry. After U.S.-Russia relations soured, as Vladimir Putin moved to reassert Russian strength on the global stage, Moscow trained its best hackers and trolls on U.S. political targets and exploited WikiLeaks to disseminate information that could affect the 2016 election.\r\n\r\nThe Russians were wildly successful and the great break-in of 2016 was no \"third-rate burglary.\" It was far more sophisticated and sinister -- a brazen act of political espionage designed to interfere with American democracy. At the end of the day, Trump, the candidate who pursued business deals in Russia, won. And millions of Americans were left wondering, what the hell happened? This story of high-tech spying and multiple political feuds is told against the backdrop of Trump\'s strange relationship with Putin and the curious ties between members of his inner circle -- including Paul Manafort and Michael Flynn -- and Russia.', 'h001.jpg', ''),
('h002', ' The Space Barons: Elon Musk, Jeff Bezos, and the Quest to Colonize the Cosmos\r\nby Christian Davenport ', 59, 'History', 'The Space Barons is the story of a group of billionaire entrepreneurs who are pouring their fortunes into the epic resurrection of the American space program. Nearly a half-century after Neil Armstrong walked on the moon, these Space Barons-most notably Elon Musk and Jeff Bezos, along with Richard Branson and Paul Allen-are using Silicon Valley-style innovation to dramatically lower the cost of space travel, and send humans even further than NASA has gone. These entrepreneurs have founded some of the biggest brands in the world-Amazon, Microsoft, Virgin, Tesla, PayPal-and upended industry after industry. Now they are pursuing the biggest disruption of all: space.\r\n\r\nBased on years of reporting and exclusive interviews with all four billionaires, this authoritative account is a dramatic tale of risk and high adventure, the birth of a new Space Age, fueled by some of the world\'s richest men as they struggle to end governments\' monopoly on the cosmos. The Space Barons is also a story of rivalry-hard-charging startups warring with established contractors, and the personal clashes of the leaders of this new space movement, particularly Musk and Bezos, as they aim for the moon and Mars and beyond.', 'h002.jpg', ''),
('h003', 'Beneath a Scarlet Sky\r\nby Mark T. Sullivan', 837, 'History', 'Pino Lella wants nothing to do with the war or the Nazis. He’s a normal Italian teenager—obsessed with music, food, and girls—but his days of innocence are numbered. When his family home in Milan is destroyed by Allied bombs, Pino joins an underground railroad helping Jews escape over the Alps, and falls for Anna, a beautiful widow six years his senior.\r\n\r\nIn an attempt to protect him, Pino’s parents force him to enlist as a German soldier—a move they think will keep him out of combat. But after Pino is injured, he is recruited at the tender age of eighteen to become the personal driver for Adolf Hitler’s left hand in Italy, General Hans Leyers, one of the Third Reich’s most mysterious and powerful commanders.\r\n\r\nNow, with the opportunity to spy for the Allies inside the German High Command, Pino endures the horrors of the war and the Nazi occupation by fighting in secret, his courage bolstered by his love for Anna and for the life he dreams they will one day share.\r\n\r\nFans of All the Light We Cannot See, The Nightingale, and Unbroken will enjoy this riveting saga of history, suspense, and love.', 'h003.jpg', ''),
('m001', 'I Have Lost My Way\r\nby Gayle Forman', 916, 'Music', 'Around the time that Freya loses her voice while recording her debut album, Harun is making plans to run away from everyone he has ever loved, and Nathaniel is arriving in New York City with a backpack, a desperate plan, and nothing left to lose. When a fateful accident draws these three strangers together, their secrets start to unravel as they begin to understand that the way out of their own loss might just lie in help­ing the others out of theirs.', 'm001.jpg', ''),
('m002', 'The Midnights\r\nby Sarah Nicole Smetana', 67, 'Music', 'Susannah Hayes has never been in the spotlight, but she dreams of following her father, a former rock star, onto the stage. As senior year begins, she’s more interested in composing impressive chord progressions than college essays, certain that if she writes the perfect song, her father might finally look up from the past long enough to see her. But when he dies unexpectedly her dreams—and her reality—shatter.\r\n\r\nWhile Susannah struggles with grief, her mother uproots them to a new city. There, Susannah realizes she can reinvent herself however she wants: a confident singer-songwriter, member of a hip band, embraced by an effortlessly cool best friend. But Susannah is not the only one keeping secrets, and soon, harsh revelations threaten to unravel her life once again.', 'm002.jpg', ''),
('m003', 'The Calculus of Change\r\nby Jessie Hilb', 98, 'Music', 'A poignant and empowering teen novel of grief, unrequited love, and finding comfort in one\'s own skin.\r\n\r\nAden isn\'t looking for love in her senior year. She\'s much more focused on things like getting a solo gig at Ike\'s and keeping her brother from illegal herbal recreation. But when Tate walks into Calculus class wearing a yarmulke and a grin, Aden\'s heart is gone in an instant.\r\n\r\nThe two are swept up in a tantalizingly warm friendship, complete with long drives with epic soundtracks and deep talks about life, love, and spirituality. With Tate, Aden feels closer to her mom—and her mom\'s faith—than she has since her mother died years ago. Everyone else—even Aden\'s brother and her best friend—can see their connection, but does Tate?\r\n\r\nNavigating uncertain romance and the crises of those she loves, Aden must decide how she chooses to see herself and how to honor her mom’s memory. ', 'm003.jpg', ''),
('sf001', 'The Final Six\r\nby Alexandra Monir', 367, 'Science Fiction', 'When Leo, an Italian championship swimmer, and Naomi, a science genius from California, are two of the twenty-four teens drafted into the International Space Training Camp, their lives are forever altered. After erratic climate change has made Earth a dangerous place to live, the fate of the population rests on the shoulders of the final six who will be scouting a new planet. Intense training, global scrutiny, and cutthroat opponents are only a few of the hurdles the contestants must endure in this competition.\r\n\r\nFor Leo, the prospect of traveling to Europa—Jupiter’s moon—to help resettle humankind is just the sense of purpose he’s been yearning for since losing his entire family in the flooding of Rome. Naomi, after learning of a similar space mission that mysteriously failed, suspects the ISTC isn’t being up front with them about what’s at risk.\r\n\r\nAs the race to the final six advances, the tests get more challenging—even deadly. With pressure mounting, Naomi finds an unexpected friend in Leo, and the two grow closer with each mind-boggling experience they encounter. But it’s only when the finalists become fewer and their destinies grow nearer that the two can fathom the full weight of everything at stake: the world, the stars, and their lives.', 'sf001.jpg', ''),
('sf002', 'The Last Jedi (Star Wars: Novelizations #8)\r\nby Jason Fry', 165, 'Science Fiction', 'Rey continues her epic journey with Finn, Poe, and Luke Skywalker in this thrilling novelization of Star Wars: The Last Jedi written by New York Times bestselling author Jason Fry.', 'sf002.jpg', ''),
('sf003', 'Gods, Monsters, and the Lucky Peach\r\nby Kelly Robson ', 166, 'Science Fiction', 'Discover a shifting history of adventure as humanity clashes over whether to repair their ruined planet or luxuriate in a less tainted past.\r\n\r\nIn 2267, Earth has just begun to recover from worldwide ecological disasters. Minh is part of the generation that first moved back up to the surface of the Earth from the underground hells, to reclaim humanity\'s ancestral habitat. She\'s spent her entire life restoring river ecosystems, but lately the kind of long-term restoration projects Minh works on have been stalled due to the invention of time travel. When she gets the opportunity take a team to 2000 BC to survey the Tigris and Euphrates rivers, she jumps at the chance to uncover the secrets of the shadowy think tank that controls time travel technology.', 'sf003.jpg', ''),
('th001', 'If I Die Tonight\r\nby Alison Gaylin ', 478, 'Thriller', 'Late one night in the quiet Hudson Valley town of Havenkill, a distraught woman stumbles into the police station—and lives are changed forever.\r\n\r\nAimee En, once a darling of the ’80s pop music scene, claims that a teenage boy stole her car, then ran over another young man who’d rushed to help.\r\n\r\nAs Liam Miller’s life hangs in the balance, the events of that fateful night begin to come into focus. But is everything as it seems?\r\n\r\nThe case quickly consumes social media, transforming Liam, a local high school football star, into a folk hero, and the suspect, a high school outcast named Wade Reed, into a depraved would-be killer. But is Wade really guilty? And if he isn’t, why won’t he talk?\r\n\r\nTold from a kaleidoscope of viewpoints—Wade’s mother Jackie, his younger brother Connor, Aimee En and Pearl Maze, a young police officer with a tragic past, If I Die Tonight is a story of family ties and dark secrets—and the lengths we’ll go to protect ourselves.', 'th001.jpg', ''),
('th002', 'The Escape Artist\r\nby Brad Meltzer', 243, 'Thriller', 'In #1 bestselling author Brad Meltzer\'s new thriller, death is just another way to disappear.\r\n\r\nTwo hours outside of Washington, DC is the mortuary for the U.S. government\'s most top-secret and high profile cases. America\'s most important funeral home. To work there, mortician Jim \"Zig\" Zwicharowski has one rule: never let a case get personal. But when a new body arrives--of young female sergeant Nola Brown, who was a childhood friend of Zig\'s daughter--Zig can\'t help himself. Looking closely at Nola\'s body, he realizes immediately: this isn\'t Nola. Indeed, his daughter\'s friend is still alive. And on the run. Zig\'s discovery reveals a sleight of hand being played at the highest levels of power--and traces back through history to a man named Harry Houdini. \"Nola, you were right. Keep running.\"', 'th002.jpg', ''),
('th003', 'The Disappeared (Joe Pickett #18)\r\nby C.J. Box ', 123, 'Thriller', 'Wyoming\'s new governor isn\'t sure what to make of Joe Pickett, but he has a job for him that is extremely delicate. Three British executives, all women, never came home from the high-end guest ranch they were visiting, and the British Embassy is pressing hard. Pickett knows that happens sometimes--these ranches are stocked with handsome young cowboys, and \"ranch romances\" aren\'t uncommon. But three disappearances? That\'s too many.\r\n\r\nAt the same time, with the help of his friend Nate Romanowski, he\'s been called to investigate the killings of several bald and golden eagles--a serious federal crime. The more he investigates both cases, the more someone wants him to go away. Is it because of the missing woman or the dead eagles? Or are they somehow connected? The answers, when they come, will be even worse than he\'d imagined.', 'th003.jpg', ''),
('tr001', 'Miles Away from You\r\nby A.B. Rutledge', 85, 'Travel', 'It\'s been three years since Miles fell for Vivian, a talented and dazzling transgender girl. Eighteen months since a suicide attempt left Vivian on life support. Now Miles isn\'t sure who he is without her, but knows it’s time to figure out how to say goodbye.\r\n\r\nHe books a solo trip to Iceland but then has a hard time leaving the refuge of his hotel room. After a little push from Oskar, a local who is equal parts endearing and aloof, Miles decides to honor Vivian\'s life by photographing her treasured Doc Martens standing empty against the surreal landscapes. With each step he takes, Miles finds his heart healing--even as he must accept that Vivian, still in a coma, will never recover.\r\n\r\nTold through a series of instant messages to Vivian, this quirky and completely fresh novel explores love, loss, and the drastic distances we sometimes have to travel in order to move on.', 'tr001.jpg', ''),
('tr002', 'Layover\r\nby Amy Andelson, Emily Meyer ', 170, 'Travel', 'Flynn: At first we were almost strangers. But ever since I moved to New York, Amos was the one person I could count on. And together we were there for Poppy. (I mean, what kind of parents leave their kid to be raised by a nanny?) I just didn’t expect to fall for him—and I never expected him to leave us.\r\n\r\nAmos: I thought I was the only one who felt it. I told myself it was because we were spending so much time together—taking care of Poppy and all. But that night, I could tell she felt it, too. And I freaked out—you’re not supposed to fall for your stepsister. So I ran away to boarding school. I should have told her why I was leaving, but every time I tried, it felt like a lie.', 'tr002.jpg', ''),
('tr003', 'Finding Gobi: The true story of a little dog and an incredible journey\r\nby Dion Leonard ', 384, 'Travel', 'Like A Streecat Named Bob before it, Finding Gobi is a truly heart-warming story for animal lovers worldwide…\r\n\r\nIn 2016, Dion Leonard, a seasoned ultramarathon runner, unexpectedly stumbled across a little stray dog while competing in a gruelling 155 mile race across the Gobi Desert. The lovable pup, who earned the name ‘Gobi’, proved that what she lacked in size, she more than made up for in heart, as she went step for step with Dion over the treacherous Tian Shan Mountains, managing to keep pace with him for nearly 80 miles.\r\n\r\nAs Dion witnessed the incredible determination of this small animal, he felt something change within himself. In the past he had always focused on winning and being the best, but his goal now was simply to make sure that his new friend was safe, nourished and hydrated. Although Dion did not finish first, he felt he had won something far greater and promised to bring Gobi back to the UK for good to become a new addition to his family. This was the start of a journey neither of them would ever forget with a roller coaster ride of drama, grief, heartbreak, joy and love that changed their lives forever.\r\n\r\nFinding Gobi is the ultimate story of hope, of resilience and of friendship, proving once again, that dogs really are ‘man’s best friend.’', 'tr003.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `email`) VALUES
('5066', 'khaniki', 'sani@gmail.com'),
('janu', '123456', 'janu@gmail.com'),
('03', '123456', 'sharif@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
