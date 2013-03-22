<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BofSystemUser
 *
 * @ORM\Table(name="bof_system_user")
 * @ORM\Entity
 */
class BofSystemUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bof_system_user_userid_seq", allocationSize=1, initialValue=1)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="smallint", nullable=false)
     */
    private $groupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="dep_id", type="integer", nullable=true)
     */
    private $depId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=20, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudonym", type="string", length=50, nullable=false)
     */
    private $pseudonym;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="org_name", type="string", length=50, nullable=false)
     */
    private $orgName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=250, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="workphone", type="string", length=50, nullable=false)
     */
    private $workphone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=50, nullable=false)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=5, nullable=false)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="province_code", type="string", nullable=false)
     */
    private $provinceCode;

    /**
     * @var string
     *
     * @ORM\Column(name="superuser", type="string", nullable=true)
     */
    private $superuser;

    /**
     * @var string
     *
     * @ORM\Column(name="jobtitle", type="string", length=50, nullable=false)
     */
    private $jobtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=false)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="create_date", type="string", nullable=false)
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="last_login_ip", type="string", length=15, nullable=false)
     */
    private $lastLoginIp;

    /**
     * @var string
     *
     * @ORM\Column(name="last_login_host", type="string", length=50, nullable=false)
     */
    private $lastLoginHost;

    /**
     * @var string
     *
     * @ORM\Column(name="user_param", type="string", length=255, nullable=true)
     */
    private $userParam;

    /**
     * @var integer
     *
     * @ORM\Column(name="pref_imap_integration", type="smallint", nullable=false)
     */
    private $prefImapIntegration;

    /**
     * @var string
     *
     * @ORM\Column(name="user_code", type="string", nullable=true)
     */
    private $userCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;



    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return BofSystemUser
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    
        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set depId
     *
     * @param integer $depId
     * @return BofSystemUser
     */
    public function setDepId($depId)
    {
        $this->depId = $depId;
    
        return $this;
    }

    /**
     * Get depId
     *
     * @return integer 
     */
    public function getDepId()
    {
        return $this->depId;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return BofSystemUser
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return BofSystemUser
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set pseudonym
     *
     * @param string $pseudonym
     * @return BofSystemUser
     */
    public function setPseudonym($pseudonym)
    {
        $this->pseudonym = $pseudonym;
    
        return $this;
    }

    /**
     * Get pseudonym
     *
     * @return string 
     */
    public function getPseudonym()
    {
        return $this->pseudonym;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return BofSystemUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return BofSystemUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set orgName
     *
     * @param string $orgName
     * @return BofSystemUser
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
    
        return $this;
    }

    /**
     * Get orgName
     *
     * @return string 
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return BofSystemUser
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return BofSystemUser
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set workphone
     *
     * @param string $workphone
     * @return BofSystemUser
     */
    public function setWorkphone($workphone)
    {
        $this->workphone = $workphone;
    
        return $this;
    }

    /**
     * Get workphone
     *
     * @return string 
     */
    public function getWorkphone()
    {
        return $this->workphone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return BofSystemUser
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return BofSystemUser
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return BofSystemUser
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    
        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set provinceCode
     *
     * @param string $provinceCode
     * @return BofSystemUser
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
    
        return $this;
    }

    /**
     * Get provinceCode
     *
     * @return string 
     */
    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * Set superuser
     *
     * @param string $superuser
     * @return BofSystemUser
     */
    public function setSuperuser($superuser)
    {
        $this->superuser = $superuser;
    
        return $this;
    }

    /**
     * Get superuser
     *
     * @return string 
     */
    public function getSuperuser()
    {
        return $this->superuser;
    }

    /**
     * Set jobtitle
     *
     * @param string $jobtitle
     * @return BofSystemUser
     */
    public function setJobtitle($jobtitle)
    {
        $this->jobtitle = $jobtitle;
    
        return $this;
    }

    /**
     * Get jobtitle
     *
     * @return string 
     */
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return BofSystemUser
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set active
     *
     * @param string $active
     * @return BofSystemUser
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return string 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createDate
     *
     * @param string $createDate
     * @return BofSystemUser
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    
        return $this;
    }

    /**
     * Get createDate
     *
     * @return string 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set lastLoginIp
     *
     * @param string $lastLoginIp
     * @return BofSystemUser
     */
    public function setLastLoginIp($lastLoginIp)
    {
        $this->lastLoginIp = $lastLoginIp;
    
        return $this;
    }

    /**
     * Get lastLoginIp
     *
     * @return string 
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * Set lastLoginHost
     *
     * @param string $lastLoginHost
     * @return BofSystemUser
     */
    public function setLastLoginHost($lastLoginHost)
    {
        $this->lastLoginHost = $lastLoginHost;
    
        return $this;
    }

    /**
     * Get lastLoginHost
     *
     * @return string 
     */
    public function getLastLoginHost()
    {
        return $this->lastLoginHost;
    }

    /**
     * Set userParam
     *
     * @param string $userParam
     * @return BofSystemUser
     */
    public function setUserParam($userParam)
    {
        $this->userParam = $userParam;
    
        return $this;
    }

    /**
     * Get userParam
     *
     * @return string 
     */
    public function getUserParam()
    {
        return $this->userParam;
    }

    /**
     * Set prefImapIntegration
     *
     * @param integer $prefImapIntegration
     * @return BofSystemUser
     */
    public function setPrefImapIntegration($prefImapIntegration)
    {
        $this->prefImapIntegration = $prefImapIntegration;
    
        return $this;
    }

    /**
     * Get prefImapIntegration
     *
     * @return integer 
     */
    public function getPrefImapIntegration()
    {
        return $this->prefImapIntegration;
    }

    /**
     * Set userCode
     *
     * @param string $userCode
     * @return BofSystemUser
     */
    public function setUserCode($userCode)
    {
        $this->userCode = $userCode;
    
        return $this;
    }

    /**
     * Get userCode
     *
     * @return string 
     */
    public function getUserCode()
    {
        return $this->userCode;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return BofSystemUser
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }
}