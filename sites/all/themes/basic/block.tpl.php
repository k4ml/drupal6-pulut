<?php
// $Id: block.tpl.php,v 1.1.4.7.2.1 2009/06/04 19:31:32 couzinhub Exp $

/**
 * @file block.tpl.php
 *
 * Theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $block->content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: This is a numeric id connected to each module.
 * - $block->region: The block region embedding the current block.
 *
 * Helper variables:
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 */
?>
<div id="block-<?php echo $block->module .'-'. $block->delta ?>" class="block block-<?php echo $block->module .' '. $block_zebra .' '. $block->region ?> clearfix">
	<div class="block-inner">

		<?php if ($block->subject): ?>
		  <h3 class="title block-title"><?php echo $block->subject; ?></h3>
		<?php endif; ?>
		
		<div class="content">
		  <?php echo $block->content; ?>
		</div>
		
	  <?php echo $edit_links; ?>

	</div> <!-- /block-inner -->
</div> <!-- /block -->