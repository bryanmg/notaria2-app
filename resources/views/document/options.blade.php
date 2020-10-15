<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-eye"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('documents.edit', $documentId) }}">Editar</a>
            {!! Form::open(array('route' => array('documents.destroy', $documentId), 'method' => 'DELETE')) !!}
                {!! Form::submit('Eliminar', ['class' => 'dropdown-item']) !!}
            {!! Form::close() !!}
    </div>
</div>
