<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#--IMPORTAMOS 
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response



     */ #-----------------LISTAR USUARIOS------------------------------
    public function index()
    {
                                           #---PAGINACION
            $users = User::orderBy('id','asc')->paginate(5);
                                            #--ENVISR PARAMETROS
            return View('admin.users.index')->with('users',$users); 
    }

 #-----------------------FIN LISTAR-------------------------------------------


    public function create()
    {
       return View('admin.users.create');
    }



#------------------------REGISTRAR USUARIO-------------------------------------  
    public function store(Request $request)
    {                             #--Trae todos los datos    
          $user = new User($request->all());
                            # Encripta la contraseña
          $user->password = bcrypt($request->password);
          # Guarda los datos
          $user->save();


    }

#------------------------FIN REGISTRO------------------------------------

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
