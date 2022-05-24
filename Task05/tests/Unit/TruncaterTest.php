<?php

namespace rmvit\Tests;
use \PHPUnit\Framework\TestCase;
use rmvit\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Иневаткина Ксения Михайловна...', $truncater->truncate('Иневаткина Ксения Михайловна'));
        $this->assertSame('Иневатки...', $truncater->truncate('Иневаткина Ксения Михайловна', ['length' => 10]));
        $this->assertSame('Иневаткина Ксения Михайловна...', $truncater->truncate('Иневаткина Ксения Михайловна', ['length' => 50]));
        $this->assertSame('Иневаткина Ксения Михайловна...', $truncater->truncate('Иневаткина Ксения Михайловна', ['length' => -10]));
        $this->assertSame('Иневатки*', $truncater->truncate('Иневаткина Ксения Михайловна', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Иневаткина Ксения Михайловна*', $truncater->truncate('Иневаткина Ксения Михайловна', ['separator' => '*']));
    }
}
