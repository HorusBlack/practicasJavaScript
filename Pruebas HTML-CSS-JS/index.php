<?php 

?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
     <div>
          <form action="segundo.php" method="POST" id="formulario">
               Nombre:<input type="text" name="nombre" id="nombre">
               Edad: <input type="text" name="edad" id="edad">
               <select name="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
               </select>
              <!-- <input type="submit"> -->
          </form>
          <button type="submit"> Iniciar Sesión </button>
     </div>
     <p><a href="segundo.php" id="enlace">Segunda página</a></p>
	
	<!--
	 <div class="col-sm-12">
        <div class="form-group">
        <label for="lastname">Fit</label>
  <input type="text" data-toggle="tooltip" title="Ingrese el Fit del producto." class="form-control" id="fit_prod" name="fit_prod" value="' . $r[0]["fit_prod"] . '">
         </div>
          </div>
	-->
	
	<!-- 
	#NUEVO PRODUCTO
	  <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="lastname">Fit</label>
                                            <input type="text" data-toggle="tooltip" title="Ingrese el Fit del producto." class="form-control" id="fit_prod" name="fit_prod">
                                        </div>
                                    </div>
	-->
</body>
     <script data-require="jquery@*" data-semver="3.0.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
     <script src="js/animacion.js"></script>
</html>