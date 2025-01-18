<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


		$u = User::Create([
			"name" => "Hakys",
			"email" => "hakyss@gmail.com",
			"password" => bcrypt("password"),
		]);
        $t = Team::create([
            "user_id" => $u->id,
            "name" => "Cochinos",
            "personal_team" => 1,
        ]);
        $u->currentTeam = $t;
    }
}
