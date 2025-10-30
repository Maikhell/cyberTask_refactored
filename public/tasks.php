<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tasks</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
</head>

<body>
    <!-- Navbar Contents Starts -->
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Task</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="archives.php">Archive</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Convert to Excel</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Customize
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Darkmode</a></li>
                                <li><a class="dropdown-item active" href="#">Lightmode</a></li>
                                <li><a class="dropdown-item" href="#">Contrast</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <button class="btn btn-outline-danger"  id="logoutbtn" >Logout</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Navbar Contents Ends -->
        <!-- Table Contents Starts -->
        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Descriptions</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Status</th>
                        <th scope="col">Urgency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Make Notes and Reviewer</td>
                        <td>This is a really important task that requires precision and real thinking skills.</td>
                        <td>08-28-2025</td>
                        <td>Incomplete</td>
                        <td>Urgent</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Finish Project Proposal</td>
                        <td>Prepare the draft and finalize all sections for supervisor review.</td>
                        <td>09-02-2025</td>
                        <td>Complete</td>
                        <td>High</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Design System Wireframes</td>
                        <td>Create UI mockups and ensure the layout aligns with the client’s requirements.</td>
                        <td>09-10-2025</td>
                        <td>Incomplete</td>
                        <td>Medium</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Update Database Schema</td>
                        <td>Add new columns for section and year to improve data structure.</td>
                        <td>09-15-2025</td>
                        <td>In Progress</td>
                        <td>High</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Test User Login Feature</td>
                        <td>Perform manual and automated testing on the login module for errors.</td>
                        <td>09-18-2025</td>
                        <td>Incomplete</td>
                        <td>Low</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Prepare Presentation Slides</td>
                        <td>Create slides summarizing project progress and upcoming milestones.</td>
                        <td>09-25-2025</td>
                        <td>Complete</td>
                        <td>Medium</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Optimize Query Performance</td>
                        <td>Analyze slow database queries and implement indexing strategies.</td>
                        <td>10-02-2025</td>
                        <td>In Progress</td>
                        <td>High</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Write API Documentation</td>
                        <td>Document all endpoints with request and response examples.</td>
                        <td>10-05-2025</td>
                        <td>Incomplete</td>
                        <td>Medium</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Conduct Code Review</td>
                        <td>Review recent commits and suggest improvements to maintain code quality.</td>
                        <td>10-10-2025</td>
                        <td>Complete</td>
                        <td>Low</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Deploy to Staging Server</td>
                        <td>Push latest updates to the staging environment for final testing.</td>
                        <td>10-15-2025</td>
                        <td>Incomplete</td>
                        <td>Urgent</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    <!-- Table Contents Ends -->
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/logoutprompts.js"></script>
</body>

</html>