<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function show()
    {
        $products = DB::table('products')
            ->get();
        echo "<pre>";
        print_r($products);
        echo "</pre>";
    }
    function add()
    {
        DB::table('products')->insert(
            ['name'=>'Samsung Note 9','price'=>'12500000','user_id'=>5,'product_cat_id'=>2]
        );
        // return "Thêm sản phẩm mới";
    }
    function update($id)
    {
        DB::table('products')
        ->where('id',$id)
        ->update(
            ['product_cat_id'=>2]
        );

    }
    function delete($id){
        DB::table('products')
        ->where('id',$id)
        ->delete();
    }
}
