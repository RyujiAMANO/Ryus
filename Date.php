<?php

class Ryus_Date
{
    /**
     * 該当年の最初の週の開始日を得る
     * @param $year
     */
    protected function getFirstWeekStartDateFromYear($year)
    {
        $yearStartDate = $year . '-01-01';
        $week = date('w', strtotime($yearStartDate)); //0 日曜 6 土曜
        $startDate = date('Y-m-d', strtotime("{$yearStartDate} -{$week} day" ));
        // 2014-1-1 水曜 -> return 2013-12-29 （この日が日曜、週初め）
        return $startDate;
    }

    /**
     * 該当年の最後の週の終了日を得る
     * @param $year
     */
    protected function getLastWeekEndDteFromYear($year)
    {
        $yearEndDate = $year .'-12-31';
        $week = date('w', strtotime($yearEndDate)); //0 日曜 6 土曜
        $addDay = 6 - $week; //土曜までに日数を計算
        $endDate = date('Y-m-d', strtotime("{$yearEndDate} +{$addDay} day" ));
        // 2014-1-1 水曜 -> return 2013-12-29 （この日が日曜、週初め）
        return $endDate;

    }

}