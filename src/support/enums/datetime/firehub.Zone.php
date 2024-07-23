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

namespace FireHub\Core\Support\Enums\DateTime;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### Timezones enum
 * @since 1.0.0
 */
enum Zone:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case AFRICA_ABIDJAN = 'Africa/Abidjan';

    /**
     * @since 1.0.0
     */
    case AFRICA_ACCRA = 'Africa/Accra';

    /**
     * @since 1.0.0
     */
    case AFRICA_ADDIS_ABABA = 'Africa/Addis_Ababa';

    /**
     * @since 1.0.0
     */
    case AFRICA_ALGIERS = 'Africa/Algiers';

    /**
     * @since 1.0.0
     */
    case AFRICA_ASMARA = 'Africa/Asmara';

    /**
     * @since 1.0.0
     */
    case AFRICA_BAMAKO = 'Africa/Bamako';

    /**
     * @since 1.0.0
     */
    case AFRICA_BANGUI = 'Africa/Bangui';

    /**
     * @since 1.0.0
     */
    case AFRICA_BANJUL = 'Africa/Banjul';

    /**
     * @since 1.0.0
     */
    case AFRICA_BISSAU = 'Africa/Bissau';

    /**
     * @since 1.0.0
     */
    case AFRICA_BLANTYRE = 'Africa/Blantyre';

    /**
     * @since 1.0.0
     */
    case AFRICA_BRAZZAVILLE = 'Africa/Brazzaville';

    /**
     * @since 1.0.0
     */
    case AFRICA_BUJUMBURA = 'Africa/Bujumbura';

    /**
     * @since 1.0.0
     */
    case AFRICA_CAIRO = 'Africa/Cairo';

    /**
     * @since 1.0.0
     */
    case AFRICA_CASABLANCA = 'Africa/Casablanca';

    /**
     * @since 1.0.0
     */
    case AFRICA_CEUTA = 'Africa/Ceuta';

    /**
     * @since 1.0.0
     */
    case AFRICA_CONAKRY = 'Africa/Conakry';

    /**
     * @since 1.0.0
     */
    case AFRICA_DAKAR = 'Africa/Dakar';

    /**
     * @since 1.0.0
     */
    case AFRICA_DAR_ES_SALAAM = 'Africa/Dar_es_Salaam';

    /**
     * @since 1.0.0
     */
    case AFRICA_DJIBOUTI = 'Africa/Djibouti';

    /**
     * @since 1.0.0
     */
    case AFRICA_DOUALA = 'Africa/Douala';

    /**
     * @since 1.0.0
     */
    case AFRICA_EL_AAIUN = 'Africa/El_Aaiun';

    /**
     * @since 1.0.0
     */
    case AFRICA_FREETOWN = 'Africa/Freetown';

    /**
     * @since 1.0.0
     */
    case AFRICA_GABORONE = 'Africa/Gaborone';

    /**
     * @since 1.0.0
     */
    case AFRICA_HARARE = 'Africa/Harare';

    /**
     * @since 1.0.0
     */
    case AFRICA_JOHANNESBURG = 'Africa/Johannesburg';

    /**
     * @since 1.0.0
     */
    case AFRICA_JUBA = 'Africa/Juba';

    /**
     * @since 1.0.0
     */
    case AFRICA_KAMPALA = 'Africa/Kampala';

    /**
     * @since 1.0.0
     */
    case AFRICA_KHARTOUM = 'Africa/Khartoum';

    /**
     * @since 1.0.0
     */
    case AFRICA_KIGALI = 'Africa/Kigali';

    /**
     * @since 1.0.0
     */
    case AFRICA_KINSHASA = 'Africa/Kinshasa';

    /**
     * @since 1.0.0
     */
    case AFRICA_LAGOS = 'Africa/Lagos';

    /**
     * @since 1.0.0
     */
    case AFRICA_LIBREVILLE = 'Africa/Libreville';

    /**
     * @since 1.0.0
     */
    case AFRICA_LOME = 'Africa/Lome';

    /**
     * @since 1.0.0
     */
    case AFRICA_LUANDA = 'Africa/Luanda';

    /**
     * @since 1.0.0
     */
    case AFRICA_LUBUMBASHI = 'Africa/Lubumbashi';

    /**
     * @since 1.0.0
     */
    case AFRICA_LUSAKA = 'Africa/Lusaka';

    /**
     * @since 1.0.0
     */
    case AFRICA_MALABO = 'Africa/Malabo';

    /**
     * @since 1.0.0
     */
    case AFRICA_MAPUTO = 'Africa/Maputo';

    /**
     * @since 1.0.0
     */
    case AFRICA_MASERU = 'Africa/Maseru';

    /**
     * @since 1.0.0
     */
    case AFRICA_MBABANE = 'Africa/Mbabane';

    /**
     * @since 1.0.0
     */
    case AFRICA_MOGADISHU = 'Africa/Mogadishu';

    /**
     * @since 1.0.0
     */
    case AFRICA_MONROVIA = 'Africa/Monrovia';

    /**
     * @since 1.0.0
     */
    case AFRICA_NAIROBI = 'Africa/Nairobi';

    /**
     * @since 1.0.0
     */
    case AFRICA_NDJAMENA = 'Africa/Ndjamena';

    /**
     * @since 1.0.0
     */
    case AFRICA_NIAMEY = 'Africa/Niamey';

    /**
     * @since 1.0.0
     */
    case AFRICA_NOUAKCHOTT = 'Africa/Nouakchott';

    /**
     * @since 1.0.0
     */
    case AFRICA_OUAGADOUGOU = 'Africa/Ouagadougou';

    /**
     * @since 1.0.0
     */
    case AFRICA_PORTO_NOVO = 'Africa/Porto-Novo';

    /**
     * @since 1.0.0
     */
    case AFRICA_SAO_TOME = 'Africa/Sao_Tome';

    /**
     * @since 1.0.0
     */
    case AFRICA_TRIPOLI = 'Africa/Tripoli';

    /**
     * @since 1.0.0
     */
    case AFRICA_TUNIS = 'Africa/Tunis';

    /**
     * @since 1.0.0
     */
    case AFRICA_WINDHOEK = 'Africa/Windhoek';

    /**
     * @since 1.0.0
     */
    case AMERICA_ADAK = 'America/Adak';

    /**
     * @since 1.0.0
     */
    case AMERICA_ANCHORAGE = 'America/Anchorage';

    /**
     * @since 1.0.0
     */
    case AMERICA_ANGUILLA = 'America/Anguilla';

    /**
     * @since 1.0.0
     */
    case AMERICA_ANTIGUA = 'America/Antigua';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARAGUAINA = 'America/Araguaina';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_BUENOS_AIRES = 'America/Argentina/Buenos_Aires';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_CATAMARCA = 'America/Argentina/Catamarca';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_CORDOBA = 'America/Argentina/Cordoba';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_JUJUY = 'America/Argentina/Jujuy';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_LA_RIOJA = 'America/Argentina/La_Rioja';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_MENDOZA = 'America/Argentina/Mendoza';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_RIO_GALLEGOS = 'America/Argentina/Rio_Gallegos';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_SALTA = 'America/Argentina/Salta';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_SAN_JUAN = 'America/Argentina/San_Juan';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_SAN_LUIS = 'America/Argentina/San_Luis';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_TUCUMAN = 'America/Argentina/Tucuman';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_USHUAIA = 'America/Argentina/Ushuaia';

    /**
     * @since 1.0.0
     */
    case AMERICA_ARUBA = 'America/Aruba';

    /**
     * @since 1.0.0
     */
    case AMERICA_ASUNCION = 'America/Asuncion';

    /**
     * @since 1.0.0
     */
    case AMERICA_ATIKOKAN = 'America/Atikokan';

    /**
     * @since 1.0.0
     */
    case AMERICA_BAHIA = 'America/Bahia';

    /**
     * @since 1.0.0
     */
    case AMERICA_BAHIA_BANDERAS = 'America/Bahia_Banderas';

    /**
     * @since 1.0.0
     */
    case AMERICA_BARBADOS = 'America/Barbados';

    /**
     * @since 1.0.0
     */
    case AMERICA_BELEM = 'America/Belem';

    /**
     * @since 1.0.0
     */
    case AMERICA_BELIZE = 'America/Belize';

    /**
     * @since 1.0.0
     */
    case AMERICA_BLANC_SABLON = 'America/Blanc-Sablon';

    /**
     * @since 1.0.0
     */
    case AMERICA_BOA_VISTA = 'America/Boa_Vista';

    /**
     * @since 1.0.0
     */
    case AMERICA_BOGOTA = 'America/Bogota';

    /**
     * @since 1.0.0
     */
    case AMERICA_BOISE = 'America/Boise';

    /**
     * @since 1.0.0
     */
    case AMERICA_CAMBRIDGE_BAY = 'America/Cambridge_Bay';

    /**
     * @since 1.0.0
     */
    case AMERICA_CAMPO_GRANDE = 'America/Campo_Grande';

    /**
     * @since 1.0.0
     */
    case AMERICA_CANCUN = 'America/Cancun';

    /**
     * @since 1.0.0
     */
    case AMERICA_CARACAS = 'America/Caracas';

    /**
     * @since 1.0.0
     */
    case AMERICA_CAYENNE = 'America/Cayenne';

    /**
     * @since 1.0.0
     */
    case AMERICA_CAYMAN = 'America/Cayman';

    /**
     * @since 1.0.0
     */
    case AMERICA_CHICAGO = 'America/Chicago';

    /**
     * @since 1.0.0
     */
    case AMERICA_CHIHUAHUA = 'America/Chihuahua';

    /**
     * @since 1.0.0
     */
    case AMERICA_COSTA_RICA = 'America/Costa_Rica';

    /**
     * @since 1.0.0
     */
    case AMERICA_CRESTON = 'America/Creston';

    /**
     * @since 1.0.0
     */
    case AMERICA_CUIABA = 'America/Cuiaba';

    /**
     * @since 1.0.0
     */
    case AMERICA_CURACAO = 'America/Curacao';

    /**
     * @since 1.0.0
     */
    case AMERICA_DANMARKSHAVN = 'America/Danmarkshavn';

    /**
     * @since 1.0.0
     */
    case AMERICA_DAWSON = 'America/Dawson';

    /**
     * @since 1.0.0
     */
    case AMERICA_DAWSON_CREEK = 'America/Dawson_Creek';

    /**
     * @since 1.0.0
     */
    case AMERICA_DENVER = 'America/Denver';

    /**
     * @since 1.0.0
     */
    case AMERICA_DETROIT = 'America/Detroit';

    /**
     * @since 1.0.0
     */
    case AMERICA_DOMINICA = 'America/Dominica';

    /**
     * @since 1.0.0
     */
    case AMERICA_EDMONTON = 'America/Edmonton';

    /**
     * @since 1.0.0
     */
    case AMERICA_EIRUNEPE = 'America/Eirunepe';

    /**
     * @since 1.0.0
     */
    case AMERICA_EL_SALVADOR = 'America/El_Salvador';

    /**
     * @since 1.0.0
     */
    case AMERICA_FORT_NELSON = 'America/Fort_Nelson';

    /**
     * @since 1.0.0
     */
    case AMERICA_FORTALEZA = 'America/Fortaleza';

    /**
     * @since 1.0.0
     */
    case AMERICA_GLACE_BAY = 'America/Glace_Bay';

    /**
     * @since 1.0.0
     */
    case AMERICA_GOOSE_BAY = 'America/Goose_Bay';

    /**
     * @since 1.0.0
     */
    case AMERICA_GRAND_TURK = 'America/Grand_Turk';

    /**
     * @since 1.0.0
     */
    case AMERICA_GRENADA = 'America/Grenada';

    /**
     * @since 1.0.0
     */
    case AMERICA_GUADELOUPE = 'America/Guadeloupe';

    /**
     * @since 1.0.0
     */
    case AMERICA_GUATEMALA = 'America/Guatemala';

    /**
     * @since 1.0.0
     */
    case AMERICA_GUAYAQUIL = 'America/Guayaquil';

    /**
     * @since 1.0.0
     */
    case AMERICA_GUYANA = 'America/Guyana';

    /**
     * @since 1.0.0
     */
    case AMERICA_HALIFAX = 'America/Halifax';

    /**
     * @since 1.0.0
     */
    case AMERICA_HAVANA = 'America/Havana';

    /**
     * @since 1.0.0
     */
    case AMERICA_HERMOSILLO = 'America/Hermosillo';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_INDIANAPOLIS = 'America/Indiana/Indianapolis';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_KNOX = 'America/Indiana/Knox';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_MARENGO = 'America/Indiana/Marengo';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_PETERSBURG = 'America/Indiana/Petersburg';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_TELL_CITY = 'America/Indiana/Tell_City';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_VEVAY = 'America/Indiana/Vevay';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_VINCENNES = 'America/Indiana/Vincennes';

    /**
     * @since 1.0.0
     */
    case AMERICA_INDIANA_WINAMAC = 'America/Indiana/Winamac';

    /**
     * @since 1.0.0
     */
    case AMERICA_INUVIK = 'America/Inuvik';

    /**
     * @since 1.0.0
     */
    case AMERICA_IQALUIT = 'America/Iqaluit';

    /**
     * @since 1.0.0
     */
    case AMERICA_JAMAICA = 'America/Jamaica';

    /**
     * @since 1.0.0
     */
    case AMERICA_JUNEAU = 'America/Juneau';

    /**
     * @since 1.0.0
     */
    case AMERICA_KENTUCKY_LOUISVILLE = 'America/Kentucky/Louisville';

    /**
     * @since 1.0.0
     */
    case AMERICA_KENTUCKY_MONTICELLO = 'America/Kentucky/Monticello';

    /**
     * @since 1.0.0
     */
    case AMERICA_KRALENDIJK = 'America/Kralendijk';

    /**
     * @since 1.0.0
     */
    case AMERICA_LA_PAZ = 'America/La_Paz';

    /**
     * @since 1.0.0
     */
    case AMERICA_LIMA = 'America/Lima';

    /**
     * @since 1.0.0
     */
    case AMERICA_LOS_ANGELES = 'America/Los_Angeles';

    /**
     * @since 1.0.0
     */
    case AMERICA_LOWER_PRINCES = 'America/Lower_Princes';

    /**
     * @since 1.0.0
     */
    case AMERICA_MACEIO = 'America/Maceio';

    /**
     * @since 1.0.0
     */
    case AMERICA_MANAGUA = 'America/Managua';

    /**
     * @since 1.0.0
     */
    case AMERICA_MANAUS = 'America/Manaus';

    /**
     * @since 1.0.0
     */
    case AMERICA_MARIGOT = 'America/Marigot';

    /**
     * @since 1.0.0
     */
    case AMERICA_MARTINIQUE = 'America/Martinique';

    /**
     * @since 1.0.0
     */
    case AMERICA_MATAMOROS = 'America/Matamoros';

    /**
     * @since 1.0.0
     */
    case AMERICA_MAZATLAN = 'America/Mazatlan';

    /**
     * @since 1.0.0
     */
    case AMERICA_MENOMINEE = 'America/Menominee';

    /**
     * @since 1.0.0
     */
    case AMERICA_MERIDA = 'America/Merida';

    /**
     * @since 1.0.0
     */
    case AMERICA_METLAKATLA = 'America/Metlakatla';

    /**
     * @since 1.0.0
     */
    case AMERICA_MEXICO_CITY = 'America/Mexico_City';

    /**
     * @since 1.0.0
     */
    case AMERICA_MIQUELON = 'America/Miquelon';

    /**
     * @since 1.0.0
     */
    case AMERICA_MONCTON = 'America/Moncton';

    /**
     * @since 1.0.0
     */
    case AMERICA_MONTERREY = 'America/Monterrey';

    /**
     * @since 1.0.0
     */
    case AMERICA_MONTEVIDEO = 'America/Montevideo';

    /**
     * @since 1.0.0
     */
    case AMERICA_MONTSERRAT = 'America/Montserrat';

    /**
     * @since 1.0.0
     */
    case AMERICA_NASSAU = 'America/Nassau';

    /**
     * @since 1.0.0
     */
    case AMERICA_NEW_YORK = 'America/New_York';

    /**
     * @since 1.0.0
     */
    case AMERICA_NIPIGON = 'America/Nipigon';

    /**
     * @since 1.0.0
     */
    case AMERICA_NOME = 'America/Nome';

    /**
     * @since 1.0.0
     */
    case AMERICA_NORONHA = 'America/Noronha';

    /**
     * @since 1.0.0
     */
    case AMERICA_NORTH_DAKOTA_BEULAH = 'America/North_Dakota/Beulah';

    /**
     * @since 1.0.0
     */
    case AMERICA_NORTH_DAKOTA_CENTER = 'America/North_Dakota/Center';

    /**
     * @since 1.0.0
     */
    case AMERICA_NORTH_DAKOTA_NEW_SALEM = 'America/North_Dakota/New_Salem';

    /**
     * @since 1.0.0
     */
    case AMERICA_NUUK = 'America/Nuuk';

    /**
     * @since 1.0.0
     */
    case AMERICA_OJINAGA = 'America/Ojinaga';

    /**
     * @since 1.0.0
     */
    case AMERICA_PANAMA = 'America/Panama';

    /**
     * @since 1.0.0
     */
    case AMERICA_PANGNIRTUNG = 'America/Pangnirtung';

    /**
     * @since 1.0.0
     */
    case AMERICA_PARAMARIBO = 'America/Paramaribo';

    /**
     * @since 1.0.0
     */
    case AMERICA_PHOENIX = 'America/Phoenix';

    /**
     * @since 1.0.0
     */
    case AMERICA_PORT_AU_PRINCE = 'America/Port-au-Prince';

    /**
     * @since 1.0.0
     */
    case AMERICA_PORT_OF_SPAIN = 'America/Port_of_Spain';

    /**
     * @since 1.0.0
     */
    case AMERICA_PORTO_VELHO = 'America/Porto_Velho';

    /**
     * @since 1.0.0
     */
    case AMERICA_PUERTO_RICO = 'America/Puerto_Rico';

    /**
     * @since 1.0.0
     */
    case AMERICA_PUNTA_ARENAS = 'America/Punta_Arenas';

    /**
     * @since 1.0.0
     */
    case AMERICA_RAINY_RIVER = 'America/Rainy_River';

    /**
     * @since 1.0.0
     */
    case AMERICA_RANKIN_INLET = 'America/Rankin_Inlet';

    /**
     * @since 1.0.0
     */
    case AMERICA_RECIFE = 'America/Recife';

    /**
     * @since 1.0.0
     */
    case AMERICA_REGINA = 'America/Regina';

    /**
     * @since 1.0.0
     */
    case AMERICA_RESOLUTE = 'America/Resolute';

    /**
     * @since 1.0.0
     */
    case AMERICA_RIO_BRANCO = 'America/Rio_Branco';

    /**
     * @since 1.0.0
     */
    case AMERICA_SANTAREM = 'America/Santarem';

    /**
     * @since 1.0.0
     */
    case AMERICA_SANTIAGO = 'America/Santiago';

    /**
     * @since 1.0.0
     */
    case AMERICA_SANTO_DOMINGO = 'America/Santo_Domingo';

    /**
     * @since 1.0.0
     */
    case AMERICA_SAO_PAULO = 'America/Sao_Paulo';

    /**
     * @since 1.0.0
     */
    case AMERICA_SCORESBYSUND = 'America/Scoresbysund';

    /**
     * @since 1.0.0
     */
    case AMERICA_SITKA = 'America/Sitka';

    /**
     * @since 1.0.0
     */
    case AMERICA_ST_BARTHELEMY = 'America/St_Barthelemy';

    /**
     * @since 1.0.0
     */
    case AMERICA_ST_JOHNS = 'America/St_Johns';

    /**
     * @since 1.0.0
     */
    case AMERICA_ST_KITTS = 'America/St_Kitts';

    /**
     * @since 1.0.0
     */
    case AMERICA_ST_LUCIA = 'America/St_Lucia';

    /**
     * @since 1.0.0
     */
    case AMERICA_ST_THOMAS = 'America/St_Thomas';

    /**
     * @since 1.0.0
     */
    case AMERICA_ST_VINCENT = 'America/St_Vincent';

    /**
     * @since 1.0.0
     */
    case AMERICA_SWIFT_CURRENT = 'America/Swift_Current';

    /**
     * @since 1.0.0
     */
    case AMERICA_TEGUCIGALPA = 'America/Tegucigalpa';

    /**
     * @since 1.0.0
     */
    case AMERICA_THULE = 'America/Thule';

    /**
     * @since 1.0.0
     */
    case AMERICA_THUNDER_BAY = 'America/Thunder_Bay';

    /**
     * @since 1.0.0
     */
    case AMERICA_TIJUANA = 'America/Tijuana';

    /**
     * @since 1.0.0
     */
    case AMERICA_TORONTO = 'America/Toronto';

    /**
     * @since 1.0.0
     */
    case AMERICA_TORTOLA = 'America/Tortola';

    /**
     * @since 1.0.0
     */
    case AMERICA_VANCOUVER = 'America/Vancouver';

    /**
     * @since 1.0.0
     */
    case AMERICA_WHITEHORSE = 'America/Whitehorse';

    /**
     * @since 1.0.0
     */
    case AMERICA_WINNIPEG = 'America/Winnipeg';

    /**
     * @since 1.0.0
     */
    case AMERICA_YAKUTAT = 'America/Yakutat';

    /**
     * @since 1.0.0
     */
    case AMERICA_YELLOWKNIFE = 'America/Yellowknife';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_CASEY = 'Antarctica/Casey';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_DAVIS = 'Antarctica/Davis';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_DUMONTDURVILLE = 'Antarctica/DumontDUrville';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_MACQUARIE = 'Antarctica/Macquarie';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_MAWSON = 'Antarctica/Mawson';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_MCMURDO = 'Antarctica/McMurdo';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_PALMER = 'Antarctica/Palmer';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_ROTHERA = 'Antarctica/Rothera';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_SYOWA = 'Antarctica/Syowa';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_TROLL = 'Antarctica/Troll';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA_VOSTOK = 'Antarctica/Vostok';

    /**
     * @since 1.0.0
     */
    case ARCTIC_LONGYEARBYEN = 'Arctic/Longyearbyen';

    /**
     * @since 1.0.0
     */
    case ASIA_ADEN = 'Asia/Aden';

    /**
     * @since 1.0.0
     */
    case ASIA_ALMATY = 'Asia/Almaty';

    /**
     * @since 1.0.0
     */
    case ASIA_AMMAN = 'Asia/Amman';

    /**
     * @since 1.0.0
     */
    case ASIA_ANADYR = 'Asia/Anadyr';

    /**
     * @since 1.0.0
     */
    case ASIA_AQTAU = 'Asia/Aqtau';

    /**
     * @since 1.0.0
     */
    case ASIA_AQTOBE = 'Asia/Aqtobe';

    /**
     * @since 1.0.0
     */
    case ASIA_ASHGABAT = 'Asia/Ashgabat';

    /**
     * @since 1.0.0
     */
    case ASIA_ATYRAU = 'Asia/Atyrau';

    /**
     * @since 1.0.0
     */
    case ASIA_BAGHDAD = 'Asia/Baghdad';

    /**
     * @since 1.0.0
     */
    case ASIA_BAHRAIN = 'Asia/Bahrain';

    /**
     * @since 1.0.0
     */
    case ASIA_BAKU = 'Asia/Baku';

    /**
     * @since 1.0.0
     */
    case ASIA_BANGKOK = 'Asia/Bangkok';

    /**
     * @since 1.0.0
     */
    case ASIA_BARNAUL = 'Asia/Barnaul';

    /**
     * @since 1.0.0
     */
    case ASIA_BEIRUT = 'Asia/Beirut';

    /**
     * @since 1.0.0
     */
    case ASIA_BISHKEK = 'Asia/Bishkek';

    /**
     * @since 1.0.0
     */
    case ASIA_BRUNEI = 'Asia/Brunei';

    /**
     * @since 1.0.0
     */
    case ASIA_CHITA = 'Asia/Chita';

    /**
     * @since 1.0.0
     */
    case ASIA_CHOIBALSAN = 'Asia/Choibalsan';

    /**
     * @since 1.0.0
     */
    case ASIA_COLOMBO = 'Asia/Colombo';

    /**
     * @since 1.0.0
     */
    case ASIA_DAMASCUS = 'Asia/Damascus';

    /**
     * @since 1.0.0
     */
    case ASIA_DHAKA = 'Asia/Dhaka';

    /**
     * @since 1.0.0
     */
    case ASIA_DILI = 'Asia/Dili';

    /**
     * @since 1.0.0
     */
    case ASIA_DUBAI = 'Asia/Dubai';

    /**
     * @since 1.0.0
     */
    case ASIA_DUSHANBE = 'Asia/Dushanbe';

    /**
     * @since 1.0.0
     */
    case ASIA_FAMAGUSTA = 'Asia/Famagusta';

    /**
     * @since 1.0.0
     */
    case ASIA_GAZA = 'Asia/Gaza';

    /**
     * @since 1.0.0
     */
    case ASIA_HEBRON = 'Asia/Hebron';

    /**
     * @since 1.0.0
     */
    case ASIA_HO_CHI_MINH = 'Asia/Ho_Chi_Minh';

    /**
     * @since 1.0.0
     */
    case ASIA_HONG_KONG = 'Asia/Hong_Kong';

    /**
     * @since 1.0.0
     */
    case ASIA_HOVD = 'Asia/Hovd';

    /**
     * @since 1.0.0
     */
    case ASIA_IRKUTSK = 'Asia/Irkutsk';

    /**
     * @since 1.0.0
     */
    case ASIA_JAKARTA = 'Asia/Jakarta';

    /**
     * @since 1.0.0
     */
    case ASIA_JAYAPURA = 'Asia/Jayapura';

    /**
     * @since 1.0.0
     */
    case ASIA_JERUSALEM = 'Asia/Jerusalem';

    /**
     * @since 1.0.0
     */
    case ASIA_KABUL = 'Asia/Kabul';

    /**
     * @since 1.0.0
     */
    case ASIA_KAMCHATKA = 'Asia/Kamchatka';

    /**
     * @since 1.0.0
     */
    case ASIA_KARACHI = 'Asia/Karachi';

    /**
     * @since 1.0.0
     */
    case ASIA_KATHMANDU = 'Asia/Kathmandu';

    /**
     * @since 1.0.0
     */
    case ASIA_KHANDYGA = 'Asia/Khandyga';

    /**
     * @since 1.0.0
     */
    case ASIA_KOLKATA = 'Asia/Kolkata';

    /**
     * @since 1.0.0
     */
    case ASIA_KRASNOYARSK = 'Asia/Krasnoyarsk';

    /**
     * @since 1.0.0
     */
    case ASIA_KUALA_LUMPUR = 'Asia/Kuala_Lumpur';

    /**
     * @since 1.0.0
     */
    case ASIA_KUCHING = 'Asia/Kuching';

    /**
     * @since 1.0.0
     */
    case ASIA_KUWAIT = 'Asia/Kuwait';

    /**
     * @since 1.0.0
     */
    case ASIA_MACAU = 'Asia/Macau';

    /**
     * @since 1.0.0
     */
    case ASIA_MAGADAN = 'Asia/Magadan';

    /**
     * @since 1.0.0
     */
    case ASIA_MAKASSAR = 'Asia/Makassar';

    /**
     * @since 1.0.0
     */
    case ASIA_MANILA = 'Asia/Manila';

    /**
     * @since 1.0.0
     */
    case ASIA_MUSCAT = 'Asia/Muscat';

    /**
     * @since 1.0.0
     */
    case ASIA_NICOSIA = 'Asia/Nicosia';

    /**
     * @since 1.0.0
     */
    case ASIA_NOVOKUZNETSK = 'Asia/Novokuznetsk';

    /**
     * @since 1.0.0
     */
    case ASIA_NOVOSIBIRSK = 'Asia/Novosibirsk';

    /**
     * @since 1.0.0
     */
    case ASIA_OMSK = 'Asia/Omsk';

    /**
     * @since 1.0.0
     */
    case ASIA_ORAL = 'Asia/Oral';

    /**
     * @since 1.0.0
     */
    case ASIA_PHNOM_PENH = 'Asia/Phnom_Penh';

    /**
     * @since 1.0.0
     */
    case ASIA_PONTIANAK = 'Asia/Pontianak';

    /**
     * @since 1.0.0
     */
    case ASIA_PYONGYANG = 'Asia/Pyongyang';

    /**
     * @since 1.0.0
     */
    case ASIA_QATAR = 'Asia/Qatar';

    /**
     * @since 1.0.0
     */
    case ASIA_QOSTANAY = 'Asia/Qostanay';

    /**
     * @since 1.0.0
     */
    case ASIA_QYZYLORDA = 'Asia/Qyzylorda';

    /**
     * @since 1.0.0
     */
    case ASIA_RIYADH = 'Asia/Riyadh';

    /**
     * @since 1.0.0
     */
    case ASIA_SAKHALIN = 'Asia/Sakhalin';

    /**
     * @since 1.0.0
     */
    case ASIA_SAMARKAND = 'Asia/Samarkand';

    /**
     * @since 1.0.0
     */
    case ASIA_SEOUL = 'Asia/Seoul';

    /**
     * @since 1.0.0
     */
    case ASIA_SHANGHAI = 'Asia/Shanghai';

    /**
     * @since 1.0.0
     */
    case ASIA_SINGAPORE = 'Asia/Singapore';

    /**
     * @since 1.0.0
     */
    case ASIA_SREDNEKOLYMSK = 'Asia/Srednekolymsk';

    /**
     * @since 1.0.0
     */
    case ASIA_TAIPEI = 'Asia/Taipei';

    /**
     * @since 1.0.0
     */
    case ASIA_TASHKENT = 'Asia/Tashkent';

    /**
     * @since 1.0.0
     */
    case ASIA_TBILISI = 'Asia/Tbilisi';

    /**
     * @since 1.0.0
     */
    case ASIA_TEHRAN = 'Asia/Tehran';

    /**
     * @since 1.0.0
     */
    case ASIA_THIMPHU = 'Asia/Thimphu';

    /**
     * @since 1.0.0
     */
    case ASIA_TOKYO = 'Asia/Tokyo';

    /**
     * @since 1.0.0
     */
    case ASIA_TOMSK = 'Asia/Tomsk';

    /**
     * @since 1.0.0
     */
    case ASIA_ULAANBAATAR = 'Asia/Ulaanbaatar';

    /**
     * @since 1.0.0
     */
    case ASIA_URUMQI = 'Asia/Urumqi';

    /**
     * @since 1.0.0
     */
    case ASIA_UST_NERA = 'Asia/Ust-Nera';

    /**
     * @since 1.0.0
     */
    case ASIA_VIENTIANE = 'Asia/Vientiane';

    /**
     * @since 1.0.0
     */
    case ASIA_VLADIVOSTOK = 'Asia/Vladivostok';

    /**
     * @since 1.0.0
     */
    case ASIA_YAKUTSK = 'Asia/Yakutsk';

    /**
     * @since 1.0.0
     */
    case ASIA_YANGON = 'Asia/Yangon';

    /**
     * @since 1.0.0
     */
    case ASIA_YEKATERINBURG = 'Asia/Yekaterinburg';

    /**
     * @since 1.0.0
     */
    case ASIA_YEREVAN = 'Asia/Yerevan';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_AZORES = 'Atlantic/Azores';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_BERMUDA = 'Atlantic/Bermuda';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_CANARY = 'Atlantic/Canary';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_CAPE_VERDE = 'Atlantic/Cape_Verde';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_FAROE = 'Atlantic/Faroe';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_MADEIRA = 'Atlantic/Madeira';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_REYKJAVIK = 'Atlantic/Reykjavik';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_SOUTH_GEORGIA = 'Atlantic/South_Georgia';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_ST_HELENA = 'Atlantic/St_Helena';

    /**
     * @since 1.0.0
     */
    case ATLANTIC_STANLEY = 'Atlantic/Stanley';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_ADELAIDE = 'Australia/Adelaide';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_BRISBANE = 'Australia/Brisbane';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_BROKEN_HILL = 'Australia/Broken_Hill';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_DARWIN = 'Australia/Darwin';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_EUCLA = 'Australia/Eucla';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_HOBART = 'Australia/Hobart';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_LINDEMAN = 'Australia/Lindeman';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_LORD_HOWE = 'Australia/Lord_Howe';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_MELBOURNE = 'Australia/Melbourne';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_PERTH = 'Australia/Perth';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_SYDNEY = 'Australia/Sydney';

    /**
     * @since 1.0.0
     */
    case EUROPE_AMSTERDAM = 'Europe/Amsterdam';

    /**
     * @since 1.0.0
     */
    case EUROPE_ANDORRA = 'Europe/Andorra';

    /**
     * @since 1.0.0
     */
    case EUROPE_ASTRAKHAN = 'Europe/Astrakhan';

    /**
     * @since 1.0.0
     */
    case EUROPE_ATHENS = 'Europe/Athens';

    /**
     * @since 1.0.0
     */
    case EUROPE_BELGRADE = 'Europe/Belgrade';

    /**
     * @since 1.0.0
     */
    case EUROPE_BERLIN = 'Europe/Berlin';

    /**
     * @since 1.0.0
     */
    case EUROPE_BRATISLAVA = 'Europe/Bratislava';

    /**
     * @since 1.0.0
     */
    case EUROPE_BRUSSELS = 'Europe/Brussels';

    /**
     * @since 1.0.0
     */
    case EUROPE_BUCHAREST = 'Europe/Bucharest';

    /**
     * @since 1.0.0
     */
    case EUROPE_BUDAPEST = 'Europe/Budapest';

    /**
     * @since 1.0.0
     */
    case EUROPE_BUSINGEN = 'Europe/Busingen';

    /**
     * @since 1.0.0
     */
    case EUROPE_CHISINAU = 'Europe/Chisinau';

    /**
     * @since 1.0.0
     */
    case EUROPE_COPENHAGEN = 'Europe/Copenhagen';

    /**
     * @since 1.0.0
     */
    case EUROPE_DUBLIN = 'Europe/Dublin';

    /**
     * @since 1.0.0
     */
    case EUROPE_GIBRALTAR = 'Europe/Gibraltar';

    /**
     * @since 1.0.0
     */
    case EUROPE_GUERNSEY = 'Europe/Guernsey';

    /**
     * @since 1.0.0
     */
    case EUROPE_HELSINKI = 'Europe/Helsinki';

    /**
     * @since 1.0.0
     */
    case EUROPE_ISLE_OF_MAN = 'Europe/Isle_of_Man';

    /**
     * @since 1.0.0
     */
    case EUROPE_ISTANBUL = 'Europe/Istanbul';

    /**
     * @since 1.0.0
     */
    case EUROPE_JERSEY = 'Europe/Jersey';

    /**
     * @since 1.0.0
     */
    case EUROPE_KALININGRAD = 'Europe/Kaliningrad';

    /**
     * @since 1.0.0
     */
    case EUROPE_KIEV = 'Europe/Kiev';

    /**
     * @since 1.0.0
     */
    case EUROPE_KIROV = 'Europe/Kirov';

    /**
     * @since 1.0.0
     */
    case EUROPE_LISBON = 'Europe/Lisbon';

    /**
     * @since 1.0.0
     */
    case EUROPE_LJUBLJANA = 'Europe/Ljubljana';

    /**
     * @since 1.0.0
     */
    case EUROPE_LONDON = 'Europe/London';

    /**
     * @since 1.0.0
     */
    case EUROPE_LUXEMBOURG = 'Europe/Luxembourg';

    /**
     * @since 1.0.0
     */
    case EUROPE_MADRID = 'Europe/Madrid';

    /**
     * @since 1.0.0
     */
    case EUROPE_MALTA = 'Europe/Malta';

    /**
     * @since 1.0.0
     */
    case EUROPE_MARIEHAMN = 'Europe/Mariehamn';

    /**
     * @since 1.0.0
     */
    case EUROPE_MINSK = 'Europe/Minsk';

    /**
     * @since 1.0.0
     */
    case EUROPE_MONACO = 'Europe/Monaco';

    /**
     * @since 1.0.0
     */
    case EUROPE_MOSCOW = 'Europe/Moscow';

    /**
     * @since 1.0.0
     */
    case EUROPE_OSLO = 'Europe/Oslo';

    /**
     * @since 1.0.0
     */
    case EUROPE_PARIS = 'Europe/Paris';

    /**
     * @since 1.0.0
     */
    case EUROPE_PODGORICA = 'Europe/Podgorica';

    /**
     * @since 1.0.0
     */
    case EUROPE_PRAGUE = 'Europe/Prague';

    /**
     * @since 1.0.0
     */
    case EUROPE_RIGA = 'Europe/Riga';

    /**
     * @since 1.0.0
     */
    case EUROPE_ROME = 'Europe/Rome';

    /**
     * @since 1.0.0
     */
    case EUROPE_SAMARA = 'Europe/Samara';

    /**
     * @since 1.0.0
     */
    case EUROPE_SAN_MARINO = 'Europe/San_Marino';

    /**
     * @since 1.0.0
     */
    case EUROPE_SARAJEVO = 'Europe/Sarajevo';

    /**
     * @since 1.0.0
     */
    case EUROPE_SARATOV = 'Europe/Saratov';

    /**
     * @since 1.0.0
     */
    case EUROPE_SIMFEROPOL = 'Europe/Simferopol';

    /**
     * @since 1.0.0
     */
    case EUROPE_SKOPJE = 'Europe/Skopje';

    /**
     * @since 1.0.0
     */
    case EUROPE_SOFIA = 'Europe/Sofia';

    /**
     * @since 1.0.0
     */
    case EUROPE_STOCKHOLM = 'Europe/Stockholm';

    /**
     * @since 1.0.0
     */
    case EUROPE_TALLINN = 'Europe/Tallinn';

    /**
     * @since 1.0.0
     */
    case EUROPE_TIRANE = 'Europe/Tirane';

    /**
     * @since 1.0.0
     */
    case EUROPE_ULYANOVSK = 'Europe/Ulyanovsk';

    /**
     * @since 1.0.0
     */
    case EUROPE_UZHGOROD = 'Europe/Uzhgorod';

    /**
     * @since 1.0.0
     */
    case EUROPE_VADUZ = 'Europe/Vaduz';

    /**
     * @since 1.0.0
     */
    case EUROPE_VATICAN = 'Europe/Vatican';

    /**
     * @since 1.0.0
     */
    case EUROPE_VIENNA = 'Europe/Vienna';

    /**
     * @since 1.0.0
     */
    case EUROPE_VILNIUS = 'Europe/Vilnius';

    /**
     * @since 1.0.0
     */
    case EUROPE_VOLGOGRAD = 'Europe/Volgograd';

    /**
     * @since 1.0.0
     */
    case EUROPE_WARSAW = 'Europe/Warsaw';

    /**
     * @since 1.0.0
     */
    case EUROPE_ZAGREB = 'Europe/Zagreb';

    /**
     * @since 1.0.0
     */
    case EUROPE_ZAPOROZHYE = 'Europe/Zaporozhye';

    /**
     * @since 1.0.0
     */
    case EUROPE_ZURICH = 'Europe/Zurich';

    /**
     * @since 1.0.0
     */
    case INDIAN_ANTANANARIVO = 'Indian/Antananarivo';

    /**
     * @since 1.0.0
     */
    case INDIAN_CHAGOS = 'Indian/Chagos';

    /**
     * @since 1.0.0
     */
    case INDIAN_CHRISTMAS = 'Indian/Christmas';

    /**
     * @since 1.0.0
     */
    case INDIAN_COCOS = 'Indian/Cocos';

    /**
     * @since 1.0.0
     */
    case INDIAN_COMORO = 'Indian/Comoro';

    /**
     * @since 1.0.0
     */
    case INDIAN_KERGUELEN = 'Indian/Kerguelen';

    /**
     * @since 1.0.0
     */
    case INDIAN_MAHE = 'Indian/Mahe';

    /**
     * @since 1.0.0
     */
    case INDIAN_MALDIVES = 'Indian/Maldives';

    /**
     * @since 1.0.0
     */
    case INDIAN_MAURITIUS = 'Indian/Mauritius';

    /**
     * @since 1.0.0
     */
    case INDIAN_MAYOTTE = 'Indian/Mayotte';

    /**
     * @since 1.0.0
     */
    case INDIAN_REUNION = 'Indian/Reunion';

    /**
     * @since 1.0.0
     */
    case PACIFIC_APIA = 'Pacific/Apia';

    /**
     * @since 1.0.0
     */
    case PACIFIC_AUCKLAND = 'Pacific/Auckland';

    /**
     * @since 1.0.0
     */
    case PACIFIC_BOUGAINVILLE = 'Pacific/Bougainville';

    /**
     * @since 1.0.0
     */
    case PACIFIC_CHATHAM = 'Pacific/Chatham';

    /**
     * @since 1.0.0
     */
    case PACIFIC_CHUUK = 'Pacific/Chuuk';

    /**
     * @since 1.0.0
     */
    case PACIFIC_EASTER = 'Pacific/Easter';

    /**
     * @since 1.0.0
     */
    case PACIFIC_EFATE = 'Pacific/Efate';

    /**
     * @since 1.0.0
     */
    case PACIFIC_FAKAOFO = 'Pacific/Fakaofo';

    /**
     * @since 1.0.0
     */
    case PACIFIC_FIJI = 'Pacific/Fiji';

    /**
     * @since 1.0.0
     */
    case PACIFIC_FUNAFUTI = 'Pacific/Funafuti';

    /**
     * @since 1.0.0
     */
    case PACIFIC_GALAPAGOS = 'Pacific/Galapagos';

    /**
     * @since 1.0.0
     */
    case PACIFIC_GAMBIER = 'Pacific/Gambier';

    /**
     * @since 1.0.0
     */
    case PACIFIC_GUADALCANAL = 'Pacific/Guadalcanal';

    /**
     * @since 1.0.0
     */
    case PACIFIC_GUAM = 'Pacific/Guam';

    /**
     * @since 1.0.0
     */
    case PACIFIC_HONOLULU = 'Pacific/Honolulu';

    /**
     * @since 1.0.0
     */
    case PACIFIC_KANTON = 'Pacific/Kanton';

    /**
     * @since 1.0.0
     */
    case PACIFIC_KIRITIMATI = 'Pacific/Kiritimati';

    /**
     * @since 1.0.0
     */
    case PACIFIC_KOSRAE = 'Pacific/Kosrae';

    /**
     * @since 1.0.0
     */
    case PACIFIC_KWAJALEIN = 'Pacific/Kwajalein';

    /**
     * @since 1.0.0
     */
    case PACIFIC_MAJURO = 'Pacific/Majuro';

    /**
     * @since 1.0.0
     */
    case PACIFIC_MARQUESAS = 'Pacific/Marquesas';

    /**
     * @since 1.0.0
     */
    case PACIFIC_MIDWAY = 'Pacific/Midway';

    /**
     * @since 1.0.0
     */
    case PACIFIC_NAURU = 'Pacific/Nauru';

    /**
     * @since 1.0.0
     */
    case PACIFIC_NIUE = 'Pacific/Niue';

    /**
     * @since 1.0.0
     */
    case PACIFIC_NORFOLK = 'Pacific/Norfolk';

    /**
     * @since 1.0.0
     */
    case PACIFIC_NOUMEA = 'Pacific/Noumea';

    /**
     * @since 1.0.0
     */
    case PACIFIC_PAGO_PAGO = 'Pacific/Pago_Pago';

    /**
     * @since 1.0.0
     */
    case PACIFIC_PALAU = 'Pacific/Palau';

    /**
     * @since 1.0.0
     */
    case PACIFIC_PITCAIRN = 'Pacific/Pitcairn';

    /**
     * @since 1.0.0
     */
    case PACIFIC_POHNPEI = 'Pacific/Pohnpei';

    /**
     * @since 1.0.0
     */
    case PACIFIC_PORT_MORESBY = 'Pacific/Port_Moresby';

    /**
     * @since 1.0.0
     */
    case PACIFIC_RAROTONGA = 'Pacific/Rarotonga';

    /**
     * @since 1.0.0
     */
    case PACIFIC_SAIPAN = 'Pacific/Saipan';

    /**
     * @since 1.0.0
     */
    case PACIFIC_TAHITI = 'Pacific/Tahiti';

    /**
     * @since 1.0.0
     */
    case PACIFIC_TARAWA = 'Pacific/Tarawa';

    /**
     * @since 1.0.0
     */
    case PACIFIC_TONGATAPU = 'Pacific/Tongatapu';

    /**
     * @since 1.0.0
     */
    case PACIFIC_WAKE = 'Pacific/Wake';

    /**
     * @since 1.0.0
     */
    case PACIFIC_WALLIS = 'Pacific/Wallis';

    /**
     * @since 1.0.0
     */
    case UTC = 'UTC';

}