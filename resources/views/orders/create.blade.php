@extends('layouts.modal') 
@section('title','Nuevo Pedido') 
@section('content')
    @include('orders.form.inputs')
<h3>Menus</h3>
<div id="accordion">
    
</div>
<h3>Productos extra</h3>
<div id="accordionExtra">
    <div class="card">
        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
            id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" name="buttonProducts">
                    Productos
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <ul id="OrderProducts" class="list-group list-group-flush">


                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"
            id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link">
                        Platos
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <ul id="OrderPlates" class="list-group list-group-flush">


            </ul>
        </div>
    </div>

</div>
@endsection
 
@section('footer')
<button name="submitEdit" type="button" class="btn btn-primary">Guardar</button>
<button type="button" name="closeModal" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
@endsection