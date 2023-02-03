<?php


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( \Faker\Generator $faker ) {
        $created_at = $faker->dateTimeBetween( '-1 days', '1 days' );
        $data       = [
            [
                'name'       => 'Дима',
                'email'      => 'dima@com.ru',
                'password'   => bcrypt( 'dima' ),
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ],
            [
                'name'       => 'Петя',
                'email'      => 'petja@com.ru',
                'password'   => bcrypt( 'petja' ),
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ],
        ];

        \DB::table( 'users' )->insert( $data );

    }
}
