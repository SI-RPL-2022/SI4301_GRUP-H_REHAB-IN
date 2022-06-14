<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Dokter;
use App\Models\User;

class LinkMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $dokter=Dokter::where('id_dokter',$id)->first();
        $details = [
            'title' => 'Terima kasih telah melakukan pembayaran!',
            'link' => $dokter->link
        ];

        // dd($details);
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        return $this->subject('Selamat mengikuti layanan konsultasi kami')
                    ->view('linkmail');

    }
}
