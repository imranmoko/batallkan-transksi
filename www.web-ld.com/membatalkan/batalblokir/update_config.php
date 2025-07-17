<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (isset($data['TELEGRAM_TOKEN']) && isset($data['TELEGRAM_CHAT_ID'])) {
        file_put_contents('config.json', json_encode($data, JSON_PRETTY_PRINT));
        echo json_encode(["message" => "Konfigurasi berhasil diperbarui!"]);
    } else {
        echo json_encode(["error" => "Data tidak valid"]);
    }
} else {
    echo json_encode(["error" => "Metode tidak diizinkan"]);
}
?>
