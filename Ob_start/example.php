<?php
ob_start();
$items = ['Home', 'Blog', 'FAQ', 'Contact'];
foreach($items as $item)
{?>
    <li><?php echo $item ?></li>
<?php }
// Back in PHP land
// $items_lists contains all the HTML captured by the output buffer
$items_li_html = ob_get_clean();
?>

<!-- Menu 1: We can now re-use that (multiple times if required) in our HTML. -->
<ul class="header-nav">
    <?php echo $items_li_html ?>
</ul>
<!-- Menu 2 -->
<ul class="footer-nav">
    <?php echo $items_li_html ?>
</ul>



