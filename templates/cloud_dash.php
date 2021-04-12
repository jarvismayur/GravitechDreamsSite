<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo $user;?></h1>
    <form method='post' action='cloud_dash.php' enctype="multipart/form-data">
      <input type="file" id='files' name="files[]" multiple><br>
      <input type="button" id="submit" value='Upload'>
    </form>
<div id='successfully'></div>

    <form class="form" action="" method="post">
      <button type="submit" name="logout">Logout</button>
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#submit').click(function(){
    var form_data = new FormData();
    var allfiles = document.getElementById('files').files.length;
    for (var i = 0; i < allfiles; i++) {
    form_data.append("files[]", document.getElementById('files').files[i]);
    }
    $.ajax({
    url: 'Upload.php',
    type: 'post',
    data: form_data,
    dataType: 'json',
    contentType: false,
    processData: false,
    success: function (success) {
    var src = success;
    $('#successfully').append('Your Multiple File is Upload.');
    }
    });
    });
    });
    </script>
  </body>
</html>
