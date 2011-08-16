<div id="background-green">&nbsp</div>

<div id="wrapper">
	
	
	
	<div id="header">
		<?php print render($page['header']); ?>
		
		
	</div><!-- end header -->
	
	
	
	<div id="left-content">
		<?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php $breadcrumb .= ' / ' . drupal_get_title(); print $breadcrumb; ?></div>
    <?php endif; ?>
    
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
		
		<?php print render($page['content']); ?></div><!-- end left content -->
	
	<div id="right-content"><?php print render($page['sidebar_second']); ?></div><!-- end right content -->
	
	
	
</div><!-- end wrapper -->
<div id="green-dash">&nbsp;
	
	</div><!-- end green dash -->
	
<div id="footer"><?php print render($page['footer']); ?></div><!-- end footer -->