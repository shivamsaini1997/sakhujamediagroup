
<style>
    .nav-link.active {
    background: rgba(255,255,255,.1) !important;
    color: #fff !important;
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset($globalSetting?$globalSetting->favicon: '')}}" alt="s" class="brand-image"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Sakhuja Group</span>
    </a>
    <ul>

    </ul>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('homepage')}}" class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Homepage</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Homepage
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Banner
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Add Banner</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage Banner</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>

                </li> --}}
                <li class="nav-item">
                    <!-- Parent link for "Digital Assets Youtube" -->
                    <a href="#" class="nav-link {{ request()->routeIs('add-assets-youtube', 'manage-digital-assets-youtube') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Digital Assets Youtube
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Child link for "Add Digital Assets" -->
                        <li class="nav-item">
                            <a href="{{route('add-assets-youtube')}}" class="nav-link {{ request()->routeIs('add-assets-youtube') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Digital Assets</p>
                            </a>
                        </li>
                        <!-- Child link for "Manage Digital Assets" -->
                        <li class="nav-item">
                            <a href="{{route('manage-digital-assets-youtube')}}" class="nav-link {{ request()->routeIs('manage-digital-assets-youtube') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Digital Assets</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- Parent link for "Digital Assets Facebook" -->
                    <a href="#" class="nav-link {{ request()->routeIs('add-assets-facebook', 'manage-digital-assets-facebook') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Digital Assets Facebook
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Child link for "Add Digital Assets" -->
                        <li class="nav-item">
                            <a href="{{route('add-assets-facebook')}}" class="nav-link {{ request()->routeIs('add-assets-facebook') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Digital Assets </p>
                            </a>
                        </li>
                        <!-- Child link for "Manage Digital Assets" -->
                        <li class="nav-item">
                            <a href="{{route('manage-digital-assets-facebook')}}" class="nav-link {{ request()->routeIs('manage-digital-assets-facebook') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Digital Assets</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('add-job','manage-job','job-data') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Jobs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('add-job')}}" class="nav-link {{ request()->routeIs('add-job') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Job</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-job')}}" class="nav-link {{ request()->routeIs('manage-job') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Job</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('job-data')}}" class="nav-link {{ request()->routeIs('job-data') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Job data</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('employee-of-the-month')}}" class="nav-link {{ request()->routeIs('employee-of-the-month') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Employee of the Month</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('performer-of-the-month')}}" class="nav-link {{ request()->routeIs('performer-of-the-month') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Performer of the Month</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('add-catalogue','manage-catalogue') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                             Catalogue
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('add-catalogue')}}" class="nav-link {{ request()->routeIs('add-catalogue') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Catalogue</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-catalogue')}}" class="nav-link {{ request()->routeIs('manage-catalogue') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Catalogue</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('add-Innovative-productions','manage-Innovative-productions','add-productions-studio','manage-productions-studio') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                             Productions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('add-Innovative-productions')}}" class="nav-link {{ request()->routeIs('add-Innovative-productions') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Innovative</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-Innovative-productions')}}" class="nav-link {{ request()->routeIs('manage-Innovative-productions') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Innovative</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('add-productions-studio')}}" class="nav-link {{ request()->routeIs('add-productions-studio') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Production Studio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-productions-studio')}}" class="nav-link {{ request()->routeIs('manage-productions-studio') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Production Studio</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('add-blog-category')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Blog Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add-blog')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-blog')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Blog</p>
                            </a>
                        </li>

                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('add-team','manage-team') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Team
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('add-team')}}" class="nav-link {{ request()->routeIs('add-team') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Add Team</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage-team')}}" class="nav-link {{ request()->routeIs('manage-team') ? 'active' : '' }}">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Manage Team</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('connect-here')}}" class="nav-link {{ request()->routeIs('connect-here') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Connect Here</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('global')}}" class="nav-link {{ request()->routeIs('global') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Global</p>
                    </a>
                </li>

                @isset($user)

                @if($user->type == 1)


                <li class="nav-item">
                    <a href="{{route('userRegister')}}" class="nav-link {{ request()->routeIs('userRegister') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>User</p>
                    </a>
                </li>
                @endif
                @endisset

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class=" nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>
