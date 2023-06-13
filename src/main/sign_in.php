<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign In</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="../js/signin.js"></script>
    </head>
    <body class="bg-light">
        <?php 
    require "connection/connect.php";
    require_once("loader.html"); 
    ?>

        <main id="main">
            <!-- FAILED -->
<div class="modal fade" id="failed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered w-75 mx-auto">
    <div class="modal-content">
      <div class="modal-body">
      <img src="https://img.freepik.com/free-vector/401-error-unauthorized-concept-illustration_114360-5531.jpg?w=1060&t=st=1683877856~exp=1683878456~hmac=dc95863d337270b3f7d86dfae1957dcbffa77e5ca417f4dbc27522cd8a3f7a04" class="img-fluid" alt="">
        <p class="fs-6 text-center"><strong>Login Failed</strong> <br/> Incorrect Email or Password </p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Try Again</button>
      </div>
    </div>
  </div>
</div>
            <div
                class="container w-75 mt-5 mb-5 shadow p-3 mb-5 bg-body"
                style="border-radius: 20px"
            >
                <div class="row p-3">
                    <div class="p-1 col-lg-6">
                        <div class="col-lg-12 mb-5">
                            <p class="h1">Sign in</p>
                        </div>
                        <form action="<?php $_PHP_SELF?>" method="POST">
                            <div class="mb-3 pt-5">
                                <label for="email" class="form-label"
                                    >Email address</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    id="email"
                                    aria-describedby="emailVerify"
                                    placeholder="e.g. abc@vazecollege.net"
                                    required
                                />
                                <div id="emailVerify" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"
                                    >Password</label
                                >
                                <div class="input-group">
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        id="password"
                                        aria-describedby="pass_verify"
                                        placeholder="Password"
                                        required
                                    />
                                    <span
                                        class="input-group-text pass_icon"
                                        id="basic-addon1"
                                        ><i
                                            class="bi bi-eye-fill pass_open_eye"
                                        ></i>
                                        <i
                                            class="bi bi-eye-slash-fill pass_close_eye"
                                        ></i
                                    ></span>
                                </div>
                                <div id="pass_verify" class="form-text"></div>
                            </div>
                            <button
                                type="submit"
                                name="submit"
                                id="submit"
                                class="btn btn-primary px-5 py-2 ms-5 mt-3"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                    <div class="p-4 col-lg-6 mt-1">
                        <img
                            src="https://img.freepik.com/free-vector/login-concept-illustration_114360-757.jpg?w=1060&t=st=1683729827~exp=1683730427~hmac=cb33e311b798aee5f88e3960c51d67d266074f5df878c0126ab6fe6db3dbaeab"
                            alt=""
                            class="img-fluid h-75 w-100"
                        />
                        <p class="text-center mt-5">
                            <a href="sign_up.php" class="link-dark"
                                >Don't have a account? Sign up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

<?php
    mysqli_close($con);
?>
