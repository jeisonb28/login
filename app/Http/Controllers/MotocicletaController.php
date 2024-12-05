<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motocicleta;
use Barryvdh\DomPDF\Facade\Pdf;

class MotocicletaController extends Controller
{
    // Método para mostrar el formulario de registro
    public function create()
    {
        return view('motocicletas.create');
    }

    // Método para guardar una motocicleta en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:20',
            'ciudad' => 'required|string|max:255',
            'tipo_moto' => 'required|string|max:255',
            'cilindraje' => 'required|integer',
            'kilometraje' => 'required|integer',
            'fecha_soat' => 'required|date',
            'fecha_tecnomecanica' => 'required|date',
            'expedicion_tarjeta' => 'required|date',
            'estado_llantas' => 'required|string',
            'estado_luces' => 'required|string',
            'espejos' => 'required|string',
            'bocina' => 'required|string',
            'documentacion' => 'required|string',
            'liquido_frenos' => 'required|string',
            'aceite' => 'required|string',
        ]);

         // Crear la motocicleta
         Motocicleta::create([
            'user_id' => auth()->id(), // Asociar al usuario autenticado
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'ciudad' => $request->ciudad,
            'tipo_moto' => $request->tipo_moto,
            'cilindraje' => $request->cilindraje,
            'kilometraje' => $request->kilometraje,
            'fecha_soat' => $request->fecha_soat,
            'fecha_tecnomecanica' => $request->fecha_tecnomecanica,
            'expedicion_tarjeta' => $request->expedicion_tarjeta,
            'estado_llantas' => $request->estado_llantas,
            'estado_luces' => $request->estado_luces,
            'espejos' => $request->espejos,
            'bocina' => $request->bocina,
            'documentacion' => $request->documentacion,
            'liquido_frenos' => $request->liquido_frenos,
            'aceite' => $request->aceite,
        ]);
       
        

        return redirect()->route('motocicletas.create')->with('success', 'Motocicleta registrada con éxito');
    }
    // Método para generar un PDF de la lista de motocicletas
    public function generatePdf()
    {
        // Obtener todas las motocicletas
        $motocicletas = Motocicleta::all();

        // Generar PDF
        $pdf = Pdf::loadView('motocicletas.pdf', compact('motocicletas'));

        // Descargar el archivo PDF
        return $pdf->download('motocicletas.pdf');
    }
}

