<?php

function getSex ($characterSex)
{
    
    if($characterSex == 1)
    {
        $sex = rand(1, 11);

        if($sex == 1)
        {
            return 'Other';
        }
        else if($sex >= 2 && $sex <=6)
        {
             return 'Male';
        }
        else{
            return 'Female';
        }
        
    }
    else if($characterSex == 2)
    {
        return 'Female';
    }
    else if($characterSex == 3)
    {
        return 'Male';
    }
    else if($characterSex == 4)
    {
        return 'Other';
    }
    else
    {
        return '';
    }
    
}


function getNameGender($select)
{
    if($select === 'Male')
    {
        return 0;
    }
    else if($select === 'Female')
    {
        return 1;
    }
    else
    {
        $randNumber = rand (0,1);
        return $randNumber;
    }
}



function africanGivenNamesMale()
{
    $giveNames = array ( 'Afram', 'Arali', 'Armani', 'Banji', 'Chata', 'Chiamaka', 'Chike', 'Dakarai', 'Deion', 'Deiondre', 'Dele', 'Dembe', 'Denzel', 'Dewayne', 'Diallo', 'Dikembe', 'Duante', 'Dume', 'Ebi', 'Essien', 'Faraji', 'Ibeamaka', 'Jamar', 'Jayvyn', 'Jevonte', 'Kabonero', 'Kabonesa', 'Kadeem', 'Kaleb', 'Kasi', 'Kendis', 'Kentay', 'Keshawn', 'Khalon', 'Kofi', 'Kwamin', 'Kwau', 'Kyan', 'Kyrone', 'La Vonn', 'Lado', 'Laken', 'Lakista', 'Lamech', 'Lavaughn', 'LeBron', 'Lisimba', 'Ludacris', 'Lugono', 'Luister', 'Mablevi', 'Mahdi', 'Makalo', 'Manu', 'Marques', 'Mashawn', 'Montraie', 'Mykelti', 'Nabulung', 'Naeem', 'Naftali', 'Napoleon', 'Nuru', 'Nwa', 'Obiajulu', 'Oja', 'Okal', 'Okapi', 'Okoth', 'Onaedo', 'Ontibile', 'Oringo', 'Orma', 'Otieno', 'Paulo', 'Peabo', 'Penda', 'Phornello', 'Polo', 'Quaashie', 'Quaddus', 'Quadrees', 'Quannell', 'Quarren', 'Quashawn', 'Quintavius', 'Quoitrel', 'Raimy', 'Rashon', 'Razi', 'Roshaun', 'Runako', 'Salim', 'Shaquille', 'Shevon', 'Shontae', 'Simba', 'Sulaiman', 'Tabansi', 'Tabari', 'Tamarius', 'Tavarius', 'Tavon', 'Tevaughn', 'Tevin', 'Trory', 'Tyrell', 'Uba', 'Ubanwa', 'Udenwa', 'Ulan', 'Uland', 'Umi', 'Useni', 'Usi', 'Uzoma', 'Uzondu', 'Vandwon', 'Vashon', 'Veltry', 'Verlyn', 'Voshon', 'Vul', 'Wasaki', 'Xayvion', 'Xhosas', 'Xyshaun', 'Yobachi', 'Zaid', 'Zareb', 'Zashawn', 'Girls', 'Mahdi', 'Maisha', 'Maizah', 'Malaika', 'Malkia', 'Mandisa', 'Manyara', 'Marjani', 'Mekell', 'Messina', 'Moesha', 'Muncel', 'Nafuna', 'Nailah', 'Naja', 'Najwa', 'Nakeisha', 'Nala', 'Narkaesha', 'Nasha', 'Nashaly', 'Nichelle', 'Niesha', 'Nimeesha', 'Nyeki', 'Okal', 'Okapi', 'Onaedo', 'Ontibile', 'Paka', 'Panya', 'Pasua', 'Pedzi', 'Pemba', 'Penda', 'Pita', 'Quanella', 'Quanesha', 'Quisha', 'Raimy', 'Ranielle', 'Rashida', 'Raziya', 'Ronnell', 'Safara', 'Safiya', 'Saidah', 'Salihah', 'Sekai', 'Semira');

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function africanAmericanGivenNamesMale()
{
    $giveNames = array ( 'Deion', 'Deiondre', 'Dele', 'Denzel', 'Dewayne', 'Dikembe', 'Duante', 'Jamar', 'Jevonte', 'Kadeem', 'Kendis', 'Kentay', 'Keshawn', 'Khalon', 'Kofi', 'Kwamin', 'Kyan', 'Kyrone', 'La Vonn', 'Lado', 'Laken', 'Lakista', 'Lamech', 'Lavaughn', 'LeBron', 'Lisimba', 'Ludacris', 'Mablevi', 'Marques', 'Mashawn', 'Montraie', 'Mykelti', 'Nabulung', 'Naeem', 'Napoleon', 'Obiajulu', 'Quaashie', 'Quaddus', 'Quadrees', 'Quannell', 'Quarren', 'Quashawn', 'Quintavius', 'Quoitrel', 'Raimy', 'Rashon', 'Razi', 'Roshaun', 'Runako', 'Salim ', 'Shaquille', 'Shevon', 'Shontae', 'Sulaiman', 'Tabansi', 'Tabari', 'Tamarius', 'Tavarius ', ' Tavon', 'Tevaughn', 'Tevin', 'Trory', 'Tyrell', 'Uba', 'Ulan', 'Uzoma', 'Vandwon', 'Vashon', 'Veltry', 'Verlyn', 'Voshon', 'Xayvion', 'Xyshaun', 'Yobachi', 'Zaid', 'Zareb', 'Zashawn'
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function americanGivenNamesMale()
{
    $giveNames = array ('Acura', 'Audio', 'Babyface', 'Banjo', 'Blaze', 'Bono', 'Boston', 'Butch', 'Cola', 'Coolio', 'Corvette', 'Deandre', 'Delmonte', 'Disney', 'Draylan', 'Droe', 'Durango', 'Duras', 'Dwalin', 'Edsel', 'Eminem', 'ESPN', 'Hamaliel', 'Harlem', 'Hopper', 'Hovie', 'Hulk', 'Jace', 'Jaxon', 'Jay-Z', 'Jeeves', 'Kacy', 'Kaden', 'Kadi', 'Kamon', 'Kance', 'Kaper', 'Kateo', 'Keandre', 'Ketchum', 'Khambrel', 'Kix', 'Koshy', 'Koster', 'Kyzer', 'Lafe', 'Lando', 'Lariat', 'Larnell', 'Lassiter ', ' Leavery', 'Len', 'Levar', 'Loudon', 'Loys', 'Lucky', 'Madock', 'Mahan', 'Manus', 'Matlock', 'Maverick', 'Mitchell', 'Mulder', 'Murfain', 'Myrle', 'Nato', 'Nedrun', 'Ninyun', 'Nodin', 'Obedience', 'Patch', 'Quick', 'Raeshon', 'Rahn', 'Rawleigh', 'Rayce', 'Ritch', 'Roam', 'Rooster', 'Schae', 'Scout', 'Seal', 'Sedgley', 'Selvon', 'Sesame', 'Seven', 'Shante', 'Spider', 'Stone', 'Ukel', 'Unitas', 'Unser', 'Utz', 'Vandiver', 'Varkey', 'Varlan', 'Veejay', 'Vegas', 'Velle', 'Verlin'
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function arabicGivenNamesMale()
{
    $giveNames = array ('Aaron', 'Abbott', 'Abdulaziz', 'Abuna', 'Adalai', 'Adham', 'Ahmad', 'Akbar', 'Al-Ashab', 'Ali', 'Altair', 'Amal', 'Amaros', 'Amir', 'Ankhhaf', 'Ara', 'Arash', 'Arslan', 'Asad', 'Azad', 'Azeem', 'Badr', 'Basil', 'Basim', 'Borak', 'Boutros', 'Coman', 'Fahd', 'Faisal', 'Fakih', 'Faraz', 'Fatin', 'Ferran', 'Gamal', 'Ghadir', 'Ghazi', 'Guadalupe', 'Habib', 'Haddad', 'Hadi', 'Hafez', 'Haidar', 'Hakeem', 'Hamal', 'Hamid', 'Hamza', 'Harsh', 'Harun', 'Hasan', 'Hormoz', 'Hussain', 'Ibrahim', 'Ilias', 'Imad', 'Isam', 'Jabir', 'Jakeem', 'Jaleel', 'Jawhar', 'Jericho', 'Juma', 'Kadar', 'Kadin', 'Kadir', 'Kahil', 'Kalb', 'Kalil', 'Kamil', 'Kardal', 'Kareem', 'Karif', 'Kaseem', 'Kasib', 'Kateb', 'Kaul', 'Kedar', 'Khairi', 'Khalid', 'Khoury', 'Lateef', 'Leron', 'Mahdi', 'Malcom', 'Malik', 'Mansour', 'Mansur', 'Masoud', 'Mohamed', 'Mohsen', 'Moroni', 'Muhammad', 'Mumtaz', 'Munir', 'Mustafa', 'Nabil', 'Naji', 'Najib', 'Nasim', 'Nasser', 'Nassir', 'Numa', 'Nuri', 'Oma', 'Omar', 'Onslow', 'Osama', 'Osman', 'Qabil', 'Qadim', 'Qadir', 'Qamar', 'Qasim', 'Quasim', 'Qudamah', 'Qusay', 'Raashid', 'Radwan', 'Rahul', 'Rajeev', 'Ramadan', 'Rami', 'Rashaan', 'Rehan', 'Rigel', 'Rimon', 'Riyad', 'Saddam', 'Said', 'Samien', 'Sammon', 'Seif', 'Shadrach', 'Shah', 'Shakar', 'Shakil', 'Shakir', 'Sharif', 'Shunnar', 'Tahir', 'Tamir', 'Tariq', 'Thabit', 'Ubadah', 'Umar', 'Umher', 'Usaid', 'Usamah', 'Uthman', 'Utt', 'Vega', 'Wahkan', 'Waleed', 'Waqar', 'Waseem', 'Wasim', 'Xavier', 'Yahya', 'Yasar', 'Yasin', 'Yasir', 'Yazid', 'Yunis', 'Yusef', 'Zaki', 'Zane', 'Zayd', 'Zayn', 'Zeke', 'Zimraan', 'Zircon', 'Zuhayr'
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function armenianGivenNamesMale()
{
    $giveNames = array ("Nishan", "Ohanna", "Vahe", "Vartan", "Yervant" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function celticGivenNamesMale()
{
    $giveNames = array ("Afton", "Ahearn", "Annan", "Fallon", "Finley", "Kearney", "Keary", "Kegan", "Keir", "Kendall", "Mannix", "Marmaduke", "Melvin", "Merlin", "Murray", "Perth", "Ronan", "Sean", "Tadc", "Tegan", "Tiernan", "Torin", "Tuathal", "Ultan", "Vaughan" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function chineseGivenNamesMale()
{
    $giveNames = array ("An", "Bing", "Chen", "Chung", "Confucius", "Cong", "Deshi", "Dewei", "Fo-hai", "Fo-hsing", "Gan", "Gao", "Genjo", "Ho", "Hsin", "Huang fu", "Hui-chao", "HuiK'o", "Jiang", "Jin", "Jing", "Jun", "Kong", "Lao-Tzu", "Lee", "Lei", "Li", "Li-Liang", "Liang", "Liko", "Manchu", "Ming", "Niao-ka", "On", "Qing-Nan", "Quon", "Shen", "Shing", "Sun", "Tung", "Uang", "Wang", "Wen", "Woo", "Wu-pen", "Xi-Wang", "Xiaoping", "Xin", "Xing-fu", "Yao", "Ye", "Yo", "Yong", "Yu", "Yuan", "Zhong", "Zhu", "Zhuang" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function czechGivenNamesMale()
{
    $giveNames = array ("Bedrich", "Cerny", "Damek", "Karel", "Kliment", "Ladislav", "Libor", "Ludomir", "Oldrich", "Radek", "Radoslav", "Rehor", "Strom", "Vasil", "Vavrin", "Vavrinec", "Veleslav", "Venec", "Vila", "Vladislav", "Vojtech", "Zdenek", "Zitomer"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function danishGivenNamesMale()
{
    $giveNames = array ( "Bartram", "Diederik", "Gardiner", "Hobart", "Ib", "Nils", "Soren"  
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function dutchGivenNamesMale()
{
    $giveNames = array (  "Hodding", "Kyler", "Maarten", "Rembrandt", "Rodolf", "Roosevelt", "Schuyler", "Sklaer", "Van", "Vandyke", "Wagner", "Zeeman" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function egyptianGivenNamesMale()
{
    $giveNames = array ("Imhotep", "Paki", "Rahotep", "Zahur" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function englishGivenNamesMale()
{
    $giveNames = array ( "Adney", "Aldo", "Aleyn", "Alford", "Amherst", "Angel", "Anson", "Archibald", "Aries", "Arwen", "Astin", "Atley", "Atwell", "Audie", "Avery", "Ayers", "Baker", "Balder", "Ballentine", "Bardalph", "Barker", "Barric", "Bayard", "Bishop", "Blaan", "Blackburn", "Blade", "Blaine", "Blaze", "Bramwell", "Brant", "Brawley", "Breri", "Briar", "Brighton", "Broderick", "Bronson", "Bryce", "Burdette", "Burle", "Byrd", "Byron", "Cabal", "Cage", "Cahir", "Cavalon", "Cedar", "Chatillon", "Churchill", "Clachas", "Cleavant", "Cleomenes", "Cloten", "Colson", "Colton", "Crandall", "Cupid", "Curio", "Dacian", "Dack", "Daelen", "Dagonet", "Dailan", "Dakin", "Dallin", "Dalton", "Dartmouth", "Dathan", "Dawson", "Dax", "Deandre", "Demarco", "Denton", "Denver", "Denzel", "Derward", "Diamond", "Dickinson", "Dillard", "Doane", "Doc", "Draper", "Dugan", "Dunley", "Dunn", "Dunstan", "Dwyer", "Dyson", "Ebony", "Edison", "Edred", "Edwy", "Egbert", "Eldwin", "Elgin", "Ellis", "Elwood", "Emmett", "Errol", "Escalus", "Ethelbert", "Ethelred", "Ethelwolf", "Everest", "Ewing", "Falkner", "Falstaff", "Farnell", "Farold", "Farran", "Fenton", "Finch", "Fitz", "Fleming", "Flint", "Fox", "Freedom", "Freyr", "Frollo", "Gaines", "Gale", "Gallant", "Gamel", "Garfield", "Garrett", "Geary", "Gene", "Gifford", "Gildas", "Gomer", "Graham", "Grand", "Green", "Gremio", "Gresham", "Griffin", "Grover", "Grumio", "Guard", "Guildenstern", "Guinness", "Hart", "Haskel", "Heathcliff", "Heaton", "Helmut", "Herring", "Herve", "Hickory", "Houston", "Howard", "Howe", "Hoyt", "Hurst", "Huxley", "Indiana", "Innocent", "Jagger", "Jarrell", "Jax", "Jaxon", "Jay", "Jet", "Judson", "Julian", "Kaid", "Keane", "Keaton", "Kell", "Kelsey", "Kelvin", "Kennard", "Kenneth", "Kentlee", "Ker", "Kester", "Kestrel", "Kingsley", "Kirby", "Klay", "Knightley", "Knowles", "Kody", "Kolby", "Kolton", "Kyler", "Lake", "Langden", "Langston", "Lathrop", "Leighton", "Lensar", "Lex", "Lindell", "Lindsay", "Livingston", "Locke", "London", "Lord", "Lowell", "Ludlow", "Luke", "Lusk", "Lyndal", "Lyndall", "Lynn", "Lynton", "Maddox", "Mallin", "Mander", "Mansfield", "Markham", "Marland", "Marley", "Marrock", "Marsh", "Marston", "Martin", "Marvin", "Massey", "Matheson", "Maverick", "Maxwell", "Mayer", "Melborn", "Melbourne", "Melburn", "Meldon", "Melor", "Merrick", "Merton", "Miles", "Monte", "Montgomery", "Moreland", "Morley", "Morrison", "Myles", "Nagel", "Ned", "Nellie", "Nesbit", "Newbury", "Newt", "Nile", "Norman", "Norris", "Northcliff", "Northrop", "Norton", "Norvell", "Norvin", "Norwin", "Nuys", "Obsidian", "Octha", "Odell", "Odette", "Offa", "Orlan", "Ormond", "Orrick", "Orson", "Osborn", "Osgood", "Osric", "Ossie", "Overton", "Pacey", "Parsifal", "Peers", "Pelleas", "Pelton", "Penda", "Pierce", "Piers", "Powell", "Quirin", "Radbert", "Radford", "Radley", "Radnor", "Raine", "Randal", "Rawdan", "Rayce", "Reed", "Reynold", "Rhett", "Rhodes", "Richard", "Ridge", "Ridgley", "Ris", "Rivalen", "Rivers", "Roan", "Robin", "Robson", "Rockleigh", "Rockwell", "Roden", "Roe", "Roldan", "Rosencrantz", "Ross", "Roswell", "Rowley", "Royce", "Rudd", "Rugby", "Rune", "Ryder", "Sadler", "Sage", "Salisbury", "Salter", "Sanborn", "Sandhurst", "Saxon", "Scarus", "Searles", "Seaton", "Sedgwick", "Seger", "Selby", "Seldon", "Selwyn", "Seton", "Severin", "Sewell", "Shade", "Shadow", "Shelby", "Sheldon", "Shepley", "Sherborn", "Sidwell", "Siler", "Simeon", "Siward", "Skye", "Slate", "Smith", "Somerby", "Somerton", "Sommar", "Spalding", "Spaulding", "Speers", "Stafford", "Stamford", "Stanbury", "Stancliff", "Stanwick", "Starr", "Steadman", "Sterling", "Stetson", "Stiles", "Sting", "Stoke", "Storm", "Stuart", "Sunny", "Sydney", "Sylvester", "Taft", "Talon", "Tem", "Templeton", "Thompson", "Thorley", "Thorndike", "Tolbert", "Tyson", "Uchtred", "Udall", "Udel", "Udolf", "Ulland", "Ulmer", "Unten", "Unwin", "Upjohn", "Upton", "Upwood", "Usher", "Uther", "Vail", "Valen", "Verges", "Versey", "Vine", "Vinson", "Vinton", "Voltimand", "Vortigem", "Wadell", "Wadley", "Wadsworth", "Wain", "Waite", "Walcott", "Wales", "Walford", "Walfred", "Walker", "Waller", "Walmir", "Walsh", "Walworth", "Walwyn", "Warburton", "Ward", "Warden", "Wardford", "Wardley", "Ware", "Waring", "Warley", "Warrick", "Warton", "Warwick", "Washburn", "Wat", "Watford", "Wayde", "Waylon", "Webb", "Welcome", "Weldon", "Westbrook", "Whistler", "Whitby", "Whitcomb", "Whittaker", "Wid", "Wiley", "Wilford", "Willow", "Wilton", "Wingy", "Wirt", "Wisdom", "Wissian", "Witton", "Wolcott", "Wolf", "Wolfe", "Woodis", "Woodson", "Wulfsige", "Wyclef", "Wynton", "Wynward", "Wyson", "Wythe", "Yardley", "Yeoman", "Yorath", "Yule", "Zani"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function finnishGivenNamesMale()
{
    $giveNames = array ("Juhani", "Jussi", "Kevat", "Miko", "Mustanen", "Vaino" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function frenchGivenNamesMale()
{
    $giveNames = array ( "Aleron", "Algernon", "Ames", "Amiens", "Aramis", "Audric", "Beau", "Blaise", "Bonar", "Boniface", "Boyce", "Briar", "Bruce", "Byron", "Cabal", "Cade", "Campbell", "Canaan", "Canon", "Carolus", "Carvell", "Chainey", "Chevy", "Ciel", "Circinus", "Colar", "Colville", "Courvoisier", "Coyne", "Dabney", "Dashiell", "Dax", "Delano", "Demont", "Destin", "Didier", "Dior", "Donatien", "Etienne", "Fabron", "Ferrand", "Franchot", "Francois", "Frasier", "Gage", "Garen", "Gareth", "Garland", "Garner", "Garrison", " Gaston", "Gaylord", "Gerald", "Germain", "Geron", "Giles", "Glanville", "Gower", "Granger", "Grant", "Granville", "Guy", "Hackett", "Hello", "Holland", "Honore", "Jacques", "Jasper", "Javier", "Jean", "Jemond", "Jesper", "Labaron", "Lance", "Landry", "Laramie", "Laron", "Larrimore", "Launcelot", "Laurent", "Leggett", "Leverett", "Lionel", "Luc", "Mallory", "Marcel", "Mardian", "Marin", "Marshall", "Marvel", "Mason", "Merrill", "Montague", "Montgomery", "Montrell", "Montrose", "Mortimer", "Nazaire", "Neville", "Noel", " Odil", "Odilon", "Odo", "Olier", "Oliver", "Olympe", "Orane", "Orleans", "Orson", "Orville", "Ouida", "Page", "Paris", "Pascal", "Percy", "Pernell", "Pierre", "Platt", "Porter", "Quincy", "Rance", "Ranger", "Raul", "Ray", "Raynard", "Remi", "Romain", "Ross", "Royal", "Rupert", "Rush", "Russel", "Saber", "Sargent", "Satch", "Senior", "Sennett", "Sergeant", "Severin", "Seymour", "Sezni", "Sid", "Similien", "Sinclair", "Sinjon", "Sorrel", "Sumner", "Talbot", "Telford", "Tenenan", " Thibaud", "Travis", "Tremeur", "Tugdual", "Tujan", "Turiau", "Tyson", "Umber", "Vachel", "Valeray", "Varden", "Varil", "Varocher", "Verdun", "Vere", "Verity", "Vermont", "Vernon", "Verrier", "Verrill", "Villard", "Villiers", "Xebec", "Yannick" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function gaelicGivenNamesMale()
{
    $giveNames = array ( "Alan", "Angus", "Blaan", "Conan", "Fagan", "Kade", "Keefe", "Keegan", "Keeland", "Keenan", "Kennedy", "Kenyon", "Kermit", "Kern", "Kerry", "Kevin", "Kieran", "Kinnel", "Lawler", "Lee", "Lennon", "Lon", "Mackenzie", "Neal", "Parlan", "Phelan", "Regan", "Renny", "Riley", "Riordan", "Rogan", "Rooney", "Rory", "Ryan", "Seamus", "Senach", "Sheehan", "Slevin", "Sloan", "Sullivan", "Sully", "Sweeny", "Tee" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function germanGivenNamesMale()
{
    $giveNames = array ( "Abelard", "Adie", "Adler", "Adolph", "Alaric", "Albert", "Albrecht", "Alger", "Ancel", "Arland", "Armand", "Arnold", "Avicus", "Baldwin", "Baltasar", "Baron", "Bergen", "Bernard", "Bernstein", "Bertram", "Bingham", "Bogart", "Brandeis", "Bronson", "Bud", "Burke", "Burle", "Carsten", "Clay", "Clovis", "Colbert", "Dagobert", "Dalbert", "Dale", "Derek", "Dewitt", "Dian", "Dieter", "Dietrich", "Dolf", "Drake", "Dutch", "Eberhard", "Egmont", "Elbert", "Emery", "Ethelred", "Everett", "Falk", "Ferdinand", " Franz", "Frederick", "Fremont", "Fritz", "Gary", "Geert", "Geoffrey", "Gerlac", "Gilbert", "Godfrey", "Hagan", "Hahn", "Hammet", "Harbin", "Harlan", "Harry", "Heinrich", "Heller", "Henry", "Herbert", "Herman", "Hernan", "Hershel", "Hildebrand", "Hobart", "Horst", "Hubert", "Hugh", "Humbert", "Huni", "Hutch", "Ing", "Ingram", "Ivo", "Jerry", "Kagan", "Kant", "Karcher", "Karl", "Kasch", "Kass", "Kearn", "Kellen", "Kepler", "Kiefer", "Klaus", "Klein", "Konrad", "Kurt", "Lance", " Lando", "Lang", "Lear", "Len", "Leonard", "Lindberg", "Loring", "Louis", "Ludwig", "Luther", "Lyulf", "Mallory", "Mandel", "Manfred", "Mathias", "Meyer", "Miles", "Milo", "Nevin", "Norbert", "Oberon", "Obert", "Odette", "Odis", "Orlan", "Ormand", "Ormanda", "Osborn", "Osten", "Otis", "Otto", "Paulos", "Penrod", "Rainart", "Redmond", "Reinhart", "Reinhold", "Rikard", "Ring", "Ritter", "Roderick", "Roger", "Roland", "Rolf", "Rollins", "Ross", "Roswald", "Roth", "Rudeger", "Rudolph", " Rune", "Schaffer", "Schmidt", "Schneider", "Sinbad", "Stark", "Stefan", "Stein", "Strom", "Tab", "Theobold", "Tyson", "Uben", "Uberto", "Ubrig", "Ubrigens", "Uhr", "Ulas", "Ulbrecht", "Ulbrich", "Ulexite", "Ulgar", "Ulman", "Ulriah", "Ulrich", "Unser", "Uwe", "Vaduz", "Valdermar", "Varick", "Varner", "Verile", "Verner", "Vid", "Vilem", "Vilmos", "Volker", "Waggoner", "Wagner", "Walbert", "Waldemar", "Waldron", "Walmond", "Walten", "Walter", "Waltraut", "Warner", "Warren", "Wes", "Wilbert", "Willis", "Wilmer", "Wilson", "Winfield", "Yale", "Yohann", "Zamael", "Zelig"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function greekGivenNamesMale()
{
    $giveNames = array (  "Achilles", "Adonis", "Adrian", "Agamemnon", "Ajax", "Alcander", "Alcibiades", "Alexander", "Altair", "Amar", "Ambrose", "Anacletus", "Anastasius", "Anatole", "Andrew", "Andromeda", "Anker", "Anstice", "Antenor", "Anthony", "Antigonus", "Apollo", "Apostolos", "Archelaus", "Archimedes", "Ares", "Argus", "Arion", "Aristide", "Arsenio", "Asmodel", "Aster", "Athan", "Athanasios", "Athos", "Atlas", "Autolocus", "Avel", "Baptiste", "Basil", "Bates", "Bemus", "Bishop", "Caesar", "Callistus", "Cancer", "Carsten", "Castor", "Centaurus", "Charon", " Chiron", "Christian", "Christopher", "Claus", "Cleon", "Coeus", "Cohn", "Colin", "Corydon", "Cosimo", "Cronus", "Cyd", "Cyril", "Damasus", "Damien", "Dard", "Darius", "Deacon", "Deion", "Demetrius", "Dennis", "Deo", "Diomedes", "Dionysus", "Dooley", "Doran", "Dorian", "Elie", "Eneas", "Erastus", "Eris", "Eros", "Euclid", "Eugene", "Eustace", "Evagelos", "Evangelista", "Flavian", "Galen", "Gelasius", "Geode", "Geordi", "George", "Giles", "Goran", "Greer", "Gregory", "Hadrian", "Hamon", "Harmon", " Hector", "Helios", "Hephaestus", "Hercules", "Hermes", "Hieronymus", "Hipparchus", "Hippias", "Hippocrates", "Homer", "Horace", "Hydrus", "Hyginus", "Hypnos", "Iakobos", "Icarus", "Ilias", "Indigo", "Ioan", "Jace", "Jason", "Kai", "Kalin", "Kallen", "Karey", "Karsten", "Kirill", "Kit", "Konstantinos", "Kosmo", "Kozma", "Krischnan", "Kristoffer", "Kyros", "Laertes", "Leander", "Leon", "Leonidas", "Linus", "Loikanos", "Lucas", "Lykaios", "Lysander", "Marinos", "Mateo", "Melancton", "Melun", "Mete", "Momus", "Morpheus", " Myles", "Myron", "Narcissus", "Nectarios", "Nektarios", "Neo", "Nereus", "Nestor", "Nicholas", "Nicodemus", "Nike", "Nikos", "Obelia", "Obelix", "Ocean", "Oceana", "Odea", "Odele", "Odessa", "Odette", "Odysseus", "Olympia", "Omega", "Orea", "Orestes", "Orion", "Orrin", "Osanna", "Osias", "Otis", "Panos", "Panthea", "Paris", "Patroclus", "Peder", "Pello", "Pericles", "Perseus", "Philander", "Philemon", "Philip", "Philo", "Philostrate", "Philotus", "Phoenix", "Plato", "Platon", "Pluto", "Plutus", "Poseidon", " Priam", "Prometheus", "Proteus", "Ptolemy", "Rastus", "Rhodes", "Sesame", "Simonides", "Sisyphus", "Socrates", "Sofronio", "Solinus", "Soteria", "Soterios", "Spiridon", "Stamos", "Stavros", "Stephen", "Strom", "Talos", "Tansy", "Tarasios", "Thanos", "Theodore", "Theophilus", "Theron", "Thomas", "Tibalt", "Timeus", "Timoleon", "Timon", "Timothy", "Titus", "Tony", "Tracy", "Tymon", "Tyrone", "Uranus", "Urian", "Urien", "Vander", "Vasilios", "Vitaly", "Vitas", "Vivar", "Volney", "Xanthus", "Xeno", "Xenophon", "Xerarch", " Xuthus", "Xylo", "Xylon", "Xyst", "Xystum", "Xystus", "Yannis", "Yuri", "Zale", "Zander", "Zefirino", "Zendo", "Zeno", "Zenobio", "Zenos", "Zephyr", "Zero", "Zeth", "Zeus", "Zoello", "Zorba", "Zosimo", "Zowie"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function hawaiianGivenNamesMale()
{
    $giveNames = array (  "Akamu", "Analu", "Aulii", "Bane", "Eowyn", "Havika", "Kahale", "Kahanu", "Kahoku", "Kaholo", "Kai", "Kaikeapona", "Kaipo", "Kalama", "Kale", "Kalei", "Kaleo", "Kalepa", "Kana", "Kane", "Kanoa", "Kapono", "Keahi", "Keanu", "Kekoa", "Kelii", "Keona", "Kepano", "Konala", "Laakea", "Laionela", "Loe", "Lono", "Lulani", "Maik", "Makaio", "Makan", "Malo", "Manu", "Mauli", "Meka", "Moke", "Nahele", "Nalani", "Okalani", "Oke", "Okelani", "Oliana", "Onaona", "Palani", "Pekelo", "Uleki" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function hebrewGivenNamesMale()
{
    $giveNames = array (  "Aaron", "Abbas", "Abdiel", "Abel", "Abijah", "Abner", "Abraham", "Abrahsa", "Absolom", "Acacio", "Adalai", "Adam", "Adar", "Addai", "Adin", "Adley", "Admon", "Adon", "Agrippa", "Ahab", "Ahmik", "Aitan", "Akim", "Alphaeus", "Alphus", "Alva", "Amal", "Amiel", "Amon", "Amos", "Amram", "Anath", "Annas", "Arel", "Arion", "Aristotle", "Arnon", "Asa", "Asher", "Asphar", "Azariah", "Barbaras", "Barnabas", "Bartholomew", "Baruch", "Bates", "Bela", "Benaiah", "Benjamin", "Benson", "Bethuel", "Boaz", "Cain", "Caleb", "Carmelo", "Carpus", "Chaim", "Chatan", "Dagan", "Dalit", "Daniel", "David", "Dekel", "Dov", "Eben", "Ebner", "Eden", "Edom", "Ehud", "Eisig", "Eitan", "Elam", "Elan", "Elazar", "Elias", "Elijah", "Eliot", "Elkanah", "Emanuel", "Enoch", "Ephraim", "Eran", "Esau", "Ezekiel", "Ezra", "Gabai", "Gabriel", "Gan", "Gatian", "Genesis", "Gersham", "Giacomo", "Gian", "Giannes", "Gideon", "Giuseppe", "Goliath", "Haggai", "Haran", "Heber", "Heinz", "Hezekiah", "Hilel", "Hiram", "Hosea", "Hyman", "Ichabod", "Ike", "Ilan", "Ilia", "Ilias", "Immanuel", "Imre", "Ioan", "Ira", "Irin", "Isaac", "Isaiah", "Ishmael", "Israel", "Ithamar", "Jabez", "Jabin", "Jachin", "Jacob", "Jaden", "Jairus", "James", "Japhet", "Jared", "Jaron", "Javan", "Jebediah", "Jeremiah", "Jeremy", "Jesse", "Jesus", "Jethro", "Joachim", "Job", "Jody", "Joel", "John", "Jonas", "Jonathan", "Joram", "Jordan", "Joseph", "Joshua", "Juan", "Judd", "Kabos", "Kadmiel", "Kaniel", "Karmel", "Katzir", "Kedar", "Kenan", "Kobe", "Laban", "Label", "Lael", "Lavan", "Lazarus", "Lemuel", "Leor", "Leshem", "Levi", "Lot", "Madai", "Makayla", "Makis", "Malachi", "Mario", "Marlin", "Matai", "Matthew", "Mattison", "Mayer", "Mehetabel", "Meshach", "Mica", "Michael", "Mihaly", "Mordecai", "Moses", "Nachman", "Nachmanke", "Nachum", "Nadav", "Nadir", "Nahir", "Nahum", "Nathaniel", "Naum", "Nehemiah", "Nimrod", "Nirel", "Nisi", "Noadiah", "Noah", "Noy", "Nuriel", "Obadiah", "Oded", "Oma", "Omar", "Omri", "Oralee", "Oren", "Orli", "Orly", "Ornice", "Osaze", "Osip", "Oz", "Pallu", "Palti", "Pau", "Phinneaus", "Pontus", "Rafa", "Rafael", "Ranen", "Raphael", "Ravid", "Reuben", "Reuel", "Rishon", "Roman", "Roni", "Rouvin", "Ruben", "Saad", "Sachiel", "Sagiv", "Saloman", "Sam", "Samson", "Samuel", "Saul", "Seff", "Seraphim", "Seth", "Shafir", "Shailen", "Shiloh", "Shimon", "Shulamith", "Shylock", "Simon", "Simpson", "Sivan", "Solomon", "Talman", "Temani", "Temo", "Terach", "Timur", "Tivon", "Tobias", "Tomer", "Tov", "Tuvya", "Tyrek", "Tzuriel", "Udeh", "Uehudah", "Uri", "Urias", "Ury", "Uzi", "Uziah", "Uziel", "Vered", "Vida", "Volf", "Yaakov", "Yaar", "Yadon", "Yago", "Yahir", "Yair", "Yakim", "Yakov", "Yamin", "Yan", "Yanis", "Yanoach", "Yaphet", "Yarin", "Yechezkel", "Yehudi", "Yered", "Yeshaya", "Yitro", "Yitzchak", "Yonas", "Yonatan", "Yosef", "Yuval", "Zabulon", "Zaccheo", "Zachary", "Zahavi", "Zakai", "Zakur", "Zamir", "Zan", "Zane", "Zann", "Zared", "Zavad", "Zayden", "Zazu", "Zebediah", "Zebulon", "Zedekiah", "Zenoa", "Zephan", "Zev", "Ziff", "Zion", "Ziph", "Ziv", "Zomier", "Zuriel", "Zurl"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function hindiGivenNamesMale()
{
    $giveNames = array ("Abhay", "Abhijit", "Achuta", "Aditya", "Ahura", "Ajatashatru", "Ajay", "Akaash", "Akshay", "Alam", "Amit", "Anand", "Ananias", "Anay", "Anoop", "Aseem", "Asija", "Asuman", "Asvin", "Atharvan", "Atul", "Badal", "Bala", "Balaji", "Balavan", "Baldev", "Balin", "Banke", "Bharat", "Bhudev", "Bramha", "Bukka", "Chandra", "Dattatreya", "Deepak", "Devarsi", "Dhananjay", "Dharuna", "Dhatri", "Dilip", "Dinesh", "Duranjaya", "Durjaya", "Eknath", "Feroz", "Gajendra", "Ganesh", "Girish", "Gopal", "Hannes", "Hari", "Harshul", "Hitesh", "Inder", "Iravan", "Ishan", "Jaideep", "Jalal", "Jayant", "Jeevan", "Jitendra", "Kabir", "Kabr", "Kala", "Kalidas", "Kalkin", "Kalpanath", "Kamadev", "Kamlesh", "Kanak", "Kanan", "Kapil", "Kartik", "Kartikeya", "Kaushal", "Kaushik", "Kavi", "Kedar", "Keshav", "Ketan", "Khadim", "Khyber", "Kintan", "Kirit", "Kishore", "Kripa", "Krunal", "Kuldeep", "Kulvir", "Kunal", "Kusagra", "Kush", "Kushan", "Lakshman", "Lakshmi", "Lakshya", "Lalit", "Lavesh", "Lokesh", "Madan", "Madhav", "Mahabala", "Mahavira", "Mahesh", "Maitreya", "Manavendra", "Mandar", "Mandhatri", "Manik", "Manish", "Manmohan", "Manoj", "Mansukh", "Manu", "Markandeya", "Matanga", "Mayon", "Mehdi", "Mehul", "Mihir", "Milind", "Minesh", "Mitali", "Mitesh", "Mohan", "Mohin", "Mohit", "Mukta", "Mukul", "Mukunda", "Nabendu", "Nachiketa", "Nadim", "Nagesh", "Naimish", "Nakul", "Nalan", "Namdev", "Nandin", "Narayana", "Naresh", "Narsi", "Nartana", "Naveen", "Nayan", "Nihar", "Nilay", "Nimai", "Nimesh", "Niraj", "Niramitra", "Niranjan", "Nirav", "Nishad", "Nitesh", "Nitya-Sundara", "Noor", "Ojal", "Omana", "Omarjeet", "Pallav", "Pandita", "Pandya", "Pankaj", "Parag", "Paramartha", "Paras", "Parth", "Piyush", "Prabhakar", "Prabhu", "Pradeep", "Prakash", "Pramsu", "Pranav", "Pranay", "Prasata", "Prassana", "Pratap", "Pratik", "Pratyush", "Praveen", "Pravin", "Prem", "Prithu", "Privrata", "Pundarik", "Purujit", "Pusan", "Qimat", "Ragin", "Rahul", "Raivata", "Raj", "Rajanikant", "Rajendra", "Rajesh", "Rajiv", "Rakesh", "Ram", "Raman", "Ramanuja", "Ramesh", "Ranjan", "Ranjeet", "Ranjit", "Rantidev", "Ratri", "Ravi", "Ravindra", "Rikin", "Rishab", "Rishi", "Rizal", "Rohan", "Rohit", "Ronak", "Roshan", "Ruchir", "Rupesh", "Saarik", "Sachchit", "Sachin", "Sagar", "Sahadev", "Sahen", "Sahib", "Samir", "Sampath", "Samudra", "Sanat", "Sandeep", "Sanjay", "Sanjeev", "Sanjog", "Sankara", "Santosh", "Sapan", "Sarasvan", "Sarat", "Sarngin", "Sarojin", "Saswata", "Satayu", "Satrujit", "Satyen", "Saudeep", "Saunak", "Saurabh", "Senajit", "Shailesh", "Shalabh", "Shalin", "Shankar", "Shantanu", "Sharad", "Shashi", "Shashwat", "Shishir", "Shiv", "Shivendu", "Shyam", "Singh", "Snehal", "Soham", "Srijan", "Srikant", "Srinath", "Srinivas", "Sriram", "Sudarshan", "Sudesha", "Sudeva", "Sudhansu", "Sudhir", "Sukarman", "Sukumar", "Sumadhur", "Sumantu", "Sumati", "Sumit", "Sundara", "Sunil", "Suresh", "Surya", "Suvrata", "Swapnil", "Taksa", "Talor", "Tapan", "Tarun", "Tej", "Thaman", "Tilak", "Trisanu", "Tushar", "Udai", "Udit", "Ujala", "Umed", "Upendra", "Urjavaha", "Urvil", "Uttam", "Vadin", "Vaibhav", "Vairaja", "Valin", "Valmihi", "Vandan", "Vaninadh", "Vardhamma", "Varen", "Varesh", "Variya", "Varma", "Varun", "Vasant", "Vasava", "Vasin", "Vasudev", "Vasuman", "Vedanga", "Veer", "Vidvan", "Vihs", "Vijay", "Vijayendra", "Vikas", "Vikesh", "Vikram", "Vikrant", "Vimal", "Vinay", "Vineet", "Vinod", "Vipul", "Viraj", "Virat", "Vishal", "Visvajit", "Visvakarman", "Visvayu", "Viswanath", "Vivatma", "Vivek", "Waman", "Yamal", "Yash", "Yashodhara", "Yashovarman", "Yashpal", "Yauvani", "Yogendra", "Yogesh", "Yudhajit"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function hungarianGivenNamesMale()
{
    $giveNames = array ("Atilla", "Dezso", "Dorjan", "Ervin", "Gedeon", "Gerson", "Kada", "Kalman", "Kaplony", "Kapolcs", "Kardos", "Karsa", "Kartal", "Keled", "Keleman", "Kemenes", "Kende", "Kerecsen", "Keve", "Kinga", "Kolos", "Kont", "Kund", "Laborc", "Ladomér", "Lantos", "László", "Lehel", "Lél", "Levente", "Lipót", "Loránd", "Lõrinc", "Medárd", "Megyer", "Menyhért", "Miksa", "Milán", "Mór", "Nándor", "Nyék", "Odon", "Oguz", "Ond", "Onelia", "Orbán", "Örkény", "Ormos", "Örs", "Oszlár", "Ozor", "Özséb", "Ozsvát", "Pázmán", "Pellegrin", "Pentele", "Piusz", "Pongor", "Radomér", "Regõ", "Rendor", "Rezsõ", "Robi", "Rókus", "Sandor", "Sebes", "Solt", "Sólyom", "Soma", "Surány", "Szabolcs", "Szalók", "Szemere", "Szervác", "Szescõ", "Szevér", "Tabor", "Taksony", "Tardos", "Tarján", "Tas", "Tétény", "Tihamér", "Titusz", "Tivadar", "Tomaj", "Ubul", "Ugod", "Ugor", "Uros", "Uzor", "Várkony", "Vayk", "Vidor", "Vitéz", "Zádor", "Zajzon", "Zalán", "Zámor", "Zaránd", "Zekö", "Zerind", "Zétény", "Zobor", "Zoltán", "Zombor", "Zsigmond", "Zsolt"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function indianGivenNamesMale()
{
    $giveNames = array ("Kers", "Mog", "Omprakash", "Prabodh", "Praful", "Som"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function irishGivenNamesMale()
{
    $giveNames = array ("Aban", "Adan", "Adare", "Aeary", "Avonmore", "Bain", "Bairre", "Ballinamore", "Banagher", "Barry", "Beacan", "Benen", "Bevin", "Blaan", "Blaine", "Blair", "Boyd", "Braden", "Bram", "Brett", "Brian", "Buzz", "Caedmon", "Caelan", "Calder", "Calhoun", "Campbell", "Canice", "Carden", "Carey", "Carlow", "Carrick", "Ciaran", "Clancy", "Colin", "Colm", "Conall", "Conner", "Cormack", "Craig", "Cullen", "Curan", "Cuyler", "Dacian", "Dailan", "Daire", "Dallas", "Dallin", "Darby", "Darcy", "Aban", "Adan", "Adare", "Aeary", "Avonmore", "Bain", "Bairre", "Ballinamore", "Banagher", "Barry", "Beacan", "Benen", "Bevin", "Blaan", "Blaine", "Blair", "Boyd", "Braden", "Bram", "Brett", "Brian", "Buzz", "Caedmon", "Caelan", "Calder", "Calhoun", "Campbell", "Canice", "Carden", "Carey", "Carlow", "Carrick", "Ciaran", "Clancy", "Colin", "Colm", "Conall", "Conner", "Cormack", "Craig", "Cullen", "Curan", "Cuyler", "Dacian", "Dailan", "Daire", "Dallas", "Dallin", "Delano", "Dempsey", "Dermot", "Deshawn", "Devlin", "Devon", "Dewayne", "Dillon", "Donnelly", "Doran", "Druce", "Drystan", "Duane", "Duer", "Eachan", "Eamon", "Earc", "Egan", "Elgin", "Eman", "Evan", "Fergus", "Finnegan", "Finnian", "Flannery", "Flynn", "Gallagher", "Galvin", "Gannon", "Glen", "Gorman", "Guthrie", "Hagan", "Harkin", "Hennessy", "Hogan", "Hurley", "Inerney", "Innis", "Kadi", "Kaelan", "Kailin", "Kane", "Karney", "Kasey", "Kassidy", "Kavan", "Kaylen", "Kayven", "Keeley", "Keith", "Kelan", "Kellen", "Kelly", "Kelton", "Kelvin", "Kem", "Kendrick", "Kenneth", "Keon", "Kerwin", "Kesley", "Kian", "Killian", "Konnor", "Korey", "Kyle", "Kyler", "Labhras", "Lanty", "Larkin", "Laserian", "Laughlin", "Liam", "Loaghaire", "Lorcan", "Lucan", "Lunn", "Lynch", "Macartan", "Mackinley", "Maclean", "Macmorris", "Magee", "Maguire", "Mallow", "Maloney", "Mayo", "Mcauliffe", "McCoy", "Meallan", "Merrill", "Mickey", "Miles", "Mohanan", "Monroe", "Morgan", "Moriarty", "Murphy", "Myles", "Neil", "Neilan", "Nevan", "Nevin", "Nolan", "Odell", "Odhran", "Odran", "Oisin", "Oistin", "Oma", "Oona", "Oran", "Orane", "Ossian", "Owen", "Paddy", "Padraig", "Peyton", "Pierson", "Quigley", "Quillan", "Quinlan", "Quinn", "Rafferty", "Raghnall", "Reagan", "Rian", "Roan", "Roarke", "Rohan", "Ryons", "Scanlon", "Shamus", "Shane", "Shannon", "Shaun", "Shea", "Sheridon", "Sherrick", "Sivney", "Siward", "Somerly", "Teague", "Torrance", "Tracy", "Trevor", "Ualtar", "Uilleach", "Uilleam", "Uilleac", "Uilioc", "Uilliog", "Uillyog"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function italianGivenNamesMale()
{
    $giveNames = array ( "Agatho", "Amedeo", "Amerigo", "Aretino", "Arrigo", "Attilio", "Benvenuto", "Biondello", "Borachio", "Braulio", "Bronze", "Cajetan", "Carmelo", "Carmine", "Celesto", "Cirrillo", "Constanzo", "Corrado", "Demarco", "Deusdedit", "Donato", "Donus", "Eriberto", "Ermanno", "Ettore", "Falito", "Fiorello", "Flavio", "Fleance", "Floritzel", "Fortino", "Galileo", "Genovese", "Giancarlo", "Gianni", "Gino", "Gioacchino", "Giovanni", "Gratiano", "Honorius", "Hormisdas", "Hortensio", "Indro", "Lombardi", "Marco", "Mariano", "Martino", "Massimo", "Maurizio", "Maury", "Mercury", "Messala", "Michelangelo", "Napoleon", "Nek", "Nino", "Nuncio", "Othello", "Paco", "Pancrazio", "Paolo", "Paris", "Philario", "Pino", "Pisano", "Primo", "Proculeius", "Rocco", "Romeo", "Ruggerio", "Santo", "Saverio", "Silvano", "Solanio", "Taddeo", "Tancredo", "Ugo", "Umberto", "Venezio", "Venturo", "Vesuvio", "Vitalian", "Vittorio", "Zanebono", "Zanipolo"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function japaneseGivenNamesMale()
{
    $giveNames = array ("Akira", "Banko", "Banzan", "Bassui", "Benjiro", "Botan", "Chimon", "Chotan", "Dai", "Dai-In", "Daido", "Doryo", "Engu", "Enki", "Enmei", "Eryu", "Fudoki", "Fujita", "Genko", "Goro", "Hakaku", "Haru", "Hideaki", "Hiromasa", "Hiroshi", "Hisoka", "Hoshi", "Iachima", "Itsu", "Jikai", "Jiro", "Jiryu", "Joben", "Joji", "Jomei", "Junichiro", "Kado", "Kaisha", "Kakumyo", "Kanaye", "Kando", "Kane", "Kaori", "Kazuo", "Keitaro", "Kentaro", "Kin", "Kishi", "Kisho", "Kiyoshi", " Kogen", "Koichi", "Kozan", "Makoto", "Mamoru", "Manzo", "Mareo", "Maro", "Masahiro", "Masakazu", "Masao", "Masato", "Masatoshi", "Michio", "Minoru", "Montaro", "Morio", "Mu-nan", "Mugen", "Nan Shin", "Naoko", "Oki", "Raidon", "Rei", "Ringo", "Roka", "Ronin", "Ryogi", "Ryoichi", "Ryozo", "Ryuichi", "Saburo", "Seiichi", "Seiko", "Senichi", "Shinichi", "Shiro", "Shoichi", "Shuichi", "Shunichi", "Takeshi", "Taku", "Taro", "Tomo", "Toyo", "Unkan", "Usaku", "Washi", "Yasahiro", "Yasashiku", "Yasuo", "Yemon", "Yogi", "Yoshi", "Yoshifumi", "Yukio", "Yutaka", "Zen"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function koreanGivenNamesMale()
{
    $giveNames = array ("Daeshim", "Jintao", "Seung", "Yong-Sun", "Young-Ja", "Young-Jae"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function latinGivenNamesMale()
{
    $giveNames = array ("Ace", "Adeodatus", "Adrian", "Aemilius", "Africa", "Alban", "Aleron", "Amadeus", "Amando", "Amator", "Ames", "Amory", "Anthony", "Aquarius", "Aquila", "Arcadicus", "Archangelo", "Arden", "Aruiragus", "Atticus", "Auburn", "August", "Aurelius", "Auriga", "Austin", "Avis", "Barber", "Benedict", "Bennett", "Benvolio", "Blaze", "Boone", "Branch", "Caelum", "Caesar", "Caius", "Callistus", "Calvin", "Camillo", "Candidius", "Capricornus", "Capucius", "Carew", "Carnelian", "Cassius", "Cato", "Celesto", "Cepheus", "Cetus", "Chester", " Cicero", "Clarence", "Claude", "Clement", "Constantine", "Cooper", "Cordell", "Corin", "Cornelius", "Corvus", "Costante", "Crispin", "Cupid", "Curtis", "Cygnus", "Dacian", "Dante", "Decretas", "Delmore", "Desmond", "Dexter", "Dominick", "Domitus", "Donato", "Drake", "Duke", "Durand", "Eleutherius", "Ellery", "Emile", "Equinox", "Eridanus", "Estes", "Ethan", "Eusebius", "Evaristus", "Ezio", "Fabian", "Fabrizio", "Farrar", "Felix", "Ferris", "Feste", "Flavius", "Florian", "Formosus", "Furio", "Galloway", "Garner", "Gemini", " Gennaro", "Germanus", "Grady", "Graham", "Griffin", "Guiderius", "Harmon", "Hiemo", "Hilario", "Honorius", "Horace", "Hortensio", "Horton", "Iago", "Ignatius", "Innocent", "Janus", "Jarlath", "Javan", "Jermyn", "Jerome", "Julian", "Junius", "Kalvin", "Kasen", "Klemens", "Korvin", "Labhras", "Lamar", "Lamberto", "Laurence", "Lawrence", "Lester", "Levente", "Lionel", "Loren", "Lorne", "Lucas", "Lucian", "Lucius", "Lyon", "Mace", "Magic", "Magnus", "Major", "Malchidiel", "Mamillius", "Mar", "Marcade", "Marcellus", " March", "Marcus", "Margarelon", "Marinus", "Marius", "Mark", "Mars", "Martius", "Maurice", "Max", "Maxwell", "Mayer", "Mercury", "Merit", "Meriweather", "Mica", "Miner", "Montano", "Morris", "Myles", "Narciso", "Nemo", "Neptune", "Nero", "Nigel", "Nimbus", "Noble", "Nona", "Octavius", "Odina", "Oistin", "Oliver", "Oral", "Orde", "Orelious", "Oria", "Orien", "Oriole", "Orlando", "Osma", "Ovid", "Pandarus", "Patrick", "Paul", "Peace", "Pelagius", "Peregrin", "Peril", "Peter", "Philo", " Placido", "Platinum", "Pontius", "Prince", "Prosper", "Pryor", "Quade", "Quant", "Quentin", "Quirinus", "Rainier", "Ransom", "Regis", "Remus", "Renee", "Rex", "Roman", "Rufus", "Sabene", "Sabinian", "Sagittarius", "Saturn", "Sebastian", "Seleucus", "Sempronius", "Septimus", "Serge", "Severinus", "Sextus", "Silas", "Silvester", "Silvio", "Silvius", "Sol", "Solan", "Sparky", "Stacey", "Stanislaw", "Taurin", "Terence", "Thaddeaus", "Tony", "Tracy", "Trent", "Trenus", "Ulices", "Ulises", "Ulysses", "Unus", "Urban", " Ursan", "Val", "Valentin", "Valentine", "Valerian", "Valor", "Varrius", "Vergel", "Verlin", "Vern", "Vernon", "Vertumnus", "Vester", "Victor", "Vida", "Vigilius", "Vincent", "Vinson", "Vireo", "Virgil", "Vito", "Vitus", "Zachriel", "Zaniel", "Zanobi", "Zazel"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function middleEnglishGivenNamesMale()
{
    $giveNames = array ("Alden", "Alder", "Crockett", "Kemp", "Kipling", "Ladd", "Lander", "Lane", "Latimer", "Lyman", "Macon", "Mendel", "Mercer", "Mull", "Nye", "Perry", "Prentice", "Reeve", "Sanders", "Sawyer", "Skeet", "Sterne", "Swain", "Taylor", "Tennyson", "Todd", "Trey", "Tucker", "Turner", "Twain", "Tyler", "Vance", "Vane", "Wade", "Walker", "Yates"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function nativeAmericanGivenNamesMale()
{
    $giveNames = array ("Achachak", "Adahy", "Ahanu", "Akecheta", "Alo", "Apenimon", "Ashkii", "Atohi", "Bemossed", "Bidziil", "Chatam", "Chesmu", "Cheveyo", "Cheyenne", "Chogan", "Ciqala", "Cochise", "Colville", "Dakota", "Dichali", "Dyami", "Elan", "Elsu", "Enapay", "Etchemin", "Etu", "Gad", "Gawonii", "Gosheven", "Hania", "Helaku", "Hiamovi", "Hinto", "Holata", "Honovi", "Huritt", "Illanipi", "Jacy", "Kaga", "Kai", "Kele", "Kiyiyah", "Knoton", "Kohana", "Koi", "Lakota", "Lallo", "Lansa", "Len", "Lenno", "Lokni", "Lonato", "Mahkah", "Mahpee", "Maska", "Mikasi", "Misu", "Mohe", "Mojag", "Motega", "Mukki", "Nashoba", "Nebraska", "Nigan", "Nikan", "Nitis", "Nocona", "Nodin", "Odakota", "Ogima", "Ohanzee", "Ohio", "Olathe", "Omaha", "Onawa", "Oneida", "Oni", "Onida", "Opa", "Oya", "Paco", "Pallaton", "Patamon", "Patwin", "Paytah", "Pilan", "Powa", "Quanah", "Qued", "Quelatikan", "Qunnoune", "Rowtag", "Sahale", "Sakima", "Shaman", "Shilah", "Taimah", "Tansy", "Tate", "Tennessee", "Thaonawyuthe", "Tyee", "Uhubitu", "Unaduti", "Unkas", "Utatci", "Waban", "Wahid", "Wamblee", "Wapi", "Wicasa", "Wohehiv", "Wuyi", "Wynono", "Wyome", "Yahto", "Yancy", "Yas", "Yotimo", "Yottoko", "Youkioma", "Yuma", "Yutu", "Zitkaduta"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function norseGivenNamesMale()
{
    $giveNames = array ("Balder", "Dana", "Freyr", "Gareth", "Haldor", "Hardicanute", "Hogarth", "Holm", "Hsin", "Hume", "Kelby", "Ker", "Lamont", "Magne", "Oda", "Oddvar", "Odin", "Ove", "Quimby", "Ragnar", "Sutherland", "Terje", "Thurston", "Ulfred", "Unni", "Volund", "Yongvar"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldEnglishGivenNamesMale()
{
    $giveNames = array ("Ackley", "Acton", "Addison", "Adger", "Aiken", "Alcott", "Alder", "Aldrich", "Alfred", "Allard", "Allston", "Alton", "Alvertos", "Alvin", "Arledge", "Arley", "Arlo", "Armstrong", "Arundel", "Ashley", "Athelstan", "Averill", "Awarnach", "Ballard", "Bancroft", "Barclay", "Barnett", "Beacher", "Beardsley", "Bede", "Beldon", "Bentley", "Birch", "Blake", "Booker", "Booth", "Borden", "Bradley", "Brandon", "Brent", "Brewster", "Brigham", "Brinley", "Brock", "Bromley", "Brook", "Buckley", "Bud", "Burgess", "Burne", " Burt", "Buster", "Cade", "Calder", "Caldwell", "Calhoun", "Calvert", "Cameron", "Carden", "Carleton", "Carlyle", "Carter", "Carvell", "Catcher", "Cedric", "Chad", "Channing", "Charles", "Chevy", "Chilton", "Claiborne", "Clark", "Cleveland", "Clifford", "Colbert", "Colborn", "Colter", "Cooper", "Copper", "Courtland", "Crawford", "Creighton", "Cromwell", "Currier", "Dale", "Darren", "Darwin", "Dayton", "Dean", "Digby", "Donald", "Dorset", "Douglas", "Dover", "Doyle", "Dudley", "Duncan", "Durward", "Dustin", "Dwight", " Earl", "Edgar", "Edmund", "Edsel", "Edward", "Edwin", "Egerton", "Elder", "Eldon", "Eldridge", "Elmer", "Elton", "Emerson", "Erskine", "Esmond", "Fairfax", "Farley", "Farrell", "Fielding", "Ford", "Fuller", "Fulton", "Gilford", "Goldman", "Gordon", "Gower", "Gray", "Hadden", "Hadley", "Hagley", "Halbert", "Haley", "Hall", "Hallam", "Halsey", "Hamilton", "Hannibal", "Hardy", "Harlan", "Harmon", "Harry", "Hastings", "Hawk", "Hawthorne", "Hayden", "Hayes", "Haywood", "Hedley", "Hendrick", "Henley", " Herbert", "Hilton", "Holden", "Hollis", "Horton", "Hudson", "Hulk", "Humphrey", "Hunt", "Hutton", "Hyatt", "Irving", "Ives", "Kenelm", "Kenley", "Kent", "Kenton", "Keyon", "Kim", "Kimberley", "King", "Kinsey", "Kipp", "Knox", "Landon", "Lang", "Lawson", "Layton", "Lee", "Legolas", "Leland", "Lincoln", "Lind", "Litton", "Llewellyn", "Lyndon", "Lyre", "Mace", "Madison", "Maitland", "Makepeace", "Manley", "Manning", "Marden", "Marlow", "Marsden", "Mather", "Mead", "Millard", "Miller", " Milton", "Morven", "Nash", "Nedes", "Nelson", "Newell", "Newman", "North", "Nyle", "Oakley", "Ogden", "Olin", "Orman", "Osbert", "Osmond", "Oswald", "Oswin", "Oxford", "Packard", "Palmer", "Parker", "Parr", "Payton", "Pell", "Penley", "Penn", "Pierson", "Preston", "Putnam", "Rabbit", "Radcliff", "Rae", "Raleigh", "Ralph", "Ramsey", "Ransford", "Ransley", "Ransom", "Raven", "Ravinger", "Rawlins", "Rayburn", "Raymond", "Read", "Redford", "Reginald", "Remington", "Rider", "Ridley", "Rigby", " Ripley", "Rishley", "Robert", "Rochester", "Rodman", "Rodney", "Rowan", "Rudyard", "Rutherford", "Rylan", "Sandon", "Sanford", "Scott", "Seabert", "Seward", "Shaw", "Shelley", "Shepherd", "Sherlock", "Sherman", "Sherwood", "Shipley", "Siddel", "Slade", "Snowden", "Speck", "Spencer", "Spike", "Stanley", "Stokley", "Stroud", "Studs", "Tanner", "Tate", "Terrel", "Thane", "Thatcher", "Thorne", "Thorpe", "Thurlow", "Tomkin", "Tostig", "Townsend", "Tranter", "Trent", "Tripp", "Truman", "Tye", "Tyne", "Wakefield", " Wallace", "Walton", "Washington", "Watson", "Waverly", "Wayland", "Wayne", "Webster", "Wells", "Wesley", "West", "Wetherby", "Wheaton", "Wheeler", "Whit", "Whitfield", "Wilfred", "Winifred", "Winslow", "Winston", "Winter", "Winthrop", "Woodrow", "Wright", "Wyatt", "Wylie", "Wyndam", "York"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldFrenchGivenNamesMale()
{
    $giveNames = array ("Anicetus", "Bassett", "Bayard", "Bellamy", "Boden", "Borden", "Boswell", "Brigham", "Cable", "Chancellor", "Channing", "Chase", "Chivalry", "Corbin", "Curtis", "Darrell", "Flannery", "Fletcher", "Forrest", "Foster", "Francis", "Franklin", "Jay", "Jeffrey", "Justin", "Leroy", "Lyle", "Macy", "Marlon", "Maslin", "Oriel", "Percival", "Prewitt", "Quennel", "Roy", "Telo"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldGermanGivenNamesMale()
{
    $giveNames = array ("Adalbert", "Adalgiso", "Adelbert", "Adelfried", "Adelino", "Adelmio", "Adelmo", "Ademaro", "Ahren", "Aksel", "Alfonso", "Alice", "Aloysius", "Anselm", "Blaz", "Carl", "Carolus", "Conrad", "Engelbert", "Ernest", "Hamlet", "Harold", "Harvey", "Jarvis", "Leopold", "Orlantha"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldNorseGivenNamesMale()
{
    $giveNames = array ("Alvis", "Borg", "Gunnar", "Harper", "Kirk", "Leif", "Njord", "Olaf", "Oliver", "Oscar", "Ronald", "Roscoe", "Sigurd", "Sindri", "Skipp", "Thor", "Turpin"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function persianGivenNamesMale()
{
    $giveNames = array ("Abtin", "Ardalan", "Atash", "Azar", "Bahram", "Behdad", "Behruz", "Bijan", "Borna", "Caspar", "Cyrus", "Dareh", "Darius", "Davood", "Eskander", "Fazel", "Firouz", "Gaspar", "Kaspar", "Kaveh", "Khorshed", "Khortdad", "Murdad", "Nard", "Persepolis", "Rashne", "Ruhollah", "Sarosh", "Siamak", "Xerxes"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function polishGivenNamesMale()
{
    $giveNames = array ("Cerek", "Dobry", "Gerik", "Jacek", "Jarek", "Lech", "Ludoslaw", "Magnar", "Mandek", "Marcin", "Marek", "Nelek", "Olesia", "Ryzard", "Tanek", "Urjasz", "Waclaw", "Walenty", "Wlod", "Wojtek", "Zarek", "Zygmunt"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function polynesianGivenNamesMale()
{
    $giveNames = array ("Kalani", "Lauaki", "Lisiate", "Uhila", "Ulani", "Vala", "Valu", "Vea"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function russianGivenNamesMale()
{
    $giveNames = array ("Boris", "Dobry", "Dusan", "Egor", "Feodore", "Fyodor", "Gavrie", "Gleb", "Ivan", "Konstantin", "Kostas", "Kostya", "Lesta", "Magar", "Maksim", "Mikhail", "Miloslav", "Nikhil", "Oksana", "Olga", "Sacha", "Sarkis", "Semyon", "Sergei", "Timur", "Ulan", "Ustin", "Vadim", "Valeri", "Valerian", "Vanya", "Venedict", "Vladilen", "Vlas", "Wassily", "Xenik", "Yerik", "Yevgeni", "Yurchik", "Yuri"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function sanskritGivenNamesMale()
{
    $giveNames = array ("Arjun", "Jackal", "Jafar", "Krishna", "Kumar", "Mahatma", "Nanda", "Nataraj", "Rajiv", "Uttam", "Vasu", "Veda", "Yogi"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function scandinavianGivenNamesMale()
{
    $giveNames = array ("Amund", "Arvid", "Bjorn", "Canute", "Carolus", "Carson", "Dag", "Davin", "Denholm", "Dyre", "Egil", "Elvis", "Eric", "Filip", "Fortinbras", "Frey", "Haakon", "Hannes", "Igor", "Ingmar", "Ingvar", "Jarl", "Kaj", "Karr", "Kelsey", "Kerr", "Kettil", "Knute", "Kolby", "Lars", "Ludvig", "Lunt", "Mats", "Nels", "Niels", "Norb", "Odell", "Odo", "Olan", "Pal", "Quinby", "Rad", "Rune", "Skjøld", "Snorre", "Steinar", "Stieran", "Sven", "Sølve", "Thiassi", "Thoralf", "Thorin", "Thorstein", "Toste", "Tryggvi", "Ulffr", "Ulick", "Ull", "Ulrik", "Ulster", "Ultar", "Vali", "Vannevar", "Vanslow", "Vidar", "Vidkun", "Viggo", "Viljalmr", "Viljo", "Von", "Waage", "Wray", "Zvi"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function scottishGivenNamesMale()
{
    $giveNames = array ("Abhorson", "Adger", "Akira", "Alastair", "Athol", "Caithness", "Calen", "Camden", "Donalbain", "Drummond", "Duffy", "Edme", "Hamish", "Ian", "Kai", "Kameron", "Kane", "Keith", "Kelvin", "Kendrick", "Kenneth", "Kesley", "Kester", "Killian", "Kincaid", "Kyle", "Lachlan", "Laird", "Leith", "Lennox", "Leslie", "Logan", "Lundy", "Macbeth", "Macduff", "Mackinley", "Maclean", "Malcom", "Maxwell", "Mcaffie", "Mccauley", "McKinley", "Morrison", "Murdock", "Nairne", "Nolan", "Norval", "Ogilvy", "Oran", "Paden", "Polk", "Rab", "Rosling", "Ross", "Scully", "Stratton", "Tavis", "Teague", "Tearlach", "Tormod", "Tremayne", "Updike", "Wite"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function slavicGivenNamesMale()
{
    $giveNames = array ("Casimir", "Duscha", "Evzen", "Gavril", "Ilie", "Jan", "Kostya", "Ludovic", "Marót", "Melik", "Mete", "Miroslav", "Mladen", "Oleg", "Ondrea", "Pavel", "Pavlos", "Pavo", "Peja", "Polixenes", "Polk", "Radman", "Reza", "Vaclav", "Vas", "Vencel", "Vlade", "Vladimir", "Volya", "Wenceslaus", "Wieslav", "Ziven", "Zorro", "Zorya", "Zydrunas"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function spanishGivenNamesMale()
{
    $giveNames = array ("Agapetus", "Aimon", "Beltran", "Berto", "Bronco", "Cipriano", "Cisco", "Cortez", "Cruz", "Cuba", "Dario", "Desiderio", "Diego", "Dimos", "Fanuco", "Federico", "Fraco", "Francisco", "Frisco", "Gervasio", "Gig", "Gonzalo", "Guido", "Guillermo", "Hernan", "Hilario", "Ignado", "Isidro", "Jaguar", "Jair", "Javier", "Jerrold", "Juan", "Kiki", "Larenzo", "Lisandro", "Loredo", "Lorenzo", "Macario", "Malvolio", "Manuel", "Marjun", "Montana", "Montego", "Montel", "Montenegro", "Nasario", "Nemesio", "Neper", "Neron ", "Nicandro", "Noe", "Oihane", "Oleos", "Olindo", "Onofre", "Ora", "Oro", "Ovidio", "Pablo", "Paco", "Pancho", "Pedro", "Ponce", "Porfio", "Quico", "Quinto", "Quiqui", "Quito", "Reyes", "Reynaldo", "Rico", "Rio", "Rogelio", "Ryo", "Sagaz", "Salvador", "Santiago", "Saturnin", "Seferino", "Selestino", "Senon", "Sierra", "Tajo", "Urvano", "Vegas", "Venacio", "Vicente", "Vidal", "Xabat", "Xalvador", "Xaver", "Xaverius", "Xavier", "Xavion", "Xeres", "Ximen", "Zelipe", "Zenon"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function swahiliGivenNamesMale()
{
    $giveNames = array ("Jabari", "Jelani", "Khairi", "Rashid"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function swedishGivenNamesMale()
{
    $giveNames = array ("Anderson", "Axel", "Balder", "Beck", "Burr", "Fiske", "Gustave", "Per", "Staffan"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function teutonicGivenNamesMale()
{
    $giveNames = array ("Kem", "Orinda", "Paxton", "Raeburn", "Renard", "Roald", "Sigfried", "Sigmund", "Stewart", "Theodoric", "Thierry", "Thurborn", "Udo", "Uland", "Ulf", "Walden", "Waldo", "Wendell", "Werner", "Wilbur", "Willard", "William", "Wolfgang", "Wolfram", "Yves"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function turkishGivenNamesMale()
{
    $giveNames = array ("Berk", "Muzaffer", "Nedim", "Nesim", "Nesip", "Okan", "Olcay", "Onan", "Ozan", "Ozaner", "Sadi", "Safak", "Selim", "Semih", "Sencer", "Sevilin", "Sinan", "Taner", "Tarkan", "Tecer", "Tercan", "Tezer", "Tuncer", "Ufuk", "Ugur", "Ulucan", "Yigit", "Yucel", "Zafer", "Zeki", "Zeren"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function vietnameseGivenNamesMale()
{
    $giveNames = array ("Chung", "Dong", "Duy", "Gan", "Keemo", "Lam", "Laman", "Long", "Phuoc", "Phuong", "Quan", "Quan Van", "Quang Tu", "Ritchell", "So", "Tai", "Thai", "Thong", "Tinh", "Tong", "Viet", "Vui", "Yen"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function welshGivenNamesMale()
{
    $giveNames = array ("Arthur", "Avon", "Baden", "Barry", "Bowen", "Bronwen", "Cade", "Cedric", "Clyde", "Conway", "Denzel", "Deverell", "Dewey", "Drew", "Dylan", "Emrick", "Floyd", "Fluellen", "Gavin", "Gawain", "Griffin", "Griffith", "Idris", "Kai", "Karey", "Kay", "Keith", "Kenn", "Kenrich", "Mabon", "Main", "Olwen", "Parry", "Pembroke", "Reese", "Rondell", "Sayer", "Sonnagh", "Tathal", "Tathan", "Teulyddog", "Tewdwr", "Trahaearn", "Tudfwlch", "Tudur", "Wren", "Ysgarran"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function yiddishGivenNamesMale()
{
    $giveNames = array ("Gershon", "Lantz", "Zaide", "Zalman", "Zindel"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



/*Female Given Names */

function africanGivenNamesFemale()
{
    $giveNames = array ( 'Aba', 'Abeni', 'Abiba', 'Abmaba', 'Aissa', 'Ajua', 'Akosua', 'Armani', 'Arziki', 'Asha', 'Ashanti', 'Ayana', 'Baako', 'Beyonce', 'Bisa', 'Cacey', 'Cassietta', 'Catava', 'Chipo', 'Cleotha', 'Deiondre', 'Deka', 'Delu', 'Dericia', 'Diara', 'Doli', 'Dumi', 'Ebere', 'Ekua', 'Faizah', 'Fola', 'Gaynelle', 'Habika', 'Hawa', 'Isoke', 'Jendayi', 'Jira', 'Kabibe', 'Kabira', 'Kacela', 'Kacondra', 'Kadija', 'Kainda', 'Kambo', 'Kande', 'Kanene', 'Kanesha', 'Kanoni', 'Kapera', 'Kapuki', ' Karasi', 'Karimah', 'Karna', 'Kasinda', 'Keeya', 'Keilantra', 'Keisha', 'Keishla', 'Kendis', 'Kenyatta', 'Keshia', 'Keshon', 'Kesia', 'Keyah', 'Kia', 'Kianga', 'Kiden', 'Kiho', 'Kijana', 'Kinfe', 'Kione', 'Kirabo', 'Kiros', 'Kumani', 'Kuron', 'Kwashi', 'Kya', 'Lachelle', 'Lakin', 'Lanelle', 'Laquanna', 'Laqueta', 'Laquinta', 'Laquita', 'Lashawn', 'Latanya', 'Latifah', 'Latonya', 'Latoya', 'Layla', 'Lehana', 'Lewa', 'Lilovarti', 'Limber', 'Lisimba', 'Loba', 'Lolovivi', 'Lulu', 'Maha', 'Mahari ', ' Mahdi', 'Maisha', 'Maizah', 'Malaika', 'Malkia', 'Mandisa', 'Manyara', 'Marjani', 'Mekell', 'Messina', 'Moesha', 'Muncel', 'Nafuna', 'Nailah', 'Naja', 'Najwa', 'Nakeisha', 'Nala', 'Narkaesha', 'Nasha', 'Nashaly', 'Nichelle', 'Niesha', 'Nimeesha', 'Nyeki', 'Okal', 'Okapi', 'Onaedo', 'Ontibile', 'Paka', 'Panya', 'Pasua', 'Pedzi', 'Pemba', 'Penda', 'Pita', 'Quanella', 'Quanesha', 'Quisha', 'Raimy', 'Ranielle', 'Rashida', 'Raziya', 'Ronnell', 'Safara', 'Safiya', 'Saidah', 'Salihah', 'Sekai', 'Semira ', ' Serwa', 'Sesen', 'Shakila', 'Shakina', 'Shandra', 'Shaquana', 'Shasa', 'Shasmecka', 'Shateque', 'Sibongile', 'Sidone', 'Sika', 'Sima', 'Sitembile', 'Siyanda', 'Sukutai', 'Taifa', 'Taja', 'Takala', 'Talaitha', 'Tale', 'Talisa', 'Talisha', 'Tamasha', 'Tamika', 'Tamira', 'Tamyra', 'Tanasha', 'Tandice', 'Tanesha', 'Tanginika', 'Taniel', 'Tanisha', 'Tapanga', 'Tarana', 'Tariana', 'Tarisai', 'Tazara', 'Temima', 'Tendai', 'Terehasa', 'Thandiwe', 'Thema', 'Tiaret', 'Timberly', 'Tineka-Jawana', 'Tiombe', 'Tyesha', 'Tyrell', 'Tyrina ', ' Tyronica', 'Uchenna', 'Ulu', 'Urbi', 'Uwimana', 'Velinda', 'Wangari', 'Waseme', 'Wyetta', 'Yaa', 'Yetty', 'Zabia', 'Zaci', 'Zahwa', 'Zaila', 'Zaire', 'Zakiya', 'Zalika', 'Zanta', 'Zarina', 'Zasu', 'Zawadi', 'Zilli', 'Zina', 'Zoila' 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function africanAmericanGivenNamesFemale()
{
    $giveNames = array ('Beyonce', 'Cassietta', 'Cleotha', 'Deiondre', 'Dericia', 'Gaynelle', 'Kacondra', 'Kanesha', 'Keilantra', 'Kendis', 'Keshon', 'Lachelle', 'Lakin', 'Lanelle', 'Laquanna', 'Laqueta', 'Laquinta', 'Lashawn', 'Latanya', 'Latonya', 'Latoya', 'Mekell', 'Moesha', 'Muncel', 'Najwa', 'Nakeisha', 'Nichelle', 'Niesha', 'Quanella', 'Quanesha', 'Quisha', 'Ranielle', 'Ronnell', 'Shandra', 'Shaquana', 'Shateque', 'Sidone', 'Talaitha', 'Talisa', 'Talisha', 'Tamika', 'Tamira', 'Tamyra', 'Tanasha', 'Tandice', 'Tanginika', 'Taniel', 'Tanisha', 'Tariana', 'Temima', 'Timberly', 'Tyesha', 'Tyrell', 'Tyrina', 'Tyronica', 'Velinda', 'Wyetta', 'Yetty');

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function americanGivenNamesFemale()
{
    $giveNames = array ('Apple', 'Atlanta', 'Blue Angel', 'Brandie', 'Cady', 'Camera', 'Cricket', 'Dannon', 'Darena', 'Day', 'Dimaia', 'Dixie', 'Doli', 'Easter', 'Eternity', 'February', 'Fiolla', 'Gaeriel', 'Geena', 'Gentle', 'Heavenly', 'Iesha', 'Jakki', 'Jazz', 'Jo Dee', 'Jody', 'Joey', 'JoJo', 'Joni', 'Juice', 'Kacy', 'Kaden', 'Kadie', 'Kaelyn', 'Kailey', 'Kaili', 'Kailyn', 'Kalei', 'Kaley', 'Kalisa', 'Kallan', 'Kallima', 'Kalyn', 'Kameron', 'Kamryn', 'Kandra', 'Kaneesha', 'Kanisha', 'Kaprece', 'Karan ', 'Karbie', 'Karel', 'Karian', 'Karleen', 'Karsen', 'Kat', 'Katchi', 'Katima', 'Katrice', 'Kaydence', 'Kaylana', 'Kaylee', 'Kayleen', 'Kayley', 'Kaylin', 'Kelis', 'Kember', 'Kenadia', 'Kenisha', 'Kennita', 'Kerryn', 'Kesha', 'Kevlyn', 'Keyanna', 'Keyla', 'Kory', 'Kreeli', 'Krisalyn', 'Krystal', 'Kylia', 'Ladan', 'Laken', 'Lakeshia', 'Lalaine', 'Lanette', 'Laquiesha', 'Larby', 'Lashonda', 'Latasha', 'Latreece', 'Latrice', 'Lavada', 'Lavonn', 'Lawanda', 'Leatrix', 'Lecea', 'Leighna', 'Lesa', 'Linaeve', 'Lorelle ', 'Lorene', 'Lovey', 'Lucky', 'Lyn', 'Lynda', 'Lynelle', 'Lynsey', 'Lysette', 'Makaila', 'Makayla', 'Makeena', 'Malloren', 'Mandelina', 'Marge', 'Meridian', 'Minelli', 'Mink', 'Moon Unit', 'Nerice', 'Nevaeh', 'Nikki', 'Precious', 'Quanika', 'Quantina', 'Queisha', 'Quiana', 'Quianna', 'Quincylia', 'Rayanne', 'Ryo', 'Sailor', 'Sanne', 'Shanequa', 'Shaniqua', 'Shantelle', 'Shantina', 'Shawmbria', 'Shepry', 'Sherlyn', 'Sissy', 'Snow', 'Snowy', 'Star', 'Sugar', 'Symona', 'Taci', 'Tahlia', 'Tailynn', 'Takira', 'Tamatha ', 'Tamber', 'Tambrey', 'Tamya', 'Tangia', 'Tasmine', 'Tassilyn', 'Teal', 'Telissa', 'Tender', 'Teness', 'Terrylyn', 'Tessica', 'Tigerlily', 'Tinisha', 'Torie', 'Trish', 'Trixie', 'Tyanne', 'Tynice', 'Wade', 'Wanisha', 'Wednesday', 'Zabrina', 'Zariel', 'Zavrina', 'Zaylin', 'Ziarre' 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function arabicGivenNamesFemale()
{
    $giveNames = array ('Abia', 'Afra', 'Ah lam', 'Aisha', 'Akilah', 'Alima', 'Aliye', 'Alyssa', 'Amber', 'Amina', 'Anan', 'Anara', 'Aneesa', 'Anisa', 'Ara', 'Ayasha', 'Azalea', 'Bashira', 'Basimah', 'Bibi', 'Cala', 'Chaka', 'Debbani', 'Duaa', 'Emani', 'Fatima', 'Ghada', 'Habiba', 'Halima', 'Haya', 'Hayfa', 'Jamila', 'Janan', 'Jarita', 'Kadejah', 'Kadin', 'Kahlilia', 'Kalea', 'Kaleigh', 'Kalila', 'Kaliyah', 'Kalyn', 'Kamila', 'Kamilah', 'Karida', 'Karima', 'Kayley', 'Kedma', 'Khadijah', 'Khalidah', 'Laela', 'Laila', 'Lakia', 'Laleh', 'Lama', 'Lamees', 'Lamis', 'Lamya', 'Leetefa', 'Leila', 'Lila', 'Lilah', 'Lilith', 'Lula', 'Mahala', 'Mahalath', 'Mahubeh', 'Maimun', 'Maja', 'Maliha', 'Malika', 'Manar', 'Manoush', 'Marta', 'Matana', 'Maysa', 'Mehri', 'Melika', 'Mina', 'Mona', 'Mouna', 'Muna', 'Muriel', 'Myiesha', 'Nadda', 'Nadira', 'Nafeeza', 'Nahid', 'Naimah', 'Natara', 'Navila', 'Nawar', 'Nayely', 'Nazirah', 'Nekia', 'Nenet', 'Nimah', 'Noura', 'Noya', 'Nura', 'Oma', 'Omaira', 'Qadira', 'Qamra', 'Qatai', 'Qitarah', 'Qubilah', 'Rabab', 'Rabiah', 'Raja', 'Rida', 'Rihana', 'Rukan', 'Saamiya', 'Sabiha', 'Sabirah', 'Sabra', 'Sadah', 'Sadira', 'Safa', 'Sahara', 'Saida', 'Saima', 'Sakinah', 'Saleema', 'Salimah', 'Salwa', 'Samiah', 'Samira', 'Samirah', 'Samma', 'Saree', 'Selima', 'Shakira', 'Shamara', 'Shammara', 'Siham', 'Soraya', 'Souzan', 'Sumayah', 'Sumehra', 'Taahira', 'Tabassum', 'Tahirah', 'Takia', 'Tameka', 'Taraneh', 'Tarja', 'Thana', 'Thara', 'Thuraya', 'Ulima', 'Umm', 'Unaiza', 'Vega', 'Wafa', 'Waheeda', 'Waja', 'Walada', 'Walida', 'Widjan', 'Xaviera', 'Yaminah', 'Yesenia', 'Yusra', 'Zaafirah', 'Zafaran', 'Zafina', 'Zahara', 'Zahidah', 'Zahira', 'Zahra', 'Zahwah', 'Zaida', 'Zaina', 'Zaira', 'Zane', 'Zanubiya', 'Zaray', 'Zaria', 'Zarifa', 'Zarola', 'Zay', 'Zayna', 'Zenda', 'Zuleika', 'Zulema'    
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function armenianGivenNamesFemale()
{
    $giveNames = array ("Erato", "Karyan", "Keran", "Lucine", "Ohanna", "Seda", "Siran", "Siroun", "Sirvat", "Taleen", "Taline", "Ziazan"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function celticGivenNamesFemale()
{
    $giveNames = array ("Fallon", "Flannery", "Kaie", "Kaitlyn", "Kassidy", "Kathleen", "Keena", "Keir", "Keira", "Keita", "Kendall", "Kenna", "Kera", "Kern", "Kiara", "Kirra", "Kylee", "Lachlan", "Lorna", "Maeve", "Malise", "Morgance", "Morgandy", "Nonnita", "Nuala", "Raelin", "Rhonda", "Saoirse", "Saraid", "Seanna", "Shela", "Shylah", "Tara", "Teranika", "Tieve", "Treasa", "Treva"  
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function chineseGivenNamesFemale()
{
    $giveNames = array ("Ah lam", "An", "Bao", "Chen", "Chen-chio", "Chen-tao", "Chow", "Chu hua", "Chun", "Chyou", "Da-Shin", "Da-xia", "Fai", "Fang", "Fang hua", "Genji", "Guanyin", "Hua", "Hui fang", "Jing Wei", "Jun", "Kimora", "Le", "Lee", "Lei", "Li", "Li Hua", "Li Mei", "Li Ming", "Lian", "Lien", "Lin", "Ling", "Lixue", "Mee", "Mei", "Mingmei", "Quan", "Shu Fang", "Ting", "Ushi", "Xiang", "Xiao-Niao", "Xiao-Xing", "Xin", "Xiu Mei", "Yin", "Yu", "Zan", "Zhengqiu", "Zhi", "Zhijuan", "Zi"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function czechGivenNamesFemale()
{
    $giveNames = array ("Bela", "Kalene", "Katarzyna", "Krista", "Krysta", "Marjeta", "Nadezda", "Pribislava", "Rickena", "Ryba", "Virsila", "Vondra", "Zdenek", "Zelenka", "Zuza"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function danishGivenNamesFemale()
{
    $giveNames = array ("Dagmar", "Madja", "Saffi", "Semine"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function dutchGivenNamesFemale()
{
    $giveNames = array ("Brandie", "Haven", "Hester", "Kaatje", "Kalie", "Liannaka", "Lieneke", "Lonikie", "Nelleke", "Schuyler", "Tryne", "Van"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function egyptianGivenNamesFemale()
{
    $giveNames = array ( "Chione", "Femi", "Hekenu", "Hekt", "Icess", "Kanika", "Khety", "Lapis", "Mariasha", "Nakia", "Nashwa", "Nebta", "Neferu", "Neith", "Nile", "Nubia", "Ramla", "Rennefer", "Sabola", "Sagira", "Sahirah", "Salama", "Sanura", "Suma", "Tauret", "Tetisheri" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function englishGivenNamesFemale()
{

    $giveNames = array (  "Addison", "Alivia", "Allaya", "Amarie", "Amaris", "Annabeth", "Annalynn", "Araminta", "Ardys", "Ashland", "Avery", "Bedegrayne", "Bernadette", "Billie", "Birdee", "Bliss", "Brice", "Brittany", "Bryony", "Cameo", "Carol", "Chalee", "Christy", "Corky", "Cotovatre", "Courage", "Daelen", "Dana", "Darnell", "Dawn", "Delsie", "Denita", "Devon", "Devona", "Diamond", "Divinity", "Duff", "Dustin", "Dusty", "Ellen", "Eppie", "Evelyn", "Everilda", "Falynn", "Fanny", "Faren", "Freedom", "Gala", "Galen", "Gardenia", " Germain", "Gig", "Gilda", "Giselle", "Githa", "Haiden", "Halston", "Heather", "Henna", "Honey", "Iblis", "Idalis", "Ilsa", "Jersey", "Jette", "Jill", "Jo Beth", "Joanna", "Kachelle", "Kade", "Kady", "Kaela", "Kalyn", "Kandice", "Karrie", "Karyn", "Katiuscia", "Kempley", "Kenda", "Kennice", "Kenyon", "Kiandra", "Kimber", "Kimn", "Kinsey", "Kipling", "Kipp", "Kismet", "Kolton", "Kordell", "Kortney", "Kourtney", "Kristal", "Kylar", "Ladawn", "Ladye", "Lainey", "Lajerrica", "Lake", "Lalisa", " Landen", "Landon", "Landry", "Laney", "Langley", "Lanna", "Laquetta", "Lari", "Lark", "Laurel", "Lavender", "Leane", "LeAnn", "Leanna", "Leanne", "Leanore", "Lee", "Leeann", "Leighanna", "Lexie", "Lexis", "Liberty", "Liliana", "Lillian", "Lindley", "Linne", "Liora", "Lisabet", "Liz", "Lizette", "Lona", "London", "Loni", "Lorena", "Loretta", "Lovette", "Lynde", "Lyndon", "Lyndsay", "Lynette", "Lynley", "Lynna", "Lynton", "Mada", "Maddox", "Madison", "Mae", "Maggie", "Mahogany", "Maia", " Maitane", "Maitland", "Malachite", "Mamie", "Manhattan", "Maridel", "Marla", "Marley", "Marliss", "Maud", "May", "Merleen", "Mersadize", "Mildred", "Milissa", "Millicent", "Mily", "Mopsa", "Mykala", "Nan", "Nautica", "Nelda", "Niki", "Nikole", "Nimue", "Nineve", "Norina", "Ofa", "Palmer", "Pansy", "Paris", "Patience", "Patricia", "Peony", "Petunia", "Pixie", "Pleasance", "Polly", "Primrose", "Princell", "Providence", "Purity", "Quanah", "Queena", "Quella", "Quinci", "Rae", "Rainbow", "Rainelle", "Raleigh", " Ralphina", "Randi", "Raven", "Rayelle", "Rea", "Remington", "Richelle", "Ripley", "Roberta", "Robin", "Rosemary", "Rowan", "Rumer", "Ryesen", "Sable", "Sadie", "Saffron", "Saga", "Saige", "Salal", "Salia", "Sandora", "Sebille", "Sebrina", "Selby", "Serenity", "Shae", "Shandy", "Shanice", "Sharman", "Shelbi", "Sheldon", "Shelley", "Sheridan", "Sherill", "Sheryl", "Sheyla", "Shirley", "Shirlyn", "Silver", "Skyla", "Skylar", "Sorilbran", "Sparrow", "Spring", "Starleen", "Stockard", "Storm", "Sudie", "Summer", " Sunniva", "Suzana", "Symphony", "Tacey", "Tahnee", "Taite", "Talon", "Tambre", "Tamia", "Taniya", "Tanner", "Tanzi", "Taria", "Tate", "Tatum", "Tawnie", "Taya", "Tayla", "Taylor", "Tayna", "Teddi", "Tena", "Tera", "Teri", "Teryl", "Thistle", "Timotha", "Tinble", "Tosha", "Totie", "Traci", "Tru", "Trudie", "Trudy", "Tryamon", "Tuesday", "Twila", "Twyla", "Tyne", "Udele", "Unity", "Vail", "Vala", "Velvet", "Venetta", "Walker", "Wallis", "Waneta", "Waverly", "Wendy", " Weslee", "Whitley", "Whitney", "Whoopi", "Wilda", "Wilfreda", "Willow", "Wilona", "Winifred", "Winsome", "Winter", "Wisdom", "Wrenn", "Yale", "Yardley", "Yeardley", "Yedda", "Young", "Ysolde", "Zadie", "Zanda", "Zavannah", "Zavia", "Zeolia", "Zinnia" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function finnishGivenNamesFemale()
{
    $giveNames = array ( "Kaija", "Kalle", "Louhi", "Preita", "Senja", "Tarja", "Terhi" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function frenchGivenNamesFemale()
{
    $giveNames = array ( "Abril", "Alair", "Alberta", "Alize", "Amour", "Avril", "Babette", "Bailey", "Bedelia", "Bernadette", "Caroline", "Caron", "Cerise", "Chablis", "Chanel", "Charlotte", "Cheriss", "Cheryl", "Claudette", "Colette", "Courtesy", "Cydney", "Darcie", "Darlene", "Deja", "Denise", "Desiree", "Destiny", "Didina", "Dior", "Djab", "Dominique", "Doreen", "Elaine", "Elise", "Elita", "Elle", "Eloise", "Emeraude", "Etoile", "Evonne", "Fifine", "Fleur", "Fontanna", "Fortune", "Garland", "Gay", "Geneva", "Gervaise", "Ghislaine", " Harriet", "Honor", "Isabeau", "Ivette", "Jacqueline", "Jaimie", "Janel", "Jolie", "Juliet", "Kadence", "Kalet", "Kordell", "Kyrielle", "L'Oréal", "Larue", "Lauren", "Laverne", "Leala", "Leontyne", "Lesh", "Lisette", "Lisle", "Lois", "Loring", "Lucetta", "Lucie", "Lunette", "Lyla", "Lyle", "Maine", "Mallory", "Manon", "Mardi", "Margo", "Marianne", "Maribel", "Marie", "Marion", "Marvelle", "Maureen", "Mauve", "Mavis", "Melisenda", "Merane", "Merla", "Merle", "Merlyn", "Meryl", "Miette", "Mignon", " Monique", "Moselle", "Nadia", "Naeva", "Nanette", "Narcisse", "Nathaly", "Ninon", "Noella", "Odetta", "Odette", "Odil", "Opaline", "Orane", "Oriel", "Ouida", "Page", "Pascale", "Perry", "Prunella", "Purvis", "Questa", "Quiterie", "Raylene", "Remy", "Renee", "Riva", "Rochelle", "Roslin", "Ruby", "Rui", "Sage", "Salene", "Sarotte", "Satin", "Scout", "Searlait", "Sebastiona", "Sennett", "Shannelle", "Shantay", "Shanton", "Sharice", "Shyann", "Sidonie", "Sigourney", "Solange", "Soleil", "Sorrel", "Sosie", "Stella", "Susie", "Suzette", "Sydney", "Sydni", "Symone", "Tallis", "Tallys", "Tayce", "Taylar", "Tempest", "Therese", "Tiffany", "Tilda", "Tolena", "Toni", "Tracy", "Troy", "Turquoise", "Vedette", "Vilette", "Yvonne", "Zanette" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function gaelicGivenNamesFemale()
{
    $giveNames = array (  "Blaine", "Blair", "Eilis", "Kalene", "Keaira", "Keelty", "Keely", "Keen", "Keitha", "Kellan", "Kennis", "Kerry", "Kevina", "Killian", "Kyna", "Lakyle", "Lee", "Mab", "Maeryn", "Maille", "Mairi", "Maisie", "Meara", "Meckenzie", "Myrna", "Nara", "Neala", "Nelia", "Oona", "Quinn", "Rhoswen", "Riane", "Riley", "Rogan", "Rona", "Ryan", "Sadb", "Shanley", "Shelagh", "Sine", "Siobhan", "Sorcha", "Ultreia", "Vevila"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function germanGivenNamesFemale()
{
    $giveNames = array ( "Adalgisa", "Adelaide", "Adolfina", "Aemilia", "Alberta", "Alice", "Alisha", "Amelia", "Amerie", "Anneliese", "Antje", "Arabelle", "Aria", "Arrietty", "Aubrey", "Berit", "Berlynn", "Binney", "Bluma", "Bruna", "Callan", "Cecania", "Clay", "Dagmar", "Dale", "Dame", "Della", "Dustin", "Ebba", "Edwina", "Elfriede", "Emma", "Emmylou", "Ermine", "Faiga", "Farica", "Frederica", "Frieda", "Galiana", "Geraldine", "Gertrude", "Gretchen", "Griselda", "Hallam", "Heidi", "Henrietta", "Hilda", "Honey", "Ilsa", "Imelda", " Irma", "Isela", "Jarvia", "Jenell", "Jerolyn", "Johanna", "Joss", "Kalona", "Karel", "Karla", "Karlotta", "Kateri", "Katrin", "Katrina", "Kelby", "Kerstin", "Klarissa", "Leisel", "Leoma", "Leona", "Leonie", "Liese", "Liesel", "Lise", "Lorelei", "Lotte", "Louanna", "Louisa", "Luana", "Lucina", "Lysa", "Mallory", "Mandel", "Mariel", "Maritza", "Mathilda", "Meryl", "Meta", "Mina", "Morgen", "Nixie", "Norberta", "Nordica", "Notburga", "Odelia", "Odella", "Olinda", "Oma", "Orlantha", "Ormanda", " Otylia", "Quartz", "Rae", "Rayma", "Richelle", "Roderica", "Rolanda", "Rory", "Rosamund", "Schmetterling", "Senta", "Serilda", "Sieglinde", "Silke", "Sommer", "Sonnenschein", "Tabea", "Tawanda", "Tillie", "Trude", "Trula", "Ulla", "Ulrika", "Ulva", "Uta", "Viveka", "Walda", "Wanda", "Wilhelmina", "Wilma", "Winola", "Zelda", "Zelinda", "Zelma", "Zenzi"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function greekGivenNamesFemale()
{
    $giveNames = array ( "Acantha", "Adara", "Adelpha", "Adrienne", "Aegle", "Afrodite", "Agape", "Agata", "Aglaia", "Agnes", "Aileen", "Alcina", "Aldora", "Alethea", "Alexandra", "Alice", "Alida", "Alisha", "Alixia", "Althea", "Aludra", "Amara", "Ambrosia", "Amethyst", "Aminta", "Amphitrite", "Anastasia", "Andrea", "Andromache", "Andromeda", "Angela", "Anstice", "Antonia", "Anysia", "Aphrodite", "Apus", "Arali", "Aretha", "Ariadne", "Ariana", "Arissa", "Artemia", "Artemis", "Astrid", "Athena", "Atropos", "Aurora", "Avel", "Basalt", "Basilissa", " Bernice", "Bloodstone", "Calandra", "Calantha", "Calista", "Calliope", "Candace", "Candra", "Carina", "Carisa", "Cassandra", "Cassiopeia", "Catherine", "Celandia", "Cerelia", "Chalcedony", "Charisma", "Christina", "Cinnabar", "Clio", "Cloris", "Clotho", "Colette", "Cora", "Cressida", "Cybill", "Cyd", "Cynthia", "Damaris", "Damia", "Daphne", "Daria", "Daryn", "Dasha", "Dea", "Delbin", "Della", "Delphine", "Delta", "Demetria", "Desdemona", "Desma", "Despina", "Dionne", "Diotama", "Dora", "Dorcas", "Doria", "Dorian", "Doris", " Dorothy", "Dorrit", "Drew", "Drucilla", "Dysis", "Ebony", "Effie", "Eileen", "Elani", "Eleanor", "Electra", "Elke", "Elma", "Elodie", "Eos", "Eppie", "Eris", "Ethereal", "Eudora", "Eugenia", "Eulalia", "Eunice", "Euphemia", "Euphrosyne", "Euterpe", "Evadne", "Evangeline", "Filmena", "Gaea", "Galina", "Gelasia", "Gemini", "Georgia", "Greer", "Greta", "Harmony", "Hebe", "Hecate", "Hecuba", "Helen", "Hera", "Hermia", "Hermione", "Hero", "Hestia", "Hilary", "Hippolyta", "Hyacinth", "Hydra", "Ianthe", " Ilena", "Iolite", "Iona", "Irene", "Iris", "Isidore", "Jacey", "Jacinta", "Jolanta", "Kacia", "Kaethe", "Kaia", "Kaija", "Kairi", "Kairos", "Kali", "Kalidas", "Kalika", "Kalista", "Kalli", "Kalliope", "Kallista", "Kalonice", "Kalyca", "Kanchana", "Kandace", "Kara", "Karana", "Karen", "Karin", "Karis", "Karissa", "Karlyn", "Kasandra", "Kassandra", "Katarina", "Kate", "Katherine", "Katina", "Khina", "Kineta", "Kirsten", "Kolina", "Kora", "Koren", "Kori", "Korina", "Kosma", "Kristen", "Kristi", " Kristina", "Kristine", "Kristy", "Kristyn", "Krysten", "Krystina", "Kynthia", "Kyra", "Kyrene", "Kyria", "Lacy", "Lali", "Lareina", "Laria", "Larina", "Larisa", "Larissa", "Lasthenia", "Latona", "Layna", "Leandra", "Leda", "Ledell", "Lenore", "Leonora", "Leta", "Letha", "Lethia", "Lexi", "Lexie", "Lidia", "Lilika", "Lina", "Linore", "Litsa", "Livana", "Livvy", "Lotus", "Lyanne", "Lycorida", "Lycoris", "Lydia", "Lydie", "Lykaios", "Lyra", "Lyric", "Lyris", "Lysandra", "Macaria", "Madalena", " Madelia", "Madeline", "Madge", "Maeve", "Magan", "Magdalen", "Maia", "Mala", "Malissa", "Mara", "Margaret", "Marigold", "Marilee", "Marjorie", "Marlene", "Marmara", "Maya", "Medea", "Medora", "Megan", "Megara", "Melanctha", "Melanie", "Melba", "Melenna", "Melia", "Melinda", "Melissa", "Melitta", "Melody", "Melpomene", "Minta", "Mnemosyne", "Mona", "Muse", "Myda", "Myrtle", "Naia", "Naida", "Naiyah", "Narcissa", "Narella", "Natasha", "Nell", "Nellie", "Nellis", "Nelly", "Neola", "Neoma", "Nerin", " Nerina", "Neysa", "Nichole", "Nicia", "Nicki", "Nicole", "Nike", "Nikita", "Niobe", "Nitsa", "Noire", "Nora", "Nyla", "Nysa", "Nyssa", "Nyx", "Obelia", "Oceana", "Odea", "Odessa", "Ofelia", "Olympia", "Omega", "Onyx", "Ophelia", "Ophira", "Orea", "Oriana", "Padgett", "Pallas", "Pamela", "Pandora", "Panphila", "Parthenia", "Pelagia", "Penelope", "Phedra", "Philadelphia", "Philippa", "Philomena", "Phoebe", "Phyllis", "Pirene", "Prisma", "Psyche", "Ptolema", "Pyhrrha", "Pyrena", "Pythia", "Raissa", " Rasia", "Rene", "Rhea", "Rhoda", "Rhodanthe", "Rita", "Rizpah", "Saba", "Sandra", "Sandrine", "Sapphira", "Sappho", "Seema", "Selena", "Selina", "Sema", "Sherise", "Sibley", "Sirena", "Sofi", "Sondra", "Sophie", "Sophronia", "Spirituality", "Spodumene", "Stacia", "Stefania", "Stephaney", "Stesha", "Sybella", "Sybil", "Syna", "Tabitha", "Talia", "Talieya", "Taliyah", "Tallya", "Tamesis", "Tanith", "Tansy", "Taryn", "Tasha", "Tasia", "Tedra", "Teigra", "Tekla", "Telma", "Terentia", "Terpsichore", "Terri", " Tess", "Thaddea", "Thaisa", "Thalassa", "Thalia", "Than", "Thea", "Thelma", "Themis", "Theodora", "Theodosia", "Theola", "Theone", "Theophilia", "Thera", "Theresa", "Thisbe", "Thomasa", "Thracia", "Thyra", "Tiana", "Tienette", "Timandra", "Timothea", "Titania", "Titian", "Tomai", "Tona", "Tresa", "Tressa", "Triana", "Trifine", "Trina", "Tryna", "Urania", "Uriana", "Vanessa", "Vasiliki", "Velma", "Venus", "Voleta", "Xandria", "Xandy", "Xantha", "Xenia", "Xenobia", "Xianthippe", "Xylia", "Xylona", "Yolanda", " Yolie", "Zagros", "Zale", "Zanaide", "Zandra", "Zanita", "Zanthe", "Zebina", "Zelia", "Zena", "Zenaide", "Zenia", "Zenobia", "Zenon", "Zera", "Zeta", "Zeuti", "Zeva", "Zinaida", "Zoe", "Zosima"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function hawaiianGivenNamesFemale()
{
    $giveNames = array ( "Alana", "Aloani", "Aloha", "Alohi", "Alona", "Anani", "Aulii", "Edena", "Haimi", "Iolana", "Kai", "Kailani", "Kaili", "Kaimi", "Kalama", "Kalani", "Kalena", "Kaley", "Kali", "Kalia", "Kalina", "Kaloni", "Kamea", "Kawena", "Keahi", "Keala", "Keandra", "Keanu", "Keiki", "Keilana", "Kekona", "Keola", "Kiana", "Kiele", "Kina", "Kinipela", "Konane", "Lahela", "Lanai", "Lani", "Lanikai", "Leilana", "Liliha", "Lilo", "Loe", "Lokelani", "Luana", "Mahala", "Mahina", "Maik", " Makaio", "Makala", "Makana", "Makani", "Makelina", "Malana", "Maleah", "Malia", "Malu", "Mei", "Mekia", "Melia", "Mily", "Nalani", "Nalanie", "Nallely", "Napua", "Nira", "Noelani", "Okelani", "Ola", "Oliana", "Olina", "Onaona", "Palakika", "Palila", "Paterekia", "Pela", "Pelenakino", "Pelika", "Pelulio", "Puakai", "Puanani", "Roselani", "Sasilvia", "Ululani", "Walanika", "Wanaao", "Wanika" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function hebrewGivenNamesFemale()
{
    $giveNames = array ( "Aaliyah", "Aari", "Aase", "Abbellonna", "Abie", "Abigail", "Abira", "Abital", "Abra", "Achazia", "Ada", "Adamina", "Adena", "Affera", "Afra", "Ahava", "Ahmose", "Akiva", "Aliza", "Alumit", "Amissa", "Anita", "Ann", "Apphia", "Araminta", "Arashel", "Arella", "Ariel", "Arnon", "Ascah", "Asenath", "Asenka", "Asisa", "Atara", "Aviva", "Ayala", "Ayla", "Ayn", "Bara", "Basha", "Bathsheba", "Becky", "Bena", "Beryl", "Bess", "Bethany", "Bettina", "Beulah", "Bina", "Bo", " Bracha", "Carmel", "Chaka", "Chanah", "Chaya", "Daba", "Dagen", "Dalia", "Danielle", "Danuta", "Dara", "Davan", "Daya", "Dayla", "Deborah", "Delilah", "Denna", "Derora", "Dinah", "Diza", "Dodie", "Dorrit", "Eden", "Edena", "Edna", "Edria", "Efrosini", "Elam", "Eleora", "Eliann", "Elizabeth", "Emanuelle", "Endora", "Eve", "Gabriela", "Galya", "Gana", "Gayora", "Gelilah", "Geva", "Gilana", "Gilla", "Gita", "Giuseppina", "Hadara", "Hadassa", "Hannah", "Hariel", "Hava", "Heba", " Hedia", "Hedva", "Hepziba", "Hila", "Hinda", "Hosea", "Ideh", "Idit", "Ikia", "Ilana", "Iras", "Isela", "Iva", "Ivana", "Ivria", "Iyana", "Jael", "Jaen", "Jana", "Jane", "Janese", "Janica", "Jariah", "Jedida", "Jemima", "Jenay", "Jenova", "Jerusha", "Jesse", "Jessica", "Jezebel", "Jimena", "Joakima", "Joan", "Joaquina", "Jobey", "Joelle", "Jonina", "Jora", "Jordan", "Josephine", "Josie", "Judith", "Kadisha", "Kaila", "Kalanit", "Kaleigh", "Kanara", "Karmel", "Karmina", " Katriel", "Kay", "Kayla", "Kazia", "Kefira", "Keilah", "Kelila", "Kenia", "Keturah", "Ketzia", "Kezia", "Kitra", "Kizzy", "Kochava", "Laah", "Labana", "Lael", "Laela", "Laila", "Lailie", "Laisha", "Lavey", "Lavi", "Lea", "Leah", "Ledah", "Leeza", "Leia", "Lemuela", "Lena", "Leora", "Levia", "Lexine", "Lia", "Liana", "Libba", "Libby", "Liora", "Lirit", "Lisa", "Lisbet", "Lisea", "Livia", "Liza", "Lizbeth", "Lizeth", "Lois", "Lysia", "Macayle", "Madeline", " Magda", "Magdalen", "Magena", "Mahala", "Mahalia", "Mahola", "Malca", "Malha", "Malina", "Malka", "Mangena", "Mara", "Maretta", "Maria", "Mariah", "Mariam", "Mariasha", "Marilynne", "Marna", "Marnina", "Marsena", "Mary", "Matana", "Mathea", "Mattea", "May", "Meera", "Mehitabel", "Meira", "Mia", "Michaela", "Minna", "Mira", "Mireya", "Miriam", "Moria", "Moselle", "Nancy", "Nanna", "Naomi", "Nasya", "Natania", "Nataniella", "Naysa", "Nediva", "Neorah", "Neria", "Netta", "Neviah", "Nira", " Nisi", "Nitza", "Nitzana", "Nizana", "Noemi", "Nuria", "Odeda", "Odele", "Odera", "Ofira", "Oma", "Oprah", "Oralee", "Orpah", "Ozora", "Paz", "Peliah", "Peninah", "Raanana", "Rachel", "Rahab", "Raizel", "Rakel", "Raphaella", "Rayna", "Reba", "Rebecca", "Rena", "Richael", "Rimona", "Rishona", "Ruth", "Sabeans", "Sabra", "Saloma", "Salome", "Samara", "Samatha", "Samicah", "Sammy-Jo", "Samuela", "Sarah", "Sarahi", "Sarai", "Sarea", "Sari", "Sariah", "Sela", "Seraphina", "Shaina", " Shaine", "Shalom", "Shamira", "Shana", "Shanae", "Shanna", "Sharay", "Shari", "Sharis", "Sharon", "Shawn", "Shayna", "Sheba", "Sheera", "Shelah", "Shera", "Sheri", "Sherine", "Sherri", "Shira", "Shobi", "Shoshannah", "Shulamit", "Simone", "Soshannah", "Susan", "Sydelle", "Taanach", "Tahlia", "Talia", "Talor", "Tamara", "Tamitha", "Tamma", "Tammy", "Tamra", "Tebeth", "Tema", "Temina", "Temira", "Thadine", "Thirza", "Tiarra", "Timera", "Tirza", "Tivona", "Tobit", "Tora", "Tova", "Tzila", " Tziporah", "Tzippa", "Tzofit", "Tzvia", "Udiya", "Uriah", "Vada", "Varda", "Vida", "Vidette", "Ximena", "Yaara", "Yachne", "Yadira", "Yael", "Yaffa", "Yakira", "Yanira", "Yardena", "Yardeniya", "Yavonna", "Ydel", "Yenta", "Yesmina", "Yoana", "Yona", "Yoninah", "Yovela", "Yudelle", "Zaanannim", "Zacharee", "Zahari", "Zahava", "Zaide", "Zair", "Zakia", "Zalia", "Zambda", "Zan", "Zana", "Zanoah", "Zara", "Zareah", "Zareen", "Zarephath", "Zaretan", "Zati", "Zayit", "Zayra", "Zaza", " Zeanes", "Zee", "Zehava", "Zelek", "Zella", "Zelotes", "Zelpha", "Zemaraim", "Zemil", "Zeph", "Zephath", "Zeredah", "Zeresh", "Zerlinda", "Zeruah", "Zethel", "Zevida", "Zez", "Zhalore", "Zia", "Ziahon", "Zibiah", "Zila", "Ziona", "Zippora", "Zisel", "Zita", "Zoleen", "Zonda", "Zula", "Zuriel"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}




function hindiGivenNamesFemale()
{
    $giveNames = array ("Akuti", "Alka", "Aloani", "Amari", "Ami", "Anjali", "Anuradha", "Anusha", "Aparna", "Aruna", "Ayana", "Basanti", "Bharati", "Bhuma", "Bina", "Bindiya", "Chandra", "Charu", "Chhaya", "Chitrangda", "Darshana", "Deepa", "Deva", "Devaki", "Dharma", "Dipti", "Divya", "Dristi", "Ekta", "Gatha", "Gayatri", "Gopi", "Harhsa", "Hema", "Henna", "Hiten", "India", "Indira", "Indu", "Ishara", "Jahnavi", "Jamuna", "Jaya", "Jayani", "Juhy", "Jyoti", "Kailas", "Kajal", "Kajol", "Kala", "Kali", "Kalinda", "Kamakshi", "Kamala", "Kamana", "Kamna", "Kaniya", "Kantha", "Kanushi", "Karishma", "Karka", "Karya", "Kasi", "Katyayani", "Kausalya", "Kaveri", "Kavi", "Kavindra", "Kavita", "Kazanna", "Kerani", "Ketika", "Kimatra", "Kiran", "Kirana", "Kirit", "Kirsi", "Kirtana", "Kirti", "Kitu", "Komal", "Komala", "Kriti", "Krupa", "Krupali", "Kshama", "Kuhuk", "Kumud", "Kunti", "Laasya", "Laksha", "Lakshmi", "Lalan", "Lalasa", "Lalima", "Lalita", "Lalitamohana", "Lata", "Latika", "Lavani", "Lavanya", "Laxmi", "Lolaksi", "Madhavi", "Madhu", "Madhul", "Madhulika", "Madhur", "Madhuri", "Magan", "Mahima", "Mahita", "Maina", "Maitryi", "Makara", "Malati", "Malavika", "Maliha", "Mallika", "Malti", "Mamta", "Manasa", "Manasi", "Manavi", "Mandara", "Mandeep", "Manisha", "Manjari", "Manju", "Manjula", "Manjusha", "Manushi", "Maruti", "Matangi", "Matrika", "Maya", "Mayuri", "Medha", "Meena", "Meenakshi", "Megha", "Meghana", "Mela", "Mena", "Menaka", "Mesha", "Minda", "Mitra", "Mohini", "Monisha", "Mridul", "Mrinalini", "Mukul", "Naina", "Namrata", "Nanda", "Nandini", "Nandita", "Natesa", "Navdeep", "Nayana", "Neeharika", "Neelam", "Neelja", "Neema", "Neena", "Neerja", "Neeta", "Neha", "Nidra", "Niju", "Nilima", "Nilini", "Niloufer", "Nimisha", "Nimmi", "Niradhara", "Niral", "Nirguna", "Nirmala", "Nirupa", "Nirvana", "Nisha", "Nitara", "Niti", "Nitu", "Nitya", "Niverta", "Niyati", "Ojal", "Paavana", "Paavani", "Parvani", "Pausha", "Pavana", "Pollyam", "Pragyata", "Prarthana", "Prashanti", "Pratiksha", "Pratima", "Preeti", "Prema", "Premila", "Prerana", "Preyasi", "Pritha", "Priti", "Pritika", "Priya", "Priyanka", "Pulkita", "Pundari", "Punita", "Purandhri", "Purnima", "Purva", "Purvaja", "Purvi", "Pusti", "Radha", "Radhika", "Rafa", "Ragini", "Rajni", "Rakhil", "Raksha", "Ramya", "Rani", "Ranjana", "Ranjita", "Rasika", "Rasna", "Rati", "Reena", "Rekha", "Reman", "Renuka", "Reshma", "Revati", "Rhu", "Riddhi", "Rima", "Rina", "Rishabh", "Ritu", "Rohana", "Rohini", "Roshni", "Ruchi", "Ruchika", "Ruchira", "Rudrani", "Rukmini", "Rupa", "Rupal", "Rupali", "Sabita", "Sachi", "Sadhana", "Sagara", "Saheli", "Sahiba", "Sahila", "Sajili", "Sajni", "Sakina", "Sakti", "Saloni", "Samiksha", "Sampriti", "Samta", "Sanchay", "Sandya", "Sangita", "Saniya", "Sanjna", "Sanjula", "Sanyogita", "Sanyukta", "Sapna", "Sarasvati", "Saravati", "Sarika", "Sarisha", "Sarita", "Sarmistha", "Saryu", "Sashi", "Sasthi", "Satyavati", "Saumya", "Saundarya", "Savarna", "Savita", "Savitri", "Sayana", "Seema", "Sesha", "Sevati", "Sevita", "Shaila", "Shailaja", "Shaili", "Shalini", "Shamita", "Shanata", "Shanata", "Shanika", "Shantah", "Shante", "Shanti", "Sharda", "Sharmila", "Sharmistha", "Sharvani", "Shashi", "Sheetal", "Shobha", "Shobhna", "Shradhdha", "Shreya", "Shri", "Shridevi", "Shrijani", "Shruti", "Shubha", "Shyla", "Siddhi", "Simoni", "Simran", "Sirisha", "Smita", "Smridhi", "Smriti", "Smriti", "Sneh", "Sneha", "Snigdha", "Somatra", "Sona", "Sonakshi", "Sonal", "Sonika", "Sraddha", "Srilata", "Sripada", "Srishti", "Sruti", "Subhadra", "Subhaga", "Subhangi", "Subhuja", "Suchi", "Suchitra", "Sudevi", "Sudha", "Sujata", "Sukanya", "Suksma", "Sumana", "Sumanna", "Sumati", "Sundarai", "Sunee", "Sunila", "Sunita", "Suniti", "Suparna", "Suprabha", "Supriti", "Supriya", "Surabhi", "Suravinda", "Surotama", "Suruchi", "Surupa", "Surya", "Sushanti", "Sushma", "Sushmita", "Susila", "Suvarna", "Suvrata", "Swarupa", "Sweta", "Tamali", "Tamanna", "Tanaya", "Tanika", "Tanu", "Tanuja", "Tanushi", "Tanvi", "Tapi", "Tapti", "Tarala", "Tarannum", "Tarika", "Tejal", "Teji", "Toral", "Trishna", "Triveni", "Trupti", "Trusha", "Tuhina", "Tulasi", "Tusti", "Udaya", "Ujila", "Ujwala", "Uma", "Umali", "Unnati", "Urmila", "Urvasi", "Usha", "Ushmil", "Uttara", "Vachya", "Vaishali", "Vandana", "Vani", "Vanika", "Vanita", "Vanjan", "Varana", "Varsha", "Varuni", "Vasanta", "Vasavi", "Vasudha", "Vasumati", "Veda", "Veena", "Vibhuti", "Vidya", "Vimala", "Vinata", "Vinaya", "Vineeta", "Visala", "Vrinda", "Vyoma", "Waheeda", "Yaksha", "Yamini", "Yamuna", "Yashona", "Yauvani", "Yogini", "Yogita", "Zankhana", "Zarna"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function hungarianGivenNamesFemale()
{
    $giveNames = array ("Bela", "Kamella", "Katalin", "Katoka", "Klara", "Klarika", "Lenci", "Lilike", "Lorand", "Nusa", "Onella", "Zigana", "Zizi", "Zsa Zsa"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function indianGivenNamesFemale()
{
    $giveNames = array ("Ketaki", "Kusum", "Narmada", "Naveena", "Nishtha", "Nivedita", "Sahana", "Salena", "Sanchali", "Sanchaya", "Sanjana", "Shivani", "Shubhada", "Sumitra", "Swati", "Tarangini", "Tarjani", "Trilochana", "Zaqaria"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function irishGivenNamesFemale()
{
    $giveNames = array ( "Adan", "Aella", "Afric", "Ailis", "Akaisha", "Alana", "Alison", "Arlene", "Bedelia", "Birgit", "Breck", "Breena", "Brena", "Brenda", "Brice", "Bridget", "Cacey", "Caitlin", "Callan", "Cara", "Carey", "Carin", "Casey", "Cassidy", "Ceara", "Chay", "Ciannait", "Clodagh", "Colleen", "Cordelia", "Darby", "Darcie", "Daryn", "Derry", "Dierdre", "Donelle", "Duvessa", "Dymphna", "Earlene", "Ennis", "Erin", "Farran", "Feena", "Gail", "Gilda", "Glen", "Guinevere", "Haley", "Hiolair", "Hisolda", " Ilene", "Ina", "Innis", "Kacey", "Kaci", "Kaelin", "Kalin", "Kasey", "Kasie", "Kassie", "Katelin", "Katen", "Katlin", "Kayley", "Keanna", "Keara", "Keegan", "Keeley", "Keelia", "Keelin", "Kella", "Kellen", "Kelly", "Kellyn", "Kennedy", "Kevina", "Kianna", "Kiarra", "Kiera", "Kiley", "Killian", "Kyara", "Kyla", "Kyle", "Kyleigh", "Kylene", "Lanni", "Lassie", "Lee", "Liadan", "Mackenzie", "Maegan", "Maeron", "Maeve", "Maire", "Mallow", "Maura", "Maureen", "Meryl", "Moira", " Mollie", "Mona", "Muna", "Muriel", "Murphy", "Nelda", "Nevina", "Nya", "Nyah", "Nyasia", "Ohnicio", "Onora", "Oola", "Oria", "Regan", "Reilley", "Riana", "Richael", "Rosa", "Shanessa", "Shannon", "Shauna", "Shawnee", "Shawnnessy", "Shay", "Shayla", "Shaylee", "Shea", "Sheena", "Shenna", "Sinead", "Sosanna", "Taban", "Teagan", "Tully", "Tyree", "Ula", "Zenevieva", "Zephan"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function italianGivenNamesFemale()
{
    $giveNames = array ("Abriana", "Bambi", "Bianca", "Caprice", "Cara", "Carin", "Carlotta", "Cettina", "Contessa", "Domani", "Donatella", "Fabiana", "Fiorella", "Fiorenza", "Gaetana", "Gioia", "Giordana", "Giovanna", "Graziella", "Ilaria", "Itala", "Justina", "Lanza", "Lave", "Liona", "Luca", "Lucia", "Luciana", "Mariabella", "Marietta", "Marsala", "Mia", "Michelle", "Mila", "Natalia", "Neroli", "Ornella", "Prima", "Primavera", "Quorra", "Ricarda", "Rocio", "Romana", "Ruffina", "Sidonia", "Sienna", "Sistine", "Speranza", "Tessa", "Trilby", "Uberta", "Vedette", "Venecia", "Venetia", "Zola"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function japaneseGivenNamesFemale()
{
    $giveNames = array ("Ai", "Aiko", "Akako", "Akanah", "Aki", "Akina", "Akiyama", "Amarante", "Amaya", "Aneko", "Anzan", "Anzu", "Aoi", "Asa", "Ayame", "Bankei", "Chika", "Chinshu", "Chiyo", "Cho", "Chorei", "Dai", "Eido", "Etsu", "Fuyo", "Gyo Shin", "Hakue", "Hama", "Hanako", "Haya", "Hisa", "Hoshi", "Ima", "Ishi", "Iva", "Jakushitsu", "Jimin", "Jin", "JoMei", "Kaede", "Kagami", "Kaida", "Kaiya", "Kameko", "Kamin", "Kane", "Kaori", "Kaoru", "Kata", "Kaya", " Kei", "Keiko", "Kiaria", "Kichi", "Kiku", "Kimi", "Kin", "Kioko", "Kira", "Kita", "Kiwa", "Kiyoshi", "Koge", "Kogen", "Kohana", "Koto", "Kozue", "Kuma", "Kumi", "Kumiko", "Kuniko", "Kura", "Kyoko", "Leiko", "Machi", "Machiko", "Maeko", "Maemi", "Mai", "Maiko", "Makiko", "Mamiko", "Mariko", "Masago", "Masako", "Matsuko", "Mayako", "Mayuko", "Michi", "Michiko", "Midori", "Mieko", "Mihoko", "Mika", "Miki", "Minako", "Mine", "Misako", "Mitsuko", "Miwa", " Miya", "Miyoko", "Miyuki", "Momoko", "Mutsuko", "Myoki", "Nahoko", "Nami", "Nanako", "Nanami", "Naoko", "Nariko", "Natsuko", "Natsuko", "Nayoko", "Nishi", "Nori", "Noriko", "Nozomi", "Nyoko", "Oki", "Rai", "Raku", "Rei", "Reiko", "Ren", "Renora", "Rieko", "Rikako", "Riku", "Rinako", "Rini", "Risako", "Roshin", "Rumiko", "Ruri", "Ryoko", "Sachi", "Sachiko", "Sada", "Saeko", "Saiun", "Saki", "Sakiko", "Sakuko", "Sakura", "Sakurako", "Sanako", "Sasa", "Sashi", " Sato", "Satoko", "Sawa", "Sayo", "Sayoko", "Seki", "Shika", "Shikah", "Shina", "Shinko", "Shoko", "Sorano", "Suki", "Sumi", "Tadako", "Taido", "Taka", "Takako", "Takara", "Taki", "Tamaka", "Tamiko", "Tanaka", "Taney", "Tani", "Taree", "Tazu", "Tennen", "Tetsu", "Tokiko", "Tomi", "Tomiko", "Tora", "Tori", "Toyo", "Umeko", "Usagi", "Wakana", "Washi", "Yachi", "Yaki", "Yama", "Yasu", "Yayoi", "Yei", "Yoi", "Yoko", "Yori", "Yoshiko", "Yuka", "Yukako", "Yukiko", "Yumi", "Yumiko", "Yuri", "Yuriko", "Yutsuko", "Zadhiya"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function koreanGivenNamesFemale()
{
    $giveNames = array ("Cho", "Chon", "HeeWon", "Jeong", "Joo Mi", "Min", "Moon", "Shin", "Soo", "Sun"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function latinGivenNamesFemale()
{
    $giveNames = array ( "Abby", "Ada", "Aderes", "Adora", "Adrienne", "Aemilia", "Affinity", "Aimee", "Alba", "Allegra", "Alma", "Amanda", "Amity", "Amory", "Amriel", "Amy", "Antlia", "Antonia", "April", "Aqualina", "Aquamarine", "Arbor", "Arden", "Aril", "Arva", "Auburn", "Augusta", "Aurelia", "Autumn", "Ava", "Avalon", "Barbara", "Beata", "Beatrice", "Bellona", "Benedetta", "Blase", "Calcite", "Calendula", "Callis", "Cambria", "Camille", "Campbell", "Candida", "Candra", "Cara", "Carey", "Carina", "Carisa", "Carla", " Carnelian", "Cassiel", "Cecilia", "Celeste", "Cerelia", "Charity", "Chastity", "Cheridah", "Citrine", "Claire", "Clementine", "Colomba", "Comfort", "Compassion", "Concepción", "Concordia", "Constance", "Coral", "Cordelia", "Corky", "Cornelia", "Corrina", "Dabria", "Daisy", "Danica", "Delinda", "Desiree", "Dextra", "Diana", "Dido", "Diella", "Dillian", "Diva", "Dolores", "Donna", "Emily", "Enza", "Ermine", "Esme", "Essence", "Estelle", "Eternal", "Eustacia", "Faith", "Fantasia", "Fawn", "Felicia", "Feronia", "Fidelity", "Flavia", " Florence", "Fortitude", "Fortuna", "Franca", "Fulvia", "Garnet", "Gemma", "Genesis", "Gill", "Gillian", "Ginger", "Gloria", "Grace", "Gratia", "Gustava", "Heliotrope", "Hester", "Honesty", "Honor", "Hortense", "Humbleness", "Humility", "Imogene", "Integrity", "Ivory", "Jae", "Jillian", "Jocosa", "Jovanna", "Joy", "Joyce", "Julia", "June", "Juniper", "Juno", "Justice", "Kadenza", "Kalare", "Kambrea", "Kambria", "Karise", "Karlee", "Karly", "Karmen", "Katarina", "Khara", "Kira", "Kitty", "Konstance", "Kordell", " Lacey", "Lachesis", "Laetitia", "Lalo", "Lara", "Laraine", "Lasthenia", "Latisha", "Latonia", "Laura", "Laurinda", "Laveda", "Lavina", "Lavinia", "Lawrence", "Leann", "Leauna", "Lella", "Leola", "Leta", "Leticia", "Letitia", "Levana", "Libra", "Licia", "Lilian", "Liliana", "Lilianna", "Lilliana", "Lillias", "Lily", "Lita", "Livi", "Lora", "Lori", "Lorinda", "Lotta", "Lottie", "Luce", "Lucille", "Lucinda", "Lucrece", "Lucretia", "Lucy", "Luka", "Lumina", "Luna", "Lupe", "Lynnea", "Mabel", " Madonna", "Mae", "Maeve", "Magna", "Magnolia", "Marcella", "Marcia", "Maren", "Maricel", "Marina", "Maris", "Marissa", "Martina", "Maxine", "May", "Medea", "Mei", "Melba", "Melina", "Mercedes", "Merit", "Messina", "Meta", "Minerva", "Mira", "Mirabelle", "Miranda", "Modestus", "Modesty", "Monica", "Muriel", "Myra", "Napea", "Narda", "Nasia", "Natalie", "Neci", "Necia", "Nedra", "Nerissa", "Nevada", "Nigella", "Nivea", "Noble", "Nohely", "Nola", "Noletta", "Nona", "Nonnita", "Norma", " Nova", "Nydia", "Octavia", "Odina", "Oistin", "Olive", "Ondine", "Oralia", "Orchid", "Oria", "Oria", "Oriana", "Orianna", "Oriole", "Orla", "Orlanda", "Orsa", "Ortensia", "Osma", "Ova", "Paula", "Pax", "Pearl", "Persis", "Petronella", "Petula", "Pia", "Poppy", "Portia", "Priscilla", "Prudence", "Quartilla", "Quinella", "Quintessa", "Quintina", "Quirina", "Quirita", "Quita", "Rain", "Regina", "Renata", "Renita", "Revelation", "Rhea", "Risa", "Rosanne", "Rose", "Rue", "Sabana", "Sabina", " Nova", "Nydia", "Octavia", "Odina", "Oistin", "Olive", "Ondine", "Oralia", "Orchid", "Oria", "Oria", "Oriana", "Orianna", "Oriole", "Orla", "Orlanda", "Orsa", "Ortensia", "Osma", "Ova", "Paula", "Pax", "Pearl", "Persis", "Petronella", "Petula", "Pia", "Poppy", "Portia", "Priscilla", "Prudence", "Quartilla", "Quinella", "Quintessa", "Quintina", "Quirina", "Quirita", "Quita", "Rain", "Regina", "Renata", "Renita", "Revelation", "Rhea", "Risa", "Rosanne", "Rose", "Rue", "Sabana", "Sabina", " Tosca", "Toshi", "Tosia", "Tranquility", "Tricia", "Trini", "Trinity", "Trisha", "Trista", "Tristana", "Tristessa", "Tryphena", "Ultima", "Una", "Undine", "Uny", "Urbana", "Ursula", "Valencia", "Valentine", "Valerie", "Valisa", "Valonia", "Valora", "Vanecia", "Venice", "Vera", "Verda", "Verena", "Verity", "Vernice", "Veronica", "Vesper", "Vesta", "Vestal", "Vevina", "Victoria", "Vidonia", "Vienna", "Vincentia", "Violet", "Virgilia", "Virginia", "Virgo", "Viridis", "Vita", "Vivian", "Viviefont", "Zama", "Zanna", " Zea", "Zinnia", "Zona"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function middleEnglishGivenNamesFemale()
{
    $giveNames = array ("Amiable", "Cavanaugh", "Citrine", "Doe", "Knowledge", "Lane", "Mercy", "Merry", "Scarlet"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function nativeAmericanGivenNamesFemale()
{
    $giveNames = array ( "Abeque", "Abey", "Abeytu", "Adoette", "Adsila", "Aiyana", "Alameda", "Alaqua", "Alawa", "Aleshanee", "Algoma", "Alsoomse", "Amadahy", "Amitola", "Anaba", "Angeni", "Aponi", "Aquene", "Awendela", "Ayasha", "Ayita", "Bly", "Chapa", "Chenoa", "Cheyenne", "Chimalis", "Dakota", "Doli", "Donoma", "Dyani", "Elu", "Enola", "Etenia", "Eyota", "Fala", "Galilahi", "Genesee", "Hachi", "Haiwee", "Halona", "Honovi", "Hurit", "Huyana", "Istas", "Ituha", "Kachine", "Kai", "Kaniya", "Kanti", "Karmiti", "Kilenya", "Kimama", "Kimimela", "Kiona", "Kishi", "Koko", "Koleyn", "Kwanita", "Labdhi", "Lahoma", "Lakota", "Leotie", "Lequoia", "Liluye", "Liseli", "Litonya", "Lomasi", "Luyu", "Macha", "Magena", "Mahala", "Mai", "Maka", "Makya", "Malina", "Mapiya", "Meda", "Miakoda", "Migisi", "Mika", "Mitena", "Mitexi", "Nahimana", "Nara", "Nascha", "Nasnan", "Nata", "Nayeli", "Netis", "Nita", "Nitika", "Nituna", "Nokomis", "Nuna", "Nuttah", "Ohio", "Olathe", "Olisa", "Onawa", "Oneida", "Oni", "Onida", "Opa", "Pala", "Pana", "Pelipa", "Pinquana", "Pocahontas", "Quanah", "Sahyko", "Sakari", "Sakima", "Salali", "Satinka", "Sequoia", "Shada", "Shako", "Shania", "Shaniya", "Shasta", "Shima", "Shysie", "Sihu", "Snana", "Sokanon", "Sora", "Soyala", "Taa", "Taborri", "Tacincala", "Tadewi", "Tadita", "Taima", "Taini", "Tainn", "Takoda", "Tala", "Tama", "Tamsyn", "Tareva-Chine'", "Tarsha", "Tawana", "Tayen", "Tazanna", "Tehya", "Tiva", "Tolinka", "Topanga", "Tuwa", "Unega", "Urika", "Usdi", "Utina", "Wachiwi", "Waneta", "Wapeka", "Wapin", "Wasula", "Wateka", "Wawetseka", "Weayaya", "Weetamoo", "Winema", "Wyanet", "Wynonah", "Wyome", "Yalika", "Yanaha", "Yoki", "Zabana", "Zaltana", "Zonta"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function norseGivenNamesFemale()
{
    $giveNames = array ("Bo", "Frigg", "Grid", "Gro", "Guro", "Haley", "Heidrun", "Hela", "Magna", "Oda", "Ove", "Ragnhild", "Unni"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function oldEnglishGivenNamesFemale()
{
    $giveNames = array ( "Afton", "Agrona", "Aida", "Aislinn", "Alcott", "Alden", "Alvina", "Arantxa", "Ariana", "Arleigh", "Ashley", "Aspen", "Audrey", "Avon", "Bailey", "Beverly", "Blaine", "Blossom", "Blythe", "Brea", "Brenda", "Brook", "Buffy", "Cady", "Cameron", "Chelsea", "Corliss", "Courtney", "Demelza", "Eartha", "Edda", "Edith", "Ethel", "Farrah", "Fern", "Fiona", "Godiva", "Golda", "Halsey", "Harmony", "Hazel", "Hedwig", "Hertha", "Hollace", "Holly", "Hope", "Idina", "Isolda", "Ivy", "Jocelyn", " Kim", "Kimberley", "Kyla", "Lee", "Leigh", "Leslie", "Lindsay", "Locke", "Love", "Luella", "Maida", "Mirth", "Missy", "Misty", "Nara", "Obsession", "Radella", "Sacrifice"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldFrenchGivenNamesFemale()
{
    $giveNames = array ("Chance", "Chantal", "Delight", "Fay", "Frances", "Jewel", "Musetta", "Olive", "Raissa", "Sojourner"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}




function oldGermanGivenNamesFemale()
{
    $giveNames = array ("Aloysia", "Carla", "Carol", "Chay", "Ella", "Emiline", "Ernestine", "Etta", "Ida", "Leopolda", "Leyna", "Lorraine", "Louise", "Minna"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldNorseGivenNamesFemale()
{
    $giveNames = array ("Astrid", "Deila", "Gail", "Harper", "Kippi", "Nessa", "Olive", "Ronalda", "Sigrid", "Thora", "Valda"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function persianGivenNamesFemale()
{
    $giveNames = array ("Abtin", "Ardeshir", "Azarin", "Azura", "Cyra", "Darice", "Esther", "Fila", "Gelsey", "Jaleh", "Jasmine", "Kasra", "Kira", "Mahdis", "Mahsa", "Mandana", "Midge", "Mina", "Nickan", "Roxanne", "Sanam", "Vashti", "Yasmine", "Zeeba", "Zohreh"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function polishGivenNamesFemale()
{
    $giveNames = array ("Danuta", "Ewa", "Filipina", "Jadwiga", "Kalene", "Karolina", "Kasia", "Kassia", "Klementyna", "Ksena", "Lilka", "Macy", "Olesia", "Rasine", "Tajsa", "Tekli", "Tesia", "Tola", "Tolia", "Truda", "Valeska", "Walentya", "Wislawa", "Zima", "Zofia", "Zotia"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function polynesianGivenNamesFemale()
{
    $giveNames = array ("Kaula", "Lana", "Mahal", "Maili", "Pua", "Uinise", "Vailea"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function russianGivenNamesFemale()
{
    $giveNames = array ("Akelah", "Alexandrite", "Anya", "Bohdana", "Cyzarine", "Dusana", "Feodora", "Jelena", "Kisa", "Kiska", "Leena", "Lenya", "Lida", "Luba", "Marinka", "Mika", "Mila", "Misha", "Nadie", "Nickita", "Nika", "Oksana", "Olga", "Olien", "Raissa", "Sashenka", "Savina", "Sezja", "Sonia", "Svetlana", "Taneya", "Tanya", "Tatiana", "Vanka", "Vanya", "Verushka", "Vilhemina", "Yelena", "Yeva", "Yula", "Zagir", "Zasha", "Zdebka", "Zhenya", "Zilya"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function sanskritGivenNamesFemale()
{
    $giveNames = array ("Chandra", "Kalinda", "Kalpana", "Kama", "Karma", "Kashmir", "Leelea", "Lilac", "Malika", "Manjusha", "Nalini", "Opal", "Shobha", "Sitara", "Taruna"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function scandinavianGivenNamesFemale()
{
    $giveNames = array ("Alleta", "Bo", "Dagna", "Dahlia", "Delling", "Eir", "Erica", "Evonne", "Freya", "Gudrun", "Gunda", "Halle", "Idonea", "Ingrid", "Jesen", "Karena", "Kelda", "Kelsey", "Kiersten", "Krystyn", "Lang", "Larsen", "Linnea", "Lis", "Lisolette", "Litzy", "Loki", "Lundy", "Malin", "Marny", "Mia", "Nissa", "Quenby", "Quinby", "Ran", "Ranveig", "Rinda", "Runa", "Sanna", "Savea", "Selma", "Signa", "Signild", "Sigrun", "Snøfrid", "Sonja", "Sorley", "Svea", "Synnove", "Thorborg", "Thurid", "Thyrrni", "Toril", "Toyah", "Tyra", "Ula", "Unn", "Valkyrie", "Vanja", "Vigdis", "Viola", "Ylwa", "Zainab"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function scottishGivenNamesFemale()
{
    $giveNames = array ("Ailsa", "Ainsley", "Artis", "Bonnie", "Campbell", "Davine", "Dree", "Enya", "Genene", "Ilisa", "Jeanne", "Kelcie", "Kelsi", "Lesley", "Leslie", "Logan", "Mairead", "Malvina", "Nairne", "Rae", "Sile", "Siusan", "Tira", "Vanora"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function slavicGivenNamesFemale()
{
    $giveNames = array ("Anezka", "Casmir", "Darva", "Kami", "Kamila", "Kamilia", "Karayan", "Katerina", "Katia", "Kisha", "Klavdia", "Kostya", "Lada", "Laima", "Lala", "Larya", "Lenka", "Lilia", "Lizina", "Lonna", "Malika", "Milena", "Nadine", "Natala", "Neda", "Neveah", "Nijole", "Ondrea", "Radinka", "Saskia", "Sveta", "Szitakota", "Tana", "Tania", "Tasya", "Teca", "Velika", "Vera", "Viera", "Yarmilla", "Zabel", "Zeljka", "Zora", "Zuzana"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function spanishGivenNamesFemale()
{
    $giveNames = array ("Adalia", "Aidia", "Alva", "Aureliano", "Belinda", "Bettina", "Carey", "Carlotta", "Coco", "Damita", "Delfina", "Duenna", "Dulcie", "Elvira", "Enriqua", "Esmerelda", "Esperanza", "Fe", "Fonda", "Frida", "Friera", "Gitana", "Gotzone", "Guadalupe", "Hermosa", "Ines", "Isabel", "Itzel", "Jade", "Jardena", "Julitta", "Kesare", "Kiki", "Lacienega", "Ladonna", "Landrada", "Lela", "Lenora", "Leya", "Liani", "Linda", "Lluvia", "Lola", "Lolita", "Luisa", "Lujuana", "Lupita", "Lux", "Luz", "Madeira ", "Madra", "Maitane", "Maitea", "Majondra", "Manda", "Manuela", "Mariola", "Mariposa", "Marisa", "Melosa", "Mio", "Mira", "Montana", "Mora", "Neiva", "Nerita", "Neva", "Nieve", "Nina", "Novia", "Novyanna", "Oihane", "Ora", "Osana", "Paca", "Paloma", "Placida", "Puma", "Querida", "Queta", "Quinceanos", "Raeka", "Rafaela", "Ramona", "Rana", "Ria", "Rigoberta", "Roana", "Rosalind", "Rosalynda", "Sally", "Salma", "Sancha", "Sancho", "Sandia", "Santana", "Santina", "Savana", "Savanna", "Seina ", "Senalda", "Senona", "Sierra", "Sofiel", "Solana", "Soledad", "Sonora", "Taina", "Tea", "Tejana", "Terceiro", "Teresa", "Texcean", "Tia", "Tierra", "Tina", "Tranquilia", "Trella", "Tulia", "Ursulina", "Verdad", "Veta", "Vina", "Xalbadora", "Xevera", "Xiao", "Xiomara", "Yadra", "Yomaris", "Zaneta", "Zarela", "Zarita", "Zaviera", "Zequinha", "Zuriaa", "Zurine"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function swahiliGivenNamesFemale()
{
    $giveNames = array ("Adia", "Barika", "Epua", "Kamaria", "Kesi", "Lakeisha", "Leta", "Nia", "Shani", "Simba", "Taariq", "Winda"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function swedishGivenNamesFemale()
{
    $giveNames = array ("Kajsa", "Maj", "Signe", "Trind", "Valborg"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function teutonicGivenNamesFemale()
{
    $giveNames = array ("Magan", "Minka", "Orinda", "Verena", "Waltraud", "Willa", "Yvette"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function turkishGivenNamesFemale()
{
    $giveNames = array ("Aylin", "Banu", "Jale", "Kari", "Karli", "Kerzi", "Kiral", "Nagihan", "Nerhim", "Nilgun", "Nuray", "Nurhan", "Olcay", "Onur", "Safak", "Sefika", "Semra", "Sezen", "Sibel", "Sila", "Zerdali"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function vietnameseGivenNamesFemale()
{
    $giveNames = array ("Cara", "Duyen", "Hong", "Khanh", "Kieu", "Lan", "Lieu", "Linh", "Loan", "Ly", "Mai", "Mychau", "Nguyet", "Nhi", "Nhu", "Nhung", "Nu", "Sen", "Tai", "Tam", "Tan", "Thao", "Thuy", "Tien", "Trang", "Trinh", "Tuyen", "Ut", "Xuan"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function welshGivenNamesFemale()
{
    $giveNames = array ("Bryn", "Carey", "Caron", "Carys", "Ceridwen", "Crisiant", "Dylan", "Dyllis", "Emlyn", "Enid", "Genevieve", "Gladys", "Idelle", "Jensine", "Karrington", "Kordell", "Kynan", "Llewellyn", "Lowri", "Lyneth", "Mabyn", "Mairwen", "Merlyn", "Morgan", "Myfanwy", "Nerys", "Olwen", "Owena", "Reese", "Rhiamon", "Rhiannon", "Rhonwen", "Riannon", "Rowena", "Saeran", "Sian", "Sulwyn", "Taffy", "Teleri", "Telyn", "Tydfill", "Verran", "Vevay", "Wynn"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function yiddishGivenNamesFemale()
{
    $giveNames = array ("Bruna", "Kyla", "Leba", "Mindel", "Shayndel", "Syshe"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}




function getName($originGiven, $sex)
{
    $backgroundGiven = intval($originGiven);
    $gender = intval($sex);

        if($gender === 0)
        {
            if($backgroundGiven === 0)
            {
                $firstName = africanGivenNamesMale();
            }
            else if($backgroundGiven === 1)
            {
                $firstName = africanAmericanGivenNamesMale();
            }
            else if($backgroundGiven === 2)
            {
                $firstName = americanGivenNamesMale();
            }
            else if($backgroundGiven === 3)
            {
                $firstName = arabicGivenNamesMale();
            }
            else if($backgroundGiven === 4)
            {
                $firstName = armenianGivenNamesMale();
            }
            else if($backgroundGiven === 5)
            {
                $firstName = celticGivenNamesMale();
            }
            else if($backgroundGiven === 6)
            {
                $firstName = chineseGivenNamesMale();
            }
            else if($backgroundGiven === 7)
            {
                $firstName = czechGivenNamesMale();
            }
            else if($backgroundGiven === 8)
            {
                $firstName = danishGivenNamesMale();
            }
            else if($backgroundGiven === 9)
            {
                $firstName = dutchGivenNamesMale();
            }
            else if($backgroundGiven === 10)
            {
                $firstName = egyptianGivenNamesMale();
            }
            else if($backgroundGiven === 11)
            {
                $firstName = englishGivenNamesMale();
            }
            else if($backgroundGiven === 12)
            {
                $firstName = finnishGivenNamesMale();
            }
            else if($backgroundGiven === 13)
            {
                $firstName = frenchGivenNamesMale();
            }
            else if($backgroundGiven === 14)
            {
                $firstName = gaelicGivenNamesMale();
            }
            else if($backgroundGiven === 15)
            {
                $firstName = germanGivenNamesMale();
            }
            else if($backgroundGiven === 16)
            {
                $firstName = greekGivenNamesMale();
            }
            else if($backgroundGiven === 17)
            {
                $firstName = hawaiianGivenNamesMale();
            }
            else if($backgroundGiven === 18)
            {
                $firstName = hebrewGivenNamesMale();
            }
            else if($backgroundGiven === 19)
            {
                $firstName = hindiGivenNamesMale();
            }
            else if($backgroundGiven === 20)
            {
                $firstName = hungarianGivenNamesMale();
            }
            else if($backgroundGiven === 21)
            {
                $firstName = indianGivenNamesMale();
            }
            else if($backgroundGiven === 22)
            {
                $firstName = irishGivenNamesMale();
            }
            else if($backgroundGiven === 23)
            {
                $firstName = italianGivenNamesMale();
            }
            else if($backgroundGiven === 24)
            {
                $firstName = japaneseGivenNamesMale();
            }
            else if($backgroundGiven === 25)
            {
                $firstName = koreanGivenNamesMale();
            }
            else if($backgroundGiven === 26)
            {
                $firstName = latinGivenNamesMale();
            }
            else if($backgroundGiven === 27)
            {
                $firstName = middleEnglishGivenNamesMale();
            }
            else if($backgroundGiven === 28)
            {
                $firstName = nativeAmericanGivenNamesMale();
            }
            else if($backgroundGiven === 29)
            {
                $firstName = norseGivenNamesMale();
            }
            else if($backgroundGiven === 30)
            {
                $firstName = oldEnglishGivenNamesMale();
            }
            else if($backgroundGiven === 31)
            {
                $firstName = oldFrenchGivenNamesMale();
            }
            else if($backgroundGiven === 32)
            {
                $firstName = oldGermanGivenNamesMale();
            }
            else if($backgroundGiven === 33)
            {
                $firstName = oldNorseGivenNamesMale();
            }
            else if($backgroundGiven === 34)
            {
                $firstName = persianGivenNamesMale();
            }
            else if($backgroundGiven === 35)
            {
                $firstName = polishGivenNamesMale();
            }
            else if($backgroundGiven === 36)
            {
                $firstName = polynesianGivenNamesMale();
            }
            else if($backgroundGiven === 37)
            {
                $firstName = russianGivenNamesMale();
            }
            else if($backgroundGiven === 38)
            {
                $firstName = sanskritGivenNamesMale();
            }
            else if($backgroundGiven === 39)
            {
                $firstName = scandinavianGivenNamesMale();
            }
            else if($backgroundGiven === 40)
            {
                $firstName = scottishGivenNamesMale();
            }
            else if($backgroundGiven === 41)
            {
                $firstName = slavicGivenNamesMale();
            }
            else if($backgroundGiven === 42)
            {
                $firstName = spanishGivenNamesMale();
            }
            else if($backgroundGiven === 43)
            {
                $firstName = swahiliGivenNamesMale();
            }
            else if($backgroundGiven === 44)
            {
                $firstName = swedishGivenNamesMale();
            }
            else if($backgroundGiven === 45)
            {
                $firstName = teutonicGivenNamesMale();
            }
            else if($backgroundGiven === 46)
            {
                $firstName = turkishGivenNamesMale();
            }
            else if($backgroundGiven === 47)
            {
                $firstName = vietnameseGivenNamesMale();
            }
            else if($backgroundGiven === 48)
            {
                $firstName = welshGivenNamesMale();
            }
            else if($backgroundGiven === 49)
            {
                $firstName = yiddishGivenNamesMale();
            }
            else if($backgroundGiven === 200)
            {
                $firstName = "";
            }
            else
            {
                $firstName = "999999";
            }

        }
        else
        {
            if($backgroundGiven === 0)
            {
                $firstName = africanGivenNamesFemale();
            }
            else if($backgroundGiven === 1)
            {
                $firstName = africanAmericanGivenNamesFemale();
            }
            else if($backgroundGiven === 2)
            {
                $firstName = americanGivenNamesFemale();
            }
            else if($backgroundGiven === 3)
            {
                $firstName = arabicGivenNamesFemale();
            }
            else if($backgroundGiven === 4)
            {
                $firstName = armenianGivenNamesFemale();
            }
            else if($backgroundGiven === 5)
            {
                $firstName = celticGivenNamesFemale();
            }
            else if($backgroundGiven === 6)
            {
                $firstName = chineseGivenNamesFemale();
            }
            else if($backgroundGiven === 7)
            {
                $firstName = czechGivenNamesFemale();
            }
            else if($backgroundGiven === 8)
            {
                $firstName = danishGivenNamesFemale();
            }
            else if($backgroundGiven === 9)
            {
                $firstName = dutchGivenNamesFemale();
            }
            else if($backgroundGiven === 10)
            {
                $firstName = egyptianGivenNamesFemale();
            }
            else if($backgroundGiven === 11)
            {
                $firstName = englishGivenNamesFemale();
            }
            else if($backgroundGiven === 12)
            {
                $firstName = finnishGivenNamesFemale();
            }
            else if($backgroundGiven === 13)
            {
                $firstName = frenchGivenNamesFemale();
            }
            else if($backgroundGiven === 14)
            {
                $firstName = gaelicGivenNamesFemale();
            }
            else if($backgroundGiven === 15)
            {
                $firstName = germanGivenNamesFemale();
            }
            else if($backgroundGiven === 16)
            {
                $firstName = greekGivenNamesFemale();
            }
            else if($backgroundGiven === 17)
            {
                $firstName = hawaiianGivenNamesFemale();
            }
            else if($backgroundGiven === 18)
            {
                $firstName = hebrewGivenNamesFemale();
            }
            else if($backgroundGiven === 19)
            {
                $firstName = hindiGivenNamesFemale();
            }
            else if($backgroundGiven === 20)
            {
                $firstName = hungarianGivenNamesFemale();
            }
            else if($backgroundGiven === 21)
            {
                $firstName = indianGivenNamesFemale();
            }
            else if($backgroundGiven === 22)
            {
                $firstName = irishGivenNamesFemale();
            }
            else if($backgroundGiven === 23)
            {
                $firstName = italianGivenNamesFemale();
            }
            else if($backgroundGiven === 24)
            {
                $firstName = japaneseGivenNamesFemale();
            }
            else if($backgroundGiven === 25)
            {
                $firstName = koreanGivenNamesFemale();
            }
            else if($backgroundGiven === 26)
            {
                $firstName = latinGivenNamesFemale();
            }
            else if($backgroundGiven === 27)
            {
                $firstName = middleEnglishGivenNamesFemale();
            }
            else if($backgroundGiven === 28)
            {
                $firstName = nativeAmericanGivenNamesFemale();
            }
            else if($backgroundGiven === 29)
            {
                $firstName = norseGivenNamesFemale();
            }
            else if($backgroundGiven === 30)
            {
                $firstName = oldEnglishGivenNamesFemale();
            }
            else if($backgroundGiven === 31)
            {
                $firstName = oldFrenchGivenNamesFemale();
            }
            else if($backgroundGiven === 32)
            {
                $firstName = oldGermanGivenNamesFemale();
            }
            else if($backgroundGiven === 33)
            {
                $firstName = oldNorseGivenNamesFemale();
            }
            else if($backgroundGiven === 34)
            {
                $firstName = persianGivenNamesFemale();
            }
            else if($backgroundGiven === 35)
            {
                $firstName = polishGivenNamesFemale();
            }
            else if($backgroundGiven === 36)
            {
                $firstName = polynesianGivenNamesFemale();
            }
            else if($backgroundGiven === 37)
            {
                $firstName = russianGivenNamesFemale();
            }
            else if($backgroundGiven === 38)
            {
                $firstName = sanskritGivenNamesFemale();
            }
            else if($backgroundGiven === 39)
            {
                $firstName = scandinavianGivenNamesFemale();
            }
            else if($backgroundGiven === 40)
            {
                $firstName = scottishGivenNamesFemale();
            }
            else if($backgroundGiven === 41)
            {
                $firstName = slavicGivenNamesFemale();
            }
            else if($backgroundGiven === 42)
            {
                $firstName = spanishGivenNamesFemale();
            }
            else if($backgroundGiven === 43)
            {
                $firstName = swahiliGivenNamesFemale();
            }
            else if($backgroundGiven === 44)
            {
                $firstName = swedishGivenNamesFemale();
            }
            else if($backgroundGiven === 45)
            {
                $firstName = teutonicGivenNamesFemale();
            }
            else if($backgroundGiven === 46)
            {
                $firstName = turkishGivenNamesFemale();
            }
            else if($backgroundGiven === 47)
            {
                $firstName = vietnameseGivenNamesFemale();
            }
            else if($backgroundGiven === 48)
            {
                $firstName = welshGivenNamesFemale();
            }
            else if($backgroundGiven === 49)
            {
                $firstName = yiddishGivenNamesFemale();
            }
            else if($backgroundGiven === 200)
            {
                $firstName = "";
            }
            else
            {
                $firstName = "99999";
            }

        }
        
    return $firstName;

}



?>