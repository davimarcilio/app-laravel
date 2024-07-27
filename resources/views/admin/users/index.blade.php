<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Usuários
            </h2>
            <a class="bg-blue-500 rounded-md px-2 py-1 text-white" href="{{ route('users.create') }}">Adicionar novo
                usuário</a>
        </div>
    </x-slot>
    <x-alert />
    <table class="w-full max-w-screen-lg">
        <thead>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @forelse ($users as $item)
                <tr class="border-t-2 border-b-2">
                    <td class="px-2">{{ $item->name }}</td>
                    <td class="px-2">{{ $item->email }}</td>
                    <td class="px-2">
                        <a class="border-b" href="{{ route('users.edit', $item) }}">Editar</a>
                        <a class="border-b" href="{{ route('users.show', $item) }}">Detalhes</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário no banco</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
</x-app-layout>
