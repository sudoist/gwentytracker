<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $json = File::get("database/data/users.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
          User::create(array(
            'id' => $obj->id,
            'email' => $obj->email,
            'first_name' => $obj->first_name,
            'last_name' => $obj->last_name,
            'password' => $obj->password
          ));
        }
    }
}
