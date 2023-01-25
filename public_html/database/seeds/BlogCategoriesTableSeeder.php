<?php

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker) {
        $created_at = $faker->dateTimeBetween( '-1 days', '1 days' );
        $cName      = 'Not category';
        $categories = [
            [
                'title'       => $cName,
                'slug'        => str_slug( $cName ),
                'parent_id'   => 1,
                'description' => 'это родительская категория',
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ],
        ];

        for ( $i = 1; $i < 10; $i ++ ) {

            $cName     = "Category N-" . $i;
            $parent_id = ( $i > 4 ) ? rand( 2, 4 ) : 1;

            $categories[] = [
                'title'       => $cName,
                'slug'        => str_slug( 'slug - ' . $cName ),
                'parent_id'   => $parent_id,
                'description' => 'это категория с номером ' . $i,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ];

        }

        \DB::table( 'blog_categories' )->insert( $categories );
    }
}
