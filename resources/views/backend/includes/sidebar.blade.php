<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">


            @foreach($utilities as $item)
            <a class="sidebar-brand brand-logo" href="/"><img src="../frontend/assets/uploads/{{$item->whitelogo}}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="/"><img src="../frontend/assets/uploads/{{$item->whitelogo}}" alt="logo" /></a>
            @endforeach
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="../assets/images/profile/{{ Auth::user()->image }}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <div class="dropdown-divider"></div>
                        <a href="{{route('logout')}}" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-logout text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>

                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin_dashboard')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Investment Plans</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('create_plan')}}">Create Plan</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('all_plans')}}">All Plans</a></li>
                        <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li> -->
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon">
                        <i class="mdi mdi-security"></i>
                    </span>
                    <span class="menu-title">Transactions</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('all_investments')}}"> All Investments </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('active_investments')}}">Active Investments </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('pending_investments')}}">Pending Investments </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('completed_investments')}}"> Completed Investments </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('all_withdrawals')}}"> All Withdrawals </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('pending_withdrawals')}}"> Pending Withdrawals </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('completed_withdrawals')}}"> Completed Withdrawals </a></li>
<!-- 
                        <li class="nav-item"> <a class="nav-link" href="">  </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> </a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> </a></li> -->
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('all_users')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-contacts"></i>
                    </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin_users')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Admins</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('all_messages')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>



            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('site_setting')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Site Settings</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('address')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Wallet Addresses</span>
                </a>
            </li>


        </ul>
    </nav>