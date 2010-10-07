<?php
// $Id: box.tpl.php,v 1.1.2.1 2008/07/08 17:20:33 stevek Exp $

/**
 * @file box.tpl.php
 *
 * Theme implementation to display a box.
 *
 * Available variables:
 * - $title: Box title.
 * - $content: Box content.
 *
 * @see template_preprocess()
 */
?>
<div class="box">

<?php if ($title): ?>
  <h3><?php echo $title ?></h3>
<?php endif; ?>

  <div class="content"><?php echo $content ?></div>
</div>
