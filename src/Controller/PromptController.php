<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PromptController extends AbstractController
{
    #[Route('/first-prompt', name: 'first_prompt')]
    public function handleFirstPrompt(): JsonResponse
    {
        // Create the user

        // Create the chat (ChatController)

        // Store the message in the db (MessageController)

        // Send it to AI (AI facade)

        // Store the response in the db (MessageController)

        // Do actions according to the response (Creating repository, react/symfony project, code, JIRA tickets...)

        // Send response to user

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PromptController.php',
        ]);
    }

    #[Route('/reply-prompt', name: 'reply_prompt')]
    public function handleReplyPrompt(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PromptController.php',
        ]);
    }
}
