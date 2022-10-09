<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PESO Nasugbu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar-main">
            <a href="#" class="navbar-brand mx-3">
                <img src="https://assets.bossjob.com/jobseeker/Bossjob.svg" alt="LOGO" srcset="" height="29" width="120">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contentMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="contentMenu">
                <ul class="navbar-nav mx-5">

                    <li class="nav-item active">
                      <a href="#" class="nav-link ">Jobs</a></li>
                    <li class="nav-item ">
                      <a href="#" class="nav-link" >Companies</a></li>
                    <li class="nav-item ">
                      <a href="#" class="nav-link" >Career Guide</a></li>

                    <li class="nav-item ">
                      <a href="#" class="nav-link">I'm a Jobseeker</a></li>
                    <li class="nav-item">
                    <a href="#" class="nav-link">I'm an Employer</a></li>
                </ul>
            </nav>
            <div class="sub-navbar row mx-auto" id="sub-nav">
              <div class="form">
                <input id="searchj"type="text" name="searchj" value="<?php echo isset($_GET['searchj']) ? $_GET['searchj'] : ''; ?>" placeholder="Search for job title or company name">
                <input class="autocomplete" action="/action_page.php"id="searchl"type="text" name="searchl" value="<?php echo isset($_GET['searchl']) ? $_GET['searchl'] : ''; ?>" placeholder="Location">
                
                <button id="searchq-btn" class="btn btn-primary" type="submit" value="search" name="">Search</button>
              </div>
            </div>
        </div>
        <div class="row">
          <div id="scroll-jobs"class="col-lg-6 bg-primary"> 
            <div id="company-card" class="card my-2">
              <img id="company-icon" class=" rounded-circle" src="https://assets.bossjob.com/companies/25512/logo/355e26141e0f178cb9a1c853325dc366.jpeg" alt="">
              <div id="job-title"class="card-title">MIS Service Desk</div>
            </div>
            <div id="company-card" class="card my-2">
              <img id="company-icon" class=" rounded-circle" src="https://assets.bossjob.com/companies/25512/logo/355e26141e0f178cb9a1c853325dc366.jpeg" alt="">
              <div id="job-title"class="card-title">Process Trainer - Search Enginge (GIS)</div>
            </div>
            <div id="company-card" class="card my-2">
              <img id="company-icon" class=" rounded-circle" src="https://assets.bossjob.com/companies/25512/logo/355e26141e0f178cb9a1c853325dc366.jpeg" alt="">
              <div id="job-title"class="card-title">Process Trainer - Search Enginge (GIS)</div>
            </div>
            <div id="company-card" class="card my-2">
              <img id="company-icon" class=" rounded-circle" src="https://assets.bossjob.com/companies/25512/logo/355e26141e0f178cb9a1c853325dc366.jpeg" alt="">
              <div id="job-title"class="card-title">Process Trainer - Search Enginge (GIS)</div>
            </div>
            <div id="company-card" class="card my-2">
              <img id="company-icon" class=" rounded-circle" src="https://assets.bossjob.com/companies/25512/logo/355e26141e0f178cb9a1c853325dc366.jpeg" alt="">
              <div id="job-title"class="card-title">Process Trainer - Search Enginge (GIS)</div>
            </div>
           ~
            <div id="company-card" class="card my-2">
              <img id="company-icon" class=" rounded-circle" src="https://assets.bossjob.com/companies/25512/logo/355e26141e0f178cb9a1c853325dc366.jpeg" alt="">
            </div>
            <div id="company-card" class="card my-2">
              <img id="company-icon" class=" rounded-circle" src="https://assets.bossjob.com/companies/25512/logo/355e26141e0f178cb9a1c853325dc366.jpeg" alt="">
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>