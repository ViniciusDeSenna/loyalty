@extends('dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url(https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/1e/8b/16/oliv-restaurante.jpg?w=600&h=400&s=1); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 mb-4 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://marketplace.canva.com/EAFuRCowrBE/1/0/1600w/canva-logotipo-para-restaurante-moderno-laranja-marrom-M2uDDAK9eXw.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">Nome da Empresa</h5>
                    <p class="mb-0 font-weight-bold text-sm">Área de atuação da empresa ou bordão</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <button type="button" class="btn btn-sm mb-0 w-100" onclick="openConfig()">
                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>settings</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(304.000000, 151.000000)">
                                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                            </polygon>
                                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                            opacity="0.596981957"></path>
                                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Configurar Empresa
                    </button>
                    <button type="button" class="btn btn-sm bg-gradient-primary mt-3 mb-0 w-100"><i class="fas fa-plus pe-2"></i> Follow</button>
                </div>
            </div>
        </div>
    </div>
    <h6 class="my-2">Cartões</h6>


            <div class="row">
                <div class="col-xl-6 col-md-7 mb-xl-0 mb-4">
                    <div class="card blur shadow-blur">
                        <div class="card-body">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/1e/8b/16/oliv-restaurante.jpg?w=600&h=400&s=1" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                            <div class="row align-items-center">
                                <div class="col-9 d-flex align-items-center">
                                    <a href="javascript:;">
                                        <h5 class="mb-0 text-break">NOME DA EMPRESA</h5>
                                    </a>
                                </div>
                                <div class="col-3 d-flex justify-content-center">
                                    <div class="input-group">
                                        <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-primary mb-0" onclick="novoPremio()">
                                            <strong>1</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function openConfig(){
        window.location.assign("{{route('minha-empresa-config.index')}}")
    }
</script>
@endsection
