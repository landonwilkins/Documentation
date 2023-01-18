<p>Zerodha supports cash and margin accounts.</p>

<?php echo file_get_contents(DOCS_RESOURCES."/brokerages/set-brokerage-model/zerodha.html"); ?>

<p>Zerodha only supports trading Indian Rupees.</p>
<div class="section-example-container">
    <pre class="csharp">SetAccountCurrency("INR");</pre>
    <pre class="python">self.SetAccountCurrency("INR")</pre>
</div>


<h4>Create an Account</h4>
<p>To create a Zerodha account, follow the <a rel="nofollow" target="_blank" href="https://signup.zerodha.com/">account creation wizard</a> on the Zerodha website.</p>

<p>You will need API credentials to deploy live algorithms with your brokerage account. After you open your Zerodha account, follow these steps to get your API credentials:</p>
<ol>
    <li><a href="https://developers.kite.trade/signup" rel="nofollow" target="_blank">Create a Kite Connect developer account</a>.</li>
    <li>Create an app to get your access key.</li>
    <li>Make a POST request to <code>/session/token</code> with the <code>request_token</code> and <code>checksum</code> (SHA-256 of <code>api_key + request_token + api_secret</code>) and obtain the <code>access_token</code>.</li>
</ol>
<p>For more information about the process, see the <a rel="nofollow" target="_blank" href="https://kite.trade/docs/connect/v3/user/#login-flow">Login flow</a> in the Kite Connect documentation.</p>

<h4>Paper Trading</h4>
<p>Zerodha doesn't support paper trading.</p>