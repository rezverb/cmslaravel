<div class="form-group">
{!! Form::label('title','Title') !!}
{!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('description','Description') !!}
{!! Form::text('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('active','Active') !!}
{!! Form::text('active',[1=>'Active',0=>'In Active'],['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!!Form::submit($submitvariable,['class'='btn btn-primary form-control'])!!}
</div>