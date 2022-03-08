<?php


namespace App\Http\Controllers;


use App\Http\Requests\ProdutosFormRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Order;

class ProductsController extends Controller
{
    public function create_order(Request $request){   //listrar produtos

       $order = $request->all();
       $totalDiscount = 0;

       if($order['quantity'] > 1){
         $total =  $order['unitPrice'] * $order['quantity'];
       }

       if($order['quantity'] >= 5 || $order['quantity'] == 9 ){
           if($total > 500){
               $totalDiscount = $total-($total * 0.15);
           }
      }

      array_push($order, $total,$totalDiscount, date('Y-m-d'));

      $orderResponse = self::create($order);

        return response->json($orderResponse);

    }

    public function create( $order)
    {
        return ($order);
    }


};
