@extends('dashboard')

@section('content')
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<div class="form">
  <h1>QR Code using qrcodejs</h1>
  <form>
    <input type="url" id="website" name="website" placeholder="https://webisora.com" required />
    <button type="button" onclick="generateQRCode()">
      Generate QR Code
    </button>
  </form>

  <div id="qrcode-container">
    <div id="qrcode" class="qrcode"></div>
    <h4>With some styles</h4>
    <div id="qrcode-2" class="qrcode"></div>
  </div>

  <script type="text/javascript">
    function generateQRCode() {
      let website = document.getElementById("website").value;
      if (website) {
        let qrcodeContainer = document.getElementById("qrcode");
        qrcodeContainer.innerHTML = "";
        new QRCode(qrcodeContainer, website);
        /*With some styles*/
        let qrcodeContainer2 = document.getElementById("qrcode-2");
        qrcodeContainer2.innerHTML = "";
        new QRCode(qrcodeContainer2, {
          text: website,
          width: 128,
          height: 128,
          colorDark: "#5868bf",
          colorLight: "#ffffff",
          correctLevel: QRCode.CorrectLevel.H
        });
        document.getElementById("qrcode-container").style.display = "block";
      } else {
        alert("Please enter a valid URL");
      }
    }
  </script>
</div>
@endsection