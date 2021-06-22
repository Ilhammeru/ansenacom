<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="<?= base_url() ?>assets/font/font.css">

    <!-- jquery -->
    <script src="<?= base_url('assets/jquery/dist/jquery.min.js') ?>" charset="utf-8"></script>

    <title><?= $title; ?></title>

    <!-- styling -->
      <style media="screen">
        /* variable */
        html {
          --montserrat-black: "Montserrat-black";
          --montserrat-medium: "montserrat-medium";
          --montserrat-light: "montserrat-light";
          --newyork-heavy-italic: "Newyork-heavy-italic";
          --newyork-heavy: "Newyork-heavy";
          --newyork-bold: "Newyork-bold";
        }
        /* end variable */

        /* keyframe */
        @keyframes cloud {
          0% {
            transform: scale(1.5);
            left: 21em;
            bottom: 12.5em;
          }

          100% {
            transform: scale(1);
            left: 0;
            bottom: 0;
          }
        }

        @keyframes gate {
          0% {
            transform: scale(2);
            left: 40em;
            top: -25em;
          }

          100% {
            transform: scale(1);
            left: 0;
            top: 0;
          }
        }


        body {
          margin: 0;
          padding: 0;
          width: 100%;
          max-width: 100%;
        }

        .main-div {
          overflow: hidden;
        }

        .cloud {
          overflow: hidden;
          position: absolute;
        }

        .cloud-img {
          height: 95em;
          position: relative;
          left: 21em;
          bottom: 12.5em;
          width: 100%;
          height: auto;
          transform: scale(1.5);
        }

        .gate-img {
          width: 100%;
          height: auto;
          position: absolute;
          left: 40em;
          top: -25em;
          transform: scale(2);
          background-color: rgba(0,0,0,0.5);
        }

        .text-cloud {
          width: 20em;
          height: 5em;
          position: absolute;
          top: 9em;
          left: 8em;
          background: transparent;
          overflow-y: hidden;
          /* background: red; */
        }

        .text-cloud-1 {
          width: 20em;
          height: 5em;
          position: absolute;
          top: 14.5em;
          left: 8em;
          background: transparent;
          overflow-y: hidden;
          /* background: blue; */
        }

        .text-cloud-2 {
          width: 35em;
          height: 5em;
          position: absolute;
          top: 19em;
          left: 8em;
          background: transparent;
          overflow-y: hidden;
          /* background: blue; */
        }

        .text-cloud-3 {
          width: 20em;
          height: 5em;
          position: absolute;
          top: 24.5em;
          left: 8em;
          background: transparent;
          overflow-y: hidden;
          /* background: blue; */
        }

        .text-cloud-4 {
          width: 30em;
          height: 5em;
          position: absolute;
          top: 29.6em;
          left: 8em;
          background: transparent;
          overflow-y: hidden;
          /* background: blue; */
        }

        .p-help,
        .p-help-1,
        .p-help-2,
        .p-help-3,
        .p-help-4 {
          position: absolute;
          width: 20em;
          height: auto;
          top: -6em;
          left: 0;
          background: transparent;
          transition: ease 1.5s;
          /* background: blue */
        }

        .p-cloud {
          padding: 0;
          margin: 0;
          font-family: var(--newyork-heavy-italic);
          color: #fff;
          font-size: 4em;
          text-transform: uppercase;
        }

        .p-cloud-1 {
          font-family: var(--newyork-heavy);
        }

        .p-cloud-2,
        .p-cloud-4 {
          font-family: var(--newyork-heavy-italic);
          letter-spacing: 15px;
        }

        .p-cloud-3 {
          font-family: var(--newyork-heavy);
        }

        .ansena-gif {
          position: absolute;
          top: 5em;
          right: 0;
          width: 25em;
          height: auto;
          transition: ease-in-out 1.5s;
          opacity: 0;
        }

        .img-ansena-gif {
          width: 100%;
          height: auto;
        }

        .text-slide {
          position: absolute;
          top: 24em;
          right: 4em;
          width: 16em;
          z-index: 10000;
          overflow: hidden;
        }

        .p-slide {
          position: relative;
          top: 0;
          right: 20em;
          transition: cubic-bezier(0.74, 0, 0.19, 1) 1500ms;
        }

        .p-slide > p {
          font-family: var(--montserrat-light);
          color: #fff;
          font-size: 0.9em;
          text-align: right;
        }
      </style>
    <!-- end styling -->
  </head>
  <body>

    <section>
      <div class="main-div">
        <div class="cloud">
          <img src="<?= $cloud ?>" alt="" class="img cloud-img">
          <img src="<?= $gate ?>" alt="" class="img gate-img">

          <div class="text">

            <div class="text-cloud">
              <div class="p-help">
                <p class="p-cloud">create</p>
              </div>
            </div>

            <div class="text-cloud-1">
              <div class="p-help-1">
                <p class="p-cloud p-cloud-1">that</p>
              </div>
            </div>

            <div class="text-cloud-2">
              <div class="p-help-2">
                <p class="p-cloud p-cloud-2">something</p>
              </div>
            </div>

            <div class="text-cloud-3">
              <div class="p-help-3">
                <p class="p-cloud p-cloud-3">we call</p>
              </div>
            </div>

            <div class="text-cloud-4">
              <div class="p-help-4">
                <p class="p-cloud p-cloud-4">goodness</p>
              </div>
            </div>

            <div class="ansena-gif">
              <img src="<?= base_url('assets/images/GIFAnsena .gif') ?>" class="img-ansena-gif" alt="">
            </div>

            <div class="text-slide">
              <div class="p-slide">
                <p>Standing out like the metal plane, staying strong like the concrete</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.gate-img').click((e) => {
          e.preventDefault();

          $('.cloud-img').css({
            "animation": "cloud 1.5s cubic-bezier(0.74, 0, 0.19, 1)",
            "-webkit-animation": "cloud 1.5s forwards"
          });

          $('.gate-img').css({
            "transition-timing-function": "ease-in-out;",
            "animation": "gate 1.5s cubic-bezier(0.74, 0, 0.19, 1)",
            "-webkit-animation": "gate 1.5s forwards"
          })


          $('.p-help').css({
            "top": "0"
          });

          setTimeout(() => {
            $('.p-help-1').css({
              "top": "0"
            });
          },200);

          setTimeout(() => {
            $('.p-help-2').css({
              "top": "0"
            });
          },300);

          setTimeout(() => {
            $('.p-help-3').css({
              "top": "0"
            });
          },400);

          setTimeout(() => {
            $('.p-help-4').css({
              "top": "0"
            });
          },500);

          setTimeout(() => {
            $('.ansena-gif').css({
              "opacity": "1"
            });
          },400);

          setTimeout(() => {
            $('.p-slide').css({
              "right": "0"
            });
          },100);

        })
      })
    </script>
