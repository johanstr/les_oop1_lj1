<?php
@include_once('Tcell.php');

class Trow
{
   private array $content = [];

   public function __construct(array $rij = [])
   {
      // [ 'id' => 1, 'username' => 'Joop', 'password' => 'welkom', 'email' => 'joop@kopstoot.com' ]
      foreach($rij as $index => $waarde) {
         $this->content[] = new Tcell($waarde);
      }
   }

   public function draw()
   {
      echo '<tr>';

      // Content tekenen
      foreach($this->content as $cell) {
         $cell->draw();
      }

      echo '</tr>';
   }
}