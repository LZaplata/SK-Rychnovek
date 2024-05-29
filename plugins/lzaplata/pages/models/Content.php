<?php namespace LZaplata\Pages\Models;

use Backend\Facades\BackendAuth;
use JanVince\SmallGDPR\Models\CookiesSettings;
use LZaplata\Gallery\Models\Gallery;
use Model;
use October\Rain\Exception\SystemException;
use Tailor\Classes\BlueprintIndexer;
use Tailor\Models\EntryRecord;

/**
 * Model
 */
class Content extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'lzaplata_pages_contents';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * @return array
     */
    public function getTypeOptions()
    {
        $types = [
            "text"  => "Text",
        ];

        if (class_exists(Gallery::class)) {
            $types["gallery"] = e(trans("lzaplata.pages::lang.content.field.type.option.gallery.label"));
        }

        if (BlueprintIndexer::instance()->findSectionByHandle("FAQ\Question")) {
            $types["faq"] = "FAQ";
        }

        if (class_exists(CookiesSettings::class)) {
            $types["cookies"] = e(trans("lzaplata.pages::lang.content.field.type.option.cookies.label"));
        }

        return $types;
    }

    public $belongsTo = [
        "gallery" => Gallery::class,
    ];

    /**
     * @param $fields
     * @param $context
     *
     * @return void
     */
    public function filterFields($fields, $context = null)
    {
        if (!BackendAuth::userHasPermission("lzaplata.pages.content.update.type")) {
            $fields->type->disabled = true;
        }
    }
}
