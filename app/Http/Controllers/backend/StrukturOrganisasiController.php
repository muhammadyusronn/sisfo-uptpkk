<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Organizational_structures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    protected $table = 'organizational_structures';
    //
    public function index()
    {
        $data['title'] = 'Data Struktur Organisasi';
        $data['data_struktur'] = Organizational_structures::all();
        // dd($data['data_struktur'][0]);
        return view('backend.struktur.data_struktur', $data);
    }

    public function create(Request $request)
    {
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'struktur_foto'      =>  'required'
            ]);
            $path = $request->file('struktur_foto')->store('struktur_foto');
            $struktur = [
                'struktur_foto'      => $path
            ];
            Organizational_structures::create($struktur);
            return redirect('struktur-organisasi')->with('success', 'Data berhasil ditambah');
        } else {
            $data['title'] = 'Data Struktur Organisasi';
            return view('backend.struktur.create_struktur', $data);
        }
    }

    public function update(Request $request)
    {
        if (isset($_POST['submit'])) {
            if (isset($request->struktur_foto)) {
                Storage::delete([$request->sampul]);
                $path = $request->file('struktur_foto')->store('struktur_foto');
                $struktur = Organizational_structures::find($request->struktur_id);
                $struktur->struktur_foto = $path;
                $struktur->save();
            } else {
                $struktur = Organizational_structures::find($request->struktur_id);
                $struktur->save();
            }
            return redirect('struktur-organisasi')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Stuktur';
            $data['data_stuktur'] = Organizational_structures::where('stuktur_id', $request->stuktur_id)->get();
            return view('backend.stuktur.update_stuktur', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('stuktur_id', $request->stuktur_id)->delete();
        if ($delete) {
            Storage::delete([$request->struktur_foto]);
            return redirect('stuktur-organisasi')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('stuktur-organisasi')->with('failed', 'Data gagal dihapus!');
        }
    }
}
