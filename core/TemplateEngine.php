<?php

class TemplateEngine {
    private $baseDir;

    public function __construct(string $baseDir) {
        $this->baseDir = rtrim($baseDir, DIRECTORY_SEPARATOR);
    }

    private function renderComponent(string $component, array $data) {
        // Validate the component name to prevent directory traversal attacks
        if (preg_match('/^[a-zA-Z0-9_]+\.(php)$/', $component) !== 1) {
            echo "Invalid component name: " . htmlspecialchars($component);
            return;
        }

        $componentPath = $this->baseDir . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . $component;

        if (!file_exists($componentPath)) {
            echo "Component not found: " . htmlspecialchars($component);
            return;
        }


        

        // Include the component and pass sanitized data
        include $componentPath;
    }

    public function render(string $template, array $data = []) {
        $this->renderComponent($template, $data);
    }
}
?>
