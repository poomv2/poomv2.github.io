<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
?>
<?php $current = 'blog'; ?>
<?php $page = 'vsidebar'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'; ?>
<?php $page = 'vsidebar'; ?>
                <!-- <h1 class="text-dblue uppercase">Blog</h1> -->

                <?php // perch_blog_post_field(perch_get('s'), 'postTitle'); ?>
                <div class="post">
          <?php perch_blog_post(perch_get('s')); ?>

          <?php // perch_blog_author_for_post(perch_get('s')); ?>
          
          <div class="meta">
                <div class="cats">
                    <?php perch_blog_post_categories(perch_get('s')); ?>
                </div>
                <div class="tags">
                    <?php perch_blog_post_tags(perch_get('s')); ?>
                </div>
            </div>
          
          <?php //perch_blog_post_comments(perch_get('s')); ?>
          
          <?php //perch_blog_post_comment_form(perch_get('s')); ?>
            
        </div>
		    <p><a href="/blog/">Back to blog</a></p>
           </div>
<?php if ($page == 'vsidebar') { ?>
            <div class="<?php echo $sidebar; ?> text-left bkgrd-white sidebar">
                <!-- <h3 class="text-red uppercase">Archive</h3> -->
                <!-- <h4 class="text-dblue uppercase">Fire rated ductwork:</h4> -->
                <?php //perch_blog_categories(); ?>
		    <!--  By tag -->
		    <?php //perch_blog_tags(); ?>
		    <!--  By year -->
		    <?php //perch_blog_date_archive_years(); ?>
		    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
		    <?php perch_blog_date_archive_months(); ?>
            </div>
            <?php } ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'; ?>
