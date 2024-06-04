<?php @session_start();
    include("dbconnect.php");
    class create_item
    {
        public $pid;
        public $pname;
        public $price;
        public $pdesc;
        public $image_path;
        public $con;

        function __construct()
        {
            $this->con=$GLOBALS["con"];
        }
        function add()
        {
                $sql="insert into product_info(pname,price,pdesc,image_path)values('$this->pname','$this->price','$this->pdesc','$this->image_path')";
                mysqli_query($this->con,$sql);    
        }
        function update()
        {
            $sql="update product_info set pname='$this->pname' where pid='$this->pid'" or die("Query Error for update");
		    mysqli_query($this->con,$sql);

        }
        function delete()
        {
            $sql="delete from product_info where pid='$this->pid'" or die("Query Error");
            mysqli_query($this->con,$sql);
        }
        function readAll()
        {
            $sql="select * from product_info order by pname";
		    $result=mysqli_query($this->con,$sql);
		    return($result);
        }
        function readOne()
        {
            $sql="select pname,price,pdesc from product_info where pid='$this->pid'";
            $result=mysqli_query($this->con,$sql);
            return($result);
        }
    }


?>