<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets') }}/img/logo.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> </a>
                <a class="text-uppercase">الألمانية ماشين</a>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.dashboard') }}" class="nav-link"><i class="nav-icon fas fa-home text-yellow"></i>  {{ __('words.dashboard') }}</a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class=" fas fa-users text-blue"></i>
                        <p>
                             {{ __('words.users') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.user.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-user') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.user.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.users') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-images text-blue"></i>
                        <p>
                             {{ __('words.slider') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.slider.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-slider') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.slider.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.slider') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-snowflake text-blue"></i>
                        <p>
                             {{ __('words.underslider') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.underslider.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-underslider') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.underslider.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.underslider') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-retweet text-blue"></i>
                        <p>
                             {{ __('words.about') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.about.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-about') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.about.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.about') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-star text-blue"></i>
                        <p>
                             {{ __('words.categories') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.category.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-category') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.category.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.categories') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-box-open text-blue"></i>
                        <p>
                             {{ __('words.products') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.product.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-product') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.product.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.products') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-images text-blue"></i>
                        <p>
                             {{ __('words.gallery') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.gallery.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-gallery') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.gallery.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.gallery') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-ad text-blue"></i>
                        <p>
                             {{ __('words.news') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.news.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-news') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.news.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.news') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-book text-blue"></i>
                        <p>
                             {{ __('words.contact') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.contact.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> {{ __('words.add-contact') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.contact.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.contact') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-book text-blue"></i>
                        <p>
                             {{ __('words.productname') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.productname.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.productname') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-book text-blue"></i>
                        <p>
                             {{ __('words.messages') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.messages.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.messages') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-book text-blue"></i>
                        <p>
                             {{ __('words.setting') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.setting.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('words.setting') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
