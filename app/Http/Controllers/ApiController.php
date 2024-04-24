<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ApiController extends Controller
{
    //
    public function users(Request $request){
        try{

            $users = User::all();

            return response()->json( ['data' => $users]);
            
        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
            exit;
        }
    }

    // Creacion de Usuario
    public function create(Request $request) {
        try {

            $numeroIdentificacion = $request->numero_identificacion;
            $usuarioExistente = User::where('numero_identificacion', $numeroIdentificacion)->first();

            if ($usuarioExistente) {
                // El número de identificación ya existe en la base de datos
                return response()->json([
                    'data' => null,
                    'error' => true,
                    'message' => 'El número de identificación ya existe.'
                ],404);
            } else {

                $users = new User;
        
                $users->primer_apellido = $request->primer_apellido;
                $users->segundo_apellido= $request->segundo_apellido;
                $users->primer_nombre= $request->primer_nombre;
                $users->otros_nombres= $request->otros_nombres;
                $users->pais_empleo= $request->pais_empleo;
                $users->tipo_identificacion= $request->tipo_identificacion;
                $users->numero_identificacion= $request->numero_identificacion;
                $users->correo_electronico= $request->correo_electronico;
                $users->area= $request->area;
        
                $users->save();

                return response()->json(['data' => $users->id,'error' => false,'message' => 'Exitoso'], 200);
            }


    } catch (Exception $e) {
        echo 'Excepción capturada: ', $e->getMessage(), "\n";
        exit;
    }
         
    }

    // Atualizacion de Usuario
    public function update(Request $request, $id)
    {
        try {
            $users = User::findOrFail($id);
            $users->primer_apellido = $request->primer_apellido;
            $users->segundo_apellido= $request->segundo_apellido;
            $users->primer_nombre= $request->primer_nombre;
            $users->otros_nombres= $request->otros_nombres;
            $users->pais_empleo= $request->pais_empleo;
            $users->tipo_identificacion= $request->tipo_identificacion;
            $users->numero_identificacion= $request->numero_identificacion;
            $users->correo_electronico= $request->correo_electronico;
            $users->area= $request->area;
            $users->estado= $request->estado;

            $users->update($request->all());

            return response()->json(['data' => $users->id,'error' => false,'message' => 'Exitoso'], 200);
        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
            exit;
        }
    }

    // Eliminacion de Usuario
    public function delete(Request $request, $id)
    {
        try {
            $users = User::findOrFail($id);
            $users->delete();

            return response()->json(['data' => $users->id,'error' => false,'message' => 'Exitoso'], 200);

        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
            exit;
        }
    }
}
