@extends('dashboard')

@section('main-content')
<div class="container fixed-top mt-4 d-none" id="modal-save">
    <div class="card card-body">
        <div class="row">
        <div class="col-12">
            <p class="mb-0"><strong>Alterações foram realizadas!</strong></p>
        </div>
        <div class="col-6">
            <button class="btn btn-sm btn-outline-danger mt-3 mb-0 w-100" onclick="cancelarAlteracoes()">Cancelar</button>
        </div>
        <div class="col-6">
            <button class="btn btn-sm bg-gradient-primary mt-3 mb-0 w-100" onclick="salvarAlteracoes()"> Salvar</button>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid my-3 py-3" id="config-form">
    <div class="row mb-5">
        <div class="col-lg-3">
            <div class="card position-sticky top-1">
                <ul class="nav flex-column bg-white border-radius-lg p-3">
                <li class="nav-item pt-2">
                    <a class="nav-link text-body" data-scroll="" href="#delete">
                        <div class="icon me-2">
                            <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                opacity="0.598981585"></path>
                                                <path class="color-foreground" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="text-sm">Empresa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" data-scroll="" href="#profile">
                        <div class="icon me-2">
                            <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>spaceship</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(4.000000, 301.000000)">
                                                <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                opacity="0.598539807"></path>
                                                <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                opacity="0.598539807"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="text-sm">Cartões</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <form id="config-empresa" class="col-lg-9 mt-lg-0 mt-4">
        <input type="hidden" name="_id">
        <div class="card mt-4" id="basic-info">
            <div class="card-header">
                <h5>Empresa</h5>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label">Nome da empresa</label>
                        <div class="input-group">
                            <input name="nome" class="form-control" type="text" placeholder="Alec" required="required">
                        </div>
                    </div>
                    <div class="col-sm-12 col-12">
                        <label class="form-label mt-4">Classificação</label>
                        <div class="input-group">
                            <select class="form-select" name="classificacao">
                                <option value="restaurante">Restaurante</option>
                                <option value="servicos-gerais">Serviços Gerais</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form id="config-cartao" class="col-lg-9 mt-lg-0 mt-2">
        <div class="card mt-4" id="basic-info">
            <div class="card-header">
                <h5>Cartão</h5>
            </div>
            <div class="card-body pt-0">
                <div class="row" id="div-cartao-pontos">
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-pontos-cartao" tabindex="-1" aria-labelledby="modalPontosCartaoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-pontuacao-premio" class="modal-body">
                <div class="row d-flex align-items-center">
                    <div class="col-3 mt-3">
                        <div id="indicador-pontuacao" class="input-group">
                        </div>
                    </div>
                    <div class="col-9">
                        <label for="descricao" class="form-label">Prêmio</label>
                        <div class="input-group">
                            <input id="descricao" name="descricao" class="form-control" type="text" placeholder="Insira o prêmio aqui!" required="required">
                            <input name="pontuacao" class="form-control" type="hidden" placeholder="Alec" required="required">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Excluir pontuação</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Excluir prêmio</button>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Mudar de número</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="registrarAlteracaoPonto()">Marcar prêmio</button>
            </div>
        </div>
    </div>
</div>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    var lastPontuacao = 0;
    function carregaDados(){
        $.ajax({
            type: 'GET',
            url: '{{ route('minha-empresa-config.show', [Auth::user()->id]) }}',
            success: function(retorno) {
                $('#config-form input[name="_id"]').val(retorno._id);
                $('#config-form input[name="classificacao"]').val(retorno.empresa.classificacao);
                $('#config-form input[name="nome"]').val(retorno.empresa.nome);
                carregaCartao(retorno);
            },
            error: function(retorno) {
                console.log(retorno);
            }
        })
    }
    function carregaCartao(retorno){
        let divCartao = $('#div-cartao-pontos');
        divCartao.html('');
        for (const [key, value] of Object.entries(retorno.empresa.cartao)) {
            let type = 'btn-outline-secondary';
            if (value.premiacao === true){
                type = 'btn-outline-primary';
            }
            divCartao.append(`
            <div class="col-3 mt-3">
                <div class="input-group">
                    <button class="btn btn-lg btn-icon-only btn-rounded ${type} mb-0 button-activate" type="button" onclick="novoPremio('${value.pontos}')"><strong>${value.pontos}</strong></button>
                </div>
                <input type="hidden" name="pontuacao-${value.pontos}" value="${value.pontos}">
                <input type="hidden" name="tipo-${value.pontos}" value="${value.premiacao}">
                <input type="hidden" name="descricao-pontuacao-${value.pontos}" value="${value.descricao}">
            </div>`);

            lastPontuacao++
        }
        divCartao.append(`
        <div class="col-3 mt-3">
            <div class="input-group">
                <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-secondary mb-0 button-activate" type="button" onclick="novoPonto()"><strong>+</strong></button>
            </div>
        </div>`)
    }
    function novoPremio(valor){
        let descricao = $(`#div-cartao-pontos input[name="descricao-pontuacao-${valor}"]`).val();
        console.log(descricao)
        $('#form-pontuacao-premio div[id="indicador-pontuacao"]').html('').append(`
            <button name="indicador-pontuacao" id="btnIndicadorPontuacao" class="btn btn-lg btn-icon-only btn-rounded btn-outline-primary mb-0 button-activate">
                <strong>${valor}</strong>
            </button>`);
        $('#form-pontuacao-premio input[name="descricao"]').val(descricao);
        $('#form-pontuacao-premio input[name="pontuacao"]').val(valor);
        $('#modal-pontos-cartao').modal('show');
    }
    function registrarAlteracaoPonto(){
        let pontuacao = $('#form-pontuacao-premio input[name="pontuacao"]').val();
        let descricao = $('#form-pontuacao-premio input[name="descricao"]').val();
        $(`#div-cartao-pontos input[name="tipo-${pontuacao}"]`).val('true')
        $(`#div-cartao-pontos input[name="descricao-pontuacao-${pontuacao}"]`).val(descricao)
    }
    function novoPonto() {
        let novaPontuacao = lastPontuacao + 1;
        let divCartao = $('#div-cartao-pontos');
        let items = divCartao.children('.col-3'); // Seleciona todos os itens com a classe 'col-3'

        // Se houver itens, inserimos o novo item antes do último
        if (items.length > 0) {
            items.eq(items.length - 1).before(`
            <div class="col-3 mt-3">
                <div class="input-group">
                    <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-secondary mb-0 button-activate" type="button" onclick="novoPremio('${novaPontuacao}')"><strong>${novaPontuacao}</strong></button>
                </div>
                <input type="hidden" name="pontuacao-${novaPontuacao}" value="${novaPontuacao}">
                <input type="hidden" name="tipo-${novaPontuacao}" value="false">
                <input type="hidden" name="descricao-pontuacao-${novaPontuacao}" value="">
            </div>`);
        } else {
            // Se não houver itens, simplesmente adiciona ao final
            divCartao.append(`
            <div class="col-3 mt-3">
                <div class="input-group">
                    <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-secondary mb-0 button-activate" type="button" onclick="novoPremio('${novaPontuacao}')"><strong>${novaPontuacao}</strong></button>
                </div>
                <input type="hidden" name="pontuacao-${novaPontuacao}" value="${novaPontuacao}">
                <input type="hidden" name="tipo-${novaPontuacao}" value="false">
                <input type="hidden" name="descricao-pontuacao-${novaPontuacao}" value="">
            </div>`);
        }
        lastPontuacao++;
    }
    function cancelarAlteracoes(){
        window.location.assign("{{route('minha-empresa-config.index')}}")
    }
    function salvarAlteracoes(){
        $.ajax({
            type: 'POST',
            url: '{{ route('minha-empresa-config.store') }}',
            data: {
                'empresa': $('#config-empresa').serialize(),
                'cartao': $('#config-cartao').serialize()
            },
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(retorno) {
                window.location.assign("{{route('minha-empresa-config.index')}}")
            },
            error: function(retorno) {
                console.log(retorno);
            }
        });
    }
    $(document).ready(function() {
        // Função que será chamada quando qualquer evento ocorrer
        function handleEvent() {
            $('#modal-save').removeClass('d-none');
        }

        // Adiciona o evento click a todos os botões
        $('button').click(handleEvent);

        // Adiciona o evento change a todos os inputs e selects
        $('input, select').change(handleEvent);

        carregaDados();
    });
</script>
@endsection
