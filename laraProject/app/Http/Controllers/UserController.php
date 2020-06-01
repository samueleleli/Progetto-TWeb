<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\EditDataRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    protected $_userModel;

    public function __construct() {
        $this->middleware('can:isUser');
        $this->_userModel = new User;
    }

    public function index() {
        return view('user');
    }
    
    public function showDataUser() {
        return view('user_level.editData');
    }
    
    public function editData(EditDataRequest $request) {
        User::where('username', $request->username)->update(array(
                        'nome'=>$request->nome, 'cognome'=>$request->cognome, 'email'=>$request->email, 'password' => Hash::make($request->password),
                        'via'=>$request->via, 'citta'=>$request->citta, 'cap'=>$request->cap, 'stato'=>$request->stato, 'dataNascita'=>$request->dataNascita,
                        'occupazione'=>$request->occupazione ));
        
        return redirect()->action('UserController@index');
    }
}