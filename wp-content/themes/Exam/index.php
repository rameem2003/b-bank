<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- <link rel="stylesheet" href="/css/style.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    <?php include 'header.php' ?>

    <div class="bangladesh-bank">
        <div class="container">
            <!-- <img src="<?php echo get_theme_file_uri() . '/assets/img/bb_banner.jpg'  ?> " alt=""> -->
        </div>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_content">
                            <div class="header-left">
                                <nav class="navbar navbar-dark">
                                    <div class="container">
                                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                                            <div class="offcanvas-header">
                                                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                                                    Dark offcanvas
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <form>
                                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Dropdown
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-dark">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider" />
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <a class="navbar-brand" href="#">বাংলা</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_inner">
            <div class="container">
                <div class="row">
                    <div class="logo_banner mx-auto">
                        <!--Navigation bar start-->
                        <img class="w-100" src="<?php echo get_theme_file_uri() . '/assets/img/bb_banner.jpg'  ?> " alt="">
                        <!--Navigation bar end-->

                        <div class="navigation">
                            <div id="navigation-bar">
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container">
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Features</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Pricing</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="home-slider">
                            <!-- Slider main container -->
                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <!-- <img src="<?php echo get_theme_file_uri() . '/assets/img/fepd_webnotice_sep2023.jpg'  ?>" class="d-block w-100" alt="..." /> -->

                                        <?php if (is_active_sidebar('Banner')) {
                                            dynamic_sidebar('banner');
                                        } ?>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/rfcd.jpg'  ?> " class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_theme_file_uri() . '/assets/img/web---2.jpg'  ?>" class="d-block w-100" alt="..." />
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="gswrap">
                            <div class="governor_section">
                                <div class="governor_section_header">
                                    <span class="title">Honorable Governor</span>
                                </div>

                                <div class="governor_section_content">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/img/abdurrouftalukder.jpg'  ?>" alt="" />

                                    <div class="governor_section_content_body">
                                        <h2>
                                            Mr. Abdur Rouf Talukder
                                            <span class="photo-subcaption">Honorable Governor of Bangladesh Bank</span>
                                        </h2>

                                        <a href="/en/index.php/about/governor">more....</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="contentitem">
                            <div class="box-red">
                                <h2 class="box-red_title">Monetary Policy</h2>
                                <div class="box-red_content">
                                    <div class="box-red_content_image">
                                        <span class="icon-monetary_policy"></span>
                                    </div>
                                    <div class="box-red_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="../../../../../monetaryactivity/mps/mps_h2fy24.pdf">
                                                    <i class="fa fa-angle-right"></i>MPS (January-June,
                                                    2024)</a>&nbsp;&nbsp;
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/monetarypolicy"><i class="fa fa-angle-right"></i>Monetary Policy
                                                    Archive</a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/mpc_resolution"><i class="fa fa-angle-right"></i>MPC Resolution</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/repoauction"><i class="fa fa-angle-right"></i>Repo Reverse Repo
                                                    Auction</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="box-green">
                                <h2 class="box-green_title">
                                    <a href="/en/index.php/mediaroom/index">MEDIA &amp; Press Release</a>
                                </h2>
                                <div class="box-green_content">
                                    <div class="box-green_content_image">
                                        <span class="icon-media_publication"></span>
                                    </div>
                                    <div class="box-green_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/circular"><i class="fa fa-angle-right"></i>Circulars/Circular
                                                    Letters
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/press_release"><i class="fa fa-angle-right"></i>Press Release
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/about/guidelist"><i class="fa fa-angle-right"></i>Regulations And
                                                    Guidelines</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/about/tenders"><i class="fa fa-angle-right"></i>Procurements
                                                    underway</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-red">
                                <h2 class="box-red_title">Monetary Policy</h2>
                                <div class="box-red_content">
                                    <div class="box-red_content_image">
                                        <span class="icon-monetary_policy"></span>
                                    </div>
                                    <div class="box-red_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="../../../../../monetaryactivity/mps/mps_h2fy24.pdf">
                                                    <i class="fa fa-angle-right"></i>MPS (January-June,
                                                    2024)</a>&nbsp;&nbsp;
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/monetarypolicy"><i class="fa fa-angle-right"></i>Monetary Policy
                                                    Archive</a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/mpc_resolution"><i class="fa fa-angle-right"></i>MPC Resolution</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/repoauction"><i class="fa fa-angle-right"></i>Repo Reverse Repo
                                                    Auction</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="box-green">
                                <h2 class="box-green_title">
                                    <a href="/en/index.php/mediaroom/index">MEDIA &amp; Press Release</a>
                                </h2>
                                <div class="box-green_content">
                                    <div class="box-green_content_image">
                                        <span class="icon-media_publication"></span>
                                    </div>
                                    <div class="box-green_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/circular"><i class="fa fa-angle-right"></i>Circulars/Circular
                                                    Letters
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/press_release"><i class="fa fa-angle-right"></i>Press Release
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/about/guidelist"><i class="fa fa-angle-right"></i>Regulations And
                                                    Guidelines</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/about/tenders"><i class="fa fa-angle-right"></i>Procurements
                                                    underway</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-red">
                                <h2 class="box-red_title">Monetary Policy</h2>
                                <div class="box-red_content">
                                    <div class="box-red_content_image">
                                        <span class="icon-monetary_policy"></span>
                                    </div>
                                    <div class="box-red_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="../../../../../monetaryactivity/mps/mps_h2fy24.pdf">
                                                    <i class="fa fa-angle-right"></i>MPS (January-June,
                                                    2024)</a>&nbsp;&nbsp;
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/monetarypolicy"><i class="fa fa-angle-right"></i>Monetary Policy
                                                    Archive</a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/mpc_resolution"><i class="fa fa-angle-right"></i>MPC Resolution</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/repoauction"><i class="fa fa-angle-right"></i>Repo Reverse Repo
                                                    Auction</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="box-green">
                                <h2 class="box-green_title">
                                    <a href="/en/index.php/mediaroom/index">MEDIA &amp; Press Release</a>
                                </h2>
                                <div class="box-green_content">
                                    <div class="box-green_content_image">
                                        <span class="icon-media_publication"></span>
                                    </div>
                                    <div class="box-green_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/circular"><i class="fa fa-angle-right"></i>Circulars/Circular
                                                    Letters
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/press_release"><i class="fa fa-angle-right"></i>Press Release
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/about/guidelist"><i class="fa fa-angle-right"></i>Regulations And
                                                    Guidelines</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/about/tenders"><i class="fa fa-angle-right"></i>Procurements
                                                    underway</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-red">
                                <h2 class="box-red_title">Monetary Policy</h2>
                                <div class="box-red_content">
                                    <div class="box-red_content_image">
                                        <span class="icon-monetary_policy"></span>
                                    </div>
                                    <div class="box-red_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="../../../../../monetaryactivity/mps/mps_h2fy24.pdf">
                                                    <i class="fa fa-angle-right"></i>MPS (January-June,
                                                    2024)</a>&nbsp;&nbsp;
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/monetarypolicy"><i class="fa fa-angle-right"></i>Monetary Policy
                                                    Archive</a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/mpc_resolution"><i class="fa fa-angle-right"></i>MPC Resolution</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/repoauction"><i class="fa fa-angle-right"></i>Repo Reverse Repo
                                                    Auction</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="box-green">
                                <h2 class="box-green_title">
                                    <a href="/en/index.php/mediaroom/index">MEDIA &amp; Press Release</a>
                                </h2>
                                <div class="box-green_content">
                                    <div class="box-green_content_image">
                                        <span class="icon-media_publication"></span>
                                    </div>
                                    <div class="box-green_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/circular"><i class="fa fa-angle-right"></i>Circulars/Circular
                                                    Letters
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/press_release"><i class="fa fa-angle-right"></i>Press Release
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/about/guidelist"><i class="fa fa-angle-right"></i>Regulations And
                                                    Guidelines</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/about/tenders"><i class="fa fa-angle-right"></i>Procurements
                                                    underway</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-red">
                                <h2 class="box-red_title">Monetary Policy</h2>
                                <div class="box-red_content">
                                    <div class="box-red_content_image">
                                        <span class="icon-monetary_policy"></span>
                                    </div>
                                    <div class="box-red_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="../../../../../monetaryactivity/mps/mps_h2fy24.pdf">
                                                    <i class="fa fa-angle-right"></i>MPS (January-June,
                                                    2024)</a>&nbsp;&nbsp;
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/monetarypolicy"><i class="fa fa-angle-right"></i>Monetary Policy
                                                    Archive</a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/mpc_resolution"><i class="fa fa-angle-right"></i>MPC Resolution</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/repoauction"><i class="fa fa-angle-right"></i>Repo Reverse Repo
                                                    Auction</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="box-green">
                                <h2 class="box-green_title">
                                    <a href="/en/index.php/mediaroom/index">MEDIA &amp; Press Release</a>
                                </h2>
                                <div class="box-green_content">
                                    <div class="box-green_content_image">
                                        <span class="icon-media_publication"></span>
                                    </div>
                                    <div class="box-green_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/circular"><i class="fa fa-angle-right"></i>Circulars/Circular
                                                    Letters
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/press_release"><i class="fa fa-angle-right"></i>Press Release
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/about/guidelist"><i class="fa fa-angle-right"></i>Regulations And
                                                    Guidelines</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/about/tenders"><i class="fa fa-angle-right"></i>Procurements
                                                    underway</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-red">
                                <h2 class="box-red_title">Monetary Policy</h2>
                                <div class="box-red_content">
                                    <div class="box-red_content_image">
                                        <span class="icon-monetary_policy"></span>
                                    </div>
                                    <div class="box-red_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="../../../../../monetaryactivity/mps/mps_h2fy24.pdf">
                                                    <i class="fa fa-angle-right"></i>MPS (January-June,
                                                    2024)</a>&nbsp;&nbsp;
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/monetarypolicy"><i class="fa fa-angle-right"></i>Monetary Policy
                                                    Archive</a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/mpc_resolution"><i class="fa fa-angle-right"></i>MPC Resolution</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/monetaryactivity/repoauction"><i class="fa fa-angle-right"></i>Repo Reverse Repo
                                                    Auction</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="box-green">
                                <h2 class="box-green_title">
                                    <a href="/en/index.php/mediaroom/index">MEDIA &amp; Press Release</a>
                                </h2>
                                <div class="box-green_content">
                                    <div class="box-green_content_image">
                                        <span class="icon-media_publication"></span>
                                    </div>
                                    <div class="box-green_content_item">
                                        <ul class="list">
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/circular"><i class="fa fa-angle-right"></i>Circulars/Circular
                                                    Letters
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/mediaroom/press_release"><i class="fa fa-angle-right"></i>Press Release
                                                </a>
                                            </li>
                                            <li class="list_item">
                                                <a href="/en/index.php/about/guidelist"><i class="fa fa-angle-right"></i>Regulations And
                                                    Guidelines</a>
                                            </li>

                                            <li class="list_item">
                                                <a href="/en/index.php/about/tenders"><i class="fa fa-angle-right"></i>Procurements
                                                    underway</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="economic_indicator">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-wrapper">
                                        <div class="policy">
                                            <div class="policy_title">
                                                <h2>POLICY RATES</h2>
                                            </div>
                                            <div class="display_table">
                                                <div>
                                                    <div>Policy Rate (Repo Rate)</div>
                                                    <div>8.50%</div>
                                                </div>
                                                <div>
                                                    <div>SLF Rate</div>
                                                    <div>10.00%</div>
                                                </div>
                                                <div>
                                                    <div>SDF Rate</div>
                                                    <div>7.00%</div>
                                                </div>
                                                <div>
                                                    <div>Bank Rate</div>
                                                    <div>4.00%</div>
                                                </div>
                                            </div>
                                            <div class="update_readmore"></div>
                                        </div>
                                        <div class="reserve">
                                            <div class="reserve_title">
                                                <h2>RESERVE RATIOS</h2>
                                            </div>
                                            <div class="display_table">
                                                <div>
                                                    <div class="col_title"></div>
                                                    <div class="col_title">SLR</div>
                                                    <div class="col_title">CRR</div>
                                                </div>
                                                <div>
                                                    <div>traditional banking</div>
                                                    <div>13%</div>
                                                    <div>4.0%</div>
                                                </div>
                                                <div>
                                                    <div>islamic banking</div>
                                                    <div>5.5%</div>
                                                    <div>4.0%</div>
                                                </div>
                                                <div>
                                                    <div>deposit taker FIs</div>
                                                    <div>5%</div>
                                                    <div>1.5%</div>
                                                </div>
                                                <div>
                                                    <div>non deposit taker FIs</div>
                                                    <div>2.5%</div>
                                                </div>
                                            </div>
                                            <div class="update_readmore">
                                                <p class="last_update">Last update: 09.05.2024</p>
                                            </div>
                                        </div>
                                        <div class="exchange">
                                            <div class="exchange_title">
                                                <h2>INTER-BANK EXCHANGE RATE</h2>
                                                <a href="#"><i class="fa icon-bar-graph"></i></a>
                                            </div>
                                            <div class="display_table">
                                                <div>
                                                    <div class="col_title">Currency</div>
                                                    <div class="col_title">Lowest</div>
                                                    <div class="col_title">Highest</div>
                                                    <div class="col_title">Current WAR</div>
                                                </div>
                                                <div>
                                                    <div>USD</div>
                                                    <div>117.3000</div>
                                                    <div>117.6000</div>
                                                    <div>117.5000</div>
                                                </div>
                                            </div>

                                            <div class="update_readmore">
                                                <p class="last_update">Last update: 15th May, 2024</p>
                                                <p class="last_update">[Source: FRTMD]</p>
                                                <div class="read_more">
                                                    <a class="btn btn-navy" href="/en/index.php/econdata/exchangerate">
                                                        READ MORE
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3">
                        <div class="rightsidebar">
                            <div class="rightsidebar_content">
                                <div class="rightsidebar_content_box">
                                    <h2 class="heading-primary">ICT Security Alert</h2>
                                    <font style="color: blue"><a href="/en/index.php/about/security_alert" title="Security Advisories &amp; Alerts">ICT Security Advisories &amp; Alerts</a></font>
                                </div>

                                <div class="rightsidebar_content_box">
                                    <h2 class="heading-primary">
                                        Customers' Interest Protection Center(CIPC)
                                    </h2>
                                    <p class="auction_rate_title">For any Complaint</p>
                                    <p class="text-center">
                                        <font style="font: italic; font-size: 2rem; color: #202340">Call: 16236</font>
                                        <br />
                                        <font style="color: blue">Email: bb.cipc@bb.org.bd</font>
                                        <br />
                                        <font style="color: blue"><a href="https://play.google.com/store/apps/details?id=bd.org.bb.cms" title="Download Apps from Google Playstore">Download Mobile App</a></font>
                                        <br />
                                        <font style="color: blue"><a href="https://cmsform.bb.org.bd/apps/f?p=107" title="Submit Your Complaint at CMS Portal">Submit Online</a></font>
                                    </p>
                                    <div class="viewmore">
                                        <a href="/en/index.php/services/cipc_procedure" class="btn-text">
                                            View all →</a>
                                    </div>
                                </div>
                                <div class="rightsidebar_content_box">
                                    <h2 class="heading-primary">
                                        <br />__________________________<br /><br />Call Money
                                        Rate
                                    </h2>
                                    <span class="bcr_date">14 May, 2024</span>
                                    <p style="color: blue; text-align: center">
                                        Weighted Average Interest Rate
                                    </p>
                                    <h1 class="bcr-value">9.23</h1>

                                    <div class="viewmore">
                                        <a href="/en/index.php/monetaryactivity/call_money_market" class="btn-text">
                                            View all →</a>
                                    </div>

                                    <h2 class="heading-primary">Upcoming auctions</h2>
                                    <div class="auction_rate">
                                        <div class="auction_rate_title">Bill</div>
                                        <div class="auction_rate_moyr">
                                            <a href="/en/index.php/monetaryactivity/auc_calendar/1821">
                                                May, 2024</a>
                                        </div>
                                        <div class="auction_rate_date">
                                            <a href="/en/index.php/monetaryactivity/auc_calendar/1821">
                                                19</a>
                                        </div>
                                    </div>
                                    <div class="auction_rate">
                                        <div class="auction_rate_title">Bond</div>
                                        <div class="auction_rate_moyr">
                                            <a href="/en/index.php/monetaryactivity/auc_calendar/1833">
                                                May, 2024</a>
                                        </div>
                                        <div class="auction_rate_date">
                                            <a href="/en/index.php/monetaryactivity/auc_calendar/1833">
                                                21</a>
                                        </div>
                                    </div>

                                    <div class="viewmore">
                                        <a href="/en/index.php/monetaryactivity/auc_calendar" class="btn-text">
                                            View all →</a>
                                    </div>
                                </div>
                                <hr />

                                <div class="rightsidebar_content_box">
                                    <h2 class="heading-primary">Emergency Hotline</h2>
                                    <div class="auction_rate">
                                        <a href="#" target="_new"><img src="/img/national-helpline.jpg" "="" alt=""></a
                      >
                      <!--<div class=" auction_rate_title">
                                    </div>
                                    <div class="auction_rate_moyr"><a href=""></a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="row">
            <div class="col-sm-4">
                <div class="colwrapper">
                    <div class="contact">
                        <h2>Contact</h2>
                        <div class="widget">
                            <!-- <i class="fa fa-map-marker"></i>-->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <title>location-pin</title>
                                <path d="M10 2.009c-2.762 0-5 2.229-5 4.99 0 4.774 5 11 5 11s5-6.227 5-11c0-2.76-2.238-4.99-5-4.99zM10 9.76c-1.492 0-2.7-1.209-2.7-2.7s1.208-2.7 2.7-2.7c1.49 0 2.699 1.209 2.699 2.7s-1.209 2.7-2.699 2.7z"></path>
                            </svg>
                            <span>Bangladesh Bank, Motijheel, Dhaka</span>
                        </div>
                        <div class="widget">
                            <!--<i class="fa fa-phone"></i>-->

                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34.545px" height="34.545px" viewBox="0 0 34.545 34.545" style="enable-background: new 0 0 34.545 34.545" xml:space="preserve">
                                <g>
                                    <path d="M34.371,13.114c-0.043,0.217-0.045,0.441-0.129,0.646c-0.498,1.202-1.429,2.197-2.116,3.305
                c-0.885,1.414-8.404-1.633-7.435-3.521c0.365-0.698,1.788-2.626,1.896-3.401c0.098-0.691-0.818-1.233-1.664-1.303
                c-2.231-0.18-5.084-0.017-7.453-0.002V8.84c-0.063,0-0.133,0-0.197-0.001C17.208,8.84,17.138,8.84,17.076,8.84V8.838
                c-2.37-0.015-5.221-0.178-7.453,0.002C8.777,8.91,7.861,9.452,7.959,10.144c0.107,0.775,1.531,2.703,1.896,3.401
                c0.971,1.888-6.551,4.935-7.436,3.521c-0.688-1.107-1.617-2.103-2.115-3.305c-0.084-0.205-0.087-0.43-0.13-0.646
                c-1.103-4.93,3.149-9.96,9.551-10.475c2.446-0.199,4.897-0.311,7.351-0.354V2.272c0.066,0.002,0.131,0.006,0.197,0.007
                c0.066-0.001,0.131-0.005,0.197-0.007v0.013c2.453,0.044,4.904,0.155,7.35,0.354C31.223,3.154,35.475,8.186,34.371,13.114z
                 M29.975,30.124c0.069,1.183-0.703,2.148-1.723,2.148H6.293c-1.017,0-1.792-0.967-1.722-2.148l0.641-10.783
                c2.327-0.545,5.301-1.969,6.38-3.737c0.601-0.985,0.665-2.094,0.171-3.055c-0.125-0.24-0.359-0.615-0.628-1.033l-0.001-0.002
                c-0.008-0.019-0.008-0.019-0.014-0.032h11.953c-0.006,0.017-0.008,0.02-0.018,0.044c-0.15,0.361-0.201,0.638-0.173,0.847
                c-0.034,0.061-0.082,0.138-0.108,0.188c-0.488,0.948-0.424,2.058,0.177,3.042c1.079,1.77,4.051,3.191,6.378,3.736L29.975,30.124z
                 M21.473,18.932c-2.302-2.301-6.043-2.301-8.346,0c-2.301,2.301-2.301,6.044,0,8.345c2.083,2.083,5.345,2.273,7.651,0.586
                l-1.443-1.441c-1.502,0.922-3.494,0.742-4.794-0.559c-1.521-1.521-1.521-3.995,0.001-5.517c1.521-1.521,3.995-1.521,5.517,0
                c1.294,1.294,1.477,3.272,0.568,4.772l1.445,1.445C23.746,24.257,23.549,21.009,21.473,18.932z"></path>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                            <span>Phone: +880-255665001-6</span>
                        </div>
                        <div class="widget">
                            <!--<i class="fa fa-envelope-o"></i>-->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <title>mail</title>
                                <path d="M1.574 5.286c0.488 0.262 7.248 3.894 7.5 4.029s0.578 0.199 0.906 0.199c0.328 0 0.654-0.064 0.906-0.199s7.012-3.767 7.5-4.029c0.489-0.263 0.951-1.286 0.054-1.286h-16.919c-0.897 0-0.435 1.023 0.053 1.286zM18.613 7.489c-0.555 0.289-7.387 3.849-7.727 4.027s-0.578 0.199-0.906 0.199-0.566-0.021-0.906-0.199-7.133-3.739-7.688-4.028c-0.39-0.204-0.386 0.035-0.386 0.219s0 7.293 0 7.293c0 0.42 0.566 1 1 1h16c0.434 0 1-0.58 1-1 0 0 0-7.108 0-7.292s0.004-0.423-0.387-0.219z"></path>
                            </svg>
                            <span class="tooltip-top" data-tooltip="Only for BB Website related feedback/query">E-mail: webmaster@bb.org.bd</span>
                        </div>
                        <div class="other_purpouse">
                            <span><a href="/en/index.php/about/contact">Contact for other purposes</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="colwrapper">
                    <h2>Useful Links</h2>
                    <ul class="list">
                        <li class="list_item">
                            <a href="/en/index.php/financialactivity/paysystems"><i class="fa fa-angle-right"></i> Payment Systems
                            </a>
                        </li>
                        <li class="list_item">
                            <a href="/en/index.php/about/guidelist"><i class="fa fa-angle-right"></i> Regulations And
                                Guidelines
                            </a>
                        </li>
                        <li class="list_item">
                            <a href="/en/index.php/museum/index"><i class="fa fa-angle-right"></i> Currency Museum</a>
                        </li>
                        <li class="list_item">
                            <a href="/en/index.php/saarcfinance/saarcfinance"><i class="fa fa-angle-right"></i> SAARC Finance
                            </a>
                        </li>
                        <!--li class="list_item"><a href="https://bidaquickserv.org" target='_new'><i class="fa fa-angle-right"></i>
                                    BIDA One Stop Service (OSS) Portal
                                </a>
                            </li-->
                        <li class="list_item">
                            <a href="https://finlit.bb.org.bd"><i class="fa fa-angle-right"></i> Financial Literacy
                            </a>
                        </li>

                        <li class="list_item">
                            <a href="/en/index.php/about/national_ict_policy"><i class="fa fa-angle-right"></i> National ICT Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="colwrapper">
                    <div class="stay-connected">
                        <h2>Stay connected</h2>
                        <div class="social-icons circle social-hover">
                            <ul class="list-inline">
                                <li class="social-facebook">
                                    <a href="https://www.facebook.com/BangladeshBankOfficial" class="tooltip-top" target="_blank" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="https://twitter.com/BBGovernor" class="tooltip-top" target="_blank" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-linkedin">
                                    <a href="https://www.youtube.com/c/BangladeshBankOfficial" class="tooltip-top" target="_blank" data-tooltip="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-line">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="info_list">
                        <li class="info_list_item"><a href="/en/">Home</a></li>
                        <li class="info_list_item">
                            <a href="/en/index.php/home/sitemap">Sitemap</a>
                        </li>
                        <li class="info_list_item">
                            <a href="mailto:webmaster@bb.org.bd?subject=Feedback on Bangladesh Bank Website" title="eMail Feedback">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--copyright section-->
        <div class="row">
            <div class="col-sm-12 copyright">
                <span><b style="font-weight: 600">Disclaimer:</b> While every effort is
                    made to ensure accuracy of the information in this website,
                    Bangladesh Bank assumes no responsibility for any damages or
                    losses to users resulting from any error/omission/inadvertent
                    alteration in information provided by this website.</span>
            </div>
        </div>
    </footer>
    </div>

    <?php include 'footer.php' ?>

    <script src="https://kit.fontawesome.com/5615664afb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>