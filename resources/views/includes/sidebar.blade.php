<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="w-190px mt-3 mb-3 ml-4">
            <img src="{{asset('assets/img/basic/logo-webpress.png')}}" alt="">
        </div>
        
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                <i class="icon icon-chevron-down"></i>
            </a>
            
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                <i class="icon icon-chevron-down"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="{{asset('/assets/img/dummy/u2.png')}}" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="href={{ route('logout') }}" class="list-group-item list-group-item-action" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mr-2 icon-sign-out text-yellow"></i>Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>

            @if (Auth::check())
            <li>
                <a href="{{ url('homepage')}}"><i class="icon icon-mortar-board text-primary s-18">
                    </i> <span>Homepage</span>
                </a>
            </li>
            @endif

            @if (Auth::check())
            <li>
                <a href="{{ url('about')}}"><i class="icon icon-mortar-board text-primary s-18">
                    </i> <span>About WebPRESS</span>
                </a>
            </li>
            @endif

        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                <div class="search-bar">
                    <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                           placeholder="start typing...">
                </div>
                <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                   aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
            </div>
        </div>
    </div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
        </div>
    </div>
</div>

