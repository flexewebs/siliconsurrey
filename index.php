<?php 
$tag                = "home";
$pageclass          = "page-".$tag;
$title              = "Designed Company - Ultimate Sustainable Ventures Framework";
$pagetype           = 'summary_large_image';
$pagedescription    = "Designed Company is a contemporary way to manage purposeful sustainable matriarchal businesses.";            
$cta                = "Join waiting list";

include("f/functions.php");
include("p/header.php");
include("p/navigation.php");
?>

<section class="designedcompany">   
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="graph">            
                    <div class="col col1">
                        <div class="systems aspect"><a href="#systems"><span class="label">Systems<span class="score">3</span></span></a></div>
                        <div class="innovation aspect"><a href="#innovation"><span class="label">Innovation<span class="score">4</span></span></a></div>
                    </div>
                    <div class="col col2">
                        <div class="people aspect"><a href="#people"><span class="label">People<span class="score">2</span></span></a></div>
                        <div class="purpose aspect"><a href="#purpose"><span class="label">Purpose<span class="score">1</span></span></a></div>        
                        <div class="products aspect"><a href="#products"><span class="label">Products<span class="score">5</span></span></a></div>                
                    </div>
                    <div class="col col3">
                        <div class="growth aspect"><a href="#growth"><span class="label">Growth<span class="score">7</span></span></a></div>
                        <div class="money aspect"><a href="#money"><span class="label">Money<span class="score">6</span></span></a></div>
                    </div>  
                </div>    
            </div>                
        </div>        
    </div>
</section>

<section class="purpose" id="purpose">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2>Purpose</h2>
            </div>
        </div>    
        <div class="row">
            <div class="col s12 m6">                
                <h3>Create sustainable companies.</h3>
                <p class="flow-text">Designed Company enables sustainability. It's a <u>r</u>evolutionary framework. Holistic in approach. Intentionally purpose driven. Aligned to humanity's aspirations.</p>                
            </div>
            <div class="col s12 m6">
                <p><img src="i/book_small.png" alt="Designed Company book" class="responsive-img" /></p>
                <?php include("com/mailingform.php"); ?>
            </div>
        </div>                        
    </div>
</section>

<section class="people" id="people">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2>People</h2>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">                
                <h3>Align your team. Serve your customers.</h3>
                <p class="flow-text">People are creators. They create companies. People make decisions. Healthy people thrive. Thriving people grow companies. Mental wellbeing is key. Matriarchal management matters. Collaboration is essential. Customer focus makes sense.</p>                
            </div>
            <div class="col s12 m6">
                <img src="i/jasongrant.png" alt="Jason Grant - Designed Company book author" class="responsive-img" />
            </div>
        </div>        
    </div>
</section>

<section class="systems" id="systems">
    <div class="container">
        <h2>Systems</h2>
        <h3>Optimise your systems. Improve company operations.</h3>
        <p class="flow-text">Systems enable growth. Optimal systems persist. Ecosystem thinking works. Planetary alignment is essential. Continuous optimisation works.</p>
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <?php include("com/mailingform.php"); ?>
            </div>
        </div>        
    </div>
</section>

<section class="innovation" id="innovation">
    <div class="container">
        <h2>Innovation</h2>
        <h3>Innovate your way. Create ideal solutions.</h3>
        <p class="flow-text">Innovation enables progress. True innovation works. Continuous innovation is possible. Design Thinking drives innovation. Designed Company always innovates. Innovation is natural. Innovation gets nurtured.</p>
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <?php include("com/mailingform.php"); ?>
            </div>
        </div>
    </div>
</section>

<section class="products" id="products">
    <div class="container">
        <h2>Products</h2>
        <h3>Produce progressive products. Design amazing services.</h3>
        <p class="flow-text">Design amazing products. Deliver essential services. Produce and make sense. Achieve product-market fit. Design services too. </p>
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <?php include("com/mailingform.php"); ?>
            </div>
        </div>
    </div>
</section>

<section class="money" id="money">
    <div class="container">
        <h2>Money</h2>
        <h3>Optimise company cashflow. Manage money mindfully.</h3>
        <p class="flow-text">Utilise money fully. Leverage money properly. Make money by design. Create new money. Print your own cash.</p>
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <?php include("com/mailingform.php"); ?>
            </div>
        </div>
    </div>
</section>

<section class="growth" id="growth">
    <div class="container">
        <h2>Growth</h2>
        <h3>Achieve real growth. Grow forward sustainably.</h3>
        <p class="flow-text">Design natural growth. Grow in sensible ways. Attract customers organically. Grow from within. Express experience exponentially. Sustain meaningful growth. Grow in natural ways.</p>
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <?php include("com/mailingform.php"); ?>
            </div>
        </div>
    </div>
</section>

<?php include("p/footer.php");?>