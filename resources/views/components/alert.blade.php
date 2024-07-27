@if (session()->has('success'))
  <div class="text-sm text-green-500 font-semibold" >{{ session('success') }}</div>
@endif
@if (session()->has('message'))
  <div class="text-sm text-yellow-500 font-semibold" >{{ session('message') }}</div>
@endif
@if (session()->has('error'))
  <div class="text-sm text-red-500 font-semibold" >{{ session('error') }}</div>
@endif

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li class="text-red-500" >{{$error}}</li>
    @endforeach
</ul>
@endif