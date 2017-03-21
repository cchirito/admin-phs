<?php

	$ncdata = explode('|', $data_content);

	switch ($data_template) {
		case '1':
			echo '<section class="template01">
					<div class="row">
						<div class="col-xs-12">
							<h1>' . $ncdata[0] . '</h1>
							<p>' . $ncdata[1] . '</p>
							<a href="">' . $ncdata[2] . '</a>
						</div>
					</div>
				</section>';
			break;

		case '2':
			echo '<section class="template02">
					<div class="container">
					<div class="row">
						<div class="col-xs-3">
							<h1>' . $ncdata[0] . '</h1>
							<p>' . $ncdata[1] . '</p>
							<a href="">' . $ncdata[2] . '</a>
						</div>
						<div class="col-xs-3">
							<h1>' . $ncdata[0] . '</h1>
							<p>' . $ncdata[1] . '</p>
							<a href="">' . $ncdata[2] . '</a>
						</div>
						<div class="col-xs-3">
							<h1>' . $ncdata[0] . '</h1>
							<p>' . $ncdata[1] . '</p>
							<a href="">' . $ncdata[2] . '</a>
						</div>
						<div class="col-xs-3">
							<h1>' . $ncdata[0] . '</h1>
							<p>' . $ncdata[1] . '</p>
							<a href="">' . $ncdata[2] . '</a>
						</div>
					</div>
					</div>
				</section>';

			break;

	}   
?>
<!--
<div class="template-01">
    
</div>

<div class="template-02">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        

                
        </div>
    </div>
    </div>
</div>-->