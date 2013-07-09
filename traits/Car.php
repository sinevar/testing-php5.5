<?php

trait Car
{
  function getColor()
  {
    return 'red';
  }

  public function __toString()
  {
    return 'Car';
  }
}
