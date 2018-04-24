<?php
require_once "Conexao.php";
require_once "Categoria.php";
class Produto
{

    private $id;
    private $nome;
    private $desc;
    private $preco;
    private $id_cat_prod;

    public function __construct($id,$nome,$desc, $preco, $categoria){
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->id_cat_prod = $categoria;
        $this->desc = $desc;
    }

 //GETTERS
    public function getId()
    {
        return $this->id;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
  
    public function getDesc()
    {
        return $this->desc;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    
    public function getIdCatProd()
    {
        return $this->id_cat_prod;
    }



    public function setId($id)
    {
        $this->id = $id;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function setDesc($desc)
    {
        $this->desc = $desc;
    }


    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setIdCatProd($id_cat_prod)
    {
        $this->id_cat_prod = $id_cat_prod;
    }

}