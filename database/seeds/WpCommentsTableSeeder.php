<?php

use Illuminate\Database\Seeder;

class WpCommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_comments')->delete();
        
        
        
    }
}