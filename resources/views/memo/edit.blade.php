@extends('layouts.app')

@section('title','メモ編集ページ')
@section('description', 'メモ編集ページです。')
@section('keywords', 'メモ編集')

@section('content')
<div class="c-site-width">
    <form action="{{ route('memo.update', $memo->id) }}" class="p-form" method="post">
        @csrf
        <h1 class="c-title">EDIT MEMO</h1>
        <textarea name="memo" class="c-create-memo js-keyup-count js-input-count @error('introduction') c-is-invalid @enderror" placeholder="(200文字まで)" autocomplete="off">{{ old('memo', $memo->memo) }}</textarea>
        <div class="c-count-area">
            <p class="c-text"><span class="c-text js-show-count">0</span>/200</p>
        </div>
        @error('memo')
        <span class="c-invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="submit" class="c-btn" value="更新">
    </form>
</div>
@endsection
