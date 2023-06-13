<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Category;
use App\Models\Author;

class ArticleController extends Controller
{
    public function GetALl(){
        // $category_id = DB::select('SELECT ma_tloai FROM theloai WHERE ten_tloai = ?',[$category]);
        // $results = DB::select('SELECT ten_bhat FROM baiviet bv ,theloai tl WHERE bv.ma_tloai = tl.ma_tloai AND tl.ten_tloai = ?',[$category]);

        $results = Article::all();
        return view('vwMusic',compact('results'));

    }
    public function GetLoveSong(){
        $results = Article::where('ma_tloai',4)->get();
        return view('vwMusic',compact('results'));
    }
    public function GetSongDetails(){
        $results = DB::select('SELECT * FROM baiviet bv JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai JOIN tacgia tg ON tg.ma_tgia = bv.ma_tgia');
        
        return view('vwMusic',compact('results'));   
    }
    public function CountByCategory(){
        $max =0;
        for($i = 0 ; $i < Category::Select('ma_tloai')->count(); $i++){
            $row = Article::where('ma_tloai',$i)->get()->count();
            if($row > $max){
                $max = $row;
                $id = $i;
            }
    }
        $result = Category::where('ma_tloai',$id)->get();
        return view('articles.count',compact('result'));   
    }
    public function CountByAuthor(){
        $max = 0;
        for($i = 0 ; $i < Author::Select('ma_tgia')->count(); $i++){
            $row = Article::where('ma_tgia',$i)->get()->count();
            if($row > $max){
                $max = $row;
                $id = $i;
            }
    }
        $result = Author::where('ma_tgia',$id)->get();
        return view('authors.count',compact('result'));   
        
    }
    public function sp_DSBaiViet($name){
        $id = Category::where('ten_tloai',$name)->get();
        $results = DB::select('SELECT * FROM baiviet bv JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai AND tl.ten_tloai = ? JOIN tacgia tg ON tg.ma_tgia = bv.ma_tgia',[$name]);
        return view('vwMusic',compact('results'));
    }
}