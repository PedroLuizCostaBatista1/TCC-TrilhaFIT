<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Support\Str;

    class Usuario extends Authenticatable {
        use HasFactory, Notifiable;

        protected $table = 'usuarios';
        protected $fillable = [
            'nome',
            'email',
            'senha',
            'cpf',
            'academia',
            'tipo',
            'ambiente_treino',
            'nivel_fisico',
            'peso',
            'altura',
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

        public function estatistica() {
            return $this->hasOne(Estatisticas::class, 'usuarios_id');
        }
        
        public function turmas() {
            return $this->belongsTo(Turma::class, 'turma_id');
        }

        public function turmaCriada() {
            return $this->hasOne(Turma::class, 'instrutor_id');
        }

        public function getIniciaisAttribute(): string {
            return Str::upper(mb_substr($this->nome, 0, 2));
        }
    }
?>
