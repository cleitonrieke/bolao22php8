<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Telegram;
use Telegram\Bot\Exceptions\TelegramResponseException;
use App\Events\ApostaAtualizadaEvent;

class NotificaTelegramApostaEditadaListener implements ShouldQueue
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
     * @param  \App\Events\ApostaAtualizadaEvent  $event
     * @return void
     */
    public function handle(ApostaAtualizadaEvent $event)
    {   
        $chatId = env('TELEGRAM_CHAT_ID');
        
        // Validate that chat ID is configured
        if (!$chatId) {
            \Log::warning('TELEGRAM_CHAT_ID is not configured');
            return;
        }
        
        try {
            $qt_apostas = count($event->tb_apostas);
            $usuario = $event->user;
            
            Telegram::sendMessage([
                'chat_id' => $chatId,
                'parse_mode' => 'HTML',
                'text' => $usuario->name.' acaba de atualizar '.$qt_apostas.' palpite(s)!'
            ]);
        } catch (TelegramResponseException $e) {
            \Log::error('Telegram error: ' . $e->getMessage());
        }
    }
}