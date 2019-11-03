<?php

class Model
{
    public static $localEntityManager;

		public function __construct($params = array())
    {
				foreach ($params as $key => $value) {
						$this->$key = $value;
				}
    }

		public function set_params($params = array())
    {
				foreach ($params as $key => $value) {
						$this->$key = $value;
				}
    }

    // метод выборки данных
    public static function list()
    {
        $repository = self::$localEntityManager->getRepository(get_called_class());
        return $repository->findBy(array(), array('id' => 'DESC'));
    }

		// Поиск одной записи
		public static function find($id)
    {
				return self::$localEntityManager->find(get_called_class(), $id);
    }

    // сохранение отдельной записи
    public function save()
    {
        self::$localEntityManager->persist($this);
        self::$localEntityManager->flush();
    }

		// Обновление записи
		public function update_attributes($attributes)
		{
				foreach ($attributes as $key => $value) {
						$this->$key = $value;
				}
				self::$localEntityManager->merge($this);
				self::$localEntityManager->flush();
		}

		// Удаление записи
		public function destroy()
    {
        self::$localEntityManager->remove($this);
        self::$localEntityManager->flush();
    }
}

// установка $entityManager как глобальной, чтобы её видели все методы класса
Model::$localEntityManager = $entityManager;
