<?php 
namespace Phppot\Model;

use Phppot\Datasource;

class FAQ
{
    private $ds;
    
    function __construct()
    {
        require_once __DIR__ . './../lib/DataSource.php';
        $this->ds = new DataSource();
    }
    
    /**
     * to get the interview questions
     *
     * @return array result record
     */
    function getFAQ() 
    {
        $query = "SELECT * from crud";
        $result = $this->ds->select($query);
        return $result;
    }

    function getFAQ1() 
    {
        $query = "SELECT * from crud where status='Complete'";
        $result = $this->ds->select($query);
        return $result;
    }
    
    function getFAQ2() 
    {
        $query = "SELECT * from crud where status='Pending'";
        $result = $this->ds->select($query);
        return $result;
    }
    
    
    /**
     * to edit redorcbased on the question_id
     *
     * @param string $columnName
     * @param string $columnValue
     * @param string $questionId
     */
    function editRecord($columnName, $columnValue, $questionId) 
    {
        $query = "UPDATE crud set " . $columnName . " = ? WHERE  id = ?";
        
        $paramType = 'si';
        $paramValue = array(
            $columnValue,
            $questionId
        );
        $this->ds->execute($query, $paramType, $paramValue);
    }
}