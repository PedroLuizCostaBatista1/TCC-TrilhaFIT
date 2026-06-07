<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Aviso extends Model {
        protected $fillable = ['turma_id', 'conteudo'];

        public function turma() {
            return $this->belongsTo(Turma::class);
        }
    }
?>