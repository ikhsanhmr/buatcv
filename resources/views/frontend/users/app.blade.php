<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.users.partials.head')
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    @include('frontend.users.partials.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('frontend.users.partials.aside')
      <!-- partial -->
      <div class="main-panel">
        @yield('users.content')
        <!-- content-wrapper ends -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  @include('frontend.users.partials.script')
</body>

</html>

