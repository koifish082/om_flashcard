<?php
/**
 * Created by IntelliJ IDEA.
 * User: kazuhiro
 * Date: 9/28/15
 * Time: 6:30 AM
 */
namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Traits\BasicDataRegistrationPageLogic;

class BaseController extends \App\Http\Controllers\Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin base Controller
    |--------------------------------------------------------------------------
    |
    | This controller load Trait file which is written about basic data register
    | feature. (index, create, edit, delet)
    |
    */
    use BasicDataRegistrationPageLogic;

    public function __construct()
    {
        parent::__construct();
    }
}