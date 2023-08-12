<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

        function authenticate($email , $password){
            $query = $this->db->query("SELECT *  FROM `admin` where email='$email' AND password = '$password' ");
            if ($query->num_rows() > 0) {
                return $query->result();
            }
                return 0;

        }
        public function getResidentCount()
{
    $this->db->from('resident');
    $count = $this->db->count_all_results();
    return $count;
}

public function getBlotterCount()
{
    $this->db->from('blotter');
    $count = $this->db->count_all_results();
    return $count;
}
        function fetch_all($table){
            $query = $this->db->query("SELECT * FROM $table ");
            return $query->result();

        }
        public function getResidents()
        {
            $query = $this->db->get('resident');
            return ($query->num_rows() > 0) ? $query->result() : array();
        }
        public function getBlotter()
        {
            $query = $this->db->get('blotter');
            return ($query->num_rows() > 0) ? $query->result() : array();
        }
        public function get_resident_data_by_id($resident_id) {
            return $this->db->get_where('resident', array('resident_id' => $resident_id))->row();
        }
    
        function fetch_info() {
            $query = $this->db->query("SELECT * FROM `users` ");
            return $query->result();

        }
        public function get_all_officials()
        {
            // Fetch all records from the "official" table
            $query = $this->db->get('brgyofficial');
    
            // Return the result as an array of objects
            return $query->result();
        }
        public function getBrgyofficial()
        {
            return $this->db->get('brgyofficial')->result();
        }

        public function getBarangayCaptainFullName() {
            // Assuming 'brgyofficials' is your table name and 'position' is the column indicating the position
            $query = $this->db->get_where('brgyofficial', array('position' => 'Barangay Captain'));
        
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $fullName = $row->first_name . ' ' . $row->middle_name . ' ' . $row->last_name;
                return $fullName;
            } else {
                return ''; // Return an empty string if no Barangay Captain found
            }
        }
        public function getBrgyofficialInfo($brgyofficialId)
        {
            return $this->db->get_where('brgyofficial', array('brgyofficial_id' => $brgyofficialId))->row();
        }
     

        function fetch_webinfo() {
            $query = $this->db->query("SELECT * FROM `cath` ");
            return $query->result();

        }

        function insert_data($data) {
            $this->db->insert('users', $data);
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                $error = $this->db->error();
                error_log('Database Error: ' . $error['message']);
                return FALSE;
            }
        }
        public function getLogoImagePath() {
            // Assuming 'image' is the field name in your table
            $query = $this->db->select('image')->get('brgysettings');
            $result = $query->row();
    
            return $result->image;
        }
        function insert_webdata($data) {
            $this->db->insert('cath', $data);
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                $error = $this->db->error();
                error_log('Database Error: ' . $error['message']);
                return FALSE;
            }
        }
        public function insert_brgy_settings($data) {
            return $this->db->insert('brgysettings', $data);
        }
    
        public function get_brgy_settings() {
            return $this->db->get('brgysettings')->row();
        }
        
        public function get_list()
        {
            $search_query = $this->input->get('search_query');
            $this->db->select('*');
            $this->db->from('users');
            
            if (!empty($search_query)) {
                $this->db->like('field_name', $search_query);
                // Add other relevant search conditions
            }
            
            $query = $this->db->get();
            $list = $query->result();
            
            return $list;
        }
    
		                                               
        public function getSettings() {
            $query = $this->db->get_where('users', array('resident_id' => 1));
            return $query->row_array();
        }
       
        public function count_male_residents() {
            $this->db->where('sex', 'Male');
            $query = $this->db->get('resident');
            return $query->num_rows();
        }
        public function count_female_residents() {
            $this->db->where('sex', 'Female');
            $query = $this->db->get('resident');
            return $query->num_rows();
        }
    
        // Count senior residents (assuming you have a column for age)
        public function count_senior_residents() {
            $this->db->where('birth_date <=', date('Y-m-d', strtotime('-60 years')));
            $query = $this->db->get('resident');
            return $query->num_rows();
        }
}

?>
