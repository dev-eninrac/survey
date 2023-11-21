<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(APPPATH . "controllers/Default_Controller.php");
class Ev extends Default_Controller
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
                'icon' => base_url() . 'assets/images/evci-icon.png',
                'link' => base_url() . 'ev/ev',
                'status' => 'active'
            ],
            [
                'name' => 'EVCI',
                'icon' => base_url() . 'assets/images/evci-icon.png',
                'link' => base_url() . 'ev/evci',
                'status' => 'active'
            ],
            [
                'name' => 'Batteries',
                'icon' => base_url() . 'assets/images/batteries-icon.png',
                'link' => base_url() . 'ev/batteries',
                'status' => 'active'
            ], [
                'name' => 'Transmission System',
                'icon' => base_url() . 'assets/images/transmission-system-icon.png',
                'link' => base_url() . 'ev/transmission-system',
                'status' => 'active'
            ],
            [
                'name' => 'Charge Portal',
                'icon' => base_url() . 'assets/images/charge-portal-icon.png',
                'link' => base_url() . 'ev/charge-portal',
                'status' => 'active'
            ],
            [
                'name' => 'Onboard Charger',
                'icon' => base_url() . 'assets/images/onboard-charger-icon.png',
                'link' => base_url() . 'ev/onboard-charger',
                'status' => 'active'
            ]
        ];
        $survayText = [
            'title' => 'Dashboard',
            'sub-title' => 'EV Survey'
        ];
        $this->load->view('home', ['categories' => $categories, 'survayText' => $survayText]);
    }

    public function survey($id = "")
    {
        if ($this->uri->segment(3) == "") {
            $categories = [
                [
                    'name' => 'EV Sales 4W',
                    'link' => base_url() . "ev/" . $id . "/ev-sales-4W/",
                    'status' => 'active'
                ],
                [
                    'name' => 'Survey 2',
                    'link' => base_url() . "ev/" . $id . "/survey-2/",
                    'status' => 'disable'
                ],
                [
                    'name' => 'Survey 3',
                    'link' => base_url() . "ev/" . $id . "/survey-3/",
                    'status' => 'disable'
                ], [
                    'name' => 'Survey 4',
                    'link' => base_url() . "ev/" . $id . "/survey-4/",
                    'status' => 'disable'
                ],
                [
                    'name' => 'Survey 5',
                    'link' => base_url() . "ev/" . $id . "/survey-5/",
                    'status' => 'disable'
                ],
                [
                    'name' => 'Survey 6',
                    'link' => base_url() . "ev/" . $id . "/survey-6/",
                    'status' => 'disable'
                ]
            ];
            $survayText = [
                'title' => 'Survey',
                'sub-title' => 'All Survey'
            ];
            $this->load->view('Survey-Categories', ['categories' => $categories, 'survayText' => $survayText]);
        } else {
            $this->SurveyQuestions();
        }
    }
}
