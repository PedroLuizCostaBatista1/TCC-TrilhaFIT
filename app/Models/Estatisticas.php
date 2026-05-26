<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Estatisticas extends Model {
        protected $table = "estatisticas";
        protected $fillable = ["usuarios_id"];
    }
?>