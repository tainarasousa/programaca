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
            $listaProd[] = new Produto($produ['id_produto'], $produ['nome_produto'], $produ['descricao_produto'], $produ['preco_produto'], $produ['id_categoria']);
        }
        return($listaProd); //$listaProd;
    }

    public function insertProduto(Produto $produto){
        $sql = "INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao_produto`, `preco_produto`, `id_categoria`) VALUES (NULL, '{$produto->getNome()}', '{$produto->getDesc()}', '{$produto->getPreco()}', '{$produto->getIdCatProd()}') ";
        try{$insert = $this->conexao->exec($sql);}catch(Exception $exception){
            $exception->getMessage();
        }
    }

    public function updateProduto ($id, $prod, $desc, $preco, $idCategoria){
        $sql = "UPDATE produto SET nome_produto = '$prod', descricao_produto = '$desc', preco_produto ='$preco', id_categoria = '$idCategoria' WHERE id_produto = '$id' ";
        try{$insert = $this->conexao->exec($sql);}catch (Exception $exception){
            $exception->getMessage();
        }
    }

    public function deleteProduto($id){
        $sql = "DELETE FROM `produto` WHERE `produto`.`id_produto` = $id";
        $insert = $this->conexao->exec($sql);
    }


}

//$p = new Produto(null, 'ALOW', 'ALOWW', 43.60, '2');
//
//$a = new ProdutoCrud();
//$a->updateProduto(7, "Vestido Ruim", "Nao serve para nada", 450, 1);
//$ab = $a->getProdutos();
//print_r($ab);