<?php

namespace App\Helper;

class Validator
{

    /**
     * @var array $patterns
     */
    public $patterns = array(
        'uri' => '[A-Za-z0-9-\/_?&=]+',
        'url' => '[A-Za-z0-9-:.\/_?&=#]+',
        'alpha' => '[\p{L}]+',
        'words' => '[\p{L}\s]+',
        'alphanum' => '[\p{L}0-9]+',
        'int' => '[0-9]+',
        'float' => '[0-9\.,]+',
        'tel' => '[0-9+\s()-]+',
        'text' => '[\p{L}0-9\s-.,;:!"%&()?+\'°#\/@]+',
        'address' => '[\p{L}0-9\s.,()°-]+',
        'date_dmy' => '[0-9]{1,2}\-[0-9]{1,2}\-[0-9]{4}',
        'date_ymd' => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
        'email' => '[a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6}'
    );

    /**
     * @var array $errors
     */
    public $errors = array();

    public function name($name)
    {

        $this->name = $name;
        return $this;

    }

    public function value($value)
    {

        $this->value = $value;
        return $this;

    }

    public function file($value)
    {

        $this->file = $value;
        return $this;

    }

    public function pattern($name)
    {

        if ($name == 'array') {

            if (!is_array($this->value)) {
                $this->errors[] = 'Parameter ' . $this->name . ' is invalid.';
            }

        } else {

            $regex = '/^(' . $this->patterns[$name] . ')$/u';
            if ($this->value != '' && !preg_match($regex, $this->value)) {
                $this->errors[] = 'Parameter ' . $this->name . ' is invalid.';
            }

        }
        return $this;

    }


    public function required()
    {

        if ((isset($this->file) && $this->file['error'] == 4) || ($this->value == '' || $this->value == null)) {
            $this->errors[] = 'Parameter ' . $this->name . ' is empty.';
        }
        return $this;

    }


    public function isSuccess()
    {
        if (empty($this->errors)) return true;
    }

    public function getErrors()
    {
        if (!$this->isSuccess()) return $this->errors;
    }

}