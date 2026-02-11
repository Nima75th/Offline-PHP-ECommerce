<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<?php session_start();
$Connection = mysqli_connect('localhost', 'root', '', 'dbpanel');

?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Header.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: #0000001a;
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow:
                inset 0 0.5em 1.5em #0000001a,
                inset 0 0.125em 0.5em #00000026;
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .bi {
            width: 1em;
            height: 1em;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }
    </style>
    <title>فروشگاه_صفحه اصلی</title>
</head>

<body>

    <svg class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path
                d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
        </symbol>
    </svg>
    <div
        class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button
            class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" aria-hidden="true">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul
            class="dropdown-menu dropdown-menu-end shadow"
            aria-labelledby="bd-theme-text">
            <li>
                <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" aria-hidden="true">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" aria-hidden="true">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" aria-hidden="true">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" aria-hidden="true">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button
                    type="button"
                    class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" aria-hidden="true">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" aria-hidden="true">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <svg class="d-none">

        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
            <path
                fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"></path>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            <path
                fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
        </symbol>
    </svg>
    <main>

        <header>
            <div class="px-3 py-2 text-bg-dark border-bottom">
                <div class="container">
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a
                            href="#"
                            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">

                        </a>
                        <ul
                            class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">

                            <li>
                                <a href="PHP/Admin/AdminPanel.php" class="nav-link text-white">
                                    <svg
                                        class="bi d-block mx-auto mb-1"
                                        width="24"
                                        height="24"
                                        aria-hidden="true">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    پنل مدیریت
                                </a>
                            </li>
                            <li>
                                <a href="Card.php" class="nav-link text-white">
                                    <svg
                                        class="bi d-block mx-auto mb-1"
                                        width="24"
                                        height="24"
                                        aria-hidden="true">
                                        <use xlink:href="#table"></use>
                                    </svg>
                                    سبد خرید
                                </a>
                            </li>
                            <?php if (isset($_SESSION['SignIn'])) {

                            ?>
                                <li>
                                    <a href="#" class="nav-link text-white">
                                        <svg
                                            class="bi d-block mx-auto mb-1"
                                            width="24"
                                            height="24"
                                            aria-hidden="true">
                                            <use xlink:href="#grid"></use>
                                        </svg>
                                        پنل کاربری
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <a href="PHP/User/SignIn.php" class="nav-link text-white">
                                        <svg
                                            class="bi d-block mx-auto mb-1"
                                            width="24"
                                            height="24"
                                            aria-hidden="true">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        ورود
                                    </a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="Index.php" class="nav-link text-secondary">
                                    <svg
                                        class="bi d-block mx-auto mb-1"
                                        width="24"
                                        height="24"
                                        aria-hidden="true">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    صفحه اصلی
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>




        <div id="productSlider" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                // اصلاح شده: استفاده از ProductID به جای id
                $SliderQuery = mysqli_query($Connection, "SELECT * FROM `tblproducts` ORDER BY ProductID DESC LIMIT 3");
                $counter = 0;
                while ($SliderItem = mysqli_fetch_assoc($SliderQuery)) {
                    $activeClass = ($counter == 0) ? "active" : "";
                ?>
                    <div class="carousel-item <?php echo $activeClass; ?>">
                        <img src="PHP/Admin/uploads/<?php echo $SliderItem['ProductImageName']; ?>" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="...">
                        <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.6); border-radius: 15px; padding: 20px;">
                            <h3><?php echo $SliderItem['ProductName']; ?></h3>
                            <p><?php echo $SliderItem['ProductDescription']; ?></p>
                        </div>
                    </div>
                <?php $counter++;
                } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                    <?php
                    // اصلاح شده: استفاده از ProductID
                    $ProductsQuery = mysqli_query($Connection, "SELECT * FROM `tblproducts` ORDER BY ProductID DESC");
                    while ($Product = mysqli_fetch_assoc($ProductsQuery)) {
                    ?>
                        <div class="col">
                            <div class="card shadow-sm h-100 border-0">
                                <img src="PHP/Admin/uploads/<?php echo $Product['ProductImageName']; ?>" class="card-img-top" style="height: 250px; object-fit: cover; border-radius: 8px 8px 0 0;" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title text-end"><?php echo $Product['ProductName']; ?></h5>
                                    <p class="card-text text-secondary text-end" style="font-size: 0.85rem; height: 50px; overflow: hidden;">
                                        <?php echo $Product['ProductDescription']; ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="btn-group">
                                            <a href="AddToCard.php?ProductID=<?php echo $Product['ProductID'];?>">
                                                <button type="button" class="btn btn-sm btn-primary">
                                                    خرید

                                                </button>
                                            </a>
                                        </div>
                                        <span class="text-dark fw-bold" style="direction: rtl;">
                                            <?php echo number_format($Product['ProductPrice']); ?> تومان
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </main>
    <script src="JS/SweetAlert.min.js"></script>
    <?php

    if (isset($_SESSION['AddedToCard'])) {
        echo '<script>swal("محصول با موفقیت افزوده شد", "", "success");</script>';
        unset($_SESSION['AddedToCard']);
    }
    if (isset($_SESSION['AddNotToCard'])) {
        echo '<script>swal("در حال حاضر این محصول در سبد خرید شما موجود میباشد", "", "info");</script>';
        unset($_SESSION['AddNotToCard']);
    }


    ?>

    <script
        src="Js/bootstrap.bundle.min.js"

        class="astro-vvvwv3sm"></script>
    <script src="Js/Color-Modes.js"></script>
</body>

</html>