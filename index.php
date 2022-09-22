<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/logo.ico" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Street Legacy - интернет-магазин одежды ведущих мировых брендов</title>
</head>
<body>
    <?php if($_COOKIE['user']==''): ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navigation">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img class="logo" src="image/logo.png" alt="logotip"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/news.php">Новости</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/watch.php">Часы</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/gifcard.php">Подарочные карты</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/contact.php">Контакты</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown d-flex flex-row align-items-center">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="font-size: 20px;"><i class="bi bi-person-circle"></i></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Регистрация</a></li>
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Авторизация</a></li>
						</ul>
                        <a class="nav-link" href="#"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
                        <a class="nav-link" href="../pages/cart.php" style="font-size: 20px;"><i class="bi bi-cart3"></i></a>
					</li>              
				</ul>
            </div>
        </div>
        </nav>
        <!-- Регистрация -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="pages/register.php">
            <form class="row g-3 d-flex flex-column">
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Логин</label>
                <input type="text" class="form-control"  name="login" id="validationCustom4" required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-12">
                <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Эл.почта</label>
                <input type="text" class="form-control" name="email" id="validationCustom01"  required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Пароль</label>
                <input type="password" class="form-control"  name="pass" id="validationCustom02" required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom" class="form-label">Адрес</label>
                <div class="input-group has-validation">
                <input type="text" class="form-control"  required name="address" id="validationCustom" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                Пожалуйста, введите верный адрес 
                </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                    </div>
                </div>
                <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">Зарегистрироваться</button>
                </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Авторизация -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">Авторизация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="pages/auth.php"> 
                    <div class="forma_auth">
                        <label for="login">Логин</label><br>
                        <input class="border rounded" required type="login" name="login">
                    </div>
                    <div class="forma_auth">
                        <label for="password">Пароль</label><br>
                        <input class="border rounded"  required type="password" name="pass">
                    </div>
                    <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">Войти в систему</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </header>
    <?php else:?>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light  navigation">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img class="logo" src="image/logo.png" alt="logotip"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/news.php">Новости</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/watch.php">Часы</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/gifcard.php">Подарочные карты</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/contact.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/profile.php">Профиль</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown d-flex flex-row align-items-center">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="font-size: 20px;"><i class="bi bi-person-circle" aria-hidden="true"></i></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="../pages/exit.php">Выйти</a>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
					</li>
				</ul>
            </div>
        </div>
        </nav>
        <!-- Регистрация -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="pages/register.php">
            <form class="row g-3 d-flex flex-column">
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Логин</label>
                <input type="text" class="form-control"  name="login" id="validationCustom4" required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-12">
                <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Эл.почта</label>
                <input type="text" class="form-control" name="email" id="validationCustom01"  required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Пароль</label>
                <input type="password" class="form-control"  name="pass" id="validationCustom02" required>
                <div class="valid-feedback">
                Все хорошо!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom" class="form-label">Адрес</label>
                <div class="input-group has-validation">
                <input type="text" class="form-control"  required name="address" id="validationCustom" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                Пожалуйста, введите верный адрес 
                </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                    </div>
                </div>
                <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">Зарегистрироваться</button>
                </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Авторизация -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">Авторизация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="pages/auth.php"> 
                    <div class="forma_auth">
                        <label for="login">Логин</label><br>
                        <input class="border rounded" required type="login" name="login">
                    </div>
                    <div class="forma_auth">
                        <label for="password">Пароль</label><br>
                        <input class="border rounded"  required type="password" name="pass">
                    </div>
                    <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">Войти в систему</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </header>
    <?php endif; ?>
    <main>
        <section class="slider_index container">
    <div id="carouselDark" class="carousel  carousel-dark slide" data-bs-ride ="carousel" data-bs-pause ="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                    <img src="image/slider1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="image/slider2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000"> 
                    <img src="image/slider3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
    </div>
    <section class="second_section bg-light">
            <div class="container my_carousel">
                <h2 class="pt-4 pb-2 h1 text-center fw-bold">Белые футболки с принтом</h2>
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause ="false" >
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex flex-row justify-content-center my-5">
                            <div class="card mx-3  text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider12.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo.png" class="card-img-top"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider13.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo1.png" class="card-img-top"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider14.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo2.png" class="card-img-top"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider15.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo3.png" class="card-img-top"></a>
                            </div>
                        </div>
                        <div class="carousel-item d-flex flex-row justify-content-center my-5">
                            <div class="card mx-3  text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider16.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo4.png" class="card-img-top"></a>
                            </div>
                            <div class="card mx-3 text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider17.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo5.png" class="card-img-top"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider18.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo6.png" class="card-img-top"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 12rem;">
                                <a href="#"><img src="image/slider19.jpg" class="card-img-top" alt="cart1"></a>
                                <a href="№"><img src="image/textlogo7.png" class="card-img-top"></a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="second_section bg-light">
            <div class="container my_carousel">
                <h2 class="pt-4 pb-2 h1 text-center fw-bold">Новое в брендах</h2>
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause ="false" >
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex flex-row justify-content-center my-5">
                            <div class="card mx-3  text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider4.jpg" class="card-img-top" alt="cart1"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider5.jpg" class="card-img-top" alt="cart1"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider6.jpg" class="card-img-top" alt="cart1"></a>
                            </div>
                            <div class="card mx-3  text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider7.jpg" class="card-img-top" alt="cart1"></a>
                            </div>
                        </div>
                        <div class="carousel-item d-flex flex-row justify-content-center my-5">
                            <div class="card mx-3  text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider8.jpg" class="card-img-top" alt="cart1"></a>
 
                            </div>
                            <div class="card mx-3 text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider9.jpg" class="card-img-top" alt="cart1"></a>

                            </div>
                            <div class="card mx-3  text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider10.jpg" class="card-img-top" alt="cart1"></a>

                            </div>
                            <div class="card mx-3  text-center" style="width: 15rem;">
                                <a href="#"><img src="image/slider11.jpg" class="card-img-top" alt="cart1"></a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="container third_section">
            <div class="new_collection d-flex justify-content-around align-items-center">
                <div class="image_block mx-5">
                    <img src="image/image.jpg" alt="new_collection">
                </div>
                <div class="text_block d-flex flex-column justify-content-around" >
                    <h2>Джинсы, шорты, рубашки</h2>
                    <a href="#"><h5>ТЕНДЕНЦИЯ ВЕСНА-ЛЕТО 2022</h5></a>
                </div>
            </div>
        </section>
        <section class="container four_section">
            <h2 class="h1 text-center my-5">Бренды</h2>
            <div class="brend_logo d-flex justify-content-center align-items-center text-center">
                <img class="mx-1 col-2" src="image/brends/burberry.png" alt="burberry">
                <img class="mx-1 col-2" src="image/brends/dolcegabbana.png" alt="dolcegabbana">
                <img class="mx-1 col-2" src="image/brends/prada.png" alt="prada">
                <img class="mx-1 col-2" src="image/brends/vetements.png" alt="vetements">
                <img class="mx-1 col-2" src="image/brends/palmangels.png" alt="palmangels">
            </div>
            <div class="brend_logo d-flex justify-content-center align-items-center text-center">
                <img class="mx-1 col-2" src="image/brends/offwhite.png" alt="burberry">
                <img class="mx-1 col-2" src="image/brends/versace.png" alt="dolcegabbana">
                <img class="mx-1 col-2" src="image/brends/stoneisland.png" alt="prada">
                <img class="mx-1 col-2" src="image/brends/valentina.png" alt="vetements">
                <img class="mx-1 col-2" src="image/brends/gucci.png" alt="palmangels">
            </div>
        </section>
    </main>
    <footer>
        <div class="footer_flex container d-flex justify-content-around my-3">
            <div class="footer_block_first d-flex flex-column">
                <h3>Street Legacy</h3>
                <a href="../index.php">Главная</a>
                <a href="pages/watch.php">Часы</a>
                <a href="pages/catalog.php">Каталог</a>
                <a href="pages/news.php">Новости</a>
            </div>
            <div class="footer_block_second d-flex flex-column">
                <h3>Поддержка</h3>
                <a href="pages/gifcard.php">Подарочные карты</a>
                <a href="#">Доставка и оплата</a>
                <a href="#">Возврат</a>
            </div>
            <div class="footer_block_third d-flex flex-column">
                <h3>Мы в соц. сетях</h3>
                <div class="social">
                    <a href="#"><i class="fa fa-youtube-play fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-vk fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x mx-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <hr class="hr-line">
        <section class="footer_section container">
        <div class="footer_bottom_first d-flex justify-content-around my-4 mx-5 ">
                <img src="image/brends/mir.svg">
                <img src="image/brends/visa.svg">
                <img src="image/brends/mastercard.svg">
                <img src="image/brends/russian-post.svg">
                <img src="image/brends/ems.svg">
                <img src="image/brends/cdek.svg">
                <img src="image/brends/dhl.svg">
        </div>
        <section class="text_footer_boottom d-flex justify-content-around my-2 mx-3">
            <p>© Street Legacy, 2022</p>
            <a href="#">Пользовательское соглашение</a>
            <a href="#">Политика конфиденциальности</a>
            <a href="#">Карта сайта</a>
        </section>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>