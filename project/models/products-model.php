<?php

const ORDER_BY_PRICE_ASC = "price-asc";
const ORDER_BY_PRICE_DSC = "price-dsc";

function getAllProducts() {
    $products = [
        [
            'id' => 1,
            'title' => "Harry Potter - Voldemort Action Figure",
            'description' => "Funko Pop! Movies: Harry Potter - Voldemort Harry Potter Voldemort Pop! Vinyl Figure: This Pop! Vinyl figure of Voldemort makes an awesome addition to your collection",
            'price'=>87.40,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/voldemort.jpg"
        ],
        [
            'id' => 2,
            'title' => "The Witcher III - Wild Hunt Figure",
            'description' => "Funko Pop! Games: The Witcher III - Wild Hunt Figure Geralt Pop! Vinyl Figure: This Pop! Vinyl figure of Geralt makes an awesome addition to your collection",
            'price'=>100,
            'available' => true,
            'category' => 'Games',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/geralt.jpg"
        ],
        [
            'id' => 3,
            'title' => "Star Wars - Mandalorian Figure",
            'description' => "Funko Pop! Movies: Star Wars - Mandalorian Pop! Vinyl Figure: This Pop! Vinyl figure of Mandalorian makes an awesome addition to your collection",
            'price'=>80.50,
            'available' => false,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/mandalorian.jpg"
        ],
        [
            'id' => 4,
            'title' => "Peter Pan - Tinker Bell Figure",
            'description' => "Funko Pop! Animated movies: Peter Pan - Tinker Bell Pop! Vinyl Figure: This Pop! Vinyl figure of Tinker Bell makes an awesome addition to your collection",
            'price'=>53,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/tinkerbell.jpg"
        ],
        [
            'id' => 5,
            'title' => "Star Wars - Yoda Figure",
            'description' => "Funko Pop! Movies: Star Wars - Yoda Pop! Vinyl Figure: This Pop! Vinyl figure of Yoda makes an awesome addition to your collection",
            'price'=>69.99,
            'available' => false,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/yoda.jpg"
        ],
        [
            'id' => 6,
            'title' => "Marvel - Spiderman",
            'description' => "Funko Pop! Movies: Spiderman - Spiderman Pop! Vinyl Figure: This Pop! Vinyl figure of Spiderman makes an awesome addition to your collection",
            'price'=>69.99,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/spiderman.jpg"
        ],
        [
            'id' => 7,
            'title' => "Dark Knight - Joker",
            'description' => "Funko Pop! Movies: Dark Knight - Joker Pop! Vinyl Figure: This Pop! Vinyl figure of Joker makes an awesome addition to your collection",
            'price'=>100,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/joker.jpg"
        ],
        [
            'id' => 8,
            'title' => "Venom",
            'description' => "Funko Pop! Movies: Venom - Venom Pop! Vinyl Figure: This Pop! Vinyl figure of Venom makes an awesome addition to your collection",
            'price'=>80.99,
            'available' => false,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/venom.jpg"
        ],
        [
            'id' => 9,
            'title' => "Game of Thrones - Night King",
            'description' => "Funko Pop! Movies: Game of Thrones - Night King Pop! Vinyl Figure: This Pop! Vinyl figure of the Night King makes an awesome addition to your collection",
            'price'=>55,
            'available' => true,
            'category' => 'TV Shows',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/nightking.jpg"
        ],
        [
            'id' => 10,
            'title' => "Game of Thrones - Daenerys Targaryen",
            'description' => "Funko Pop! Movies: Game of Thrones - Daenerys Targaryen Pop! Vinyl Figure: This Pop! Vinyl figure of Daenerys Targaryen makes an awesome addition to your collection",
            'price'=>99.99,
            'available' => true,
            'category' => 'TV Shows',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/danny.jpg"
        ],
        [
            'id' => 11,
            'title' => "Sonic - Classic Figure",
            'description' => "Funko Pop! Games: Sonic - Sonic Pop! Vinyl Figure: This Pop! Vinyl figure of Sonic makes an awesome addition to your collection",
            'price'=>89.99,
            'available' => true,
            'category' => 'Games',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/sonic.jpg"
        ],
        [
            'id' => 12,
            'title' => "Fortnite - Rippley Figure",
            'description' => "Funko Pop! Games: Fortnite - Rippley Pop! Vinyl Figure: This Pop! Vinyl figure of Rippley makes an awesome addition to your collection",
            'price'=>80.99,
            'available' => false,
            'category' => 'Games',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/rippley.jpg"
        ],
        [
            'id' => 13,
            'title' => "Harry Potter - Voldemort Action Figure",
            'description' => "Funko Pop! Movies: Harry Potter - Voldemort Harry Potter Voldemort Pop! Vinyl Figure: This Pop! Vinyl figure of Voldemort makes an awesome addition to your collection",
            'price'=>87.40,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/voldemort.jpg"
        ],
        [
            'id' => 14,
            'title' => "The Witcher III - Wild Hunt Figure",
            'description' => "Funko Pop! Games: The Witcher III - Wild Hunt Figure Geralt Pop! Vinyl Figure: This Pop! Vinyl figure of Geralt makes an awesome addition to your collection",
            'price'=>113,
            'available' => true,
            'category' => 'Games',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/geralt.jpg"
        ],
        [
            'id' => 15,
            'title' => "Star Wars - Mandalorian Figure",
            'description' => "Funko Pop! Movies: Star Wars - Mandalorian Pop! Vinyl Figure: This Pop! Vinyl figure of Mandalorian makes an awesome addition to your collection",
            'price'=>82.50,
            'available' => false,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/mandalorian.jpg"
        ],
        [
            'id' => 16,
            'title' => "Peter Pan - Tinker Bell Figure",
            'description' => "Funko Pop! Animated movies: Peter Pan - Tinker Bell Pop! Vinyl Figure: This Pop! Vinyl figure of Tinker Bell makes an awesome addition to your collection",
            'price'=>103.99,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/tinkerbell.jpg"
        ],
        [
            'id' => 17,
            'title' => "Star Wars - Yoda Figure",
            'description' => "Funko Pop! Movies: Star Wars - Yoda Pop! Vinyl Figure: This Pop! Vinyl figure of Yoda makes an awesome addition to your collection",
            'price'=>109.99,
            'available' => false,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/yoda.jpg"
        ],
        [
            'id' => 18,
            'title' => "Marvel - Spiderman",
            'description' => "Funko Pop! Movies: Spiderman - Spiderman Pop! Vinyl Figure: This Pop! Vinyl figure of Spiderman makes an awesome addition to your collection",
            'price'=>59.99,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/spiderman.jpg"
        ],
        [
            'id' => 19,
            'title' => "Dark Knight - Joker",
            'description' => "Funko Pop! Movies: Dark Knight - Joker Pop! Vinyl Figure: This Pop! Vinyl figure of Joker makes an awesome addition to your collection",
            'price'=>110,
            'available' => true,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/joker.jpg"
        ],
        [
            'id' => 20,
            'title' => "Venom",
            'description' => "Funko Pop! Movies: Venom - Venom Pop! Vinyl Figure: This Pop! Vinyl figure of Venom makes an awesome addition to your collection",
            'price'=>83.99,
            'available' => false,
            'category' => 'Movies',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/venom.jpg"
        ],
        [
            'id' => 21,
            'title' => "Game of Thrones - Night King",
            'description' => "Funko Pop! Movies: Game of Thrones - Night King Pop! Vinyl Figure: This Pop! Vinyl figure of the Night King makes an awesome addition to your collection",
            'price'=>58,
            'available' => true,
            'category' => 'TV Shows',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/nightking.jpg"
        ],
        [
            'id' => 22,
            'title' => "Sonic - Classic Figure",
            'description' => "Funko Pop! Games: Sonic - Sonic Pop! Vinyl Figure: This Pop! Vinyl figure of Sonic makes an awesome addition to your collection",
            'price'=>87.99,
            'available' => true,
            'category' => 'Games',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/sonic.jpg"
        ],
        [
            'id' => 23,
            'title' => "Game of Thrones - Daenerys Targaryen",
            'description' => "Funko Pop! Movies: Game of Thrones - Daenerys Targaryen Pop! Vinyl Figure: This Pop! Vinyl figure of Daenerys Targaryen makes an awesome addition to your collection",
            'price'=>92.99,
            'available' => false,
            'category' => 'TV Shows',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/danny.jpg"
        ],
        [
            'id' => 24,
            'title' => "Fortnite - Rippley Figure",
            'description' => "Funko Pop! Games: Fortnite - Rippley Pop! Vinyl Figure: This Pop! Vinyl figure of Rippley makes an awesome addition to your collection",
            'price'=>110.99,
            'available' => false,
            'category' => 'Games',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/rippley.jpg"
        ],
        [
            'id' => 25,
            'title' => "Fortnite - Rippley Figure",
            'description' => "Funko Pop! Games: Fortnite - Rippley Pop! Vinyl Figure: This Pop! Vinyl figure of Rippley makes an awesome addition to your collection",
            'price'=>90.99,
            'available' => false,
            'category' => 'Games',
            'brand' => 'Funco Pop',
            'img' => "./public/theme/img/rippley.jpg"
        ],
    ];

    return $products;
}

function getAvailableProducts() {
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            array_push($availabaleProducts,$product);
            // $availabaleProducts[] = $product;
        }
    }
    return $availabaleProducts;
}

function filteredProducts($products, $term, $sort) {
    $filteredProducts = [];
   
    $tempTerm = strtolower($term);

    foreach ($products as $product) {
        $tempTitle = strtolower($product['title']);
        $tempBrand = strtolower($product['brand']);
        $tempDescription = strtolower($product['description']);
    
        if(
            str_contains($tempTitle, $tempTerm) ||
            str_contains($tempBrand, $tempTerm) || 
            str_contains($tempDescription, $tempTerm)
        ) {
            array_push($filteredProducts,$product);
        }
    }

    if ($sort === "asc") {
        usort($filteredProducts, function ($item1, $item2) {
            return $item1['price'] <=> $item2['price'];
        });
        return $filteredProducts;

    } else if ($sort === "dsc") {
        usort($filteredProducts, function ($item1, $item2) {
            return $item2['price'] <=> $item1['price'];
        });
        return $filteredProducts;
    } else {
        return $filteredProducts;
    }

}

function getOneProductById($id) {
    $allProducts = getAllProducts();
    foreach ($allProducts as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct) {
    if (!$mainProduct) {
        return;
    }
    $related = [];
    $products = getAvailableProducts();
    if (count($products)<1) {
        return;
    } else {
        foreach ($products as  $product) {
            if($product['category'] === $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
                array_push($related, $product);
                // $related[] = $product;
                if(count($related) >= 3) {
                    break;
                }
            }
        }
        return $related;
    }
    
}

function getPreviousProductId($id) {
    $allProducts = getAllProducts();
    if ($id > 1) {
        return $id - 1;
    } else {
        return count($allProducts);
    }
}

function getNextProductId($id) {
    $allProducts = getAllProducts();
    if ($id < count($allProducts)) {
        return $id + 1;
    } else {
        return 1;
    }
}
