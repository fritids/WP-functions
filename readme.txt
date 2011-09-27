Good or utile WordPress Functions

// customize admin footer text
function custom_admin_footer() {
        echo 'add your custom footer text and html here';
}
add_filter('admin_footer_text', 'custom_admin_footer');