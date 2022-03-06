<?php

  class Cart{

    private array $items = [];

    public function getItems(){

      return $this->items;

    }

    public function addProduct(Product $product, int $quantity){

      // Finding the product in cart.

      $cartItem = $this->findCartItem($product->getId());
      if($cartItem === null){
        $cartItem = new CartItem($product, 0);
        $this->items[] = $cartItem;
      }
      $cartItem->increaseQuantity($quantity);
      return $cartItem;
    }

    private function findCartItem(int $productId){

      foreach ($this->items as $item) {                     // Now here is where we are finding the product.
        if($item->getProduct()->getId() === $productId){
          return $item->getProduct();

        }
    }
    return null;            // If the product wasn't found then return null.

  }

  public function removeProduct(Product $product){

    foreach($this->items as $index => $item){
      if($item->getProduct()-getId() === $product->getId()){
        unset($this->items[$index])
        break;
      }
    }

  }

  public function getTotalQuantity(){

    $total = 0;
    foreach($this->items as $item){
      $total += $item->getQuantity();

    }
    return $total;
  }

  public function getTotalSum(){

    $sum = 0;
    foreach($this->items as $item){
      $sum += $item->getQuantity() * $item->getProduct()->getPrice();
    }

    return $sum;
  }

}
