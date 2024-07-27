<x-alert />
@csrf()
<div class="flex flex-col w-full gap-2">
    <input class="rounded-md bg-transparent dark:text-white w-full" type="text" name="name" placeholder="Nome"
        value="{{ $user->name ?? old('name') }}">
    <input class="rounded-md bg-transparent dark:text-white w-full" type="email" name="email" placeholder="E-mail"
        value="{{ $user->email ?? old('email') }}">
    <input class="rounded-md bg-transparent dark:text-white w-full" type="password" name="password" placeholder="Senha">
    <button class="bg-blue-500 text-white py-1 rounded-md" type="submit">Salvar</button>

</div>
