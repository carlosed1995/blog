@extends('Layouts.admin')
@section('content')
{!!Form::open()!!}
@include('genero.form.genero')
{!!link_to('genero.create', $title='Registrar', $attributes = ['id'=>'registro', 'class' => 'btn btn-primary'], $secure = null)!!}
{!!Form::close()!!}
@endsection