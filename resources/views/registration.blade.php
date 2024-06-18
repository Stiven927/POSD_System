@extends('layout')
@section('title', 'registration')
@section('content')

<head>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
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
    height: 700px;
    width: 700px;
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
select{
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
<div class="container ">
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

<form style="width:700px" action="{{route('registration.post')}}" method="POST">
@csrf  
<div align="center">
<div class="row">
  <div class="col">
    <label for="name" class="form-label">Nome</label>
    <input type="text"  name="name" maxlength="250">
</div>
<div class="row">
  <div class="col">
    <label for="email" class="form-label">Email</label>
    <input type="text"  name="email" maxlength="250">
  </div>
  <div class="col">
    <label for="password" class="form-label">Password</label>
    <input type="password"  name="password" maxlength="250">
</div>
<div class="col">
<label for="email" class="form-label">Ruolo</label>
<select id="role_id" name="role_id">
  
  <option value="1">Utente</option selected>
  <option value="2">Admin di Sistema</option>
  <option value="3">Ingegnere del software</option>
  <option value="4">Sviluppatore</option>
  <option value="5">Responsabile della sicurezza</option>
  <option value="6">Azienda</option>
  <option value="7">Utente Programmatore</option>
</select>
</div>
  
</div>

  </div>  
  <button type="submit" class="btn btn-success">Registrati</button>
  <div style="padding-top:30px; text-align: center;"><a href="{{route('login')}}">Hai già un account? Accedi</a></div>
</div>
</form>
@endsection