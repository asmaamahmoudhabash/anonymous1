<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>

<div id="m_aside_left" class="m-grid__item m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div
            id="m_ver_menu"
            class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
            m-menu-vertical="1"
            m-menu-scrollable="1" m-menu-dropdown-timeout="500"
            style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            {{--<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" ><a  href="index9bfb.html?page=index&amp;demo=default" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap"><span class="m-menu__link-text">Dashboard</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span>  </span></span></a></li><li class="m-menu__section ">--}}
                {{--<h4 class="m-menu__section-text">Components</h4>--}}

            {{--</li>--}}
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="{{url('Dashboard/categories')}}" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Categories</span></a>
            </li>
            </li><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover"><a  href="{{url('Dashboard/posts')}}" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-globe  "></i><span class="m-menu__link-text">posts</span></a>
            </li>
        </ul>

    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->