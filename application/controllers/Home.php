<?php
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function view() {
        $data['title'] = 'Home'; // Capitalize the first letter
        $data["base_urls_list"] = $this->custom_commons->get_base_template_urls();
        $data["geolocation_list"] = $this->home_model->get_fields('latitude, longitude');
        echo $this->twig->render('pages/home', $data);
    }
}

/* End of file Home.php */
