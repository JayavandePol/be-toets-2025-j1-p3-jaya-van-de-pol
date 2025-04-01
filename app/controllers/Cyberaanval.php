<?php

class Cyberaanval extends BaseController
{
    private $cyberaanvalModel;

    public function __construct()
    {
        $this->cyberaanvalModel = $this->model('CyberaanvalModel');
    }

    public function index()
    {
        $cyberaanvallen = $this->cyberaanvalModel->getCyberaanvallen();
        
        $data = [
            'title' => 'Overzicht Cyberaanvallen',
            'cyberaanvallen' => $cyberaanvallen
        ];

        $this->view('cyberaanval/index', $data);
    }
}
