<?php
class Database
{
    // dados padrão para acessar o banco de dados
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "bd_enfermaria";
    private $porta = "3306"; //verificar a porta do seu banco
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //fonte de dados ou DNS  que contém as informações para conectar ao banco de dados.
        $dns = 'mysql:host=' . $this->host . ';port=' . $this->porta . ';dbname=' . $this->banco;

        $opcoes = [
            //armanezar em cache a conexão para ser reutilizada, evitando sobrecarga de uma nova conexão.
            PDO::ATTR_PERSISTENT => true,
            //lança um PDOException se ocorrer um erro
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            //cria a instacia do PDO
            $this->dbh = new PDO($dns, $this->usuario, $this->senha, $opcoes);
        } catch (PDOException $error) {
            print "Error!";
            $error->getMessage() . "<br/>";
            die();
            //fala
        } //fim do catch
    } //fim do método construtor

    // prepara o statement com query
    public function query($sql)
    {
        //prepara a consulta sql
        $this->stmt = $this->dbh->prepare($sql);
    } //fim da função query
    //vincula um valor a um parâmetro
    
    public function bind($parametro, $valor, $tipo = null)
    {
        if (is_null($tipo)):
            switch (true):
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_STR;
            endswitch;
        endif;
        $this->stmt->bindValue($parametro, $valor, $tipo);
    } //fim da função bind
    //executa prepared statement

    public function executa()
    {
        return $this->stmt->execute();
    } //fim da função executa

    //obtem um único registro
    public function resultado()
    {
        $this->executa();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    } //fim da função resultados

    //obtem um conjunto de registros
    public function resultados()
    {
        $this->executa();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    } //fim da função resultados
    //retorna o número de linhas afetadas pela última instrução SQL
    public function totalResultados()
    {
        return $this->stmt->rowCount();
    } //fim da função totalResultados
    //retorna o ultimo ID inserido no banco de dados
    public function ultimoIdInserido()
    {
        return $this->dbh->lastInsertId();
    } //fim da função ultimoIdInserido
}//fim da classe Database