<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {
public function run()
 {
    $user = 
    [
     ['name' => 'wagagt', 'contact_fname' => 'Wilver', 'contact_lname' => 'Gonzalez',  // wagagt@gmail.com = Admin
      'email' => 'wagagt@gmail.com', 'password' => Hash::make("waga15"), 
      'id_rol'=>'1', 'id_cliente'=>'1', 'created_at' => new DateTime
     ],
     ['name' => 'fabiogt', 'contact_fname' => 'Fabio', 'contact_lname' => 'Gonzalez', // usuario
      'email' => 'fabiogt@gmail.com', 'password' => Hash::make("fabio15"), 
      'id_rol'=>'2', 'id_cliente'=>'2', 'created_at' => new DateTime
     ],
     ['name' => 'diegogt', 'contact_fname' => 'Diego', 'contact_lname' => 'Gonzalez', // usuario
      'email' => 'diegogt@gmail.com', 'password' => Hash::make("diego15"), 
      'id_rol'=>'2', 'id_cliente'=>'3', 'created_at' => new DateTime
     ]
    ];
    DB::table('users')->insert($user);
 }
 
}
