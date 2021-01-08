<?php

namespace srag\DataTableUI\SrSelfDeclaration\Component\Data\Row;

/**
 * Interface RowData
 *
 * @package srag\DataTableUI\SrSelfDeclaration\Component\Data\Row
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface RowData
{

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function __invoke(string $key);


    /**
     * @return object
     */
    public function getOriginalData()/* : object*/;


    /**
     * @return string
     */
    public function getRowId() : string;


    /**
     * @param object $original_data
     *
     * @return self
     */
    public function withOriginalData(/*object*/ $original_data) : self;


    /**
     * @param string $row_id
     *
     * @return self
     */
    public function withRowId(string $row_id) : self;
}
