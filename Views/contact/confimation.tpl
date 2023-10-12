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
            <h1>内容確認</h1>
            <form action="/contact/create" name="regist" method="post">

                <div class="form-item">
                    <label for="name">氏名</label>
                    <input type="text" name="name" value="{$post['name']|default:''}"readonly>
                </div>

                <div class="form-item">
                    <label for="kana">フリガナ</label>
                    <input type="text" name="kana" value="{$post['kana']|default:''}"readonly>
                </div>

                <div class="form-item">
                    <label for="tel">電話番号</label>
                    <input type="tel" name="tel" placeholder="" value="{$post['tel']|default:''}"readonly>
                </div>

                <div class="form-item">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" value="{$post['email']|default:''}"readonly>
                </div>

                <div class="form-item-1">
                    <label for="body">お問い合わせ内容</label>
                    <textarea rows="8" name="body" placeholder="">{$post['body']|default:''}</textarea>
                </div>

                <div>
                    <p>上記内容でよろしいですか？</p>
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
