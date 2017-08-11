
@extends('Layouts.admin')
    @section('content')
 @include('alerts.request')
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
@include('usuario.forms.usr')
</table>
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection




