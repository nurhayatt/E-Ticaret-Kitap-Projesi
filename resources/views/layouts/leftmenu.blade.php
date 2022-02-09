@can('admin', auth()->user())
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu" style="font-size:19px">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Broadcast Monitoring</span>
                    </a>

                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                        <li>
                            <a href="{{ route('admin.broadcast.list') }}">
                                <span data-key="t-calendar">Broadcast Database</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.custom.list') }}">
                                <span data-key="t-calendar">Custom Streams</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Buckets</span>
                    </a>

                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                        <li><a href="{{ route('admin.buckets.list') }}" data-key="t-starter-page">Custom Files</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">Account</span>
                    </a>
                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false">
                      <!--  <li><a href="{{-- route('admin.company.list') --}}" data-key="t-login">Company</a></li>-->
                        <li><a href="{{ route('admin.price') }}" data-key="t-register">Price List</a></li>
                        <li><a href="{{ route('admin.ınvocies') }}" data-key="t-register">Invoices</a></li>
                        

                    </ul>
                </li>

            </ul>
        </div>
    </div>
@else
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('superadmin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Broadcast Monitoring</span>
                    </a>

                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                        <li>
                            <a href="{{ route('superadmin.broadcast.list') }}">
                                <span data-key="t-calendar">Broadcast Database</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('superadmin.custom.list') }}">
                                <span data-key="t-calendar">Custom Streams</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Buckets</span>
                    </a>

                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                        <li><a href="{{ route('superadmin.buckets.list') }}" data-key="t-starter-page">Custom Files</a></li>

                    </ul>
                </li>
                   <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">Account</span>
                    </a>
                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false">
                      <!--  <li><a href="{{-- route('superadmin.company.list') --}}" data-key="t-login">Company</a></li>-->
                        <li><a href="{{route('superadmin.users.list')}}" data-key="t-register">Users</a></li>
                        <li><a href="{{ route('superadmin.price') }}" data-key="t-register">Price List</a></li>
                        <li><a href="{{ route('superadmin.ınvocies') }}" data-key="t-register">Invoices</a></li>
                        
                        

                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
@endcan
<hr class="m-0" />


<div class="p-4">
    <h6 class="mb-3">Layout</h6>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
        <label class="form-check-label" for="layout-vertical">Vertical</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
    </div>

    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
        <label class="form-check-label" for="layout-mode-light">Light</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
        <label class="form-check-label" for="layout-mode-dark">Dark</label>
    </div>

    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild"
            onchange="document.body.setAttribute('data-layout-size', 'fluid')">
        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed"
            onchange="document.body.setAttribute('data-layout-size', 'boxed')">
        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
    </div>

    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed" value="fixed"
            onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable"
            value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
    </div>

    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light"
            onchange="document.body.setAttribute('data-topbar', 'light')">
        <label class="form-check-label" for="topbar-color-light">Light</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
            onchange="document.body.setAttribute('data-topbar', 'dark')">
        <label class="form-check-label" for="topbar-color-dark">Dark</label>
    </div>

    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

    <div class="form-check sidebar-setting">
        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default"
            onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
        <label class="form-check-label" for="sidebar-size-default">Default</label>
    </div>
    <div class="form-check sidebar-setting">
        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact"
            onchange="document.body.setAttribute('data-sidebar-size', 'md')">
        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
    </div>
    <div class="form-check sidebar-setting">
        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small"
            onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
    </div>

    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

    <div class="form-check sidebar-setting">
        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light"
            onchange="document.body.setAttribute('data-sidebar', 'light')">
        <label class="form-check-label" for="sidebar-color-light">Light</label>
    </div>
    <div class="form-check sidebar-setting">
        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark"
            onchange="document.body.setAttribute('data-sidebar', 'dark')">
        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
    </div>
    <div class="form-check sidebar-setting">
        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand"
            onchange="document.body.setAttribute('data-sidebar', 'brand')">
        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
    </div>

    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
    </div>

</div>

</div> <!-- end slimscroll-menu-->
</div>
