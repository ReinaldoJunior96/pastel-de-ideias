<?php

namespace App\Notifications;

use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificaCliente extends Notification
{
    use Queueable;

    private Cliente $cliente;
    private Produto $produto;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente, Produto $produto)
    {
        $this->cliente = $cliente;
        $this->produto = $produto;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Olá,  ' . $this->cliente->nome)
            ->line('Este é um e-mail automatico sobre sua compra. Vou Detalhar seu pedido!')
            ->subject('Pastel de Ideias - Pedido realizado')
            ->line('Você realizou a compra de um '. $this->produto->nome)
            ->line('No valor de R$'. $this->produto->preco)
            ->line('Agradecemos a preferencia!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
