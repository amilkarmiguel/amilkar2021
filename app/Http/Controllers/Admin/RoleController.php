<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveAccess', 'role.index');
        $roles = Role::orderBy('id', 'Asc')->paginate(5);
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveAccess', 'role.create');
        $permissions = Permission::get();
        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveAccess', 'role.index');

        $request->validate([
            'name' => 'required|max:50|unique:roles,name',
            'slug' => 'required|max:50|unique:roles,name',
            'full-access' => 'required|in:yes,no'
        ]);

        $role = Role::create($request->all());
        //if ($request->get('permission')){
            $role->permissions()->sync($request->get('permission'));
        //}
//
        Alert::success('Hecho', 'Rol Creado Correctamente');
        return redirect('role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Role $role)
    {
        Gate::authorize('haveAccess', 'role.show');
        $permission_role = [];
        foreach ($role->permissions as $permission) {
            $permission_role[] = $permission->id;
        }

        $permissions = Permission::get();
        return view('admin.role.view', compact('permissions', 'role', 'permission_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Role $role)
    {
        Gate::authorize('haveAccess', 'role.edit');
        $permission_role = [];
        foreach ($role->permissions as $permission) {
            $permission_role[] = $permission->id;
        }

        $permissions = Permission::get();
        return view('admin.role.edit', compact('permissions', 'role', 'permission_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Role $role)
    {
        Gate::authorize('haveAccess', 'role.edit');
        $request->validate([
            'name' => 'required|max:50|unique:roles,name,'.$role->id,
            'slug' => 'required|max:50|unique:roles,name,'.$role->id,
            'full-access' => 'required|in:yes,no'
        ]);

        $role->update($request->all());
        //if ($request->get('permission')){
            $role->permissions()->sync($request->get('permission'));
        //}

        Alert::success('Hecho', 'Rol Actualizado Correctamente');
        return redirect('role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        Gate::authorize('haveAccess', 'role.destroy');
        $role->delete();
        Alert::success('Hecho', 'Rol Eliminado Correctamente');
        return redirect('role');
    }
}
