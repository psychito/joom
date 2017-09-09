<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();
$lang = JFactory::getLanguage();
$sitename = $app->get('sitename');

// Output as HTML5
$this->setHtml5(true);
JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');
JHtml::_('script', 'template.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));
JHtml::_('stylesheet', 'siete.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', '//fonts.googleapis.com/css?family=Lato:300,400,900|Roboto+Condensed:400,700');
$this->addStyleDeclaration("h1, h2, h3, h4, h5, h6, .site-title {	font-family: Lato, sans-serif;
}");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<jdoc:include type="head" />
</head>
<body>

<div class="completo">
	<div class="anchototal container-fluid">
	<header>
		<div class="row-fluid topper padders">

				<div class="span7 fecha">
					<?php
					echo '<span>'.JFactory::getDate()->format('l, d F').' de '.JFactory::getDate()->format('Y').'</span>'?>
				</div>
				<div class="span5 buscador">
					<jdoc:include type="modules" name="lsev-buscador" style="none" />
				</div>

		</div>
		<div class="row-fluid  logocont">
			<div class="span9">
				<jdoc:include type="modules" name="lsev-pubtop" style="none" />
			</div>
			<div class="span3 logo">
				<a class="brand pull-right" href="<?php echo $this->baseurl; ?>/">
				   <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="SIETE"/>
			  </a>
			</div>
		</div>
		<div class="row-fluid menucont padders">

				<div class="span9 menu">
					<nav class="navigation" role="navigation">
						<div class="navbar pull-left">
							<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
								<span class="element-invisible"><?php echo JTEXT::_('TPL_LUCKYSEVEN_TOGGLE_MENU'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
						</div>
						<div class="nav-collapse">
							<jdoc:include type="modules" name="lsev-menu" style="none" />
						</div>
					</nav>
				</div>

			<div class="span3 redes">
				<jdoc:include type="modules" name="lsev-redes" style="none" />
			</div>

		</div>
		</header>
		<?php $menu = $app->getMenu();
if ($menu->getActive() == $menu->getDefault($lang->getTag())) {?>
<section class="frontpagecont">
<div class="row-fluid slidercont padders">
	<div class="span12 slider">
		<jdoc:include type="modules" name="lsev-slider" style="none" />
	</div>
</div>
<div class="row-fluid  markcont">
	<div class="span4 mark1">
		<jdoc:include type="modules" name="lsev-mark1" style="none" />
	</div>
	<div class="span4 mark2">
		<jdoc:include type="modules" name="lsev-mark2" style="none" />
	</div>
	<div class="span4 mark3">
		<jdoc:include type="modules" name="lsev-mark3" style="none" />
	</div>
</div>
</section>
<?php }else{ ?>
	<section class="contenidocont">
		<div class="row-fluid  contenedor">
			<div class="span9">
				<div class="span12 conttopcont">
					<jdoc:include type="modules" name="lsev-conttop" style="none" />
				</div>
				<div class="span12 bread">
					<jdoc:include type="modules" name="lsev-breadcrumb" style="none" />
				</div>
				<div class="span12 contenido">
					<jdoc:include type="component" />
				</div>
				<div class="span12 contbottomcont">
					<jdoc:include type="modules" name="lsev-contbottom" style="none" />
				</div>
			</div>
			<div class="span3 derecont">
				<jdoc:include type="modules" name="lsev-derecha" style="none" />
			</div>
		</div>
	</section>
<?php } ?>
			<footer>
			<div class="row-fluid  footpubcont">
				<div class="span12 footpub">
					<jdoc:include type="modules" name="lsev-footpub" style="none" />
				</div>
			</div>
			<div class="row-fluid  footcont">
				<div class="span5 foot1">
					<jdoc:include type="modules" name="lsev-foot1" style="none" />
				</div>
				<div class="span5 foot2">
					<jdoc:include type="modules" name="lsev-foot2" style="none" />
				</div>
				<div class="span2 foot3">
					<jdoc:include type="modules" name="lsev-foot3" style="none" />
				</div>
			</div>
			<p class="pull-right">
				<a href="#top" id="back-top">
					<?php echo JText::_('TPL_LUCKYSEVEN_BACKTOTOP'); ?>
				</a>
			</p>
			<p>
				&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
			</p>
		</footer>
		<jdoc:include type="modules" name="debug" style="none" />
	</div>
</div>


</body>
</html>
