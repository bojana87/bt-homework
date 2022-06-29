<?php

class Product {
    
    public $title;
    public $barcode;
    public $price;
    public $stock;

    public function __construct($title, $barcode, $price, $stock) {
        $this->title = $title;
        $this->barcode = $barcode;
        $this->price = $price;
        $this->stock = $stock;
    }
   
    public function getTitle() {
        return $this->title;
    }

    public function getBarcode() {
        return $this->barcode;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStock() {
        return $this->stock;
    }
}


class ShoppingCartItem {

    public $product;
    public $quantity;

    public function __construct(Product $product, $quantity) {
        if ($this->availableQuantity($product,$quantity)){
            $this->product = $product;
            $this-> quantity = $quantity;
        } else {
            die;
        }
       
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function availableQuantity ($product, $quantity) {
        $stock = $product->getStock();
        if ($quantity <= $stock) {
            return true;
        } else {
            return false;
        }
        
    }
}


class ShoppingCart {
    public $cartItems = [];
   
    public function getCartItems(){
        return $this->cartItems;
    }

    public function addToCart($product, $quantity = 1) {
        $productBarCode = $product->barcode;     
        $tempCartItem = new ShoppingCartItem($product, $quantity);
      
        if(count($this->cartItems) == 0 ){
            array_push($this->cartItems, $tempCartItem);
            return true;
            
        } else {
            $inArray = false;
            $duplicateIndex="";
            foreach ($this->cartItems as $key => $item) {
                if ($item->product->barcode === $productBarCode)  {
                        $inArray= true;
                        $duplicateIndex = $key;
                        }
                    }
                    if ($inArray) {
                        $this->cartItems[$duplicateIndex]->quantity =$quantity;
                    } else {
                        array_push($this->cartItems,$tempCartItem);
                    }
        }    


   
        }




    public function removeItem($product, $barcode) {
        foreach ($this->cartItems as $key => $item) {
            if ($item->product->barcode === $barcode) {
                array_splice($this->cartItems, $key, 1); 
            } 
        }
    }
    
}


$book1 = new Product("LOTR", 1111, 1200, 5);
$book2 = new Product("WarAndPeace", 1500, 10, 5);
$book3 = new Product("Emma", 3333, 800, 5);
$book4 = new Product("Batman", 4444, 1000, 10);
$book5 = new Product("The Collector", 1100, 10, 5);



$newCart = new ShoppingCart();
$newCart->addToCart($book1, 5);
$newCart->addToCart($book2, 5);
$newCart->addToCart($book2, 3);
$newCart->addToCart($book1, 3);
$newCart->addToCart($book1, 2);

// $newCart->removeItem($book1, 1111);

var_dump($newCart->getCartItems());
