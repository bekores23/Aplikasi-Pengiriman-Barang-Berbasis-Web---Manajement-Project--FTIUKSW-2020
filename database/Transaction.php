<?php
class Transaction
{
    private $kode_resi;
    private $hari;
    private $tanggal;
    private $waktu;
    private $kota_asal;
    private $kota_tujuan;
    private $nama_pengirim;
    private $alamat_pengirim;
    private $no_pengirim;
    private $nama_penerima;
    private $alamat_penerima;
    private $no_penerima;
    private $berat;
    private $deskripsi;
    private $jnspengemasan;
    private $jnspengiriman;
    private $biaya;
    private $status;
    
    function __construct($kode_resi,$hari,$tanggal,$waktu,$kota_asal,$kota_tujuan,$nama_pengirim,$alamat_pengirim,$no_pengirim,$nama_penerima,$alamat_penerima,$no_penerima,$berat,$deskripsi,$jnspengemasan,$jnspengiriman,$biaya,$status) {
        $this->kode_resi = $kode_resi;
        $this->hari = $hari;
        $this->tanggal = $tanggal;
        $this->waktu = $waktu;
        $this->kota_asal = $kota_asal;
        $this->kota_tujuan = $kota_tujuan;
        $this->nama_pengirim = $nama_pengirim;
        $this->alamat_pengirim = $alamat_pengirim;
        $this->no_pengirim = $no_pengirim;
        $this->nama_penerima = $nama_penerima;
        $this->alamat_penerima = $alamat_penerima;
        $this->no_penerima = $no_penerima;
        $this->berat = $berat;
        $this->deskripsi = $deskripsi;
        $this->jnspengemasan = $jnspengemasan;
        $this->jnspengiriman = $jnspengiriman;
        $this->biaya = $biaya;
        $this->status = $status;
    }
    function setKode_resi($kode_resi)
    {
        $this->kode_resi = $kode_resi;
    }
    function getKode_resi()
    {
        return $this->kode_resi;
    }
    function setHari($hari)
    {
        $this->hari = $hari;
    }
    function getHari()
    {
        return $this->hari;
    }
    function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;
    }
    function getTanggal()
    {
        return $this->tanggal;
    }
    function setWaktu($waktu)
    {
        $this->waktu = $waktu;
    }
    function getWaktu()
    {
        return $this->waktu;
    }
    function setKota_asal($kota_asal)
    {
        $this->kota_asal = $kota_asal;
    }
    function getKota_asal()
    {
        return $this->kota_asal;
    }
    function setKota_tujuan($kota_tujuan)
    {
        $this->kota_tujuan = $kota_tujuan;
    }
    function getKota_tujuan()
    {
        return $this->kota_tujuan;
    }
    function setNama_pengirim($nama_pengirim)
    {
        $this->nama_pengirim = $nama_pengirim;
    }
    function getNama_pengirim()
    {
        return $this->nama_pengirim;
    }
    function setAlamat_pengirim($alamat_pengirim)
    {
        $this->alamat_pengirim = $alamat_pengirim;
    }
    function getAlamat_pengirim()
    {
        return $this->alamat_pengirim;
    }
    function setNo_pengirim($no_pengirim)
    {
        $this->no_pengirim = $no_pengirim;
    }
    function getNo_pengirim()
    {
        return $this->no_pengirim;
    }
    function setNama_penerima($nama_penerima)
    {
        $this->nama_penerima = $nama_penerima;
    }
    function getNama_penerima()
    {
        return $this->nama_penerima;
    }
    function setAlamat_penerima($alamat_penerima)
    {
        $this->alamat_penerima = $alamat_penerima;
    }
    function getAlamat_penerima()
    {
        return $this->alamat_penerima;
    }
    function setNo_penerima($no_penerima)
    {
        $this->no_penerima = $no_penerima;
    }
    function getNo_penerima()
    {
        return $this->no_penerima;
    }
    function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }
    function getDeskripsi()
    {
        return $this->deskripsi;
    }
    function setBerat($berat)
    {
        $this->berat = $berat;
    }
    function getBerat()
    {
        return $this->berat;
    }
    function setJnspengemasan($jnspengemasan)
    {
        $this->jnspengemasan = $jnspengemasan;
    }
    function getJnspengemasan()
    {
        return $this->jnspengemasan;
    }
    function setJnspengiriman($jnspengiriman)
    {
        $this->jnspengiriman = $jnspengiriman;
    }
    function getJnspengiriman()
    {
        return $this->jnspengiriman;
    }
    function setBiaya($biaya)
    {
        $this->biaya = $biaya;
    }
    function getBiaya()
    {
        return $this->biaya;
    }
    function setStatus($status)
    {
        $this->status = $status;
    }
    function getStatus()
    {
        return $this->status;
    }
}
?>