<?php

  class CartItem{

    private Product $product;
    private int $quantity;

    // Constructor of CartItem
    public function __construct(Product $product, $quantity){

      $this->product = $product;
      $this->quantity = $quantity;

    }

    public function getProduct(){

      return $this->product;

    }

    public function setProduct($product){

      $this->product = $product;

    }

    public function getQuantity(){

      return $this->quantity;

    }

    public function setQuantity($quantity){

      $this->quantity = $quantity;

    }

    public function increaseQuantity($amount = 1){            // Default number of amount is 1.

      if($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity()){
        throw new Exception(message: "Product quantity can not be more than".$this->getProduct()->getAvailableQuantity());
      }
      $this->quantity += $amount;

    }

    public function decreaseQuantity($amount = 1){

      if($this->getQuantity() - $amount < 1){
        throw new Exception(message: "Product quantity can not be less than 1");
      }
      $this->quantity -= $amount;

    }

  }
