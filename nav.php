<!-- navigation bar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark px-2">

    <!-- Site logo & Title   -->
    <a class="navbar-brand" href="index.php">
        <img src="images/logo/shreetechlabs-logo-white-background.png" width="50" height="50"
            class="d-inline-block align-top" alt="..." loading="lazy">
        <span id="site-name"><b>| ShreeTechLabs-Event</b></span>
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
                    aria-haspopup="true" aria-expanded="false">Hackathon 
                    <span class="badge badge-info">
                         <?php 
                             Require "software-hackathon-fetching.php";
                             $sum=$total_row_software;
                             Require "hardware-hackathon-fetching.php";
                             $sum=$sum+$total_row_hardware;
                             echo $sum."+";
                         ?>
                    </span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="software-hackathon.php">Software Edition 
                        <span
                            class="badge badge-secondary">
                            <?php 
                                 Require "software-hackathon-fetching.php";
                                 echo $total_row_software."+";
                            ?>
                        </span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="hardware-hackathon.php">Hardware Edition 
                        <span
                            class="badge badge-secondary">
                            <?php 
                                 Require "hardware-hackathon-fetching.php";
                                 echo $total_row_hardware."+";
                            ?>
                        </span>
                    </a>

                </div>

            </li><!-- Hackathons End -->

            <!-- Tech-Cometition Started-->
            <li class="nav-item">
                <a class="nav-link" href="tech-competition.php">Tech-Competition 
                    <span
                        class="badge badge-info">
                        <?php 
                             Require "tech-competition-fetching.php";
                             echo $total_row_tech."+";
                        ?>
                    </span>
                </a>
            </li><!-- Exhibitions Ends-->

            <!-- Workshop Started-->
            <li class="nav-item">
                <a class="nav-link" href="workshop.php">Workshop 
                    <span class="badge badge-info">
                        <?php 
                             Require "workshop-fetching.php";
                             echo $total_row_workshop."+";
                        ?>
                    </span>
                </a>
            </li><!-- Workshop Ends-->

            <!-- Exhibitions -->
            <li class="nav-item">
                <a class="nav-link" href="exhibition.php">Exhibition 
                    <span class="badge badge-info">
                        <?php 
                             Require "exhibition-fetching.php";
                             echo $total_row_exhibition."+";
                        ?>
                    </span>
                </a>
            </li><!-- Exhibitions Ends-->

        </ul>
    </div><!-- Navigation Links Ends-->

</nav><!-- navigation-bar-end -->