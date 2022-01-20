<div class="section-header my-4 py-4">
	<i class="fas fa-book-open fs-1 d-flex justify-content-center mb-2"></i>
	<h2 class="fw-bold text-center">Kurikulum</h2>
	<span class="d-flex justify-content-center text-center px-2">Informasi mengenai kurikulum dan kalender akademik
		sekolah.</span>
</div>
<div class="row justify-content-md-center">
	<div class="col-md-7 mb-5">
		<table class="table table-bordered border-dark shadow">

			<tr class="text-center">
				<th class="align-middle" rowspan="2">Komponen</th>
				<th colspan="3">Kelas Dan Alokasi Waktu</th>
			</tr>
			<tr class="text-center">
				<th>VII</th>
				<th>VIII</th>
				<th>IX</th>
			</tr>

			<tr>
				<th>A. Mata Pelajaran</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>1. Pendidikan Agama</td>
				<td class="text-center">3</td>
				<td class="text-center">3</td>
				<td class="text-center">3</td>
			</tr>
			<tr>
				<td>2. Pendidikan Kewarganegaraan</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
			</tr>
			<tr>
				<td>3. Bahasa Indonesia</td>
				<td class="text-center">4</td>
				<td class="text-center">4</td>
				<td class="text-center">5</td>
			</tr>
			<tr>
				<td>4. Bahasa Inggris</td>
				<td class="text-center">4</td>
				<td class="text-center">4</td>
				<td class="text-center">4</td>
			</tr>
			<tr>
				<td>5. Matematika</td>
				<td class="text-center">4</td>
				<td class="text-center">5</td>
				<td class="text-center">5</td>
			</tr>
			<tr>
				<td>6. Ilmu Pengetahuan Alam</td>
				<td class="text-center">4</td>
				<td class="text-center">4</td>
				<td class="text-center">5</td>
			</tr>
			<tr>
				<td>7. Ilmu Pengetahuan Sosial</td>
				<td class="text-center">4</td>
				<td class="text-center">4</td>
				<td class="text-center">4</td>
			</tr>
			<tr>
				<td>8. Seni Budaya/Kesenian</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
			</tr>
			<tr>
				<td>9. Pendidikan Jasmani, Olahraga dan Kesehatan</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
				<td class="text-center">3</td>
			</tr>
			<tr>
				<td>10. Teknologi Informasi dan Komunikasi</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
			</tr>
			<tr>
				<th>B. Muatan Lokal</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>1. Bahasa Sunda</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
			</tr>
			<tr>
				<td>2. Pendidikan Lingkungan Hidup</td>
				<td class="text-center">2</td>
				<td class="text-center">-</td>
				<td class="text-center">-</td>
			</tr>
			<tr>
				<td>3. Keterampilan (Tata Boga, Tata Busana, ELektro)</td>
				<td class="text-center">-</td>
				<td class="text-center">1</td>
				<td class="text-center">2</td>
			</tr>
			<tr>
				<th>C. Pengembangan Diri</th>
				<th class="text-center">2</th>
				<th class="text-center">2</th>
				<th class="text-center">2</th>
			</tr>
			<tr>
				<td>1. Pembinaan Wali Kelas</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">2</td>
			</tr>
			<tr>
				<td>2. BP/BK</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
			</tr>
			<tr class="text-center">
				<th>Jumlah</th>
				<th>36</th>
				<th>36</th>
				<th>41</th>
			</tr>
		</table>
	</div>
</div>
<div class="bg-light py-4">
	<div class="section-header py-4">
		<i class="far fa-calendar-alt fs-1 d-flex justify-content-center mb-2"></i>
		<h2 class="fw-bold text-center">Kalender Akademik</h2>
	</div>


	<div class="row justify-content-md-center">
		<div class="col-md-7 mb-5">
			<table class="table table-bordered border-dark shadow">
				<tr class="text-center">
					<th style="width: 50%">Kegiatan</th>
					<th style="width: 50%">Waktu</th>
				</tr>
				<?php foreach ($akademik as $a) : ?>
				<tr>
					<td><?= $a['kegiatan'] ?></td>
					<td class="text-center">
						<?php if ($a['tanggal2'] == '0000-00-00') : ?>
						<?= format_indo(date("Y m d", strtotime($a['tanggal1']))) ?>
						<?php else : ?>
						<?= format_indo(date("Y m d", strtotime($a['tanggal1']))) ?> -
						<?= format_indo(date("Y m d", strtotime($a['tanggal2']))) ?>
						<?php endif; ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
