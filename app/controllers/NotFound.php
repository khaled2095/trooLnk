<?php

namespace Altum\Controllers;

class NotFound extends Controller {

    public function index() {

    header("Location: https://troo.link/index.php?tr=404error");

        // header('HTTP/1.0 404 Not Found');

        // $view = new \Altum\Views\View('notfound/index', (array) $this);

        // $this->add_view_content('content', $view->run());

    }

}
