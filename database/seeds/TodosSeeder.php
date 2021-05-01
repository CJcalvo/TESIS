<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$useradmin=User::create([
    		'TD' => 'CC',
            'ND' => '1079940501',
            'name' => 'CARLOS JOSE CLAVO',
            'codigo' => 'adm1',
            'cargo' => 'yes',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
    	]);
    	$user1=User::create([
    		'TD' => 'CC',
            'ND' => '1079940502',
            'name' => 'JOSE CARLOS CALVO',
            'codigo' => 'casa1',
            'cargo' => 'no',
            'email' => 'marcos@gmail.com',
            'password' => Hash::make('marcos'),
    	]);
    }
}
