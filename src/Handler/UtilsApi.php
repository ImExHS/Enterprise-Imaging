<?php

namespace App\Handler;

use App\Services\ConsumeApi;

class UtilsApi 
{
    private $consumeApi;

    public function __construct(ConsumeApi $consumeApi)
    {
        $this->consumeApi = $consumeApi;
    }
    public function consumeApi($id = '')
    {   
        if($id !== ''){
            $method = 'GET';
            $domain = 'https://orchestrator.imexhs.com/workflows/' . $id;
        }
        else{

        }
        $method = 'GET';
        $domain = 'https://127.0.0.1:8000/gateway/' . 'pacs';

        $studyList = $this->consumeApi->getRequest($method, $domain); 
        return $studyList;
    }
}