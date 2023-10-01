<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;
use App\Models\modContact;

class Home extends BaseController
{
    protected $modContact;
    public function __construct()
    {
        $this->modContact = new modContact();
    }
    public function index()
    {
        return view('pages/users/index');
    }


}
