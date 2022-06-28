<?php
 namespace Src;

 class ArrayTransform {
    public array $array;

    public function __construct(array $array = [])
    {
        $this->array = $array;
    }

    public function setArray(array $array) {
      $this->array = $array;

    }

    public function transform(): array {
      $transformedArray = [];
      $zeroCount = 0;
      foreach($this->array as $element) {
         if($element != 0) {
            array_push($transformedArray, $element);
            continue;
         }
         $zeroCount++;
      }
      for($i=1; $i<= $zeroCount; $i++) {
         if(($zeroCount+1)/2 < $i) {
            array_unshift($transformedArray, 0);
            continue;
         }
         array_push($transformedArray, 0);
      }
      return $transformedArray;
    }

 }