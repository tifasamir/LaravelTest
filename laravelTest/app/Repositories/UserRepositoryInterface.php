<?php
namespace App\Repositories;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
interface UserRepositoryInterface
{
    

    /**
     * Get's all Users.
     *
     * 
     */
    public function index();

    /**
     * getFirst user.
     *
     * 
     */
    public function getFirst();

    /**
     * create array of users.
     *
     * 
     * 
     */
    public function createArray();
    /**
     * create one user.
     *
     * 
     * 
     */
    public function createobj(Request $request);
    /**
     * create get limit no of users.
     *
     * 
     * 
     */
    public function getLimit5(Request $request);

    
    

}
