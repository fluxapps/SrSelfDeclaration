<?php

namespace srag\DataTableUI\SrSelfDeclaration\Implementation\Column\Formatter\Actions;

use srag\DataTableUI\SrSelfDeclaration\Component\Column\Formatter\Actions\ActionsFormatter;
use srag\DataTableUI\SrSelfDeclaration\Component\Column\Formatter\Actions\Factory as FactoryInterface;
use srag\DataTableUI\SrSelfDeclaration\Implementation\Utils\DataTableUITrait;
use srag\DIC\SrSelfDeclaration\DICTrait;

/**
 * Class Factory
 *
 * @package srag\DataTableUI\SrSelfDeclaration\Implementation\Column\Formatter\Actions
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Factory implements FactoryInterface
{

    use DICTrait;
    use DataTableUITrait;

    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @inheritDoc
     */
    public function actionsDropdown() : ActionsFormatter
    {
        return new ActionsDropdownFormatter();
    }


    /**
     * @inheritDoc
     */
    public function sort() : ActionsFormatter
    {
        return new SortFormatter();
    }
}
