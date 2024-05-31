<?php
class Banner {
    public static function banner() {
        // Get the current filename
        $filename = basename($_SERVER['PHP_SELF']);
        
        // Extract the filename without extension
        $basename = pathinfo($filename, PATHINFO_FILENAME);
        
        // Generate the class name
        $bannerClass = $basename . 'obraz';

        // Output the banner HTML
        echo '
        <div class="' . htmlspecialchars($bannerClass) . '">
            <div class="content">
                <h1>Najbližšie ' . htmlspecialchars($basename) . ' v galaxii</h1>
                <a href="#' . htmlspecialchars($basename) . '" class="button-link">Čítať viac</a>
            </div>
        </div>';
    }
}

// Call the banner method

?>