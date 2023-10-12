<?php
/* Smarty version 4.3.4, created on 2023-10-11 18:12:13
  from 'C:\xampp\htdocs\mvc_app\Views\contact\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652666ed97ea57_09018854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4a3bf51193112fdc880a5b107af12696e76c2cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\edit.tpl',
      1 => 1697015509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652666ed97ea57_09018854 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h1>お問い合わせ</h1>
            <form action="/contact/update" method="post">

                <div class="form-item">
                    <label for="name">氏名</label>
                    <input type="text" id="inputName" name="name" placeholder="テスト太郎" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->name ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['name'] ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item">
                    <label for="kana">フリガナ</label>
                    <input type="text" id="inputKana" name="kana" placeholder="テストタロウ" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->kana ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['kana'] ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item">
                    <label for="tel">電話番号</label>
                    <input type="tel" id="inputTel" name="tel" placeholder="" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->tel ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['tel'] ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="inputEmail" name="email" placeholder="exemple@cin-group.co.jp" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->email ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['email'] ?? null : $tmp);?>
">
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div class="form-item-1">
                    <label for="body">お問い合わせ内容</label>
                    <textarea rows="8" id="inputBody" name="body" placeholder=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->body ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['body'] ?? null : $tmp);?>
</textarea>
                    <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>

                <div>
                    <p>上記内容でよろしいですか？</p>
                </div>

                <div class="edit-button">
                    <button type="submit" name='id' value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->id ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['id'] ?? null : $tmp);?>
" class="button mt-4">更新</a>
                    <button type="button" onclick="history.back()" class="button mt-4">キャンセル</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>

</html><?php }
}
