 <div class="clear"></div>
    <div class="grid_12">
    	<hr class="plomo">
    </div>
    <div class="clear"></div>
 </div>
 <div class="container_12 plomo">
    <div class="grid_4">
    <?php
	if (isset($_SESSION['k_username']))
	{
		?>
		<fieldset><legend>Usuario</legend>
        <?php echo mb_strtoupper($_SESSION['k_username']);?>
         | 
		<a href="<?php echo $ruta?>login/logout.php">CERRAR SESION</a>	
		 <form name="Reloj"> 
                Tiempo restante:<input type="text" size=7 name="tiempo" value="mm:hh:ss" title="Tiempo restante para finalizar el día" readonly>
                <script language="JavaScript"> 
                <!-- 
                var tiempoAtras; 
                
                updateReloj(); 
                function updateReloj() { 
                var tiempo = new Date(); 
                var hora = 23-tiempo.getHours(); 
                var minutos = 59-tiempo.getMinutes(); 
                var segundos = 59-tiempo.getSeconds(); 
                
                tiempoAtras= (hora < 10) ? hora :hora; 
                tiempoAtras+= ((minutos < 10) ? ":0" : ":") + minutos; 
                tiempoAtras+= ((segundos < 10) ? ":0" : ":") + segundos; 
                
                document.Reloj.tiempo.value = tiempoAtras; 
                
                setTimeout("updateReloj()",1000); 
                } 
                //--> 
                </script> 
                
                </form> 
        </fieldset>
		<?php }?>
    </div>
    
    <div class="clear"></div>
</div>
</body> 
</html>

