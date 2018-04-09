<?php require_once "Conexao.php";
require_once "Categoria.php";

class CategoriaCrud{

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function getCategoria($id)
    {
        $search = $this->conexao->query("SELECT * FROM categoria WHERE id_categoria = $id");
        $cat = $search->fetch(PDO::FETCH_ASSOC);

        return new Categoria($cat['id_categoria'], $cat['nome_categoria'], $cat['descricao_categoria']);
    }

    public function getCategorias()
    {
        $search = $this->conexao->query("SELECT * FROM categoria");
        $cat = $search->fetchAll(PDO::FETCH_ASSOC);
        $listaCat = [];
        foreach ($cat as $categoria) {
            $listaCat[] = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);
        }
        return($listaCat); 
    }

    public function insertCategoria(Categoria $categoria){

        $sql = "INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`) VALUES ('".$categoria->getId()."', '".$categoria->getNome()."', '".$categoria->getDesc()."') ";
        $insert = $this->conexao->exec($sql);
    }

    public function updateCategoria ($id, $cat, $desc){

        $sql = "UPDATE categoria SET nome_categoria = '$cat', descricao_categoria = '$desc' WHERE id_categoria = '$id' ";
        $insert = $this->conexao->exec($sql);
    }

    public function deleteCategoria($id){

        $sql = "DELETE FROM `categoria` WHERE `categoria`.`id_categoria` = $id";
        $insert = $this->conexao->exec($sql);
    }
}

