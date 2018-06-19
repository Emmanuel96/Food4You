<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\Cart; 
use Session; 

class CartController extends Controller
{
    //
    Public function displayCart(){
        if(!Session::has('cart'))
        {
            // return view('cartViews.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // return $cart->items; 

        $cart->items; 
        return view('cartViews.cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

   //FUNCTION TO ADD ITEMS TO A CART 
   Public function addToCart(Request $request){
       // return ( $amt.' of item '.$id.' has been added to the cart');
       //firstly we get this item from our db
        $id = $request->id;
        //we need to get the qty from the request as well 
        $qty = $request->qty; 

        //then get item from the menu table with laravel eloquent model 
        $item = menu::find($id);

        //CHECK IF THERE'S A CART ALREADY IN THE SESSION 
        //If yes, get the cart else return null 
        $oldCart = Session::has('cart')? Session::get('cart'):null; 
        $cart = new Cart($oldCart); 

        //add item to the cart with the id and it's extras
        $cart->add($item, $item->product_id,$request->extras);

        //get item qty 
        $productQty = $cart->items[$request->id.''.$request->extras]['qty'];  


        //add the cart back into the session to previous the previous one without current item
        $request->session()->put('cart', $cart);


        //list of items in cart
        $listOfItems = "";
        $listOfItems .= "<div>
                          <table style='margin-left:0px; height: 70px; border-top:0px;' class='table table-hover' id= 'cartTable'>
                             <tbody id = 'myTBody' style = 'height: 100%; overflow-y: scroll; overflow-x: hidden; display:block; ' >";

        //JUST A TEST FOR DEBUG 
        //return $cart->items; 

        //next thing is the list of items 
        //we need to iterate through the cart and make it into an html text contatonated in a string 
          foreach($cart->items as $product)
          {
              //add a new table row 
              $listOfItems .= 
                      "<tr id = '".$product['item']['product_id']."'>".
                        "<td class= 'qty-edit-td' style = 'width: 45.5%;'>".
                          "<a style = 'border-radius: 9px; height: 5px; padding: 0;' href='' onclick = 'deleteCartItem(".$product['item']['product_id'].")' >".
                            "<span class='fa-stack fa-sm'>".
                              " <i class='fa fa-circle fa-stack-2x text-primary'></i>".
                              " <i class='fa fa-minus fa-stack-1x text-primary' style='color: white; padding-top:1px;'></i>".
                            "</span>".
                          "</a>".
                          "<span style = 'font-size: 13px; font-weight: 13px;' id = 'quantity".$product['item']['product_id']."'>".$product['qty']."</span>
                          <a href='#' style = 'border-radius: 20px;' onclick = 'addItemToCart(".$product['item']['product_id'].")'>".
                            "<span class='fa-stack'>".
                              "<i  class='fa fa-circle fa-stack-2x text-primary'></i>".
                              "<i style='padding-top:1px; color:white;'  class='fa fa-plus fa-stack-1x'></i>".
                            "</span>
                          </a>".
                        "</td>".
                        "<td class='product-name-td' style=' padding-top: 12px;  width:70%; '>". $product['item']['product_name']. "+". $product['extra']. "</td>".
                        "<td  align='right' id='price".$product['item']['product_id']."' style = 'width: 100%; vertical-align:middle;'>£".$product['price']."</td>".
                        "</tr>";
          }
          $listOfItems .= "     </tbody>
                              </table>
                           </div>";

        $subTotal = $cart->totalPrice; 
        $total = $cart->totalPrice; 

        $info = array(
          'productQty' => $productQty,
          'listOfItems' => $listOfItems,
          'subTotal' => $subTotal,
          'total' => $total
        );

        $result_info = json_encode($info);
        //return the total quantity for the 
        return $result_info  ; 

   }

   public function editItemQty(Request $request)
   {
        //just to check if a cart actually exists and create one if not 
        $oldCart = Session::has('cart') ? Session::get('cart') : null; 
        $cart = new Cart($oldCart);

        //so i also have to find the item from the DB
        $item = menu::find($request->id);

        //then call the edit item quantity method witht he qty passed from the ajax request 
        $cart->editQty( $item, $request->id, $request->qty); 

        //then add the cart back to the session 
        Session::put('cart', $cart);

        //And now pass the new total price and the new total qty to the cart page
        $arr = array('totalPrice'=> $cart->totalPrice, 'totalQty' => $cart->totalQty);
        return json_encode($arr);
   }

   public function getCart()
   {
        if(!Session::has('cart'))
        {
            return view('cartViews.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        return view('cartViews.cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
   }

    Public function deleteFromCart(Request $request){
      //first check if theres an old cart
       $oldCart = Session::has('cart') ? Session::get('cart') : null; 
       $cart = new Cart($oldCart);

       $productQty = $cart->items[$request->id]['qty'];  


       //if there is then remove this item from that cart
       $cart->removeItem($request->id);

       //then add the cart back to the session 
       Session::put('cart', $cart);

        //list of items in cart
        $listOfItems = "";
        $listOfItems .= "<div>
                          <table style='margin-left:0px; height: 70px; border-top:0px;' class='table table-hover' id= 'cartTable'>
                             <tbody id = 'myTBody' style = 'height: 100%; overflow-y: scroll; overflow-x: hidden; display:block; ' >";

        //next thing is the list of items 
        //we need to iterate through the cart and make it into an html text contatonated in a string 
          foreach($cart->items as $product)
          {
              //add a new table row 
              $listOfItems .= 
                      "<tr id = '".$product['item']['product_id']."'>".
                        "<td class= 'qty-edit-td' style = 'width: 45.5%;'>".
                          "<a style = 'border-radius: 9px; height: 5px; padding: 0;' href='' onclick = 'deleteCartItem(".$product['item']['product_id'].")' >".
                            "<span class='fa-stack fa-sm'>".
                              " <i class='fa fa-circle fa-stack-2x text-primary'></i>".
                              " <i class='fa fa-minus fa-stack-1x text-primary' style='color: white; padding-top:1px;'></i>".
                            "</span>".
                          "</a>".
                          "<span style = 'font-size: 13px; font-weight: 13px;' id = 'quantity".$product['item']['product_id']."'>".$product['qty']."</span>
                          <a href='#' style = 'border-radius: 20px;' onclick = onclick = 'addItemToCart(".$product['item']['product_id'].")'>".
                            "<span class='fa-stack'>".
                              "<i  class='fa fa-circle fa-stack-2x text-primary'></i>".
                              "<i style='padding-top:1px; color:white;'  class='fa fa-plus fa-stack-1x'></i>".
                            "</span>
                          </a>".
                        "</td>".
                        "<td class='product-name-td' style=' padding-top: 12px;  width:70%; '>". $product['item']['product_name']. "</td>".
                        "<td  align='right' id='price".$product['item']['product_id']."' style = 'width: 100%; vertical-align:middle;'>£".$product['price']."</td>".
                        "</tr>";
          }
          $listOfItems .= "     </tbody>
                              </table>
                           </div>";
          

        $subTotal = $cart->totalPrice; 
        $total = $cart->totalPrice; 

        $info = array(
          'productQty' => $productQty,
          'listOfItems' => $listOfItems,
          'subTotal' => $subTotal,
          'total' => $total,
          'totalQtyInCart' => $cart->totalQty
        );

        $result_info = json_encode($info);
        //return the total quantity for the 
        return $result_info  ; 
    }

    Public function calculateTax(){
        return('this is the tax');
    }

    Public function calculatePrice(){
        return('this is the price');
    }
}
