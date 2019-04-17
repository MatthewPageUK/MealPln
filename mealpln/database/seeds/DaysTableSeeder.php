<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([ 'name' => 'Monday', 'sortorder' => 1, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
        DB::table('days')->insert([ 'name' => 'Tuesday', 'sortorder' => 2, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
        DB::table('days')->insert([ 'name' => 'Wednesday', 'sortorder' => 3, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
        DB::table('days')->insert([ 'name' => 'Thursday', 'sortorder' => 4, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
        DB::table('days')->insert([ 'name' => 'Friday', 'sortorder' => 5, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
        DB::table('days')->insert([ 'name' => 'Saturday', 'sortorder' => 6, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
        DB::table('days')->insert([ 'name' => 'Sunday', 'sortorder' => 7, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
    }
}
