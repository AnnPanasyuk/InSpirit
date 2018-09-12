<?php

use Illuminate\Database\Seeder;

class Posts1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(array(
            [
                'title' => 'First post',
                'alias' => 'bla bla bla',
                'intro' => 'lorem ipsum',
                'body' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum'
            ],
            [
                'title' => 'Second post',
                'alias' => 'bla bla bla',
                'intro' => 'lorem ipsum',
                'body' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum'
            ],
            [
                'title' => 'Third post',
                'alias' => 'bla bla bla',
                'intro' => 'lorem ipsum',
                'body' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum'
            ]
        ));
    }
}
