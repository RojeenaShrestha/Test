<?php

namespace App\Controller;

use App\Database\DBConnection;
use App\model\Contact;
use App\Validator\Validator;

class HomeController
{
    public function __construct()
    {

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
                echo "Validation ok!";
                $contact = new Contact();
                $result = $contact->save($params);
                var_dump($result);
                die();
            } else {
                var_dump($validator->getErrors());
            }

        } else {
            render('index.php');
        }
    }

    public function list()
    {
        $contact = new Contact();
        $list = $contact->getList();
        var_dump($list);
        die();
        render('list.php');
    }

    public function submitted()
    {
        render('submitted.php');
    }
}