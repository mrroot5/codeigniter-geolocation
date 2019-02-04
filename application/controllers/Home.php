<?php
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('home');
    }

    public function view() {
        $data['title'] = 'Home'; // Capitalize the first letter
        $data["base_urls_list"] = $this->custom_commons->get_base_template_urls();
        $data["geolocation_list"] = $this->home->get_fields('latitude, longitude');
        var_dump($data["geolocation_list"]);
        echo $this->twig->render('pages/home', $data);
    }
}

/* End of file Home.php */
