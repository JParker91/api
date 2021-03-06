<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Tests\Api;

class CreditsTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetCredit()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with($this->getRequest('https://api.themoviedb.org/3/credit/5240760b5dbf5b0c2c0139db'));

        $api->getCredit('5240760b5dbf5b0c2c0139db');
    }

    protected function getApiClass()
    {
        return 'Tmdb\Api\Credits';
    }
}
