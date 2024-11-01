<?php
include "koneksi.php";
require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-fCctW26oIVDA9KArbS89hD9f';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;
// try {
//     // Initialize the notification object
//     $notif = new \Midtrans\Notification();

//     $transaction = $notif->transaction_status;
//     $fraud = $notif->fraud_status;
//     $order_id = $notif->order_id;

//     if (!$order_id) {
//         throw new Exception("Order ID is null. Notification data: " . json_encode($notif));
//     }

//     if ($transaction == 'capture') {
//         if ($fraud == 'challenge') {
//             // Update to 'challenge' in your database
//             $sql = "UPDATE transactions SET status='challenge' WHERE order_id='$order_id'";
//         } else if ($fraud == 'accept') {
//             // Update to 'success' in your database
//             $sql = "UPDATE transactions SET status='success' WHERE order_id='$order_id'";
//         }
//     } else if ($transaction == 'settlement') {
//         // Update to 'success' in your database
//         $sql = "UPDATE transactions SET status='success' WHERE order_id='$order_id'";
//     } else if ($transaction == 'cancel' || $transaction == 'deny' || $transaction == 'expire') {
//         // Update to 'failure' in your database
//         $sql = "UPDATE transactions SET status='failure' WHERE order_id='$order_id'";
//     } else if ($transaction == 'pending') {
//         // Update to 'pending' in your database
//         $sql = "UPDATE transactions SET status='pending' WHERE order_id='$order_id'";
//     }

//     if ($conn->query($sql) === TRUE) {
//         echo "Transaction status updated successfully";
//     } else {
//         echo "Error updating transaction status: " . $conn->error;
//     }

//     $conn->close();

// } catch (Exception $e) {
//     // Log the exception for debugging
//     file_put_contents('notification_error.log', "Error: " . $e->getMessage() . PHP_EOL, FILE_APPEND);
//     echo "Error: " . $e->getMessage();
// }
try {
    $notif = new \Midtrans\Notification();
    
    $transaction = $notif->transaction_status;
    $type = $notif->payment_type;
    $order_id = $notif->order_id;
    $fraud = $notif->fraud_status;

    if ($transaction == 'capture') {
        if ($type == 'credit_card') {
            if ($fraud == 'challenge') {
                // TODO set payment status in merchant's database to 'challenge'
            } else {
                // TODO set payment status in merchant's database to 'success'
            }
        }
    } else if ($transaction == 'settlement') {
        // TODO set payment status in merchant's database to 'success'
        $stmt = $conn->prepare("UPDATE transactions SET status = 'success' WHERE order_id = ?");
        $stmt->bind_param("s", $order_id);
        $stmt->execute();
        echo "<script>window.setTimeout(function() {
            window.location = 'index.php?page=lihatkamar&id=".$id_kamar."';
            }, 1500);</script>";
    } else if ($transaction == 'pending') {
        // TODO set payment status in merchant's database to 'pending'
    } else if ($transaction == 'deny') {
        // TODO set payment status in merchant's database to 'deny'
    } else if ($transaction == 'expire') {
        // TODO set payment status in merchant's database to 'expire'
    } else if ($transaction == 'cancel') {
        // TODO set payment status in merchant's database to 'cancel'
    }

    $stmt->close();
} catch (Exception $e) {
    error_log($e->getMessage());
}

$conn->close();
?>



// include "koneksi.php";
// require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

// // Set your Merchant Server Key
// \Midtrans\Config::$serverKey = 'SB-Mid-server-fCctW26oIVDA9KArbS89hD9f';
// // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
// \Midtrans\Config::$isProduction = false;
// // Set sanitization on (default)
// \Midtrans\Config::$isSanitized = true;
// // Set 3DS transaction for credit card to true
// \Midtrans\Config::$is3ds = true;

// try {
//     // Initialize the notification object
//     $notif = new \Midtrans\Notification();

//     $transaction = $notif->transaction_status;
//     $fraud = $notif->fraud_status;
//     $order_id = $notif->order_id;

//     if (!$order_id) {
//         throw new Exception("Order ID is null. Notification data: " . json_encode($notif));
//     }

//     if ($transaction == 'capture') {
//         if ($fraud == 'challenge') {
//             // Update to 'challenge' in your database
//             $sql = "UPDATE transactions SET status='challenge' WHERE order_id='$order_id'";
//         } else if ($fraud == 'accept') {
//             // Update to 'success' in your database
//             $sql = "UPDATE transactions SET status='success' WHERE order_id='$order_id'";
//         }
//     } else if ($transaction == 'settlement') {
//         // Update to 'success' in your database
//         $sql = "UPDATE transactions SET status='success' WHERE order_id='$order_id'";
//     } else if ($transaction == 'cancel' || $transaction == 'deny' || $transaction == 'expire') {
//         // Update to 'failure' in your database
//         $sql = "UPDATE transactions SET status='failure' WHERE order_id='$order_id'";
//     } else if ($transaction == 'pending') {
//         // Update to 'pending' in your database
//         $sql = "UPDATE transactions SET status='pending' WHERE order_id='$order_id'";
//     }

//     if ($conn->query($sql) === TRUE) {
//         echo "Transaction status updated successfully";
//     } else {
//         echo "Error updating transaction status: " . $conn->error;
//     }

//     $conn->close();

// } catch (Exception $e) {
//     // Log the exception for debugging
//     file_put_contents('notification_error.log', "Error: " . $e->getMessage() . PHP_EOL, FILE_APPEND);
//     echo "Error: " . $e->getMessage();
// }
