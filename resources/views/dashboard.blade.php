<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('layouts.header-web')
<!-- End Header -->

<!-- Header -->
@include('layouts.style')
<!-- End Header -->

<body class="g-sidenav-show  bg-gray-100 loading">
<!-- Spinner do Bootstrap -->
<div class="spinner-container">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Carregando...</span>
    </div>
</div>

@include('layouts.menu-lateral')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">

    <!-- Navbar -->
    @include('layouts.navigation')
    <!-- End Navbar -->

    <!-- Content -->
    @yield('main-content')
    <!-- End Contet -->

    <!-- Footer -->
    @include('layouts.footer-web')
    <!-- End -->

</main>
@include('layouts.scripts')
</body>
</html>
