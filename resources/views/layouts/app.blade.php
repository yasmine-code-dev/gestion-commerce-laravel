<!DOCTYPE html>
<html lang="en">


<head>
  <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
  @include('layouts.head')
</head>

<body>
  <!-- begin app -->
  <div class="app">
    <!-- begin app-wrap -->
    <div class="app-wrap">
      <!-- begin pre-loader -->
      <div class="loader">
        <div class="h-100 d-flex justify-content-center">
          <div class="align-self-center">
            <img src="assets/img/loader/loader.svg" alt="loader">
          </div>
        </div>
      </div>
      <!-- end pre-loader -->
      <!-- begin app-header -->
      <header class="app-header top-bar">
        <!-- begin navbar -->
        @include('layouts.header')
        <!-- end navbar -->
      </header>
      <!-- end app-header -->
      <!-- begin app-container -->
      <div class="app-container">
        <!-- begin app-nabar -->
        <aside class="app-navbar">
          <!-- begin sidebar-nav -->
          
            @include('layouts.sidebar')
          
          <!-- end sidebar-nav -->
        </aside>
        <!-- end app-navbar -->
        <!-- begin app-main -->
        <div class="app-main" id="main">
          <!-- begin container-fluid -->
         
              
                <!-- begin page title -->
               @include('layouts.title')
                 
               
                <!-- end page title -->
              
            <!-- Notification -->
            
            <!-- end row -->
            <!-- begin row -->
            @yield('content')
          <!-- end container-fluid -->
        </div>
        <!-- end app-main -->
      </div>
      <!-- end app-container -->
      <!-- begin footer -->
      
       @include('layouts.footer')
      
      <!-- end footer -->
    </div>
    <!-- end app-wrap -->
  </div>
  <!-- end app -->

  <!-- plugins -->
  <script src="assets/js/vendors.js"></script>

  <!-- custom app -->
  <script src="assets/js/app.js"></script>
</body>


</html>