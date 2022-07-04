<?php

namespace Models\Product;


require_once "./Models/Model.php";

// USING MODELS
use Models\Model\Model;


class Product extends Model {

    const ORDER_BY_PRICE_ASC = "price-asc";
    const ORDER_BY_PRICE_DSC = "price-dsc";

    public function __construct($product)
    {
        $this->id = $product['id'];
        $this->title = $product['title'];
        $this->description = $product['description'];
        $this->price = $product['price'];
        $this->available = $product['available'];
        $this->category = $product['category'];
        $this->country = $product['country'];
        $this->onsale = $product['onsale'];
        $this->img = $product['img'];
    }

    public static function getAllProducts()
    {
        parent::connection('ec_products');
        $allProducts = [];
        if (self::$db_status) {
            foreach (parent::fetchAll() as $product) {
                $allProducts[] = new self($product);
            }
        }
        return $allProducts;
    }


    public static function getAllProducts1() {
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
                'title' => "Berlin  ",
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
                'onsale' => true,
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
    
        return $products;
    }

    public static function getAvailableProducts($page = null)
    {
        $availabaleProducts = [];
        foreach (self::getAllProducts() as $product) {
            if ($product->available == true) {
                $availabaleProducts[] = $product;
            }
        }
        return $availabaleProducts;
    }


    public static function filteredProducts($products, $term, $sort) {
        $filteredProducts = [];
       
        $tempTerm = strtolower($term);
    
        foreach ($products as $product) {
            $tempTitle = strtolower($product->title);
        
            if(str_contains($tempTitle, $tempTerm)) {
                array_push($filteredProducts,$product);
            }
        }
    
        if ($sort === "asc") {
            usort($filteredProducts, function ($item1, $item2) {
                return $item1->price <=> $item2->price;
            });
            return $filteredProducts;
    
        } else if ($sort === "dsc") {
            usort($filteredProducts, function ($item1, $item2) {
                return $item2->price <=> $item1->price;
            });
            return $filteredProducts;
        } else {
            return $filteredProducts;
        }
    
    }


    public static function getOneProductById($id) {
        $allProducts = self::getAllProducts();
        foreach ($allProducts as $product) {
            if($product->id == $id) {
                return $product;
            }
        }
    }


    public static function getRandomProducts() {
        $randomProducts = [];
        $products = self::getAvailableProducts();
        $numberOfProducts = count($products);
    
        for ($i=1; $i <= 4 ; $i++) { 
           
           $productIndex = rand(0, $numberOfProducts -1 );
            array_push($randomProducts, $products[$productIndex]);
        }
    
        return $randomProducts;
    
    }

    public function getRelatedProducs()
    {
        $related = [];
        $products = self::getAvailableProducts();
        foreach ($products as  $product) {
            if ($product->category == $this->category && $this->id != $product->id) {
                $related[] = $product;
                if (count($related) >= 3) {
                    break;
                }
            }
        }
        return $related;
    }
    

    public static function getPreviousProductId($id) {
        $allProducts = self::getAllProducts();
        $index = array_search($id, array_column($allProducts, 'id'));


        if ($index > 0) {
            return $allProducts[$index-1]->id;
        } else {
            return $allProducts[count($allProducts)-1]->id;
        }
    }
    
    public static function getNextProductId($id) {
        $allProducts = self::getAllProducts();
        $index = array_search($id, array_column($allProducts, 'id'));

        if ($index == count($allProducts)-1) {
            return $allProducts[0]->id;
        } else {
            return $allProducts[$index + 1]->id;
        }
    }


}

