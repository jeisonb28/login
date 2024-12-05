@extends('layouts.app')

@section('title', 'Registrar Motocicleta')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold text-center mb-6">Registro de Motocicleta</h2>
    @if(session('success'))
        <div class="bg-green-100 text-green-700 border border-green-400 px-4 py-2 rounded mb-4 text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex justify-center">
        <div class="bg-blue-50 p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h3 class="text-lg font-semibold text-blue-700 text-center mb-4">Formulario de Registro</h3>
            <form action="{{ route('motocicletas.store') }}" method="POST">
            
</a>
   
            @csrf
                <div class="grid grid-cols-2 gap-4">
                    <!-- Datos personales -->
                    <div class="col-span-2">
                        <label for="nombre" class="block text-sm font-medium text-blue-800">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="apellido" class="block text-sm font-medium text-blue-800">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="cedula" class="block text-sm font-medium text-blue-800">Cédula</label>
                        <input type="text" name="cedula" id="cedula" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="ciudad" class="block text-sm font-medium text-blue-800">Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>

                    <!-- Información de la motocicleta -->
                    <div class="col-span-2">
                        <label for="tipo_moto" class="block text-sm font-medium text-blue-800">Tipo de Moto</label>
                        <input type="text" name="tipo_moto" id="tipo_moto" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div>
                        <label for="cilindraje" class="block text-sm font-medium text-blue-800">Cilindraje</label>
                        <input type="number" name="cilindraje" id="cilindraje" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div>
                        <label for="kilometraje" class="block text-sm font-medium text-blue-800">Kilometraje</label>
                        <input type="number" name="kilometraje" id="kilometraje" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>

                    <!-- Fechas importantes -->
                    <div class="col-span-2">
                        <label for="fecha_soat" class="block text-sm font-medium text-blue-800">Fecha SOAT</label>
                        <input type="date" name="fecha_soat" id="fecha_soat" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="fecha_tecnomecanica" class="block text-sm font-medium text-blue-800">Fecha Tecnomecánica</label>
                        <input type="date" name="fecha_tecnomecanica" id="fecha_tecnomecanica" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="expedicion_tarjeta" class="block text-sm font-medium text-blue-800">Expedición Tarjeta</label>
                        <input type="datetime-local" name="expedicion_tarjeta" id="expedicion_tarjeta" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>

                    <!-- Estado -->
                    <div class="col-span-2">
                        <label for="estado_llantas" class="block text-sm font-medium text-blue-800">Estado Llantas</label>
                        <input type="text" name="estado_llantas" id="estado_llantas" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="estado_luces" class="block text-sm font-medium text-blue-800">Estado Luces</label>
                        <input type="text" name="estado_luces" id="estado_luces" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="espejos" class="block text-sm font-medium text-blue-800">Espejos</label>
                        <input type="text" name="espejos" id="espejos" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="bocina" class="block text-sm font-medium text-blue-800">Bocina</label>
                        <input type="text" name="bocina" id="bocina" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="documentacion" class="block text-sm font-medium text-blue-800">Documentación</label>
                        <input type="text" name="documentacion" id="documentacion" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="liquido_frenos" class="block text-sm font-medium text-blue-800">Líquido de Frenos</label>
                        <input type="text" name="liquido_frenos" id="liquido_frenos" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="col-span-2">
                        <label for="aceite" class="block text-sm font-medium text-blue-800">Aceite</label>
                        <input type="text" name="aceite" id="aceite" class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-400" required>
                    </div>
                </div>

                <!-- Botón de envío -->
                <div class="flex justify-center mt-6">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 shadow-lg">Registrar Motocicleta</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
