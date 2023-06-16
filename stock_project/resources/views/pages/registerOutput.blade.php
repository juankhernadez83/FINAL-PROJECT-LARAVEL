@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('dynamic_body')
 
<div class="container-fluid col-auto col-md"> 
    

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('saveInput') }}" method="POST">
        <!-- solicitamos token para el envio de datos -->
        @csrf
        <div class="body  d-flex col-auto col-md"> 
                     <div class="container">
                              <div class="cover">
                                  <div class="front">
                                    <img src="{{ url('/img/output.jpg') }}" alt="">
                                    
                                  </div>
                              </div>

                              <div class="forms">
                                  <div class="form-content">

                                  <div class="login-form">
                                          <div class="title">Add Ouput</div>
                                            <form action="#">
                                                <div class="input-boxes">
                                                  
                                                    <div class="input-box">  

                                                    <label for="">Select a product</label>
                                                        <select name="product" class="form-control">
                                                            @foreach ($product as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="input-box"> 
                                                            <label for="">Quantity</label>
                                                            <input type="text" name="quantity" class="form-control">
                                                    </div>

                                                    <div class="input-box">
                                                                <label for="">Date </label>
                                                                <input type="date" name="date_input" class="form-control">        
                                                    </div>
                                                
                                                    <input type="submit" class="btn btn-primary mt-3" value="Guardar Datos">

                                                </div>

                                         </form>


                                  </div>
            </div>
    </form>
</div>

@endsection