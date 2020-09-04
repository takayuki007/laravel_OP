@extends('layouts.app')

@section('title','メモ登録ページ')
@section('description', 'メモ登録ページです。')
@section('keywords', 'メモ登録')

@section('content')
<div class="c-site-width">
    <form action="{{ route('memo.store') }}" class="p-form" method="post">
        @csrf
        <h1 class="c-title">CREATE MEMO</h1>
        <textarea name="memo" class="c-create-memo js-keyup-count js-input-count @error('introduction') c-is-invalid @enderror" placeholder="(200文字まで)" autocomplete="off">{{ old('memo') }}</textarea>
        <div class="c-count-area">
            <p class="c-text"><span class="c-text js-show-count">0</span>/200</p>
        </div>
        @error('memo')
            <span class="c-invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="submit" class="c-btn" value="作成">
    </form>
</div>
@endsection
