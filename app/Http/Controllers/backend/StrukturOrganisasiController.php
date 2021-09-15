<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Organizational_structures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    //
    public function index()
    {
        $data['title'] = 'Data struktur organisasi';
        $data['data_struktur_organisasi'] = Organizational_structures::all();
        return view('backend.struktur_organisasi.data_struktur', $data);
    }

    public function create(Request $request)
    {
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'struktur_foto' => 'required',
            ]);
            $path = $request->file('struktur_foto')->store('struktur_organisasi_foto');
            Organizational_structures::create([
                'struktur_foto' => $path,
            ]);
            return redirect('struktur')->with('success', 'Data berhasil ditambah!');
        } else {
            $data['title'] = 'Form Struktur Organisai';
            return view('backend.struktur_organisasi.create_struktur', $data);
        }
    }

    public function update(Request $request)
    {
        if (isset($_POST['submit'])) {
            Storage::delete([$request->sampul]);
            $path = $request->file('struktur_foto')->store('struktur_organisasi_foto');
            $struktur = Organizational_structures::find($request->struktur_id);
            $struktur->struktur_foto = $path;
            $struktur->save();
            return redirect('struktur')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Struktur Organisasi';
            $data['data_struktur_organisasi'] = Organizational_structures::where('struktur_id', $request->struktur_id)->get();
            return view('backend.struktur_organisasi.update_struktur', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table('organizational_structures')->where('struktur_id', $request->struktur_id)->delete();
        if ($delete) {
            Storage::delete($request->struktur_foto);
            return redirect('struktur')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('struktur')->with('failed', 'Data gagal dihapus!');
        }
    }
}
