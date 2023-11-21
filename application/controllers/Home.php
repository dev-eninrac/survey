<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(APPPATH . "controllers/Default_Controller.php");
class Home extends Default_Controller
{
    public function __construct()
	{
		parent::__construct();
	}
    public function index()
    {
        $categories = [
            [
                'name' => 'EV',
                'icon' => base_url() . 'assets/images/ev-home.svg',
                'link' => base_url() . 'ev/',
                'status' => 'active'
            ],
            [
                'name' => 'Solar',
                'icon' => base_url() . 'assets/images/solar-home.svg',
                'link' => base_url() . 'solar/',
                'status' => 'disable'
            ],
            [
                'name' => 'Wind',
                'icon' => base_url() . 'assets/images/tariff-line.svg',
                'link' => base_url() . 'wind/',
                'status' => 'disable'
            ], [
                'name' => 'Hydrogen',
                'icon' => base_url() . 'assets/images/tariff-line.svg',
                'link' => base_url() . 'hydrogen/',
                'status' => 'disable'
            ],
            [
                'name' => 'Oil & Gas',
                'icon' => base_url() . 'assets/images/oa-line.svg',
                'link' => base_url() . 'oil-and-gas/',
                'status' => 'disable'
            ],
            [
                'name' => 'Power & Utilities',
                'icon' => base_url() . 'assets/images/power-and-utilities-home.svg',
                'link' => base_url() . 'ev/',
                'status' => 'disable'
            ]
        ];

        $survayText = [
            'title' => 'Dashboard',
            'sub-title' => 'Vision Board Survey'
        ];
        $this->load->view('home', ['categories' => $categories, 'survayText' => $survayText]);
    }
}
