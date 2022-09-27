<?php
class Model_Portfolio extends Model
{
  public function get_data()
  {
    return array(
      array(
        'Year' => '2022',
        'Site' => 'https://Skillfactory.ru',
        'Description' => 'SkillFactory — ваш прямой путь в IT-профессии.'
      ),
      array(
        'Year' => '2022',
        'Site' => 'https://skillfactory.ru/courses',
        'Description' => 'Все курсы обучения.'
      ),
    );
  }
}
