<?php include(__DIR__ . '/include/header.php'); ?>
<div class="container">
   <div class='row'>
      <div class="col-md-6">
         <div class='login-table'>
            <form method="POST" action="/">
               <center>Jelentkezz be az oldalra</center>
               <br><br>
               <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                  <div class="col-md-6">
                     <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Jelszó</label>
                  <div class="col-md-6">
                     <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                  </div>
               </div>
               <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                     <button type="submit" class="btn button-green">
                     Bejelentkezés
                     </button>
                     <a class="btn btn-link" href="">
                     Elfelejtetted a jelszavad?
                     </a>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="col-md-6">
         <div class='login-table'>
            <form method="POST" action="{{ route('register') }}">
               <center>Regisztráció</center>
               <br><br>
               <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Felhasználónév</label>
                  <div class="col-md-6">
                     <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">E-mail cím</label>
                  <div class="col-md-6">
                     <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Jelszó</label>
                  <div class="col-md-6">
                     <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Jelszó újra</label>
                  <div class="col-md-6">
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
               </div>
               <br>
               <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                     <button type="submit" class="btn button-green">
                     Regisztráció
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php include(__DIR__ . '/include/footer.php'); ?>