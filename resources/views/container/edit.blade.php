@extends('app')

@section('content')

<h2>Edit Container</h2>
{!! Form::model($container,['method'=>'PATCH','action'=>['ContainerController@update',$container->id]])  !!}
@include('container._form',['submitvariable'=>'Save Changes'])
{!! Form::close() !!}

@endsection;