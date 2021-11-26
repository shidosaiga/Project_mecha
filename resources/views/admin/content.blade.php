<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('admin/img/logo.png') }}" type="{{asset('admin/image/png') }}" sizes="x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/button.css')}}">
  
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
               <img src="{{asset('admin/img/MeCha/icon_mecha.png')}}" width="60px">
                <span  aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Me'Cha</span>
                    <span class="logo-subtitle">Bubble Tea</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a  href="{{route('index')}}"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>

                <li>
                    <ul class="cat-sub-menu">  
                    </ul>
                </li>

                <li>
                    <a   href="{{route('product')}}" ><span class="icon folder" aria-hidden="true"></span>Product 
                    </a>                  
                </li>

                <li>
                    <a  href="{{route('back')}}">
                        <span class="icon image" aria-hidden="true"></span>Background                        
                    </a>                 
                <li>
                    <a  href="{{route('content')}}">
                        <span class="icon paper" aria-hidden="true"></span>Contents                       
                    </a>
                 
                   
                    <!-- <span class="msg-counter">7</span> -->
                </li>
            </ul>
            <span class="system-menu__title">system</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a href="{{route('promotion')}}"><span class="icon edit" aria-hidden="true"></span>Promotion</a>
                </li>
                <li>
                    <a  href="{{route('typeproduct')}}">
                        <span class="icon category" aria-hidden="true"></span>Typeproduct
                    </a>
                <li>
                    <a href="{{route('user')}}">
                        <span class="icon user-3" aria-hidden="true"></span>Users
                        <!-- <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span  aria-hidden="true"></span>
                        </span> -->
                    </a>
                <li>
                    <a href="{{route('homepage')}}"><span class="icon setting" aria-hidden="true"></span>Homepage</a>
                </li>
            </ul>
        </div>
    </div>
    </aside>
    <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <!-- <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div> -->
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">Thai</a></li>
          
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="{{asset('admin/img/logo.png')}}" type="image/webp"><img src="{{asset('admin/img/logo.png')}}" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="{{route('home')}}">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>






<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  





 
 
 <!-- ! Main -->
 <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h1 class="main-title">Contents</h1>
        <button class="btn-2" ><a href="{{route('addcontent')}}">Add new</a></button>
        
        <div class="row">
          <div class="col-lg-9">
          
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">ID
                      </label>
                    </th>
                    <th>Img</th>
                    <th>Text</th>
                    <th>Crate at</th>
                    <th>Updated at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        1
                      </label>
                    </td>
                     <td><div class="categories-table-img">
                        <img src="{{asset('admin/img/MeCha/12.png')}}" alt="category">
                        </div></td>
                    <td>
                     <p>สำหรับเรื่องรสชาติของชาไข่มุกมีชานั้น </p>
                     <p> จะเน้นไปที่กลิ่นชานมที่มีความมัน </p>
                     <p>  กลมกล่อมไม่หวานมากจนเกินไปลูกค้าสามารถเพิ่มหรือ </p>
                     <p>ลดระดับความหวานได้เองอีกด้วยและที่สำคัญวัตถุดิบของเรา </p>
                     <p> ไม่มีส่วนผสมของไขมันทรานส์จึงมั่นใจได้ว่าปลอดภัยต่อสุขภาพ</p>
                    </td>
                    <td>
                    17.04.2021
                    </td>
                   
                    <td>19.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="{{route('editcontent')}}">Edit</a></li>
                          <li><a href="##">Delete</a></li>                        
                        </ul>
                      </span>
                    </td>
                  </tr>
                  
                 
                </tbody>
              </table>
            </div>
          </div>

          
<!-- Chart library -->
<script src="{{asset('admin/./plugins/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{asset('admin/plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('admin/js/script.js')}}"></script>
</body>

</html>