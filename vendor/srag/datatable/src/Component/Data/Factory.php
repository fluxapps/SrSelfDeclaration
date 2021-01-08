<?php

namespace srag\DataTableUI\SrSelfDeclaration\Component\Data;

use srag\DataTableUI\SrSelfDeclaration\Component\Data\Fetcher\Factory as FetcherFactory;
use srag\DataTableUI\SrSelfDeclaration\Component\Data\Row\Factory as RowFactory;
use srag\DataTableUI\SrSelfDeclaration\Component\Data\Row\RowData;

/**
 * Interface Factory
 *
 * @package srag\DataTableUI\SrSelfDeclaration\Component\Data
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface Factory
{

    /**
     * @param RowData[] $data
     * @param int       $max_count
     *
     * @return Data
     */
    public function data(array $data, int $max_count) : Data;


    /**
     * @return FetcherFactory
     */
    public function fetcher() : FetcherFactory;


    /**
     * @return RowFactory
     */
    public function row() : RowFactory;
}
