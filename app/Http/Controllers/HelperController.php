<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HelperController extends Controller
{
    //
    function url(){
        // 1.Taoj url cow ban
        // $url = url('login');

        // 2.Tạo url qua tên route
        $url = route('post.show');

        // 3.Tạo url qua action
        $url = action('PostController@store');

        // 4.Lấy curent url
        $url = url()->current();
        echo $url;
    }
    function string(){
        // 1.Lấy độ dài chuỗi
        // $str_1 = "Unitop.vn";
        // echo Str::length($str_1);

        // 2.In thường một chuỗi
        // $str = "Bùi Đức Tiến";
        // echo Str::lower($str);
        // echo "<br>";
        // echo Str::upper($str);

        // 3.Tạo chuỗi ngẫu nhiên
        // echo Str::random(5);

        // 4.Loại bỏ ký tự dư thừa
        // $str = Str::of('       Unitop.vn     ')->trim();
        // echo $str;

        // 5.Lấy chuỗi con
        // $str = "Laravel pro";
        // echo Str::of($str)->substr(0,7);

        // 6.tạo slug làm link thân thiện
        // $str = Str::slug('Unitop.vn Học web đi làm');
        // echo $str;

        // 7.Nối chuỗi vào đuôi
        // echo Str::of('Bùi Đức')->append('Tiến');

        // 8.Tìm kiếm và thay thế chuỗi
        // $str = "Laravel 7x";
        // echo Str::of($str)->replace('7x','6x');

        // 9.Cắt chuỗi với số ký tự cho trước
        // $str ='Chủ tịch nước Nguyễn Xuân Phúc dâng hương tưởng nhớ các Vua Hùng';
        // echo Str::of($str)->limit(41);

        // 10.Kiểm tra chuỗi cha chứa chuỗi con
        $str ="Unitop.vn Học lập trình web đi làm";
        echo Str::contains($str, 'Unitop');
    }
}
