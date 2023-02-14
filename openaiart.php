<?php include("assets/header.php"); ?>

<div style='position:fixed;top:0;left:0;right:0;padding:21px 11px;background:#fff;border-bottom:1px solid #dbdbdb;z-index:999;'>
    <b>Aiedrow's AI ART</b>
</div>

<div class='jiv' style='height:95vh;overflow:scroll;padding-top:69px;padding-bottom:69px;'>
<div id='openaiartresponse' style=''>
    
</div><br><br><br>
</div>

<div style='position:fixed;bottom:0;left:0;right:0;padding:21px 11px;background:#fff;border-top:1px solid #dbdbdb;'>
    <input type="text" id="openaiartquery" style="border:0;outline:none;width:99%;background:#f1f1f1;padding:11px 21px;padding-right:51px;border-radius:11px;" placeholder="Enter Your Query Here">
    <button onclick="openai_art()" style="border:0;outline:none;background:#06f;color:#fff;padding:10px 10px;width:10%;position:absolute;transform:scale(0.9);border-radius:11px;margin-left:-10%;">></button>
</div>