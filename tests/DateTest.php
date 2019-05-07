<?php
/**
 * Created by PhpStorm.
 * User: yiranzai
 * Date: 19-3-22
 * Time: 上午11:46
 */

namespace Yiranzai\Tools\Tests;

use PHPUnit\Framework\TestCase;
use Yiranzai\Tools\Date;

class DateTest extends TestCase
{
    public function testDate()
    {
        $tOne      = time();
        $tTwo      = $tOne + 8754620;
        $dateOne   = date('Y-m-d', $tOne);
        $dateTwo   = date('Y-m-d', $tTwo);
        $carbonOne = Date::toCarbon($tOne);
        $carbonTwo = Date::toCarbon($tTwo);
        $this->assertSame($dateOne, $carbonOne->toDateString());
        $this->assertSame($dateTwo, $carbonTwo->toDateString());
        $this->assertSame('3月10日7小时50分钟20秒', Date::timeDiffFormat(Date::toCarbon($carbonOne), $carbonTwo));
        $this->assertSame('-3月10日7小时50分钟20秒', Date::timeDiffFormat($carbonTwo, $carbonOne, true));
        $this->assertSame(1, Date::toCarbon('asdldkas;[]padsads', 1));
    }
}
