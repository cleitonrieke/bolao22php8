<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Telegram;
use Telegram\Bot\Exceptions\TelegramResponseException;
use App\Events\NovoJogoEvent;
use App\Models\Selecao;

class NotificaTelegramNovoJogoListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NovoJogoEvent $event
     * @return void
     */
    public function handle(NovoJogoEvent $event)
    {
        $chatId = env('TELEGRAM_CHAT_ID');
        
        // Validate that chat ID is configured
        if (!$chatId) {
            \Log::warning('TELEGRAM_CHAT_ID is not configured');
            return;
        }
        
        try {
            $selecao1 = Selecao::where('id',$event->jogo->id_selecao1)->first();
            $selecao2 = Selecao::where('id',$event->jogo->id_selecao2)->first();
            
            Telegram::sendMessage([
                'chat_id' => $chatId,
                'parse_mode' => 'HTML',
                'text' => 'Jogo '.$selecao1->ds_nome.' X '.$selecao2->ds_nome.' incluido!'
            ]);
        } catch (TelegramResponseException $e) {
            \Log::error('Telegram error: ' . $e->getMessage());
        }
    }
}