<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <!-- Login Content Start -->
                <div class="login-register-wrapper">
                    <!-- Login tab Menu -->
                    <nav class="nav login-reg-tab-menu">
                        <a href="{{ route('login') }}"
                            class="{{ request()->routeIs('login') ? ' login-nav' : '' }}">Login</a>
                        <a href="{{ route('register') }}"
                            class="{{ request()->routeIs('register') ? ' register-nav' : '' }}">Register</a>
                    </nav>
                    <!-- Login tab Menu -->

                    <div class="tab-content" id="login-reg-tabcontent">
                        {{ $slot }}
                    </div>

                </div>
                <!-- Login Content End -->
            </div>
        </div>
    </div>
</div>
