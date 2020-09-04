@extends('layouts.app')

@section('title', 'パスワードリセット')
@section('description', 'パスワードリセットのページです。')
@section('keywords', 'パスワードリセット')

@section('content')

<!--c-site-widthで中央よせ-->
<div class="c-site-width">
    <!--form始まり-->
    <form action="{{ route('password.email')}}" method="post" class="p-form">
        <h1 class="c-title">PASSWORD RESET</h1>
        @csrf
        <!--メールアドレス入力部分始まり-->
        <label for="email" class="c-label">
            <span class="c-text">ご登録のEメールにパスワードリセットキーが発行されます</span>
            <input type="email" name="email" class="c-input @error('email') c-is-invalid @enderror" value="{{ old('email') }}" placeholder="メールアドレスを入力" autocomplete="off">
            @error('email')
            <span class="c-invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
            @if (session('status'))
            <div class="alert c-alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

        </label>
        <!--メールアドレス入力部分終わり-->
        <input type="submit" class="c-btn" value="キーを発行する">

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
<!--                    @if (session('status'))-->
<!--                        <div class="alert alert-success" role="alert">-->
<!--                            {{ session('status') }}-->
<!--                        </div>-->
<!--                    @endif-->
<!---->
<!--                    <form method="POST" action="{{ route('password.email') }}">-->
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
<!--                        <div class="form-group row mb-0">-->
<!--                            <div class="col-md-6 offset-md-4">-->
<!--                                <button type="submit" class="btn btn-primary">-->
<!--                                    {{ __('Send Password Reset Link') }}-->
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
