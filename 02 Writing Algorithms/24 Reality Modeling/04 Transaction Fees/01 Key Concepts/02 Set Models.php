<p>The brokerage model of your algorithm automatically sets the fee model for each security, but you can override it. To manually set the fee model of a security, call the <code>SetFeeModel</code> method on the <code>Security</code> object.</p>


<div class="section-example-container">
    <pre class="csharp">// In Initialize
var security = AddEquity("SPY");
security.SetFeeModel(new ConstantFeeModel(0));</pre>
    <pre class="python"># In Initialize
security = self.AddEquity("SPY")
security.SetFeeModel(ConstantFeeModel(0))</pre>
</div>

<p>You can also set the fee model in a security initializer. If your algorithm has a dynamic universe, use the security initializer technique. In order to initialize single security subscriptions with the security initializer, call <code>SetSecurityInitializer</code> before you create the subscriptions.</p>

<div class="section-example-container">
<pre class="csharp">// In Initialize
SetSecurityInitializer(CustomSecurityInitializer);
AddEquity("SPY");

private void CustomSecurityInitializer(Security security)
{
    security.SetFeeModel(new ConstantFeeModel(0));
}
</pre>
<pre class="python"># In Initialize
self.SetSecurityInitializer(self.CustomSecurityInitializer)
self.AddEquity("SPY")

def CustomSecurityInitializer(self, security: Security) -&gt; None:
    security.SetFeeModel(ConstantFeeModel(0))
</pre>
</div>

<?php echo file_get_contents(DOCS_RESOURCES."/reality-modeling/security-initializers.html");?>

<p>To extend upon the default security initializer instead of overwriting it, create a custom <code>BrokerageModelSecurityInitializer</code>.</p>

<?php
include(DOCS_RESOURCES."/reality-modeling/brokerage-mondel-security-init.php");
$overwriteCodePy = "security.SetFeeModel(ConstantFeeModel(0))";
$overwriteCodeC = "security.SetFeeModel(new ConstantFeeModel(0));";
$getBrokerageModelInitCodeBlock($overwriteCodePy, $overwriteCodeC);
?>

<p>In live trading, the <code>SetFeeModel</code> method isn't ignored. If we use order helper methods like <code>SetHoldings</code>, the fee model helps to calculate the order quantity. However, the algorithm doesn't update the <a href="/docs/v2/writing-algorithms/portfolio/cashbook">cash book</a> with the fee from the fee model. The algorithm uses the actual fee from the brokerage to update the cash book.</p>

<p>To view all the pre-built fee models, see <a href="/docs/v2/writing-algorithms/reality-modeling/transaction-fees/supported-models">Supported Models</a>.</p>