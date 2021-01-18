<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software-Hackathons | ShreeTechLabs-Event</title>

  <!--Attaching Talwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <!--Attaching Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!--Attaching Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

  <!-- Linking software-hackathon.css file -->
  <link rel="stylesheet" href="css/software-hackathon.css">
</head>

<body>

  <!-- Attaching navigation bar -->
  <?php
  Require 'nav.php';
  ?> 

  <!-- section-2 or hackathon-layout started -->
  <div class="container-fluid" id="section-2">

    <!-- row 1.0 started -->
    <div class="row">

      <?php 
        Require 'software-hackathon-fetching.php';
        while($row=mysqli_fetch_array($select_query_result)){
      ?>

      <!-- divided into half part of screen width for medium device -->
      <div class="col-md-6">

        <!-- row 1.1 started -->
        <div class="row" id="info-box" style="background-color: white; padding: 20px; margin:10px 10px 10px 0px;">

          <!-- column for logo of organisation started -->
          <div class="col-md-3">

            <img src="images/logo/dummy-hackathon-1.png" alt="" width="200" height="200">

          </div><!-- column for logo of organisation end -->

          <!-- column for text info related to hackathon started -->
          <div class="col-md-9">

            <!-- row 2.1.1 for hackathon title started -->
            <div class="row bold-title-hackathon">
              <span>
                <?php echo $row['title']; ?>
              </span>
            </div><!-- row 2.1.1 for hackathon title end -->

            <!-- row 2.1.2 for hackathon short intro started -->
            <div class="row">
              <span>
                <?php echo $row['short-intro']; ?>
              </span>
            </div>
            <hr> <!-- row 2.1.2 for hackathon short intro end -->

            <!-- row 2.1.3 for hackathon prize money & fee info started -->
            <div class="row">

              <!-- column for prize money started -->
              <div class="col-md-6">
                <span>Prize:
                  <?php echo $row['prize']; ?>
                </span>
              </div><!-- column for prize money end -->

              <!-- column for fee started -->
              <div class="col-md-6">
                <span>Fee:
                  <?php echo $row['fee']; ?>
                </span>
              </div><!-- column for fee end -->

            </div><!-- row 2.1.3 for hackathon prize money & fee info end -->

            <!-- row 2.1.4 for hackathon mode & deadline info started -->
            <div class="row">

              <!-- column for mode started -->
              <div class="col-md-6">
                <span>Mode:
                  <?php echo $row['mode']; ?>
                </span>
              </div><!-- column for mode ended -->

              <!-- column for deadline started -->
              <div class="col-md-6">
                <span>Deadline:
                  <?php echo $row['deadline']; ?>
                </span>
              </div><!-- column for deadline end -->

            </div> <!-- row 2.1.4 for hackathon mode & deadline info end -->

          </div><!-- column for text info related to hackathon end -->

        </div><!-- row 1.1 end -->

      </div><!-- divided into half part of screen width for medium device -->

      <?php } ?>

    </div><!-- row 1.0 ended -->

  </div><!-- section-2 or hackathon-layout Ended -->


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