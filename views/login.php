    <!-- Login 5 - Bootstrap Brain Component -->

<section class="p-3 p-md-4 p-xl-9" style="background-color: #7d321be3;">
    <div class="container mt-5 pt-5 col-md-10" >
    <?php require_once("views/includes/getMessage.php"); ?>

      <div class="card border-light-subtle shadow-sm" >
        <div class="row g-0">
          <div class="col-12 col-md-6" style="background-color: #f7ddb5;">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="col-10 col-xl-8 py-3 mb-5">
                <!-- <img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/bsb-logo-light.svg" width="245" height="80" alt="BootstrapBrain Logo"> -->
                <hr class="border-primary-subtle">
                <h4 class="h4 mb-0 text-center">Bienvenue sur le site <br>Ma Demande de grâce</h4>
                <p class="lead m-0 text-center">qui vous permet de faire vos demandes de messes en ligne pour vous et vos proches</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5 text-center">
                    <h3>Mon compte de<br>demande de Messe</h3>
                  </div>
                </div>
              </div>

              <?php if($erreur): ?>
                <div class="alert alert-danger">
                    <?= $erreur ?>
                </div>
              <?php endif;?>  

              <form action="" method="post" >
                <div class="row gy-3 gy-md-4 overflow-hidden">
                  <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="monemail@exemple.com" style=" height:70%; margin: 0 auto;" required>
                  </div>
                  <div class="col-12">
                    <label for="" class="form-label">Mot de Passe<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" placeholder="Entrer votre mot de passe" name="mdp" id="" value="" style=" height:70%; margin: 0 auto;" required>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                      <label class="form-check-label text-secondary" for="remember_me">
                        Se souvenir de moi
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn bsb-btn-sm btn-success" name="connecter" type="submit">Se connecter</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <hr class="mt-5 mb-4 border-secondary-subtle">
                  <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                    <a href="?page=register" class="link-secondary text-decoration-solid">Créer un nouveau compte</a>
                    <a href="#!" class="link-secondary text-decoration-solid">Mot de passe oublier</a>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-12">
                  <p class="mt-5 mb-4">Or sign in with</p>
                  <div class="d-flex gap-3 flex-column flex-xl-row">
                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                      </svg>
                      <span class="ms-2 fs-6">Google</span>
                    </a>
                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                      </svg>
                      <span class="ms-2 fs-6">Facebook</span>
                    </a>
                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                      </svg>
                      <span class="ms-2 fs-6">Twitter</span>
                    </a>
                  </div>
                </div>
              </div> -->
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
</section>

