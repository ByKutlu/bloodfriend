@extends('auth.login_main_template')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <span class="login100-form-title p-b-26">
						    KAN <img src="{{asset('material/img/logo.png')}}" width=50/>        DOSTUM
					</span>
                    <br />

<h4 style="text-align: center">
						    Şifreyi Yenile

</h4><br>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="email" value="{{ old('email') }}">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <br />


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button  type="submit" class="login100-form-btn">
                                Gönder
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



@endsection
