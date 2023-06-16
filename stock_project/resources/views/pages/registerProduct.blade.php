@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
<div class="container-fluid col-auto col-md"> 
    

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('saveProduct') }}" method="POST">
        <!-- solicitamos token para el envio de datos -->
        @csrf
        <div class="body  d-flex col-auto col-md"> 
                     <div class="container">
                              <div class="cover">
                                  <div class="front">
                                    <img src="Resource/storage.jpg" alt="">
                                    
                                  </div>
                              </div>

                              <div class="forms">
                                  <div class="form-content">

                                    <div class="login-form">
                                          <div class="title">Add Products</div>
                                            <form action="#">
                                                <div class="input-boxes">
                                                  
                                                  <div class="input-box"> 
                                                    <label for="name"> Name </label>
                                                    <input type="text" class="" id="name">
                                                    
                                                  
                                                  </div>
                                                  
                                                  <div class="input-box">
                                                     
                                                        <select for="lastname" name="measure" class="form-control"> Unit 
                                                        
                                                        @foreach ($measure as $element)
                                                        <option value="{{ $element->id }}">{{ $element->name }}</option>
                                                                @endforeach
                                                        </select>
                                                        <input type="text" class="" id="lastname">
                                                   </div>   
                                                  
                                                  </div>
                                                  
                                                  <div class="input-box"> 
                                                    <label for=""> Price </label>
                                                   
                                                    <input type="text" class="i" id="price" placeholder="$">
                                                    
                                                  
                                                  </div>
                                                  
                                                  <div class="input-box"> 
                                                    <label for="lastname"> Supplier </label>
                                                    <select name="supplier" class="form-control">
                                                        @foreach ($supplier as $elements)
                                                            <option value="{{ $elements->id }}">{{ $elements->name }}</option>
                                                        @endforeach
                                                    </select>
                                                  
                                                  </div>
                                                  
                                                  <input type="submit" class="btn btn-primary mt-3" value="Guardar Datos">
                                          
                                        </form>

                                    </div>
                                
                                </div>
                              </div>
                       </div>
              </div>
    </form>
</div>
@endsection