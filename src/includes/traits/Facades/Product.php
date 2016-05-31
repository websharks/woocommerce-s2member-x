<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\s2MemberX\Traits\Facades;

use WebSharks\WpSharks\s2MemberX\Classes;
use WebSharks\WpSharks\s2MemberX\Interfaces;
use WebSharks\WpSharks\s2MemberX\Traits;
#
use WebSharks\WpSharks\s2MemberX\Classes\AppFacades as a;
use WebSharks\WpSharks\s2MemberX\Classes\SCoreFacades as s;
use WebSharks\WpSharks\s2MemberX\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

trait Product
{
    /**
     * @since 160524 Initial release.
     */
    public static function productPostType()
    {
        return $GLOBALS[static::class]->Utils->Product->post_type;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productTypeTaxonomy()
    {
        return $GLOBALS[static::class]->Utils->Product->type_taxonomy;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productMetaPrefix()
    {
        return $GLOBALS[static::class]->Utils->Product->meta_prefix;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productVisibilityClasses()
    {
        return $GLOBALS[static::class]->Utils->Product->visibility_classes;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productVariationVisibilityClasses()
    {
        return $GLOBALS[static::class]->Utils->Product->variation_visibility_classes;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function productClientSidePrefix()
    {
        return $GLOBALS[static::class]->Utils->Product->client_side_prefix;
    }

    /**
     * @since 160524 Initial release.
     */
    public static function getProductMeta(...$args)
    {
        return $GLOBALS[static::class]->Utils->Product->getMeta(...$args);
    }

    /**
     * @since 160524 Initial release.
     */
    public static function updateProductMeta(...$args)
    {
        return $GLOBALS[static::class]->Utils->Product->updateMeta(...$args);
    }

    /**
     * @since 160524 Initial release.
     */
    public static function deleteProductMeta(...$args)
    {
        return $GLOBALS[static::class]->Utils->Product->deleteMeta(...$args);
    }

    /**
     * @since 160524 Initial release.
     */
    public static function createProductUrl(...$args)
    {
        return $GLOBALS[static::class]->Utils->Product->createUrl(...$args);
    }
}