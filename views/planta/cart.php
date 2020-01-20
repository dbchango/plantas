<?php 

use yii\helpers\Html;

$this->title = 'Cart';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="item-index">
	<table>
		<thead>
			<tr>
				<td>
					nama barang
				</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $krow) {?>
				<tr>
					<td><?= $row->nombre_planta ?></td>
				</tr>
			<?php }?>
		</tbody>
		<table>
			<?= Html::a('check out',['checkout'])?>
		</table>
		</div>
		<table>
			<thead>
				<tr>
					<td></td>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>	
	</table>
</div>