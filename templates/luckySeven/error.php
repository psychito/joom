<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);
JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');
JHtml::_('script', 'template.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));
JHtml::_('stylesheet', 'siete.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', '//fonts.googleapis.com/css?family=Lato:300,400,900');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
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
	<div class="container-fluid">
	<header>
		<div class="row-fluid topper">
			<div class="span3">
				<jdoc:include type="modules" name="lsev-fecha" style="none" />
			</div>
			<div class="span3 offset6">
				<jdoc:include type="modules" name="lsev-buscador" style="none" />
			</div>
		</div>
		<div class="row-fluid logocont">
			<div class="span9">
				<jdoc:include type="modules" name="lsev-pubtop" style="none" />
			</div>
			<div class="span3 logo">
				<a class="brand pull-left" href="<?php echo $this->baseurl; ?>/">
				   <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="SIETE"/>
			  </a>
			</div>
		</div>
		<div class="row-fluid menucont">
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
	<section class="contenidocont">
		<!-- Begin Content -->
		<h1 class="page-header"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
		<div class="well">
			<div class="row-fluid">
				<div class="span6">
					<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
					<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
					<ul>
						<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
						<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
						<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
						<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
					</ul>
				</div>
				<div class="span6">
					<?php if (JModuleHelper::getModule('search')) : ?>
						<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
						<p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
						<?php echo $this->getBuffer('module', 'search'); ?>
					<?php endif; ?>
					<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
					<p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><span class="icon-home" aria-hidden="true"></span> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
				</div>
			</div>
			<hr />
			<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
			<blockquote>
				<span class="label label-inverse"><?php echo $this->error->getCode(); ?></span> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?>
			</blockquote>
			<?php if ($this->debug) : ?>
				<div>
					<?php echo $this->renderBacktrace(); ?>
					<?php // Check if there are more Exceptions and render their data as well ?>
					<?php if ($this->error->getPrevious()) : ?>
						<?php $loop = true; ?>
						<?php // Reference $this->_error here and in the loop as setError() assigns errors to this property and we need this for the backtrace to work correctly ?>
						<?php // Make the first assignment to setError() outside the loop so the loop does not skip Exceptions ?>
						<?php $this->setError($this->_error->getPrevious()); ?>
						<?php while ($loop === true) : ?>
							<p><strong><?php echo JText::_('JERROR_LAYOUT_PREVIOUS_ERROR'); ?></strong></p>
							<p><?php echo htmlspecialchars($this->_error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></p>
							<?php echo $this->renderBacktrace(); ?>
							<?php $loop = $this->setError($this->_error->getPrevious()); ?>
						<?php endwhile; ?>
						<?php // Reset the main error object to the base error ?>
						<?php $this->setError($this->error); ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
		<!-- End Content -->

	</section>

			<footer>
			<div class="row-fluid footpubcont">
				<div class="span12 footpub">
					<jdoc:include type="modules" name="lsev-footpub" style="none" />
				</div>
			</div>
			<div class="row-fluid footcont">
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
