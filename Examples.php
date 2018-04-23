1)
<?php
  interface A {
      public function setProperty($x);
      public function description();
  }
  
  class Fruit implements A {
      public function setProperty($x) {
        $this->x = $x;   
      }
      
      public function description() {
        echo "Descibing $this->x fruit";
      }
  }
  
  $obj = new Fruit();
  $obj->setProperty('mango');
  $obj->description();
?>
Output : Descibing mango fruit

2) Interface can be extended with another interface using extends keyword
<?php
  interface X {
      public function divide($v1,$v2);
  }
  
  interface Y extends X {
      public function compute($v1,$v2);
  }
  
  class Calculator implements Y {
      public function divide($v1,$v2) {
          $this->v1 = $v1;
          $this->v2 = $v2;
          $this->v3 = $v1/$v2;
          echo "Result for divide is $this->v3";
      }
      
      public function compute($v1,$v2) {
          $this->v1 = $v1;
          $this->v2 = $v2;
          $this->v3 = $v1+$v2;
          return "Result for Computation is $this->v3";
      }
  }
  
  $calcobj = new Calculator();
  $calcobj->divide(20,4);
  echo "<br/>";
  echo $calcobj->compute(78,145)."<br/>";
?>
Output : 
Result for divide is 5
Result for Computation is 223
