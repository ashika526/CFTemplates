<?
    $target_folder= " http://ashika-bucket-communication.s3-website-us-east-1.amazonaws.com";
    $target_file = $target_folder.basename($_FILES["filetoupload"]["name"]);
    $uploadOk= 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($uploadOk != 1)
    {
        echo "Sorry! your file is not uploaded";
    }
    else
    {
        echo "Yay ! your file was uploaded successfully!!!!!!!!!!!"
    }
?>