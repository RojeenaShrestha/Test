<?php

namespace App\Controller;

use App\Model\contact;
use App\Config\Template;
use App\Helper\Validator;

class Controller
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
            $validator->name('first_name')->value($params['first_name'])->pattern('words')->required();
            $validator->name('last_name')->value($params['last_name'])->pattern('words')->required();
            $validator->name('email')->value($params['email'])->pattern('email')->required();
            $validator->name('phone')->value($params['phone'])->pattern('tel')->required();
            $validator->name('institute')->value($params['institute'])->pattern('words')->required();
            $validator->name('message')->value($params['message'])->pattern('text')->required();

            if ($validator->isSuccess()) {
                $contact = new contact();
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

    public function Contactlist()
    {
        $contact = new contact();
        $list = $contact->getList();
        $data = [];
        if($list['code'] == 800) {
            $data['contactlist'] = $list['data'];
        }
        return $this->template->render('list.php', $data);
    }

    public function submitted()
    {
        $data['message'] = "Thank You for contacting us, We will get back to you soon.";
        return $this->template->render('index.php', $data);

    }

    public function error($data=[])
    {
        return $this->template->render('index.php', $data);
    }
}