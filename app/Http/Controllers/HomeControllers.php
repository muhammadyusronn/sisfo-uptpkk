<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeControllers extends Controller
{
    // protected $table = 'announcements';
    
    public function index(){
        $data['data_pengumuman'] = DB::table('announcements')
            ->join('announcement_categories', 'announcements.pengumuman_kategori', '=', 'announcement_categories.kategori_id')
            ->get();
        $data['data_berita'] = DB::table('news')
        ->join('news_categories', 'news.berita_kategori', '=', 'news_categories.kategori_id')
        ->get();
            // dd($data);
        return view('frontend.app', $data);
    }
}
