<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <login-side-info></login-side-info>
        <div class="col-md-5 login-card-container">
          <div class="card rounded-0 login-card">
            <div class="card-body">
              <div class="login-form-info">
                <div class="login-form-title">DR SOCIAL SPOT</div>
                <p class="login-form-description">Login to your account</p>
              </div>
              <div class="login-form-container">
                <div class="alert-container-content"></div>
                <form action="/login" method="POST">
                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                    <div class="col-md-8">
                      <input
                        id="email"
                        type="email"
                        class="form-control"
                        name="email"
                        required
                        autocomplete="email"
                        autofocus
                      />
                      <!-- <span
                        class="invalid-feedback"
                        role="alert"
                      >
                        <strong>{{ $message }}</strong>
                      </span>-->
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                    <div class="col-md-8">
                      <input
                        id="password"
                        type="password"
                        class="form-control"
                        name="password"
                        required
                        autocomplete="current-password"
                      />
                      <!-- <span
                        class="invalid-feedback"
                        role="alert"
                      >
                        <strong>{{ $message }}</strong>
                      </span>-->
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </div>
                  <div class="text-center mt-3">
                    Don't have an account yet?
                    <a href="/register">Register here</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer-info></footer-info>
  </div>
</template>

<script>
export default {}
</script>