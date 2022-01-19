<div>
    <div class="sidebar__nav">
        <span class="bars d-none px-4"></span>
        <div class="navbar-brand d-flex justify-content-center">
            <a class="d-inline-block my-3 sidebar__logo" href="">
                <img class="img-fluid" src="{{ asset('panel/assets/images/logo-dark.svg') }}" alt="">
            </a>
        </div>
        <ul>
            <li class="item-li d-flex align-items-center @if (request()->is('panel/admin/dashboard')) is-active @endif">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="sidebar__icon" fill="currentColor">
                    <path
                        d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM5 5h9v14H5zm11 14V5h3v14z">
                    </path>
                </svg>
                <a href="{{ route('admin.dashboard') }}" class="">پیشخوان</a>


            </li>





            <li class="item-li d-flex align-items-center @if (request()->is('panel/admin/products')) is-active @endif">


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="sidebar__icon" fill="currentColor">
                    <path
                        d="M22 8a.76.76 0 0 0 0-.21v-.08a.77.77 0 0 0-.07-.16.35.35 0 0 0-.05-.08l-.1-.13-.08-.06-.12-.09-9-5a1 1 0 0 0-1 0l-9 5-.09.07-.11.08a.41.41 0 0 0-.07.11.39.39 0 0 0-.08.1.59.59 0 0 0-.06.14.3.3 0 0 0 0 .1A.76.76 0 0 0 2 8v8a1 1 0 0 0 .52.87l9 5a.75.75 0 0 0 .13.06h.1a1.06 1.06 0 0 0 .5 0h.1l.14-.06 9-5A1 1 0 0 0 22 16V8zm-10 3.87L5.06 8l2.76-1.52 6.83 3.9zm0-7.72L18.94 8 16.7 9.25 9.87 5.34zM4 9.7l7 3.92v5.68l-7-3.89zm9 9.6v-5.68l3-1.68V15l2-1v-3.18l2-1.11v5.7z">
                    </path>
                </svg>
                <a class="has-arrow-ui" href="{{ route('admin.products.index') }}">
                    محصولات
                </a>

            </li>


            <li class="item-li d-flex align-items-center  @if (request()->is('panel/admin/categories')) is-active @endif">

                <svg xmlns="http://www.w3.org/2000/svg" class="sidebar__icon" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M11.707 2.293A.997.997 0 0 0 11 2H6a.997.997 0 0 0-.707.293l-3 3A.996.996 0 0 0 2 6v5c0 .266.105.52.293.707l10 10a.997.997 0 0 0 1.414 0l8-8a.999.999 0 0 0 0-1.414l-10-10zM13 19.586l-9-9V6.414L6.414 4h4.172l9 9L13 19.586z">
                    </path>
                    <circle cx="8.353" cy="8.353" r="1.647"></circle>
                </svg>

                <a href="{{ route('admin.categories.index') }}">دسته بندی ها</a>


            </li>



            <li class="item-li d-flex align-items-center @if (request()->is('panel/admin/brands')) is-active @endif">


                <svg xmlns="http://www.w3.org/2000/svg" class="sidebar__icon" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 4H6V2H4v18H3v2h4v-2H6v-5h13a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 9H6V6h12v7z"></path>
                </svg>
                <a class="has-arrow-ui" href="{{ route('admin.brands.index') }}">
                    برند ها
                </a>

            </li>

            <li class="item-li d-flex align-items-center @if (request()->is('panel/admin/shipments')) is-active @endif">


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="sidebar__icon" fill="currentColor">
                    <path
                        d="M20.92 2.38A15.72 15.72 0 0 0 17.5 2a8.26 8.26 0 0 0-6 2.06Q9.89 5.67 8.31 7.27c-1.21-.13-4.08-.2-6 1.74a1 1 0 0 0 0 1.41l11.3 11.32a1 1 0 0 0 1.41 0c1.95-2 1.89-4.82 1.77-6l3.21-3.2c3.19-3.19 1.74-9.18 1.68-9.43a1 1 0 0 0-.76-.73zm-2.36 8.75L15 14.67a1 1 0 0 0-.27.9 6.81 6.81 0 0 1-.54 3.94L4.52 9.82a6.67 6.67 0 0 1 4-.5A1 1 0 0 0 9.39 9s1.4-1.45 3.51-3.56A6.61 6.61 0 0 1 17.5 4a14.51 14.51 0 0 1 2.33.2c.24 1.43.62 5.04-1.27 6.93z">
                    </path>
                    <circle cx="15.73" cy="8.3" r="2"></circle>
                    <path d="M5 16c-2 1-2 5-2 5a7.81 7.81 0 0 0 5-2z"></path>
                </svg>
                <a class="has-arrow-ui" href="{{ route('admin.shipments.index') }}">
                    شیوه ارسال
                </a>

            </li>



            <li class="item-li d-flex align-items-center @if (request()->is('panel/admin/guarantees')) is-active @endif">


                <svg xmlns="http://www.w3.org/2000/svg" class="sidebar__icon" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20.995 6.903a.997.997 0 0 0-.547-.797l-7.973-4a.997.997 0 0 0-.895-.002l-8.027 4c-.297.15-.502.437-.544.767-.013.097-1.145 9.741 8.541 15.008a.995.995 0 0 0 .969-.009c9.307-5.259 8.514-14.573 8.476-14.967zm-8.977 12.944c-6.86-4.01-7.14-10.352-7.063-12.205l7.071-3.523 6.998 3.511c.005 1.87-.481 8.243-7.006 12.217z">
                    </path>
                </svg>
                <a class="has-arrow-ui" href="{{ route('admin.guarantees.index') }}">
                    گارانتی ها
                </a>

            </li>




            <li class="item-li d-flex align-items-center @if (request()->is('panel/admin/logs')) is-active @endif">

                <svg xmlns="http://www.w3.org/2000/svg" class="sidebar__icon" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M21 11h-3V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-6a1 1 0 0 0-1-1zM5 19a1 1 0 0 1-1-1V5h12v13c0 .351.061.688.171 1H5zm15-1a1 1 0 0 1-2 0v-5h2v5z">
                    </path>
                    <path d="M6 7h8v2H6zm0 4h8v2H6zm5 4h3v2h-3z"></path>
                </svg>

                <a href="{{ route('admin.logs.index') }}">گزارشات
                    سیستم</a>
            </li>

            {{-- <li class="item-li i-courses has-sub-ui"><a class="has-arrow-ui" href="#">دوره ها</a>
                <ul class="collapse show">
                    <li><a href="create-new-course.html">ایجاد محصول</a></li>
                    <li><a href="courses.html">لیست محصول</a></li>
                </ul>
            </li>

            <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#"> کاربران</a>
                <ul class="collapse show">
                    <li><a href="users.html">لیست کاربران</a></li>
                </ul>
            </li>
            <li class="item-li i-user-permissions has-sub-ui"><a class="has-arrow-ui" href="#"> مدیریت کاربران</a>
                <ul class="collapse show">
                    <li class="i-roles"><a href="roles-list.html">نقش های کاربری</a></li>
                    <li class="i-permissions"><a href="">مجوز ها</a></li>
                </ul>
            </li>

            <li class="item-li i-slideshow"><a href="slideshow.html">اسلایدشو</a></li>
            <li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>
            <li class="item-li i-articles"><a href="articles.html">مقالات</a></li>
            <li class="item-li i-ads"><a href="ads.html">تبلیغات</a></li>
            <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
            <li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>
            <li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>
            <li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>
            <li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>
            <li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>
            </li>

            <li class="item-li i-web-apps has-sub-ui"><a class="has-arrow-ui" href="#"> وب اپلیکشن ها</a>
                <ul class="collapse show">
                    <li class="i-email"><a href="email-box.html"> ایمیل</a></li>
                    <li class="i-messenger"><a href="">پیامرسان</a></li>
                </ul>
            </li>


            <li class="item-li i-setting"><a href="notification-management.html">تنظیمات</a>
            </li>
            <li class="item-li i-user__inforamtion"><a href="profile.html">اطلاعات کاربری</a></li> --}}

        </ul>
    </div>

</div>
