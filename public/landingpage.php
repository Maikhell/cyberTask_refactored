<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberTask</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/landingpage.css">
</head>

<body>
    <!-- Navbar Contents Starts -->
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cyber Task</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Get Started</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-success " type="submit">Login</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Navbar Contents Ends -->
        <!-- Main Contents Starts -->
        <div class="cotainer-fluid" id="first-body">
            <div class="row">
                <div class="col-sm-7" id="outer-form-container-left">
                    <div class="introduction">
                        <div class="row" id ="main-title-container">
                            <div class="col-sm-6">
                                <h1 class="main-title-cyber">Cyber</h1>
                            </div>
                            <div class="col-sm-6" id = "task-title">
                                <h1 class="main-title-task"> Task</h1>
                            </div>
                        </div>
                        <h3>The easiest way to get things done.</h3>
                        <p>List, Solve, and Archive. This is your all-in-one productivity hub where you can list your
                            tasks and get instant, AI-powered help to finish them, then file them away for good.</p>
                        <div class="robot-container">
                            <img class="robot-png" src="./assets/images/robot-img.jpg" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-sm-4" id="outer-form-container">
                    <div class="container" id="inner-form">
                        <h3 class="signup">Sign Up For Free</h3>
                        <div class="container-fluid" id="log-in-form">
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputGmail" placeholder="Gmail Login">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <p class="Or-divider"><span>Or</span></p>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="inputPassword"
                                        placeholder="password">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <p class="terms">By clicking Create account, I agree to the <a class="terms-link"
                                            href="">Terms of Service</a> and
                                        <a class="terms-link" href="">Privacy Policy</a>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <form class="inner-container">
                                        <button class="btn btn-outline-success" id="form-button" type="submit">Create
                                            Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Contents Starts -->
        <!-- Modal Contents Starts -->
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Contents Ends -->
        <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="./assets/js/openmodal.js"></script>
</body>

</html>