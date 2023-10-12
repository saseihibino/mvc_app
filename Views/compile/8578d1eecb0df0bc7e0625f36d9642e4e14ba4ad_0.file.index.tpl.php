<?php
/* Smarty version 4.3.4, created on 2023-10-12 14:23:28
  from 'C:\xampp\htdocs\mvc_app\Views\contact\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652782d077fae1_35904013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8578d1eecb0df0bc7e0625f36d9642e4e14ba4ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\index.tpl',
      1 => 1697088204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652782d077fae1_35904013 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
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
            <form action="/contact/confimation" id="myForm" method="post">

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
        <table class="design01">
            <tr class="tabletr">
                <th>氏名</th>
                <th>フリガナ</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                <th>お問い合わせ内容</th>
                <th></th>
                <th></th>
            </tr>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allContacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                <tr class="tabletr">
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['kana'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo nl2br((string) $_smarty_tpl->tpl_vars['contact']->value['body'], (bool) 1);?>
</td>
                    <td>
                        <form action="/contact/edit" method="post">
                            <button type="submit" name="id" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">編集</button>
                        </form>
                    </td>
                    <td>
                        <a href="/contact/delete?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="button mt-4" onclick="return confirm('本当に削除しますか?')">削除</a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</div>
    
</body>

</html>
<?php }
}
