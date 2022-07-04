<?php 


namespace Models\Cart;


require_once "./Models/Product.php";
require_once "./Models/ShoppingCartProduct.php";


// USING MODELS
use Models\Product\Product;
use Models\ShoppingCartProduct\ShoppingCartProduct;


class Cart { 

    protected $items = [];

    public function __construct($cartFromSession)
    {
        foreach ($cartFromSession as $item) {
            $newProduct = Product::getOneProductById($item['id']);
            $this->items[] = new ShoppingCartProduct($newProduct, $item['quantity']);
        }
    }


    public function addToCart($product, $quantity = 1)
    {
        $flag = false;
        foreach ($this->items as $item) {
            if ($item->getProduct()->id == $product->id) {
                $item->setQuantity($item->getQuantity() + $quantity);
                $flag = true;
            }
        }
        if (!$flag) {
            $this->items[] = new ShoppingCartProduct($product, $quantity);
        }
        return $this;
    }

    public function removeProduct(Product $product)
    {
        if ($product instanceof Product) {
            foreach ($this->getItems() as $key => $item) {
                if ($item->getProduct()->id == $product->id) {
                    unset($this->items[$key]);
                }
            }
        }
        return $this;
    }

    public function getTotalCost() {
        $cost = 0;
        foreach ($this->items as $item) {
            $tempQuantity = $item->getQuantity();
            $tempPrice = $item->getProduct()->price;

            $tempCost = $tempQuantity * $tempPrice;
            $cost += $tempCost;
        }

        return $cost;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function checkout()
    {
        
    }

    public function updateSession()
    {
        $_SESSION['cart'] = [];
        foreach ($this->items as $item) {

            array_push($_SESSION['cart'],[
                'id' => $item->getProduct()->id,
                'quantity' => $item->getQuantity()
            ]);
        }
    }

}




?>