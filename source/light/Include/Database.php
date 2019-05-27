 <?php

class Database
{
    var $_connection;
    var $show_error = true;
    

    // Constructor Loads on Every Page an Instance Is Made.
    public function __construct()
    {
        $this->_connection = new mysqli("localhost", "root", "akanbiakanbi", "result");

        // Error handling
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysql_connect_error(),
                E_USER_ERROR); 
        }
    }

    ///////////// Query Log /////////////////////////////////////////////////////////////////////////////////////
    ///
    public function select_all($columns, $table, $where = null, $limit = null, $order = null)
    {
        $where_clause = ($where) ? "WHERE $where" : '';
        $limit_clause = ($limit) ? "LIMIT $limit" : '';
        $order_clause = ($where) ? "ORDER  $order" : '';

        $query = "SELECT $columns FROM $table $where_clause $limit_clause $order_clause";

        $result = $this->_connection->query($query);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }
    }
    public function find_all($data){
        $sql="SELECT * FROM $data";
         $result = $this->_connection->query($sql);
        if ($result) {
            return $result->fetch_assoc();// returns an assoc. array
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }
    }

    public function Select_by_id($table, $id)
    {

        $sql = "SELECT * FROM $table ";
        $sql .= "WHERE stud_id='" . $this->_connection->escape_string($id) . "' ";

        // echo $sql;
        $result = $this->_connection->query($sql);
        if ($result) {
            return $result->fetch_assoc();// returns an assoc. array
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }

    }

    public function insert($table, $coloumn1, $coloumn2, $coloumn3, $coloumn4, $coloumn5, $coloumn6, $coloumn7){
        $sql = "INSERT INTO $table ";
        $sql .= "(roll_no, course_name, course_code, Unit, department, Ca, Exam)";
        $sql .= "VALUES (";
        $sql .= "'" . $this->_connection->escape_string($coloumn1) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn2) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn3) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn4) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn5) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn6) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn7) . "'";
        $sql .= ")";
        $result = $this->_connection->query($sql);
    }

    public function insert_student($table, $coloumn1, $coloumn2, $coloumn3, $coloumn4, $coloumn5, $coloumn6, $coloumn7, $coloumn8, $coloumn9, $coloumn10, $coloumn11, $coloumn12)
    {

        $sql = "INSERT INTO $table ";
        $sql .= "(first_name, last_name, roll_no, email, registration_date, class, gender, mobile_no, parent_name, parent_no, d_o_b, address) ";
        $sql .= "VALUES (";
        $sql .= "'" . $this->_connection->escape_string($coloumn1) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn2) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn3) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn4) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn5) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn6) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn7) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn8) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn9) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn10) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn11) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn12) . "'";
        $sql .= ")";
        $result = $this->_connection->query($sql);

    }

        public function insert_prof($table, $coloumn1, $coloumn2, $coloumn3, $coloumn4, $coloumn5, $coloumn6, $coloumn7, $coloumn8, $coloumn9, $coloumn10, $coloumn11, $coloumn12)
    {

        $sql = "INSERT INTO $table ";
        $sql .= "(first_name, last_name, email, joiningdate, password, Designation, Department, Gender, Mobile_no, birth_date, Address, education) ";
        $sql .= "VALUES (";
        $sql .= "'" . $this->_connection->escape_string($coloumn1) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn2) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn3) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn4) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn5) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn6) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn7) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn8) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn9) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn10) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn11) . "',";
        $sql .= "'" . $this->_connection->escape_string($coloumn12) . "'";
        $sql .= ")";
        $result = $this->_connection->query($sql);

    }

    public function select($data)
    {
        $array = array();
        $sql = " SELECT * FROM ".$data."";
        $result = $this->_connection->query($sql);

        while ($row = $result->fetch_assoc()) {
            $array[] = $row;
        }

        return $array;
    }

    public function select_where($table_name , $where_condition){
        $condition = '';
        $array = array();

        foreach ($where_condition as $key => $value){
            $condition .= $key . " = '".$value."' AND ";
        }
        $condition = substr($condition,0,-5);

        $sql = "SELECT * FROM ".$table_name."WHERE".$condition;

        $result = $this->_connection->query($sql);

        while ($row = fetch_assoc($result)){
            $array = $row ;
        }

        return $array;
    }
  
    public function update($table, $data, $where = null){
        $data = array_map([$this, 'prepare'], $data);

        $set_values = '';
        foreach ($data as $column => $value) {
            if($set_values != '') $set_values .= ', ';
            $set_values .= "$column = $value";
        }

        $where_clause = $where? "WHERE $where" : ''; 
        $query = "UPDATE $table SET $set_values $where_clause";
        $updated = $this->_connection->query($query);

        if($updated){
            return true;
        }elseif($this->show_error){
            die($this->_connection->error);
        }
    }

    public function copy($table,$value){

        $query = "SELECT * FROM $table where roll_no = '$value' ";

        $result = $this->_connection->query($query);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }
    }

    public function customQuery($query, $single_row = false){
        $result = $this->_connection->query($query);

        if ($result) {
            return ($single_row)?  $result->fetch_assoc() : $result->fetch_all(MYSQLI_ASSOC);
        } elseif ($this->show_error) {
            die($this->_connection->error);
        }
    }

    public function delete($table, $where = null){
        $where_clause = $where? "WHERE $where" : '';
        echo $query = "DELETE FROM $table $where_clause";
        $deleted = $this->_connection->query($query);

        if($deleted){
            return true;
        }elseif($this->show_error){
            die($this->_connection->error);
        }
    }

    public function prepare($var){
        if(is_null($var)){
            return 'NULL';
        }else{
            $var = addslashes(trim($var));
            return "'$var'";
        }
    }
    public function grade($value){
        if ($value>=75 && $value<=100) {
            $A1=4.00;
            echo "A1";
        }elseif ($value >=70 && $value <=74) {
            $A2 = 3.50;
            echo "A2";
        }elseif ($value >=65 && $value <=69) {
            $B1 = 3.50;
            
            echo "B1";
        }elseif ($value >=60 && $value <=64) {
           $B2 = 3.25;
           echo "B2";
        }elseif ($value >=55 && $value <=59) {
            $C1 = 2.75;
            echo "C1";
        }elseif ($value >=45 && $value <=49) {
            $C2 = 2.50;
            echo "C2";
        }elseif ($value >=40 && $value <=44) {
            $D1 = 2.25;
            echo "D1";
        }elseif ($value >=35 && $value <=39) {
           $D2 = 2.00;
           echo "D2";
        }elseif ($value >=30 && $value <=34) {
            $E1 = 1.75;
            echo "E1";
        }elseif ($value >=25 && $value <=29) {
            $E2 = 1.50;
            echo "E2";
        }elseif ($value >=20 && $value <=24) {
            $G1 = 1.25;
            echo "G1";
        }elseif ($value >=0 && $value <=19) {
           $F = 1.00;
           echo "F"; 
        }
        
    }
}



// Grade point = Course unit * lettered grade point