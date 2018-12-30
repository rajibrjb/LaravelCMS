<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =  App\User::create([
            'name' => 'Amran Ahamed',
            'email' => 'rajib.mrn@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
           'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'lorem asddddddddddddddddddddd asd asd asd  g sm daf ams da sd dfsdf asd',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
