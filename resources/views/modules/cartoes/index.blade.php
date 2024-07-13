@extends('dashboard')

@section('content')
<!-- Para cada cartao que o usuário possuir: -->
<div class="card">
    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/1e/8b/16/oliv-restaurante.jpg?w=600&h=400&s=1" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Oliv</h5>
      <p class="card-text">Você tem 4 pontos de fidelidade!</p>
      <a id="show-image-btn" href="#" class="btn btn-primary">Marcar um ponto!</a>
    </div>
    <div id="card-qrcode" class="card-footer d-none">
        
    </div>
</div>

  <script>
    document.getElementById('show-image-btn').addEventListener('click', function(e) {
      e.preventDefault();
      $('#card-qrcode').slideDown();
      $('#card-qrcode').removeClass('d-none');
    });
  </script>

<!-- <main>
    <div id="reader"></div>
    <div id="result"></div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const scanner = new Html5QrcodeScanner('reader', { 
        qrbox: {
            width: 250,
            height: 250,
        },  
        fps: 20,
    });
    scanner.render(success, error);
    function success(result) {

        document.getElementById('result').innerHTML = `
        <h2>Success!</h2>
        <p><a href="${result}">${result}</a></p>
        `;

        scanner.clear();

        document.getElementById('reader').remove();    
    }
    function error(err) {
        console.error(err);
    }

    $(function(){
        $('#html5-qrcode-button-camera-permission')
    });
</script> -->
@endsection