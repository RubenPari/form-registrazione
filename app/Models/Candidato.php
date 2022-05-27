<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'Candidati';
    protected $primaryKey= 'id';

    protected $name = 'name';
    protected $surname = 'surname';
    protected $email = 'email';
    protected $file_name = 'file_name';
    protected $file_path = 'file_path';
    protected $phone_number = 'phone_number';
    protected $regione_residenza = 'regione_residenza';
    protected $regione_desiderata = 'regione_desiderata';
    protected $informazioni_utili = 'informazioni_utili';
}
