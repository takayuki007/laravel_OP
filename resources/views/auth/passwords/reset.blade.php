@extends('layouts.app')

@section('title', 'パスワードリセット')
@section('description', 'パスワードリセットのページです。')
@section('keywords', 'パスワードリセット')


@section('content')
<!--c-site-widthで中央よせ-->
<div class="c-site-width">
    <!--form始まり-->
    <form action="{{ route('password.update')}}" method="post" class="p-form">
        <h1 class="c-title">パスワードリセット</h1>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <!--メールアドレス入力部分始まり-->
        <label for="email" class="c-label">
            <span class="c-text">メールアドレス</span><span class="c-required">必須</span>
            <input type="email" name="email" class="c-input @error('email') c-is-invalid @enderror" value="{{ old('email') }}" placeholder="メールアドレスを入力" autocomplete="off">
            @error('email')
            <span class="c-invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </label>
        <!--メールアドレス入力部分終わり-->
        <!--パスワード入力部分始まり-->
        <label for="password" class="c-label">
            <span class="c-text">パスワード</span><span class="c-required">必須</span><span class="c-text">※半角英数字8文字以上</span>
            <input type="password" name="password" class="c-input @error('password') c-is-invalid @enderror" value="{{ old('password') }}" placeholder="パスワードを入力" autocomplete="off">
            @error('password')
            <span class="c-invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </label>
        <!--パスワード入力部分終わり-->
        <!--パスワード確認部分始まり-->
        <label for="password_confirmation" class="c-label">
            <span class="c-text">パスワード確認</span><span class="c-required">必須</span>
            <input type="password" name="password_confirmation" class="c-input @error('password_confirmation') c-is-invalid @enderror" value="{{ old('password_confirmation') }}" placeholder="パスワード確認を入力" autocomplete="off">
            @error('password_confirmation')
            <span class="c-invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </label>
        <!--パスワード確認部分終わり-->
        <input type="submit" class="c-btn" value="リセット">
    </form>
    <!--form終わり-->
</div>

<!--<div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->
<!--                <div class="card-header">{{ __('Reset Password') }}</div>-->
<!---->
<!--                <div class="card-body">-->
<!--                    <form method="POST" action="{{ route('password.update') }}">-->
<!--                        @csrf-->
<!---->
<!--                        <input type="hidden" name="token" value="{{ $token }}">-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->
<!---->
<!--                            <div class="col-md-6">-->
<!--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>-->
<!---->
<!--                                @error('email')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->
<!---->
<!--                            <div class="col-md-6">-->
<!--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">-->
<!---->
<!--                                @error('password')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->
<!---->
<!--                            <div class="col-md-6">-->
<!--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row mb-0">-->
<!--                            <div class="col-md-6 offset-md-4">-->
<!--                                <button type="submit" class="btn btn-primary">-->
<!--                                    {{ __('Reset Password') }}-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@endsection
