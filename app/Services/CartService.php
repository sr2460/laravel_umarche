<?php

namespace App\Services;
use App\Models\Product;
use App\Models\Cart;


class CartService
{
    public static function getItemsInCart($items)
{
    $products = []; //空の配列を準備


    foreach($items as $item){ 
        // カート内の商品を一つずつ処理略(次ページ)[

            $p = Product::findOrFail($item->product_id);
            // $p->shop->owner の時点で返り値が Ownerモデルになり、
            //firstでつなげると毎回 id=1のOwnerが取得されていたので修正しています。
            $owner = $p->shop->owner; // ownerまで
            $ownerInfo = [
            'ownerName' => $owner->name,
            'email' =>  $owner->email
            ];
;
            $product = Product::where('id', $item->product_id)
            ->select('id', 'name', 'price')->get()->toArray(); // 商品情報の配列

            $quantity = Cart::where('product_id', $item->product_id)
            ->select('quantity')->get()->toArray(); // 在庫数の配列

            $result = array_merge($product[0], $ownerInfo, $quantity[0]); // 配列の結合
            array_push($products, $result); //配列に追加

            
        
    }
    
    return $products; // 新しい配列を返す
}

}