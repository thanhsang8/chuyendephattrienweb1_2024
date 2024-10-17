<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

$pattern_uri = '/' .$pattern_document_root. '(.*)$/';

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3091">
<div class="content">
        <img src="v1-3.jpg" alt="After phone repair" class="image">
        <div class="text-content">
            <h2>After the Repair</h2>
            <p>The best way to repair your cracked screen without risking further damage to the phone is to bring it to a professional repair service. The trained technicians at Cell Phone Repair can fix your screen quickly and safely. If you walk in to a local store, common repairs can be fixed on site while you wait. If you don’t have the time to wait, or if we are a bit too busy, common repairs can be fixed on site while you wait.</p>
        </div>
    </div>

    <div class="form-container">
        <form action="#" method="post">
            <div class="row">
                <input type="text" name="name" placeholder="Name" class="input">
                <input type="email" name="email" placeholder="Email" class="input">
            </div>
            <div class="row">
                <input type="text" name="phone" placeholder="+91 1234567891" class="input">
                <select name="repair-type" class="input">
                    <option value="phone-repair">Phone repair</option>
                    <option value="phone-repair">Change broken display</option>
                    <option value="phone-repair">Repair Charger</option>
                    <option value="phone-repair">Iphone repair</option>
                </select>
            </div>
            <textarea name="message" placeholder="Message" class="input"></textarea>
        </form>
        <button type="submit" class="submit-btn">SEND MESSAGE</button>
    </div>
</div>