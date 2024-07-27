@extends('admin.layouts.app')
@section('title', 'Editar usuário')
    
@section('content')
 <h1>{{$user->name}}</h1>
    <form action="{{route('users.update', $user->id)}}" method="POST">
        @method('put')
        @include('admin.users.partials.form')
    </form>
@endsection
