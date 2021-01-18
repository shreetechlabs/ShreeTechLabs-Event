<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibitions | ShreeTechLabs-Event</title>

    <!--Attaching Talwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!--Attaching Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--Attaching Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

    <!-- Linking software-hackathon.css file -->
    <link rel="stylesheet" href="css/exhibition.css">
</head>

<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">

    <!-- Site logo & Title   -->
    <a class="navbar-brand" href="index.php">
      <img src="images/logo/shreetechlabs-logo-white-background.png" width="50" height="50"
        class="d-inline-block align-top" alt="..." loading="lazy">
      <span id="site-name" style="display: inline-block; margin-top: 8px;"><b>| ShreeTechLabs-Event</b></span>
    </a><!-- Site logo & Title Ends  -->

    <!-- Toggle Button For Mobile Device -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><!-- Toggle Button For Mobile Device Ends -->

    <!-- Navigation Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <!-- Home -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <!-- Hackathons -->
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Hackathon <span class="badge badge-info">40+</span>
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="#">Software Edition <span class="badge badge-secondary">35+</span></a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">Hardware Edition <span class="badge badge-secondary">4+</span></a>

          </div>

        </li><!-- Hackathons End -->

        <!-- Tech Competition -->
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Tech Competition <span class="badge badge-info">10+</span>
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="#">Robo war <span class="badge badge-secondary"></span></a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">Idea Pitching <span class="badge badge-secondary"></span>
            </a>

          </div>

        </li> <!-- Tech Competition End -->

        <!-- Workshops -->
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Workshop <span class="badge badge-info">12+</span>
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="#">Internet of things(Iot) <span class="badge badge-secondary"></span>
            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">Robotics <span class="badge badge-secondary"></span>
            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">Ethical Hacking <span class="badge badge-secondary"></span>
            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">Web Development <span class="badge badge-secondary"></span>
            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">Android Development <span class="badge badge-secondary"></span>
            </a>

          </div>

        </li> <!-- Workshops Ends-->

        <!-- Exhibitions -->
        <li class="nav-item">
          <a class="nav-link" href="#">Exhibition <span class="badge badge-info">1+</span></a>
        </li><!-- Exhibitions Ends-->

      </ul>
    </div><!-- Navigation Links Ends-->

    </nav><!-- navigation-bar-end -->

    <!-- section-2 or hackathon-layout started -->
    <div class="container-fluid" id="section-2">

        <!-- row 1.0 started -->
        <div class="row">

            <!-- divided into half part of screen width for medium device -->
            <div class="col-md-6">

                <!-- row 1.1 started -->
                <div class="row up-left-corner-info-box"
                    style="background-color: white; padding: 20px; margin:10px 10px 10px 0px;">

                    <!-- column for logo of organisation started -->
                    <div class="col-md-3">

                        <img src="images/logo/dummy-hackathon-1.png" alt="" width="200" height="200">

                    </div><!-- column for logo of organisation end -->

                    <!-- column for text info related to hackathon started -->
                    <div class="col-md-9">

                        <!-- row 2.1.1 for hackathon title started -->
                        <div class="row bold-title-hackathon">
                            <span>Smart India Hackathon 2020</span>
                        </div><!-- row 2.1.1 for hackathon title end -->

                        <!-- row 2.1.2 for hackathon short intro started -->
                        <div class="row">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia,
                                dignissimos.</span>
                        </div>
                        <hr> <!-- row 2.1.2 for hackathon short intro end -->

                        <!-- row 2.1.3 for hackathon prize money & fee info started -->
                        <div class="row">

                            <!-- column for prize money started -->
                            <div class="col-md-6">
                                prize: 25,000
                            </div><!-- column for prize money end -->

                            <!-- column for fee started -->
                            <div class="col-md-6">
                                Fee: 1200
                            </div><!-- column for fee end -->

                        </div><!-- row 2.1.3 for hackathon prize money & fee info end -->

                        <!-- row 2.1.4 for hackathon mode & deadline info started -->
                        <div class="row">

                            <!-- column for mode started -->
                            <div class="col-md-6">
                                Mode: Offline
                            </div><!-- column for mode ended -->

                            <!-- column for deadline started -->
                            <div class="col-md-6">
                                Deadline: 25-Jan-2020
                            </div><!-- column for deadline end -->

                        </div> <!-- row 2.1.4 for hackathon mode & deadline info end -->

                    </div><!-- column for text info related to hackathon end -->

                </div><!-- row 2.1 end -->

            </div><!-- divided into half part of screen width for medium device -->

            <!-- divided into half part of screen width for medium device -->
            <div class="col-md-6">

                <!-- row 1.2 started -->
                <div class="row up-right-corner-info-box"
                    style="background-color: white; padding: 20px; margin:10px 10px 10px 0px;">

                    <!-- column for logo of organisation started -->
                    <div class="col-md-3">

                        <img src="images/logo/dummy-hackathon-1.png" alt="" width="200" height="200">

                    </div><!-- column for logo of organisation end -->

                    <!-- column for text info related to hackathon started -->
                    <div class="col-md-9">

                        <!-- row 1.2.1 for hackathon title started -->
                        <div class="row bold-title-hackathon">
                            <span>Smart India Hackathon 2020</span>
                        </div><!-- row 1.2.1 for hackathon title end -->

                        <!-- row 1.2.2 for hackathon short intro started -->
                        <div class="row">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia,
                                dignissimos.</span>
                        </div>
                        <hr> <!-- row 1.2.2 for hackathon short intro end -->

                        <!-- row 1.2.3 for hackathon prize money & fee info started -->
                        <div class="row">

                            <!-- column for prize money started -->
                            <div class="col-md-6">
                                prize: 25,000
                            </div><!-- column for prize money end -->

                            <!-- column for fee started -->
                            <div class="col-md-6">
                                Fee: 1200
                            </div><!-- column for fee end -->

                        </div><!-- row 1.2.3 for hackathon prize money & fee info end -->

                        <!-- row 1.2.4 for hackathon mode & deadline info started -->
                        <div class="row">

                            <!-- column for mode started -->
                            <div class="col-md-6">
                                Mode: Offline
                            </div><!-- column for mode ended -->

                            <!-- column for deadline started -->
                            <div class="col-md-6">
                                Deadline: 25-Jan-2020
                            </div><!-- column for deadline end -->

                        </div> <!-- row 1.2.4 for hackathon mode & deadline info end -->

                    </div><!-- column for text info related to hackathon end -->

                </div><!-- row 1.2 end -->

            </div><!-- divided into half part of screen width for medium device -->

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