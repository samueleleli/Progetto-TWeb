<?php

namespace App\Http\Controllers;

use App\Models\User;


class UserController extends Controller {

    protected $_userModel;

    public function __construct() {
        $this->middleware('can:isUser');
        $this->_userModel = new User;
    }

    public function index() {
        return view('user');
    }

}