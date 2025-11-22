<?php
$f3 = require('../lib/base.php');
require('../config.php');
require('../route.php');

// Route API
// $f3->route('GET /', function() {
//     readfile('index.html');
// });
// $f3->route('GET /api/barang', 'BarangController->getAll');
// $f3->route('POST /api/barang', 'BarangController->create');
// $f3->route('PUT /api/barang/@id', 'BarangController->update');
// $f3->route('DELETE /api/barang/@id', 'BarangController->delete');
// $f3->route('POST /api/barang/import', 'BarangController->importCSV');

// $f3->route('GET /api/harga-spesial/@id_barang', 'HargaSpesialController->getAll');
// $f3->route('POST /api/harga-spesial/@id_barang', 'HargaSpesialController->create');
// $f3->route('DELETE /api/harga-spesial/@id', 'HargaSpesialController->delete');
// $f3->route('GET /api/pembeli', 'PembeliController->getAll');
// $f3->route('POST /api/penjualan', 'PenjualanController->create');

// $f3->route('GET /api/penjualan', 'DetailPenjualanController->getPenjualan');
// $f3->route('GET /api/ringkasan', 'DetailPenjualanController->getRingkasan');

// $f3->route('GET /api/utang', 'UtangController->getUtang');
// $f3->route('POST /api/bayar-utang', 'UtangController->bayarUtang');

$f3->run();
