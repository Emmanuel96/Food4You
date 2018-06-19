<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{ 
    //items is an array of items in the cart 
    public $items = null; 

    public $totalQty =0; 
    public $totalPrice = 0; 

    public function __construct($oldCart)
    {
    	if($oldCart)
    	{
    		$this->items = $oldCart->items; 
	    	$this->totalQty = $oldCart->totalQty; 
	    	$this->totalPrice = $oldCart->totalPrice;
    	}
    	 
    }

    //FUNCTION ADDS AN ITEM TO THE CART OBJECT
    public function add($item, $id, $extra)
    {
        //create an associative array of stored items 
    	$storedItem = ['qty' => 0, 'price' => $item->price, 'item'=> $item, 'extra' => $extra]; 
        //if the item exists in the cart, then make the stored item = item
    	if($this->items)
    	{
            //if the item already exists in the shopping cart 
            //then just make the stored item assoc array to be the  new item
            //If the item has different extras
    		if(array_key_exists($id.''.$extra, $this->items) && $this->items[$id.''.$extra]["extra"] === $extra)
    		{
    			$storedItem = $this->items[$id.''.$extra];
    		}
    	}
        
        //increase the quantity of the item in the array 
    	$storedItem['qty']++; 

        //increase the price of the item in the array 
    	$storedItem['price'] = $item->product_price * $storedItem['qty'];

        //add the extra to the stored item 
        //right about  here i  need to check if the extras are empty
        if(!$extra == null)
        {
             $storedItem['extra'] = $extra;
        }  

        //pass the data from stored item array to the items array
        //use the index of the item as key
    	$this->items[$id. ''. $extra] = $storedItem;

        //increase the price and the quantity of items in the cart
    	$this->totalQty++; 
    	$this->totalPrice += $item->product_price;  
    }

    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
        
    }

    public function editQty($item, $id, $qty)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item'=> $item]; 
        if($this->items)
        {
            //if the item already exists in the shopping cart 
            //then just make the stored item assoc array to be the  new item
            if(array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }

        //geting the quantity of the item
        $previousQty = $storedItem['qty'];
        $previousPrice = $storedItem['price'];

        $storedItem['qty'] = $qty; 

        //changing the price of the item in the cart using original price of item 
        $storedItem['price'] = $item->product_price * $qty; 

        $this->items[$id] = $storedItem; 

        //increase the price and the quantity of items in the cart
        $this->totalQty += ($qty - $previousQty); 
       // $this->totalQty = $qty; 
        $this->totalPrice += ($storedItem['price'] - $previousPrice);
    }
}
