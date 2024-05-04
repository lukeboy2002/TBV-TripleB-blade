<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'ron',
            'email' => 'ron@tbv-tripleb.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('ronronron'),
            'remember_token' => Str::random(10),
        ]);

        //generate image
        $username = get_initials($user->username);
        $id = $user->id.'.png';
        $path = '/profile-photos/';
        $imagePath = create_avatar($username, $id, $path);

        //save image
        $user->profile_photo_path = $imagePath;
        $user->save();

        $role = Role::select('id')->where('name', 'member')->first();

        $user->roles()->attach($role);
    }
}
