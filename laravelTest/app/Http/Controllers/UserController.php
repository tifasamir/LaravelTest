<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepo;
class UserController extends Controller implements UserRepositoryInterface
{
  

    /*
    * TODO ::  all :: array
    */
    public function index(){

     $users =    User::all();
      return $users;
    }
     /*
    * TODO ::  all :: first
    */
    public function getFirst(){

        $users =    User::first();
         return $users;
    }

    /*
    * TODO ::  create :: array
    */
    public function createArray(){

        // User::truncate();
       
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

    /*
    * TODO ::  create :: object
    */
    public function createobj(Request $request){

        $user =   new User;
       
        $user->name=$request->input('name');
        $user->email=$request->input('email');
 
        $user->password=$request->input('password');
     
        $user->save();
         return $user;
    
    }
    
    /*
    * TODO ::  limit :: 5
    */
    public function getLimit5(Request $request){

      
         $users =    User::take(5)->get();
         return $users;
     
    
    }

    
}
