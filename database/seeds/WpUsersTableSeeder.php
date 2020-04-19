<?php

use Illuminate\Database\Seeder;

class WpUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_users')->delete();
        
        \DB::table('wp_users')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'user_login' => 'sindria',
                'user_pass' => '$P$Bmhfhd8VtrlQdnhUQkmxjhPzHCv5DH0',
                'user_nicename' => 'sindria',
                'user_email' => 'sindria@sindria.org',
                'user_url' => 'http://localhost',
                'user_registered' => '2020-04-01 20:19:05',
                'user_activation_key' => '',
                'user_status' => 0,
                'display_name' => 'sindria',
            )
        ));
        
        
    }
}