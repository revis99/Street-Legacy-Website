<?php
    session_start(); 
    $mysql = new mysqli('localhost','root','root','streetlegacy');

    require('func.php');

    if(isset($_GET['goods_add_id']) && !empty($_GET['goods_add_id'])) {
        $current_added_product = get_product_by_id($_GET['goods_add_id']);
        if (!empty($current_added_product)) {
            if  (!isset($_SESSION['cart-list'])) {
                $_SESSION['cart-list'][] = $current_added_product;
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
                
            }

            $product_check = false;
            if  (isset($_SESSION['cart-list'])) {
                foreach($_SESSION['cart-list'] as $value) {
                    if ($value['id'] == $current_added_product['id']) {
                        $product_check = true;
                        
                    } 
                }
            }
            
            if(!$product_check) {
                $_SESSION['cart-list'][] = $current_added_product;
                
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
            }

        } else {
            header("Location: /");
        }
    } 

    if (isset($_GET['delete_id']) && isset($_SESSION['cart-list'])) {
        foreach ($_SESSION['cart-list'] as $key => $value) {
            if ($value['id'] == $_GET['delete_id']) {
                unset($_SESSION['cart-list'][$key]);
                $price_number = intval(preg_replace('/[^0-9]+/', '', $value['price']), 10);
                $_SESSION['sum-price'] -= $price_number;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Street Legacy - ????????????????-?????????????? ???????????? ?????????????? ?????????????? ??????????????</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light  navigation">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img class="logo" src="../image/logo.png" alt="logotip"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php if($_COOKIE['user']==''): ?>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">??????????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/catalog.php">??????????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/news.php">??????????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/watch.php">????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/gifcard.php">???????????????????? ??????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/contact.php">????????????????</a>
                    </li>
                </ul>
                <?php
                    else:
                ?>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">??????????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/catalog.php">??????????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/news.php">??????????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/watch.php">????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/gifcard.php">???????????????????? ??????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/contact.php">????????????????</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../pages/profile.php">??????????????</a>
                    </li>
                </ul>
                <?php
                    endif;
                ?>
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown d-flex flex-row align-items-center">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="font-size: 20px;"><i class="bi bi-person-circle"></i></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">??????????????????????</a></li>
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">??????????????????????</a></li>
						</ul>
                        <a class="nav-link" href="#"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
                        <a class="nav-link" href="../pages/cart.php" style="font-size: 20px;"><i class="bi bi-cart3"></i></a>
					</li>              
				</ul>
            </div>
        </div>
        </nav>
       <!-- ?????????????????????? -->
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">??????????????????????</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="/pages/register.php">
            <form class="row g-3 d-flex flex-column">
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">??????????</label>
                <input type="text" class="form-control"  name="login" id="validationCustom4" required>
                <div class="valid-feedback">
                ?????? ????????????!
                </div>
                </div>
                <div class="col-12">
                <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                <label for="validationCustom01" class="form-label">????.??????????</label>
                <input type="text" class="form-control" name="email" id="validationCustom01"  required>
                <div class="valid-feedback">
                ?????? ????????????!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom02" class="form-label">????????????</label>
                <input type="password" class="form-control"  name="pass" id="validationCustom02" required>
                <div class="valid-feedback">
                ?????? ????????????!
                </div>
                </div>
                <div class="col-md-12">
                <label for="validationCustom" class="form-label">??????????</label>
                <div class="input-group has-validation">
                <input type="text" class="form-control"  required name="address" id="validationCustom" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                ????????????????????, ?????????????? ???????????? ?????????? 
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
                    <button type="submit" class="btn btn-secondary">????????????????????????????????????</button>
                </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- ?????????????????????? -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">??????????????????????</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="/pages/auth.php"> 
                    <div class="forma_auth">
                        <label for="login">??????????</label><br>
                        <input class="border rounded" required type="login" name="login">
                    </div>
                    <div class="forma_auth">
                        <label for="password">????????????</label><br>
                        <input class="border rounded"  required type="password" name="pass">
                    </div>
                    <hr class="hr-line">
                    <button type="submit" class="btn btn-secondary">?????????? ?? ??????????????</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </header>
    <main>
        <section class="first_cart_section container my-5">
            <h3 class="text-center h1 text-uppercase">??????????????</h3>
            <div class="table_cart table-responsive-sm">
                <?php 
                    if (isset($_SESSION['cart-list']) && count($_SESSION['cart-list']) != 0 ): ?>
                    <form class="form-cart d-flex flex-column" action="orders.php" method="POST">
                        <table class="table table-hover align-middle text-center table-bordered mt-5">
                            <thead class="table-light">
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">??????????????</th>
                                <th scope="col">????????</th>
                                <th scope="col">??????????????</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach( $_SESSION['cart-list'] as $product): 
                                ?>
                                <tr>
                                    <th scope="row"><img style="max-width: 80px;" src="/image/<?=$product['img']?>" alt="product"></th>
                                    <td><?=$product['name']?></td>
                                    <td><span class="product_price"><?=$product['price']?></span></td>
                                    <td><a style="color: red;" href="cart.php?delete_id=<?=$product['id']?>">??????????????</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="border-top pt-2 text-end fs-4" style="font-size: 18px;">??????????: <b><input class="total" readonly id="total_sum" name="total_sum" type="text" value="<?=$_SESSION['sum-price']?> ???"></b></p>
                        <div class="form_conta my-5 d-flex flex-column align-items-center">
                            
                        <h3 class="text-start my-2 h5">???????????? ????????????????</h3>
                                    <div class="form_contar">
                                        <label for="name">??????</label><br>
                                        <input class="border rounded" required type="name" name="name">
                                    </div>
                                    <div class="form_contar">
                                        <label for="mail">????.??????????</label><br>
                                        <input class="border rounded"  required type="email" name="email">
                                    </div>
                                    <div class="form_contar">
                                        <label for="tel">??????????????</label><br>
                                        <input class="border rounded"  required type="tel" name="tel">
                                    </div>
                                    <div class="form_contar">
                                        <label for="address">??????????</label><br>
                                        <input class="border rounded"  required type="address" name="address">
                                    </div>
                                    <div class="form_contar">
                                        <label for="dostavka">???????? ????????????????</label><br>
                                        <input class="border rounded"  required type="text" name="dostavka">
                                    </div>
                        </div>
                        <button type="submit" class="btn btn-dark">????????????????</button>
                    </form>
                    <?php else: ?>
                    <h2 class="text-center my-5">?????????????? ??????????</h2>
                <?php endif; ?>                   
            </div>
        </section>
    </main>
    <div class="footer_flex container d-flex justify-content-around my-3">
        <div class="footer_block_first d-flex flex-column">
                <h3>Street Legacy</h3>
                <a href="../index.php">??????????????</a>
                <a href="../pages/watch.php">????????</a>
                <a href="../pages/catalog.php">??????????????</a>
                <a href="../pages/news.php">??????????????</a>
            </div>
            <div class="footer_block_second d-flex flex-column">
                <h3>??????????????????</h3>
                <a href="../pages/gifcard.php">???????????????????? ??????????</a>
                <a href="#">???????????????? ?? ????????????</a>
                <a href="#">??????????????</a>
            </div>
            <div class="footer_block_third d-flex flex-column">
                <h3>???? ?? ??????. ??????????</h3>
                <div class="social">
                    <a href="#"><i class="fa fa-youtube-play fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-vk fa-2x mx-2" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x mx-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <hr class="hr-line">
    <footer class="container footer-grey">
        <div class="footer_bottom_first d-flex justify-content-around my-4 mx-5">
                <img src="../image/brends/mir.svg">
                <img src="../image/brends/visa.svg">
                <img src="../image/brends/mastercard.svg">
                <img src="../image/brends/russian-post.svg">
                <img src="../image/brends/ems.svg">
                <img src="../image/brends/cdek.svg">
                <img src="../image/brends/dhl.svg">
        </div>
        <section class="text_footer_boottom d-flex justify-content-around my-2 mx-3">
            <p>?? Street Legacy, 2022</p>
            <a href="#">???????????????????????????????? ????????????????????</a>
            <a href="#">???????????????? ????????????????????????????????????</a>
            <a href="#">?????????? ??????????</a>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>