<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\UserData;
use \App\Models\User;
use \App\Models\BankDetails;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory(10)->create()->each(function ($user) {
        $userData = UserData::factory()
            ->create([
                'user_id'=> $user->id,
                'name' => $user->name
            ]);
        $bankDetails = BankDetails::factory()
            ->create([
                'user_id' => $user->id,
                'account_name' => $user->name
            ]);

        });

        //  $users = User::factory(10)->create()->each(function ($user) {
         
        //     UserData::factory()
        //     ->count(10)
        //     ->for($user)
        //     ->create();

        //     BankDetails::factory()
        //     ->create();
        // });

        //  \App\Models\USerData::factory(10)->create();
        //  \App\Models\BankDetails::factory(10)->create();

    }
}
