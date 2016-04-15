<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/RemoteTest.php
 */
namespace JaegerApp\tests\Remote;

use JaegerApp\Remote\Dropbox;

/**
 * mithra62 - Dropbox Remote Object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Remote\Dropbox object
 *
 * @package mithra62\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class DropboxTest extends \PHPUnit_Framework_TestCase
{

    public function testConnect()
    {
        $creds = $this->getDropboxCreds();
        $s3 = Dropbox::getRemoteClient($creds['dropbox_access_token'], $creds['dropbox_app_secret']);
        $this->assertInstanceOf('Dropbox\Client', $s3);
    }
    
    /**
     * The Dropbox API testing detalis
     *
     * @return array
     */
    protected function getDropboxCreds()
    {
        return include 'data/dropboxcreds.config.php';
    }
}