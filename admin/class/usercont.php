<?php
/**
 * Created by PhpStorm.
 * User: hamed
 * Date: 22/10/17
 * Time: 07:10 م
 */

class usercont
{
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost', 'root', '', 'collage');
    }

    public function add($ident_num,$usname,$passw,$career_title,$brith,$imgg,$salary,$access)
    {
        $sql = "INSERT INTO employees (num_idenf,emp_name,password,career_title,brith,emp_image,salary,control) VALUES ('$ident_num','$usname','$passw','$career_title','$brith','$imgg','$salary','$access')";

        if (mysqli_query($this->con, $sql))
            return 1;
        else
            return 0;
    }

    public function select()
    {
        $data = [];

        $sql = "SELECT * FROM employees";

        $result = mysqli_query($this->con, $sql);

        while ($row = mysqli_fetch_assoc($result)):
            $data[] = $row;
        endwhile;

        return $data;
    }

    public function selectRow($id)
    {
        $data = [];

        $sql = "SELECT * FROM employees WHERE id = '$id'";

        $result = mysqli_query($this->con, $sql);

        while ($row = mysqli_fetch_assoc($result)):
            $data[] = $row;
        endwhile;

        return $data;
    }

    public function update($id,$ident_num,$usname,$passw,$brith,$access,$career_title,$salary,$imgu)
    {
        $sql = "UPDATE employees SET num_idenf = '$ident_num' , emp_name='$usname', password='$passw', brith='$brith', control='$access', career_title='$career_title', salary='$salary', emp_image='$imgu' WHERE id = '$id' ";

        if (mysqli_query($this->con, $sql))
            return 1;
        else
            return 0;
    }


    public function delete($id)
    {
        $sql = "DELETE FROM employees WHERE id = '$id'";

        if (mysqli_query($this->con, $sql))
            return 1;
        else
            return 0;
    }




}