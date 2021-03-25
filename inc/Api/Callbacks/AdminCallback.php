<?php
/**
 * @package VidliPluign
 */
namespace Inc\Api\Callbacks;
use Inc\Base\BaseController;

class AdminCallback extends BaseController{

    public function adminDashboard()
    {
        return require_once("$this->plugin_path/templates/admin.php");
    }

    public function adminCPT()
    {
        return require_once("$this->plugin_path/templates/admin.php");
    }

    public function adminTaxonomies()
    {
        return require_once("$this->plugin_path/templates/admin.php");
    }
    public function adminWidgets()
    {
        return require_once("$this->plugin_path/templates/admin.php");
    }

    public function vidliOptionsGroup($input)
    {
        return $input;
    }
    public function vidliAdminSection($input)
    {
        echo "check this feature";
    }
    public function vidliTextExample($input)
    {
        $value = esc_attr( get_option('text_example') );
        echo "<input type='text' class='regular-text' name='text_example' value='$value' placeholder='Text example'>";
    }
}