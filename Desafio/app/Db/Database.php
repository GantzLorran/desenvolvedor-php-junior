<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{
    //Conexao com o banco de dados
    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const host = 'localhost';
    /**
     * Nome do banco de dados
     * @var string
     */
    const name = 'bizut';
    /**
     * Usuário do banco
     * @var string
     */
    const user = 'root';
    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const pass = '';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    //instancia de coenxao
    private $connection;
    /**
     * Define a tabela e instancia e conexão
     * @param string $table
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }
    //método responsvel por criar uma conexão com o banco de dados
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::host.';dbname='.self::name,self::user,self::pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: ' .$e->getMessage());
        }
    }

    /**
   * @param  string $query
   * @param  array  $params
   * @return PDOStatement
     */
    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: ' .$e->getMessage());
        }
    }
    /**
     * Método responsável por inserir dados no banco
     * @param array $values [field => value]
     * @return integer
     */
    public function insert($values){
        //Dados da query
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');
        //echo "<pre>"; print_r($binds); echo"</pre>"; exit;
        $query = 'INSERT INTO ' .$this->table. ' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        //EXECUTA O INSERT
        $this->execute($query,array_values($values));

        //Retorna o ID inserido
        return $this->connection->lastInsertId();
    }

  /**
   * Método responsável por executar uma consulta no banco
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @param  string $fields
   * @return PDOStatement
   */
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'WHERE '.$limit : '';
        
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
        
        return $this->execute($query);
    }

    /**
     * método responsável por executar as atualizações no banco de dados
     * @param string $where
     * @param array $values [field => value]
     */
    public function update($where,$values){
        //dados da query
        $fields = array_keys($values);
        //monta a query
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
        $this->execute($query, array_values($values));
        return true;
    }

    /**
     * deletando um cadastro do banco de dados
     * @param string $where
     * @return boolean
     */
    public function delete($where){
        //Monta a query
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

        //executa a query
        $this->execute($query);

        //Retorna sucesso
        return true;
    }
}