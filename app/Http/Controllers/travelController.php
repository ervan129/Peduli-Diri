<?php

namespace App\Http\Controllers;

use App\Models\travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class travelController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function catatanPerjalanan()
    {
        $data = Auth::user()->travel()->get();
        return view('pages.catatan-perjalanan', ['data' => $data]);
    }

    public function inputDataTravel()
    {
        return view('pages.input-data');
    }


    public function simpanTravel(Request $request)
    {
        $id_user = Auth::user()->id;

        $data = [
            'id_user' => $id_user,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'suhu' => $request->suhu
        ];

        // dd($data);

        travel::create($data);
        return redirect('/catatan-perjalanan')->with('message', 'Penyimpanan Berhasil');
    }

    public function hapusPerjalanan($id)
    {
        travel::where('id', $id)
            ->delete();

        return redirect('/catatan-perjalanan');
    }

    public function ubahPerjalanan($id)
    {
        $data = travel::select('*')
            ->where('id', $id)
            ->get();

        return view('pages.ubah-perjalanan', ['data' => $data]);
    }

    public function updatePerjalanan(Request $request)
    {
        $data = travel::where('id', $request->id)
            ->update([
                'tanggal' => $request->tanggal,
                'lokasi' => $request->lokasi,
                'suhu' => $request->suhu
            ]);

        return redirect('/catatan-perjalanan')->with('message', 'Data berhasil diubah!');
    }
}
