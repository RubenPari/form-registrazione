<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Routing\Controller;

class Candidature extends Controller
{
    /**
     * @param $data => associative array with all data
     * @return boolean
     * take form data and save it in ot db
     */
    public function register($data): bool
    {
        function generate_random_string($length = 5): string
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        // add +39 to the number
        $data['telefono'] = '+39' . $data['telefono'];

        // change file name with => date_random_string_name_original
        $data['file']->fileName = date('YmdHis') . '_' . generate_random_string() . '_' . trim($data['file']->getClientOriginalName());

        // set file_name and file_path in the data array
        $base_path = dirname(__DIR__, 2);
        $data['file_name'] = $data['file']->fileName;
        // TODO: change path to unix like in deploy
        $data['file_path'] = $base_path . '\\public\\candidature\\' . $data['file']->fileName;

        echo($data['file_name']);
        echo($data['file_path']);

        //TODO: fix doesn't save
        // save file in the storage
        $file = fopen('\\public\\candidature\\' . $data['file']->fileName, 'w');
        fwrite($file, $data['file']->get());
        fclose($file);

        // insert candidato in the db
        $candidato = new Candidato;

        $candidato->name = $data['nome'];
        $candidato->surname = $data['cognome'];
        $candidato->email = $data['email'];
        $candidato->phone_number = $data['telefono'];
        $candidato->regione_residenza = $data['regione-residenza'];
        $candidato->regione_desiderata = $data['regione-desiderata'];
        $candidato->informazioni_utili = $data['informazioni-utili'];
        $candidato->file_name = $data['file_name'];
        $candidato->file_path = $data['file_path'];

        $candidato->save();

        return true;
    }
}
