<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function Crear(Request $request){
        $pizza = new Pizza();
        $pizza -> nombre = $request -> post("nombre");
        $pizza -> precio = $request -> post("precio");
        $pizza -> save();

        return redirect("/")->with("creado",true);

    }

    public function Listar(Request $request){
        $pizzas = Pizza::all();
        return view("listar",[ "pizzas" => $pizzas]);
    }
    public function Eliminar(Request $request, $id){
        $pizza = Pizza::findOrFail($id);
        $pizza -> delete();

        return redirect("/")->with("eliminado",true);
    }

    public function MostrarFormularioDeModificar(Request $request, $id){
        $pizza = Pizza::findOrFail($id);
        return view("modificar",["pizza" => $pizza]);

    }

    public function Modificar(Request $request){
        $pizza = Pizza::findOrFail($request -> post("id"));
        $pizza -> nombre = $request -> post("nombre");
        $pizza -> precio = $request -> post("precio");
        $pizza -> save();

        return redirect("/") 
            -> with("modificado",true);
    }




}
