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

namespace FireHub\Core\Support\Enums\Geo;

use FireHub\Core\Base\Trait\ConcreteEnum;
use FireHub\Core\Support\Enums\Geo\Contracts\ {
    ISO3166, UNM49
};

/**
 * ### Country enum
 * @since 1.0.0
 */
enum Country implements ISO3166 {

    /**
     * ### FireHub initial concrete enum trait
     * @since 1.0.0
     */
    use ConcreteEnum;

    /**
     * @since 1.0.0
     */
    case AFGHANISTAN;

    /**
     * @since 1.0.0
     */
    case ALAND_ISLANDS;

    /**
     * @since 1.0.0
     */
    case ALBANIA;

    /**
     * @since 1.0.0
     */
    case ALGERIA;

    /**
     * @since 1.0.0
     */
    case AMERICAN_SAMOA;

    /**
     * @since 1.0.0
     */
    case ANDORRA;

    /**
     * @since 1.0.0
     */
    case ANGOLA;

    /**
     * @since 1.0.0
     */
    case ANGUILLA;

    /**
     * @since 1.0.0
     */
    case ANTARCTICA;

    /**
     * @since 1.0.0
     */
    case ANTIGUA_AND_BARBUDA;

    /**
     * @since 1.0.0
     */
    case ARGENTINA;

    /**
     * @since 1.0.0
     */
    case ARMENIA;

    /**
     * @since 1.0.0
     */
    case ARUBA;

    /**
     * @since 1.0.0
     */
    case AUSTRALIA;

    /**
     * @since 1.0.0
     */
    case AUSTRIA;

    /**
     * @since 1.0.0
     */
    case AZERBAIJAN;

    /**
     * @since 1.0.0
     */
    case BAHAMAS;

    /**
     * @since 1.0.0
     */
    case BAHRAIN;

    /**
     * @since 1.0.0
     */
    case BANGLADESH;

    /**
     * @since 1.0.0
     */
    case BARBADOS;

    /**
     * @since 1.0.0
     */
    case BELARUS;

    /**
     * @since 1.0.0
     */
    case BELGIUM;

    /**
     * @since 1.0.0
     */
    case BELIZE;

    /**
     * @since 1.0.0
     */
    case BENIN;

    /**
     * @since 1.0.0
     */
    case BERMUDA;

    /**
     * @since 1.0.0
     */
    case BHUTAN;

    /**
     * @since 1.0.0
     */
    case BOLIVIA_PLURINATIONAL_STATE_OF;

    /**
     * @since 1.0.0
     */
    case BONAIRE_SINT_EUSTATIUS_AND_SABA;

    /**
     * @since 1.0.0
     */
    case BOSNIA_AND_HERZEGOVINA;

    /**
     * @since 1.0.0
     */
    case BOTSWANA;

    /**
     * @since 1.0.0
     */
    case BOUVET_ISLAND;

    /**
     * @since 1.0.0
     */
    case BRAZIL;

    /**
     * @since 1.0.0
     */
    case BRITISH_INDIAN_OCEAN_TERRITORY;

    /**
     * @since 1.0.0
     */
    case BRUNEI_DARUSSALAM;

    /**
     * @since 1.0.0
     */
    case BULGARIA;

    /**
     * @since 1.0.0
     */
    case BURKINA_FASO;

    /**
     * @since 1.0.0
     */
    case BURUNDI;

    /**
     * @since 1.0.0
     */
    case CABO_VERDE;

    /**
     * @since 1.0.0
     */
    case CAMBODIA;

    /**
     * @since 1.0.0
     */
    case CAMEROON;

    /**
     * @since 1.0.0
     */
    case CANADA;

    /**
     * @since 1.0.0
     */
    case CAYMAN_ISLANDS;

    /**
     * @since 1.0.0
     */
    case CENTRAL_AFRICAN_REPUBLIC;

    /**
     * @since 1.0.0
     */
    case CHAD;

    /**
     * @since 1.0.0
     */
    case CHILE;

    /**
     * @since 1.0.0
     */
    case CHINA;

    /**
     * @since 1.0.0
     */
    case CHRISTMAS_ISLAND;

    /**
     * @since 1.0.0
     */
    case COCOS_KEELING_ISLANDS;

    /**
     * @since 1.0.0
     */
    case COLOMBIA;

    /**
     * @since 1.0.0
     */
    case COMOROS;

    /**
     * @since 1.0.0
     */
    case CONGO;

    /**
     * @since 1.0.0
     */
    case CONGO_DEMOCRATIC_REPUBLIC_OF_THE;

    /**
     * @since 1.0.0
     */
    case COOK_ISLANDS;

    /**
     * @since 1.0.0
     */
    case COSTA_RICA;

    /**
     * @since 1.0.0
     */
    case COTE_D_IVOIRE;

    /**
     * @since 1.0.0
     */
    case CROATIA;

    /**
     * @since 1.0.0
     */
    case CUBA;

    /**
     * @since 1.0.0
     */
    case CURACAO;

    /**
     * @since 1.0.0
     */
    case CYPRUS;

    /**
     * @since 1.0.0
     */
    case CZECHIA;

    /**
     * @since 1.0.0
     */
    case DENMARK;

    /**
     * @since 1.0.0
     */
    case DJIBOUTI;

    /**
     * @since 1.0.0
     */
    case DOMINICA;

    /**
     * @since 1.0.0
     */
    case DOMINICAN_REPUBLIC;

    /**
     * @since 1.0.0
     */
    case ECUADOR;

    /**
     * @since 1.0.0
     */
    case EGYPT;

    /**
     * @since 1.0.0
     */
    case EL_SALVADOR;

    /**
     * @since 1.0.0
     */
    case EQUATORIAL_GUINEA;

    /**
     * @since 1.0.0
     */
    case ERITREA;

    /**
     * @since 1.0.0
     */
    case ESTONIA;

    /**
     * @since 1.0.0
     */
    case ESWATINI;

    /**
     * @since 1.0.0
     */
    case ETHIOPIA;

    /**
     * @since 1.0.0
     */
    case FALKLAND_ISLANDS_MALVINAS;

    /**
     * @since 1.0.0
     */
    case FAROE_ISLANDS;

    /**
     * @since 1.0.0
     */
    case FIJI;

    /**
     * @since 1.0.0
     */
    case FINLAND;

    /**
     * @since 1.0.0
     */
    case FRANCE;

    /**
     * @since 1.0.0
     */
    case FRENCH_GUIANA;

    /**
     * @since 1.0.0
     */
    case FRENCH_POLYNESIA;

    /**
     * @since 1.0.0
     */
    case FRENCH_SOUTHERN_TERRITORIES;

    /**
     * @since 1.0.0
     */
    case GABON;

    /**
     * @since 1.0.0
     */
    case GAMBIA;

    /**
     * @since 1.0.0
     */
    case GEORGIA;

    /**
     * @since 1.0.0
     */
    case GERMANY;

    /**
     * @since 1.0.0
     */
    case GHANA;

    /**
     * @since 1.0.0
     */
    case GIBRALTAR;

    /**
     * @since 1.0.0
     */
    case GREECE;

    /**
     * @since 1.0.0
     */
    case GREENLAND;

    /**
     * @since 1.0.0
     */
    case GRENADA;

    /**
     * @since 1.0.0
     */
    case GUADELOUPE;

    /**
     * @since 1.0.0
     */
    case GUAM;

    /**
     * @since 1.0.0
     */
    case GUATEMALA;

    /**
     * @since 1.0.0
     */
    case GUERNSEY;

    /**
     * @since 1.0.0
     */
    case GUINEA;

    /**
     * @since 1.0.0
     */
    case GUINEA_BISSAU;

    /**
     * @since 1.0.0
     */
    case GUYANA;

    /**
     * @since 1.0.0
     */
    case HAITI;

    /**
     * @since 1.0.0
     */
    case HEARD_ISLAND_AND_MCDONALD_ISLANDS;

    /**
     * @since 1.0.0
     */
    case HOLY_SEE;

    /**
     * @since 1.0.0
     */
    case HONDURAS;

    /**
     * @since 1.0.0
     */
    case HONG_KONG;

    /**
     * @since 1.0.0
     */
    case HUNGARY;

    /**
     * @since 1.0.0
     */
    case ICELAND;

    /**
     * @since 1.0.0
     */
    case INDIA;

    /**
     * @since 1.0.0
     */
    case INDONESIA;

    /**
     * @since 1.0.0
     */
    case IRAN_ISLAMIC_REPUBLIC_OF;

    /**
     * @since 1.0.0
     */
    case IRAQ;

    /**
     * @since 1.0.0
     */
    case IRELAND;

    /**
     * @since 1.0.0
     */
    case ISLE_OF_MAN;

    /**
     * @since 1.0.0
     */
    case ISRAEL;

    /**
     * @since 1.0.0
     */
    case ITALY;

    /**
     * @since 1.0.0
     */
    case JAMAICA;

    /**
     * @since 1.0.0
     */
    case JAPAN;

    /**
     * @since 1.0.0
     */
    case JERSEY;

    /**
     * @since 1.0.0
     */
    case JORDAN;

    /**
     * @since 1.0.0
     */
    case KAZAKHSTAN;

    /**
     * @since 1.0.0
     */
    case KENYA;

    /**
     * @since 1.0.0
     */
    case KIRIBATI;

    /**
     * @since 1.0.0
     */
    case KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF;

    /**
     * @since 1.0.0
     */
    case KOREA_REPUBLIC_OF;

    /**
     * @since 1.0.0
     */
    case KOSOVO;

    /**
     * @since 1.0.0
     */
    case KUWAIT;

    /**
     * @since 1.0.0
     */
    case KYRGYZSTAN;

    /**
     * @since 1.0.0
     */
    case LAO_PEOPLES_DEMOCRATIC_REPUBLIC;

    /**
     * @since 1.0.0
     */
    case LATVIA;

    /**
     * @since 1.0.0
     */
    case LEBANON;

    /**
     * @since 1.0.0
     */
    case LESOTHO;

    /**
     * @since 1.0.0
     */
    case LIBERIA;

    /**
     * @since 1.0.0
     */
    case LIBYA;

    /**
     * @since 1.0.0
     */
    case LIECHTENSTEIN;

    /**
     * @since 1.0.0
     */
    case LITHUANIA;

    /**
     * @since 1.0.0
     */
    case LUXEMBOURG;

    /**
     * @since 1.0.0
     */
    case MACAO;

    /**
     * @since 1.0.0
     */
    case MADAGASCAR;

    /**
     * @since 1.0.0
     */
    case MALAWI;

    /**
     * @since 1.0.0
     */
    case MALAYSIA;

    /**
     * @since 1.0.0
     */
    case MALDIVES;

    /**
     * @since 1.0.0
     */
    case MALI;

    /**
     * @since 1.0.0
     */
    case MALTA;

    /**
     * @since 1.0.0
     */
    case MARSHALL_ISLANDS;

    /**
     * @since 1.0.0
     */
    case MARTINIQUE;

    /**
     * @since 1.0.0
     */
    case MAURITANIA;

    /**
     * @since 1.0.0
     */
    case MAURITIUS;

    /**
     * @since 1.0.0
     */
    case MAYOTTE;

    /**
     * @since 1.0.0
     */
    case MEXICO;

    /**
     * @since 1.0.0
     */
    case MICRONESIA_FEDERATED_STATES_OF;

    /**
     * @since 1.0.0
     */
    case MOLDOVA_REPUBLIC_OF;

    /**
     * @since 1.0.0
     */
    case MONACO;

    /**
     * @since 1.0.0
     */
    case MONGOLIA;

    /**
     * @since 1.0.0
     */
    case MONTENEGRO;

    /**
     * @since 1.0.0
     */
    case MONTSERRAT;

    /**
     * @since 1.0.0
     */
    case MOROCCO;

    /**
     * @since 1.0.0
     */
    case MOZAMBIQUE;

    /**
     * @since 1.0.0
     */
    case MYANMAR;

    /**
     * @since 1.0.0
     */
    case NAMIBIA;

    /**
     * @since 1.0.0
     */
    case NAURU;

    /**
     * @since 1.0.0
     */
    case NEPAL;

    /**
     * @since 1.0.0
     */
    case NETHERLANDS_KINGDOM_OF_THE;

    /**
     * @since 1.0.0
     */
    case NEW_CALEDONIA;

    /**
     * @since 1.0.0
     */
    case NEW_ZEALAND;

    /**
     * @since 1.0.0
     */
    case NICARAGUA;

    /**
     * @since 1.0.0
     */
    case NIGER;

    /**
     * @since 1.0.0
     */
    case NIGERIA;

    /**
     * @since 1.0.0
     */
    case NIUE;

    /**
     * @since 1.0.0
     */
    case NORFOLK_ISLAND;

    /**
     * @since 1.0.0
     */
    case NORTH_MACEDONIA;

    /**
     * @since 1.0.0
     */
    case NORTHERN_MARIANA_ISLANDS;

    /**
     * @since 1.0.0
     */
    case NORWAY;

    /**
     * @since 1.0.0
     */
    case OMAN;

    /**
     * @since 1.0.0
     */
    case PAKISTAN;

    /**
     * @since 1.0.0
     */
    case PALAU;

    /**
     * @since 1.0.0
     */
    case PALESTINE_STATE_OF;

    /**
     * @since 1.0.0
     */
    case PANAMA;

    /**
     * @since 1.0.0
     */
    case PAPUA_NEW_GUINEA;

    /**
     * @since 1.0.0
     */
    case PARAGUAY;

    /**
     * @since 1.0.0
     */
    case PERU;

    /**
     * @since 1.0.0
     */
    case PHILIPPINES;

    /**
     * @since 1.0.0
     */
    case PITCAIRN;

    /**
     * @since 1.0.0
     */
    case POLAND;

    /**
     * @since 1.0.0
     */
    case PORTUGAL;

    /**
     * @since 1.0.0
     */
    case PUERTO_RICO;

    /**
     * @since 1.0.0
     */
    case QATAR;

    /**
     * @since 1.0.0
     */
    case REUNION;

    /**
     * @since 1.0.0
     */
    case ROMANIA;

    /**
     * @since 1.0.0
     */
    case RUSSIAN_FEDERATION;

    /**
     * @since 1.0.0
     */
    case RWANDA;

    /**
     * @since 1.0.0
     */
    case SAINT_BARTHELEMY;

    /**
     * @since 1.0.0
     */
    case SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA;

    /**
     * @since 1.0.0
     */
    case SAINT_KITTS_AND_NEVIS;

    /**
     * @since 1.0.0
     */
    case SAINT_LUCIA;

    /**
     * @since 1.0.0
     */
    case SAINT_MARTIN_FRENCH_PART;

    /**
     * @since 1.0.0
     */
    case SAINT_PIERRE_AND_MIQUELON;

    /**
     * @since 1.0.0
     */
    case SAINT_VINCENT_AND_THE_GRENADINES;

    /**
     * @since 1.0.0
     */
    case SAMOA;

    /**
     * @since 1.0.0
     */
    case SAN_MARINO;

    /**
     * @since 1.0.0
     */
    case SAO_TOME_AND_PRINCIPE;

    /**
     * @since 1.0.0
     */
    case SAUDI_ARABIA;

    /**
     * @since 1.0.0
     */
    case SENEGAL;

    /**
     * @since 1.0.0
     */
    case SERBIA;

    /**
     * @since 1.0.0
     */
    case SEYCHELLES;

    /**
     * @since 1.0.0
     */
    case SIERRA_LEONE;

    /**
     * @since 1.0.0
     */
    case SINGAPORE;

    /**
     * @since 1.0.0
     */
    case SINT_MAARTEN_DUTCH_PART;

    /**
     * @since 1.0.0
     */
    case SLOVAKIA;

    /**
     * @since 1.0.0
     */
    case SLOVENIA;

    /**
     * @since 1.0.0
     */
    case SOLOMON_ISLANDS;

    /**
     * @since 1.0.0
     */
    case SOMALIA;

    /**
     * @since 1.0.0
     */
    case SOUTH_AFRICA;

    /**
     * @since 1.0.0
     */
    case SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS;

    /**
     * @since 1.0.0
     */
    case SOUTH_SUDAN;

    /**
     * @since 1.0.0
     */
    case SPAIN;

    /**
     * @since 1.0.0
     */
    case SRI_LANKA;

    /**
     * @since 1.0.0
     */
    case SUDAN;

    /**
     * @since 1.0.0
     */
    case SURINAME;

    /**
     * @since 1.0.0
     */
    case SVALBARD_AND_JAN_MAYEN;

    /**
     * @since 1.0.0
     */
    case SWEDEN;

    /**
     * @since 1.0.0
     */
    case SWITZERLAND;

    /**
     * @since 1.0.0
     */
    case SYRIAN_ARAB_REPUBLIC;

    /**
     * @since 1.0.0
     */
    case TAIWAN_PROVINCE_OF_CHINA;

    /**
     * @since 1.0.0
     */
    case TAJIKISTAN;

    /**
     * @since 1.0.0
     */
    case TANZANIA_UNITED_REPUBLIC_OF;

    /**
     * @since 1.0.0
     */
    case THAILAND;

    /**
     * @since 1.0.0
     */
    case TIMOR_LESTE;

    /**
     * @since 1.0.0
     */
    case TOGO;

    /**
     * @since 1.0.0
     */
    case TOKELAU;

    /**
     * @since 1.0.0
     */
    case TONGA;

    /**
     * @since 1.0.0
     */
    case TRINIDAD_AND_TOBAGO;

    /**
     * @since 1.0.0
     */
    case TUNISIA;

    /**
     * @since 1.0.0
     */
    case TURKIYE;

    /**
     * @since 1.0.0
     */
    case TURKMENISTAN;

    /**
     * @since 1.0.0
     */
    case TURKS_AND_CAICOS_ISLANDS;

    /**
     * @since 1.0.0
     */
    case TUVALU;

    /**
     * @since 1.0.0
     */
    case UGANDA;

    /**
     * @since 1.0.0
     */
    case UKRAINE;

    /**
     * @since 1.0.0
     */
    case UNITED_ARAB_EMIRATES;

    /**
     * @since 1.0.0
     */
    case UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND;

    /**
     * @since 1.0.0
     */
    case UNITED_STATES_MINOR_OUTLYING_ISLANDS;

    /**
     * @since 1.0.0
     */
    case UNITED_STATES_OF_AMERICA;

    /**
     * @since 1.0.0
     */
    case URUGUAY;

    /**
     * @since 1.0.0
     */
    case UZBEKISTAN;

    /**
     * @since 1.0.0
     */
    case VANUATU;

    /**
     * @since 1.0.0
     */
    case VENEZUELA_BOLIVARIAN_REPUBLIC_OF;

    /**
     * @since 1.0.0
     */
    case VIET_NAM;

    /**
     * @since 1.0.0
     */
    case VIRGIN_ISLANDS_BRITISH;

    /**
     * @since 1.0.0
     */
    case VIRGIN_ISLANDS_US;

    /**
     * @since 1.0.0
     */
    case WALLIS_AND_FUTUNA;

    /**
     * @since 1.0.0
     */
    case WESTERN_SAHARA;

    /**
     * @since 1.0.0
     */
    case YEMEN;

    /**
     * @since 1.0.0
     */
    case ZAMBIA;

    /**
     * @since 1.0.0
     */
    case ZIMBABWE;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Country::alpha2() To check alpha 2 code for country.
     */
    public static function fromAlpha2 (string $code):self|false {

        foreach (self::cases() as $case)
            if ($case->alpha2() === $code) return $case;

        return false;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Country::alpha3() To check alpha 3 code for country.
     */
    public static function fromAlpha3 (string $code):self|false {

        foreach (self::cases() as $case)
            if ($case->alpha3() === $code) return $case;

        return false;

    }

    /**
     * ### Get all country's from a provided region
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Country::is() To check if the country is a region.
     *
     * @param \FireHub\Core\Support\Enums\Geo\Contracts\UNM49 $region <p>
     * Region to filter by.
     * </p>
     *
     * @return \FireHub\Core\Support\Enums\Geo\Country[] List of country's.
     */
    public static function casesFrom (UNM49 $region):array {

        $cases = [];

        foreach (self::cases() as $case)
            if ($case->is($region)) $cases[] = $case;

        return $cases;

    }

    /**
     * ### Get all country's from a provided continent or ocean
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Country::continent() To check a country's continent or ocean.
     *
     * @param \FireHub\Core\Support\Enums\Geo\Continent|\FireHub\Core\Support\Enums\Geo\Ocean $continent <p>
     * Continent or ocean to filter by.
     * </p>
     *
     * @return \FireHub\Core\Support\Enums\Geo\Country[] List of country's.
     */
    public static function casesFromContinent (Continent|Ocean $continent):array {

        $cases = [];

        foreach (self::cases() as $case)
            if ($case->continent() === $continent) $cases[] = $case;

        return $cases;

    }

    /**
     * ### Check if the country is a region
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Country::check() To check country's region.
     *
     * @param \FireHub\Core\Support\Enums\Geo\Contracts\UNM49 $region <p>
     * Region to check for.
     * </p>
     *
     * @return bool True if country is a region type, false otherwise.
     */
    public function is (UNM49 $region):bool {

        return $this->check($region, $this);

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function name ():string {

        return match ($this) {
            self::AFGHANISTAN => "Afghanistan",
            self::ALAND_ISLANDS => "Åland Islands",
            self::ALBANIA => "Albania",
            self::ALGERIA => "Algeria",
            self::AMERICAN_SAMOA => "American Samoa",
            self::ANDORRA => "Andorra",
            self::ANGOLA => "Angola",
            self::ANGUILLA => "Anguilla",
            self::ANTARCTICA => "Antarctica",
            self::ANTIGUA_AND_BARBUDA => "Antigua and Barbuda",
            self::ARGENTINA => "Argentina",
            self::ARMENIA => "Armenia",
            self::ARUBA => "Aruba",
            self::AUSTRALIA => "Australia",
            self::AUSTRIA => "Austria",
            self::AZERBAIJAN => "Azerbaijan",
            self::BAHAMAS => "Bahamas",
            self::BAHRAIN => "Bahrain",
            self::BANGLADESH => "Bangladesh",
            self::BARBADOS => "Barbados",
            self::BELARUS => "Belarus",
            self::BELGIUM => "Belgium",
            self::BELIZE => "Belize",
            self::BENIN => "Benin",
            self::BERMUDA => "Bermuda",
            self::BHUTAN => "Bhutan",
            self::BOLIVIA_PLURINATIONAL_STATE_OF => "Bolivia, Plurinational State of",
            self::BONAIRE_SINT_EUSTATIUS_AND_SABA => "Bonaire, Sint Eustatius and Saba",
            self::BOSNIA_AND_HERZEGOVINA => "Bosnia and Herzegovina",
            self::BOTSWANA => "Botswana",
            self::BOUVET_ISLAND => "Bouvet Island",
            self::BRAZIL => "Brazil",
            self::BRITISH_INDIAN_OCEAN_TERRITORY => "British Indian Ocean Territory",
            self::BRUNEI_DARUSSALAM => "Brunei Darussalam",
            self::BULGARIA => "Bulgaria",
            self::BURKINA_FASO => "Burkina Faso",
            self::BURUNDI => "Burundi",
            self::CABO_VERDE => "Cabo Verde",
            self::CAMBODIA => "Cambodia",
            self::CAMEROON => "Cameroon",
            self::CANADA => "Canada",
            self::CAYMAN_ISLANDS => "Cayman Islands",
            self::CENTRAL_AFRICAN_REPUBLIC => "Central African Republic",
            self::CHAD => "Chad",
            self::CHILE => "Chile",
            self::CHINA => "China",
            self::CHRISTMAS_ISLAND => "Christmas Island",
            self::COCOS_KEELING_ISLANDS => "Cocos (Keeling) Islands",
            self::COLOMBIA => "Colombia",
            self::COMOROS => "Comoros",
            self::CONGO => "Congo",
            self::CONGO_DEMOCRATIC_REPUBLIC_OF_THE => "Congo, Democratic Republic of the",
            self::COOK_ISLANDS => "Cook Islands",
            self::COSTA_RICA => "Costa Rica",
            self::COTE_D_IVOIRE => "Côte d'Ivoire",
            self::CROATIA => "Croatia",
            self::CUBA => "Cuba",
            self::CURACAO => "Curaçao",
            self::CYPRUS => "Cyprus",
            self::CZECHIA => "Czechia",
            self::DENMARK => "Denmark",
            self::DJIBOUTI => "Djibouti",
            self::DOMINICA => "Dominica",
            self::DOMINICAN_REPUBLIC => "Dominican Republic",
            self::ECUADOR => "Ecuador",
            self::EGYPT => "Egypt",
            self::EL_SALVADOR => "El Salvador",
            self::EQUATORIAL_GUINEA => "Equatorial Guinea",
            self::ERITREA => "Eritrea",
            self::ESTONIA => "Estonia",
            self::ESWATINI => "Eswatini",
            self::ETHIOPIA => "Ethiopia",
            self::FALKLAND_ISLANDS_MALVINAS => "Falkland Islands (Malvinas)",
            self::FAROE_ISLANDS => "Faroe Islands",
            self::FIJI => "Fiji",
            self::FINLAND => "Finland",
            self::FRANCE => "France",
            self::FRENCH_GUIANA => "French Guiana",
            self::FRENCH_POLYNESIA => "French POLYNESIA",
            self::FRENCH_SOUTHERN_TERRITORIES => "French Southern Territories",
            self::GABON => "Gabon",
            self::GAMBIA => "Gambia",
            self::GEORGIA => "Georgia",
            self::GERMANY => "Germany",
            self::GHANA => "Ghana",
            self::GIBRALTAR => "Gibraltar",
            self::GREECE => "Greece",
            self::GREENLAND => "Greenland",
            self::GRENADA => "Grenada",
            self::GUADELOUPE => "Guadeloupe",
            self::GUAM => "Guam",
            self::GUATEMALA => "Guatemala",
            self::GUERNSEY => "Guernsey",
            self::GUINEA => "Guinea",
            self::GUINEA_BISSAU => "Guinea-Bissau",
            self::GUYANA => "Guyana",
            self::HAITI => "Haiti",
            self::HEARD_ISLAND_AND_MCDONALD_ISLANDS => "Heard Island and McDonald Islands",
            self::HOLY_SEE => "Holy See",
            self::HONDURAS => "Honduras",
            self::HONG_KONG => "Hong Kong",
            self::HUNGARY => "Hungary",
            self::ICELAND => "Iceland",
            self::INDIA => "India",
            self::INDONESIA => "Indonesia",
            self::IRAN_ISLAMIC_REPUBLIC_OF => "Iran, Islamic Republic of",
            self::IRAQ => "Iraq",
            self::IRELAND => "Ireland",
            self::ISLE_OF_MAN => "Isle of Man",
            self::ISRAEL => "Israel",
            self::ITALY => "Italy",
            self::JAMAICA => "Jamaica",
            self::JAPAN => "Japan",
            self::JERSEY => "Jersey",
            self::JORDAN => "Jordan",
            self::KAZAKHSTAN => "Kazakhstan",
            self::KENYA => "Kenya",
            self::KIRIBATI => "Kiribati",
            self::KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF => "Korea, Democratic People's Republic of",
            self::KOREA_REPUBLIC_OF => "Korea, Republic of",
            self::KOSOVO => "Kosovo",
            self::KUWAIT => "Kuwait",
            self::KYRGYZSTAN => "Kyrgyzstan",
            self::LAO_PEOPLES_DEMOCRATIC_REPUBLIC => "Lao People's Democratic Republic",
            self::LATVIA => "Latvia",
            self::LEBANON => "Lebanon",
            self::LESOTHO => "Lesotho",
            self::LIBERIA => "Liberia",
            self::LIBYA => "Libya",
            self::LIECHTENSTEIN => "Liechtenstein",
            self::LITHUANIA => "Lithuania",
            self::LUXEMBOURG => "Luxembourg",
            self::MACAO => "Macao",
            self::MADAGASCAR => "Madagascar",
            self::MALAWI => "Malawi",
            self::MALAYSIA => "Malaysia",
            self::MALDIVES => "Maldives",
            self::MALI => "Mali",
            self::MALTA => "Malta",
            self::MARSHALL_ISLANDS => "Marshall Islands",
            self::MARTINIQUE => "Martinique",
            self::MAURITANIA => "Mauritania",
            self::MAURITIUS => "Mauritius",
            self::MAYOTTE => "Mayotte",
            self::MEXICO => "Mexico",
            self::MICRONESIA_FEDERATED_STATES_OF => "MICRONESIA, Federated States of",
            self::MOLDOVA_REPUBLIC_OF => "Moldova, Republic of",
            self::MONACO => "Monaco",
            self::MONGOLIA => "Mongolia",
            self::MONTENEGRO => "Montenegro",
            self::MONTSERRAT => "Montserrat",
            self::MOROCCO => "Morocco",
            self::MOZAMBIQUE => "Mozambique",
            self::MYANMAR => "Myanmar",
            self::NAMIBIA => "Namibia",
            self::NAURU => "Nauru",
            self::NEPAL => "Nepal",
            self::NETHERLANDS_KINGDOM_OF_THE => "Netherlands, Kingdom of the",
            self::NEW_CALEDONIA => "New Caledonia",
            self::NEW_ZEALAND => "New Zealand",
            self::NICARAGUA => "Nicaragua",
            self::NIGER => "Niger",
            self::NIGERIA => "Nigeria",
            self::NIUE => "Niue",
            self::NORFOLK_ISLAND => "Norfolk Island",
            self::NORTH_MACEDONIA => "North Macedonia",
            self::NORTHERN_MARIANA_ISLANDS => "Northern Mariana Islands",
            self::NORWAY => "Norway",
            self::OMAN => "Oman",
            self::PAKISTAN => "Pakistan",
            self::PALAU => "Palau",
            self::PALESTINE_STATE_OF => "Palestine, State of",
            self::PANAMA => "Panama",
            self::PAPUA_NEW_GUINEA => "Papua New Guinea",
            self::PARAGUAY => "Paraguay",
            self::PERU => "Peru",
            self::PHILIPPINES => "Philippines",
            self::PITCAIRN => "Pitcairn",
            self::POLAND => "Poland",
            self::PORTUGAL => "Portugal",
            self::PUERTO_RICO => "Puerto Rico",
            self::QATAR => "Qatar",
            self::REUNION => "Réunion",
            self::ROMANIA => "Romania",
            self::RUSSIAN_FEDERATION => "Russian Federation",
            self::RWANDA => "Rwanda",
            self::SAINT_BARTHELEMY => "Saint Barthélemy",
            self::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA => "Saint Helena, Ascension and Tristan da Cunha",
            self::SAINT_KITTS_AND_NEVIS => "Saint Kitts and Nevis",
            self::SAINT_LUCIA => "Saint Lucia",
            self::SAINT_MARTIN_FRENCH_PART => "Saint Martin (French part)",
            self::SAINT_PIERRE_AND_MIQUELON => "Saint Pierre and Miquelon",
            self::SAINT_VINCENT_AND_THE_GRENADINES => "Saint Vincent and the Grenadines",
            self::SAMOA => "Samoa",
            self::SAN_MARINO => "San Marino",
            self::SAO_TOME_AND_PRINCIPE => "Sao Tome and Principe",
            self::SAUDI_ARABIA => "Saudi Arabia",
            self::SENEGAL => "Senegal",
            self::SERBIA => "Serbia",
            self::SEYCHELLES => "Seychelles",
            self::SIERRA_LEONE => "Sierra Leone",
            self::SINGAPORE => "Singapore",
            self::SINT_MAARTEN_DUTCH_PART => "Sint Maarten (Dutch part)",
            self::SLOVAKIA => "Slovakia",
            self::SLOVENIA => "Slovenia",
            self::SOLOMON_ISLANDS => "Solomon Islands",
            self::SOMALIA => "Somalia",
            self::SOUTH_AFRICA => "South Africa",
            self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => "South Georgia and the South Sandwich Islands",
            self::SOUTH_SUDAN => "South Sudan",
            self::SPAIN => "Spain",
            self::SRI_LANKA => "Sri Lanka",
            self::SUDAN => "Sudan",
            self::SURINAME => "Suriname",
            self::SVALBARD_AND_JAN_MAYEN => "Svalbard and Jan Mayen",
            self::SWEDEN => "Sweden",
            self::SWITZERLAND => "Switzerland",
            self::SYRIAN_ARAB_REPUBLIC => "Syrian Arab Republic",
            self::TAIWAN_PROVINCE_OF_CHINA => "Taiwan, Province of China",
            self::TAJIKISTAN => "Tajikistan",
            self::TANZANIA_UNITED_REPUBLIC_OF => "Tanzania, United Republic of",
            self::THAILAND => "Thailand",
            self::TIMOR_LESTE => "Timor-Leste",
            self::TOGO => "Togo",
            self::TOKELAU => "Tokelau",
            self::TONGA => "Tonga",
            self::TRINIDAD_AND_TOBAGO => "Trinidad and Tobago",
            self::TUNISIA => "Tunisia",
            self::TURKIYE => "Türkiye",
            self::TURKMENISTAN => "Turkmenistan",
            self::TURKS_AND_CAICOS_ISLANDS => "Turks and Caicos Islands",
            self::TUVALU => "Tuvalu",
            self::UGANDA => "Uganda",
            self::UKRAINE => "Ukraine",
            self::UNITED_ARAB_EMIRATES => "United Arab Emirates",
            self::UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND => "United Kingdom of Great Britain and Northern Ireland",
            self::UNITED_STATES_MINOR_OUTLYING_ISLANDS => "United States Minor Outlying Islands",
            self::UNITED_STATES_OF_AMERICA => "United States of America",
            self::URUGUAY => "Uruguay",
            self::UZBEKISTAN => "Uzbekistan",
            self::VANUATU => "Vanuatu",
            self::VENEZUELA_BOLIVARIAN_REPUBLIC_OF => "Venezuela, Bolivarian Republic of",
            self::VIET_NAM => "Viet Nam",
            self::VIRGIN_ISLANDS_BRITISH => "Virgin Islands (British)",
            self::VIRGIN_ISLANDS_US => "Virgin Islands (U.S.)",
            self::WALLIS_AND_FUTUNA => "Wallis and Futuna",
            self::WESTERN_SAHARA => "Western Sahara",
            self::YEMEN => "Yemen",
            self::ZAMBIA => "Zambia",
            self::ZIMBABWE => "Zimbabwe"
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function code ():string {

        return match ($this) {
            self::AFGHANISTAN => '004',
            self::ALAND_ISLANDS => '248',
            self::ALBANIA => '008',
            self::ALGERIA => '012',
            self::AMERICAN_SAMOA => '016',
            self::ANDORRA => '020',
            self::ANGOLA => '024',
            self::ANGUILLA => '660',
            self::ANTARCTICA => '010',
            self::ANTIGUA_AND_BARBUDA => '028',
            self::ARGENTINA => '032',
            self::ARMENIA => '051',
            self::ARUBA => '533',
            self::AUSTRALIA => '036',
            self::AUSTRIA => '040',
            self::AZERBAIJAN => '031',
            self::BAHAMAS => '044',
            self::BAHRAIN => '048',
            self::BANGLADESH => '050',
            self::BARBADOS => '052',
            self::BELARUS => '112',
            self::BELGIUM => '056',
            self::BELIZE => '084',
            self::BENIN => '204',
            self::BERMUDA => '060',
            self::BHUTAN => '064',
            self::BOLIVIA_PLURINATIONAL_STATE_OF => '068',
            self::BONAIRE_SINT_EUSTATIUS_AND_SABA => '535',
            self::BOSNIA_AND_HERZEGOVINA => '070',
            self::BOTSWANA => '072',
            self::BOUVET_ISLAND => '074',
            self::BRAZIL => '076',
            self::BRITISH_INDIAN_OCEAN_TERRITORY => '086',
            self::BRUNEI_DARUSSALAM => '096',
            self::BULGARIA => '100',
            self::BURKINA_FASO => '854',
            self::BURUNDI => '108',
            self::CABO_VERDE => '132',
            self::CAMBODIA => '116',
            self::CAMEROON => '120',
            self::CANADA => '124',
            self::CAYMAN_ISLANDS => '136',
            self::CENTRAL_AFRICAN_REPUBLIC => '140',
            self::CHAD => '148',
            self::CHILE => '152',
            self::CHINA => '156',
            self::CHRISTMAS_ISLAND => '162',
            self::COCOS_KEELING_ISLANDS => '166',
            self::COLOMBIA => '170',
            self::COMOROS => '174',
            self::CONGO => '178',
            self::CONGO_DEMOCRATIC_REPUBLIC_OF_THE => '180',
            self::COOK_ISLANDS => '184',
            self::COSTA_RICA => '188',
            self::COTE_D_IVOIRE => '384',
            self::CROATIA => '191',
            self::CUBA => '192',
            self::CURACAO => '531',
            self::CYPRUS => '196',
            self::CZECHIA => '203',
            self::DENMARK => '208',
            self::DJIBOUTI => '262',
            self::DOMINICA => '212',
            self::DOMINICAN_REPUBLIC => '214',
            self::ECUADOR => '218',
            self::EGYPT => '818',
            self::EL_SALVADOR => '222',
            self::EQUATORIAL_GUINEA => '226',
            self::ERITREA => '232',
            self::ESTONIA => '233',
            self::ESWATINI => '748',
            self::ETHIOPIA => '231',
            self::FALKLAND_ISLANDS_MALVINAS => '238',
            self::FAROE_ISLANDS => '234',
            self::FIJI => '242',
            self::FINLAND => '246',
            self::FRANCE => '250',
            self::FRENCH_GUIANA => '254',
            self::FRENCH_POLYNESIA => '258',
            self::FRENCH_SOUTHERN_TERRITORIES => '260',
            self::GABON => '266',
            self::GAMBIA => '270',
            self::GEORGIA => '268',
            self::GERMANY => '276',
            self::GHANA => '288',
            self::GIBRALTAR => '292',
            self::GREECE => '300',
            self::GREENLAND => '304',
            self::GRENADA => '308',
            self::GUADELOUPE => '312',
            self::GUAM => '316',
            self::GUATEMALA => '320',
            self::GUERNSEY => '831',
            self::GUINEA => '324',
            self::GUINEA_BISSAU => '624',
            self::GUYANA => '328',
            self::HAITI => '332',
            self::HEARD_ISLAND_AND_MCDONALD_ISLANDS => '334',
            self::HOLY_SEE => '336',
            self::HONDURAS => '340',
            self::HONG_KONG => '344',
            self::HUNGARY => '348',
            self::ICELAND => '352',
            self::INDIA => '356',
            self::INDONESIA => '360',
            self::IRAN_ISLAMIC_REPUBLIC_OF => '364',
            self::IRAQ => '368',
            self::IRELAND => '372',
            self::ISLE_OF_MAN => '833',
            self::ISRAEL => '376',
            self::ITALY => '380',
            self::JAMAICA => '388',
            self::JAPAN => '392',
            self::JERSEY => '832',
            self::JORDAN => '400',
            self::KAZAKHSTAN => '398',
            self::KENYA => '404',
            self::KIRIBATI => '296',
            self::KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF => '408',
            self::KOREA_REPUBLIC_OF => '410',
            self::KOSOVO => '412',
            self::KUWAIT => '414',
            self::KYRGYZSTAN => '417',
            self::LAO_PEOPLES_DEMOCRATIC_REPUBLIC => '418',
            self::LATVIA => '428',
            self::LEBANON => '422',
            self::LESOTHO => '426',
            self::LIBERIA => '430',
            self::LIBYA => '434',
            self::LIECHTENSTEIN => '438',
            self::LITHUANIA => '440',
            self::LUXEMBOURG => '442',
            self::MACAO => '446',
            self::MADAGASCAR => '450',
            self::MALAWI => '454',
            self::MALAYSIA => '458',
            self::MALDIVES => '462',
            self::MALI => '466',
            self::MALTA => '470',
            self::MARSHALL_ISLANDS => '584',
            self::MARTINIQUE => '474',
            self::MAURITANIA => '478',
            self::MAURITIUS => '480',
            self::MAYOTTE => '175',
            self::MEXICO => '484',
            self::MICRONESIA_FEDERATED_STATES_OF => '583',
            self::MOLDOVA_REPUBLIC_OF => '498',
            self::MONACO => '492',
            self::MONGOLIA => '496',
            self::MONTENEGRO => '499',
            self::MONTSERRAT => '500',
            self::MOROCCO => '504',
            self::MOZAMBIQUE => '508',
            self::MYANMAR => '104',
            self::NAMIBIA => '516',
            self::NAURU => '520',
            self::NEPAL => '524',
            self::NETHERLANDS_KINGDOM_OF_THE => '528',
            self::NEW_CALEDONIA => '540',
            self::NEW_ZEALAND => '554',
            self::NICARAGUA => '558',
            self::NIGER => '562',
            self::NIGERIA => '566',
            self::NIUE => '570',
            self::NORFOLK_ISLAND => '574',
            self::NORTH_MACEDONIA => '807',
            self::NORTHERN_MARIANA_ISLANDS => '580',
            self::NORWAY => '578',
            self::OMAN => '512',
            self::PAKISTAN => '586',
            self::PALAU => '585',
            self::PALESTINE_STATE_OF => '275',
            self::PANAMA => '591',
            self::PAPUA_NEW_GUINEA => '598',
            self::PARAGUAY => '600',
            self::PERU => '604',
            self::PHILIPPINES => '608',
            self::PITCAIRN => '612',
            self::POLAND => '616',
            self::PORTUGAL => '620',
            self::PUERTO_RICO => '630',
            self::QATAR => '634',
            self::REUNION => '638',
            self::ROMANIA => '642',
            self::RUSSIAN_FEDERATION => '643',
            self::RWANDA => '646',
            self::SAINT_BARTHELEMY => '652',
            self::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA => '654',
            self::SAINT_KITTS_AND_NEVIS => '659',
            self::SAINT_LUCIA => '662',
            self::SAINT_MARTIN_FRENCH_PART => '663',
            self::SAINT_PIERRE_AND_MIQUELON => '666',
            self::SAINT_VINCENT_AND_THE_GRENADINES => '670',
            self::SAMOA => '882',
            self::SAN_MARINO => '674',
            self::SAO_TOME_AND_PRINCIPE => '678',
            self::SAUDI_ARABIA => '682',
            self::SENEGAL => '686',
            self::SERBIA => '688',
            self::SEYCHELLES => '690',
            self::SIERRA_LEONE => '694',
            self::SINGAPORE => '702',
            self::SINT_MAARTEN_DUTCH_PART => '534',
            self::SLOVAKIA => '703',
            self::SLOVENIA => '705',
            self::SOLOMON_ISLANDS => '090',
            self::SOMALIA => '706',
            self::SOUTH_AFRICA => '710',
            self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => '239',
            self::SOUTH_SUDAN => '728',
            self::SPAIN => '724',
            self::SRI_LANKA => '144',
            self::SUDAN => '729',
            self::SURINAME => '740',
            self::SVALBARD_AND_JAN_MAYEN => '744',
            self::SWEDEN => '752',
            self::SWITZERLAND => '756',
            self::SYRIAN_ARAB_REPUBLIC => '760',
            self::TAIWAN_PROVINCE_OF_CHINA => '158',
            self::TAJIKISTAN => '762',
            self::TANZANIA_UNITED_REPUBLIC_OF => '834',
            self::THAILAND => '764',
            self::TIMOR_LESTE => '626',
            self::TOGO => '768',
            self::TOKELAU => '772',
            self::TONGA => '776',
            self::TRINIDAD_AND_TOBAGO => '780',
            self::TUNISIA => '788',
            self::TURKIYE => '792',
            self::TURKMENISTAN => '795',
            self::TURKS_AND_CAICOS_ISLANDS => '796',
            self::TUVALU => '798',
            self::UGANDA => '800',
            self::UKRAINE => '804',
            self::UNITED_ARAB_EMIRATES => '784',
            self::UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND => '826',
            self::UNITED_STATES_MINOR_OUTLYING_ISLANDS => '581',
            self::UNITED_STATES_OF_AMERICA => '840',
            self::URUGUAY => '858',
            self::UZBEKISTAN => '860',
            self::VANUATU => '548',
            self::VENEZUELA_BOLIVARIAN_REPUBLIC_OF => '862',
            self::VIET_NAM => '704',
            self::VIRGIN_ISLANDS_BRITISH => '092',
            self::VIRGIN_ISLANDS_US => '850',
            self::WALLIS_AND_FUTUNA => '876',
            self::WESTERN_SAHARA => '732',
            self::YEMEN => '887',
            self::ZAMBIA => '894',
            self::ZIMBABWE => '716'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function alpha2 ():string {

        return match ($this) {
            self::AFGHANISTAN => 'AF',
            self::ALAND_ISLANDS => 'AX',
            self::ALBANIA => 'AL',
            self::ALGERIA => 'DZ',
            self::AMERICAN_SAMOA => 'AS',
            self::ANDORRA => 'AD',
            self::ANGOLA => 'AO',
            self::ANGUILLA => 'AI',
            self::ANTARCTICA => 'AQ',
            self::ANTIGUA_AND_BARBUDA => 'AG',
            self::ARGENTINA => 'AR',
            self::ARMENIA => 'AM',
            self::ARUBA => 'AW',
            self::AUSTRALIA => 'AU',
            self::AUSTRIA => 'AT',
            self::AZERBAIJAN => 'AZ',
            self::BAHAMAS => 'BS',
            self::BAHRAIN => 'BH',
            self::BANGLADESH => 'BD',
            self::BARBADOS => 'BB',
            self::BELARUS => 'BY',
            self::BELGIUM => 'BE',
            self::BELIZE => 'BZ',
            self::BENIN => 'BJ',
            self::BERMUDA => 'BM',
            self::BHUTAN => 'BT',
            self::BOLIVIA_PLURINATIONAL_STATE_OF => 'BO',
            self::BONAIRE_SINT_EUSTATIUS_AND_SABA => 'BQ',
            self::BOSNIA_AND_HERZEGOVINA => 'BA',
            self::BOTSWANA => 'BW',
            self::BOUVET_ISLAND => 'BV',
            self::BRAZIL => 'BR',
            self::BRITISH_INDIAN_OCEAN_TERRITORY => 'IO',
            self::BRUNEI_DARUSSALAM => 'BN',
            self::BULGARIA => 'BG',
            self::BURKINA_FASO => 'BF',
            self::BURUNDI => 'BI',
            self::CABO_VERDE => 'CV',
            self::CAMBODIA => 'KH',
            self::CAMEROON => 'CM',
            self::CANADA => 'CA',
            self::CAYMAN_ISLANDS => 'KY',
            self::CENTRAL_AFRICAN_REPUBLIC => 'CF',
            self::CHAD => 'TD',
            self::CHILE => 'CL',
            self::CHINA => 'CN',
            self::CHRISTMAS_ISLAND => 'CX',
            self::COCOS_KEELING_ISLANDS => 'CC',
            self::COLOMBIA => 'CO',
            self::COMOROS => 'KM',
            self::CONGO => 'CG',
            self::CONGO_DEMOCRATIC_REPUBLIC_OF_THE => 'CD',
            self::COOK_ISLANDS => 'CK',
            self::COSTA_RICA => 'CR',
            self::COTE_D_IVOIRE => 'CI',
            self::CROATIA => 'HR',
            self::CUBA => 'CU',
            self::CURACAO => 'CW',
            self::CYPRUS => 'CY',
            self::CZECHIA => 'CZ',
            self::DENMARK => 'DK',
            self::DJIBOUTI => 'DJ',
            self::DOMINICA => 'DM',
            self::DOMINICAN_REPUBLIC => 'DO',
            self::ECUADOR => 'EC',
            self::EGYPT => 'EG',
            self::EL_SALVADOR => 'SV',
            self::EQUATORIAL_GUINEA => 'GQ',
            self::ERITREA => 'ER',
            self::ESTONIA => 'EE',
            self::ESWATINI => 'SZ',
            self::ETHIOPIA => 'ET',
            self::FALKLAND_ISLANDS_MALVINAS => 'FK',
            self::FAROE_ISLANDS => 'FO',
            self::FIJI => 'FJ',
            self::FINLAND => 'FI',
            self::FRANCE => 'FR',
            self::FRENCH_GUIANA => 'GF',
            self::FRENCH_POLYNESIA => 'PF',
            self::FRENCH_SOUTHERN_TERRITORIES => 'TF',
            self::GABON => 'GA',
            self::GAMBIA => 'GM',
            self::GEORGIA => 'GE',
            self::GERMANY => 'DE',
            self::GHANA => 'GH',
            self::GIBRALTAR => 'GI',
            self::GREECE => 'GR',
            self::GREENLAND => 'GL',
            self::GRENADA => 'GD',
            self::GUADELOUPE => 'GP',
            self::GUAM => 'GU',
            self::GUATEMALA => 'GT',
            self::GUERNSEY => 'GG',
            self::GUINEA => 'GN',
            self::GUINEA_BISSAU => 'GW',
            self::GUYANA => 'GY',
            self::HAITI => 'HT',
            self::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'HM',
            self::HOLY_SEE => 'VA',
            self::HONDURAS => 'HN',
            self::HONG_KONG => 'HK',
            self::HUNGARY => 'HU',
            self::ICELAND => 'IS',
            self::INDIA => 'IN',
            self::INDONESIA => 'ID',
            self::IRAN_ISLAMIC_REPUBLIC_OF => 'IR',
            self::IRAQ => 'IQ',
            self::IRELAND => 'IE',
            self::ISLE_OF_MAN => 'IM',
            self::ISRAEL => 'IL',
            self::ITALY => 'IT',
            self::JAMAICA => 'JM',
            self::JAPAN => 'JP',
            self::JERSEY => 'JE',
            self::JORDAN => 'JO',
            self::KAZAKHSTAN => 'KZ',
            self::KENYA => 'KE',
            self::KIRIBATI => 'KI',
            self::KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF => 'KP',
            self::KOREA_REPUBLIC_OF => 'KR',
            self::KOSOVO => 'XK',
            self::KUWAIT => 'KW',
            self::KYRGYZSTAN => 'KG',
            self::LAO_PEOPLES_DEMOCRATIC_REPUBLIC => 'LA',
            self::LATVIA => 'LV',
            self::LEBANON => 'LB',
            self::LESOTHO => 'LS',
            self::LIBERIA => 'LR',
            self::LIBYA => 'LY',
            self::LIECHTENSTEIN => 'LI',
            self::LITHUANIA => 'LT',
            self::LUXEMBOURG => 'LU',
            self::MACAO => 'MO',
            self::MADAGASCAR => 'MG',
            self::MALAWI => 'MW',
            self::MALAYSIA => 'MY',
            self::MALDIVES => 'MV',
            self::MALI => 'ML',
            self::MALTA => 'MT',
            self::MARSHALL_ISLANDS => 'MH',
            self::MARTINIQUE => 'MQ',
            self::MAURITANIA => 'MR',
            self::MAURITIUS => 'MU',
            self::MAYOTTE => 'YT',
            self::MEXICO => 'MX',
            self::MICRONESIA_FEDERATED_STATES_OF => 'FM',
            self::MOLDOVA_REPUBLIC_OF => 'MD',
            self::MONACO => 'MC',
            self::MONGOLIA => 'MN',
            self::MONTENEGRO => 'ME',
            self::MONTSERRAT => 'MS',
            self::MOROCCO => 'MA',
            self::MOZAMBIQUE => 'MZ',
            self::MYANMAR => 'MM',
            self::NAMIBIA => 'NA',
            self::NAURU => 'NR',
            self::NEPAL => 'NP',
            self::NETHERLANDS_KINGDOM_OF_THE => 'NL',
            self::NEW_CALEDONIA => 'NC',
            self::NEW_ZEALAND => 'NZ',
            self::NICARAGUA => 'NI',
            self::NIGER => 'NE',
            self::NIGERIA => 'NG',
            self::NIUE => 'NU',
            self::NORFOLK_ISLAND => 'NF',
            self::NORTH_MACEDONIA => 'MK',
            self::NORTHERN_MARIANA_ISLANDS => 'MP',
            self::NORWAY => 'NO',
            self::OMAN => 'OM',
            self::PAKISTAN => 'PK',
            self::PALAU => 'PW',
            self::PALESTINE_STATE_OF => 'PS',
            self::PANAMA => 'PA',
            self::PAPUA_NEW_GUINEA => 'PG',
            self::PARAGUAY => 'PY',
            self::PERU => 'PE',
            self::PHILIPPINES => 'PH',
            self::PITCAIRN => 'PN',
            self::POLAND => 'PL',
            self::PORTUGAL => 'PT',
            self::PUERTO_RICO => 'PR',
            self::QATAR => 'QA',
            self::REUNION => 'RE',
            self::ROMANIA => 'RO',
            self::RUSSIAN_FEDERATION => 'RU',
            self::RWANDA => 'RW',
            self::SAINT_BARTHELEMY => 'BL',
            self::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA => 'SH',
            self::SAINT_KITTS_AND_NEVIS => 'KN',
            self::SAINT_LUCIA => 'LC',
            self::SAINT_MARTIN_FRENCH_PART => 'MF',
            self::SAINT_PIERRE_AND_MIQUELON => 'PM',
            self::SAINT_VINCENT_AND_THE_GRENADINES => 'VC',
            self::SAMOA => 'WS',
            self::SAN_MARINO => 'SM',
            self::SAO_TOME_AND_PRINCIPE => 'ST',
            self::SAUDI_ARABIA => 'SA',
            self::SENEGAL => 'SN',
            self::SERBIA => 'RS',
            self::SEYCHELLES => 'SC',
            self::SIERRA_LEONE => 'SL',
            self::SINGAPORE => 'SG',
            self::SINT_MAARTEN_DUTCH_PART => 'SX',
            self::SLOVAKIA => 'SK',
            self::SLOVENIA => 'SI',
            self::SOLOMON_ISLANDS => 'SB',
            self::SOMALIA => 'SO',
            self::SOUTH_AFRICA => 'ZA',
            self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'GS',
            self::SOUTH_SUDAN => 'SS',
            self::SPAIN => 'ES',
            self::SRI_LANKA => 'LK',
            self::SUDAN => 'SD',
            self::SURINAME => 'SR',
            self::SVALBARD_AND_JAN_MAYEN => 'SJ',
            self::SWEDEN => 'SE',
            self::SWITZERLAND => 'CH',
            self::SYRIAN_ARAB_REPUBLIC => 'SY',
            self::TAIWAN_PROVINCE_OF_CHINA => 'TW',
            self::TAJIKISTAN => 'TJ',
            self::TANZANIA_UNITED_REPUBLIC_OF => 'TZ',
            self::THAILAND => 'TH',
            self::TIMOR_LESTE => 'TL',
            self::TOGO => 'TG',
            self::TOKELAU => 'TK',
            self::TONGA => 'TO',
            self::TRINIDAD_AND_TOBAGO => 'TT',
            self::TUNISIA => 'TN',
            self::TURKIYE => 'TR',
            self::TURKMENISTAN => 'TM',
            self::TURKS_AND_CAICOS_ISLANDS => 'TC',
            self::TUVALU => 'TV',
            self::UGANDA => 'UG',
            self::UKRAINE => 'UA',
            self::UNITED_ARAB_EMIRATES => 'AE',
            self::UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND => 'GB',
            self::UNITED_STATES_MINOR_OUTLYING_ISLANDS => 'UM',
            self::UNITED_STATES_OF_AMERICA => 'US',
            self::URUGUAY => 'UY',
            self::UZBEKISTAN => 'UZ',
            self::VANUATU => 'VU',
            self::VENEZUELA_BOLIVARIAN_REPUBLIC_OF => 'VE',
            self::VIET_NAM => 'VN',
            self::VIRGIN_ISLANDS_BRITISH => 'VG',
            self::VIRGIN_ISLANDS_US => 'VI',
            self::WALLIS_AND_FUTUNA => 'WF',
            self::WESTERN_SAHARA => 'EH',
            self::YEMEN => 'YE',
            self::ZAMBIA => 'ZM',
            self::ZIMBABWE => 'ZW'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function alpha3 ():string {

        return match ($this) {
            self::AFGHANISTAN => 'AFG',
            self::ALAND_ISLANDS => 'ALA',
            self::ALBANIA => 'ALB',
            self::ALGERIA => 'DZA',
            self::AMERICAN_SAMOA => 'ASM',
            self::ANDORRA => 'AND',
            self::ANGOLA => 'AGO',
            self::ANGUILLA => 'AIA',
            self::ANTARCTICA => 'ATA',
            self::ANTIGUA_AND_BARBUDA => 'ATG',
            self::ARGENTINA => 'ARG',
            self::ARMENIA => 'ARM',
            self::ARUBA => 'ABW',
            self::AUSTRALIA => 'AUS',
            self::AUSTRIA => 'AUT',
            self::AZERBAIJAN => 'AZE',
            self::BAHAMAS => 'BHS',
            self::BAHRAIN => 'BHR',
            self::BANGLADESH => 'BGD',
            self::BARBADOS => 'BRB',
            self::BELARUS => 'BLR',
            self::BELGIUM => 'BEL',
            self::BELIZE => 'BLZ',
            self::BENIN => 'BEN',
            self::BERMUDA => 'BMU',
            self::BHUTAN => 'BTN',
            self::BOLIVIA_PLURINATIONAL_STATE_OF => 'BOL',
            self::BONAIRE_SINT_EUSTATIUS_AND_SABA => 'BES',
            self::BOSNIA_AND_HERZEGOVINA => 'BIH',
            self::BOTSWANA => 'BWA',
            self::BOUVET_ISLAND => 'BVT',
            self::BRAZIL => 'BRA',
            self::BRITISH_INDIAN_OCEAN_TERRITORY => 'IOT',
            self::BRUNEI_DARUSSALAM => 'BRN',
            self::BULGARIA => 'BGR',
            self::BURKINA_FASO => 'BFA',
            self::BURUNDI => 'BDI',
            self::CABO_VERDE => 'CPV',
            self::CAMBODIA => 'KHM',
            self::CAMEROON => 'CMR',
            self::CANADA => 'CAN',
            self::CAYMAN_ISLANDS => 'CYM',
            self::CENTRAL_AFRICAN_REPUBLIC => 'CAF',
            self::CHAD => 'TCD',
            self::CHILE => 'CHL',
            self::CHINA => 'CHN',
            self::CHRISTMAS_ISLAND => 'CXR',
            self::COCOS_KEELING_ISLANDS => 'CCK',
            self::COLOMBIA => 'COL',
            self::COMOROS => 'COM',
            self::CONGO => 'COG',
            self::CONGO_DEMOCRATIC_REPUBLIC_OF_THE => 'COD',
            self::COOK_ISLANDS => 'COK',
            self::COSTA_RICA => 'CRI',
            self::COTE_D_IVOIRE => 'CIV',
            self::CROATIA => 'HRV',
            self::CUBA => 'CUB',
            self::CURACAO => 'CUW',
            self::CYPRUS => 'CYP',
            self::CZECHIA => 'CZE',
            self::DENMARK => 'DNK',
            self::DJIBOUTI => 'DJI',
            self::DOMINICA => 'DMA',
            self::DOMINICAN_REPUBLIC => 'DOM',
            self::ECUADOR => 'ECU',
            self::EGYPT => 'EGY',
            self::EL_SALVADOR => 'SLV',
            self::EQUATORIAL_GUINEA => 'GNQ',
            self::ERITREA => 'ERI',
            self::ESTONIA => 'EST',
            self::ESWATINI => 'SWZ',
            self::ETHIOPIA => 'ETH',
            self::FALKLAND_ISLANDS_MALVINAS => 'FLK',
            self::FAROE_ISLANDS => 'FRO',
            self::FIJI => 'FJI',
            self::FINLAND => 'FIN',
            self::FRANCE => 'FRA',
            self::FRENCH_GUIANA => 'GUF',
            self::FRENCH_POLYNESIA => 'PYF',
            self::FRENCH_SOUTHERN_TERRITORIES => 'ATF',
            self::GABON => 'GAB',
            self::GAMBIA => 'GMB',
            self::GEORGIA => 'GEO',
            self::GERMANY => 'DEU',
            self::GHANA => 'GHA',
            self::GIBRALTAR => 'GIB',
            self::GREECE => 'GRC',
            self::GREENLAND => 'GRL',
            self::GRENADA => 'GRD',
            self::GUADELOUPE => 'GLP',
            self::GUAM => 'GUM',
            self::GUATEMALA => 'GTM',
            self::GUERNSEY => 'GGY',
            self::GUINEA => 'GIN',
            self::GUINEA_BISSAU => 'GNB',
            self::GUYANA => 'GUY',
            self::HAITI => 'HTI',
            self::HEARD_ISLAND_AND_MCDONALD_ISLANDS => 'HMD',
            self::HOLY_SEE => 'VAT',
            self::HONDURAS => 'HND',
            self::HONG_KONG => 'HKG',
            self::HUNGARY => 'HUN',
            self::ICELAND => 'ISL',
            self::INDIA => 'IND',
            self::INDONESIA => 'IDN',
            self::IRAN_ISLAMIC_REPUBLIC_OF => 'IRN',
            self::IRAQ => 'IRQ',
            self::IRELAND => 'IRL',
            self::ISLE_OF_MAN => 'IMN',
            self::ISRAEL => 'ISR',
            self::ITALY => 'ITA',
            self::JAMAICA => 'JAM',
            self::JAPAN => 'JPN',
            self::JERSEY => 'JEY',
            self::JORDAN => 'JOR',
            self::KAZAKHSTAN => 'KAZ',
            self::KENYA => 'KEN',
            self::KIRIBATI => 'KIR',
            self::KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF => 'PRK',
            self::KOREA_REPUBLIC_OF => 'KOR',
            self::KOSOVO => 'UNK',
            self::KUWAIT => 'KWT',
            self::KYRGYZSTAN => 'KGZ',
            self::LAO_PEOPLES_DEMOCRATIC_REPUBLIC => 'LAO',
            self::LATVIA => 'LVA',
            self::LEBANON => 'LBN',
            self::LESOTHO => 'LSO',
            self::LIBERIA => 'LBR',
            self::LIBYA => 'LBY',
            self::LIECHTENSTEIN => 'LIE',
            self::LITHUANIA => 'LTU',
            self::LUXEMBOURG => 'LUX',
            self::MACAO => 'MAC',
            self::MADAGASCAR => 'MDG',
            self::MALAWI => 'MWI',
            self::MALAYSIA => 'MYS',
            self::MALDIVES => 'MDV',
            self::MALI => 'MLI',
            self::MALTA => 'MLT',
            self::MARSHALL_ISLANDS => 'MHL',
            self::MARTINIQUE => 'MTQ',
            self::MAURITANIA => 'MRT',
            self::MAURITIUS => 'MUS',
            self::MAYOTTE => 'MYT',
            self::MEXICO => 'MEX',
            self::MICRONESIA_FEDERATED_STATES_OF => 'FSM',
            self::MOLDOVA_REPUBLIC_OF => 'MDA',
            self::MONACO => 'MCO',
            self::MONGOLIA => 'MNG',
            self::MONTENEGRO => 'MNE',
            self::MONTSERRAT => 'MSR',
            self::MOROCCO => 'MAR',
            self::MOZAMBIQUE => 'MOZ',
            self::MYANMAR => 'MMR',
            self::NAMIBIA => 'NAM',
            self::NAURU => 'NRU',
            self::NEPAL => 'NPL',
            self::NETHERLANDS_KINGDOM_OF_THE => 'NLD',
            self::NEW_CALEDONIA => 'NCL',
            self::NEW_ZEALAND => 'NZL',
            self::NICARAGUA => 'NIC',
            self::NIGER => 'NER',
            self::NIGERIA => 'NGA',
            self::NIUE => 'NIU',
            self::NORFOLK_ISLAND => 'NFK',
            self::NORTH_MACEDONIA => 'MKD',
            self::NORTHERN_MARIANA_ISLANDS => 'MNP',
            self::NORWAY => 'NOR',
            self::OMAN => 'OMN',
            self::PAKISTAN => 'PAK',
            self::PALAU => 'PLW',
            self::PALESTINE_STATE_OF => 'PSE',
            self::PANAMA => 'PAN',
            self::PAPUA_NEW_GUINEA => 'PNG',
            self::PARAGUAY => 'PRY',
            self::PERU => 'PER',
            self::PHILIPPINES => 'PHL',
            self::PITCAIRN => 'PCN',
            self::POLAND => 'POL',
            self::PORTUGAL => 'PRT',
            self::PUERTO_RICO => 'PRI',
            self::QATAR => 'QAT',
            self::REUNION => 'REU',
            self::ROMANIA => 'ROU',
            self::RUSSIAN_FEDERATION => 'RUS',
            self::RWANDA => 'RWA',
            self::SAINT_BARTHELEMY => 'BLM',
            self::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA => 'SHN',
            self::SAINT_KITTS_AND_NEVIS => 'KNA',
            self::SAINT_LUCIA => 'LCA',
            self::SAINT_MARTIN_FRENCH_PART => 'MAF',
            self::SAINT_PIERRE_AND_MIQUELON => 'SPM',
            self::SAINT_VINCENT_AND_THE_GRENADINES => 'VCT',
            self::SAMOA => 'WSM',
            self::SAN_MARINO => 'SMR',
            self::SAO_TOME_AND_PRINCIPE => 'STP',
            self::SAUDI_ARABIA => 'SAU',
            self::SENEGAL => 'SEN',
            self::SERBIA => 'SRB',
            self::SEYCHELLES => 'SYC',
            self::SIERRA_LEONE => 'SLE',
            self::SINGAPORE => 'SGP',
            self::SINT_MAARTEN_DUTCH_PART => 'SXM',
            self::SLOVAKIA => 'SVK',
            self::SLOVENIA => 'SVN',
            self::SOLOMON_ISLANDS => 'SLB',
            self::SOMALIA => 'SOM',
            self::SOUTH_AFRICA => 'ZAF',
            self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS => 'SGS',
            self::SOUTH_SUDAN => 'SSD',
            self::SPAIN => 'ESP',
            self::SRI_LANKA => 'LKA',
            self::SUDAN => 'SDN',
            self::SURINAME => 'SUR',
            self::SVALBARD_AND_JAN_MAYEN => 'SJM',
            self::SWEDEN => 'SWE',
            self::SWITZERLAND => 'CHE',
            self::SYRIAN_ARAB_REPUBLIC => 'SYR',
            self::TAIWAN_PROVINCE_OF_CHINA => 'TWN',
            self::TAJIKISTAN => 'TJK',
            self::TANZANIA_UNITED_REPUBLIC_OF => 'TZA',
            self::THAILAND => 'THA',
            self::TIMOR_LESTE => 'TLS',
            self::TOGO => 'TGO',
            self::TOKELAU => 'TKL',
            self::TONGA => 'TON',
            self::TRINIDAD_AND_TOBAGO => 'TTO',
            self::TUNISIA => 'TUN',
            self::TURKIYE => 'TUR',
            self::TURKMENISTAN => 'TKM',
            self::TURKS_AND_CAICOS_ISLANDS => 'TCA',
            self::TUVALU => 'TUV',
            self::UGANDA => 'UGA',
            self::UKRAINE => 'UKR',
            self::UNITED_ARAB_EMIRATES => 'ARE',
            self::UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND => 'GBR',
            self::UNITED_STATES_MINOR_OUTLYING_ISLANDS => 'UMI',
            self::UNITED_STATES_OF_AMERICA => 'USA',
            self::URUGUAY => 'URY',
            self::UZBEKISTAN => 'UZB',
            self::VANUATU => 'VUT',
            self::VENEZUELA_BOLIVARIAN_REPUBLIC_OF => 'VEN',
            self::VIET_NAM => 'VNM',
            self::VIRGIN_ISLANDS_BRITISH => 'VGB',
            self::VIRGIN_ISLANDS_US => 'VIR',
            self::WALLIS_AND_FUTUNA => 'WLF',
            self::WESTERN_SAHARA => 'ESH',
            self::YEMEN => 'YEM',
            self::ZAMBIA => 'ZMB',
            self::ZIMBABWE => 'ZWE'
        };

    }

    /**
     * ### Independent
     * @since 1.0.0
     *
     * @return bool True if country is Independent, false otherwise.
     */
    public function independent ():bool {

        return match ($this) {
            self::ALAND_ISLANDS, self::AMERICAN_SAMOA, self::ANGUILLA, self::ANTARCTICA, self::ARUBA, self::BERMUDA,
            self::BONAIRE_SINT_EUSTATIUS_AND_SABA, self::BOUVET_ISLAND, self::BRITISH_INDIAN_OCEAN_TERRITORY,
            self::CAYMAN_ISLANDS, self::CHRISTMAS_ISLAND, self::COCOS_KEELING_ISLANDS, self::COOK_ISLANDS, self::CURACAO,
            self::FALKLAND_ISLANDS_MALVINAS, self::FAROE_ISLANDS, self::FRENCH_GUIANA, self::FRENCH_POLYNESIA,
            self::FRENCH_SOUTHERN_TERRITORIES, self::GIBRALTAR, self::GREENLAND, self::GUADELOUPE, self::GUAM,
            self::GUERNSEY, self::HEARD_ISLAND_AND_MCDONALD_ISLANDS, self::HONG_KONG, self::ISLE_OF_MAN,
            self::JERSEY, self::KOSOVO, self::MACAO, self::MARTINIQUE, self::MAYOTTE, self::MONTSERRAT,
            self::NEW_CALEDONIA, self::NIUE, self::NORFOLK_ISLAND, self::NORTHERN_MARIANA_ISLANDS,
            self::PALESTINE_STATE_OF, self::PITCAIRN, self::PUERTO_RICO, self::REUNION, self::SAINT_BARTHELEMY,
            self::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA, self::SAINT_MARTIN_FRENCH_PART,
            self::SAINT_PIERRE_AND_MIQUELON, self::SINT_MAARTEN_DUTCH_PART,
            self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS, self::SVALBARD_AND_JAN_MAYEN,
            self::TAIWAN_PROVINCE_OF_CHINA, self::TOKELAU, self::TURKS_AND_CAICOS_ISLANDS,
            self::UNITED_STATES_MINOR_OUTLYING_ISLANDS, self::VIRGIN_ISLANDS_BRITISH, self::VIRGIN_ISLANDS_US,
            self::WALLIS_AND_FUTUNA, self::WESTERN_SAHARA => false,
            default => true
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function region ():UNM49 {

        return match ($this) {
            self::AFGHANISTAN, self::BANGLADESH, self::BHUTAN, self::INDIA, self::IRAN_ISLAMIC_REPUBLIC_OF,
            self::MALDIVES, self::NEPAL, self::PAKISTAN, self::SRI_LANKA => SubRegion::SOUTHERN_ASIA,
            self::ALAND_ISLANDS, self::DENMARK, self::ESTONIA, self::FAROE_ISLANDS, self::FINLAND, self::GUERNSEY,
            self::ICELAND, self::IRELAND, self::ISLE_OF_MAN, self::JERSEY, self::LATVIA, self::LITHUANIA, self::NORWAY,
            self::SVALBARD_AND_JAN_MAYEN, self::SWEDEN,
            self::UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND => SubRegion::NORTHERN_EUROPE,
            self::ALBANIA, self::ANDORRA, self::BOSNIA_AND_HERZEGOVINA, self::CROATIA, self::GIBRALTAR, self::GREECE,
            self::HOLY_SEE, self::ITALY, self::KOSOVO, self::MALTA, self::MONTENEGRO, self::NORTH_MACEDONIA,
            self::PORTUGAL, self::SAN_MARINO, self::SERBIA, self::SLOVENIA, self::SPAIN => SubRegion::SOUTHERN_EUROPE,
            self::ALGERIA, self::EGYPT, self::LIBYA, self::MOROCCO, self::SUDAN, self::TUNISIA,
            self::WESTERN_SAHARA => SubRegion::NORTHERN_AFRICA,
            self::AMERICAN_SAMOA, self::COOK_ISLANDS, self::FRENCH_POLYNESIA, self::NIUE, self::PITCAIRN, self::SAMOA,
            self::TOKELAU, self::TONGA, self::TUVALU, self::WALLIS_AND_FUTUNA => SubRegion::POLYNESIA,
            self::ANGOLA, self::CAMEROON, self::CENTRAL_AFRICAN_REPUBLIC, self::CHAD, self::CONGO,
            self::CONGO_DEMOCRATIC_REPUBLIC_OF_THE, self::EQUATORIAL_GUINEA, self::GABON,
            self::SAO_TOME_AND_PRINCIPE => IntermediateRegion::MIDDLE_AFRICA,
            self::ANGUILLA, self::ANTIGUA_AND_BARBUDA, self::ARUBA, self::BAHAMAS, self::BARBADOS,
            self::BONAIRE_SINT_EUSTATIUS_AND_SABA, self::CAYMAN_ISLANDS, self::CUBA, self::CURACAO, self::DOMINICA,
            self::DOMINICAN_REPUBLIC, self::GRENADA, self::GUADELOUPE, self::HAITI, self::JAMAICA, self::MARTINIQUE,
            self::MONTSERRAT, self::PUERTO_RICO, self::SAINT_BARTHELEMY, self::SAINT_KITTS_AND_NEVIS, self::SAINT_LUCIA,
            self::SAINT_MARTIN_FRENCH_PART, self::SAINT_VINCENT_AND_THE_GRENADINES, self::SINT_MAARTEN_DUTCH_PART,
            self::TRINIDAD_AND_TOBAGO, self::TURKS_AND_CAICOS_ISLANDS, self::VIRGIN_ISLANDS_BRITISH,
            self::VIRGIN_ISLANDS_US => IntermediateRegion::CARIBBEAN,
            self::ANTARCTICA => Region::ANTARCTICA,
            self::ARGENTINA, self::BOLIVIA_PLURINATIONAL_STATE_OF, self::BOUVET_ISLAND, self::BRAZIL, self::CHILE,
            self::COLOMBIA, self::ECUADOR, self::FALKLAND_ISLANDS_MALVINAS, self::FRENCH_GUIANA, self::GUYANA,
            self::PARAGUAY, self::PERU, self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS, self::SURINAME,
            self::URUGUAY, self::VENEZUELA_BOLIVARIAN_REPUBLIC_OF => IntermediateRegion::SOUTH_AMERICA,
            self::ARMENIA, self::AZERBAIJAN, self::BAHRAIN, self::CYPRUS, self::GEORGIA, self::IRAQ, self::ISRAEL,
            self::JORDAN, self::KUWAIT, self::LEBANON, self::OMAN, self::PALESTINE_STATE_OF, self::QATAR,
            self::SAUDI_ARABIA, self::SYRIAN_ARAB_REPUBLIC, self::TURKIYE, self::UNITED_ARAB_EMIRATES,
            self::YEMEN => SubRegion::WESTERN_ASIA,
            self::AUSTRALIA, self::CHRISTMAS_ISLAND, self::COCOS_KEELING_ISLANDS,
            self::HEARD_ISLAND_AND_MCDONALD_ISLANDS, self::NEW_ZEALAND,
            self::NORFOLK_ISLAND => SubRegion::AUSTRALIA_AND_NEW_ZEALAND,
            self::AUSTRIA, self::BELGIUM, self::FRANCE, self::GERMANY, self::LIECHTENSTEIN, self::LUXEMBOURG,
            self::MONACO, self::NETHERLANDS_KINGDOM_OF_THE, self::SWITZERLAND => SubRegion::WESTERN_EUROPE,
            self::BELARUS, self::BULGARIA, self::CZECHIA, self::HUNGARY, self::MOLDOVA_REPUBLIC_OF, self::POLAND,
            self::ROMANIA, self::RUSSIAN_FEDERATION, self::SLOVAKIA, self::UKRAINE => SubRegion::EASTERN_EUROPE,
            self::BELIZE, self::COSTA_RICA, self::EL_SALVADOR, self::GUATEMALA, self::HONDURAS, self::MEXICO,
            self::NICARAGUA, self::PANAMA => IntermediateRegion::CENTRAL_AMERICA,
            self::BENIN, self::BURKINA_FASO, self::CABO_VERDE, self::COTE_D_IVOIRE, self::GAMBIA, self::GHANA,
            self::GUINEA, self::GUINEA_BISSAU, self::LIBERIA, self::MALI, self::MAURITANIA, self::NIGER, self::NIGERIA,
            self::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA, self::SENEGAL, self::SIERRA_LEONE,
            self::TOGO => IntermediateRegion::WESTERN_AFRICA,
            self::BERMUDA, self::CANADA, self::GREENLAND, self::SAINT_PIERRE_AND_MIQUELON,
            self::UNITED_STATES_OF_AMERICA => SubRegion::NORTHERN_AMERICA,
            self::BOTSWANA, self::ESWATINI, self::LESOTHO, self::NAMIBIA,
            self::SOUTH_AFRICA => IntermediateRegion::SOUTHERN_AFRICA,
            self::BRITISH_INDIAN_OCEAN_TERRITORY, self::BURUNDI, self::COMOROS, self::DJIBOUTI, self::ERITREA,
            self::ETHIOPIA, self::FRENCH_SOUTHERN_TERRITORIES, self::KENYA, self::MADAGASCAR, self::MALAWI,
            self::MAURITIUS, self::MAYOTTE, self::MOZAMBIQUE, self::REUNION, self::RWANDA, self::SEYCHELLES,
            self::SOMALIA, self::SOUTH_SUDAN, self::TANZANIA_UNITED_REPUBLIC_OF, self::UGANDA, self::ZAMBIA,
            self::ZIMBABWE => IntermediateRegion::EASTERN_AFRICA,
            self::BRUNEI_DARUSSALAM, self::CAMBODIA, self::INDONESIA, self::LAO_PEOPLES_DEMOCRATIC_REPUBLIC,
            self::MALAYSIA, self::MYANMAR, self::PHILIPPINES, self::SINGAPORE, self::THAILAND, self::TIMOR_LESTE,
            self::VIET_NAM => SubRegion::SOUTH_EASTERN_ASIA,
            self::CHINA, self::HONG_KONG, self::JAPAN, self::KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF,
            self::KOREA_REPUBLIC_OF, self::MACAO, self::MONGOLIA,
            self::TAIWAN_PROVINCE_OF_CHINA => SubRegion::EASTERN_ASIA,
            self::FIJI, self::NEW_CALEDONIA, self::PAPUA_NEW_GUINEA, self::SOLOMON_ISLANDS,
            self::VANUATU => SubRegion::MELANESIA,
            self::GUAM, self::KIRIBATI, self::MARSHALL_ISLANDS, self::MICRONESIA_FEDERATED_STATES_OF, self::NAURU,
            self::NORTHERN_MARIANA_ISLANDS, self::PALAU,
            self::UNITED_STATES_MINOR_OUTLYING_ISLANDS => SubRegion::MICRONESIA,
            self::KAZAKHSTAN, self::KYRGYZSTAN, self::TAJIKISTAN, self::TURKMENISTAN,
            self::UZBEKISTAN => SubRegion::CENTRAL_ASIA
        };

    }

    /**
     * ### Country's continent or ocean
     * @since 1.0.0
     *
     * @return \FireHub\Core\Support\Enums\Geo\Continent|\FireHub\Core\Support\Enums\Geo\Ocean Country's continent or ocean.
     */
    public function continent ():Continent|Ocean {

        return match ($this) {
            self::AFGHANISTAN, self::BANGLADESH, self::BHUTAN, self::INDIA, self::IRAN_ISLAMIC_REPUBLIC_OF,
            self::MALDIVES, self::NEPAL, self::PAKISTAN, self::SRI_LANKA, self::ARMENIA, self::AZERBAIJAN, self::BAHRAIN, self::CYPRUS, self::GEORGIA, self::IRAQ, self::ISRAEL, self::JORDAN, self::KUWAIT, self::LEBANON, self::OMAN, self::PALESTINE_STATE_OF, self::QATAR, self::SAUDI_ARABIA, self::SYRIAN_ARAB_REPUBLIC, self::TURKIYE, self::UNITED_ARAB_EMIRATES, self::YEMEN, self::BRUNEI_DARUSSALAM, self::CAMBODIA, self::INDONESIA, self::LAO_PEOPLES_DEMOCRATIC_REPUBLIC, self::MALAYSIA, self::MYANMAR, self::PHILIPPINES, self::SINGAPORE, self::THAILAND, self::TIMOR_LESTE, self::VIET_NAM, self::CHINA, self::HONG_KONG, self::JAPAN, self::KOREA_DEMOCRATIC_PEOPLES_REPUBLIC_OF, self::KOREA_REPUBLIC_OF, self::MACAO, self::MONGOLIA, self::TAIWAN_PROVINCE_OF_CHINA, self::KAZAKHSTAN, self::KYRGYZSTAN, self::TAJIKISTAN, self::TURKMENISTAN, self::UZBEKISTAN => Continent::ASIA,
            self::ALAND_ISLANDS, self::DENMARK, self::ESTONIA, self::FAROE_ISLANDS, self::FINLAND, self::GUERNSEY,
            self::ICELAND, self::IRELAND, self::ISLE_OF_MAN, self::JERSEY, self::LATVIA, self::LITHUANIA, self::NORWAY,
            self::SVALBARD_AND_JAN_MAYEN, self::SWEDEN,
            self::UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND, self::ALBANIA, self::ANDORRA, self::BOSNIA_AND_HERZEGOVINA, self::CROATIA, self::GIBRALTAR, self::GREECE, self::HOLY_SEE, self::ITALY, self::KOSOVO, self::MALTA, self::MONTENEGRO, self::NORTH_MACEDONIA, self::PORTUGAL, self::SAN_MARINO, self::SERBIA, self::SLOVENIA, self::SPAIN, self::AUSTRIA, self::BELGIUM, self::FRANCE, self::GERMANY, self::LIECHTENSTEIN, self::LUXEMBOURG, self::MONACO, self::NETHERLANDS_KINGDOM_OF_THE, self::SWITZERLAND, self::BELARUS, self::BULGARIA, self::CZECHIA, self::HUNGARY, self::MOLDOVA_REPUBLIC_OF, self::POLAND, self::ROMANIA, self::RUSSIAN_FEDERATION, self::SLOVAKIA, self::UKRAINE => Continent::EUROPE,
            self::ALGERIA, self::EGYPT, self::LIBYA, self::MOROCCO, self::SUDAN, self::TUNISIA,
            self::WESTERN_SAHARA, self::ANGOLA, self::CAMEROON, self::CENTRAL_AFRICAN_REPUBLIC, self::CHAD, self::CONGO, self::CONGO_DEMOCRATIC_REPUBLIC_OF_THE, self::EQUATORIAL_GUINEA, self::GABON, self::SAO_TOME_AND_PRINCIPE, self::BOTSWANA, self::ESWATINI, self::LESOTHO, self::NAMIBIA, self::SOUTH_AFRICA, self::BRITISH_INDIAN_OCEAN_TERRITORY, self::BURUNDI, self::COMOROS, self::DJIBOUTI, self::ERITREA, self::ETHIOPIA, self::FRENCH_SOUTHERN_TERRITORIES, self::KENYA, self::MADAGASCAR, self::MALAWI, self::MAURITIUS, self::MAYOTTE, self::MOZAMBIQUE, self::REUNION, self::RWANDA, self::SEYCHELLES, self::SOMALIA, self::SOUTH_SUDAN, self::TANZANIA_UNITED_REPUBLIC_OF, self::UGANDA, self::ZAMBIA, self::ZIMBABWE, self::BENIN, self::BURKINA_FASO, self::CABO_VERDE, self::COTE_D_IVOIRE, self::GAMBIA, self::GHANA, self::GUINEA, self::GUINEA_BISSAU, self::LIBERIA, self::MALI, self::MAURITANIA, self::NIGER, self::NIGERIA, self::SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA, self::SENEGAL, self::SIERRA_LEONE, self::TOGO => Continent::AFRICA,
            self::AMERICAN_SAMOA, self::COOK_ISLANDS, self::FRENCH_POLYNESIA, self::NIUE, self::PITCAIRN, self::SAMOA,
            self::TOKELAU, self::TONGA, self::TUVALU, self::WALLIS_AND_FUTUNA, self::FIJI, self::NEW_CALEDONIA,
            self::PAPUA_NEW_GUINEA, self::SOLOMON_ISLANDS, self::VANUATU, self::GUAM, self::KIRIBATI,
            self::MARSHALL_ISLANDS, self::MICRONESIA_FEDERATED_STATES_OF, self::NAURU,
            self::NORTHERN_MARIANA_ISLANDS, self::PALAU, self::UNITED_STATES_MINOR_OUTLYING_ISLANDS, self::CHRISTMAS_ISLAND, self::COCOS_KEELING_ISLANDS,
            self::HEARD_ISLAND_AND_MCDONALD_ISLANDS, self::NEW_ZEALAND,
            self::NORFOLK_ISLAND => Ocean::PACIFIC,
            self::ANGUILLA, self::ANTIGUA_AND_BARBUDA, self::ARUBA, self::BAHAMAS, self::BARBADOS,
            self::BONAIRE_SINT_EUSTATIUS_AND_SABA, self::CAYMAN_ISLANDS, self::CUBA, self::CURACAO, self::DOMINICA,
            self::DOMINICAN_REPUBLIC, self::GRENADA, self::GUADELOUPE, self::HAITI, self::JAMAICA, self::MARTINIQUE,
            self::MONTSERRAT, self::PUERTO_RICO, self::SAINT_BARTHELEMY, self::SAINT_KITTS_AND_NEVIS, self::SAINT_LUCIA,
            self::SAINT_MARTIN_FRENCH_PART, self::SAINT_VINCENT_AND_THE_GRENADINES, self::SINT_MAARTEN_DUTCH_PART,
            self::TRINIDAD_AND_TOBAGO, self::TURKS_AND_CAICOS_ISLANDS, self::VIRGIN_ISLANDS_BRITISH,
            self::VIRGIN_ISLANDS_US, self::BERMUDA, self::CANADA, self::GREENLAND, self::SAINT_PIERRE_AND_MIQUELON, self::UNITED_STATES_OF_AMERICA, self::BELIZE, self::COSTA_RICA, self::EL_SALVADOR, self::GUATEMALA, self::HONDURAS, self::MEXICO, self::NICARAGUA, self::PANAMA => Continent::NORTH_AMERICA,
            self::ANTARCTICA => Continent::ANTARCTICA,
            self::ARGENTINA, self::BOLIVIA_PLURINATIONAL_STATE_OF, self::BOUVET_ISLAND, self::BRAZIL, self::CHILE,
            self::COLOMBIA, self::ECUADOR, self::FALKLAND_ISLANDS_MALVINAS, self::FRENCH_GUIANA, self::GUYANA,
            self::PARAGUAY, self::PERU, self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS, self::SURINAME,
            self::URUGUAY, self::VENEZUELA_BOLIVARIAN_REPUBLIC_OF => Continent::SOUTH_AMERICA,
            self::AUSTRALIA => Continent::AUSTRALIA
        };

    }

    /**
     * ### Check country's region
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Support\Enums\Geo\Contracts\UNM49::region() To get parent region.
     *
     * @param \FireHub\Core\Support\Enums\Geo\Contracts\UNM49 $region <p>
     * Region to check for.
     * </p>
     * @param null|\FireHub\Core\Support\Enums\Geo\Contracts\UNM49 $current <p>
     * Current region.
     * </p>
     *
     * @return bool True if country is a region type, false otherwise.
     */
    private function check (UNM49 $region, ?UNM49 $current):bool {

        if ($current === null) return false;

        if ($current === $region) return true;

        return $this->check($region, $current->region());

    }

}