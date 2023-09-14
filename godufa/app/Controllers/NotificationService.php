<?php

namespace App\Controllers;

class NotificationService extends BaseController
{

    public function sendMessageTelegram($path, $method = GET, $data)
    {
        $apiurl = TELE_URL;
        $token = TELE_TOKEN;
        $chat_id = TELE_CHAT_ID;
       
        if ($path == 'm_register') {
            $name = 'ชื่อ: ' . $data['name'];
            $tel = 'เบอร์: ' . $data['user'];
            $bank = 'ธนาคาร: ' . $data['bankid'];
            $bank_ac_no = 'หมาเลขบัญชี: ' . $data['bankno'];
            $message = urlencode("Form: GOD UFA" . "\n" . $name . "\n" . $tel . "\n" . $bank . "\n" . $bank_ac_no);
            $url = $apiurl . $token . '/sendMessage?chat_id=' . $chat_id . '&text=' . $message;
        } else {
            echo 'api not match';
            exit();
        }
        // print_r($url);
        // exit;
        $curl = $this->callApi($url);
        return $curl;
    }

    private function callApi($url, $method = GET, $data = "", $ssl = false, $token = '')
    {
        if ($method == POST) {
            if ($data == "") return false;
        }
        $ch = curl_init();
        if ($method == GET) curl_setopt($ch, CURLOPT_URL, $url . ($data != "" ? "?" . $data : ""));
        else if ($method == POST) curl_setopt($ch, CURLOPT_URL, $url);
        if ($method == POST) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $auth = '';
        if ($token != '') {
            $auth = 'Authorization : Bearer ' . $token;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            $auth
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl);
        curl_setopt($ch, CURLOPT_TIMEOUT, 200);

        $content = curl_exec($ch);
        $info = curl_getinfo($ch);

        // debug($info);

        curl_close($ch);
        return $content;
    }
}
