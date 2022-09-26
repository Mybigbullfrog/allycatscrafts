<?php

namespace Database\Seeders;

use App\Models\Book;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //DB::table('books')->truncate();

        //1
        Book::create([
            'title' => 'My First Book',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 950,
            'price' => 24.95,
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.'
        ]);
        //2
        Book::create([
            'title' => 'My Second Book',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 300,
            'price' => 29.95,
            'description' => 'What a great second book to delve into this eloquent business.'
        ]);
        //3
        Book::create([
            // Matt Stauffer
            'title' => 'Laravel: Up & Running: A Framework for Building Modern PHP Apps',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 554,
            'price' => 31.71,
            'description' => 'What sets Laravel apart from other PHP web frameworks? Speed and simplicity, for starters. This rapid application development framework and its ecosystem of tools let you quickly build new sites and applications with clean, readable code. Fully updated to cover Laravel 5.8, the second edition of this practical guide provides the definitive introduction to one of today’s most popular web frameworks.'
        ]);
        //4
        Book::create([
            // Josh Lockhart
            'title' => 'Modern PHP: New Features and Good Practices',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 270,
            'price' => 19.95,
            'description' => 'PHP is experiencing a renaissance, though it may be difficult to tell with all of the outdated PHP tutorials online. With this practical guide, you’ll learn how PHP has become a full-featured, mature language with object-orientation, namespaces, and a growing collection of reusable component libraries.'
        ]);
        //5
        Book::create([
            // Daniel Correa and Paola Vallejo
            'title' => 'Practical Laravel: Develop clean MVC web applications',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 177,
            'price' => 16.99,
            'description' => 'Laravel is a PHP web application framework with expressive and elegant syntax. We will use Laravel to develop an Online Store application that uses several Laravel features. The Online Store application will be the means to understand straightforward and complex Laravel concepts and how Laravel features can be used to implement real-world applications.'
        ]);
        //6
        Book::create([
            // Jesse Griffin
            'title' => 'Domain-Driven Laravel: Learn to Implement Domain-Driven Design Using Laravel',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 636,
            'price' => 39.27,
            'description' => 'Map concepts and ideas in domain-driven design (DDD) and transpose them into clean, testable, and quality code that is effective alongside the Laravel framework. This book teaches you how to implement the concepts and patterns present in DDD in the real world as a complete web application. With these tactics and concepts in place, you\'ll engage in a variety of example applications, built from the ground up, and taken directly from real-world domains.'
        ]);
        //7
        // Francois Dupire
        Book::create([
            'title' => 'Git Essentials: Developer\'s Guide to Git',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 187,
            'price' => 22.99,
            'description' => 'Git Essentials is a book for for all developers, beginner to advanced, and written to get you up to speed with the world\'s most popular version control system. Git has become synonymous with VCSs and is expected to be in the wheelhouse of every developer as one of the most fundamental tools used to coordinate software development.'
        ]);

        //8
        // Scott Chacon
        Book::create([
            'title' => 'Pro Git',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 440,
            'price' => 47.22,
            'description' => 'Pro Git (Second Edition) is your fully-updated guide to Git and its usage in the modern world. Git has come a long way since it was first developed by Linus Torvalds for Linux kernel development. It has taken the open source world by storm since its inception in 2005, and this book teaches you how to use it like a pro.'
        ]);
        //9
        // Richard Silverman
        Book::create([
            'title' => 'Git Pocket Guide: A Working Introduction',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 231,
            'price' => 24.99,
            'description' => 'This pocket guide is the perfect on-the-job companion to Git, the distributed version control system. It provides a compact, readable introduction to Git for new users, as well as a reference to common commands and procedures for those of you with Git experience.'
        ]);
        //10
        // Mark Lutz
        Book::create([
            'title' => 'Python Pocket Reference: Python In Your Pocket (Pocket Reference)',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 262,
            'price' => 13.96,
            'description' => 'Updated for both Python 3.4 and 2.7, this convenient pocket guide is the perfect on-the-job quick reference. You\'ll find concise, need-to-know information on Python types and statements, special method names, built-in functions and exceptions, commonly used standard library modules, and other prominent Python tools. The handy index lets you pinpoint exactly what you need.'
        ]);
        //11
        // Mark Lutz
        Book::create([
            'title' => 'Learning Python, 5th Edition',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 1643,
            'price' => 58.55,
            'description' => 'Get a comprehensive, in-depth introduction to the core Python language with this hands-on book. Based on author Mark Lutz’s popular training course, this updated fifth edition will help you quickly write efficient, high-quality code with Python. It’s an ideal way to begin, whether you’re new to programming or a professional developer versed in other languages.'
        ]);
        //12
        // Al Sweigart
        Book::create([
            'title' => 'Automate the Boring Stuff with Python, 2nd Edition: Practical Programming for Total Beginners 2nd Edition',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 592,
            'price' => 26.49,
            'description' => 'This new, fully revised edition of Al Sweigart’s bestselling Pythonic classic, Automate the Boring Stuff with Python, covers all the basics of Python 3 while exploring its rich library of modules for performing specific tasks, like scraping data off the Web, filling out forms, renaming files, organizing folders, sending email responses, and merging, splitting, or encrypting PDFs. There’s also a brand-new chapter on input validation, tutorials on automating Gmail and Google Sheets, tips on automatically updating CSV files, and other recent feats of automations that improve your efficiency.'
        ]);
        //13
        Book::create([
            // Matt Zandstra
            'title' => 'PHP 8 Objects, Patterns, and Practice: Mastering OO Enhancements, Design Patterns, and Essential Development Tools 6th ed. Edition',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 858,
            'price' => 48.99,
            'description' => 'Learn how to develop elegant and rock-solid systems using PHP, aided by three key elements: object fundamentals, design principles, and best practices. The 6th edition of this popular book has been fully updated for PHP 8, including attributes, constructor property promotion, new argument and return pseudo-types, and more. It also covers many features new since the last edition including typed properties, the null coalescing operator, and void return types. This book provides a solid grounding in PHP\'s support for objects, it builds on this foundation to instill core principles of software design and then covers the tools and practices needed to develop, test, and deploy robust code.'
        ]);
        //14
        // Matt Zandstra
        Book::create([
            'title' => 'PHP Objects, Patterns, and Practice 5th ed. Edition',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 603,
            'price' => 48.74,
            'description' => 'The 5th edition of this popular book has been fully updated for PHP 7, including replacing the PEAR package manager with Composer, and new material on Vagrant and PHP standards. It provides a solid grounding in PHP\'s support for objects, it builds on this foundation to instill core principles of software design and then covers the tools and practices needed to develop, test and deploy robust code.'
        ]);
        //15
        // Matt Zandstra
        Book::create([
            'title' => 'Sam\'s Teach Yourself PHP in 24 Hours (3rd Edition): Php in 24 Hours',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 576,
            'price' => 39.99,
            'description' => 'Think of all the things you could do in 24 hours. Go sightseeing. Read a book. Learn PHP. Sam\'s Teach Yourself PHP in 24 Hours is a unique learning tool that is divided into 24 one-hour lessons over five sections. Starting with the basics, you will discover the fundamentals of PHP and how to apply that knowledge to create dynamic websites with forms, cookies and authentication functions. You will also find out how to access databases, as well as how to integrate system components, e-mail, LDAP, network sockets and more. A support website includes access to source code, PHP updates, errata and links to other relevant websites. Sams Teach Yourself PHP in 24 Hours is a quick and easy way to learn how to create interactive websites for your end user.'
        ]);
        //16
        // Herman Melville
        Book::create([
            'title' => 'Moby Dick (Royal Collector\'s Edition) (Case Laminate Hardcover with Jacket)',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 552,
            'price' => 39.95,
            'description' => 'A sailor called Ishmael narrates the obsessive quest of Ahab, captain of the whaler Pequod, for revenge on Moby Dick, a white whale which on a previous voyage destroyed Ahab\'s ship and severed his leg at the knee. Although the novel was a commercial failure and out of print at the time of the author\'s death in 1891, its reputation as a Great American Novel grew during the 20th century. William Faulkner confessed he wished he had written it himself, and D. H. Lawrence called it fresh
            "one of the strangest and most wonderful books in the world", and "the greatest book of the sea ever written."'
        ]);
        //17
        // Herman Melville
        Book::create([
            'title' => 'Billy Budd',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 76,
            'price' => 6.999,
            'description' => '“Billy Budd” is the final work of American author Herman Melville which was discovered amongst his papers three decades after his death and first published in Raymond Weaver’s 1924 edition of “The Collected Works of Melville.” The emergence of that collection as well as Weaver’s 1921 biography, “Herman Melville: Man, Mariner and Mystic”, sparked a revival of interest in the forgotten writer. Despite the complex and incomplete nature of the manuscript excitement arose around this “new” Melville work when it was first discovered. The novel is concerned with its titular character, Billy Budd, a navy sailor accused of mutiny by a fellow officer, who immediately strikes his accuser dead, followed quickly by a trial, conviction and execution. The story stemmed from Melville’s interest in an 1888 article called “The Mutiny on the Somers,” concerning three sailors who in 1842 had been convicted of mutiny. Presented here in this volume is Weaver’s original 1924 edition, a first of many attempts to piece together and refine the sometimes illegible text, which included questionable additions and omissions made by Melville’s wife after his death. This edition is printed on premium acid-free paper and includes the often omitted “Daniel Orme” chapter.'
        ]);
        //18
        // Herman Melville
        Book::create([
            'title' => 'Billy Budd, Sailor',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 160,
            'price' => 5.99,
            'description' => 'Billy Budd, Sailor has been called the best short novel ever written. In his brilliantly condensed prose, Herman Melville fashions a legal parable in which reason and intellect prove incapable of preserving innocence in the face of evil. For all those who feel themselves threatened by a hostile and inflexible environment, there is special significance in this haunting story of a handsome sailor who becomes a victim of man’s intransigence.'
        ]);
        //19
        // Herman Melville
        Book::create([
            'title' => 'Benito Cereno ',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 86,
            'price' => 5.95,
            'description' => 'Benito Cereno is a story by Herman Melville that features some of the author\’s most action packed storytelling presented in this new edition of the great classic.'
        ]);
        //20
        // Steven Hyden
        Book::create([
            'title' => 'Long Road: Pearl Jam and the Soundtrack of a Generation',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 272,
            'price' => 29.00,
            'description' => 'Ever since Pearl Jam first blasted onto the Seattle grunge scene three decades ago with their debut album, Ten, they have sold 85M+ albums, performed for hundreds of thousands of fans around the world, and have even been inducted into the Rock and Roll Hall of Fame. In Long Road: Pearl Jam and the Soundtrack Of A Generation, music critic and journalist Steven Hyden celebrates the life, career, and music of this legendary group, widely considered to be one of the greatest American rock bands of all time. Long Road is structured like a mix tape, using 18 different Pearl Jam classics as starting points for telling a mix of personal and universal stories. Each chapter tells the tale of this great band — how they got to where they are, what drove them to greatness, and why it matters now.'
        ]);
        //21
        // Ronen Givony
        Book::create([
            'title' => 'Not for You: Pearl Jam and the Present Tense',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 440,
            'price' => 27.00,
            'description' => 'There has never been a band like Pearl Jam. The Seattle quintet has recorded eleven studio albums; sold some 85 million records; played over a thousand shows, in fifty countries; and had five different albums reach number one. But Pearl Jam\'s story is about much more than music. Through resilience, integrity, and sheer force of will, they transcended several eras, and shaped the way a whole generation thought about art, entertainment, and commerce.'
        ]);
        //22
        // Pearl Jam
        Book::create([
            'title' => 'Pearl Jam Anthology - The Complete Scores: Deluxe Box Set',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 816,
            'price' => 50.10,
            'description' => 'This deluxe hard-cover book provides 130 complete lyrics and transcriptions of every song on the Pearl Jam albums Ten through Lightning Bolt. Over 800 pages of music contain lyrics and streamlined transcriptions of every instrument that was recorded for an amazing written documentation of this influential band. Guitar and bass parts are written in both standard notation and tablature.'
        ]);
        //23
        // Steve Gorman
        Book::create([
            'title' => 'Hard to Handle: The Life and Death of the Black Crowes--A Memoir',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 369,
            'price' => 11.99,
            'description' => 'For more than two decades, The Black Crowes topped the charts, graced the cover of Rolling Stone, and reigned supreme over MTV and radio waves alike with hits like "Hard to Handle," "She Talks to Angels," and "Remedy." But as the old cliché goes, stardom can be fleeting, and the group\'s success slowly dwindled as the band members got caught up in the rock star world and lost sight of their musical ambition. On any given night, they could be the best band you ever saw-or the most combative. Then, one last rift in 2013 proved insurmountable for the band to survive. After that, The Black Crowes would fly no more.'
        ]);
        //24
        // Steve Hyden
        Book::create([
            'title' => 'This Isn\'t Happening: Radiohead\'s "Kid A" and the Beginning of the 21st Century',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 258,
            'price' => 15.99,
            'description' => 'In 1999, as the end of an old century loomed, five musicians entered a recording studio in Paris without a deadline. Their band was widely recognized as the best and most forward-thinking in rock, a rarefied status granting them the time, money, and space to make a masterpiece. But Radiohead didn\'t want to make another rock record. Instead, they set out to create the future.'
        ]);
        //25
        // Steve Hyden
        Book::create([
            'title' => 'Twilight of the Gods: A Journey to the End of Classic Rock',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 323,
            'price' => 12.49,
            'description' => 'Since the late 1960s, a legendary cadre of artists—including the Rolling Stones, Bob Dylan, Neil Young, Bruce Springsteen, Fleetwood Mac, the Eagles, Black Sabbath, and the Who—has revolutionized popular culture and the sounds of our lives. While their songs still get airtime and some of these bands continue to tour, its idols are leaving the stage permanently. Can classic rock remain relevant as these legends die off, or will this major musical subculture fade away as many have before, Steven Hyden asks.'
        ]);
        //26
        // Steve Hyden
        Book::create([
            'title' => 'Your Favorite Band Is Killing Me: What Pop Music Rivalries Reveal About the Meaning of Life',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 306,
            'price' => 8.99,
            'description' => 'Beatles vs. Stones. Biggie vs. Tupac. Kanye vs. Taylor. Who do you choose? And what does that say about you? Actually -- what do these endlessly argued-about pop music rivalries say about us?  Music opinions bring out passionate debate in people, and Steven Hyden knows that firsthand. Each chapter in Your Favorite Band Is Killing Me focuses on a pop music rivalry, from the classic to the very recent, and draws connections to the larger forces surrounding the pairing.'
        ]);
        //27
        // Gordon Ramsay
        Book::create([
            'title' => 'Gordon Ramsay\'s Home Cooking: Everything You Need to Know to Make Fabulous Food ',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 618,
            'price' => 14.99,
            'description' => 'Cook with confidence and find inspiration with Gordon Ramsay\'s fun, delicious recipes for novice cooks and experienced chefs alike.  Based on a new cooking show, this book will give experienced as well as novice cooks the desire, confidence and inspiration to get cooking. Ramsay will offer simple, accessible recipes with a "wow" factor. Gordon has travelled the world from India and the Far East to LA and Europe, and the recipes in this book will draw all these culinary influences together to show us simple, vibrant and delicious recipes that reflect the way we eat today. For example: Miso braised salmon fillet with Asian vegetables, Pork and Bacon slider with home made bbq sauce, Curried Sweetcorn Soup, Wild Mushroom Risotto Arrancini, and Baked Lemon Cheesecake with Raspberries.'
        ]);
        //28
        // Gordon Ramsay
        Book::create([
            'title' => 'Gordon Ramsay\'s Healthy, Lean & Fit: Mouthwatering Recipes to Fuel You for Life',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 254,
            'price' => 15.99,
            'description' => 'The definitive guide to eating well to achieve optimum health and fitness, by one of the world\'s finest chefs and fitness fanatic, Gordon Ramsay.  Gordon Ramsay knows how important it is to eat well, whether you\'re training for a marathon or just trying to live healthier. And just because it\'s healthy food, doesn\'t mean you have to compromise on taste and flavor. As a Michelin-star super-chef who is also a committed athlete, Gordon Ramsay shares his go-to recipes for when he wants to eat well at home.'
        ]);
        //29
        // Gordon Ramsay
        Book::create([
            'title' => 'Gordon Ramsay Quick and Delicious: 100 Recipes to Cook in 30 Minutes or Less',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 362,
            'price' => 15.99,
            'description' => 'Create chef-quality food without spending hours in the kitchen -- these are the recipes and straightforward tips you need to make good food fast.  With unlimited access to recipes, why does anyone need another cookbook? Because not all recipes are born equal. Not all of them have been created by a global superstar chef who has built his reputation on delivering the very best food -- whether that\'s the ultimate fine dining experience at his 3 Michelin-star Restaurant, Gordon Ramsay, or the perfectly crafted burger from his Las Vegas burger joint.'
        ]);
        //30
        // Gordon Ramsay
        Book::create([
            'title' => 'Gordon Ramsay\’s Great British Pub Food',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 223,
            'price' => 6.49,
            'description' => 'In his outstanding new cookbook, Gordon Ramsay teams up with Mark Sargeant to showcase the best of British cooking. Packed full of sumptuous and hearty traditional recipes, Gordon Ramsay\'s Great British Pub Food is perfect for relaxed, homely and comforting cooking.  Pubs were once a place where you could always guarantee good, simple, cheap food and a great Sunday roast, but when the steak houses and fast food chains arrived the good home cooking from the pub kitchens was replaced with tasteless, defrosted meals. Then came the gastro-pubs, which weren\'t much better, serving mediocre food at restaurant prices.'
        ]);
        //31
        // Gordon Ramsay
        Book::create([
            'title' => 'Gordon Ramsay\’s Playing with Fire: Raw, Rare to Well Done',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 270,
            'price' => 11.99,
            'description' => 'Not a sausage. That is what Gordon Ramsay had when he started out as a chef, working 16-hour days, 6 days a week. When he was struggling to get his first restaurant in the black, he didn\'t think he\'d be famous for a TV show about how to run profitable eateries, or that he\'d be head of a business empire. But he is and he did. Here\'s how.'
        ]);
        //32
        // Gordon Ramsay
        Book::create([
            'title' => 'Roasting in Hell\'s Kitchen: Temper Tantrums, F Words, and the Pursuit of Perfection',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 219,
            'price' => 10.99,
            'description' => 'For the first time, Ramsay tells the full inside story of his life and how he became the world\'s most famous and infamous chef: his difficult childhood, his brother\'s heroin addiction, his failed first career as a soccer player, his fanatical pursuit of gastronomic perfection and his TV persona—all of the things that made him the celebrated culinary talent and media powerhouse that he is today.'
        ]);
        //33
        // Gordon Ramsay
        Book::create([
            'title' => 'Gordon Ramsay\’s Great Escape: 100 of my favourite Indian recipes',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 191,
            'price' => 7.49,
            'description' => 'Three-star chef Gordon Ramsay\'s favourite food is one that he shares with a lot of Britain - curry. But, until now, he\'s never been to India to see how the real thing is cooked. Accompanied by a Channel 4 film crew, Gordon takes the culinary trip of a lifetime to discover real Indian cuisine and share this collection of over 100 of his favourite Indian dishes.'
        ]);
        //34
        // Steve Raymond
        Book::create([
            'title' => 'Steelhead Country: Angling for a Fish of Legend',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 226,
            'price' => 18.93,
            'description' => 'Steelhead Country is not just a collection of random fishing stories. It is a personal and lovingly crafted account of a life spent immersed in a tradition that stretches back generations. Acclaimed flyfisherman and author Steve Raymond paints a picture of the world of steelhead trout that is “a realm of vast landscapes, of cold mountain rivers flowing down through silent, shadowed forests . . . , of ragged coastlines honeycombed with hidden harbors and secret bays where bright rivers mingle with the sea.”'
        ]);
        //35
        // Steve Raymond
        Book::create([
            'title' => 'A Fly Fisher\'s Sixty Seasons: True Tales of Angling Adventures',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 196,
            'price' => 23.00,
            'description' => 'Witty and heartfelt, Sixty Seasons looks back over more than half a century of fly fishing and writing about fly fishing. Steve Raymond returns with an informative and delightful collection of memories, stretching over his sixty seasons spent fishing.  Raymond takes the opportunity to write passionately about the full cast of his life, as well as how fly-fishing interacts with his life as a journalist, and vice versa. He offers sage advice about books, writers, rods, methods, and guides. He deftly ranges from joyful topics to bittersweet moments to a tongue-in-cheek quiz designed to test your fly-fishing sophistication.'
        ]);
        //36
        // Steve Raymond
        Book::create([
            'title' => 'Nervous Water: Variations on a Theme of Fly Fishing',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 226,
            'price' => 16.14,
            'description' => 'Nervous water has a meaning: while the fleeting crease or subtle wrinkle on the surface of a lake or stream could be nothing, wise anglers known that these small surface movements are nearly always signs of fish stirring below—as it is with the sport of fly fishing. With a reputation of tranquility and contemplation, it is sometimes hard to believe that, beneath the surface, fly fishing has a constant current of new thoughts and theories, is always in pursuit of new technologies, and entertains ongoing debates among prominent fly-fishing thinkers.'
        ]);
        //37
        // Steve Raymond
        Book::create([
            'title' => 'Trout Quintet: Five Stories of Life, Liberty, and the Pursuit of Fly Fishing',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 202,
            'price' => 8.99,
            'description' => 'There is an abundance of literature on the pleasure and wonder of fly fishing. The themes are familiar and well traveled: ruminations on aging and the passage of time; musings on marriage and balancing the love of friends and families with that of fishing; reflections on the need for companionship versus the quiet beauty and solitude of fly fishing.'
        ]);
        //38
        // Steve Raymond
        Book::create([
            'title' => 'Rivers of the Heart: A Fly-Fishing Memoir',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 187,
            'price' => 13.84,
            'description' => 'Stories are what keep history alive, and Rivers of the Heart is the perfect book to keep the history of fly fishing alive. Steve Raymond shares some of the best and brightest moments from his nearly fifty years of fly-fishing experiences, a long fly-fishing life that contains ecstasy, agony, and passion for trout, salmon, and saltwater game-fish in waters from Canada to the Caribbean, northern Scotland to the South Pacific.'
        ]);
        //39
        // Mark Twain - 39
        Book::create([
            'title' => 'Roughing It: Original Illustrations',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 518,
            'price' => 15.95,
            'description' => 'A beautiful edition with the formatting and all 300 images from the original first edition published in 1872. The cover is a Charles Nahl painting from 1852. Use Amazon\'s Look inside feature to compare this edition with others. You\'ll be impressed by the differences. Don\'t be fooled by other versions that have no illustrations or contain very small print. Reading our edition will make you feel that you are back in Nevada during the silver rush with Mark Twain himself. If you like our book, be sure to leave a review!'
        ]);
        //40
        // Mark Twain
        Book::create([
            'title' => 'Wisdom from America\'s Most-Revered Humorist',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 120,
            'price' => 9.95,
            'description' => 'Revered as one of America\’s greatest humorists and author of the “Great American Novel” (Adventures of Huckleberry Finn), the words of Samuel Langhorne Clemens—more commonly known as Mark Twain—resonate as strongly today as they did when he wrote them more than a century ago. A close friend of Nikola Tesla and heralded by William Faulkner as “the father of American literature,” Twain’s wit, wisdom, and influence continues through the present day.'
        ]);
        // Mark Twain - 41
        Book::create([
            'title' => 'Adventures of Huckleberry Finn (Dover Thrift Editions: Classic Novels)',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 224,
            'price' => 5.39,
            'description' => 'Referring to Adventures of Huckleberry Finn, H. L. Mencken noted that his discovery of this classic American novel was "the most stupendous event of my whole life"; Ernest Hemingway declared that "all modern American literature stems from this one book," while T. S. Eliot called Huck "one of the permanent symbolic figures of fiction, not unworthy to take a place with Ulysses, Faust, Don Quixote, Don Juan, Hamlet."'
        ]);
        // Michael Crichton - 42
        Book::create([
            'title' => 'Congo',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 384,
            'price' => 25.15,
            'description' => 'In the heart of Africa, three intrepid adventurers are desperate to find the fabulous diamonds of the lost city of Zinj. They encounter the Kigani cannibals, flaming volcanoes and ferocious gorillas - and Amy, the cuddly gorilla who\'s fluent in sign language.'
        ]);
        // Michael Crichton - 43
        Book::create([
            'title' => 'Pirate Latitudes',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 416,
            'price' => 15.02,
            'description' => '#1 New York Times bestselling author, the incomparable Michael Crichton (“One of the great storytellers of our age” —Newsday) takes to the high Caribbean seas for an irresistible adventure of swashbuckling pirates, lost treasure, sword fights, duplicity, and hair-breadth escapes in the New World.'
        ]);
        // Michael Crichton - 44
        Book::create([
            'title' => 'Eaters of the Dead',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 208,
            'price' => 43.98,
            'description' => 'It is 922 A.D. The refined Arab courtier Ibn Fadlan is accompanying a party of Viking warriors back to the north. Fadlan belatedly discovers that his job is to combat the terrors in the night that come to slaughter the Vikings--but just how he will do it, Fadlan has no idea....'
        ]);
        // Michael Crichton - 45
        Book::create([
            'title' => 'The Great Train Robbery',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 288,
            'price' => 11.47,
            'description' => 'London, 1855, when lavish wealth and appalling poverty exist side by side, one mysterious man navigates both worlds with perfect ease. Edward Pierce preys on the most prominent of the well-to-do as he cunningly orchestrates the crime of his century. Who would suspect that a gentleman of breeding could mastermind the extraordinary robbery aboard the pride of England\’s industrial era, the mighty steam locomotive? Based on fact, but studded with all the suspense and style of fiction, here is a classic historical thriller, set a decade before the age of dynamite—yet nonetheless explosive…'
        ]);
        // Michael Crichton - 46
        Book::create([
            'title' => 'The Lost World: A Novel (Jurassic Park)',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 432,
            'price' => 14.37,
            'description' => '#1 NEW YORK TIMES BESTSELLER • From the author of Timeline, Sphere, and Congo comes the sequel to the smash-hit Jurassic Park, a thriller that’s been millions of years in the making.  “Fast and gripping.”—The Washington Post Book World.  It is now six years since the secret disaster at Jurassic Park, six years since the extraordinary dream of science and imagination came to a crashing end—the dinosaurs destroyed, the park dismantled, and the island indefinitely closed to the public.'
        ]);
        // John Grisham - 47
        Book::create([
            'title' => 'The Broker: A Novel',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 386,
            'price' => 19.10,
            'description' => '#1 NEW YORK TIMES BEST SELLER • In his final hours in the Oval Office, the outgoing President grants a controversial last-minute pardon to Joel Backman, a notorious Washington power broker who has spent the last six years hidden away in a federal prison. What no one knows is that the President issues the pardon only after receiving enormous pressure from the CIA.  It seems Backman, in his power broker heyday, may have obtained secrets that compromise the world’s most sophisticated satellite surveillance system. Backman is quietly smuggled out of the country in a military cargo plane, given a new name, a new identity, and a new home in Italy. Eventually, after he has settled into his new life, the CIA will leak his whereabouts to the Israelis, the Russians, the Chinese, and the Saudis.'
        ]);
        // John Grisham - 48
        Book::create([
            'title' => 'Ford County: Stories',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 354,
            'price' => 10.95,
            'description' => 'This riveting collection of short stories features an unforgettable cast of characters: Wheelchair-bound Inez Graney and her two older sons embark on a bizarre road trip through the Mississippi Delta to visit Inez’s youngest son, Raymond—on death row. A hard-drinking, low-grossing divorce lawyer fed up with his wife, his life, and the law plans a drastic escape after an unexpected phone call. A quiet, unassuming data collector sets out to bring down a flashy casino owner with his skill at blackjack—as payback for the theft of his wife. A stalker hunts victims in a retirement home, a lawyer confronts a vengeful adversary from the past, and a young man from a prominent family is driven off by scandal and fear—but finds unexpected redemption on the wrong side of the tracks.'
        ]);
        // John Grisham - 49
        Book::create([
            'title' => 'The Guardians: A Novel',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 386,
            'price' => 13.73,
            'description' => '#1 NEW YORK TIMES BEST SELLER - A classic legal thriller—with a twist.  A suspenseful thriller mixed with powerful themes such as false incarceration, the death penalty and how the legal system shows prejudice. — Associated Press.  In the small Florida town of Seabrook, a young lawyer named Keith Russo was shot dead at his desk as he worked late one night. The killer left no clues. There were no witnesses, no one with a motive. But the police soon came to suspect Quincy Miller, a young Black man who was once a client of Russo\’s.'
        ]);
        // John Grisham - 50
        Book::create([
            'title' => 'A Time to Kill: A Novel',
            'image_url' => fake()->imageUrl(900, 1200, 'animals', true, 'cats'),
            'pages_count' => 672,
            'price' => 22.49,
            'description' => "The life of a ten-year-old black girl is shattered by two drunken and remorseless white men. The mostly white town of Clanton in Ford County, Mississippi, reacts with shock and horror at the inhuman crime—until the girl\’s father acquires an assault rifle and takes justice into his own hands."
        ]);


//        Book::create([
//            'title' => '',
//            'pages_count' => ,
//            'price' => ,
//            'description' => ')'
//        ]);


        //Book::factory(18)->create();
    }
}

