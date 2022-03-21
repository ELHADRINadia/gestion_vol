<?php
    UserController::logout();
    session_destroy();
    Redirect::to('login');
?>