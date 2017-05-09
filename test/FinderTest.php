<?php namespace SimilarText\Test;

use \SimilarText\Finder;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testOk() {
//        $this->assertTrue(true);


// AJOUT D'UN COMM HISTOIRE DE
        $a = new Finder('bannane', ["kiwi", "banane"]);
//        echo $a->First();
//        $a->First() == 'banana'; 
        $this->assertEquals(
        	"banane",
        	$a->First()
        );
    }
}
