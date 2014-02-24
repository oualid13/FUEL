<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>bbonjour comment cava? 
<img src="<?php echo img_path('imagesN/boutef.jpg');?>" alt="" /><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>