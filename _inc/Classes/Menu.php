<?php

class Menu {
    private $items;

    public function __construct() {
        $this->items = array();
    }

    public function addItem($href, $label, $class = '') {
        $this->items[] = array(
            'href' => $href,
            'label' => $label,
            'class' => $class
        );
    }

    public function render() {
        echo '<div id="menu">';
        echo '<a href="../index.php" id="logoid"><img src="../assets/img/Logo.png" alt="Logo"></a>';
        echo '<nav>';
        echo '<ul id="menuveci" style="max-height: 0px;">';

        foreach ($this->items as $item) {
            $class = $item['class'] ? ' class="' . $item['class'] . '"' : '';
            echo '<li' . $class . '>';
            echo '<a href="' . $item['href'] . '">' . $item['label'] . '</a>';
            echo '</li>';
        }

        echo '</ul>';
        echo '</nav>';
        echo '<img src="../assets/img/menuicon.png" id="menuicon" onclick="mobilmenu()" alt="Hamburger icon">';
        echo '</div>';
    }
}
