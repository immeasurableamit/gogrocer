<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
            <div class="sidebar-heading">Menu</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item active open">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                       <i data-v-da9425c4="" class="material-icons">shopping_cart</i>
                        <span class="sidebar-menu-text"> Products</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse active open" id="apps_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('categories.index') }}">
                                <span class="sidebar-menu-text">Category</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="">
                                <span class="sidebar-menu-text">Brand</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-projects.html">
                                <span class="sidebar-menu-text">Attribute</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-fullcalendar.html">
                                <span class="sidebar-menu-text">Colors</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-chat.html">
                                <span class="sidebar-menu-text">Digital Products</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-email.html">
                                <span class="sidebar-menu-text">Email</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#course_menu">
                                <span class="sidebar-menu-text">Education</span>
                                <span class="ml-auto d-flex align-items-center">
                                    <span class="badge badge-primary">NEW</span>
                                    <span class="sidebar-menu-toggle-icon"></span>
                                </span>
                            </a>
                            <ul class="sidebar-submenu collapse " id="course_menu">
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="app-browse-courses.html">
                                        <span class="sidebar-menu-text">Browse Courses</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="app-course.html">
                                        <span class="sidebar-menu-text">Course</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="app-lesson.html">
                                        <span class="sidebar-menu-text">Lesson</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                        <span class="sidebar-menu-text">Pages</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="pages_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="companies.html">
                                <span class="sidebar-menu-text">Companies</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="stories.html">
                                <span class="sidebar-menu-text">Stories</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="discussions.html">
                                <span class="sidebar-menu-text">Discussions</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="invoice.html">
                                <span class="sidebar-menu-text">Invoice</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="pricing.html">
                                <span class="sidebar-menu-text">Pricing</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account.html">
                                <span class="sidebar-menu-text">Edit Account</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="profile.html">
                                <span class="sidebar-menu-text">User Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="payout.html">
                                <span class="sidebar-menu-text">Payout</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="digital-product.html">
                                <span class="sidebar-menu-text">Digital Product</span>
                                <span class="badge badge-primary ml-auto">NEW</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#login_menu">
                                <span class="sidebar-menu-text">Login</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="login_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="login.html">
                                        <span class="sidebar-menu-text">Login / Background Image</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="login-centered-boxed.html">
                                        <span class="sidebar-menu-text">Login / Centered Boxed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#signup_menu">
                                <span class="sidebar-menu-text">Sign Up</span>
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse" id="signup_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="signup.html">
                                        <span class="sidebar-menu-text">Sign Up / Background Image</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="signup-centered-boxed.html">
                                        <span class="sidebar-menu-text">Sign Up / Centered Boxed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                        <span class="sidebar-menu-text">Layouts</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="layouts_menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="ecommerce.html">
                                <span class="sidebar-menu-text">Default</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fluid-ecommerce.html">
                                <span class="sidebar-menu-text">Full Width Navs</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-ecommerce.html">
                                <span class="sidebar-menu-text">Fixed Navs</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="mini-ecommerce.html">
                                <span class="sidebar-menu-text">Mini Sidebar + Navs</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
            {{-- <div class="sidebar-heading">Components</div> --}}
            {{-- <div class="sidebar-block p-0 mb-0">
                <ul class="sidebar-menu" id="components_menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-buttons.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                            <span class="sidebar-menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-alerts.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                            <span class="sidebar-menu-text">Alerts</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-avatars.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                            <span class="sidebar-menu-text">Avatars</span>
                            <span class="badge badge-primary ml-auto">NEW</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-modals.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                            <span class="sidebar-menu-text">Modals</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-charts.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                            <span class="sidebar-menu-text">Charts</span>
                            <span class="badge badge-warning ml-auto">PRO</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-icons.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                            <span class="sidebar-menu-text">Icons</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-forms.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                            <span class="sidebar-menu-text">Forms</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-range-sliders.html">
                            <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                            <span class="sidebar-menu-text">Range Sliders</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-datetime.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                            <span class="sidebar-menu-text">Time &amp; Date</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-tables.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                            <span class="sidebar-menu-text">Tables</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-tabs.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>
                            <span class="sidebar-menu-text">Tabs</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-loaders.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                            <span class="sidebar-menu-text">Loaders</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-drag.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                            <span class="sidebar-menu-text">Drag &amp; Drop</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-pagination.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                            <span class="sidebar-menu-text">Pagination</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-vector-maps.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                            <span class="sidebar-menu-text">Vector Maps</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-p-a sidebar-b-y">
                    <div class="d-flex align-items-top mb-2">
                        <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
                        <div class="font-weight-bold text-success">60%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                    <span class="avatar avatar-sm mr-2">
                        <img src="https://www.seekpng.com/png/full/356-3562377_personal-user.png" alt="avatar" class="avatar-img rounded-circle">
                    </span>
                    <span class="flex d-flex flex-column">
                        <strong>Adrian Demian</strong>
                        <small class="text-muted text-uppercase">Site Manager</small>
                    </span>
                </a>
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i
                            class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item-text dropdown-item-text--lh">
                            <div><strong>Adrian Demian</strong></div>
                            <div>@adriandemian</div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.html">Dashboard</a>
                        <a class="dropdown-item" href="profile.html">My profile</a>
                        <a class="dropdown-item" href="edit-account.html">Edit account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="sidebar-p-a">
                <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011"
                    class="btn btn-primary btn-block">Purchase &dollar;35</a>
            </div> --}}

        </div>
    </div>
</div>
