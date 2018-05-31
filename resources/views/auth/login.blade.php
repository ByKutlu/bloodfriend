@extends('auth.login_main_template')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-26">
						    KAN <img src="{{asset('material/img/logo.png')}}" width=50/>        DOSTUM
					</span>


                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="email" value="{{ old('email') }}">
                        <span class="focus-input100" data-placeholder="Email giriniz"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Şifrenizi giriniz"></span>
                    </div>

                        <div class="checkbox" style="font-size: 15px;">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Beni Hatırla
                        </div>

                    @if ($errors->has('password') || $errors->has('email'))
                        <div style="color: red;">
                                        <strong>Email veya şifre bilgileri hatalı!!</strong>
                                    </div>
                    @endif

                    <br/>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button  type="submit" class="login100-form-btn">
                                Giriş Yap
                            </button>
                        </div>
                    </div>


                    <div class="text-center ">
                        <a class="txt2" href="{{ route('password.request') }}">
                            Şifremi Unuttum
                        </a>

                    </div>
                </form>
                <br>
                <a class="txt2" href="{{ url('androidapp/app-release.apk') }}">
                    <img src="{{asset('material/img/android.png')}}" width=50/>
                    <span style="color: red">Android Uygulamamızı İndirin!</span>
                </a>
                <br>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



@endsection
