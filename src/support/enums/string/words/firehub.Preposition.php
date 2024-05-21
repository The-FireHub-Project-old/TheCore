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
 * ### A preposition is a word or group of words used before a noun, pronoun, or noun phrase to show a direction, time, place, location, spatial relationships
 * @since 1.0.0
 */
enum Preposition:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case ABOARD = 'aboard';

    /**
     * @since 1.0.0
     */
    case ABOUT = 'about';

    /**
     * @since 1.0.0
     */
    case ABOVE = 'above';

    /**
     * @since 1.0.0
     */
    case ABSENT = 'absent';

    /**
     * @since 1.0.0
     */
    case ACROSS = 'across';

    /**
     * @since 1.0.0
     */
    case AFTER = 'after';

    /**
     * @since 1.0.0
     */
    case AGAINST = 'against';

    /**
     * @since 1.0.0
     */
    case ALONG = 'along';

    /**
     * @since 1.0.0
     */
    case ALONGSIDE = 'alongside';

    /**
     * @since 1.0.0
     */
    case AMID = 'amid';

    /**
     * @since 1.0.0
     */
    case AMONG = 'among';

    /**
     * @since 1.0.0
     */
    case AMONGST = 'amongst';

    /**
     * @since 1.0.0
     */
    case ANTI = 'anti';

    /**
     * @since 1.0.0
     */
    case AROUND = 'around';

    /**
     * @since 1.0.0
     */
    case AS = 'as';

    /**
     * @since 1.0.0
     */
    case AT = 'at';

    /**
     * @since 1.0.0
     */
    case BEFORE = 'before';

    /**
     * @since 1.0.0
     */
    case BEHIND = 'behind';

    /**
     * @since 1.0.0
     */
    case BELOW = 'below';

    /**
     * @since 1.0.0
     */
    case BENEATH = 'beneath';

    /**
     * @since 1.0.0
     */
    case BESIDE = 'beside';

    /**
     * @since 1.0.0
     */
    case BESIDES = 'besides';

    /**
     * @since 1.0.0
     */
    case BETWEEN = 'between';

    /**
     * @since 1.0.0
     */
    case BEYOND = 'beyond';

    /**
     * @since 1.0.0
     */
    case BUT = 'but';

    /**
     * @since 1.0.0
     */
    case BY = 'by';

    /**
     * @since 1.0.0
     */
    case CIRCA = 'circa';

    /**
     * @since 1.0.0
     */
    case CONCERNING = 'concerning';

    /**
     * @since 1.0.0
     */
    case CONSIDERING = 'considering';

    /**
     * @since 1.0.0
     */
    case DESPITE = 'despite';

    /**
     * @since 1.0.0
     */
    case DOWN = 'down';

    /**
     * @since 1.0.0
     */
    case DURING = 'during';

    /**
     * @since 1.0.0
     */
    case EXCEPT = 'except';

    /**
     * @since 1.0.0
     */
    case EXCEPTING = 'excepting';

    /**
     * @since 1.0.0
     */
    case EXCLUDING = 'excluding';

    /**
     * @since 1.0.0
     */
    case FAILING = 'failing';

    /**
     * @since 1.0.0
     */
    case FOLLOWING = 'following';

    /**
     * @since 1.0.0
     */
    case FOR = 'for';

    /**
     * @since 1.0.0
     */
    case FROM = 'from';

    /**
     * @since 1.0.0
     */
    case GIVEN = 'given';

    /**
     * @since 1.0.0
     */
    case IN = 'in';

    /**
     * @since 1.0.0
     */
    case INSIDE = 'inside';

    /**
     * @since 1.0.0
     */
    case INTO = 'into';

    /**
     * @since 1.0.0
     */
    case LIKE = 'like';

    /**
     * @since 1.0.0
     */
    case MINUS = 'minus';

    /**
     * @since 1.0.0
     */
    case NEAR = 'near';

    /**
     * @since 1.0.0
     */
    case OF = 'of';

    /**
     * @since 1.0.0
     */
    case OFF = 'off';

    /**
     * @since 1.0.0
     */
    case ON = 'on';

    /**
     * @since 1.0.0
     */
    case ONTO = 'onto';

    /**
     * @since 1.0.0
     */
    case OPPOSITE = 'opposite';

    /**
     * @since 1.0.0
     */
    case OUTSIDE = 'outside';

    /**
     * @since 1.0.0
     */
    case OVER = 'over';

    /**
     * @since 1.0.0
     */
    case PAST = 'past';

    /**
     * @since 1.0.0
     */
    case PER = 'per';

    /**
     * @since 1.0.0
     */
    case PLUS = 'plus';

    /**
     * @since 1.0.0
     */
    case REGARDING = 'regarding';

    /**
     * @since 1.0.0
     */
    case ROUND = 'round';

    /**
     * @since 1.0.0
     */
    case SAVE = 'save';

    /**
     * @since 1.0.0
     */
    case SINCE = 'since';

    /**
     * @since 1.0.0
     */
    case THAN = 'than';

    /**
     * @since 1.0.0
     */
    case THROUGH = 'through';

    /**
     * @since 1.0.0
     */
    case TO = 'to';

    /**
     * @since 1.0.0
     */
    case TOWARD = 'toward';

    /**
     * @since 1.0.0
     */
    case TOWARDS = 'towards';

    /**
     * @since 1.0.0
     */
    case UNDER = 'under';

    /**
     * @since 1.0.0
     */
    case UNDERNEATH = 'underneath';

    /**
     * @since 1.0.0
     */
    case UNLIKE = 'unlike';

    /**
     * @since 1.0.0
     */
    case UNTIL = 'until';

    /**
     * @since 1.0.0
     */
    case UP = 'up';

    /**
     * @since 1.0.0
     */
    case UPON = 'upon';

    /**
     * @since 1.0.0
     */
    case VERSUS = 'versus';

    /**
     * @since 1.0.0
     */
    case VIA = 'via';

    /**
     * @since 1.0.0
     */
    case WITH = 'with';

    /**
     * @since 1.0.0
     */
    case WITHIN = 'within';

    /**
     * @since 1.0.0
     */
    case WITHOUT = 'without';

    /**
     * @since 1.0.0
     */
    case WORTH = 'worth';

    /**
     * ### Check if preposition is short
     *
     * All prepositions with length less than four are considered short.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\LowLevel\StrSB::length() To get enum value length.
     *
     * @return bool True of preposition is short, false otherwise.
     */
    public function short ():bool {

        return StrSB::length($this->value) < 4;

    }

    /**
     * ### Get list of all short prepositions
     *
     * All prepositions with length less than four are considered short.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\String\Words\Preposition::cases() To get a list of all prepositions.
     * @uses \FireHub\Core\Support\Enums\String\Words\Preposition::short() To check if preposition is short.
     *
     * @return self[] List of all short conjunctions.
     */
    public static function shorts ():array {

        $short_prepositions = [];
        foreach (self::cases() as $preposition)
            if ($preposition->short()) $short_prepositions[] = $preposition;

        return $short_prepositions;

    }

}