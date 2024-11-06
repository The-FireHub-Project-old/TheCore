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

namespace FireHub\Core\Support\Enums\Data;

use FireHub\Core\Base\ {
    InitBackedEnum, Trait\ConcreteBackedEnum
};

/**
 * ### Resource type enum
 *
 * The following is a list of functions which create, use, or destroy PHP resources.
 * @since 1.0.0
 */
enum ResourceType:string implements InitBackedEnum {

    /**
     * ### FireHub initial concrete-backed enum trait
     * @since 1.0.0
     */
    use ConcreteBackedEnum;

    /**
     * @since 1.0.0
     */
    case UNKNOWN = 'Unknown';
    
    /**
     * @since 1.0.0
     */
    case ADDRESS_INFO = 'AddressInfo';
    
    /**
     * @since 1.0.0
     */
    case BZIP2 = 'bzip2';
    
    /**
     * @since 1.0.0
     */
    case CUBRID_CONNECTION = 'cubrid connection';
    
    /**
     * @since 1.0.0
     */
    case PERSISTENT_CUBRID_CONNECTION = 'persistent cubrid connection';
    
    /**
     * @since 1.0.0
     */
    case CUBRID_REQUEST = 'cubrid request';
    
    /**
     * @since 1.0.0
     */
    case CUBRID_LOB = 'cubrid lob';
    
    /**
     * @since 1.0.0
     */
    case CUBRID_LOB2 = 'cubrid lob2';
    
    /**
     * @since 1.0.0
     */
    case CURL = 'curl';
    
    /**
     * @since 1.0.0
     */
    case CURL_MULTI = 'curl_multi';
    
    /**
     * @since 1.0.0
     */
    case CURL_SHARE = 'curl_share';
    
    /**
     * @since 1.0.0
     */
    case DBA = 'dba';
    
    /**
     * @since 1.0.0
     */
    case DBA_PERSISTENT = 'dba persistent';
    
    /**
     * @since 1.0.0
     */
    case DBASE = 'dbase';
    
    /**
     * @since 1.0.0
     */
    case ENCHANT_BROKER = 'enchant_broker';
    
    /**
     * @since 1.0.0
     */
    case ENCHANT_DICT = 'enchant_dict';
    
    /**
     * @since 1.0.0
     */
    case FDF = 'fdf';
    
    /**
     * @since 1.0.0
     */
    case FTP = 'ftp';
    
    /**
     * @since 1.0.0
     */
    case GD = 'gd';
    
    /**
     * @since 1.0.0
     */
    case GD_FONT = 'gd font';
    
    /**
     * @since 1.0.0
     */
    case IMAP = 'imap';
    
    /**
     * @since 1.0.0
     */
    case INTERBASE_BLOB = 'interbase blob';
    
    /**
     * @since 1.0.0
     */
    case INTERBASE_LINK = 'interbase link';
    
    /**
     * @since 1.0.0
     */
    case INTERBASE_LINK_PERSISTENT = 'interbase link persistent';
    
    /**
     * @since 1.0.0
     */
    case INTERBASE_QUERY = 'interbase query';
    
    /**
     * @since 1.0.0
     */
    case INTERBASE_RESULT = 'interbase result';
    
    /**
     * @since 1.0.0
     */
    case INTERBASE_TRANSACTION = 'interbase transaction';
    
    /**
     * @since 1.0.0
     */
    case LDAP_LINK = 'ldap link';
    
    /**
     * @since 1.0.0
     */
    case LDAP_RESULT = 'ldap result';
    
    /**
     * @since 1.0.0
     */
    case LDAP_RESULT_ENTRY = 'ldap result entry';
    
    /**
     * @since 1.0.0
     */
    case MAILPARSE_MAIL_STRUCTURE = 'mailparse_mail_structure';
    
    /**
     * @since 1.0.0
     */
    case MYSQL_LINK = 'mysql link';
    
    /**
     * @since 1.0.0
     */
    case MYSQL_LINK_PERSISTENT = 'mysql link persistent';
    
    /**
     * @since 1.0.0
     */
    case MYSQL_RESULT = 'mysql result';
    
    /**
     * @since 1.0.0
     */
    case OCI8_COLLECTION = 'oci8 collection';
    
    /**
     * @since 1.0.0
     */
    case OCI8_CONNECTION = 'oci8 connection';
    
    /**
     * @since 1.0.0
     */
    case OCI8_LOB = 'oci8 lob';
    
    /**
     * @since 1.0.0
     */
    case OCI8_STATEMENT = 'oci8 statement';
    
    /**
     * @since 1.0.0
     */
    case ODBC_LINK = 'odbc link';
    
    /**
     * @since 1.0.0
     */
    case ODBC_LINK_PERSISTENT = 'odbc link persistent';
    
    /**
     * @since 1.0.0
     */
    case ODBC_RESULT = 'odbc result';
    
    /**
     * @since 1.0.0
     */
    case BIRDSTEP_LINK = 'birdstep link';
    
    /**
     * @since 1.0.0
     */
    case BIRDSTEP_RESULT = 'birdstep result';
    
    /**
     * @since 1.0.0
     */
    case OPENSSL_KEY = 'OpenSSL key';
    
    /**
     * @since 1.0.0
     */
    case OPENSSL_X_509 = 'OpenSSL X.509';
    
    /**
     * @since 1.0.0
     */
    case PGSQL_LARGE_OBJECT = 'pgsql large object';
    
    /**
     * @since 1.0.0
     */
    case PGSQL_LINK = 'pgsql link';
    
    /**
     * @since 1.0.0
     */
    case PGSQL_LINK_PERSISTENT = 'pgsql link persistent';
    
    /**
     * @since 1.0.0
     */
    case PGSQL_RESULT = 'pgsql result';
    
    /**
     * @since 1.0.0
     */
    case PGSQL_STRING = 'pgsql string';
    
    /**
     * @since 1.0.0
     */
    case PSPELL = 'pspell';
    
    /**
     * @since 1.0.0
     */
    case PSPELL_CONFIG = 'pspell config';
    
    /**
     * @since 1.0.0
     */
    case SHMOP = 'shmop';
    
    /**
     * @since 1.0.0
     */
    case SOCKET = 'Socket';
    
    /**
     * @since 1.0.0
     */
    case STREAM = 'stream';
    
    /**
     * @since 1.0.0
     */
    case SSH2_SESSION = 'SSH2 Session';

    /**
     * @since 1.0.0
     */
    case SSH2_LISTENER = 'SSH2 Listener';
    
    /**
     * @since 1.0.0
     */
    case SSH2_SFTP = 'SSH2 SFTP';
    
    /**
     * @since 1.0.0
     */
    case SSH2_PUBLICKEY_SUBSYSTEM = 'SSH2 Publickey Subsystem';
    
    /**
     * @since 1.0.0
     */
    case SYSVMSG_QUEUE = 'sysvmsg queue';
    
    /**
     * @since 1.0.0
     */
    case SYSVSEM = 'sysvsem';
    
    /**
     * @since 1.0.0
     */
    case SYSVSHM = 'sysvshm';
    
    /**
     * @since 1.0.0
     */
    case WDDX = 'wddx';
    
    /**
     * @since 1.0.0
     */
    case XML = 'xml';
    
    /**
     * @since 1.0.0
     */
    case ZLIB = 'zlib';
    
    /**
     * @since 1.0.0
     */
    case ZLIB_DEFLATE = 'zlib.deflate';
    
    /**
     * @since 1.0.0
     */
    case ZLIB_INFLATE = 'zlib.inflate';

}