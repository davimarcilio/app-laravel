@extends('admin.layouts.app')
@section('title', 'Editar usuário')
    
@section('content')
 <h1>{{$user->name}}</h1>
 <x-alert/>
    <ul>
        <li>Nome: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
    </ul>
    <form action="{{route('users.destroy', $user->id)}}" method="POST">
        @csrf()
        @method('delete')
        <button type="submit">Apagar</button>
    </form>
@endsection
