<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\News_categories;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    protected $table = 'news';
    public function index()
    {
        $data['title'] = 'Data Berita';
        $data['data_berita'] = DB::table($this->table)
            ->join('news_categories', 'news.berita_id', '=', 'news_categories.kategori_id')
            ->get();
        return view('backend.berita.data_berita', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = 'Form Berita';
        $data['data_kategori'] = News_categories::all();
        if (isset($_POST['submit'])) {
            $path = $request->file('berita_sampul')->store('berita_sampul');
            $this->validate($request, [
                'berita_judul'      => 'required',
                'berita_konten'     => 'required',
                'berita_sampul'     => 'required',
                'berita_status'     =>  'required',
                'berita_kategori'   =>  'required'
            ]);
            $insert = [
                'berita_judul'      => $request->berita_judul,
                'berita_slug'       => SlugService::createSlug(News::class, 'berita_slug', $request->berita_judul),
                'berita_konten'     => $request->berita_konten,
                'berita_sampul'     => $path,
                'berita_author'     =>  '4',
                'berita_status'     =>  $request->berita_status,
                'berita_kategori'   =>  $request->berita_kategori
            ];
            News::insertGetId($insert);
            return redirect('berita')->with('success', 'Data berhasil ditambah');
        } else {
            return view('backend.berita.create_berita', $data);
        };
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('berita_id', $request->berita_id)->delete();
        if ($delete) {
            return redirect('berita')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('failed', 'Data gagal diahapus!');
        }
    }
}
