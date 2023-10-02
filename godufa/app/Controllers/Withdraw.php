<?php

namespace App\Controllers;

class Withdraw extends Home
{
    public function index()
    {
        return $this->cv->pageView('pages/withdraw/index', $this->headerInfo);
    }

    public function submit()
    {
        if ($this->request->isAJAX()) {
            $body = [
                'user' => session()->data->userid,
                'token' => session()->data->token,
                'web' => session()->data->web,
                'webuser' => session()->data->webuser,
                'amount' => str_replace('', ',', $this->request->getVar('withdraw_amount'))  . '.00',
            ];
            $service = new APIService();
            $response = $service->serverService('m_iwithdraw', POST, $body);
            $result = json_decode($response);
            return $response;
        }
    }
}
