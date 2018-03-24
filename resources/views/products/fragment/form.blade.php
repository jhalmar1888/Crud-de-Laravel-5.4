<div class="form-group">

    {!! form::label('name', 'Nombre del producto') !!}
    {!! form::text('name', null, ['class' => 'form-control']) !!}

</div>
<div class="form-group">

    {!! form::label('short', 'Descripcion breve del producto') !!}
    {!! form::text('short', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! form::label('body', 'Descripcion breve del producto') !!}
{!! form::text('body', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! form::submit('ENVIAR', ['class' => 'btn btn-[primary']) !!}

</div>