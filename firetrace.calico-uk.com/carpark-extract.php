<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'; ?>
  <h1 class="text-dblue uppercase"><?php echo perch_pages_title(true); ?></h1>
  <?php perch_content('Main content'); ?>
</div>    
<?php if ($page == 'vsidebar') { ?>
  <div class="<?php echo $sidebar; ?> text-left bkgrd-white sidebar">
       <?php perch_content('Sidebar content'); ?>
  </div>
<?php } ?>   
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'; ?>