<?php

namespace Chuckbe\ChuckcmsTemplateNairobi\migrations\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateNairobiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateNairobi\\migrations\\seeds\\ChuckcmsTemplateNairobiTableSeeder
        $fonts = [];
        $fonts['raw'] = 'Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i';
        
        $css = [];
        $css['bootstrap']['href'] = 'chuckbe/chuckcms-template-nairobi/css/bootstrap.css';
        $css['bootstrap']['asset'] = 'true';

        $css['style']['href'] = 'chuckbe/chuckcms-template-nairobi/css/style.css';
        $css['style']['asset'] = 'true';

        $css['swiper']['href'] = 'chuckbe/chuckcms-template-nairobi/css/swiper.css';
        $css['swiper']['asset'] = 'true';

        $css['dark']['href'] = 'chuckbe/chuckcms-template-nairobi/css/dark.css';
        $css['dark']['asset'] = 'true';

        // $css['nairobi']['href'] = 'chuckbe/chuckcms-template-nairobi/css/nairobi.css';
        // $css['nairobi']['asset'] = 'true';

        $css['fonticons']['href'] = 'chuckbe/chuckcms-template-nairobi/css/font-icons.css';
        $css['fonticons']['asset'] = 'true';

        $css['animate']['href'] = 'chuckbe/chuckcms-template-nairobi/css/animate.css';
        $css['animate']['asset'] = 'true';

        $css['magnificpopup']['href'] = 'chuckbe/chuckcms-template-nairobi/css/magnific-popup.css';
        $css['magnificpopup']['asset'] = 'true';

        $css['responsive']['href'] = 'chuckbe/chuckcms-template-nairobi/css/responsive.css';
        $css['responsive']['asset'] = 'true';

        // $css['colors']['href'] = 'chuckbe/chuckcms-template-nairobi/css/colors.php?color=2196F3';
        // $css['colors']['asset'] = 'false';
        
        $js = []; 
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-nairobi/js/jquery.js';
        $js['jquery']['asset'] = 'true';

        $js['plugins']['href'] = 'chuckbe/chuckcms-template-nairobi/js/plugins.js';
        $js['plugins']['asset'] = 'true';

        $js['functions']['href'] = 'chuckbe/chuckcms-template-nairobi/js/functions.js';
        $js['functions']['asset'] = 'true';

        $json = [];

        // create template
        Template::create([
            'name' => 'ChuckCMS Template Nairobi',
            'slug' => 'chuckcms-template-nairobi',
            'type' => 'default',
            'version' => '0.1',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1
        ]);
    }
}
