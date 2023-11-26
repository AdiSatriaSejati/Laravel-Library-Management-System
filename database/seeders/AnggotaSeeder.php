<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_anggota = Role::updateOrCreate(['name' => User::ROLE_ANGGOTA]);

        $anggota = User::updateOrCreate(
            [
                'name' => 'Dani Saputra',
                'email' => '12221446@bsi.ac.id',
            ],
            [
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]
        )->assignRole($role_anggota);

        $card = Card::updateOrCreate(
            [
                'number' => str($anggota->getKey())->padLeft(5, '0')
            ],
            [
                'start_date' => now(),
                'end_date' => now()->addYear()
            ]
        );
        $card->user()->associate($anggota);
        $card->save();

        $anggota = User::updateOrCreate(
            [
                'name' => 'Heri Setiawan',
                'email' => '12220035@bsi.ac.id',
            ],
            [
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]
        )->assignRole($role_anggota);

        $card = Card::updateOrCreate(
            [
                'number' => str($anggota->getKey())->padLeft(5, '0')
            ],
            [
                'start_date' => now(),
                'end_date' => now()->addYear()
            ]
        );
        $card->user()->associate($anggota);
        $card->save();

        $anggota = User::updateOrCreate(
            [
                'name' => 'Ryan Ramadhan',
                'email' => '12220098@bsi.ac.id',
            ],
            [
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]
        )->assignRole($role_anggota);

        $card = Card::updateOrCreate(
            [
                'number' => str($anggota->getKey())->padLeft(5, '0')
            ],
            [
                'start_date' => now(),
                'end_date' => now()->addYear()
            ]
        );
        $card->user()->associate($anggota);
        $card->save();
    }
}