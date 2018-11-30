
<div class="form-group">
    {{ Form::label('name','Titulo')}}
    {{ Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
</div>
<div class="form-group">
    {{ Form::label('brief','Descripcion')}}
    {{ Form::text('brief',null,['class'=>'form-control','id'=>'price'])}}
</div>
<div class="form-group">
    {{ Form::label('body','Contenido')}}
    {{ Form::textarea('body',null,['class'=>'form-control','id'=>'ingredients'])}}
</div>
<div class="form-group">
    {{ Form::label('img','Imagen')}}
    {{ Form::file('img')}}
</div>
<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-sucess float-right'])}}
</div>

