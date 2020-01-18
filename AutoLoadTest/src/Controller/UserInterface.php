<?php
namespace App\Controller;

interface UserInterface
{
    

    /**
     * Get's all Users.
     *
     * 
     */
    public function getall();

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
    public function createobj(  $request);
    /**
     * create get limit no of users.
     *
     * 
     * 
     */
    public function getLimit5();

    
    // public function testinterface(Request $request);

}
