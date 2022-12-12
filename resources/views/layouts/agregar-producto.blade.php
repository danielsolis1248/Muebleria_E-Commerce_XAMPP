<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Agregar producto</title>
</head>
<body>
    <form class="form-horizontal">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Agregar producto</legend>
        
        <!-- Text input-->
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_name">Nombre del producto</label>  
          <div class="col-md-4">
          <input id="product_name" name="product_name" placeholder="Nombre del producto" class="form-control input-md" required="" type="text">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_name_fr">Descripcion</label>  
          <div class="col-md-4">
          <input id="product_name_fr" name="product_name_fr" placeholder="Descripcion" class="form-control input-md" required="" type="text">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="available_quantity">Precio</label>  
          <div class="col-md-4">
          <input id="available_quantity" name="available_quantity" placeholder="Precio" class="form-control input-md" required="" type="text">
            
          </div>
        </div>
        
         <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">Imagen del producto</label>
          <div class="col-md-4">
            <input id="filebutton" name="filebutton" class="input-file" type="file">
          </div>
        </div>
        <!-- File Button --> 
        
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton">Agragar producto al inventario</label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar datos</button>
          </div>
          </div>
        
        </fieldset>
        </form>
</body>
</html>