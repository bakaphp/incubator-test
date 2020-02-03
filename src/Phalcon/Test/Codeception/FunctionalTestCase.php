<?php

/*
  +------------------------------------------------------------------------+
  | Phalcon Framework                                                      |
  +------------------------------------------------------------------------+
  | Copyright (c) 2011-2016 Phalcon Team (https://www.phalconphp.com)      |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconphp.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Authors: Phoenix Osiris <phoenix@twistersfury.com>                     |
  +------------------------------------------------------------------------+
*/

namespace Phalcon\Test\Codeception;

use Phalcon\Test\Traits\FunctionalTestCase as FunctionalTestCaseTrait;

class FunctionalTestCase extends ModelTestCase
{
    use FunctionalTestCaseTrait;
}