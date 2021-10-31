<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SeminarKarir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SeminarKarirController extends Controller
{
    //
    protected $table = 'seminar_karirs';

    public function index()
    {
        $data['title'] = 'Data Seminar Karir';
        $data['data_seminar'] = SeminarKarir::all();
        return view('backend.karir.seminar.data_seminar', $data);
    }

    public function create(Request $request)
    {
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'seminar_judul'   =>  'required',
                'seminar_penulis' =>  'required',
                'seminar_konten'  =>  'required',
                'seminar_tanggal' =>  'required',
                'seminar_foto'    =>  'required',
            ]);
            $path = $request->file('seminar_foto')->store('seminar_foto');
            $histories = [
                'seminar_judul'    =>  $request->seminar_judul,
                'seminar_penulis'    =>  $request->seminar_penulis,
                'seminar_konten'    =>  $request->seminar_konten,
                'seminar_tanggal'    =>  $request->seminar_tanggal,
                'seminar_foto'      => $path
            ];
            SeminarKarir::create($histories);
            return redirect('seminar-karir')->with('success', 'Data berhasil ditambah');
        } else {
            $data['title'] = 'Data Sejarah';
            return view('backend.karir.seminar.create_seminar', $data);
        }
    }

    public function update(Request $request)
    {
        // dd($request);
        if (isset($_POST['submit'])) {
            if (isset($request->seminar_foto)) {
                Storage::delete([$request->sampul]);
                $path = $request->file('seminar_foto')->store('seminar_foto');
                $seminar = SeminarKarir::find($request->id);
                $seminar->seminar_judul = $request->seminar_judul;
                $seminar->seminar_penulis = $request->seminar_penulis;
                $seminar->seminar_konten = $request->seminar_konten;
                $seminar->seminar_tanggal = $request->seminar_tanggal;
                $seminar->seminar_foto = $path;
                $seminar->save();
            } else {
                $seminar = SeminarKarir::find($request->id);
                $seminar->seminar_judul = $request->seminar_judul;
                $seminar->seminar_penulis = $request->seminar_penulis;
                $seminar->seminar_konten = $request->seminar_konten;
                $seminar->seminar_tanggal = $request->seminar_tanggal;
                $seminar->save();
            }
            return redirect('seminar-karir')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Seminar Karir';
            $data['data_seminar'] = SeminarKarir::where('id', $request->id)->get();
            return view('backend.karir.seminar.update_seminar', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('id', $request->id)->delete();
        if ($delete) {
            return redirect('seminar-karir')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('seminar-karir')->with('failed', 'Data gagal dihapus!');
        }
    }
}
