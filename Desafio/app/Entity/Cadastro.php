<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Cadastro{
    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;

    /**
     * Identificador do nome da pessoa
     * @var string
     */
    public $nome;
    /**
     * CPF da pessoa
     * @var string
     */
    public $cpf;
    /**
     * data de nascimento
     * @var string
     */
    public $datanasc;
    /**
     * verificando o email de pessoa
     * @var string
     */
    public $email;
    /**
     * Identificador do telefone da pessoa
     * @var string
     */
    public $tel;
    /**
     * Identificador da cidade da pessoa
     * @var string
     */
    public $cid;
    /**
     * Identificador do endereço da pessoa
     * @var string
     */
    public $endereco;
    /**
     * Identificador do estado da pessoa
     * @var string
     */
    public $estado;

    /**
     * Método responsável por cadastrar uma pessoa ao banco
     * @return boolean
     */
    public function cadastrar(){
        //DEIFINR A DATA
        $this->data = date('Y-m-a H:i:s');
        //INSERRIR CADASTRO NO BANCO DE DADOS
        $toDatabase = new Database('cadastro');
        //echo "<pre>"; print_r($toDatabase); echo"</pre>"; exit;
        $this->id = $toDatabase->insert([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'datanasc' => $this->datanasc,
            'email' => $this->email,
            'tel' => $this->tel,
            'endereco' => $this->endereco,
            'cid' => $this->cid,
            'estado' => $this->estado
        ]);
        //echo "<pre>"; print_r($this); echo"</pre>"; exit;
        //RETORNAR SUCESSO
        return true;
    }
    
    /**
     * Método responsável por atualizar um cadastro no banco
     * @return boolean
     */
    public function atualizar(){
        return (new Database('cadastro'))->update('id = '. $this->id,[
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'datanasc' => $this->datanasc,
            'email' => $this->email,
            'tel' => $this->tel,
            'endereco' => $this->endereco,
            'cid' => $this->cid,
            'estado' => $this->estado
        ]);
    }

    /**
     * método para excluir um cadastro do banco de dados
     * @return boolean
     */
    public function excluir(){
        return (new Database('cadastro'))->delete('id = '. $this->id);
    }
    public static function getCadastro($where = null, $order = null, $limit = null){
        return (new Database('cadastro'))->select($where,$order,$limit)
                                         ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

  /**
   * Método responsável por buscar uma vaga com base em seu ID
   * @param  integer $id
   * @return Cadastro
   */
    public static function buscaCadastro($id){
        return (new Database('cadastro'))->select('id = '.$id)
                                         ->fetchObject(self::class);
                                         
    }
}