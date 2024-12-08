<?php
require_once '../connect/connect.php';

class Review extends connect
{
    public function sendReview($product_id, $content, $rating)
    {
        //kiểm tra người dung đã mua sản phẩm này chưa
        $checkPurchaseSql = 'SELECT count(*) as purchase_count
                             FROM orders
                             join order_details on orders.order_detail_id = order_details.order_detail_id
                             WHERE orders.user_id = ? AND orders.product_id = ?';
                    
        $checkStmt = $this->connect()->prepare($checkPurchaseSql);
        $checkStmt->execute([$_SESSION['user']['user_id'], $product_id]);
        $purchaseResult = $checkStmt->fetch(PDO::FETCH_ASSOC);

    

        if ($purchaseResult['purchase_count'] > 0) {
            //nếu người dùng đã mua cho phép bình luận
            $sql = 'INSERT INTO reviews(product_id, user_id, content, rating, created_at) VALUES (?,?,?,?,now())';
            $stmt = $this->connect()->prepare($sql);
            return $stmt->execute([$product_id, $_SESSION['user']['user_id'], $content, $rating]);
        } else {
            return false;
        }
    }

    public function getReviewByID($product_id) {
        $sql = 'SELECT
                users.name as user_name,
                reviews.*
                FROM reviews
                join users on users.user_id = reviews.user_id
                WHERE product_id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
