<?php 

namespace App\Controller;
use App\User as User;
use Illuminate\Support\Facades\Hash;
class UserController implements UserInterface{
	
    private $allUsers ;
    private $firstUser ;
    private $FirstFiveUsers ;
    private $collection;
    function __construct()
    {
        $this->allUsers = [];
        $this->firstUser='';
        $this->FirstFiveUsers=[];
        $this->collection=[];
    }


public function getAll(){

      $users =    User::all();
      $this->collection  = $users;
    //   echo $this->collection;
      return $this;
    }


     /*
    * TODO ::  all :: first
    */
    public function getFirst(){

        //  $user =    User::first();
        //  $this->firstUser =$user ;
        //  echo '<br/>';
        //  echo $this->firstUser;

        $this->collection =   $this->collection->first();
         return $this;
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
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ]);
        }
    }

    /*
    * TODO ::  create :: object
    */
    public function createobj($decoded){
        echo 'createobj';
        echo $decoded['name'];
        echo $decoded['email'];
        echo $decoded['password'];
         $user =   new User;
         $user->name=	$decoded['name'];
         $user->email=	$decoded['email'];
         $user->password=	$decoded['password'];
         $user->save();
        return        $user;
   
    }
    
    /*
    * TODO ::  limit :: 5
    */
    public function getLimit5(){

      
         
        //  $users =   $this->allUsers;
         echo '<br/>';
         echo '<br/>';
         $this->collection =  $this->collection->take(5);
        //  $this->FirstFiveUsers=   $this->allUsers->take(5);
        // echo     $this->FirstFiveUsers;
         return $this;
     
    
    }
	public function echoResult(){
       echo $this->collection ;
    }
}

?>