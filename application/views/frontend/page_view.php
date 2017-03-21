<?php 
$i = 0;
foreach ($datas as $data) {

   $ncdata = explode('|', $data->content);

   echo '<div class="main-temp ' . $data->class . '">
   			<div class="row">
    			<div class="col-md-12 col-sm-12 col-xs-12">
        			<div class="x_panel">';

					$data_array = array(
						"data_content" => $data->content,
						"data_template" => $data->template_id
					);

					$this->load->view("templates", $data_array);

		
		echo '</div>
			</div>
		</div>
	</div>';
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