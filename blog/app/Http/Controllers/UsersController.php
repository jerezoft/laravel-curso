<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#--IMPORTAMOS 
use App\User;
use  Laracasts\Flash\Flash;

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


            //---------PAQUETE DE MESAJES FLASH
          Flash::success('se ha registrado  '.$user->name.' de forma exitosa');

          return redirect()->route('users.index');

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


    //-------------------------Funcion que sirve para editar usuario-------------------------//
    public function edit($id)
    {
        $usuario = User::find($id);
        return View('admin.users.edit')->with('user',$usuario);
    }

    //-------------------------------------------------------

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $user = User::find($id);
            $user->name = $request->name;
            $user->email =$request->email;
            $user->type = $request->type;
            $user->save();

            Flash::warning('El usuario '.$user->name.' ha sido editado con exito');
            return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $users = User::find($id);
        $users->delete();

       Flash::error('El usuario '.$users->name.' has sido borrado de forma exitosa');
       return redirect()->route('users.index');

    }
}
