<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>
        <?php echo $title ?>
    </title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="formval.js"> </script>
    <script src="tuan_item.js"> </script>
    <script src="skinsearch.js">
    </script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <script src="animation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $style2 ?>">
    <link rel="stylesheet" href="<?php echo $style1 ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <!-- Example Code -->

    <header class="header">
        <div id="navbar">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <div class="margin1">
                        <a class="navbar-brand" href="index.php"> <img src="pic/logoFinal.png" alt="Bootstrap"></a>
                        <img src="<?php echo $logo ?>" alt="Bootstrap" style="margin-left: -15px;"><a
                            style="color: white;"><?php echo $game1 ?></a>
                    </div>
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse margin" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto my-2 my-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php"
                                    style="margin-right: 10px;color: white;">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: white;">
                                    News
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark ">
                                    <li><a class="dropdown-item" href="LeagueOfLegend.php"
                                            style="text-align: left; color: white;"><img
                                                src="pic/LOL Logo clear background.png" alt="Bootstrap" width="40"
                                                height="40">League Of
                                            Legend</a></li>
                                    <li><a class="dropdown-item" href="TFTnew.php"
                                            style="text-align: left; color: white;"><img src="pic/tft logo.png"
                                                alt="Bootstrap" width="40" height="40">Teamfight
                                            Tactics</a>
                                    </li>
                                    <li><a class="dropdown-item" href="LoRnew.php"
                                            style="text-align: left; color: white;"><img src="pic/Runterra Logo.png"
                                                alt="Bootstrap" width="40" height="40">Legend of Runterra</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: white;">
                                    League of Legend
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark ">
                                    <li class="nav-item">
                                        <a class="nav-link" href="tuan_LOLadd.php"
                                            style="margin-right: 10px; color: white">Add LOL item</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tuan_searchLOL.php"
                                            style="margin-right: 10px; color: white">Search LOL item</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="addskin.php"
                                            style="margin-right: 10px; color: white">Add LOL Skin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="skinfavs2.php"
                                            style="margin-right: 10px; color: white">Favourite LOL Skins</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="matt_deck.php" style="margin-right: 10px; color: white">Deck
                                    Database</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="aboutUs.php" style="margin-right: 10px; color: white">About
                                    us</a>
                            </li>
                            <script type="text/javascript" src="jquery.min.js"></script>
                            <script type="text/javascript">
                            function sessionUnset() {
                            $.get("session_unset.php");
                            location.reload();
                            return false;
                            }
                            </script>
                            <?php
                            if (isset($_SESSION["session_uid"])){
                                echo '
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: white;">'
                                    . $_SESSION["session_uname"] . '
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark ">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" onclick="sessionUnset();"
                                            style="margin-right: 10px; color: white">Sign out</a>
                                    </li>

                                </ul>
                                </li>
                                ';
                            }
                            
                            else {
                                echo '
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="color: white;">
                                        Account
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark ">
                                        <li class="nav-item">
                                            <a class="nav-link" href="registration.php"
                                                style="margin-right: 10px; color: white">Register</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="signin.php"
                                                style="margin-right: 10px; color: white">Log in</a>
                                        </li>
                                        
    
                                    </ul>
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>