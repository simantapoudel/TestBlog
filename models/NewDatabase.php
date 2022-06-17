<?php

class Database
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'blog';

    private $con = false; // Check to see if the connection is active
    private $myconn = ""; // This will be our mysqli object
	private $result = array(); // Any results from a query will be stored here
    private $myQuery = "";// used for debugging process with SQL return
    private $numResults = "";// used for returning the number of rows
	
	// Function to make connection to database
	public function connect()
    {
		if (!$this->con) {
			$this->myconn = new mysqli($this->servername,$this->username,$this->password,$this->db);
            if ($this->myconn->connect_errno > 0) {
                array_push($this->result,$this->myconn->connect_error);
                return false; // Problem selecting database return FALSE
            } else {
                $this->con = true;
                return true; // Connection has been made return TRUE
            } 
        } else {  
            return true; // Connection has already been made return TRUE 
        }  	
	}

    public function sql($sql)
    {
		$query = $this->myconn->query($sql);
        $this->myQuery = $sql; // Pass back the SQL
		if ($query) {
			// If the query returns >= 1 assign the number of rows to numResults
			$this->numResults = $query->num_rows;
			// Loop through the query results by the number of rows returned
			for ($i = 0; $i < $this->numResults; $i++) {
				$r = $query->fetch_array();
               	$key = array_keys($r);
               	for ($x = 0; $x < count($key); $x++) {
               		// Sanitizes keys so only alphavalues are allowed
                   	if (!is_int($key[$x])) {
                   		if ($query->num_rows >= 1) {
                   			$this->result[$i][$key[$x]] = $r[$key[$x]];
						} else {
							$this->result = null;
						}
					}
				}
			}
			return true; // Query was successful
		} else {
			array_push($this->result,$this->myconn->error);
			return false; // No rows where returned
		}
	}

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }
	
}