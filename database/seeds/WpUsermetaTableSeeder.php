<?php

use Illuminate\Database\Seeder;

class WpUsermetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_usermeta')->delete();
        
        \DB::table('wp_usermeta')->insert(array (
            0 => 
            array (
                'umeta_id' => 1,
                'user_id' => 1,
                'meta_key' => 'nickname',
                'meta_value' => 'luca.pitzoi',
            ),
            1 => 
            array (
                'umeta_id' => 2,
                'user_id' => 1,
                'meta_key' => 'first_name',
                'meta_value' => '',
            ),
            2 => 
            array (
                'umeta_id' => 3,
                'user_id' => 1,
                'meta_key' => 'last_name',
                'meta_value' => '',
            ),
            3 => 
            array (
                'umeta_id' => 4,
                'user_id' => 1,
                'meta_key' => 'description',
                'meta_value' => '',
            ),
            4 => 
            array (
                'umeta_id' => 5,
                'user_id' => 1,
                'meta_key' => 'rich_editing',
                'meta_value' => 'true',
            ),
            5 => 
            array (
                'umeta_id' => 6,
                'user_id' => 1,
                'meta_key' => 'syntax_highlighting',
                'meta_value' => 'true',
            ),
            6 => 
            array (
                'umeta_id' => 7,
                'user_id' => 1,
                'meta_key' => 'comment_shortcuts',
                'meta_value' => 'false',
            ),
            7 => 
            array (
                'umeta_id' => 8,
                'user_id' => 1,
                'meta_key' => 'admin_color',
                'meta_value' => 'fresh',
            ),
            8 => 
            array (
                'umeta_id' => 9,
                'user_id' => 1,
                'meta_key' => 'use_ssl',
                'meta_value' => '0',
            ),
            9 => 
            array (
                'umeta_id' => 10,
                'user_id' => 1,
                'meta_key' => 'show_admin_bar_front',
                'meta_value' => 'true',
            ),
            10 => 
            array (
                'umeta_id' => 11,
                'user_id' => 1,
                'meta_key' => 'locale',
                'meta_value' => '',
            ),
            11 => 
            array (
                'umeta_id' => 12,
                'user_id' => 1,
                'meta_key' => 'wp_capabilities',
                'meta_value' => 'a:1:{s:13:"administrator";b:1;}',
            ),
            12 => 
            array (
                'umeta_id' => 13,
                'user_id' => 1,
                'meta_key' => 'wp_user_level',
                'meta_value' => '10',
            ),
            13 => 
            array (
                'umeta_id' => 14,
                'user_id' => 1,
                'meta_key' => 'dismissed_wp_pointers',
                'meta_value' => 'theme_editor_notice',
            ),
            14 => 
            array (
                'umeta_id' => 15,
                'user_id' => 1,
                'meta_key' => 'show_welcome_panel',
                'meta_value' => '0',
            ),
            15 => 
            array (
                'umeta_id' => 17,
                'user_id' => 1,
                'meta_key' => 'managenav-menuscolumnshidden',
                'meta_value' => 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}',
            ),
            16 => 
            array (
                'umeta_id' => 18,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_nav-menus',
                'meta_value' => 'a:1:{i:0;s:12:"add-post_tag";}',
            ),
            17 => 
            array (
                'umeta_id' => 19,
                'user_id' => 2,
                'meta_key' => 'nickname',
                'meta_value' => 'tcarzachena',
            ),
            18 => 
            array (
                'umeta_id' => 20,
                'user_id' => 2,
                'meta_key' => 'first_name',
                'meta_value' => '',
            ),
            19 => 
            array (
                'umeta_id' => 21,
                'user_id' => 2,
                'meta_key' => 'last_name',
                'meta_value' => '',
            ),
            20 => 
            array (
                'umeta_id' => 22,
                'user_id' => 2,
                'meta_key' => 'description',
                'meta_value' => '',
            ),
            21 => 
            array (
                'umeta_id' => 23,
                'user_id' => 2,
                'meta_key' => 'rich_editing',
                'meta_value' => 'true',
            ),
            22 => 
            array (
                'umeta_id' => 24,
                'user_id' => 2,
                'meta_key' => 'syntax_highlighting',
                'meta_value' => 'true',
            ),
            23 => 
            array (
                'umeta_id' => 25,
                'user_id' => 2,
                'meta_key' => 'comment_shortcuts',
                'meta_value' => 'false',
            ),
            24 => 
            array (
                'umeta_id' => 26,
                'user_id' => 2,
                'meta_key' => 'admin_color',
                'meta_value' => 'fresh',
            ),
            25 => 
            array (
                'umeta_id' => 27,
                'user_id' => 2,
                'meta_key' => 'use_ssl',
                'meta_value' => '0',
            ),
            26 => 
            array (
                'umeta_id' => 28,
                'user_id' => 2,
                'meta_key' => 'show_admin_bar_front',
                'meta_value' => 'true',
            ),
            27 => 
            array (
                'umeta_id' => 29,
                'user_id' => 2,
                'meta_key' => 'locale',
                'meta_value' => '',
            ),
            28 => 
            array (
                'umeta_id' => 30,
                'user_id' => 2,
                'meta_key' => 'wp_capabilities',
                'meta_value' => 'a:1:{s:6:"editor";b:1;}',
            ),
            29 => 
            array (
                'umeta_id' => 31,
                'user_id' => 2,
                'meta_key' => 'wp_user_level',
                'meta_value' => '7',
            ),
            30 => 
            array (
                'umeta_id' => 32,
                'user_id' => 2,
                'meta_key' => 'dismissed_wp_pointers',
                'meta_value' => '',
            ),
            31 => 
            array (
                'umeta_id' => 36,
                'user_id' => 2,
                'meta_key' => 'session_tokens',
            'meta_value' => 'a:1:{s:64:"2605aeeb5fdc85fc07c3ee441f17edd54977812471f9b259b0fb89f202e7f1bf";a:4:{s:10:"expiration";i:1585967600;s:2:"ip";s:9:"10.10.0.1";s:2:"ua";s:68:"Mozilla/5.0 (X11; Linux x86_64; rv:74.0) Gecko/20100101 Firefox/74.0";s:5:"login";i:1585794800;}}',
            ),
            32 => 
            array (
                'umeta_id' => 37,
                'user_id' => 2,
                'meta_key' => 'wp_user-settings',
                'meta_value' => 'libraryContent=browse',
            ),
            33 => 
            array (
                'umeta_id' => 38,
                'user_id' => 2,
                'meta_key' => 'wp_user-settings-time',
                'meta_value' => '1585795266',
            ),
        ));
        
        
    }
}