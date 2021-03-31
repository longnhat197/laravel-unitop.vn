<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id){
        // return "Thông tin sản phẩm có id: ".$id;
        $price =250000;
        $colors = ['red','green'];
        return view('product.show',compact('id','price','colors'));
    }
    function create(){
        // return "Thêm sản phẩm mới";
        return view('product.create');
    }
    function update($id){
        return "Update sản phẩm có id: ".$id;
    }
}
