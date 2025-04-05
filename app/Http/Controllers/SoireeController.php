<?php

namespace App\Http\Controllers;

use App\Models\Soiree;
use Illuminate\Http\Request;

class SoireeController extends Controller
{
    /**
     * Affiche la liste des soirées
     */
    public function index()
    {
        //Récupère toutes les soirées
        $soirees = Soiree::all();
        //Affiche toutes les informations de chaque soirée dans un JSON
        return response()->json($soirees);
    }

    /**
     * Permet de créer une soirée
     */
    public function create(Request $request)
    {
        //Champs à valider
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'lieu' => 'required|string|max:100',
            'dateHeure' => 'required|date_format:d/m/Y H:i:s',
            'prixEntree' => 'required|integer',
            'capaciteMax' => 'required|integer',
            'theme' => 'required|string|max:100'
        ]);

        //Création de la soirée
        $soireeCree = Soiree::create($validated);

        //Message de confirmation de création
        return response()->json($soireeCree, 201);
    }

    /**
     * Affiche une soirée spécifique.
     */
    public function show(string $id)
    {
        $soiree = Soiree::findOrFail($id);

        if (!$soiree){
            return response()->json(['message' => 'Soirée non trouvée.'], 404);
        } else {
            return response()->json($soiree);
        }
        
    }

    /**
     * Met à jour les infos d'une soirée
     */
    public function update(Request $request, string $id)
    {
        //Champs à valider
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'lieu' => 'required|string|max:100',
            'dateHeure' => 'required|date',
            'prixEntree' => 'required|integer',
            'capaciteMax' => 'required|integer',
            'theme' => 'required|string|max:100'
        ]);
        
        $soiree = Soiree::findOrFail($id);

        if (!$soiree) {
            return response()->json(['error' => "La soirée n'existe pas."], 404);
        } else {
            $soiree->update($validated);
            show($id);
        }
    }

    /**
     * Supprime la soirée
     */
    public function destroy(string $id)
    {
        $soiree = Soiree::findOrFail($id);

        if (!$soiree) {
            return response()->json(['error' => "La soirée n'existe pas."], 404);
        } else {
            $soiree->delete();
            return response()->json(['message' => 'Soirée supprimée avec succès.']);
        } 
    }
}
