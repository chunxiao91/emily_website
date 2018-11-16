<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>register</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
<h1 style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif" class="page-header">&nbsp;</h1>
<form class="form-horizontal" action="register_action.php" method="post" name="myform">
<fieldset>
    <h1>User register</h1>
    <div class="control-group">
      <label class="control-label">username：</label>
      <div class="controls">
        <input name="id" type="text" class="span3" onBlur="namecheckdata();">
        <p class="help-block"><small>* 请输入你的账号，不能为空，为8到15数字。          注册之后不可修改。</small></p>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">Password:</label>
      <div class="controls">
        <input name="password" type="password" class="span3">
        <p class="help-block"><small>* 请输入你的密码，不能为空，4到10位数。</small></p>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">Retype Password:</label>
      <div class="controls">
        <input name="password1" type="password" class="span3">
        <p class="help-block"><small>* 请再次输入你的密码。</small></p>
      </div>
    </div>
   
    <div class="control-group">
      <label class="control-label">Gender:</label>
      <div class="controls"> 
        
        <!-- Inline Radios -->
        <label class="radio inline">
          <input name="sex" type="radio" checked="checked" value="boy">
          Boy </label>
        <label class="radio inline">
          <input name="sex" type="radio" value="girl">
          Girl </label>
      </div>
    </div>
    <div class="control-group"> 
      
      <!-- Select Basic -->
      <label class="control-label">Your Occupation:</label>
      <div class="controls">
        <select name="occupation" class="input-large">
          <option name="student">Student</option>
          <option name="teacher">Teacher</option>
          <option name="worker">Worker</option>
          <option name="other">Other</option>
        </select>
        <p class="help-block"><small>* 请选择你的职业，默认为Student。</small></p>
      </div>
    </div>
   
  </fieldset>
  <div class="form-actions"> <a href="#suer" data-toggle="modal" class="btn btn-primary"> <i class="icon-ok"></i> Enter</a>&nbsp;&nbsp;</span>
    <input class="btn btn-danger" name="reset" type="reset" value="Reset">
  </div>
  <div class="container">
    <div class="modal hide fade" id="suer">
      <div class="modal-header"> <a href="#" class="close" data-dismiss="modal">x</a>
        <h4 style="font:'Trebuchet MS', Arial, Helvetica, sans-serif">Attention</h4>
      </div>
      <div class="modal-body">
        <p style="font:Arial, Helvetica, sans-serif">Are you sure!<br>If you feel like modifying your password,you can do that on the Personal Center!<br>Congratulation!</p>
      </div>
      <div class="modal-footer"> <a href="#" class="btn btn-danger" data-dismiss="modal">Cancle</a>
        <input class="btn btn-success" name="submit" type="submit" value="Sure">
      </div>
    </div>
  </div>
</form>
<div class="container">
<h4 class="page-header">&nbsp;</h4>


<script src="../js/jquery-1.11.0.min.js"></script> 
<script src="../js/bootstrap.js"></script>
</body>
</html>
