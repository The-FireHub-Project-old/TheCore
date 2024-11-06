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

namespace FireHub\Core\Support\Enums;

use FireHub\Core\Base\ {
    InitEnum, Trait\ConcreteEnum
};
use FireHub\Core\Support\Enums\Geo\Country;

/**
 * ### Language enum
 * @since 1.0.0
 */
enum Language implements InitEnum {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case ABKHAZIAN;

    /**
     * @since 1.0.0
     */
    case AFAR;

    /**
     * @since 1.0.0
     */
    case AFRIKAANS;

    /**
     * @since 1.0.0
     */
    case AKAN;

    /**
     * @since 1.0.0
     */
    case ALBANIAN;

    /**
     * @since 1.0.0
     */
    case AMHARIC;

    /**
     * @since 1.0.0
     */
    case ARABIC;

    /**
     * @since 1.0.0
     */
    case ARAGONESE;

    /**
     * @since 1.0.0
     */
    case ARMENIAN;

    /**
     * @since 1.0.0
     */
    case ASSAMESE;

    /**
     * @since 1.0.0
     */
    case AVARIC;

    /**
     * @since 1.0.0
     */
    case AVESTAN;

    /**
     * @since 1.0.0
     */
    case AYMARA;

    /**
     * @since 1.0.0
     */
    case AZERBAIJANI;

    /**
     * @since 1.0.0
     */
    case BAMBARA;

    /**
     * @since 1.0.0
     */
    case BASHKIR;

    /**
     * @since 1.0.0
     */
    case BASQUE;

    /**
     * @since 1.0.0
     */
    case BELARUSIAN;

    /**
     * @since 1.0.0
     */
    case BENGALI;

    /**
     * @since 1.0.0
     */
    case BISLAMA;

    /**
     * @since 1.0.0
     */
    case BOSNIAN;

    /**
     * @since 1.0.0
     */
    case BRETON;

    /**
     * @since 1.0.0
     */
    case BULGARIAN;

    /**
     * @since 1.0.0
     */
    case BURMESE;

    /**
     * @since 1.0.0
     */
    case CATALAN_VALENCIAN;

    /**
     * @since 1.0.0
     */
    case CENTRAL_KHMER;

    /**
     * @since 1.0.0
     */
    case CHAMORRO;

    /**
     * @since 1.0.0
     */
    case CHECHEN;

    /**
     * @since 1.0.0
     */
    case CHICHEWA_CHEWA_NYANJA;

    /**
     * @since 1.0.0
     */
    case CHINESE;

    /**
     * @since 1.0.0
     */
    case CHURCH_SLAVONIC_OLD_SLAVONIC_OLD_CHURCH_SLAVONIC;

    /**
     * @since 1.0.0
     */
    case CHUVASH;

    /**
     * @since 1.0.0
     */
    case CORNISH;

    /**
     * @since 1.0.0
     */
    case CORSICAN;

    /**
     * @since 1.0.0
     */
    case CREE;

    /**
     * @since 1.0.0
     */
    case CROATIAN;

    /**
     * @since 1.0.0
     */
    case CZECH;

    /**
     * @since 1.0.0
     */
    case DANISH;

    /**
     * @since 1.0.0
     */
    case DIVEHI_DHIVEHI_MALDIVIAN;

    /**
     * @since 1.0.0
     */
    case DUTCH_FLEMISH;

    /**
     * @since 1.0.0
     */
    case DZONGKHA;

    /**
     * @since 1.0.0
     */
    case ENGLISH;

    /**
     * @since 1.0.0
     */
    case ESPERANTO;

    /**
     * @since 1.0.0
     */
    case ESTONIAN;

    /**
     * @since 1.0.0
     */
    case EWE;

    /**
     * @since 1.0.0
     */
    case FAROESE;

    /**
     * @since 1.0.0
     */
    case FIJIAN;

    /**
     * @since 1.0.0
     */
    case FINNISH;

    /**
     * @since 1.0.0
     */
    case FRENCH;

    /**
     * @since 1.0.0
     */
    case FULAH;

    /**
     * @since 1.0.0
     */
    case GAELIC_SCOTTISH_GAELIC;

    /**
     * @since 1.0.0
     */
    case GALICIAN;

    /**
     * @since 1.0.0
     */
    case GANDA;

    /**
     * @since 1.0.0
     */
    case GEORGIAN;

    /**
     * @since 1.0.0
     */
    case GERMAN;

    /**
     * @since 1.0.0
     */
    case GREEK;

    /**
     * @since 1.0.0
     */
    case GUARANI;

    /**
     * @since 1.0.0
     */
    case GUJARATI;

    /**
     * @since 1.0.0
     */
    case HAITIAN_HAITIAN_CREOLE;

    /**
     * @since 1.0.0
     */
    case HAUSA;

    /**
     * @since 1.0.0
     */
    case HEBREW;

    /**
     * @since 1.0.0
     */
    case HERERO;

    /**
     * @since 1.0.0
     */
    case HINDI;

    /**
     * @since 1.0.0
     */
    case HIRI_MOTU;

    /**
     * @since 1.0.0
     */
    case HUNGARIAN;

    /**
     * @since 1.0.0
     */
    case ICELANDIC;

    /**
     * @since 1.0.0
     */
    case IDO;

    /**
     * @since 1.0.0
     */
    case IGBO;

    /**
     * @since 1.0.0
     */
    case INDONESIAN;

    /**
     * @since 1.0.0
     */
    case INTERLINGUA;

    /**
     * @since 1.0.0
     */
    case INTERLINGUE_OCCIDENTAL;

    /**
     * @since 1.0.0
     */
    case INUKTITUT;

    /**
     * @since 1.0.0
     */
    case INUPIAQ;

    /**
     * @since 1.0.0
     */
    case IRISH;

    /**
     * @since 1.0.0
     */
    case ITALIAN;

    /**
     * @since 1.0.0
     */
    case JAPANESE;

    /**
     * @since 1.0.0
     */
    case JAVANESE;

    /**
     * @since 1.0.0
     */
    case KALAALLISUT_GREENLANDIC;

    /**
     * @since 1.0.0
     */
    case KANNADA;

    /**
     * @since 1.0.0
     */
    case KANURI;

    /**
     * @since 1.0.0
     */
    case KASHMIRI;

    /**
     * @since 1.0.0
     */
    case KAZAKH;

    /**
     * @since 1.0.0
     */
    case KIKUYU_GIKUYU;

    /**
     * @since 1.0.0
     */
    case KINYARWANDA;

    /**
     * @since 1.0.0
     */
    case KIRGHIZ_KYRGYZ;

    /**
     * @since 1.0.0
     */
    case KOMI;

    /**
     * @since 1.0.0
     */
    case KONGO;

    /**
     * @since 1.0.0
     */
    case KOREAN;

    /**
     * @since 1.0.0
     */
    case KUANYAMA_KWANYAMA;

    /**
     * @since 1.0.0
     */
    case KURDISH;

    /**
     * @since 1.0.0
     */
    case LAO;

    /**
     * @since 1.0.0
     */
    case LATIN;

    /**
     * @since 1.0.0
     */
    case LATVIAN;

    /**
     * @since 1.0.0
     */
    case LIMBURGAN_LIMBURGER_LIMBURGISH;

    /**
     * @since 1.0.0
     */
    case LINGALA;

    /**
     * @since 1.0.0
     */
    case LITHUANIAN;

    /**
     * @since 1.0.0
     */
    case LUBA_KATANGA;

    /**
     * @since 1.0.0
     */
    case LUXEMBOURGISH_LETZEBURGESCH;

    /**
     * @since 1.0.0
     */
    case MACEDONIAN;

    /**
     * @since 1.0.0
     */
    case MALAGASY;

    /**
     * @since 1.0.0
     */
    case MALAY;

    /**
     * @since 1.0.0
     */
    case MALAYALAM;

    /**
     * @since 1.0.0
     */
    case MALTESE;

    /**
     * @since 1.0.0
     */
    case MANX;

    /**
     * @since 1.0.0
     */
    case MAORI;

    /**
     * @since 1.0.0
     */
    case MARATHI;

    /**
     * @since 1.0.0
     */
    case MARSHALLESE;

    /**
     * @since 1.0.0
     */
    case MONGOLIAN;

    /**
     * @since 1.0.0
     */
    case NAURU;

    /**
     * @since 1.0.0
     */
    case NAVAJO_NAVAHO;

    /**
     * @since 1.0.0
     */
    case NDONGA;

    /**
     * @since 1.0.0
     */
    case NEPALI;

    /**
     * @since 1.0.0
     */
    case NORTH_NDEBELE;

    /**
     * @since 1.0.0
     */
    case NORTHERN_SAMI;

    /**
     * @since 1.0.0
     */
    case NORWEGIAN;

    /**
     * @since 1.0.0
     */
    case NORWEGIAN_BOKMAL;

    /**
     * @since 1.0.0
     */
    case NORWEGIAN_NYNORSK;

    /**
     * @since 1.0.0
     */
    case OCCITAN;

    /**
     * @since 1.0.0
     */
    case OJIBWA;

    /**
     * @since 1.0.0
     */
    case ORIYA;

    /**
     * @since 1.0.0
     */
    case OROMO;

    /**
     * @since 1.0.0
     */
    case OSSETIAN_OSSETIC;

    /**
     * @since 1.0.0
     */
    case PALI;

    /**
     * @since 1.0.0
     */
    case PASHTO_PUSHTO;

    /**
     * @since 1.0.0
     */
    case PERSIAN;

    /**
     * @since 1.0.0
     */
    case POLISH;

    /**
     * @since 1.0.0
     */
    case PORTUGUESE;

    /**
     * @since 1.0.0
     */
    case PUNJABI_PANJABI;

    /**
     * @since 1.0.0
     */
    case QUECHUA;

    /**
     * @since 1.0.0
     */
    case ROMANIAN_MOLDAVIAN_MOLDOVAN;

    /**
     * @since 1.0.0
     */
    case ROMANSH;

    /**
     * @since 1.0.0
     */
    case RUNDI;

    /**
     * @since 1.0.0
     */
    case RUSSIAN;

    /**
     * @since 1.0.0
     */
    case SAMOAN;

    /**
     * @since 1.0.0
     */
    case SANGO;

    /**
     * @since 1.0.0
     */
    case SANSKRIT;

    /**
     * @since 1.0.0
     */
    case SARDINIAN;

    /**
     * @since 1.0.0
     */
    case SERBIAN;

    /**
     * @since 1.0.0
     */
    case SHONA;

    /**
     * @since 1.0.0
     */
    case SICHUAN_YI_NUOSU;

    /**
     * @since 1.0.0
     */
    case SINDHI;

    /**
     * @since 1.0.0
     */
    case SINHALA_SINHALESE;

    /**
     * @since 1.0.0
     */
    case SLOVAK;

    /**
     * @since 1.0.0
     */
    case SLOVENIAN;

    /**
     * @since 1.0.0
     */
    case SOMALI;

    /**
     * @since 1.0.0
     */
    case SOUTH_NDEBELE;

    /**
     * @since 1.0.0
     */
    case SOUTHERN_SOTHO;

    /**
     * @since 1.0.0
     */
    case SPANISH_CASTILIAN;

    /**
     * @since 1.0.0
     */
    case SUNDANESE;

    /**
     * @since 1.0.0
     */
    case SWAHILI;

    /**
     * @since 1.0.0
     */
    case SWATI;

    /**
     * @since 1.0.0
     */
    case SWEDISH;

    /**
     * @since 1.0.0
     */
    case TAGALOG;

    /**
     * @since 1.0.0
     */
    case TAHITIAN;

    /**
     * @since 1.0.0
     */
    case TAJIK;

    /**
     * @since 1.0.0
     */
    case TAMIL;

    /**
     * @since 1.0.0
     */
    case TATAR;

    /**
     * @since 1.0.0
     */
    case TELUGU;

    /**
     * @since 1.0.0
     */
    case THAI;

    /**
     * @since 1.0.0
     */
    case TIBETAN;

    /**
     * @since 1.0.0
     */
    case TIGRINYA;

    /**
     * @since 1.0.0
     */
    case TONGA;

    /**
     * @since 1.0.0
     */
    case TSONGA;

    /**
     * @since 1.0.0
     */
    case TSWANA;

    /**
     * @since 1.0.0
     */
    case TURKISH;

    /**
     * @since 1.0.0
     */
    case TURKMEN;

    /**
     * @since 1.0.0
     */
    case TWI;

    /**
     * @since 1.0.0
     */
    case UIGHUR_UYGHUR;

    /**
     * @since 1.0.0
     */
    case UKRAINIAN;

    /**
     * @since 1.0.0
     */
    case URDU;

    /**
     * @since 1.0.0
     */
    case UZBEK;

    /**
     * @since 1.0.0
     */
    case VENDA;

    /**
     * @since 1.0.0
     */
    case VIETNAMESE;

    /**
     * @since 1.0.0
     */
    case VOLAPUK;

    /**
     * @since 1.0.0
     */
    case WALLOON;

    /**
     * @since 1.0.0
     */
    case WELSH;

    /**
     * @since 1.0.0
     */
    case WESTERN_FRISIAN;

    /**
     * @since 1.0.0
     */
    case WOLOF;

    /**
     * @since 1.0.0
     */
    case XHOSA;

    /**
     * @since 1.0.0
     */
    case YIDDISH;

    /**
     * @since 1.0.0
     */
    case YORUBA;

    /**
     * @since 1.0.0
     */
    case ZHUANG_CHUANG;

    /**
     * @since 1.0.0
     */
    case ZULU;

    /**
     * ### Get language from a provided alpha 2 code
     * @since 1.0.0
     *
     * @param non-empty-string $code <p>
     * Alpha 2 code.
     * </p>
     *
     * @return \FireHub\Core\Support\Enums\Language|false Language or false is not found one.
     */
    public static function fromAlpha2 (string $code):self|false {

        foreach (self::cases() as $case)
            if ($case->alpha2() === $code) return $case;

        return false;

    }

    /**
     * ### Get language from a provided alpha 3 code
     * @since 1.0.0
     *
     * @param non-empty-string $code <p>
     * Alpha 3 code.
     * </p>
     *
     * @return \FireHub\Core\Support\Enums\Language|false Language or false is not found one.
     */
    public static function fromAlpha3 (string $code):self|false {

        foreach (self::cases() as $case)
            if ($case->alpha3() === $code) return $case;

        return false;

    }

    /**
     * ### Locale identifier
     *
     * This consists of alpha2 code that indicates a language, optionally followed by country alpha2 code separated
     * by '-'.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Language::alpha2() To get alpha 2 code for language.
     * @uses \FireHub\Core\Support\Enums\Geo\Country::alpha2() To get alpha 2 code for country.
     *
     * @param \FireHub\Core\Support\Enums\Geo\Country $country <p>
     * Country as identifier.
     * </p>
     *
     * @return non-empty-string Locale identifier.
     */
    public function localeIdentifier (Country $country):string {

        return $this->alpha2().'-'.$country->alpha2();

    }

    /**
     * ### Alpha 2 code
     *
     * Alpha-2 code is the first part of the ISO 639 series of international standards for language codes. Part 1
     * covers the registration of "set 1" two-letter codes. There are 183 two-letter codes registered as of June 2021.
     * The registered codes cover the world's major languages.
     * @since 1.0.0
     *
     * @return non-empty-string Alpha 2 code.
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function alpha2 ():string {

        return match ($this) {
            self::ABKHAZIAN => 'ab',
            self::AFAR => 'aa',
            self::AFRIKAANS => 'af',
            self::AKAN => 'ak',
            self::ALBANIAN => 'sq',
            self::AMHARIC => 'am',
            self::ARABIC => 'ar',
            self::ARAGONESE => 'an',
            self::ARMENIAN => 'hy',
            self::ASSAMESE => 'as',
            self::AVARIC => 'av',
            self::AVESTAN => 'ae',
            self::AYMARA => 'ay',
            self::AZERBAIJANI => 'az',
            self::BAMBARA => 'bm',
            self::BASHKIR => 'ba',
            self::BASQUE => 'eu',
            self::BELARUSIAN => 'be',
            self::BENGALI => 'bn',
            self::BISLAMA => 'bi',
            self::BOSNIAN => 'bs',
            self::BRETON => 'br',
            self::BULGARIAN => 'bg',
            self::BURMESE => 'my',
            self::CATALAN_VALENCIAN => 'ca',
            self::CENTRAL_KHMER => 'km',
            self::CHAMORRO => 'ch',
            self::CHECHEN => 'ce',
            self::CHICHEWA_CHEWA_NYANJA => 'ny',
            self::CHINESE => 'zh',
            self::CHURCH_SLAVONIC_OLD_SLAVONIC_OLD_CHURCH_SLAVONIC => 'cu',
            self::CHUVASH => 'cv',
            self::CORNISH => 'kw',
            self::CORSICAN => 'co',
            self::CREE => 'cr',
            self::CROATIAN => 'hr',
            self::CZECH => 'cs',
            self::DANISH => 'da',
            self::DIVEHI_DHIVEHI_MALDIVIAN => 'dv',
            self::DUTCH_FLEMISH => 'nl',
            self::DZONGKHA => 'dz',
            self::ENGLISH => 'en',
            self::ESPERANTO => 'eo',
            self::ESTONIAN => 'et',
            self::EWE => 'ee',
            self::FAROESE => 'fo',
            self::FIJIAN => 'fj',
            self::FINNISH => 'fi',
            self::FRENCH => 'fr',
            self::FULAH => 'ff',
            self::GAELIC_SCOTTISH_GAELIC => 'gd',
            self::GALICIAN => 'gl',
            self::GANDA => 'lg',
            self::GEORGIAN => 'ka',
            self::GERMAN => 'de',
            self::GREEK => 'el',
            self::GUARANI => 'gn',
            self::GUJARATI => 'gu',
            self::HAITIAN_HAITIAN_CREOLE => 'ht',
            self::HAUSA => 'ha',
            self::HEBREW => 'he',
            self::HERERO => 'hz',
            self::HINDI => 'hi',
            self::HIRI_MOTU => 'ho',
            self::HUNGARIAN => 'hu',
            self::ICELANDIC => 'is',
            self::IDO => 'io',
            self::IGBO => 'ig',
            self::INDONESIAN => 'id',
            self::INTERLINGUA => 'ia',
            self::INTERLINGUE_OCCIDENTAL => 'ie',
            self::INUKTITUT => 'iu',
            self::INUPIAQ => 'ik',
            self::IRISH => 'ga',
            self::ITALIAN => 'it',
            self::JAPANESE => 'ja',
            self::JAVANESE => 'jv',
            self::KALAALLISUT_GREENLANDIC => 'kl',
            self::KANNADA => 'kn',
            self::KANURI => 'kr',
            self::KASHMIRI => 'ks',
            self::KAZAKH => 'kk',
            self::KIKUYU_GIKUYU => 'ki',
            self::KINYARWANDA => 'rw',
            self::KIRGHIZ_KYRGYZ => 'ky',
            self::KOMI => 'kv',
            self::KONGO => 'kg',
            self::KOREAN => 'ko',
            self::KUANYAMA_KWANYAMA => 'kj',
            self::KURDISH => 'ku',
            self::LAO => 'lo',
            self::LATIN => 'la',
            self::LATVIAN => 'lv',
            self::LIMBURGAN_LIMBURGER_LIMBURGISH => 'li',
            self::LINGALA => 'ln',
            self::LITHUANIAN => 'lt',
            self::LUBA_KATANGA => 'lu',
            self::LUXEMBOURGISH_LETZEBURGESCH => 'lb',
            self::MACEDONIAN => 'mk',
            self::MALAGASY => 'mg',
            self::MALAY => 'ms',
            self::MALAYALAM => 'ml',
            self::MALTESE => 'mt',
            self::MANX => 'gv',
            self::MAORI => 'mi',
            self::MARATHI => 'mr',
            self::MARSHALLESE => 'mh',
            self::MONGOLIAN => 'mn',
            self::NAURU => 'na',
            self::NAVAJO_NAVAHO => 'nv',
            self::NDONGA => 'ng',
            self::NEPALI => 'ne',
            self::NORTH_NDEBELE => 'nd',
            self::NORTHERN_SAMI => 'se',
            self::NORWEGIAN => 'no',
            self::NORWEGIAN_BOKMAL => 'nb',
            self::NORWEGIAN_NYNORSK => 'nn',
            self::OCCITAN => 'oc',
            self::OJIBWA => 'oj',
            self::ORIYA => 'or',
            self::OROMO => 'om',
            self::OSSETIAN_OSSETIC => 'os',
            self::PALI => 'pi',
            self::PASHTO_PUSHTO => 'ps',
            self::PERSIAN => 'fa',
            self::POLISH => 'pl',
            self::PORTUGUESE => 'pt',
            self::PUNJABI_PANJABI => 'pa',
            self::QUECHUA => 'qu',
            self::ROMANIAN_MOLDAVIAN_MOLDOVAN => 'ro',
            self::ROMANSH => 'rm',
            self::RUNDI => 'rn',
            self::RUSSIAN => 'ru',
            self::SAMOAN => 'sm',
            self::SANGO => 'sg',
            self::SANSKRIT => 'sa',
            self::SARDINIAN => 'sc',
            self::SERBIAN => 'sr',
            self::SHONA => 'sn',
            self::SICHUAN_YI_NUOSU => 'ii',
            self::SINDHI => 'sd',
            self::SINHALA_SINHALESE => 'si',
            self::SLOVAK => 'sk',
            self::SLOVENIAN => 'sl',
            self::SOMALI => 'so',
            self::SOUTH_NDEBELE => 'nr',
            self::SOUTHERN_SOTHO => 'st',
            self::SPANISH_CASTILIAN => 'es',
            self::SUNDANESE => 'su',
            self::SWAHILI => 'sw',
            self::SWATI => 'ss',
            self::SWEDISH => 'sv',
            self::TAGALOG => 'tl',
            self::TAHITIAN => 'ty',
            self::TAJIK => 'tg',
            self::TAMIL => 'ta',
            self::TATAR => 'tt',
            self::TELUGU => 'te',
            self::THAI => 'th',
            self::TIBETAN => 'bo',
            self::TIGRINYA => 'ti',
            self::TONGA => 'to',
            self::TSONGA => 'ts',
            self::TSWANA => 'tn',
            self::TURKISH => 'tr',
            self::TURKMEN => 'tk',
            self::TWI => 'tw',
            self::UIGHUR_UYGHUR => 'ug',
            self::UKRAINIAN => 'uk',
            self::URDU => 'ur',
            self::UZBEK => 'uz',
            self::VENDA => 've',
            self::VIETNAMESE => 'vi',
            self::VOLAPUK => 'vo',
            self::WALLOON => 'wa',
            self::WELSH => 'cy',
            self::WESTERN_FRISIAN => 'fy',
            self::WOLOF => 'wo',
            self::XHOSA => 'xh',
            self::YIDDISH => 'yi',
            self::YORUBA => 'yo',
            self::ZHUANG_CHUANG => 'za',
            self::ZULU => 'zu'
        };

    }

    /**
     * ### Alpha 3 code
     *
     * Alpha-3 code is the second part of the ISO 639 standard, which lists codes for the representation of the
     * language names. The three-letter codes given for each language in this part of the standard are referred to as
     * "Alpha-3" codes.
     * @since 1.0.0
     *
     * @return non-empty-string Alpha 3 code.
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function alpha3 ():string {

        return match ($this) {
            self::ABKHAZIAN => 'abk',
            self::AFAR => 'aar',
            self::AFRIKAANS => 'afr',
            self::AKAN => 'aka',
            self::ALBANIAN => 'sqi',
            self::AMHARIC => 'amh',
            self::ARABIC => 'ara',
            self::ARAGONESE => 'arg',
            self::ARMENIAN => 'hye',
            self::ASSAMESE => 'asm',
            self::AVARIC => 'ava',
            self::AVESTAN => 'ave',
            self::AYMARA => 'aym',
            self::AZERBAIJANI => 'aze',
            self::BAMBARA => 'bam',
            self::BASHKIR => 'bak',
            self::BASQUE => 'eus',
            self::BELARUSIAN => 'bel',
            self::BENGALI => 'ben',
            self::BISLAMA => 'bis',
            self::BOSNIAN => 'bos',
            self::BRETON => 'bre',
            self::BULGARIAN => 'bul',
            self::BURMESE => 'mya',
            self::CATALAN_VALENCIAN => 'cat',
            self::CENTRAL_KHMER => 'khm',
            self::CHAMORRO => 'cha',
            self::CHECHEN => 'che',
            self::CHICHEWA_CHEWA_NYANJA => 'nya',
            self::CHINESE => 'zho',
            self::CHURCH_SLAVONIC_OLD_SLAVONIC_OLD_CHURCH_SLAVONIC => 'chu',
            self::CHUVASH => 'chv',
            self::CORNISH => 'cor',
            self::CORSICAN => 'cos',
            self::CREE => 'cre',
            self::CROATIAN => 'hrv',
            self::CZECH => 'ces',
            self::DANISH => 'dan',
            self::DIVEHI_DHIVEHI_MALDIVIAN => 'div',
            self::DUTCH_FLEMISH => 'nld',
            self::DZONGKHA => 'dzo',
            self::ENGLISH => 'eng',
            self::ESPERANTO => 'epo',
            self::ESTONIAN => 'est',
            self::EWE => 'ewe',
            self::FAROESE => 'fao',
            self::FIJIAN => 'fij',
            self::FINNISH => 'fin',
            self::FRENCH => 'fra',
            self::FULAH => 'ful',
            self::GAELIC_SCOTTISH_GAELIC => 'gla',
            self::GALICIAN => 'glg',
            self::GANDA => 'lug',
            self::GEORGIAN => 'kat',
            self::GERMAN => 'deu',
            self::GREEK => 'ell',
            self::GUARANI => 'grn',
            self::GUJARATI => 'guj',
            self::HAITIAN_HAITIAN_CREOLE => 'hat',
            self::HAUSA => 'hau',
            self::HEBREW => 'heb',
            self::HERERO => 'her',
            self::HINDI => 'hin',
            self::HIRI_MOTU => 'hmo',
            self::HUNGARIAN => 'hun',
            self::ICELANDIC => 'isl',
            self::IDO => 'ido',
            self::IGBO => 'ibo',
            self::INDONESIAN => 'ind',
            self::INTERLINGUA => 'ina',
            self::INTERLINGUE_OCCIDENTAL => 'ile',
            self::INUKTITUT => 'iku',
            self::INUPIAQ => 'ipk',
            self::IRISH => 'gle',
            self::ITALIAN => 'ita',
            self::JAPANESE => 'jpn',
            self::JAVANESE => 'jav',
            self::KALAALLISUT_GREENLANDIC => 'kal',
            self::KANNADA => 'kan',
            self::KANURI => 'kau',
            self::KASHMIRI => 'kas',
            self::KAZAKH => 'kaz',
            self::KIKUYU_GIKUYU => 'kik',
            self::KINYARWANDA => 'kin',
            self::KIRGHIZ_KYRGYZ => 'kir',
            self::KOMI => 'kom',
            self::KONGO => 'kon',
            self::KOREAN => 'kor',
            self::KUANYAMA_KWANYAMA => 'kua',
            self::KURDISH => 'kur',
            self::LAO => 'lao',
            self::LATIN => 'lat',
            self::LATVIAN => 'lav',
            self::LIMBURGAN_LIMBURGER_LIMBURGISH => 'lim',
            self::LINGALA => 'lin',
            self::LITHUANIAN => 'lit',
            self::LUBA_KATANGA => 'lub',
            self::LUXEMBOURGISH_LETZEBURGESCH => 'ltz',
            self::MACEDONIAN => 'mkd',
            self::MALAGASY => 'mlg',
            self::MALAY => 'msa',
            self::MALAYALAM => 'mal',
            self::MALTESE => 'mlt',
            self::MANX => 'glv',
            self::MAORI => 'mri',
            self::MARATHI => 'mar',
            self::MARSHALLESE => 'mah',
            self::MONGOLIAN => 'mon',
            self::NAURU => 'nau',
            self::NAVAJO_NAVAHO => 'nav',
            self::NDONGA => 'ndo',
            self::NEPALI => 'nep',
            self::NORTH_NDEBELE => 'nde',
            self::NORTHERN_SAMI => 'sme',
            self::NORWEGIAN => 'nor',
            self::NORWEGIAN_BOKMAL => 'nob',
            self::NORWEGIAN_NYNORSK => 'nno',
            self::OCCITAN => 'oci',
            self::OJIBWA => 'oji',
            self::ORIYA => 'ori',
            self::OROMO => 'orm',
            self::OSSETIAN_OSSETIC => 'oss',
            self::PALI => 'pli',
            self::PASHTO_PUSHTO => 'pus',
            self::PERSIAN => 'fas',
            self::POLISH => 'pol',
            self::PORTUGUESE => 'por',
            self::PUNJABI_PANJABI => 'pan',
            self::QUECHUA => 'que',
            self::ROMANIAN_MOLDAVIAN_MOLDOVAN => 'ron',
            self::ROMANSH => 'roh',
            self::RUNDI => 'run',
            self::RUSSIAN => 'rus',
            self::SAMOAN => 'smo',
            self::SANGO => 'sag',
            self::SANSKRIT => 'san',
            self::SARDINIAN => 'srd',
            self::SERBIAN => 'srp',
            self::SHONA => 'sna',
            self::SICHUAN_YI_NUOSU => 'iii',
            self::SINDHI => 'snd',
            self::SINHALA_SINHALESE => 'sin',
            self::SLOVAK => 'slk',
            self::SLOVENIAN => 'slv',
            self::SOMALI => 'som',
            self::SOUTH_NDEBELE => 'nbl',
            self::SOUTHERN_SOTHO => 'sot',
            self::SPANISH_CASTILIAN => 'spa',
            self::SUNDANESE => 'sun',
            self::SWAHILI => 'swa',
            self::SWATI => 'ssw',
            self::SWEDISH => 'swe',
            self::TAGALOG => 'tgl',
            self::TAHITIAN => 'tah',
            self::TAJIK => 'tgk',
            self::TAMIL => 'tam',
            self::TATAR => 'tat',
            self::TELUGU => 'tel',
            self::THAI => 'tha',
            self::TIBETAN => 'bod',
            self::TIGRINYA => 'tir',
            self::TONGA => 'ton',
            self::TSONGA => 'tso',
            self::TSWANA => 'tsn',
            self::TURKISH => 'tur',
            self::TURKMEN => 'tuk',
            self::TWI => 'twi',
            self::UIGHUR_UYGHUR => 'uig',
            self::UKRAINIAN => 'ukr',
            self::URDU => 'urd',
            self::UZBEK => 'uzb',
            self::VENDA => 'ven',
            self::VIETNAMESE => 'vie',
            self::VOLAPUK => 'vol',
            self::WALLOON => 'wln',
            self::WELSH => 'cym',
            self::WESTERN_FRISIAN => 'fry',
            self::WOLOF => 'wol',
            self::XHOSA => 'xho',
            self::YIDDISH => 'yid',
            self::YORUBA => 'yor',
            self::ZHUANG_CHUANG => 'zha',
            self::ZULU => 'zul'
        };

    }

}