<?php
class Banner {
    public static function banner() {
        $filename = basename($_SERVER['PHP_SELF']);
        $basename = pathinfo($filename, PATHINFO_FILENAME);
        $bannerClass = $basename . 'obraz';
        echo '
        <div class="' . htmlspecialchars($bannerClass) . '">
            <div class="content">
                <h1>Najbližšie ' . htmlspecialchars($basename) . ' v galaxii</h1>
                <a href="#' . htmlspecialchars($basename) . '" class="button-link">Čítať viac</a>
            </div>
        </div>';
    }
}


?>