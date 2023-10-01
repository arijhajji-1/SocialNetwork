
<!doctype html>
<html lang="en" class="theme-fs-md">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SocialV | Responsive Bootstrap 5 Admin Dashboard Template</title>
  <!-- Config Options -->
  <!-- End Config Options -->


  <link rel="shortcut icon" href="   {{ asset ('Admin/images/favicon.ico') }}" />

  <link rel="stylesheet" href="  {{ asset ('Admin/css/libs.min.css') }}">


  
  <link rel="stylesheet" href="{{ asset ('Admin/css/socialv.css?v=5.0.2') }}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
  <!-- flatpickr css -->
  
  <link rel="stylesheet" href="{{ asset ('Admin/vendor/flatpickr/dist/flatpickr.min.css') }}" />
  <!-- Sweetlaert2 css -->
 
  <link rel="stylesheet" href=" {{ asset ('Admin/vendor/sweetalert2/dist/sweetalert2.min.css') }}"/>
  
  <!-- vanillajs css -->
   
  <link rel="stylesheet" href="{{ asset ('Admin/vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}">
  <!-- color customizer css -->

  <link rel="stylesheet" href="  {{ asset ('Admin/css/customizer.css') }}">
</head>

<body class="  ">
  <!-- loader Start -->
  <div id="loading">
        <div id="loading-center">
        </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="iq-top-navbar">
     <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar p-lg-0">
           <div class="container-fluid navbar-inner">
              <div class="d-flex align-items-center gap-3">
                  
                 <a href="{{ asset ('resources\views\layouts\dashboardAdmin.blade.php') }}" class="d-flex align-items-center gap-2 iq-header-logo d-none d-lg-flex">
                    <svg width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M1.67733 9.50001L7.88976 20.2602C9.81426 23.5936 14.6255 23.5936 16.55 20.2602L22.7624 9.5C24.6869 6.16666 22.2813 2 18.4323 2H6.00746C2.15845 2 -0.247164 6.16668 1.67733 9.50001ZM14.818 19.2602C13.6633 21.2602 10.7765 21.2602 9.62181 19.2602L9.46165 18.9828L9.46597 18.7275C9.48329 17.7026 9.76288 16.6993 10.2781 15.8131L12.0767 12.7195L14.1092 16.2155C14.4957 16.8803 14.7508 17.6132 14.8607 18.3743L14.9544 19.0239L14.818 19.2602ZM16.4299 16.4683L19.3673 11.3806C18.7773 11.5172 18.172 11.5868 17.5629 11.5868H13.7316L15.8382 15.2102C16.0721 15.6125 16.2699 16.0335 16.4299 16.4683ZM20.9542 8.63193L21.0304 8.5C22.1851 6.5 20.7417 4 18.4323 4H17.8353L17.1846 4.56727C16.6902 4.99824 16.2698 5.50736 15.9402 6.07437L13.8981 9.58676H17.5629C18.4271 9.58676 19.281 9.40011 20.0663 9.03957L20.9542 8.63193ZM14.9554 4C14.6791 4.33499 14.4301 4.69248 14.2111 5.06912L12.0767 8.74038L10.0324 5.22419C9.77912 4.78855 9.48582 4.37881 9.15689 4H14.9554ZM6.15405 4H6.00746C3.69806 4 2.25468 6.50001 3.40938 8.50001L3.4915 8.64223L4.37838 9.04644C5.15962 9.40251 6.00817 9.58676 6.86672 9.58676H10.2553L8.30338 6.22943C7.9234 5.57587 7.42333 5.00001 6.8295 4.53215L6.15405 4ZM5.07407 11.3833L7.88909 16.2591C8.05955 15.7565 8.28025 15.2702 8.54905 14.8079L10.4218 11.5868H6.86672C6.26169 11.5868 5.66037 11.5181 5.07407 11.3833Z" fill="currentColor"/>
                    </svg>
                    <h3 class="logo-title d-none d-sm-block" data-setting="app_name">SocialV</h3>
                 </a>
                 <a class="sidebar-toggle" data-toggle="sidebar" data-active="true" href="javascript:void(0);">
                    <div class="icon material-symbols-outlined iq-burger-menu">
                       menu
                    </div>
                 </a>
              </div>
              <div class="d-block d-md-none">
                 <a href="{{ asset ('resources\views\layouts\dashboardAdmin.blade.php') }}" class="d-flex align-items-center gap-2 iq-header-logo">
                       <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.67733 9.50001L7.88976 20.2602C9.81426 23.5936 14.6255 23.5936 16.55 20.2602L22.7624 9.5C24.6869 6.16666 22.2813 2 18.4323 2H6.00746C2.15845 2 -0.247164 6.16668 1.67733 9.50001ZM14.818 19.2602C13.6633 21.2602 10.7765 21.2602 9.62181 19.2602L9.46165 18.9828L9.46597 18.7275C9.48329 17.7026 9.76288 16.6993 10.2781 15.8131L12.0767 12.7195L14.1092 16.2155C14.4957 16.8803 14.7508 17.6132 14.8607 18.3743L14.9544 19.0239L14.818 19.2602ZM16.4299 16.4683L19.3673 11.3806C18.7773 11.5172 18.172 11.5868 17.5629 11.5868H13.7316L15.8382 15.2102C16.0721 15.6125 16.2699 16.0335 16.4299 16.4683ZM20.9542 8.63193L21.0304 8.5C22.1851 6.5 20.7417 4 18.4323 4H17.8353L17.1846 4.56727C16.6902 4.99824 16.2698 5.50736 15.9402 6.07437L13.8981 9.58676H17.5629C18.4271 9.58676 19.281 9.40011 20.0663 9.03957L20.9542 8.63193ZM14.9554 4C14.6791 4.33499 14.4301 4.69248 14.2111 5.06912L12.0767 8.74038L10.0324 5.22419C9.77912 4.78855 9.48582 4.37881 9.15689 4H14.9554ZM6.15405 4H6.00746C3.69806 4 2.25468 6.50001 3.40938 8.50001L3.4915 8.64223L4.37838 9.04644C5.15962 9.40251 6.00817 9.58676 6.86672 9.58676H10.2553L8.30338 6.22943C7.9234 5.57587 7.42333 5.00001 6.8295 4.53215L6.15405 4ZM5.07407 11.3833L7.88909 16.2591C8.05955 15.7565 8.28025 15.2702 8.54905 14.8079L10.4218 11.5868H6.86672C6.26169 11.5868 5.66037 11.5181 5.07407 11.3833Z" fill="currentColor"/>
                       </svg>
                    <h3 class="logo-title d-none d-sm-block" data-setting="app_name">SocialV</h3>
                 </a>
              </div>
              <div class="iq-search-bar device-search  position-relative">
                 <form action="#" class="searchbox" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">
                    <a class="search-link d-none d-lg-block" href="javascript:void(0);" >
                       <span class="material-symbols-outlined">search</span>
                    </a>
                    <input type="text" class="text search-input form-control bg-soft-primary  d-none d-lg-block" placeholder="Search here...">
                    <a class="d-lg-none d-flex" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">
                       <span class="material-symbols-outlined">search</span>
                    </a>
                 </form>
                 <div class="modal fade search-modal" id="exampleModalFullscreenSm" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-fullscreen-lg-down">
                       <div class="modal-content">
                          <div class="modal-header py-2">
                             <div class="d-flex align-items-center justify-content-between d-lg-none w-100">
                                <form action="#" class="searchbox w-50" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">
                                   <a class="search-link" href="javascript:void(0);" >
                                      <span class="material-symbols-outlined">search</span>
                                   </a>
                                   <input type="text" class="text search-input form-control bg-soft-primary" placeholder="Search here...">
                                </form>
                                <a href="javascript:void(0);" class="material-symbols-outlined text-dark" data-bs-dismiss="modal">close</a>
                             </div>
                             <div class="d-none d-lg-flex align-items-center justify-content-between w-100">
                                <h4 class="modal-title" id="exampleModalFullscreenLabel">Recent</h4>
                                <a  class="text-dark" href="javascript:void(0);">Clear All</a>
                             </div>
                          </div>
                          <div class="modal-body p-0">
                             <div class="d-flex d-lg-none align-items-center justify-content-between w-100 p-3 pb-0">
                                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Recent</h5>
                                <a href="javascript:void(0);" class="text-dark">Clear All</a>
                             </div>
                             <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                   <div class="flex-shrink-0">
                                    
                                      <img src="{{ asset ('Admin/images/page-img/19.jpg') }}" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                   </div>
                                   <div class="d-flex flex-column ms-3 w-100">
                                      <a href="javascript:void(0);" class="h5">Paige Turner</a>
                                      <span>Paige001</span>
                                   </div>
                                   <div class="d-flex align-items-center ms-auto">
                                      <a href="javascript:void(0);" class="me-3 d-flex align-items-center"><small>Follow</small> </a>
                                      <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                                   </div>
                             </div>
                             <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                <div class="flex-shrink-0">
                                    
                                   <img src="{{ asset ('Admin/images/page-img/18.jpg') }}" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                </div>
                                <div class="d-flex flex-column ms-3 w-100">
                                   <a href="javascript:void(0);" class="h5">Monty Carlo</a>
                                   <span>Carlo.m</span>
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                   <a href="javascript:void(0);" class="me-3 d-flex align-items-center"><small>Unfollow</small> </a>
                                   <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                                </div>
                             </div>
                             <div class="d-flex align-items-center search-hover py-2 px-3 border-bottom">
                                <div class="flex-shrink-0">

                                   <img src="{{ asset ('Admin/images/page-img/20.jpg') }}" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                </div>
                                <div class="d-flex flex-column ms-3 w-100">
                                   <a href="javascript:void(0);" class="h5">Paul Molive</a>
                                   <span>Paul.45</span>
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                   <a href="javascript:void(0);" class="me-3 d-flex align-items-center"><small>Request</small> </a>
                                   <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                                </div>
                             </div>
                             <div class="">
                                <h4 class="px-3 py-2">Suggestions</h4>
                                <div class="suggestion-card px-3">
                                   <div class="text-center story">
                                      <div class="story-profile">
                                        
                                         <img src="{{ asset ('Admin/images/page-img/20.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Ammy Paul</a>
                                      </div>
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                   </div>
                                   <div class="text-center story ">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/21.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Roger Carlo</a>
                                      </div> 
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>                               
                                   </div>
                                   <div class="text-center story ">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/22.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Justin Molive</a>
                                      </div>
                                   <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>                               
                                   </div>
                                   <div class="text-center story">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/23.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Roy Fisher</a>
                                      </div>
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Request</small> </a>                               
                                   </div>
                                   <div class="text-center story">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/24.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Johan Carlo</a>
                                      </div>
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>                               
                                   </div>
                                   <div class="text-center story">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/09.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Medra Miles</a>
                                      </div>
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>                               
                                   </div>
                                   <div class="text-center story">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/03.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Aohan Paul</a>
                                      </div>
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Request</small> </a>                               
                                   </div>
                                   <div class="text-center story">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/02.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Rokni Joy</a>
                                      </div>
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>                               
                                   </div>
                                   <div class="text-center story">
                                      <div class="story-profile">
                                         <img src="{{ asset ('Admin/images/page-img/01.jpg') }}" class=" avatar-50 rounded-pill" alt="#">
                                         <a href="javascript:void(0);"class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Sepid Ryan</a>
                                      </div>
                                      <a href="javascript:void(0);" class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>                               
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div> 
              <ul class="navbar-nav navbar-list">
                 <li class="nav-item">
                    <a href="{{ asset ('resources\views\layouts\dashboardAdmin.blade.php') }}" class="d-flex align-items-center">
                       <i class="material-symbols-outlined">home</i>
                    </a>
                 </li>
                 <li class="nav-item dropdown d-none d-lg-block">
                    <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" id="group-drop" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                       <span class="material-symbols-outlined">group</span>
                    </a>
                    <div class="sub-drop sub-drop-large dropdown-menu " aria-labelledby="group-drop">
                       <div class="card shadow-none m-0">
                          <div class="card-header d-flex justify-content-between bg-primary">
                             <div class="header-title">
                                <h5 class="mb-0 text-white">Friend Request</h5>
                             </div>
                             <small class="badge  bg-light text-dark ">4</small>
                          </div>
                          <div class="card-body p-0">
                             <div class="iq-friend-request">
                                <div
                                   class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                         alt="" loading="lazy">
                                      <div class="ms-3">
                                         <h6 class="mb-0 ">Jaques Amole</h6>
                                         <p class="mb-0">40 friends</p>
                                      </div>
                                   </div>
                                   <div class="d-flex align-items-center">
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-primary rounded">Confirm</a>
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-secondary rounded">Delete Request</a>
                                   </div>
                                </div>
                             </div>
                             <div class="iq-friend-request">
                                <div
                                   class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                         alt="" loading="lazy">
                                      <div class="ms-3">
                                         <h6 class="mb-0 ">Lucy Tania</h6>
                                         <p class="mb-0">12 friends</p>
                                      </div>
                                   </div>
                                   <div class="d-flex align-items-center">
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-primary rounded">Confirm</a>
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-secondary rounded">Delete Request</a>
                                   </div>
                                </div>
                             </div>
                             <div class="iq-friend-request">
                                <div
                                   class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <img class="avatar-40 rounded" src="../assets/images/user/03.jpg"
                                         alt="" loading="lazy">
                                      <div class=" ms-3">
                                         <h6 class="mb-0 ">Manny Petty</h6>
                                         <p class="mb-0">3 friends</p>
                                      </div>
                                   </div>
                                   <div class="d-flex align-items-center">
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-primary rounded">Confirm</a>
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-secondary rounded">Delete Request</a>
                                   </div>
                                </div>
                             </div>
                             <div class="iq-friend-request">
                                <div
                                   class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <img class="avatar-40 rounded" src="../assets/images/user/04.jpg"
                                         alt="" loading="lazy">
                                      <div class="ms-3">
                                         <h6 class="mb-0 ">Marsha Mello</h6>
                                         <p class="mb-0">15 friends</p>
                                      </div>
                                   </div>
                                   <div class="d-flex align-items-center">
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-primary rounded">Confirm</a>
                                      <a href="javascript:void(0);"
                                         class="me-3 btn btn-secondary rounded">Delete Request</a>
                                   </div>
                                </div>
                             </div>
                             <div class="text-center">
                                <a href="javascript:void(0);" class=" btn text-primary">View More Request</a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="nav-item dropdown d-none d-lg-block">
                    <a href="javascript:void(0);" class="search-toggle dropdown-toggle d-flex align-items-center" id="notification-drop" data-bs-toggle="dropdown">
                       <i class="material-symbols-outlined">notifications</i>
                    </a>
                    <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                       <div class="card shadow-none m-0">
                          <div class="card-header d-flex justify-content-between bg-primary">
                             <div class="header-title bg-primary">
                                <h5 class="mb-0 text-white">All Notifications</h5>
                             </div>
                             <small class="badge  bg-light text-dark">4</small>
                          </div>
                          <div class="card-body p-0">
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="{{ asset ('images/user/01.jpg') }}" alt="">
                                   </div>
                                   <div class="ms-3 w-100">
                                      <h6 class="mb-0 ">Emma Watson Bni</h6>
                                      <div class="d-flex justify-content-between align-items-center">
                                         <p class="mb-0">95 MB</p>
                                         <small class="float-right font-size-12">Just Now</small>
                                      </div>
                                   </div>
                                </div>
                             </a>
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class="ms-3 w-100">
                                      <h6 class="mb-0 ">New customer is join</h6>
                                      <div class="d-flex justify-content-between align-items-center">
                                         <p class="mb-0">Cyst Bni</p>
                                         <small class="float-right font-size-12">5 days ago</small>
                                      </div>
                                   </div>
                                </div>
                             </a>
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class="ms-3 w-100">
                                      <h6 class="mb-0 ">Two customer is left</h6>
                                      <div class="d-flex justify-content-between align-items-center">
                                         <p class="mb-0">Cyst Bni</p>
                                         <small class="float-right font-size-12">2 days ago</small>
                                      </div>
                                   </div>
                                </div>
                             </a>
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class="w-100 ms-3">
                                      <h6 class="mb-0 ">New Mail from Fenny</h6>
                                      <div class="d-flex justify-content-between align-items-center">
                                         <p class="mb-0">Cyst Bni</p>
                                         <small class="float-right font-size-12">3 days ago</small>
                                      </div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="nav-item dropdown d-none d-lg-block">
                    <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" id="mail-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="material-symbols-outlined">mail</i>
                       <span class="mobile-text d-lg-none ms-3">Message</span>
                    </a>
                    <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                       <div class="card shadow-none m-0">
                          <div class="card-header d-flex justify-content-between bg-primary">
                             <div class="header-title bg-primary">
                                <h5 class="mb-0 text-white">All Message</h5>
                             </div>
                             <small class="badge bg-light text-dark">4</small>
                          </div>
                          <div class="card-body p-0 ">
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex  align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class=" w-100 ms-3">
                                      <h6 class="mb-0 ">Bni Emma Watson</h6>
                                      <small class="float-left font-size-12">13 Jun</small>
                                   </div>
                                </div>
                             </a>
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class="ms-3">
                                      <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                      <small class="float-left font-size-12">20 Apr</small>
                                   </div>
                                </div>
                             </a>
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class="ms-3">
                                      <h6 class="mb-0 ">Why do we use it?</h6>
                                      <small class="float-left font-size-12">30 Jun</small>
                                   </div>
                                </div>
                             </a>
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class="ms-3">
                                      <h6 class="mb-0 ">Variations Passages</h6>
                                      <small class="float-left font-size-12">12 Sep</small>
                                   </div>
                                </div>
                             </a>
                             <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                   <div class="">
                                      <img class="avatar-40 rounded" src="../assets/images/user/05.jpg" alt="" loading="lazy">
                                   </div>
                                   <div class="ms-3">
                                      <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                      <small class="float-left font-size-12">5 Dec</small>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="nav-item d-lg-none">
                    <a href="../app/chat.html" class="dropdown-toggle d-flex align-items-center" id="mail-drop-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="material-symbols-outlined">mail</i>
                       <span class="mobile-text  ms-3">Message</span>
                    </a>
                 </li>
                 <li class="nav-item dropdown d-none d-lg-block">
                    <a href="javascript:void(0);" class="d-flex align-items-center dropdown-toggle" id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img src="{{ asset ('images/user/1.jpg') }}" class="img-fluid rounded-circle me-3" alt="user" loading="lazy">
                       <div class="caption">
                          <h6 class="mb-0 line-height">Bni Cyst</h6>
                       </div>
                    </a>
                    <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                       <div class="card shadow-none m-0">
                          <div class="card-header ">
                             <div class="header-title">
                                <h5 class="mb-0 ">Hello Bni Cyst</h5>
                             </div>
                          </div>
                          <div class="card-body p-0 ">
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                <span class="material-symbols-outlined">
                                   line_style
                                </span>
                                <div class="ms-3">
                                   <a href="../app/profile.html" class="mb-0 h6">
                                   My Profile
                                   </a>
                                </div>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                <span class="material-symbols-outlined">
                                   edit_note
                                </span>
                                <div class="ms-3"> 
                                   <a href="../app/profile-edit.html" class="mb-0 h6">
                                   Edit Profile
                                   </a>
                                </div>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                <span class="material-symbols-outlined">
                                   manage_accounts
                                </span>
                                <div class="ms-3">
                                   <a href="../app/account-setting.html" class="mb-0 h6">
                                   Account settings
                                   </a>
                                </div>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                <span class="material-symbols-outlined">
                                   lock
                                </span>
                                <div class="ms-3">  
                                   <a href="../app/privacy-setting.html" class="mb-0 h6">
                                   Privacy Settings
                                   </a>
                                </div>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card">
                                <span class="material-symbols-outlined">
                                   login
                                </span>
                                <div class="ms-3">  
                                   <a href="../dashboard/sign-in.html" class="mb-0 h6">
                                   Sign out
                                   </a>
                                </div>
                             </div>
                             <div class=" iq-sub-card">
                                <h5>Chat Settings</h5>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                   <i class="material-symbols-outlined text-success md-14">
                                   circle
                                </i>  
                                <div class="ms-3"> 
                                   Online
                                </div>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                <i class="material-symbols-outlined text-warning md-14">
                                   circle
                                </i>                                            
                                <div class="ms-3">
                                   Away
                                </div>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                <i class="material-symbols-outlined text-danger md-14">
                                   circle
                                </i>                                             
                                <div class="ms-3">
                                   Disconnected
                                </div>
                             </div>
                             <div class="d-flex align-items-center iq-sub-card border-0">
                                   <i class="material-symbols-outlined text-gray md-14">
                                   circle
                                </i>                                              
                                <div class="ms-3">
                                   Invisible
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </li>
              </ul>
              <div class=" border-top  top-header-responsive d-lg-none">
                 <ul class="list-unstyled p-0 m-0 menu-list">
                    <li class="icon-class"><a href="{{ asset ('resources\views\layouts\dashboardAdmin.blade.php') }}../dashboard/index.html" class=""><i class="material-symbols-outlined">home</i></a></li>
                    <li class="icon-class"><a href="../dashboard/notification.html" class=""><span class="material-symbols-outlined">notifications</span></a></li>
                    <li class="icon-class"><a href="../app/group.html" class=""><span class="material-symbols-outlined">group</span></a></li>
                    <li class="icon-class"><a href="../app/email.html" class=""><span class="material-symbols-outlined">mail</span></a></li>
                    <li class="icon-class"><a href="../app/profile.html" class=""><span class="material-symbols-outlined">person</span></a></li>
                 </ul>        
              </div>
           </div>
     </nav>
  </div>  



  
  <aside class="sidebar sidebar-default sidebar-base navs-rounded-all " id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
      <div class="sidebar-body pt-0 data-scrollbar">
          <div class="sidebar-list">
              <!-- Sidebar Menu Start -->
              <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                  <li class="nav-item static-item">
                      <a class="nav-link static-item disabled" href="#" tabindex="-1">
                          <span class="default-icon">Social</span>
                          <span class="mini-icon" data-bs-toggle="tooltip" title="Social" data-bs-placement="right">-</span>
                      </a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="{{ asset ('resources\views\layouts\dashboardAdmin.blade.php') }}">
                          <i class="icon material-symbols-outlined">
                              newspaper
                          </i>
                          <span class="item-name">Newsfeed</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#profile" role="button" aria-expanded="false"
                          aria-controls="profile">
                          <i class="icon material-symbols-outlined">
                              person
                          </i>
                          <span class="item-name">Profiles</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="profile" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../app/profile.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name"> Profile </span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/profile1.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name">Profile 1 </span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/profile2.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name">Profile 2 </span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/profile3.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name">Profile 3 </span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../app/profile-images.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> PI </i>
                                  <span class="item-name">Profile Image</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../app/profile-videos.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> PV </i>
                                  <span class="item-name">Profile Video</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../app/profile-event.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> PE </i>
                                  <span class="item-name">Profile Events</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../app/profile-badges.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> PB </i>
                                  <span class="item-name">Profile Badges</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../app/profile-forum.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> PF </i>
                                  <span class="item-name">Profile Forum</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#friend-list" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              people
                          </i>
                          <span class="item-name">Friend</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="friend-list" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/friend-list.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FL </i>
                                  <span class="item-name"> Friend List</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/friend-profile.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FP </i>
                                  <span class="item-name">Friend Profile</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link " aria-current="page"
                                  href="../dashboard/friend-request.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FR </i>
                                  <span class="item-name">Friend Request</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="{{ asset ('/form') }}">
                          <i class="icon material-symbols-outlined">
                              groups
                          </i>
                          <span class="item-name">Group</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="../dashboard/notification.html">
                          <i class="icon material-symbols-outlined">
                              notifications
                          </i>
                          <span class="item-name">Notification</span>
                      </a>
                  </li>
                  <li class="nav-item static-item">
                      <a class="nav-link static-item disabled" href="#" tabindex="-1">
                          <span class="default-icon">Featured</span>
                          <span class="mini-icon" data-bs-toggle="tooltip" title="Social" data-bs-placement="right">-</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="{{ asset ('/table') }}">
                          <i class="icon material-symbols-outlined">
                              insert_drive_file
                          </i>
                          <span class="item-name">Files</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="../app/chat.html" target="_blank">
                          <i class="icon material-symbols-outlined">
                              message
                          </i>
                          <span class="item-name">Chat</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="../app/todo.html">
                          <i class="icon material-symbols-outlined">
                              task_alt
                          </i>
                          <span class="item-name">Todo</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="../dashboard/calendar.html">
                          <i class="icon material-symbols-outlined">
                              calendar_month
                          </i>
                          <span class="item-name">Calendar</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="../dashboard/birthday.html">
                          <i class="icon material-symbols-outlined">
                              cake
                          </i>
                          <span class="item-name">Birthday</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="../dashboard/weather.html">
                          <i class="icon material-symbols-outlined">
                              thunderstorm
                          </i>
                          <span class="item-name">Weather</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="../dashboard/music.html">
                          <i class="icon material-symbols-outlined">
                              play_circle
                          </i>
                          <span class="item-name">Music</span>
                      </a>
                  </li>
                  <li class="nav-item static-item">
                      <a class="nav-link static-item disabled" href="#" tabindex="-1">
                          <span class="default-icon">Other Pages</span>
                          <span class="mini-icon" data-bs-toggle="tooltip" title="otherpages" data-bs-placement="right">-</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#market" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              poll
                          </i>
                          <span class="item-name">Market Place</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="market" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/market1.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> M </i>
                                  <span class="item-name">Market 1</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/market2.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> M </i>
                                  <span class="item-name">Market 2</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              article
                          </i>
                          <span class="item-name">Blog</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="blog" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/blog-grid.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> BG </i>
                                  <span class="item-name">Blog Grid</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/blog-list.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> BL </i>
                                  <span class="item-name">Blog List</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/blog-detail.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> BD </i>
                                  <span class="item-name">Blog Detail</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#store" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              storefront
                          </i>
                          <span class="item-name">Store</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="store" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/store-category-grid.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> CG </i>
                                  <span class="item-name">Category Grid</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/store-category-list.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> CL </i>
                                  <span class="item-name">Category List</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/store-detail.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> SD </i>
                                  <span class="item-name">Store Detail</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/store-checkout.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> C </i>
                                  <span class="item-name">Checkout</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#mail" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              mail_outline
                          </i>
                          <span class="item-name">Mail</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="mail" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link " href="../app/email.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> I </i>
                                  <span class="item-name">Inbox</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../app/email-compose.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> E </i>
                                  <span class="item-name">Email Compose</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              assignment
                          </i>
                          <span class="item-name">Special Pages</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-timeline.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T </i>
                                  <span class="item-name">Timeline</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-invoice.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> I </i>
                                  <span class="item-name">Invoice</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-pricing.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name">Pricing 1</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-pricing-one.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name">Pricing 2</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-faq.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> F </i>
                                  <span class="item-name">Faq</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false"
                          aria-controls="sidebar-auth">
                          <i class="icon material-symbols-outlined">
                              library_books
                          </i>
                          <span class="item-name">Auth</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/sign-in.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Login</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/sign-up.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Register</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-recoverpw.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Recover Password</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-confirm-mail.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Confirm Mail</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-lock-screen.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Lock Screen</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false"
                          aria-controls="utilities-error">
                          <i class="icon material-symbols-outlined">
                              turned_in_not
                          </i>
                          <span class="item-name">Utilities</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-error.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Error 404</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-error-500.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Error 500</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/pages-maintenance.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Maintence</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link "
                          href="../dashboard/blank-page.html">
                          <i class="icon material-symbols-outlined">
                              check_box_outline_blank
                          </i>
                          <span class="item-name">Blank Page</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="../dashboard/admin.html">
                          <i class="icon material-symbols-outlined">
                              admin_panel_settings
                          </i>
                          <span class="item-name">Admin</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link "
                          href="../dashboard/pages-comingsoon.html">
                          <i class="icon material-symbols-outlined">
                              fiber_smart_record
                          </i>
                          <span class="item-name">Pages Comingsoon</span>
                      </a>
                  </li>
                  <li class="nav-item static-item">
                      <a class="nav-link static-item disabled" href="#" tabindex="-1">
                          <span class="default-icon">Elements</span>
                          <span class="mini-icon" data-bs-toggle="tooltip" title="elements" data-bs-placement="right">-</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#ui-kit" role="button" aria-expanded="false"
                          aria-controls="ui-kit">
                          <i class="icon material-symbols-outlined">
                              adjust
                          </i>
                          <span class="item-name">Ui Elements</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="ui-kit" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-color.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> U </i>
                                  <span class="item-name">Ui Color</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-typography.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T </i>
                                  <span class="item-name">Typography</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-alerts.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> A </i>
                                  <span class="item-name">Alerts</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-badges.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Badges</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-breadcrumb.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Breadcrumb</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-buttons.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Buttons</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-cards.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> C </i>
                                  <span class="item-name">Cards</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-carousel.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> C </i>
                                  <span class="item-name">Carousel</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-embed-video.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> V </i>
                                  <span class="item-name">Video</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-grid.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> G </i>
                                  <span class="item-name">Grid</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-images.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> I </i>
                                  <span class="item-name">Images</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-list-group.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> L </i>
                                  <span class="item-name">list Group</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-modal.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> M </i>
                                  <span class="item-name">Modal</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-notifications.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> N</i>
                                  <span class="item-name">Notifications</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-pagination.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P</i>
                                  <span class="item-name">Pagination</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-popovers.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P</i>
                                  <span class="item-name">Popovers</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-progressbars.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P</i>
                                  <span class="item-name">Progressbars</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-tabs.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T</i>
                                  <span class="item-name">Tabs</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-tooltips.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T</i>
                                  <span class="item-name">Tooltips</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/ui-offcanvas.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon">O</i>
                                  <span class="item-name">Offcanvas</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-wizard" role="button" aria-expanded="false"
                          aria-controls="sidebar-wizard">
                          <i class="icon material-symbols-outlined">
                              text_snippet
                          </i>
                          <span class="item-name">Forms Wizard</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-wizard" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-wizard.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> SW </i>
                                  <span class="item-name">Simple Wizard</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-wizard-validate.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> VW </i>
                                  <span class="item-name">Validate Wizard</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-wizard-vertical.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> VW </i>
                                  <span class="item-name">Vertical Wizard</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false"
                          aria-controls="sidebar-table">
                          <i class="icon material-symbols-outlined">
                              table_chart
                          </i>
                          <span class="item-name">Table</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/tables-basic.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> BT </i>
                                  <span class="item-name">Basic Tables</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/data-table.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> D </i>
                                  <span class="item-name">Data Table</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/table-editable.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> E </i>
                                  <span class="item-name">Editable Table</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false"
                          aria-controls="sidebar-form">
                          <i class="icon material-symbols-outlined">
                              view_timeline
                          </i>
                          <span class="item-name">Form</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-layout.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FE </i>
                                  <span class="item-name">Form Elements</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-validation.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FV</i>
                                  <span class="item-name">Form Validation</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-switch.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FS </i>
                                  <span class="item-name">Form Switch</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-chechbox.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FC</i>
                                  <span class="item-name">Form Checkbox</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/form-radio.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FR</i>
                                  <span class="item-name">Form Radio</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item mb-4">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-icons" role="button" aria-expanded="false"
                          aria-controls="sidebar-icons">
                          <i class="icon material-symbols-outlined">
                              error_outline
                          </i>
                          <span class="item-name">Icons</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-icons" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/icon-fontawesome-5.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> F </i>
                                  <span class="item-name">Font Awesome 5</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/icon-lineawesome.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> L </i>
                                  <span class="item-name">Line Awesome</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/icon-remixicon.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> R </i>
                                  <span class="item-name">Remixicon</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="../dashboard/icon-material.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> M </i>
                                  <span class="item-name">Material</span>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
              <!-- Sidebar Menu End -->        </div>
      </div>
      <div class="sidebar-footer"></div>
  </aside>

















      <div>
    <div class="position-relative">
    </div>
    <div id="content-page" class="content-page">
        @yield('content')
    
    </div>
  </div>
  <!-- Wrapper End-->
  <!-- offcanvas start -->







  
  <div class="right-sidebar-mini right-sidebar">
      <div class="right-sidebar-panel p-0">
         <div class="card shadow-none">
            <div class="card-body p-0">
               <div class="media-height p-3" data-scrollbar="init">
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/01.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Anna Sthesia</h6>
                        <p class="mb-0">Just Now</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/02.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Paul Molive</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/03.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Anna Mull</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/04.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Paige Turner</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/11.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Bob Frapples</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/02.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Barb Ackue</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/03.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Greta Life</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/12.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Ira Membrit</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/01.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Pete Sariya</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center">
                     <div class="iq-profile-avatar">
                        <img class="rounded-circle avatar-50" src="{{ asset ('images/user/02.jpg') }}" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Monty Carlo</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
               </div>
                 <div class="right-sidebar-toggle bg-primary text-white mt-3 d-flex">
                    <span class="material-symbols-outlined">chat</span>
                 </div>
            </div>
         </div>
      </div>
   </div>  




      



          
  <footer class="iq-footer bg-white">
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-6">
              <ul class="list-inline mb-0">
                 <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                 <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
              </ul>
              </div>
              <div class="col-lg-6 d-flex justify-content-end">
              Copyright 2020
              <a href="#">SocialV</a>
              All Rights Reserved.
         </div>
         </div>
        </div>
     </footer>  <!-- Live Customizer start -->
  <!-- Setting offcanvas start here -->
  <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label">
      <div class="offcanvas-header pb-0">
          <div class="d-flex align-items-center">
              <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
          </div>
          <div class="close-icon" data-bs-dismiss="offcanvas">
              <svg xmlns="http://www.w3.org/2000/svg"  width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
          </div>
      </div>
      <div class="offcanvas-body data-scrollbar">
          <div class="row">
              <div class="col-lg-12">
                  <div>
                      <div class="text-center mb-4">
                          <h5 class="d-inline-block">Style Setting</h5>
                      </div>
                      <div>
                          <!-- Theme start here -->
                          <div class="mb-4">
                              <h5 class="mb-3">Theme</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100" >
                                      <input class="form-check-input custum-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between" for="color-mode-light">
                                         <span>Light Theme</span> 
                                          <div class="text-primary ">
                                              <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                              </svg>
                                          </div>
                                      </label>
                                  </div>
                              </div>
                               <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100 ">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="dark"  name="theme_scheme" id="color-mode-dark">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-dark">
                                         <span>Dark Theme</span>
                                         <div class="text-primary ">
                                             <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                              </svg>
                                         </div>                                    
                                      </label>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="auto"  name="theme_scheme" id="color-mode-auto">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-auto">
                                         <span>Device Default</span> 
                                         <div class="text-primary ">
                                              <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <g clip-path="url(#clip0_507_92)">
                                                  <rect width="30" height="27" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  </g>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                                  <defs>
                                                  <clipPath id="clip0_507_92">
                                                  <rect width="30" height="27" fill="white"/>
                                                  </clipPath>
                                                  </defs>
                                              </svg>
                                         </div>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Color customizer end here -->
                          <hr class="hr-horizontal">
                          <!-- Menu Style start here -->
                          <div>
                              <h5 class="mt-4 mb-3">Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-3 mb-4">
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                          Mini
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}"
                                          class="btn-check" name="sidebar_type" id="sidebar-hover">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                          Hover
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
                                          Soft
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Menu Style end here -->
  
                          <hr class="hr-horizontal">
  
                          <!-- Active Menu Style start here -->
  
                          <div class="mb-4">
                              <h5 class="mt-4 mb-3">Active Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-2">
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                          Rounded One
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                          Rounded All
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                          Pill One Side
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
                                          Pill All
                                      </label>
                                  </div>
                              </div>
                          </div>
                           <hr class="hr-horizontal">
                          <!-- Color customizer start here -->
                          <div>
                              <div class="d-flex align-items-center justify-content-between my-3">
                                  <h5>Color Customizer</h5>
                                  <div class="d-flex align-items-center">
                                      <div data-setting="radio">
                                          <input type="radio" value="theme-color-default" class="btn-check" name="theme_color" id="theme-color-default" data-colors='{"primary": "#50b5ff", "info": "#d592ff"}'>
                                          <label class="btn bg-transparent border-0" for="theme-color-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color" data-bs-original-title="Reset color">
                                              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z" fill="#31BAF1"/>
                                                  <path d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z" fill="#0169CA"/>
                                              </svg>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="grid-cols-5 mb-4 d-grid gap-3">
                                  <div data-setting="radio">
                                      <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color"
                                          id="theme-color-1" data-colors='{"primary": "#4285F4", "info": "#EA4335"}'>
                                      <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Gmail" data-bs-original-title="Gmail">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#4285F4" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EA4335" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="theme-color-red" class="btn-check" name="theme_color" id="theme-color-2" data-colors='{"primary": "#FF4500", "info": "#1A73E8"}'>
                                      <label class="btn btn-border  d-block bg-transparent p-2" for="theme-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Reddit" data-bs-original-title="Reddit">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#FF4500" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#1A73E8" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="theme-color-purple" class="btn-check" name="theme_color" id="theme-color-3" data-colors='{"primary": "#8755f2", "info": "#EE4266"}'>
                                      <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitch" data-bs-original-title="Twitch">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#8755f2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EE4266" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="theme-color-cyan" class="btn-check" name="theme_color" id="theme-color-4" data-colors='{"primary": "#0A66C2", "info": "#333333"}'>
                                      <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkdin" data-bs-original-title="Linkdin">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#0A66C2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#333333" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="theme-color-green" class="btn-check" name="theme_color" id="theme-color-5" data-colors='{"primary": "#00b75a", "info": "#000000"}'>
                                      <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-5" data-bs-toggle="tooltip" data-bs-placement="top" title="Spotify" data-bs-original-title="Spotify">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#00b75a" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#000000" />
                                          </svg>
                                      </label>
                                  </div>
                              </div>
                          </div>
                            <!-- Theme end here -->
                          <hr class="hr-horizontal">
                          <div>
                              <h5 class="mb-3 mt-4">Direction</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="theme-scheme-direction-ltr">
                                         <span>LTR</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"/>
                                              <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"/>
                                              <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"/>
                                              <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                 
                              </div>
                               <div class="mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between "  for="theme-scheme-direction-rtl">
                                          <span>RTL</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"/>
                                              <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"/>
                                              <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"/>
                                              <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Theme end here -->
                          <!-- Active Menu Style end here -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Settings sidebar end here -->
  
  <a class="btn btn-fixed-end btn-danger btn-icon btn-setting" id="settingbutton"
      data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
      <span class="icon material-symbols-outlined animated-rotate text-white">
          settings
      </span>
  </a>  <!-- Live Customizer end -->

  <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
     <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
         <div class="close-icon" data-bs-dismiss="offcanvas">
              <svg xmlns="http://www.w3.org/2000/svg"  width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
          </div>
     </div>
     <div class="offcanvas-body small">
        <div class="d-flex flex-wrap align-items-center">
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Facebook</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Twitter</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Instagram</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Google Plus</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>LinkedIn</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>YouTube</h6>
           </div>
        </div>
     </div>
  </div>  







  <!-- Backend Bundle JavaScript -->
 
  <script src=" {{ asset ('Admin/js/libs.min.js') }}"></script>
  <!-- Lodash Utility -->
   
  <script src="{{ asset ('Admin/vendor/lodash/lodash.min.js') }}"></script>
  <!-- Utilities Functions -->

  <script src="  {{ asset ('Admin/js/setting/utility.js') }}"></script>
  <!-- Settings Script -->
    
  <script src="{{ asset ('Admin/js/setting/setting.js') }}"></script>
  <!-- Settings Init Script -->

  <script src="  {{ asset ('Admin/js/setting/setting-init.js') }}" defer></script>
  <!-- slider JavaScript -->
  
  <script src="  {{ asset ('Admin/js/slider.js') }}"></script>
  <!-- masonry JavaScript -->
    
  <script src="{{ asset ('Admin/js/masonry.pkgd.min.js') }} "></script>
  <!-- SweetAlert JavaScript -->
  
  <script src="{{ asset ('Admin/js/enchanter.js') }} "></script>
  <!-- Sweet-alert Script -->
  
  <script src="{{ asset ('Admin/vendor/sweetalert2/dist/sweetalert2.min.js') }} " async></script>
  
  <script src="{{ asset ('Admin/js/sweet-alert.js') }} " defer></script>
  <!-- Chart Custom JavaScript -->
  
  <script src="{{ asset ('Admin/js/customizer.js') }} "></script>
  <!-- app JavaScript -->
   
  <script src=" {{ asset ('Admin/js/charts/weather-chart.js') }} "></script>
  
  <script src="{{ asset ('Admin/js/app.js') }}"></script>
  <!-- Flatpickr Script -->
  
  <script src="{{ asset ('Admin/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
  <!-- fslightbox Script -->
  
  <script src="{{ asset ('Admin/js/fslightbox.js') }}" defer></script> 
  <!-- vanilla Script -->
  
  <script src="{{ asset ('Admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
  <!--lottie Script -->
  
  <script src="{{ asset ('Admin/js/lottie.js') }}"></script>
  <!--select2 Script -->

  <script src="  {{ asset ('Admin/js/select2.js') }}"></script>
  


<!--admin script-->
 
<script src=" {{ asset ('Admin/js/charts/admin.js') }}"></script>
</body>

</html>