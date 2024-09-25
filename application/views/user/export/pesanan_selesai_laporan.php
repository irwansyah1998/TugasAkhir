<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Administrator');
$pdf->SetTitle('Laporan Pesanan');
$pdf->SetSubject('Tabel Pesanan');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array('times', '', 12));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
foreach ($laporan as $tb) {
	$kode_p = $tb->kode_pesanan;
	$thn = $tb->thn_pesan;
	$bln = $tb->bln_pesan;
	$tgl = $tb->tgl_pesan;
	$nma = $tb->nama_pemesan;
	$n_telp = $tb->no_telp;
	$email = $tb->email_pemesan;
	$alamat = $tb->alamat_pemesan;
	$jns_bj = $tb->jenis_baju;
	$jmlh_3xl = $tb->jumlah_3xl;
	$jmlh_2xl = $tb->jumlah_2xl;
	$jmlh_xl = $tb->jumlah_xl;
	$jmlh_l = $tb->jumlah_l;
	$jmlh_m = $tb->jumlah_m;
	$jmlh_s = $tb->jumlah_s;
	$jmlh_lain = $tb->jumlah_lainnya;
	$ktrng = $tb->keterangan;
	$tot_psn = $tb->total_pesanan;
	$harga = $tb->harga;
	$tot_harga = $tb->total_harga;
	$tlh_byr = $tb->telah_bayar;
	$blm_byr = $tb->belum_bayar;
	$status = $tb->status;
}
$judul='<h3>Laporan Pesanan (Satuan)</h3>';
$pdf->writeHTML($judul, true, false, true, false, 'C');
$tabel='<h4>Data Pemesan :</h4><br><table>';
$tabel.='<tr>
	<td>Nama Pemesan</td>
	<td>: '.$nma.'</td>
	<td></td>
</tr>';
$tabel.='<tr>
	<td>Email Pemesan</td>
	<td>: '.$email.'</td>
	<td></td>
</tr>';
$tabel.='<tr>
	<td>Nomor Telepon</td>
	<td>: '.$n_telp.'</td>
	<td></td>
</tr>';
$tabel.='<tr>
	<td>Kode Pesanan</td>
	<td>: '.$kode_p.'</td>
	<td></td>
</tr>';
$tabel.='<tr>
			<td>Tanggal Pemesanan</td>
			<td>: '.$tgl.'/'.$bln.'/'.$thn.'</td>
			<td></td>
		</tr>';
$tabel.='<tr>
			<td>Jenis Baju</td>
			<td>: '.$jns_bj.'</td>
			<td></td>
		</tr>';
$tabel.='<tr>
			<td>Keterangan</td>
			<td>: '.$ktrng.'</td>
			<td></td>
		</tr>';
$tabel.='</table>';
$tabel.='<h4>Data Pesanan :</h4><br><table>';
$tabel.='<tr>
			<td>Jumlah Ukuran XXXL</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$jmlh_3xl.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Jumlah Ukuran XXL</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$jmlh_2xl.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Jumlah Ukuran XL</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$jmlh_xl.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Jumlah Ukuran L</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$jmlh_l.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Jumlah Ukuran M</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$jmlh_m.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Jumlah Ukuran S</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$jmlh_s.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Jumlah Ukuran Lainnya</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$jmlh_lain.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Jumlah Pesanan</td>
			<td align="center"><b>Pcs</b></td>
			<td align="right"><b>'.$tot_psn.'</b></td>
		</tr>';
$tabel.='<tr>
			<td>Harga /Pcs</td>
			<td align="center"><b>Rp.</b></td>
			<td align="right"><b>'.$harga.'</b></td>
		</tr>';
$tabel.='<tr>
	<td>Total</td>
	<td align="center"><b>Rp.</b></td>
	<td align="right" style="border: 1px solid black;"><b>'.$tot_harga.'</b></td>
</tr>';
$tabel.='<tr>
	<td>Uang DP(Minimal 50% Total Harga)</td>
	<td align="center"><b>Rp.</b></td>
	<td align="right"><b>'.$tlh_byr.'</b></td>
</tr>';
$tabel.='<tr>
	<td>Sisa Yang Harus Dibayar</td>
	<td align="center"><b>Rp.</b></td>
	<td align="right" style="border: 1px solid black;"><b>'.$blm_byr.'</b></td>
</tr>';
$tabel.='</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $tabel, 0, 1, 0, true, 'J', true);
// move pointer to last page
$teks='<p>Status dari pesanan diatas adalah "'.$status.'", sehingga laporan ini dapat digunakan sebagaimana mestinya.</p>';
$pdf->WriteHTMLCell(0, 0, '', '', $teks, 0, 1, 0, true, 'J', true);
$pdf->lastPage();
$ttd='<br><br><br><br><br><br><table>';
$ttd.='<tr>
			<td></td>
			<td></td>
			<td align="center"><b>Mengetahui,</b></td>
		</tr>';
$ttd.='<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>';
$ttd.='<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>';
$ttd.='<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>';
$ttd.='<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>';
$ttd.='<tr>
			<td></td>
			<td></td>
			<td align="center"><b>Manager/Owner</b></td>
		</tr>';
$ttd.='</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $ttd, 0, 1, 0, true, 'J', true);
// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('LPesanan_'.$kode_p.'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
