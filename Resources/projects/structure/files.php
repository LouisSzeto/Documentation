<p>New projects contain code files <?= $localPlatform ? "(<span class='public-file-name'>.py</span> or <span class='public-file-name'>.cs</span>), notebook files (<span class='public-file-name'>.ipynb</span>), and some configuration files (<span class='public-file-name'>.json</span>)" : "(<span class='public-file-name'>.py</span> or <span class='public-file-name'>.cs</span>) and notebook files (<span class='public-file-name'>.ipynb</span>)" ?>. Run backtests with code files and launch the Research Environment with notebook files. <?=$localPlatform ? "In the QuantConnect Cloud Platform, code" : "Code"?> files must stay within your <a href='/docs/v2/cloud-platform/projects/files#09-Size-Quotas'>size quotas</a>. <? if ($localPlatform) { ?>In your local workspace, the code files and notebook files can be any size. <? } ?>To keep files small, files can import code from other code files. To aid navigation, you can <a href='<?=$renameFilesLink?>'>rename, move, and delete files</a> in <?=$localPlatform ? "VS Code" : "the web IDE"?>. Notebook files save the input cells, but not the output cells.</p>

