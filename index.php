<?php 

/**
 *
 *
 * Cash machine test
 *
 */


include 'settings.php';

include FRONT.'head.php';


?>
<h1>Cash machine challenge withdraw</h1>

<form method="post" action="validation.php" enctype="multipart/form-data">
	<input type="numeric" name="withdraw" value="0">
	<input type="submit">
</form>
<div style="display:<?php echo $displayResults;?>">
 <table>
	<tr><th>10.000</th><th>5.000</th><th>1.000</th><th>500</th><th>100</th><th>50</th><th>10</th><th>1</th></tr>
 <?php echo $results;?></table>
</div>
<?php
include FRONT.'head.php';

