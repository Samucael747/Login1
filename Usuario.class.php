<?php 
 class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function checkUser($email){
        #criar a variável com a consulta sql
        $sql = "SELECT email FROM usuarios WHERE email = :e";

        #chamar o método prepare passando a consulta
        $stmt = $this->pdo->prepare($sql);

        #para cada apelido bindValue:
        $stmt->bindVAlue(":e", $email);

        #executar o comando
        $stmt->execute();

        #SELECT
        return $stmt->rowCount() > 0;
    }

    public function checkPass($email, $senha){
        #criar a variável com a consulta sql
        $sql = "SELECT email FROM usuarios WHERE email = :e AND senha = :s";

        #chamar o método prepare passando a consulta
        $stmt = $this->pdo->prepare($sql);

        #para cada apelido bindValue:
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        #executar o comando
        $stmt->execute();

        #SELECT
        return $stmt->rowCount() > 0;
    }

    public function coon(){
        $dns = "mysql:dbname=banco;host=localhost";
        $user = "root";
        $pass = "";

        try {
              $this->pdo = new PDO($dns, $user, $pass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}