<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Recado extends Model {
	public $table = "recados";
	public $timestamps = true;
	protected $fillable = [
		"id", "nome", "mensagem", "data"
	];

}

?>