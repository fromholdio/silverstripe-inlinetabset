<?php

namespace Fromholdio\InlineTabSet\Forms;

use SilverStripe\Forms\TabSet;
use SilverStripe\View\Requirements;

class InlineTabSet extends TabSet
{
    public function FieldHolder($properties = [])
    {
        Requirements::css('fromholdio/silverstripe-inlinetabset:client/inlinetabset.css');
        return parent::FieldHolder($properties);
    }
}
