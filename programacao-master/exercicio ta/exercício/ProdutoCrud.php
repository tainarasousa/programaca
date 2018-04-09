         <?php
        require_once "Conexao.php";
        require_once "Produto.php";


class ProdutoCrud
{
    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function getProduto($id)
    {
        $search = $this->conexao->query("SELECT * FROM produto WHERE id_produto = $id");
        $prod = $search->fetch(PDO::FETCH_ASSOC);

        return new Produto($prod['id_produto'], $prod['nome_produto'], $prod['descricao_produto'], $prod['foto_produto'], $prod['preco_produto'], $prod['id_categoria']);
    }

    public function getProdutos()
    {
        $search = $this->conexao->query("SELECT * FROM produto");
        $prod = $search->fetchAll(PDO::FETCH_ASSOC);

        //Fabrica de Produto
        $listaProd = [];
        foreach ($prod as $produ) {
            $listaProd[] = new Produto($produ['id_produto'], $produ['nome_produto'], $produ['descricao_produto'], $produ['foto_produto'], $produ['preco_produto'], $produ['id_categoria']);
        }
        return($listaProd); //$listaProd;
    }


}

//$a = new ProdutoCrud();
//$eu = $a->getProdutos();
//print_r($eu);