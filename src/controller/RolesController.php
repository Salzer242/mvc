<?php
    //namespace src\controller;
    use libs\system\Controller;
    use src\model\RolesDb;

    class RolesController extends Controller
    {
        public function add()
        {
            return $this->view->load("roles/add");
        }
        public function getAll()
        {
            $roles_doa = new RolesDb();
            $roles = $roles_doa->findAll();//array("ROLE_USER", "ROLE_ADMIN");
            return $this->view->load("roles/getAll", $roles);
        }
        public function delete($id)
        {
            echo $id;
            //return $this->view->load("roles/delete");
        }
    }
?>