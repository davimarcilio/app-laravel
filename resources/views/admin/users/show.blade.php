<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $user->name }}
        </h2>
    </x-slot>
    <x-alert />
    <div class="w-full justify-start items-start flex flex-col mx-auto max-w-screen-lg gap-4">
        <ul>
            <li>Nome: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
        </ul>
        {{-- @can('is-owner', $user)
        pode deletar
    @endcan --}}
        @can('is-admin')
            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf()
                @method('delete')
                <button class="bg-red-500 text-white rounded-md py-1 px-2" type="submit">Apagar</button>
            </form>
        @endcan
    </div>
</x-app-layout>
