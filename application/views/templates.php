<?php 
foreach ($datas as $data) {
   echo $data->content;
}
switch ($page->url) {
    case 'inicio':
        echo '<!-- Banner -->
			<section id="banner">
				<h2>This is Interphase</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<ul class="actions">
					<li>
						<a href="#" class="button big">Learn More</a>
					</li>
				</ul>
			</section>';
        break;

    case 'inicio':
        echo '<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2>Consectetur adipisicing elit</h2>
						<p>Lorem ipsum dolor sit amet adipisicing elit. Delectus consequatur sed tempus.</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime molestiae.</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
						</section>
					</div>
				</div>
			</section>';

        break;

}
    

?>
<!--
<div class="template-01">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        sdsd

                
        </div>
    </div>
    </div>
</div>

<div class="template-02">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        

                
        </div>
    </div>
    </div>
</div>-->