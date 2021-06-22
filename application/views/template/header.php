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
          --newyork-bold-italic: "Newyork-bold-italic";
          --newyork-large-heavy: "Newyork-large-heavy";
          --newyork-large-bold: "Newyork-large-bold";
          --newyork-large-regular: "Newyork-large-regular";
          --shorelines-bold: "shorelines-bold";
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
            transform: scale(2.5);
            left: 63em;
            top: -35em;
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
          overflow: hidden;
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
          left: 63em;
          top: -35em;
          transform: scale(2.5);
        }

        .text-cloud {
          width: 20em;
          height: 5em;
          position: absolute;
          top: 9em;
          left: 4em;
          background: transparent;
          overflow-y: hidden;
          /* background: red; */
        }

        .text-cloud-1 {
          width: 20em;
          height: 5em;
          position: absolute;
          top: 14.5em;
          left: 4em;
          background: transparent;
          overflow-y: hidden;
          /* background: blue; */
        }

        .text-cloud-2 {
          width: 35em;
          height: 5em;
          position: absolute;
          top: 19em;
          left: 4em;
          background: transparent;
          overflow-y: hidden;
          /* background: blue; */
        }

        .text-cloud-3 {
          width: 20em;
          height: 5em;
          position: absolute;
          top: 24.5em;
          left: 4em;
          background: transparent;
          overflow-y: hidden;
          /* background: blue; */
        }

        .text-cloud-4 {
          width: 30em;
          height: 5em;
          position: absolute;
          top: 29.6em;
          left: 4em;
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
          font-family: var(--newyork-large-bold);
        }

        .p-cloud-2,
        .p-cloud-4 {
          font-family: var(--newyork-heavy-italic);
          letter-spacing: 15px;
        }

        .p-cloud-3 {
          font-family: var(--newyork-large-bold);
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

        .p-slide,
        .p-slide-1,
        .p-slide-2,
        .p-slide-3 {
          position: relative;
          top: 0;
          right: 20em;
          transition: cubic-bezier(0.74, 0, 0.19, 1) 1500ms;
        }

        .p-slide > p,
        .p-slide-1 > p,
        .p-slide-2 > p,
        .p-slide-3 {
          font-family: var(--montserrat-light);
          color: #fff;
          font-size: 0.9em;
          text-align: right;
        }

        .p-slide-1 > p,
        .p-slide-2 > p {
          font-family: var(--montserrat-medium);
        }

        .p-slide-3 > p {
          padding: 0;
          margin: 0;
        }

        .overlay {
          width: 100%;
          height: 100vh;
          background-color: rgba(0,0,0,0.3);
          position: absolute;
          top: 0;
          left: 0;
          transition: ease 1.5s;
          opacity: 0;
        }

        .click {
          width: 100%;
          height: 100vh;
          background: transparent;
          position: absolute;
          top: 0;
          left: 0;
        }

        .header {
          position: absolute;
          top: -5em;
          left: 0;
          right: 0;
          background: #fff;
          z-index: 11000;
          display: flex;
          padding: 0 4em;
          transition: ease-in-out .8s;
        }

        .menu {
          width: 100%;
          text-align: center;
          display: flex;
          justify-content: center;
        }

        .menu > ul {
          display: flex;
        }

        .menu > ul > li {
          list-style: none;
          margin: 0 2em;
          cursor: pointer;
          font-family: var(--montserrat-light);
          transition: ease .5s;
        }

        .logo {
          position: absolute;
          top: 0.5em;
        }

        .logo > img {
          width: 38px;
          height: auto;
        }

        .nav-active {
          letter-spacing: 5px;
        }

        .arrow {
          text-align: center;
          position: absolute;
          bottom: 36px;
          left: 0;
          right: 0;
          z-index: 1000000;
          background: red;
          padding: 0.5em 0;
        }

        .div-arrow {
          height: 25px;
          width: 25px;
          background-color: #fff;
          border-radius: 50%;
          display: inline-block;
          padding: 8px;
          transition: ease .2s;
          cursor: pointer;
          margin: 1em;
        }

        .div-arrow > img {
          position: relative;
          top: 0;
          left: 0;
          right: 0;
        }

        .div-arrow:hover {
          transform: scale(1.3);
        }
      </style>
    <!-- end styling -->
  </head>
  <body>

    <section>
      <nav class="header">
        <div class="logo">
          <img src="<?= base_url('assets/images/ANSENA.png') ?>" alt="">
        </div>

        <div class="menu">
          <ul>
            <li class="nav-active">Home</li>
            <li>About</li>
            <li>Service</li>
            <li>Contact</li>
          </ul>
        </div>
      </nav>
      <div class="main-div">
        <div class="cloud">
          <img src="<?= $cloud ?>" alt="" class="img cloud-img">
          <img src="<?= $gate ?>" alt="" class="img gate-img">
          <div class="overlay"></div>

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

              <div class="p-slide-1">
                <p>
                  Ansena brings out the best in each on of our souls, and offers more than just experience:
                </p>
              </div>

              <div class="p-slide-2">
                <p>
                  a good life
                </p>
              </div>

              <div class="p-slide-3">
                <p>
                  We grow bigger.
                </p>
                <p>
                  And make you bigger to
                </p>
              </div>
            </div>

          </div>
          <!-- end div text -->

        </div>
        <!-- end div cloud -->

        <!-- <div class="arrow">
          <div class="div-arrow">
            <img src="<?= base_url('assets/images/Arrow.png') ?>" alt="">
          </div>
        </div> -->

      </div>
      <!-- end main div -->

      <div class="click"></div>
    </section>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.click').click((e) => {
          e.preventDefault();

          $('.cloud-img').css({
            "animation": "cloud 1.5s cubic-bezier(0.74, 0, 0.19, 1)",
            "animation-fill-mode": "forwards"
          });

          $('.gate-img').css({
            "transition-timing-function": "ease-in-out;",
            "animation": "gate 1.5s cubic-bezier(0.74, 0, 0.19, 1)",
            "animation-fill-mode": "forwards"
          })

          $('.overlay').css({
            "opacity": "1"
          });


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

          setTimeout(() => {
            $('.p-slide-1').css({
              "right": "0"
            });
          },150);

          setTimeout(() => {
            $('.p-slide-2').css({
              "right": "0"
            });
          },150);

          setTimeout(() => {
            $('.p-slide-3').css({
              "right": "0"
            });
          },250);

          setTimeout(() => {
            $('.header').css({
              "top": "0"
            });
          },250);

        })
      })
    </script>
