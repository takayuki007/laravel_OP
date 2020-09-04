<?php

namespace App\Http\Controllers;

use App\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{
    //memoを新しく作成する
    public function new()
    {

        return view('memo.new');
    }

    //memoを新しく登録する
    public function store(Request $request)
    {
        //バリデーション
        $request->validate([
            'memo'=>'required|string|max:200'
        ]);
        $memo = new Memo;
        Auth::user()->memos()->save($memo->fill($request->all()));

        return redirect('home');

    }

    //memoを編集する
    public function edit($id)
    {
        //idが数字以外なら弾く！
        if(!ctype_digit($id)){
            return redirect('home')->with('flash_message', '不正な操作が行われました。');
        }
        //編集なので、ログインユーザーしかできない。そのため、ログインしているかどうかのチェックとログインユーザーの該当memoを取得。
        $memo = Auth::user()->memos()->find($id);
        return view('memo.edit', ['memo'=>$memo]);
    }

    //memoを更新する
    public function update(Request $request, $id)
    {
        //idに数字以外のものが入ったらエラーを弾く。
        if(!ctype_digit($id)){
            return redirect('home')->with('flash_message', '不正な操作が行われました。');
        }
        //バリデーション
        $request->validate([
            'memo'=>'required|string|max:200',
        ]);
        //該当のSTEPを取得
        $memo = Auth::user()->memos()->find($id);
        //値を代入。
        $memo->memo = $request->memo;
        //更新
        $memo->save();

        return redirect()->route('home');
    }

    //memoを表示する
    public function show($id)
    {
        //idに数字以外のものが入ったらエラーを弾く。
        if(!ctype_digit($id)){
            return redirect('memo/index')->with('flash_message', '不正な操作が行われました。');
        }

        $memo = Memo::find($id);
        return view('memo.show', ['memo'=>$memo]);
    }

    //memo一覧を表示
    public function index()
    {
        //memoを全て取ってくる。
        $memos = Memo::latest('updated_at')->get();
        return view('memo.index', ['memos'=>$memos]);
    }


}
