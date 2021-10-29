<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaControllers extends Controller
{
    protected $table = 'news';
    public function index()
    {
        $data['data_berita'] = DB::table($this->table)
            ->join('news_categories', 'news.berita_kategori', '=', 'news_categories.kategori_id')
            ->get();
            // dd($data);
        return view('frontend.page.berita.index', $data);
    }
}
