
@extends('layouts.app')

@section('content')
<div class="jumbotron">
<form action="Admin/store" method="POST" enctype="multipart/form-data">
<div id="f1">
  <div class="form-group">
    <label class="control-label col-sm-2" for="company_id">company id:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="email" placeholder="Enter company id" name="company_id">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">company name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="pwd" placeholder="Enter company name" name="name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">address:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">offer capacity:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="pwd" placeholder="Enter offer capacity" name="offer_capacity " required>
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="address">internship type:</label>
    <div class="col-sm-8">
      <label for="internship_type"><b></b></label><br>
      <input type="radio" name="internship_type" value="paid">paid
      <input type="radio" name="internship_type" value="non paid">non paid<br>
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="address">minimum grade:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="pwd" placeholder="Enter minimum grade" name="min_grade" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">area of study:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="pwd" placeholder="Enter field of study" name="filed" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">profile:</label>
    <div class="col-sm-8">
      <input type="file" name="img" id="img">
    </div>
  </div>
</div>
          <div id="f2"  style="display: none">  
                    <h2> <i>Register company coordinator information</i></h2>
                    <div class="form-group">
            <label class="control-label col-sm-2" for="address">coordinator id:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pwd" placeholder="Enter user_id" name="user_id" required>
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="address">first name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pwd" placeholder="Enter first_name" name="first_name" required>
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="address">last name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pwd" placeholder="Enter last name" name="last_name" required>
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="address">sex:</label>
            <div class="col-sm-8">
              <input type="radio" name="internship_type" value="male">male <br>
      <input type="radio" name="internship_type" value="femail">female<br>
            </div>
          </div>
              <div class="form-group">
            <label class="control-label col-sm-2" for="address">email:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="email" required>
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="address">phone :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pwd" placeholder="Enter phone" name="phone" required>
            </div>
          </div>
              <input type="submit" name="submit" value="register" class="btn btn-primary"> 
          </div>
        </form>
        <input type="button" id="bt1" onclick="myFunction()" value="next">
        </div>
<script>
function myFunction() {

  var x = document.getElementById("f1");
  var y = document.getElementById("f2");
  if (x.style.display == "none") {
    x.style.display = "block";
    y.style.display = "none";
    document.getElementById("bt1").value="next";

  } 
  else {
    x.style.display = "none";
    y.style.display = "block";
    document.getElementById("bt1").value="prev";
  }
}
</script>
</div>
@endsection