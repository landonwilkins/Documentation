<p>While your cloud algorithms run, you can liquidate their positions and stop their exeuction.</p>

<h4>Liquidate Positions</h4>
<?php
include(DOCS_RESOURCES."/trading-and-orders/liquidate-positions.php");
$getLiquidatePositionsText(true);
?>

<p>To stop an algorithm, open a terminal in your <a href='/docs/v2/lean-cli/initialization/directory-structure#02-lean-init'>CLI root directory</a> and then run <code>lean cloud live liquidate "My Project"</code>.</p>
<div class="cli section-example-container">
<pre>$ lean cloud live liquidate "My Project"</pre>
</div>

<p>For more information about the command options, see <a href='/docs/v2/lean-cli/api-reference/lean-cloud-live-liquidate#04-Options'>Options</a>.</p>

<h4>Stop Algorithms</h4>
<?php
include(DOCS_RESOURCES."/trading-and-orders/stop-algorithm.php");
$getStopAlgorithmText("CLI Cloud");
?>

<p>To stop an algorithm, open a terminal in your <a href='/docs/v2/lean-cli/initialization/directory-structure#02-lean-init'>CLI root directory</a> and then run <code>lean cloud live stop "My Project"</code>.</p>
<div class="cli section-example-container">
<pre>$ lean cloud live stop "My Project"</pre>
</div>

<p>For more information about the command options, see <a href='/docs/v2/lean-cli/api-reference/lean-cloud-live-stop#04-Options'>Options</a>.</p>