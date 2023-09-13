<?php 

namespace App\Http;

class Request
{   
    /**
     * Metódo HTTP da requisição
     * @var string $httpMethod
     */
    private $httpMethod;

    /**
     * URI da página
     * @var string $uri
     */
    private $uri;

    /**
     * Parâmetros da URL($_GET)
     * @var array $queryParams
     */
    private $queryParams = [];

    /**
     * Variáveis recebidas do POST da página($_POST)
     * @var array $postVars
     */
    private $postVars;

    /**
     * Cabeçalho da requisição
     * @var array $headers
     */
    private $headers = [];

    /**
     * Construtor da classe
     */
    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['SERVER_METHOD'] ?? '';
        $this->uri = $_SERVER['SERVER_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o método HTTP da requisição
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * Método responsável por retornar a URI da requisição
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Método responsável por retornar os headers da requisição
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Método responsável por retornar os parâmetros da URL da requisição
     * @return array
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as variáveis POST da requisição
     * @return array
     */
    public function getPostVars()
    {
        return $this->postVars;
    }
}