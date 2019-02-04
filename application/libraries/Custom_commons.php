<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_commons
{
    public function get_base_template_urls():array {
        return array(
            "base" => base_url(),
            "static_js" => base_url('static/js/'),
            "static_css" => base_url('static/css/'),
            "static_images" => base_url('static/images/'),
            "fontawesome" => base_url('static/css/fontawesome/css/all.min.css'),
            "jquery" => base_url('static/js/jquery.slim.min.js'),
            "bootstrap_css" => base_url('static/css/bootstrap/bootstrap.min.css'),
            "bootstrap_js" => base_url('static/js/bootstrap/bootstrap.bundle.min.js')
        );
    }
}

/* End of file Custom_commons.php */
