<?php

  class Product{

    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    // Constructor

    public funtion __construct($id, $title, $price, $availableQuantity){

      $this->id = $id;
      $this->title = $title;
      $this->price = $price;
      $this->availableQuantity = $availableQuantity;

    }

    // Getters ans setters for everyone of the properties.

    public function getId(){

      return $this->id;

    }

    public function setId($id){

      $this->id = $id;

    }

    public function getTitle(){

      return $this->title;

    }

    public function setTitle($title){

      $this->title = $title;

    }

    public function getPrice(){

      return $this->price;

    }

    public function setPrice($price){

      $this->price = $price;

    }

    public function getAvailableQuantity(){

      return $this->availableQuantity;

    }

    public function setAvailableQuantity($availableQuantity){

      $this->availableQuantity = $availableQuantity;

    }

    public function addToCart(Cart $cart, int $quantity){

      return $cart->addProduct($this, $quantity);

    }

    public function removefromCart(Cart $cart){

      return $cart->removeProduct($this);

    }

  }
