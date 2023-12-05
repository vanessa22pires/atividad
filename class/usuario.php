<?php

    class usuario
    {

        private $nome;
        private $email;
        private $dtNascimento;
        private $cidade;
        private $senha;

        public function __construct(){}

        public function create($_nome, $_email, $_dtNascimento,$_cidade,$_senha)
        {
            $this->nome = $_nome;
            $this->email= $_email;
            $this->dtNascimento = $_dtNascimento;
            $this->cidade = $_cidade;
            $this-> senha = $_senha;
        }

        public function inserirusuario()
        {
            include("db/conn.php");
            $sql = "CALL piusuario(:nome, :email, :dtNascimento, :cidade, :senha)";

            $data = [
                'nome' => $this->nome,
                'email' => $this->email,
                'dtNascimento' => $this->dtNascimento,
                'cidade' => $this->cidade,
                'senha' => $this->senha,
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;

        }

        public function listarusuario()
        {
            include("db/conn.php");

            $sql = "CALL psListarusuario('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }
         public function getNome()
        {
            return $this->nome;
        }

        public function getemail()
        {
            return $this->email;
        }

        public function getdtNascimento()
        {
            return $this->dtNascimento;
        }
        
        public function getcidade()
        {
            return $this->cidade;
        }

        public function getsenha()
        {
            return $this->senha;
        }


        public function setNome($_nome)
        {
            $this->nome = $_nome;
        }

        public function setemail($_email)
        {
            $this->nome = $_email;
        }

        public function setdtNascimento($_dtNascimento)
        {
            $this->nome = $_dtNascimento;
        }

        public function setcidade($_cidade)
        {
            $this->nome = $_cidade;
        }

        public function setsenha($_senha)
        {
            $this->nome = $_senha;
        }


       
       
       
       
       
       
        public function buscarusuario($_id)
        {
            include("assets/db/conn.php");

            $sql = "CALL ps_Usuario2('$_id')";
            $data = $conn->query($sql)->fetchAll();

            foreach ($data as $item) {
                $this->nome = $item["nome"];
                $this->email = $item["email"];
                $this->dtNascimento= $item["dtNascimento"];
                $this->cidade = $item["cidade"];
                $this->senha = $item["senha"];
            }

            return true;

        }






       
       
        public function DeleteUser($_id)

        {
            include_once("db/conn.php");
          
            $sql = "CALL pdusuario (:id)";

            $data =[ 

                'id'=> $_id
            ];
           
            $statement = $conn ->prepare($sql);
            $statement->execute($data);
            
            return true;
        }


 
        public function autenticarUsuario($_email,$_senha)
        {

                include("db/conn.php");
                $sql = "CALL psLoginUsuario('$_email', '$_senha')";
                $stmt = $conn->prepare($sql);

                $stmt->execute(); 
                
                if ($user = $stmt->fetch()) 
                {
                    $this->nome = $user["nome"];
                    return 1;
                }
                else
                {
                    return 0;
                }
              

        }






    }

?>