<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'firstname' => 'Kang',
            'lastname' => 'Hyewon',
            'username' => 'Hyemhyemu',
            'password' => bcrypt('12345'),
            'email' => 'khw@gmail.com',
        ]);

        $userId = $user->id;

        Post::factory()->create([
            'title' => 'Welcome to Portal Berita',
            'news_content' => '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam laborum quos expedita est facere itaque maiores, ea, unde quisquam dolorem aperiam eius fugiat magni vitae dignissimos. Laborum quod nisi est exercitationem necessitatibus officia atque eos unde, aliquid facilis veniam odio laboriosam tenetur beatae omnis soluta vel delectus nostrum consequuntur libero deserunt ex? Veniam tenetur doloribus cum, enim accusamus sapiente illo provident quibusdam porro reprehenderit earum nihil molestiae beatae ab suscipit ex labore nostrum nisi accusantium cupiditate, debitis distinctio nemo. Molestias eligendi nihil accusamus quod commodi eaque vitae ex. Ratione soluta laboriosam reiciendis atque voluptas voluptatibus qui pariatur! Quod, dicta accusamus!</div>',
            'author' => $userId
        ]);

        Post::factory()->create([
            'title' => 'Announcement: Portal Berita',
            'news_content' => '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam laborum quos expedita est facere itaque maiores, ea, unde quisquam dolorem aperiam eius fugiat magni vitae dignissimos. Laborum quod nisi est exercitationem necessitatibus officia atque eos unde, aliquid facilis veniam odio laboriosam tenetur beatae omnis soluta vel delectus nostrum consequuntur libero deserunt ex? Veniam tenetur doloribus cum, enim accusamus sapiente illo provident quibusdam porro reprehenderit earum nihil molestiae beatae ab suscipit ex labore nostrum nisi accusantium cupiditate, debitis distinctio nemo. Molestias eligendi nihil accusamus quod commodi eaque vitae ex. Ratione soluta laboriosam reiciendis atque voluptas voluptatibus qui pariatur! Quod, dicta accusamus!</div>',
            'author' => $userId
        ]);
    }
}
