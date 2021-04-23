<?php

namespace MesseEsang\Practice\Domain;

/**
 * 마스터 코드
 * @package MesseEsang\Practice\Domain
 */
class MasterCode
{
    #region GROUP ID CONSTANTS

    /**
     * 글 종류
     */
    const GROUP_POST_TYPE = 1;

    /**
     * 사용자 타입
     */
    const GROUP_USER_TYPE = 2;
    
    #endregion

    /**
     * 
     * @var int
     */
    public $id;

    /**
     * 
     * @var int
     */
    public $groupId;

    /**
     * 
     * @var string
     */
    public $codeName;

    /**
     * 
     * @var string
     */
    public $codeValue;

    /**
     * 
     * @var int
     */
    public $sequence;
}
