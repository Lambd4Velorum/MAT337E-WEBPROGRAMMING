<?php
abstract class A{
    // Extending class'lar aşağıdaki metodları tanımlayacak
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}
class B extends A{
    protected function getValue() {
        return "CLASS B";
    }
    public function prefixValue($prefix) {
        return "$prefix CLASS";
    }
}
class C extends A{
    public function getValue() {
        return "CLASS C";
    }
    public function prefixValue($prefix) {
        return "$prefix CLASS ";
    }
}
$obB = new B;
$obB->printOut();
print $obB->prefixValue("B") ."\n";
$obC = new C;
$obC->printOut();
print $obC->prefixValue("C") ."\n";
?>