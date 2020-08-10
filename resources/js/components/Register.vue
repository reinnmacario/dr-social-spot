<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <login-side-info></login-side-info>
        <div class="col-md-5 login-card-container">
          <div class="card rounded-0 login-card">
            <div class="card-body">
              <div class="mb-1">
                <a class="btn btn-primary btn-sm" href="/login">Back to Login</a>
              </div>
              <div class="login-form-info">
                <div class="login-form-title">DR SOCIAL SPOT</div>
                <p class="login-form-description">Login to your account</p>
              </div>
              <div class="login-form-container">
                <div class="alert-container-content"></div>
                <form method="POST">
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                    <div class="col-md-8">
                      <input
                        id="name"
                        type="text"
                        class="form-control"
                        name="name"
                        required
                        autocomplete="name"
                        autofocus
                      />
                    </div>
                  </div>

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
                      />

                      <!-- <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                      </span>-->
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Gender</label>
                    <div class="col-md-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input
                          type="radio"
                          id="radio-male"
                          name="gender"
                          class="custom-control-input"
                        />
                        <label class="custom-control-label" for="radio-male">Male</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input
                          type="radio"
                          id="radio-femaile"
                          name="gender"
                          class="custom-control-input"
                        />
                        <label class="custom-control-label" for="radio-femaile">Female</label>
                      </div>
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
                        autocomplete="new-password"
                      />
                    </div>
                  </div>

                  <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
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