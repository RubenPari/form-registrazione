<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Token;
use Illuminate\Routing\Controller;

class Tokens extends Controller
{
    /**
     * Create a new token and
     * return it with json format.
     */
    public function generate($response)
    {
        function generate_random_string($length = 20): string
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        // drop the previous token
        $token = Tokens::find(1);
        $token->delete();

        $value_token = generate_random_string();

        // save token in database
        $token = new Token();
        $token->value = $value_token;
        $token->expired_at = date('Y-m-d H:i:s', strtotime('+1 hour'));
        $token->save();

        // return token
        return $response->withJson(['token' => $value_token]);
    }

    public function get_current_token($response): Token
    {
        return Tokens::find(1);
    }

    public function check_is_valid($token){
        if($token->expired_at < date('Y-m-d H:i:s')){
            return false;
        }
        return true;
    }
}
