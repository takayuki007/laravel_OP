@extends('layouts.app')

@section('title','MEMO一覧')
@section('description', 'MEMO一覧のページです。')
@section('keywords', 'MEMO一覧')


@section('content')
<!--c-site-widthで中央よせ-->
<div class="c-site-width">
    <div class="p-index">
        <h1 class="c-title">MEMO INDEX</h1>
        <div class="c-wrapper">
            <!--memo一覧部分始まり-->
            @foreach($memos as $memo)
                <example-component :memo="{{ json_encode($memo->memo) }}" memo-show="{{ route('memo.show', $memo->id) }}"></example-component>
            @endforeach
            <!--memo一覧部分終わり-->
        </div>
    </div>
</div>
@endsection
