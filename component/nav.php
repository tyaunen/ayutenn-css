<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$navItems = [
    'sample.php' => ['label' => '🏠 Home', 'class' => 'nav-home'],
    'sample-breakpoints.php' => ['label' => 'Breakpoints'],
    'sample-grid.php' => ['label' => 'Grid'],
    'sample-display.php' => ['label' => 'Display'],
    'sample-forms.php' => ['label' => 'Forms'],
    'sample-alerts.php' => ['label' => 'Alerts'],
    'sample-accordion.php' => ['label' => 'Accordion'],
    'sample-tabs.php' => ['label' => 'Tabs'],
    'sample-uploader.php' => ['label' => 'Uploader'],
    'sample-utils.php' => ['label' => 'Utils'],
];
?>
<nav class="sample-nav">
    <?php foreach ($navItems as $href => $item): ?>
        <?php
        $classes = [];
        if (isset($item['class'])) $classes[] = $item['class'];
        if ($currentPage === $href) $classes[] = 'active';
        $classAttr = $classes ? ' class="' . implode(' ', $classes) . '"' : '';
        ?>
        <a href="<?= $href ?>"<?= $classAttr ?>><?= $item['label'] ?></a>
    <?php endforeach; ?>
</nav>