document.getElementById('cliente').onchange=(e)=>{
   fetch(`http://localhost/Tienda_bebe/buscarcliente.php?Id_Cliente=${e.target.value}`)
   .then((response)=> response.json())
   .then((data)=>{
      
    console.log(data);
    document.getElementById('telefono').value=data.Telefono;
    document.getElementById('direccion').value=data.Direccion;
   });
}

document.getElementById('articulo_select').onchange=(e)=>{
   fetch(`http://localhost/Tienda_bebe/buscararticulo.php?Id_Articulo=${e.target.value}`)
   .then((response)=> response.json())
   .then((data)=>{
      
    console.log(data);
    document.getElementById('categoria_producto').value=data.Id_Categoria;
    document.getElementById('precio_entrada').value=data.Precio_Entrada;
    document.getElementById('precio_salida').value=data.Precio_Salida;
    document.getElementById('proveedor').value=data.Id_Proveedor;
    document.getElementById('stock_articulo').value=data.Stock;
    document.getElementById('descripcion').value=data.Descripcion;
   });
   
}

