<?php

namespace srag\DataTableUI\SrSelfDeclaration\Implementation;

use srag\DataTableUI\SrSelfDeclaration\Component\Column\Factory as ColumnFactoryInterface;
use srag\DataTableUI\SrSelfDeclaration\Component\Data\Factory as DataFactoryInterface;
use srag\DataTableUI\SrSelfDeclaration\Component\Data\Fetcher\DataFetcher;
use srag\DataTableUI\SrSelfDeclaration\Component\Factory as FactoryInterface;
use srag\DataTableUI\SrSelfDeclaration\Component\Format\Factory as FormatFactoryInterface;
use srag\DataTableUI\SrSelfDeclaration\Component\Settings\Factory as SettingsFactoryInterface;
use srag\DataTableUI\SrSelfDeclaration\Component\Table as TableInterface;
use srag\DataTableUI\SrSelfDeclaration\Implementation\Column\Factory as ColumnFactory;
use srag\DataTableUI\SrSelfDeclaration\Implementation\Data\Factory as DataFactory;
use srag\DataTableUI\SrSelfDeclaration\Implementation\Format\Factory as FormatFactory;
use srag\DataTableUI\SrSelfDeclaration\Implementation\Settings\Factory as SettingsFactory;
use srag\DataTableUI\SrSelfDeclaration\Implementation\Utils\DataTableUITrait;
use srag\DIC\SrSelfDeclaration\DICTrait;
use srag\DIC\SrSelfDeclaration\Plugin\PluginInterface;
use srag\LibraryLanguageInstaller\SrSelfDeclaration\LibraryLanguageInstaller;

/**
 * Class Factory
 *
 * @package srag\DataTableUI\SrSelfDeclaration\Implementation
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
    public function column() : ColumnFactoryInterface
    {
        return ColumnFactory::getInstance();
    }


    /**
     * @inheritDoc
     */
    public function data() : DataFactoryInterface
    {
        return DataFactory::getInstance();
    }


    /**
     * @inheritDoc
     */
    public function format() : FormatFactoryInterface
    {
        return FormatFactory::getInstance();
    }


    /**
     * @inheritDoc
     */
    public function installLanguages(PluginInterface $plugin)/* : void*/
    {
        LibraryLanguageInstaller::getInstance()->withPlugin($plugin)->withLibraryLanguageDirectory(__DIR__
            . "/../../lang")->updateLanguages();
    }


    /**
     * @inheritDoc
     */
    public function settings() : SettingsFactoryInterface
    {
        return SettingsFactory::getInstance();
    }


    /**
     * @inheritDoc
     */
    public function table(string $table_id, string $action_url, string $title, array $columns, DataFetcher $data_fetcher) : TableInterface
    {
        return new Table($table_id, $action_url, $title, $columns, $data_fetcher);
    }
}
