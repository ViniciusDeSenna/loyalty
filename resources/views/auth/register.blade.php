<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('theme_assets\Modernize-bootstrap-free-main\Modernize-bootstrap-free-main\src\assets\images\logos\favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('theme_assets\Modernize-bootstrap-free-main\Modernize-bootstrap-free-main\src\assets\css\styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('theme_assets\Modernize-bootstrap-free-main\Modernize-bootstrap-free-main\src\assets\images\logos\dark-logo.svg')}}" width="180" alt="">
                </a>
                <p class="text-center">Seu site de fidelidade</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                  </div>
                  <!-- Seleciona tipo -->
                   <div class="mb-4">
                    <label for="type" class="form-label">Como você pretende usar nosso site?</label>
                    <select name="type" id="type" class="form-select mb-3" onchange="formEstab()">
                      <option value="null" disabled selected>Selecione</option>
                      <option value="USER">Sou Cliente</option>
                      <option value="ESTABLISHMENT">Sou Estabelecimento</option>
                    </select>
                    <!-- Formulario registro de empresa -->
                    <div id="form-registro-estabelecimento" class="d-none">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nome do seu Estabelecimento</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">CNPJ do seu Estabelecimento</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj">
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Criar Conta</button>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('theme_assets\Modernize-bootstrap-free-main\Modernize-bootstrap-free-main\src\assets\libs\jquery\dist\jquery.min.js')}}"></script>
  <script src="{{asset('theme_assets\Modernize-bootstrap-free-main\Modernize-bootstrap-free-main\src\assets\libs\bootstrap\dist\js\bootstrap.bundle.min.js')}}"></script>
  <script>
    $(function(){
      formEstab();
    });

    function formEstab() {
      if ($('#type').val() === 'ESTABLISHMENT'){
        $('#form-registro-estabelecimento').removeClass('d-none');
        $('#form-registro-estabelecimento').slideDown();
      } else {
        $('#form-registro-estabelecimento').addClass('d-none');
        $('#form-registro-estabelecimento').slideUp();
      }
    }
  </script>
</body>

</html>
