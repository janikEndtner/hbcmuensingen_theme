<?php        
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */ 

function optionsframework_option_name() {
	// Change this to use your theme slug
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	return $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'milestonez-pro'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
*/

function optionsframework_options() {
	//array of all custom font types.
	$font_types = array( '' => '',
    'ABeeZee' => 'ABeeZee',
    'Abel' => 'Abel',
    'Abril Fatface' => 'Abril Fatface',
    'Aclonica' => 'Aclonica',
    'Acme' => 'Acme',
    'Actor' => 'Actor',
    'Adamina' => 'Adamina',
    'Advent Pro' => 'Advent Pro',
    'Aguafina Script' => 'Aguafina Script',
    'Akronim' => 'Akronim',
    'Aladin' => 'Aladin',
    'Aldrich' => 'Aldrich',
    'Alegreya' => 'Alegreya',
    'Alegreya Sans SC' => 'Alegreya Sans SC',
    'Alegreya SC' => 'Alegreya SC',
    'Alex Brush' => 'Alex Brush',
    'Alef' => 'Alef',
    'Alfa Slab One' => 'Alfa Slab One',
    'Alice' => 'Alice',
    'Alike' => 'Alike',
    'Alike Angular' => 'Alike Angular',
    'Allan' => 'Allan',
    'Allerta' => 'Allerta',
    'Allerta Stencil' => 'Allerta Stencil',
    'Allura' => 'Allura',
    'Almendra' => 'Almendra',
    'Almendra Display' => 'Almendra Display',
    'Almendra SC' => 'Almendra SC',
    'Amiri' => 'Amiri',
    'Amarante' => 'Amarante',
    'Amaranth' => 'Amaranth',
    'Amatic SC' => 'Amatic SC',
    'Amethysta' => 'Amethysta',
    'Amita' => 'Amita',
    'Anaheim' => 'Anaheim',
    'Andada' => 'Andada',
    'Andika' => 'Andika',
    'Annie Use Your Telescope' => 'Annie Use Your Telescope',
    'Anonymous Pro' => 'Anonymous Pro',
    'Antic' => 'Antic',
    'Antic Didone' => 'Antic Didone',
    'Antic Slab' => 'Antic Slab',
    'Anton' => 'Anton',
    'Angkor' => 'Angkor',
    'Arapey' => 'Arapey',
    'Arbutus' => 'Arbutus',
    'Arbutus Slab' => 'Arbutus Slab',
    'Architects Daughter' => 'Architects Daughter',
    'Archivo White' => 'Archivo White',
    'Archivo Narrow' => 'Archivo Narrow',
    'Arial' => 'Arial',
    'Arimo' => 'Arimo',
    'Arya' => 'Arya',
    'Arizonia' => 'Arizonia',
    'Armata' => 'Armata',
    'Artifika' => 'Artifika',
    'Arvo' => 'Arvo',
    'Asar' => 'Asar',
    'Asap' => 'Asap',
    'Asset' => 'Asset',
    'Astloch' => 'Astloch',
    'Asul' => 'Asul',
    'Atomic Age' => 'Atomic Age',
    'Aubrey' => 'Aubrey',
    'Audiowide' => 'Audiowide',
    'Autour One' => 'Autour One',
    'Average' => 'Average',
    'Average Sans' => 'Average Sans',
    'Averia Gruesa Libre' => 'Averia Gruesa Libre',
    'Averia Libre' => 'Averia Libre',
    'Averia Sans Libre' => 'Averia Sans Libre',
    'Averia Serif Libre' => 'Averia Serif Libre',
    'Battambang' => 'Battambang',
    'Bad Script' => 'Bad Script',
    'Bayon' => 'Bayon',
    'Balthazar' => 'Balthazar',
    'Bangers' => 'Bangers',
    'Basic' => 'Basic',
    'Baumans' => 'Baumans',
    'Belgrano' => 'Belgrano',
    'Belleza' => 'Belleza',
    'BenchNine' => 'BenchNine',
    'Bentham' => 'Bentham',
    'Berkshire Swash' => 'Berkshire Swash',
    'Bevan' => 'Bevan',
    'Bigelow Rules' => 'Bigelow Rules',
    'Bigshot One' => 'Bigshot One',
    'Bilbo' => 'Bilbo',
    'Bilbo Swash Caps' => 'Bilbo Swash Caps',
    'Biryani' => 'Biryani',
    'Bitter' => 'Bitter',
    'White Ops One' => 'White Ops One',
    'Bokor' => 'Bokor',
    'Bonbon' => 'Bonbon',
    'Boogaloo' => 'Boogaloo',
    'Bowlby One' => 'Bowlby One',
    'Bowlby One SC' => 'Bowlby One SC',
    'Brawler' => 'Brawler',
    'Bree Serif' => 'Bree Serif',
    'Bubblegum Sans' => 'Bubblegum Sans',
    'Bubbler One' => 'Bubbler One',
    'Buda' => 'Buda',
    'Buenard' => 'Buenard',
    'Butcherman' => 'Butcherman',
    'Butcherman Caps' => 'Butcherman Caps',
    'Butterfly Kids' => 'Butterfly Kids',
    'Cabin' => 'Cabin',
    'Cabin Condensed' => 'Cabin Condensed',
    'Cabin Sketch' => 'Cabin Sketch',
    'Cabin' => 'Cabin',
    'Caesar Dressing' => 'Caesar Dressing',
    'Cagliostro' => 'Cagliostro',
    'Calligraffitti' => 'Calligraffitti',
    'Cambay' => 'Cambay',
    'Cambo' => 'Cambo',
    'Candal' => 'Candal',
    'Cantarell' => 'Cantarell',
    'Cantata One' => 'Cantata One',
    'Cantora One' => 'Cantora One',
    'Capriola' => 'Capriola',
    'Cardo' => 'Cardo',
    'Carme' => 'Carme',
    'Carrois Gothic' => 'Carrois Gothic',
    'Carrois Gothic SC' => 'Carrois Gothic SC',
    'Carter One' => 'Carter One',
    'Caveat' => 'Caveat',
    'Caveat Brush' => 'Caveat Brush',
    'Catamaran' => 'Catamaran',
    'Caudex' => 'Caudex',
    'Cedarville Cursive' => 'Cedarville Cursive',
    'Ceviche One' => 'Ceviche One',
    'Changa One' => 'Changa One',
    'Chango' => 'Chango',
    'Chau Philomene One' => 'Chau Philomene One',
    'Chenla' => 'Chenla',
    'Chela One' => 'Chela One',
    'Chelsea Market' => 'Chelsea Market',
    'Cherry Cream Soda' => 'Cherry Cream Soda',
    'Cherry Swash' => 'Cherry Swash',
    'Chewy' => 'Chewy',
    'Chicle' => 'Chicle',
    'Chivo' => 'Chivo',
    'Chonburi' => 'Chonburi',
    'Cinzel' => 'Cinzel',
    'Cinzel Decorative' => 'Cinzel Decorative',
    'Clicker Script' => 'Clicker Script',
    'Coda' => 'Coda',
    'Codystar' => 'Codystar',
    'Combo' => 'Combo',
    'Comfortaa' => 'Comfortaa',
    'Coming Soon' => 'Coming Soon',
    'Condiment' => 'Condiment',
    'Content' => 'Content',
    'Contrail One' => 'Contrail One',
    'Convergence' => 'Convergence',
    'Cookie' => 'Cookie',
    'Comic Sans MS' => 'Comic Sans MS',
    'Copse' => 'Copse',
    'Corben' => 'Corben',
    'Courgette' => 'Courgette',
    'Cousine' => 'Cousine',
    'Coustard' => 'Coustard',
    'Covered By Your Grace' => 'Covered By Your Grace',
    'Crafty Girls' => 'Crafty Girls',
    'Creepster' => 'Creepster',
    'Creepster Caps' => 'Creepster Caps',
    'Crete Round' => 'Crete Round',
    'Crimson' => 'Crimson',
    'Croissant One' => 'Croissant One',
    'Crushed' => 'Crushed',
    'Cuprum' => 'Cuprum',
    'Cutive' => 'Cutive',
    'Cutive Mono' => 'Cutive Mono',
    'Damion' => 'Damion',
    'Dangrek' => 'Dangrek',
    'Dancing Script' => 'Dancing Script',
    'Dawning of a New Day' => 'Dawning of a New Day',
    'Days One' => 'Days One',
    'Dekko' => 'Dekko',
    'Delius' => 'Delius',
    'Delius Swash Caps' => 'Delius Swash Caps',
    'Delius Unicase' => 'Delius Unicase',
    'Della Respira' => 'Della Respira',
    'Denk One' => 'Denk One',
    'Devonshire' => 'Devonshire',
    'Dhurjati' => 'Dhurjati',
    'Didact Gothic' => 'Didact Gothic',
    'Diplomata' => 'Diplomata',
    'Diplomata SC' => 'Diplomata SC',
    'Domine' => 'Domine',
    'Donegal One' => 'Donegal One',
    'Doppio One' => 'Doppio One',
    'Dorsa' => 'Dorsa',
    'Dosis' => 'Dosis',
    'Dr Sugiyama' => 'Dr Sugiyama',
    'Droid Sans' => 'Droid Sans',
    'Droid Sans Mono' => 'Droid Sans Mono',
    'Droid Serif' => 'Droid Serif',
    'Duru Sans' => 'Duru Sans',
    'Dynalight' => 'Dynalight',
    'EB Garamond' => 'EB Garamond',
    'Eczar' => 'Eczar',
    'Eagle Lake' => 'Eagle Lake',
    'Eater' => 'Eater',
    'Eater Caps' => 'Eater Caps',
    'Economica' => 'Economica',
    'Ek Mukta' => 'Ek Mukta',
    'Electrolize' => 'Electrolize',
    'Elsie' => 'Elsie',
    'Elsie Swash Caps' => 'Elsie Swash Caps',
    'Emblema One' => 'Emblema One',
    'Emilys Candy' => 'Emilys Candy',
    'Engagement' => 'Engagement',
    'Englebert' => 'Englebert',
    'Enriqueta' => 'Enriqueta',
    'Erica One' => 'Erica One',
    'Esteban' => 'Esteban',
    'Euphoria Script' => 'Euphoria Script',
    'Ewert' => 'Ewert',
    'Exo' => 'Exo',
    'Exo 2' => 'Exo 2',
    'Expletus Sans' => 'Expletus Sans',
    'Fanwood Text' => 'Fanwood Text',
    'Fascinate' => 'Fascinate',
    'Fascinate Inline' => 'Fascinate Inline',
    'Fasthand' => 'Fasthand',
    'Faster One' => 'Faster One',
    'Federant' => 'Federant',
    'Federo' => 'Federo',
    'Felipa' => 'Felipa',
    'Fenix' => 'Fenix',
    'Finger Paint' => 'Finger Paint',
    'Fira Mono' => 'Fira Mono',
    'Fira Sans' => 'Fira Sans',
    'Fjalla One' => 'Fjalla One',
    'Fjord One' => 'Fjord One',
    'Flamenco' => 'Flamenco',
    'Flavors' => 'Flavors',
    'Fondamento' => 'Fondamento',
    'Fontdiner Swanky' => 'Fontdiner Swanky',
    'Forum' => 'Forum',
    'Francois One' => 'Francois One',
    'FreeSans' => 'FreeSans',

    'Freckle Face' => 'Freckle Face',
    'Fredericka the Great' => 'Fredericka the Great',
    'Fredoka One' => 'Fredoka One',
    'Fresca' => 'Fresca',
    'Freehand' => 'Freehand',
    'Frijole' => 'Frijole',
    'Fruktur' => 'Fruktur',
    'Fugaz One' => 'Fugaz One',
    'Gafata' => 'Gafata',
    'Galdeano' => 'Galdeano',
    'Galindo' => 'Galindo',
    'Gentium Basic' => 'Gentium Basic',
    'Gentium Book Basic' => 'Gentium Book Basic',
    'Geo' => 'Geo',
    'Georgia' => 'Georgia',
    'Geostar' => 'Geostar',
    'Geostar Fill' => 'Geostar Fill',
    'Germania One' => 'Germania One',
    'Gilda Display' => 'Gilda Display',
    'Give You Glory' => 'Give You Glory',
    'Glass Antiqua' => 'Glass Antiqua',
    'Glegoo' => 'Glegoo',
    'Gloria Hallelujah' => 'Gloria Hallelujah',
    'Goblin One' => 'Goblin One',
    'Gochi Hand' => 'Gochi Hand',
    'Gorditas' => 'Gorditas',
    'Gurajada' => 'Gurajada',
    'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
    'Graduate' => 'Graduate',
    'Grand Hotel' => 'Grand Hotel',
    'Gravitas One' => 'Gravitas One',
    'Great Vibes' => 'Great Vibes',
    'Griffy' => 'Griffy',
    'Gruppo' => 'Gruppo',
    'Gudea' => 'Gudea',
    'Gidugu' => 'Gidugu',
    'GFS Didot' => 'GFS Didot',
    'GFS Neohellenic' => 'GFS Neohellenic',
    'Habibi' => 'Habibi',
    'Hammersmith One' => 'Hammersmith One',
    'Halant' => 'Halant',
    'Hanalei' => 'Hanalei',
    'Hanalei Fill' => 'Hanalei Fill',
    'Handlee' => 'Handlee',
    'Hanuman' => 'Hanuman',
    'Happy Monkey' => 'Happy Monkey',
    'Headland One' => 'Headland One',
    'Henny Penny' => 'Henny Penny',
    'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
    'Hind' => 'Hind',
    'Hind Siliguri' => 'Hind Siliguri',
    'Hind Vadodara' => 'Hind Vadodara',
    'Holtwood One SC' => 'Holtwood One SC',
    'Homemade Apple' => 'Homemade Apple',
    'Homenaje' => 'Homenaje',
    'IM Fell' => 'IM Fell',
    'Itim' => 'Itim',
    'Iceberg' => 'Iceberg',
    'Iceland' => 'Iceland',
    'Imprima' => 'Imprima',
    'Inconsolata' => 'Inconsolata',
    'Inder' => 'Inder',
    'Indie Flower' => 'Indie Flower',
    'Inknut Antiqua' => 'Inknut Antiqua',
    'Inika' => 'Inika',
    'Irish Growler' => 'Irish Growler',
    'Istok Web' => 'Istok Web',
    'Italiana' => 'Italiana',
    'Italianno' => 'Italianno',
    'Jacques Francois' => 'Jacques Francois',
    'Jacques Francois Shadow' => 'Jacques Francois Shadow',
    'Jim Nightshade' => 'Jim Nightshade',
    'Jockey One' => 'Jockey One',
    'Jaldi' => 'Jaldi',
    'Jolly Lodger' => 'Jolly Lodger',
    'Josefin Sans' => 'Josefin Sans',
    'Josefin Sans' => 'Josefin Sans',
    'Josefin Slab' => 'Josefin Slab',
    'Joti One' => 'Joti One',
    'Judson' => 'Judson',
    'Julee' => 'Julee',
    'Julius Sans One' => 'Julius Sans One',
    'Junge' => 'Junge',
    'Jura' => 'Jura',
    'Just Another Hand' => 'Just Another Hand',
    'Just Me Again Down Here' => 'Just Me Again Down Here',
    'Kadwa' => 'Kadwa',
    'Kdam Thmor' => 'Kdam Thmor',
    'Kalam' => 'Kalam', 
    'Kameron' => 'Kameron',
    'Kantumruy' => 'Kantumruy',
    'Karma' => 'Karma',
    'Karla' => 'Karla',
    'Kaushan Script' => 'Kaushan Script',
    'Kavoon' => 'Kavoon',
    'Keania One' => 'Keania One',
    'Kelly Slab' => 'Kelly Slab',
    'Kenia' => 'Kenia',
    'Khand' => 'Khand',
    'Khmer' => 'Khmer',
    'Khula' => 'Khula',
    'Kite One' => 'Kite One',
    'Knewave' => 'Knewave',
    'Kotta One' => 'Kotta One',
    'Kranky' => 'Kranky',
    'Kreon' => 'Kreon',
    'Kristi' => 'Kristi',
    'Koulen' => 'Koulen',
    'Krona One' => 'Krona One',
    'Kurale' => 'Kurale',
    'Lakki Reddy' => 'Lakki Reddy',
    'La Belle Aurore' => 'La Belle Aurore',
    'Lancelot' => 'Lancelot',
    'Laila' => 'Laila',
    'Lato' => 'Lato',
    'Lateef' => 'Lateef',
    'League Script' => 'League Script',
    'Leckerli One' => 'Leckerli One',
    'Ledger' => 'Ledger',
    'Lekton' => 'Lekton',
    'Lemon' => 'Lemon',

    'Libre Baskerville' => 'Libre Baskerville',
    'Life Savers' => 'Life Savers',
    'Lilita One' => 'Lilita One',
    'Limelight' => 'Limelight',
    'Linden Hill' => 'Linden Hill',
    'Lobster' => 'Lobster',
    'Lobster Two' => 'Lobster Two',
    'Londrina Outline' => 'Londrina Outline',
    'Londrina Shadow' => 'Londrina Shadow',
    'Londrina Sketch' => 'Londrina Sketch',
    'Londrina Solid' => 'Londrina Solid',
    'Lora' => 'Lora',
    'Love Ya Like A Sister' => 'Love Ya Like A Sister',
    'Loved by the King' => 'Loved by the King',
    'Lovers Quarrel' => 'Lovers Quarrel',
    'Lucida Sans Unicode' => 'Lucida Sans Unicode',
    'Luckiest Guy' => 'Luckiest Guy',
    'Lusitana' => 'Lusitana',
    'Lustria' => 'Lustria',
    'Macondo' => 'Macondo',
    'Macondo Swash Caps' => 'Macondo Swash Caps',
    'Magra' => 'Magra',
    'Maiden Orange' => 'Maiden Orange',
    'Mallanna' => 'Mallanna',
    'Mandali' => 'Mandali',
    'Mako' => 'Mako',
    'Marcellus' => 'Marcellus',
    'Marcellus SC' => 'Marcellus SC',
    'Marck Script' => 'Marck Script',
    'Margarine' => 'Margarine',
    'Marko One' => 'Marko One',
    'Marmelad' => 'Marmelad',
    'Marvel' => 'Marvel',
    'Martel' => 'Martel',
    'Martel Sans' => 'Martel Sans',
    'Mate' => 'Mate',
    'Mate SC' => 'Mate SC',
    'Maven Pro' => 'Maven Pro',
    'McLaren' => 'McLaren',
    'Meddon' => 'Meddon',
    'MedievalSharp' => 'MedievalSharp',
    'Medula One' => 'Medula One',
    'Megrim' => 'Megrim',
    'Meie Script' => 'Meie Script',
    'Merienda' => 'Merienda',
    'Merienda One' => 'Merienda One',
    'Merriweather' => 'Merriweather',
    'Metal' => 'Metal',
    'Metal Mania' => 'Metal Mania',
    'Metamorphous' => 'Metamorphous',
    'Metrophobic' => 'Metrophobic',
    'Michroma' => 'Michroma',
    'Milonga' => 'Milonga',
    'Miltonian' => 'Miltonian',
    'Miltonian Tattoo' => 'Miltonian Tattoo',
    'Miniver' => 'Miniver',
    'Miss Fajardose' => 'Miss Fajardose',
    'Miss Saint Delafield' => 'Miss Saint Delafield',
    'Modak' => 'Modak',
    'Modern Antiqua' => 'Modern Antiqua',
    'Molengo' => 'Molengo',
    'Molle' => 'Molle',
    'Moulpali' => 'Moulpali',
    'Monda' => 'Monda',
    'Monofett' => 'Monofett',
    'Monoton' => 'Monoton',
    'Monsieur La Doulaise' => 'Monsieur La Doulaise',
    'Montaga' => 'Montaga',
    'Montez' => 'Montez',
    'Montserrat' => 'Montserrat',
    'Montserrat Alternates' => 'Montserrat Alternates',
    'Montserrat Subrayada' => 'Montserrat Subrayada',
    'Mountains of Christmas' => 'Mountains of Christmas',
    'Mouse Memoirs' => 'Mouse Memoirs',
    'Moul' => 'Moul',
    'Mr Bedford' => 'Mr Bedford',
    'Mr Bedfort' => 'Mr Bedfort',
    'Mr Dafoe' => 'Mr Dafoe',
    'Mr De Haviland' => 'Mr De Haviland',
    'Mrs Saint Delafield' => 'Mrs Saint Delafield',
    'Mrs Sheppards' => 'Mrs Sheppards',
    'Muli' => 'Muli',
    'Mystery Quest' => 'Mystery Quest',
    'Neucha' => 'Neucha',
    'Neuton' => 'Neuton',
    'New Rocker' => 'New Rocker',
    'News Cycle' => 'News Cycle',
    'Niconne' => 'Niconne',
    'Nixie One' => 'Nixie One',
    'Nobile' => 'Nobile',
    'Nokora' => 'Nokora',
    'Norican' => 'Norican',
    'Nosifer' => 'Nosifer',
    'Nosifer Caps' => 'Nosifer Caps',
    'Nova Mono' => 'Nova Mono',
    'Noticia Text' => 'Noticia Text',
    'Noto Sans' => 'Noto Sans',
    'Noto Serif' => 'Noto Serif',
    'Nova Round' => 'Nova Round',
    'Numans' => 'Numans',
    'Nunito' => 'Nunito',
    'NTR' => 'NTR',
    'Offside' => 'Offside',
    'Oldenburg' => 'Oldenburg',
    'Oleo Script' => 'Oleo Script',
    'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
    'Open Sans' => 'Open Sans',
    'Open Sans Condensed' => 'Open Sans Condensed',
    'Oranienbaum' => 'Oranienbaum',
    'Orbitron' => 'Orbitron',
    'Odor Mean Chey' => 'Odor Mean Chey',
    'Oregano' => 'Oregano',
    'Orienta' => 'Orienta',
    'Original Surfer' => 'Original Surfer',
    'Oswald' => 'Oswald',
    'Over the Rainbow' => 'Over the Rainbow',
    'Overlock' => 'Overlock',
    'Overlock SC' => 'Overlock SC',
    'Ovo' => 'Ovo',
    'Oxygen' => 'Oxygen',
    'Oxygen Mono' => 'Oxygen Mono',
    'Palanquin Dark' => 'Palanquin Dark',
    'Peddana' => 'Peddana',
    'Poppins' => 'Poppins',
    'PT Mono' => 'PT Mono',
    'PT Sans' => 'PT Sans',
    'PT Sans Caption' => 'PT Sans Caption',
    'PT Sans Narrow' => 'PT Sans Narrow',
    'PT Serif' => 'PT Serif',
    'PT Serif Caption' => 'PT Serif Caption',
    'Pacifico' => 'Pacifico',
    'Paprika' => 'Paprika',
    'Parisienne' => 'Parisienne',
    'Passero One' => 'Passero One',
    'Passion One' => 'Passion One',
    'Patrick Hand' => 'Patrick Hand',
    'Patrick Hand SC' => 'Patrick Hand SC',
    'Patua One' => 'Patua One',
    'Paytone One' => 'Paytone One',
    'Peralta' => 'Peralta',
    'Permanent Marker' => 'Permanent Marker',
    'Petit Formal Script' => 'Petit Formal Script',
    'Petrona' => 'Petrona',
    'Philosopher' => 'Philosopher',
    'Piedra' => 'Piedra',
    'Pinyon Script' => 'Pinyon Script',
    'Pirata One' => 'Pirata One',
    'Plaster' => 'Plaster',
    'Palatino Linotype' => 'Palatino Linotype',
    'Play' => 'Play',
    'Playball' => 'Playball',
    'Playfair Display' => 'Playfair Display',
    'Playfair Display SC' => 'Playfair Display SC',
    'Podkova' => 'Podkova',
    'Poiret One' => 'Poiret One',
    'Poller One' => 'Poller One',
    'Poly' => 'Poly',
    'Pompiere' => 'Pompiere',
    'Pontano Sans' => 'Pontano Sans',
    'Port Lligat Sans' => 'Port Lligat Sans',
    'Port Lligat Slab' => 'Port Lligat Slab',
    'Prata' => 'Prata',
    'Pragati Narrow' => 'Pragati Narrow',
    'Preahvihear' => 'Preahvihear',
    'Press Start 2P' => 'Press Start 2P',
    'Princess Sofia' => 'Princess Sofia',
    'Prociono' => 'Prociono',
    'Prosto One' => 'Prosto One',
    'Puritan' => 'Puritan',
    'Purple Purse' => 'Purple Purse',
    'Quando' => 'Quando',
    'Quantico' => 'Quantico',
    'Quattrocento' => 'Quattrocento',
    'Quattrocento Sans' => 'Quattrocento Sans',
    'Questrial' => 'Questrial',
    'Quicksand' => 'Quicksand',
    'Quintessential' => 'Quintessential',
    'Qwigley' => 'Qwigley',
    'Racing Sans One' => 'Racing Sans One',
    'Radley' => 'Radley',
    'Rajdhani' => 'Rajdhani',
    'Raleway Dots' => 'Raleway Dots',
    'Raleway' => 'Raleway',
    'Rambla' => 'Rambla',
    'Ramabhadra' => 'Ramabhadra',
    'Ramaraja' => 'Ramaraja',
    'Rammetto One' => 'Rammetto One',
    'Ranchers' => 'Ranchers',
    'Rancho' => 'Rancho',
    'Ranga' => 'Ranga',
    'Ravi Prakash' => 'Ravi Prakash',
    'Rationale' => 'Rationale',
    'Redressed' => 'Redressed',
    'Reenie Beanie' => 'Reenie Beanie',
    'Revalia' => 'Revalia',
    'Rhodium Libre' => 'Rhodium Libre',
    'Ribeye' => 'Ribeye',
    'Ribeye Marrow' => 'Ribeye Marrow',
    'Righteous' => 'Righteous',
    'Risque' => 'Risque',
    'Roboto' => 'Roboto',
    'Roboto Condensed' => 'Roboto Condensed',
    'Roboto Mono' => 'Roboto Mono',
    'Roboto Slab' => 'Roboto Slab',
    'Rochester' => 'Rochester',
    'Rock Salt' => 'Rock Salt',
    'Rokkitt' => 'Rokkitt',
    'Romanesco' => 'Romanesco',
    'Ropa Sans' => 'Ropa Sans',
    'Rosario' => 'Rosario',
    'Rosarivo' => 'Rosarivo',
    'Rouge Script' => 'Rouge Script',
    'Rozha One' => 'Rozha One',
    'Rubik' => 'Rubik',
    'Rubik One' => 'Rubik One',
    'Rubik Mono One' => 'Rubik Mono One',
    'Ruda' => 'Ruda',
    'Rufina' => 'Rufina',
    'Ruge Boogie' => 'Ruge Boogie',
    'Ruluko' => 'Ruluko',
    'Rum Raisin' => 'Rum Raisin',
    'Ruslan Display' => 'Ruslan Display',
    'Russo One' => 'Russo One',
    'Ruthie' => 'Ruthie',
    'Rye' => 'Rye',
    'Sacramento' => 'Sacramento',
    'Sail' => 'Sail',
    'Salsa' => 'Salsa',
    'Sanchez' => 'Sanchez',
    'Sancreek' => 'Sancreek',
    'Sahitya' => 'Sahitya',
    'Sansita One' => 'Sansita One',
    'Sarpanch' => 'Sarpanch',
    'Sarina' => 'Sarina',
    'Satisfy' => 'Satisfy',
    'Scada' => 'Scada',
    'Scheherazade' => 'Scheherazade',
    'Schoolbell' => 'Schoolbell',
    'Seaweed Script' => 'Seaweed Script',
    'Sarala' => 'Sarala',
    'Sevillana' => 'Sevillana',
    'Seymour One' => 'Seymour One',
    'Shadows Into Light' => 'Shadows Into Light',
    'Shadows Into Light Two' => 'Shadows Into Light Two',
    'Shanti' => 'Shanti',
    'Share' => 'Share',
    'Share Tech' => 'Share Tech',
    'Share Tech Mono' => 'Share Tech Mono',
    'Shojumaru' => 'Shojumaru',
    'Short Stack' => 'Short Stack',
    'Sigmar One' => 'Sigmar One',
    'Suranna' => 'Suranna',
    'Suravaram' => 'Suravaram',
    'Suwannaphum' => 'Suwannaphum',
    'Signika' => 'Signika',
    'Signika Negative' => 'Signika Negative',
    'Simonetta' => 'Simonetta',
    'Siemreap' => 'Siemreap',
    'Sirin Stencil' => 'Sirin Stencil',
    'Six Caps' => 'Six Caps',
    'Skranji' => 'Skranji',
    'Slackey' => 'Slackey',
    'Smokum' => 'Smokum',
    'Smythe' => 'Smythe',
    'Sniglet' => 'Sniglet',
    'Snippet' => 'Snippet',
    'Snowburst One' => 'Snowburst One',
    'Sofadi One' => 'Sofadi One',
    'Sofia' => 'Sofia',
    'Sonsie One' => 'Sonsie One',
    'Sorts Mill Goudy' => 'Sorts Mill Goudy',
    'Sorts Mill Goudy' => 'Sorts Mill Goudy',
    'Source Code Pro' => 'Source Code Pro',
    'Source Sans Pro' => 'Source Sans Pro',
    'Special I am one' => 'Special I am one',
    'Spicy Rice' => 'Spicy Rice',
    'Spinnaker' => 'Spinnaker',
    'Spirax' => 'Spirax',
    'Squada One' => 'Squada One',
    'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
    'Stalemate' => 'Stalemate',
    'Stalinist One' => 'Stalinist One',
    'Stardos Stencil' => 'Stardos Stencil',
    'Stint Ultra Condensed' => 'Stint Ultra Condensed',
    'Stint Ultra Expanded' => 'Stint Ultra Expanded',
    'Stoke' => 'Stoke',
    'Stoke' => 'Stoke',
    'Strait' => 'Strait',
    'Sura' => 'Sura',
    'Sumana' => 'Sumana',
    'Sue Ellen Francisco' => 'Sue Ellen Francisco',
    'Sunshiney' => 'Sunshiney',
    'Supermercado One' => 'Supermercado One',
    'Swanky and Moo Moo' => 'Swanky and Moo Moo',
    'Syncopate' => 'Syncopate',
    'Symbol' => 'Symbol',
    'Timmana' => 'Timmana',
    'Taprom' => 'Taprom',
    'Tangerine' => 'Tangerine',
    'Tahoma' => 'Tahoma',
    'Teko' => 'Teko',
    'Telex' => 'Telex',
    'Tenali Ramakrishna' => 'Tenali Ramakrishna',
    'Tenor Sans' => 'Tenor Sans',
    'Terminal Dosis' => 'Terminal Dosis',
    'Terminal Dosis Light' => 'Terminal Dosis Light',
    'Text Me One' => 'Text Me One',
    'The Girl Next Door' => 'The Girl Next Door',
    'Tienne' => 'Tienne',
    'Tillana' => 'Tillana',
    'Tinos' => 'Tinos',
    'Titan One' => 'Titan One',
    'Titillium Web' => 'Titillium Web',
    'Trade Winds' => 'Trade Winds',
    'Trebuchet MS' => 'Trebuchet MS',
    'Trocchi' => 'Trocchi',
    'Trochut' => 'Trochut',
    'Trykker' => 'Trykker',
    'Tulpen One' => 'Tulpen One',
    'Ubuntu' => 'Ubuntu',
    'Ubuntu Condensed' => 'Ubuntu Condensed',
    'Ubuntu Mono' => 'Ubuntu Mono',
    'Ultra' => 'Ultra',
    'Uncial Antiqua' => 'Uncial Antiqua',
    'Underdog' => 'Underdog',
    'Unica One' => 'Unica One',
    'UnifrakturCook' => 'UnifrakturCook',
    'UnifrakturMaguntia' => 'UnifrakturMaguntia',
    'Unkempt' => 'Unkempt',
    'Unlock' => 'Unlock',
    'Unna' => 'Unna',
    'VT323' => 'VT323',
    'Vampiro One' => 'Vampiro One',
    'Varela' => 'Varela',
    'Varela Round' => 'Varela Round',
    'Vast Shadow' => 'Vast Shadow',
    'Vesper Libre' => 'Vesper Libre',
    'Verdana' => 'Verdana',
    'Vibur' => 'Vibur',
    'Vidaloka' => 'Vidaloka',
    'Viga' => 'Viga',
    'Voces' => 'Voces',
    'Volkhov' => 'Volkhov',
    'Vollkorn' => 'Vollkorn',
    'Voltaire' => 'Voltaire',
    'Waiting for the Sunrise' => 'Waiting for the Sunrise',
    'Wallpoet' => 'Wallpoet',
    'Walter Turncoat' => 'Walter Turncoat',
    'Warnes' => 'Warnes',
    'Wellfleet' => 'Wellfleet',
    'Wendy One' => 'Wendy One',
    'Wire One' => 'Wire One',
    'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    'Yantramanav' => 'Yantramanav',
    'Yellowtail' => 'Yellowtail',
    'Yeseva One' => 'Yeseva One',
    'Yesteryear' => 'Yesteryear',
    'Zeyada' => 'Zeyada'
  );

	//array of all font sizes.
	$font_sizes = array( 
		'10px' => '10px',
		'11px' => '11px',
	);
	
	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';

	
	for($n=12;$n<=200;$n+=1){
		$font_sizes[$n.'px'] = $n.'px';
	}
	
	// Pull all the pages into an array
	 $options_pages = array();
	 $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	 $options_pages[''] = 'Select a page:';
	 foreach ($options_pages_obj as $page) {
	  $options_pages[$page->ID] = $page->post_title;
	 }

	// array of section content.
	$section_text = array(	
			1 => array(
			'section_title'	=> '',
			'menutitle'		=> 'whoweareasection',
			'bgcolor' 		=> '#f7f5f5',
			'bgimage'		=> '',
			'class'			=> 'themefeatures',
			'content'		=> '[column_content type="one_half"]<h3>Why Choose Us?</h3>
[subtitle color="#727272" size="15px" margin="0 0 50px 0" align="left" description="Suspendisse vel velit nulla. Phasellus tincidunt in nisl eu iaculis. Etiam at porttitor lacus vel velit nulla. Phasellus tincidunt in nisl eu iaculis. Etiam at porttitor lacus"]

<div class="best-featurs"><i class="fa fa-trophy"></i>
<h4>Best Winning Awards</h4>Proin nec gravida purus. Curabitur effici elementum dolor dapibus, nec maximus augue iaculis. In tincunt eget diam ac vulputate... 
</div>
<div class="best-featurs"><i class="fa fa-life-ring"></i>
<h4>User Friendly Support</h4>Proin nec gravida purus. Curabitur effici elementum dolor dapibus, nec maximus augue iaculis. In tincunt eget diam ac vulputate... 
</div>
<div class="best-featurs"><i class="fa fa-eye"></i>
<h4>Retina Ready Themes</h4>Proin nec gravida purus. Curabitur effici elementum dolor dapibus, nec maximus augue iaculis. In tincunt eget diam ac vulputate... 
</div>
<div class="best-featurs"><i class="fa fa-gear"></i>
<h4>Translation Ready</h4>Proin nec gravida purus. Curabitur effici elementum dolor dapibus, nec maximus augue iaculis. In tincunt eget diam ac vulputate... 
</div>
[/column_content]

[column_content type="one_half_last"]
<img src="'.get_template_directory_uri().'/images/ipad-thumb.jpg" />
[/column_content]',
		),
		
		 2 => array(
			'section_title'	=> 'Our Projects',
			'menutitle'		=> 'projectsection',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'projectwrap',
			'content'		=> '[project_lists][project title="Project Name" image="'.get_template_directory_uri().'/images/project1.jpg" button="View Project" link="#"][project title="Project Name" image="'.get_template_directory_uri().'/images/project2.jpg" button="View Project" link="#"][project title="Project Name" image="'.get_template_directory_uri().'/images/project3.jpg" button="View Project" link="#"][project title="Project Name" image="'.get_template_directory_uri().'/images/project4.jpg" button="View Project" link="#"][project title="Project Name" image="'.get_template_directory_uri().'/images/project5.jpg" button="View Project" link="#"][/project_lists]',
		 ),
		
		3 => array(
			'section_title'	=> '',
			'menutitle'		=> 'promosection',
			'bgcolor' 		=> '#89c140',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[promobox bgcolor="#89c140" titlecolor="#ffffff" color="#ffffff" buttonbgcolor="#ffffff" buttoncolor="#89c140" promotitle="Are you ready to take it to the next level?" button="BUY THEME NOW!" url="#"]Suspendisse vel velit nulla. Phasellus tincidunt in nisl eu iaculis. Etiam at porttitor lacus.[/promobox]'
		),
		
		4 => array(
			'section_title'	=> 'Theme Features',
			'menutitle'		=> 'ThemeFeaturd',
			'bgcolor' 		=> '#FCFCFC',
			'bgimage'		=> '',
			'class'			=> 'feature-wrap',
			'content'		=> '[column_content type="frdbox"]<i class="fa fa-tablet"></i>
<h4>100% Responsive</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscinr dolor sitipsum dolor consectetur adipiscinr dolor sitamet.</p>[/column_content]

[column_content type="frdbox"]<i class="fa fa-code"></i>
<h4>Custom Shortcodes</h4><p>Lorem ipsum dolordolor ametconsectetur sit amet sit ametconsectetur adipiscinr dolor sit, consectetur adipiscinr</p>[/column_content]

[column_content type="frdbox last"]<i class="fa fa-support"></i>
<h4>Customer Support</h4><p>Lorem dolor sit ametipsum  dolor sit amet,consectetur adipiscinr dolor sitamet consectetur  consectetur adipiscinr</p>[/column_content]

[column_content type="frdbox"]<i class="fa fa-file-word-o"></i>
<h4>Well Documented</h4><p>Lorem ipsum dolor sit amet,  ullamcorper tellusconsectetur adipiscinr dolor sitamet,  ullamcorper Cras.</p>[/column_content]

[column_content type="frdbox"]<i class="fa fa-html5"></i>
<h4>HTML5 & CSS3</h4><p>Lorem ipsum dolor sit amet, dolor sit amet consecteturconsectetur adipiscinr dolor sit adipiscinr sed.</p>[/column_content]

[column_content type="frdbox last"]<i class="fa fa-cloud-download"></i>
<h4>SEO Friendly</h4><p>Lorem ipsum dolor sit amet dolor sit amet, consectetur adipiscinr dolor sitsit amet dolor ullamcorper tellus Cras.</p>[/column_content]'
		),
		
		
		5 => array(
			'section_title'	=> 'Our Working Process',
			'menutitle'		=> 'processwrap',
			'bgcolor' 		=> '',
			'bgimage'		=> get_template_directory_uri().'/images/process-bg2.jpg',
			'class'			=> 'working-process',
			'content'		=> '[column_content type="processbox hvr-rectangle-in"]<i class="fa fa-search-plus"></i>
<h4>Market Research</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscinr dolor sitipsum dolor consectetur.</p>[/column_content]
			
[column_content type="processbox hvr-rectangle-in"]<i class="fa fa-line-chart"></i>
<h4>Strategizing</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscinr dolor sitipsum dolor consectetur.</p>[/column_content]

[column_content type="processbox hvr-rectangle-in"]<i class="fa fa-life-ring"></i>
<h4>Product Design</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscinr dolor sitipsum dolor consectetur.</p>[/column_content]

[column_content type="processbox last hvr-rectangle-in"]<i class="fa fa-cogs"></i>
<h4>Goal Setting</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscinr dolor sitipsum dolor consectetur.</p>[/column_content]'
		),			
		
		
		6 => array(
			'section_title'	=> 'Recent Products',
			'menutitle'		=> 'shoppagewrap',
			'bgcolor' 		=> '#f7f7f7',
			'bgimage'		=> '',
			'class'			=> 'shopwrap',
			'content'		=> '[recent_products per_page="4" columns="4"][button align="center" name="VIEW ALL PRODUCTS" link="#" target=""]'
		),
		
		7 => array(
			'section_title'	=> 'Team of Experts',
			'menutitle'		=> 'teamwrap',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'teamwrapsection',
			'content'		=> '[our-team show="4"]'
		),
		
		8 => array(
			'section_title'	=> 'Client Testimonials',
			'menutitle'		=> 'testimonialswrap',
			'bgcolor' 		=> '#111111',
			'bgimage'		=> get_template_directory_uri().'/images/testimonialbg.jpg',
			'class'			=> 'tmnlwraparea',
			'content'		=> '[testimonials]'
		),
				
		
		9 => array(
			'section_title'	=> 'latest News',
			'menutitle'		=> 'newswraper',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'blogpostwrap',
			'content'		=> '[subtitle color="#111111" size="15px" margin="0 0 50px 0" description="Suspendisse vel velit nulla. Phasellus tincidunt in nisl eu iaculis. Etiam at porttitor lacus."][latest-news showposts="4" comment="show" date="show" author="show"]',
		),	
		
		10 => array(
			'section_title'	=> 'Our Clients',
			'menutitle'		=> 'ourclients',
			'bgcolor' 		=> '#eef2f7',
			'bgimage'		=> '',
			'class'			=> 'clientwrap',
			'content'		=> '[subtitle color="#111111" size="15px" margin="0 0 50px 0" description="Suspendisse vel velit nulla. Phasellus tincidunt in nisl eu iaculis. Etiam at porttitor lacus."][client_lists][client image="'.get_template_directory_uri().'/images/client-logo1.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo2.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo3.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo4.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo5.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo1.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo2.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo3.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo4.jpg" link="#"][client image="'.get_template_directory_uri().'/images/client-logo5.jpg" link="#"][/client_lists]',
		),
		
		11 => array(
			'section_title'	=> 'Photo Gallery',
			'menutitle'		=> 'portfoliosection',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=>  '',
			'class'			=> 'gallerywrap',
			'content'		=> '[photogallery filter="true" show="8"]',
		),			
	);

	$options = array();

	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'milestonez-pro'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'milestonez-pro'),
		'desc' => __('Upload your main logo here', 'milestonez-pro'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Change your custom logo height', 'milestonez-pro'),
		'id' => 'logoheight',
		'std' => '55',
		'type' => 'text');
		
	$options[] = array(	
		'name' => __('Site title & Description', 'milestonez-pro'),		
		'desc'	=> __('Check To hide site title and description', 'milestonez-pro'),
		'id'	=> 'hide_titledesc',
		'type'	=> 'checkbox',
		'std'	=> '');		
		
	$options[] = array(	
		'name' => __('Layout Option', 'milestonez-pro'),		
		'desc'	=> __('Check To View Box Layout ', 'milestonez-pro'),
		'id'	=> 'boxlayout',
		'type'	=> 'checkbox',
		'std'	=> '');
			
	$options[] = array(
		'name' => __('Sticky Header', 'milestonez-pro'),
		'desc' => __('Check this to enable sticky header on scroll', 'milestonez-pro'),
		'id' => 'headstick',
		'std' => '',
		'type' => 'checkbox');		
			
	$options[] = array(
		'name' => __('Disable Animation', 'milestonez-pro'),
		'desc' => __('Check this to disable animation on scroll', 'milestonez-pro'),
		'id' => 'scrollanimation',
		'std' => '',
		'type' => 'checkbox');		

	$options[] = array(
		'name' => __('Custom CSS', 'milestonez-pro'),
		'desc' => __('Some Custom Styling for your site. Place any css codes here instead of the style.css file.', 'milestonez-pro'),
		'id' => 'style2',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Header Office hours', 'milestonez-pro'),
		'desc' => __('manage your office hours', 'milestonez-pro'),
		'id' => 'headerofficehours',
		'std' => '<span>Office Hours:</span> Monday to Friday 10.00 am to 5.00pm',
		'type' => 'textarea');	
		
	$options[] = array(
		'name' => __('Header Top Social Icons', 'milestonez-pro'),
		'desc' => __('Edit select social icons for header top', 'milestonez-pro'),
		'id' => 'headersocial',
		'std' => ' [social_area] [social icon="facebook" link="#"] [social icon="twitter" link="#"] [social icon="google-plus" link="#"] [social icon="linkedin" link="#"] [social icon="rss" link="#"] [social icon="youtube" link="#"][/social_area]',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Disable Header top Strip', 'milestonez-pro'),
		'desc' => __('Check to disable header top office hours and social icons', 'milestonez-pro'),
		'id' => 'headtopstrip',
		'std' => '',
		'type' => 'checkbox');			
		
	$options[] = array(
		'name' => __('Header Top Info', 'milestonez-pro'),
		'desc' => __('Edit header info from here. NOTE: Icon name should be in lowercase without space.(exa.phone) More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/', 'milestonez-pro'),
		'id' => 'headerinfo',
		'std' => '<div class="infobox"><i class="fa fa-map-marker"></i><span><b>Location</b> 4212 St. Petter, Ohio, US</span> </div>
<div class="infobox"><i class="fa fa-envelope"></i><span><b>Email Support</b> <a href="mailto:info@sitename.com">info@sitename.com</a></span> </div>
<div class="infobox"><i class="fa fa-phone"></i><span><b>Call Support</b> +11 123 456 7890 </span></div>
				   ',
		'type' => 'textarea');	
		
	$options[] = array(
		'name' => __('Disable Header Contact info', 'milestonez-pro'),
		'desc' => __('Check to disable header contact info(phone,email,address)', 'milestonez-pro'),
		'id' => 'headinfodata',
		'std' => '',
		'type' => 'checkbox');		
		
	// font family start 		
	$options[] = array(
		'name' => __('Font Faces', 'milestonez-pro'),
		'desc' => __('Select font for the body text', 'milestonez-pro'),
		'id' => 'bodyfontface',
		'type' => 'select',
		'std' => 'Open Sans',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for the textual logo', 'milestonez-pro'),
		'id' => 'logofontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for the navigation text', 'milestonez-pro'),
		'id' => 'navfontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font family for all heading tag.', 'milestonez-pro'),
		'id' => 'headfontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for Section title', 'milestonez-pro'),
		'id' => 'sectiontitlefontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );		
			
	$options[] = array(
		'desc' => __('Select font for Slide title', 'milestonez-pro'),
		'id' => 'slidetitlefontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );	
		
	$options[] = array(
		'desc' => __('Select font for Slide Description', 'milestonez-pro'),
		'id' => 'slidedesfontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );	

		
	// font sizes start	
	$options[] = array(
		'name' => __('Font Sizes', 'milestonez-pro'),
		'desc' => __('Select font size for body text', 'milestonez-pro'),
		'id' => 'bodyfontsize',
		'type' => 'select',
		'std' => '13px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for textual logo', 'milestonez-pro'),
		'id' => 'logofontsize',
		'type' => 'select',
		'std' => '38px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for navigation', 'milestonez-pro'),
		'id' => 'navfontsize',
		'type' => 'select',
		'std' => '16px',
		'options' => $font_sizes );	
		
	$options[] = array(
		'desc' => __('Select font size for section title', 'milestonez-pro'),
		'id' => 'sectitlesize',
		'type' => 'select',
		'std' => '28px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for footer title', 'milestonez-pro'),
		'id' => 'ftfontsize',
		'type' => 'select',
		'std' => '18px',
		'options' => $font_sizes );	

	$options[] = array(
		'desc' => __('Select h1 font size', 'milestonez-pro'),
		'id' => 'h1fontsize',
		'std' => '30px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h2 font size', 'milestonez-pro'),
		'id' => 'h2fontsize',
		'std' => '28px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h3 font size', 'milestonez-pro'),
		'id' => 'h3fontsize',
		'std' => '18px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h4 font size', 'milestonez-pro'),
		'id' => 'h4fontsize',
		'std' => '22px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h5 font size', 'milestonez-pro'),
		'id' => 'h5fontsize',
		'std' => '20px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h6 font size', 'milestonez-pro'),
		'id' => 'h6fontsize',
		'std' => '14px',
		'type' => 'select',
		'options' => $font_sizes);


	// font colors start

	$options[] = array(
		'name' => __('Site Colors Scheme', 'milestonez-pro'),
		'desc' => __('Change the color scheme of hole site', 'milestonez-pro'),
		'id' => 'colorscheme',
		'std' => '#89c140',
		'type' => 'color');
		
	$options[] = array(	
		'name' => __('Font Colors', 'milestonez-pro'),	
		'desc' => __('Select font color for the body text', 'milestonez-pro'),
		'id' => 'bodyfontcolor',
		'std' => '#6E6D6D',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for textual logo', 'milestonez-pro'),
		'id' => 'logofontcolor',
		'std' => '#101112',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for header top phone and email strip', 'milestonez-pro'),
		'id' => 'headertopfontcolor',
		'std' => '#cccccc',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for logo tagline', 'milestonez-pro'),
		'id' => 'logotaglinecolor',
		'std' => '#7d7d7d',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font color for header social icons', 'milestonez-pro'),
		'id' => 'socialfontcolor',
		'std' => '#a3a9ab',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for section title', 'milestonez-pro'),
		'id' => 'sectitlecolor',
		'std' => '#4b4a4a',
		'type' => 'color');	
		
	
	$options[] = array(
		'desc' => __('Select font color for navigation', 'milestonez-pro'),
		'id' => 'navfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover/active color for navigation', 'milestonez-pro'),
		'id' => 'navhvactivefontcolor',
		'std' => '#000000',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for homepage top four boxes', 'milestonez-pro'),
		'id' => 'hometopfourbxcolor',
		'std' => '#6e6d6d',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for homepage top four boxes title', 'milestonez-pro'),
		'id' => 'hometopfourbxtitlecolor',
		'std' => '#404040',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for homepage top four boxes read more text', 'milestonez-pro'),
		'id' => 'topfourbxreadmorecolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font hover color for homepage top four boxes read more text', 'milestonez-pro'),
		'id' => 'hometopfourbxreadmorehv',
		'std' => '#ffffff',
		'type' => 'color');			
		
	$options[] = array(
		'desc' => __('Select font color for widget title', 'milestonez-pro'),
		'id' => 'wdgttitleccolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer title', 'milestonez-pro'),
		'id' => 'foottitlecolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer', 'milestonez-pro'),
		'id' => 'footdesccolor',
		'std' => '#c1c0c0',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for footer left text (copyright)', 'milestonez-pro'),
		'id' => 'copycolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer right text (design by)', 'milestonez-pro'),
		'id' => 'designcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for links / anchor tags', 'milestonez-pro'),
		'id' => 'linkhovercolor',
		'std' => '#272727',
		'type' => 'color');			
		
	$options[] = array(
		'desc' => __('Select font color for sidebar li a', 'milestonez-pro'),
		'id' => 'sidebarfontcolor',
		'std' => '#78797c',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font hover color for footer copyright links', 'milestonez-pro'),
		'id' => 'copylinkshover',
		'std' => '#ffffff',
		'type' => 'color');	

	$options[] = array(
		'desc' => __('Select h1 font color', 'milestonez-pro'),
		'id' => 'h1fontcolor',
		'std' => '#272727',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select h2 font color', 'milestonez-pro'),
		'id' => 'h2fontcolor',
		'std' => '#272727',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select h3 font color', 'milestonez-pro'),
		'id' => 'h3fontcolor',
		'std' => '#272727',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select h4 font color', 'milestonez-pro'),
		'id' => 'h4fontcolor',
		'std' => '#272727',
		'type' => 'color');	

	$options[] = array(
		'desc' => __('Select h5 font color', 'milestonez-pro'),
		'id' => 'h5fontcolor',
		'std' => '#272727',
		'type' => 'color');	

	$options[] = array(
		'desc' => __('Select h6 font color', 'milestonez-pro'),
		'id' => 'h6fontcolor',
		'std' => '#272727',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for footer social icons', 'milestonez-pro'),
		'id' => 'footsocialcolor',
		'std' => '#c1c0c0',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for gallery filter ', 'milestonez-pro'),
		'id' => 'galleryfiltercolor',
		'std' => '#6e6d6d',
		'type' => 'color');			
		
	$options[] = array(
		'desc' => __('Select font hover color for gallery filter ', 'milestonez-pro'),
		'id' => 'galleryfiltercolorhv',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for photogallery title ', 'milestonez-pro'),
		'id' => 'gallerytitlecolorhv',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for latest post title', 'milestonez-pro'),
		'id' => 'latestpoststtlcolor',
		'std' => '#4b4a4a',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for client testimonilas title', 'milestonez-pro'),
		'id' => 'testimonialtitlecolor',
		'std' => '#333333',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for client testimonilas description', 'milestonez-pro'),
		'id' => 'testimonialdescriptioncolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for sidebar widget box', 'milestonez-pro'),
		'id' => 'widgetboxfontcolor',
		'std' => '#6e6d6d',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for footer recent posts', 'milestonez-pro'),
		'id' => 'footerpoststitlecolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for toggle menu on responsive', 'milestonez-pro'),
		'id' => 'togglemenucolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for section title for testimonials section', 'milestonez-pro'),
		'id' => 'tmnlsectiontitle',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font awesome icon color for our theme features section', 'milestonez-pro'),
		'id' => 'fontawesomeiconcolor',
		'std' => '#272727',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for team member title', 'milestonez-pro'),
		'id' => 'teamttlfontcolor',
		'std' => '#555555',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for team member designation', 'milestonez-pro'),
		'id' => 'teamdegigfontcolor',
		'std' => '#777777',
		'type' => 'color');			
					
		
	// Background start			
	$options[] = array(
		'name' => __('Background Colors', 'milestonez-pro'),		
		'desc' => __('Select background color for header', 'milestonez-pro'),
		'id' => 'headerbgcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for header top phone and email strip', 'milestonez-pro'),
		'id' => 'headertopbgcolor',
		'std' => '#333333',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for footer', 'milestonez-pro'),
		'id' => 'footerbgcolor',
		'std' => '#0d0f10',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for copyright section', 'milestonez-pro'),
		'id' => 'copybgcolor',
		'std' => '#0a0c0d',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for fhotogallery filter', 'milestonez-pro'),
		'id' => 'galleryfilter',
		'std' => '#f1f1f1',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for client testimonials pager dots', 'milestonez-pro'),
		'id' => 'testidotsbgcolor',
		'std' => '#494949',
		'type' => 'color');	
	
	$options[] = array(
		'desc' => __('Select background color for sidebar widget box', 'milestonez-pro'),
		'id' => 'widgetboxbgcolor',
		'std' => '#F0EFEF',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select background color for page boxes read more button', 'milestonez-pro'),
		'id' => 'hometopfourbxreadmore',
		'std' => '#404040',
		'type' => 'color');			

	// Border colors			
	$options[] = array(	
		'name' => __('Border Colors', 'milestonez-pro'),		
		'desc' => __('Select border color for sidebar li a', 'milestonez-pro'),
		'id' => 'sidebarliaborder',
		'std' => '#d0cfcf',
		'type' => 'color');	
		
	$options[] = array(			
		'desc' => __('Select border color for footer title', 'milestonez-pro'),
		'id' => 'footertitleborder',
		'std' => '#303030',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select border color for slider title', 'milestonez-pro'),
		'id' => 'slidetitleborder',
		'std' => '#ffffff',
		'type' => 'color');			
		
	$options[] = array(			
		'desc' => __('Select border color for top navigation dropdown li', 'milestonez-pro'),
		'id' => 'navlibdcolor',
		'std' => '#9ccc5d',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select border color for gallery filter', 'milestonez-pro'),
		'id' => 'galleryfilterbdr',
		'std' => '#494949',
		'type' => 'color');	
		
	$options[] = array(			
		'desc' => __('Select border color for section title underline', 'milestonez-pro'),
		'id' => 'sectitleunderlinecolor',
		'std' => '#4b4a4a',
		'type' => 'color');	
	

	// Default Buttons		
	$options[] = array(
		'name' => __('Button Colors', 'milestonez-pro'),
		'desc' => __('Select background hover color for default button', 'milestonez-pro'),
		'id' => 'btnbghvcolor',
		'std' => '#202020',
		'type' => 'color');		

	$options[] = array(
		'desc' => __('Select font color default button', 'milestonez-pro'),
		'id' => 'btntxtcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for default button', 'milestonez-pro'),
		'id' => 'btntxthvcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for shop now button on slider', 'milestonez-pro'),
		'id' => 'shopbtnbgcolor',
		'std' => '#202020',
		'type' => 'color');	
													

	// Slider Caption colors
	$options[] = array(	
		'name' => __('Slider Caption Colors', 'milestonez-pro'),				
		'desc' => __('Select font color for slider title', 'milestonez-pro'),
		'id' => 'slidetitlecolor',
		'std' => '#ffffff',
		'type' => 'color');			
		
	$options[] = array(		
		'desc' => __('Select font color for slider description', 'milestonez-pro'),
		'id' => 'slidedesccolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
		
	$options[] = array(
		'desc' => __('Select font size for slider title', 'milestonez-pro'),
		'id' => 'slidetitlefontsize',
		'type' => 'select',
		'std' => '35px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for slider description', 'milestonez-pro'),
		'id' => 'slidedescfontsize',
		'type' => 'select',
		'std' => '16px',
		'options' => $font_sizes );
		
	// Slider controls colors		
	$options[] = array(
		'name' => __('Slider controls Colors', 'milestonez-pro'),
		'desc' => __('Select background color for slider pager', 'milestonez-pro'),
		'id' => 'sldpagebg',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for slider navigation arrows', 'milestonez-pro'),
		'id' => 'sldarrowbg',
		'std' => '#000000',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select background opacity color for header slider navigation arrows', 'milestonez-pro'),
		'id' => 'sldarrowopacity',
		'std' => '0.7',
		'type' => 'select',
		'options'	=> array('1'=>1, '0.9'=>0.9,'0.8'=>0.8,'0.7'=>0.7,'0.6'=>0.6,'0.5'=>0.5,'0.4'=>0.4,'0.3'=>0.3,'0.2'=>0.2,));			
		
	$options[] = array(
		'desc' => __('Select Border color for slider pager', 'milestonez-pro'),
		'id' => 'sldpagehvbd',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(	
		'name' => __('Excerpt Lenth', 'milestonez-pro'),		
		'desc' => __('Select excerpt length for latest news boxes section', 'milestonez-pro'),
		'id' => 'latestnewslength',
		'std' => '18',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Select excerpt length for testimonials section', 'milestonez-pro'),
		'id' => 'testimonialsexcerptlength',
		'std' => '35',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for blog post', 'milestonez-pro'),
		'id' => 'blogpostexcerptlength',
		'std' => '60',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for footer latest posts', 'milestonez-pro'),
		'id' => 'footerpostslength',
		'std' => '8',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Select excerpt length for home page team member box', 'milestonez-pro'),
		'id' => 'teammemberlength',
		'std' => '20',
		'type' => 'text');	
		
	$options[] = array(	
		'name' => __('Read More Custom Text', 'milestonez-pro'),		
		'desc' => __('Change read more button text for blog posts ', 'milestonez-pro'),
		'id' => 'blogpostreadmoretext',
		'std' => 'Read More',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Change read more button text for latest blog post section', 'milestonez-pro'),
		'id' => 'blogpostreadmoretext',
		'std' => 'Read more',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Change Show All Button text for photo gallery section', 'milestonez-pro'),
		'id' => 'galleryshowallbtn',
		'std' => 'Show All',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Change menu word on responsive view', 'milestonez-pro'),
		'id' => 'menuwordchange',
		'std' => 'Menu',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Change Categories word on blog area', 'milestonez-pro'),
		'id' => 'categorywordchange',
		'std' => 'Categories:',
		'type' => 'text');				
		
	$options[] = array(
		'name' => __('Blog Single Layout', 'milestonez-pro'),
		'desc' => __('Select layout. eg:Boxed, Wide', 'milestonez-pro'),
		'id' => 'singlelayout',
		'type' => 'select',
		'std' => 'singleright',
		'options' => array('singleright'=>'Blog Single Right Sidebar', 'singleleft'=>'Blog Single Left Sidebar', 'sitefull'=>'Blog Single Full Width', 'nosidebar'=>'Blog Single No Sidebar') );	
		
	$options[] = array(
		'name' => __('Woocommerce Page Layout', 'milestonez-pro'),
		'desc' => __('Select layout. eg:right-sidebar, left-sidebar, full-width', 'milestonez-pro'),
		'id' => 'woocommercelayout',
		'type' => 'select',
		'std' => 'woocommercesitefull',
		'options' => array('woocommerceright'=>'Woocommerce Right Sidebar', 'woocommerceleft'=>'Woocommerce Left Sidebar', 'woocommercesitefull'=>'Woocommerce Full Width') );	
		
	$options[] = array(	
		'name' => __('Testimonials Rotating Speed', 'milestonez-pro'),	
		'desc' => __('manage testimonials rotating speed.', 'milestonez-pro'),
		'id' => 'testimonialsrotatingspeed',
		'std' => '8000',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('True/False Auto play Testimonials.','milestonez-pro'),
		'id' => 'testimonialsautoplay',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'True', 'false'=>'False'));			
		

	//Layout Settings
	$options[] = array(
		'name' => __('Sections', 'milestonez-pro'),
		'type' => 'heading');
		
	
	
	$options[] = array(	
		'name' => __('Top Four Box Services Section', 'milestonez-pro'),
		'desc'	=> __('first Services box for frontpage section','milestonez-pro'),
		'id' 	=> 'box1',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for first box.', 'milestonez-pro'),
		'id' => 'boximg1',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	
	$options[] = array(	
		'desc'	=> __('Second Services box for frontpage section','milestonez-pro'),
		'id' 	=> 'box2',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for second box.', 'milestonez-pro'),
		'id' => 'boximg2',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	
	$options[] = array(	
		'desc'	=> __('Third Services box for frontpage section','milestonez-pro'),
		'id' 	=> 'box3',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for third box.', 'milestonez-pro'),
		'id' => 'boximg3',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	
	$options[] = array(	
		'desc'	=> __('Fourth Services box for frontpage section','milestonez-pro'),
		'id' 	=> 'box4',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for fourth box.', 'milestonez-pro'),
		'id' => 'boximg4',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(	
		'desc'	=> __('Fifth Services box for frontpage section','milestonez-pro'),
		'id' 	=> 'box5',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for fifth box.', 'milestonez-pro'),
		'id' => 'boximg5',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(	
		'desc'	=> __('Six Services box for frontpage section','milestonez-pro'),
		'id' 	=> 'box6',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for six box.', 'milestonez-pro'),
		'id' => 'boximg6',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');	
		
	$options[] = array(	
		'desc' => __('Change read more button text for  top services four boxes ', 'milestonez-pro'),
		'id' => 'readmorebutton',
		'std' => 'Read More',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Select excerpt length for services four boxes section', 'milestonez-pro'),
		'id' => 'pageboxlength',
		'std' => '20',
		'type' => 'text');			
	
	$options[] = array(			
			'desc'	=> __('Check to hide above our services four column section', 'milestonez-pro'),
			'id'	=> 'hidefourbxsec',
			'type'	=> 'checkbox',
			'std'	=> '');
			
	//Section tab
	$options[] = array(
		'name' => __('Number of Sections', 'milestonez-pro'),
		'desc' => __('Select number of sections', 'milestonez-pro'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '11',
		'options' => array_combine(range(1,30), range(1,30)) );

	$numsecs = of_get_option( 'numsection', 11 );

	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section ".$n."</h3>", 'milestonez-pro'),
			'class' => 'toggle_title',
			'type' => 'info');	
	
		$options[] = array(
			'name' => __('Section Title', 'milestonez-pro'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section ID', 'milestonez-pro'),
			'desc'	=> __('Enter your section ID here. SECTION ID MUST BE IN SMALL LETTERS ONLY AND DO NOT ADD SPACE OR SYMBOL.', 'milestonez-pro'),
			'id' => 'menutitle'.$n,
			'std' => ( ( isset($section_text[$n]['menutitle']) ) ? $section_text[$n]['menutitle'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Background Color', 'milestonez-pro'),
			'desc' => __('Select background color for section', 'milestonez-pro'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Background Image', 'milestonez-pro'),
			'id' => 'sectionbgimage'.$n,
			'class' => '',
			'std' => ( ( isset($section_text[$n]['bgimage']) ) ? $section_text[$n]['bgimage'] : '' ),
			'type' => 'upload');

		$options[] = array(
			'name' => __('Section CSS Class', 'milestonez-pro'),
			'desc' => __('Set class for this section.', 'milestonez-pro'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name'	=> __('Hide Section', 'milestonez-pro'),
			'desc'	=> __('Check to hide this section', 'milestonez-pro'),
			'id'	=> 'hidesec'.$n,
			'type'	=> 'checkbox',
			'std'	=> '');

		$options[] = array(
			'name' => __('Section Content', 'milestonez-pro'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}


	//SLIDER SETTINGS
	$options[] = array(
		'name' => __('Homepage Slider', 'milestonez-pro'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Inner Page Banner', 'milestonez-pro'),
		'desc' => __('Upload inner page banner for site', 'milestonez-pro'),
		'id' => 'innerpagebanner',
		'class' => '',
		'std'	=> get_template_directory_uri()."/images/inner-banner.jpg",
		'type' => 'upload');
		
		
	$options[] = array(
		'name' => __('Custom Slider Shortcode Area For Home Page', 'milestonez-pro'),
		'desc' => __('Enter here your slider shortcode without php tag', 'milestonez-pro'),
		'id' => 'customslider',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'name' => __('Slider Effects and Timing', 'milestonez-pro'),
		'desc' => __('Select slider effect.','milestonez-pro'),
		'id' => 'slideefect',
		'std' => 'random',
		'type' => 'select',
		'options' => array('random'=>'Random', 'fade'=>'Fade', 'fold'=>'Fold', 'sliceDown'=>'Slide Down', 'sliceDownLeft'=>'Slide Down Left', 'sliceUp'=>'Slice Up', 'sliceUpLeft'=>'Slice Up Left', 'sliceUpDown'=>'Slice Up Down', 'sliceUpDownLeft'=>'Slice Up Down Left', 'slideInRight'=>'SlideIn Right', 'slideInLeft'=>'SlideIn Left', 'boxRandom'=>'Box Random', 'boxRain'=>'Box Rain', 'boxRainReverse'=>'Box Rain Reverse', 'boxRainGrow'=>'Box Rain Grow', 'boxRainGrowReverse'=>'Box Rain Grow Reverse' ));
		
	$options[] = array(
		'desc' => __('Animation speed should be multiple of 100.', 'milestonez-pro'),
		'id' => 'slideanim',
		'std' => 500,
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add slide pause time.', 'milestonez-pro'),
		'id' => 'slidepause',
		'std' => 4000,
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slide Controllers', 'milestonez-pro'),
		'desc' => __('Hide/Show Direction Naviagtion of slider.','milestonez-pro'),
		'id' => 'slidenav',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Hide/Show pager of slider.','milestonez-pro'),
		'id' => 'slidepage',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Pause Slide on Hover.','milestonez-pro'),
		'id' => 'slidepausehover',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Yes', 'false'=>'No'));
		
	$options[] = array(
		'desc' => __('Buy This Theme Button on Slider', 'milestonez-pro'),
		'id' => 'buythistheme',
		'std' => '<a class="button shopnow" href="#">Shop Now</a>',
		'type' => 'textarea');		
		
	$options[] = array(
		'name' => __('Slider Image 1', 'milestonez-pro'),
		'desc' => __('First Slide', 'milestonez-pro'),
		'id' => 'slide1',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider1.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 1', 'milestonez-pro'),
		'id' => 'slidetitle1',
		'std' => 'Online digital strategies with results',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc1',
		'std' => 'Duis rutrum tincidunt turpis, sit amet pharetra dui sodales ac. Vestibulum porta ligula at quam suscipit pharetra.',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton1',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl1',
		'std' => '#',
		'type' => 'text');		
		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'milestonez-pro'),
		'desc' => __('Second Slide', 'milestonez-pro'),
		'class' => '',
		'id' => 'slide2',
		'std' => get_template_directory_uri()."/images/slides/slider2.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 2', 'milestonez-pro'),
		'id' => 'slidetitle2',
		'std' => 'Make your customer service stand out',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc2',
		'std' => 'Vestibulum porta ligula at quam suscipit pharetra. Duis rutrum tincidunt turpis, sit amet pharetra dui sodales ac.',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton2',
		'std' => 'Read More',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl2',
		'std' => '#',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('Slider Image 3', 'milestonez-pro'),
		'desc' => __('Third Slide', 'milestonez-pro'),
		'id' => 'slide3',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider3.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 3', 'milestonez-pro'),
		'id' => 'slidetitle3',
		'std' => 'Branding, Websites and Marketing',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc3',
		'std' => 'Duis rutrum tincidunt turpis, sit amet pharetra dui sodales ac. Vestibulum porta ligula at quam suscipit pharetra dui pharetra',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton3',
		'std' => 'Read More',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl3',
		'std' => '#',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('Slider Image 4', 'milestonez-pro'),
		'desc' => __('Third Slide', 'milestonez-pro'),
		'id' => 'slide4',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 4', 'milestonez-pro'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton4',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');				
	
	$options[] = array(
		'name' => __('Slider Image 5', 'milestonez-pro'),
		'desc' => __('Fifth Slide', 'milestonez-pro'),
		'id' => 'slide5',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 5', 'milestonez-pro'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton5',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 6', 'milestonez-pro'),
		'desc' => __('Sixth Slide', 'milestonez-pro'),
		'id' => 'slide6',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 6', 'milestonez-pro'),
		'id' => 'slidetitle6',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc6',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton6',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl6',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 7', 'milestonez-pro'),
		'desc' => __('Seventh Slide', 'milestonez-pro'),
		'id' => 'slide7',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 7', 'milestonez-pro'),
		'id' => 'slidetitle7',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc7',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton7',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl7',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 8', 'milestonez-pro'),
		'desc' => __('Eighth Slide', 'milestonez-pro'),
		'id' => 'slide8',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 8', 'milestonez-pro'),
		'id' => 'slidetitle8',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc8',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton8',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl8',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 9', 'milestonez-pro'),
		'desc' => __('Ninth Slide', 'milestonez-pro'),
		'id' => 'slide9',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 9', 'milestonez-pro'),
		'id' => 'slidetitle9',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc9',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton9',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl9',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 10', 'milestonez-pro'),
		'desc' => __('Tenth Slide', 'milestonez-pro'),
		'id' => 'slide10',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 10', 'milestonez-pro'),
		'id' => 'slidetitle10',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'milestonez-pro'),
		'id' => 'slidedesc10',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'milestonez-pro'),
		'id' => 'slidebutton10',
		'std' => '',
		'type' => 'text');			
	
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'milestonez-pro'),
		'id' => 'slideurl10',
		'std' => '',
		'type' => 'text');
	

	//Footer SETTINGS
	$options[] = array(
		'name' => __('Footer', 'milestonez-pro'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Footer Layout', 'milestonez-pro'),
		'desc' => __('footer Select layout. eg:Boxed, 1, 2, 3 and 4', 'milestonez-pro'),
		'id' => 'footerlayout',
		'type' => 'select',
		'std' => 'fourcolumn',
		'options' => array('onecolumn'=>'Footer 1 column', 'twocolumn'=>'Footer 2 column', 'threecolumn'=>'Footer 3 column', 'fourcolumn'=>'Footer 4 column', ) );			
				
	$options[] = array(
		'name' => __('Footer About Us', 'milestonez-pro'),
		'desc' => __('abput us text title for footer', 'milestonez-pro'),
		'id' => 'abouttitle',
		'std' => 'About Us',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('About Us Description', 'milestonez-pro'),
		'desc' => __('abput us text description for footer', 'milestonez-pro'),
		'id' => 'aboutusdescription',
		'std' => '<p>Donec ut ex ac nulla pellentesque mollis in a enim Suspendisse suscipit velit id ultricies auctor. Duis turpis arcu, aliquet sed sollicitudin seduisque velit nibh.</br > </br >Donec ut ex ac nulla sapien mauris, vitae sodales tellus suspendisse suscipit velit id ultricies auctor.</p>',
		'type' => 'textarea');	
	
	$options[] = array(
		'name' => __('Latest Posts Title', 'milestonez-pro'),
		'desc' => __('Footer latest posts title.', 'milestonez-pro'),
		'id' => 'letestpoststitle',
		'std' => 'Latest Posts',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Footer Menu Title', 'milestonez-pro'),
		'desc' => __('footer menu title.', 'milestonez-pro'),
		'id' => 'footermenutitle',
		'std' => 'Footer Menu',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Footer Contact Info', 'milestonez-pro'),
		'desc' => __('Add footer contact info title here', 'milestonez-pro'),
		'id' => 'contacttitle',
		'std' => 'Contact Info',
		'type' => 'text');	
		
	$options[] = array(	
		'desc' => __('Add company address here.', 'milestonez-pro'),
		'id' => 'address',
		'std' => '732/21 Second Street, Manchester, UK',
		'type' => 'textarea');
		
	$options[] = array(		
		'desc' => __('Add phone number here.', 'milestonez-pro'),
		'id' => 'phone',
		'std' => '345-677-554',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Add fax number here.', 'milestonez-pro'),
		'id' => 'fax',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Add email address here.', 'milestonez-pro'),
		'id' => 'email',
		'std' => 'info@sitename.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer Social Icons', 'milestonez-pro'),
		'desc' => __('social icons for footer', 'milestonez-pro'),
		'id' => 'footersocialicon',
		'std' => '[social_area]
			[social icon="facebook" link="#"]
			[social icon="twitter" link="#"]
			[social icon="linkedin" link="#"]
			[social icon="google-plus" link="#"]				
		[/social_area]
		',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Footer Copyright', 'milestonez-pro'),
		'desc' => __('Copyright Text for your site.', 'milestonez-pro'),
		'id' => 'copytext',
		'std' => ' Copyright &copy; 2017. All rights reserved',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Footre Text Link', 'milestonez-pro'),
		'id' => 'ftlink',
		'std' => 'Design by <a href="'.esc_url('https://gracethemes.com').'" target="_blank">Grace Themes</a>',
		'type' => 'textarea',);
		
	$options[] = array(
		'desc' => __('Footer Back to Top Button', 'milestonez-pro'),
		'id' => 'backtotop',
		'std' => '[back-to-top]',
		'type' => 'textarea',);

	//Short codes
	$options[] = array(
		'name' => __('Short Codes', 'milestonez-pro'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Photo Gallery', 'milestonez-pro'),
		'desc' => __('[photogallery filter="true" show="8"]', 'milestonez-pro'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Testimonials Rotator', 'milestonez-pro'),
		'desc' => __('[testimonials]', 'milestonez-pro'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('All Testimonials Listing', 'milestonez-pro'),
		'desc' => __('[testimonials-listing show="10"]', 'milestonez-pro'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Sidebar Testimonials Rotator', 'milestonez-pro'),
		'desc' => __('[sidebar-testimonials]', 'milestonez-pro'),
		'type' => 'info');		
		
	$options[] = array(
		'name' => __('Our Client', 'milestonez-pro'),
		'desc' => __('[client_lists]<br />
		[client title="Enter here title" image="Enter here client image logo url with https:" link="#"]<br />
		[client title="Enter here title" image="Enter here client image logo url with https:" link="#"]<br />
		[client title="Enter here title" image="Enter here client image logo url with https:" link="#"]<br />
		[client title="Enter here title" image="Enter here client image logo url with https:" link="#"]<br />
		[client title="Enter here title" image="Enter here client image logo url with https:" link="#"]<br />
		[/client_lists]', 'milestonez-pro'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Contact Form', 'milestonez-pro'),
		'desc' => __('[contactform to_email="test@example.com" title="Contact Form"] 
', 'milestonez-pro'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Our Team', 'milestonez-pro'),
		'desc' => __('[our-team show="4"]', 'milestonez-pro'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Latest News', 'milestonez-pro'),
		'desc' => __('[latest-news showposts="4" comment="show" date="show" author="show"]', 'milestonez-pro'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Our Skills', 'milestonez-pro'),
		'desc' => __('[skill title="Coding" percent="90" bgcolor="#65676a"][skill title="Design" percent="70" bgcolor="#65676a"][skill title="Building" percent="55" bgcolor="#65676a"][skill title="SEO" percent="100" bgcolor="#65676a"]', 'milestonez-pro'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Custom Button', 'milestonez-pro'),
		'desc' => __('[button align="center" name="View Gallery" link="#" target=""]', 'milestonez-pro'),
		'type' => 'info');		
		
	$options[] = array(
		'name' => __('Search Form', 'milestonez-pro'),
		'desc' => __('[searchform]', 'milestonez-pro'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Social Icons ( Note: More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/)', 'milestonez-pro'),
		'desc' => __('[social_area]<br />
			[social icon="facebook" link="#"]<br />
			[social icon="twitter" link="#"]<br />
			[social icon="linkedin" link="#"]<br />
			[social icon="google-plus" link="#"]<br />
		[/social_area]', 'milestonez-pro'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('2 Column Content', 'milestonez-pro'),
		'desc' => __('<pre>
[column_content type="one_half"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_half_last"]
	Column 2 Content goes here...
[/column_content]
</pre>', 'milestonez-pro'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('3 Column Content', 'milestonez-pro'),
		'desc' => __('<pre>
[column_content type="one_third"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_third"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_third_last"]
	Column 3 Content goes here...
[/column_content]
</pre>', 'milestonez-pro'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('4 Column Content', 'milestonez-pro'),
		'desc' => __('<pre>
[column_content type="one_fourth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fourth_last"]
	Column 4 Content goes here...
[/column_content]
</pre>', 'milestonez-pro'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('5 Column Content', 'milestonez-pro'),
		'desc' => __('<pre>
[column_content type="one_fifth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 4 Content goes here...
[/column_content]

[column_content type="one_fifth_last"]
	Column 5 Content goes here...
[/column_content]
</pre>', 'milestonez-pro'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Tabs', 'milestonez-pro'),
		'desc' => __('<pre>
[tabs]
	[tab title="TAB TITLE 1"]
		TAB CONTENT 1
	[/tab]
	[tab title="TAB TITLE 2"]
		TAB CONTENT 2
	[/tab]
	[tab title="TAB TITLE 3"]
		TAB CONTENT 3
	[/tab]
[/tabs]
</pre>', 'milestonez-pro'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Toggle Content', 'milestonez-pro'),
		'desc' => __('<pre>
[toggle_content title="Toggle Title 1"]
	Toggle content 1...
[/toggle_content]
[toggle_content title="Toggle Title 2"]
	Toggle content 2...
[/toggle_content]
[toggle_content title="Toggle Title 3"]
	Toggle content 3...
[/toggle_content]
</pre>', 'milestonez-pro'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Accordion Content', 'milestonez-pro'),
		'desc' => __('<pre>
[accordion]
	[accordion_content title="ACCORDION TITLE 1"]
		ACCORDION CONTENT 1
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 2"]
		ACCORDION CONTENT 2
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 3"]
		ACCORDION CONTENT 3
	[/accordion_content]
[/accordion]
</pre>', 'milestonez-pro'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Clear', 'milestonez-pro'),
		'desc' => __('<pre>
[clear]
</pre>', 'milestonez-pro'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('HR / Horizontal separation line', 'milestonez-pro'),
		'desc' => __('<pre>
[hr] or &lt;hr&gt;
</pre>', 'milestonez-pro'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Subtitle', 'milestonez-pro'),
		'desc' => __('[subtitle color="#111111" size="15px" margin="0 0 50px 0" align="" description="short descriptio here"]', 'milestonez-pro'),
		'type' => 'info');	
	
	$options[] = array(
		'name' => __('Scroll to Top', 'milestonez-pro'),
		'desc' => __('[back-to-top] 
', 'milestonez-pro'),
		'type' => 'info');

	return $options;
}