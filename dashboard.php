// Custom Dashboard Widget Plugin
add_action('wp_dashboard_setup', 'my_custom_dashboard_widget');

function my_custom_dashboard_widget() {
    wp_add_dashboard_widget(
        'custom_help_widget',   // Widget ID
        'My Custom Widget',     // Widget title
        'custom_widget_content' // Display function
    );
}

function custom_widget_content() {
    echo "<p>Welcome to your custom dashboard widget! You can add any content here.</p>";
}
