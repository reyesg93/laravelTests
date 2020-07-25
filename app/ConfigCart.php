<?php

namespace App;

class ConfigCart
{

  public $items = null;
  public $totalPrice = 0;
  public $totalQty = 0;
  public $message = '';

  public function __construct($oldCart)
  {
    if ($oldCart) {
      $this->items = $oldCart->items;
      $this->totalQty = $oldCart->totalQty;
      $this->totalPrice = $oldCart->totalPrice;
    }
  }

  public function add($item, $id)
  {
    $storedItems = ['item' => $item, 'price' => $item->price];

    if ($this->items) {
        if (array_key_exists($id, $this->items)) {
          return 'error';
        } else {
          
        }
    }

    $this->items[$id] = $storedItems;
    $this->totalQty++;
    $this->totalPrice += $item->price;
    //$this->message = $message;
    
  }


}