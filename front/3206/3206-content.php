<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

$pattern_uri = '/' .$pattern_document_root. '(.*)$/';

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3206">
<section class="products-section">
        <div class="header">
            <h2>Under $25</h2>
            <!-- Shop All Products Link -->
            <div class="shop-all">
                <a href="#">Shop All Products &#10132;</a> <!-- Right arrow icon -->
            </div>
        </div>

        <div class="carousel-wrapper">
            <!-- Left Arrow -->
            <button class="arrow left">&#60;</button> <!-- Left arrow -->
            
            <!-- Product Carousel -->
            <div class="products-container">
                <div class="product">
                    <img src="product-1.jpg" alt="Shield Conditioner">
                    <p class="price">$12.00 - $20.00</p>
                    <h3>Shield Conditioner</h3>
                    <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</p>

                </div>
                <div class="product">
                    <img src="product-2.jpg" alt="Perfecting Facial Oil">
                    <p class="price">$20.00</p>
                    <h3>Perfecting Facial Oil</h3>
                    <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</p>

                </div>
                <div class="product discount">
                    <span class="discount-tag">-24%</span>
                    <img src="product-3.jpg" alt="Enriched Hand & Body Wash">
                    <p class="price"><span class="old-price">$25.00</span> $19.00</p>
                    <h3>Enriched Hand & Body Wash</h3>
                    <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</p>

                </div>
                <div class="product">
                    <img src="product-4.jpg" alt="Shield Shampoo">
                    <p class="price">$45.00</p>
                    <h3>Shield Shampoo</h3>
                    <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</p>

                </div>
                <div class="product">
                    <img src="product-5.jpg" alt="Enriched Hand Wash">
                    <p class="price">$90.00</p>
                    <h3>Enriched Hand Wash</h3>
                    <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</p>

                </div>
            </div>
            
            <!-- Right Arrow -->
             <button class="arrow right">&#62;</button> <!-- Right arrow -->
        </div>
    </section>
</div>