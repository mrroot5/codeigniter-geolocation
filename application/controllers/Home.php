<?php
class Home extends CI_Controller {
    public $static_url;

    public function __construct() {
        parent::__construct();
        $this->static_url = base_url('static/');
    }

    public function view()
    {
        $data['title'] = 'Home'; // Capitalize the first letter
        $data["base_urls_list"] = $this->custom_commons->get_base_template_urls();
        echo $this->twig->render('pages/home', $data);
    }
}

/* End of file Home.php */
