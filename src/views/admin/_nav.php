<?php
	$resource = 1;
	$package = 'lobby';
	$area = 'manage';
?>

<ul>
	<li><a href="/<?php echo $package; ?>/<?php echo $area; ?>">index</a></li>
	<li><a href="/<?php echo $package; ?>/<?php echo $area; ?>/create">create</a></li>
	<li><a href="/<?php echo $package; ?>/<?php echo $area; ?>">store</a></a></li>
	<li><a href="/<?php echo $package; ?>/<?php echo $area; ?>/<?php echo $resource; ?>">show</a></li>
	<li><a href="/<?php echo $package; ?>/<?php echo $area; ?>/<?php echo $resource; ?>/edit">edit</a></li>
	<li><a href="/<?php echo $package; ?>/<?php echo $area; ?>/<?php echo $resource; ?>">update</a></li>
	<li><a href="/<?php echo $package; ?>/<?php echo $area; ?>/<?php echo $resource; ?>">destroy</a></li>
</ul>