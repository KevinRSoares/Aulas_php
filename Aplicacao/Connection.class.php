<?php
    class Connection
    {
        public function getConn()
        {
            $conn = new mysqli("localhost", "root", "", "aulas_php");
            if ($conn->connect_error) {
                $erros['conexao'] = "Erro de conexão: " . $conn->connect_error;
            }
            return $conn;
        }
    }
?>