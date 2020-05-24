<?php 
// ESTE ES UN PEQUEÑO PROGRAMA DE POO EN PHP

class Venta{
    /*CLASE VENTAS, CONTIENE UN Id DE VENTA,
     UN PRODUCTO DE TIPO CLASE PRODUCTO Y LA FECHA DE CREACIÓN*/

    public function __construct(){} // EL CONSTRUCTOR PRINCIPAL

    public function __construct1($Id,$producto,$fecha){ 
        // CONTRUCTOR SECUNDARIO QUE MODIFICA EL VALOR DE LAS PROPIEDADES
        $this->Id = $Id;
        $this->producto = $producto;
        $this->fecha = $fecha;
    }    
}

class Producto{
    /*CLASE PRODUCTO, CONTIENE LOS ATRIBUTOS BASICOS DE UN PRODUCTO*/

    public function __construct(){} // EL CONTRUCTOR PRINCIPAL

    public function __construct1($Id,$nombre,$precio,$categoria, $cantidad){
        // CONTRUCTOR SECUNDARIO QUE MADIFICA O INICIA LOS VALORES DE LAS PROPIEDADES
        $this->Id = $Id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->cantidad = $cantidad;
    }
    
    public function __destruct(){} // DESTRUCTOR PERO NO TIENE FUNCIONALIDAD
}

/*---------****---------***------***------**------------***-------***--------***-------------*/
// CODIGO PRINCIPAL

    $ventas_array = array();

    // DATE TODAY
    $date = (new DateTime())->format('d/m/Y'); 

    //CREAR LA PRIMERA VENTA
    $nuevo_producto1 = new Producto(); // INSTANCIA DEL PRIMER PRODUCTO
    $nuevo_producto1->__construct1(1,"Arroz",2500,"Granos",10); // CREAR EL PRIMER PRODUCTO
    $nueva_venta1 = new Venta(); // INSTANCIA DEL LA PRIMERA VENTA
    $nueva_venta1->__construct1(1,$nuevo_producto1,$date); // CREACION LA PRIMERA VENTA

    // CREAR LA SEGUNDA VENTA
    $nuevo_producto2 = new Producto(); // INSTANCIA DEL SEGUNDO PRODUCTO
    $nuevo_producto2->__construct1(2,"Frijol",3000,"Granos",15); // CREAR EL SEGUNDO PRODUCTO
    $nueva_venta2 = new Venta(); // INSTANCIA DE LA SEGUNDA VENTA
    $nueva_venta2->__construct1(2,$nuevo_producto2,$date); // CREACION DE LA SEGUNDA VENTA

    // AGREGAMOS A ARRAY DE PRODUCTOS LA VENTAS
    array_push($ventas_array,$nueva_venta1);
    array_push($ventas_array,$nueva_venta2);

    print_r($ventas_array[0]);
    print_r($ventas_array[1]);

    echo "<br><br>";

    // RECORRER EL ARRAY DE VENTAS
    foreach ($ventas_array as $value) {

        echo "<h2>Venta numero $value->Id</h2>";
        
        echo "  Id producto: <b>" . $value->producto->Id ."</b>".
             ", Nombre producto: <b>" . $value->producto->nombre ."</b>".
             ", Precio producto: <b>$" . $value->producto->precio ."</b>".
             ", Categoria producto: <b>" . $value->producto->categoria ."</b>".
             ", Cantidad de productos <b>" . $value->producto->cantidad ."</b>".
                "<br>";
    }

?>