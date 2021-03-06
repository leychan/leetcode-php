<?php
/**
 * Created by chenlei
 * Date 20-10-29
 * Time 上午9:08
 * Desc 14. 最长公共前缀 https://leetcode-cn.com/problems/longest-common-prefix/
 */

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    static function longestCommonPrefix($strs) {
        //如果是空数组, 返回''
        if (empty($strs)) {
            return '';
        }
        //如果数组只有一个元素, 直接返回该元素
        if (count($strs) == 1) {
            return $strs[0];
        }
        //找到数组中最短的元素, 以该元素为基准进行前缀匹配
        $shortest = $strs[0];
        foreach ($strs as $str) {
            if (strlen($str) < strlen($shortest)) {
                $shortest = $str;
            }
        }
        $len = strlen($shortest);
        $prefix = '';
        for ($i = 0; $i < $len; $i++) {
            $prefix = substr($shortest, 0, $i + 1);
            foreach ($strs as $str) {
                if (strpos($str, $prefix) !== 0) {
                    return substr($prefix, 0, $i);
                }
            }
        }
        return $prefix;
    }
}

//$strs = ["flower","flow","flight"];
$strs = ["ab", "a"];
var_dump(Solution::longestCommonPrefix($strs));