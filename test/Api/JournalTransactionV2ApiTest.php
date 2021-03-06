<?php
/**
 * JournalTransactionV2ApiTest
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
 * JournalTransactionV2ApiTest Class Doc Comment
 *
 * @category Class
 * @package  Ekstralys\VismaNetApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalTransactionV2ApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for journalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber
     *
     * Creates an attachment and associates it with an journalTransaction. If the file already exists, a new revision is created..
     *
     */
    public function testJournalTransactionV2CreateHeaderAttachmentByjournalTransactionNumber()
    {
    }

    /**
     * Test case for journalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber
     *
     * Creates an attachment and associates it with a certain journalTransaction line. If the file already exists, a new revision is created..
     *
     */
    public function testJournalTransactionV2CreateLineAttachmentByjournalTransactionNumberlineNumber()
    {
    }

    /**
     * Test case for journalTransactionV2GetAllJournalTransactions
     *
     * Get a range of Journal Transactions - ScreenId=GL301000.   On this particular endpoint, pagesize and totalcount denotes number of journaltransaction lines.   When using pagination, the transactions for one specific batch can be split into several responses.   Please use a page size lower or equal to the allowed max page size which is returned under metadata.   If pagesize is greater than the max page size, it will be limited to max page size..
     *
     */
    public function testJournalTransactionV2GetAllJournalTransactions()
    {
    }

    /**
     * Test case for journalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber
     *
     * Get a specific Journal Transaction.
     *
     */
    public function testJournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumber()
    {
    }

    /**
     * Test case for journalTransactionV2Post
     *
     * Create a Journal Transaction.
     *
     */
    public function testJournalTransactionV2Post()
    {
    }

    /**
     * Test case for journalTransactionV2PutByjournalTransactionNumber
     *
     * Update a Journal Transaction.
     *
     */
    public function testJournalTransactionV2PutByjournalTransactionNumber()
    {
    }

    /**
     * Test case for journalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber
     *
     * Release journal transaction operation.
     *
     */
    public function testJournalTransactionV2ReleaseJournalTransactionByjournalTransactionNumber()
    {
    }
}
