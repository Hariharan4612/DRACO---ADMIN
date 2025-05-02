<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    D R A C O
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" >
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">F I X - I T</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="/index">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/table">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">.</label>
              <input type="text" class="form-control" placeholder="search..">
            </div>
          </div>
          <ul class="navbar-nav d-flex align-items-center  justify-content-end">
            <li class="nav-item d-flex align-items-center">
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
           </ul>
           </li>
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="material-symbols-rounded">account_circle</i>
              </a>
            </li>
        </div>
      </div>
    </nav> 
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
          <form action="/update/{{$edit->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3"name="name" value="{{ $edit->name }}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="mail" class="form-control" id="inputEmail3" name="mail" value="{{ $edit->mail }}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword3" name="password" value="{{ $edit->password }}">
    </div>
  </div>
  <fieldset class="row mb-3">
    <label class="col-form-label col-sm-2 pt-0">BE-MAJOR</label>
    <div class="col-sm-4">
      <div class="form-group">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios1" value="CSE">
        <label class="form-check-label" for="gridRadios1">
          CSE
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios2" value="IT">
        <label class="form-check-label" for="gridRadios2">
          IT
        </label>
      </div>
      <div class="form-check ">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios3" value="EEE" >
        <label class="form-check-label" for="gridRadios3">
          EEE
        </label>
        <div class="form-check ">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios4" value="ECE" >
        <label class="form-check-label" for="gridRadios3">
          ECE
        </label>
        <div class="form-check ">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios5" value="MECH" >
        <label class="form-check-label" for="gridRadios3">
          MECH
        </label>
        <div class="form-check ">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios3" value="CIVIL" >
        <label class="form-check-label" for="gridRadios3">
          CIVIL
        </label>
      </div>
    </div>
 </div>
  </fieldset>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">contact</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="inputPassword3"name="contact" value="{{ $edit->contact }}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">image</label>
    <div class="col-sm-4">
      <input type="file" class="form-control" id="inputPassword3"name="file">
    </div>
  </div>
<div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1" required>
         TERMS & CONDITION
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
          </div>
      </footer>
    </div>
  </main>
  
</body>

</html>
<style>
#space
{
  padding-top:60PX;
  
}
#add
{
  padding-left:1100px;
  position:sticky;
}




</style>