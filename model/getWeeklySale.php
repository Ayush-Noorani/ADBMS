<?php 

class getWeeklySale extends db {

    public function lekeaa(){
       $result = $this->connect()->query("SELECT * FROM bills");
       return $result;
    }

    public function getWeeklyCollection(){
        $mysqli = $this->connect();
        $query = $mysqli->query("SELECT SUM(price) AS sum FROM sale");
        $result = $query->fetch_assoc();
        return $result;
    }

    public function datewiseSale($s_date, $f_date){
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare('SELECT * FROM sale WHERE date_of_transaction BETWEEN ? AND ? ;');
        $stmt->bind_param("ss",$s_date,$f_date);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
?>