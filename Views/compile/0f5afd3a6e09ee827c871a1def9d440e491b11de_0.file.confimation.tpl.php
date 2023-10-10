<?php
/* Smarty version 4.3.4, created on 2023-10-10 14:39:43
  from 'C:\xampp\htdocs\mvc_app\Views\contact\confimation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6524e39f197ef5_72489188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f5afd3a6e09ee827c871a1def9d440e491b11de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\confimation.tpl',
      1 => 1696916368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524e39f197ef5_72489188 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<div class="main">
    <div class="container-field">
        <div class="form-wrapper">
            <h1>内容確認</h1>
            <form action="/contact/create" name="regist" method="post">

                <div class="form-item">
                    <label for="name">氏名</label>
                    <input type="text" name="name" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div>

                <div class="form-item">
                    <label for="kana">フリガナ</label>
                    <input type="text" name="kana" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div>

                <div class="form-item">
                    <label for="tel">電話番号</label>
                    <input type="tel" name="tel" placeholder="" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div>

                <div class="form-item">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"readonly>
                </div>

                <div class="form-item-1">
                    <label for="body">お問い合わせ内容</label>
                    <textarea rows="8" name="body" placeholder=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                </div>

                <div class="edit-button">
                    <input type="submit" class="button" value="この内容で登録する">
                    <button type="button" onclick="history.back()" class="button mt-4">キャンセル</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>
<?php }
}
