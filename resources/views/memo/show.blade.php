@extends('layouts.app')

@section('title','メモ詳細')
@section('description', 'メモ詳細のページです。')
@section('keywords', 'メモ詳細')


@section('content')
<!--c-site-widthで中央よせ-->
<div class="c-site-width">
    <div class="p-form">
        <h1 class="c-title">MEMO DETAIL</h1>
        <div class="c-memo-area">
            <p class="c-text">{{ $memo->memo }}</p>
        </div>
        @if(Auth::user())
            <a href="{{ route('memo.edit', $memo->id) }}" class="c-btn c-link">編集する</a>
        @endif
    </div>
</div>

@endsection
