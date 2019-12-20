<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    public function index(Request $request)
    {
        $edad = $request->query->get('age');
        return $this->json(['message' => 'Hola mundo', 'edad' => $edad]);
    }
}