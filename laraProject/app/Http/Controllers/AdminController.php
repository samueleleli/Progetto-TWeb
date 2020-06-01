<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\User;
use App\Http\Requests\NewStaffRequest;
use App\Http\Requests\DeleteClientRequest;
use App\Http\Requests\ManageStaffRequest;
use App\Http\Requests\EditStaffRequest;
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
    
    public function showClient() {
        
        $users= $this->_adminModel->getUsers();
        
        return view('admin_level.deleteUser')
                        ->with('users', $users);
                             
    }
    
    public function deleteClient(DeleteClientRequest $request) { 
        
        User::where('username', $request->radioButton)->delete();
        return redirect()->action('AdminController@index');    
    }
    
    public function showStaff() {
        
        $users= $this->_adminModel->getStaff();
        
        return view('admin_level.manStaff')
                        ->with('users', $users);
    }
    
    public function manageStaff(ManageStaffRequest $request) { 
        $button = $request->input('btnsubmit');
        if($button == 'delete'){
        User::where('username', $request->radioButton)->delete();
        return redirect()->action('AdminController@index'); 
        
        } else if($button == 'edit') {
            return redirect()->action('AdminController@showDataStaff', [$request->radioButton]);
                        
        } 
    }
    
    public function showDataStaff($username) {
        $staff = User::where('username', $username)->get();
        return view('admin_level.editStaff') ->with('users', $staff);
    }
    
    /*public function showDataStaff(ManageStaffRequest $request) {
        $staff = User::where('username', $request->radioButton)->get();
        return view('admin_level.editStaff') ->with('users', $staff);
    }
    */
    public function editStaff(EditStaffRequest $request) {
        User::where('username', $request->username)->update(array(
                         'nome'=>$request->nome, 'cognome'=>$request->cognome, 'password' => Hash::make($request->password) ));
        
        return redirect()->action('AdminController@index');
    }
    
    /*public function storeStaff(NewStaffRequest $request) {
       
        $user = new User;
        $user->fill($request->validated());
        $user->tipologiaUtente = 'staff';
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->action('AdminController@index');
        
    }
     a
     */
    
    

}
