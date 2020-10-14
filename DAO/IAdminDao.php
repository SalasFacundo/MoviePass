<?php
    namespace DAO;

    use Models\Admin as Admin;

    interface IAdminDao
    {
        function getByAdminName($adminName);
    }
    
?>