<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Usuario extends Authenticatable {
        use HasFactory, Notifiable;

        protected $table = 'usuarios';
        protected $fillable = [
            'nome',
            'email',
            'senha',
            'cpf',
            'academia'
        ];
        protected $hidden = [
            'senha'
        ];

        protected function casts(): array {
            return ['senha' => 'hashed'];
        }

        public function getAuthPassword() {
            return $this->senha;
        }
    }
?>
