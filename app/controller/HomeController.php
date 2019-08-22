<?php

namespace App\Controller;

use App\model\Contact;
use App\Template\Template;
use App\Validator\Validator;

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
                $contact = new Contact();
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
        $contact = new Contact();
        $list = $contact->getList();
        return $this->template->render('list.php');
    }

    public function submitted()
    {
        return $this->template->render('submitted.php');

    }

    public function error()
    {
        return $this->template->render('error.php');
    }
}