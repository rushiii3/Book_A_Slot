<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign Up</title>
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
    </head>
    <body class="bg-light">
        <?php
            require "connection/connect.php";
            require_once("loader.html"); 
        ?>
        <main id="main">
            <div
                class="alert alert-success alert-dismissible fade show"
                id="success"
                role="alert"
            >
                Congratulations, your account has been successfully created.
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            </div>
            <div
                class="alert alert-danger alert-dismissible fade show"
                role="alert"
            >
                Failed to register. Try again.
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            </div>
            <script>
                function showSuccess(){
                  $('.alert-success').show();
                  setTimeout(function() {
                       window.location.href = "sign_in.php"
                      }, 2000);
                }
                function showWarning(){
                  $('.alert-danger').show();
                }
                $('.alert-success').hide();
                $('.alert-danger').hide();
            </script>
            <div
                class="container w-75 mt-5 mb-5 shadow p-3 mb-5 bg-body"
                style="border-radius: 20px"
            >
                <div class="row p-3">
                    <div class="col-lg-12">
                        <p class="h1">Sign up</p>
                    </div>
                    <div class="p-1 col-lg-6">
                        <form action="<?php $_PHP_SELF ?>" method="POST">
                            <div class="mb-3">
                                <label for="full_name" class="form-label"
                                    >Full Name</label
                                >
                                <input
                                    type="text"
                                    name="full_name"
                                    class="form-control"
                                    id="full_name"
                                    placeholder="e.g. abc def"
                                    required
                                />
                            </div>
                            <div class="mb-3">
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
                                <label
                                    for="SelectDepartment"
                                    name="department"
                                    class="form-label"
                                    >Select Department</label
                                >
                                <select
                                    name="department_namee"
                                    class="form-select"
                                    required
                                >
                                    <option selected>Select Department</option>
                                    <?php
                                        $get_department_name_query = "SELECT * FROM DEPARTMENT";
                                        $result_of_department_query = mysqli_query($con,$get_department_name_query);
                                        if(mysqli_num_rows($result_of_department_query)>0) 
                                        {
                                            while($row_of_department_name =
                                            mysqli_fetch_assoc($result_of_department_query))
                                            { ?>
                                            <option
                                                value="<?php echo($row_of_department_name['department_name']); ?>"
                                            >
                                                <?php echo($row_of_department_name['department_name']); ?>
                                            </option>
                                             <?php
                                          }
                                        }
                                            ?>
                                    <option value="others">Others</option>
                                </select>
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
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label"
                                    >Confirm Password</label
                                >
                                <div class="input-group">
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="confirm_password"
                                        aria-describedby="confirm_password_verify"
                                        placeholder="Confirm Password"
                                        required
                                    />
                                    <span
                                        class="input-group-text confirm_pass_icon"
                                        id="basic-addon1"
                                        ><i
                                            class="bi bi-eye-fill cpass_open_eye"
                                        ></i>
                                        <i
                                            class="bi bi-eye-slash-fill cpass_close_eye"
                                        ></i
                                    ></span>
                                </div>
                                <div
                                    id="confirm_password_verify"
                                    class="form-text"
                                ></div>
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
                    <div class="p-4 col-lg-6">
                        <img
                            src="https://img.freepik.com/premium-vector/online-registration-sign-up-with-man-sitting-near-smartphone_268404-95.jpg?w=1480"
                            alt=""
                            class="img-fluid"
                        />
                        <p class="text-center mt-5">
                            <a href="sign_in.php" class="link-dark"
                                >Already have a account? sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
          <?php
            if(isset($_POST["submit"]))
            {
              $user_name = mysqli_real_escape_string($con, $_POST["full_name"]);
            $email = mysqli_real_escape_string($con, $_POST["email"]);
            $department_namee = mysqli_real_escape_string($con, $_POST["department_namee"]);
            $password = mysqli_real_escape_string($con, $_POST["password"]);
            $insert_user_info = "INSERT INTO `USER` (`user_name`, `user_full_name`, `pwd`, `department_name`, `user_type`) VALUES ('$email', '$user_name', '$password', '$department_namee', 'o')";

            if(mysqli_query($con,$insert_user_info))
            {
              ?>
                    <script>
                        showSuccess()
                    </script>
              <?php
            }
            else{
              ?>
                    <script>
                        showWarning()
                    </script>
              <?php
            }
            }
            mysqli_close($con);
          ?>
        <script src="../js/signup.js"></script>
    </body>
</html>
