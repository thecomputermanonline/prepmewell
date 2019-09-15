<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $student_role = Role::where('slug','student')->first();
        $marker_role = Role::where('slug', 'marker')->first();
        $admin_role = Role::where('slug', 'admin')->first();
        $student_perm = Permission::where('slug','take-tests')->first();
        $marker_perm = Permission::where('slug','mark-tests')->first();
       // $admin_perm = Permission::where('slug','edit-users')->first();
        $admin_perm = Permission::where('slug','create-tests')->first();

        $student = new User();
        $student->name = 'Usama Muneer';
        $student->email = 'housemasters.mu@gmail.com';
        $student->password = bcrypt('secret');
        $student->save();
        $student->roles()->attach($student_role);
        $student->permissions()->attach($student_perm);


        $marker = new User();
        $marker->name = 'Asad Butt';
        $marker->email = 'emmanuel.arowoselu@gmail.com';
        $marker->password = bcrypt('secret');
        $marker->save();
        $marker->roles()->attach($marker_role);
        $marker->permissions()->attach($marker_perm);


        $admin = new User();
        $admin->name = 'Emmanuel Butt';
        $admin->email = 'olalekanarowoselu@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($admin_role);
        $admin->permissions()->attach($admin_perm);
    }
}
