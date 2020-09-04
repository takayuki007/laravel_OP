<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //登録済STEP部分
        //ログインユーザーのSTEPを取得
        $memos = Auth::user()->memos()->latest('updated_at')->get();

        return view('home')->with(['memos'=>$memos]);
    }

    //ログアウトさせる
    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
