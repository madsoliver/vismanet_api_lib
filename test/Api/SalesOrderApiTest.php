<?php
/**
 * SalesOrderApiTest
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
 * SalesOrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrderApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for salesOrderCancelSalesOrderBysaleOrderNumber
     *
     * Cancel Order action.
     *
     */
    public function testSalesOrderCancelSalesOrderBysaleOrderNumber()
    {
    }

    /**
     * Test case for salesOrderCreateHeaderAttachmentByorderNumber
     *
     * Creates an attachment and associates it with a sales order. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type..
     *
     */
    public function testSalesOrderCreateHeaderAttachmentByorderNumber()
    {
    }

    /**
     * Test case for salesOrderCreateHeaderAttachmentByorderNumberorderType
     *
     * Creates an attachment and associates it with a sales order on a specific order type. If the file already exists, a new revision is created..
     *
     */
    public function testSalesOrderCreateHeaderAttachmentByorderNumberorderType()
    {
    }

    /**
     * Test case for salesOrderCreateLineAttachmentByorderNumberlineNumber
     *
     * Creates an attachment and associates it with a certain sales order line. If the file already exists, a new revision is created.  - Method is deprecated and will be removed in a future version. Please start using the new method with order type..
     *
     */
    public function testSalesOrderCreateLineAttachmentByorderNumberlineNumber()
    {
    }

    /**
     * Test case for salesOrderCreateLineAttachmentByorderNumberorderTypelineNumber
     *
     * Creates an attachment and associates it with a certain sales order line on a specific order type. If the file already exists, a new revision is created..
     *
     */
    public function testSalesOrderCreateLineAttachmentByorderNumberorderTypelineNumber()
    {
    }

    /**
     * Test case for salesOrderCreateShipmentActionBysaleOrderNumber
     *
     * Create shipment operation.
     *
     */
    public function testSalesOrderCreateShipmentActionBysaleOrderNumber()
    {
    }

    /**
     * Test case for salesOrderGetAllOrders
     *
     * Get a range of SO Orders - ScreenId=SO301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size  Change log:  2020-May:Added force pagination.
     *
     */
    public function testSalesOrderGetAllOrders()
    {
    }

    /**
     * Test case for salesOrderGetByorderNbr
     *
     * Get a specific SO Order.
     *
     */
    public function testSalesOrderGetByorderNbr()
    {
    }

    /**
     * Test case for salesOrderGetCommissionsByorderTypeorderNbr
     *
     * Get Sales Order Commissions - ScreenId=SO301000, tab Commissions.
     *
     */
    public function testSalesOrderGetCommissionsByorderTypeorderNbr()
    {
    }

    /**
     * Test case for salesOrderGetOrderByTypeByorderTypeorderNbr
     *
     * Get a specific type of Order.
     *
     */
    public function testSalesOrderGetOrderByTypeByorderTypeorderNbr()
    {
    }

    /**
     * Test case for salesOrderGetROTRUTByorderTypeorderNbr
     *
     * Get ROT/RUT details for a specific type of order.
     *
     */
    public function testSalesOrderGetROTRUTByorderTypeorderNbr()
    {
    }

    /**
     * Test case for salesOrderPost
     *
     * Create a Sale Order.
     *
     */
    public function testSalesOrderPost()
    {
    }

    /**
     * Test case for salesOrderPrintOrderByorderNumberorderType
     *
     * Get the print report of the Sales Order Quote.
     *
     */
    public function testSalesOrderPrintOrderByorderNumberorderType()
    {
    }

    /**
     * Test case for salesOrderPutByorderNbr
     *
     * Update a specific Sale Order.
     *
     */
    public function testSalesOrderPutByorderNbr()
    {
    }

    /**
     * Test case for salesOrderReopenSalesOrderBysalesOrderNumber
     *
     * Reopen and update a specific Sales Order. This method requires a sales order update dto where the order type is initialised..
     *
     */
    public function testSalesOrderReopenSalesOrderBysalesOrderNumber()
    {
    }
}
