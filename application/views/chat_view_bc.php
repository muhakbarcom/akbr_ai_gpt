<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <title>Hello, world!</title>
  <style>
    body {
      /* background-image: linear-gradient(to right, #06beb6, #06beb6); */
      /* background-image: url(<?= base_url('assets/img/bg1.jpg'); ?>);
      background-size: cover;
      background-repeat: no-repeat; */
      /* background-position: center center; */
      margin: 0;
      padding: 0;

    }

    .parallax {
      background-image: url(<?= base_url('assets/img/bg1.jpg'); ?>);
      background-size: cover;
      background-attachment: fixed;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      font-size: 5rem;
    }

    .parallax h1 {
      text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .container {
      position: relative;
      /* min-height: 100vh; */
      /* margin-bottom: 50px; */
      /* set ukuran halaman minimal */
    }

    .form-control:focus {
      box-shadow: none;
      outline: none;
    }

    .chatbox {
      position: fixed;
      padding-top: 30px !important;
      padding-bottom: 30px !important;
      bottom: 0;
      right: 0;
      /* set posisi ke bawah */
      width: 100%;
      max-width: 100%;


      background: rgba(255, 255, 255, 0.3);
      /* border-radius: 16px; */
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10.9px);
      -webkit-backdrop-filter: blur(10.9px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }



    .chatBoxInput {
      max-height: 200px;
      height: 50px;
      overflow-y: hidden;
      resize: none;
      border-radius: 30px;
      margin-right: 10px;
    }

    .chat-box-tray {
      /* background: #eee; */
      display: flex;
      align-items: baseline;
      padding: 10px 15px;
      align-items: center;
      /* margin-top: 19px; */
      bottom: 0;

    }

    #conversation {
      background-color: #f7f8fc;
    }

    .saved {
      background-color: #284fff;
    }

    .chat-server {
      /* From https://css.glass */
      background: rgba(255, 255, 255, 0.28);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(14.9px);
      -webkit-backdrop-filter: blur(14.9px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 10px;
      margin-top: 10px;
    }

    .chat-client {
      /* From https://css.glass */
      background: rgba(38, 79, 150, 0.44);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(14.9px);
      -webkit-backdrop-filter: blur(14.9px);
      border: 1px solid rgba(38, 79, 150, 0.3);
      padding: 10px;
      margin-top: 10px;
    }

    .background-video {
      position: fixed;
      z-index: -1;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      filter: blur(2px);
    }

    .background-video video {
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
    }
  </style>

</head>

<body>
  <!-- <div class="background-video">
    <video autoplay muted loop>
      <source src="<?= base_url('assets/videos/bg2.mp4'); ?>" type="video/mp4">
    </video>
  </div> -->

  <section class="parallax">
    <h1>TesT GPT</h1>
  </section>
  <div class="container">
    <h2 class="text-center mt-4 text-dark">TesT GPT</h2>


  </div>
  <div class="row">
    <div id="response">
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
      <div class="chat-server">
        dddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd ddddddddd dddd
      </div>
      <div class="chat-client">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut modi tempora deserunt impedit esse, dicta expedita sit error. Necessitatibus delectus voluptatibus aliquam? Optio corrupti culpa vitae ea velit voluptatem!
      </div>
    </div>
  </div>
  <div class="chatbox">
    <div class="row justify-content-center chatboxBG">
      <div class="col-sm-8 col-sm-5 col-xl-6">
        <div class="row">
          <div class="col-12">
            <form>
              <div class="chat-box-tray ">
                <textarea id="conversation" tabindex="0" rows="1" class="form-control chatBoxInput" autofocus name="text" autocomplete="off"></textarea>
                <button type="submit" id="btnSend" value="Send" class="btn btn-wide border-0" style="background-color: #6c757d;"><i class="bi bi-send"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        $('.parallax').css('background-position-y', -(scrollTop / 2) + 'px');
      });

      $(window).keydown(function(event) {
        if (event.keyCode == 13) {
          event.preventDefault();
          $('form').submit();
        }
      });
      $('form').submit(function(event) {
        event.preventDefault();
        var button = $('#btnSend');
        button.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>').prop('disabled', true);
        $.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>chat/get_response',
          data: $('form').serialize(),
          success: function(response) {
            $('#conversation').val('');
            // Mendapatkan elemen div yang akan menampilkan response
            var responseDiv = document.getElementById("response");

            // Mendapatkan teks response dari AJAX
            var responseText = response;

            // Inisialisasi variabel i dan delay
            var i = 0;
            var delay = 50;

            // Membuat function untuk menampilkan teks dengan efek typing
            function typeWriter() {
              if (i < responseText.length) {
                responseDiv.innerHTML += responseText.charAt(i);
                i++;
                setTimeout(typeWriter, delay);
              } else {
                button.html('Send').prop('disabled', false);
                responseDiv.innerHTML += "<br>";
              }
            }

            // Menambahkan kelas loading ke tombol saat fungsi typeWriter() sedang berjalan
            button.html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>').prop('disabled', true);

            // Memanggil function untuk menampilkan teks dengan efek typing
            typeWriter();
          },
          complete: function() {
            // button.removeClass('loading');
            var responseDiv = document.getElementById("response");
            // responseDiv.innerHTML += "<br>";
          }
        });
      });
    });
  </script>
</body>

</html>