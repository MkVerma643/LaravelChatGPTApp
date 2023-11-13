<?php

namespace App\Actions;

use OpenAI\Laravel\Facades\OpenAI;
use Lorisleiva\Actions\Concerns\AsAction;

class ChatPrompt
{
    use AsAction;

    public function handle(string $prompt)
    {
        return OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $prompt,
                ]
            ],

        ])->choices[0]->message->content;
    }
}
