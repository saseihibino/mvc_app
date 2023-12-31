<?php
require_once(ROOT_PATH . 'Models/Db.php');

class Contact extends Db
{

    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function create(string $name, string $kana, $tel, string $email, string $body)
    {
        try{
            if (empty($tel)) {
                $tel = null; // または空の文字列 '' など、データベースが許容する値を設定
            } 
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
            return true;
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

            $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $contacts;
        } catch (PDOException $e) {
            echo "データ取得失敗: " . $e->getMessage() . "\n";
            return false;
            exit();
        }
    }
    public function getContactById(string $id): stdClass
    {
        try{

            $query = 'SELECT * FROM contacts WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "認証エラー: ". $e->getMessage(). "\n";
            exit();
        }
    }
    public function update(string $id, string $name, string $kana, $tel, string $email, string $body)
    {
        try{
            if (empty($tel)) {
                $tel = null; // または空の文字列 '' など、データベースが許容する値を設定
            } 
            $this->dbh->beginTransaction();
            $query = 'UPDATE contacts SET name = :name, kana = :kana, tel = :tel, email = :email, body = :body';
            $query .= ' WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':kana', $kana);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':body', $body);
            
            $stmt->execute();
            // トランザクションを完了することでデータの書き込みを確定させる
            $this->dbh->commit();
            return true;
        } catch (PDOException $e) {
            // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
            $this->dbh->rollBack();
            echo "登録失敗: " . $e->getMessage() . "\n";
            exit();
        }
    }
    public function deleteContactById(string $id){
        try{
            $this->dbh->beginTransaction();
            $query = 'DELETE FROM contacts WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            // トランザクションを完了することでデータの書き込みを確定させる
            $this->dbh->commit();
            return;
        } catch (PDOException $e) {
            // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
            $this->dbh->rollBack();
            echo "退会失敗: " . $e->getMessage() . "\n";
            exit();
        }
    }
}