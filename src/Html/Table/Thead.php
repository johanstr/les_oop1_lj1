<?php

class Thead
{
   private array $children = [];

   public function __construct($element)
   {
      $this->children[] = $element;
   }

   public function draw()
   {
      echo 'Thead wordt gegenereerd';
      $this->children[0]->draw();
   }
}