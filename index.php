<?php 
class pessoa{
    private string $nome;
    private string $idade;
    private string $cpf;

public function __construct(string $nome,int $idade,int $cpf)
{
    $this ->nome = $nome;
    $this ->idade = $idade;
    $this ->cpf = $cpf;
}
}
$pessoa13 = new pessoa('Ana' , 18 , 08269288209);
?>

<?php 
class pruduto{
    private string $nomeProduto;
    private float $precoProduto;
    private int $quantidade;
    private string $categoria;

    public function __construct(string $nomeProduto, float $precoProduto, int $quantidade, string $categoria)

    {
    $this->nomeProduto = $nomeProduto;
    $this->precoProduto = $precoProduto ;
    $this->quantidade = $quantidade;
    $this->categoria = $categoria;
    }
public function pegarNome() {
return $this->nomeProduto ;
}
public function pegarPreco() {
return $this->precoProduto ;
}
public function pegarEstoque() {
return $this->quantidade ;
}
public function pegarcategoria() {
return $this->categoria ;
}
}


?>