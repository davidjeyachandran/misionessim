<?php
 function getPageURL(){
  $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80")
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 else 
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 
  return $pageURL = strtolower($pageURL);
 }
 
 $pageURL = strrchr(getPageURL(), "/");
 $tittle = "";
 
 $nid = 767;
 //Administracion
 if( $pageURL == "/administracion")			{$nid = 756; $tittle = "Administracion";}
 //Desarrollo
 else if( $pageURL == "/desarrollo")			{$nid = 761; $tittle = "Desarrollo";}
 //Educaci%C3%B3n
 else if( $pageURL == "/educacion")			{$nid = 758; $tittle = "Educación";}
 //Evangelismo	
 else if( $pageURL == "/evangelismo")			{$nid = 762; $tittle = "Evangelismo";}
 //Formaci%C3%B3n+Teol%C3%B3gica
 else if( $pageURL == "/formacion-teologica")		{$nid = 757; $tittle = "Formación Teológica";}
 //Ling%C3%BC%C3%ADstica	
 else if( $pageURL == "/linguistica")			{$nid = 763; $tittle = "Lingüística";}
 //Multimedia
 else if( $pageURL == "/multimedia")			{$nid = 764; $tittle = "Multimedia";}
 //Ni%C3%B1os
 else if( $pageURL == "/ninos")				{$nid = 767; $tittle = "Trabajo con Niños y Jóvenes";}
 //Salud
 else if( $pageURL == "/salud")				{$nid = 759; $tittle = "Salud";}
 //Servicios Tecnicos
 else if( $pageURL == "/servicios-tecnicos")	{$nid = 760; $tittle = "Servicios Técnicos";}
 
 $node = node_load($nid);
 $field_section_id = field_get_items('node', $node,'body');
 ?>
 <h2><?php echo $tittle;?></h2>
 <?php echo $field_section_id[0]['value'];
 echo "<pre> \n</pre>"

 ?>
<div class="<?php print $classes; ?>">
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>
</div><?php /* class view */ ?>