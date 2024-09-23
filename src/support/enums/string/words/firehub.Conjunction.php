<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Enums\String\Words;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};
use FireHub\Core\Support\LowLevel\StrSB;

/**
 * ### A conjunction is used to combine two or more objects, phrases, or clauses
 * @since 1.0.0
 */
enum Conjunction:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case AFTER = 'after';

    /**
     * @since 1.0.0
     */
    case ALSO = 'also';

    /**
     * @since 1.0.0
     */
    case ALTHOUGH = 'although';

    /**
     * @since 1.0.0
     */
    case AND = 'and';

    /**
     * @since 1.0.0
     */
    case AS = 'as';

    /**
     * @since 1.0.0
     */
    case BECAUSE = 'because';

    /**
     * @since 1.0.0
     */
    case BUT = 'but';

    /**
     * @since 1.0.0
     */
    case FOR = 'for';

    /**
     * @since 1.0.0
     */
    case HOWEVER = 'however';

    /**
     * @since 1.0.0
     */
    case IF = 'if';

    /**
     * @since 1.0.0
     */
    case NO_LESS_THAN = 'no less than';

    /**
     * @since 1.0.0
     */
    case NOR = 'nor';

    /**
     * @since 1.0.0
     */
    case ONLY = 'only';

    /**
     * @since 1.0.0
     */
    case OR = 'or';

    /**
     * @since 1.0.0
     */
    case SO = 'so';

    /**
     * @since 1.0.0
     */
    case STILL = 'still';

    /**
     * @since 1.0.0
     */
    case THOUGH = 'though';

    /**
     * @since 1.0.0
     */
    case TILL = 'till';

    /**
     * @since 1.0.0
     */
    case TOO = 'too';

    /**
     * @since 1.0.0
     */
    case WHERE = 'where';

    /**
     * @since 1.0.0
     */
    case WHICH = 'which';

    /**
     * @since 1.0.0
     */
    case WHO = 'who';

    /**
     * @since 1.0.0
     */
    case WHOEVER = 'whoever';

    /**
     * @since 1.0.0
     */
    case YET = 'yet';

    /**
     * ### Check if the conjunction is short
     *
     * All conjunctions with length less than four are considered short.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSB::length() To get enum value length.
     *
     * @return bool True of conjunction is short, false otherwise.
     */
    public function short ():bool {

        return StrSB::length($this->value) < 4;

    }

    /**
     * ### Get a list of all short conjunctions
     *
     * All conjunctions with length less than four are considered short.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Words\Conjunction::cases() To get a list of all conjunctions.
     * @uses \FireHub\Core\Support\Enums\String\Words\Conjunction::short() To check if the conjunction is short.
     *
     * @return self[] List of all short conjunctions.
     */
    public static function shorts ():array {

        $short_conjunctions = [];
        foreach (self::cases() as $conjunction)
            if ($conjunction->short()) $short_conjunctions[] = $conjunction;

        return $short_conjunctions;

    }

}