<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadTel;
use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    public function landing()
    {
        return view('welcome');
    }
    
    public function store(Request $request)
    {
        $messages = [
			'fullname.required' => 'Es necesario ingresar tu nombre'

		];
		$rules = [
			'fullname' => 'required'
		];
        

		$this->validate($request, $rules, $messages);

        // $request->validate([
        //     'fullname' => 'required',
        // ]);

        $response = Http::post('https://api.lagunaskuche.mx/leads', [
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'origin' => 'aldeaesmeralda.com'

        ]);
        $dataJson = $response->json();
        // dd($dataJson);

        if($response->successful()) {
            return redirect()->route('landing')->withStatus(__('Hemos recibido tu contacto'));
        } else {
            return redirect()->route('landing')->withErrors(['isAlready' => 'Ooop! El correo ya existe!']);
        }



    }

    public function leadtel(Request $request)
    {
        $messages = [
			'name.required' => 'Es necesario ingresar tu nombre',
			'lastname.required' => 'Es necesario ingresar tu (s) apellido (s)',
            'email.required' => 'El campo correo es requerido',
            'email.max' => 'El campo correo acepta un maximo de 100 caracteres',
            'phone.required' => 'Es necesario ingresar tu teléfono',

		];
		$rules = [
			'name' => 'required',
            'lastname' => 'required',
			'email' => 'required|max:100',
            'phone' => 'required'
		];
        

		$this->validate($request, $rules, $messages);

        $response = Http::post('https://api.lagunaskuche.mx/leads', [
            'fullname' => $request->input('name') . ' ' . $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'origin' => 'aldeaesmeralda.com'

        ]);
        $dataJson = $response->json();

        if($response->successful()) {
            return redirect('/#contactanos')->with('statusContact', 'Hemos recibido tu contacto');
        } else {
            return redirect('/#contactanos')->withErrors(['errorContact' => 'Ooop! El correo ya existe!']);
        }



    }
}
