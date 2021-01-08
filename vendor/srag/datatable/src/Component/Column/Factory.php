<?php

namespace srag\DataTableUI\SrSelfDeclaration\Component\Column;

use srag\DataTableUI\SrSelfDeclaration\Component\Column\Formatter\Factory as FormatterFactory;

/**
 * Interface Factory
 *
 * @package srag\DataTableUI\SrSelfDeclaration\Component\Column
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface Factory
{

    /**
     * @param string $key
     * @param string $title
     *
     * @return Column
     */
    public function column(string $key, string $title) : Column;


    /**
     * @return FormatterFactory
     */
    public function formatter() : FormatterFactory;
}
