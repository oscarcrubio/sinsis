<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker\Factory::create();
        $users = [
            [
                'name' => 'Oscar Rubio',
                'email' => 'oscar_zen17@hotmail.com',
                'password' => bcrypt('Lomecan123'),
                'access_level' => 3,
                'charge' => 'Director',
                'remember_token' => 'awMgW9E5Quj98g89QpMk1GzLvCpO1SkrVlOpv2C1GONdB9DZcPBtI4gyouXZ',
            ],
            [
                'name' => 'Osvaldo Bernal',
                'email' => 'osvaldobernal98@gmail.com',
                'password' => bcrypt('Lomecan123'),
                'access_level' => 2,
                'charge' => 'Consultor',
                'remember_token' => 'awMgW9E5Quj98g89QpMk1GzLvCpO1SkrVlOpv2C1GONdB9DZcPBtI4gyouXZ',
            ],
            [
                'name' => 'Marcel Carvajal',
                'email' => 'marcel.carvajal.1c@gmail.com',
                'password' => bcrypt('Lomecan123'),
                'access_level' => 2,
                'charge' => 'Consultor',
                'remember_token' => 'awMgW9E5Quj98g89QpMk1GzLvCpO1SkrVlOpv2C1GONdB9DZcPBtI4gyouXZ',
            ],
            [
                'name' => 'Luis Méndez',
                'email' => 'luismendezmedrano@gmail.com',
                'password' => bcrypt('Lomecan123'),
                'access_level' => 2,
                'charge' => 'Consultor',
                'remember_token' => 'awMgW9E5Quj98g89QpMk1GzLvCpO1SkrVlOpv2C1GONdB9DZcPBtI4gyouXZ',
            ],
            [
                'name' => 'Alberto Altamirano',
                'email' => 'musualtamirano@gmail.com',
                'password' => bcrypt('Lomecan123'),
                'access_level' => 2,
                'charge' => 'Consultor',
                'remember_token' => 'awMgW9E5Quj98g89QpMk1GzLvCpO1SkrVlOpv2C1GONdB9DZcPBtI4gyouXZ',
            ],
        ];
        foreach ($users as $key => $suser) {
            $user = new User();
            $user->name = $suser['name'];
            $user->email = $suser['email'];
            $user->password = $suser['password'];
            $user->access_level = $suser['access_level'];
            $user->charge = $suser['charge'];
            $user->remember_token = $suser['remember_token'];
            $user->created_at = Carbon\Carbon::now();
            $user->save();            
        }

    }
}
