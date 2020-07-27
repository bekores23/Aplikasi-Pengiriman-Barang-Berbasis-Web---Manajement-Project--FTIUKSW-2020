<?php
class Admin
{
    private $id;
    private $password;
    private $branch;
    private $lat;
    private $lon;

    function __construct($id, $password, $branch, $lat, $lon)
    {
        $this->id = $id;
        $this->password = $password;
        $this->branch = $branch;
        $this->lat = $lat;
        $this->lon = $lon;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
    function getPassword()
    {
        return $this->password;
    }
    function setBranch($branch)
    {
        $this->branch = $branch;
    }
    function getBranch()
    {
        return $this->branch;
    }
    function setLat($lat)
    {
        $this->lat = $lat;
    }
    function getLat()
    {
        return $this->lat;
    }
    function setLon($lon)
    {
        $this->lon = $lon;
    }
    function getLon()
    {
        return $this->lon;
    }
}
?>