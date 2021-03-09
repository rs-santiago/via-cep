<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Webviacep\viaCep\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFroZipcodeDefaultUsage(String $input, Array $esperado){
        $result = new Search;
        $result = $result->getAddressFroZipcode($input);

        $this->assertEquals($esperado, $result);
        
    }

    public function dadosTeste()
    {
        return [
            "Endereço praça da Sé impar" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço praça da Sé par" => [
                "01001001",
                [
                    "cep" => "01001-001",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado par",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}