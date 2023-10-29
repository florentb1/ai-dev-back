<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chat' => [[['_route' => 'app_chat', '_controller' => 'App\\Controller\\ChatController::postChat'], null, ['POST' => 0], null, false, false, null]],
        '/message' => [[['_route' => 'app_message', '_controller' => 'App\\Controller\\MessageController::postMessage'], null, ['POST' => 0], null, false, false, null]],
        '/first-prompt' => [[['_route' => 'first_prompt', '_controller' => 'App\\Controller\\PromptController::handleFirstPrompt'], null, null, null, false, false, null]],
        '/reply-prompt' => [[['_route' => 'reply_prompt', '_controller' => 'App\\Controller\\PromptController::handleReplyPrompt'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
