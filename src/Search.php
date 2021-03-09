<?php

namespace Webviacep\viaCep;

use Webviacep\viaCep\ws\ViaCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFroZipcode(string $zipcode): array
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

        return $this->getFromServer($zipcode);
    }

    private function getFromServer(string $zipcode): array
    {
        $get = new ViaCep();

        return $get->get($zipcode);
    }
}
