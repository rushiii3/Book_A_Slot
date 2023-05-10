<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0  ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



    <div class="container w-75 mt-5 mb-5 shadow p-3 mb-5 bg-body" style="border-radius:20px;">
        <div class="row p-3">
            <div class="col-lg-12">
                <p class="h1">Sign up</p>
            </div>
            <div class="p-1 col-lg-6">
            <form>
            <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="name" class="form-control" id="full_name" placeholder="e.g. abc def" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailVerify" placeholder="e.g. abc@vazecollege.net" required>
                    <div id="emailVerify" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="SelectDepartment" class="form-label">Select Department</label>
                    <select class="form-select" required>
                      <option selected>Select Department</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="password" aria-describedby="pass_verify" placeholder="Password" required>
                      <span class="input-group-text pass_icon" id="basic-addon1"><i class="bi bi-eye-fill pass_open_eye"></i> <i class="bi bi-eye-slash-fill pass_close_eye"></i></span>
                    </div>
                    <div id="pass_verify" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="confirm_password" aria-describedby="confirm_password_verify" placeholder="Confirm Password" required>
                      <span class="input-group-text confirm_pass_icon" id="basic-addon1"><i class="bi bi-eye-fill cpass_open_eye"></i> <i class="bi bi-eye-slash-fill cpass_close_eye"></i></span>
                    </div>
                    <div id="confirm_password_verify" class="form-text"></div>
                </div>
                
                <button type="submit" id="submit" class="btn btn-primary px-5 py-2 ms-5 mt-3">Submit</button>
                </form>
            </div>
            <div class="p-4 col-lg-6">
                <img src="https://img.freepik.com/premium-vector/online-registration-sign-up-with-man-sitting-near-smartphone_268404-95.jpg?w=1480" alt="" class="img-fluid">
                <p class="text-center mt-5">
                    <a href="#" class="link-dark">Already have a account? sign in </a>
                </p>
            </div>
        </div>
    </div>
    <script src="../js/signup.js"></script>
</body>
</html>