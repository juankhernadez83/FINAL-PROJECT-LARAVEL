@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
<div class="container-fluid col-auto col-md"> 
   

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('saveSuppliers') }}" method="POST">
        <!-- solicitamos token para el envio de datos -->
        @csrf

        <div class="body d-flex p-3 col-auto col-md"> 
                     <div class="container">
                              <div class="cover">
                                  <div class="front">
                                    <img src="{{ url('/img/supplier.jpg') }}" alt="">
                                    
                                  </div>
                              </div>

                              <div class="forms">
                                  <div class="form-content">

                                    <div class="login-form">
                                          <div class="title">Add Suppliers</div>
                                            <form action="#">
                                                <div class="input-boxes">
                                                  
                                                  <div class="input-box"> 
                                                    <label for="name"> Name </label>
                                                    <input type="text" class="" id="name">
                                                    
                                                  
                                                  </div>
                                                  
                                                  <div class="input-box"> 
                                                    <label for="lastname"> Last Name </label>
                                                    <input type="text" class="" id="lastname">
                                                   
                                                  
                                                  </div>
                                                  
                                                  <div class="input-box"> 
                                                    <label for="lastname"> Phone </label>
                                                    <input type="text" class="i" id="phone">
                                                    
                                                  
                                                  </div>
                                                  
                                                  <div class="input-box"> 
                                                    <label for="lastname"> Email </label>
                                                    <input type="text" class="" id="Email">
                                                    
                                                  
                                                  </div>
                                                  
                                                  <input type="submit" class="btn btn-primary mt-3" value="Guardar Datos">
                                          
                                        </form>

                                    </div>
                                
                                </div>
                              </div>
                       </div>
              </div>
</div>


    </form>
</div>
@endsection