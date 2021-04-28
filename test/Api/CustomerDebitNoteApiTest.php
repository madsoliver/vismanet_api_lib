<?php
/**
 * CustomerDebitNoteApiTest
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
 * CustomerDebitNoteApiTest Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDebitNoteApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for customerDebitNoteCreate
     *
     * Create a Debit Note. Method is deprecated and will be removed starting May 2021 - start using new method CustomerDebitNoteV2 endpoint..
     *
     */
    public function testCustomerDebitNoteCreate()
    {
    }

    /**
     * Test case for customerDebitNoteCreateHeaderAttachmentBydebitNoteNumber
     *
     * Creates an attachment and associates it with a debit note. If the file already exists, a new revision is created..
     *
     */
    public function testCustomerDebitNoteCreateHeaderAttachmentBydebitNoteNumber()
    {
    }

    /**
     * Test case for customerDebitNoteCreateLineAttachmentBydebitNoteNumberlineNumber
     *
     * Creates an attachment and associates it with a certain debit note line. If the file already exists, a new revision is created..
     *
     */
    public function testCustomerDebitNoteCreateLineAttachmentBydebitNoteNumberlineNumber()
    {
    }

    /**
     * Test case for customerDebitNoteGetAll
     *
     * Get a range of Customer Debit Notes - ScreenId=AR301000  Request page size must be lower or equal to the allowed max page size which is returned as part of the metadata information.  If requested page size is greater than allowed max page size, request will be limited to max page size.
     *
     */
    public function testCustomerDebitNoteGetAll()
    {
    }

    /**
     * Test case for customerDebitNoteGetBydebitNoteNumber
     *
     * Get a specific Customer Debit Note.
     *
     */
    public function testCustomerDebitNoteGetBydebitNoteNumber()
    {
    }

    /**
     * Test case for customerDebitNotePrintBydebitNoteNumber
     *
     * Get the print report of a Customer Debit Note.
     *
     */
    public function testCustomerDebitNotePrintBydebitNoteNumber()
    {
    }

    /**
     * Test case for customerDebitNoteReleaseDocumentBydebitNoteNumber
     *
     * Release debit note operation.
     *
     */
    public function testCustomerDebitNoteReleaseDocumentBydebitNoteNumber()
    {
    }

    /**
     * Test case for customerDebitNoteUpdateBydebitNoteNumber
     *
     * Update a specific Debit Note.
     *
     */
    public function testCustomerDebitNoteUpdateBydebitNoteNumber()
    {
    }
}
