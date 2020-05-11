<?php
    require_once "connect.php";

    function getTable($tableName, $limit = '') {
        global $mysqli;
        connectDB();
        if (gettype($limit) != "integer") $result = $mysqli->query("SELECT * FROM $tableName ORDER BY `ID`");
        else $result = $mysqli->query("SELECT * FROM $tableName ORDER BY `ID` DESC LIMIT $limit");
        closeDB();
        return resultToArray($result);
    }

   function resultToArray($result) {
       $array = array();
       while(($row = $result->fetch_assoc()) != false) {
           $array[] = $row;
       }
       return $array;
   }

   function toDateFormat($date) {
        $date_m = array('', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
        $exp_date = getdate(strtotime($date));
        $result = $date_m[$exp_date['mon']]." ".$exp_date['mday'].", ".$exp_date['year'];
        return $result;
   }

   function getMenu($isCategory) {
        global $mysqli;
        connectDB();
        $result = $mysqli->query("SELECT * FROM `menu` WHERE `IsCategory` = $isCategory");
        closeDB();
        return resultToArray($result); 
   }
?>