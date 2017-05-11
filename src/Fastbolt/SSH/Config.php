<?php
/**
 * @copyright 2017 Daniel Hirtzbruch / Fastbolt Schraubengroßhandels GmbH (http://www.fastbolt.com)
 * @package   Fastbolt\SSH
 */

namespace Fastbolt\SSH;

/**
 * Class Config
 */
class Config
{

    /**
     * SSH socket path.
     *
     * @var string
     */
    public $sshSocketPath;

    /**
     * SSH username.
     *
     * @var string
     */
    public $sshUsername;

    /**
     * SSH hostname.
     *
     * @var string
     */
    public $sshHostname;

    /**
     * SSH port.
     *
     * @var integer
     */
    public $sshPort = 22;

    /**
     * Source port for port forwarding.
     *
     * @var integer
     */
    public $forwardPortLocal;

    /**
     * Destination port for port forwarding.
     *
     * @var integer
     */
    public $forwardPortRemote;

    /**
     * Destination host for port forwarding.
     *
     * @var string
     */
    public $forwardHostRemote;

    /**
     * Private key string.
     *
     * @var string
     */
    public $privateKeyContents;

    /**
     * Private key file system path.
     *
     * @var string
     */
    public $privateKeyFilename;
}
