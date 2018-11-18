<?php

use Illuminate\Database\Seeder;
use App\Deck;

class DecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('decks')->delete();
        $json = File::get("database/data/decks.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
          Deck::create(array(
            'group' => $obj->group,
            'description' => $obj->description,
            'data' => $obj->data,
          ));
        }
    }
}
