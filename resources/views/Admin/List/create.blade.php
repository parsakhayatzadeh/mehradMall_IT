@extends('Admin.layouts.master')

@section('head-tag')
    <title>سامانه یکپارچه انفورماتیک مهرادمال</title>
@endsection

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">ساخت واحد جدید</h4>
                <div class="nk-block-des">
                    <a href="{{ route('list.index') }}" class="btn btn-dim btn-outline-info">بازگشت</a>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">اطلاعات واحد</h5>
                </div>
                <form action="{{ route('list.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">نام واحد</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="name"
                                        value="{{ old('name') }}">
                                </div>
                            </div>
                            @error('name')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">پلاک</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="unit"
                                        value="{{ old('unit') }}">
                                </div>
                            </div>
                            @error('unit')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">طبقه</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="" name="floor"
                                        value="{{ old('floor') }}">
                                </div>
                            </div>
                            @error('floor')
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
                                <label class="form-label" for="full-name-1">شماره ویلن</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="vlan"
                                        value="{{ old('vlan') }}">
                                </div>
                            </div>
                            @error('vlan')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">پورت سوییچ</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="port_sw"
                                        value="{{ old('port_sw') }}">
                                </div>
                            </div>
                            @error('port_sw')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">شماره سوییچ</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="sw"
                                        value="{{ old('sw') }}">
                                </div>
                            </div>
                            @error('sw')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1"> ایپی استاتیک</label>
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
                                <label class="form-label" for="full-name-1">سرعت اینترنت</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control"  id="internet_speed" name="internet_speed"
                                        value="{{ old('internet_speed') }}">
                                </div>
                            </div>
                            @error('internet_speed')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">عکس</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="image" name="image">
                                        <label class="form-file-label" for="image">انتخاب فایل</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                                <span class=" alert_requerd  bg-danger text-white p-1 rounded " role="alert">
                                    <strong>
                                        {{ $message }}

                                    </strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">ذخیره اطلاعات</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
