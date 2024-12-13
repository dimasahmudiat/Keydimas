<?php
// key.php
define('API_KEY', 'dimas');

// Cek apakah metode permintaan adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data kunci dari input POST
    $inputKey = $_POST['key'] ?? '';

    // Validasi kunci API
    if ($inputKey === API_KEY) {
        // Jika valid
        http_response_code(200);
        echo json_encode([
            'status' => 'success',
            'message' => 'Kunci API valid!'
        ]);
    } else {
        // Jika tidak valid
        http_response_code(403);
        echo json_encode([
            'status' => 'error',
            'message' => 'Kunci API tidak valid!'
        ]);
    }
} else {
    // Jika metode bukan POST
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Metode tidak diizinkan!'
    ]);
}
?>
