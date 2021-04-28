<?php
/**
 * CustomerInvoiceApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visma Net API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 8.43.00.1002
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Ekstralys\VismaNetApi;

use \Ekstralys\VismaNetApi\Configuration;
use \Ekstralys\VismaNetApi\ApiException;
use \Ekstralys\VismaNetApi\ObjectSerializer;

/**
 * CustomerInvoiceApiTest Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerInvoiceApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for customerInvoiceCreate
     *
     * Create an Invoice. Method is deprecated and will be removed starting May 2021 - start using new method CustomerInvoiceV2 endpoint..
     *
     */
    public function testCustomerInvoiceCreate()
    {
    }

    /**
     * Test case for customerInvoiceCreateHeaderAttachmentByinvoiceNumber
     *
     * Creates an attachment and associates it with an invoice. If the file already exists, a new revision is created..
     *
     */
    public function testCustomerInvoiceCreateHeaderAttachmentByinvoiceNumber()
    {
    }

    /**
     * Test case for customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber
     *
     * Creates an attachment and associates it with a certain invoice line. If the file already exists, a new revision is created..
     *
     */
    public function testCustomerInvoiceCreateLineAttachmentByinvoiceNumberlineNumber()
    {
    }

    /**
     * Test case for customerInvoiceDeleteByinvoiceNumber
     *
     * Deletes a specific Customer Invoice.
     *
     */
    public function testCustomerInvoiceDeleteByinvoiceNumber()
    {
    }

    /**
     * Test case for customerInvoiceGetAll
     *
     * Get a range of Invoices - ScreenId=AR301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added forced pagination.
     *
     */
    public function testCustomerInvoiceGetAll()
    {
    }

    /**
     * Test case for customerInvoiceGetByinvoiceNumber
     *
     * Get a specific Invoice.
     *
     */
    public function testCustomerInvoiceGetByinvoiceNumber()
    {
    }

    /**
     * Test case for customerInvoiceGetRotRutByrefNbr
     *
     * Get Rot Rut informations for a Customer Invoice.
     *
     */
    public function testCustomerInvoiceGetRotRutByrefNbr()
    {
    }

    /**
     * Test case for customerInvoiceGetWorkTypes
     *
     * Get all Work Types.
     *
     */
    public function testCustomerInvoiceGetWorkTypes()
    {
    }

    /**
     * Test case for customerInvoicePrintInvoiceByrefNbr
     *
     * Get the print report of a Customer Invoice.
     *
     */
    public function testCustomerInvoicePrintInvoiceByrefNbr()
    {
    }

    /**
     * Test case for customerInvoiceReleaseInvoiceByinvoiceNumber
     *
     * Release invoice operation.
     *
     */
    public function testCustomerInvoiceReleaseInvoiceByinvoiceNumber()
    {
    }

    /**
     * Test case for customerInvoiceReverseInvoiceByinvoiceNumber
     *
     * Reverse an Invoice.
     *
     */
    public function testCustomerInvoiceReverseInvoiceByinvoiceNumber()
    {
    }

    /**
     * Test case for customerInvoiceUpdateByinvoiceNumber
     *
     * Update a specific Invoice.
     *
     */
    public function testCustomerInvoiceUpdateByinvoiceNumber()
    {
    }
}