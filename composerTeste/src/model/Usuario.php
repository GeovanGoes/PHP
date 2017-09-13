<?php

	/** 
	* @Entity
	* @Table
	*/
	class Usuario
	{

		/**
         * @Id
         * @Column(type="integer")
         * @GeneratedValue
         */
		private $id;

		/** @Column(type="text") */
		private $nome;

		/** @Column(type="integer") */
		private $idade;

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
        public function getIdade()
        {
            return $this->idade;
        }

        /**
         * @param mixed $idade
         */
        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

	}


