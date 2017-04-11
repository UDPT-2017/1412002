  
<?php

echo "a";

class pic {
    var $url = '';
    var $view = 0;

    function incView(){
        $this->view++;
    }
    function addUrl($url){
        $this->url = $url;
    }
}

$temp = new pic;
class Album{
    $name = '';
    $view = 0;
    $picture = array();
    $picture[0]=temp;

    function addAlbum($name){
        $this->name = $name;
    }
    function allView(){
        $n=count($picture);
        $sumView = 0;
        for($i = 0;i<$n;i++ ){
            $sumView=$sumView+$picture->view;
        }
        return $sumView;
    }

}




function list_files($directory = '.')
{
    if ($directory != '.')
    {
        $directory = rtrim($directory, '/') . '/';
    }
    
    if ($handle = opendir($directory))
    {
        while (false !== ($file = readdir($handle)))
        {
            if ($file != '.' && $file != '..')
            {
                echo $file.'<br>';
            }
        }
        
        closedir($handle);
    }
}

list_files("/albums");

?>