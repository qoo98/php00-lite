<?php
$week = [
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土', //6
];
$date = date('w');
echo("今日の日付は？  今日は何曜日？<br />");

echo date("Y年m月d日 ");
echo $week[$date] . '曜日';
