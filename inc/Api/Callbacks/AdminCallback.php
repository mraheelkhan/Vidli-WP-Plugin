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
}