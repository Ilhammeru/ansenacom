<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- jquery -->
    <script src="<?= base_url('assets/jquery/dist/jquery.min.js') ?>" charset="utf-8"></script>

    <title><?= $title; ?></title>

    <!-- styling -->
      <style media="screen">

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
          z-index: 100;
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
          position: relative;
          bottom: 50em;
        }

        .gate {
          z-index: 1000;
        }
      </style>
    <!-- end styling -->
  </head>
  <body>

    <section>
      <div class="main-div">
        <div class="cloud">
          <img src="<?= $cloud ?>" alt="" class="img cloud-img">
        </div>
        <div class="gate">
          <img src="<?= $gate ?>" alt="" class="img gate-img">
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


        })
      })
    </script>
