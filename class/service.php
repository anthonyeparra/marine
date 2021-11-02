<?php
namespace classes;
class Service
{
    public function __construct ($service_name)
    {
        //datos del proyecto
        $this->carpeta_actual = '';
        //datos basicos para usar servicio
        $this->url_service = $this->getUrl($service_name);

    }

    private function getUrl ($service_name)
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $port_local = (empty($_SERVER['SERVER_PORT']) ? '' : ':' . $_SERVER['SERVER_PORT']) ;
        $url_actual = $protocol . $_SERVER["SERVER_NAME"] . $port_local . $this->carpeta_actual;

        //obtener url actual
        return $url_actual."/marina"."/services/$service_name/servicio.php";
    }

    public function useService ($data)
    {
        // consumir servicios
        $array = http_build_query($data, '', '&');

        $ch = curl_init();

        $options = array(
            CURLOPT_URL => $this->url_service,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => ($array),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1
        );

        curl_setopt_array($ch, $options);

        $result = curl_exec($ch);
        // curl_close($ch);
        return $this->response($result);
    }

    private function response ($data)
    {
        return json_decode(str_replace("\xef\xbb\xbf", "", $data));
    }

    public function setUrl ($url)
    {
        $this->url_service = $url;
    }
}