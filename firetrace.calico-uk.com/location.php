<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'; ?>
<h1 class="text-dblue uppercase"><?php echo perch_pages_title(true); ?></h1>
<iframe class="spacer-bottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.0672435343076!2d0.2822409514385968!3d50.792862370413346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df73d72bb88d6b%3A0x7c74f7da9cc73f60!2sAirtrace+Sheet+Metal+Ltd!5e0!3m2!1sen!2suk!4v1447854692585" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>    
<?php if ($page == 'vsidebar') { ?>
<div class="<?php echo $sidebar; ?> text-left bkgrd-white sidebar">
 <?php perch_content('Sidebar content'); ?>
</div>
<?php } ?>   
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'; ?>