<section id="features">
	<div class="containner">
		<style type="text/css">
		#outtable{
			padding: 20px;
			border:1px solid #e3e3e3;
			width: 600px;
			border-radius: 5px;
		}
		.short{
			width: 50px;
		}
		.normal{
			width: 150px;
		}

		h2{
			margin-top: 40px;
			text-align: center;
			color: lightblue;
		}
		table{
			position: relative;
			border-collapse: collapse;
			width: 80%;
			max-width: 100%;
			margin: auto;
			overflow-x: scroll;
			font-family: arial;
			color: #5E5B5C;
			margin-top: 50px;

		}
		thead th{
			text-align: center;
			padding: 10px;
			

		}
		tbody td{
			border-top: 2px solid #e3e3e3;
			padding: 10px;
			
		}
		tbody tr:nth-child(even){
			background: #F6F5FA;
		}
		tbody tr:hover{
			background-color: lightblue;
		}
	</style>
		<table id="datatables" class="display">
			<thead>
				<h2>Data Surat Masuk</h2>
				<tr>
					<th>Nomor</th>
					<th>Kode Surat</th>
					<th>No Agenda</th>
					<th>Isi Ringkasan</th>
					<th>No_surat</th>
					<th>Tgl_surat</th>
					<th>Tgl_diterima</th>
					<th>Penerima</th>
					<th>Nomor_instansi</th>
				</tr>
			</thead>

			<tbody>
				<?php
                for ($i= 0; $i < count($surat_masuk); $i++) { ?>
				<tr>
					<td> <?= $i+1 ?></td>
					<td> <?= $surat_masuk[$i]['kode_surat']; ?></td>
                    <td> <?= $surat_masuk[$i]['no_agenda']; ?></td>
                    <td> <?= $surat_masuk[$i]['isi_ringkasan']; ?></td>
                    <td> <?= $surat_masuk[$i]['no_surat']; ?></td>
                    <td> <?= $surat_masuk[$i]['tgl_surat']; ?></td>
                    <td> <?= $surat_masuk[$i]['tgl_diterima']; ?></td>
                    <td> <?= $surat_masuk[$i]['penerima']; ?></td>
                    <td> <?= $surat_masuk[$i]['nomor_instansi']; ?></td>

				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</section>