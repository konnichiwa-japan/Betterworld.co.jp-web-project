<div id="wrapper">
	
	<div id="lang"></div><!-- end language header -->
	
	<div id="header">
		<?php print $header; ?>
		<div id="logo">
			
			<img src="images/better-world-logo.jpg" alt="Better World" /></div><!-- end logo -->
		
		<div id="navigation">
			
			<?php if (isset($main_menu)) { ?><?php print theme('links', $main_menu, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
  </div>
			
		</div><!-- end navigation -->
		
	</div><!-- end header -->
	
	<div id="front-image">
		<img src='images/better-world-home.jpg' />
		<div id="front-image-text">
			
			
		</div><!-- end front-image-text -->
		
		
	</div><!-- end front image -->
	
	<div id="left-content">
		
		<h1>Better world front page content title</h1>
		<p>this is two ore three lines that are statically built into the front page. perhaps this could be a block, but I dunno, have to check how the content var is diff in d7</p>
		<?php print $content; ?></div><!-- end left content -->
	
	<div id="right-content"><?php print $sidebar_second; ?></div><!-- end right content -->
	
	<div id="green-dash"></div><!-- end green dash -->
	
	<div id="footer"><?php print footer; ?></div><!-- end footer -->
	
	
</div><!-- end wrapper -->