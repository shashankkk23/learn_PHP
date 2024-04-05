<?php
$name = 'shashank-Tiwari';
$h2_color = "gray";

echo "<h1 style='text-align: center;'>php-with-html</h1>";
echo "<li>php-with-html</li>";
echo "<p style='color:red' >php-with-html</p>";

echo "<p style='color:yellow' >$name</p>";

?>
<h6>
    my name is
    <?php echo $name ?>
</h6>

<h3 style="color:<?php echo $h2_color ?>">hii <?php echo $name ?></h3>
<h3 style="color:<?php echo $h2_color?>">hey <?php echo $name ?></h3>
<h3 style="color:<?php echo $h2_color?>">hie <?php echo $name ?></h3>
<h3 style="color:<?php echo $h2_color ?>">hello <?php echo $name ?></h3>