<?php
class JobFeedback{
    
    private $db;

    public function __contruct($db){
        return $this->db=new Database;
    }

    /* INSERT */
    public function addJobsFeedback($data){
        //Prepare query
        $this->db->query('INSERT INTO feedback (id_applied, status, feedback) VALUES (:id_applied, :status, :feedback)');
        //Bind values
        $this->db->bind(':id_applied', $data['id_applied']);
        $this->db->bind(':status', $data['status']);
        $this->db->bind(':feedback', $data['feedback']);

        //Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /* INSERT */
    


    /* VIEW */
    public function getJobsFeedback($id_applied){
       $this->db->query('SELECT * FROM feedback WHERE id_applied = :id_applied');
       $this->db->bind('id_applied', $id_applied, PDO::PARAM_INT);
       $results = $this->db->resultset();
       return $results;
    }
    /* VIEW */


    
    /* UPDATE */

    /* UPDATE */
    

}
?>