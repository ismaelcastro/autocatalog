<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CarForm extends Form
{
    public function buildForm()
    {
        $this->add('modelo', 'text')
        ->add('marca', 'text')
        ->add('cor', 'text')
        ->add('placa', 'text')
        ->add('Cadastrar', 'submit');
    }
}
