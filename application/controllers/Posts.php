<?php
class Posts extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function view($page = 'home')
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo $this->twig->render('pages/'.$page, $data);
    }

}

/* End of file Posts.php */
