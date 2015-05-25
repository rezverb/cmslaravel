<div class='form-group'>
{!! Form::label('title','Page Title') !!}
{!! Form::text('title',null,['class'=>'form-control'])  !!}
</div>


<div class='form-group'>
{!! Form::label('header','Header') !!}
{!! Form::text('header',null,['class'=>'form-control'])  !!}
</div>

<div class='form-group'>
{!! Form::label('urls','Page Url') !!}
{!! Form::text('urls',null,['class'=>'form-control'])  !!}
</div>


<div class='form-group'>
{!! Form::label('smalldesc','Brief Description') !!}
{!! Form::textarea('smalldesc',null,['class'=>'form-control']) !!}
</div>


<div class='form-group'>
{!! Form::label('content','Page Content') !!}
{!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>

<div class='form-group'>
{!! Form::label('active','Page Status') !!}
{!! Form::select('active',[1=>'Active',0=>'Inactive'],null,['class'=>'form-control']) !!}
</div>


<div class='form-group'>
{!! Form::submit($submitbuttontext,['class'=>'btn btn-primary form-control']) !!}
</div>

