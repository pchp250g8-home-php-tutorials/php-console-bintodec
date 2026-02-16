<?php
    $nDecNum = 0;
    $nBinPower = 1;
    $nMaxBinDigits = ceil(log(PHP_INT_MAX,2));
    echo("Input a binary number:\r\n");
    $strLine = chop(fgets(STDIN));
    $nStrLen = strlen($strLine);
    sscanf($strLine,"%[0-1]",$strLine1);
    $nMatches = strlen($strLine1);
    $bRightString =($nStrLen <= $nMaxBinDigits && $nStrLen == $nMatches);
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