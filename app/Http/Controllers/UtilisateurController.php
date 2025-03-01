<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Utilisateur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Auth\Events\Registered;

class UtilisateurController extends Controller
{
    public function homePage(){
        return view('welcome');
    }

    public function register(Request $request){
        
        // dd($request);

        $request->validate([
            'name' => "required|string|max:50",
            'email' => "required|max:40|unique:utilisateurs,email|string",
            'password' => 'required|string|min:8|max:60',
            'sexe' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $utilisateur = new Utilisateur();
        $utilisateur->name = $request->name;
        $utilisateur->email = $request->email;
        $utilisateur->password = bcrypt($request->password);
        $utilisateur->sexe = $request->sexe;
        $utilisateur->status = 'Disable';
        $utilisateur->token = Str::random(8);
        $path = $request->file('profile')->store('profiles', 'public');

        $utilisateur->profile = $path;

        $utilisateur->save();

        // event(new Registered($utilisateur));
        if($utilisateur->sexe == 'M'){
            $messag = `Bonjour Monsieur $utilisateur->name, veuillez cliquez sur le lien et activez votre compte`;
        }else {
            $messag = `Bonjour Madame $utilisateur->name, veuillez cliquez sur le lien et activez votre compte`;
        }
        Mail::to($utilisateur->email)->send(new SendMail($utilisateur, $messag));
        return redirect()->route('verifyMail');
    }

    public function activate($token){
        $utilisateur = Utilisateur::where('token', $token)->first();
        if($utilisateur->status == 'Disable'){
            $utilisateur->status = 'Enable';
            $utilisateur->update([$utilisateur->status]);
            return redirect()->route('login');
        }
        
    }
}
