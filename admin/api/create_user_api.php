<?php @session_start();
    include("dbconnect.php");
    class create_user
    {
        public $uid;
        public $uname;
        public $umobile;
        public $uemail;
        public $uaddress;
        public $utype;
        public $con;
        function __construct()
        {
            $this->con=$GLOBALS["con"];
        }
        function add()
        {
            $sql="insert into user_info(uname,umobile,uemail,uaddress,utype) 
            values('$this->uname','$this->umobile','$this->uemail','$this->uaddress','user')";

            mysqli_query($this->con,$sql);
        }
        function update()
        {
            $sql="update user_info set uname='$this->uname',umobile='$this->umobile',uemail='$this->uemail',uaddress='$this->uaddress',utype='$this->utype' where uid='$this->uid'" or die("Query Error for update");
		    mysqli_query($this->con,$sql);
        }
        function delete()
        {
            $sql="delete from user_info where uid='$this->uid'" or die("Query Error");
            mysqli_query($this->con,$sql);
        }
        function readAll()
        {
            $sql="select * from user_info order by uname";
		    $result=mysqli_query($this->con,$sql);
		    return($result);
        }
        function readOne()
        {
            $sql="select uid,uname,umobile,uemail,u_address,user_type from user_info where uid='$this->uid'";
            $result=mysqli_query($this->con,$sql);
            return($result);
        }
    }
?>