<?php

class UserController extends \BaseController
{

    /**
     * Display a user profile.
     */
    public function index($id)
    {
        return e($id);
    }
}
