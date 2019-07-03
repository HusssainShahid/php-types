<?php
declare(strict_types=1);

namespace email;

use jsys\types\email\Subject;
use PHPUnit\Framework\TestCase;


/**
 * @property  expectExceptionCode
 */
class SubjectTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function test_must_not_initialize_with_email_subject_greater_then_1024()
    {
        $max = Subject::MAX_LENGTH;
        $actual = str_repeat("a", 79);
        $this->expectExceptionCode(1004);
        $this->expectExceptionMessage('Given string should not be greater then 78');
        $emailSubject = new Subject($actual);
    }
    public function test_must_not_initialize_with_email_subject_each_line_greater_than_78_characters()
    {
        $actual = str_repeat("a", 79);
      echo <<<EOT
        $actual
        $actual
       EOT;
        Subject::MAX_LENGTH;
        $this->expectExceptionCode(1004);
        $this->expectExceptionMessage('Given string should not be greater then 78');
        $emailSubject = new Subject($actual);
    }

    public function test_can_initialize_with_valid_subject_characters()
    {
        $max = Subject::MAX_LENGTH;
        $actual = str_repeat("a", 75);
        $emailSubject = new Subject($actual);
        $this->assertInstanceOf('jsys\types\email\Subject', $emailSubject);
        $this->assertEquals('jsys\types\email\Subject', get_class($emailSubject));
        $this->assertEquals($emailSubject->value(), $actual, 'Both must get the same value');
    }

    public function tearDown(): void
    {
    }
}
