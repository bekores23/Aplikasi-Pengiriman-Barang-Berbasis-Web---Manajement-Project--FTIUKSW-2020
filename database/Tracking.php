<?php
class Tracking
{
    private $tanggal;
    private $waktu;
    private $cabang;
    private $status;

    function __construct($tanggal, $waktu, $cabang, $status)
    {
        $this->tanggal = $tanggal;
        $this->waktu = $waktu;
        $this->cabang = $cabang;
        $this->status = $status;
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
    function setCabang($cabang)
    {
        $this->cabang = $cabang;
    }
    function getCabang()
    {
        return $this->cabang;
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