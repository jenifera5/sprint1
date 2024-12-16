<?php  
class Employee{
    private  $nombre;
    private  $sueldo;



    public function  initialize($nombre,$sueldo)
    {
        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
    }

    public function print()
    {
       echo $this->nombre;
       echo '<br>';
       echo "sueldo:". $this->sueldo;
       echo '<br>';
       if($this->sueldo>6000){
        echo "paga impuestos";
       }else{
        echo "No paga impuestos";
       }
    }
}
// Ejemplo de uso
$empleado = new Employee();
$empleado->initialize("Gabriel Lopez", 7000);
$empleado->print();
?>