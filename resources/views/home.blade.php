@extends('layouts.app')

@section('title','マイページ')
@section('description', 'マイページです。')
@section('keywords', 'マイページ')

@section('content')
<div class="c-site-width">
    <div class="p-index">
        <h1 class="c-title">MY MEMOS</h1>
        <div class="c-wrapper">
            <!--memo一覧部分始まり-->
            @foreach($memos as $memo)
                <example-component :memo="{{ json_encode($memo->memo) }}" memo-show="{{ route('memo.show', $memo->id) }}"></example-component>
            @endforeach
            <!--memo一覧部分終わり-->
        </div>
    </div>
</div>
<!--<div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->
<!--                <div class="card-header">Dashboard</div>-->
<!---->
<!--                <div class="card-body">-->
<!--                    @if (session('status'))-->
<!--                        <div class="alert alert-success" role="alert">-->
<!--                            {{ session('status') }}-->
<!--                        </div>-->
<!--                    @endif-->
<!---->
<!--                    You are logged in!-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@endsection
