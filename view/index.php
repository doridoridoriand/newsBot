<?php
//index.php
/* # 掲載する内容
   - パース先一覧
   - いつ実行したか
*/
require ('./elements/header.php');
require ('./helpers/parseListViewHelper.php');

echo '
<div class="container">
	<h2 class="page-header">現在パースしているGoogle Alert一覧</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>保存名称</th>
					<th>RSSのURL</th>
					<th>RSSの最終取得日時</th>
					<th>クローラー稼働状況</th>
				</tr>
			</thead>
			<tbody>';
				$parseListViewHelper->parseListConverter();
echo '
			</tbody>
		</table>
	</div>
</div class="container">';
