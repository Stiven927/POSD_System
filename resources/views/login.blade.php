@extends('layout')
@section('title', 'Login')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <script>
      function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #222529;
}


form{
    height: 620px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>




<div class=container>
<div class="mt-5">
    @if($errors->any())
      <div class="col-12">
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
        @endforeach
      </div>  
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
</div>
<form action="{{route('login.post')}}" method="POST"  style="width: 500px">
@csrf  
<h3>ACCEDI</h3>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email</label>
    <input type="email" name="email" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Password</label>
    <input type="password" name="password" id="pass" placeholder="Password">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onclick="myFunction()">
  <label class="form-check-label" for="flexCheckDefault">
    Mostra Password
  </label>
</div>

 
  <button type="submit" class="">Accedi</button>
  <div style="padding-top:30px; text-align: center;"><a href="{{route('registration')}}">Non hai un account? Registrati</a></div>
</form>
</div>
@endsection