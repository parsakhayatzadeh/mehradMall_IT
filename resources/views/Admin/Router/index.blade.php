@extends('Admin.layouts.master')

@section('head-tag')
    <title>سامانه یکپارچه انفورماتیک مهرادمال</title>
@endsection

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">لیست روتر واحد ها </h4>
                <div class="nk-block-des">
                    <a href="{{ route("router.create") }}" class="btn btn-dim btn-outline-info">ساخت روتر جدید</a>
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid" />
                                    <label class="custom-control-label" for="uid"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col"><span class="sub-text">نام واحد</span></th>
                            <th class="nk-tb-col"><span class="sub-text">ایپی روتر</span></th>
                            <th class="nk-tb-col "><span class="sub-text">نام کاربری</span></th>
                            <th class="nk-tb-col "><span class="sub-text">رمز عبور</span></th>
                            <th class="nk-tb-col "><span class="sub-text"> سرعیت اینترنت</span></th>
                            <th class="nk-tb-col "><span class="sub-text">وضعیت</span></th>

                            <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($routes as $key => $router)
                            <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid1" />
                                        <label class="custom-control-label" for="uid1"></label>
                                    </div>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="user-card">

                                        <div class="user-info">
                                            <span class="tb-lead">{{ $router->tejari->name ?? '' }} <span
                                                    class="dot dot-success d-md-none ms-1"></span></span>

                                        </div>
                                    </div>
                                </td>
                                <td class="nk-tb-col" data-order="35040.34">
                                    <span class="tb-amount">{{ $router->ip_router ?? '' }}</span>
                                </td>
                                <td class="nk-tb-col " data-order="35040.34">
                                    <span class="tb-amount">{{ $router->user ?? '' }}</span>
                                </td>
                                <td class="nk-tb-col ">
                                    <span>{{ $router->password ?? '' }}</span>

                                </td>

                                <td class="nk-tb-col ">
                                    <span class="tb-status text-success"> مگ{{ $router->internet_speed ?? '' }}</span>
                                </td>
                       

                                <td class="nk-tb-col ">
                                    <div class="custom-control custom-checkbox checked">
                                        <input type="checkbox" class="custom-control-input"
                                            onchange="changeStatus({{ $router->id }})"
                                            data-url="{{ route("router.status", $router->id) }}" name="status"
                                            @if ($router->status == 1) checked @endif id="{{ $router->id }}">
                                        <label class="custom-control-label" for="{{ $router->id }}"></label>
                                    </div>
                                </td>

                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">

                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="{{ route('router.edit', $router->id) }}">
                                                                <i class="icon fa fa-edit"></i>
                                                                <span>ویرایش</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('router.destroy', $router->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button  class="btn  w-100 delete"><i
                                                                        class="icon fa fa-trash text-danger"></i>
                                                                    <span class="text-light">
                                                                        حذف
                                                                    </span>
                                                                </button>
                                                            </form>

                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- .card-preview -->
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        function changeStatus(id) {
            var element = $(`#${id}`);
            var url = element.attr("data-url");
            var elementValue = !element.prop('checked');

            function successToast(message) {
                var successTag =
                    ' <section class="toast" data-delay="5000">\n' +
                    '<section class=" toast-body py-3 d-flex bg-success text-white">\n' +
                    "<strong class='ml-auto'>" + message + "</strong>\n" +
                    "<button type='button' class='mr-2 btn-close' data-dismiss='toast' aria-label='Close'><span aria-hidden='true'>&times;</span></button>\n" +
                    '</section>\n' +
                    '</section>\n'

                $('.toast-wrapper').append(successTag)
                $(".toast").toast("show").delay(5500).queue(() => {
                    $(this).remove()
                })
            }

            function errorToast(message) {
                var successTag =
                    ' <section class="toast" data-delay="5000">\n' +
                    '<section class=" toast-body py-3 d-flex bg-danger text-white">\n' +
                    "<strong class='ml-auto'>" + message + "</strong>\n" +
                    "<button type='button' class='mr-2 btn-close' data-dismiss='toast' aria-label='Close'><span aria-hidden='true'>&times;</span></button>\n" +
                    '</section>\n' +
                    '</section>\n'

                $('.toast-wrapper').append(successTag)
                $(".toast").toast("show").delay(5500).queue(() => {
                    $(this).remove()
                })
            }



            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    if (response.status) {
                        if (response.checked) {
                            element.prop("checked", true);
                            successToast("روتر با موفقیت فعال شد")
                        } else {
                            element.prop("checked", false);
                            successToast("روتر با موفقیت غیر فعال شد")
                        }
                    } else {
                        element.prop("checked", elementValue)
                        errorToast("هنگام ویرایش مشکلی به وجود امده است")
                    }
                },
                error: function() {
                    element.prop("checked", elementValue)
                    errorToast("ارتباط برقرار نشد")

                }
            })

        }
    </script>
    @include('admin.alert.sweetalert.delete-confirm', ['className' => 'delete'])

@endsection