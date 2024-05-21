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

namespace FireHub\Core\Support\Enums\String;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### Supported character encodings enum
 * @since 1.0.0
 */
enum Encoding:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case BASE64 = 'BASE64';

    /**
     * @since 1.0.0
     */
    case UUENCODE = 'UUENCODE';

    /**
     * @since 1.0.0
     */
    case HTML_ENTITIES = 'HTML-ENTITIES';

    /**
     * @since 1.0.0
     */
    case QUOTED_PRINTABLE = 'Quoted-Printable';

    /**
     * @since 1.0.0
     */
    case SEVEN_BIT = '7bit';

    /**
     * @since 1.0.0
     */
    case EIGHT_BIT = '8bit';

    /**
     * @since 1.0.0
     */
    case UCS_4 = 'UCS-4';

    /**
     * @since 1.0.0
     */
    case UCS_4BE = 'UCS-4BE';

    /**
     * @since 1.0.0
     */
    case UCS_4LE = 'UCS-4LE';

    /**
     * @since 1.0.0
     */
    case UCS_2 = 'UCS-2';

    /**
     * @since 1.0.0
     */
    case UCS_2BE = 'UCS-2BE';

    /**
     * @since 1.0.0
     */
    case UCS_2LE = 'UCS-2LE';

    /**
     * @since 1.0.0
     */
    case UTF_32 = 'UTF-32';

    /**
     * @since 1.0.0
     */
    case UTF_32BE = 'UTF-32BE';

    /**
     * @since 1.0.0
     */
    case UTF_32LE = 'UTF-32LE';

    /**
     * @since 1.0.0
     */
    case UTF_16 = 'UTF-16';

    /**
     * @since 1.0.0
     */
    case UTF_16BE = 'UTF-16BE';

    /**
     * @since 1.0.0
     */
    case UTF_16LE = 'UTF-16LE';

    /**
     * @since 1.0.0
     */
    case UTF_8 = 'UTF-8';

    /**
     * @since 1.0.0
     */
    case UTF_7 = 'UTF-7';

    /**
     * @since 1.0.0
     */
    case UTF7_IMAP = 'UTF7-IMAP';

    /**
     * @since 1.0.0
     */
    case ASCII = 'ASCII';

    /**
     * @since 1.0.0
     */
    case EUC_JP = 'EUC-JP';

    /**
     * @since 1.0.0
     */
    case SJIS = 'SJIS';

    /**
     * @since 1.0.0
     */
    case EUCJP_WIN = 'eucJP-win';

    /**
     * @since 1.0.0
     */
    case EUC_JP_2004 = 'EUC-JP-2004';

    /**
     * @since 1.0.0
     */
    case SJIS_MOBILE_DOCOMO = 'SJIS-Mobile#DOCOMO';

    /**
     * @since 1.0.0
     */
    case SJIS_MOBILE_KDDI =  'SJIS-Mobile#KDDI';

    /**
     * @since 1.0.0
     */
    case SJIS_MOBILE_SOFTBANK = 'SJIS-Mobile#SOFTBANK';

    /**
     * @since 1.0.0
     */
    case SJIS_MAC = 'SJIS-mac';

    /**
     * @since 1.0.0
     */
    case SJIS_2004 = 'SJIS-2004';

    /**
     * @since 1.0.0
     */
    case UTF_8_MOBILE_DOCOMO = 'UTF-8-Mobile#DOCOMO';

    /**
     * @since 1.0.0
     */
    case UTF_8_MOBILE_KDDI_A = 'UTF-8-Mobile#KDDI-A';

    /**
     * @since 1.0.0
     */
    case UTF_8_MOBILE_KDDI_B = 'UTF-8-Mobile#KDDI-B';

    /**
     * @since 1.0.0
     */
    case UTF_8_MOBILE_SOFTBANK = 'UTF-8-Mobile#SOFTBANK';

    /**
     * @since 1.0.0
     */
    case CP932 = 'CP932';

    /**
     * @since 1.0.0
     */
    case CP51932 = 'CP51932';

    /**
     * @since 1.0.0
     */
    case JIS = 'JIS';

    /**
     * @since 1.0.0
     */
    case ISO_2022_JP = 'ISO-2022-JP';

    /**
     * @since 1.0.0
     */
    case ISO_2022_JP_MS = 'ISO-2022-JP-MS';

    /**
     * @since 1.0.0
     */
    case GB18030 = 'GB18030';

    /**
     * @since 1.0.0
     */
    case WINDOWS_1252 = 'Windows-1252';

    /**
     * @since 1.0.0
     */
    case WINDOWS_1254 = 'Windows-1254';

    /**
     * @since 1.0.0
     */
    case ISO_8859_1 = 'ISO-8859-1';

    /**
     * @since 1.0.0
     */
    case ISO_8859_2 = 'ISO-8859-2';

    /**
     * @since 1.0.0
     */
    case ISO_8859_3 = 'ISO-8859-3';

    /**
     * @since 1.0.0
     */
    case ISO_8859_4 = 'ISO-8859-4';

    /**
     * @since 1.0.0
     */
    case ISO_8859_5 = 'ISO-8859-5';

    /**
     * @since 1.0.0
     */
    case ISO_8859_6 = 'ISO-8859-6';

    /**
     * @since 1.0.0
     */
    case ISO_8859_7 = 'ISO-8859-7';

    /**
     * @since 1.0.0
     */
    case ISO_8859_8 = 'ISO-8859-8';

    /**
     * @since 1.0.0
     */
    case ISO_8859_9 = 'ISO-8859-9';

    /**
     * @since 1.0.0
     */
    case ISO_8859_10 = 'ISO-8859-10';

    /**
     * @since 1.0.0
     */
    case ISO_8859_13 = 'ISO-8859-13';

    /**
     * @since 1.0.0
     */
    case ISO_8859_14 = 'ISO-8859-14';

    /**
     * @since 1.0.0
     */
    case ISO_8859_15 = 'ISO-8859-15';

    /**
     * @since 1.0.0
     */
    case ISO_8859_16 = 'ISO-8859-16';

    /**
     * @since 1.0.0
     */
    case EUC_CN = 'EUC-CN';

    /**
     * @since 1.0.0
     */
    case CP936 = 'CP936';

    /**
     * @since 1.0.0
     */
    case HZ = 'HZ';

    /**
     * @since 1.0.0
     */
    case EUC_TW = 'EUC-TW';

    /**
     * @since 1.0.0
     */
    case BIG_5 = 'BIG-5';

    /**
     * @since 1.0.0
     */
    case CP950 = 'CP950';

    /**
     * @since 1.0.0
     */
    case EUC_KR = 'EUC-KR';

    /**
     * @since 1.0.0
     */
    case UHC = 'UHC';

    /**
     * @since 1.0.0
     */
    case ISO_2022_KR = 'ISO-2022-KR';

    /**
     * @since 1.0.0
     */
    case WINDOWS_1251 = 'Windows-1251';

    /**
     * @since 1.0.0
     */
    case CP866 = 'CP866';

    /**
     * @since 1.0.0
     */
    case KOI8_R = 'KOI8-R';

    /**
     * @since 1.0.0
     */
    case KOI8_U = 'KOI8-U';

    /**
     * @since 1.0.0
     */
    case ARM_SCII_8 = 'ArmSCII-8';

    /**
     * @since 1.0.0
     */
    case CP850 = 'CP850';

    /**
     * @since 1.0.0
     */
    case ISO_2022_JP_2004 = 'ISO-2022-JP-2004';

    /**
     * @since 1.0.0
     */
    case ISO_2022_JP_MOBILE_KDDI = 'ISO-2022-JP-MOBILE#KDDI';

    /**
     * @since 1.0.0
     */
    case CP50220 = 'CP50220';

    /**
     * @since 1.0.0
     */
    case CP50221 = 'CP50221';

    /**
     * @since 1.0.0
     */
    case CP50222 = 'CP50222';

}