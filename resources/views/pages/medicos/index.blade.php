@extends('layout.layout')

@section('title', 'Medicos')

@section('content')

    <div>
    <a href="{{Route('medico.create')}}"><button type="button" class="btn btn-success mt-3">Cadastrar</button></a>
    </div>
    
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Documento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($medicos as $medico)
        <tr>
            <th scope="row">{{$medico->id}}</th>
            <td>{{$medico->nome}}</td>
            <td>{{$medico->especialidade}}</td>
            <td>{{$medico->crm}}</td>
            <form method="POST" action="/medico/{{$medico->id}}">
                <a class="btn btn-primary text-white" href="/medico/{{$medico->id}}/edit"> <i class="fa-solid fa-pen-to-square"></i> </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-white"><i class="fa-solid fa-trash"></i></button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection