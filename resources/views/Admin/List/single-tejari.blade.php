@extends('Admin.layouts.master')


@section('head-tag')
    <title>مشخصات {{ $list->name }}</title>
@endsection


@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">واحد/ {{ $list->name }}</h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline">
                                    <li>پلاک: <span class="text-base">{{ $list->unit }}</span></li>
                                    <li>طبقه: <span class="text-base"> {{ $list->floor }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('list.index') }}"
                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>بازگشت</span></a>
                            <a href="html/user-list-regular.html"
                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                    class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div>
                <!-- .nk-block-head -->
                <div class="card card-preview">
                    <div class="card-inner">
                        <ul class="nav nav-tabs mt-n3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1" aria-selected="true"
                                    role="tab" tabindex="-1">اطلاعات واحد</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link " data-bs-toggle="tab" href="#tabItem2" aria-selected="false"
                                    role="tab">اطلاعات روتر</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem3" aria-selected="false"
                                    role="tab" tabindex="-1">اطلاعات تلفن</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem4" aria-selected="false"
                                    role="tab" tabindex="-1">اطلاعات ایپی استاتیک</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem5" aria-selected="false"
                                    role="tab" tabindex="-1">اطلاعات ویلن</a>

                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabItem1" role="tabpanel">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">اطلاعات واحد</h5>

                                        </div>
                                        <!-- .nk-block-head -->
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">نام واحد</span>
                                                    <span class="profile-ud-value">{{ $list->name }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">پلاک</span>
                                                    <span class="profile-ud-value">{{ $list->unit }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">طبقه</span>
                                                    <span class="profile-ud-value"> {{ $list->floor }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">وضعیت</span>
                                                    <span
                                                        class="profile-ud-value">{{ $list->status == 1 ? 'فعال' : 'غیر فعال' }}</span>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->

                                    <!-- .nk-block -->

                                    <!-- .nk-block -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tabItem2" role="tabpanel">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">اطلاعات روتر</h5>

                                        </div>
                                        <!-- .nk-block-head -->
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">ایپی روتر</span>
                                                    <span class="profile-ud-value">{{ $list->routerr->ip_router }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">نام کاربری</span>
                                                    <span class="profile-ud-value">{{ $list->routerr->user }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">رمز عبور</span>
                                                    <span class="profile-ud-value">{{ $list->routerr->password }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">سرعت اینترنت</span>
                                                    <span class="profile-ud-value">{{ $list->routerr->internet_speed }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">وضعیت</span>
                                                    <span class="profile-ud-value">{{ $list->routerr->status == 1 ? 'فعال' : 'غیر فعال' }}</span>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->
                              
                                    <!-- .nk-block -->

                                    <!-- .nk-block -->
                                </div>
                            </div>
                            <div class="tab-pane" id="tabItem3" role="tabpanel">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">اطلاعات تلفن</h5>

                                        </div>
                                        <!-- .nk-block-head -->
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">شماره تلفن</span>
                                                    <span class="profile-ud-value">{{ $list->phone->phone }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">ایپی تلفن</span>
                                                    <span class="profile-ud-value">{{ $list->phone->ip }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">نام کاربری</span>
                                                    <span class="profile-ud-value">{{ $list->phone->user }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">رمز عبور</span>
                                                    <span class="profile-ud-value">{{ $list->phone->password }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">وضعیت</span>
                                                    <span class="profile-ud-value">{{ $list->phone->status == 1 ? "فعال" :'غیر فعال' }}</span>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->

                                    <!-- .nk-block -->

                                    <!-- .nk-block -->
                                </div>
                            </div>
                            <div class="tab-pane" id="tabItem4" role="tabpanel">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">اطلاعات ایپی استاتیک</h5>

                                        </div>
                                        <!-- .nk-block-head -->
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">ویلن</span>
                                                    <span class="profile-ud-value">{{ $list->static->vlan }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">ایپی</span>
                                                    <span class="profile-ud-value">{{ $list->static->ip }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">وضعیت</span>
                                                    <span class="profile-ud-value">{{ $list->static->status == 1 ? 'فعال' : 'غیر فعال' }}</span>
                                                </div>
                                            </div>
                                       
                                        </div>
                                        <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->
                                
                                    <!-- .nk-block -->

                                    <!-- .nk-block -->
                                </div>
                            </div>
                            <div class="tab-pane" id="tabItem5" role="tabpanel">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">اطلاعات ویلن</h5>

                                        </div>
                                        <!-- .nk-block-head -->
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">ویلن</span>
                                                    <span class="profile-ud-value">{{ $list->vlan->vlan }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">پورت سوییچ</span>
                                                    <span class="profile-ud-value">{{ $list->vlan->sw_port }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">شماره سوییچ</span>
                                                    <span class="profile-ud-value">{{ $list->vlan->sw == 1 ? 'فعال' : 'غیر فعال' }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">وشعیت</span>
                                                    <span class="profile-ud-value">{{ $list->vlan->status == 1 ? 'فعال' : 'غیر فعال' }}</span>
                                                </div>
                                            </div>
                                       
                                        </div>
                                        <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->
                                
                                    <!-- .nk-block -->

                                    <!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
