<?php
include_once "../dbkoneksi.php";
include_once "templet/header.php";
include_once "templet/sidebar.php";
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);

   $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM jenis_produk WHERE id = ?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
    
        <main class="main-content">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <a href="../dashboard/index.html" class="navbar-brand">
                <!--Logo start-->
                <!--logo End-->
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">Hope UI</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
            <div class="input-group search-input">
              <span class="input-group-text" id="search-input">
                <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
              <input type="search" class="form-control" placeholder="Search...">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="mt-2 navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="me-0 me-xl-2">
                  <a class="btn btn-primary btn-sm d-flex gap-2 align-items-center" aria-current="page" href="http://hopeui.iqonic.design/pro?utm_source=hopeui-free-demo&utm_medium=hopeui-free-demo&utm_campaign=hopeui-pro-launch" target="_blank">
                    <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.4274 2.5783C20.9274 2.0673 20.1874 1.8783 19.4974 2.0783L3.40742 6.7273C2.67942 6.9293 2.16342 7.5063 2.02442 8.2383C1.88242 8.9843 2.37842 9.9323 3.02642 10.3283L8.05742 13.4003C8.57342 13.7163 9.23942 13.6373 9.66642 13.2093L15.4274 7.4483C15.7174 7.1473 16.1974 7.1473 16.4874 7.4483C16.7774 7.7373 16.7774 8.2083 16.4874 8.5083L10.7164 14.2693C10.2884 14.6973 10.2084 15.3613 10.5234 15.8783L13.5974 20.9283C13.9574 21.5273 14.5774 21.8683 15.2574 21.8683C15.3374 21.8683 15.4274 21.8683 15.5074 21.8573C16.2874 21.7583 16.9074 21.2273 17.1374 20.4773L21.9074 4.5083C22.1174 3.8283 21.9274 3.0883 21.4274 2.5783Z" fill="currentColor"></path>
                      <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M3.01049 16.8079C2.81849 16.8079 2.62649 16.7349 2.48049 16.5879C2.18749 16.2949 2.18749 15.8209 2.48049 15.5279L3.84549 14.1619C4.13849 13.8699 4.61349 13.8699 4.90649 14.1619C5.19849 14.4549 5.19849 14.9299 4.90649 15.2229L3.54049 16.5879C3.39449 16.7349 3.20249 16.8079 3.01049 16.8079ZM6.77169 18.0003C6.57969 18.0003 6.38769 17.9273 6.24169 17.7803C5.94869 17.4873 5.94869 17.0133 6.24169 16.7203L7.60669 15.3543C7.89969 15.0623 8.37469 15.0623 8.66769 15.3543C8.95969 15.6473 8.95969 16.1223 8.66769 16.4153L7.30169 17.7803C7.15569 17.9273 6.96369 18.0003 6.77169 18.0003ZM7.02539 21.5683C7.17139 21.7153 7.36339 21.7883 7.55539 21.7883C7.74739 21.7883 7.93939 21.7153 8.08539 21.5683L9.45139 20.2033C9.74339 19.9103 9.74339 19.4353 9.45139 19.1423C9.15839 18.8503 8.68339 18.8503 8.39039 19.1423L7.02539 20.5083C6.73239 20.8013 6.73239 21.2753 7.02539 21.5683Z" fill="currentColor"></path>
                    </svg>
                    Go Pro
                  </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../assets/images/Flag/flag001.png" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                    <span class="bg-primary"></span>
                    </a>
                    <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                        <div class="m-0 border-0 shadow-none card">
                            <div class="p-0 ">
                                <ul class="p-0 list-group list-group-flush">
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-03.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-04.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-02.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-05.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="../assets/images/Flag/flag-06.png" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                      <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                        <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                      </svg>
                      <span class="bg-danger dots"></span>
                  </a>
                  <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                      <div class="m-0 shadow-none card">
                        <div class="py-3 card-header d-flex justify-content-between bg-primary">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Notifications</h5>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/01.png" alt="">
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Emma Watson Bni</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">95 MB</p>
                                        <small class="float-end font-size-12">Just Now</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/02.png" alt="">
                                  </div>
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">New customer is join</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cyst Bni</p>
                                        <small class="float-end font-size-12">5 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/03.png" alt="">
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Two customer is left</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cyst Bni</p>
                                        <small class="float-end font-size-12">2 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/04.png" alt="">
                                  <div class="w-100 ms-3">
                                    <h6 class="mb-0 ">New Mail from Fenny</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cyst Bni</p>
                                        <small class="float-end font-size-12">3 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                      <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                    </svg>
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="mail-drop">
                      <div class="m-0 shadow-none card">
                        <div class="py-3 card-header d-flex justify-content-between bg-primary">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Message</h5>
                            </div>
                        </div>
                        <div class="p-0 card-body ">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/01.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Bni Emma Watson</h6>
                                    <small class="float-start font-size-12">13 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/02.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                    <small class="float-start font-size-12">20 Apr</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/03.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                    <small class="float-start font-size-12">30 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/04.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Variations Passages</h6>
                                    <small class="float-start font-size-12">12 Sep</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/05.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                    <small class="float-start font-size-12">5 Dec</small>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="../assets/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="../assets/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="../assets/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="../assets/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="../assets/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title">MOCHAMMAD BUFFON</h6>
                        <p class="mb-0 caption-sub-title">Admin</p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../dashboard/app/user-profile.html">Profile</a></li>
                    <li><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../dashboard/auth/sign-in.html">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>          <!-- Nav Header Component Start -->
          <div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Hello BUFF !!</h1>
                                  <p>Data Produk Kamu ada di sini Yaa BUFF</p>
                              </div>
                              <div>
                                  <a href="" class="btn btn-link btn-soft-light">
                                      <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                          <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                                      </svg>
                                      Announcements
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="../assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tambah Produk Klik Disini !!</h4>
                  <a class="btn btn-primary" href="tambah_produk.php">Tambah</a>
               </div>
            </div>
            <div class="card-body">
              
            <!-- isi disini -->
            <form method="POST" action="proses_jenis.php">
    
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Jenis Produk</label>
        <div class="col-8">
            <div class="input-group">
               
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama']?>">
            </div>
        </div>
    </div>
    
   
    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php
                $button = (empty($_idedit)) ? "Simpan":"Update"; 
            ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>" />
            <input type="hidden" name="idedit" value="<?=$_idedit?>" />
        </div>
    </div>
</form>
            </div>
         </div>
      </div>
   </div>
      </div>
      <div class="btn-download">
          <a class="btn btn-success px-3 py-2" href="https://iqonic.design/product/admin-templates/hope-ui-admin-free-open-source-bootstrap-admin-template/" target="_blank" >
              <svg class="icon-24"  width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4" d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z" fill="currentColor"></path>
                  <path d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z" fill="currentColor"></path>
              </svg>
          </a>
      </div>
      <!-- Footer Section Start -->
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="../dashboard/extra/privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="../dashboard/extra/terms-of-service.html">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>document.write(new Date().getFullYear())</script> Hope UI, Made with
                  <span class="">
                      <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->    </main>
    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <svg width="24" viewBox="0 0 24 24" class="animated-rotate icon-24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
      </svg>
    </a>
    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <div class="d-flex align-items-center">
          <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Settings</h3>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body data-scrollbar">
        <div class="row">
          <div class="col-lg-12">
             <h5 class="mb-3">Scheme</h5>
            <div class="d-grid gap-3 grid-cols-3 mb-4">
              <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                  </svg>
                <span class="ms-2 "> Auto </span>
              </div>
    
               <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                  </svg>
                <span class="ms-2 "> Dark  </span>
              </div>
               <div class="btn btn-border active" data-setting="color-mode" data-name="color" data-value="light">
                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                </svg>
                <span class="ms-2 "> Light</span>
              </div>
            </div>
            <hr class="hr-horizontal"> 
            <div class="d-flex align-items-center justify-content-between">
            <h5 class="mt-4 mb-3">Color Customizer</h5>
            <button class="btn btn-transparent p-0 border-0" data-value="theme-color-default" data-info="#079aa2" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Default">
              <svg class="icon-18" width="18"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z" fill="#31BAF1"/>
                <path d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z" fill="#0169CA"/>
              </svg>
            </button>
            </div>
            <div class="grid-cols-5 mb-4 d-grid gap-x-2">
              <div class="btn btn-border bg-transparent"  data-value="theme-color-blue"   data-info="#573BFF" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-1">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#00C3F9" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" /></svg>
              </div>
              <div class="btn btn-border bg-transparent" data-value="theme-color-gray" data-info="#FD8D00" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-2">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#91969E" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" /></svg>
              </div>
              <div class="btn btn-border bg-transparent"  data-value="theme-color-red" data-info="#366AF0" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-3">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#DB5363" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" /></svg>
              </div>
              <div class="btn btn-border bg-transparent"  data-value="theme-color-yellow" data-info="#6410F1" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-4">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#EA6A12" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" /></svg>
              </div>
              <div class="btn btn-border bg-transparent"  data-value="theme-color-pink" data-info="#25C799" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-5">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#E586B3" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" /></svg>
              </div>
              
            </div>
            <hr class="hr-horizontal">
            <h5 class="mb-3 mt-4">Scheme Direction</h5>
            <div class="d-grid gap-3 grid-cols-2 mb-4">
              <div class="text-center">
                <img src="../assets/images/settings/dark/01.png" alt="ltr" class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <img src="../assets/images/settings/light/01.png" alt="ltr" class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <span class=" mt-2"> LTR </span>
              </div>
               <div class="text-center">
                 <img src="../assets/images/settings/dark/02.png" alt="" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <img src="../assets/images/settings/light/02.png" alt="" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <span class="mt-2 "> RTL  </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Color</h5>
            <div class="d-grid gap-3 grid-cols-2 mb-4">
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-white">
                <span class=""> Default </span>
              </div>
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-dark">
                <span class=""> Dark </span>
              </div>
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-color">
                <span class=""> Color </span>
              </div>
              
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-transparent">
                <span class=""> Transparent </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Types</h5>
            <div class="d-grid gap-3 grid-cols-3 mb-4">
              <div class="text-center">
                <img src="../assets/images/settings/dark/03.png" alt="mini" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <img src="../assets/images/settings/light/03.png" alt="mini" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <span class="mt-2">Mini</span>
              </div>
              <div class="text-center">
               <img src="../assets/images/settings/dark/04.png" alt="hover" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
               <img src="../assets/images/settings/light/04.png" alt="hover" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                <span class="mt-2">Hover</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/05.png" alt="boxed" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                 <img src="../assets/images/settings/light/05.png" alt="boxed" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                <span class="mt-2">Boxed</span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
            <div class="d-grid gap-3 grid-cols-2 mb-4">
              <div class="text-center">
                <img src="../assets/images/settings/dark/06.png" alt="rounded-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <img src="../assets/images/settings/light/06.png" alt="rounded-one-side" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <span class="mt-2">Rounded One Side</span>
              </div>
              <div class="text-center">
                <img src="../assets/images/settings/dark/07.png" alt="rounded-all" class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <img src="../assets/images/settings/light/07.png" alt="rounded-all" class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <span class="mt-2">Rounded All</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/08.png" alt="pill-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                 <img src="../assets/images/settings/light/09.png" alt="pill-one-side" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                <span class="mt-2">Pill One Side</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/09.png" alt="pill-all" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                 <img src="../assets/images/settings/light/08.png" alt="pill-all" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                <span class="mt-2">Pill All</span>
              </div>
            </div>
            <hr class="hr-horizontal">
             <h5 class="mt-4 mb-3">Navbar Style</h5>
            <div class="d-grid gap-3 grid-cols-2 ">
              <div class=" text-center">
                <img src="../assets/images/settings/dark/11.png" alt="image" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <img src="../assets/images/settings/light/10.png" alt="image" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <span class="mt-2">Glass</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/10.png" alt="color" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                 <img src="../assets/images/settings/light/11.png" alt="color" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                <span class="mt-2">Color</span>
              </div>
              <div class=" text-center">
                 <img src="../assets/images/settings/dark/12.png" alt="sticky" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                 <img src="../assets/images/settings/light/12.png" alt="sticky" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                <span class="mt-2">Sticky</span>
              </div>
              <div class="text-center">
                  <img src="../assets/images/settings/dark/13.png" alt="transparent" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                  <img src="../assets/images/settings/light/13.png" alt="transparent" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                <span class="mt-2">Transparent</span>
              </div>
              <div class="btn btn-border active col-span-full mt-4 d-block" data-setting="navbar" data-name="navbar-default" data-value="default">
                <span class=""> Default Navbar</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="../assets/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="../assets/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="../assets/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    <script src="../assets/vendor/aos/dist/aos.js"></script>
    
    <!-- App Script -->
    <script src="../assets/js/hope-ui.js" defer></script>
    
  </body>
</html>