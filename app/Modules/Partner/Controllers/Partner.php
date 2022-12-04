<?php

namespace App\Modules\Partner\Controllers;

use CodeIgniter\Controller;
use App\Modules\Partner\Models\PartnerModel;

class Partner extends Controller
{
    public $partnerModel;
    public function __construct()
    {
        $this->partnerModel = new PartnerModel;
    }
    public function index()
    {
        $data = [
            'title' => 'Partner Manager',
            'view' => 'admin/partner/index',
            'data' => $this->partnerModel->findAll(),
        ];

        return view('template/dashboard', $data);
    }
}