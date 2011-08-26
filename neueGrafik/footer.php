		<div id="extra">
			<div id="pagination" class="column">
				<?php next_posts_link('Older') ?>
				<?php previous_posts_link('Newer') ?>
			</div>
			<div id="other" class="column">
				<a href="<?php bloginfo('rss2_url'); ?>">RSS</a>
			</div>
		</div>
	</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.postContent').columnize({columns:3, lastNeverTallest:true, doneFunc:columnWidth });
});
var columnWidth = function(){ $('.column').attr("style","width:180px"); }
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js.js"></script>
</body>
</html>