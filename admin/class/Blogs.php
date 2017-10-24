<?php


class Blogs
{
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect('localhost', 'root', '', 'collage');
    }

    public function add($title_news,$text_news,$imgg,$access)
    {
        $sql = "INSERT INTO news (title_news,text_news,pic_for_news,access_to_control) VALUES ('$title_news','$text_news','$imgg','$access')";

        if (mysqli_query($this->con, $sql))
            return 1;
        else
            return 0;
    }

    public function select()
    {
        $data = [];

        $sql = "SELECT * FROM news";

        $result = mysqli_query($this->con, $sql);

        while ($row = mysqli_fetch_assoc($result)):
            $data[] = $row;
        endwhile;

        return $data;
    }

    public function selectRow($id)
    {
        $data = [];

        $sql = "SELECT * FROM news WHERE id_news = '$id'";

        $result = mysqli_query($this->con, $sql);

        while ($row = mysqli_fetch_assoc($result)):
            $data[] = $row;
        endwhile;

        return $data;
    }

    public function update($id,$title_news,$text_news,$imgg,$access)
    {
        $sql = "UPDATE news set title_news = '$title_news' , text_news = '$text_news', pic_for_news='$imgg', access_to_control='$access' WHERE id_news = '$id'";

        if (mysqli_query($this->con, $sql))
            return 1;
        else
            return 0;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM news WHERE id_news = '$id'";

        if (mysqli_query($this->con, $sql))
            return 1;
        else
            return 0;
    }



}
