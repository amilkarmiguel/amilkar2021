<?php

use App\Person;
use Illuminate\Database\Seeder;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class PermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");
        //user Admin
        $userAdmin = User::where('email', 'heraldcnp@gmail.com')->first();
        if($userAdmin){
            $userAdmin->delete();
        }


        $userAdmin = new User();
        $userAdmin->email = "heraldcnp@gmail.com";
        $userAdmin->password = bcrypt("123");
        $userAdmin->save();
        $user = User::orderBy('id', 'DESC')->limit(1)->get();
        $persona = new Person();
        $persona->name = "Herald";
        $persona->app = "Choque";
        $persona->apm = "Vargas";
        $persona->ci = "6680287";
        $persona->phone = "72367995";
        $persona->address = "h vasquez 186";
        $persona->user_id = $user[0]->id;
        $persona->save();

        //user Client
        $userClient = User::where('email', 'cliente@gmail.com')->first();
        if($userClient){
            $userClient->delete();
        }


        $userClient = new User();
        $userClient->email = "cliente@gmail.com";
        $userClient->password = bcrypt("123");
        $userClient->save();
        $user = User::orderBy('id', 'DESC')->limit(1)->get();
        $client = new Person();
        $client->name = "Juan";
        $client->app = "Perez";
        $client->apm = "Perez";
        $client->ci = "12345687";
        $client->phone = "78542154";
        $client->address = "no se";
        $client->user_id = $user[0]->id;
        $client->save();



        //Role Admin

        $roleAdmin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrator',
            'full-access' => 'yes'
        ]);

        //Role Client
        $roleClient = Role::create([
            'name' => 'Cliente',
            'slug' => 'cliente',
            'description' => 'Cliente de la empresa',
            'full-access' => 'no'
        ]);

        //Table role_user
        $userAdmin->roles()->sync([ $roleAdmin->id ]);
        $userClient->roles()->sync([ $roleClient->id]);

        //Permission
        $permission_all = [];

            //Permission role
            $permission = Permission::create([
                'name' => 'List Role',
                'slug' => 'role.index',
                'description' => 'A user can list role'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Show Role',
                'slug' => 'role.show',
                'description' => 'A user can see role'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Create Role',
                'slug' => 'role.create',
                'description' => 'A user can create role'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Edit Role',
                'slug' => 'role.edit',
                'description' => 'A user can edit role'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Destroy Role',
                'slug' => 'role.desroy',
                'description' => 'A user can destroy role'
            ]);
            $permission_all[] = $permission->id;


            //Permission user
            $permission = Permission::create([
                'name' => 'List User',
                'slug' => 'user.index',
                'description' => 'A user can list user'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Show User',
                'slug' => 'user.show',
                'description' => 'A user can see user'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Edit User',
                'slug' => 'user.edit',
                'description' => 'A user can edit user'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Destroy User',
                'slug' => 'user.desroy',
                'description' => 'A user can destroy user'
            ]);
            $permission_all[] = $permission->id;


            $permission = Permission::create([
                'name' => 'Show Own User',
                'slug' => 'userown.show',
                'description' => 'A user can see own user'
            ]);
            $permission_all[] = $permission->id;

            $permission = Permission::create([
                'name' => 'Edit own User',
                'slug' => 'userown.edit',
                'description' => 'A user can edit own user'
            ]);




            /*
                $permission = Permission::create([
                'name' => 'Create User',
                'slug' => 'user.create',
                'description' => 'A user can create user'
            ]);
            $permission_all[] = $permission->id;
            */

        //Table permission_role
        //$roleAdmin->permissions()->sync( $permission_all );
    }
}
