@extends('layouts.app')

@section('title', 'ログイン')
@section('description', 'ログインのページです。')
@section('keywords', 'ログイン,STEP,ステップ')


@section('content')
<!--c-site-widthで中央よせ-->
<div class="c-site-width">
    <!--form始まり-->
    <form action="{{ route('login')}}" method="post" class="p-form">
        <h1 class="c-title">LOGIN</h1>
        @csrf
        <!--メールアドレス入力部分-->
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
        <!--パスワード入力部分-->
        <label for="password" class="c-label">
            <span class="c-text">パスワード</span><span class="c-required">必須</span><span class="c-text-other">※半角英数字8文字以上</span>
            <input type="password" name="password" class="c-input @error('password') c-is-invalid @enderror" value="{{ old('password') }}" placeholder="パスワードを入力" autocomplete="off">
            @error('password')
            <span class="c-invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>
        <!--パスワード入力部分終わり-->
        <input type="submit" class="c-btn" value="ログイン">
        <!--パスワード忘れ-->
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            パスワードを忘れた方はこちら
        </a>
        @endif
        <!--パスワード忘れ終わり-->
    </form>
    <!--form終わり-->
</div>

<!--<div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->
<!--                <div class="card-header">{{ __('Login') }}</div>-->
<!---->
<!--                <div class="card-body">-->
<!--                    <form method="POST" action="{{ route('login') }}">-->
<!--                        @csrf-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->
<!---->
<!--                            <div class="col-md-6">-->
<!--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->
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
<!--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->
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
<!--                            <div class="col-md-6 offset-md-4">-->
<!--                                <div class="form-check">-->
<!--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->
<!---->
<!--                                    <label class="form-check-label" for="remember">-->
<!--                                        {{ __('Remember Me') }}-->
<!--                                    </label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row mb-0">-->
<!--                            <div class="col-md-8 offset-md-4">-->
<!--                                <button type="submit" class="btn btn-primary">-->
<!--                                    {{ __('Login') }}-->
<!--                                </button>-->
<!---->
<!--                                @if (Route::has('password.request'))-->
<!--                                    <a class="btn btn-link" href="{{ route('password.request') }}">-->
<!--                                        {{ __('Forgot Your Password?') }}-->
<!--                                    </a>-->
<!--                                @endif-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@endsection
