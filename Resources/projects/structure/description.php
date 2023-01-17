<?php
$getDescriptionText = function($isDesktopDocs)
{
    $reportLink = $isDesktopDocs ? "backtest reports" : "<a href='/docs/v2/cloud-platform/backtesting/report'>backtest reports</a>";
    echo "
<p>You can give a project a description to provide a high-level overview of the project and its functionality. Descriptions make it easier to return to old projects and understand what is going on at a high level without having to look at the code. The project description is also displayed at the top of {$reportLink}, which you can create after your backtest completes.</p>    
    ";
}
?>
