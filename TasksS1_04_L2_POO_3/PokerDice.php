<?php
class PokerDice
{

   private array $faces = ["AS", "K", "Q", "J", "7", "8"];
   private ?string $lastFace = null;
   private static int $totalRoll = 0;


   public function roll(): void
   {
      $key = array_rand($this->faces);
      $this->lastFace = $this->faces[$key];
      self::$totalRoll += 1;
   }

   public function getLastFace(): ?string
   {
      return $this->lastFace;
   }
   public static function getTotalRoll(): int
   {
      return self::$totalRoll;
   }
}
