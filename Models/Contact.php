<?php
require_once(ROOT_PATH . 'Models/Db.php');

class Contact extends Db
{

    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function create(string $name, string $kana, int $tel, string $email, string $body)
    {
        try{
            $this->dbh->beginTransaction();
            $query = 'INSERT INTO contacts (name, kana,  tel, email, body) VALUES (:name, :kana, :tel, :email, :body)';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $tel, PDO::PARAM_INT);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            
            $stmt->execute();
            // トランザクションを完了することでデータの書き込みを確定させる
            $this->dbh->commit();
        } catch (PDOException $e) {
            // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
            $this->dbh->rollBack();
            echo "登録失敗: " . $e->getMessage() . "\n";
            exit();
        }
    }

    public function getAllContacts()
    {
        try {
            $query = 'SELECT * FROM contacts';
            $stmt = $this->dbh->prepare($query);
            $stmt->execute();

            // 結果を連想配列として取得
            $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $contacts;
        } catch (PDOException $e) {
            echo "データ取得失敗: " . $e->getMessage() . "\n";
            return false;
        }
    }
}