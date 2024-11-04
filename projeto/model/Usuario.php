<?php
namespace Freelas\Model;

use Freelas\Lib\Conexao;

class Usuario{
    public int $id;
    public string $nome;
    public string $email;
    public string $senha;
    
   
    public function salvar(){
        $conn = Conexao::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        return $stmt->execute();
    }

    /**
     * Devolve um array de usuarios
     */
    public static function lista(){
        // TODO
    }


}