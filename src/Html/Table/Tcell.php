<?php

class Tcell
{
   private mixed $content = '';

   public function __construct(mixed $waarde)
   {
      $this->content = $waarde;
   }

   public function draw()
   {
      echo '<td>';
      echo $this->content;
      echo '</td>';
   }
}