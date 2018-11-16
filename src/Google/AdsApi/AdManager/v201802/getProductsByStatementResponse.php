<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getProductsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\ProductPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\ProductPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\ProductPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\ProductPage $rval
     * @return \Google\AdsApi\AdManager\v201802\getProductsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
