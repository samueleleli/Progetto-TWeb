<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\User;
use App\Http\Requests\NewStaffRequest;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller {

    protected $_adminModel;
        

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin;
    }

    public function index() {
        return view('admin');
    }
    
    public function manageUsers() {
        return view('admin_level.manUsers');
    }
    
    public function insertStaff() {
        return view('admin_level.insertStaff');
    }
    
    public function storeStaff(NewStaffRequest $request) {
       
        $user = new User;
        $user->fill($request->validated());
        $user->tipologiaUtente = 'staff';
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->action('AdminController@index');
        
    }
    
    

}
