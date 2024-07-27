@extends('admin.layouts.app')
@section('title', 'Listagem dos usuários')

@section('content')
<h1>Usuários</h1>
<a href="{{route('users.create')}}">Adicionar novo usuário</a>
<table>
    <thead>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
       @forelse ($users as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>-</td>
       </tr>
       @empty 
        <tr>
            <td colspan="100">Nenhum usuário no banco</td>
        </tr>
       @endforelse
    </tbody>
</table>
{{$users->links()}}
@endsection