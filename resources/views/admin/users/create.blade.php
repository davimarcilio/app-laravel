<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Novo usuário
        </h2>
    </x-slot>
    {{-- @include('admin.includes.errors') --}}

    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users.partials.form')
    </form>
</x-app-layout>
