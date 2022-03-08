<p>The backtest results page includes a <span class="tab-name">Share</span> tab that enables you to share your backtest results. Under the <span class="tab-name">Share</span> tab, if you click <span class="button-name">Make public</span>, your backtest results become public so you can share them with others. The following methods of sharing backtest results are available. After you've made your backtest results public, they can't be made private again because someone may have already cloned your project.</p>

<p> If you share a backtest result, it's public domain and always stored.</p>

<h4>Backtest Reports</h4>
<p>The <span class="tab-name">Share</span> tab displays a link to your <a href="/docs/v2/our-platform/user-guides/report/backtesting">backtest report</a>. Share the link with others to give them access to your backtest report.</p>

<h4>Embedded Backtest Results</h4>
<p>The <span class="tab-name">Share</span> tab displays a link to an embedded backtest result. The following widget is an example:</p>

<div class="qc-embed-frame python" style="display: inline-block; position: relative; width: 100%; min-height: 100px; min-width: 300px;"><div class="qc-embed-dummy" style="padding-top: 56.25%;"></div><div class="qc-embed-element" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;"><iframe class="qc-embed-backtest" src="https://www.quantconnect.com/terminal/processCache?request=embedded_backtest_4659d3886ac40cd512ff32bc4dcb3ec4.html" style="max-width: calc(100vw - 30px); max-height: 100vw; overflow: hidden;" scrolling="no" width="100%" height="100%"></iframe></div></div>

<div class="qc-embed-frame csharp" style="display: inline-block; position: relative; width: 100%; min-height: 100px; min-width: 300px;"><div class="qc-embed-dummy" style="padding-top: 56.25%;"></div><div class="qc-embed-element" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;"><iframe class="qc-embed-backtest" src="https://www.quantconnect.com/terminal/processCache?request=embedded_backtest_f13408735fdd403e5d772ec0cca92743.html" style="max-width: calc(100vw - 30px); max-height: 100vw; overflow: hidden;" scrolling="no" width="100%" height="100%"></iframe></div></div>

<p>The following table describes the tabs of the embedded backtest result:</p>

<table class="qc-table table" id="order-quotas-table">
   <thead>
      <tr>
         <th style="width: 25%;">Tab</th>
         <th style="width: 75%;">Content</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td><span class="tab-name">Charts</span></td>
         <td>Some of the <a href="/docs/v2/our-platform/user-guides/backtesting/results#04-Built-in-Charts">built-in</a> and <a href="/docs/v2/our-platform/user-guides/backtesting/results#05-Custom-Charts">custom charts</a> that plot the backtest performance</td>
      </tr>
      <tr>
         <td><span class="tab-name">Statistics</span></td>
         <td>The <a href="/docs/v2/our-platform/user-guides/backtesting/results#06-Key-Statistics">overall statistics</a> of the backtest</td>
      </tr>
      <tr>
         <td><span class="tab-name">Code</span></td>
         <td>The project files that produced the backtest</td>
      </tr>
   </tbody>
</table>

<p>You can share the embedded backtest result with others by sharing the link to the result, attaching the result to a forum discussion, or displaying the result on a website. To share a link to the embedded backtest result, copy the link on the backtest results page. Anyone with the link can view your backtest results and project files. To attach the embedded backtest result to a forum discussion, see <a href="/docs/v2/our-platform/tutorials/community/using-the-forum#03-Create-New-Discussions">Create New Discussions</a> or <a href="/docs/v2/our-platform/tutorials/community/using-the-forum#04-Post-Comments">Post Comments</a>. To display the embedded backtest result on a website, add the script from the backtest results page to your website source code.</p>

<?php
echo file_get_contents(DOCS_RESOURCES."/tutorials/backtesting/share-backtests.php");
?>