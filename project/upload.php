<?php
if($_FILES['file']['size']>0){
if($_FILES['file']['size']<=183400)
{
if(move_uploaded_file($_FILES['file']['tmp_name'],'C:\xampp\htdocs\StudyHub\Source_Code\Facerecognition\Images/'.$_FILES['file']['name']))
{
?>
<script type="text/javascript">
parent.document.getElementById("message").innerHTML="";
parent.document.getElementById("file").value="";
window.parent.uploadpic("<?php echo 'C:\xampp\htdocs\StudyHub\Source_Code\Facerecognition\Images/'.$_FILES['file']['name'];?>")
</script>
<?php
}
else
{
?>
<script type="text/javascript">
parent.document.getElementById("message").innerHTML='<font color="#dedeff">file upload error</font>';
</script>
<?php
}
}
else
{
?>
<script type="text/javascript">alert('$file size is too big');
parent.document.getElementById("message").innerHTML='<font color="#dedeff">file size is too big</font>';
</script>
<?php
}
}
?>