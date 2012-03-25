<?php

/*
 * This file is part of the Enumeration package.
 *
 * Copyright © 2011 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Enumeration\Exception;

final class UndefinedInstanceException extends LogicException
{
  /**
   * @param string $class
   * @param string $property
   * @param string $value
   * @param \Exception $previous
   */
  public function __construct($class, $property, $value, \Exception $previous = null)
  {
    $message =
      "No instance with "
      .$property
      ." equal to "
      .var_export($value, true)
      ." defined in class '"
      .$class
      ."'."
    ;

    parent::__construct($message, $previous);
  }
}
