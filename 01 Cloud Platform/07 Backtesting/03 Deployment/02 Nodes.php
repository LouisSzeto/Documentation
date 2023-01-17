<p>You need an idle backtesting node in your organization to deploy a backtest. You can view the status of all of your organization's nodes and select a specific node to use in the <a href='/docs/v2/cloud-platform/projects/ide#07-Manage-Nodes'>Resources panel</a> of the IDE. Backtesting nodes that are more powerful can run faster backtests and backtest nodes with more RAM can handle more memory-intensive operations like training machine learning models, processing Options data, and managing large universes. The following table shows the specifications of the backtesting node models:</p>

<?php echo file_get_contents(DOCS_RESOURCES."/specs/backtest-nodes.html"); ?>

<p>Refer to the <a href="/pricing">Pricing</a> page to see the price of each backtesting node model. The first organization on each account is given one free B-MICRO backtesting node. B-MICRO nodes have a 20-second delay when you launch backtests, but the delay is removed and the node is replaced when you <a href='/docs/v2/cloud-platform/organizations/billing#07-Change-Organization-Tiers'>upgrade the tier of your organization</a> and <a href='/docs/v2/cloud-platform/organizations/resources#12-Add-Nodes'>add a new backtesting node</a>.</p>
