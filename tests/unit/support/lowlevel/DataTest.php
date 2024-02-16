<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Test
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace support\lowlevel;

use FireHub\Core\Testing\Base;
use FireHub\Core\Support\LowLevel\{
    Data, DataIs
};
use FireHub\Core\Support\Contracts\{
    Countable, Iterator\IterablesAggregate
};
use PHPUnit\Framework\Attributes\CoversClass;
use FireHub\Core\Support\Enums\Data\ {
    Category, Type
};
use Error, Stringable, Traversable;

/**
 * ### Test data low-level proxy class
 * @since 1.0.0
 */
#[CoversClass(Data::class)]
#[CoversClass(DataIs::class)]
#[CoversClass(Type::class)]
final class DataTest extends Base {

    public array $empty_arr = [];
    public array $list = [1,2,3];
    public array $assoc_arr = ['one' => 1, 'two' => 2, 'three' => 3];
    public array $multi_dim_array = ['one' => [1,2,3], 'two' => [4,5,6], 'three' => [7,8,9]];

    public int $zero_int = 0;
    public int $int = 10;
    public int $negative_int = -5;

    public float $zero_float = 0.00;
    public float $float = 12.355;
    public float $negative_float = -5.2;

    public string $empty_string = '';
    public string $short_string = 'Short';
    public string $long_string = 'This is long string.';

    public bool $true = true;
    public bool $false = false;

    public null $null = null;

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testArray ():void {

        $this->assertTrue(DataIs::array($this->empty_arr));
        $this->assertTrue(DataIs::array($this->list));
        $this->assertTrue(DataIs::array($this->assoc_arr));
        $this->assertTrue(DataIs::array($this->multi_dim_array));

        $this->assertFalse(DataIs::array($this->zero_int));
        $this->assertFalse(DataIs::array($this->int));
        $this->assertFalse(DataIs::array($this->negative_int));

        $this->assertFalse(DataIs::array($this->zero_float));
        $this->assertFalse(DataIs::array($this->float));
        $this->assertFalse(DataIs::array($this->negative_float));

        $this->assertFalse(DataIs::array($this->empty_string));
        $this->assertFalse(DataIs::array($this->short_string));
        $this->assertFalse(DataIs::array($this->long_string));

        $this->assertFalse(DataIs::array($this->true));
        $this->assertFalse(DataIs::array($this->false));

        $this->assertFalse(DataIs::array($this->null));

        $this->assertFalse(DataIs::array(self::shortCallable()));
        $this->assertFalse(DataIs::array(self::longStaticCallable()));

        $this->assertFalse(DataIs::array(self::emptyObject()));
        $this->assertFalse(DataIs::array(self::callableObject()));
        $this->assertFalse(DataIs::array(self::countableObject()));
        $this->assertFalse(DataIs::array(self::iterableObject()));

        $this->assertFalse(DataIs::array(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testBool ():void {

        $this->assertFalse(DataIs::bool($this->empty_arr));
        $this->assertFalse(DataIs::bool($this->list));
        $this->assertFalse(DataIs::bool($this->assoc_arr));
        $this->assertFalse(DataIs::bool($this->multi_dim_array));

        $this->assertFalse(DataIs::bool($this->zero_int));
        $this->assertFalse(DataIs::bool($this->int));
        $this->assertFalse(DataIs::bool($this->negative_int));

        $this->assertFalse(DataIs::bool($this->zero_float));
        $this->assertFalse(DataIs::bool($this->float));
        $this->assertFalse(DataIs::bool($this->negative_float));

        $this->assertFalse(DataIs::bool($this->empty_string));
        $this->assertFalse(DataIs::bool($this->short_string));
        $this->assertFalse(DataIs::bool($this->long_string));

        $this->assertTrue(DataIs::bool($this->true));
        $this->assertTrue(DataIs::bool($this->false));

        $this->assertFalse(DataIs::bool($this->null));

        $this->assertFalse(DataIs::bool(self::shortCallable()));
        $this->assertFalse(DataIs::bool(self::longStaticCallable()));

        $this->assertFalse(DataIs::bool(self::emptyObject()));
        $this->assertFalse(DataIs::bool(self::callableObject()));
        $this->assertFalse(DataIs::bool(self::countableObject()));
        $this->assertFalse(DataIs::bool(self::iterableObject()));

        $this->assertFalse(DataIs::bool(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCallable ():void {

        $this->assertFalse(DataIs::callable($this->empty_arr));
        $this->assertFalse(DataIs::callable($this->list));
        $this->assertFalse(DataIs::callable($this->assoc_arr));
        $this->assertFalse(DataIs::callable($this->multi_dim_array));

        $this->assertFalse(DataIs::callable($this->zero_int));
        $this->assertFalse(DataIs::callable($this->int));
        $this->assertFalse(DataIs::callable($this->negative_int));

        $this->assertFalse(DataIs::callable($this->zero_float));
        $this->assertFalse(DataIs::callable($this->float));
        $this->assertFalse(DataIs::callable($this->negative_float));

        $this->assertFalse(DataIs::callable($this->empty_string));
        $this->assertFalse(DataIs::callable($this->short_string));
        $this->assertFalse(DataIs::callable($this->long_string));

        $this->assertFalse(DataIs::callable($this->true));
        $this->assertFalse(DataIs::callable($this->false));

        $this->assertFalse(DataIs::callable($this->null));

        $this->assertTrue(DataIs::callable(self::shortCallable()));
        $this->assertTrue(DataIs::callable(self::longStaticCallable()));

        $this->assertFalse(DataIs::callable(self::emptyObject()));
        $this->assertTrue(DataIs::callable(self::callableObject()));
        $this->assertFalse(DataIs::callable(self::countableObject()));
        $this->assertFalse(DataIs::callable(self::iterableObject()));

        $this->assertFalse(DataIs::callable(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCountable ():void {

        $this->assertTrue(DataIs::countable($this->empty_arr));
        $this->assertTrue(DataIs::countable($this->list));
        $this->assertTrue(DataIs::countable($this->assoc_arr));
        $this->assertTrue(DataIs::countable($this->multi_dim_array));

        $this->assertFalse(DataIs::countable($this->zero_int));
        $this->assertFalse(DataIs::countable($this->int));
        $this->assertFalse(DataIs::countable($this->negative_int));

        $this->assertFalse(DataIs::countable($this->zero_float));
        $this->assertFalse(DataIs::countable($this->float));
        $this->assertFalse(DataIs::countable($this->negative_float));

        $this->assertFalse(DataIs::countable($this->empty_string));
        $this->assertFalse(DataIs::countable($this->short_string));
        $this->assertFalse(DataIs::countable($this->long_string));

        $this->assertFalse(DataIs::countable($this->true));
        $this->assertFalse(DataIs::countable($this->false));

        $this->assertFalse(DataIs::countable($this->null));

        $this->assertFalse(DataIs::countable(self::shortCallable()));
        $this->assertFalse(DataIs::countable(self::longStaticCallable()));

        $this->assertFalse(DataIs::countable(self::emptyObject()));
        $this->assertFalse(DataIs::countable(self::callableObject()));
        $this->assertTrue(DataIs::countable(self::countableObject()));
        $this->assertFalse(DataIs::countable(self::iterableObject()));

        $this->assertFalse(DataIs::countable(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testFloat ():void {

        $this->assertFalse(DataIs::float($this->empty_arr));
        $this->assertFalse(DataIs::float($this->list));
        $this->assertFalse(DataIs::float($this->assoc_arr));
        $this->assertFalse(DataIs::float($this->multi_dim_array));

        $this->assertFalse(DataIs::float($this->zero_int));
        $this->assertFalse(DataIs::float($this->int));
        $this->assertFalse(DataIs::float($this->negative_int));

        $this->assertTrue(DataIs::float($this->zero_float));
        $this->assertTrue(DataIs::float($this->float));
        $this->assertTrue(DataIs::float($this->negative_float));

        $this->assertFalse(DataIs::float($this->empty_string));
        $this->assertFalse(DataIs::float($this->short_string));
        $this->assertFalse(DataIs::float($this->long_string));

        $this->assertFalse(DataIs::float($this->true));
        $this->assertFalse(DataIs::float($this->false));

        $this->assertFalse(DataIs::float($this->null));

        $this->assertFalse(DataIs::float(self::shortCallable()));
        $this->assertFalse(DataIs::float(self::longStaticCallable()));

        $this->assertFalse(DataIs::float(self::emptyObject()));
        $this->assertFalse(DataIs::float(self::callableObject()));
        $this->assertFalse(DataIs::float(self::countableObject()));
        $this->assertFalse(DataIs::float(self::iterableObject()));

        $this->assertFalse(DataIs::float(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testInt ():void {

        $this->assertFalse(DataIs::int($this->empty_arr));
        $this->assertFalse(DataIs::int($this->list));
        $this->assertFalse(DataIs::int($this->assoc_arr));
        $this->assertFalse(DataIs::int($this->multi_dim_array));

        $this->assertTrue(DataIs::int($this->zero_int));
        $this->assertTrue(DataIs::int($this->int));
        $this->assertTrue(DataIs::int($this->negative_int));

        $this->assertFalse(DataIs::int($this->zero_float));
        $this->assertFalse(DataIs::int($this->float));
        $this->assertFalse(DataIs::int($this->negative_float));

        $this->assertFalse(DataIs::int($this->empty_string));
        $this->assertFalse(DataIs::int($this->short_string));
        $this->assertFalse(DataIs::int($this->long_string));

        $this->assertFalse(DataIs::int($this->true));
        $this->assertFalse(DataIs::int($this->false));

        $this->assertFalse(DataIs::int($this->null));

        $this->assertFalse(DataIs::int(self::shortCallable()));
        $this->assertFalse(DataIs::int(self::longStaticCallable()));

        $this->assertFalse(DataIs::int(self::emptyObject()));
        $this->assertFalse(DataIs::int(self::callableObject()));
        $this->assertFalse(DataIs::int(self::countableObject()));
        $this->assertFalse(DataIs::int(self::iterableObject()));

        $this->assertFalse(DataIs::int(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testIterable ():void {

        $this->assertTrue(DataIs::iterable($this->empty_arr));
        $this->assertTrue(DataIs::iterable($this->list));
        $this->assertTrue(DataIs::iterable($this->assoc_arr));
        $this->assertTrue(DataIs::iterable($this->multi_dim_array));

        $this->assertFalse(DataIs::iterable($this->zero_int));
        $this->assertFalse(DataIs::iterable($this->int));
        $this->assertFalse(DataIs::iterable($this->negative_int));

        $this->assertFalse(DataIs::iterable($this->zero_float));
        $this->assertFalse(DataIs::iterable($this->float));
        $this->assertFalse(DataIs::iterable($this->negative_float));

        $this->assertFalse(DataIs::iterable($this->empty_string));
        $this->assertFalse(DataIs::iterable($this->short_string));
        $this->assertFalse(DataIs::iterable($this->long_string));

        $this->assertFalse(DataIs::iterable($this->true));
        $this->assertFalse(DataIs::iterable($this->false));

        $this->assertFalse(DataIs::iterable($this->null));

        $this->assertFalse(DataIs::iterable(self::shortCallable()));
        $this->assertFalse(DataIs::iterable(self::longStaticCallable()));

        $this->assertFalse(DataIs::iterable(self::emptyObject()));
        $this->assertFalse(DataIs::iterable(self::callableObject()));
        $this->assertFalse(DataIs::iterable(self::countableObject()));
        $this->assertTrue(DataIs::iterable(self::iterableObject()));

        $this->assertFalse(DataIs::iterable(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testNull ():void {

        $this->assertFalse(DataIs::null($this->empty_arr));
        $this->assertFalse(DataIs::null($this->list));
        $this->assertFalse(DataIs::null($this->assoc_arr));
        $this->assertFalse(DataIs::null($this->multi_dim_array));

        $this->assertFalse(DataIs::null($this->zero_int));
        $this->assertFalse(DataIs::null($this->int));
        $this->assertFalse(DataIs::null($this->negative_int));

        $this->assertFalse(DataIs::null($this->zero_float));
        $this->assertFalse(DataIs::null($this->float));
        $this->assertFalse(DataIs::null($this->negative_float));

        $this->assertFalse(DataIs::null($this->empty_string));
        $this->assertFalse(DataIs::null($this->short_string));
        $this->assertFalse(DataIs::null($this->long_string));

        $this->assertFalse(DataIs::null($this->true));
        $this->assertFalse(DataIs::null($this->false));

        $this->assertTrue(DataIs::null($this->null));

        $this->assertFalse(DataIs::null(self::shortCallable()));
        $this->assertFalse(DataIs::null(self::longStaticCallable()));

        $this->assertFalse(DataIs::null(self::emptyObject()));
        $this->assertFalse(DataIs::null(self::callableObject()));
        $this->assertFalse(DataIs::null(self::countableObject()));
        $this->assertFalse(DataIs::null(self::iterableObject()));

        $this->assertFalse(DataIs::null(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testNumeric ():void {

        $this->assertFalse(DataIs::numeric($this->empty_arr));
        $this->assertFalse(DataIs::numeric($this->list));
        $this->assertFalse(DataIs::numeric($this->assoc_arr));
        $this->assertFalse(DataIs::numeric($this->multi_dim_array));

        $this->assertTrue(DataIs::numeric($this->zero_int));
        $this->assertTrue(DataIs::numeric($this->int));
        $this->assertTrue(DataIs::numeric($this->negative_int));

        $this->assertTrue(DataIs::numeric($this->zero_float));
        $this->assertTrue(DataIs::numeric($this->float));
        $this->assertTrue(DataIs::numeric($this->negative_float));

        $this->assertFalse(DataIs::numeric($this->empty_string));
        $this->assertFalse(DataIs::numeric($this->short_string));
        $this->assertFalse(DataIs::numeric($this->long_string));

        $this->assertFalse(DataIs::numeric($this->true));
        $this->assertFalse(DataIs::numeric($this->false));

        $this->assertFalse(DataIs::numeric($this->null));

        $this->assertFalse(DataIs::numeric(self::shortCallable()));
        $this->assertFalse(DataIs::numeric(self::longStaticCallable()));

        $this->assertFalse(DataIs::numeric(self::emptyObject()));
        $this->assertFalse(DataIs::numeric(self::callableObject()));
        $this->assertFalse(DataIs::numeric(self::countableObject()));
        $this->assertFalse(DataIs::numeric(self::iterableObject()));

        $this->assertFalse(DataIs::numeric(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testObject ():void {

        $this->assertFalse(DataIs::object($this->empty_arr));
        $this->assertFalse(DataIs::object($this->list));
        $this->assertFalse(DataIs::object($this->assoc_arr));
        $this->assertFalse(DataIs::object($this->multi_dim_array));

        $this->assertFalse(DataIs::object($this->zero_int));
        $this->assertFalse(DataIs::object($this->int));
        $this->assertFalse(DataIs::object($this->negative_int));

        $this->assertFalse(DataIs::object($this->zero_float));
        $this->assertFalse(DataIs::object($this->float));
        $this->assertFalse(DataIs::object($this->negative_float));

        $this->assertFalse(DataIs::object($this->empty_string));
        $this->assertFalse(DataIs::object($this->short_string));
        $this->assertFalse(DataIs::object($this->long_string));

        $this->assertFalse(DataIs::object($this->true));
        $this->assertFalse(DataIs::object($this->false));

        $this->assertFalse(DataIs::object($this->null));

        $this->assertTrue(DataIs::object(self::shortCallable()));
        $this->assertTrue(DataIs::object(self::longStaticCallable()));

        $this->assertTrue(DataIs::object(self::emptyObject()));
        $this->assertTrue(DataIs::object(self::callableObject()));
        $this->assertTrue(DataIs::object(self::countableObject()));
        $this->assertTrue(DataIs::object(self::iterableObject()));

        $this->assertFalse(DataIs::object(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testResource ():void {

        $this->assertFalse(DataIs::resource($this->empty_arr));
        $this->assertFalse(DataIs::resource($this->list));
        $this->assertFalse(DataIs::resource($this->assoc_arr));
        $this->assertFalse(DataIs::resource($this->multi_dim_array));

        $this->assertFalse(DataIs::resource($this->zero_int));
        $this->assertFalse(DataIs::resource($this->int));
        $this->assertFalse(DataIs::resource($this->negative_int));

        $this->assertFalse(DataIs::resource($this->zero_float));
        $this->assertFalse(DataIs::resource($this->float));
        $this->assertFalse(DataIs::resource($this->negative_float));

        $this->assertFalse(DataIs::resource($this->empty_string));
        $this->assertFalse(DataIs::resource($this->short_string));
        $this->assertFalse(DataIs::resource($this->long_string));

        $this->assertFalse(DataIs::resource($this->true));
        $this->assertFalse(DataIs::resource($this->false));

        $this->assertFalse(DataIs::resource($this->null));

        $this->assertFalse(DataIs::resource(self::shortCallable()));
        $this->assertFalse(DataIs::resource(self::longStaticCallable()));

        $this->assertFalse(DataIs::resource(self::emptyObject()));
        $this->assertFalse(DataIs::resource(self::callableObject()));
        $this->assertFalse(DataIs::resource(self::countableObject()));
        $this->assertFalse(DataIs::resource(self::iterableObject()));

        $this->assertTrue(DataIs::resource(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testScalar ():void {

        $this->assertFalse(DataIs::scalar($this->empty_arr));
        $this->assertFalse(DataIs::scalar($this->list));
        $this->assertFalse(DataIs::scalar($this->assoc_arr));
        $this->assertFalse(DataIs::scalar($this->multi_dim_array));

        $this->assertTrue(DataIs::scalar($this->zero_int));
        $this->assertTrue(DataIs::scalar($this->int));
        $this->assertTrue(DataIs::scalar($this->negative_int));

        $this->assertTrue(DataIs::scalar($this->zero_float));
        $this->assertTrue(DataIs::scalar($this->float));
        $this->assertTrue(DataIs::scalar($this->negative_float));

        $this->assertTrue(DataIs::scalar($this->empty_string));
        $this->assertTrue(DataIs::scalar($this->short_string));
        $this->assertTrue(DataIs::scalar($this->long_string));

        $this->assertTrue(DataIs::scalar($this->true));
        $this->assertTrue(DataIs::scalar($this->false));

        $this->assertFalse(DataIs::scalar($this->null));

        $this->assertFalse(DataIs::scalar(self::shortCallable()));
        $this->assertFalse(DataIs::scalar(self::longStaticCallable()));

        $this->assertFalse(DataIs::scalar(self::emptyObject()));
        $this->assertFalse(DataIs::scalar(self::callableObject()));
        $this->assertFalse(DataIs::scalar(self::countableObject()));
        $this->assertFalse(DataIs::scalar(self::iterableObject()));

        $this->assertFalse(DataIs::scalar(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testString ():void {

        $this->assertFalse(DataIs::string($this->empty_arr));
        $this->assertFalse(DataIs::string($this->list));
        $this->assertFalse(DataIs::string($this->assoc_arr));
        $this->assertFalse(DataIs::string($this->multi_dim_array));

        $this->assertFalse(DataIs::string($this->zero_int));
        $this->assertFalse(DataIs::string($this->int));
        $this->assertFalse(DataIs::string($this->negative_int));

        $this->assertFalse(DataIs::string($this->zero_float));
        $this->assertFalse(DataIs::string($this->float));
        $this->assertFalse(DataIs::string($this->negative_float));

        $this->assertTrue(DataIs::string($this->empty_string));
        $this->assertTrue(DataIs::string($this->short_string));
        $this->assertTrue(DataIs::string($this->long_string));

        $this->assertFalse(DataIs::string($this->true));
        $this->assertFalse(DataIs::string($this->false));

        $this->assertFalse(DataIs::string($this->null));

        $this->assertFalse(DataIs::string(self::shortCallable()));
        $this->assertFalse(DataIs::string(self::longStaticCallable()));

        $this->assertFalse(DataIs::string(self::emptyObject()));
        $this->assertFalse(DataIs::string(self::callableObject()));
        $this->assertFalse(DataIs::string(self::countableObject()));
        $this->assertFalse(DataIs::string(self::iterableObject()));

        $this->assertFalse(DataIs::string(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testGetType ():void {

        $this->assertSame(Type::T_ARRAY, Data::getType($this->empty_arr));
        $this->assertSame(Type::T_ARRAY, Data::getType($this->list));
        $this->assertSame(Type::T_ARRAY, Data::getType($this->assoc_arr));
        $this->assertSame(Type::T_ARRAY, Data::getType($this->multi_dim_array));
        $this->assertNotSame(Type::T_INT, Data::getType($this->empty_arr));
        $this->assertNotSame(Type::T_INT, Data::getType($this->list));
        $this->assertNotSame(Type::T_INT, Data::getType($this->assoc_arr));
        $this->assertNotSame(Type::T_INT, Data::getType($this->multi_dim_array));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->empty_arr));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->list));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->assoc_arr));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->multi_dim_array));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->empty_arr));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->list));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->assoc_arr));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->multi_dim_array));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->empty_arr));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->list));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->assoc_arr));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->multi_dim_array));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->empty_arr));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->list));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->assoc_arr));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->multi_dim_array));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->empty_arr));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->list));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->assoc_arr));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->multi_dim_array));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->empty_arr));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->list));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->assoc_arr));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->multi_dim_array));

        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->zero_int));
        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->int));
        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->negative_int));
        $this->assertSame(Type::T_INT, Data::getType($this->zero_int));
        $this->assertSame(Type::T_INT, Data::getType($this->int));
        $this->assertSame(Type::T_INT, Data::getType($this->negative_int));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->zero_int));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->int));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->negative_int));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->zero_int));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->int));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->negative_int));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->zero_int));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->int));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->negative_int));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->zero_int));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->int));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->negative_int));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->zero_int));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->int));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->negative_int));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->zero_int));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->int));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->negative_int));

        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->zero_float));
        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->float));
        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->negative_float));
        $this->assertNotSame(Type::T_INT, Data::getType($this->zero_float));
        $this->assertNotSame(Type::T_INT, Data::getType($this->float));
        $this->assertNotSame(Type::T_INT, Data::getType($this->negative_float));
        $this->assertSame(Type::T_FLOAT, Data::getType($this->zero_float));
        $this->assertSame(Type::T_FLOAT, Data::getType($this->float));
        $this->assertSame(Type::T_FLOAT, Data::getType($this->negative_float));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->zero_float));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->float));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->negative_float));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->zero_float));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->float));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->negative_float));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->zero_float));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->float));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->negative_float));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->zero_float));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->float));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->negative_float));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->zero_float));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->float));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->negative_float));

        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->empty_string));
        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->short_string));
        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->long_string));
        $this->assertNotSame(Type::T_INT, Data::getType($this->empty_string));
        $this->assertNotSame(Type::T_INT, Data::getType($this->short_string));
        $this->assertNotSame(Type::T_INT, Data::getType($this->long_string));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->empty_string));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->short_string));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->long_string));
        $this->assertSame(Type::T_STRING, Data::getType($this->empty_string));
        $this->assertSame(Type::T_STRING, Data::getType($this->short_string));
        $this->assertSame(Type::T_STRING, Data::getType($this->long_string));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->empty_string));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->short_string));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->long_string));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->empty_string));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->short_string));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->long_string));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->empty_string));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->short_string));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->long_string));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->empty_string));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->short_string));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->long_string));

        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->true));
        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->false));
        $this->assertNotSame(Type::T_INT, Data::getType($this->true));
        $this->assertNotSame(Type::T_INT, Data::getType($this->false));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->true));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->false));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->true));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->false));
        $this->assertSame(Type::T_BOOL, Data::getType($this->true));
        $this->assertSame(Type::T_BOOL, Data::getType($this->false));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->true));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->false));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->true));
        $this->assertNotSame(Type::T_NULL, Data::getType($this->false));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->true));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->false));

        $this->assertNotSame(Type::T_ARRAY, Data::getType($this->null));
        $this->assertNotSame(Type::T_INT, Data::getType($this->null));
        $this->assertNotSame(Type::T_FLOAT, Data::getType($this->null));
        $this->assertNotSame(Type::T_STRING, Data::getType($this->null));
        $this->assertNotSame(Type::T_BOOL, Data::getType($this->null));
        $this->assertNotSame(Type::T_OBJECT, Data::getType($this->null));
        $this->assertSame(Type::T_NULL, Data::getType($this->null));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType($this->null));

        $this->assertNotSame(Type::T_ARRAY, Data::getType(self::shortCallable()));
        $this->assertNotSame(Type::T_ARRAY, Data::getType(self::longStaticCallable()));
        $this->assertNotSame(Type::T_INT, Data::getType(self::shortCallable()));
        $this->assertNotSame(Type::T_INT, Data::getType(self::longStaticCallable()));
        $this->assertNotSame(Type::T_FLOAT, Data::getType(self::shortCallable()));
        $this->assertNotSame(Type::T_FLOAT, Data::getType(self::longStaticCallable()));
        $this->assertNotSame(Type::T_STRING, Data::getType(self::shortCallable()));
        $this->assertNotSame(Type::T_STRING, Data::getType(self::longStaticCallable()));
        $this->assertNotSame(Type::T_BOOL, Data::getType(self::shortCallable()));
        $this->assertNotSame(Type::T_BOOL, Data::getType(self::longStaticCallable()));
        $this->assertSame(Type::T_OBJECT, Data::getType(self::shortCallable()));
        $this->assertSame(Type::T_OBJECT, Data::getType(self::longStaticCallable()));
        $this->assertNotSame(Type::T_NULL, Data::getType(self::shortCallable()));
        $this->assertNotSame(Type::T_NULL, Data::getType(self::longStaticCallable()));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType(self::shortCallable()));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType(self::longStaticCallable()));

        $this->assertNotSame(Type::T_ARRAY, Data::getType(self::emptyObject()));
        $this->assertNotSame(Type::T_ARRAY, Data::getType(self::callableObject()));
        $this->assertNotSame(Type::T_ARRAY, Data::getType(self::countableObject()));
        $this->assertNotSame(Type::T_ARRAY, Data::getType(self::iterableObject()));
        $this->assertNotSame(Type::T_INT, Data::getType(self::emptyObject()));
        $this->assertNotSame(Type::T_INT, Data::getType(self::callableObject()));
        $this->assertNotSame(Type::T_INT, Data::getType(self::countableObject()));
        $this->assertNotSame(Type::T_INT, Data::getType(self::iterableObject()));
        $this->assertNotSame(Type::T_FLOAT, Data::getType(self::emptyObject()));
        $this->assertNotSame(Type::T_FLOAT, Data::getType(self::callableObject()));
        $this->assertNotSame(Type::T_FLOAT, Data::getType(self::countableObject()));
        $this->assertNotSame(Type::T_FLOAT, Data::getType(self::iterableObject()));
        $this->assertNotSame(Type::T_STRING, Data::getType(self::emptyObject()));
        $this->assertNotSame(Type::T_STRING, Data::getType(self::callableObject()));
        $this->assertNotSame(Type::T_STRING, Data::getType(self::countableObject()));
        $this->assertNotSame(Type::T_STRING, Data::getType(self::iterableObject()));
        $this->assertNotSame(Type::T_BOOL, Data::getType(self::emptyObject()));
        $this->assertNotSame(Type::T_BOOL, Data::getType(self::callableObject()));
        $this->assertNotSame(Type::T_BOOL, Data::getType(self::countableObject()));
        $this->assertNotSame(Type::T_BOOL, Data::getType(self::iterableObject()));
        $this->assertSame(Type::T_OBJECT, Data::getType(self::emptyObject()));
        $this->assertSame(Type::T_OBJECT, Data::getType(self::callableObject()));
        $this->assertSame(Type::T_OBJECT, Data::getType(self::countableObject()));
        $this->assertSame(Type::T_OBJECT, Data::getType(self::iterableObject()));
        $this->assertNotSame(Type::T_NULL, Data::getType(self::emptyObject()));
        $this->assertNotSame(Type::T_NULL, Data::getType(self::callableObject()));
        $this->assertNotSame(Type::T_NULL, Data::getType(self::countableObject()));
        $this->assertNotSame(Type::T_NULL, Data::getType(self::iterableObject()));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType(self::emptyObject()));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType(self::callableObject()));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType(self::countableObject()));
        $this->assertNotSame(Type::T_RESOURCE, Data::getType(self::iterableObject()));

        $this->assertNotSame(Type::T_ARRAY, Data::getType(self::resource()));
        $this->assertNotSame(Type::T_INT, Data::getType(self::resource()));
        $this->assertNotSame(Type::T_FLOAT, Data::getType(self::resource()));
        $this->assertNotSame(Type::T_STRING, Data::getType(self::resource()));
        $this->assertNotSame(Type::T_BOOL, Data::getType(self::resource()));
        $this->assertNotSame(Type::T_OBJECT, Data::getType(self::resource()));
        $this->assertNotSame(Type::T_NULL, Data::getType(self::resource()));
        $this->assertSame(Type::T_RESOURCE, Data::getType(self::resource()));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetType ():void {

        $this->assertIsArray(Data::setType($this->empty_arr, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->list, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->assoc_arr, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->multi_dim_array, Type::T_ARRAY));
        $this->assertIsInt(Data::setType($this->empty_arr, Type::T_INT));
        $this->assertIsInt(Data::setType($this->list, Type::T_INT));
        $this->assertIsInt(Data::setType($this->assoc_arr, Type::T_INT));
        $this->assertIsInt(Data::setType($this->multi_dim_array, Type::T_INT));
        $this->assertIsFloat(Data::setType($this->empty_arr, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->list, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->assoc_arr, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->multi_dim_array, Type::T_FLOAT));
        $this->assertIsBool(Data::setType($this->empty_arr, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->list, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->assoc_arr, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->multi_dim_array, Type::T_BOOL));
        $this->assertIsObject(Data::setType($this->empty_arr, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->list, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->assoc_arr, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->multi_dim_array, Type::T_OBJECT));
        $this->assertNull(Data::setType($this->empty_arr, Type::T_NULL));
        $this->assertNull(Data::setType($this->list, Type::T_NULL));
        $this->assertNull(Data::setType($this->assoc_arr, Type::T_NULL));
        $this->assertNull(Data::setType($this->multi_dim_array, Type::T_NULL));

        $this->assertIsArray(Data::setType($this->zero_int, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->int, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->negative_int, Type::T_ARRAY));
        $this->assertIsInt(Data::setType($this->zero_int, Type::T_INT));
        $this->assertIsInt(Data::setType($this->int, Type::T_INT));
        $this->assertIsInt(Data::setType($this->negative_int, Type::T_INT));
        $this->assertIsFloat(Data::setType($this->zero_int, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->int, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->negative_int, Type::T_FLOAT));
        $this->assertIsString(Data::setType($this->zero_int, Type::T_STRING));
        $this->assertIsString(Data::setType($this->int, Type::T_STRING));
        $this->assertIsString(Data::setType($this->negative_int, Type::T_STRING));
        $this->assertIsBool(Data::setType($this->zero_int, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->int, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->negative_int, Type::T_BOOL));
        $this->assertIsObject(Data::setType($this->zero_int, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->int, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->negative_int, Type::T_OBJECT));
        $this->assertNull(Data::setType($this->zero_int, Type::T_NULL));
        $this->assertNull(Data::setType($this->int, Type::T_NULL));
        $this->assertNull(Data::setType($this->negative_int, Type::T_NULL));

        $this->assertIsArray(Data::setType($this->zero_float, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->float, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->negative_float, Type::T_ARRAY));
        $this->assertIsInt(Data::setType($this->zero_float, Type::T_INT));
        $this->assertIsInt(Data::setType($this->float, Type::T_INT));
        $this->assertIsInt(Data::setType($this->negative_float, Type::T_INT));
        $this->assertIsFloat(Data::setType($this->zero_float, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->float, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->negative_float, Type::T_FLOAT));
        $this->assertIsString(Data::setType($this->zero_float, Type::T_STRING));
        $this->assertIsString(Data::setType($this->float, Type::T_STRING));
        $this->assertIsString(Data::setType($this->negative_float, Type::T_STRING));
        $this->assertIsBool(Data::setType($this->zero_float, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->float, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->negative_float, Type::T_BOOL));
        $this->assertIsObject(Data::setType($this->zero_float, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->float, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->negative_float, Type::T_OBJECT));
        $this->assertNull(Data::setType($this->zero_float, Type::T_NULL));
        $this->assertNull(Data::setType($this->float, Type::T_NULL));
        $this->assertNull(Data::setType($this->negative_float, Type::T_NULL));

        $this->assertIsArray(Data::setType($this->empty_string, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->short_string, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->long_string, Type::T_ARRAY));
        $this->assertIsInt(Data::setType($this->empty_string, Type::T_INT));
        $this->assertIsInt(Data::setType($this->short_string, Type::T_INT));
        $this->assertIsInt(Data::setType($this->long_string, Type::T_INT));
        $this->assertIsFloat(Data::setType($this->empty_string, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->short_string, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->long_string, Type::T_FLOAT));
        $this->assertIsString(Data::setType($this->empty_string, Type::T_STRING));
        $this->assertIsString(Data::setType($this->short_string, Type::T_STRING));
        $this->assertIsString(Data::setType($this->long_string, Type::T_STRING));
        $this->assertIsBool(Data::setType($this->empty_string, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->short_string, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->long_string, Type::T_BOOL));
        $this->assertIsObject(Data::setType($this->empty_string, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->short_string, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->long_string, Type::T_OBJECT));
        $this->assertNull(Data::setType($this->empty_string, Type::T_NULL));
        $this->assertNull(Data::setType($this->short_string, Type::T_NULL));
        $this->assertNull(Data::setType($this->long_string, Type::T_NULL));

        $this->assertIsArray(Data::setType($this->true, Type::T_ARRAY));
        $this->assertIsArray(Data::setType($this->false, Type::T_ARRAY));
        $this->assertIsInt(Data::setType($this->true, Type::T_INT));
        $this->assertIsInt(Data::setType($this->false, Type::T_INT));
        $this->assertIsFloat(Data::setType($this->true, Type::T_FLOAT));
        $this->assertIsFloat(Data::setType($this->false, Type::T_FLOAT));
        $this->assertIsString(Data::setType($this->true, Type::T_STRING));
        $this->assertIsString(Data::setType($this->false, Type::T_STRING));
        $this->assertIsBool(Data::setType($this->true, Type::T_BOOL));
        $this->assertIsBool(Data::setType($this->false, Type::T_BOOL));
        $this->assertIsObject(Data::setType($this->true, Type::T_OBJECT));
        $this->assertIsObject(Data::setType($this->false, Type::T_OBJECT));
        $this->assertNull(Data::setType($this->true, Type::T_NULL));
        $this->assertNull(Data::setType($this->false, Type::T_NULL));

        $this->assertIsArray(Data::setType($this->null, Type::T_ARRAY));
        $this->assertIsInt(Data::setType($this->null, Type::T_INT));
        $this->assertIsFloat(Data::setType($this->null, Type::T_FLOAT));
        $this->assertIsString(Data::setType($this->null, Type::T_STRING));
        $this->assertIsBool(Data::setType($this->null, Type::T_BOOL));
        $this->assertIsObject(Data::setType($this->null, Type::T_OBJECT));
        $this->assertNull(Data::setType($this->null, Type::T_NULL));

        $this->assertIsArray(Data::setType(self::shortCallable(), Type::T_ARRAY));
        $this->assertIsArray(Data::setType(self::longStaticCallable(), Type::T_ARRAY));
        $this->assertIsBool(Data::setType(self::shortCallable(), Type::T_BOOL));
        $this->assertIsBool(Data::setType(self::longStaticCallable(), Type::T_BOOL));
        $this->assertIsObject(Data::setType(self::shortCallable(), Type::T_OBJECT));
        $this->assertIsObject(Data::setType(self::longStaticCallable(), Type::T_OBJECT));
        $this->assertNull(Data::setType(self::shortCallable(), Type::T_NULL));
        $this->assertNull(Data::setType(self::longStaticCallable(), Type::T_NULL));

        $this->assertIsArray(Data::setType(self::emptyObject(), Type::T_ARRAY));
        $this->assertIsArray(Data::setType(self::callableObject(), Type::T_ARRAY));
        $this->assertIsArray(Data::setType(self::countableObject(), Type::T_ARRAY));
        $this->assertIsArray(Data::setType(self::iterableObject(), Type::T_ARRAY));
        $this->assertIsString(Data::setType(self::stringableObject(), Type::T_STRING));
        $this->assertIsBool(Data::setType(self::emptyObject(), Type::T_BOOL));
        $this->assertIsBool(Data::setType(self::callableObject(), Type::T_BOOL));
        $this->assertIsBool(Data::setType(self::countableObject(), Type::T_BOOL));
        $this->assertIsBool(Data::setType(self::iterableObject(), Type::T_BOOL));
        $this->assertIsObject(Data::setType(self::emptyObject(), Type::T_OBJECT));
        $this->assertIsObject(Data::setType(self::callableObject(), Type::T_OBJECT));
        $this->assertIsObject(Data::setType(self::countableObject(), Type::T_OBJECT));
        $this->assertIsObject(Data::setType(self::iterableObject(), Type::T_OBJECT));
        $this->assertNull(Data::setType(self::emptyObject(), Type::T_NULL));
        $this->assertNull(Data::setType(self::callableObject(), Type::T_NULL));
        $this->assertNull(Data::setType(self::countableObject(), Type::T_NULL));
        $this->assertNull(Data::setType(self::iterableObject(), Type::T_NULL));

        $this->assertIsArray(Data::setType(self::resource(), Type::T_ARRAY));
        $this->assertIsInt(Data::setType(self::resource(), Type::T_INT));
        $this->assertIsFloat(Data::setType(self::resource(), Type::T_FLOAT));
        $this->assertIsString(Data::setType(self::resource(), Type::T_STRING));
        $this->assertIsBool(Data::setType(self::resource(), Type::T_BOOL));
        $this->assertIsObject(Data::setType(self::resource(), Type::T_OBJECT));
        $this->assertNull(Data::setType(self::resource(), Type::T_NULL));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetTypeStringFromArray ():void {

        $this->expectException(Error::class);

        Data::setType($this->list, Type::T_STRING);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetTypeStringFromObject ():void {

        $this->expectException(Error::class);

        Data::setType(self::emptyObject(), Type::T_STRING);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSetTypeResourceFromString ():void {

        $this->expectException(Error::class);

        Data::setType($this->short_string, Type::T_RESOURCE);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSerializeValue ():void {

        $this->assertSame(
            'a:3:{s:3:"one";i:1;s:3:"two";i:2;s:5:"three";i:3;}',
            Data::serializeValue($this->assoc_arr)
        );

        $this->assertSame(
            's:20:"This is long string.";',
            Data::serializeValue($this->long_string)
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSerializeAnonymousClasses ():void {

        $this->expectException(Error::class);

        Data::serializeValue(self::countableObject());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testSerializeResource ():void {

        $this->expectException(Error::class);

        Data::serializeValue(self::resource());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnserializeValue ():void {

        $this->assertSame(
            $this->assoc_arr,
            Data::unserializeValue('a:3:{s:3:"one";i:1;s:3:"two";i:2;s:5:"three";i:3;}')
        );

        $this->assertSame(
            $this->long_string,
            Data::unserializeValue('s:20:"This is long string.";')
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnserializeFalse ():void {

        $this->expectException(Error::class);

        Data::unserializeValue('b:0;');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testUnserializeNull ():void {

        $this->expectException(Error::class);

        Data::unserializeValue('N;');

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCategory ():void {

        $this->assertSame(Category::SCALAR, Type::T_FLOAT->category());
        $this->assertSame(Category::COMPOUND, Type::T_OBJECT->category());
        $this->assertSame(Category::SPECIAL, Type::T_RESOURCE->category());
        $this->assertSame(Category::SCALAR, Type::T_INT->category());
        $this->assertSame(Category::SPECIAL, Type::T_NULL->category());
        $this->assertSame(Category::SCALAR, Type::T_BOOL->category());
        $this->assertSame(Category::COMPOUND, Type::T_ARRAY->category());
        $this->assertSame(Category::SCALAR, Type::T_STRING->category());

    }

    /**
     * @since 1.0.0
     *
     * @return callable
     */
    private static function shortCallable ():callable {

        return fn() => true;

    }

    /**
     * @since 1.0.0
     *
     * @return callable
     */
    private static function longStaticCallable ():callable {

        return static function () {
            return [];
        };

    }

    /**
     * @since 1.0.0
     *
     * @return object
     */
    private static function emptyObject ():object {

        return new class {};

    }

    /**
     * @since 1.0.0
     *
     * @return object
     */
    private static function callableObject ():object {

        return new class {
            public function __invoke () {}
        };

    }

    /**
     * @since 1.0.0
     *
     * @return object
     */
    private static function countableObject ():object {

        return new class implements Countable {
            public function count ():int {
                return 10;
            }
        };

    }

    /**
     * @since 1.0.0
     *
     * @return object
     */
    private static function iterableObject ():object {

        return new class implements IterablesAggregate {
            public function getIterator ():Traversable {
                return yield from [1,2,3];
            }
        };

    }

    /**
     * @since 1.0.0
     *
     * @return object
     */
    private static function stringableObject ():object {

        return new class implements Stringable {
            public function __toString ():string {
                return 'stringableObject string';
            }
        };

    }

    /**
     * @since 1.0.0
     *
     * @return resource
     */
    private static function resource ():mixed {

        return fopen("php://stdout", "w");

    }

}