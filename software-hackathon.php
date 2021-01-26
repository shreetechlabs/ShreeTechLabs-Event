<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- for page description     -->
  <meta name="description"
    content="Software Hackathons: Get ready to participate in Software Hackathons">

  <!-- for keyword related to this page -->
  <meta name="keywords"
    content="hackathons, workshops, exhibitions, technical events, hackathon near me, workshop near me, exhibitions near me, techfests near me, how to know about hackathons, latest hackathons, software hackathons, hardware hackathons, ShreeTechLabs, shreetechlabs, shreetechlabs learning, shreetechlabs contest">

  <!-- for author description -->
  <meta name="author" content="ShreeTechLabs">

  <!-- for refresh the page -->
  <meta http-equiv="refresh" content="300">

  <!-- favicon -->
  <link rel="icon" type="image/png" href="images/logo/shreetechlabs-logo-white-background.png">

  <!-- page's title -->
  <title>Software Hackathons | ShreeTechLabs-Event | Powered by www.shreetechlabs.com
  </title>

  <!--Attaching Talwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <!--Attaching Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!--Attaching Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

  <!--css styling-->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style>
    #section-1 {
      background-image: url(images/banner/hackathon-banner.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .info-box {
      border-radius: 50px;
      transition: transform .5s;
    }

    .info-box:hover {
      transform: scale(1.1);
    }
  </style>

</head>

<body>

  <!-- Attaching navigation bar -->
  <?php
  Require 'nav.php';
  ?>

  <!-- alert for website -->
  <?php
  Require 'alert.php';
  ?>

  <!-- section-2 for featured Hackathons started-->
  <div id="section-2">

    <!-- row 1 started -->
    <div class="row" style="padding: 20px 50px 85px 50px;">

      <?php 
        Require 'software-hackathon-fetching.php';
        while($row=mysqli_fetch_array($select_query_result)){
      ?>


      <!-- left col-md-6 for layout of hachathon info box started -->
      <div class="col-12 col-md-6">

        <a href="<?php echo $row['eventLink'] ?>" target="_blank">
          <!-- row 2.1 started -->
          <div class="row info-box" style="background-color: white; padding: 20px; margin:10px 10px 10px 0px;">

            <!-- column for logo of organisation started -->
            <div class="col-md-3">

              <img src="<?php echo $row['logoPath'] ?>" alt="" width="200" height="200">

            </div><!-- column for logo of organisation end -->

            <!-- column for text info related to hackathon started -->
            <div class="col-md-9">

              <!-- row 2.1.1 for hackathon title started -->
              <div class="bold-title-hackathon">
                <span>
                  <?php echo $row['title'] ?>
                </span>
              </div><!-- row 2.1.1 for hackathon title end -->

              <!-- row 2.1.2 for hackathon short intro started -->
              <div>
                <span>
                  <?php echo $row['eventTagline'] ?>
                </span>
              </div>
              <hr> <!-- row 2.1.2 for hackathon short intro end -->

              <!-- row 2.1.3 for hackathon prize money & fee info started -->
              <div class="row no-gutters">

                <!-- column for prize money started -->
                <div class="col-md-6">
                  <span style="font-weight: 500;">Prize:</span>
                  <?php echo $row['prize'] ?>
                </div><!-- column for prize money end -->

                <!-- column for fee started -->
                <div class="col-md-6">
                  <span style="font-weight: 500;">Fee:</span>
                  <?php echo $row['fee'] ?>
                </div><!-- column for fee end -->

              </div><!-- row 2.1.3 for hackathon prize money & fee info end -->

              <!-- row 2.1.4 for hackathon mode & deadline info started -->
              <div class="row no-gutters">

                <!-- column for mode started -->
                <div class="col-md-6">
                  <span style="font-weight: 500;">Mode:</span>
                  <?php echo $row['mode'] ?>
                </div><!-- column for mode ended -->

                <!-- column for deadline started -->
                <div class="col-md-6">
                  <span style="font-weight: 500;">Deadline:</span>
                  <?php echo $row['deadline'] ?>
                </div><!-- column for deadline end -->

              </div> <!-- row 2.1.4 for hackathon mode & deadline info end -->

            </div><!-- column for text info related to hackathon end -->

          </div><!-- row 2.1 end -->
        </a>

      </div><!-- left col-md-6 for layout of hachathon info box started -->


      <?php } ?>

      <!-- column for explore more hackathon started -->
      <div class="hide-md">
        <a href="software-hackathon.php"><span class="explore-more">Explore More Hackathons ></span></a>
      </div><!-- column for explore more hackathon end -->

    </div> <!-- row 1 end -->

  </div><!-- section-2 for featured Hackathons started-->

  <footer class="text-gray-700 body-font">
    <div class="bg-gray-200">

      <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
        <a style="text-decoration: none;" href="https://www.youtube.com/channel/UCWFNyPgY48GuVMp5jdt3XuA"
          target="_blank"
          class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <img src="images/logo/shreetechlabs-logo-no-background.png" width="50px" height="100px" alt="">
          <span class="ml-3 text-xl">www.shreetechlabs.com</span>
        </a>

        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 ShreeTechLabs-Event |
          <a style="text-decoration: none;" href="mailto:asingh88029@gmail.com" rel="noopener noreferrer"
            class="text-gray-600 ml-1" target="_blank">Powered by <b>www.shreetechlabs.com</b></a>
        </p>

        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a href="https://www.facebook.com/Shreetechlabs" target="_blank" class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>

          <a href="https://www.twitter.com/shreetechlabs" target="_blank" class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>

          <a href=" https://www.instagram.com/shreetechlabs" target="_blank" class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>

          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>

  <!--JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</body>

</html>