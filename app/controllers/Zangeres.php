<?php

class Zangeres extends BaseController
{
    private $zangeresModel;

    public function __construct()
    {
        $this->zangeresModel = $this->model('ZangeresModel');
    }

    public function index()
    {
        $zangeressen = $this->zangeresModel->getZangeressen();
        
        $data = [
            'title' => 'Overzicht Zangeressen',
            'zangeressen' => $zangeressen
        ];

        $this->view('zangeres/index', $data);
    }
}
