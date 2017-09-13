<?php

	// bootstrap.php
	// Include Composer Autoload (relative to project root).
	require_once "../vendor/autoload.php";
	require_once  "model/Usuario.php";

	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;

	$paths = array("/model");
	$isDevMode = false;

	// the connection configuration
	$dbParams = array(
	    'driver'   => 'pdo_mysql',
	    'user'     => 'root',
	    'password' => 'root',
	    'dbname'   => 'novo',
	);

	$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
	$entityManager = EntityManager::create($dbParams, $config);

	//var_dump($entityManager);


	$novo = new Usuario();
	$novo->setId(100);
	$novo->setNome("Geovan");
	$novo->setIdade(25);

    var_dump($entityManager->persist($novo));
