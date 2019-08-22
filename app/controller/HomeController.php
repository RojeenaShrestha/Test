<?php

namespace App\Controller;

use App\Model\Feedback;
use App\Config\Template;
use App\Helper\Validator;

class HomeController
{
    private $template;

    public function __construct()
    {
        $this->template = new Template();
    }

    public function index()
    {
        $validator = new Validator();
        $params = $_POST;
        if ($params) {
            $validator->name('full_name')->value($params['full_name'])->pattern('words')->required();
            $validator->name('email')->value($params['email'])->pattern('email')->required();
            $validator->name('phone')->value($params['phone'])->pattern('tel')->required();
            $validator->name('institute')->value($params['institute'])->pattern('words')->required();
            $validator->name('message')->value($params['message'])->pattern('text')->required();

            if ($validator->isSuccess()) {
                $contact = new Feedback();
                $result = $contact->save($params);
                if ($result['code'] == 800) {
                    $this->submitted();
                } else {
                    $this->error();
                }
            } else {
                $this->error($validator->getErrors());
            }

        } else {
            return $this->template->render('index.php');
        }
    }

    public function list()
    {
        $contact = new Feedback();
        $list = $contact->getList();
        $data = [];
        if($list['code'] == 800) {
            $data['feedbacks'] = $list['data'];
        }
        return $this->template->render('list.php', $data);
    }

    public function submitted()
    {
        return $this->template->render('submitted.php');

    }

    public function error($data=[])
    {

        return $this->template->render('error.php', $data);
    }
}