<?php

namespace Rediite\Model\Factory;

class dbFactory {

  function createService() {
    return new \PDO('pgsql:dbname=ensiie;host=localhost;port=5432"', 'ensiie', 'ensiie');
  }
}