<?php
function longestPalindrome($s) {
    $n = strlen($s);
    if ($n < 2) return $s;

    $start = 0;
    $maxLen = 1;

    for ($i = 0; $i < $n; $i++) {
        // 奇数长度回文（以 s[i] 为中心）
        $l = $i; $r = $i;
        while ($l >= 0 && $r < $n && $s[$l] === $s[$r]) {
            if ($r - $l + 1 > $maxLen) {
                $start = $l;
                $maxLen = $r - $l + 1;
            }
            $l--; $r++;
        }

        // 偶数长度回文（以 s[i], s[i+1] 为中心）
        $l = $i; $r = $i + 1;
        while ($l >= 0 && $r < $n && $s[$l] === $s[$r]) {
            if ($r - $l + 1 > $maxLen) {
                $start = $l;
                $maxLen = $r - $l + 1;
            }
            $l--; $r++;
        }
    }

    return substr($s, $start, $maxLen);
}

$str="mfdnn323dfhh83dfsinnf23mdji5mmds49mdimf4fmidm4mdinondsn2pldsmooond
nsi43nnidsi3ndnfjiemmsmfmfin4nnfinfndim4mmdfmidib4mdilh5m3mfndlfifdfjkdnsns
nin4nmdfmfdmi4nfnddnfnfidni4nkfdb4nnfkdlpnnd83jknds";
// 测试
echo longestPalindrome($str) . "\n"; // mdimf4fmidm
 
