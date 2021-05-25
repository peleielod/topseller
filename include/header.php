<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/favicon.ico">
      <title>Online Pláza Ingyenes Szállítással</title>
      <link rel="canonical" href="">
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
   </head>
      <header>
         <!--Modal: Login / Register Form-->
         <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
               <!--Content-->
               <div class="modal-content">
                  <!--Modal cascading tabs-->
                  <div class="modal-c-tabs">
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab">
                           Belépés</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#panel8" role="tab">
                           Regisztáció</a>
                        </li>
                     </ul>
                     <!-- Tab panels -->
                     <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                           <!--Body-->
                           <div class="modal-body mb-1">
                              <div class="md-form form-sm mb-5">
                                 <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                 <label data-error="wrong" data-success="right" for="modalLRInput10">E-mail</label>
                              </div>
                              <div class="md-form form-sm mb-4">
                                 <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                 <label data-error="wrong" data-success="right" for="modalLRInput11">Jelszó</label>
                              </div>
                              <div class="text-center mt-2">
                                 <button class="btn button-green">Bejelentkezés</button>
                              </div>
                           </div>
                           <!--Footer-->
                           <div class="modal-footer">
                              <div class="options text-center text-md-right mt-1">
                                 <p>Még nem regisztrált? <a href="#" class="blue-text">Regisztráció</a></p>
                                 <p>Nem emlékszik a jelszavára? <a href="#" class="blue-text">Jelszó emlékeztető</a></p>
                              </div>
                              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Kilépés</button>
                           </div>
                        </div>
                        <!--/.Panel 7-->
                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">
                           <!--Body-->
                           <div class="modal-body">
                              <div class="md-form form-sm mb-5">
                                 <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                 <label data-error="wrong" data-success="right" for="modalLRInput12">E-mail cím</label>
                              </div>
                              <div class="md-form form-sm mb-5">
                                 <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                                 <label data-error="wrong" data-success="right" for="modalLRInput13">Jelszó</label>
                              </div>
                              <div class="md-form form-sm mb-4">
                                 <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                                 <label data-error="wrong" data-success="right" for="modalLRInput14">Jelszó Újra</label>
                              </div>
                              <div class="text-center form-sm mt-2">
                                 <button class="btn button-green">Regisztrálok</button>
                              </div>
                           </div>
                           <!--Footer-->
                           <div class="modal-footer">
                              <div class="options text-right">
                              </div>
                              <button type="button" class="btn button-green waves-effect ml-auto" data-dismiss="modal">Kilépés</button>
                           </div>
                        </div>
                        <!--/.Panel 8-->
                     </div>
                  </div>
               </div>
               <!--/.Content-->
            </div>
         </div>
         <!--Modal: Login / Register Form-->
         <div class='header'>
            <div id='mobil-search-bar'>
               <div class="search-mobile-top-menu-container-div searchopened">
                  <div class="search-mobile-container-div">
                     <form method="GET" action="" class="search-mobile-form">
                        <input type="text" placeholder="Keresés" class="search-mobile-input">
                        <button type="submit" class="search-mobile-submit">
                        <span class="search-mobile-icon"><i class="fa fa-search"></i></span>
                        </button>
                     </form>
                  </div>
               </div>
            </div>
            <!-- MOBIL MENU -->
            <!--<div class='section-logo logo-mobil d-xl-none'>
               <div class="container">
                  <div class='row'>
                     <div class='col-12 text-center'>
                        <a href='/'><img src='images/logo.png'></a>
                     </div>
                  </div>
               </div>
            </div>-->
            <!-- DESKTOP MENU -->
            <div class='section-logo logo-desktop d-xl-block d-lg-none d-xl-none d-sm-none d-none'>
               <div class="container">
                  <div class='row'>
                     <div class="col-xl-3 vcenter-item justify-content-left" style='height: 70px; margin-bottom: 10px;'>
                        <!--<a href='/'><img src='images/logo.png'></a>-->
                     </div>
                     <div class="col-xl-5 vcenter-item justify-content-center">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="">
                           <div class="input-group-append">
                              <button class="btn btn-secondary" type="button">
                              <i class="fa fa-search"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class='col-xl-4'>
                        <div class='d-flex float-right'>
                           <a href="" class="nav-icons"><i class="fa fa-heart" aria-hidden="true"></i></a>
                           <a href="" class="nav-icons"><i class="fa fa-bell"></i></a>
                           <a href="/login" class="nav-icons"><i class="fa fa-user"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-custom navbar-expand-xl navbar-light bg-background">
               <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
               <i class="fa fa-bars bg-transparent icon-input icon-input-menu" aria-hidden="true"></i>
               </button>
               <div class="d-xl-none text-left d-flex">
			    <a href="/index" class="navbar-button-mobile" style='font-size:33px !important;'><i class="fa fa-home"></i></a>
                  <a href="" class="navbar-button-mobile"><i class="fa fa-bell"></i></a>
                  <span href="" class="navbar-button-mobile"><i class="fa fa-heart" aria-hidden="true"></i></span>
                  <span class="navbar-button-mobile"><a href='#' id="searchBtnMobile"><i class="fa fa-search"></i></a></span>
                  <a  href='#' data-toggle="collapse" data-target="#users-navbar"><span href="" class="navbar-button-mobile"> <i class="fa fa-user"></i></span></a>
                  <div class="d-xl-none navbar-collapse-usermenu" id="users-navbar">
                     <div class='d-xl-none'>
                        <div class="offcanvas-header mt-3">  
                           <button class="navbar-toggler custom-toggler pull-right" type="button" data-toggle="collapse" data-target="#users-navbar">
                           <i class="fa fa-times-circle bg-transparent icon-input icon-input-menu" style='margin-top:-10px;'aria-hidden="true"></i>
                           </button>
                        </div>
                        <ul class="navbar-nav">
                           <a href='#'>
                              <li class="nav-item active" data-toggle="modal" data-target="#modalLRForm">Belépés</li>
                           </a>
                           <li class="nav-item"><a class="nav-link" href="#"> Regisztráció </a></li>
                           <li class="nav-item"><a class="nav-link" href="#"> Profil </a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Vásárlási Feltételek</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Részletes Keresés</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Hírlevél</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Kapcsolat</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <div class='d-xl-none navbar-mobil'>
                     <div class='mobil-nav-header d-flex justify-content-between'>
                        <a href='#'><i id='button-back' class="fa fa-chevron-left bg-transparent icon-input icon-input-menu" aria-hidden="true"></i></a>
                        <div class='pull-center' id='category-name-header'>Összes Kategória</div>
                        <input type='text' name='current-cat-id' id='current-cat-id' value=0 hidden>
                        <button id='button-close' class="navbar-toggler custom-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <i class="fa fa-times-circle bg-transparent icon-input icon-input-menu" style='margin-top:-10px;'aria-hidden="true"></i>
                        </button>
                     </div>
                     <div id='append_categories'>
                     </div>
                     <ul class="navbar-nav mx-auto default-categories">
		
						<a class="nav-link-mobil" data-id = '1' data-name = 'Bútorok' href="#">
							<li class="nav-item-mobil  d-flex">
								   <img src='https://api.new.topseller.hu/storage/categories/tcOhhnhI5zoSTGXw5ZN0TDr4yGUvx3v5YLnyGJ4y.jpeg'>
								   <div class='mobil-menu-text'>Bútorok</div>
								   <div class='ml-auto mr-3 d-flex'>
									  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
								   </div>
							</li>
						</a>
						
						<a class="nav-link-mobil" data-id = '2' data-name = 'Dekoráció'  href="#">   
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/kQV3UOPJxOV7w1IKn6RyyvpU2Rch38tt6zUpGKCV.jpeg'>
							   <div class='mobil-menu-text'>Dekoráció</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						  <a class="nav-link-mobil" data-id = '3' data-name = 'Textil' href="#">   
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/Vi3GjGnt14eKwDwtN30wP0zVWutoLdX2Jn4G2Arq.jpeg'>
								<div class='mobil-menu-text'>Textil</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/CQHbKszapmttSri2t1fTzpEDiSqf3rQ0TBP55OUS.jpeg'>
								 <div class='mobil-menu-text'>Világítás</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/Tkj5n3yJ2cJpVqMnhIuIsnWmfcxJOVHT4fSrGHge.jpeg'>
								 <div class='mobil-menu-text'>Felújítás</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/Tkj5n3yJ2cJpVqMnhIuIsnWmfcxJOVHT4fSrGHge.jpeg'>
							   <div class='mobil-menu-text'>Konyha</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/eawONX1KdkjI0YKJQMXqNDIxAUYW5QuQKbUTqfnY.jpeg'>
							    <div class='mobil-menu-text'>Fürdőszoba</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/MIUVPVRlnUlFVu9W3ddgbtqi8ZeSKjTyKvLy6ozg.jpeg'>
							   <div class='mobil-menu-text'>Nappali</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/hauKyMwCKaM2gWxjxW0SUSLBzrMFykPDAujrai87.jpeg'>
							   <div class='mobil-menu-text'>Hálószoba</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/CQHbKszapmttSri2t1fTzpEDiSqf3rQ0TBP55OUS.jpeg'>
							   <div class='mobil-menu-text'>Gyerekszoba</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/kQV3UOPJxOV7w1IKn6RyyvpU2Rch38tt6zUpGKCV.jpeg'>
							   <div class='mobil-menu-text'>Előszoba</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						 <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/VQRaXDJqUsJZ6bqYpwOtTnfgbsXpLzjDCyGjXNOH.jpeg'>
							   <div class='mobil-menu-text'>Dolgozószoba</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>

                  <a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="/blog.php">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/VQRaXDJqUsJZ6bqYpwOtTnfgbsXpLzjDCyGjXNOH.jpeg'>
							   <div class='mobil-menu-text'>Magazin</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
						
						<a class="nav-link-mobil" data-id = '3' data-name = 'Világítás' href="#">
							<li class="nav-item-mobil d-flex">
							   <img src='https://api.new.topseller.hu/storage/categories/vG85rWB5ECbSZC1scV9xQENcmQnPd1Dwlqkwp2Ke.jpeg'>
							  <div class='mobil-menu-text'>Kedvezmények</div>
							   <div class='ml-auto mr-3'>
								  <i class="fa fa-chevron-right bg-transparent icon-mobil" aria-hidden="true"></i>
							   </div>
							</li>
						</a>
                     </ul>
                  </div>
                  <div class="container">
                     <div class='d-xl-block d-lg-none d-xl-none d-sm-none d-none'>
                        <?php include(__DIR__ . '/categories.php'); ?>
                     </div>
                  </div>
               </div>
         </div>
         </nav>
         </div>
      </header>
	     <body>
      <div class='header-margin'></div>

