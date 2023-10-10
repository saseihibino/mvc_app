<?php
/* Smarty version 4.3.4, created on 2023-10-10 15:30:03
  from 'C:\xampp\htdocs\mvc_app\Views\contact\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6524ef6b50e321_70674487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8578d1eecb0df0bc7e0625f36d9642e4e14ba4ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\index.tpl',
      1 => 1696919403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524ef6b50e321_70674487 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php echo '<script'; ?>
 defer src="../../js/confirm.js"><?php echo '</script'; ?>
>
</head>

<body>
<div class="main">
    <div class="container-field">
        <div class="form-wrapper">
            <h1>お問い合わせ</h1>
            <form action="/contact/confimation" method="post">

                <div class="form-item">
                    <label for="name">氏名</label>
                    <input type="text" id="inputName" name="name" placeholder="テスト太郎" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item">
                    <label for="kana">フリガナ</label>
                    <input type="text" id="inputKana" name="kana" placeholder="テストタロウ" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item">
                    <label for="tel">電話番号</label>
                    <input type="tel" id="inputTel" name="tel" placeholder="" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="inputEmail" name="email" placeholder="exemple@cin-group.co.jp" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item-1">
                    <label for="body">お問い合わせ内容</label>
                    <textarea rows="8" id="inputBody" name="body" placeholder=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="edit-button">
                    <input type="submit" id="btnSubmit" class="button" value="この内容で登録する">
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>
<?php }
}
