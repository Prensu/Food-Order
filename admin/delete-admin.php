<?php 
    //include constants.php file here 
    include('../config/constants.php');


    //get the id
    $id=$_GET['id'];

    $sql="DELETE FROM tbl_admin WHERE id=$id";

    //3. Redirect to manage Admin page with message (success/error)
    $res=mysqli_query($conn, $sql);

    //check whether the query is executed or not
    if($res==TRUE)
    {
        //Query Executed Successfullly and Admin Deleted
        //echo "Admin Deleted";
        //Create Session Variable to Display Message
        $_SESSION['delete']="<div class='success'>Admin Deleted Successfully.</div>";
        //Redirect to Manage Admin Page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //Failed to Delete Admin
        //echo "Failed to Delete Admin";
        $_SESSION['delete']="<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        //Redirect to Manage Admin Page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }