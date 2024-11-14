<?php
class Model
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function cadastrarviagem($nome,$data_hora,$local,$roteiro)
    {
        $sql = "INSERT INTO VIAGEM(nome,data_hora,local,roteiro) VALUES(:nome,:data_hora,:local,:roteiro)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":data_hora", $data_hora);
        $stmt->bindParam(":local", $local);
        $stmt->bindParam(":roteiro", $roteiro);
        return $stmt->execute();
    }
    public function listarViagens()
    {
        $sql = "SELECT * FROM  viagem";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
        

    }
    public function editarViagens($nome,$data_hora,$local,$roteiro, $id)
    {
        $sql = "UPDATE viagem SET nome = ?, data_hora = ?, local = ?, roteiro = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome,$data_hora,$local,$roteiro,$id]);
    }
    public function deletarViagem($id) {
        $sql = "DELETE FROM viagem WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();
    }
    public function cadastropessoa($nome,$email,$senha,$sexo)
    {
        $sql = "INSERT INTO cadastro(nome,email,senha,sexo) VALUES(:nome,:email,:senha,:sexo)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":sexo", $sexo);
        return $stmt->execute();
    }
   
}
?>