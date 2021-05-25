<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersAdmin extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         User::where('id',1)->delete();//To avoid duplicate user accounts
//         $user = new User();
//         $user->id = 1;
//         $user->name = env('USER_NAME','Lenard Mangay-ayam');
//         $user->email = env('USER_EMAIL','lenard.mangayayam@voting-system.com');
//         $user->password = bcrypt(env('USER_PASS','admin'));
//         $user->save();
//     }
// }
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$7Xn/8bPJ89ypj0cIxwoH9OOXnbK/.9xrLfFh2G4LUSRkw6j7Agn0K',
                'remember_token' => null,
                'created_at'     => '2019-09-24 19:16:02',
                'updated_at'     => '2019-09-24 19:16:02',
            ],
        ];

        User::insert($users);
    }
}
