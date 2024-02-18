<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"> <span class="logo-name">M-TouchExchange</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="menu-header">Main</li> -->
            <li class="dropdown active">
                <a href="{{route('user_dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>My Account</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('edit_user', Auth::user()->id)}}">Edit Profile</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="activity"></i><span>Invest</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('investment-plans')}}">Equity</a></li>
                    <li><a class="nav-link" href="{{route('investment-plans')}}">ETP</a></li>
                    <li><a class="nav-link" href="{{route('investment-plans')}}">Options trading</a></li>
                    <li><a class="nav-link" href="{{route('investment-plans')}}">Real Estate</a></li>
                </ul>
            </li>



            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="credit-card"></i><span>Withdraw</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('withdraw')}}">Withdrawal</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>History</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('deposit-history')}}">Deposit History</a></li>
                    <li><a class="nav-link" href="{{route('withdrawal-history')}}">Withdrawal History</a></li>
                    <li><a class="nav-link" href="{{route('pending-history')}}">Pending History</a></li>
                    <li><a class="nav-link" href="{{route('confirmed-history')}}">Confirmed History</a></li>
                    <li><a class="nav-link" href="{{route('active-history')}}">Active Investments</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="{{route('edit_user', Auth::user()->id)}}" class="nav-link"><i data-feather="link"></i><span>Referral Link</span></a>
            </li>
            <li class="dropdown">
                <a href="{{route('user-support')}}" class="nav-link"><i data-feather="phone"></i><span>Support</span></a>

            </li>
            <li class="dropdown">
                <a  href="{{route('logout')}}" class="nav-link"><i data-feather="lock"></i><span>Logout</span></a>
            </li>

    </aside>
</div>