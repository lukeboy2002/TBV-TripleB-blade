<?php

namespace Database\Seeders;

use App\Models\Carousel;
use App\Models\Comment;
use App\Models\Invitation;
use App\Models\Post;
use App\Models\Sponsor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(AlbertSeeder::class);
        $this->call(AntoineSeeder::class);
        $this->call(BeukSeeder::class);
        $this->call(BudSeeder::class);
        $this->call(FransSeeder::class);
        $this->call(GuusSeeder::class);
        $this->call(JacSeeder::class);
        $this->call(JohanSeeder::class);
        $this->call(JohnSeeder::class);
        $this->call(PatrickSeeder::class);
        $this->call(RichardSeeder::class);
        $this->call(RolandSeeder::class);
        $this->call(RonSeeder::class);
        $this->call(RuudSeeder::class);

        $users = User::factory(10)->create();

        $posts = Post::factory(200)
            ->recycle($users)
            ->create();

        $comments = Comment::factory(100)
            ->recycle($users)
            ->recycle($posts)
            ->create();

        $invitations = Invitation::factory(30)
            ->recycle($users)
            ->create();

        $carousel = Carousel::factory(10)->create();

        $sponsors = Sponsor::factory(10)->create();
    }
}
