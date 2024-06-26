<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function sauvegarder(Request $request)
    {
        $request->validate([
            'nom_complet_auteur' => 'required|max:10',
            'contenu' => 'required|max:255',
            'article_id' => 'required|exists:articles,id',
        ]);

        // $commentaire = new Commentaire();
        // $commentaire->nom_complet_auteur = $request->nom;
        // $commentaire->contenu = $request->contenu;
        // $commentaire->article_id = $request->article_id;
        // $commentaire->save();

        Commentaire::create($request->all());
        return redirect()->back();
    }
}
