<?php

namespace srag\DataTableUI\SrSelfDeclaration\Implementation\Column\Formatter;

use ilUtil;
use srag\DataTableUI\SrSelfDeclaration\Component\Column\Column;
use srag\DataTableUI\SrSelfDeclaration\Component\Data\Row\RowData;
use srag\DataTableUI\SrSelfDeclaration\Component\Format\Format;

/**
 * Class CheckFormatter
 *
 * @package srag\DataTableUI\SrSelfDeclaration\Implementation\Column\Formatter
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class CheckFormatter extends DefaultFormatter
{

    /**
     * @inheritDoc
     */
    public function formatRowCell(Format $format, $check, Column $image_path, RowData $row, string $table_id) : string
    {
        if ($check) {
            $image_path = ilUtil::getImagePath("icon_ok.svg");
        } else {
            $image_path = ilUtil::getImagePath("icon_not_ok.svg");
        }

        return self::output()->getHTML(self::dic()->ui()->factory()->image()->standard($image_path, ""));
    }
}
