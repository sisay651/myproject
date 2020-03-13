<?php

use Illuminate\Database\Seeder;
use App\Role;
class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Uni-coordinator',
            'Comp-coordinator',
            'Advisor',
            'Supervisor',
            'Student'
        ];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
       }
    }
}
