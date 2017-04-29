<div class="row">
	<div class="col-2 hidden-sm"></div>
	<div class="col-8">
		<p class="font-light"><?php echo $Post->content(true) ?></p>
		<p class="font-light right">— <a href="<?php echo $Post->permalink() ?>"><?php echo $Post->date() ?></a></p>
	</div>
</div>

<div class="row">
	<div class="col-4 hidden-sm"></div>
	<div class="col-4"><div class="separator"></div></div>
</div>