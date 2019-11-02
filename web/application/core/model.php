<?php

class Model
{
	public static $localEntityManager;
	public function __construct()
	{
		// берём из локальной переменной файла web/application/config/doctrine-config.php
		global $entityManager;
		self::$localEntityManager = $entityManager;
	}

	// метод выборки данных
	public function get_data()
	{
		// todo
	}

	public function save()
	{
		self::$localEntityManager->persist($this);
		self::$localEntityManager->flush();
	}
}
