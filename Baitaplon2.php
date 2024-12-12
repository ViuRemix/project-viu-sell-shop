<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>có cái nịt </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="col-0">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand"><img src="freshcart-logo.svg" alt=""></a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder=" Search" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-geo-alt-fill" style="margin-right: 20px;"></i> Search</button>
              </form>
            </div>
        </nav>
        <div class="gurop-menu">
            <div class="menu-item">
                <div class="dropdown-center">
                    <button class="btn bg-success text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-grid" style="margin-right: 10px;"></i>Centered dropdown
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Action two</a></li>
                      <li><a class="dropdown-item" href="#">Action three</a></li>
                    </ul>
                </div>
                <nav id="item-text">
                    <ul>
                        <li><a href="#">Home <i class="bi bi-chevron-down"></i></a>
                        </li>
                        <li><a href="#">Shop <i class="bi bi-chevron-down"></i></a></li>
                        <li><a href="#">Strores <i class="bi bi-chevron-down"></i></a></li>
                        <li><a href="#">Mega menu <i class="bi bi-chevron-down"></i></a></li>
                        <li><a href="#">Pages <i class="bi bi-chevron-down"></i></a></li>
                        <li><a href="#">Accoutnt <i class="bi bi-chevron-down"></i></a></li>
                        <li><a href="#">Dashboard <i class="bi bi-chevron-down"></i></a></li>
                        <li><a href="#">Docs <i class="bi bi-chevron-down"></i></a></li>
                    </ul>
                </nav>
            </div>
            
            </nav>
        </div>
    </div>

    <!-- phàn thân -->
    <div class="group-slide" style="margin-top: 10px;">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="slide-1.jpg" class="d-block w-100" alt="slide">
                </div>
                <div class="carousel-item">
                <img src="slider-2.jpg" class="d-block w-100" alt="slide">
                </div>
                <div class="carousel-item">
                    <img src="slide-1.jpg" class="d-block w-100" alt="slide">
                
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <!-- <div id="gruop-lable"> -->
        <!-- <img src="product-img-2.jpg" alt=""> -->
<!--          -->
    <!-- </div> -->

    <div id="group-cannay">
        <div><img src="grocery-banner.png" alt=""></div>
        <div class="gruop-rounded">
            <div>
               <h3 class="fw-bold mb-1">Fruits &amp; Vegetables</h3>
               <p class="mb-4">
                  Get Upto
                  <span class="fw-bold">30%</span>
                  Off
               </p>
               <a href="#!" class="btn btn-dark">Shop Now</a>
            </div>
         </div>
        <div><img src="grocery-banner-2.jpg" alt=""></div>
        <div class="gruop-rounded" style="margin-left: 700px;position: absolute;">
            <div>
               <h3 class="fw-bold mb-1">Fruits &amp; Vegetables</h3>
               <p class="mb-4">
                  Get Upto
                  <span class="fw-bold">25%</span>
                  Off
               </p>
               <a href="#!" class="btn btn-dark">Shop Now</a>
            </div>
         </div>
    </div>
    <!-- tạch -->
    <h1 style="margin-top: 20px; margin-bottom: 20px;">Popular Products</h1>
    <div class="group-card">
        <div class="card" style="width: 18rem;">
            <img src="product-img-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class='bx bx-star'></i>
                </div>
                <div class="price-add">
                    <span>18$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="price-add">
                    <span>37$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class='bx bx-star'></i>
                </div>
                <div class="price-add">
                    <span>35$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="price-add">
                    <span>10$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="price-add">
                    <span>25$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
    </div>
    <div class="group-card">
        <div class="card" style="width: 18rem;">
            <img src="product-img-6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class='bx bx-star'></i>
                </div>
                <div class="price-add">
                    <span>12$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class='bx bxs-star' ></i>
                </div>
                <div class="price-add">
                    <span>15$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="price-add">
                    <span>20$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="price-add">
                    <span>38$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="product-img-10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="star-color">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="price-add">
                    <span>28$ <del style="color: grey;">$24</del></span>
                    <a href="#" class="btn text-bg-primary">+Add</a>
                </div>
            </div>
        </div>
    </div>

    <h1 style="margin-left: 10px; margin-top: 10px;">Daily Best Sells</h1>
    <div id="gruop-item-belr">
        <div class="card-baner" style="width: 24rem; ">
            <div class="gruop-banner-deal">
                <div>
                   <h4 class="fw-bold text-white">100% Organic Coffee Beans.</h4>
                   <p class="text-white">Get the best deal before close.</p>
                   <a href="#!" class="btn btn-primary">
                      Shop Now
                      <i class="feather-icon icon-arrow-right ms-1"></i>
                   </a>
                </div>
             </div>
            <div><img src="banner-deal.jpg" alt=""></div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="ca fe.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="price-add">
                    <span>28$ <del style="color: grey;">$24</del></span>
                    <div class="star-color">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-block" style="text-align: center; margin-top: 10px;">
                    <button class="btn bg-success" type="button" style="color: white; padding: 8px 50px;" >+ add to cart</button>
                  </div>
            </div>
            <div class="gruop-watch">
                <div class="watch">
                    1755 days
                </div>
                <div class="watch">
                    0 hours
                </div>
                <div class="watch">
                    0 mins
                </div>
                <div class="watch">
                    17 sec
                </div>
            
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="ca fe 2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="price-add">
                    <span>28$ <del style="color: grey;">$24</del></span>
                    <div class="star-color">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-block" style="text-align: center; margin-top: 10px;">
                    <button class="btn bg-success" type="button" style="color: white; padding: 8px 50px;">+ add to cart
                  </div>
            </div>
            <div class="gruop-watch">
                <div class="watch">
                    1755 days
                </div>
                <div class="watch">
                    0 hours
                </div>
                <div class="watch">
                    0 mins
                </div>
                <div class="watch">
                    17 sec
                </div>
            
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="ca fe 3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <small>Snack & Munchies</small>
                <h5 class="card-title">Haldiram's Sev Bhujia</h5>
                <div class="price-add">
                    <span>28$ <del style="color: grey;">$24</del></span>
                    <div class="star-color">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-block" style="text-align: center; margin-top: 10px;">
                    <button class="btn bg-success" type="button" style="color: white; padding: 8px 50px;">+ add to cart
                  </div>
            </div>
            <div class="gruop-watch">
                <div class="watch">
                    1755 days
                </div>
                <div class="watch">
                    0 hours
                </div>
                <div class="watch">
                    0 mins
                </div>
                <div class="watch">
                    17 sec
                </div>
            
            </div>
        </div>
    </div>

    <div id="gruop-foother">
        <div class="gruop-foother-text">
            <h5>Categories</h5>
            <p><a href="#">Vegetables & Fruits</a></p>
            <p><a href="#">Bakery & Biscuits</a></p>
            <p><a href="#">Atta, rice & dal</a></p>
            <p><a href="#">Sauces & spreads</a></p>
            <p><a href="#">Organic & gourmet</a></p>
            <p><a href="#">Baby care</a></p>
            <p><a href="#">Cleaning essentials</a></p>
            <p><a href="#">Vegetables & Fruits</a></p>
            <p><a href="#">Personal care</a></p>
        </div>
        <div class="gruop-foother-text">
            <h5>Categories</h5>
            <p><a href="#">Dairy, bread & eggs</a></p>
            <p><a href="#">Cold drinks & juices</a></p>
            <p><a href="#">Tea, coffee & drinks</a></p>
            <p><a href="#">Masala, oil & more</a></p>
            <p><a href="#">Chicken, meat & fish</a></p>
            <p><a href="#">Paan corner</a></p>
            <p><a href="#">Pharma & wellness</a></p>
            <p><a href="#">Home & office</a></p>
            <p><a href="#">Pet care</a></p>
        </div>
        <div class="gruop-foother-text">
            <h5>Get to know us</h5>
            <p><a href="#">Company</a></p>
            <p><a href="#">About</a></p>
            <p><a href="#">Blog</a></p>
            <p><a href="#">Help Center</a></p>
            <p><a href="#">Our Value</a></p>
        </div>
        <div class="gruop-foother-text">
            <h5>For Consumers</h5>
            <p><a href="#">Payments</a></p>
            <p><a href="#">Shipping</a></p>
            <p><a href="#">Product Returns</a></p>
            <p><a href="#">FAQ</a></p>
            <p><a href="#">Shop Checkout</a></p>
        </div>
        <div class="gruop-foother-text">
            <h5>Become a Shopper</h5>
            <p><a href="#">Shopper Opportunities</a></p>
            <p><a href="#">Become a Shopper</a></p>
            <p><a href="#">Earnings</a></p>
            <p><a href="#">Ideas & Guides</a></p>
            <p><a href="#">New Retailers</a></p>
        </div>
        <div class="gruop-foother-text">
            <h5>Freshcart programs</h5>
            <p><a href="#">Freshcart programs</a></p>
            <p><a href="#">Gift Cards</a></p>
            <p><a href="#">Promos & Coupons</a></p>
            <p><a href="#">Freshcart Ads</a></p>
            <p><a href="#">Careers</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>