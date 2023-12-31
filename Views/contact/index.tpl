<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="../../js/confirm.js"></script>
</head>

<body>
<div class="main">
    <div class="container-field">
        <div class="form-wrapper">
            <h1>お問い合わせ</h1>
            <form action="/contact/confimation" id="myForm" method="post">

                <div class="form-item">
                    <label for="name">氏名</label>
                    <input type="text" id="inputName" name="name" placeholder="テスト太郎" value="{$post['name']|default:''}">
                    <p class="error-text">{$errorMessages['name']|default:''}</p>
                </div>

                <div class="form-item">
                    <label for="kana">フリガナ</label>
                    <input type="text" id="inputKana" name="kana" placeholder="テストタロウ" value="{$post['kana']|default:''}">
                    <p class="error-text">{$errorMessages['kana']|default:''}</p>
                </div>

                <div class="form-item">
                    <label for="tel">電話番号</label>
                    <input type="tel" id="inputTel" name="tel" placeholder="" value="{$post['tel']|default:''}">
                    <p class="error-text">{$errorMessages['tel']|default:''}</p>
                </div>

                <div class="form-item">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="inputEmail" name="email" placeholder="exemple@cin-group.co.jp" value="{$post['email']|default:''}">
                    <p class="error-text">{$errorMessages['email']|default:''}</p>
                </div>

                <div class="form-item-1">
                    <label for="body">お問い合わせ内容</label>
                    <textarea rows="8" id="inputBody" name="body" placeholder="">{$post['body']|default:''}</textarea>
                    <p class="error-text">{$errorMessages['body']|default:''}</p>
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


            {foreach $allContacts as $contact}
                <tr class="tabletr">
                    <td>{$contact['name']|escape:'html'}</td>
                    <td>{$contact['kana']|escape:'html'}</td>
                    <td>{$contact['tel']|escape:'html'}</td>
                    <td>{$contact['email']|escape:'html'}</td>
                    <td>{$contact['body']|escape:'html'|nl2br}</td>
                    <td>
                        <form action="/contact/edit" method="post">
                            <button type="submit" name="id" value="{$contact['id']}">編集</button>
                        </form>
                    </td>
                    <td>
                        <a href="/contact/delete?id={$contact['id']}" class="button mt-4" onclick="return confirm('本当に削除しますか?')">削除</a>
                    </td>
                </tr>
            {/foreach}
        </table>
    </div>
</div>
    
</body>

</html>
