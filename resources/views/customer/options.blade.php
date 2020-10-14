<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-eye"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('customers.edit', $customer_id) }}">Editar</a>
            {!! Form::open(array('route' => array('customers.destroy', $customer_id), 'method' => 'DELETE')) !!}
                {!! Form::submit('Eliminar', ['class' => 'dropdown-item']) !!}
            {!! Form::close() !!}
    </div>
</div>
