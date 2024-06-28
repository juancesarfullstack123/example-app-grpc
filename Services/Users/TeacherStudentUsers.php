<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/users.proto

namespace Services\Users;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>services.users.TeacherStudentUsers</code>
 */
class TeacherStudentUsers extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string full_name = 2;</code>
     */
    protected $full_name = '';
    /**
     * Generated from protobuf field <code>string avatar = 3;</code>
     */
    protected $avatar = '';
    /**
     * Generated from protobuf field <code>string gender = 4;</code>
     */
    protected $gender = '';
    /**
     * Generated from protobuf field <code>string address = 5;</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>string phone_number = 6;</code>
     */
    protected $phone_number = '';
    /**
     * Generated from protobuf field <code>int32 school_id = 7;</code>
     */
    protected $school_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $full_name
     *     @type string $avatar
     *     @type string $gender
     *     @type string $address
     *     @type string $phone_number
     *     @type int $school_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Users::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string full_name = 2;</code>
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Generated from protobuf field <code>string full_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string avatar = 3;</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Generated from protobuf field <code>string avatar = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gender = 4;</code>
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>string gender = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkString($var, True);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address = 5;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone_number = 6;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Generated from protobuf field <code>string phone_number = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 school_id = 7;</code>
     * @return int
     */
    public function getSchoolId()
    {
        return $this->school_id;
    }

    /**
     * Generated from protobuf field <code>int32 school_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSchoolId($var)
    {
        GPBUtil::checkInt32($var);
        $this->school_id = $var;

        return $this;
    }

}

