<?php

if (!function_exists('formatMataUang')) {
  function formatMataUang($angka, $prefix = 'Rp')
  {
    return $prefix . ' ' . number_format($angka, 0, ',', '.');
  }
}

if (!function_exists('terbilang')) {
  function terbilang($angka)
  {
    $angka = abs((int) $angka);
    $baca = ['', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'];

    return match (true) {
      $angka < 12 => ' ' . $baca[$angka],
      $angka < 20 => terbilang($angka - 10) . ' belas',
      $angka < 100 => terbilang(intval($angka / 10)) . ' puluh' . terbilang($angka % 10),
      $angka < 200 => ' seratus' . terbilang($angka - 100),
      $angka < 1000 => terbilang(intval($angka / 100)) . ' ratus' . terbilang($angka % 100),
      $angka < 2000 => ' seribu' . terbilang($angka - 1000),
      $angka < 1_000_000 => terbilang(intval($angka / 1000)) . ' ribu' . terbilang($angka % 1000),
      $angka < 1_000_000_000 => terbilang(intval($angka / 1_000_000)) . ' juta' . terbilang($angka % 1_000_000),
      $angka < 1_000_000_000_000 => terbilang(intval($angka / 1_000_000_000)) . ' miliar' . terbilang($angka % 1_000_000_000),
      $angka < 1_000_000_000_000_000 => terbilang(intval($angka / 1_000_000_000_000)) . ' triliun' . terbilang($angka % 1_000_000_000_000),
      default => '',
    };
  }
}

if (!function_exists('formatTerbilang')) {
  function formatTerbilang($angka, $suffix = 'rupiah')
  {
    return trim(ucwords(terbilang($angka))) . ' ' . $suffix;
  }
}

// Tambahan format tanggal Indonesia
if (!function_exists('hariIndo')) {
  function hariIndo($tanggal)
  {
    $hari = date('N', strtotime($tanggal));
    return [
      1 => 'Senin',
      2 => 'Selasa',
      3 => 'Rabu',
      4 => 'Kamis',
      5 => 'Jumat',
      6 => 'Sabtu',
      7 => 'Minggu',
    ][$hari] ?? '';
  }
}

if (!function_exists('bulanIndo')) {
  function bulanIndo($bulan)
  {
    return [
      1 => 'Januari',
      2 => 'Februari',
      3 => 'Maret',
      4 => 'April',
      5 => 'Mei',
      6 => 'Juni',
      7 => 'Juli',
      8 => 'Agustus',
      9 => 'September',
      10 => 'Oktober',
      11 => 'November',
      12 => 'Desember',
    ][$bulan] ?? '';
  }
}

if (!function_exists('formatTanggalIndo')) {
  function formatTanggalIndo($tanggal, $withDay = false)
  {
    $date = date('Y-m-d', strtotime($tanggal));
    [$year, $month, $day] = explode('-', $date);
    $formatted = intval($day) . ' ' . bulanIndo((int)$month) . ' ' . $year;

    return $withDay ? hariIndo($date) . ', ' . $formatted : $formatted;
  }
}
