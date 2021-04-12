<?php include_once 'config/init.php' ?>

<?php $gravity = new Gravity;
  if(isset($_POST['submit_post'])){
    $data = array();
    $data = $_POST;
    // Check if file was uploaded without errors
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "JPG" => "image/JPG", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "PNG" => "image/PNG");
        $filename = $_FILES["file"]["name"];
        $filetype =     $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die(redirect("admin.php", "extension Of the File Not Allowed", "error"));

        // Verify file size - 5MB maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die(redirect("admin.php", "File Size is Too Large", "error"));

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("uploads/news/" . $filename)){
                  redirect("admin.php", "file Already Exists", "error");
            } else{
                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/news/" . $filename);
                if($gravity->createnewsdata($data, $data_content, $data_description, $filename)){
                  redirect("admin.php","Your Post Has Been Submitted Successfully for Verification", "success");
                }else{
                  redirect("admin.php","Somthing went wrong", "error");
                }
            }
        }else{
              redirect("admin.php", "extension Of the File Not Allowed", "error");
        }
    }else{
        redirect("admin1.php", "Error". $_FILES["file"]["error"], "error");
    }
}


if (isset($_POST['submit_catergory'])) {
  $data = array();
  $data['catergory'] = $_POST['catergory'];
  if($gravity->add_post_catergory($data)){
    redirect("admin.php","Catergory Updated Successfully", "success");
  }else{
    redirect("admin.php","Somthing went wrong", "error");
  }
}

?>
