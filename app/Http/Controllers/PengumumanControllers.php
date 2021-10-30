<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanControllers extends Controller
{
    protected $table = 'announcements';
    
    public function index(){
        $data['data_pengumuman'] = DB::table('announcements')
            ->join('announcement_categories', 'announcements.pengumuman_kategori', '=', 'announcement_categories.kategori_id')
            ->get();
            // dd($data);
        return view('frontend.page.pengumuman.index', $data);
    }

    public function details(){
        $data['data_pengumuman'] = DB::table($this->table)
            ->join('announcement_categories', 'announcements.pengumuman_kategori', '=', 'announcement_categories.kategori_id')
            ->get();
            // dd($data);
        return view('frontend.page.pengumuman.detail_pengumuman', $data);
    }
}
