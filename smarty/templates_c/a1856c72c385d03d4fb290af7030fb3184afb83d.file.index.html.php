<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-04 09:33:06
         compiled from "D:\xampp\htdocs\Demo\smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:984454c7810ed47448-42532966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1856c72c385d03d4fb290af7030fb3184afb83d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Demo\\smarty\\templates\\index.html',
      1 => 1423038784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '984454c7810ed47448-42532966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c7810edd0643_29418365',
  'variables' => 
  array (
    'username' => 0,
    'age' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7810edd0643_29418365')) {function content_54c7810edd0643_29418365($_smarty_tpl) {?><html>
	<head>
		<title>Hello</title>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-ui-1.11.2/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" type="text/css" href="../js/jquery-ui-1.11.2/jquery-ui.min.css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/index.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div>
			<form method="post" action="index.php">
				<tr>
				<td>姓名</td>
				<td><input type="text" id="username" name="username" title="Please input your name."></input></td>
			</tr><br/>
			<br/>
			<tr>
				<td>年龄</td>
				<td><input type="text" id="age" name="age" title="Tell us your age will be fine."></input></td>
			</tr><br/>
			<br/>
			<tr>
				<td><input type="submit" value="submit" id="post" title="Click to submit."></input></td>
			</tr>
			</form>
			<button id="submit">AJAX</button>
		</div>
		<div>
			<p id='p_name'><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
			<p id='p_age'><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</p>
		</div>
		
		<div id="tabs">
		  <ul>
		    <li><a href="#tabs-1">Nunc tincidunt</a></li>
		    <li><a href="#tabs-2">Proin dolor</a></li>
		    <li><a href="#tabs-3">Aenean lacinia</a></li>
		  </ul>
		  <div id="tabs-1">
		    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
		  </div>
		  <div id="tabs-2">
		    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
		  </div>
		  <div id="tabs-3">
		    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
		  </div>
		</div>

		<div id="elem" style="background-color:red">
			<p>Hello, world!</p>
		</div>


	</body>
</html><?php }} ?>
