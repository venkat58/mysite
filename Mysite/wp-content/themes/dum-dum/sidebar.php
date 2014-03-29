<div class="sidebar">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
    	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /><input type="image" src="<?php bloginfo('template_url'); ?>/images/search-button.jpg" id="searchsubmit" value="Search" />
	</div>
	</form>

<?php if (function_exists('dynamic_sidebar')&&dynamic_sidebar('Box-1')):else: ?>
	<div class="box1">
		<div class="box1text">
		<ul>
			<?php wp_list_categories('show_count=0&title_li=<h2>Categories</h2>'); ?>
		</ul>
		</div> <!-- BOX1 TEXT -->
	</div> <!-- BOX1 -->
<?php endif; ?>

<?php if (function_exists('dynamic_sidebar')&&dynamic_sidebar('Box-2')):else: ?>
	<div class="box2">
		<div class="box2text">
		<ul>
			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
		</ul>
		</div> <!-- BOX2 TEXT -->
	</div> <!-- BOX2 -->
<?php endif; ?>

<?php if (function_exists('dynamic_sidebar')&&dynamic_sidebar('Box-3')):else: ?>
	<div class="box3">
		<div class="box3text">
		<ul>
			<?php wp_list_bookmarks(); ?>
		</ul>
		</div> <!-- BOX3 TEXT -->
	</div> <!-- BOX3 -->
<?php endif; ?>

</div> <!-- SIDEBAR -->