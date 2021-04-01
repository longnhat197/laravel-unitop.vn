<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //
    function add(){
        return "Admin: Thêm bài viết";
    }
    function update($id){
        return "Admin: Cập nhật bài viết có id: {$id}";
    }
    function show(){
        return view('admin.post.show');
    }
    function delete($id){
        return "Admin: Xóa bài viết id {$id}";
    }
}
