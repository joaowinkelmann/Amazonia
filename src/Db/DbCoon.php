<?php

namespace App\Db;

use App\http\Response;
use Exception;

class DbCoon
{
    public static function coon()
    {
        try {
            return new \PDO("mysql:host=" . $_ENV['HOST'] . ";dbname=" . $_ENV['DB'], $_ENV['USER'], $_ENV['PASSWORD'], [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        } catch (\PDOException $e) {
            Response::responseMessage(
                ["error" => "Erro ao conectar-se ao banco de dados: " . $e->getMessage()],
                404
            );
            exit;
        }
    }

    // Função para realizar SELECT em uma tabela retornando colunas específicas
    public static function selectAll($table, $columns = ['*'])
    {
        $db = self::coon();
        $columnsStr = implode(", ", $columns);

        $query = "SELECT $columnsStr FROM $table";
        $stmt = $db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Função para realizar SELECT com base no ID
    public static function selectById($table, $id, $columns = ['*'])
    {
        $db = self::coon();
        $columnsStr = implode(", ", $columns);

        $query = "SELECT $columnsStr FROM $table WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        $data =  $stmt->fetch();
        return $data ? $data : throw new \Exception("Falha ao buscar, dado especificado não encontrato!");
    }

    // Função para realizar INSERT
    public static function insert($table, $data, $dados_obrigatorios = [])
    {
        if(sizeof($dados_obrigatorios) >= 1){
            foreach ($dados_obrigatorios as $key => $dado_obrigatorio) {
                if(empty($data[$dado_obrigatorio])){
                    throw new Exception("Erro: " . $dado_obrigatorio . " não especificado!");
                }
            }
        }

        $db = self::coon();
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $db->prepare($query);

        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        return $stmt->execute();
    }

    // Função para realizar DELETE
    public static function delete($table, $id)
    {
        $db = self::coon();
        $query = "DELETE FROM $table WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute() && $stmt->rowCount() > 0
            ? true
            : throw new \Exception("Erro ao excluir o registro especificado");
    }

    // Função para realizar UPDATE
    public static function update($table, $data, $id)
    {
        $db = self::coon();
        $setClause = implode(", ", array_map(fn($key) => "$key = :$key", array_keys($data)));

        $query = "UPDATE $table SET $setClause WHERE id = :id";
        $stmt = $db->prepare($query);

        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute() && $stmt->rowCount() > 0
            ? true
            : throw new \Exception("Erro ao dar update no registro especificado");
    }
}
