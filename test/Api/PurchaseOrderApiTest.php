<?php
/**
 * PurchaseOrderApiTest
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
 * PurchaseOrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for purchaseOrderGetAllOrder
     *
     * Get a range of Purchase Order - ScreenId=PO301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added forced pagination.
     *
     */
    public function testPurchaseOrderGetAllOrder()
    {
    }

    /**
     * Test case for purchaseOrderGetOrderByorderNbr
     *
     * Get a specific Purchase Order.
     *
     */
    public function testPurchaseOrderGetOrderByorderNbr()
    {
    }

    /**
     * Test case for purchaseOrderPost
     *
     * Create a Purchase Order.
     *
     */
    public function testPurchaseOrderPost()
    {
    }

    /**
     * Test case for purchaseOrderPutBypurchaseOrderNumber
     *
     * Update a Purchase Order.
     *
     */
    public function testPurchaseOrderPutBypurchaseOrderNumber()
    {
    }
}
