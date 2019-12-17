<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
        <a class="navbar-brand" href="#">
            <img src="https://course_report_production.s3.amazonaws.com/rich/rich_files/rich_files/4149/s200/codefactory-vienna-logo.jpg" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><i class="fas fa-home mr-1"></i>Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book mr-1"></i>Course</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#one">Full Stack Development</a>
                        <a class="dropdown-item" href="#two">Frontend</a>
                        <a class="dropdown-item" href="#three">Backend</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/event/create"><i class="fas fa-user-friends mr-1"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/event/create"><i class="far fa-envelope-open mr-1"></i>Contact</a>
                </li>
            </ul>
            <!-- single info -->
            <div class="nav-info-items d-none d-lg-flex ">
                <!-- end of single info -->
                <!-- single info -->
                <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                    <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart"></i></span>
                    <p class="mb-0 text-capitalize"><span id="item-count">2 </span></p>
                </div>
                <!-- end of single info -->
            </div>
        </div> <!-- nav div -->
<!-- login icon -->
        <!-- <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user userIcon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="mr-4">
                <?php
                if ( isset($_SESSION['user' ])!="" ) {

                    ?>
                    <a class='dropdown-item' href='#'>You are signed in as
                    
                    <?=$userRow['userName']?>

                    </a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='../login/logout.php?logout'>Sign Out</a>

                    <?php

                } elseif ( isset($_SESSION['admin' ])!="" ){
                    ?>
                    <a class='dropdown-item' href='#'>You are signed in as 
                        <span class="text-info font-weight-bold">                    
                        <?=$userRow['role']?>
                        </span>
                    </a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='../login/logout.php?logout'>Sign Out</a>

                    <?php
                    } else {
                    echo "<a class='dropdown-item' href='../login/login.php'>Sign In</a>";
                    }
                    ?>
                    </div>
                </div>
            </li>
        </ul>   -->


    </nav> <!-- nav end -->
</div>