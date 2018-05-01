<?php
class JobsApplied{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    /* INSERT */

    public function addJobsApplied($data){
        //Prepare query
        $this->db->query('INSERT INTO applied (id_profile, job_title, company, technologies, location, link, website) VALUES (:id_profile, :job_title, :company, :technologies, :location, :link, :website)');
        //Bind values
        $this->db->bind(':id_profile', $data['id_profile']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':technologies', $data['technologies']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':link', $data['link']);
        $this->db->bind(':website', $data['website']);

        //Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

  
    /* RETRIEVE */

    public function getJobsApplied(){
        $this->db->query('SELECT * FROM applied ORDER BY date_applied DESC');
        
        $results = $this->db->resultset();

        return $results;
    }

   


}