<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class searchController extends Controller
{
    public function searchByCategory(Request $request)
    {
        if(!empty($request->input('tanggal')) && empty($request->input('lokasi')) && empty($request->input('suhu'))) {
            $search = $request->tanggal;
            $data = User::join('travel', 'travel.id_user', '=', 'users.id')
                ->Where(function ($query) use($search) {
                    $query->where('users.nama', auth()->user()->nama)
                        ->whereDate('travel.tanggal', $search)
                        ->orWhereYear('travel.tanggal', $search);
                })->get(['users.nama', 'travel.*']);
                if($data) {
                    return view('pages.dashboard', ['data'=>$data])->with('alert', 'Data di temukan.');
                } else {
                    abort(404);
                }
        } elseif(empty($request->input('tanggal')) && !empty($request->input('lokasi')) && empty($request->input('suhu'))) {
            $search = $request->lokasi;
            $data = User::join('travel', 'travel.id_user', '=', 'users.id')
                ->Where(function ($query) use($search) {
                    $query->where('users.nama', auth()->user()->nama)
                        ->where('travel.lokasi', 'like', '%'.$search.'%');
                })->get(['users.nama', 'travel.*']);
                if($data) {
                    return view('pages.dashboard', ['data'=>$data])->with('message', 'Data di temukan.');
                } else {
                    abort(404);
                }
        } elseif(empty($request->input('tanggal')) && empty($request->input('lokasi')) && !empty($request->input('suhu'))) {
            $search = $request->suhu;
            $data = User::join('travel', 'travel.id_user', '=', 'users.id')
                ->Where(function ($query) use($search) {
                    $query->where('users.nama', auth()->user()->nama)
                        ->where('travel.suhu', 'like', '%'.$search.'%');
                })->get(['users.nama', 'travel.*']);
                if($data) {
                    return view('pages.dashboard', ['data'=>$data])->with('alert', 'Data di temukan.');
                } else {
                    abort(404);
                }
        } else {
            $data = DB::table('travel')
                ->join('users', 'users.id', '=', 'travel.id')
                ->select('users.email', 'travel.tanggal', 'travel.lokasi', 'travel.suhu')
                ->where('users.nama', '=', auth()->user()->nama)
                ->get();
                return view('pages.dashboard', ['data'=>$data]);
        }
    }
}
