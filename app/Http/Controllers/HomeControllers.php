<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visi;
use App\Models\Organizational_structures;
use App\Models\Histories;
use App\Models\InformasiKewirausahaan;
use App\Models\SeminarKewirausahaan;
use App\Models\SeminarKarir;
use App\Models\KonselingKarir;
use App\Models\KonselingKewirausahaan;

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
        $data['data_seminar'] = SeminarKarir::all();
        $data['data_konseling'] = KonselingKarir::all();
        $data['data_visimisi'] = Visi::all();
        $data['data_struktur'] = Organizational_structures::all();
        $data['data_sejarah'] = Histories::all();
            // dd($data['data_konseling']);
        return view('frontend.app', $data);
    }

    public function informasiKewirausahaan(){
        $data['data_informasi'] = InformasiKewirausahaan::all();
        return view('frontend.page.kewirausahaan.informasi-kewirausahaan', $data);
    }

    public function seminarKewirausahaan(){
        $data['data_seminar'] = SeminarKewirausahaan::all();
        // dd($data);
        return view('frontend.page.kewirausahaan.seminar-kewirausahaan', $data);
    }

    public function konselingKewirausahaan(){
        $data['data_konseling'] = KonselingKewirausahaan::all();
        // dd($data);
        return view('frontend.page.kewirausahaan.konseling-kewirausahaan', $data);
    }

    // public function visiMisi(){
    //     $data['title'] = 'Visi dan Misi';
    //     $data['data_visimisi'] = Visi::all();
    //     $data['data_struktur'] = Organizational_structures::all();
    //     $data['data_sejarah'] = Histories::all();
    //     return view('frontend.page.about.index', $data);
    // }
}
