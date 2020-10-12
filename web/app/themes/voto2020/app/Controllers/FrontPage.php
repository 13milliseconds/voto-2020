<?php

namespace App\Controllers;
use WP_Query;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    public function videos() {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'any',
            'posts_per_page' => 3,
            'order' => 'ASC'
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }

}
