<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies | PESO Nasugbu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style-companies.css">
    <link rel="shortcut icon" href="images\20221010_172415_0000.png" type="image/x-icon">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light" id="navbar-main">
            <a href="home.php" class="navbar-brand mx-3">
                <img src="" alt="LOGO" srcset="" height="100" width="100">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contentMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="contentMenu">
                <ul class="navbar-nav mx-5">

                    <li class="nav-item active">
                      <a href="#" class="nav-link ">Jobs</a></li>
                    <li class="nav-item ">
                      <a href="companies.php" class="nav-link" >Companies</a></li>
                    <li class="nav-item ">
                      <a href="#" class="nav-link" >Career Guide</a></li>
                    <span></span>
                    <li class="nav-item ">
                      <a href="register.php" class="nav-link">I'm a Jobseeker</a></li>
                    <li class="nav-item">
                    <a href="register-emp.php" class="nav-link">I'm an Employer</a></li>
                    <li class="nav-item ">
                      <a href="login.php" class="nav-link" >Login</a></li>
                </ul>
            </nav>
            <div class="companies-text p-0 my-3">
            <p id="comp-textopening"class="companies-textopening text-primary h3 mx-5">Find great companies in Nasugbu</p>

            </div>
           
            <div class="sub-navbar row mx-auto" id="sub-nav">
              <div class="form mx-5">
                <input id="searchj"type="text" name="searchj" value="<?php echo isset($_GET['searchj']) ? $_GET['searchj'] : ''; ?>" placeholder="Search for job title or company name">
                
                <button id="searchq-btn" class="btn btn-primary" type="submit" value="search" name="">Search</button>
              </div>
            </div>

            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\00b485f3dbc406101930086ba9488904.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\7f03fdc44b659cde58b4e66eee9e43e2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\34ea20f0532384e1658f8e1530cdee8a.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\4442c197c2c5fdd35aa3597ca4a79150.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\4187603a5e00d36115b01c3406994f54.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\e31d173f1af108e52bb4198bec8e6afd.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="popular-companies">
  
    <div class="row"><p class="pop-companies-title my-4 h4">Companies In Nasugbu</p>
        <div class="col-lg-4 my-4">
            <div id ="pop-company-card" class="card">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-5">
            <div id ="pop-company-card" class="card">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-5">
            <div id ="pop-company-card" class="card">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id ="pop-company-card" class="card my-2">
                <div class="card-body">
                    <div class="company-desc">
                        <div class="card-title">
                            <p class="company-name">
                                John Clements Consultants
                            </p>
                            <img id="pop-comp-icon" src="images\RYXON8fpcx4d4HcviPfVMn7Tdd3qRPfrOP5otogJ.jpeg" alt="" srcset="">
                            <a href=""> View Job Openings <img src="" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 