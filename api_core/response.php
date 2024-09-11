<?php

class Response{
    public static  function json($status = 200, $message = "sucess", $data = null)

    {
        header('Content-Type: application/json');

        //verifica se a API esta ativa
        if(!API_IS_ACTIVE){
            return json_encode([
            'status'=> 400,
            'message'=> 'API is not running',
            'api-version' => API_VERSION,
            'time_response' => time(),
            'datetime_response' => date('Y-m-d H:i:s'),
            'data' => null
        ], JSON_PRETTY_PRINT);
        }

        return json_encode([
            'status'=> $status,
            'message'=> $message,
            'api-version' => API_VERSION,
            'time_response' => time(),
            'datetime_response' => date('Y-m-d H:i:s'),
            'data' => $data
        ]);
    }
}