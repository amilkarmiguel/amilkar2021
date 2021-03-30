<?php

namespace App\Http\Controllers\Admin;

use App\Division;
use App\Http\Controllers\Controller;
use App\Permission\Models\Role;
use App\Person;
use App\User;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Http\Requests\ValidUserForm;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveAccess', 'user.index');
//        $this->authorize('haveaccess', 'user.index');
        $users = User::orderBy('id')->paginate(10);
        $users->each(function($u){
            $u->persona;
        });

        return view('admin.usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $this->authorize('create', User::class);
        Gate::authorize('haveAccess', 'user.create');
        $divisiones = Division::all();
        return view('admin.usuarios.create', compact('divisiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidUserForm $request)
    {
        Gate::authorize('haveAccess', 'user.create');
        $usuario = new User();
        $usuario->email = $request->email;
        $pass1 = $request->password;
        $pass2 = $request->password2;

        if ($pass1 == $pass2){
            $usuario->password = bcrypt($request->password);
            $usuario->save();
        }else{

            Alert::warning('Error', 'Las Contraseñas no Coinciden');
            return redirect('usuarios/create');
        }
        $usuario->roles()->sync(2);
        $usuario->division_id = $request->division_id;
        $usuario->save();
        $user = User::orderBy('id', 'DESC')->limit(1)->get();
        $persona = new Person();
        $persona->name = $request->name;
        $persona->app = $request->app;
        $persona->apm = $request->apm;
        $persona->ci = $request->ci;
        $persona->phone = $request->phone;
        $persona->address = $request->address;
        $persona->user_id = $user[0]->id;
        $persona->save();


        Alert::success('Exito', 'Usuario Creado Correctamente');
        return redirect('usuarios');

    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('view', [$user, ['user.show', 'userown.show']]);
//        Gate::authorize('haveAccess', 'user.show');
//        $user = User::with('roles')->orderBy('id');


        return view('admin.usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        Gate::authorize('haveAccess', 'user.edit');
        $user = User::findorfail($id);
        $this->authorize('update', [$user, ['user.edit', 'userown.edit']]);
        $roles = Role::orderBy('name')->get();
        return view('admin.usuarios.edit', compact('user', 'roles'));
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
        Gate::authorize('haveAccess', 'user.edit');
        $persona = Person::where('user_id', $id)->get();
        $persona = Person::findorfail($persona[0]->id);
        $persona->name = $request->name;
        $persona->app = $request->app;
        $persona->apm = $request->apm;
        $persona->ci = $request->ci;
        $persona->phone = $request->phone;
        $persona->address = $request->address;
        $persona->save();
        $user = User::find($id);
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->roles()->sync($request->get('roles'));
        $user->save();
        Alert::success('Hecho', 'Usuario Actualizado Correctamente');
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveAccess', 'user.destroy');

        $persona = Person::where('user_id', $id)->get();

        $persona = Person::findorfail($persona[0]->id);
        $persona->delete();
        User::find($id)->delete();

        Alert::success('Hecho', 'Usuario Eliminado Correctamente');
        return redirect('usuarios');
    }
}
