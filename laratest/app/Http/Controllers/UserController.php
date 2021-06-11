<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users  = [
                ['id'=>1, 'name'=>'almain', 'email'=>'email@email.com'],
                ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
                ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
        return view('user.list')->with('userList', $users);
    }

    public function userdata(){

        $users  = [
            ['id'=>1, 'name'=>'almain', 'email'=>'email@email.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
    ];

    return $users;

    }

    public function details($id){
        
        $users = $this->userdata();
        
        foreach ($users as $user){
            if($user['id'] == $id){
               
               return view('user.details')->with('user',$user);

            }
        }
    }


    public function edit($id){

        $users = $this->userdata();
        
        foreach ($users as $user){
            if($user['id'] == $id){
               
               return view('user.edit')->with('user',$user);

            }
        }

    }


    public function update(Request $req, $id){

        $users= $this->userdata();

        foreach($users as $user => $extraArray){

            if($extraArray['id'] == $id){

                $users[$user]['id'] = $req->id;
                $users[$user]['name'] = $req->name;
                $users[$user]['email'] = $req->email;

               

            }

        }

        return view('user.list')->with('userList', $users);





    }

    public function create(){
        return view('user.create');
    }


    public function insert(Request $req){
        $users = $this->userdata();
        $user = ['id'=>$req->id,'name'=>$req->name,'email'=>$req->email];
        array_push($users, $user);

        return view('user.list')->with('userList', $users);
    }


    
    public function delete($id){

        return view('user.delete')->with('user', $id);  
    

    }

    public function destroy($id){

        $users = $this->userdata();
        $user = '';

        foreach($users as $user => $extraArray){
            if($extraArray['id'] == $id){

                unset($users[$user]);   
                   
            }
        }

        

        return view('user.list')->with('userList', $users);

    }




}
