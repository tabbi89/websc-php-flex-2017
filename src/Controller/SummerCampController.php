<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SummerCampController extends Controller
{
    public function fish()
    {
        return $this->json([
            'fish' => ['brancina', 'tune', 'romba', 'škampi']
        ]);
    }

    /**
     * @Route("/speakers")
     */
    public function speakers()
    {
        return $this->json([
            'speakers' => ['Marco', 'Paula', 'Antonio', 'Marcello']
        ]);
    }
}
