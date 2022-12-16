<?php

    require_once __DIR__ . "/../configs/BancoDados.php";

    class Atende
    {
        public static function cadastrarConsulta($idFuncionario,$idAnimal)
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("INSERT INTO atende(idfuncionario,idanimal) values (?,?)");
                $stmt->execute([$idFuncionario,$idAnimal]);

                if ($stmt->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            }
            catch(Exception $e)
            {
                $e->getMessage();
                exit;
            }
        }

        public static function listarConsultas()
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("SELECT * FROM atende ORDER BY id");
                $stmt->execute();

                return $stmt->fetchAll();
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
                exit;
            }
        
        }

        public static function editarConsulta($idfuncionario,$idanimal,$id)
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt=$conexao->prepare("UPDATE atende SET idfuncionario = ?,idanimal=? WHERE id = ?");
                $stmt->execute([$idfuncionario,$idanimal,$id]);

                if ($stmt->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            }
            catch(Exception $e)
            {
                return false;
            }
        }

        public static function deletarConsulta($id)
        {
            try {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("DELETE FROM atende WHERE id = ?");
                $stmt->execute([$id]);

                if ($stmt->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {

                echo $e->getMessage();
                exit;
            }
        }

        public static function existeidConsulta($id)
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt=$conexao->prepare("SELECT COUNT(*) FROM atende where id=?");
                $stmt->execute([$id]);

                if ($stmt->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            }
            catch(Exception $e)
            {
                return false;
            }
        }

        public static function getConsultaById($id)
        {
            try {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("SELECT * FROM atende WHERE id = ?");
                $stmt->execute([$id]);

                return $stmt->fetchAll()[0];
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }

        public static function selecionarFuncionariosbyID($idAnimal)
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("SELECT DISTINCT idfuncionario FROM atende WHERE idanimal = ?");
                $stmt->execute([$idAnimal]);

                return $stmt->fetchAll();
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
                exit;
            }
        }

        public static function selecionarAnimais($idFuncionario)
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("SELECT DISTINCT idanimal FROM atende WHERE idfuncionario = ?");
                $stmt->execute([$idFuncionario]);

                return $stmt->fetchAll();
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
                exit;
            }
        }
        public static function selecionarFuncionario($idFuncionario)
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("SELECT * FROM atende WHERE idfuncionario = ?");
                $stmt->execute([$idFuncionario]);

                return $stmt->fetchAll();
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
                exit;
            }
        }

        public static function selecionarAnimaisID($idAnimal)
        {
            try
            {
                $conexao = Conexao::getConexao();
                $stmt = $conexao->prepare("SELECT * FROM atende WHERE idanimal = ?");
                $stmt->execute([$idAnimal]);

                return $stmt->fetchAll();
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
                exit;
            }
        }
    }
?>