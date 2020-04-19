<?php

use Illuminate\Database\Seeder;

class WpPostmetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_postmeta')->delete();
        
        \DB::table('wp_postmeta')->insert(array (
            0 => 
            array (
                'meta_id' => 1,
                'post_id' => 2,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'default',
            ),
            1 => 
            array (
                'meta_id' => 2,
                'post_id' => 3,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'default',
            ),
            2 => 
            array (
                'meta_id' => 3,
                'post_id' => 4,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585772834:1',
            ),
            3 => 
            array (
                'meta_id' => 4,
                'post_id' => 5,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585772857:1',
            ),
            4 => 
            array (
                'meta_id' => 5,
                'post_id' => 6,
                'meta_key' => '_wp_trash_meta_status',
                'meta_value' => 'publish',
            ),
            5 => 
            array (
                'meta_id' => 6,
                'post_id' => 6,
                'meta_key' => '_wp_trash_meta_time',
                'meta_value' => '1585773697',
            ),
            6 => 
            array (
                'meta_id' => 7,
                'post_id' => 7,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585792190:2',
            ),
            7 => 
            array (
                'meta_id' => 9,
                'post_id' => 8,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585792213:2',
            ),
            8 => 
            array (
                'meta_id' => 10,
                'post_id' => 9,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585792244:2',
            ),
            9 => 
            array (
                'meta_id' => 11,
                'post_id' => 10,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585792404:2',
            ),
            10 => 
            array (
                'meta_id' => 12,
                'post_id' => 11,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585793414:1',
            ),
            11 => 
            array (
                'meta_id' => 13,
                'post_id' => 12,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585795126:2',
            ),
            12 => 
            array (
                'meta_id' => 18,
                'post_id' => 13,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585795419:2',
            ),
            13 => 
            array (
                'meta_id' => 19,
                'post_id' => 14,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585795724:2',
            ),
            14 => 
            array (
                'meta_id' => 20,
                'post_id' => 15,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585795986:2',
            ),
            15 => 
            array (
                'meta_id' => 21,
                'post_id' => 16,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585796000:2',
            ),
            16 => 
            array (
                'meta_id' => 22,
                'post_id' => 17,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585822931:2',
            ),
            17 => 
            array (
                'meta_id' => 23,
                'post_id' => 18,
                'meta_key' => '_edit_lock',
                'meta_value' => '1585823362:2',
            ),
        ));
        
        
    }
}