<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //

    public function index(){

     $users =    User::all();
      return $users;
    }

    public function getFirst(){

        $users =    User::all()->first()->get();
         return $users;
    }


    public function createArray(){

        User::truncate();
       
        $faker = \Faker\Factory::create();
         for ($i = 0; $i < 10; $i++) {
            $password = "newpass".$i;
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($password),
            ]);
        }
    }
    public function createobj(Request $request){

        $user =   new User;
       
        $user->name=$request->input('name');
        $user->email=$request->input('email');
 
        $user->password=$request->input('password');
     
        $user->save();
         return $user;
    
    }

    public function getLimit5(Request $request){

       // $users =    User::all()->limit(5)->get();
        $users =    User::take(5)->get();
         return $users;
     
    
    }
}
