<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Response;

class UserAuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json(
            $users
        );
    }
    public function store(Request $request)
    {
        $data = $request;
            $user = new User;
            $user->name = $data["name"];
            $user->email = $data["email"];
            $user->password = $data["password"];
           
            $user->save();
            return response()->json(['Success' => 'User created !'], 200);
        
    }
    public function update(Request $request, User $user, $id)
    {
        $user = User::where("id",$id)->firstOrFail();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();    
        return response()->json(['Success' => 'User edited !'], 200);

    }
    public function destroy($id)
    {
        $user = User::where("id",$id)->firstOrFail();
        $user->delete();
        return response()->json(['Success' => 'User deleted !'], 200);

    }
    public function login(Request $request){
        $loginUserData = $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|min:8'
        ]);
        $user = User::where('email',$loginUserData['email'])->first();
        if(!$user || !Hash::check($loginUserData['password'],$user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        }
        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
        return response()->json([
            'access_token' => $token,
        ]);
    }

    public function register(Request $request)
    {  
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();         
    }    
       /**
     * Display the user's profile form.
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the user's profile information.
     */
    

    /**
     * Delete the user's account.
     */
    public function logout(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

    }

public function sendKeyToClient()
{
    if (!session()->has('user_key')) {
        // Générer une nouvelle clé seulement si elle n'existe pas déjà
        $key = Str::random(23);
        // Stocker la clé dans la session de l'utilisateur
        session(['user_key' => $key]);
    } else {
        // Récupérer la clé existante depuis la session de l'utilisateur
        $key = session('user_key');
    }
    return Response::json(['key' => $key]);
}
}
