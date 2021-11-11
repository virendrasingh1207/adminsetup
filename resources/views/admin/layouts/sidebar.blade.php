<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{route('admin.home')}}" class="w-100"><h2 class="text-center">{{config()->get('app.name')}}</h2></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
          <a class="has-arrow"  href="{{route('admin.home')}}"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <div class="icon_menu">
              <img src="{{ asset('Backend/img/menu-icon/dashboard.svg')}}" alt="">
        </div>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="icon_menu">
                  <img src="{{ asset('Backend/img/menu-icon/2.svg')}}" alt="">
              </div>
              <span>Custom Components</span>
            </a>
            <ul>
              <li><a href="{{route('email_template')}}">Email Template</a></li>
              <li><a href="{{route('admin.cms.list')}}">CMS Page</a></li>
            </ul>
          </li>
        {{--<li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="icon_menu">
                <i class="ti-settings"></i>
                  <!-- <img src="{{ asset('Backend/img/menu-icon/2.svg')}}" alt=""> -->
              </div>
              <span>Slider</span>
            </a>
            <ul>
              <li><a href="{{route('admin.slider.index')}}">List</a></li>
            </ul>
          </li>--}}
          <li class="mm-active">
          <a class="has-arrow"  href="{{route('admin.global_setting.list')}}"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <div class="icon_menu">
                <i class="ti-settings"></i>
        </div>
            <span>Global Setting</span>
          </a>
        </li>
        
      </ul>
    
</nav>