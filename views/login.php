<?php
// require_once "./controllers/UserController"
if ($_SESSION) {
    // var_dump($_SESSION);
    if ($_SESSION['role'] == "user") {
        Redirect::to('dashUser');
    }elseif($_SESSION['role'] == "admin"){
        Redirect::to('dashboard');
    }else{
        Redirect::to('home');
    }
}
if (isset($_POST['submit'])) {
    // echo "pre  jdqf<qjfq<ilfg<qiqqhfvQIFvQIFvQI";
    $createUser = new UserController();
    $createUser->authentification();
    // var_dump($createUser);
    // Redirect::to('dashUser');
}
// var_dump($_POST);

?>
<div class="bg-login">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border bgClass shadow p-3 rounded" method="post" style="width: 450px;">
            <h1 class="text-center p-3"> Sign in</h1>

            <div class="form-group mb-3">
                <label class="mb-3" for="Username">User name</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3" for="password">Password</label>
                <input type="password" class="form-control" id="text" name="password" placeholder="********">
            </div>
            <!-- <div>
                <label for="userType">User type:</label>
                <select class="form-select mb-3" id="userType" name="role">
                    <option selected>Select User type:</option>
                    <option selected value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div> -->
            <button type="submit" name="submit" class="btn btn-primary col-lg-12 d-grid t-3">Submit</button>
            <p class="text-center pt-5 ">You do not have an account ? <a href="<?php echo BASE_URL; ?>register">Sign up</a></p>

        </form>
    </div>
</div>