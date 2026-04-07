<?php
    const MAX_INT = 2 ** 32 - 1;
    $nDecNum = 0;
    $nBinPower = 1;
    $nMaxBinDigits = ceil(log(MAX_INT, 2));
    echo("Input a binary number:\r\n");
    $strLine = chop(fgets(STDIN));
    $nStrLen = strlen($strLine);
    $bIsBinNum = preg_match_all("^[0-1]+$^", $strLine, $m);
    $bRightString =($nStrLen <= $nMaxBinDigits && $bIsBinNum);
    if (!$bRightString) 
    {
        echo("Wrong binary number format!!!\r\n");
        fgetc(STDIN);  
        exit(); 
    }
    for ($i = 0; $i < $nStrLen; $i++)
    {
        $nBinDight = $strLine[$nStrLen - 1 - $i] - '0';
        $nDecNum += ($nBinDight * $nBinPower);
        $nBinPower *= 2;
    }
    printf("The decenary equivalent of the binary number %s is %d\r\n", $strLine,$nDecNum);
    fgetc(STDIN);
?>