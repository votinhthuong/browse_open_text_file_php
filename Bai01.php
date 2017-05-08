<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai 1 - Vo Tinh Thuong</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){
	if($_FILES['file']['name'] == ""){
		echo "Vui lòng chọn file!";
	}
	else if($_FILES['file']['type'] != 'text/plain') {
		echo "File không đúng định dạng!";
	}
	else {
		$fileName = $_FILES['file']['tmp_name'];
		$file = fopen($fileName,"r");
		$data = fread($file, filesize($fileName));
	}
}
?>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="700" border="1" cellspacing="1" cellpadding="1" align="center">
    <tr>
      <td width="206">Chọn file</td>
      <td width="481"><label for="textfield"></label>
      <input type="file" name="file" id="file" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle">
      <input type="submit" name="submit" id="button" value="Submit" /></td>
    </tr>
    <tr>
      <td>Nội dung</td>
      <td><input style="width:500px; height:300px;" type="text" name="textfield" id="textfield" value="<?php if(isset($_POST['submit'])) echo $data;?>"/></td>
    </tr>
  </table>
</form>
</body>
</html>