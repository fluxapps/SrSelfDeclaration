<?php

namespace srag\DataTableUI\SrSelfDeclaration\Component\Column\Formatter;

use srag\DataTableUI\SrSelfDeclaration\Component\Column\Formatter\Actions\Factory as ActionsFactory;

/**
 * Interface Factory
 *
 * @package srag\DataTableUI\SrSelfDeclaration\Component\Column\Formatter
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface Factory
{

    /**
     * @return ActionsFactory
     */
    public function actions() : ActionsFactory;


    /**
     * @param array $chain
     *
     * @return Formatter
     */
    public function chainGetter(array $chain) : Formatter;


    /**
     * @return Formatter
     */
    public function check() : Formatter;


    /**
     * @return Formatter
     */
    public function date() : Formatter;


    /**
     * @return Formatter
     */
    public function default() : Formatter;


    /**
     * @return Formatter
     */
    public function image() : Formatter;


    /**
     * @param string $prefix
     *
     * @return Formatter
     */
    public function languageVariable(string $prefix) : Formatter;


    /**
     * @return Formatter
     */
    public function learningProgress() : Formatter;


    /**
     * @return Formatter
     */
    public function link() : Formatter;


    /**
     * @return Formatter
     */
    public function multiline() : Formatter;
}
