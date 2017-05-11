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
    protected $sshSocketPath;

    /**
     * SSH username.
     *
     * @var string
     */
    protected $sshUsername;

    /**
     * SSH hostname.
     *
     * @var string
     */
    protected $sshHostname;

    /**
     * SSH port.
     *
     * @var integer
     */
    protected $sshPort = 22;

    /**
     * Source port for port forwarding.
     *
     * @var integer
     */
    protected $forwardPortLocal;

    /**
     * Destination port for port forwarding.
     *
     * @var integer
     */
    protected $forwardPortRemote;

    /**
     * Destination host for port forwarding.
     *
     * @var string
     */
    protected $forwardHostRemote;

    /**
     * Private key string.
     *
     * @var string
     */
    protected $privateKeyContents;

    /**
     * Private key file system path.
     *
     * @var string
     */
    protected $privateKeyFilename;

    /**
     * @return string
     */
    public function getSshSocketPath()
    {
        return $this->sshSocketPath;
    }

    /**
     * @param string $sshSocketPath
     *
     * @return Config
     */
    public function setSshSocketPath($sshSocketPath)
    {
        $this->sshSocketPath = $sshSocketPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getSshUsername()
    {
        return $this->sshUsername;
    }

    /**
     * @param string $sshUsername
     *
     * @return Config
     */
    public function setSshUsername($sshUsername)
    {
        $this->sshUsername = $sshUsername;

        return $this;
    }

    /**
     * @return string
     */
    public function getSshHostname()
    {
        return $this->sshHostname;
    }

    /**
     * @param string $sshHostname
     *
     * @return Config
     */
    public function setSshHostname($sshHostname)
    {
        $this->sshHostname = $sshHostname;

        return $this;
    }

    /**
     * @return int
     */
    public function getSshPort()
    {
        return $this->sshPort;
    }

    /**
     * @param int $sshPort
     *
     * @return Config
     */
    public function setSshPort($sshPort)
    {
        $this->sshPort = $sshPort;

        return $this;
    }

    /**
     * @return int
     */
    public function getForwardPortLocal()
    {
        return $this->forwardPortLocal;
    }

    /**
     * @param int $forwardPortLocal
     *
     * @return Config
     */
    public function setForwardPortLocal($forwardPortLocal)
    {
        $this->forwardPortLocal = $forwardPortLocal;

        return $this;
    }

    /**
     * @return int
     */
    public function getForwardPortRemote()
    {
        return $this->forwardPortRemote;
    }

    /**
     * @param int $forwardPortRemote
     *
     * @return Config
     */
    public function setForwardPortRemote($forwardPortRemote)
    {
        $this->forwardPortRemote = $forwardPortRemote;

        return $this;
    }

    /**
     * @return string
     */
    public function getForwardHostRemote()
    {
        return $this->forwardHostRemote;
    }

    /**
     * @param string $forwardHostRemote
     *
     * @return Config
     */
    public function setForwardHostRemote($forwardHostRemote)
    {
        $this->forwardHostRemote = $forwardHostRemote;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateKeyContents()
    {
        return $this->privateKeyContents;
    }

    /**
     * @param string $privateKeyContents
     *
     * @return Config
     */
    public function setPrivateKeyContents($privateKeyContents)
    {
        $this->privateKeyContents = $privateKeyContents;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateKeyFilename()
    {
        return $this->privateKeyFilename;
    }

    /**
     * @param string $privateKeyFilename
     *
     * @return Config
     */
    public function setPrivateKeyFilename($privateKeyFilename)
    {
        $this->privateKeyFilename = $privateKeyFilename;

        return $this;
    }
}
