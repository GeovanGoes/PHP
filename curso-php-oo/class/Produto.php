<?php 

	class Produto
    {
        private $id;
        private $nome;
        private $preco;
        private $descricao;
        private $categoria;
        private $usado;



        public function precoComDesconto($valor = 0.1)
        {
            if ($valor > 0 && $valor <=0.5)
            {
                return $this->preco -= $this->preco * $valor;
            }
            else
            {
                return $this->preco;
            }
        }

        /**
         * @return mixed
         */
        public function getPreco()
        {
            return $this->preco;
        }

        /**
         * @param $preco
         */
        public function setPreco($preco)
        {
            if ($preco > 0)
            {
                $this->preco = $preco;
            }
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNome()
        {
            return $this->nome;
        }

        /**
         * @param mixed $nome
         */
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        /**
         * @return mixed
         */
        public function getDescricao()
        {
            return $this->descricao;
        }

        /**
         * @param mixed $descricao
         */
        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

        /**
         * @return mixed
         */
        public function getCategoria()
        {
            return $this->categoria;
        }

        /**
         * @param mixed $categoria
         */
        public function setCategoria($categoria)
        {
            $this->categoria = $categoria;
        }

        /**
         * @return mixed
         */
        public function getUsado()
        {
            return $this->usado;
        }

        /**
         * @param mixed $usado
         */
        public function setUsado($usado)
        {
            $this->usado = $usado;
        }

    }

?>