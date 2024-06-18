
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}"  width="100px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @auth

              <li class="nav-item">
              <button  class="btn btn-info" style="margin:15px;"><a class="nav-link active" aria-current="page" href="/">Home</a></button>
              </li>
              <li class="nav-item">
              <button  class="btn btn-success" style="margin:15px;"><a class="nav-link active" aria-current="page" href="/listpkb">Lista PKB</a></button>
              </li>
              <li class="nav-item">
              <button  class="btn btn-primary" style="margin:15px;"><a class="nav-link active" aria-current="page" href="/listcwe">Lista CWE</a></button>
              </li>
              <li class="nav-item">
              <button  class="btn btn-warning" style="margin:15px;"><a class="nav-link active" aria-current="page" href="/listpry">Lista Privacy</a></button>
              </li> 
              <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button  class="btn btn-danger" style="margin: 15px;" aria-current="page" type="submit">Esci</button>
           </li>  
                @else
              <li class="nav-item">
              <button  class="btn btn-success" style="margin:15px;"><a class="nav-link active" aria-current="page" href="/login">Login</a></button>
              </li>
              <li class="nav-item">
              <button  class="btn btn-primary" style="margin:15px;" ><a class="nav-link active" aria-current="page" href="/registration">Registrati</a></button>
              </li>
                @endauth
                <div style="padding-left: 20px;">
               
           </div>
</form>
            </form>
          </div>
        </div>
    </nav>
