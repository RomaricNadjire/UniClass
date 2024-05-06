<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name'=>['required','min:3','max:128','unique:universities,name'],
            'description'=>['required','min:50',],
            'program'=>['required','min:15',],
            'infrastructure'=>['required','image','max:5000',],
        ],[
            'name.required'=>'Le nom de l\'université est obligatiore',
            'name.min'=>'Le nom de l\'université doit contenire au moins 3 caractères',
            'name.max'=>'Le nom est trop long',
            'description.required'=>'Donnez une description de l\'université',
            'description.min'=>'Description trop courte',
            'program.required'=>'Donnez un aperçu du programme de l\'université',
            'program.min'=>'Trop court',
            'infrastructure.required'=>'Une image de votre infrastructure',
            'infrastructure.image'=>'Vous devez choisir une image',
            'infrastructure.max'=>'Fichier trop lourd'
        ]);

        University::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'programs'=>$request->program,
            'infrastructure'=>'documents/'.basename($request->file('infrastructure')->store('/public/documents')),
        ]);

        return redirect()->route('universities');
    }

    public function update(University $university, Request $request) {
        $request->validate([
            'name'=>['required','min:3','max:128'],
            'description'=>['required','min:50',],
            'program'=>['required','min:15',],
        ],[
            'name.required'=>'Le nom de l\'université est obligatiore',
            'name.min'=>'Le nom de l\'université doit contenire au moins 3 caractères',
            'name.max'=>'Le nom est trop long',
            'description.required'=>'Donnez une description de l\'université',
            'description.min'=>'Description trop courte',
            'program.required'=>'Donnez un aperçu du programme de l\'université',
            'program.min'=>'Trop court',
        ]);


       $university->name=$request->name;
       $university->description=$request->description;
       $university->programs=$request->program;
       
       if($request->file('infrastructure')){
            $university->infrastructure='documents/'.basename($request->file('infrastructure')->store('/public/documents'));
       }
    
       $university->save();

       return redirect()->route('universities');
    }
}