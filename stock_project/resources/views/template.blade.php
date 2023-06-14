<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('style.css') }}">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>StoCk System</title>
</head>
<body>
<div class="container-fluid"> 

<div class="row flex-nowrap"> 

    <div class="bg-dark col-auto col-md-2 col-lg-2 min-vh-100 d-flex flex-column justify-content-between"> 

          <div class="bg-dark p-3"> 
              <a class="d-flex text-decoration-none mt-1 align-items-center text-white" href="{{ url('/') }}">
                <span class="fs-2 d-none d-sm-inline">  Inventory </span>
              </a>
              <hr class="text-white d-none d-sm-block ">
              <ul class="nav nav-pills flex-column mt-4"> 

                  <li class="nav-item py-2 ps-sm-0">
                      <a class="nav-link text-white" href="{{ url('/product') }}"><i class="icon ion-md-tv fs-5"></i> 
                        <span class="fs-4 m-2 d-none d-sm-inline">Products</span></a>
                    </li>
                  
                  <li class="nav-item py-2 ps-sm-0">
                    <a class="nav-link text-white" href="#"><i class="icon ion-md-swap fs-5"></i> 
                      <span class="fs-4 m-2 d-none d-sm-inline">Intputs</span></a>
                  </li>
                  <li class="nav-item py-2 ps-sm-0">
                    <a class="nav-link text-white" href="#"><i class="icon ion-md-swap fs-5"></i> 
                      <span class="fs-4 m-2 d-none d-sm-inline"> Outputs</span></a>
                  </li>
                  <li class="nav-item py-2 ps-sm-0">
                      <a class="nav-link text-white" href="#"><i class="icon ion-md-person fs-5"></i> 
                          <span class="fs-4 m-2 d-none d-sm-inline"> Suppliers </span></a>
                    </li>
                    <li class="nav-item py-2 ps-sm-0">
                      <a class="nav-link text-white" href="#"><i class="icon ion-md-clipboard fs-5"></i> 
                          <span class="fs-4 m-2 d-none d-sm-inline" > Reports </span></a>
                    </li>
                  
                </ul>                               
                                                 
      </div>

      <div class="dropdown d-flex flex-column justify-content-between flex-column mt-4">
                            <hr class="text-white d-none d-sm-block ">
                            <a class="btn border-none outline-none text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{ asset ('/img/Perfil.png') }}" class="img-fluid rounded-circle avatar fs-5">
                                <span class="fs-5 m-2 d-none d-sm-inline" > Admin </span> </a>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#"><i class="icon ion-md-create"></i> Edit profile </a></li>
                              <li><a class="dropdown-item" href="#"><i class="icon ion-md-power"></i> Sign off</a></li>
                            </ul>
                          </div>

                                 

</div>
   
        @yield('dynamic_body')
    </div>
</body>
</html>