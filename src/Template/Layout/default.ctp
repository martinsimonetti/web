<!DOCTYPE html>
<html class="no-js">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.min','elegant-icons.min','flexslider.min','lightbox.min','line-icons.min','theme','style']) ?>
    
    <?= $this->Html->script(['bootstrap.min','funcionesAjax.js','isotope.min.js','jquery.countdown.min',
    'jquery.flexslider-min','jquery.min','jquery.plugin.min','lightbox.min','modernizr-2.6.2-respond-1.1.0.min',
    'scripts','scrollReveal.min','skrollr.min','smooth-scroll.min','spectragram.min','twitterFetcher_v10_min']) ?>
       <?= $this->fetch('script') ?> 
       <?= $this->fetch('css') ?>
       <?= $this->fetch('meta') ?>
     

</head>

<body>
        <?= $this->element('menu') ?>
        
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
          </div>
   
        <div class="footer-container">
			<footer class="bg-primary short-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<span class="text-white">
							<p>2017 Fun Club SRL</p>
                            <p> CABA - Bs As - Argentina</p>
							<p>Diseño :: <a href="http://www.h2oestudio.com/" target="_blank">MNM.com.ar</a></p></span>
                            
                              <span class="text-white"><p>Contacto</p><p>info@funclub.com.ar</p>
                              <p>Tel. 011 4321-5678 </p></span>
                              <span class="text-white"><p>Horario de atención telefónica</p>
							<p> L a V de 9 a 12.30hs y de 13.30 a 18hs </p>
							<p>Sab, dom y feriados Guardia de 9 a 14hs</p></span>                              
						</div>
					</div>
				</div>
				
				<div class="contact-action">
					<div class="align-vertical">
						<i class="icon text-white icon-mail"></i>
						<a href="#" class="text-white" onclick="Mostrar('contacto')"><span class="text-white">Enviar un mensaje <i class="icon arrow_right"></i></span></a>
					</div>
				</div>
			</footer>
		</div>
    
</body>
</html>
