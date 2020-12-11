     <!-- FOOTER -->
    <footer>
		<div class='footer-first'>
			<div class='container'>
				<div class='row'>

					<div class="col-xs-6 col-sm-4 col-md-5 col-lg-5">
						<h3>TOPSELLER.HU-RÓL</h3>
						<div class='text'>
							<li><a href="/">Hogyan működik a Topseller.hu </a></li>
							<li><a href="/">Rendelés a Topselleren</a></li>
							<li><a href="/">Kiszállítási, fizetési mód</a></li>
							<li><a href="/">Fizess Barionnal</a></li>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-4 col-md-7 col-lg-7 justify-content-left">
						<h3  class='text-center'>TOPSELLER.HU ALKALMAZÁS</h3>
						<div class='text'>
							<a href="/akcioink" class=""><p class="topseller-app-info-span"> A Topseller alkalmazással az inspiráló divatötletek mindig a rendelkezésedre állnak. Új termékeket, kollekciókat és kedvezményeket találhatsz ingyen, egy helyen!  </p></a>
						
							<div class="buttons_app">
								<a href="" class="button_app button_app--app-store"><span>Letöltés</span></a>
								<a href="" class="button_app button_app--google-play"><span>Add hozzá</span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
    </footer>

		<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/mobil-categories.js"></script>
	<script>
	$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>
  </body>
</html>
