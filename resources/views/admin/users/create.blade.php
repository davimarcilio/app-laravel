@extends('admin.layouts.app')
@section('title', 'Criar usuário')
    
@section('content')
 <h1>Novo usuário</h1>
   {{-- @include('admin.includes.errors') --}}
    
    <form action="{{route('users.store')}}" method="POST">
        @include('admin.users.partials.form')
    </form>
@endsection
