<?php
use Src\ArrayTransform;

class ArrayTransformTest extends \PHPUnit\Framework\TestCase {
    private ArrayTransform $arrayTransformer;
    private array $inputArray = [
        [3,5,6,0,7,0,1],
        [5,0,0,6,0,8],
        [1,2,3,0,0,0,0],
        [1,2,3]
    ];
    private array $outputArray = [
        [0,3,5,6,7,1,0],
        [0,0,5,6,8,0],
        [0,0,1,2,3,0,0],
        [1,2,3]
    ];

    public function testArrayTransformToEqual() {
        $this->arrayTransformer = new ArrayTransform();
        foreach($this->inputArray as $key => $input) {
            $this->arrayTransformer->setArray($input);
            $this->assertTrue(count(array_diff($this->arrayTransformer->transform(), $this->outputArray[$key])) == 0);
        }
    }
}