<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ChatController extends AbstractController
{
    #[Route('/chat', name: 'app_chat', methods: 'POST')]
    public function postChat(): JsonResponse
    {
        // Store chat in db

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ChatController.php',
        ]);
    }
}
