<?php
@include_once('Trow.php');

class Table
{
   // Alleen children van deze class
   private array $content = [];

   public function __construct(array $data = [])
   {
      // Stap 1 - Loop door de array $data heen
      foreach($data as $rij) {
                            // Stap 2
         $this->content[] = new Trow($rij);
         // Bovenstaande gehele rij is stap 3
      }
      // Stap 2 - Maak voor iedere rij in de array $data een Trow object aan en
      // geef de rij gegevens uit de array $data aan dit object door.

      // Stap 3 - Voeg het nieuw aangemaakte object toe aan de property
      // $content
   }

   public function draw()
   {
      echo '<table>';
      // TODO: Nu gaan we de content van de tabel tekenen
      foreach($this->content as $rij) {
         $rij->draw();
      }
      // We sluiten de tag af
      echo '</table>';
   }
}