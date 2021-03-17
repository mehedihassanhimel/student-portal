<?php
include 'navbar2.html';
if (isset($_POST["upload"])) {
    // Get Image Dimension
    //$fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    // $width = $fileinfo[0];
    // $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG, JPG and JPEG are allowed."
        );
        echo $result;
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 4000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 4MB"
        );
    }    // Validate image file dimension
    // else if ($width > "300" || $height > "200") {
    //     $response = array(
    //         "type" => "error",
    //         "message" => "Image dimension should be within 300X200"
    //     );
    //}
     else {
        $target = "uploads/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem occured in uploading image files."
            );
        }
    }
}
?>

<style>
    legend{ outline: 1px solid red; width: 100px; }
  fieldset{ width: 200px; }
</style>
<h2>PHP Image Upload Validation</h2>
<form id="frm-image-upload" action="task3.php" name='img' method="post"
    enctype="multipart/form-data">
    <fieldset>
  <legend>Profile picture</legend>
    <div class="form-row">
    <img src="profile_cartoon.jpg" alt="Demo" width="300" height="300">
        <div>Choose Image file:</div>
        <div>
            <input type="file" class="file-input" name="file-input">
        </div>
    </div>

    <div class="button-row">
        <input type="submit" id="btn-submit" name="upload"
            value="Upload">
    </div>
    </fieldset>
</form>
<?php if(!empty($response)) { ?>
<div class="response <?php echo $response["type"]; ?>
    ">
    <?php echo $response["message"]; ?>
</div>
<?php }?>
