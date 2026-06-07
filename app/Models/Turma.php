<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Turma extends Model {
        protected $fillable = [
            'nome',
            'descricao',
            'instrutor_id',
            'codigo'
        ];

        public function instrutor() {
            return $this->belongsTo(Usuario::class, 'instrutor_id');
        }

        public function alunos() {
            return $this->belongsToMany(Usuario::class, 'turma_usuario', 'turma_id', 'usuario_id');
        }

        public function avisos() {
            return $this->hasMany(Aviso::class)->latest();
        }
    }
?>