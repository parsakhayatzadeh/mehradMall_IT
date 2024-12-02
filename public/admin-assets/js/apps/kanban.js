"use strict";

!function (NioApp, $) {
  "use strict";

  // Variable
  var $win = $(window),
    $body = $('body'),
    breaks = NioApp.Break;
  NioApp.Kanban = function () {
    function titletemplate(title, count) {
      var optionicon = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "more-h";
      return "\n                <div class=\"kanban-title-content\">\n                    <h6 class=\"title\">".concat(title, "</h6>\n                    <span class=\"badge rounded-pill bg-outline-light text-dark\">").concat(count, "</span>\n                </div>\n                <div class=\"kanban-title-content\">\n                    <div class=\"drodown\">\n                        <a href=\"#\" class=\"dropdown-toggle btn btn-sm btn-icon btn-trigger me-n1\" data-bs-toggle=\"dropdown\"><em class=\"icon ni ni-").concat(optionicon, "\"></em></a>\n                        <div class=\"dropdown-menu dropdown-menu-end\">\n                            <ul class=\"link-list-opt no-bdr\">\n                                <li><a href=\"#\"><em class=\"icon ni ni-edit\"></em><span>ویرایش تابلو</span></a></li>\n                                <li><a href=\"#\"><em class=\"icon ni ni-plus-sm\"></em><span>افزودن مسئولیت</span></a></li>\n                                <li><a href=\"#\"><em class=\"icon ni ni-plus-sm\"></em><span>افزودن گزینه</span></a></li>\n                            </ul>\n                        </div>\n                    </div>\n                </div>\n            ");
    }
    var kanban = new jKanban({
      element: '#kanban',
      gutter: '0',
      widthBoard: '320px',
      responsivePercentage: false,
      boards: [{
        'id': '_open',
        'title': titletemplate("باز", "3"),
        'class': 'kanban-light',
        'item': [{
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">به روز رسانی کیت طراحی دش‌لایت</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-primary\"><span>ف</span></div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-primary\">\n                                                        <span>ف‌ت</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">فرشید ترنیان</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>به روز رسانی طراحی رابط کاربری جدید برای قالب @dashlite بر اساس بازخوردها.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-info\">دش‌لایت</span></li>\n                                <li><span class=\"badge bg-warning\">طراحی رابط کاربری</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li class=\"text-danger\"><em class=\"icon ni ni-calendar\"></em><span>زمان تحویل 2 روزه</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>طراحی</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>1</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>4</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }, {
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">پیاده سازی طراحی در قالب</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-dark\"><span>س</span></div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-dark\">\n                                                        <span>س‌د</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">ساناز درویشی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>شروع اجرای طرح جدید در کدنویسی @dashlite.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-info\">دش‌لایت</span></li>\n                                <li><span class=\"badge bg-danger\">HTML</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><em class=\"icon ni ni-calendar\"></em><span>12 آبان 1402</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>فرانت اند</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>2</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }, {
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">نسخه ری اکت دش‌لایت</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-blue\"><span>ح</span></div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-blue\">\n                                                        <span>ح‌ت</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">حمیدرضا توکلی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>طراحی رابط کاربری جدید نسخه ری اکت قالب @dashlite در اسرع وقت.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-info\">دش‌لایت</span></li>\n                                <li><span class=\"badge bg-secondary\">ری اکت</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><em class=\"icon ni ni-calendar\"></em><span>زمان تحویل 5 روزه</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>فرانت اند</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>3</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>5</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }]
      }, {
        'id': '_in_progress',
        'title': titletemplate("در حال پیشرفت", "4"),
        'class': 'kanban-primary',
        'item': [{
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">تحقیق کلمات کلیدی techyspec</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-danger\"><span>ن</span></div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-danger\">\n                                                        <span>ن‌ح</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">نیوشا حقی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>تحقیق کلمات کلیدی برای پروفایل تجاری @techyspec و سایر وب سایت ها، برای بهبود رتبه.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-dark\">Techyspec</span></li>\n                                <li><span class=\"badge bg-success\">سئو</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><em class=\"icon ni ni-calendar\"></em><span>02 مهر 1402</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>تحقیق</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>31</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>21</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }, {
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">طراحی وب سایت فیتنس نکست</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-pink\"><span>م</span></div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-pink\">\n                                                        <span>م‌ح</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">مصطفی حجازی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>طراحی یک وب سایت عالی برای راه اندازی محصول جدید @fitness_next.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-primary\">فیتنس نکست</span></li>\n                                <li><span class=\"badge bg-warning\">طراحی رابط کاربری</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><em class=\"icon ni ni-calendar\"></em><span>زمان تحویل 8 روزه</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>طراحی</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>3</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>5</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }, {
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">طراحی مجدد وب سایت رانرژی</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-purple\">\n                                                <span>ش</span>\n                                            </div>\n                                            <div class=\"user-avatar xs bg-success\">\n                                                <span>م</span>\n                                            </div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-purple\">\n                                                        <span>ش‌م</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">شقایق مولوی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-success\">\n                                                        <span>م‌م</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">مهرداد موسوی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>طراحی دوباره وب سایت قدیمی و تاریخ گذشته به یک وب سایت مدرن و تمیز، با در نظر گرفتن مینیمالیسم.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-gray\">طراحی مجدد</span></li>\n                                <li><span class=\"badge bg-primary\">رانرژی</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><em class=\"icon ni ni-calendar\"></em><span>10 مهر 1402</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>طراحی</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>12</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>8</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }, {
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">اپلیکیشن اندروید Wordlab</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-primary\"><span>ش</span></div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-primary\">\n                                                        <span>ش‌م</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">شقایق مولوی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>اپلیکیشن اندروید Wordlab با ری اکت نیتیو.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-success\">Wordlab</span></li>\n                                <li><span class=\"badge bg-light\">اندروید</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><em class=\"icon ni ni-calendar\"></em><span>21 مهر 1402</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>اپلیکیشن</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>8</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>85</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }]
      }, {
        'id': '_to_review',
        'title': titletemplate("برای مرور", "2"),
        'class': 'kanban-warning',
        'item': [{
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">توسعه Oberlo</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-purple\">\n                                                <span>ف</span>\n                                            </div>\n                                            <div class=\"user-avatar xs bg-success\">\n                                                <span>ی</span>\n                                            </div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-primary\">\n                                                        <span>ف‌ت</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">فرشید ترنیان</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-success\">\n                                                        <span>ی‌ا</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">یاور آقایی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>توسعه کامل وب سایت برای Oberlo - محدود شده.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-info\">Oberlo</span></li>\n                                <li><span class=\"badge bg-danger\">توسعه</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li class=\"text-danger\"><em class=\"icon ni ni-calendar\"></em><span>زمان تحویل 1 روزه</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>بک اند</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>16</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>25</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }, {
          'title': "\n                            <div class=\"kanban-item-title\">\n                                <h6 class=\"title\">اپلیکیشن IOS برای Getsocio</h6>\n                                <div class=\"drodown\">\n                                    <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">\n                                        <div class=\"user-avatar-group\">\n                                            <div class=\"user-avatar xs bg-pink\"><span>م</span></div>\n                                        </div>\n                                    </a>\n                                    <div class=\"dropdown-menu dropdown-menu-end\">\n                                        <ul class=\"link-list-opt no-bdr p-3 g-2\">\n                                            <li>\n                                                <div class=\"user-card\">\n                                                    <div class=\"user-avatar sm bg-pink\">\n                                                        <span>م‌ح</span>\n                                                    </div>\n                                                    <div class=\"user-name\">\n                                                        <span class=\"tb-lead\">مصطفی حجازی</span>\n                                                    </div>\n                                                </div>\n                                            </li>\n                                        </ul>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"kanban-item-text\">\n                                <p>طراحی و توسعه اپلیکیشن Getsocio برای نسخه IOS.</p>\n                            </div>\n                            <ul class=\"kanban-item-tags\">\n                                <li><span class=\"badge bg-dark\">Getsocio</span></li>\n                                <li><span class=\"badge bg-light\">IOS</span></li>\n                            </ul>\n                            <div class=\"kanban-item-meta\">\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li class=\"text-danger\"><em class=\"icon ni ni-calendar\"></em><span>زمان تحویل 4 روزه</span></li>\n                                    <li><em class=\"icon ni ni-notes\"></em><span>فرانت اند</span></li>\n                                </ul>\n                                <ul class=\"kanban-item-meta-list\">\n                                    <li><span>3</span><em class=\"icon ni ni-clip\"></em></li>\n                                    <li><span>5</span><em class=\"icon ni ni-comments\"></em></li>\n                                </ul>\n                            </div>\n                        "
        }]
      }, {
        'id': '_completed',
        'title': titletemplate("تکمیل شده", "0"),
        'class': 'kanban-success',
        'item': []
      }]
    });
    for (var i = 0; i < kanban.options.boards.length; i++) {
      var board = kanban.findBoard(kanban.options.boards[i].id);
      $(board).find("footer").html("<button class=\"kanban-add-task btn btn-block\"><em class=\"icon ni ni-plus-sm\"></em><span>افزودن مسئولیتی دیگر</span></button>");
    }
  };
  NioApp.coms.docReady.push(NioApp.Kanban);
}(NioApp, jQuery);