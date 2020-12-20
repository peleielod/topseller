<?php include(__DIR__ . '/include/header.php'); ?>

<!----MOBIL CATEGORIES--->
<div class="d-xl-none navbar-collapse-categories" id="categories-navbar">
   <div class="offcanvas-header mt-3">  
      <button class="navbar-toggler custom-toggler pull-right" type="button" data-toggle="collapse" data-target="#categories-navbar">
      <i class="fa fa-times-circle bg-transparent icon-input icon-input-menu" style='margin-top:-10px;'aria-hidden="true"></i>
      </button>
   </div>
   <ul class="nav prod-cat">
      <li class="nav-item">
         <a href="/details.php" class="active nav-link"><i class="fa fa-angle-right"></i> Dress</a>
         <ul
            class="nav">
            <li class="active nav-item-category"><a href="/details.php" class="nav-link">- Shirt</a>
            </li>
            <li class="nav-item-category"><a href="/details.php" class="nav-link">- Pant</a>
            </li>
            <li class="nav-item-category"><a href="/details.php" class="nav-link">- Shoes</a>
            </li>
         </ul>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Bags &amp; Purses</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Beauty</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Coat &amp; Jacket</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Jeans</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Jewellery</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Electronics</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Sports</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Technology</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Watches</a>
      </li>
      <li class="nav-item-category"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Accessories</a>
      </li>
   </ul>
</div>
<!--------------------->
<div class='product-list-all'>
   <div class="product-page-categorylist-div product-page" style=''>
    <div class="container">
      <div class='row'>
		<div cols-sm="6" cols-md="4" cols-lg="4" class="col-6">
         <button type="submit" class="btn button-green" data-toggle="collapse" data-target="#categories-navbar">Szűrés</button>
		</div>
		
		<div cols-sm="6" cols-md="4" cols-lg="4" class="col-6">
         <select class="form-control hasCustomSelect sort-products">
            <option>Népszerűek elől</option>
            <option>Ár szerint növekvő</option>
            <option>Ár szerint csökkenő</option>
            <option>Név szerint növekvő</option>
            <option>Név szerint csökkenő</option>
         </select>
		</div>
      </div>
	  </div>
	  </div>
	     <div class="container">
      <div class="row">
         <div class="col-lg-2 nopadding-right">
            <div id='product-filters'>
               <section class="panel">
                  <header class="card-header">Kategória</header>
                  <div class="card-body-category">
                     <ul class="nav prod-cat">
                        <li class="nav-item">
                           <a href="/details.php" class="active nav-link"><i class="fa fa-angle-right"></i> Dress</a>
                           <ul
                              class="nav">
                              <li class="active nav-item-product"><a href="/details.php" class="nav-link">- Shirt</a>
                              </li>
                              <li class="nav-item-product"><a href="/details.php" class="nav-link">- Pant</a>
                              </li>
                              <li class="nav-item-product"><a href="/details.php" class="nav-link">- Shoes</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Bags &amp; Purses</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Beauty</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Coat &amp; Jacket</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Jeans</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Jewellery</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Electronics</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Sports</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Technology</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Watches</a>
                        </li>
                        <li class="nav-item-product"> <a href="/details.php" class="nav-link"><i class="fa fa-angle-right"></i> Accessories</a>
                        </li>
                     </ul>
                  </div>
               </section>
               <section class="panel">
                  <header class="card-header">Price Range</header>
                  <div class="card-body-category sliders">
                     <div id="slider-range" class="slider"></div>
                     <div class="slider-info"> <span id="slider-range-amount"></span>
                     </div>
                  </div>
               </section>
               <section class="panel">
                  <header class="card-header">Filter</header>
                  <div class="card-body-category">
                     <form role="form product-form">
                        <div class="form-group">
                           <label>Brand</label>
                           <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                              <option>Wallmart</option>
                              <option>Catseye</option>
                              <option>Moonsoon</option>
                              <option>Textmart</option>
                           </select>
                           <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Wallmart</span></span>
                        </div>
                        <div class="form-group">
                           <label>Color</label>
                           <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                              <option>White</option>
                              <option>Black</option>
                              <option>Red</option>
                              <option>Green</option>
                           </select>
                           <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">White</span></span>
                        </div>
                        <div class="form-group">
                           <label>Type</label>
                           <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                              <option>Small</option>
                              <option>Medium</option>
                              <option>Large</option>
                              <option>Extra Large</option>
                           </select>
                           <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Small</span></span>
                        </div>
                        <button class="btn button-green" type="submit">Filter</button>
                     </form>
                  </div>
               </section>
            </div>
         </div>
         <div class="col-lg-10">
		  <div class="col-lg-12 col-sm-12 col-12 text-center">
                  <section class="panel">
                     <div class="card-body">
                        <div class="d-inline-flex text-center">
                           <a href="/details.php" class="page-link">1</a>
                           <a href="/details.php" class="page-link">2</a>
                           <a href="/details.php" class="page-link">3</a>
                           <a href="/details.php" class="page-link">&#xBB;</a>
                        </div>
                     </div>
                  </section>
               </div>
            <div class="row product-list">
               <div class="col-lg-3 col-sm-4 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/32/67416/1566895266-812597-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 60%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Sárkány - 140 x 74 cm 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <span class="free-shipping-span"> Ingyenes szállítással </span>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-3 col-sm-4 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/1/385/1461453137-169706-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 45%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Kerti sátor GARTHEN 3 x 3 m - zöld 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <span class="free-shipping-span"> Raktáron</span>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-3 col-sm-4 col-5 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/43/1147/1536654750-351257-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 60%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Minőségi szék fémből - MONZA, kék 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <span class="free-shipping-span"> Ingyenes szállítással </span>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-3 col-sm-4 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/32/67416/1566895266-812597-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 60%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Sárkány - 140 x 74 cm 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <span class="free-shipping-span"> Ingyenes szállítással </span>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-3 col-sm-4 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/1/385/1461453137-169706-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 45%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Kerti sátor GARTHEN 3 x 3 m - zöld 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-3 col-sm-4 col-5 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/43/1147/1536654750-351257-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 60%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Minőségi szék fémből - MONZA, kék 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <span class="free-shipping-span"> Ingyenes szállítással </span>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-3 col-sm-4 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/32/67416/1566895266-812597-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 60%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Sárkány - 140 x 74 cm 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <span class="free-shipping-span"> Ingyenes szállítással </span>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-3 col-sm-4 col-6">
                  <section class="panel">
                     <a href="/details.php">
                        <div class="pro-img-box discounted" data-highlighted="24%">
                           <img src="https://img.kokiskashop.hu/p/1/385/1461453137-169706-big.jpg" alt=""> 
                           <span class="list-fav-span product-icons"><i class="fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body text-center">
                           <div class="product-rating-title-stars-container-div">
                              <div class="starOuter">
                                 <div id="productRatingTitleStars" class="starInner" style="width: 45%;"></div>
                              </div>
                           </div>
                           <h4>
                              <div class="pro-title">
                                 Kerti sátor GARTHEN 3 x 3 m - zöld 
                              </div>
                           </h4>
                           <div class='price-shipping'>
                              <div cols-sm="12" cols-md="4" cols-lg="4" class="product-price-container-col-div col-12">
                                 <span class="amount-old">4880 Ft</span> 
                                 <span class="price">3690 Ft</span>
                              </div>
                           </div>
                           <div class='text-center'>
                              <button type="submit" class="btn button-green">Érdekel</button>
                           </div>
                        </div>
                     </a>
                  </section>
               </div>
               <div class="col-lg-12 col-sm-12 col-12 text-center">
                  <section class="panel">
                     <div class="card-body">
                        <div class="d-inline-flex text-center">
                           <a href="/details.php" class="page-link">1</a>
                           <a href="/details.php" class="page-link">2</a>
                           <a href="/details.php" class="page-link">3</a>
                           <a href="/details.php" class="page-link">&#xBB;</a>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include(__DIR__ . '/include/footer.php'); ?>

