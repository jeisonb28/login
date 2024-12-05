@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold mb-4">Mis Motocicletas</h2>
    @if(session('success'))
        <div class="bg-green-100 text-green-700 border border-green-400 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <table class="table-auto w-full bg-white shadow-md">
        <thead>
            <tr>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Tipo de Moto</th>
                <th class="px-4 py-2">Cilindraje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($motocicletas as $moto)
            <tr>
                <td class="border px-4 py-2">{{ $moto->nombre }}</td>
                <td class="border px-4 py-2">{{ $moto->tipo_moto }}</td>
                <td class="border px-4 py-2">{{ $moto->cilindraje }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
