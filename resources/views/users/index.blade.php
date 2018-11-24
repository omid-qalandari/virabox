<!DOCTYPE html>
<html>
<!-- begin::Head -->

<head>
    <meta charset="utf-8">

    <title>داشبورد کاربران</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<!-- end::Head -->

<!-- begin::body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin::Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- BEGIN:: Header -->
        <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">

                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="index.blade.php" class="m-brand__logo-wrapper">
                                    <img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png">
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">

                                <!-- BEGIN: Left Aside Minimize Toggle -->
                                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                    <span></span>
                                </a>

                                <!-- END -->

                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>

                                <!-- END -->

                                <!-- BEGIN: Responsive Header Menu Toggler -->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>

                                <!-- END -->

                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>

                                <!-- BEGIN: Topbar Toggler -->
                            </div>
                        </div>
                    </div>

                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i
                                class="la la-close"></i></button>
                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item" aria-haspopup="true">
                                    <a href="#"><i class="m-menu__link-icon flaticon-add"></i>
                                        <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap"><span class="m-menu__link-text">درخواست جدید</span></span></span></a>
                                </li>
                            </ul>
                        </div>

                        <!-- END: Horizontal Menu -->

                        <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right 	m-dropdown--mobile-full-width"
                                        m-dropdown-toggle="click" m-dropdown-persistent="1">
                                        <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                            <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                            <span class="m-nav__link-icon"><i class="flaticon-alarm"></i></span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                    <span class="m-dropdown__header-title">9 New</span>
                                                    <span class="m-dropdown__header-subtitle">User Notifications</span>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                            <li class="nav-item m-tabs__item">
                                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications"
                                                                    role="tab">
                                                                    Alerts
                                                                </a>
                                                            </li>
                                                            <li class="nav-item m-tabs__item">
                                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events"
                                                                    role="tab">Events</a>
                                                            </li>
                                                            <li class="nav-item m-tabs__item">
                                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs"
                                                                    role="tab">Logs</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="topbar_notifications_notifications"
                                                                role="tabpanel">
                                                                <div class="m-scrollable m-scroller ps" data-scrollable="true"
                                                                    data-height="250" data-mobile-height="200" style="height: 250px; overflow: hidden;">
                                                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                                                        <div class="m-list-timeline__items">
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                <span class="m-list-timeline__text">12 new users
                                                                                    registered</span>
                                                                                <span class="m-list-timeline__time">Just now</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">System shutdown
                                                                                    <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                                                <span class="m-list-timeline__time">14 mins</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">New invoice
                                                                                    received</span>
                                                                                <span class="m-list-timeline__time">20 mins</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">DB overloaded
                                                                                    80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                                                <span class="m-list-timeline__time">1 hr</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">System error -
                                                                                    <a href="#" class="m-link">Check</a></span>
                                                                                <span class="m-list-timeline__time">2 hrs</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span href="" class="m-list-timeline__text">New
                                                                                    order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                                                                <span class="m-list-timeline__time">7 hrs</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">Production
                                                                                    server down</span>
                                                                                <span class="m-list-timeline__time">3 hrs</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">Production
                                                                                    server up</span>
                                                                                <span class="m-list-timeline__time">5 hrs</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                                    </div>
                                                                    <div class="ps__rail-y" style="top: 0px; right: 4px;">
                                                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                <div class="m-scrollable m-scroller ps" data-scrollable="true"
                                                                    data-height="250" data-mobile-height="200" style="height: 250px; overflow: hidden;">
                                                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                                                        <div class="m-list-timeline__items">
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                <a href="" class="m-list-timeline__text">New order
                                                                                    received</a>
                                                                                <span class="m-list-timeline__time">Just now</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                <a href="" class="m-list-timeline__text">New
                                                                                    invoice received</a>
                                                                                <span class="m-list-timeline__time">20 mins</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                <a href="" class="m-list-timeline__text">Production
                                                                                    server up</a>
                                                                                <span class="m-list-timeline__time">5 hrs</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                <a href="" class="m-list-timeline__text">New order
                                                                                    received</a>
                                                                                <span class="m-list-timeline__time">7 hrs</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                <a href="" class="m-list-timeline__text">System
                                                                                    shutdown</a>
                                                                                <span class="m-list-timeline__time">11 mins</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                <a href="" class="m-list-timeline__text">Production
                                                                                    server down</a>
                                                                                <span class="m-list-timeline__time">3 hrs</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                                    </div>
                                                                    <div class="ps__rail-y" style="top: 0px; right: 4px;">
                                                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                    <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                        <span class="">All caught up!<br>No new logs.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                        m-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__userpic">
                                                <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless"
                                                    alt="">
                                            </span>
                                            <span class="m-topbar__username m--hide">Nick</span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless"
                                                                alt="">

                                                            <!--
                                    <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
                                    -->
                                                        </div>
                                                        <div class="m-card-user__details">
                                                            <span class="m-card-user__name m--font-weight-500">Mark Andre</span>
                                                            <a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__section m--hide">
                                                                <span class="m-nav__section-text">Section</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="header/profile.html" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">My Profile</span>
                                                                            <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="header/profile.html" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                    <span class="m-nav__link-text">Activity</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="header/profile.html" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                    <span class="m-nav__link-text">Messages</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="header/profile.html" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                                    <span class="m-nav__link-text">FAQ</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="header/profile.html" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                    <span class="m-nav__link-text">Support</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- END: Topbar -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END:: Header -->


        <!-- begin:: Body-->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <!-- BEGIN:: Rigth Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

                        <!-- dashboard section -->
                        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
                            <a href="index.blade.php"
                               class="m-menu__link "><i
                                    class="m-menu__link-icon flaticon-line-graph"></i><span
                                    class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span
                                    class="m-menu__link-text">داشبورد</span>
											<span class="m-menu__link-badge"><span
                                                    class="m-badge m-badge--danger">2</span></span> </span></span></a>
                        </li>

                        <!-- request section -->
                        <li class="m-menu__section ">
                            <h4 class="m-menu__section-text">درخواست‌ها</h4>
                            <i class="m-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                            <a href="#"
                               class="m-menu__link"><i
                                    class="m-menu__link-icon flaticon-add"></i><span
                                    class="m-menu__link-title"><span class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">درخواست جدید</span> </span></span></a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                            <a href="#"
                               class="m-menu__link"><i
                                    class="m-menu__link-icon flaticon-notes"></i><span
                                    class="m-menu__link-title"><span class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">سابقه درخواست‌ها</span> </span></span></a>
                        </li>

                        <!-- setting section -->
                        <li class="m-menu__section ">
                            <h4 class="m-menu__section-text">تنظیمات</h4>
                            <i class="m-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                            <a href="profile.html"
                               class="m-menu__link"><i
                                    class="m-menu__link-icon flaticon-profile-1"></i><span
                                    class="m-menu__link-title"><span class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">پروفایل</span> </span></span></a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                            <a href="#"
                               class="m-menu__link"><i
                                    class="m-menu__link-icon flaticon-map-location"></i><span
                                    class="m-menu__link-title"><span class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">آدرس</span> </span></span></a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                            <a href="#"
                               class="m-menu__link"><i
                                    class="m-menu__link-icon flaticon-car"></i><span
                                    class="m-menu__link-title"><span class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">خودروها</span> </span></span></a>
                        </li>

                        <!-- credit section -->
                        <li class="m-menu__section ">
                            <h4 class="m-menu__section-text">مالی</h4>
                            <i class="m-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                            <a href="#"
                               class="m-menu__link"><i
                                    class="m-menu__link-icon flaticon-coins"></i><span
                                    class="m-menu__link-title"><span class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">اعتبار</span> </span></span></a>
                        </li>
                    </ul>
                </div>

                <!-- END: Aside Menu -->
            </div>
            <!-- END:: Right Aside -->

        </div>
        <!-- end:: Body-->


        <!-- begin::Footer -->
        <footer class="m-grid__item m-footer">
            <div class="m-container m-container--fluid m-container--full-height m-page__container">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
                                <a href="https://keenthemes.com" class="m-link">2018 &copy; Virabox</a>
							</span>
                    </div>
                    <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                        <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">درباره ما</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">حریم خصوصی</span>
                                </a>
                            </li>
                            <li class="m-nav__item m-nav__item">
                                <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="پشتیبانی" data-placement="left">
                                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end::Footer -->
    </div>
    <!-- end:: Page-->

    <!-- begin:: Global Theme Bundle -->
    <script src="{{ asset('js/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/user.js') }}" type="text/javascript"></script>


    <!-- end:: Page Scripts -->

</body>
<!-- end::body -->

</html>
