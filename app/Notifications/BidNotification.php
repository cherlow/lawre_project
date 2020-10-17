<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Product;

class BidNotification extends Notification
{
    private $bid;
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($bid)
    {
        $this->bid = $bid;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('notify@auctions.com', 'inotify')
            ->subject('Product Status')
            ->greeting('Hello! ' . $this->bid->product->user->name)
            ->line($this->bid->user->name . ' has  placed a bid of ksh: ' . $this->bid->bid_amount . ' on your product  ' . $this->bid->product->name)
            ->action('Check it out', url('/bids'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {

        $product = Product::find($this->bid->product_id);

        return [
            "title" => "New Bids",
            "message" => auth()->user()->name . ' placed a bid on a product you are bidding on ' . $product->name
        ];
    }
}
