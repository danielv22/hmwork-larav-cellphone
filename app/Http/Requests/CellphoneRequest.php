<?php

namespace App\Http\Requests;

use App\Enums\Brands;
use App\Enums\ProcesorBrands;
use App\Enums\RAMMemory;
use App\Enums\Resolutions;
use App\Enums\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CellphoneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'referencia' => ['required', 'string', 'max:100'],
            'marca' => [new Enum(Brands::class)],
            'tamano_pantalla' => ['required', 'string', 'max:5'],
            'resolucion' => [new Enum(Resolutions::class)],
            'marca_procesador' => [new Enum(ProcesorBrands::class)],
            'velocidad_procesador' => ['required', 'numeric', 'min:1', 'max:5'],
            'memoria_ram' => [new Enum(RAMMemory::class)],
            'memoria_interna' => [new Enum(Storage::class)],
            'precio' => ['required', 'numeric', 'min:450000.00', 'max:4000000.00'],
            'descuento' => ['required', 'numeric', 'min:0', 'max:0.5']
        ];
    }

    public function messages()
    {
        return [
            'referencia.required' => 'Debe colocarle una referencia al celular',
            'referencia.max' => 'La referencia no puede tener más de 100 caracteres',
            'referencia.string' => 'La referencia debe ser un texto',
            'marca.required' => 'Debe colocarle una marca al celular',
            'marca.enum' => 'La marca no es válida',
            'tamano_pantalla' => 'Debe colocarle un tamaño de pantalla al celular',
            'tamaño_pantalla.max' => 'El tamaño de pantalla no puede tener más de 5 caracteres',
            'resolucion' => 'Debe colocarle una resolución al celular',
            'resolucion.enum' => 'La resolución no es válida',
            'marca_procesador' => 'Debe colocarle una marca de procesador al celular',
            'marca_procesador.enum' => 'La marca de procesador no es válida',
            'velocidad_procesador' => 'Debe colocarle una velocidad de procesador al celular',
            'velocidad_procesador.numeric' => 'La velocidad de procesador debe ser un número',
            'memoria_ram' => 'Debe colocarle una memoria RAM al celular',
            'memoria_interna' => 'Debe colocarle una memoria interna al celular',
            'precio' => 'Debe colocarle un precio al celular',
            'descuento' => 'Debe colocarle un descuento al celular'
        ];
    }
}
