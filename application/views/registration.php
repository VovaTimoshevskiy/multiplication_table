<div class="container">
    <div class="row justify-content-center align-items-center"
         style="height:100vh">
        <div class="col-4">
            <form method="post" action="/profile/registration">
                <h1 class="h3 mb-3 font-weight-normal text-center">
                    Registration</h1>
                <div class="form-group">
                    <input type="text" class="form-control"
                           style="height: 50px;" placeholder="Name" name="name"
                           required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"
                           style="height: 50px;" placeholder="Email address"
                           name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control"
                           style="height: 50px;" placeholder="Password"
                           name="password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control"
                           style="height: 50px;" placeholder="Confirm Password"
                           name="password_confirm" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</div>
