<?php
if (isset($_POST['submit'])) {
    $createUser = new UserController();
    $createUser->register();
    Redirect::to('dashUser');
}
?>

<div class="container">
    <form method="POST" class="bgClass ">
        <div class="row pt-5">
            <div class="col-lg-6">
                <h1 class="text-center mt-5">register</h1>

                <div class="box d-flex ">
                    <div class="col input-group-lg me-3 mb-3">
                        <label class="fw-bolder" for="username">Last name</label>
                        <input class="form-control" type="text" name="Last_name" placeholder="Enter your last name" id="username"  required>
                    </div>

                    <div class="col input-group-lg mb-3">
                        <label class="fw-bolder" for="Name">First Name</label>
                        <input class="form-control" type="text" name="First_name" placeholder="Enter your  first name" id="Name" required>
                    </div>
                </div>


                <div class="box ">
                    <div class="col input-group-lg  mb-3">
                        <label class="fw-bolder" for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Enter your email" id="email" required>
                    </div>

                </div>

                <div class="box d-flex ">

                    <div class="col input-group-lg mb-3">
                        <label class="fw-bolder" for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Enter your Password" id="password" required>
                    </div>
                </div>
                <div class="col-lg-12 d-grid t-3">
                    <button name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>


            </div>


        </div>
    </form>

</div>