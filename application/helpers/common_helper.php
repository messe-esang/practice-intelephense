<?php

/**
 * 프로퍼티 매핑 기능
 * $source 에 있는 프로퍼티들을 $target 프로퍼티에 추가한다
 * 
 * @param mixed $source 
 * @param mixed $target 
 * @return mixed 
 */
function mapping($source, $target)
{
    // TODO : Rename 예시
    foreach ($source as $key => $value) {
        $target->$key = $value;
    }
    return $target;
}

// TODO : PHP Doc 작성 예시
/**
 * 마스터 코드 반환
 * 
 * @param int $masterCodeGroupId 
 * @return array 
 */
function masterCodes(int $masterCodeGroupId): array
{
    # code...
    return [];
}
