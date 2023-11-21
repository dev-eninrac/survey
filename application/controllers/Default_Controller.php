<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Default_Controller extends CI_Controller
{
    public function SurveyQuestions()
    {
        $this->load->view('survey');
    }
}
