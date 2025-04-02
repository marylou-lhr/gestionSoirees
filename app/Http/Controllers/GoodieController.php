<?php

namespace App\Http\Controllers;

use App\Models\Goodie;
use Illuminate\Http\Request;

class GoodieController extends Controller
{
    /**
     * Affiche la liste des goodies
     */
    public function index()
    {
        //Récupère tous les goodies
        $goodies = Goodie::all();
        //Affiche toutes les informations de chaque goodie dans un JSON
        return response()->json($goodies);
    }

    /**
     * Permet de créer un goodie
     */
    public function create(Request $request)
    {
        //Champs à valider
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'quantite' => 'required|integer',
            'description' => 'required|string|max:120',
            'coutUnitaire' => 'required|integer'
        ]);

        //Création du goodie
        $goodieCree = Goodie::create($validated);

        //Message de confirmation de création
        return response()->json($goodieCree, 201);
    }

    /**
     * Affiche un goodie spécifique.
     */
    public function show(string $id)
    {
        $goodie = Goodie::findOrFail($id);

        if (!$goodie){
            return response()->json(['message' => 'Goodie non trouvé.'], 404);
        } else {
            return response()->json($goodie);
        }
        
    }

    /**
     * Met à jour les infos d'un goodie
     */
    public function update(Request $request, string $id)
    {
        //Champs à valider
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'quantite' => 'required|integer',
            'description' => 'required|string|max:120',
            'coutUnitaire' => 'required|integer'
        ]);
        
        $goodie = Goodie::findOrFail($id);

        if (!$goodie) {
            return response()->json(['error' => "Le goodie n'existe pas."], 404);
        } else {
            $goodie->update($validated);
            show($id);
        }
    }

    /**
     * Supprime le goodie
     */
    public function destroy(string $id)
    {
        $goodie = Goodie::findOrFail($id);

        if (!$goodie) {
            return response()->json(['error' => "Le goodie n'existe pas."], 404);
        } else {
            $goodie->delete();
            return response()->json(['message' => 'Goodie supprimé avec succès.']);
        } 
    }
}
