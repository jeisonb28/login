@extends('layouts.app')

@section('titel', 'home')

@section('content')

<div class="flex flex-col md:flex-row min-h-screen">
    <!-- Sidebar -->
    <div class="bg-gray-900 w-full md:w-64 md:h-screen">
        <div class="flex items-center justify-center text-white py-4">
            <span class="text-2xl font-bold">Admin</span>
        </div>
        <div class="mt-8">
    <h2 class="text-lg font-semibold text-blue-700 mb-4">Gestión de Motocicletas</h2>
    <a href="{{ route('motocicletas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 shadow-md">
        Registrar Motocicleta
    </a>
    <a href="{{ route('motocicletas.pdf') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 shadow-lg">
    Descargar PDF
</a>
</div>


            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Usuarios</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Configuraciones</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Reportes</a>
        </nav>
    </div>

    <!-- Main content -->
    <div class="flex-1 bg-blue-50 p-6 flex flex-col items-center justify-center">
        <div class="bg-white shadow-md py-4 px-6 w-full max-w-4xl">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-semibold text-blue-700">Bienvenido Al C.O.Girardot Alcanos De Colombia</h1>
                
            </div>
        </div>

        

<!-- Formulario de Logout -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

@endsection
