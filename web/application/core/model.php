<?php

class Model
{
	public static $localEntityManager;

	// метод выборки данных
	static public function list()
	{
		$repository = self::$localEntityManager->getRepository(get_called_class());
		return $repository->findAll();
	}

	// сохранение отдельной записи
	public function save()
	{
		$this->$localEntityManager->persist($this);
		$this->$localEntityManager->flush();
	}
}

// установка $entityManager как глобальной, чтобы её видели все методы класса
Model::$localEntityManager = $entityManager;
