@extends('Admin.layouts.master')

@section('head-tag')
    <title>سامانه یکپارچه انفورماتیک مهرادمال</title>
@endsection

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">ویرایش ویلن </h4>
                <div class="nk-block-des">
                    <a href="{{ route('vlan.index') }}" class="btn btn-dim btn-outline-info">بازگشت</a>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">اطلاعات واحد</h5>
                </div>
                <form action="{{ route("vlan.update" , $vlan->id) }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    @method("put")
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">نام واحد : </label>
                                <span>{{ $vlan->tejari->name }}</span>

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
                                <label class="form-label" for="full-name-1">شماره ویلن</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="" name="vlan"
                                        value="{{ old('vlan' , $vlan->vlan) }}">
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
                                        value="{{ old('port_sw' , $vlan->port_sw) }}">
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
                                        value="{{ old('sw' , $vlan->sw) }}">
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
                                <label class="form-label" for="full-name-1">وضعیت</label>
                                <div class="form-control-wrap">
                                    <select class="form-control" id="status" name="status">
                                        <option value="0" @if (old('status' , $vlan->status) == '0') selected @endif>غیر فعال
                                        </option>
                                        <option value="1" @if (old('status' , $vlan->status) == '1') selected @endif>فعال
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
