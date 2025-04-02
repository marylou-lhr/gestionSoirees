<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Affiche la liste des réservations
     */
    public function index()
    {
        //Récupère tous les réservations
        $reservations = Reservation::all();
        //Affiche toutes les informations de chaque réservation dans un JSON
        return response()->json($reservations);
    }

    /**
     * Permet de créer un réservation
     */
    public function create(Request $request)
    {
        //Champs à valider
        $validated = $request->validate([
            'id' => 'required|number',
            'nomEtud' => 'required|string|max:100',
            'emailEtud' => 'required|string|max:100',
            'numTel' => 'required|string|min:10|max:10',
            'nomSoiree' => 'required|string|max:100',
            'dateReserv' => 'required|date',
            'statutReserv' => 'required|string',
            'goodieAttribue' => 'string'
        ]);

        //Création du réservation
        $reservationCree = Reservation::create($validated);

        //Message de confirmation de création
        return response()->json($reservationCree, 201);
    }

    /**
     * Affiche un réservation spécifique.
     */
    public function show(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        if (!$reservation){
            return response()->json(['message' => 'Réservation non trouvée.'], 404);
        } else {
            return response()->json($reservation);
        }
        
    }

    /**
     * Met à jour les infos d'un réservation
     */
    public function update(Request $request, string $id)
    {
        //Champs à valider
        $validated = $request->validate([
            'nomEtudiant' => 'required|string|max:100',
            'emailEtudiant' => 'required|string|max:100',
            'numTel' => 'required|string|min:10|max:10',
            'nomSoiree' => 'required|string|max:100',
            'dateReserv' => 'required|date',
            'statutReserv' => 'required|string',
            'goodieAttribue' => 'required|string'
        ]);
        
        $reservation = Reservation::findOrFail($id);

        if (!$reservation) {
            return response()->json(['error' => "La réservation n'existe pas."], 404);
        } else {
            $reservation->update($validated);
            show($id);
        }
    }

    /**
     * Supprime le réservation
     */
    public function destroy(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        if (!$reservation) {
            return response()->json(['error' => "La réservation n'existe pas."], 404);
        } else {
            $reservation->delete();
            return response()->json(['message' => 'Réservation supprimée avec succès.']);
        } 
    }
}
