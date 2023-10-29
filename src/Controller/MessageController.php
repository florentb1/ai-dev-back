<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/message', name: 'app_message', methods: 'POST')]
    public function postMessage(): JsonResponse
    {
        // Store the message in the db
        
        return $this->json([
            'message' => 'Well done, your website has been created!'
        ]);
    }
}
