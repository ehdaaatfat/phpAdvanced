<?php
//creat folder
$namefolder="";
$massege="";
    if (isset($_POST['subm'])) {
        $namefolder = $_POST['text'];
        $creat = $_POST['subm'];

        if(file_exists($namefolder)){
            $massege="Enter valied Name Folder";
        }
        else if ($creat == "creat folder"){
        mkdir($namefolder);
        }
    }
    $absolutepath='C:\\xampp\htdocs\Tasks\\task1'.$namefolder;
    //creat file
    //$directory='task1';
    
    //if(!file_exists($directory)){
        //mkdir($directory);
     //echo"enter dir";
    //}
if (isset($_POST['submitt'])) {
        $namefile = $_POST['name'];
        $textarea = $_POST['textfile'];
        $dir=$absolutepath.DIRECTORY_SEPARATOR.$namefile;
        $creatf = $_POST['submitt'];
        $extention =$_POST['extention'];

        if ($creatf == "creat file" && $extention=="php")
            file_put_contents($dir.'.php',"'<?php echo '.$textarea.' ?>'");

        else if ($creatf == "creat file" && $extention=="textt")
            file_put_contents($dir.'.text',$textarea);

        else if ($creatf == "creat file"&& $extention=="json")
            file_put_contents($dir.'.json',$textarea);
      
}    
 ?>



<!doctype html>
<html lang="en">

<head>
  <title>File System</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

      <div class="container">
            <div class="row ">
                <div class="col-12 mt-2 text-center text-primary font-weight-bold h3">
                        <h1> Creat Folder</h1><br>
                </div>
                <div class="col-6 offset-3 ">
                    <form method="post" action="">
                        <div class="form-group">
                        <input type="text" name="text" class="form-control"  > <br>
                        <input type="submit" name="subm" value="creat folder">
                        </div>
                    </form>
                    <div class="">
                        <?php echo $massege ?>
                    </div>
               </div>
            </div>
            <div class="row ">
                <div class="col-12 mt-2 text-center text-primary font-weight-bold h3">
                        <h1> Creat File</h1><br>
                </div>
                <div class="col-6 offset-3">
                    <form method="post" action="">
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name File" value=""><br>
                        <textarea name="textfile" id="" cols="30" rows="5"></textarea>

                        <input type="radio" name="extention" value="php">PHP
                        <input type="radio" name="extention" value="textt">TEXT
                        <input type="radio" name="extention" value="json">JSON
                        <input type="submit" name="submitt" value="creat file">
                        </div>
                    </form>
               </div>
            </div>
        </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>