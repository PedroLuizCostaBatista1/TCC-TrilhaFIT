<?php
    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\Attachment;
    use Illuminate\Mail\Mailables\Content;
    use Illuminate\Mail\Mailables\Envelope;
    use Illuminate\Queue\SerializesModels;

    class RecuperarSenhaMail extends Mailable {
        use Queueable, SerializesModels;

        public $codigo;

        public function __construct($codigo) {
            $this->codigo = $codigo;
        }

        public function envelope(): Envelope
        {
            return new Envelope(
                subject: 'Codigo de recuperar senha',
            );
        }

        public function content(): Content
        {
            return new Content(
                view: 'emails.recuperarsenha',
                with: [
                    'codigo' => $this->codigo,
                ]
            );
        }
    }
?>