<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <title>Akbr AI GPT!</title>
  <style>
    body {
      /* background-image: linear-gradient(to right, #06beb6, #06beb6); */
      background-color: whitesmoke;

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
      /* height: 30px; */
      overflow-y: hidden;
      resize: none;
      border-radius: 25px;
      margin-right: 10px;
    }

    .chat-box-tray {
      /* background: #eee; */
      display: flex;
      align-items: baseline;
      /* padding: 10px 15px; */
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


    .jarakBawah {
      margin-bottom: 150px;
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
      /* max-width: 70%;
      justify-content: end; */
    }

    .titleGPT {
      background-image: linear-gradient(to right, #06beb6, #06beb6);
      border-radius: 10px;
      justify-content: center;
      margin-top: 20px;
      padding: 10px 20px;
    }
  </style>

</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center text-center">
      <div class="col-md-6 titleGPT">
        <h2>TesT GPT</h2>
      </div>
    </div>
    <div class="row justify-content-center jarakBawah">
      <div class="col-md-6">
        <div id="response">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="chatbox">
        <div class="row justify-content-center chatboxBG">
          <div class="col-sm-8 col-sm-5 col-xl-6">
            <div class="row">
              <div class="col-12">
                <form>
                  <div class="chat-box-tray ">
                    <textarea id="conversation" tabindex="0" rows="1" class="form-control chatBoxInput" autofocus name="text" autocomplete="off"></textarea>
                    <button type="submit" id="btnSend" value="Send" class="btn btn-wide border-0" style="background-color: #19beb5;"><i class="bi bi-send"></i></button>
                  </div>
                </form>
              </div>
            </div>
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

      $('form').append('<small><div class="text-center">Powered by OPEN AI, Develop by <a href="www.muhakbar.com" target="_BLANK">www.muhakbar.com</a></div></small>')

      $(window).keydown(function(event) {
        if (event.keyCode == 13) {
          event.preventDefault();
          $('form').submit();
        }
      });
      $('form').submit(function(event) {
        event.preventDefault();
        var button = $('#btnSend');
        var conversation = $('#conversation').val();
        button.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>').prop('disabled', true);
        var responseDiv = $("#response");
        responseDiv.append('<div class="chat-client">' + conversation + '</div>');

        $.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>chat/get_response',
          data: $('form').serialize(),
          beforeSend: function() {
            $('#conversation').val('');
          },
          success: function(response) {
            // Mendapatkan teks response dari AJAX
            var responseText = response;

            // Inisialisasi variabel i dan delay
            var i = 0;
            var delay = 50;

            // Membuat function untuk menampilkan teks dengan efek typing
            responseDiv.append('<div class="chat-server"></div>');
            var lastChatServer = $('.chat-server').last();

            function typeWriter() {
              if (i < responseText.length) {
                lastChatServer.html(lastChatServer.html() + responseText.charAt(i));
                i++;
                setTimeout(typeWriter, delay);
              } else {
                button.html('<i class="bi bi-send"></i>').prop('disabled', false);
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