<?php
/**
 * Copyright 2011 Bas de Nooijer. All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 *    this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 *    this listof conditions and the following disclaimer in the documentation
 *    and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * The views and conclusions contained in the software and documentation are
 * those of the authors and should not be interpreted as representing official
 * policies, either expressed or implied, of the copyright holder.
 */

/**
 * Select query facet result
 */
class Solarium_Result_Select_Facet_Field implements Iterator, Countable
{

    /**
     * Value array
     *
     * @var array
     */
    protected $_values;
    
    /**
     * Constructor
     *
     * @param array $values
     * @return void
     */
    public function __construct($values)
    {
        $this->_values = $values;
    }

    /**
     * Get all values
     *
     * @return array
     */
    public function getValues()
    {
        return $this->_values;
    }
    
    /**
     * Count method for Countable interface
     *
     * @return int
     */
    public function count()
    {
        return count($this->_values);
    }

    /**
     * Iterator implementation
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->_values);
    }

    /**
     * Iterator implementation
     *
     * @return Solarium_Result_Select_Document
     */
    function current()
    {
        return current($this->_values);
    }

    /**
     * Iterator implementation
     *
     * @return integer
     */
    public function key()
    {
        return key($this->_values);
    }

    /**
     * Iterator implementation
     *
     * @return void
     */
    public function next()
    {
        next($this->_values);
    }

    /**
     * Iterator implementation
     *
     * @return boolean
     */
    public function valid()
    {
        return (current($this->_values) !== false);
    }
    
}