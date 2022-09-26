<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dan Beaudet',
            'email' => 'beaudet.wa@gmail.com',
            'email_verified_at' => Carbon::now(),
            'phone' => '425-220-1137',
            'password' => Hash::make(env('ADMIN_PASS')),
            'stripe_id' => 'cus_JzgBrMpFrdhOQn',
            'remember_token' => Str::random(10),
            //'team_id' => 1, //$this->faker->numberBetween(0, 10),

            // Stripe
            'address_1' => '113 N.E. Juniper Ave.',
            'address_2' => 'Apt. A',
            'city' => 'Vancouver',
            'country' => 'USA',
            'postal_code' => '98684',
            'description' => 'One hell of a cool client.',  //$this->faker->paragraph,
            'currency' => 'USD',
            'default_source' => 'Visa',
            'delinquent' => false,
            'livemode' => false
        ]);

        User::factory(19)->create();
    }
}
