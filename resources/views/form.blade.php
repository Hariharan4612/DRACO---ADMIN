<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
     integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body style="background-color: #999999; padding: 40px;" >  
     <div class="" >
        <form action="/sstore" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3"name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="mail" class="form-control" id="inputEmail3" name="mail">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
  <fieldset class="row mb-3">
    <label class="col-form-label col-sm-2 pt-0">BE-MAJOR</label>
    <div class="col-sm-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios1" value="CSE" >
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
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios3" value="EEE" >
        <label class="form-check-label" for="gridRadios3">
          EEE
        </label>
        <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios4" value="ECE" >
        <label class="form-check-label" for="gridRadios3">
          ECE
        </label>
        <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="dep" id="gridRadios5" value="MECH" >
        <label class="form-check-label" for="gridRadios3">
          MECH
        </label>
        <div class="form-check disabled">
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
      <input type="number" class="form-control" id="inputPassword3"name="contact">
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
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
        </div>
    
</body>
</html>
