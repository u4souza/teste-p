@extends('layout.layout')

@section('title', 'Pacientes')

@section('content')
    <div>
    <a href="{{Route('paciente.create')}}"><button type="button" class="btn btn-success mt-3">Cadastrar</button></a>
    </div>


@endsection