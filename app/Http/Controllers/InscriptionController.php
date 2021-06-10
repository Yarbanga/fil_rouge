<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class InscriptionController extends Controller
{
     public function index()
    {
        return view('inscrip_conn');
    }
    public function user_store(){
    $data=request()->validate([
        'name' => ['required', 'string', 'max:255'],
        'prenoms' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'matricule'=>['required', 'string','max:10','unique:users'],
        'password' => ['required', 'string', 'min:6'],
      ]);
       
        User::create([
        'name' => $data['name'],
        'prenoms' => $data['prenoms'],
        'email' => $data['email'],
        'matricule' => $data['matricule'],
        'password' => Hash::make($data['password']),
        'status' => 0,
        'role' => 0,
      ]);
        Session::flash('message', 'vous êtes inscrit(es) avec succes!'); 
        Session::flash('alert-class', 'alert-success text-center'); 
        return view('Etudiant.accuse');
    }
    
    public function apres_inscription(){
        return view('Etudiant.accuse');
    }


    public function users_valid(){
        
        $users= User::latest()->where('id', '!=', 5)
                            ->where('status', 5)->paginate(5);
        $nombres= User::latest()->where('id', '!=', 5)->where('status', 0);
        return view('user_valid', compact('users', 'nombres'));
    }

     public function users_invalid(){
        
        $users= User::latest()->where('id', '!=', 5)
                            ->where('status', 0)->paginate(5);
        return view('user_invalid', compact('users'));
    }

// Validation et rejet des inscriptions

    public function validate_inscrit($id)
    {
        User::where('id', $id)->update(['status' =>5]);

        return redirect()->back();
    }
    
    public function rejet_inscrit($id)
    {
        User::where('id', $id)->update(['status' => 5]);
        return redirect()->back();
    }


}
