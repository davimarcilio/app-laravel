@extends('admin.layouts.app')
@section('title', 'Editar usuário')
    
@section('content')
 <h1>{{$user->name}}</h1>
    <x-alert />
    <form action="{{route('users.update', $user->id)}}" method="POST">
        @csrf()
        @method('put')
        <input type="text" name="name" placeholder="Nome" value="{{$user->name}}" >
        <input type="email" name="email" placeholder="E-mail" value="{{$user->email}}" >
        <button type="submit">enviar</button>
    </form>
@endsection
