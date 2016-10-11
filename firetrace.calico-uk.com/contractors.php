<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'; ?>
  <h1 class="text-dblue uppercase"><?php echo perch_pages_title(true); ?></h1>
  <?php perch_content('Main content'); ?>
</div>    
<?php if ($page == 'vsidebar') { ?>
  <div class="<?php echo $sidebar; ?> text-left bkgrd-white sidebar">
       <?php perch_content('Sidebar content'); ?>
        <div class="logos">
  <p class="logoframe"><img src="/img/lpcb.jpg" alt="LPCB" title="LPCB"><br/>
	        <span>LPS-SD198(appendix B12)<br/>
	        BS476 part 24 1987<br/>
	        Cert - LPCB Ref 1345a </span>
	        </p>
	    <img src="/img/firesafe.png" alt="firesafe" title="firesafe">  
        <img src="/img/asfp.png" alt="firesafe" title="firesafe">
 </div>
  </div>
<?php } ?>   
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'; ?>