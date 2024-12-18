<?php 
    class StudentsModel extends Model {

        public function getStudentsFromDB(){
            $q = "SELECT s.*, g.name as `group` FROM students as s
            LEFT JOIN groups as g ON(g.id=s.group_id)";
            return $this->db_select_array($q);
        }

        public function addStudentToDB(){
            $q = $this->insert_db_query($_POST, 'students');
            $this->db_query($q);
        }

        public function deleteStudentFromDB(){
            $q = "DELETE FROM students WHERE id = ".$_POST['delete'];
            $this->db_query($q);
        }
    }
?>