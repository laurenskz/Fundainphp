<?php

/**
 * Created by PhpStorm.
 * User: Laurens
 * Date: 27-5-2016
 * Time: 11:16
 */
class Database
{
    public $conn;
    public $text = "Hallo meneer";
    public $result;

    function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "funda");
    }

    public function processHouseQuery($house)
    {
        if(!isset($house["straatnaam"]))return;
        $query = sprintf(
            "SELECT w.*, m.Name 
            FROM `wo` as w
            JOIN `mkantoor` as m
            ON w.mkid = m.mkid
            WHERE w.address LIKE '%s%%' 
            AND w.address LIKE '%%%s' 
            AND w.PC = '%s'
            AND w.CITY = '%s'
            AND w.soortbouw = %s",$house["straatnaam"],($house["huisnummer"].$house["toevoeging"]),$house["postcode"],$house["plaatsnaam"],$house["woning"]);
        $this->result = mysqli_query($this->conn,$query);
        
    }
}