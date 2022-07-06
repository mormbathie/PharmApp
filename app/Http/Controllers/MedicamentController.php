<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;

class MedicamentController extends Controller
{
    public function index(){
        $medicament = ['id'=>1, 'nom'=>'Efferalgan', 'prix'=>1187];
        return view('index', compact('medicament'));
    }

    public function view(){
        $medicaments = [
            ['id'=>2, 'nom'=>'Paracetamol', 'prix'=>1000],
            ['id'=>3, 'nom'=>'Cetamyl', 'prix'=>500],
            ['id'=>4, 'nom'=>'Doliprane', 'prix'=>1500],
            ['id'=>5, 'nom'=>'Magnesium', 'prix'=>2500]
        ];

        return view('view',compact('medicaments'));
    }

    public function add(Request $request){
        $newMedoc = new Medicament;
        $newMedoc->nom = $request->input('nom');
        $newMedoc->prix = $request->input('prix');
        $newMedoc->description = $request->input('description');

        $newMedoc->save();
       return redirect('/')->with('status', 'ok');
    }

    public function allMedicament(){
        $medicament = Medicament::all();
        return view('index',compact('medicament'));
    }

    public function test(){
        return view('add');
    }

    public function destroy($id){
        Medicament::where('id',$id)->delete();

        $medicament = Medicament::all();
        return view('index',compact('medicament'));
    }

    public function edit($id){
        $vue = Medicament::find($id);
        return view('edit',compact('vue'));
    }
}
