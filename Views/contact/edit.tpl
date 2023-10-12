<!DOCTYPE html>
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
                    <input type="text" id="inputName" name="name" placeholder="テスト太郎" value="{$data->name|default:$data['name']}">
                    <p class="error-text">{$errorMessages['name']|default:''}</p>
                </div>

                <div class="form-item">
                    <label for="kana">フリガナ</label>
                    <input type="text" id="inputKana" name="kana" placeholder="テストタロウ" value="{$data->kana|default:$data['kana']}">
                    <p class="error-text">{$errorMessages['kana']|default:''}</p>
                </div>

                <div class="form-item">
                    <label for="tel">電話番号</label>
                    <input type="tel" id="inputTel" name="tel" placeholder="" value="{$data->tel|default:$data['tel']}">
                    <p class="error-text">{$errorMessages['tel']|default:''}</p>
                </div>

                <div class="form-item">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="inputEmail" name="email" placeholder="exemple@cin-group.co.jp" value="{$data->email|default:$data['email']}">
                    <p class="error-text">{$errorMessages['email']|default:''}</p>
                </div>

                <div class="form-item-1">
                    <label for="body">お問い合わせ内容</label>
                    <textarea rows="8" id="inputBody" name="body" placeholder="">{$data->body|default:$data['body']}</textarea>
                    <p class="error-text">{$errorMessages['body']|default:''}</p>
                </div>

                <div>
                    <p>上記内容でよろしいですか？</p>
                </div>

                <div class="edit-button">
                    <button type="submit" name='id' value="{$data->id|default:$data['id']}" class="button mt-4">更新</a>
                    <button type="button" onclick="history.back()" class="button mt-4">キャンセル</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>

</html>