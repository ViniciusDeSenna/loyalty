<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

<!--   Core JS Files   -->
<script src="{{asset('tema/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('tema/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('tema/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('tema/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('tema/assets/js/plugins/chartjs.min.js')}}"></script>

<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc (abre o menu lateral) -->
<script src="{{asset('tema/assets/js/soft-ui-dashboard.min.js?v=1.0.7')}}"></script>

<!-- Script para manipular o carregamento da página -->
<script>
    // Adiciona a classe 'loading' quando a página começa a carregar
    document.addEventListener('DOMContentLoaded', function() {
        document.body.classList.add('loading');
        $('.spinner-container').removeClass('d-none')
    });

    // Remove o spinner e exibe o conteúdo quando a página está completamente carregada
    window.addEventListener('load', function() {
        document.body.classList.remove('loading');
        $('.spinner-container').addClass('d-none')
    });
</script>
