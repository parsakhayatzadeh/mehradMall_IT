@extends('Admin.layouts.master')

@section('head-tag')
    <title>سامانه یکپارچه انفورماتیک مهرادمال</title>
@endsection

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">ساخت تلفن جدید</h4>
                <div class="nk-block-des">
                    <a href="{{ route('phone.index') }}" class="btn btn-dim btn-outline-info">بازگشت</a>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">اطلاعات واحد</h5>
                </div>
                <form action="{{ route('phone.store') }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">نام واحد</label>
                                <input class="form-control" type="hidden" name="tejari_id" id="tejari">
                                <select class=" select-2 form-control form-control-sm " id="select_tejari">
                                    <option value="">انتخاب کنید</option>
                                    @foreach ($tejaris as $tejari)
                                        <option value="{{ $tejari->id }}"
                                            @if (old('tejari_id') == $tejari->id) selected @endif>
                                            {{ $tejari->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            @error('tejari_id')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">شماره تلفن</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="phone"
                                        value="{{ old('phone') }}">
                                </div>
                            </div>
                            @error('phone')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">ایپی تلفن</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="ip"
                                        value="{{ old('ip') }}">
                                </div>
                            </div>
                            @error('ip')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">نام کاربری تلفن</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="user"
                                        value="{{ old('user') }}">
                                </div>
                            </div>
                            @error('user')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">رمز تلفن</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="password"
                                        value="{{ old('password') }}">
                                </div>
                            </div>
                            @error('password')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">وضعیت</label>
                                <div class="form-control-wrap">
                                    <select class="form-control" id="status" name="status">
                                        <option value="0" @if (old('status') == '0') selected @endif>غیر فعال
                                        </option>
                                        <option value="1" @if (old('status') == '1') selected @endif>فعال
                                        </option>
                                    </select>
                                </div>
                            </div>
                            @error('status')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" id="btnbtn" class="btn btn-lg btn-primary">ذخیره اطلاعات</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

        $(document).ready(function() {
            // $('.select-2').select2();
            var tags_input = $('#tejari');
            var select_tags = $("#select_tejari");
            var default_tags = tags_input.val();
            var default_data = null;


            select_tags.select2()


            $("#form").submit(function(e) {
                if (select_tags.val() !== null && select_tags.val().length > 0) {
                    var selectedSource = select_tags.val()
                    tags_input.val(selectedSource);
                }
            });

        });
    </script>
@endsection
