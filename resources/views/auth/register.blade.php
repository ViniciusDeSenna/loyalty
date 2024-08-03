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
<!DOCTY_assetsPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('tema/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('tema/assets/img/favicon.png')}}">
  <title>
    {{env('APP_NAME')}}
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('tema/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('tema/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('tema/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('tema/assets/css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
        {{env('APP_NAME')}}
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
          <li class="nav-item">
            <a class="nav-link me-2" href="../pages/sign-up.html">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Entrar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="../pages/sign-in.html">
              <i class="fas fa-key opacity-6  me-1"></i>
             Me registrar
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('{{asset('tema/assets/img/curved-images/curved14.jpg')}}');">
        <span class="mask bg-gradient-primary opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Bem-vindo!</h1>
              <p class="text-lead text-white">Nos informe como você gostaria de usar nosso serviço.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 my-2 mx-auto">
            <div class="card z-index-0">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('{{asset('tema/assets/img/ivancik.jpg')}}');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Cliente</h5>
                        <p class="text-white">Quero usar o {{env('APP_NAME')}} para garantir beneficios em meus estabelecimentos prediletos!</p>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-outline-light text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('register.cliente')}}">
                                Sou um cliente
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-7 my-2 mx-auto">
            <div class="card z-index-0">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('{{asset('tema/assets/img/ivancik.jpg')}}');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Estabelecimento</h5>
                        <p class="text-white">Quero usar o {{env('APP_NAME')}} para entregar e gerenciar beneficios para meus clientes mais fiéis!</p>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-outline-light text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('register.estabelecimento')}}">
                                Sou um estabelecimento
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layouts.footer-web')
  </main>
  
  <!--   Core JS Files   -->
  <script src="{{asset('tema/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('tema/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('tema/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('tema/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('tema/assets/js/soft-ui-dashboard.min.js?v=1.0.7')}}"></script>
</body>

</html>