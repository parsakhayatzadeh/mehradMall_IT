@extends('user.layout.master')

@section('content')
    <form action="{{ route('loginRegister') }}" method="post">
        @csrf
@auth
    auth
@endauth
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="default-01"> نام کاربری</label>
            </div>
            <div class="form-control-wrap">
                <input type="text" class="form-control form-control-lg" id="default-01"
                    placeholder="نشانی ایمیل یا نام کاربری خود را وارد کنید" name="name" value="{{ old("name") }}">
            </div>
            @error('name')
                <span class=" alert_requerd bg-danger text-white p-1 rounded  mt-2 " role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="password">رمز عبور</label>

            </div>
            <div class="form-control-wrap">
                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input type="password" class="form-control form-control-lg" id="password" name='password' value="{{ old("password") }}"
                    placeholder="رمز عبور خود را وارد کنید">
            </div>
            @error('password')
                <span class=" alert_requerd bg-danger text-white p-1 rounded   mt-2" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
            @enderror



        </div>
        @if (session('faildPassword'))
            <p class="alert alert-danger">{{ session('faildPassword') }}</p>
        @endif

        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block">ورود</button>
        </div>
    </form>
@endsection
