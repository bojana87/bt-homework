<?php

$products = [
    [
        'id' => 1,
        'title' => "Vienna",
        'description' => "Vienna, Austria's capital, lies in the country's east on the Danube River. Its artistic and intellectual legacy was shaped by residents including Mozart, Beethoven and Sigmund Freud.",
        'price'=>1200,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Austria',
        'onsale' => false,
        'img' => "./public/theme/assets/product-images/austria.jpg",
    ],
    [
        'id' => 2,
        'title' => "Bejing",
        'description' => "Beijing, China's sprawling capital, has history stretching back 3 millennia. Yet it's known as much for modern architecture as its ancient sites such as the grand Forbidden City complex, the imperial palace during the Ming and Qing dynasties.",
        'price'=>2799.99,
        'available' => true,
        'category' => 'Summer',
        'country' => 'China',
        'onsale' => true,
        'img' => "./public/theme/assets/product-images/china.jpg",
    ],
    [
        'id' => 3,
        'title' => "Helsinki",
        'description' => "Helsinki, Finland's southern capital, sits on a peninsula in the Gulf of Finland. Its central avenue, Mannerheimintie, is flanked by institutions including the National Museum, tracing Finnish history from the Stone Age to the present.",
        'price'=>1899.99,
        'available' => true,
        'category' => 'Winter',
        'country' => 'Finland',
        'onsale' => true,
        'img' => "./public/theme/assets/product-images/finland.jpg",
    ],
    [
        'id' => 4,
        'title' => "Paris",
        'description' => "For centuries Paris has been one of the world's most important and attractive cities. It is appreciated for the opportunities it offers for business and commerce, for study, for culture, and for entertainment; its gastronomy, haute couture, painting, literature, and intellectual community.",
        'price'=>999.99,
        'available' => true,
        'category' => 'Summer',
        'country' => 'France',
        'onsale' => true,
        'img' => "./public/theme/assets/product-images/france.jpg",
    ],
    [
        'id' => 5,
        'title' => "Berlin",
        'description' => "Berlin, Germany's capital, dates to the 13th century. Reminders of the city's turbulent 20th-century history include its Holocaust memorial and the Berlin Wall's graffitied remains.",
        'price'=>999.99,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Germany',
        'onsale' => true,
        'img' => "./public/theme/assets/product-images/germany.jpg",
    ],
    [
        'id' => 6,
        'title' => "Santorini",
        'description' => "Santorini is one of the Cyclades islands in the Aegean Sea. It was devastated by a volcanic eruption in the 16th century BC, forever shaping its rugged landscape.",
        'price'=>1899.99,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Greece',
        'onsale' => true,
        'img' => "./public/theme/assets/product-images/greece.jpg",
    ],
    [
        'id' => 7,
        'title' => "Venice",
        'description' => "Venice, the capital of northern Italy's Veneto region, is built on more than 100 small islands in a lagoon in the Adriatic Sea. It has no roads, just canals.",
        'price'=>1100,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Italy',
        'onsale' => false,
        'img' => "./public/theme/assets/product-images/italy.jpg",
    ],
    [
        'id' => 8,
        'title' => "Tokyo",
        'description' => "Tokyo, Japan's busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods.",
        'price'=>2999.99,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Japan',
        'onsale' => true,
        'img' => "./public/theme/assets/product-images/japan.jpg",
    ],
    [
        'id' => 9,
        'title' => "Warsaw",
        'description' => "Warsaw, officially the Capital City of Warsaw, is the capital and largest city of Poland. The metropolis stands on the River Vistula in east-central Poland.",
        'price'=>1200,
        'available' => true,
        'category' => 'Winter',
        'country' => 'Poland',
        'onsale' => false,
        'img' => "./public/theme/assets/product-images/poland.jpg",
    ],
    [
        'id' => 10,
        'title' => "Barcelona",
        'description' => "Barcelona, the cosmopolitan capital of Spain's Catalonia region, is known for its art and architecture. The fantastical Sagrada Família church and other modernist landmarks designed by Antoni Gaudí dot the city.",
        'price'=>1099.99,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Spain',
        'onsale' => false,
        'img' => "./public/theme/assets/product-images/spain.jpg",
    ],
    [
        'id' => 11,
        'title' => "Cappadocia",
        'description' => "Cappadocia, a semi-arid region in central Turkey, is known for its distinctive “fairy chimneys,” tall, cone-shaped rock formations clustered in Monks Valley, Göreme and elsewhere.",
        'price'=>1399.99,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Turkey',
        'onsale' => true,
        'img' => "./public/theme/assets/product-images/turkey.jpg",
    ],
    [
        'id' => 12,
        'title' => "Hanoi",
        'description' => "Hanoi, the capital of Vietnam, is known for its centuries-old architecture and a rich culture with Southeast Asian, Chinese and French influences. At its heart is the chaotic Old Quarter, where the narrow streets are roughly arranged by trade.",
        'price'=>3200,
        'available' => true,
        'category' => 'Summer',
        'country' => 'Vietnam',
        'onsale' => false,
        'img' => "./public/theme/assets/product-images/vietnam.jpg",
    ],
];

/* * * mysql hostname ** */
$hostname = "localhost";
/* * * mysql username ** */
$username = "root";
/* * * mysql password ** */
$password = "";
/* * * mysql database name ** */
$database = "shop-bt";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($products as $product) {
        $sqlQueryString = "INSERT INTO ec_products (
            title, 
            description, 
            price, 
            available,
            category, 
            country,
            onsale, 
            img,  
            barcode
            )" . 
        " VALUES (" . 
            ":title" . ", " . 
            ":description" . ", " . 
            ":price" . ", " . 
            ":available" . ", " . 
            ":category" . ", " . 
            ":country" . ", " . 
            ":onsale" . ", " . 
            ":img" . ", " . 
            ":barcode" . ")";

        $statement = $connection->prepare($sqlQueryString);
        $params = [
            'title' => $product["title"],
            'description' => $product["description"],
            'price' => $product["price"],
            'available' => $product["available"],
            'category' => $product["category"],
            'country' => $product["country"],
            'onsale' => $product["onsale"],
            'img' => $product["img"],
            'barcode' => $product["id"],
        ];
        $status = $statement->execute($params);
    }
} catch (PDOException $exception) {
    echo "Something went wrong: " . $exception->getMessage() . "<br>";
}
