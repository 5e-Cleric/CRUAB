<div class="taula-eleccions">
	<h1>Candidatures presentades</h1>
	<span>Si teniu alguna queixa o reclamació sobre les llistes, contacteu amb la Junta Electoral, si us plau</span>
	<table>
		<tr>
			<?php
			for($columna=0; $columna<sizeof($llistes); $columna++)
			{
			?>
				<td>
					<h3><?php echo getNomLlista($conn, $llistes[$columna]);?></h3>
				</td>
			<?php
			}	
			?>
		</tr>
		<?php
		for($fila=0; $fila<$membres_maxims; $fila++)
		{
		?>
			<tr>
			<?php
			for($columna=0; $columna<sizeof($llistes); $columna++)
			{
			?>
				<td>
					<?php
					if($fila<$numero_membres[$columna])
					{
						?>
						<h5><?php echo getTitol($fila);?></h5>
						<span><?php echo getNomUsuari($conn,explode(",",$membres_llistes[$columna])[$fila]);?></span>
						<?php
					}
					?>
				</td>
			<?php
			}	
			?>
			</tr>
			<?php
		}
		?>
		
	</table>

</div>