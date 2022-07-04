<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class UserSeeder extends Seeder
{
    public function run(){
        User::create(['name'=>'JOSE RAFAEL BURGOS BATRES', 'email'=>'rafael.burgos@ues.edu.sv', 'password'=>bcrypt('02392357-8')]);
        User::create(['name'=>'GUILLERMO ALEXANDER CORNEJO ARGUETA', 'email'=>'guillermo.cornejo@ues.edu.sv', 'password'=>bcrypt('05295281-3')]);
    }
}